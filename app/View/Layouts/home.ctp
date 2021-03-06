<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
$cakeDescription = __d('cake_dev', 'Selectube : Amitié-Partage');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $title_for_layout; ?>
        </title>

        <!--  meta info -->
        <?php
        echo $this->Html->meta(array("name" => "viewport",
            "content" => "width=device-width,  initial-scale=1.0"));
        echo $this->Html->meta(array("name" => "description",
            "content" => "Plateforme de partage multimédia"));
        echo $this->Html->meta(array("name" => "author",
            "content" => "florianajir.com - @FlorianAjir"));
                
//        Open Graph metas
        echo $this->Html->meta(array("name" => "og:title",
            "content" => "Selectube - Amitié Partage"));
        echo $this->Html->meta(array("name" => "og:type",
            "content" => "website"));
        echo $this->Html->meta(array("name" => "og:url",
            "content" => "http://selectube.org"));
        echo $this->Html->meta(array("name" => "og:locale",
            "content" => "fr_FR"));
        echo $this->Html->meta(array("name" => "og:site_name",
            "content" => "Selectube.org"));
        echo $this->Html->meta(array("name" => "og:description",
            "content" => "Partagez vos meilleurs découvertes"));
//        echo $this->Html->meta(array("name" => "og:image",
//            "content" => "http://selectube.org/images/logo.jpg"));
//        echo $this->Html->meta(array("name" => "og:image:width",
//            "content" => "180"));
//        echo $this->Html->meta(array("name" => "og:image:height",
//            "content" => "180"));
        echo $this->Html->meta(array("name" => "fb:admins",
            "content" => "448385471909603"));
        echo $this->Html->meta(array("name" => "fb:app_id",
            "content" => "448385471909603"));
        echo $this->Html->meta(array("name" => "twitter:card",
            "content" => "summary"));
        echo $this->Html->meta(array("name" => "twitter:site",
            "content" => "@selectube"));
        echo $this->Html->meta(array("name" => "twitter:creator",
            "content" => "@selectube"));        
        ?>

        <?php
        echo $this->Html->meta('icon');

        echo $this->fetch('meta');

        echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('bootstrap-responsive.min');
        echo $this->Html->css('font-awesome.min');
        echo $this->Html->css('core');
        echo $this->Html->css('home');

        echo $this->fetch('css');

        echo $this->Html->script('jquery-1.9.1.min');
        echo $this->Html->script('bootstrap.min');
        echo $this->Html->script('init-home');

        echo $this->fetch('script');
        ?>
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>
    <body>
        <div id="main-container" class="">
            <?php // echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
        </div>
        <?= $this->Facebook->init(); ?>
    </body>
</html>
