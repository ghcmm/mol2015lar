<header id="header">
    <img src="http://www.mariesofludlow.co.uk/images/template/barogue_tl.png" height="80px" style="float:left" alt=""/>
    <img src="http://www.mariesofludlow.co.uk/images/template/barogue_tr.png" height="80px" style="float:right" alt=""/>		<div id="logo" align="center">
    <img src="http://www.mariesofludlow.co.uk/images/template/logo.png" height="80px" alt=""/>
    <h1 style="display:inline;">Maries of Ludlow</h1>
    </div>
	<span id="navbaroque">
	    <img src="http://www.mariesofludlow.co.uk/images/template/baroque_small_left.png" style="float:left" alt=""/>
	    <img src="http://www.mariesofludlow.co.uk/images/template/baroque_small_right.png" style="float:right" alt=""/>
	</span>
	<nav>
	    <a href='http://www.mariesofludlow.co.uk/pages/index'>Home</a>
	    <a href='http://www.mariesofludlow.co.uk/pages/about'>About</a>
	    <a href='http://www.mariesofludlow.co.uk/pages/services'>Service</a>
	    <a href='http://www.mariesofludlow.co.uk/pages/contact'>Contact Us</a>
	</nav>
    </div>
    <script>
	$(document).ready(function(){setLayout();});
	$(window).resize(function(){setLayout();});
	function setLayout(){
	    var hh=$('#header').height();
	    var fh=$('footer').height();
	    var iw=$("#logo1").width();
	    $('#textbox').css('margin-left',iw+'px');
	};
    </script>
</header>