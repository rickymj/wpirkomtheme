<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Custome bootstrap theme with sass</title>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/app.css">
  </head>

  <body>

    <!--menu header -->
    <nav id="header" class="navbar navbar-default navbar-fixed-top">
      <div id="header-container" class="container navbar-container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a id="brand" class="navbar-brand" href="#">IR</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://twitter.com"><i class="fa fa-twitter"></i></a></li>
            <li><a href="http://facebook.com"><i class="fa fa-facebook"></i></a></li>
            <li><a href="http://google-plus.com"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="http://linkedin.com"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!--end menu header -->

    <div class="showcase">
      <div class="container">
        <h1>first Paragraph</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
        <a href="about.html" class="btn btn-primary">Read more</a>
      </div>
    </div>

    <div class="section-a">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <i class="fa fa-html5"></i>
            <h3>Clean and Simple code</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
          </div>
          <div class="col-md-4">
            <i class="fa fa-gear"></i>
            <h3>Sass preCompiler</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
          </div>
          <div class="col-md-4">
            <i class="fa fa-lightbulb-o"></i>
            <h3>Customizable</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="section-b">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Collapsible Group Item #1
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Collapsible Group Item #2
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Collapsible Group Item #3
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <img src="<?php bloginfo('template_url'); ?>/img/cpu.jpg">
          </div>

        </div>
      </div>
    </div>

    <div class="section-c">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2>Subscribe To Our Newsletter</h2>
            <br />
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
            <hr />
            <form>
              <input type="text" class="form-control input-lg" placeholder="Enter Email">
              <br />
              <button class="btn btn-primary btn-lg btn-block">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <p>Copyright &copy; 2017 IR</p>
      </div>
    </footer>


        <script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/holder.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/irkom.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
  </body>
</html>
