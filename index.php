<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
		<script type="text/javascript" src="speakClient.js"></script>
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<script type="text/javascript" src="./lib/jquery-1.9.0.min.js"></script>
		<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="./lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="./source/jquery.fancybox.js?v=2.1.4"></script>
	<link rel="stylesheet" type="text/css" href="./source/jquery.fancybox.css?v=2.1.4" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="./source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="./source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="./source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="./source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="./source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>
		<script>
		var speakArticle = new Array();
		function talk()
		{
			speak('Welcome to interactive news. Lets have a look at Todays Headlines !',{ speed: 140 });
			setTimeout(function() {maketalk()}, 5000);
		}
		function maketalk()
		{
			var headlines="";
			for(i=0;i<speakArticle.length;i++)
				{
					if(speakArticle[i])
						{var n=speakArticle[i].lastIndexOf("-");
						speakArticle[i]=speakArticle[i].substring(0,n);
					
					headlines = headlines + speakArticle[i] + ".\n\n\n\n,,";}
				}
			speak(headlines,{speed: 140});
		}
		
		</script>
    </head>
<body onload="talk()">
<?php 
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0'); // Proxies.
// Fetches articles from the BBC news feed. 
$count=0;
function fetch_rss(){ 

    $data = file_get_contents("http://news.google.com/?output=rss"); 
     
    $data = simplexml_load_string($data); 
     
    $articles = array(); 
     
    foreach ($data->channel->item as $item) 
    { 
         
        $articles[] = array( 
            'title' => (string)$item->title, 
            'description' => (string)$item->description, 
            'link' => (string)$item->link, 
        );     
    } 
     
 return $articles; 

} 
function makeArticle($article)
{
	$doc = new DOMDocument();
	@$doc->loadHTML($article);
	$tags = $doc->getElementsByTagName('img');
	foreach ($tags as $tag) {
		if($tag->getAttribute('src'))
       echo "<img class =\"headlineImg\" src='".$tag->getAttribute('src')."'>";
	}
	//$img = strip_tags($article,'<img>');
	//return $img;
}

?>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                <div class="title">INTERACTIVE NEWS</div>
				<div class="searchbox"><input class="line" type="text"  placeholder="Search..."/></div>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">
				<div id="audio"></div>
				<!--<header>
                        <h1>We bring you news!</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec.</p>
                </header>-->
				<article>
					<?php
					$articles = fetch_rss();
					foreach ($articles as $article)
						  {
							echo "<section><a class=\"fancybox fancybox.iframe\" href=\"".$article['link']."\"><div class=\"headline\">";
							echo $article['title']."<script>speakArticle[".$count."]=\"".$article['title']."\"</script></div>";
							$count++;
							echo makeArticle($article['description'])."</a>".'<div class="shareButton"><!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_default_style">
<a class="a2a_dd" href="http://www.addtoany.com/share_save?linkurl=http%3A%2F%2Fnews.aashrayarora.com%2F&amp;linkname=Active%20News%20%3A%20Aashray%20Arora">Share</a>
<span class="a2a_divider"></span>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_email"></a>
<a class="a2a_button_linkedin"></a>
</div>
<script type="text/javascript">
var a2a_config = a2a_config || {};
a2a_config.linkname = "Active News : Aashray Arora";
a2a_config.linkurl = "http://news.aashrayarora.com/";
a2a_config.num_services = 4;
</script>
<script type="text/javascript" src="http://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->'."</div></section>";
						  }
					?>
					<section><div id="ndn_single_player_a3084a23-8430-a1a4-d140-7c80d0b55114"><script type="text/javascript" src="http://embed.newsinc.com/Single/embed.js?wid=2&vid=24871842&freewheel=90106&sitesection=bostonglobe&height=338&width=600&parent=ndn_single_player_a3084a23-8430-a1a4-d140-7c80d0b55114"></script></div></section>
					 </article>
                <!--<aside>
                    <h3>aside</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices.</p>
                </aside>-->

            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                A basic Aplha prototype Developed by Aashray. Only to show you certain functions of my project that I cannot through Images. Coding an entire website like this takes very long and is beyond the scope of this course, I spent a lot of time to develope this only to give you an idea. I will try my best to make the closest possible to the real thing by week 7 for my beta.
            </footer>
        </div>

        
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>