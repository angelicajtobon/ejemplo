<!DOCTYPE html>
 <html>
   <head>
     <!--Import Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="../public/css/materialize.min.css"  media="screen,projection"/>

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>

   <body>
     <!-- Dropdown Structure -->
   <ul id="dropdown1" class="dropdown-content">
     <li><a href="#!">one</a></li>
     <li><a href="#!">two</a></li>
     <li class="divider"></li>
     <li><a href="#!">three</a></li>
   </ul>
   <nav>
   <div class="nav-wrapper">
     <a href="#!" class="brand-logo">Logo</a>
     <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
     <ul class="right hide-on-med-and-down">
       <li><a href="sass.html">Sass</a></li>
       <li><a href="badges.html">Components</a></li>
       <li><a href="collapsible.html">Javascript</a></li>
       <li><a href="mobile.html">Mobile</a></li>
     </ul>
     <ul class="side-nav" id="mobile-demo">
       <li><a href="sass.html">Sass</a></li>
       <li><a href="badges.html">Components</a></li>
       <li><a href="collapsible.html">Javascript</a></li>
       <li><a href="mobile.html">Mobile</a></li>
     </ul>
   </div>
 </nav>

  <div class="container">
    <h2 class="header deep-purple-text">Titulo</h2>
  </div>
  <div class="parallax-container">
     <div class="parallax"><img src="http://science-all.com/images/landscape/landscape-03.jpg"></div>
   </div>
   <div class="section white">
    <div class="row container">
      <h2 class="header">Parallax</h2>
      <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
    </div>
  </div>
  <div class="parallax-container">
     <div class="parallax"><img src="http://science-all.com/images/landscape/landscape-03.jpg"></div>
   </div>
     <!--Import jQuery before materialize.js-->
     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <script type="text/javascript" src="../public/js/materialize.min.js"></script>
     <script type="text/javascript">
       $(document).ready(function(){
         $(".button-collapse").sideNav();
         $('.parallax').parallax();
       });
     </script>
   </body>
 </html>
