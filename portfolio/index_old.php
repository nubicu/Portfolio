<!DOCTYPE html>
<!--[if lte IE 9]>
<html class="ie" lang="en">
<![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en" class="pc chrome77 js"><!--<![endif]-->
<head>
  <title>Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/portfoliocss.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

  <div id="wrapper">
    <nav id="custom-bootstrap-menu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                     
            <span class="icon-bar"></span>                     
          </button>
          <a class="navbar-brand" href="#home">Robert Buzabrici-Filipescu</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#projects">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
            <li align="right" width="100px">
              <span id="clock"></span> <small>GMT</small>
              <script type="text/javascript">
                function upd_tz(){
                  var d=new Date();
                  document.cookie='tz='+escape(d.getTimezoneOffset())+";path=/";
                  return true;
                }
                upd_tz();
                obj_clock=document.getElementById("clock");
                time_h=18;
                time_m=02;
                time_s=24;
                function dig2(d){
                  return ((d<10)?"0":"")+d;
                }
                function wr_clock(){
                  obj_clock.innerHTML=dig2(time_h)+':'+dig2(time_m)+':'+dig2(time_s);
                  time_s++;
                  if (time_s>=60){
                    time_s=0;time_m++;
                    if (time_m>=60){
                      time_m=0;
                      time_h++;
                      if (time_h>=24){
                        time_h=0;
                      }
                    }
                  }
                }
                wr_clock();
                setInterval("wr_clock();",1000);
                </script>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--Below this is the home section -->
    <div class="jumbotron" id="home">
      <div class="container">
        <div class="row"><div class="col-sm-12"><h1 class="text-center">STYLISH / RESPONSIVE / UNIQUE</h1></div></div>
        <div class="row"><div class="col-sm-12"><p class="text-center">front end web development</p></div></div>
        <div class="row">
          <div class="col-sm-12 text-center" id="homeicons">
            <a class="btn iconwhite" href="https://www.linkedin.com/in/robertfilipescu/" target="blank"><i class="fa fa-linkedin fa-2x"></i></a>
            <a class="btn iconwhite" href="https://twitter.com/nubicu" target="blank"><i class="fa fa-twitter fa-2x"></i></a>
            <a class="btn iconwhite" href="https://www.instagram.com/robertfilipescuis/" target="blank"><i class="fa fa-instagram fa-2x"></i></a>
          </div><!--homeicons-->
        </div>
      </div> <!--container-->
      <div class="row" id="footerhome">
        <div class="col-xs-6"><a href="#about"><span class="glyphicon glyphicon-chevron-down arrowwhite" aria-hidden="true" id="arrow"></span></a></div>
      </div> <!--footer row-->
    </div>   <!--home section-->



    <div class="jumbotron" id="about">
      <div class="container text-center">
        <h1>About me</h1>      
        <p>I am a self taught front end web developer, originally from Romania but currently based in Sofia, Bulgaria.
           I enjoy designing and coding any kind of site or web app, so if you have a
           project or an idea you'd like to collaborate on, please don't hesistate to get in touch.
           Mainly, I work with HTML5, CSS, JavaScript.</p>
      </div>
      <div class="row" id="footerabout">
        <div class="col-xs-12">
          <a href="#projects"><span class="glyphicon glyphicon-chevron-down arrowwhite" aria-hidden="true" id="arrow"></span></a>
        </div>
      </div> <!--footer row-->
    </div> <!-- about section -->
      
    <div class="jumbotron" id="projects">
      <div class="container-fluid bg-3 text-center">    
        <h3>Portfolio</h3><br>
        <div class="row">
          <div class="col-sm-3">
            <p>Project 1</p>
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Project 1">
          </div>
          <div class="col-sm-3"> 
            <p>Project 2</p>
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Project 2">
          </div>
          <div class="col-sm-3"> 
            <p>Project 3</p>
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Project 3">
          </div>
          <div class="col-sm-3">
            <p>Project 4</p>
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Project 4">
          </div>
        </div>
      </div><br>

      <div class="container-fluid bg-3 text-center">    
        <div class="row">
          <div class="col-sm-3">
            <p>Project 5</p>
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Project 5">
          </div>
          <div class="col-sm-3"> 
            <p>Project 6</p>
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Project 6">
          </div>
          <div class="col-sm-3">
            <p>Project 7</p>
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Project 7">
          </div>
          <div class="col-sm-3">
            <p>Project 8</p>
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Project 8">
          </div>
        </div>
      </div>
      <div class="row" id="footerprojects">
        <div class="col-xs-12">
          <a href="#contact"><span class="glyphicon glyphicon-chevron-down arrowwhite" aria-hidden="true" id="arrow"></span></a>
        </div>
      </div> <!--footer row-->
    </div> <!-- projects section -->
    <br><br>

    <footer class="container-fluid text-center" id="contact">
      <h2>Contact</h2>
        <div class="row">
          <div class="col-sm-12" id="contacticons">
            <a class="btn" href="https://www.linkedin.com/in/robertfilipescu/" target="blank"><i class="fa fa-linkedin fa-5x"></i></a></a>
            <a class="btn" href="https://twitter.com/nubicu" target="blank"><i class="fa fa-twitter fa-5x"></i></a>
            <a class="btn" href="https://www.instagram.com/robertfilipescuis/" target="blank"><i class="fa fa-instagram fa-5x"></i></a>
            <a class="btn" href="#"><i class="fa fa-cc-paypal fa-5x"></i></a>
          </div>
        </div> <!-- icons -->
    </footer>
  </div> <!-- end of the wrapper container -->
</body>
</html>