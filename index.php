<?php get_header(); ?>

<!-- Content Start-->
<?php if (have_posts()) : ?>
<div class="daygroup">

  <?php while (have_posts()) : the_post(); ?>
    <div class="channelgroup"><h3><?php if (is_syndicated()) { ?> 
    <span class="datum"><?php the_time('Y-m-d') ?> av <?php the_author_nickname(); ?></span><br />
    <a href="<?php the_syndication_source_link(); ?>"><?php the_syndication_source(); ?></a>
    <?php } ?></h3>
  <div class="entrygroup" id="<?php the_permalink(); ?>"><h4>
    <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
    <div class="entry"><div><?php the_content('Read the rest of this entry &raquo;'); ?></div>
    </div></div></div>
  <?php endwhile; ?>
</div>
<?php else : ?>
  <h2 class="h2title">Not Found</h2>
  <p>Sorry, but you are looking for something that isn't here.</p>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
