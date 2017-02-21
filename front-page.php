<?php /* Template Name: home template */ ?>
<?php get_header(); ?>
  <!-- carousel page -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="first-slide img-responsive" src="<?php bloginfo('template_url'); ?>/img/first-slide.jpeg" alt="First slide">
        <div class="container">
          <div class="carousel-caption irkom-caption">
            <h1>Personal Website and Blog</h1>
            <hr>
            <p>Simple personal webiste to share and remember experienced</p>
          </div>
        </div>
      </div>
      <div class="item">
        <img class="second-slide img-responsive" src="<?php bloginfo('template_url'); ?>/img/second-slide.jpg" alt="Second slide">
        <div class="container">
          <div class="carousel-caption irkom-caption">
            <h1>Learning by Practicing </h1>
            <hr>
            <p>Simple blog to improve your skills. easy to practiced and source code provided</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="icon-next"></span>
    </a>
  </div>
  <!-- end carousel page -->

  <!-- section a -->
  <div class="section-motto">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span class="bootstrap-icons">B</span>
          <h3>Modern Blog</h3>
          <p>Modern layout dan responsive karena dikembangkan oleh framework Bootstrap.</p>
        </div>
        <div class="col-md-4">
          <span class="bootstrap-icons">K</span>
          <h3>Transfer Knowledge</h3>
          <p>Berbagi pengetahuan seputar pemrograman, teknologi, gadget, tips-tips dan kesehatan.</p>
        </div>
        <div class="col-md-4">
          <span class="bootstrap-icons">D</span>
          <h3>Open Discussion</h3>
          <p>Menerima diskusi terbuka serta siap membantu untuk memecahkan kesulitan tentang pemrograman </p>
        </div>
      </div>
    </div>
  </div>
  <!-- end section b-->

<?php get_footer(); ?>
