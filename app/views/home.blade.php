<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Blasting off with Bootstrap </title>
    
    <!-- Bootstrap -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css'); }}" rel="stylesheet">
    <link href="{{ asset('main.css') }}" rel="stylesheet">
    
  </head>
  <body>
      <div class="navbar navbar-default navbar-static-top">
          <div class="container">
<!--            <div class='col-md-12'>-->
                <a href="/" class="navbar-brand">Blasting off with Bootstrap</a>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="tickets.html">Tickets</a></li>
                    <li><a href="stations.html">Stations</a></li>
                    <li><a href="about.html">About</a></li>
                </ul>
<!--            </div>  -->            
          </div>
      </div>      
    <div class="container">
          <div class="row well well-lg">
            <div class='col-md-6'>
                <h2>The fastest Way to Space</h2>
                <p class="lead">Make your way to space in the comfort of you own rocket, elevator of transporter.</p>

                <button type="button" class="btn btn-lg btn-default">Take the Tour</button> 
                <button type="button" class="btn btn-lg btn-primary">Book Tickets Now</button>            
            </div>  

            <div class='col-md-6 hidden-sm hidden-xs visible-lg visible-md'>
                <img src="{{ asset('img/barEncabezado.jpg'); }}" alt="Blasting Off" width="540px"/>
            </div>              
          </div>
  
          <div class="row text-center feature">
            <div class="col-md-4 col-xs-10 col-xs-offset-1 col-sm-offset-0">
                <i class="glyphicon glyphicon-briefcase"></i>
                <h3>Book Today!</h3>
                <p>Event if you're traveling tomorrow, you can still get tickets today. We have a 
                number of conveniently located ports around the globe to service everyone.</p>              
            </div>

            <div class="col-md-4 col-xs-6">
                <li class="glyphicon glyphicon-random"></li>
                <h3>Go Anywhere</h3>
                <p>If you need to get to space today, why no try out a transporter? Despite the claims,
                there are have been no deaths in the last 6 weeks!</p>
            </div>
          
            <div class="col-md-4 col-xs-6">
                <li class="glyphicon glyphicon-send"></li>
                <h3>RocketBus&reg;</h3>
                <p>For cheapest fares, catch the next RocketBus&reg; to the starts. Cheaper on your wallet,
                and easiest way to make friends.</p>                          
            </div>              
          </div>

      </div>
      
      <div class="footer cs-footer">
          <div class="container">
              <div class="row">
                  <div class="col-md-3 col-sm-4 col-xs-6">
                    <h4>Who we are</h4>
                    <p><i>Blasting of with bootsrap</i> is faster way to space. <a href="tickets.html">Book your ticket to day</a>!</p>
                    <p><a href="about.html">More About As</a></p>                      
                  </div>

                  <div class="col-md-offset-1 col-sm-2 col-xs-6">
                    <h4>Links</h4>
                    <ul class="list-unstyled">
                          <li><a href="index.html">Home</a></li>
                          <li><a href="tickets.html">Tickets</a></li>
                          <li><a href="stations.html">Stations</a></li>
                    </ul>                      
                  </div>
                  <div class="clearfix visible-xs"></div>
                  <div class="col-sm-2 col-xs-6">
                    <h4>Stay in Touch</h4>
                    <ul class="list-unstyled">
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="http://twitter.com/note">Twitter</a></li>
                        <li><a href="http://facebook.com/note">Facebook</a></li>
                    </ul>                      
                  </div>                  
                  <div class="col-md-3 col-md-offset-1 col-sm-4 col-xs-6">
                    <h4>Contact Us</h4>
                    <ul class="list-unstyled">
                        <li><i class="glyphicon glyphicon-globe"></i> Yadira, SA</li>
                        <li><i class="glyphicon glyphicon-phone"></i> 1-555-blast-of</li>
                        <li><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:blastingoff@codeschool.com">blastingoff@codeschool.com</a></li>
                    </ul>
                    <p>Blasting Off With Boostrap &COPY;2015</p>                      
                  </div>                  
                  
              </div>
          </div>
      </div>
       
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>    
  </body>
</html>
