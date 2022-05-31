<?php 
    /**
     * Template header 
     * Le template est integré dans tous les modeles de theme
     * @link : https://developer.wordpress.org/themes/
     * @package : 31w
     */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
   <section class="site">
        <header class="site__header">
            <section class="site__branding">
                Titre du site
                <nav class="site__navigation">
                    Menu
                </nav>
            </section>
        </header>
  

