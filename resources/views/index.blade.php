<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StayInn.ng: Book the best Hotels in Delta State</title>
  <link rel="stylesheet" href="{{asset('style.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
  {{-- <script src="https://kit.fontawesome.com/ad1524cc6d.js" crossorigin="anonymous"> </script> --}}
  <!-- CSS only -->
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" --}}
    {{-- integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> --}}

  {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" --}}
    {{-- integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous"> --}}



   <!-- Bootstrap core CSS -->
   {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> --}}
   {{-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}



   {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"> --}}

   {{-- <link href="https://static.hotels.ng/v7/stylesheets/css/appv80.min.css?v=17.6" rel="stylesheet" /> --}}


   
       {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> --}}


       {{-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> --}}


</head>

<body>


  <!-- Navigation header begins here -->

  <nav>
    <div class="container">
      <input type="checkbox" id="check" />
      <label for="check" class="checkbtn">
        <i class="fa fa-bars"></i>
      </label>
      <label class="logo"><span>Stay.Inn</span></label>
      <ul class="ul">
        <li><a class="active" href="{{route('home')}}">Home</a></li>
        <li><a href="#hotels">Hotels</a></li>
        <li><a href="#explore">City</a></li>
        <li><a href="#download">Download</a></li>
        <li><a href="#contact">Contact</a></li>
        {{-- <li><a href="{{route('showlogin')}}">login</a></li> --}}
        <li><a href="{{route('showregister')}}">List your Hotel</a></li>
      </ul>

    </div>
  </nav>

    <!-- Navigation header ends here -->

    
  

  <main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
          <img class="bd-placeholder-img" src="images/hotel.jpg" alt="Company Logo" width="100%" height="456px">
  
          <div class="container">
            <div class="carousel-caption">
              <h1>Welcome to Stay<span>Inn</span></h1>
              <p>#1 hotel booking platform in Delta State</p>

            </div>
          </div>
        </div>
        <div class="carousel-item">
          <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
          <img class="bd-placeholder-img" src="images/hotel.jpg" alt="Company Logo" width="100%" height="456px">
          <div class="container">
            <div class="carousel-caption" style="text-align: center;" >
              <h1>Find and book your next stay in Asaba.</h1>
              <p>Search through for affordable hotels in Asaba</p>
              <p><a class="btn btn-lg btn-primary" href="#">Book Now</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
          <img class="bd-placeholder-img" src="images/hotel.jpg" alt="Company Logo" width="100%" height="456px">
          <div class="container">
            <div class="carousel-caption">
              <p>A project by ICT-YEP 2022 Beneficiaries</p>
              <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </main>


  <!-- search and date picker section -->

  <!-- <div class="container">
    <div class="mainsearch">
  
      <form class="col-12 col-lg-6 mb-0 mb-lg-0 me-lg-auto" role="search">

        <div class="position-relative mx-auto" style="max-width: 800px;">
          <input class="form-control border-4 w-100 py-3 ps-4 pe-5 mb-3" type="text"
            placeholder="Input Your Tracking Code">
          <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Track
            Package</button>
        </div>
      </form>


  </div>


  
  </div> -->

    <!-- search and date picker End section -->
      












  <!-- tracking, Sign-In and Sign-up section begins here -->

  <!-- <div class="login">
    <div class="container">
      <div class="px-3 py-2">
        <div class="container d-flex flex-wrap justify-content-center">
          <form class="col-12 col-lg-6 mb-0 mb-lg-0 me-lg-auto" role="search">

            <div class="position-relative mx-auto" style="max-width: 400px;">
              <input class="form-control border-0 w-100 py-3 ps-4 pe-5 mb-3" type="text"
                placeholder="Input Your Tracking Code">
              <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Track
                Package</button>
            </div>
          </form>


          <div class="text-end">
            <button type="button" class="btnsign me-2"><span></span>Sign-In</button>
            <button type="button" class="btnsign"><span></span>Sign-up</button>
          </div>
        </div>
      </div>
    </div>
  </div> -->


  <!-- tracking, Sign-In and Sign-up section ends here -->




  <!-- About Us Section Starts Here -->
  <!-- <div class="container">
    <div class="row">
      <div class="aboutus">
        <h1>About <span>Us</span></h1>
      </div>

      <div class="aboutdetails col-12 col-lg-6 col-m">
        <p>We are a full-service Ocean freight forwarder licensed by the FMC operating as Ocean Transportation
          Intermediary
          ("OTI"). We provide complete international freight forwarding and logistics services, including: ocean
          freight,
          air freight, customs clearance, loading and transloading, consolidations, warehousing and distribution
          (including packing and crating), cargo insurance and other value added logistics services. Our Mission is to
          retain our leadership in providing affordable & efficient service. Visit us today.</p>
      </div>

      <div class="aboutdetails col-12 col-lg-6 col-m">
        <img class="logisticimage" src="images/image (1).jpg" alt="Company Logo" width="100%">
      </div>

    </div>
  </div> -->
  <!-- About Us Section Ends Here -->

  <!-- Core Services Starts Here -->
  <div class="servicesection p-2">
    <div class="container">

      <div class="row">
        <div class="explore" id="hotels">
          <h3>Today's Hotel Deals </h3>
          <p>A selection of the best hotel deals available today</p>
        </div>
      </div>
      

      {{-- <div class="row"> --}}
        {{-- @foreach ($hotels as $hotel)
          <div class="flight col-12 col-lg-4 col-md-6 col-xl-4">
          <div class="box">
            <img src="{{asset('storage/'. $hotel->image)}}" alt="air cargo" width="100%">
            <h4>{{$hotel->name}}</h4>
            <p>{{$hotel->address}}</p>
          </div>
        </div>
        @endforeach --}}

        <div class="row p-2">
          <div class="flight col-12 col-lg-4 col-md-6 col-xl-4">
            <div class="box">
              <img src="images/image (2).jpg" alt="air cargo" width="100%">
              <h4>Pinnacle Resorts</h4>
              <p>Okpanam Road, Asaba</p>
            </div>
          </div>
  
  
          <div class="flight col-12 col-lg-4 col-md-6 col-xl-4">
            <div class="box">
              <img src="images/image (1).jpg" alt="air cargo" width="100%">
              <h4>Kelvino Hotel & Suits</h4>
              <p>Nnebisi Road, Asaba</p>
            </div>
          </div>
  
          <div class="flight col-12 col-lg-4 col-md-6 col-xl-4">
            <div class="box">
              <img src="images/image (3).jpg" alt="Road Frieght Image" width="100%">
              <h4>NikkiHandsome Villa</h4>
              <p>Okpanam Road, Asaba </p>
            </div>
          </div>     
        <!-- </div>
  
        <div class="row"> -->
          <div class="flight col-12 col-lg-4 col-md-6 col-xl-4">
            <div class="box">
              <img src="images/image (4).jpg" alt="air cargo" width="100%">
              <h4>Amaka Paradise Hotel</h4>
              <p>Okpanam Road, Asaba</p>
            </div>
          </div>
  
  
          <div class="flight col-12 col-lg-4 col-md-6 col-xl-4">
            <div class="box">
              <img src="images/image (5).jpg" alt="air cargo" width="100%">
              <h4>Merridien Holiday Resorts</h4>
              <p>Infant Jesus, Asaba</p>
            </div>
          </div>
  
          <div class="flight col-12 col-lg-4 col-md-6 col-xl-4">
            <div class="box">
              <img src="images/image (6).jpg" alt="Road Frieght Image" width="100%">
              <h4>Rex Hotel & Suits</h4>
              <p>Infant Jesus, Asaba</p>
            </div>
          </div>     
        </div>

      <div class="row">
        <div class="downloadapp">
          <button type="button" class="btnsign btn-primary btn btn-lg me-2">Others</button>
        </div>
      </div>
      


    </div>
  </div>



  <!-- Core Services Starts Here -->




<!-- Explore the city section begins here -->


<div class="exploresection">
  <div class="container">

    <div class="row p-2">
      <div class="explore" id="explore">
        <h3>Explore the City</h3>
        <p>Amazing sights of the city you can explore</p>
      </div>
    </div>

    <div class="row p-5">
      <div class="flight col-12 col-lg-4 col-md-6 col-xl-4">
        <div class="box">
          <img src="images/Explore Frame 1.jpg" alt="city" width="100%">
        </div>
      </div>


      <div class="flight col-12 col-lg-4 col-md-6 col-xl-4">
        <div class="box">
          <img src="images/Explore Frame 2.jpg" alt="city" width="100%">
        </div>
      </div>

      <div class="flight col-12 col-lg-4 col-md-6 col-xl-4">
        <div class="box">
          <img src="images/Explore Frame 3.jpg" alt="city Image" width="100%">
        </div>
      </div>     
    <!-- </div> -->

    <!-- <div class="row"> -->
      <div class="flight col-12 col-lg-4 col-md-6 col-xl-4">
        <div class="box">
          <img src="images/Explore Frame 4.jpg" alt="city" width="100%">
        </div>
      </div>


      <div class="flight col-12 col-lg-4 col-md-6 col-xl-4">
        <div class="box">
          <img src="images/Explore Frame 5.jpg" alt="city" width="100%">
        </div>
      </div>

      <div class="flight col-12 col-lg-4 col-md-6 col-xl-4">
        <div class="box">
          <img src="images/Explore Frame 6.jpg" alt="city Image" width="100%">
        </div>
      </div>     
    </div>
    </div>
</div>
<!-- Explore the city section begins here -->




<!-- Download App Section  Begins Here -->
<div class="downloadsection">
  <div class="container p-1">

        <div class="row">
          <div class="explore" id="download">
            <h3>Download The StayInn Mobile App</h3>
            <p>Available on both apple and playstore</p>
          </div>
        </div>

    <div class="row">
      <div class="downloadapp">
        <button type="button" class="btnsign btn-primary btn btn-lg me-2">Download App</button>
      </div>
    </div>

    <div class="row p-2">
      <div class="download col-12 col-lg-6 col-md-6 col-xl-6">
        <div class="box">
          <img src="images/apps.png" alt="city" width="100%">
          
        </div>
      </div>
    
      <div class="download2 col-12 col-lg-6 col-md-6 col-xl-6">
    <div class="row p-2">
      
          <h1>Get the <Span>STAY.INN</Span> App</h1>
       {{-- </div> --}}

      {{-- <div class="row"> --}}
        
            <h2>Download the <Span>STAY.INN</Span> App and book a hotel instantly</h2>
       
        {{-- </div> --}}

        {{-- <div class="row"> --}}
         
              <h3>Book your hotel instantly with our Andriod & IOS App</h3>
          
          {{-- </div> --}}
          {{-- <div class="row"> --}}
         
            <img src="images/download.png" alt="city" width="100%">
        
        </div>
    </div>
  </div>
</div>
</div>






<!-- Download App Section Ends  Here -->











  <!-- Why ship with us section -->

  <!-- bootstrap icon code  -->

  <path
    d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z" />
  <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z" />
  <!-- End bootstrap icon code  -->

<div class="container">
  <div class="row">
    <div class="col-12 col-lg-6 col-md-6 col-xl-6" style="color: rgba(40, 58, 90, 0.9);">
      <div class="whywe p-4 mx-3 my-3 mb-3">
        <h2>Why Us?</h2>
        <ul class="list-unstyled">
          <li><i class="bi bi-check2-all" style="color:  rgb(6, 173, 245);"></i> Our platform is very Reliable</li>
          <li><i class="bi bi-check2-all" style="color:  rgb(6, 173, 245);"></i> Our world is our watchword</li>
          <li><i class="bi bi-check2-all" style="color:  rgb(6, 173, 245);"></i> Our Customer service is top notch</li>
          <li><i class="bi bi-check2-all" style="color:  rgb(6, 173, 245);"></i> Fully licensed and insuranced Company</li>
          <li><i class="bi bi-check2-all" style="color:  rgb(6, 173, 245);"></i> Affordable and high quality service</li>
        </ul>

      </div>
    </div>


    <div class="col-12 col-lg-6 col-md-6 col-xl-6" style="color: rgba(40, 58, 90, 0.9);">
      <div class="contactUs p-4 mx-3 my-3" id="contact">
        <h2>Please Contact Us</h2>

        <form class="" onsubmit="sendEmail(); reset(); return false;">
          <div class="form-group mb-3">
            <label for="Name" Value="Name" class="form-label">
              <h6>Full Name:</h6>
            </label>
            <input type="text" id="name" class="form-control " value="" placeholder="Enter Full Name">
          </div>

          <div class="form-group mb-3">
            <label for="phonenumber" Value="phonenumber" class="form-label">
              <h6>Phonenumber:</h6>
            </label>
            <input type="text" id="phonenumber" class="form-control" value="" placeholder="Enter Your Mobile Number">
            <small id="emailHelp" class="form-text text-muted">We'll never share your phonenumber with anyone
              else.</small>
          </div>

          <div class="form-group mb-3">
            <label for="email" Value="email" class="form-label">
              <h6>Email:</h6>
            </label>
            <input type="email" id="email" class="form-control" value="" placeholder="Enter Your Email address">
            <small id="phonenumberHelp" class="form-text text-muted">We'll never share your email with anyone
              else.</small>
          </div>

          <div class="form-group mb-3">
            <label for="Message" Value="Message" class="form-label">
              <h6>Message:</h6>
            </label>
            <textarea id="message" class="form-control" rows="5" value=""
              placeholder="Type Your Message For Us Here"></textarea>
          </div>

          <div class="form-gtoup">
            <button type="submit">Send</button>
          </div>






        </form>



      </div>
    </div>
  </div>
  </div>








  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s"
    style="margin-top: 6rem;">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-3 col-md-6">
          <h4 class="text-light mb-4">Address</h4>
          <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Delta State Innovation Hub, Okpanam Road, Asaba</p>
          <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+234 8101649113</p>
          <p class="mb-2"><i class="fa fa-envelope me-3"></i>StayInn@gmail.org</p>
          <div class="d-flex pt-2">
            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <!-- <div class="col-lg-3 col-md-6">
          <h4 class="text-light mb-4">Services</h4>
          <a class="btn btn-link" href="">Air Freight</a>
          <a class="btn btn-link" href="">Sea Freight</a>
          <a class="btn btn-link" href="">Road Freight</a>
          <a class="btn btn-link" href="">Logistic Solutions</a>
          <a class="btn btn-link" href="">Industry solutions</a>
        </div> -->
        <div class="col-lg-3 col-md-6">
          <h4 class="text-light mb-4">Quick Links</h4>
          <a class="btn btn-link" href="#hotels">Hotels</a>
          <a class="btn btn-link" href="#explore">City Galary</a>
          <a class="btn btn-link" href="#download">Download App</a>
          <a class="btn btn-link" href="#contact">Contact</a>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="text-light mb-4">Newsletter</h4>
          <p>Please subscripe to our newsletter to recieve updats directly to you.</p>
          <div class="position-relative mx-auto" style="max-width: 400px;">
            <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        <div class="row">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            &copy; <a class="border-bottom" href="{{route('home')}}"><span>StayInn</span>Hotels</a>, All Right Reserved.
          </div>
          <div class="col-md-6 text-center text-md-end">
            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
            Designed By Team Pinnacle
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer End -->




  </div>


  <script src="js/bootstrap.min.js"></script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://smtpjs.com/v3/smtp.js"></script>
  <script>
    function sendEmail() {
      Email.send({
        Host: "smtp.elasticemail.com",
        Username: "henryisichei28@gmail.com",
        Password: "",
        To: 'henryisichei28@gmail.com',
        From: document.getElementById("name").value,
        Subject: "SafestLogistics Enguiry",
        Body: "Name:" + document.getElementById("name").value
          + "<br> Email:" + document.getElementById("email").value
          + "<br> Phone No.:" + document.getElementById("phonenumber").value
          + "<br> Messgae: " + document.getElementById("message").value
      }).then(
        message => alert(Message Sent Successfully)
      );
    }
  </script>
</body>

</html>