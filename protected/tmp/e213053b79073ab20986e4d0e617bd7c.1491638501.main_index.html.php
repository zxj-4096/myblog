<?php if(!class_exists("View", false)) exit("no direct access allowed");?>    <div class="container">
      <div class="masthead">
        <h3 class="muted">IT TEC</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="<?php echo url(array('c'=>'serialport/serial', 'a'=>'index', ));?>">SerialPort</a></li>
                <li><a href="<?php echo url(array('c'=>'video/video', 'a'=>'index', ));?>">Video</a></li>
                <li><a href="<?php echo url(array('c'=>'kmblog/km', 'a'=>'index', ));?>">KM</a></li>
                <li><a href="<?php echo url(array('c'=>'picture/pic', 'a'=>'index', ));?>">Pic</a></li>
                <li><a href="<?php echo url(array('c'=>'about/about', 'a'=>'index', ));?>">About</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- main page show -->
      <div class="jumbotron">
	      <h1>hello</h1>
        <p class="lead">To read something</p>
        <a class="btn btn-large btn-success" href="#">Get started</a>
      </div>

      <hr>

      <!-- Example row of columns -->
      <div class="row-fluid">
        <div class="span4">
          <h2>Introducte of UI</h2>
	  <p>About H5,JS and CSS.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Service</h2>
	  <p>About Web-Service and App-Service.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Server</h2>
	  <p>About Apache,tomcat,netty,nginx etc.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <div class="footer">
        <p>&copy; zxj-4096  2017</p>
      </div>

    </div> <!-- /container -->
