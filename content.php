<div class="panel panel-primary">
    <div class="panel-heading">
        <?php the_title(); ?>
    </div>
    <?php if(has_post_thumbnail()) : ?>
      <div class="irkom-post-thumbnails post-thumb">
        <?php the_post_thumbnail(); ?>
      </div>
      <?php else: ?>
        <img data-src="holder.js/800x360/auto/#771:#100" alt="First slide">
    <?php endif; ?>
    <div class="panel-body text-left">
        <a class="" href="<?php the_permalink(); ?>" role="">lengkapnya »</a>
    </div>
    <div class="panel-footer text-left ">
        <img style="background-image:url(http://placekitten.com/g/400/200)" class="stories-author-circle"> Writer
    </div>
</div>
