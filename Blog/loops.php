<!--Header--->

<div>
   <?php /*Start the loop */ ?>
     <?php $myquery = new WP_Query('category_name=home-header&posts_per_page=1'); ?>
       <?php while ( $myquery->have_posts() ) : $myquery->the_post(); ?>
     <?php if ( has_post_thumbnail() ) {

  // Get the post thumbnail URL
  $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
  } else {

  // Get the default featured image in theme options
  $feat_image = get_field('default_featured_image', 'option');
  } ?>
      <section class="header-banner is-primary" style="background-image: url(<?php echo 				$feat_image; ?>); background-size:cover;">
       <div class="hero-body">
     <div class="container header-title">
          <h1 class="title">
           <a href="<?php the_permalink(); ?>"><?php the_title( '<h3>', '</h3>' );  ?></a>
         </h1>
         <h2 class="subtitle">
         <?php the_excerpt(); ?>
       </h2>
     </div>
   </div>
 </section>
<?php endwhile; ?>
</div>

<!--Featured home--->

<div>
  <?php /*Start the loop */ ?>
    <?php $myquery = new WP_Query('category_name=home-header&posts_per_page=1'); ?>
      <?php while ( $myquery->have_posts() ) : $myquery->the_post(); ?>
        <?php if ( has_post_thumbnail() ) {

        // Get the post thumbnail URL
        $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        } else {

        // Get the default featured image in theme options
        $feat_image = get_field('default_featured_image', 'option');
        } ?>
        <section class="hero is-fullheight is-default is-bold">
          <div class="hero-body">
            <div class="container has-text-centered">
              <div class="columns is-vcentered">
                <div class="column is-5">
                  <figure class="image is-4by3">
                    <?php the_post_thumbnail('featured-large'); ?>
                  </figure>
                </div>
                <div class="column is-6 is-offset-1">
                  <h1 class="title is-2">
                    <a href="<?php the_permalink(); ?>"><?php the_title( '<h3>', '</h3>' );  ?></a>
                  </h1>
                  <h2 class="subtitle is-4">
                    <?php the_excerpt(); ?>
                  </h2>
                  <br>
                  <p class="has-text-centered">
                    <a href="<?php the_permalink(); ?>" class="button is-medium is-info is-outlined">
                      Leer
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
      <?php endwhile; ?>
</div>

<!--Featured templates --->

<div>
  <?php /*Start the loop */ ?>
    <?php $myquery = new WP_Query('category_name=home-header&posts_per_page=1'); ?>
      <?php while ( $myquery->have_posts() ) : $myquery->the_post(); ?>
        <?php if ( has_post_thumbnail() ) {

        // Get the post thumbnail URL
        $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        } else {

        // Get the default featured image in theme options
        $feat_image = get_field('default_featured_image', 'option');
        } ?>
<figure class="image is-4by3">
  <?php the_post_thumbnail('featured-large'); ?>
</figure>
<?php endwhile; ?>
</div> <!--Loop-->



<!--Cards--->

<div> <!--Loop-->
  <?php /*Start the loop */ ?>
    <?php $myquery = new WP_Query('category_name=home-header&posts_per_page=1'); ?>
      <?php while ( $myquery->have_posts() ) : $myquery->the_post(); ?>
        <?php if ( has_post_thumbnail() ) {

        // Get the post thumbnail URL
        $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        } else {

        // Get the default featured image in theme options
        $feat_image = get_field('default_featured_image', 'option');
        } ?>
      <div class="column">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <?php the_post_thumbnail('featured-large'); ?>
            </figure>
          </div>
            <div class="card-content">
              <div class="media">
                <div class="media-left">
                  <figure class="image is-48x48">
                    <?php the_post_thumbnail('featured-large'); ?>
                  </figure>
                </div>
                <div class="media-content">
                  <h3 class="title is-4"><a href="<?php the_permalink(); ?>"><?php the_title( '<h3>', '</h3>' );  ?></a></h3>
                </div>
              </div>

              <div class="content">
                <?php the_excerpt(); ?>
                <br>
                <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
              </div>
            </div>
        </div>
  <?php endwhile; ?>
</div>
</div>

<!--Boxes--->

<div>
  <?php /*Start the loop */ ?>
    <?php $myquery = new WP_Query('category_name=home-header&posts_per_page=3'); ?>
      <?php while ( $myquery->have_posts() ) : $myquery->the_post(); ?>
        <?php if ( has_post_thumbnail() ) {

        // Get the post thumbnail URL
        $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        } else {

        // Get the default featured image in theme options
        $feat_image = get_field('default_featured_image', 'option');
        } ?>
        <div class="box category-box">
          <article class="media">
            <div class="media-left">
              <figure class="va image is-64x64">
                <img class="minibox-img" src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
              </figure>
            </div>
            <div class="media-content">
              <div class="content">
                <p>
                  <a href="<?php the_permalink(); ?>"><?php the_title( '<p>', '</p>' );  ?></a>
                  <?php the_excerpt(); ?>
                </p>
              </div>
            </div>
          </article>
        </div>
  <?php endwhile; ?>
</div> <!--Loop--->
