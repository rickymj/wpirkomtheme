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
            <p>We have something to share and remember everything</p>
          </div>
        </div>
      </div>
      <div class="item">
        <img class="second-slide img-responsive" src="<?php bloginfo('template_url'); ?>/img/second-slide.jpg" alt="Second slide">
        <div class="container">
          <div class="carousel-caption irkom-caption">
            <h1>Learning by Doing </h1>
            <hr>
            <p>Simple blog and website to share knowledge and information</p>
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

  <div class="page-header text-center">
    <h2>Blogs</h2>
  </div>

  <div class="section-blog">
    <div class="container">
      <?php if(have_posts()) : ?>
      <div class="row">
        <?php while(have_posts()) : the_post(); ?>
          <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="panel panel-primary">
                  <!-- Default panel contents -->
              <div class="panel-heading"><?php the_title(); ?></div>
              <?php if(has_post_thumbnail()) : ?>
                <div class="irkom-post-thumbnails">
                  <?php the_post_thumbnail(); ?>
                </div>
                <?php else : ?>
                  <img data-src="holder.js/350x263/auto/#771:#100" alt="First slide">
              <?php  endif; ?>

              <div class="panel-body">
                <p><?php the_excerpt(); ?></p>
                <a class="btn btn-info" href="<?php the_permalink(); ?>" role="button">Read more »</a>
              </div>
              <div class="panel-footer text-left">
               <img style="background-image:url(http://placekitten.com/g/400/200)" class="card-author-circle">
                  <?php the_author(); ?> | <?php the_time('F j, Y g:i a'); ?>
             </div>
            </div>
          </div>

        <?php endwhile; ?>
      </div>
      <?php else: ?>
      <p><?php __('No Posts found'); ?></p>
    <?php endif; ?>
    </div>
  </div>

<?php get_footer(); ?>
