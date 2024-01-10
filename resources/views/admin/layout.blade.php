<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">

  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title','Admin Panel')</title>

  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->

  <link href="{{ url('../assets_oldcode/img/favicon.png')}}" rel="icon">

  <link href="{{ url('../assets_oldcode/img/apple-touch-icon.png')}}" rel="apple-touch-icon">



  <!-- Google Fonts -->

  <link href="https://fonts.gstatic.com" rel="preconnect">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <link href="{{ url('../assets_oldcode/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <link href="{{ url('../assets_oldcode/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">

  <link href="{{ url('../assets_oldcode/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">

  <link href="{{ url('../assets_oldcode/vendor/quill/quill.snow.css')}}" rel="stylesheet">

  <link href="{{ url('../assets_oldcode/vendor/quill/quill.bubble.css')}}" rel="stylesheet">

  <link href="{{ url('../assets_oldcode/vendor/remixicon/remixicon.css')}}" rel="stylesheet">

  <link href="{{ url('../assets_oldcode/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->

  <link href="{{ url('../assets_oldcode/css/style.css')}}" rel="stylesheet">

</head>



<body>
   @yield('content')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

  <script src="{{ url('../assets_oldcode/vendor/apexcharts/apexcharts.min.js')}}"></script>

  <script src="{{ url('../assets_oldcode/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <script src="{{ url('../assets_oldcode/vendor/chart.js/chart.umd.js')}}"></script>

  <script src="{{ url('../assets_oldcode/vendor/echarts/echarts.min.js')}}"></script>

  <script src="{{ url('../assets_oldcode/vendor/quill/quill.min.js')}}"></script>

  <script src="{{ url('../assets_oldcode/vendor/simple-datatables/simple-datatables.js')}}"></script>

  <script src="{{ url('../assets_oldcode/vendor/tinymce/tinymce.min.js')}}"></script>

  <script src="{{ url('../assets_oldcode/vendor/php-email-form/validate.js')}}"></script>


  <!-- Template Main JS File -->

  <script src="{{ url('../assets_oldcode/js/main.js')}}"></script>

</body>

</html>