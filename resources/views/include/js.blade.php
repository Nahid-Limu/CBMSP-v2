<!-- Vendor JS Files -->
{{-- <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script> --}}

<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
{{-- <script src="assets/js/main.js"></script> --}}
<script src="{{ asset('assets/js/main.js') }}"></script>


<!-- JS FUNCTIONS -->
<script>

    //--flash msg php form submit
    setTimeout(function() {
      $('#successMessage').fadeOut('fast');
    }, 3000);

    //--Preview an image before Uplode
    $('.uplodeImage').change(function() {
      if (this.files && this.files[0]) {
        
        //remove hidden from imgPreview section  
        $('.imgPreview').removeAttr('hidden');

          var reader = new FileReader();
          
          reader.onload = function(e) {
              $('.imgPreview').attr('src', e.target.result);
          }

          reader.readAsDataURL(this.files[0]);
      }
    });

</script>