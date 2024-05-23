<?php													
	ini_set('session.use_trans_sid', false);			
	ini_set('url_rewriter.tags', '');					
	session_name('rocketcakelogin');					
	session_start();									
	if(!isset($_SESSION['user']))						
	{													
		$pagename = $_SERVER['REQUEST_URI'];			
		$_SESSION['targetpage'] = $pagename;			
		header('Location: login.php');				
		exit;											
	}													
 ?><!DOCTYPE html>
<html> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="generator" content="RocketCake">
	<title></title>
	<link rel="stylesheet" type="text/css" href="online-banking_php.css">
</head>
<body>
<div class="textstyle1">
<div id="container_21b57895"><div class="textstyle2"><div id="container_218b9b00"><div id="container_218b9b00_padding" ><div class="textstyle2"><div id="container_22e24068"><div id="container_22e24068_padding" ><div class="textstyle2">  <a href="index.html" style="text-decoration:none"><div id="button_638fb4e9">
    <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle2">
        </div>
      </div></div>
    </div></a>
  <a href="index.html"><img src="rc_images/image.png" width="1000" height="1352" id="img_76b73786" alt="" title="" border="0" /></a>
</div>
<div style="clear:both"></div></div></div><div id="container_3b7503c4"><div id="container_3b7503c4_padding" ><div class="textstyle3">  <div id="menu_64225efd">
    <div  id="menu_64225efd_menualignmentwrapper" >
      <div  class="menuholder1"><a href="javascript:void(0);">
	<div id="menuentry_27dba1b5"  class="menustyle1 menu_64225efd_mainMenuEntry mobileEntry">
		<div class="menuentry_text1">
        <span class="textstyle4">&#8801;</span>
		</div>
	</div>
</a>
<a href="index.html" style="text-decoration:none">
	<div id="menuentry_1383d4b1"  class="menustyle2 menu_64225efd_mainMenuEntry normalEntry">
		<div class="menuentry_text2">
<span class="textstyle5">Home</span><span class="textstyle6">&#9660;</span>		</div>
	</div>
</a>
<a href="javascript:void(0);">
	<div id="menuentry_2cd456e3"  class="menustyle3 menu_64225efd_mainMenuEntry normalEntry">
		<div class="menuentry_text2">
        <span class="textstyle5">Online Banking</span>
		</div>
	</div>
</a>
<a href="borrowing.html" style="text-decoration:none">
	<div id="menuentry_99b9ef4"  class="menustyle4 menu_64225efd_mainMenuEntry normalEntry">
		<div class="menuentry_text2">
        <span class="textstyle5">Borrowing</span>
		</div>
	</div>
</a>
<a href="contact.html" style="text-decoration:none">
	<div id="menuentry_5893e2be"  class="menustyle5 menu_64225efd_mainMenuEntry normalEntry">
		<div class="menuentry_text2">
        <span class="textstyle5">Help</span>
		</div>
	</div>
</a>

	<script type="text/javascript" src="rc_images/wsp_menu.js"></script>
	<script type="text/javascript">
		var js_menu_64225efd= new wsp_menu('menu_64225efd', 'menu_64225efd', 10, null, true);

		js_menu_64225efd.createMenuForItem('menuentry_27dba1b5', ["        <span class=\"textstyle7\">Home&#9660;</span> ", 'index.html', '',
		                                   "        <span class=\"textstyle7\">&#160;&#160;&#160;Main Page</span> ", 'index.html', '',
		                                   "        <span class=\"textstyle7\">&#160;&#160;&#160;Service Section</span> ", 'index.html', '',
		                                   "        <span class=\"textstyle7\">Online Banking</span> ", 'javascript:void(0);', '',
		                                   "        <span class=\"textstyle7\">Borrowing</span> ", 'borrowing.html', '',
		                                   "        <span class=\"textstyle7\">Help</span> ", 'contact.html', '']);
		js_menu_64225efd.createMenuForItem('menuentry_1383d4b1', ["        <span class=\"textstyle7\">Main Page</span> ", 'index.html', '',
		                                   "        <span class=\"textstyle7\">Service Section</span> ", 'index.html', '']);
		js_menu_64225efd.createMenuForItem('menuentry_2cd456e3', []);
		js_menu_64225efd.createMenuForItem('menuentry_99b9ef4', []);
		js_menu_64225efd.createMenuForItem('menuentry_5893e2be', []);

	</script>
        </div>
      </div>
    </div>
</div>
<div class="textstyle2">  <a href="search.html"><img src="rc_images/search_interface_symbol.png" width="512" height="512" id="img_2eed27d" alt="" title="" border="0" /></a>
</div>
<div style="clear:both"></div></div></div></div>
<div style="clear:both"></div></div></div><div id="container_6470dc24"><div id="container_6470dc24_padding" ><div class="textstyle2"><div id="slide_4365d317">
	<script type="text/javascript" src="rc_images/wsp_slideshow.js"></script>
	<script type="text/javascript">
		var js_slide_4365d317= new wsp_slideshow('slide_4365d317',['rc_images/image__1_.png', 'rc_images/o_bank_teller_facebook_1200x600.jpg'], 'fade', 7000, 500, 'cover', null, 'center');
	</script>
</div><div id="container_4f34cc6e"><div id="container_4f34cc6e_padding" ><div class="textstyle2">  <div id="text_14de6854">
    <div class="textstyle2">
      <span class="textstyle8">Spendings Account:</span>
      </div>
    </div>
  <div id="text_61c472e7">
    <div class="textstyle2">
      <span class="textstyle9">&#163;10,000</span>
      </div>
    </div>
  <div id="text_297d27c3">
    <div class="textstyle2">
      <span class="textstyle8">Savings Account:</span>
      </div>
    </div>
  <div id="text_7b547ce0">
    <div class="textstyle2">
      <span class="textstyle9">&#163;2,000,000</span>
      </div>
    </div>
</div>
<div style="clear:both"></div></div></div></div>
<div class="textstyle1"><span class="textstyle10"><br/></span></div>
<div class="textstyle2"><span class="textstyle9"><br/></span></div>
<div style="clear:both"></div></div></div><div id="container_9663379"><div id="container_9663379_padding" ><div class="textstyle2">  <span class="textstyle11"><br/><br/></span>
  <form  action=""
enctype="application/x-www-form-urlencoded"
method="POST" id="form_5be0ad15">
    <div id="form_5be0ad15_padding" >
      <div class="textstyle2">
        <div id="text_92975f0">
          <div class="textstyle2">
<input type="text" value="" title="" name="TextEdit1"  placeholder="Amount" required="required"  id="edit_7d022765" >
<input type="text" value="" title="" name="TextEdit2"  placeholder="Account Number"  id="edit_53fe67b0" >
<input type="password" value="" title="" name="TextEdit3"  placeholder="Your Password"  id="edit_7af4dfa0" >
<input name="Button2" type="submit" value="Send" title=""  id="button_12dee79e" >
            </div>
          </div>
        </div>
      <div style="clear:both"></div>
      </div>
    </form>
</div>
<div class="textstyle1">  <span class="textstyle12"><br/><br/></span>
</div>
<div class="textstyle2">  <div id="text_75018b1a">
    <div class="textstyle2">
      <span class="textstyle13">Online Transfers</span>
      </div>
    </div>
  <a href="paypal.me" style="text-decoration:none"><div id="button_3b8da00f">
    <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle1">
        <span class="textstyle14">Send via Paypal</span>
        </div>
      <div class="textstyle2">
        </div>
      </div></div>
    </div></a>
  <img src="rc_images/1034_paypal_logo.png" width="128" height="128" id="img_3433bcff" alt="" title="" />
</div>
<div style="clear:both"></div></div></div><div id="container_212cc296"><div id="container_212cc296_padding" ><div class="textstyle2"><span class="textstyle11"><br/><br/></span></div>
<div class="textstyle1"><div id="container_75164be8"><div id="container_75164be8_padding" ><div class="textstyle2"><span class="textstyle15"><br/></span></div>
<div class="textstyle1"><span class="textstyle15">Call us any time:<br/></span><span class="textstyle16">+44 1234 5678 90123</span></div>
<div class="textstyle2"></div>
<div style="clear:both"></div></div></div><span class="textstyle12"><br/><br/></span></div>
<div style="clear:both"></div></div></div></div>
</div>  </div>
<div class="textstyle2">
<div id="anchor_490e1e4d"><a name="NamedAnchor1"></a></div>
  </div>
</body>
</html>