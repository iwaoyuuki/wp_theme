<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
        
    <!-- head内部　-->
    <title>Northern_Europe</title>

    <?php wp_head(); ?>
</head>

<body class="Base-C">

    <header class="l-header  Sub-C">

            <?php custom_breadcrumb(); ?>

            <div class="header-image">

                    <div class="header-textbox ">
                        <a href="http://localhost:8888/wordpress/"><h1 class="header-title"><?php bloginfo( 'name' ); ?></h1></a>
                        <p style="color:white;"><?php bloginfo( 'description' ); ?></p>
                        <?php if ( is_active_sidebar( 'header-nav-widget' ) ) : ?>
                        <div class="header-widget">
                            <?php dynamic_sidebar( 'header-nav-widget' ); ?>
                        </div>
                        <?php endif; ?>
                        </label>

                    </div>

            </div>

    </header>

    <div class="container-fluid  mainpage">
        <div class="row">
            <div class="l-main col-12 col-md-9">