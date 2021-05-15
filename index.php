<?php
  get_header();
?>
    
    <main itemscope itemtype="http://schema.org/Blog" class="container">
    
      <div class="article col-md-8" itemprop="mainContentOfPage">
        <?php 
          if ( have_posts() ) : 
          while ( have_posts() ) : the_post(); ?>

          <article itemscope itemtype ="https://schema.org/BlogPosting" class="article-item">
            <h2 itemprop="headline" class="article-title" >
              <a href="<?php the_permalink(); ?>" itemprop="mainEntityOfPage"><?php the_title(); ?></a>
            </h2>
            <div class="article-thumbnail" itemscope itemtype="http://schema.org/ImageObject">
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" itemprop="url">
                <?php get_template_part('template-parts/thumbnail'); ?>
                <!--  画像幅は696 ピクセル以上　https://developers.google.com/search/docs/data-types/article#non-amp -->
              </a>
            </div>
            
            <div class="article-metabox">
              <?php get_template_part('template-parts/dateAndCategory'); ?>
              <div class="article-metabox__description" itemprop="description"><?php the_excerpt(); ?></div>
            </div>
            <div class="article-readmore">
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" itemprop="url">&raquo; READ</a>
            </div>
          </article>

        <?php
          endwhile; 
          endif; ?>

          <div class="pagination">
            <div class="pagination-prev">
              <?php previous_posts_link('&laquo; PREV'); ?>
            </div>
            <div class="pagination-next">
              <?php next_posts_link('NEXT &raquo;'); ?>
            </div>
          </div>

        </div>

        <?php get_sidebar(); ?>
      </div>

    </main>

<?php
  get_footer();
?>