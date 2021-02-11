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

  <!-- Bootstrap CSS -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <!-- Libraries CSS -->
  <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Stylesheet  -->
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
  

<!-- main container -->
  <main id="main">

    <br><br><br>
    <section id="services" class="section-bg">
      <div class="container">

      @if(count($errors) >0 )
      <div class="alert alert-danger">
      <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
      </ul>
      </div>
      @endif

      <!-- @if(session()->has('message'))
      <div class="alert alert-success">
        {{ session()->get('message')}}
        </div>
      @endif -->

        <header class="section-header">
        
          <h3>Application Form For Software Engineer</h3>
          <p>(On Contract Basis)- Open University Of Sri Lanka</p>
        </header>

        <div class="row">


          <div class="container">

<!-- form -->
  <form method="post" action="{{ route('save') }}">
  {{ csrf_field() }}


    <p>Required Feildes indicated with<span style="color:#ff0000">*</span></p>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="first">Surname<span style="color:#ff0000">*</span></label>
          <input type="text" class="form-control" placeholder="" name="surname" required="">
        </div>
      </div>


      <div class="col-md-6">
        <div class="form-group">
          <label for="last">First Name(s)<span style="color:#ff0000">*</span></label>
          <input type="text" class="form-control" placeholder="" name="firstname" required="">
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="company">National ID NO<span style="color:#ff0000">*</span></label>
          <input type="text" class="form-control" placeholder="" name="nic" required="">
        </div>
      </div>
    

      <div class="col-md-6">
        <div class="form-group">
          <label for="phone">Mobile Number<span style="color:#ff0000">*</span></label>
          <input type="tel" class="form-control" name="mobile" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask name="mobile" placeholder="" required="">
        </div>
      </div>
    </div>
    


    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label for="email">Email address<span style="color:#ff0000">*</span></label>
          <input type="email" class="form-control" name="email" placeholder="" required="" >
        </div>
      </div>
     
    </div>
  


    <div class="row">
      <div class="col-md-12">
      </div>
    </div>
<br>
    <div class="row">
      <div class="col-md-12">
      </div>
    </div>

    

<div class="form-group">
    <label for="">Education Quaification<span style="color:#ff0000">*</span></label>

    <br>
    <p>Enter Your Degree/Diploma/Certificate Title , Class (1st, 2nd Upper, 2nd Lower, General Pass) , Name of the University and Graduated Year.<br>
ex: BSc in Computer Science- 1St Class- University of Moratuwa- 2020  </p>

    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          
          <textarea name="qualification" class="form-control" placeholder="Enter Your qualification here " rows="5" required=""></textarea>
        </div>
      </div>
    </div>

<br>
</div>

<div class="form-group">
    <label for="">Work Experience<span style="color:#ff0000">*</span></label>
    <br>
    <p>Enter Your Company Name, Your Designation,and Work Period (From date to date).<br>
ex: Company Name - Software Engineer- 2017 to 2020  </p>


    
      <div class="row">
      <div class="col-md-12">
        <div class="form-group">
         
        <textarea name="experience" class="form-control" placeholder="Enter Your qualification here " rows="5" required=""></textarea>
        </div>
      </div>

     
    </div>

<br>
</div>

    <p><label for="newsletter">I hereby declare that all the details mentioned above are true and correct.</label>
    <div class="checkbox">

      <label>
        <input type="checkbox" value="Yes" id="newsletter"> Agree
      </label>
    </div></p>


    <button type="submit" class="btn btn-primary">Submit</button>
 

</form>
</div>
        </div>

      </div>
    </section>

  </main>

<!-- footer   -->
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
  
  <!--JavaScript  -->
  <script src="{{asset('contactform/contactform.js')}}"></script>

  <!-- Javascript -->
  <script src="{{asset('js/main.js')}}"></script>
</body>
</html>

