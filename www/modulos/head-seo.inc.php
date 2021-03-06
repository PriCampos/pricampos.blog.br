<title id="pagetitle"><?php print $head_title; ?></title>

<!-- Page Information -->
<meta name="author" content="Priscila de Oliveira Campos">
<meta name="DC.creator.address" content="84priscila.campos@gmail.com">
<meta name="description" content=" <?php print $head_description; ?>">
<meta name="keywords" content="<?php print $head_keywords; ?>">
<link rel="canonical" <?php print 'href='.$head_canonical; ?>>

<!-- Responsive Design -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, maximum-scale=3">

<!-- Browser Behavior -->
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Expires" content="0">
<meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta name="revisit-after" content="15 days">
<meta http-equiv="Content-Type" content="pt-br">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!--Age Rating -->
<meta name="rating" content="general">

<!-- Indexing for Search Engines -->
<meta name="robots" content="index, follow">

<!-- Facebook meta tag - Open Graph -->
<meta property="og.locale" content="pt_BR"> 
<meta property="og.url" content="<?php print $head_ogurl; ?>">
<meta property="og:title" content="<?php print $head_ogtitle; ?>">
<meta property="og:site_name" content="pricampos.blog.br">
<meta property="og:description" content="<?php print $head_ogdescription; ?>">
<meta property="og:type" content="website">
<!-- Facebook Author - Open Graph -->
<meta property="fb:admins" content="pricampos.blog.br">
<meta property="article:author" content="https://www.facebook.com/priscila.campos.752">
<!-- Facebook Image - Open Graph -->
<meta property="og:image" content=<?php print $head_ogimage; ?>> 
<meta property="og:image:type" content="image/jpg">
<meta property="og:image:width" content="811">
<meta property="og:image:height" content="425">

<!--Google tags -->
<link rel="author" href="https://plus.google.com/112426519395507441659">
<link rel="publisher"  href="https://plus.google.com/112426519395507441659">
<meta itemprop="name" content="pricampos.blog.br">
<meta itemprop="description" content="<?php print $head_gdescription; ?>">

<!--Twitter Cards -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content=<?php print $head_ttitle; ?>>
<meta name="twitter:description" content= <?php print $head_tdescription; ?>>
<meta name="twitter:site" content="@Pr1_Camp0s">
<meta property="twitter:image" content= <?php print $head_timage; ?>>
<meta name="twitter:creator" content="@Pr1_Camp0s">

<!-- Favicons -->
<link rel="shortcut icon" type="imagem/x-icon" href="http://127.0.0.1:81/pricampos.blog.br/www/galeria/favicons/favicons16x16.ico">
<link rel="shortcut icon" type="imagem/x-icon" href="http://127.0.0.1:81/pricampos.blog.br/www/galeria/favicons/favicons32x32.ico">
<link rel="shortcut icon" type="imagem/x-icon" href="http://127.0.0.1:81/pricampos.blog.br/www/galeria/favicons/favicons48x48.ico">
<link rel="shortcut icon" type="imagem/x-icon" href="http://127.0.0.1:81/pricampos.blog.br/www/galeria/favicons/favicons64x64.ico">
<link rel="shortcut icon" type="imagem/x-icon" href="http://127.0.0.1:81/pricampos.blog.br/www/galeria/favicons/favicons128x128.ico">
<link rel="apple-touch-icon-precomposed" href="http://127.0.0.1:81/pricampos.blog.br/www/galeria/favicons/favicons180x180.png">
<meta name="msapplication-TileImage" content="http://127.0.0.1:81/pricampos.blog.br/www/galeria/favicons/favicons270x270.png">

<!--Preload CSS e JS  -->

<!-- General File - Menu and Foooter -->
<link rel="preload" href="templates/menu.tpl.css" as="style">
<link rel="stylesheet" type="text/css" href="templates/menu.tpl.css">

<link rel="preload" href="templates/footer.tpl.css" as="style">
<link rel="stylesheet" type="text/css" href="templates/footer.tpl.css">

<?php
// Main Page
    $head_main_preload = '<link rel="preload" href="templates/main-page.tpl.css" as="style">';
    $head_main = '<link rel="stylesheet" type="text/css" href="templates/main-page.tpl.css">';

// About-me Page 
    $head_about_me_preload = '<link rel="preload" href="templates/about-me.tpl.css" as="style">';
    $head_about_me = '<link rel="stylesheet" type="text/css" href="templates/about-me.tpl.css">';

// Category Page
// Contact Page 
    $head_contact_preload = '<link rel="preload" href="templates/contact.tpl.css" as="style">';
    $head_contact = '<link rel="stylesheet" type="text/css" href="templates/contact.tpl.css">';

//Search
    $head_search_preload = '<link rel="preload" href="templates/search.tpl.css" as="style">';
    $head_search = '<link rel="stylesheet" type="text/css" href="templates/search.tpl.css">';
?>

<!-- Font-Awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Font-Googleapis -->
<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Open+Sans|Open+Sans+Condensed:300|Quicksand" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cutive+Mono" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic+Coding" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic|Roboto+Mono:400,500|Material+Icons" rel="stylesheet">