<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>W Green Pay</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap & Jquery -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Muli:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link href="timeline.css" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="jquery.flipcountdown.css" />
<link href="magnific-popup.css" rel="stylesheet">
<link href="sidemenu.css" rel="stylesheet">
<link href="flexslider.css" rel="stylesheet" type="text/css" />
<link href="media-queries.css" rel="stylesheet">
<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

<script src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/jquery.flipcountdown.js"></script>
<script src="https://use.typekit.net/bkt6ydm.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
 <!-- Google Tag Manager -->
 <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5X2FMMG');</script>
  <!-- End Google Tag Manager -->

 <!-- Sendgrid -->
<script type="text/javascript" src="//sgwidget.leaderapps.co/js/sg-widget.js"></script>

<style>

.flexslider .slides img {
    width:100%;
    display: inline-block;
	max-width:350px;
}

.flexslider .flex-control-nav {
    bottom: -20px;
	left:36%;
}

.flex-control-paging li a {
	width:10px;
	height:10px;
	margin:0 5px;
	background-color:#fff;
}

.flex-control-paging li a.flex-active {
	background-color:#7fae50;
}

.white-popup {
	position: relative;
	background: #00727b;
	border-top:6px solid #9bd433;
	width: auto;
	max-width: 750px;
	margin: 25px auto;
	padding: 50px 25px;
}

#participateform {
	max-width: 555px !important;
}

.mfp-bg {
	background: #000;
}
.mfp-close-btn-in .mfp-close {
	color: #9bd433;
}
.mfp-close {
	font-size: 36px;
}
.mfp-content h3 {
	font-size:24px;
}



</style>

<!-- Add sidemenu -->
<script>
(function($){
	// Menu Functions
	$(document).ready(function(){
  	$('#menuToggle').click(function(e){
    	var $parent = $(this).parent('nav');
      $parent.toggleClass("open");
      var navState = $parent.hasClass('open') ? "hide" : "show";
      $(this).attr("title", navState + " navigation");
			// Set the timeout to the animation length in the CSS.
			setTimeout(function(){
				console.log("timeout set");
				$('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
			}, 200);
    	e.preventDefault();
  	});
  });
})(jQuery);

</script>

 <script>

          function closeSidebar(e) {
            var obj = event.target;
            var $parent = $('nav');
            $parent.toggleClass("open");
            var navState = $parent.hasClass('open') ? "hide" : "show";
            $(obj).attr("title", navState + " navigation");
            setTimeout(function () {
              $('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
            }, 200);
          }

   </script>

  

</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5X2FMMG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!------------ Navigation start ------------>
<div id="header">
  <div class="blue-line"></div>
  <div style="position:relative;">
    <a href="#home"><div id="logo"></div></a>
    <a href="WGP-whitepaper.pdf" target="_blank" class="btn header-btn whitepaper">Whitepaper</a>
    <a href="#participateform" class="open-popup-link btn header-btn">Subscribe</a>
    <div class="lng-container">
      <div class="dropdown">
          <a href="">Language &nbsp;<i class="fa fa-chevron-down"></i></a>
          <div class="dropdown-content">
            <p><a href="index-kr.php">Korean</a></p>
            <p><a href="index-zh.php">Chinese</a></p>
          </div>
      </div> 
      <!--<a href="#" class="lng lng-active">EN</a> &nbsp;<a href="index-kr.php" class="lng">KR</a>-->
    </div>
    <ul id="menu">
      <li>
        <div class="dropdown">
          <a href="">MEDIA</a>
          <div class="dropdown-content">
            <p><a href="#partners">Partners</a></p>
            <p><a href="#exchanges">Exchanges</a></p>
            <p><a href="#videos">Videos</a></p>
            <p><a href="#articles">Articles</a></p>
            <!--<p><a href="#blog">Blog</a></p>-->
          </div>
        </div>
      </li>
      <li><a href="#about">About</a></li>
      <li><a href="#tokenomics">Tokenomics & Usability</a></li>
      <li><a href="#token">Token Details</a></li>
      <li><a href="#roadmap">Roadmap</a></li>
	    <li><a href="#partner">Partner</a></li>
      <li><a href="#team">Team</a></li>
      <!--<li><a href="#advisers">Advisers</a></li>-->
      <li><a href="#contact">Contact</a></li>
    </ul>
    <nav> 
      <a href="" id="menuToggle" title="show menu"><span class="navClosed"></span></a> 
      <label for="drop-1" href="#" class="nav-dropdown toggle">Media
        <i class="fa fa-angle-down"></i>
      </label>
      <a href="#">Media</a>
      <input type="checkbox" id="drop-1" />
      <div class="drop-content">
        <p><a href="#partners" onclick="closeSidebar(this)">Partners</a></p>
        <p><a href="#exchanges" onclick="closeSidebar(this)">Exchanges</a></p>
        <p><a href="#videos" onclick="closeSidebar(this)">Videos</a></p>
        <p><a href="#articles" onclick="closeSidebar(this)">Articles</a></p>
        <!--<p><a href="#blog" onclick="closeSidebar(this)">Blog</a></p>-->
      </div>
      <a href="#about" onclick="closeSidebar(this)">About</a>
      <a href="#tokenomics" onclick="closeSidebar(this)">Tokenomics % Usability</a>
      <a href="#token" onclick="closeSidebar(this)">Token Details</a>
      <a href="#roadmap" onclick="closeSidebar(this)">Roadmap</a>
	    <a href="#partner" onclick="closeSidebar(this)">Partner</a>
      <a href="#team" onclick="closeSidebar(this)">Team</a>
      <!--<a href="#advisers" onclick="closeSidebar(this)">Advisers</a>-->
      <a href="#contact" onclick="closeSidebar(this)">Contact</a>
      <div class="whitepaper-mobile">
        <a href="#participateform" class="open-popup-link">Participate</a> 
      </div>
      <div class="whitepaper-mobile">
      <a href="WGreenPay-whitepaper-v2.0.pdf" target="_blank">Whitepaper</a>
      </div>
      <div class="lng-mobile">
        <a href="index-kr.php">KR</a> &nbsp; <a href="index-zh.php">CN</a> 
      </div>
    </nav>
  </div>
</div>
<!------------ Navigation end ------------> 

<!------------ Home banner start ------------>
<div id="home">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12 v-pad">
        <div class="flex-container">
          <div class="flexslider">
            <ul class="slides">
              <li><img src="img/screenshot-1.png" alt=""></li>
              <li><img src="img/screenshot-2.png" alt=""></li>
              <li><img src="img/screenshot-3.png" alt=""></li>
              <li><img src="img/screenshot-4.png" alt=""></li>
              <li><img src="img/screenshot-5.png" alt=""></li>
              <li><img src="img/screenshot-6.png" alt=""></li>
              <li><img src="img/screenshot-7.png" alt=""></li>
              <li><img src="img/screenshot-8.png" alt=""></li>
              <li><img src="img/screenshot-9.png" alt=""></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 v-pad" style="padding-top:40px;">
        <h1 class="green-text">Hooxi</h1>
        <h1 style="text-transform:none;">Blockchain for Social Good</h1>
        <br><br>
        <h4>HOOXI mobile application is a gamified mobile social network service that encourages the public to perform and share results of greenhouse gas emissions reduction missions.</h4>
        <br><br><br><br>
        <div class="dl-btn"><a href=""><img src="img/download-appstore.png" alt=""></a></div>
        <div class="dl-btn"><a href=""><img src="img/download-googleplay.png" alt=""></a></div>
        <div style="clear:both;"></div>
      </div>
    </div>
  </div>
  <!--
  <div class="home-container">
    <h1>JOIN <span style="color:#87b44c;">W GREEN PAY</span> HOOXI CAMPAIGN!</h1>
    <h4>The most innovative social carbon credit platform to be launched.</h4>
    <br>
    <table>
      <tr valign="top"> 
        <td style="text-align:right;"><h4>PRIVATE SALE</h4></td>
        <td style="text-align:left;"><h4 style="color:#87b44c;">1st Tier SOLD OUT!</span></h4></td>
      </tr>
      <tr valign="top"> 
        <td></td>
        <td style="text-align:left;"><h4 style="color:#87b44c;">2nd Tier SOLD OUT!</span></h4></td>
      </tr> 
      <tr valign="top"> 
        <td style="text-align:right;"><h4>PUBLIC SALE</h4></td>
        <td style="text-align:left;"><h4 style="color:#87b44c;">SOLD OUT!</h4></td>
      </tr>  
    </table>
    <br><br>
    <div id="token_sale"></div>
    <br>
    <ul class="countdown">
      <li class="days small-font">
        DAYS
      </li>
      <li class="hrs small-font">
        HRS
      </li>
      <li class="mins small-font">
        MIN
      </li>
      <li class="sec small-font">
        SEC
      </li>
    </ul>
    
    <br>
    <br>
    <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
      Private Sale
      </div>
      <div class="progress-bar2">Public Sale</div>
    </div>
    <div class="sale-container">
      <div class="privatesale">0</div>
      <div class="publicsale">200,000,000 WGP</div>
    </div>
    <br>
    <br>
    <br>
    <ul class="home-btn">
      <li><a href="#participateform" class="open-popup-link btn" target="_blank">Subscribe</a></li>
      <li><a href="WGreenPay-whitepaper-v2.0.pdf" target="_blank" class="btn">Whitepaper</a></li>
    </ul>
  </div>-->
  
</div>
<!------------ Home banner end ------------>

<!------------ Media start ------------>
<section id="partners">
  <div class="container">
    <h3 class="black-text bold">Partners</h3>
    <div class="h-line h-line-s"></div>
    <div class="row">
      <div class="col-md-2 col-sm-2 col-xs-4 v-pad"><img src="img/partner-kric.jpg" alt=""></div>
      <div class="col-md-2 col-sm-2 col-xs-4 v-pad"><img src="img/partner-actwo.jpg" alt=""></div>
      <div class="col-md-2 col-sm-2 col-xs-4 v-pad"><img src="img/partner-theblockpost.jpg" alt=""></div>
      <div class="col-md-2 col-sm-2 col-xs-4 v-pad"><img src="img/partner-coinbeat.jpg" alt=""></div>
      <div class="col-md-2 col-sm-2 col-xs-4 v-pad"><img src="img/partner-factblock.jpg" alt=""></div>
      <div class="col-md-2 col-sm-2 col-xs-4 v-pad"><img src="img/partner-novum.jpg" alt=""></div>
    </div>
    <div class="row">
      <div class="col-md-2 col-sm-2 col-xs-4 v-pad"><img src="img/partner-blockmonsterlab.jpg" alt=""></div>
      <div class="col-md-2 col-sm-2 col-xs-4 v-pad"><img src="img/partner-bitmonex.jpg" alt=""></div>
      <div class="col-md-2 col-sm-2 col-xs-4 v-pad"><img src="img/partner-lightyear.jpg" alt=""></div>
      <div class="col-md-2 col-sm-2 col-xs-4 v-pad"><img src="img/partner-fleta.jpg" alt=""></div>
      <div class="col-md-2 col-sm-2 col-xs-4 v-pad"><img src="img/partner-icon.jpg" alt=""></div>
      <div class="col-md-2 col-sm-2 col-xs-4 v-pad"><img src="img/partner-orbs.jpg" alt=""></div>
    </div>
    <div class="row">
      <div class="col-md-2 col-sm-2 col-xs-4 v-pad"><img src="img/partner-emusic.jpg" alt=""></div>
      <div class="col-md-2 col-sm-2 col-xs-4 v-pad"><img src="img/partner-wings.jpg" alt=""></div>
      <div class="col-md-2 col-sm-2 col-xs-4 v-pad"><img src="img/partner-daehyun.jpg" alt=""></div>
      <div class="col-md-2 col-sm-2 col-xs-4 v-pad"><img src="img/partner-kona.jpg" alt=""></div>
      <div class="col-md-2 col-sm-2 col-xs-4 v-pad"><img src="img/partner-hankyungbp.jpg" alt=""></div>
      <div class="col-md-2 col-sm-2 col-xs-4 v-pad"><img src="img/partner-kweather.jpg" alt=""></div>
    </div>
  </div>
</section>
<div class="container" style="border-top:1px solid #eeeeee;"></div>
<section id="exchanges">
  <div class="container">
    <h3 class="black-text bold">Exchanges</h3>
    <div class="h-line h-line-s" style="background:#001a3d;"></div>
    <div class="row">
      <div class="col-md-3 col-sm-3 col-xs-6 v-pad"><<img src="img/exchanges-gdac.jpg" alt=""></div>
      <div class="col-md-3 col-sm-3 col-xs-6 v-pad"><<img src="img/exchanges-huobi.jpg" alt=""></div>
    </div>
  </div>
</section>
<div class="media-bg">
  <section id="videos">
    <div class="container">
      <h3 class="bold">Video</h3>
      <div class="h-line h-line-s"></div>
      <div class="row">
      <div class="flex-container">
        <div class="media-slider">
          <ul class="slides" style="text-align:center;">
            <li>
              <div class="col-md-6 col-sm-6 v-pad">
                <a href="https://www.youtube.com/watch?v=VB2oOM2MlcQ" class="video-pop-up"><img src="img/video-thumb-1.jpg" alt=""></a>
                <br><br>
                <h4>GHG Reduction Campaign (HOOXI Campaign) Declaration Ceremony</h4>
              </div>
              <div class="col-md-6 col-sm-6 v-pad">
                <a href="https://www.youtube.com/watch?v=QXNmaJxk0Nc" class="video-pop-up"><img src="img/video-thumb-2.jpg" alt=""></a>
                <br><br>
                <h4>Beautiful World by W-Foundation</h4>
              </div>
            </li>
            <li>
              <div class="col-md-6 col-sm-6 v-pad">
                <a href="https://www.youtube.com/watch?v=0KNCErbpYvc" class="video-pop-up"><img src="img/video-thumb-3.jpg" alt=""></a>
                <br><br>
                <h4>Talk about Love by W-Foundation</h4>
              </div>
              <div class="col-md-6 col-sm-6 v-pad">
                <a href="https://www.youtube.com/watch?v=j47MC3V9qMM" class="video-pop-up"><img src="img/video-thumb-4.jpg" alt=""></a>
                <br><br>
                <h4>Together As One by W-Foundation</h4>
              </div>
            </li>
            <li>
              <div class="col-md-6 col-sm-6 v-pad">
                <a href="https://www.youtube.com/watch?v=SxTATUzroa0" class="video-pop-up"><img src="img/video-thumb-5.jpg" alt=""></a>
                <br><br>
                <h4>GHG Reduction Campaign (HOOXI Campaign) Committee Inauguration Ceremony</h4>
              </div>
		          <div class="col-md-6 col-sm-6 v-pad">
                <a href="https://www.youtube.com/watch?v=vaG1GzVZS88" class="video-pop-up"><img src="img/video-thumb-8.jpg" alt=""></a>
                <br><br>
                <h4>Hooxi App - The Law of the Jungle</h4>
              </div>
            </li>
            <li>
              <div class="col-md-6 col-sm-6 v-pad">
                <a href="https://www.youtube.com/watch?v=Vhg8p_LrRSY" class="video-pop-up"><img src="img/video-thumb-9.jpg" alt=""></a>
                <br><br>
                <h4>W Green Pay CEO, Dr. Youree Lee, on Blockchain Insight Frontier Interview</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    </div>
  </section>
  <div class="container" style="border-top:1px solid #4dbf94;"></div>
  <section id="articles">
    <div class="container">
      <h3 class="bold">Articles</h3>
      <div class="h-line h-line-s"></div>
      <div class="row">
      <div class="flex-container">
        <div class="articles-slider">
          <ul class="slides">
            <li>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <div class="blog-img"><img src="img/media-logos/media-uncc.jpg" alt=""></div>
                  <br><br>
                  <h4>Taking Climate Action Via a Gaming App</h4>
                  <br>
                  <a href="https://unfccc.int/news/taking-climate-action-via-a-gaming-app" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <div class="blog-img"><img src="img/media-2.jpg" alt=""></div>
                  <br><br>
                  <h4>W-Foundation Announces W Green Pay Token Supply Reduction</h4>
                  <br>
                  <a href="https://coinbeat.com/w-foundation-announces-w-green-pay-token-supply-reduction/ " target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <div class="blog-img"><img src="img/media-3.jpg" alt=""></div>
                  <br><br>
                  <h4>W-Foundation’s GHG campaign mobile app HOOXI ranks 4th on Google Play & App Store</h4>
                  <br>
                  <a href="https://medium.com/wgreenpay/hooxi-app-w-foundations-ghg-campaign-mobile-application-ranks-4th-on-google-play-7c2c3dc96cd4 " target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <!--<div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-eng-marketsinsider.png" alt="">
                  <br><br>
                  <p>MARKETINSIDER</p>
                  <br>
                  <h4>Korea's Largest Government-backed HOOXI Campaign Ventures into Blockchain</h4>
                  <br>
                  <a href="http://markets.businessinsider.com/news/stocks/korea-s-largest-government-backed-hooxi-campaign-ventures-into-blockchain-1024702109" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-eng-cointelegraph.png" alt="">
                  <br><br>
                  <p>COINTELEGRAPH</p>
                  <br>
                  <h4>Korea’s Government-backed HOOXI Campaign Issues W Green Pay (WGP), First Blockchain Enabled Reward System For GHG Reduction by Individuals</h4>
                  <br>
                  <a href="https://cointelegraph.com/press-releases/koreas-government-backed-hooxi-campaign-issues-w-green-pay-wgp-first-blockchain-enabled-reward-system-for-ghg-reduction-by-individuals" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-eng-nulltx.png" alt="">
                  <br><br>
                  <p>NULLTX</p>
                  <br>
                  <h4>Korea’s Government-backed HOOXI Campaign Issues W Green Pay (WGP), First Blockchain Enabled Reward System For GHG Reduction by Individuals</h4>
                  <br>
                  <a href="https://nulltx.com/koreas-government-backed-hooxi-campaign-issues-w-green-pay-wgp-first-blockchain-enabled-reward-system-for-ghg-reduction-by-individuals/" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>-->
            </li>
            <li>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <div class="blog-img"><img src="img/media-logos/media-deconomy.jpg" alt=""></div>
                  <br><br>
                  <h4>W-Foundation Participates At Deconomy As Official Partner</h4>
                  <br>
                  <a href="https://coinbeat.com/w-foundation-participates-at-deconomy-as-official-partner/" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <div class="blog-img"><img src="img/media-5.jpg" alt=""></div>
                  <br><br>
                  <h4>W-Foundation Cooperates with United Nations Framework Convention on Climate Change (UNFCCC) on Sustainable Development Goals</h4>
                  <br>
                  <a href="https://medium.com/wgreenpay/w-foundation-cooperates-with-united-nations-framework-convention-on-climate-change-unfccc-on-c1d3f0a88e0d" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <div class="blog-img"><img src="img/media-logos/media-hooxiapp.jpg" alt=""></div>
                  <br><br>
                  <h4>HOOXI App & HOOXI Mall Officially Launched!</h4>
                  <br>
                  <a href="https://medium.com/wgreenpay/hooxi-app-hooxi-mall-officially-launched-ccd498a31f59" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <!--
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-eng-yahoo.png" alt="">
                  <br><br>
                  <p>YAHOO FINANCE</p>
                  <br>
                  <h4>Korea’s Government-backed HOOXI Campaign Issues W Green Pay (WGP), First Blockchain Enabled Reward System For GHG Reduction by Individuals</h4>
                  <br>
                  <a href="https://finance.yahoo.com/news/koreas-government-backed-hooxi-campaign-130000805.html" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-eng-bitcoinexchange.png" alt="">
                  <br><br>
                  <p>BITCOINEXCHANGEGUIDE</p>
                  <br>
                  <h4>Korean Government-backed HOOXI WPG Campaign Launches into Blockchain</h4>
                  <br>
                  <a href="https://bitcoinexchangeguide.com/korean-government-backed-hooxi-wpg-campaign-launches-into-blockchain/" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-eng-kplctv.png" alt="">
                  <br><br>
                  <p>KPLCTV</p>
                  <br>
                  <h4>Korea's Largest Government-backed HOOXI Campaign Ventures into Blockchain</h4>
                  <br>
                  <a href="http://www.kplctv.com/story/38203276/koreas-largest-government-backed-hooxi-campaign-ventures-into-blockchain" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>-->
            </li>
            <li>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <div class="blog-img"><img src="img/media-7.jpg" alt=""></div>
                  <br><br>
                  <h4>Gangwon Provincial Government to Host ‘Korea Carbon Forum 2018’ with W-Foundation</h4>
                  <br>
                  <a href="https://medium.com/wgreenpay/korean-government-hosted-korea-carbon-forum-2018-distributes-w-green-pay-tokens-to-forum-bb8541f68094" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <div class="blog-img"><img src="img/media-logos/media-actwo.jpg" alt=""></div>
                  <br><br>
                  <h4>W-Foundation and Actwo Technologies partner to inject real economy into blockchain, bringing it to the mainstream</h4>
                  <br>
                  <a href="https://medium.com/wgreenpay/w-foundation-and-actwo-technologies-partner-to-inject-the-real-economy-into-blockchain-and-bring-72523b8c79d2" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <div class="blog-img"><img src="img/blog-1.jpg" alt=""></div>
                  <br><br>
                  <h4>ICON (ICX) Partners W Foundation On Global Green Gas Reduction Compensation</h4>
                  <br>
                  <a href="https://ethereumworldnews.com/icon-icx-partners-w-foundation-on-global-green-gas-reduction-compensation/" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <!--
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-eng-abcfoxmontana.png" alt="">
                  <br><br>
                  <p>ABCFOXMANTANA</p>
                  <br>
                  <h4>Korea's Largest Government-backed HOOXI Campaign Ventures into Blockchain</h4>
                  <br>
                  <a href="http://www.abcfoxmontana.com/story/38203276/koreas-largest-government-backed-hooxi-campaign-ventures-into-blockchain" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-eng-fox14tv.png" alt="">
                  <br><br>
                  <p>FOX14TV</p>
                  <br>
                  <h4>Korean Government-backed HOOXI WPG Campaign Launches into Blockchain</h4>
                  <br>
                  <a href="http://www.fox14tv.com/story/38203276/koreas-largest-government-backed-hooxi-campaign-ventures-into-blockchain" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-eng-findclimateanswers.png" alt="">
                  <br><br>
                  <p>FINDCLIMATEANSWERS</p>
                  <br>
                  <h4>Korea’s Government-Backed HOOXI Campaign Issues W Green Pay (WGP), First Blockchain Enabled Reward System for GHG Reduction by Individuals</h4>
                  <br>
                  <a href="http://www.findclimateanswers.com/koreas-government-backed-hooxi-campaign-issues-w-green-pay-wgp-first-blockchain-enabled-reward-system-for-ghg-reduction-by-individuals/" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>-->
            </li>
            <li>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <div class="blog-img"><img src="img/media-10.jpg" alt=""></div>
                  <br><br>
                  <h4>W Green Pay ICO (WGP Token): HOOXI Blockchain Social Carbon Credits?</h4> 
                  <br>
                  <a href="https://bitcoinexchangeguide.com/w-green-pay-ico-wgp-token/" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <div class="blog-img"><img src="img/media-11.jpg" alt=""></div>
                  <br><br>
                  <h4>W Green Pay and KONA I: Korea’s First Crypto Debit Card</h4> 
                  <br>
                  <a href="https://medium.com/wgreenpay/w-green-pay-and-kona-i-koreas-first-crypto-debit-card-60e2f24c80a8" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <!--
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-eng-afp.png" alt="">
                  <br><br>
                  <p>AFP</p>
                  <br>
                  <h4>W Green Pay (WGP) - The Global Solution to Greenhouse Gas (GHG) Reduction</h4>
                  <br>
                  <a href="https://www.afp.com/en/news/1314/w-green-pay-wgp-global-solution-greenhouse-gas-ghg-reduction-201805300056201" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
			        <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-eng-eth.png" alt="">
                  <br><br>
                  <p>Ethereum World News</p>
                  <br>
                  <h4>ICON (ICX) Partners W Foundation On Global Green Gas Reduction Compensation</h4>
                  <br>
                  <a href="https://ethereumworldnews.com/icon-icx-partners-w-foundation-on-global-green-gas-reduction-compensation/" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
			        <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-eng-cryptorecorder.png" alt="">
                  <br><br>
                  <p>Crypto Recorder</p>
                  <br>
                  <h4>ICON Coin (ICX) Scoring New Partnerships while Working on Korean Crypto Hub</h4>
                  <br>
                  <a href="https://www.cryptorecorder.com/2018/09/01/icon-coin-icx-scoring-new-partnerships-while-working-on-korean-crypto-hub/" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>-->
            </li>
          </ul>
          <div class="articles-viewall"><a href="media.html" target="_blank" class="btn white-btn articles-btn">View All</a></div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <div class="container" style="border-top:1px solid #4dbf94;"></div>
  <!--
  <section id="blog">
    <div class="container">
      <h3 class="bold">Blog</h3>
      <div class="h-line h-line-s"></div>
      <div class="row">
        <div class="flex-container">
          <div class="blog-slider">
            <ul class="slides">
              <li>
                <div class="col-md-4 col-sm-4 v-pad">
                  <div class="media-articles">
                    <div class="blog-img"><img src="img/blog-1.jpg" alt=""></div>
                    <br><br>
                    <h4>ICON and W Green Pay’s Strategic Partnership</h4>
                    <br>
                    <a href="https://medium.com/wgreenpay/icon-and-w-green-pays-strategic-partnership-aadb6d99ded" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 v-pad">
                  <div class="media-articles">
                      <div class="blog-img"><img src="img/blog-2.jpg" alt=""></div>
                      <br><br>
                      <h4>W Green Pay Announces Partnership with Zeex to Enhance the Usability of WGP Tokens</h4>
                      <br>
                    <a href=" https://medium.com/wgreenpay/w-green-pay-announces-partnership-with-zeex-to-enhance-the-usability-of-wgp-tokens-4b1fbf075a24" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 v-pad">
                  <div class="media-articles">
                    <div class="blog-img"><img src="img/blog-3.jpg" alt=""></div>
                    <br><br>
                    <h4>DaeHyun Accounting Corporation to Support the HOOXI Campaign as a Strategic Investor and Partner</h4>
                    <br>
                    <a href="https://medium.com/wgreenpay/daehyun-accounting-corporation-to-support-the-hooxi-campaign-as-a-strategic-investor-and-partner-a52c5e25c713" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                  </div>
                </div>
              </li>
              <li>
                <div class="col-md-4 col-sm-4 v-pad">
                  <div class="media-articles">
                    <div class="blog-img"><img src="img/blog-4.jpg" alt=""></div>
                    <br><br>
                    <h4>Exciting New Partnership Announcement for W-Foundation</h4>
                    <br>
                    <a href="https://medium.com/wgreenpay/exciting-new-partnership-announcement-for-w-foundation-9c6cd2aa99ce" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 v-pad">
                  <div class="media-articles">
                    <div class="blog-img"><img src="img/blog-6.jpg" alt=""></div>
                    <br><br>
                    <h4>Press Release: Stellar to Power W-Foundation’s HOOXI Campaign W Green Pay (WGP) Tokens</h4>
                    <br>
                    <a href="https://medium.com/wgreenpay/press-release-stellar-to-power-w-foundations-hooxi-campaign-w-green-pay-wgp-tokens-a70f0d630907" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                  </div>
                </div>
              </li>
            </ul>
            <div class="articles-viewall"><a href="blog.html" target="_blank" class="btn white-btn articles-btn">View All</a></div>
          </div>
        </div>
      </div>  
    </div>
  </section>-->
</div>
<section style="padding:40px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
		    <a href="https://icobench.com/ico/w-green-pay" target="_blank"><img src="img/media-logos/ICObench.png"></a>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <a href="https://www.icoalert.com/?q=w%20green%20pay&is_v=1" target="_blank"><img src="img/media-logos/icoalert2.png"></a>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <a href="https://www.coinhills.com/ico/view/w-green-pay/" target="_blank"><img src="img/media-logos/coinhills.png"></a>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <a href="https://www.trackico.io/ico/w-green-pay/" target="_blank"><img src="img/media-logos/TrackICO.png"></a>
      </div>
    </div>
  </div>
</section>
<!------------ Media end ------------>

<!------------ About start ------------>
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12 v-pad">
        <img src="img/about.jpg" alt="">
      </div>
      <div class="col-md-6 col-sm-12 v-pad" style="padding-top:40px;">
        <h1>About</h1>
        <div class="h-line"></div>
        <h2><span style="color:#87b44c;">W-Foundation strongly believes in using</span> ‘Blockchain for Social Good.'</h2>
        <br>
        <h4>W-Foundation adopts blockchain technology to expand HOOXI Campaign globally to promote environmental sustainability – a major component of the United Nations (UN)’ Sustainable Development Goals (SDGs) set as the 2030 Agenda. In specific, W-Foundation supports 1) promotion of voluntary climate actions including compensation of emissions through UNFCCC-recognized carbon credits, and the Climate Neutral Now initiative, and 2) the pledge made by of the Korean government at Copenhagen Accord in 2009, to reduce GHG (Greenhouse Gas) emission by 37% by 2030.</h4>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-6 col-sm-12 v-pad about-col">
        <img src="img/hooxi-phone.jpg" alt="">
      </div>
      <div class="col-md-6 col-sm-12 v-pad about-col" style="padding-top:50px;">
        <h2><span style="color:#fff;">HOOXI</span> Application</h2>
        <br>
        <h4>HOOXI App is the key platform that is gamified and incentivized to motivate the general public to participate in GHG reduction missions.</h4>
        <br>
        <h4>W Green Pay, the blockchain token, is issued to reward the HOOXI App users’ contribution to reducing GHG emissions.</h4>
        <br>
        <h4>Transparency, sustainability, and accountability of HOOXI Campaign is the key focus of W-Foundation, and use of blockchain technology adds further value to achieving these goals; all transactions of W Green Pay are traceable, immutable, and reliable.</h4>
        <br>
        <h4>W Green Pay shall contribute to not only making of a greener earth but also to mass adoption of cryptocurrency and blockchain technology by expanding its community and user base world-wide.</h4>
      </div>
    </div>
  <!--
    <h2>Solution</h2>
    <br>
    <p>The most innovative social carbon credit platform to be launched.</p>
    <br>
    <p>W Green Pay (WGP), the blockchain from HOOXI, Greenhouse Gas (GHG) reduction campaign, is issued to reward general public's contribution to reducing GHG emissions under Korea's KETS (Korea's Emissions Trading Scheme) market.</p>
    <br>
    <h4 style="font-weight:700;">WGP is a reward method to GHG reduction efforts on the anticipated HOOXI app. Users will be able to:</h4>
    <br>
    <br>
    <div class="row">
      <div class="col-md-4 v-pad">
        <div class="features-icon">
          <img src="img/feature-icon-1.png" alt="">
          <br><br>
          <h4>Receive WGP based on their mission points gained from completed environmental tasks</h4>
        </div>
      </div>
      <div class="col-md-4 v-pad">
        <div class="features-icon">
          <img src="img/feature-icon-2.png" alt="">
          <br>
          <h4>Spend W Green Pay at HOOXI Mall and partnered on/offline shops (ie. through Zeex, shop at more than 450 brands including Amazon, Starbucks, etc)</h4>
        </div>
      </div>
      <div class="col-md-4 v-pad">
        <div class="features-icon">
          <img src="img/feature-icon-3.png" alt="">
          <br>
          <h4>Issue "W Green Pay Crypto Card" to use WGP as payment anywhere worldwide</h4>
        </div>
      </div>
    </div>
    <br><br>
    <h2>W-Foundation</h2>
    <br>
    <p>An international non-profit organization established in 2012 and a designated donation organization entitled by the Ministry of Strategy and Finance of Korea, is the philanthropic foundation behind the HOOXI campaign. Using the anticipated HOOXI mobile application, individuals can perform GHG reduction missions to collect mission points, which can be exchanged for WGP.</p>
    <br>
    <h2><span style="color:#fff;">HOOXI</span> Application</h2>
    <br>
    <p>HOOXI App will track and aggregate individuals’ GHG reduction data, based on which W-Foundation will be allocated National Emission Permits (NEPs) - carbon emission units traded in the Korean market. Through HOOXI campaign, financial incentives of NEP-based carbon trading will no longer remain as the sole domain of corporations and institutions and will be open to individuals.</p>
    <br>
    <h2>W Exchange</h2>
    <br>
    <p>W Exchange, the major trading platform for W Green Pay, expects to launch in March 2019. W Exchange is expected to be a KETS-eligible business entity. The allocated NEPs of HOOXI App are expected to trade at KRX using W Exchange.</p>-->
  </div>
</section>
<!------------ About end ------------>

<!------------ Features start ------------>
<section id="tokenomics">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12 v-pad">
        <h1>Tokenomics and Usability of W Green Pay</h1>
        <div class="h-line" style="background:#001a3d;"></div>
        <p>W Green Pay users will be able to spend tokens as a payment method anywhere in the world as the platform is progressively rolled out globally with the continued expansion of supporters and contributors to the HOOXI Campaign.</p>
        <br>
        <p>W Green Pay is already used as the exclusive payment method on HOOXI Shopping Mall integrated in the HOOXI App.</p>
        <br>
        <p>Hodlers of W Green Pay will have exclusive access to W-Foundation’s HOOXI Campaign events, which are highly valued events orchestrated by W- Foundation’s existing global community of sponsors, partners, and K-POP followers.</p>
        <br>
        <p>Demand for W Green Pay is also expected to remain stable and consistent.</p>
        <br>
        <p>Issuer will continue to buy back the tokens to expand the reward pool to the HOOXI App users to further motivate the public to participate in environmental actions.</p>
      </div>
      <div class="col-md-6 col-sm-12 v-pad">
        <img src="img/img-tokenomics.png" alt="">
      </div>
    </div>
    <br>
    <h2 style="text-transform:none;">W Green Pay Issuer will continue to buy-back W Green Pay from the Market based on revenues from:</h2>
    <br>
    <table>
      <tr valign="top">
        <td><div class="tokenomics-num">1</div></td>
        <td>
          <h4 class="bold">HOOXI SHOPPING MALL INTEGRATED IN HOOXI APP</h4>
          <br><br>
          <p>HOOXI Mall is integrated on HOOXI App for the users to spend W Green Pay to purchase goods and services. By selling goods and services, the HOOXI Mall generates revenue via collecting sales fees. Provided goods and services are as the following:</p>
          <br>
          <ul>
            <li>HOOXI Mall sells various goods provided by the W-Foundation and donated goods or discounted goods provided by its partner companies and sponsors.</li>
            <li>HOOXI Mall is also an open market platform where other retail sellers (under a screening process limited to green products) can sell their goods.</li>
            <li>HOOXI Mall provides access to various HOOXI Campaign events organized by the W-Foundation such a K-POP concerts, charity bazaars, sports events, camping festivals, etc.</li>
          </ul>
        </td>
      </tr>
      <tr valign="top">
        <td><div class="tokenomics-num">2</div></td>
        <td>
          <h4 class="bold">PR AND MARKETING ON HOOXI APP</h4>
          <br><br>
          <p>HOOXI App is a social networking service where users complete missions to reduce GHG emission.</p>
          <br>
          <p>HOOXI App may also include missions using specific products or services that are environmentally friendly.</p>
          <br>
          <p>HOOXI App may generate profit by providing such ‘mission ads’ to corporations as platforms for PR/marketing of their products and services.</p>
        </td>
      </tr>
      <tr valign="top">
        <td><div class="tokenomics-num">3</div></td>
        <td>
          <h4 class="bold">[LONG-TERM GOAL] CARBON CREDITS</h4>
          <br><br>
          <p>It is the goal of the W-Foundation to work with the UNFCCC and the national governments to build methodologies for receiving carbon credits or similar national units (KOC in the case of Korea), based on the missions specifically designed to generate time series data that can over time contribute to a rigorous quantitative accounting of the public’s contribution to greenhouse gas emissions reduction through the HOOXI App.</p>
          <br>
          <p>When accepted methodologies are in place that validate emission reductions from programs of individual greenhouse gas reduction activities achieved on the umbrella platform, and equivalent carbon credits are received based on those reductions, HOOXI App may generate revenues based on carbon credits.</p>
          <br>
          <p>Regulatory environment in carbon credits and markets is fluid, which may impact the rollout of W Green Pay’s strategy to achieve this goal. Whether we maintain our current focus on incentivizing the users’ emission reduction contributions via W Green Pay tokenized rewards or find ways to incorporate carbon credits into the benefits distribution are subject to on-going regulatory developments, some of which may change the status of individuals in the established carbon markets. The goal of HOOXI campaign is clear; to incentivize users to reduce greenhouse gases with continuity and vigor. W Green Pay will adopt the optimum path to incentivize users with maximum and meaningful value, in order to motivate the public to contribute to their utmost capacity, for the environment and for our shared future and wellbeing.</p>
        </td>
      </tr>
    </table>
  </div>
</section>
<!------------ Features end ------------>

<!------------ Token sale start ------------>
<section id="token">
  <div class="container">
    <h1>Token Details</h1>
    <div class="h-line"></div>
      <div class="col-md-6 token-table">
        <table>
            <tr valign="top">
              <td class="left-table" style="padding-top:40px;">Token Name</td>
              <td style="padding-top:40px;">W Green Pay</td>
            </tr>
            <tr valign="top">
              <td class="left-table">Token Symbol</td>
              <td>WGP</td>
            </tr>
            <tr valign="top">
              <td class="left-table">Platform</td>
              <td>ERC20</td>
            </tr>
            <tr valign="top">
              <td class="left-table">Token Decimals</td>
              <td>18</td>
            </tr>
            <tr valign="top">
              <td class="left-table">Token Supply</td>
              <td>600million (reduced from initial 1billion)</td>
            </tr>
            <tr valign="top">
              <td class="left-table">TGE</td>
              <td>Oct 2, 2018</td>
            </tr>
            <tr valign="top">
              <td class="left-table">Lock-up Period</td>
              <td>Varies up to 1 month~12 months from TGE</td>
            </tr>
            <tr valign="top">
              <td class="left-table" style="padding-bottom:40px;">Exchanges Listed</td>
              <td style="padding-bottom:40px;">Huobi Korea, GDAC Exchange<br>(as of April 2019)</td>
            </tr>
        </table>
      </div>
      <div class="col-md-6 token-graph">
        <h3>TOKEN <br>ALLOCATION</h3>
        <div class="h-line"></div> 
        <img src="img/chart-tokensale.png" alt="">
        <br>
        <br>
        <p>In W Green Pay, there are no free tokens allocated for team, advisers, or partners.</p>
        <br>
        <p>Token allocation breakdown are as following:</p>
        <ul>
          <li><span class="green-text" style="font-size:18px; font-weight:700;">33% for ICO</span><br>33% of tokens will be allocated for initial coin offering via private and public sale.</li>
          <li><span class="green-text" style="font-size:18px; font-weight:700;">33% for HOOXI App Reward</span><br>33% of tokens will be provided as reward tokens for HOOXI App.</li>
          <li><span class="green-text" style="font-size:18px; font-weight:700;">17% for Reserve for Future Sale</span><br>17% of tokens are reserved for potential block sale to strategic partner interested in co-promotion of HOOXI Campaign.</li>
          <li><span class="green-text" style="font-size:18px; font-weight:700;">17% for Issuer</span><br>17% of tokens to be reserved for force majeure, i.e. the case where HOOXI App needs WGP for rewards but supply for buyback in the market is limited.</li>
        </ul>
      </div>
  </div>
</section>
<!------------ Token sale end ------------>

<!------------ Roadmap start ------------>
<section id="roadmap">
  <div class="container">
    <h1>Roadmap</h1>
    <div class="h-line"></div>
    <div class="example-centered">
      <div class="col-xs-12 col-sm-12">
        <ul class="timeline timeline-left">
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker tokensale"></div>
            <div class="timeline-content">
              <div class="timeline-icon" style="height:70px;"><img src="img/tree.png" alt=""></div>
              <div class="timeline-detail">
                <h3 class="timeline-title">Dec 2017</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>Announced <span class="bold">HOOXI GHG Reduction Campaign</span> at the National Assembly of Republic of Korea</h4></li>
                </ul>
              </div>
              <div style="clear:both;"></div>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker tokensale"></div>
            <div class="timeline-content">
              <div class="timeline-icon" style="height:100px;"><img src="img/tree.png" alt=""></div>
              <div class="timeline-detail">
                <h3 class="timeline-title">Apr 2018</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>Established <span class="bold">HOOXI GHG Reduction Campaign Committee</span>, ceremony held at the National Assembly of Republic of Korea</h4></li>
                </ul>
              </div>
              <div style="clear:both;"></div>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <div class="timeline-icon" style="height:70px;"><img src="img/tree.png" alt=""></div>
              <div class="timeline-detail">
                <h3 class="timeline-title">May 2018</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>W Global Investment Pte. Ltd. (Issuing corp. of W Green Pay in Singapore) started <span class="bold">Private Sale</span> of W Green Pay</h4></li>
                </ul>
              </div>
              <div style="clear:both;"></div>
            </div>
          </li>
		  <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <div class="timeline-icon" style="height:70px;"><img src="img/tree.png" alt=""></div>
              <div class="timeline-detail">
                <h3 class="timeline-title">July 2018</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>Held <span class="bold">“HOOXI Camping Festival”</span> at Hansol Oak Valley to promote HOOXI Campaign (200,000 attendees)</h4></li>
                </ul>
              </div>
              <div style="clear:both;"></div>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <div class="timeline-icon" style="height:70px;"><img src="img/tree.png" alt=""></div>
              <div class="timeline-detail">
                <h3 class="timeline-title">Oct 2018</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>Completed <span class="bold">Public Sale</span> of W Green Pay</h4></li>
                  <li><h4>Launched <span class="bold">HOOXI App Closed Beta</span> (in Korean)</h4></li>
                  <li><h4>Organized <span class="bold">“Korea Carbon Forum”</span> for 3,000 attendees (Host: Gangwon Province, Ministry of Science and ICT & Organizer: W-Foundation, Korea Research Institute on Climate Change, Korea Institute of Geoscience and Mineral Resources, IETA (International Electrical Testing Association))</h4></li>
                </ul>
              </div>
              <div style="clear:both;"></div>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <div class="timeline-icon" style="height:70px;"><img src="img/tree.png" alt=""></div>
              <div class="timeline-detail">
                <h3 class="timeline-title">Dec 2018</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>Launched <span class="bold">HOOXI App Open Beta</span> (in Korean)</h4></li>
                  <li><h4><span class="bold">First Listing in Crypto-Exchanges</span> in Korea: Huobi Korea & GDAC</h4></li>
                </ul>
              </div>
              <div style="clear:both;"></div>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <div class="timeline-icon" style="height:70px;"><img src="img/tree.png" alt=""></div>
              <div class="timeline-detail">
                <h3 class="timeline-title">Mar 2019</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>Launched <span class="bold">HOOXI App Official Version</span> (in Korean)</h4></li>
                  <li><h4>Launched <span class="bold">HOOXI Shopping Mall</span></h4></li>
                </ul>
              </div>
              <div style="clear:both;"></div>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker timeline-inactive"></div>
            <div class="timeline-content">
              <div class="timeline-icon" style="height:70px;"><img src="img/tree.png" alt=""></div>
              <div class="timeline-detail">
                <h3 class="timeline-title">May 2019</h3>
                <br>
                <ul class="roadmap">
                  <li><h4><span class="bold">Multi-Language HOOXI App</span> to be launched (English, Chinese, Japanese)</h4></li>
                  <li><h4><span class="bold">Token Swap</span> (for 40% total supply reduction & smart contract upgrade) to be completed</h4></li>
                </ul>
              </div>
              <div style="clear:both;"></div>
            </div>
          </li>
		      <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker timeline-inactive"></div>
            <div class="timeline-content">
              <div class="timeline-icon" style="height:70px;"><img src="img/tree.png" alt=""></div>
              <div class="timeline-detail">
                <h3 class="timeline-title">1<sup>st</sup> H 2019</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>Expect <span class="bold">Global Crypto-Exchange Listing</span></h4></li>
                </ul>
              </div>
              <div style="clear:both;"></div>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker timeline-inactive"></div>
            <div class="timeline-content">
              <div class="timeline-icon" style="height:70px;"><img src="img/tree.png" alt=""></div>
              <div class="timeline-detail">
                <h3 class="timeline-title">2<sup>nd</sup> H 2019</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>To continue <span class="bold">HOOXI Campaign & HOOXI App Global Expansion</span> in various countries as part of the national governments’ initiatives to support environmental sustainability</h4></li>
                  <li><h4>To implement planned enhancements to <span class="bold">W Green Pay tokenomics</span>, including staggered staking membership benefits for HOOXI App users, settlement process optimization for HOOXI Mall partners, philanthropic donation functionalities, and more</h4></li>
                  <li><h4>Introduction of <span class="bold">HOOXI Point system</span> on HOOXI Shopping Mall to further enhance the UX/UI for HOOXI App users and WGP holders</h4></li>
                </ul>
              </div>
              <div style="clear:both;"></div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!------------ Roadmap end ------------>


<!------------ Team start ------------>
<section id="team">
  <div class="container">
    <h1>Team</h1>
    <div class="h-line"></div>
    <div class="row">
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#youreelee" class="open-popup-link"><div class="team-img"><img src="img/team-youree-lee.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>DR. YOUREE LEE</h3>
          <h4>Co-Founder/CEO<br>(Adjunct Professor, Business School of Hanyang University)</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#wooklee" class="open-popup-link"><div class="team-img"><img src="img/team-wook-lee.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Wook Lee</h3>
          <h4>Chairman</h4>
        </div>
      </div>
	    <div class="col-md-3 col-sm-6 v-pad">
        <a href="#keon" class="open-popup-link"><div class="team-img"><img src="img/team-keon.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>KEON HO SHIM</h3>
          <h4>CFO</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#stas" class="open-popup-link"><div class="team-img"><img src="img/team-stas.jpeg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Stas Oskin</h3>
          <h4>Technology, R&D Adviser<br>(Co-Founder of Wings)</h4>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#sebastian" class="open-popup-link"><div class="team-img"><img src="img/team-sebastian.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>SEBASTIAN STUPURAC</h3>
          <h4>Blockchain Product Adviser<br>(Co-Founder of Wings)</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#chris" class="open-popup-link"><div class="team-img"><img src="img/team-chris.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Chris Low</h3>
          <h4>CTO</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#saber" class="open-popup-link"><div class="team-img"><img src="img/team-saber.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Saber Aria</h3>
          <h4>Partnership Adviser <br>(Founder of Beyond Blocks)</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#jeremy" class="open-popup-link"><div class="team-img"><img src="img/team-jeremy.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Jeremy Khoo</h3>
          <h4>Technology and Investments Adviser</h4>
        </div>
      </div>  
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#irwin" class="open-popup-link"><div class="team-img"><img src="img/team-irwin.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Irwin Chee</h3>
          <h4>Crypto Adviser</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#chen" class="open-popup-link"><div class="team-img"><img src="img/team-chen-shun-teng.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Chen Shun Teng</h3>
          <h4>Business Adviser <br>(Group Strategy & Corporate Affairs Manager at WWRC Holding Pte. Ltd. “WWRC Group”)</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#coco" class="open-popup-link"><div class="team-img"><img src="img/team-coco.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Coco Ong</h3>
          <h4>Marketing & Communications Adviser</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#jonas" class="open-popup-link"><div class="team-img"><img src="img/team-jonas.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Jonas Larsson</h3>
          <h4>Crypto Adviser</h4>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#sonic" class="open-popup-link"><div class="team-img"><img src="img/team-sonic-zhang.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Sonic Zhang</h3>
          <h4>Crypto Investment, Tokenomics Specialist / Technology Adviser<br>(Founder & Managing Director of LedgerZ Capital)</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 v-pad">
        <div class="team-img"><img src="img/team-profile.png" alt=""></div>
        <br>
        <div class="team-title">
          <h3>Satoshi D.</h3>
          <h4>Blockchain Industry Expert, Adviser<br>(Co-Founder of Dfund, Founder of Dcapital)</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 v-pad">
        <div class="team-img"><img src="img/team-michael.jpg" alt=""></div>
        <br>
        <div class="team-title">
          <h3>Michael Lee</h3>
          <h4>Marketing Lead</h4>
        </div>
      </div>
    </div>
    <br>
    <div class="team-advisor">
      <div class="row">
        <div class="col-md-9 col-sm-9 col-xs-7 v-pad">
            <h3>Please click on the link for more information on over 160 leaders and influential figures advising W-Foundation and HOOXI campaign:</h3>
          <br><br>
          <h4>KOR: <a href="http://www.gcrfund.org/honorary_advisors/" style="color:#87b44c;" target="_blank">http://www.gcrfund.org/honorary_advisors/</a></h4><br>
            <h4>ENG: <a href="http://www.gcrfund.org/en/honorary-advisors/" style="color:#87b44c;" target="_blank">http://www.gcrfund.org/en/honorary-advisors/</a></h4>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-5 v-pad" style="text-align: center;">
          <img src="img/leaf-big.png" alt="">
        </div>
      </div>
    </div>  
    <!--<div style="width:100%; background:rgba(255,255,255,0.2); height:1px; margin-top:60px;"></div>
    <section id="advisers" style="padding-bottom:60px;">
      <h1>ADVISERS (W-Foundation, HOOXI Campaign)</h1>
      <div class="h-line"></div>
      <h2>Government</h2>
      <br>
      <div class="row" style="margin-bottom:60px;">
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/team-im.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Im, Jongseong</h3>
            <h4>Member, National Assembly of Republic of Korea</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/team-yoon-kwansuk.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Yoon, Kwansuk</h3>
            <h4>Member, National Assembly of Republic of Korea</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/MOCT--Oh,-Jangsup.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Oh, Jangsup</h3>
            <h4>Former Minster, Ministry of Construction and Transportation</h4>
          </div>
        </div>
      </div>
      <h2>Legal Profession & Financial Institutions</h2>
      <br>
      <div class="row" style="margin-bottom:60px;">
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Ko,-Eunseok--Prosecutor.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Ko, Eunseok</h3>
            <h4>Chief Prosecutor of Daejeon District Supreme Prosecutor ́s Office (Seosan Branch)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Kim,-Chadong---Hanyang-Univ.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Kim, Chadong</h3>
            <h4>Professor in Department of Law & Former Judge of Seoul High Court, Hanyang University</h4>
          </div>
        </div>
		
		
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Park,-Huiseung--Lawyer.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Park, Huiseung</h3>
            <h4>President Lawyer & Former Chief judge of a district court, Pyeong San (Law Firm) & Suwon District Court</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Jang,-Ilsuk--NEw-Finance-Society-Institute.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Jang, Ilsuk</h3>
            <h4>Chairman, New Finance Society Institute</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Choi,-Huinam--KIC.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Choi, Huinam</h3>
            <h4>President, Korea Investment Corporation (Sovereign Wealth Fund)</h4>
          </div>
        </div>
      </div>
      <h2>Media & Entertainment</h2>
      <br>
      <div class="row" style="margin-bottom:60px;">
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Song,-Jaejo---Korea-Economy-TV.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Song, Jaejo</h3>
            <h4>President, Korea Economic TV(Broadcasting Network)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/team-dongyul-seok.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Dongyul Seok</h3>
            <h4>Public Relations Adviser (Deputy Director of Dong-A Daily News)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Min,-Yongjae--YJM-Games.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Min, Yongjae</h3>
            <h4>President, YJM Games(KODAQ listed IT Company)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Park,-Junhee--inet-TV.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Park, Junhee</h3>
            <h4>Chairman, inet-TV (Broadcasting Network)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/team-yoon-Ilsang.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Yoon, Ilsang</h3>
            <h4>Highly Recognized Musician in Korea (Songwriter, Composer)</h4>
          </div>
        </div>
      </div>
      <h2>Corporations & Organizations</h2>
      <br>
      <div class="row" style="margin-bottom:30px;">
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Kim-Jongryang---Hanyang-Univ-Chairman.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Kim, Jongryang</h3>
            <h4>Chairman, Hanyang University (Major University in Korea)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/team-cho.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>CHO, DONGHYUK</h3>
            <h4>Chairman, Hansol Chemical</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Choi Jonggu - Easter Jet.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Choi, Jonggu</h3>
            <h4>President, Eastar Jet (Airline)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Peter-Kim--JIOS.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Kim, Peter</h3>
            <h4>Chairman, JIOS AEROGEL (Major Corp. in Advanced New Materials)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Kwon,-Ryan---Jimei.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Kwon, Ryan</h3>
            <h4>President, Jimei Korea (Major Real Estate Developing Corp. in China and Korea)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Park,-Jonghwa---KR-Industry.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Park, Jonghwa</h3>
            <h4>CEO, KR Industry (Major Construction Corp.)</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Moon,-Gyeonghwan---SCGO.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Moon, Gyeonghwan</h3>
            <h4>CEO, SCGO (Major Real Estate Developing Corp.)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Lee,-Bonggyu---Hanyang.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Lee, Bonggyu</h3>
            <h4>Executive Director, Hanyang (Major E&C Corp.)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Kim,-Dongman---Khan.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Kim, Dongman</h3>
            <h4>Chairman, K-Khan (Major Construction Corp.)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Choi,-Youngeun---Mantoss-Power.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Choi, Youngeun</h3>
            <h4>President, Mantoss Power (Major H&R Outsourcing Corp.)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Hong,Nanggi---Kumho.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Hong, Nanggi</h3>
            <h4>Executive Director, Kumho Construction (Major E&C Corp.)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Chun,-Jonggi---Seegene-Medical-Foundation.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Chun, Jonggi</h3>
            <h4>Chairman, Seegene Medical Foundation (Global Clinical Testing Organization)</h4>
          </div>
        </div>
      </div>
    </section>	  
  </div>-->
</section>
<!------------ Team end ------------>

<!------------ Contact start ------------>
<section id="contact">
  <div class="container">
    <h1>Contact</h1>
    <div class="h-line"></div>
    <div style="text-align:center;">
      <h3 style="text-transform:none;">For enquiries, e-mail us at</h3>
      <h2 style="text-transform:none;"><a href="mailto:hello@wpay.sg" style="color:#87b44c;">hello@wpay.sg</a></h2>
      <ul class="social">
        <li><a href="https://www.facebook.com/wgreenpay/" target="_blank"><div class="social-icon"><i class="fab fa-facebook-f"></i></div></a></li>
        <li><a href="https://twitter.com/WGreenPay" target="_blank"><div class="social-icon"><i class="fab fa-twitter" aria-hidden="true"></i></div></a></li>
        <li><a href="https://t.me/wgreenpay" target="_blank"><div class="social-icon"><i class="fab fa-telegram" aria-hidden="true"></i></div></a></li>
        <li><a href="https://medium.com/@wgreenpay" target="_blank"><div class="social-icon"><i class="fab fa-medium" aria-hidden="true"></i></div></a></li>
		<li><a href="https://www.youtube.com/channel/UCsyIK_QmL4GYOu_ulXrChdg?view_as=subscriber" target="_blank"><div class="social-icon"><i class="fab fa-youtube" aria-hidden="true"></i></div></a></li>
		<li><a href="https://www.linkedin.com/company/wgreenpay/" target="_blank"><div class="social-icon"><i class="fab fa-linkedin" aria-hidden="true"></i></div></a></li>
		<li><a href="https://www.reddit.com/user/WGreenPay" target="_blank"><div class="social-icon"><i class="fab fa-reddit" aria-hidden="true"></i></div></a></li>
		<li><a href="https://bitcointalk.org/index.php?topic=4432415.0" target="_blank"><div class="social-icon"><i class="fab fa-bitcoin" aria-hidden="true"></i></div></a></li>
		<li><a href="https://en.bitcoinwiki.org/wiki/W_Green_Pay" target="_blank"><div class="social-icon"><i class="fab fa-btc" aria-hidden="true"></i></div></a></li>
      </ul>
    </div>
  </div>
</section>
<div class="subscription">
  <div class="container">
    <div class="row">
      <div class="col-md-12 v-pad" style="text-align:center; padding-top:30px;"><h3 style="text-transform:none;">Don’t miss the latest news and updates &nbsp;&nbsp;<a href="#participateform" class="btn open-popup-link">Subscribe</a></h3></div>

    </div>
  </div>
</div>
<!------------ Contact end ------------>

<div class="footer">
  <div class="footer-container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-6 v-pad hooxi">
        <a href="http://www.gcrfund.org/en/"><img src="img/logo-hooxi.jpg" alt=""></a>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-6 v-pad wfoundation">
        <a href="http://www.gcrfund.org/en/"><img src="img/logo-wfoundation.jpg" alt=""></a>
      </div>
    </div>
  </div>
  <br>
    <span class="small-font" style="color:#333;">@ 2018 W GLOBAL INVESTMENT PTE. LTD. <br>All rights reserved.</span>
    <br><br>
    <div style="color:#87b44c; font-weight:400;"><a href="#terms_service" class="open-popup-link">Terms of Service</a> &nbsp;&nbsp;I&nbsp;&nbsp; <a href="#policy" class="open-popup-link">Privacy Policy</a></div>
</div>

<!---------- Subscribe sendgrid form ------------> 

<div id="participateform" class="white-popup mfp-hide sans">
  <h4>SUBSCRIBE TO <b>W GREEN PAY</b></h4>
  <br><br>
  
  <div id="sendgrid-subscription-widget" class="sendgrid-subscription-widget" data-emailerror="Please enter a valid email address" data-checkboxerror="Please tick the box to accept our conditions">
  <form id="sg-widget" data-token="811c3bf3bc6a5444dc373c421c362395" onsubmit="return false;">
    <div class="sg-response" id="sg-response"></div>
    <input id="sg_email" type="email" name="sg_email" placeholder="Your e-mail address" required>
    <br><br>
    <div style="float:right">
      <input type="submit" id="sg-submit-btn" value="Subscribe" class="btn white-btn">
    </div>
    <div style="clear:both;"></div>
  </form>

  </div>
</div>

<!---------- Subscribe sendgrid form ------------> 

<!---------- Private Policy -------------->
<div id="policy" class="white-popup mfp-hide sans"> 
  <?php include "htmls/policy.html";?>
</div>
<!---------- End Private Policy -------------->

<!---------- Terms Service -------------->
<div id="terms_service" class="white-popup mfp-hide sans"> 
  <?php include "htmls/terms_service.html";?>
</div>
<!---------- End Terms Service -------------->

<!---------- Team popup content start------------> 

<div id="wooklee" class="white-popup mfp-hide sans">
  <h3>WOOK LEE</h3>
  <h4>Chairman, W-Foundation</h4>
  <br><br><br>
  <p>Founder and Chairman of W-Foundation, philanthropist, and entrepreneur. Built global network to enable public-private partnerships with governments, corporations, and institutions. Established Global Climate Refugee Fund with global donors and grew W- Foundation into influential Global Nature Conservation Organization. Bachelor of Law from Hanyang University.</p>
</div>

<div id="youreelee" class="white-popup mfp-hide sans">
  <h3>YOUREE LEE PH.D.</h3>
  <h4>CCo-Founder/CEO, W-Foundation</h4>
  <h4>(Adjunct Professor, Business School of Hanyang University)</h4>
  <br><br><br>
  <p>A philanthropist and an entrepreneur, she is the CEO of W-Foundation, W-HY R&D, Hooxi Research Institute, and COO of Hooxi Foundation (USA).</p>
  <br>
  <p>Dr. Lee is a pioneer in bringing blockchain to social finance. She led the launch of the blockchain W Green Pay (WGP) for ‘HOOXI’, a global nature conservation campaign organized by W-Foundation and the Korean government.</p>
  <br>
  <p>Dr. Lee has extensive investment and corporate banking experience at Macquarie and Sumitomo Mitsui Banking Corporation, covering infrastructure and renewable energy project financing and relationship management. Received Ph.D., M.A., and B.A. in International Business from Ewha Womans University. Teaches business, strategy and finance at Ewha Womans University and Hanyang University.</p>
</div>

<div id="keon" class="white-popup mfp-hide sans">
  <h3>KEON HO SHIM</h3>
  <h4>CFO, W-Foundation</h4>
  <br><br><br>
  <p>Before taking the role of CFO at W-Foundation, he was the Head of Corporate Sales at Bank of America Merrill Lynch's Transaction Banking division in Korea. Mr. Shim has over 23 years of experience in banking, consulting, and new business development. Mr. Shim has also worked at Citi, Oliver Wyman, and Samsung Corporation.</p>
  <br>
  <p>Mr. Shim holds an M.B.A. from Stern School of Business, New York University, and a B.A. in Economics and Political Science from The George Washington University.</p>
</div>

<div id="dongyul" class="white-popup mfp-hide sans">
  <h3>DONGYUL SEOK</h3>
  <h4>Public Relations Adviser, W-Foundation (Deputy Director of Dong-A Daily News)</h4>
  <br><br><br>
  <p>25 years’ experience as a leading, influential journalist, Vice Chairman of the International Federation of Journalists, Chairman of Korea Press Photography Association. Adjunct Professor of Media & Communication at Hanyang University.</p>
</div>

<div id="seonggu" class="white-popup mfp-hide sans">
  <h3>SEONGGU RYU PH.D.</h3>
  <h4>Adviser/Chief Relationship Officer, W-Foundation (Professor, Seokyung University)</h4>
  <br><br><br>
  <p>25 years’ experience in strategic planning, group management consulting, and marketing at Samsung Group, most recently as Vice President of Marketing Strategy Group at Samsung Electronics. Professor of Business Administration at Seokyung University.</p>
</div>

<div id="chuljun" class="white-popup mfp-hide sans">
  <h3>CHULJUN KIM M.D.</h3>
  <h4>Adviser/Chief Technology Officer, W-Foundation (Chairman/Medical Doctor, Daejeon Wellness Hospital)</h4>
  <br><br><br>
  <p>20 years’ experience as a medical doctor, entrepreneur, and investor. As CEO of a major hospital, led high profile M&A and investments in the medical industry. Currently developing blockchain technology for the medical industry to securely store health records. Assistant Professor of Rehabilitation Medicine at Chungnam National University.</p>
</div>

<div id="bruno" class="white-popup mfp-hide sans">
  <h3>BRUNO WU</h3>
  <h4>Strategic Management Adviser, W-Foundation</h4>
  <br><br><br>
  <p>High-profile media mogul from China. The Founder, Co-Chairman and CEO of Sun Seven Stars Entertainment & Media Group Limited, one of the biggest private media and investment companies in China.</p>
  <br>
  <p>Mr. Wu is also the major shareholder of DBOT, The Delaware Board of Trade Holdings Inc., the first and only blockchain based Alternative Trading System fully licensed by the SEC.</p>
  <br>
  <p>Bruno is also the former Chairman of Sun Media Group and former Director of Shanda Group. Bruno and his wife (Yang Lan, one of the most popular celebrities in China) made the 2016 Forbes China Rich List with an estimated fortune worth $1 billion.</p>
</div>

<div id="chen" class="white-popup mfp-hide sans">
  <h3>CHEN SHUN TENG</h3>
  <h4>Business Adviser, W-Foundation (Group Strategy & Corporate Affairs Manager at WWRC Holding Pte. Ltd. “WWRC Group”)</h4>
  <br><br><br>
  <p>In charge of charting future growth through overseas expansion, JV/partnerships and M&A at WWRC Group, a Pan-Asian Chemical Distributor with the presence in 16 Asian Cities. Prior to joining WWRC Group, worked in banking with Citi and OCBC. Bachelor of Engineering (Materials Engineering) with First Class Honors Degree from Nanyang Technological University.</p>
  <br>
  <p>Mr. Teng received First Class Honors Degree from Nanyang Technological University</p>
</div>

<div id="chris" class="white-popup mfp-hide sans">
  <h3>CHRIS LOW</h3>
  <h4>CTO</h4>
  <br><br><br>
  <p>Mr. Low has been succesful technology entrepreneur for near 20 years. His first startup called Pendulab is a Software-as-a-Service offering web based collaboration solution, Pendulab was acquired by a leading US-based private equity firm.</p>
  <br>
  <p>Mr. Low founded Southeast Asia largest casual game platform, Viwawa, in 2008, SofrPay Mobile, and also SoftPay, the largest Mobile Point of Sale company in Vietnam with partnership with Indonesia’s largest bank, Bank Mandiri. Mr. Low graduated with a Merit in Computing from the National University of Singapore. Mr. Low has been passionate about blockchain technologies since 2012. He loves to read up on the latest blockchain technologies and does some coding in his spare time.</p>
</div>

<div id="jeremy" class="white-popup mfp-hide sans">
  <h3>JEREMY KHOO</h3>
  <h4>Technology and Investments Adviser</h4>
  <br><br><br>
  <p>Jeremy Khoo is an international business operator, founder and blockchain entrepreneur who has successfully exited 3 venture funded companies. He is currently VP of MC Payment and Group CEO of iFashion - a leading regional retail enabler and conglomerate, Mr. Khoo successfuly raised Series B from VC funds. Later iFashion was acquired by MC Payment for $23 million and Jeremy is co-leading the combined push for a public listing on the SGX.</p>
  <br>
  <p>Jeremy is a Partner and Principal Consultant in Novum Capital and Enblockr, the blockchain accelerator corps. Jeremy is also Managing Partner in CRC Capital, crypto fund investing in early stage blockchain innovation.Jeremy co-founded retail blockchain MegaX as well as Crypto-E-Commerce store Megaxstore which is spearheading cryptocurrency mass adoption.</p>
  <br>
  <p>Jeremy obtained his Bachelor's Degree in Mechanical Engineering from the Nanyang Technological University of Singapore.</p>
</div>

<div id="stas" class="white-popup mfp-hide sans">
  <h3>STAS OSKIN</h3>
  <h4>Technology, R&D Adviser (Co-Founder of Wings)</h4>
  <br><br><br>
  <p>With over 15 years of experience in IT engineering, development and management of enterprise products Stas co-founded WINGS, a successful community-engagement and smart-contract facilitation platform as well as one of the few working DAPPS on the Ethereum blockchain. Stas is also CTO of eyecam, NeoCam, and NeoVSP. Stas brings extensive expertise in web-based platforms, streaming media, distributed storage, clustered solutions and networks.</p>
  <br>
  <p>Prior to current positions, Stas acted as the CTO of BeeCom Israel, where he led the companyâ€TMs strategic shift to open-source/Linux based platforms. He also participated in multiple high-profile software projects, consulting such organizations such as BeeContact, Dead Sea Labs, and Ministry of Defense, and was a co-founder of Comoona, the first Israeli online social network.</p>
</div>

<div id="sebastian" class="white-popup mfp-hide sans">
  <h3>SEBASTIAN STUPURAC</h3>
  <h4>Blockchain Product Adviser (Co-Founder of Wings)</h4>
  <br><br><br>
  <p>Sebastian co-founded WINGS, a successful community-engagement and smart-contract facilitation platform as well as one of the few working DAPPS on the Ethereum blockchain. Sebastian has gained vast experience in decentralised solutions and blockchain technology since 2013.</p>
  <br>
  <p>Sebastian was also CEO of ChainLab, CIO and Product & Project Manager at eyecam. Sebastian received BA in Information Systems Management from The Academic College of Tel-Aviv, Yaffo.</p>
</div>

<div id="seonik" class="white-popup mfp-hide sans">
  <h3>SEONIK JEON</h3>
  <h4>Community Building and Marketing Adviser (CEO of Factblock & Blockpost, CSO of Financial News)</h4>
  <br><br><br>
  <p>CEO of FactBlock, blockchain advisory services platform, CEO of The Blockpost, blockchain focused media, and CSO of The Financial News. Worked also as the Bureau Chief of The Financial News, LA correspondent of The Financial News, and VP of MPIO. Received EMBA from Korea University, and BA in Business and Information Systems from California State University, Long Beach.</p>
</div>

<div id="sonic" class="white-popup mfp-hide sans">
  <h3>SONIC ZHANG</h3>
  <h4>Crypto Investment, Tokenomics Specialist / Technology Adviser (Founder & Managing Director of LedgerZ Capital)</h4>
  <br><br><br>
  <p>Sonic Zhang is an entrepreneur and investor. Founder of LedgerZ Capital (ledgerz.capital) and ValueNet Capital (valuenet.capital), focusing on investing in blockchain startup, security token offerings (STO) and cryptos， portfolio include OmiseGo, Binance, PowerLedger, WAX, CoinPoker, Lympo, Bankorus, RobotCache, Celsius Network, tZERO, Tenzorum, etc. He is the Co-founder and Global Director of 20 Nations League of Blockchain (B20), an international NGO focused on bridging blockchain and crypto communities worldwide. And the co-founder of ValueBank Group, a global network of fiat-crypto/crypto-crypto (Cointobe.com) exchanges, with a crypto wallet (Coinwall.io / Coinwallpro.com), and ICO services. Co-founder of Murint Capital, a VC Fund for tech and entertainment industries. Founder of SoRelax, a global platform for cross border marketing and services. Sonic has a MPM and a BE in Mechatronics from University of Sydney.</p>
</div>

<div id="kjlee" class="white-popup mfp-hide sans">
  <h3>KJ LEE</h3>
  <h4>Technology Adviser (Council Member, ICON Foundation)</h4>
  <br><br><br>
  <p>KJ Lee is the Council Member of ICON Foundation. ICON is a major global blockchain project based in Korea. ICON successfully raised 150,000 ETH in September 2017 and maintains a market capitalization of approximately USD 291 million (equivalent to approximiately KRW 326.64 billion). ICON's native coin ICX has consistently been part of the top 30s (by market capitalization), the only Korea-based coin to do so.</p>
  <br>
  <p>KJ is Founder of Nomad Connection and CEO at DAYLI Intelligence. Nomad Connection is the company behind Zimly, a P2P media service with over 3 million users worldwide. KJ was previously software engineer at the SecureSoft team which developed South Korea's first firewall 'Suhoshin' in 1996. KJ holds a BS in Computer Science from from the Pohang University of Science and Technology (POSTECH).</p>
</div>

<div id="irwin" class="white-popup mfp-hide sans">
  <h3>IRWIN CHEE</h3>
  <h4>Crypto Adviser</h4>
  <br><br><br>
  <p>Starting his career in product development and marketing, Irwin was at i-Sprint Innovations, a security tech firm. He was Co-founder at Rimu Group, a venture capital fund which invests across SEA, led rounds and co-invested along side other VCs such as Wavemaker Partners, Ardent Capital, SMDV, SPH, Fenox and DeNA. With a portfolio of 4 acquisitions and 2 exits.</p>
  <br>
  <p>Irwin was an early investor in ICOs notable ones include NXT, AntShares (now NEO), Stratis and Status. Irwin is now the Managing Consultant of Novum Capital, blockchain consultancy.</p>
  <br>
  <p>Irwin is also the Writer at www.cryptofinn.net that covers opinion pieces on cryptocurrency and reviews ICOS whenever he can.
</p>
</div>

<div id="guy" class="white-popup mfp-hide sans">
  <h3>GUY MELAMED</h3>
  <h4>Strategic Business Adviser (Co-Founder, CEO of Zeex)</h4>
  <br><br><br>
  <p>Guy is a product strategist and relentless entrepreneur. He has already contributed to the success of GreenRoad, a major player in commercial fleets and connected cars, as its CPO and Head of Strategic Partnerships. He also founded Toontok, an engaging animated-messaging startup, which he led as CEO. As VP of Product and Solutions Design at Ginger Software and Time to Know, a provider of learning materials for the digital classroom, Guy further deepened his expertise in these dynamic fields. Guy holds an MA in Communications from the University of Amsterdam.</p>
</div>

<div id="sangjin" class="white-popup mfp-hide sans">
  <h3>SANGJIN HONG</h3>
  <h4>Blockchain Investments Adviser (Co-Founder, CEO of Chain Cabinet)</h4>
  <br><br><br>
  <p>Mr. Hong is an experienced entrepreneur, investor and blockchain adviser. He is a co-founder and CEO of Chain Cabinet, a multi-dimensional blockchain company, based in Seoul and Singapore, that both builds and invests in a variety of ICO projects. Mr. Hong is also a partner at Kstartup, a startup accelerator who helped over 50 startups to build their business. As a former Microsoft Office Product Manager at Microsoft and management consultant at Monitor Group, he brings more than 20 years of technology and business management experience to the team.</p>
</div>


<div id="kyung" class="white-popup mfp-hide sans">
  <h3>KYUNG KEON HONG</h3>
  <h4>President, W-Foundation (Chairman, TRUBEN Investment Group)</h4>
  <br><br><br>
  <p>President of W-Foundation, Chairman of Hooxi Global and Chairman of Truben Investment Group. Truben Investment Group manages one of the biggest investment funds in Korea, with focus on infrastructure and long term capital projects. One of the businesses Truben Investment Group owns is the National Sports Lottery of Korea called K-toto, which is operated under an exclusive license agreement with the Korean government. Annual sale of the K-toto is approximately 5 billion USD.</p>
</div>

<div id="alex" class="white-popup mfp-hide sans">
  <h3>ALEX SUNG-HYEOK HONG, Msci, MSc</h3>
  <h4>Director, W-Foundation (Director of HOOXI Global and CEO of AZworth Trust)</h4>
  <br><br><br>
  <p>With 10 years experiences in private equity fund and strategic consulting specializing as a science/technology expert as well as being a famed motivational speaker. Alex holds master's degrees in theoretical physics from Imperial College London and in history and philosophy of natural sciences from UCL. Currently serves as CEO of AZworth Trust, the parent company for Truben Investment and shareholder of HOOXI Global, managing various portfolio and business.</p>
</div>

<div id="saber" class="white-popup mfp-hide sans">
  <h3>SABER ARIA</h3>
  <h4>Partnership Adviser (Founder of Beyond Blocks)</h4>
  <br><br><br>
  <p>Saber Aria is a strategist with over 10 years of experience in marketing strategies and building businesses. He is an early blockchain enthusiast, with a passion for blockchain technology and decentralization after investing in bitcoin in 2012. He is the founder of a prominent digital marketing agency and an advertising software company, each with a diverse portfolio of clients including several fortune 500 companies. He is the founder of ARIA256 blockchain accelerator and the co-founder of Beyond Blocks, a global conference for blockchain enthusiasts, investors and developers. Saber has a passion for seeking out and assisting emerging start-ups both as an advisor and investor through his accelerator program. He focuses his council not only on brilliant business ideas, but just as importantly, the teams behind each project.</p>
</div>

<div id="coco" class="white-popup mfp-hide sans">
  <h3>COCO ONG</h3>
  <h4>Marketing & Communications Adviser</h4>
  <br><br><br>
  <p>With experience in handling and facilitating events since her undergraduate
days, Coco started her career at GaiGai Pte Ltd, the fastest growing dating
agency in Singapore, leading an events team and has since organised,
marketed and executed over 100 events to date. The Love @ S.E.A.A. event
was also featured in a variety show on Mediacorp, a Singaporean
broadcasting station in 2017. Moving into content marketing at Paktor Pte
Ltd, Coco managed digital content and traditional marketing for the
company, as well as influencer marketing which managed to achieve a low
CPL comparable to programmatic advertising. Prior to this, Coco graduated
from NTU with a Bachelor of Fine Arts in Photography and Digital Imaging.</p>
</div>

<div id="jonas" class="white-popup mfp-hide sans">
  <h3>JONAS LARSSON</h3>
  <h4>Crypto Adviser</h4>
  <br><br><br>
  <p>Jonas has over 3 years experience in client facing roles as well as in blockchain and cryptocurrency since Bitcoin’s early days.</p>
  <br>
  <p>Previously an Account Director at Black Marketing, he specialised in
maximising international C-level clients personal branding, presence, and
company brand on LinkedIn. Prior to this, he held a role of an Associate
Engineer at TÜV SÜD PSB working in the Electrical & Electronics engineering
field. Jonas graduated from RMIT University with Bachelor of Business in
Marketing.</p>
</div>
 

<!---------- Team popup content end------------>

<!-- Add countdown --> 

<script>
	jQuery(function($){
		//var NY = Math.round((new Date('1/01/2015 00:00:01')).getTime()/1000);
		$('#token_sale').flipcountdown({
			size:'md',
			beforeDateTime:'10/1/2018 00:00:00'
			/*tick:function(){
				var nol = function(h){
					return h>9?h:'0'+h;
				}
				var	range  	= NY-Math.round((new Date()).getTime()/1000),
					secday = 86400, sechour = 3600,
					days 	= parseInt(range/secday),
					hours	= parseInt((range%secday)/sechour),
					min		= parseInt(((range%secday)%sechour)/60),
					sec		= ((range%secday)%sechour)%60;
				return nol(days)+' '+nol(hours)+' '+nol(min)+' '+nol(sec);
			}*/
		});
	});
	
</script>

<script>
$(window).scroll(function() {
  var addRemClass = $(window).scrollTop() > 0 ? 'addClass' : 'removeClass';
    $("#header")[addRemClass]('bgChange');
});

$(window).scroll(function() {
  var addRemClass = $(window).scrollTop() > 0 ? 'addClass' : 'removeClass';
    $("#logo")[addRemClass]('bgChange');
});

$(window).scroll(function() {
  var addRemClass = $(window).scrollTop() > 0 ? 'addClass' : 'removeClass';
    $("ul#menu li a")[addRemClass]('bgChange');
});

$(window).scroll(function() {
  var addRemClass = $(window).scrollTop() > 0 ? 'addClass' : 'removeClass';
    $("ul#menu li a:hover")[addRemClass]('bgChange');
});

$(window).scroll(function() {
  var addRemClass = $(window).scrollTop() > 0 ? 'addClass' : 'removeClass';
    $("nav #menuToggle span")[addRemClass]('black');
});

$(window).scroll(function() {
  var addRemClass = $(window).scrollTop() > 0 ? 'addClass' : 'removeClass';
    $(".lng-container .dropdown")[addRemClass]('bgChange');
});


</script>

<!-- Add smooth transition menu --> 
<script>
$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html,body').animate({
			  scrollTop: target.offset().top
			}, 1000);
			return false;
		  }
		}
	  });
	});
</script> 

<!-- Add flexslider -->
<script src="js/jquery.flexslider-min.js"></script>
<script>
    $(document).ready(function () {
        $('.flexslider').flexslider({
            animation: 'fade',
            controlsContainer: '.flexslider',
			slideshowSpeed: 3500
        });
    });
	
	$(document).ready(function () {
        $('.media-slider').flexslider({
            animation: 'slide',
            controlsContainer: '.media-slider',
			slideshowSpeed: 6000
        });
    });
	
	$(document).ready(function () {
        $('.articles-slider').flexslider({
            animation: 'none',
            controlsContainer: '.articles-slider',
        });
    });
	
	$(document).ready(function () {
        $('.blog-slider').flexslider({
            animation: 'none',
            controlsContainer: '.blog-slider',
        });
    });
	
</script>

<!-- Add magnifique popup --> 

<script>
    $(document).ready(function () {
        $('.open-popup-link').magnificPopup({
  type:'inline',
  midClick: true,
  mainClass: 'mfp-fade' // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
  
});
		
    });
</script>

<!-- Add video popup -->
<script>
    $(document).ready(function () {
        $('.video-pop-up').magnificPopup({
			type: 'iframe',
		});

		$('a.gallery').magnificPopup({
			type: 'image',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1]
			},
			image: {
				titleSrc: 'title',
				tError: 'The image could not be loaded.',
			}
		});
		
    });
</script>

<script>
    $(document).ready(function () {

        // ajax form
        // notify
        var notifyForm = $('.ajax-participate');

        // Get the messages div.
        var notifyMessages = $('.participate-messages');

        // Set up an event listener for the contact form.
        $(notifyForm).submit(function(e) {
            // Stop the browser from submitting the form.
            e.preventDefault();

            // Serialize the form data.
            var formData = $(notifyForm).serialize();

            // Submit the form using AJAX.
            $.ajax({
                    type: 'POST',
                    url: $(notifyForm).attr('action'),
                    data: formData
                })
                .done(function(response) {
                    // Make sure that the formMessages div has the 'success' class.
                    $(notifyMessages).removeClass('alert alert-danger');
                    $(notifyMessages).addClass('alert alert-info');

                    // Set the message text.
                    $(notifyMessages).text(response);

                    // Clear the form.
					$('#participate_name').val('');
                    $('#participate_email').val('');
				
					

                })
                .fail(function(data) {
                    // Make sure that the notifyMessages div has the 'error' class.
                    $(notifyMessages).removeClass('alert alert-danger');
                    $(notifyMessages).addClass('alert alert-info');

                    // Set the message text.
                    $(notifyMessages).text("Thank you for signing up for the W Green Pay token sale. We have many exciting privileges awaiting you. Please watch out for our upcoming email notices.");
                    $('#participate_name').val('');
                    $('#participate_email').val('');
                });
        });

        // Contact Us
        var contactForm = $('.ajax-subscription');

        // Get the messages div.
        var contactMessages = $('.subscription-messages');

        // Set up an event listener for the contact form.
        $(contactForm).submit(function(e) {
            // Stop the browser from submitting the form.
            e.preventDefault();

            // Serialize the form data.
            var formData = $(contactForm).serialize();
            console.log(formData);
            // Submit the form using AJAX.
            $.ajax({
                    type: 'POST',
                    url: $(contactForm).attr('action'),
                    data: formData
                })
                .done(function(response) {
                    // Make sure that the formMessages div has the 'success' class.
                    $(contactMessages).removeClass('alert alert-danger');
                    $(contactMessages).addClass('alert alert-info');

                    // Set the message text.
                    $(contactMessages).text(response);

                    // Clear the form.
                    $('#subscription_email').val('');
				
                })
                .fail(function(data) {
                    // Make sure that the contactMessages div has the 'error' class.
                    $(contactMessages).removeClass('alert alert-danger');
                    $(contactMessages).addClass('alert alert-info');

                    $(contactMessages).text("Thank you for signing up for the W Green Pay token sale. We have many exciting privileges awaiting you. Please watch out for our upcoming email notices.");
                    $('#subscription_email').val('');
                });
        });
    });
</script>

<script>
(function(d){d.each(["backgroundColor","borderBottomColor","borderLeftColor","borderRightColor","borderTopColor","color","outlineColor"],function(f,e){d.fx.step[e]=function(g){if(!g.colorInit){g.start=c(g.elem,e);g.end=b(g.end);g.colorInit=true}g.elem.style[e]="rgb("+[Math.max(Math.min(parseInt((g.pos*(g.end[0]-g.start[0]))+g.start[0]),255),0),Math.max(Math.min(parseInt((g.pos*(g.end[1]-g.start[1]))+g.start[1]),255),0),Math.max(Math.min(parseInt((g.pos*(g.end[2]-g.start[2]))+g.start[2]),255),0)].join(",")+")"}});function b(f){var e;if(f&&f.constructor==Array&&f.length==3){return f}if(e=/rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(f)){return[parseInt(e[1]),parseInt(e[2]),parseInt(e[3])]}if(e=/rgb\(\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*\)/.exec(f)){return[parseFloat(e[1])*2.55,parseFloat(e[2])*2.55,parseFloat(e[3])*2.55]}if(e=/#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/.exec(f)){return[parseInt(e[1],16),parseInt(e[2],16),parseInt(e[3],16)]}if(e=/#([a-fA-F0-9])([a-fA-F0-9])([a-fA-F0-9])/.exec(f)){return[parseInt(e[1]+e[1],16),parseInt(e[2]+e[2],16),parseInt(e[3]+e[3],16)]}if(e=/rgba\(0, 0, 0, 0\)/.exec(f)){return a.transparent}return a[d.trim(f).toLowerCase()]}function c(g,e){var f;do{f=d.css(g,e);if(f!=""&&f!="transparent"||d.nodeName(g,"body")){break}e="backgroundColor"}while(g=g.parentNode);return b(f)}var a={aqua:[0,255,255],azure:[240,255,255],beige:[245,245,220],black:[0,0,0],blue:[0,0,255],brown:[165,42,42],cyan:[0,255,255],darkblue:[0,0,139],darkcyan:[0,139,139],darkgrey:[169,169,169],darkgreen:[0,100,0],darkkhaki:[189,183,107],darkmagenta:[139,0,139],darkolivegreen:[85,107,47],darkorange:[255,140,0],darkorchid:[153,50,204],darkred:[139,0,0],darksalmon:[233,150,122],darkviolet:[148,0,211],fuchsia:[255,0,255],gold:[255,215,0],green:[0,128,0],indigo:[75,0,130],khaki:[240,230,140],lightblue:[173,216,230],lightcyan:[224,255,255],lightgreen:[144,238,144],lightgrey:[211,211,211],lightpink:[255,182,193],lightyellow:[255,255,224],lime:[0,255,0],magenta:[255,0,255],maroon:[128,0,0],navy:[0,0,128],olive:[128,128,0],orange:[255,165,0],pink:[255,192,203],purple:[128,0,128],violet:[128,0,128],red:[255,0,0],silver:[192,192,192],white:[255,255,255],yellow:[255,255,0],transparent:[255,255,255]}})(jQuery);
</script>

</body>
</html>
