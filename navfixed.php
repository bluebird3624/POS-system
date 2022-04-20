 <div class="navbar navbar-inverse navbar-fixed-top">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#"><b>Venasko mini-mart</b></a>
          <div class="nav-collapse collapse">
            <ul class="nav pull-right">
              <li><a><i class="icon-user icon-large"></i><strong style="color:green;"> <?php echo $_SESSION['SESS_LAST_NAME'];?></strong></a></li>
			 <li><a> <i class="icon-calendar icon-large"></i>
								<?php
								$Today = date('y:m:d',mktime());
								$new = date('l, F d, Y', strtotime($Today));
								echo $new;
								?>

				</a></li>
              <li><a href="../index.php"><font color="red"><i class="icon-off icon-large"></i></font> Log Out</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	