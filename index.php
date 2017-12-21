<?php include('form_process.php'); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <title>CV Agnieszka Machałowska</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styl.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Aladin&subset=latin,latin-ext' rel='stylesheet' type='text/css'>		
  <link href='http://fonts.googleapis.com/css?family=Arima+Madurai&subset=latin,latin-ext' rel='stylesheet' type='text/css'>	<link href='http://fonts.googleapis.com/css?family=Asap&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</head>
<body>


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
  <div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                      
      </button> 
  </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
		  <li><a href="index.php"><i class="fa fa-home"></i></a></li>
          <li><a href="#education">Wykształcenie</a></li>
          <li><a href="#skills">Umiejętności</a></li>
		  <li><a href="#hobby">Zainteresowania</a></li>
		  <li><a href="#contactt">Kontakt</a></li>
      </ul>
    </div>
  </div>
</nav>
	

<div  class="container-fluid bg-1 text-center">
 <h1 class="margin" id="heading">Agnieszka Machałowska</h1>
 
 <img src="img/got.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Zdjęcie autor" width="350" height="400">
	
  <p class="icon">
	  <a href="cv.pdf"><i class="fa fa-user-circle"></i>CV</a>
	  <a href="https://github.com/aguuguu"><i class="fa fa-github"></i>GitHub</a>
      <a href="https://www.linkedin.com/in/agnieszka-macha%C5%82owska-01b84814a/"><i class="fa fa-linkedin-square"></i>Linkedin</a>
 </p>
</div>


<div id="education" class="container-fluid bg-2 text-center">
  <h3 class="margin">Wykształcenie</h3>
	<p><i class="fa fa-graduation-cap"></i> 02/2016-10/2017<br> Politechnika Gdańska <br>Kierunek: Automatyka i Robotyka <br> Specjalizacja: Informatyka w Systemach Sterowania</p>
	<p><i class="fa fa-graduation-cap"></i> 10/2012-02/2016<br> Politechnika Gdańska <br> Kierunek: Mechatronika <br>Specjalizacja: Mechatronika Stosowana</p>   
</div>

<div  id="skills" class="container-fluid bg-3 text-center">    
  <h3 class="margin">Umiejętności</h3><br>
  <div class="row">
    <div class="col-sm-4 col-xs-12">
      <p class="skills">Języki programowania</p>
      <img class="image" src="img/html.png" alt="HTML" title="HTML">	
      <img class="image" src="img/css.png" alt="CSS"  title="CSS">
	  <img class="image" src="img/js.png" alt="JavaScript" title="JavaScript">
	  <img class="image" src="img/php.png" alt="PHP" title="PHP">
	  <img class="image" src="img/mysql.png" alt="MySQL" title="MySQL">
	  <img class="image" src="img/C++.png" alt="C++" title="C++">
	  <img class="image" src="img/bash.png" alt="Bash" title="Bash">
	  <img class="image" src="img/perl.png" alt="Perl"  title="Perl">	
	</div>
	  
   <div class="col-sm-4 col-xs-12"> 
    <p class="skills">Narzędzia</p>
    <img class="image" src="img/visual.png" alt="Visual Studio" title="Visual Studio">
	<img class="image" src="img/dw.ico" alt="Adobe Dreamweaver" title="Adobe Photoshop">	
	<img class="image" src="img/ps.png" alt="Adobe Photoshop" title="Adobe Photoshop">	   
	<img class="image" src="img/inventor.png" alt="Autodesk Inventor" title="Autodesk Inventor">
	<img class="image" src="img/matlab.ico" alt="Matlab" title="Matlab">
    <img class="image" src="img/labview.png" alt="LabView" title="LabView" >
   </div>
	  
   <div class="col-sm-4 col-xs-12"> 
    <p class="skills">Języki obce</p>
    <img class="image" src="img/ang.ico" alt="Angielski"  title="Język angielski - B1/B2"> 
	<img class="image" src="img/niem.ico" alt="Niemiecki" title="Język niemiecki - A2/B1">
	<img class="image" src="img/hiszp.ico" alt="Hiszpański" title="Język hiszpański - A1">
  </div> 
 </div>
	
 <div class="row space">
	<div class="col-sm-6 col-xs-12">
	<p class="skills">W trakcie nauki</p>
	<img class="image" src="img/sass.png" alt="Sass"  title="Sass">
	<img class="image" src="img/jquery.png" alt="Jquery"  title="Jquery">
	<img class="image" src="img/angular.png" alt="AngularJS"  title="AngularJS">
	<img class="image" src="img/giticon.png" alt="GIT"  title="GIT">
	 </div>
	 
    <div class="col-sm-6 col-xs-12">
	<p class="skills"> Inne/Frameworki</p>
	<img class="image" src="img/prawojazdy.png" alt="Prawo jazdy kat.B"  title="Prawo jazdy kat.B">
	<img class="image" src="img/bootstrap.svg" alt="Bootstrap"  title="Bootstrap">
	</div>
 </div>	
</div>

<div  id="hobby" class="container-fluid bg-4 text-center">    
  <h3 class="margin">Zainteresowania</h3>

   <div class="row">
    <div class="col-md-4 col-sm-12 col-xs-12">
	 <img class="gallery img-rounded img-responsive" src="img/progr.png" alt="Programowanie">	
	 <p class="sign"><i class="fa fa-keyboard-o"></i> Programowanie</p>   
	</div>
	<div class="col-md-4 col-sm-12 col-xs-12">
	 <img class="gallery img-rounded img-responsive" src="img/photo.jpeg" alt="Fotografia">
	 <p class="sign"><i class="fa fa-camera-retro"></i> Fotografia</p> 
	</div>
	 <div class="col-md-4 col-sm-12 col-xs-12">
	 <img class="gallery img-rounded img-responsive" src="img/gui.jpeg" alt="Gra na gitarze">
	 <p class="sign"><i class="fa fa-music"></i> Gra na gitarze</p> 
	</div>
  </div>
  <div class="row">
   <div class="col-md-4 col-sm-12 col-xs-12">
   <img class="gallery img-rounded img-responsive" src="img/graph.jpeg" alt="Grafika">
   <p class="sign"><i class="fa fa-paint-brush"></i> Grafika</p> 
   </div>
    <div class="col-md-4 col-sm-12 col-xs-12">
	 <img class="gallery img-rounded img-responsive" src="img/robot.jpeg" alt="Robotyka">
	 <p class="sign"><i class="fa fa-android"></i> Robotyka</p> 
	</div>
	<div class="col-md-4 col-sm-12 col-xs-12">
	 <img class="gallery img-rounded img-responsive" src="img/book.jpeg" alt="Czytanie">
	 <p class="sign"><i class="fa fa-book"></i> Książki</p> 
	</div>
  </div>
	
</div>
	
	
	
<div  id="contactt" class="container-fluid bg-5 text-center">	
  <h3 class="margin">Kontakt</h3><br>
  <div class="row">
    <div class="col-md-4 col-sm-12 col-xs-12"> 
     <p class="contact"><i class="fa fa-globe"></i> Gdańsk</p>
     <p class="contact"><i class="fa fa-mobile"></i> Telefon: 789-276-323</p>
     <p class="contact"><i class="fa fa-envelope"></i> E-mail: agnieszka.machalowska@gmail.com</p>
    </div>
	  
    <div class="col-md-8 col-sm-12 col-xs-12">
     <div class="row">
      <form id="contact" class="form-group" action="" method="post">
       <div class="col-md-6 col-sm-12 col-xs-12 form-group">
		    
        <input class="form-control"  name="name" placeholder="Imie" type="text" required>
       </div>
	   <div class="col-md-6 col-sm-12 col-xs-12form-group">
		    
        <input class="form-control"  name="email" placeholder="E-mail" type="email" required>
       </div>
	 </div>
		  
	 <textarea class="form-control"  name="message" placeholder="Wiadomość" rows="5" required></textarea>
     <br>
     <div class="row">
      <div class="col-md-12 form-group">
		 
        <button class="btn pull-right" type="submit" name="submit" >Wyślij</button>
       </div>
      </div>
		 </form>
	
		 <div class="mess"><?= $a ?></div> 
    </div>
  </div>
  <br>	
	</div>
	

	
<footer class="container-fluid bg-6 text-center">
  <p>Copyright Agnieszka Machałowska</p> 
</footer>

</body>
</html>

