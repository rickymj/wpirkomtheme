<?php /* Template Name: Blog template */ ?>
<?php get_header(); ?>
<!--end menu header -->
<div class="container text-center">
    <div class="jumbotron blog-header">
        <h1>Berbagi Cerita</h1>
        <p class="lead">Kami berbagi cerita seputar pengalaman coding, teknologi, kesehatan, tips and trik.</p>
        <p class="lead">Silahkan tekan tombol dibawah ini untuk melihat daftar cerita</p>
        <p><a class="btn btn-lg btn-success" href="#stories" role="button">Blog</a>
        </p>
    </div>
</div>

<div id="stories" class="section-blog">
    <div class="container bs-doc-container">
        <div class="row">

            <div class="col-md-9" role="main">
                <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>

                <div class="col-md-12">
                    <?php get_template_part( 'content', get_post_format()); ?>
                </div>
                <?php endwhile; ?>

                <?php else : ?>
                <p>
                    <?php __( 'No Posts Found'); ?>
                </p>
                <?php endif; ?>
            </div>

            <div class="col-md-3" role="complementary">

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
