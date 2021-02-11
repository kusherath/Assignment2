      <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Open University of Sri Lanka</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS  -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <!-- Libraries CSS -->
  <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!--Stylesheet  -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>


<body>

 
  <!-- Header -->
 
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-xl-left">
        <a href="" class="scrollto"><img src="{{asset('img/ousll2.png')}}" alt="Responsive image" class="img-fluid"></a>
      </div>
    </div>
  </header>
  <main id="main">

    <br><br><br>
    <section id="services" class="section-bg">
      <div class="container">

      

      @if(session()->has('message'))
      <div class="alert alert-success">
        {{ session()->get('message')}}
        </div>
      @endif

        <header class="section-header">
        
          <h3>Application Form For Software Engineer</h3>
          <p>(On Contract Basis)- Open University Of Sri Lanka</p>
        </header>
        <div class="alert alert-success" role="alert">
<h5>Your Application Record has been created Successfully..!!</h5>
    </div>
<br>
<button type="button" class="btn btn-success"><a href="{{ route('create') }}">Add another Application</a></button>
<!-- <button type="submit" class="btn btn-danger">Delete Your Application</button> -->




<br><br><br><br><br><br><br><br><br><br><br><br>
    </section>
    </main>

    <!-- footer -->
    <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Open Universiy of Sri Lanka</strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  

  <!-- JavaScript Libraries -->
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('lib/mobile-nav/mobile-nav.js')}}"></script>
  <script src="{{asset('lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>
  
  <!--  JavaScript  -->
  <script src="{{asset('contactform/contactform.js')}}"></script>

  <!--  Main Javascript  -->
  <script src="{{asset('js/main.js')}}"></script>

    </body>
    </html>