<!DOCTYPE html>
<html class="no-js" lang="es">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Wordsmith</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- summernote
    ================================================== -->
    <!-- include libraries(jQuery, bootstrap) -->
    <script src="<?= base_url(); ?>/js/jquery-3.2.1.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/base.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/vendor.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/main.css">

    <!-- script
    ================================================== -->
    <script src="<?= base_url(); ?>/js/modernizr.js"></script>

    <!-- include summernote css/js
    ================================================== -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?= base_url(); ?>/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?= base_url(); ?>/favicon.ico" type="image/x-icon">

</head>

<body id="top">

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- header
    ================================================== -->
    <header class="s-header header">

        <div class="header__logo">
            <a class="logo" href="<?= base_url(); ?>">
                <img src="<?= base_url(); ?>/images/logo.svg" alt="Homepage">
            </a>
        </div> <!-- end header__logo -->

        <a class="header__search-trigger" href="#0"></a>
        <div class="header__search">

            <form role="search" method="get" class="header__search-form" action="#">
                <label>
                    <span class="hide-content">Buscar por:</span>
                    <input type="search" class="search-field" placeholder="Palabras Clave" value="" name="s" title="Buscar por:" autocomplete="off">
                </label>
                <button type="submit" class="search-submit" name="button">Buscar</button>
            </form>

            <a href="#0" title="Close Search" class="header__overlay-close">Cerrar</a>

        </div>  <!-- end header__search -->

        <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
        <nav class="header__nav-wrap">

            <h2 class="header__nav-heading h6">Navigate to</h2>

            <ul class="header__nav">
                <li class="current"><a href="<?= base_url(); ?>" title="">Inicio</a></li>
                <li class="has-children">
                    <a href="#0" title="">Categories</a>
                    <ul class="sub-menu">
                        <?php foreach ($categories as $category): ?>
                            <li><a href="<?= base_url( 'dashboard/categories/'.$category['name'] ); ?>"><?= $category['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li><a href="<?= base_url('blog'); ?>" title="">Blog</a><li>
                <li><a href="<?= base_url('acerca'); ?>" title="">Acerca</a></li>
                <li><a href="<?= base_url('contacto'); ?>" title="">Contacto</a></li>
            </ul> <!-- end header__nav -->

            <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Cerrar</a>

        </nav> <!-- end header__nav-wrap -->

    </header> <!-- s-header -->
