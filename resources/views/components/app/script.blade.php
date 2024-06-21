    {{-- <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    <script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
    {{-- ajax file --}}
    <script src="{{asset('assets/js/custom_files/script.js')}}"></script>

    <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
    {{-- ckeditor --}}
    <script src="{{asset('assets/js/custom_files/ckeditor.js')}}"></script>
    <script src="{{asset('assets/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/js/daterangepicker.min.js')}}"></script>

    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>

    <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/slick.js')}}"></script>

    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>

    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>

    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>

    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

    <script src="{{asset('assets/js/jquery.marquee.min.js')}}"></script>

    <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>

    <script src="{{asset('assets/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.fancybox.min.js')}}"></script>



    <script src="{{asset('assets/js/custom.js')}}"></script>

    <script>
        ///////////////////////toast script
    document.addEventListener('DOMContentLoaded', function() {
        var toastElement = document.getElementById('liveToast');
        var toast = new bootstrap.Toast(toastElement);
        toast.show();
        setTimeout(function() {
            toast.hide();
        }, 2000);
    });
    </script>