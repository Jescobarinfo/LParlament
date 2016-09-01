<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'L-Parlament: Un sitio sobre las leyes chilenas y sus parlamentarios';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?= $cakeDescription ?>
    </title>
    <link rel="shortcut icon" href="img/icono.jpg" type="image/x-icon" />
   
    <?= $this->Html->css('bootstrap.css'); ?>
    <?= $this->Html->css('font-awesome.css'); ?>
    <?= $this->Html->css('simple-line-icons.css'); ?>
    <?= $this->Html->css('magnific-popup.css'); ?>
    <?= $this->Html->css('theme.css'); ?>
    <?= $this->Html->css('theme-elements.css'); ?>
    <?= $this->Html->css('theme-blog.css'); ?>
    <?= $this->Html->css('theme-shop.css'); ?>
    <?= $this->Html->css('theme-animate.css'); ?>
    <?= $this->Html->css('settings.css'); ?>
    <?= $this->Html->css('layers.css'); ?>
    <?= $this->Html->css('navigation.css'); ?>
    <?= $this->Html->css('component.css'); ?>
    <?= $this->Html->css('skin-corporate-4.css'); ?>
    <?= $this->Html->css('custom.css'); ?>
   <?= $this->Html->css('main.css'); ?>
   <?= $this->Html->script('ie.css'); ?>
    <!-- <?= $this->Html->css('base.css') ?>-->
    <!--<?= $this->Html->css('cake.css') ?>-->
</head>
<body>
 

      <div class="body">
        <?= $this->Element('menu/menu'); ?>
       </div>



    <?= $this->Html->script('jquery-1.11.3'); ?>
    <?= $this->Html->script('bootstrap'); ?>
    <?= $this->Html->script('modernizr'); ?>  
    <?= $this->Html->script('respond'); ?>
    <?= $this->Html->script('excanvas'); ?>
    <?= $this->Html->script('jquery'); ?>


    <?= $this->Html->script('jquery.appear'); ?>
    <?= $this->Html->script('jquery.easing'); ?>
    <?= $this->Html->script('jquery-cookie'); ?>
    <?= $this->Html->script('common'); ?>
    <?= $this->Html->script('jquery.validation'); ?>
    <?= $this->Html->script('jquery.stellar'); ?>
    <?= $this->Html->script('jquery.easy-pie-chart'); ?>
    <?= $this->Html->script('jquery.gmap'); ?>

    <?= $this->Html->script('jquery.lazyload'); ?>
    <?= $this->Html->script('jquery.isotope'); ?>
    <?= $this->Html->script('owl.carousel'); ?>
    <?= $this->Html->script('jquery.magnific-popup'); ?>
    <?= $this->Html->script('jquery.easy-pie-chart'); ?>
    <?= $this->Html->script('vide'); ?>

    <?= $this->Html->script('theme'); ?>
    <?= $this->Html->script('jquery.themepunch.tools.min'); ?>
    <?= $this->Html->script('owl.carousel'); ?>
    <?= $this->Html->script('jquery.magnific-popup'); ?>
    <?= $this->Html->script('jquery.easy-pie-chart'); ?>
    <?= $this->Html->script('vide'); ?>
     <?= $this->Html->script('theme.init'); ?>


    





</body>
</html>
