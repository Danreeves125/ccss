 <?php
    $query = new WP_Query(
        array(
            'post_type' => 'post',
            'limit' => '-1'
        )
    );

    ?>
 <?php if ($query->have_posts()) : ?>
     <section class="article__section--latest">
         <div class="container">
             <div class="home__title-wrapper">
                 <h2 class="a-title a-title--left a-title--black">Read Our Latest News & Updates</h2>

                 <a href="#" class="button button--black-outline">
                     Read More
                     <svg xmlns="http://www.w3.org/2000/svg" width="10.5" height="10.379" viewBox="0 0 10.5 10.379">
                         <path id="Label" d="M-.138-9.607-.6-9.143a.281.281,0,0,0,0,.4L3.034-5.109h-8a.281.281,0,0,0-.281.281v.656a.281.281,0,0,0,.281.281h8L-.6-.255a.281.281,0,0,0,0,.4l.464.464a.281.281,0,0,0,.4,0L5.168-4.3a.281.281,0,0,0,0-.4L.259-9.607A.281.281,0,0,0-.138-9.607Z" transform="translate(5.25 9.689)" fill="#7DBEA1" />
                     </svg>
                 </a>
             </div>
             <div class="swiper slider__news">
                 <div class="swiper-wrapper">
                     <?php while ($query->have_posts()) : $query->the_post() ?>
                         <div class="swiper-slide">
                             <div class="article__card">
                                 <div class="article__card-image">
                                     <div class="image" style="background-image: url('<?= get_the_post_thumbnail_url() ?>')">
                                     </div>
                                 </div>
                                 <div class="article__card-details">
                                     <div class="title"><?= the_title() ?></div>
                                     <div class="text">
                                         <?= get_the_content(); ?>
                                     </div>
                                     <a href="#">
                                         Read More

                                         <svg xmlns="http://www.w3.org/2000/svg" width="10.5" height="10.379" viewBox="0 0 10.5 10.379">
                                             <path id="Label" d="M-.138-9.607-.6-9.143a.281.281,0,0,0,0,.4L3.034-5.109h-8a.281.281,0,0,0-.281.281v.656a.281.281,0,0,0,.281.281h8L-.6-.255a.281.281,0,0,0,0,.4l.464.464a.281.281,0,0,0,.4,0L5.168-4.3a.281.281,0,0,0,0-.4L.259-9.607A.281.281,0,0,0-.138-9.607Z" transform="translate(5.25 9.689)" fill="#7DBEA1" />
                                         </svg>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     <?php endwhile;
                        wp_reset_postdata(); ?>
                 </div>
             </div>

             <div id="news-dots" class="slider__dots"></div>
         </div>
     </section>
 <?php endif; ?>