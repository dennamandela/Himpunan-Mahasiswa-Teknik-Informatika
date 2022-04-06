
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HIMATIF STMIK JABAR - Reset Password</title>

    <!-- Custom fonts for this template-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url ('template/images/logo.png') }}"/>
    <link href="{{url('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{url('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">
    
    <style>
    .grad {
      background: linear-gradient(#5d63ed, #3193e5, #00c9db);
    }

    .gradin {
      background: #262431;
    }

    .gradout {
      background: #2f2c3d;
    }

    .font {
      color: #ffff;
      font-weight: bold;
    }

    .form-custom {

      position: relative;
      box-shadow: 1px 2px 9px rgba(0, 0, 0, .5);
      padding: 10px;
      background: white;

    }

    .head {
      background: linear-gradient(#3193e5, #ffff, #ffff);
    }

    .photo-profile-rounded {
      border-radius: 50%;
      display: block;
      margin-left: auto;
      margin-right: auto;
      border-style: solid;
      border-width: medium;
      border-color: #fff;
    }

    .btn-round {
      border-width: 1px;
      border-radius: 30px;
      text-decoration: none;
      width: 200px;
      border: none;

      background: linear-gradient(to right, #20b798 0%, #3e81c5 50%);
      color: #c4c4c4;

      padding: 10px 20px;
      box-shadow: 4px 4px 15px 2px #147dce, -4px -4px 15px 2px floralwhite;
      transition: all 0.1s;

      font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
    }

    .btn-rounded {
      border-width: 1px;
      border-radius: 30px;
      text-decoration: none;
      width: 200px;
      border: none;

      background: linear-gradient(to right, #20b798 0%, #3e81c5 50%);
      color: #c4c4c4;

      padding: 10px 20px;
      box-shadow: 4px 4px 15px 2px #147dce, -4px -4px 15px 2px floralwhite;
      transition: all 0.1s;

      font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
    }

    .btn-round:hover {
      background-color: #086fbd;
      box-shadow: 2px 2px 3px #147dce, -2px -2px 3px #0d89e9, inset 2px 2px 3px #0666af, inset -2px -2px 3px #0471c4;
    }

    .header-text {
      color: #0d2537;
      font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
      text-transform: uppercase;
    }

    @media (min-width:901px) {
      .logo-mobile {
        display: none;
      }

      .logo-web {
        display: block;
      }

      .mobile-display {
        display: none;
      }

      .pc-display {
        display: block;
      }
    }

    @media (min-width:360px) And (max-width:900px) {
      .logo-mobile {
        display: block;
      }

      .logo-web {
        display: none;
      }

      .mobile-display {
        display: block;
      }

      .pc-display {
        display: none;
      }
    }
  </style>

    
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" /> -->
    <!-- <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />  -->
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
    <style>
        .upload-section {
            opacity: 0;
            margin-top: 0px;
        }

        .photo-frame {
            height: 230px;
            width: 150px;;
        }

        .photo-frame:hover .photo-profile{
            opacity: 0.7;
        }

        .photo-frame:hover .upload-section{
            opacity: 1;
        }

        .btn.upload-section>input[type=file] {
            background: #fff;
            cursor: inherit;
            display: block;
            font-size: 100px;
            min-width: 100%;
            opacity: 0;
            outline: 0;
            text-align: right;
            height: 10px;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include ('App.layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include ('App.layouts.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @yield('content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->

    <!-- Bootstrap core JavaScript-->
    <script src="{{url('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{url ('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('assets/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{ url ('assets/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ url('assets/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{ url ('assets/js/demo/chart-pie-demo.js')}}"></script>


</body>

</html>