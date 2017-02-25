<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>CUALDOC</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- header-section-starts -->
<div class="full">
    <div class="menu">
        <ul>
            <!--El menu vertical de la izquierda-->
            <li><a class="active" href="/"><i class="home"></i></a></li>
            <li><a href="/reviews"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
            <li><a href="/contacto"><div class="cnt"><i class="contact"></i><i class="contact1"></i></div></a></li>
            <!--Termino menu vertical de la izquierda-->
        </ul>
    </div>
    <!--Menu Vertical-->
    <div class="main">

    @yield('content');

        <div class="footer">
            <h6>Curso de Taller de Integracion.-</h6>
            <p class="claim">Profesor: Claudio Castillo</p>
            <p class="claim">Integrantes: </p>
            <p class="claim">Cristian Luco R.</p>
            <p class="claim">Ricardo Carcamo</p>
            <div class="copyright">
                <p> Template by  <a href="http://w3layouts.com">  W3layouts</a></p>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(window).load(function() {

        $("#flexiselDemo1").flexisel({
            visibleItems: 6,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: false,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 2
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 3
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 4
                }
            }
        });
    });
</script>

<script type="text/javascript">
    $(window).load(function() {

        $("#flexiselDemo2").flexisel({
            visibleItems: 4,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: false,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 2
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 3
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 3
                }
            }
        });
    });
</script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>


<div class="clearfix"></div>
</body>
</html>