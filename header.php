<html>
  <head>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/theme.css" media="all" />
    <title>sticksnglue</title>

    <script type="text/javascript">
    //uncomment and change this to false if you're having trouble with WOFFs
    var woffEnabled = true;
    //to place your webfonts in a custom directory
    //uncomment this and set it to where your webfonts are.
    var customPath = "<?php echo get_template_directory_uri() ?>/script/vendor/MyFonts/";
    </script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/script/vendor/MyFonts/MyFontsWebfontsKit.js"></script>

    <?php wp_head();  ?>
  </head>

  <body>

    <div class="page-container">
      <header class="header">
        <h1 class="header__site-title">sticksnglue</h1>
        <p class="header__tag">
          building for the fun of it
        </p>
        <div class="header__angle-bracket"></div>
        <div class="header__curly-bracket"></div>
      </header>
    </div>
