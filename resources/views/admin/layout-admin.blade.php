<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layout.head', ['title' => __($title ?? 'Tiêm chủng vắc xin Covid-19')])
</head>

<body>
    <div id="app">
      <div class="main-wrapper main-wrapper-1">
        @include('admin.layout.navbar')
        @include('admin.layout.sidebar')
     <!-- Main Content -->
     <div class="main-content">
        <section class="section">
            @yield('main')
        </section>
     </div>
     @include('admin.layout.footer')
    </div>
</div>
<!-- General JS Scripts -->
<script src="{{ asset('stisla/assets/modules/jquery.min.js')}}"></script>
<script src="{{ asset('stisla/assets/modules/popper.js')}}"></script>
<script src="{{ asset('stisla/assets/modules/tooltip.js')}}"></script>
<script src="{{ asset('stisla/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('stisla/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{ asset('stisla/assets/modules/moment.min.js')}}"></script>
<script src="{{ asset('stisla/assets/js/stisla.js')}}"></script>

<!-- JS Libraies -->
<script src="{{ asset('stisla/assets/modules/jquery.sparkline.min.js')}}"></script>
<script src="{{ asset('stisla/assets/modules/chart.min.js')}}"></script>
<script src="{{ asset('stisla/assets/modules/owlcarousel2/dist/owl.carousel.min.js')}}"></script>
<script src="{{ asset('stisla/assets/modules/summernote/summernote-bs4.js')}}"></script>
<script src="{{ asset('stisla/assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('stisla/assets/js/page/index.js')}}"></script>

<!-- Template JS File -->
<script src="{{ asset('stisla/assets/js/scripts.js')}}"></script>
<script src="{{ asset('stisla/assets/js/custom.js')}}"></script>
</body>
</html>