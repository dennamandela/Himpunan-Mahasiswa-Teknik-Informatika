<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="HIMATIF STMIK JABAR">
  
  <meta name="author" content="himatif.stmikjabar.ac.id">

  <title>Agenda | HIMATIF STMIK JABAR</title>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ url ('template/images/logo.png') }}"/>
  
  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="{{ url ('template/plugins/themefisher-font/style.css') }}">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ url ('template/plugins/bootstrap/css/bootstrap.min.css') }}">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="{{ url ('template/plugins/lightbox2/dist/css/lightbox.min.css') }}">
  <!-- animation css -->
  <link rel="stylesheet" href="{{ url ('template/plugins/animate/animate.css') }}">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{ url ('template/plugins/slick/slick.css') }}">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ url ('template/css/style.css') }}">  

</head>

<body id="body">

 <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class='preloader'>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div> 
  <!--
  End Preloader
  ==================================== -->

<!--
Fixed Navigation
==================================== -->
<header class="navigation fixed-top">
  <div class="container">
    <!-- main nav -->
    @include('webapp.include.navbar')
    <!-- /main nav -->
  </div>
</header>
<!--
End Fixed Navigation
==================================== -->

  @yield ('content')


<!-- end footer -->

  @include ('webapp.include.footer')

    <!-- end Footer Area
    ========================================== -->
    
    <!-- 
    Essential Scripts
    =====================================-->
    <!-- Main jQuery -->
    <script src="{{ url ('template/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script  src="{{ url ('template/plugins/google-map/gmap.js') }}"></script>

    <!-- Form Validation -->
    <script src="{{ url ('template/plugins/form-validation/jquery.form.js') }}"></script> 
    <script src="{{ url ('template/plugins/form-validation/jquery.validate.min.js') }}"></script>
    
    <!-- Bootstrap4 -->
    <script src="{{ url ('template/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Parallax -->
    <script src="{{ url ('template/plugins/parallax/jquery.parallax-1.1.3.js') }}"></script>
    <!-- lightbox -->
    <script src="{{ url ('template/plugins/lightbox2/dist/js/lightbox.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ url ('template/plugins/slick/slick.min.js') }}"></script>
    <!-- filter -->
    <script src="{{ url ('template/plugins/filterizr/jquery.filterizr.min.js') }}"></script>
    <!-- Smooth Scroll js -->
    <script src="{{ url ('template/plugins/smooth-scroll/smooth-scroll.min.js') }}"></script>
    
    <!-- Custom js -->
    <script src="{{ url ('template/js/script.js') }}"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
        <script>
        $(document).ready(function () {
            
        var SITEURL = "{{ url('/') }}";
              
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
              
        var calendar = $('#calendar').fullCalendar({
            editable: true,
            events: SITEURL + "/agenda",
            displayEventTime: false,
            editable: true,
            eventRender: function (event, element, view) {
                if (event.allDay === 'true') {
                    event.allDay = true;
                } else {
                    event.allDay = false;
                }
            },
            selectable: true,
            selectHelper: true,
            });
        });
             
        function displayMessage(message) {
            toastr.success(message, 'Kegiatan');
        } 
              
        </script>
  </body>
  </html>