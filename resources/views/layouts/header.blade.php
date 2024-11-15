<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extreme</title>
</head>
<body>   
<!--header-->
<header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>Extreme </em>Spoken English</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1">Home</a></li>
        <li class="has-submenu"><a href="#section2">About Us</a>
          <ul class="sub-menu">
            <li><a href="#section2">Who we are?</a></li>
            <li><a href="#section3">What we do?</a></li>
            <li><a href="#section3">How it works?</a></li>
            <li><a href="#" rel="sponsored" class="external">External URL</a></li>
          </ul>
        </li>
        <li><a href="{{ url('/courses') }}">Courses</a></li>
        
 <!-- Updated to link to course.blade.php -->
        <li><a href="#section6">Contact</a></li>
        <li><a href="#" class="external">External</a></li>
      </ul>
    </nav>
  </header>
</body>
</html>  
