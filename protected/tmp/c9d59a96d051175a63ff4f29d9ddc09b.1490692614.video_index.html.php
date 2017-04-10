<?php if(!class_exists("View", false)) exit("no direct access allowed");?>    <div class="container">
      <div class="masthead">
        <h3 class="muted">IT TEC</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li><a href="<?php echo url(array('c'=>'main', 'a'=>'index', ));?>">Home</a></li>
                <li><a href="<?php echo url(array('c'=>'serialport/serial', 'a'=>'index', ));?>">SerialPort</a></li>
                <li class="active"><a href="<?php echo url(array('c'=>'video/video', 'a'=>'index', ));?>">Video</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- main page show -->
	  
      <div class="row-fluid">
		<div class="span4">
	    <video src="../../i/video/movie.ogg"  width="320" height="240" controls="controls">
		  Your browser does not support the video tag.
		</video>
		</div>
		<div class="span4">
		<h1>最新视频</h1>
        <p>To read something</p>
		</div>
      </div>
      <hr>
      <!-- Example row of columns -->
      <div class="row-fluid">
        <div class="span4">
			<video src="../../i/video/movie.ogg"  width="280" height="200" controls="controls">
				Your browser does not support the video tag.
			</video>
			<p>About Video.</p>
			<p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
			<video src="../../i/video/movie.ogg"  width="280" height="200" controls="controls">
				Your browser does not support the video tag.
			</video>
			<p>About Video.</p>
			<p><a class="btn" href="#">View details &raquo;</a></p>
		</div>
		<div class="span4">
			<video src="../../i/video/movie.ogg"  width="280" height="200" controls="controls">
				Your browser does not support the video tag.
			</video>
			<p>About Video.</p>
			<p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <div class="footer">
        <p>&copy; zxj-4096  2017</p>
      </div>

    </div> <!-- /container -->
