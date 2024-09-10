<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <!-- Dynamic Meta Tags -->
    <meta name="description" content="@yield('meta_description', 'Default Description')">
    <meta name="keywords" content="@yield('meta_keywords', 'Default Keywords')">
    <meta name="author" content="@yield('meta_author', 'Awaiken')">
    <!-- Page Title -->
    <title>@yield('title', 'Scout')</title>
     <!-- Self-referencing canonical tag -->
     <link rel="canonical" href="{{ url()->current() }}" />
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Bootstrap Css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="{{ asset('css/slicknav.min.css') }}" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <!-- Font Awesome Icon Css -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
   <!-- Main Custom Css -->
	<link href="{{asset('css/custom.css')}}" rel="stylesheet" media="screen">

    @yield('styles')

     <!-- header css -->
     <link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}">
     <!-- footer css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">

</head>
<body>

    <div class="gredient">

    @include('header')

    <div class="content">
        @yield('content')
    </div>

    @include('footer')


 
<script>
    
function toggleVisibility(event, id) {
    event.preventDefault();
    
    const element = document.getElementById(id);
    const arrow = event.currentTarget.querySelector('.arrow');

    console.log(`Toggling visibility for: ${id}`); // Debugging
    
    // Check the current display state
    if (window.getComputedStyle(element).display === "none") {
        // Show the dropdown
        element.style.setProperty("display", "block", "important"); // Force display block
        arrow.innerHTML = "&#9660;"; // Downward arrow
    } else {
        // Hide the dropdown
        element.style.setProperty("display", "none", "important"); // Force display none
        arrow.innerHTML = "&#9654;"; // Right-pointing arrow
    }
}

</script>
          
           
<!-- Scripts -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<!-- Jquery Library File -->
<script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
<!-- Bootstrap js file -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Validator js file -->
<script src="{{asset('js/validator.min.js')}}"></script>
<!-- SlickNav js file -->
<script src="{{asset('js/jquery.slicknav.js')}}"></script>
<!-- Swiper js file -->
<script src="{{asset('js/swiper-bundle.min.js')}}"></script>
<!-- Counter js file -->
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<!-- Isotop js file -->
<script src="{{asset('js/isotope.min.js')}}"></script>
<!-- Magnific js file -->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<!-- SmoothScroll -->
<script src="{{asset('js/SmoothScroll.js')}}"></script>
<!-- MagicCursor js file -->
<script src="{{asset('js/gsap.min.js')}}"></script>
<script src="{{asset('js/magiccursor.js')}}"></script>
<!-- Text Effect js file -->
<script src="{{asset('js/SplitText.js')}}"></script>
<script src="{{asset('js/ScrollTrigger.min.js')}}"></script>
<!-- Wow js file -->
<script src="{{asset('js/wow.js')}}"></script>
<!-- Main Custom js file -->
<script src="{{asset('js/function.js')}}"></script>
</body>
</html>
