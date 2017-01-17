<?php
?>
 <!--[if lt IE 9]>
 
   <script src="js/html5shiv.js"></script>
 
   <script src="js/respond.min.js"></script>
 
    <![endif]--> 


<!-- PRELOADER -->
<img id="preloader" src="images/preloader.gif" alt="" />
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

<main role="main">
   
   <div class="container">
       <?php print render($title_prefix); ?>
        
        <?php print render($title_suffix); ?>
		<?php  global $user;?>
		<?php  if ($user->uid):?> 
			<?php if ($tabs): ?>
            <div class="tabs">
                <?php print render($tabs); ?>
            </div>
        <?php endif; ?>
		 <?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
            <ul class="action-links">
                <?php print render($action_links); ?>
            </ul>
        <?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>	
       
   </div>
   
</main> 
<footer id="footer">
    <div class="container">
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
