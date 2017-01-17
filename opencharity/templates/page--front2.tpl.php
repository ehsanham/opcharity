<?php
?>
 <!--[if lt IE 9]>
 
   <script src="js/html5shiv.js"></script>
 
   <script src="js/respond.min.js"></script>
 
    <![endif]--> 


<!-- PRELOADER -->
<img id="preloader" src="<?php print $GLOBALS['base_url']."/".path_to_theme() ?>/assets/images/preloader.gif" alt="" />
<!-- //PRELOADER -->
<div class="preloader_hide">
<div id="page">
<header id="header">
      
       <div class="header_top">
         <div class="container">
          <div class="logo">
           <a class="navbar-brand" href="<?php print $GLOBALS['base_url'] ?>">
         <h1><img src="<?php print $GLOBALS['base_url']."/".path_to_theme() ?>/assets/images/zilogo.png" alt="logo"></h1>
           </a>
           </div> <!-- end-->
           <div class="search">
            <?php if ($page['search']): ?>
                <?php print render($page['search']); ?>
            <?php endif; ?>
            </div> <!-- end-->
            <div class="first_nav">
            <?php if ($page['first_nav']): ?>
                <?php print render($page['first_nav']); ?>
            <?php endif; ?>
            <div class="basketshow">
                
                
            </div>
            </div>
           </div>
       </div> <!-- end header top -->
       
       <div class="header_middle">
        
            <div class="container">
               
                    <nav class="mainmenu right">
					<?php if ($page['primary_menu']): ?>
                        <?php print render($page['primary_menu']); ?>
                    <?php endif; ?>		
					</nav>
                
           </div>
       
    </div>  <!-- end header middle-->  
       
    
</header> <!-- end header -->
<section id="prdSlider">

    <div id="slider"><?php print render($page['slider']); ?></div><!-- end slider -->
    <div class="service"><img  src="<?php print $GLOBALS['base_url']."/".path_to_theme() ?>/assets/images/zimana-service.jpg" alt="با زیمانا سریع مطمئن و ارزان خرید کنید" /></div>

</section>
<main role="main">
   <div class="container">
   <?php if ($page['featured_product']): ?>
    <aside class="fproduct"><h1>محصولات ویژه</h1>
       <?php print render($page['featured_product']); ?>
    
    </aside>
    <?php endif; ?>	
<section id="cats">
   <ul>
       <?php print render($page['cats_one']); ?>
       <li class="threecol"><a href="#" title="انواع لیوان و ماگ"><img src="<?php print $GLOBALS['base_url']."/".path_to_theme() ?>/assets/images/mugs.jpg"></a></li>
       <li class="threecol"><a href="#" title="انواع ساعت"><img src="<?php print $GLOBALS['base_url']."/".path_to_theme() ?>/assets/images/watch.jpg"></a></li>
       <li class="threecol"><a href="#" title="انواع آباژور"><img src="<?php print $GLOBALS['base_url']."/".path_to_theme() ?>/assets/images/lampshade.jpg"></a></li>
   </ul>
   <!--
    <aside class="threecol"><a href="#" title="انواع لیوان و ماگ"><img src="images/mugs.jpg"></a></aside>
       <aside class="threecol"><a href="#" title="انواع ساعت"><img src="images/watch.jpg"></a></aside>
       <aside class="threecol"><a href="#" title="انواع آباژور"><img src="images/lampshade.jpg"></a></aside>
       -->
   
</section>
    <?php if ($page['top_sellers']): ?>
    <aside class="fproduct"><h1>پرفروش ترین ها</h1>
    <?php print render($page['top_sellers']); ?>
    
    </aside>
     <?php endif; ?>	 
      
       <section id="cats2">
       <?php print render($page['cats_two']); ?>
   <ul>
       <li class="threecol"><a href="#" title="انواع لیوان و ماگ"><img src="<?php print $GLOBALS['base_url']."/".path_to_theme() ?>/assets/images/mugs.jpg"></a></li>
       <li class="threecol"><a href="#" title="انواع ساعت"><img src="<?php print $GLOBALS['base_url']."/".path_to_theme() ?>/assets/images/watch.jpg"></a></li>
       <li class="threecol"><a href="#" title="انواع آباژور"><img src="<?php print $GLOBALS['base_url']."/".path_to_theme() ?>/assets/images/lampshade.jpg"></a></li>
   </ul>
   <!--
    <aside class="threecol"><a href="#" title="انواع لیوان و ماگ"><img src="images/mugs.jpg"></a></aside>
       <aside class="threecol"><a href="#" title="انواع ساعت"><img src="images/watch.jpg"></a></aside>
       <aside class="threecol"><a href="#" title="انواع آباژور"><img src="images/lampshade.jpg"></a></aside>
       -->
   
</section>
   <?php if ($page['new_products']): ?>     
    <aside class="fproduct"><h1>جدید ترین کالا ها</h1>
    <?php print render($page['new_products']); ?>
    
    </aside>
     <?php endif; ?>	 
    <div style="clear:both"></div>
    </div>
</main><!-- end main -->
<sction id="registration">
    <div class="container">
    <ul>
        <li class="twocol"><div class="call-to-action text-right">
						<a class="sign-up" href="#">ثبت نام کنید</a>
					</div></li>
        <li class="twocol">لطفا در این فروشگاه ثبت نام نمایید تا از بتوانیم شما را بیشتر از مزایای زیمانا بهره مند نماییم.</li>
    </ul>
    </div>
</sction>
<footer id="footer"><?php if ($page['footer']): ?>
            <?php print render($page['footer']); ?>
            <?php endif; ?></footer>
</div>
</div><!-- end prelaoder -->
