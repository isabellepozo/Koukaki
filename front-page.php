<?php
get_header();
?>

    <main id="primary" class="site-main">

        <section class="banner fadeIn ">
            <img class="logo-img" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants">
            <!-- Ajout de la vidéo -->
            <video class="video-banner" autoplay muted loop poster>
                <source src="<?php echo get_stylesheet_directory_uri() . '/assets/medias/Koukaki-video.mp4'; ?>" type="video/mp4">
            </video>
        </section>


        <section id="story" class="story fadeDown">
            <h2>L'histoire</h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            
            <article id="characters sectionSwiper" class="fadeDown">
                <div class="main-character">   
                <div class="cloud-title">
                    <h3>Les personnages</h3>
                </div>
                    <!-- Ajout du Swiper -->
                    <?php get_template_part('templates/section-personnages'); ?>
                </div>
            </article>

            <article id="place">
                <div>
                <h3 >Le Lieu</h3>
                    <!-- Ajout des deux nuages -->
                    <div class="nuages-groupe" data-aos="slide-left">     
                        <img class="little_cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/little_cloud.png'; ?> " alt="image d'un petit nuage" >    
                        <img class="big_cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/big_cloud.png'; ?> " alt="image d'un gros nuage" >      
                    </div>


                    <p><?php echo get_theme_mod('place'); ?></p>        
                </div>

            </article>
        </section>


        <section id="studio" class="fadeDown">
            <h2>Studio Koukaki</h2>
            <div class="images-oscars">
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</span></p>
            </div>
            </section>
            
        <!-- Ajout de la section Oscars -->
        <?php get_template_part('templates/section-oscars'); ?>   
        
        </main><!-- #main -->

<?php
get_footer();
?>