<?php /* Template Name: Blog template */ ?>
<?php get_header(); ?>
<!--end menu header -->
<div class="container text-center">
  <div class="jumbotron blog-header">
     <h1>Berbagi Cerita</h1>
     <p class="lead">Kami berbagi cerita seputar pengalaman coding, teknologi, kesehatan, tips and trik.</p>
     <p class="lead">Silahkan tekan tombol dibawah ini untuk melihat daftar cerita</p>
     <p><a class="btn btn-lg btn-success" href="#stories" role="button">Blog</a></p>
  </div>
</div>

  <div id="stories" class="section-blog">
    <div class="container bs-doc-container">
      <div class="row">

        <div class="col-md-9" role="main">

          <div class="col-lg-6 col-md-3">
            <div class="thumbnail">
              <img data-src="holder.js/400x250/auto/#771:#100" alt="First slide">
                <h3>First Product </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis elit odio. Sed eu convallis orci, nec pharetra dui. Proin non purus non elit vestibulum fringilla. Pellentesque consectetur ligula at metus facilisis, in efficitur felis viverra. Sed vitae convallis nunc.</p>
                <a class="btn btn-info" href="#" role="button">View details »</a>
                  <div class="card-author">
                    <img style="background-image:url(http://placekitten.com/g/400/200)" class="card-author-circle">
                    Writer
                  </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-3">
            <div class="thumbnail">
              <?php if(have_posts()) : ?>
                  <?php while(have_posts()) : the_post(); ?>
                    <?php get_template_part('content', get_post_format()); ?>
                <?php endwhile; ?>
              <?php else : ?>
                <p><?php __('No Posts Found'); ?></p>
              <?php endif; ?>
            </div>
          </div>

        </div>
        <div class="col-md-3" role="complementary">
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
