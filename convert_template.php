<?php
/**
 * Laravel Template Converter for NiceSchool.zip
 * Converts HTML → Blade and organizes assets.
 */

$zipFile = 'NiceSchool.zip';
$extractPath = __DIR__ . '/template_src';
$publicAssets = __DIR__ . '/public/assets';
$pagesPath = __DIR__ . '/resources/views/pages';
$layoutPath = __DIR__ . '/resources/views/layouts';
$routesFile = __DIR__ . '/routes/web.php';

if (!file_exists($zipFile)) {
    exit("❌ $zipFile not found. Please put it in your project root.\n");
}

echo "📦 Extracting $zipFile...\n";
$zip = new ZipArchive;
if ($zip->open($zipFile) === TRUE) {
    $zip->extractTo($extractPath);
    $zip->close();
} else {
    exit("❌ Failed to extract.\n");
}

// Create directories
@mkdir($publicAssets, 0777, true);
@mkdir($pagesPath, 0777, true);
@mkdir($layoutPath, 0777, true);

// Move asset folders to public/assets
$assetDirs = ['css', 'js', 'images', 'img', 'vendor', 'assets'];
foreach ($assetDirs as $dir) {
    $src = "$extractPath/$dir";
    if (is_dir($src)) {
        echo "📁 Moving $dir → public/assets/$dir\n";
        rename($src, "$publicAssets/$dir");
    }
}

// Generate app.blade.php
$layoutFile = "$layoutPath/app.blade.php";
$layoutContent = <<<BLADE
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ \$title ?? 'NiceSchool' }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
BLADE;

file_put_contents($layoutFile, $layoutContent);
echo "✅ Created layout file: $layoutFile\n";

// Convert HTML files to Blade
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($extractPath));
$routes = [];

foreach ($iterator as $file) {
    if (pathinfo($file, PATHINFO_EXTENSION) === 'html') {
        $filename = pathinfo($file, PATHINFO_FILENAME);
        $bladeFile = "$pagesPath/$filename.blade.php";

        echo "🧩 Converting $filename.html → $filename.blade.php\n";
        $html = file_get_contents($file);

        // Fix asset paths
        $html = preg_replace('/(src|href)="(.*?)"/', '$1="{{ asset(\'assets/$2\') }}"', $html);

        // Extract <body> content
        if (preg_match('/<body[^>]*>(.*?)<\/body>/is', $html, $matches)) {
            $body = trim($matches[1]);
        } else {
            $body = $html;
        }

        $blade = "@extends('layouts.app')\n\n@section('content')\n$body\n@endsection\n";
        file_put_contents($bladeFile, $blade);

        $routePath = $filename === 'index' ? '/' : "/$filename";
        $routes[] = "Route::get('$routePath', fn() => view('pages.$filename'));";
    }
}

// Write routes
$routesContent = "<?php\n\nuse Illuminate\\Support\\Facades\\Route;\n\n" . implode("\n", $routes) . "\n";
file_put_contents($routesFile, $routesContent);
echo "✅ Created routes in routes/web.php\n";

echo "\n🎉 Conversion complete! Start your server:\nphp artisan serve\n";
