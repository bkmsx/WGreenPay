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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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

<style>

.flexslider .slides img {
    width:100%;
    display: inline-block;
	max-width:350px;
}

.flexslider .flex-control-nav {
    bottom: -20px;
	left:40%;
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

<!------------ Navigation start ------------>
<div id="header">
  <div class="blue-line"></div>
  <div class="container" style="position:relative;"><a href="#home">
    <div id="logo"></div>
    </a>
    <ul id="menu">
      <li><a href="#about">About</a></li>
      <li><a href="#features">Features</a></li>
      <li><a href="#token">Tokensale</a></li>
      <li><a href="#media">Media</a></li>
      <li><a href="#roadmap">Roadmap</a></li>
      <li><a href="#team">Team</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <div class="lng-container">
      <a href="#" class="lng lng-active">EN</a> &nbsp;<a href="#" class="lng">KR</a>
    </div>
    <nav> 
      <a href="" id="menuToggle" title="show menu"><span class="navClosed"></span></a> 
      <a href="#about" onclick="closeSidebar(this)">About</a>
      <a href="#features" onclick="closeSidebar(this)">Features</a>
      <a href="#token" onclick="closeSidebar(this)">Tokensale</a>
      <a href="#media" onclick="closeSidebar(this)">Media</a>
      <a href="#roadmap" onclick="closeSidebar(this)">Roadmap</a>
      <a href="#team" onclick="closeSidebar(this)">Team</a>
      <a href="#contact" onclick="closeSidebar(this)">Contact</a>
      <div class="lng-mobile">
        <a href="#">KR</a>
      </div>
    </nav>
  </div>
</div>
<!------------ Navigation end ------------> 

<!------------ Home banner start ------------>
<div id="home">
  <div class="home-container">
    <h1>JOIN <span style="color:#87b44c;">W GREEN PAY</span> HOOXI CAMPAIGN</h1>
    <h4>The most innovative social carbon credit platform to be launched.</h4>
    <h4>Participate now to get whitelisted and enjoy 20% public sale bonus!</h4>
    <br><br>
    <h4 style="font-weight:700;"><span style="color:#87b44c;">PUBLIC SALE</span> STARTS IN:</h4>
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
    <!--
    <br>
    <br>
    <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
      Private Sale
      </div>
    </div>
    <div class="sale-container">
      <div class="privatesale">Soft Cap</div>
      <div class="publicsale">60.000.000 WPAY</div>
    </div>-->
    <br>
    <br>
    <br>
    <ul class="home-btn">
      <li><a href="#participateform" class="open-popup-link btn">Participate</a></li>
      <li><a href="WGreenPay-whitepaper-v2.0.pdf" target="_blank" class="btn">Whitepaper</a></li>
    </ul>
  </div>
</div>
<!------------ Home banner end ------------>

<!------------ About start ------------>
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12 v-pad">
        <div class="flex-container">
          <div class="flexslider">
            <ul class="slides">
              <li><img src="img/screenshot1.png" alt=""></li>
              <li><img src="img/screenshot2.png" alt=""></li>
              <li><img src="img/screenshot3.png" alt=""></li>
              <li><img src="img/screenshot4.png" alt=""></li>
              <li><img src="img/screenshot5.png" alt=""></li>
              <li><img src="img/screenshot6.png" alt=""></li>
              <li><img src="img/screenshot7.png" alt=""></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 v-pad" style="padding-top:40px;">
        <h1>About</h1>
        <div class="h-line"></div>
        <h1>W <span style="color:#87b44c;">Green Pay</span></h1>
        <br>
        <h4>W Green Pay ("WGP") is an ERC20-compliant token that operates on the Ethereum blockchain. The aim of W Green Pay is to increase the public’s participation in GHG (Greenhouse Gas) reduction. W Green Pay will provide the means of incentivizing the public for their GHG reduction efforts.</h4>
        <br>
        <h4>The HOOXI App will serve as the platform for users to be rewarded by completing GHG reduction tasks.</h4>
        <br>
        <br>
        <h2 style="text-transform:none; color:#87b44c;">Mission</h2>
        <br>
        <p>Following the Korean government’s pledge made at Copenhagen Accord in 2009, the country aims to reduce GHG emission by 37% by 2030.</p>
        <br>
        <p>The Korean government selected W-Foundation to lead the “Nation-wide Public Movement to Reduce GHG Emission (HOOXI Campaign)”.</p>
        <br>
        <p>To support the government’s GHG emission reduction efforts, W-Foundation will launch a mobile application called HOOXI App that monitors and rewards the effort of individuals and the public to reduce GHG emissions.</p>
      </div>
    </div>
    <br>
    <h2>Solution</h2>
    <br>
    <p>The most innovative social carbon credit platform to be launched.</p>
    <br>
    <p>W Green Pay (WGP), the blockchain from HOOXI, Korea's government-backed Greenhouse Gas (GHG) reduction campaign, is issued to reward general public's contribution to reducing GHG emissions under Korea's KETS (Korea's Emissions Trading Scheme) market.</p>
    <br>
    <h4 style="font-weight:700;">WGP is a reward method to GHG reduction efforts on the anticipated HOOXI app. Users will be able to:</h4>
    <br>
    <br>
    <div class="row">
      <div class="col-md-4 v-pad">
        <div class="features-icon">
          <img src="img/feature-icon-1.png" alt="">
          <br><br>
          <h4>Exchange mission points gained from the completed tasks to W Green Pay</h4>
        </div>
      </div>
      <div class="col-md-4 v-pad">
        <div class="features-icon">
          <img src="img/feature-icon-2.png" alt="">
          <br>
          <h4>Spend W Green Pay at internet shopping malls (partners of W-Foundation)</h4>
        </div>
      </div>
      <div class="col-md-4 v-pad">
        <div class="features-icon">
          <img src="img/feature-icon-3.png" alt="">
          <br>
          <h4>Use W Green Pay as a payback system on their credit cards</h4>
        </div>
      </div>
    </div>
    <br>
    <br>
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
    <p>W Exchange, under the Korea Electric Power Corporation (KEPCO) approval, will be launched in March 2019. W Exchange is expected to be a KETS-eligible business entity. The allocated NEPs of HOOXI App are expected to trade at KRX using W Exchange.</p>
  </div>
</section>
<section class="sponsors">
  <div class="container">
    <div class="row">
      <div class="col-md-4 v-pad">
       <h1>Hooxi Campaign <span style="color:#87b44c;">Sponsors</span></h1>
       <br>
       <p>NongHyup Financial Group, NongHyup Life Insurance Co., Ltd., NH Investment Securities Co., Ltd., KB Kookman Bank, YG Entertainment, Blackyak Co., Ltd., Hotel Lotte DFS Co., Ltd., Lotte Homeshopping, Philip Morris Korea Ltd., Korea Management Association, Wumart Stores, Inc. (China), Hansol Chemical, Hansol Oak Valley, Borim CS, FnGuide Inc., Sungdo Engineering & Construction, Korea Business News Co., Ltd., YJM Games Co., Ltd., Cleantopia, NET TV Co., Ltd.</p>
      </div>
      <div class="col-md-8 v-pad" style="position:relative;">
        <div class="leaf-r"><img src="img/leaf-1.png" alt=""></div>
        <img src="img/sponsors.png" alt="">
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
      <div class="col-md-8 v-pad" style="position:relative;">
        <div class="leaf-l"><img src="img/leaf-2.png" alt=""></div>
        <img src="img/ambassadors.png" alt="">
      </div>
      <div class="col-md-4 v-pad">
       <h1>Honorary <span style="color:#87b44c;">Ambassadors</span></h1>
       <br>
       <h4>More than 300 Korean celebrities, including K-pop stars, support HOOXI Campaign as honorary ambassadors of W-Foundation.</h4>
       <br>
       <p>Infinite, Lydia Ko, Ailee, Jang Hyuk, Kim Tae-Woo, IOI, Eddy Kim, Shim Hyung-Tak, Max Changmin, Choi Si-Won, Donghae, Kim Yu Jung and Alberto are several of the major ambassadors. There are many more Korean celebrities working with W-Foundation as honorary ambassadors.</p>
      </div>     
    </div>  
  </div>
</section>
<section style="background:#001a3d;" class="emission">
  <div class="container">
    <div class="row">
      <div class="col-md-6 v-pad">
        <h2>KETS <span style="color:#87b44c;">(Korea’s Emissions Trading Scheme)</span></h2>
        <br>
        <p>In 2009, Korea made a pledge at the Copenhagen Accord to participate in the global movement to reduce GHG. By 2030, the Korean government aims to reduce GHG emissions by 37% from its business-as-usual scenario. In 2015, Korea launched its Emission Trading Scheme (KETS), which is the second largest in scale after the European Union Emission Trading Scheme at the point of writing.</p>
    <br>
    <p>Korea’s Cap-and-Trade system mitigates GHG emissions through market mechanisms. It applies to approximately 600 companies that account for over 68% of Korea’s GHG output (Korea Carbon, 2018). A cap that determines the maximum emission level that companies are permitted was set by the government. When a company exceeds the cap, the company has to purchase additional National Emissions Permits (NEP) from the market at market price or has to pay a penalty to the government.</p>
    <br>
    <p>The penalty for non-compliance with the KETS is three times the average market price per unit of tCO2e. The maximum penalty is capped at KRW 100,000 per tCO2e (approximately US $93/tCO2e equivalent).</p>
        <br>
        <p>Source: <a href="https://ieta.wildapricot.org/resources/Resources/Case_Studies_Worlds_Carbon_Markets/re publicofkorea_case%20study_june_2015.pdf" target="_blank" style="color:#87b44c;">The International Emissions Trading Association (IETA), 2015</a></p>
        <br>
        <br>
        <img src="img/emission.png" alt="">
      </div>
      <div class="col-md-6 v-pad">
        <h2>NEP <span style="color:#87b44c;">(National Emissions Permit)</span></h2>
        <br>
        <h4 style="font-weight:700;">NEP Validation</h4>
        <br>
        <p>The Ministry of Environment validates Korea’s NEP, and the NEP is exchanged at the prevailing market price. Despite the increasing demand for NEP in the market, the allocation of NEP by the Ministry of Environment is limited. The price of NEP per ton is high at approximately KRW 22,000 (US $20) as of April 14, 2018. This is higher than EU’s CER that is priced at approximately Euro 13.84 (approximately KRW 17,700) as of April 16, 2018.</p>
        <br><br>
        <img src="img/graph-nep.png" alt="">
        <br>
        <br>
        <br>
        <br>
        <h4 style="font-weight:700;">NEP Market Size</h4>
        <br>
        <p>Approximately 600 companies participate in carbon emission trading in Korea. The market size of NEP rapidly increased from a baseline of KRW 57.3 billion in 2015 when KETS started to KRW 194.6 billion in 2016 and KRW 438.5 billion in 2017 (validated data from January to October, 2017) (The Ministry of Strategy and Finance of Korea, 2017). The Korean government expects the NEP market to continue to grow in the coming years.</p>
        
      </div> 
    </div>
  </div>
</section>
<!------------ About end ------------>

<!------------ Features start ------------>
<section id="features">
  <div class="container">
    <h1>Features</h1>
    <div class="h-line" style="background:#001a3d;"></div>
    <div style="text-align:center;">
      <h2>WGP Ecosystem</h2>
      <br>
      <p>Individuals can easily set up user accounts on the HOOXI application. As application users, individuals can select among many simple predefined missions such as taking the public transport, reducing electricity usage or purchasing identified eco-products.</p>
      <br>
      <br>
      <br>
      <img src="img/feature.jpg" alt="">
      <br>
      <br>
      <br>
      <h4 style="font-weight:700;">Examples of how to collect WGP as a payback for credit card usage:</h4>
      <br>
      <div style="max-width:555px; display:inline-block;"><img src="img/card.jpg" alt=""></div>
      <br>
      <div class="row">
        <div class="col-md-4 col-sm-4 v-pad">
          <div style="max-width:36px; display:inline-block;"><img src="img/check.png" alt=""></div>
          <br><br>
          <h4>Buying from W Green Pay partnered businesses</h4>
        </div>
        <div class="col-md-4 col-sm-4 v-pad">
          <div style="max-width:36px; display:inline-block;"><img src="img/check.png" alt=""></div>
          <br><br>
          <h4>Purchasing identified eco-products</h4>
        </div>
        <div class="col-md-4 col-sm-4 v-pad">
          <div style="max-width:36px; display:inline-block;"><img src="img/check.png" alt=""></div>
          <br><br>
          <h4>Taking public transportation</h4>
        </div>
      </div>
    </div>
  </div>
</section>
<!------------ Features end ------------>

<!------------ Token sale start ------------>
<section id="token">
  <div class="container">
    <h1>Token Sales</h1>
    <div class="h-line"></div>
      <div class="col-md-4 token-graph">
        <img src="img/chart-tokensale.png" alt="">
        <br>
        <br>
        <p>The total number of W Green Pay issued will remain constant at 100 million tokens.</p>
        <br>
        <p>Of the total 100 million W Green Pay, 20 million W Green Pay (20%) will remain without sale to the W Green Pay issuer, 20 million (20%) W Green Pay will be allocated to HOOXI App as a payment of reward to HOOXI Campaign participants, and the remaining 60 million (60%) W Green Pay will be open for private and public sale.</p>
      </div>
      <div class="col-md-8 token-table">
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
              <td>Fixed supply of 100 million, 60 million for sale</td>
            </tr>
            <tr valign="top">
              <td class="left-table">Currency Accepted</td>
              <td>ETH / BTC / USD</td>
            </tr>
            <tr valign="top">
              <td class="left-table">Token Price</td>
              <td>US$20 per token</td>
            </tr>
            <tr valign="top">
              <td class="left-table">Private Sale Date</td>
              <td>14th to 25th of May, 2018</td>
            </tr>
            <tr valign="top">
              <td class="left-table">Public Sale Date</td>
              <td>26th of June to 31st of July, 2018</td>
            </tr>
            <tr valign="top">
              <td class="left-table">Bonus for Public Sale</td>
              <td>20% - First 10 million tokens, 10% - Remaining tokens</td>
            </tr>
            <tr valign="top">
              <td class="left-table">Soft Cap</td>
              <td>US$25 million</td>
            </tr>
            <tr valign="top">
              <td class="left-table">Hard Cap</td>
              <td>100 million tokens sold or distributed</td>
            </tr>
            <tr valign="top">
              <td class="left-table" style="padding-bottom:40px;">Lock-up Period</td>
              <td style="padding-bottom:40px;">W Green Pay held by the Team and Private Sale investors shall be subjected to a lock-up period of six (6) months from the end of public sale (31st of July, 2018)</td>
            </tr>
        </table>
      </div>
  </div>
</section>
<!------------ Token sale end ------------>

<!------------ Media start 
<section id="media">
  <div class="container">
    <h1>Media</h1>
    <div class="h-line" style="background:#001a3d;"></div>
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <div class="media-logo">Logo</div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <div class="media-logo">Logo</div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <div class="media-logo">Logo</div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <div class="media-logo">Logo</div>
      </div>
    </div>
  </div>
</section>
<!------------ Media end ------------>

<!------------ Roadmap start ------------>
<section id="roadmap">
  <div class="container">
    <h1>Roadmap</h1>
    <div class="h-line"></div>
    <div class="example-centered">
      <div class="col-xs-10 col-xs-offset-1 col-sm-12">
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
                  <li><h4>GHG (HOOXI Campaign Declaration)</h4></li>
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
                  <li><h4>GHG (HOOXI Campaign Committee Inauguration)</h4></li>
                  <li><h4>W Green Pay Certification in Singapore</h4></li>
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
                  <li><h4>W Green Pay Private Sale</h4></li>
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
                <h3 class="timeline-title">Jun - Jul 2018</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>W Green Pay Public Sale</h4></li>
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
                <h3 class="timeline-title">Oct 2018</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>HOOXI App Launch</h4></li>
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
                <h3 class="timeline-title">Mid-Oct 2018</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>HOOXI App Launching Festival</h4></li>
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
                <h3 class="timeline-title">Mar 2019</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>W Green Pay Exchange Launch</h4></li>
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
      <div class="col-md-4 col-sm-4 v-pad">
        <a href="#wooklee" class="open-popup-link"><div class="team-img"><img src="img/team-wook-lee.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Wook Lee</h3>
          <h4>Chairman</h4>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 v-pad">
        <a href="#youreelee" class="open-popup-link"><div class="team-img"><img src="img/team-youree-lee.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Youree Lee PH.D.</h3>
          <h4>CEO</h4>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 v-pad">
        <a href="#keon" class="open-popup-link"><div class="team-img"><img src="img/team-keon.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>KEON HO SHIM</h3>
          <h4>Financial Advisor</h4>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 v-pad">
        <a href="#dongyul" class="open-popup-link"><div class="team-img"><img src="img/team-dongyul-seok.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Dongyul Seok</h3>
          <h4>Public Relations Adviser</h4>
          <p>(Deputy Director of Dong-A Daily News)</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 v-pad">
        <a href="#seonggu" class="open-popup-link"><div class="team-img"><img src="img/team-seonggu-ryu.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Seonggu Ryu Ph.D.</h3>
          <h4>Adviser/Chief Relationship Officer</h4>
          <p>(Professor, Seokyung University)</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 v-pad">
        <a href="#chuljun" class="open-popup-link"><div class="team-img"><img src="img/team-chuljun-kim.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Chuljun Kim M.D.</h3>
          <h4>Adviser/Chief Technology Officer</h4>
          <p>(Chairman/Medical Doctor, Daejeon Wellness Hospital)</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 v-pad">
        <a href="#ryan" class="open-popup-link"><div class="team-img"><img src="img/team-ryan-kim.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Ryan Kim</h3>
          <h4>Business Adviser</h4>
          <p>(CEO, Jimei Korea)</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 v-pad">
        <a href="#chen" class="open-popup-link"><div class="team-img"><img src="img/team-chen-shun-teng.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Chen Shun Teng</h3>
          <h4>Business Adviser</h4>
          <p>(Group Strategy & Corporate Affairs Manager at WWRC Holding Pte. Ltd. “WWRC Group”)</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 v-pad">
        <a href="#chris" class="open-popup-link"><div class="team-img"><img src="img/team-chris.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Chris Low</h3>
          <h4>Technology Adviser</h4>
          <p>(Managing Partner and Executive Chairman at Novum Capital)</p>
        </div>
      </div>
    </div>
    <div style="height:1px; width:100%; opacity:0.2; background:#fff; margin:60px 0;"></div>
    <div style="text-align:center;">
      <h2>Advisers</h2>
      <br>
      <h4>Link to honorary advisers on the W-Foundation website:</h4>
      <h4>KOR: <a href="http://www.gcrfund.org/honorary_advisors/" style="color:#87b44c;" target="_blank">http://www.gcrfund.org/honorary_advisors/</a></h4>
      <h4>ENG: <a href="http://www.gcrfund.org/en/honorary-advisors/" style="color:#87b44c;" target="_blank">http://www.gcrfund.org/en/honorary-advisors/</a></h4>
    </div>
  </div>
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
        <li><a href="https://www.facebook.com/wgreenpay/" target="_blank"><div class="social-icon"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
        <!-- <li><a href="#" target="_blank"><div class="social-icon"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li> -->
        <!-- <li><a href="#" target="_blank"><div class="social-icon"><i class="fa fa-bitcoin" aria-hidden="true"></i></div></a></li> -->
        <li><a href="https://twitter.com/WGreenPay" target="_blank"><div class="social-icon"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
        <li><a href="https://t.me/wgreenpay" target="_blank"><div class="social-icon"><i class="fa fa-telegram" aria-hidden="true"></i></div></a></li>
        <li><a href="https://medium.com/@wgreenpay" target="_blank"><div class="social-icon"><i class="fa fa-medium" aria-hidden="true"></i></div></a></li>
        <!-- <li><a href="" target="_blank"><div class="social-icon"><i class="fa fa-github" aria-hidden="true"></i></div></a></li>        -->
      </ul>
    </div>
  </div>
</section>
<div class="subscription">
  <div class="container">
    <div class="row">
      <div class="col-md-6 v-pad" style="text-align:center; padding-top:30px;"><h3 style="text-transform:none;">Don’t miss the latest news and updates</h3></div>
      <div class="col-md-6 v-pad">
        <div class="subscription-messages"></div>
        <form id='subscription' class="ajax-subscription" action='https://global.us18.list-manage.com/subscribe/post?u=e1cce14547abb01d594305d38&amp;id=db0d55a049' method='post' accept-charset='UTF-8' name="mc-embedded-subscribe-form">
          <input type='hidden' name='submitted' id='submitted' value='1'/>
          <input type="hidden" name="type" value="subscription" />
          <div class="subscription-container">
            <input type='text' class="input-style input-box" name='EMAIL' id='subscription_email'  placeholder="Your e-mail address " required/>
            <button type='submit' value='Submit' class="submit-box"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
          <div style="clear:both;"></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!------------ Contact end ------------>

<div class="footer">
  <div class="footer-container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-6 v-pad hooxi">
        <img src="img/logo-hooxi.jpg" alt="">
      </div>
      <div class="col-md-6 col-sm-6 col-xs-6 v-pad wfoundation">
        <img src="img/logo-wfoundation.jpg" alt="">
      </div>
    </div>
  </div>
  <br>
    <span class="small-font" style="color:#333;">@ 2018 W GLOBAL INVESTMENT PTE. LTD. <br>All rights reserved.</span>
    <br><br>
    <!-- <div style="color:#87b44c; font-weight:400;"><a href="#">Terms of Service</a> &nbsp;&nbsp;I&nbsp;&nbsp; <a href="#">Privacy Policy</a></div> -->
</div>

<!---------- Participate form ------------> 

<div id="participateform" class="white-popup mfp-hide sans">
  <h4>PARTICIPATE IN <b>W GREEN PAY</b></h4>
  <br><br>
  <div class="participate-messages"></div>
  <form id='participate' class="ajax-participate" action='https://global.us18.list-manage.com/subscribe/post?u=e1cce14547abb01d594305d38&amp;id=db0d55a049' method='post' accept-charset='UTF-8' name="mc-embedded-subscribe-form">
    <input type='hidden' name='submitted' id='submitted' value='1'/>
    <input type="hidden" name="type" value="participate" />
    <input type='text' class="input-style" name='FNAME' id='participate_name'  placeholder="name " />
    <br>
    <br>
    <input type='text' class="input-style" name='EMAIL' id='participate_email'  placeholder="e-mail" required/>
    <br>
    <br>
    <br>
    <div style="float:right;">
      <button type='submit' value='Submit' class="btn white-btn">SUBMIT</button>
    </div>
    <div style="clear:both;"></div>
  </form>
</div>

<!---------- Participate form ------------> 

<!---------- Team popup content start------------> 

<div id="wooklee" class="white-popup mfp-hide sans">
  <h3>WOOK LEE</h3>
  <h4>Chairman, W-Foundation</h4>
  <br><br><br>
  <p>Founder and Chairman of W-Foundation, philanthropist, and entrepreneur. Built global network to enable public-private partnerships with governments, corporations, and institutions. Established Global Climate Refugee Fund with global donors and grew W- Foundation into influential Global Nature Conservation Organization. Bachelor of Law from Hanyang University.</p>
</div>

<div id="youreelee" class="white-popup mfp-hide sans">
  <h3>YOUREE LEE PH.D.</h3>
  <h4>CEO, W-Foundation</h4>
  <br><br><br>
  <p>Co-Founder and CEO of W-Foundation, W-HY R&D, Hooxi Research Institute, and COO of Hooxi Foundation (USA). Extensive investment and corporate banking experience at Shinhan Macquarie Financial Advisory and Sumitomo Mitsui Banking Corporation, with Ph.D., M.A., and B.A. in International Business from Ewha Womans University. Currently lectures at Ewha and Hanyang Universities.</p>
</div>

<div id="keon" class="white-popup mfp-hide sans">
  <h3>KEON HO SHIM</h3>
  <h4>Financial Adviser, W-Foundation</h4>
  <br><br><br>
  <p>23 years’ experience in banking, consulting, and new business development at Bank of America Merrill Lynch, Citi, Oliver Wyman, and Samsung Corporation, with M.B.A. from Stern School of Business, New York University, and B.A. in Economics and Political Science from The George Washington University.</p>
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

<div id="ryan" class="white-popup mfp-hide sans">
  <h3>RYAN KWON</h3>
  <h4>Business Adviser, W-Foundation (CEO, Jimei Korea)</h4>
  <br><br><br>
  <p>Leads the global real estate development and financial advisory at Jimei Group, focusing on China-Korea investment opportunities. Has extensive global business network, contributing to the development of bilateral relationships between China and Korea. Chairman of Ozoo Foundation, providing academic scholarships.</p>
</div>

<div id="chen" class="white-popup mfp-hide sans">
  <h3>CHEN SHUN TENG</h3>
  <h4>Business Adviser, W-Foundation (Group Strategy & Corporate Affairs Manager at WWRC Holding Pte. Ltd. “WWRC Group”)</h4>
  <br><br><br>
  <p>In charge of charting future growth through overseas expansion, JV/partnerships and M&A at WWRC Group, a Pan-Asian Chemical Distributor with the presence in 16 Asian Cities. Prior to joining WWRC Group, worked in banking with Citi and OCBC. Bachelor of Engineering (Materials Engineering) with First Class Honors Degree from Nanyang Technological University.</p>
</div>

<div id="chris" class="white-popup mfp-hide sans">
  <h3>CHRIS LOW</h3>
  <h4>Technology Adviser, W-Foundation (Managing Partner and Executive Chairman at Novum Capital)</h4>
  <br><br><br>
  <p>Successful serial entrepreneur having built one of the largest social gaming site in Southeast Asia, called Viwawa. Co-founded SoftPay Mobile, the largest Mobile POS company in Vietnam. Graduated with a BSc. Merit in Computer Science from the National University of Singapore.</p>
</div>
 

<!---------- Team popup content end------------

<!-- Add countdown --> 

<script>
	jQuery(function($){
		//var NY = Math.round((new Date('1/01/2015 00:00:01')).getTime()/1000);
		$('#token_sale').flipcountdown({
			size:'md',
			beforeDateTime:'6/26/2018 00:00:01'
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
