<div class="top-bar">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="col-sm-1 col-xs-1">
          <i class="fa fa-envelope inline-fa"></i>
        </div>
        <div class="col-sm-9 col-xs-10">
          <p><a href="mailto:info@example.com"></a>info@example.com </p>
        </div>
      </div>
      <div class="col-sm-3">
          <div class="col-sm-1 col-xs-1">
            <i class="fa fa-phone inline-fa"></i>
          </div>
          <div class="col-sm-9 col-xs-9">
            <p>Call : +91 00000 00000</p>
          </div>
      </div>
      <!-- <div class="col-sm-3">
        <div class="col-sm-1">
          <i class="fa fa-clock inline-fa"></i>
        </div>
        <div class="col-sm-9">
          <p>24&#x2717;7 Availability</p>
        </div>
      </div> -->
      <div class="col-sm-3 col-sm-offset-3 col-xs-6 social-icon">
        <!-- <a href="https://www.facebook.com/CardiologistNaviMumbai" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/drmaheshghogare" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="https://plus.google.com/103919679234085505337" target="_blank"><i class="fa fa-google-plus"></i></a> -->
        <div class="col-sm-1 col-xs-1">
          <i class="fa fa-clock-o inline-fa"></i>
        </div>
        <div class="col-sm-9 col-xs-9">
          <p>Open Hours : 24*7</p>
        </div>
      </div>
    </div>
  </div>
</div>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">
      <!-- <img src="myimages/drlogo.png" alt="Dr. Pooja Vijay Multani" class="img-responsive"> -->
      <h3>Dr. Pooja Vijay Multani</h3>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right mt-6">
        <li><a href="index.php">Home</a></li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="about.php">About Doctor</a></li>
                <li><a href="profile.php">Academic Profile</a></li>
                <li><a href="publications.php">Publications</a></li>
                <li><a href="papers-and-posters.php">Papers and Posters in CSI</a></li>
                <li><a href="experience.php">Experience</a></li>
            </ul>
        </li>
        <li><a href="services.php">Services</a></li>
        <li><a href="" target="_blank">Blog</a></li>

        <li><a href="contact.php">Contact</a></li>
        <li><button type="button" class="btn btn-info btn-lg btn-theme" data-toggle="modal" data-target="#myModal">Appointment</button> </li>
      </ul>

    </div>
  </div>
</nav>
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Reach us at any time !</h4>
      </div>
      <div class="modal-body">
        <form class="ctform" action="#" method="post">
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name*" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Your Email ID*" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <input type="text" name="phone" class="form-control" placeholder="Your Contact No.">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <textarea name="message" rows="4" cols="30" class="form-control" placeholder="Please write your query*" required></textarea>
              </div>
            </div>
          </div>

          <div class="form-group" style="text-align:center;">
            <input type="submit" name="submit" class="btn contact-btn" value="Submit">
          </div>
        </form>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>
