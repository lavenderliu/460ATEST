<?php 
session_start();  //check login
if ($_SESSION['login']=="yes") {?>



<html>
	<head>
		<title>View Lists - WFM Grocery List</title>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		
		<link rel="stylesheet" type="text/css" href="http://cdn2.editmysite.com/css/sites.css?buildTime=1234" />
<link rel="stylesheet" type="text/css" href="http://cdn1.editmysite.com/editor/libraries/fancybox/fancybox.css?1234" />
<link rel="stylesheet" type="text/css" href="http://cdn2.editmysite.com/css/social-icons.css?buildtime=1234" media="screen,projection" />
<link rel="stylesheet" type="text/css" href="files/main_style.css?1448822608" title="wsite-theme-css" />
<link href='http://fonts.googleapis.com/css?family=Cardo:400,700,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,300,300italic,700,400italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css' />

<style type='text/css'>
.wsite-elements.wsite-not-footer div.paragraph, .wsite-elements.wsite-not-footer p, .wsite-elements.wsite-not-footer .product-block .product-title, .wsite-elements.wsite-not-footer .product-description, .wsite-elements.wsite-not-footer .wsite-form-field label, .wsite-elements.wsite-not-footer .wsite-form-field label, #wsite-content div.paragraph, #wsite-content p, #wsite-content .product-block .product-title, #wsite-content .product-description, #wsite-content .wsite-form-field label, #wsite-content .wsite-form-field label, .blog-sidebar div.paragraph, .blog-sidebar p, .blog-sidebar .wsite-form-field label, .blog-sidebar .wsite-form-field label {}
#wsite-content div.paragraph, #wsite-content p, #wsite-content .product-block .product-title, #wsite-content .product-description, #wsite-content .wsite-form-field label, #wsite-content .wsite-form-field label, .blog-sidebar div.paragraph, .blog-sidebar p, .blog-sidebar .wsite-form-field label, .blog-sidebar .wsite-form-field label {}
.wsite-elements.wsite-footer div.paragraph, .wsite-elements.wsite-footer p, .wsite-elements.wsite-footer .product-block .product-title, .wsite-elements.wsite-footer .product-description, .wsite-elements.wsite-footer .wsite-form-field label, .wsite-elements.wsite-footer .wsite-form-field label{}
.wsite-elements.wsite-not-footer h2, .wsite-elements.wsite-not-footer .product-long .product-title, .wsite-elements.wsite-not-footer .product-large .product-title, .wsite-elements.wsite-not-footer .product-small .product-title, #wsite-content h2, #wsite-content .product-long .product-title, #wsite-content .product-large .product-title, #wsite-content .product-small .product-title, .blog-sidebar h2 {}
#wsite-content h2, #wsite-content .product-long .product-title, #wsite-content .product-large .product-title, #wsite-content .product-small .product-title, .blog-sidebar h2 {}
.wsite-elements.wsite-footer h2, .wsite-elements.wsite-footer .product-long .product-title, .wsite-elements.wsite-footer .product-large .product-title, .wsite-elements.wsite-footer .product-small .product-title{}
#wsite-title {}
.wsite-menu-default a {}
.wsite-menu a {}
.wsite-image div, .wsite-caption {}
.galleryCaptionInnerText {}
.fancybox-title {}
.wslide-caption-text {}
.wsite-phone {}
.wsite-headline {}
.wsite-headline-paragraph {}
.wsite-button-inner {}
.wsite-not-footer blockquote {}
.wsite-footer blockquote {}
.blog-header h2 a {}
#wsite-content h2.wsite-product-title {}
.wsite-product .wsite-product-price a {}
</style>
<style>
.wsite-background {background-image: url("img/cover2.jpg") !important;background-repeat: no-repeat !important;background-position: 50% 50% !important;background-size: 100% !important;background-color: transparent !important;background: inherit;}
body.wsite-background {background-attachment: fixed !important;}.wsite-background.wsite-custom-background{ background-size: cover !important}
</style>
		<script><!--
var STATIC_BASE = '//cdn1.editmysite.com/';
var STYLE_PREFIX = 'wsite';
//-->
</script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js'></script>

<script src="http://cdn2.editmysite.com/js/site/main.js?buildTime=1234"></script><script type="text/javascript">_W.configDomain = "www.weebly.com";</script><script type="text/javascript" src="http://cdn2.editmysite.com/js/lang/en/ftl.js?buildTime=1234"></script><script>_W.relinquish && _W.relinquish()</script>
<script type="text/javascript"><!--
	var IS_ARCHIVE = 1;
	
	(function(jQuery){
		function initFlyouts(){
			initPublishedFlyoutMenus(
				[{"id":"821307505618350677","title":"Home","url":"index.html","target":""},{"id":"861492302795732802","title":"Sign Up \/ Login","url":"sign-up--login.html","target":""},{"id":"410698013925611979","title":"Create List","url":"create-list.html","target":""},{"id":"139660278626654661","title":"View Lists","url":"view-lists.html","target":""},{"id":"792407370437616584","title":"Feedback","url":"feedback.html","target":""}],
				"139660278626654661",
				'',
				'active',
				false,
				{"navigation\/item":"<li {{#id}}id=\"{{id}}\"{{\/id}}\n\tclass=\"wsite-menu-item-wrap\"\n\t>\n\t<a href=\"{{url}}\"\n\t\t{{#target}}target=\"{{target}}\"{{\/target}}\n\t\tclass=\"wsite-menu-item\"\n\t\t{{#membership_required}}\n\t\t\tdata-membership-required=\"{{.}}\"\n\t\t{{\/membership_required}}\n\t\t>\n\t\t{{{title_html}}}\n\t<\/a>\n\t{{#has_children}}{{> navigation\/flyout\/list}}{{\/has_children}}\n<\/li>\n","navigation\/flyout\/list":"<div class=\"wsite-menu-wrap\" style=\"display:none\">\n\t<ul class=\"wsite-menu\">\n\t\t{{#children}}{{> navigation\/flyout\/item}}{{\/children}}\n\t<\/ul>\n<\/div>\n","navigation\/flyout\/item":"<li {{#id}}id=\"{{id}}\"{{\/id}}\n\tclass=\"wsite-menu-subitem-wrap {{#is_current}}wsite-nav-current{{\/is_current}}\"\n\t>\n\t<a href=\"{{url}}\"\n\t\t{{#target}}target=\"{{target}}\"{{\/target}}\n\t\tclass=\"wsite-menu-subitem\"\n\t\t>\n\t\t<span class=\"wsite-menu-title\">\n\t\t\t{{{title_html}}}\n\t\t<\/span>{{#has_children}}<span class=\"wsite-menu-arrow\">&gt;<\/span>{{\/has_children}}\n\t<\/a>\n\t{{#has_children}}{{> navigation\/flyout\/list}}{{\/has_children}}\n<\/li>\n"},
				{}
			)
		}
		if (jQuery) {
			jQuery(document).ready(function() { jQuery(initFlyouts); });
		}else{
			if (Prototype.Browser.IE) window.onload = initFlyouts;
			else document.observe('dom:loaded', initFlyouts);
		}
	})(window._W && _W.jQuery)
//-->
</script>
		
	</head>
	<body class="short-header-page  wsite-page-view-lists wsite-theme-light"><div class="wrapper">
	  <div class="header-wrap wsite-background wsite-custom-background">
	    <div id="topBar" class="topbar">
	       <label class="hamburger"><span></span></label>
	       <div class="logo"><span class="wsite-logo">

	<a href="">
	
	<span id="wsite-title">WFM Grocery List</span>
	
	</a>

</span></div>
	       
	    </div><!-- end .container -->

		  <div class="banner-wrap">
				<div class="container">
					<div class="banner">
						<h2></h2>
					</div>
				</div>
			</div>
	  </div><!-- end .header-wrap -->  
	     
    <div class="nav-wrap">
      <div class="container">
            <div class="nav desktop-nav"><ul class="wsite-menu-default">
		<li id="pg821307505618350677"
			class="wsite-menu-item-wrap"
			>
			<a href="index.html"
				
				class="wsite-menu-item"
				>
				Home
			</a>
			
		</li>
	<li id="pg861492302795732802"
			class="wsite-menu-item-wrap"
			>
			<a href="login.php"
				
				class="wsite-menu-item"
				>
				Login
			</a>
			
		</li>
				<li class="wsite-menu-item-wrap"
			>
			<a href="newuser.php"
				
				class="wsite-menu-item"
				>
				Sign Up
			</a>
			
		</li>
		<li id="pg410698013925611979"
			class="wsite-menu-item-wrap"
			>
			<a href="create-list.php"
				
				class="wsite-menu-item"
				>
				Create List
			</a>
			
		</li>
		<li id="active"
			class="wsite-menu-item-wrap"
			>
			<a href="view-lists.php"
				
				class="wsite-menu-item"
				>
				View Lists
			</a>
			
		</li>
		<li id="pg792407370437616584"
			class="wsite-menu-item-wrap"
			>
			<a href="feedback.html"
				
				class="wsite-menu-item"
				>
				Feedback
			</a>
			
		</li>
</ul>
</div>
      </div>
    </div>
       
		<div class="main-wrap">
	    <div class="container">
	 			<div class="content-wrap"><div id='wsite-content' class='wsite-elements wsite-not-footer'>
</div>
</div>
	  	</div><!-- end container -->
	  </div>

    <div class="footer-wrap">
    	<div class="container">
    		<div class="footer">2015 | CS460 Team A</div>
    	</div><!-- end container -->
    </div><!-- end footer-wrap -->
	</div>

  <div class="nav mobile-nav">
    <label class="hamburger"><span></span></label>
    <ul class="wsite-menu-default">
    		<li id="pg821307505618350677"
    			class="wsite-menu-item-wrap"
    			>
    			<a href="index.html"
    				
    				class="wsite-menu-item"
    				>
    				Home
    			</a>
    			
    		</li>
    	<li id="pg861492302795732802"
			class="wsite-menu-item-wrap"
			>
			<a href="login.php"
				
				class="wsite-menu-item"
				>
				Login
			</a>
			
		</li>
				<li class="wsite-menu-item-wrap"
			>
			<a href="newuser.php"
				
				class="wsite-menu-item"
				>
				Sign Up
			</a>
			
		</li>
    		<li id="pg410698013925611979"
    			class="wsite-menu-item-wrap"
    			>
    			<a href="create-list.php"
    				
    				class="wsite-menu-item"
    				>
    				Create List
    			</a>
    			
    		</li>
    		<li id="active"
    			class="wsite-menu-item-wrap"
    			>
    			<a href="view-lists.php"
    				
    				class="wsite-menu-item"
    				>
    				View Lists
    			</a>
    			
    		</li>
    		<li id="pg792407370437616584"
    			class="wsite-menu-item-wrap"
    			>
    			<a href="feedback.html"
    				
    				class="wsite-menu-item"
    				>
    				Feedback
    			</a>
    			
    		</li>
    </ul>
  </div>

	<script type="text/javascript" src="files/theme/plugins.js"></script>
	<script type="text/javascript" src="files/theme/custom.js"></script>

		
		
	</body>
</html>
<?php }  else header("Location: login.html");
?>
