<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" type="text/css">

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'>
<title>Location de voitures</title>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</head>

<body>
<div id="container">
<nav id="menutop">
<ul>
<a href="index.php"><li>Accueil</li></a>
<a href="Presentation.php"><li>Presentation</li></a>
<a href="Vehicules.php"><li>Vehicules</li></a>
<a href="Services.php"><li>Services</li></a>
<a href="Contact.php"><li>Contact</li></a>
</ul>
</nav>
<div id="slider">
<div id="sld">
<!-------------------*************************------------------------------>

    <script type="text/javascript" src="slider/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="slider/js/jssor.slider.mini.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideoTransitions = [
              [{b:5500.0,d:3000.0,o:-1.0,r:240.0,e:{r:2.0}}],
              [{b:-1.0,d:1.0,o:-1.0,r:-180.0,sX:9.0,sY:9.0},{b:2000.0,d:1000.0,o:1.0,r:180.0,sX:-9.0,sY:-9.0,e:{r:2.0,sX:2.0,sY:2.0}}],
              [{b:-1.0,d:1.0,o:-1.0},{b:3000.0,d:2000.0,y:180.0,o:1.0,e:{y:16.0}}],
              [{b:-1.0,d:1.0,o:-1.0,r:-150.0},{b:7500.0,d:1600.0,o:1.0,r:150.0,e:{r:3.0}}],
              [{b:10000.0,d:2000.0,x:-379.0,e:{x:7.0}}],
              [{b:10000.0,d:2000.0,x:-379.0,e:{x:7.0}}],
              [{b:-1.0,d:1.0,o:-1.0,r:288.0,sX:9.0,sY:9.0},{b:9100.0,d:900.0,x:-1400.0,y:-660.0,o:1.0,r:-288.0,sX:-9.0,sY:-9.0,e:{r:6.0}},{b:10000.0,d:1600.0,x:-200.0,o:-1.0,e:{x:16.0}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <style>
        
        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('slider/img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>
    
 <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('slider/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="slider/img/red.jpg" height="1000" />
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="slider/img/purple.jpg" />
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="slider/img/blue.jpg" />
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="slider/img/slide4.jpg" />
            </div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:650px;width:40px;height:58px;" data-autocenter="2"></span>
        <a href="http://www.jssor.com" style="display:none">Bootstrap Carousel</a>
    </div>

   
<!--------------------------------------------------------------------------->
</div>
<div id="Prixform">
<h3>LOCATION DE VOITURE</h3>

<table width="100%"  id="table1">
 <form>
  <tbody>
    <tr>
      <td colspan="4">
      Pick-up Location<br>
      <input type="text"  placeholder="City,State or Airport code" name="location">
      </td>
    </tr>
    <tr>
      <td class="widthtd">Pick-up Date And Time<br>   <input type="date"  placeholder="dd/mm/yyyy" name="date"></td>
      <td class="widthinput"><br><input type="time"  placeholder="--/--" name="time" ></td>
      <td class="widthtd" >Return Date And Time<br>   <input type="date"  placeholder="dd/mm/yyyy" name="date"></td>
      <td  class="widthinput"><br><input type="time"  placeholder="--/--" name="time"  ></td>
    </tr>
    <tr>
      <td colspan="4"><input type="submit" value="Get A Quote Now" id="btnsubmit1"></td>
      
    </tr>
  </tbody>
  </form>
</table>

</div>
</div>
<section>
<div id="divart">
<h2>OFFRES SPECIALES</h2>
    <!--*********************************************-->
    <?php include_once("model/Config.cls.php");
    $base=new Connection();
    $connect=$base->connect();
    $rep=$connect->query("select * from voiture ORDER BY id DESC limit 4 ");
    while($ligne=$rep->fetch()){?>
        <article>
            <img src="admin/image/vehicules/<?php echo $ligne["image"];?>" alt="voiture">
            <h4><?php echo $ligne["types"];?></h4>
            <p><?php echo $ligne["marque"];?></p>
            <span><img src="image/personnes.png" alt="pers"><?php echo $ligne["nbpersonne"];?></span>
            <span><img src="image/bagage.png" alt="bag"><?php echo $ligne["bagage"];?></span>
            <span><img src="image/portes.png" alt="port"><?php echo $ligne["portes"];?></span>
            <span><img src="image/boite.png" alt="boite"><?php echo $ligne["boite"];?></span>
        </article>
        <?php
    }
    ?>
</div>
</section>

<footer>
<nav id="menubuttom">
<ul>
<a href="index.php"><li>Accueil</li></a>
<a href="Presentation.php"><li>Presentation</li></a>
<a href="Vehicules.php"><li>Vehicules</li></a>
<a href="Services.php"><li>Services</li></a>
<a href="Contact.php"><li>Contact</li></a>
</ul>
</nav>
<h5>COPYRIGHT@2015.REVOLUTION TECH</h5></footer>
<span id="ligne1"></span>
</div>
</body>
</html>
