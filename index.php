<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
<title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
</head>
<header>
    <img src="http://life-shalom.com/wp-content/uploads/2019/07/logo.png" id="logo"/>
    <img src="http://life-shalom.com/wp-content/uploads/2019/07/nav.png" id="nav"/>
    <div id="modal_div">
        <img src="http://life-shalom.com/wp-content/uploads/2019/07/close.png" id="closeImg"/>
        <img src="http://life-shalom.com/wp-content/uploads/2019/07/spaceBrand.png" id="sbImg"/>
        <div class="navList">
            <img src="http://life-shalom.com/wp-content/uploads/2019/07/home.png" id="home"/>
            <img src="http://life-shalom.com/wp-content/uploads/2019/07/about.png" id="about"/>
            <img src="http://life-shalom.com/wp-content/uploads/2019/07/project.png" id="project"/>
            <img src="http://life-shalom.com/wp-content/uploads/2019/07/inspire.png" id="inspire"/>
            <img src="http://life-shalom.com/wp-content/uploads/2019/07/contact.png" id="contact"/>
            <img src="http://life-shalom.com/wp-content/uploads/2019/07/togInfo.png" id="togInfo"/>
            <img src="http://life-shalom.com/wp-content/uploads/2019/07/sns.png" id="sns"/>
        </div>
    </div>
</header>
<body <?php body_class(); ?>>
    <img src="http://life-shalom.com/wp-content/uploads/2019/07/main1.png" id="main1" class="mainImg"/>
    <img src="http://life-shalom.com/wp-content/uploads/2019/07/main2.png" class="mainImg"/>
    <img src="http://life-shalom.com/wp-content/uploads/2019/07/main3.png" class="mainImg"/>
    <img src="http://life-shalom.com/wp-content/uploads/2019/07/main4.png" id="main4" class="mainImg"/>
<h1>hahaha</h1>
<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $("#nav").click(function(){
          $("#modal_div").toggleClass('modalAction');
        });
        $("#closeImg").click(function(){
          $("#modal_div").toggleClass('modalAction');
        });
      });
</script>
</body>
</html>