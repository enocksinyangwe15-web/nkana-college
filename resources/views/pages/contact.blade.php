@extends('layouts.app')

@section('content')
<main class="main">

  <!-- Contact Form Section -->
  <div class="container form-container-overlap">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="contact-form-wrapper">
          <h2 class="text-center mb-4">Get in Touch</h2>

          <!-- AJAX Contact Form -->
          <form id="contactForm" action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="row g-3">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-with-icon">
                    <i class="bi bi-person"></i>
                    <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-with-icon">
                    <i class="bi bi-envelope"></i>
                    <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <div class="input-with-icon">
                    <i class="bi bi-text-left"></i>
                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                  </div>
                </div>
              </div>

              <div class="col-12">
                <div class="form-group">
                  <div class="input-with-icon">
                    <i class="bi bi-chat-dots message-icon"></i>
                    <textarea class="form-control" name="message" placeholder="Write Message..." style="height: 180px" required></textarea>
                  </div>
                </div>
              </div>

              <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary btn-submit">SEND MESSAGE</button>
              </div>
            </div>
          </form>

          <div id="formResponse" style="margin-top: 15px;"></div>

        </div>
      </div>
    </div>
  </div>

</main>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactForm');
    const responseBox = document.getElementById('formResponse');

  form.addEventListener('submit', async function(e) {
    e.preventDefault(); // Prevent default submission

    const formData = new FormData(form);
    responseBox.innerHTML = "<div style='color:blue;'>Sending message...</div>";

    try {
      const response = await fetch("{{ route('contact.store') }}", {
        method: "POST",
        headers: {
          "X-CSRF-TOKEN": "{{ csrf_token() }}",
          "Accept": "application/json",
          "X-Requested-With": "XMLHttpRequest"
        },
        body: formData
      });

      let data = null;
      try {
        data = await response.json();
      } catch (parseErr) {
        console.error('Invalid JSON response', parseErr);
        responseBox.innerHTML = "<div style='color:red;'>Invalid server response. Please try again.</div>";
        return;
      }

      if (response.ok && data && data.success) {
        responseBox.innerHTML = `<div style='color:green;'>${data.message}</div>`;
        form.reset();
      } else if (response.status === 422 && data && data.errors) {
        // Validation errors from Laravel
        const errors = data.errors;
        const messages = Object.values(errors).flat().map(arr => arr.join('<br>')).join('<br>');
        responseBox.innerHTML = `<div style='color:red;'>${messages}</div>`;
      } else {
        // Other errors
        const msg = (data && data.message) ? data.message : 'Failed to send message.';
        responseBox.innerHTML = `<div style='color:red;'>${msg}</div>`;
      }

    } catch(err){
      console.error(err);
      responseBox.innerHTML = "<div style='color:red;'>Server error. Please try again.</div>";
    }
  });
});
</script>
@endpush
