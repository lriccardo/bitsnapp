<!DOCTYPE html>
	<!--[if IE 8]>
		<html xmlns="http://www.w3.org/1999/xhtml" class="ie8" lang="en-US">
	<![endif]-->
	<!--[if !(IE 8) ]><!-->
		<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
	<!--<![endif]-->
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Log In &lsaquo; Bitsnapp &#8212; WordPress</title>
	<link rel='dns-prefetch' href='//s.w.org' />
<link rel='stylesheet' href='/bitsnapp/wp-admin/load-styles.php?c=1&amp;dir=ltr&amp;load%5B%5D=dashicons,buttons,forms,l10n,login&amp;ver=4.9.4' type='text/css' media='all' />
<meta name='robots' content='noindex,follow' />
	<meta name="viewport" content="width=device-width" />
	<link rel="icon" href="/bitsnapp/wp-content/uploads/2018/02/cropped-web_hi_res_512-32x32.png" sizes="32x32" />
<link rel="icon" href="/bitsnapp/wp-content/uploads/2018/02/cropped-web_hi_res_512-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="/bitsnapp/wp-content/uploads/2018/02/cropped-web_hi_res_512-180x180.png" />
<meta name="msapplication-TileImage" content="/wp-content/uploads/2018/02/cropped-web_hi_res_512-270x270.png" />
	</head>
	<body class="login login-action-login wp-core-ui  locale-en-us">
		<div id="login">
		<h1><a href="https://wordpress.org/" title="Powered by WordPress" tabindex="-1">Powered by WordPress</a></h1>
	
<form name="loginform" id="loginform" action="/bitsnapp/wp-login.php" method="post">
	<p>
		<label for="user_login">Username or Email Address<br />
		<input type="text" name="log" id="user_login" class="input" value="" size="20" /></label>
	</p>
	<p>
		<label for="user_pass">Password<br />
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" /></label>
	</p>
		<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> Remember Me</label></p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In" />
		<input type="hidden" name="redirect_to" value="/wp-admin/" />
		<input type="hidden" name="testcookie" value="1" />
	</p>
</form>

<p id="nav">
	<a href="/bitsnapp/wp-login.php?action=lostpassword">Lost your password?</a>
</p>

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>

	<p id="backtoblog"><a href="/bitsnapp/">&larr; Back to Bitsnapp</a></p>
	
	</div>

	
	<script type="text/javascript">window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("backToTop").style.display = "block";
    } else {
        document.getElementById("backToTop").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
jQuery(function($) {
 $('#page').append('<button id="backToTop" onclick="topFunction()" type="button" class="back_to_top"><i class="fa fa-chevron-up fa-lg"></i></button>');
 $.getScript('https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.19/jquery.scrollify.min.js', function() {
   $( document ).ready(function() {
    if (window.matchMedia("only screen and (max-width: 760px)").matches) {
          $('a[href*=#]').on('click',function (e) {
          e.preventDefault();
        var target = this.hash;
        var $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 91
        }, 900);
    });
      $(".header-button").click(function() {
   var $target = $("#primary");
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 91
        }, 900);
	});
    }else{
      	 $(".header-button").click(function() {
    $.scrollify.move("#2");
      });
         $.scrollify({
           section:".header-image,#statistics,#features,.multicolumn-row,#contacts",
		scrollSpeed:880,
	scrollbars: false,
	setHeights: false,
        offset: -91,
	overflowScroll: false,
	updateHash: false,
	touchScroll: true,
	/*	after:function(i) {

			if(i===2) {
				$.scrollify.setOptions({
					easing:"easeOutExpo"
				});
			}

		}*/
	}); 

      
	  $('a[href*=#]').on('click',function (e) {
          e.preventDefault();
        var target = this.hash;
        var $target = $(target);
     switch(target) {
    case "#primary":
        $.scrollify.move("#2");
        break;
    case "#statistics":
        $.scrollify.move("#3");
        break;
    case "#screenshots":
        $.scrollify.move("#4");
        break;
    case "#download":
        $.scrollify.move("#6");
        break;
    case "#contacts":
        $.scrollify.move("#7");
        break;
} 
    });
    }
 });

});
});</script>	<div class="clear"></div>
	</body>
	</html>
	