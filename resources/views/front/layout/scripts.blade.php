<!-- All Javascripts -->
<script src="{{ asset('dist-front/js/jquery-3.6.1.min.js') }}"></script>
<script src="{{ asset('dist-front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('dist-front/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('dist-front/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('dist-front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('dist-front/js/wow.min.js') }}"></script>
<script src="{{ asset('dist-front/js/select2.full.js') }}"></script>
<script src="{{ asset('dist-front/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('dist-front/js/moment.min.js') }}"></script>
<script src="{{ asset('dist-front/js/jquery.meanmenu.js') }}"></script>
<script src="{{ asset('dist-front/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('dist-front/js/iziToast.min.js') }}"></script>

<script>
    $(document).ready(function(){
        $(document).on('click', '.toggle-password', function(){
            var selector = $(this).attr("toggle");
            var passwordField = $(selector);
            var passwordFieldType = passwordField.attr('type');
            if(passwordFieldType == 'password') {
                passwordField.attr('type', 'text');
                $(this).find('i').removeClass('fa-eye-slash');
                $(this).find('i').addClass('fa-eye');
            } else {
                passwordField.attr('type', 'password');
                $(this).find('i').removeClass('fa-eye');
                $(this).find('i').addClass('fa-eye-slash');
            }
        });
    });
</script>

{{-- <script>
    $(document).ready(function(){
        $('.toggle-password').click(function(){
            $(this).toggleClass('fa-eye fa-eye-slash');
            var input = $($(this).attr('toggle'));
            if (input.attr('type') == 'password') {
                input.attr('type', 'text');
            } else {
                input.attr('type', 'password');
            }
        });
    });
</script> --}}