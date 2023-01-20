{{-- <!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StayInn.ng: Book the best Hotels in Delta State</title>
  <link rel="stylesheet" href="{{asset('style.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/bootstrap.min.css" />

 <!-- Custom fonts for this template-->
 <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
 <link
     href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
     rel="stylesheet">

 <!-- Custom styles for this template-->
 <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
 <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>


  <!-- Navigation header begins here -->

  <header>
    <img src="images/Stay.Inn Logo.png" alt="logo"/>
    <div class="menuToggle" onclick="toggleMenu();"></div>
    <ul class="navigation">
        <li><a href="#home.html" onclick="toggleMenu();">Home</a></li>
        <li><a href="#hotels" onclick="toggleMenu();">Hotels</a></li>
        <li><a href="#explore"onclick="toggleMenu();">City</a></li>
        <li><a href="{{route('register')}}"onclick="toggleMenu();">List Your Hotel</a></li>
        <li><a href="#download"onclick="toggleMenu();">Download</a></li>
        <li><a href="#contact"onclick="toggleMenu();">Contact</a></li>
    </ul>
</header>

    <!-- Navigation header ends here -->


    <script type="text/javascript">
        window.addEventListener('scroll', function(){
            const header = document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 0);

        }); 

        function toggleMenu(){
            const menuToggle = document.querySelector('.menuToggle');
            const navigation = document.querySelector('.navigation');
            menuToggle.classList.toggle('active');
            navigation.classList.toggle('active');
        }

    </script>

    
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    @yield('cont')
  
</body>

</html> --}}