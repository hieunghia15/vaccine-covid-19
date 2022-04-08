<!DOCTYPE html>
<html lang="en">

<head>
    @include('guest.layout.head', ['title' => __($title ?? 'Tiêm chủng vắc xin Covid-19')])
</head>

<body class="scroll_bar_style_one">
    <div class="page_wapper">
        <header class="header_v1">                
            @include('guest.layout.header')
        <header>          
            <main class="main-content">
                @yield('main')
            </main>
            @include('guest.layout.scroll-to-top')
            @include('guest.layout.footer')
            @include('guest.layout.mobile-menu')
    </div>

    <!-----------------------------------script--------------------------->
    <script src="{{asset('citizen/assets/js/all.js')}}"></script>
    <script src="{{asset('citizen/assets/js/custom.js')}}"></script>
    <!-----------------------------------script-------------------
      <script src="assets/js/jquery.js "></script>
      <script src="assets/js/popper.min.js "></script>
      <script src="assets/js/bootstrap.min.js "></script>
      <script src="assets/js/bsnav.min.js "></script>
      <script src="assets/js/jquery-ui.js "></script>
      <script src="assets/js/wow.js "></script>
      <script src="assets/js/owl.js "></script>
      <script src="assets/js/jquery.fancybox.js "></script>
      <script src="assets/js/TweenMax.min.js "></script>
      <script src="assets/js/appear.js "></script>
      <script src="assets/js/moment.js "></script>
      <script src="assets/js/odometer.min.js "></script>
      <script src="assets/js/pagenav.js "></script>
      <script src="assets/js/custom.js "></script>------------------->
</body>

</html>
