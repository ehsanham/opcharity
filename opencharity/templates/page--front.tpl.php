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
          <div id="logo">
           <a id="navbar-brand" href="<?php print $GLOBALS['base_url'] ?>">
         <h1><img src="<?php print $GLOBALS['base_url']."/".path_to_theme() ?>/assets/images/opench-logo.png" alt="Open Charity | sharing ideas for charities"></h1>
           </a>
           </div> <!-- end-->
           
           <nav id="mainmenu" class="right">
			<div class="charity_nav">
            <?php if ($page['charity_nav']): ?>
                <?php print render($page['charity_nav']); ?>
            <?php endif; ?>
			</nav>
           </div>
       </div> <!-- end header top -->
       
 
       
    
</header> <!-- end header -->
<section id="lSlider">
    <?php if ($page['slider']): ?>
     <div id="slider"> <?php print render($page['slider']); ?></div><!-- end slider -->
     <?php endif; ?>

</section>      
       
<main role="main">
   
   <div id="events">
    <div class="container">
        <div class="events">
           <div class="two-col">
             <h3><span class="tag">Next Event:</span> June 23 2016 18:30 -21:00</h3>  
             <p>Cancer Research UK, Angel Building, 407 St John Street, London EC1V 4AD</p> 
             </div>
             <a href="#" class="button" id="solid-color">REGISTER</a>
            <?php if ($page['events']): ?>
                <?php print render($page['events']); ?>
                <?php endif; ?>
        </div> 
       </div>  
   </div><!--end events -->
   <div id="envolved">
   <div class="container">
    <h1>GET INVOLVED</h1>   
    <div class="three-col">
        <div class="in-item">
            <div class="icon"><div id="iconone"></div></div>
            <h3>WE DO SOMETHING</h3>
            <p>We organise our meetings through the OpenCharity MeetUp group</p>
            <a href="#" class="button" id="no-color">MEETUP GROUP</a>
        </div>
    </div><!--end item 1 -->
    <div class="three-col">
        <div class="in-item">
            <div class="icon"><div id="icotwo"></div></div>
            <h3>We Collaborate</h3>
            <p>OpenCharity have a slack group for
daily collaboration</p>
            <a href="#" class="button" id="no-color">SLACK GROUP</a>
        </div>
    </div><!--end item 2 -->
    <div class="three-col">
        <div class="in-item">
            <div class="icon"><div id="iconthr"></div></div>
            <h3>We Share</h3>
            <p>We have a Google Group set up to share tools
and documents</p>
            <a href="#" class="button" id="no-color">GOOGLE GROUP</a>
        </div>
    </div><!--end item 3 -->
    </div>
   </div><!--end envolved -->
   <div id="missions">
       <div class="container">
           <h1>OUR MISSION</h1> 
           <p>Charities and Partners collaborating and sharing open solutions and ideas to create value in the digital space.
           </br><span class="bigger">
If you are a charity or a supplier, we are ready to welcome you.</span></p>
          <div class="three-col">
        <div class="in-item white">
            <div class="icon mis"><div id="iconfor"></div></div>
            <h3>We Help Charities</h3>
            <p>share knowledge and working practice to make the best technology choices.</p>
            
        </div>
    </div><!--end item 1 -->
      <div class="three-col">
        <div class="in-item white">
            <div class="icon mis"><div id="iconfiv"></div></div>
            <h3>We bring together</h3>
            <p>charities and suppliers to the charity sector to share best practices.</p>
            
        </div>
    </div><!--end item 2 -->
      <div class="three-col">
        <div class="in-item white">
            <div class="icon mis"><div id="iconsix"></div></div>
            <h3>We encourage</h3>
            <p>collaboration and innovation for the good of the charity sector.</p>
            
        </div>
        </div><!--end item 3 -->
       </div>
   </div>
    
   <div id="members">
       <div class="container">
           <h1>OUR MEMBERS</h1>
            <div class="members">
            <?php if ($page['members']): ?>
            <?php print render($page['members']); ?>
            <?php endif; ?>
       </div>
       </div>
   </div>
   <div id="blog">
       <div class="container">
           <h1>BLOG</h1>
              <?php if ($page['blog']): ?>
            <?php print render($page['blog']); ?>
            <?php endif; ?>
       </div>
       
   </div>
   
</main> 
<footer id="footer">
    <div class="container">
    <div class="social">
    <img src="<?php print $GLOBALS['base_url']."/".path_to_theme() ?>/assets/images/social.jpg" alt="Open Charity | sharing ideas for charities">
        </div>
     <?php if ($page['footer']): ?>
      <div class="two_col">
       
            <?php print render($page['footer']); ?>
        
        </div>
        <?php endif; ?>
        <p>This site was built as a collaboration between<span class="tag"> Manifesto Digital</span> and <span class="tag">Compucorp</span></p>
    </div>
    
</footer>     
</div>

</div><!-- end prelaoder -->
