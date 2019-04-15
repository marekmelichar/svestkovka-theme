<?php	
/**	
 * The template for displaying search results pages.	
 *	
 *	
 */	
 get_header(); ?>	



       <?php if ( have_posts() ) : ?>	

         <div class="search-results">	
          <div class="container standard-content-white-bg-wrapper mb-3">	
            <div class="row">	
              <div class="col">	
                <h1><div class="search-page-title"><?php printf( esc_html__( 'Výsledky hledání pro: %s' ), '<span>' . get_search_query() . '</span>' ); ?></div></h1>	
              </div>	
            </div>	
            <div class="row">	
              <div class="col">	
                <div class="to-be-flexed">	
                  <?php	
                  if ( function_exists('yoast_breadcrumb') ) {	
                    yoast_breadcrumb('	
                    <p id="breadcrumbs">','</p>');	
                  }	
                  ?>	
                </div>	
              </div>	
            </div>	

             <?php while ( have_posts() ) : the_post(); ?>	

                 <div class="row pb-5">	
                  <div class="col">	
                    <h2 class="search-post-title blue-text">	
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>	
                    </h2>	
                    <div class="search-post-excerpt">	
                      <?php //the_excerpt(); ?>	
                      <a href="<?php the_permalink(); ?>"><?php echo __('Více >>'); ?></a>	
                    </div>	
                  </div>	
                </div>	

             <?php endwhile; ?>	
          </div>	

         </div>	

       <?php else : ?>	

         <div class="search-results">	
          <div class="container">	
            <div class="row">	
              <div class="col">	
                <h1><div class="search-page-title"><?php printf( esc_html__( 'Výsledky hledání pro: %s' ), '<span>' . get_search_query() . '</span>' ); ?></div></h1>	
              </div>	
            </div>	
            <!-- <div class="row">	
              <div class="col">	
                <div class="to-be-flexed">	
                  <?php	
                  if ( function_exists('yoast_breadcrumb') ) {	
                    yoast_breadcrumb('	
                    <p id="breadcrumbs">','</p>');	
                  }	
                  ?>	
                </div>	
              </div>	
            </div> -->	
          </div>	
        </div>	

         <div class="container">	
          <div class="row">	
            <div class="col">	
              <h2 class="mt-5"><?php echo __('Bohužel pro tento výraz jsme nic nenašli...'); ?></h2>	
              <div class="mt-5">	
                <h3>	
                  <a href="/"><u><?php echo __('Přejít na hlavní stranu'); ?></u></a>	
                </h3>	
              </div>	
            </div>	
          </div>	
        </div>	

       <?php endif; ?>	


 <?php get_footer(); ?>