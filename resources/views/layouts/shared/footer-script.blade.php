<!-- Vendor js -->
<script src="{{asset('html/dist')}}/assets/js/vendor.min.js"></script>

<!-- optional plugins -->
<script src="{{asset('html/dist')}}/assets/libs/moment/moment.min.js"></script>
<script src="{{asset('html/dist')}}/assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="{{asset('html/dist')}}/assets/libs/flatpickr/flatpickr.min.js"></script>

<!-- page js -->
<script src="{{asset('html/dist')}}/assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="{{asset('html/dist')}}/assets/js/app.min.js"></script>

<!-- Additional plugins -->
@yield('script')

<!-- Own plugins -->
@yield('script-bottom')