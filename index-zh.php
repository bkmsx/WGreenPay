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
 <!-- Google Tag Manager -->
 <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5X2FMMG');</script>
  <!-- End Google Tag Manager -->

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
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5X2FMMG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!------------ Navigation start ------------>
<div id="header">
  <div class="blue-line"></div>
  <div class="container" style="position:relative;"><a href="#home">
    <div id="logo"></div>
    </a>
    <ul id="menu">
      <li><a href="#about">关于我们</a></li>
      <li><a href="#features">特点</a></li>
      <li><a href="#token">代币销售</a></li>
      <li><a href="#media">媒体</a></li>
      <li><a href="#roadmap">路径图</a></li>
      <li><a href="#team">团队</a></li>
      <li><a href="#advisers">顾问</a></li>
      <li><a href="#contact">联系方式</a></li>
    </ul>
    <div class="lng-container">
      <div class="dropdown">
          <a href="">语言 &nbsp;<i class="fa fa-chevron-down"></i></a>
          <div class="dropdown-content">
            <p><a href="index.php">English</a></p>
            <p><a href="index-kr.php">韩语</a></p>
          </div>
      </div> 
      <!--<a href="#" class="lng lng-active">EN</a> &nbsp;<a href="index-kr.php" class="lng">KR</a>-->
    </div>
    <nav> 
      <a href="" id="menuToggle" title="show menu"><span class="navClosed"></span></a> 
      <a href="#about" onclick="closeSidebar(this)">关于我们</a>
      <a href="#features" onclick="closeSidebar(this)">特点</a>
      <a href="#token" onclick="closeSidebar(this)">代币销售</a>
      <a href="#media" onclick="closeSidebar(this)">媒体</a>
      <a href="#roadmap" onclick="closeSidebar(this)">路径图</a>
      <a href="#team" onclick="closeSidebar(this)">团队</a>
      <a href="#advisers" onclick="closeSidebar(this)">顾问</a>
      <a href="#contact" onclick="closeSidebar(this)">联系方式</a>
      <div class="lng-mobile">
        <a href="index.php">EN</a>  &nbsp;<a href="index-kr.php">韩语</a>
      </div>
    </nav>
  </div>
</div>
<!------------ Navigation end ------------> 

<!------------ Home banner start ------------>
<div id="home">
  <div class="home-container">
    <h1>加入<span style="color:#87b44c;">W GREEN PAY</span> 的 HOOXI 活动！</h1>
    <h4>最具创新性的社会碳信用平台即将推出</h4>
    <br><br>
    <table>
      <tr> 
        <td style="text-align:right;"><h4>私人发售</h4></td>
        <td style="text-align:left;"><h4 style="color:#87b44c;">第一阶段已售完。</span></h4></td>
      </tr>
      <tr> 
        <td></td>
        <td style="text-align:left;"><h4 style="color:#87b44c;">第二阶段正在进行中</span></h4></td>
      </tr> 
      <tr> 
        <td style="text-align:right;"><h4>公开发售</h4></td>
        <td style="text-align:left;"><h4 style="color:#87b44c;">2018年第四季度开始</span></h4></td>
      </tr>  
    </table>
    <br>
    <!--
    <div id="token_sale"></div>
    <br>
    <ul class="countdown">
      <li class="days small-font">
        日
      </li>
      <li class="hrs small-font">
        时
      </li>
      <li class="mins small-font">
        分
      </li>
      <li class="sec small-font">
        秒
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
      <li><a href="#participateform" class="open-popup-link btn">参与</a></li>
      <li><a href="WPay-whitepaper-CN.pdf" target="_blank" class="btn">白皮书</a></li>
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
        <h1>关于我们</h1>
        <div class="h-line"></div>
        <h1>W <span style="color:#87b44c;">Green Pay</span></h1>
        <br>
        <h4>W Green Pay（“WGP”）是符合Stellar标准，可以在Stellar区块链上使用的一种代币。 W Green Pay致力于提升公众对GHG（温室气体）减排的参与度。 W Green Pay将通过多种方式激励公众减少温室气体排放。</h4>
        <br>
        <h4>用户完成温室气体减排任务后，可通过HOOXI应用程序获得奖励。</h4>
        <br>
        <br>
        <h2 style="text-transform:none; color:#87b44c;">任务</h2>
        <br>
        <p>继2009年韩国政府加入《哥本哈根协议》，作出减排承诺后，韩国计划到2030年将温室气体排放量减少37％。</p>
        <br>
        <p>韩国政府选择了W-Foundation领导“全国减少温室气体排放公共运动（Nation-wide Public Movement to Reduce GHG Emission， 即HOOXI运动）”。</p>
        <br>
        <p>为支持政府的温室气体减排工作，W-Foundation将推出一个名为HOOXI的移动应用程序，用于监控并奖励公众与个人为减少温室气体排放作出的努力。</p>
      </div>
    </div>
    <br>
    <h2>解决方案</h2>
    <br>
    <p>最具创新性的社会碳信用平台即将推出。</p>
    <br>
    <p>韩国政府支持的温室气体（GHG）减排活动HOOXI的区块链W Green Pay（WGP），将用于奖励普通民众在韩国KETS（Korea's Emissions Trading Scheme，韩国碳排放交易体系）市场下为减少温室气体排放所做的贡献。</p>
    <br>
    <h4 style="font-weight:700;">WGP是通过令人期待的HOOXI应用程序对温室气体减排行为进行奖励的方法。用户将能够：</h4>
    <br>
    <br>
    <div class="row">
      <div class="col-md-4 v-pad">
        <div class="features-icon">
          <img src="img/feature-icon-1.png" alt="">
          <br><br>
          <h4>将完成任务所积攒的任务点交易变为W Green Pay</h4>
        </div>
      </div>
      <div class="col-md-4 v-pad">
        <div class="features-icon">
          <img src="img/feature-icon-2.png" alt="">
          <br>
          <h4>在网上商城使用W Green Pay（W-Foundation的合作伙伴）消费</h4>
        </div>
      </div>
      <div class="col-md-4 v-pad">
        <div class="features-icon">
          <img src="img/feature-icon-3.png" alt="">
          <br>
          <h4>使用W Green Pay作为收益回报系统</h4>
        </div>
      </div>
    </div>
    <br>
    <br>
    <h2>W-Foundation</h2>
    <br>
    <p>成立于2012年，是一家国际非营利组织，也是由韩国战略与金融部授权的指定捐赠组织。W-Foundation是HOOXI活动的慈善基金会。使用令人期待的HOOXI移动应用程序，个人就可以执行温室气体减排任务以积攒任务点数，进而交换WGP。</p>
    <br>
    <h2><span style="color:#ggg;">HOOXI</span> 应用</h2>
    <br>
    <p>移动应用HOOXI将跟踪、汇总个人的温室气体减排数据，根据该数据，W-Foundation将分配国家排放许可证（NEPs），即在韩国市场交易的碳排放单位。通过HOOXI活动，基于NEP的碳交易的经济奖励将不再是公司和机构的独有的市场，而是将向个人开放的领域。</p>
    <br>
    <h2>W Exchange</h2>
    <br>
    <p>经韩国电力公司（KEPCO）批准，W Exchange将于2019年3月启动。预计W Exchange将成为符合KETS资格的商业实体。预计HOOXI应用分配的NEP将使用W Exchange以代币KRX进行交易，</p>
  </div>
</section>
<section class="sponsors">
  <div class="container">
    <div class="row">
      <div class="col-md-4 v-pad">
       <h1>Hooxi 活动<span style="color:#87b44c;">赞助商</span></h1>
       <br>
       <p>YG娱乐（ YG Entertainment）, Hotel Lotte DFS Co., Ltd., 乐天网购（Lotte Homeshopping）, Philip Morris Korea Ltd., 韩国能率协会（Korea Management Association）, 北京物美商业集团股份有限公司（中国)(Wumart Stores, Inc. China), 韩松化学(Hansol Chemical), 韩松橡树谷度假村(Hansol Oak Valley), Borim CS, FnGuide Inc., Sungdo Engineering & Construction, Korea Business News Co., Ltd., YJM Games Co., Ltd., Cleantopia, NET TV Co., Ltd.</p>
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
    <h1>形象 <span style="color:#87b44c;">大使</span></h1>
    <br>
    <h4>包括韩国流行艺人在内的300多位韩国名人将支持HOOXI活动，并出任W-Foundation的形象大使。</h4>
    <br>
    <p>Infinite组合，高宝璟，李艺真，张赫，金泰宇，I.O.I，朴素珍，沈亨倬，沈昌珉，崔始源，李东海，金裕貞和Alberto是其中几位主要形象大使。此外，还有很多韩国名人担任W-Foundation的形象大使。</p>
    <br>
    <br>
    <div class="row">
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/INFINITE.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>INFINITE组合</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/IOI.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>I.O.I</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/The-One.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>郑淳元</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Lydia-Ko.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>高宝璟</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Jang-Wookhyuk.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Jang, Wookhyuk</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Changmin-(TVXQ).jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>沈昌珉 (东方神起)</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Choi-Siwon-(Super-Junior).jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>崔始源</h3>
            <h4>(Super Junior)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Donghae-(Super-Junior).jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>李东海</h3>
            <h4>(Super Junior)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Kim,-Jinho-(SBS-Producer-of-'Law-of-the-Jungle').jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>金镇浩</h3>
            <h4>（SBS电视台《丛林法则》制片人）</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Kim,-Jongguk.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>金钟局</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Alberto-Mondi.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Alberto Mondi</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Kim,-Hyungjun.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>金亨俊</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Eddy-Kim.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>金正焕</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Baek,-Seonghyeon.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>白成铉</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Gangnam.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>朴载相</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Kim,-Yujung.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Kim, Yujung</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Yeo,-Jingu.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>呂珍九</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Tiffany-(Girl's-Generation).jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>黄美英</h3>
            <h4>少女时代</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Seo,-Muntak.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Seo, Muntak</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Bobby-Kim.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>金知元</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/ZoPD.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>ZoPD</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Eru.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>李路</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Yoo,-Inyeong.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>柳仁英</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Lee,-Eungyeol.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>李恩杰</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/JK-Kim-Donguk.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>JK Kim Donguk</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Cheon,-Hyeonmu.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Cheon, Hyeonmu</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Ailee.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>李艺真</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Kwon,-Hyeoksu.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>权赫秀</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/ULALA-SESSION.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>ULALA SESSION</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Jang,-Hyuk.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>张赫</h3>
          </div>
        </div>
      </div> 
  </div>
</section>
<section style="background:#001a3d;" class="emission">
  <div class="container">
    <div class="row">
      <div class="col-md-6 v-pad">
        <h2>KETS <span style="color:#87b44c;">(Korea’s Emissions Trading Scheme, 韩国碳排放交易体系)</span></h2>
        <br>
        <p>2009年，韩国加入《哥本哈根协议》，承诺参与温室气体减排这一全球运动。韩国政府的目标是到2030年将温室气体排放量在目前基础上减少37％。 2015年，韩国推出了碳排放交易体系（Korea's Emissions Trading Scheme，即KETS），该体系是欧盟减排交易机制之后的第二大碳排放交易制度。</p>
    <br>
    <p>韩国的总量管制与交易（Cap-and-Trade）系统通过市场机制减少温室气体排放。该系统适用于约600家公司，这些公司的碳排放量占韩国温室气体排放量的68％以上（Korea Carbon，2018年）。确定公司最高排放量上限由政府规定。当公司排放量超过上限时，公司必须以市场价额外购买国家排放许可证（NEP），或向政府支付罚款。</p>
    <br>
    <p>不遵守碳排放交易体系（KETS）的罚款为：每单位的tCO2e需支付平均市场价的三倍罚金。最高罚款上限为每吨二氧化碳100,000韩元（约合93美元/吨二氧化碳当量）。</p>
        <br>
        <p>Source: <a href="https://ieta.wildapricot.org/resources/Resources/Case_Studies_Worlds_Carbon_Markets/re publicofkorea_case%20study_june_2015.pdf" target="_blank" style="color:#87b44c;">资料来源：国际排放交易协会（IETA），2015年[The International Emissions Trading Association (IETA), 2015]</a></p>
        <br>
        <br>
        <img src="img/emission.png" alt="">
      </div>
      <div class="col-md-6 v-pad">
        <h2>NEP <span style="color:#87b44c;">（国家排放许可证）</span></h2>
        <br>
        <h4 style="font-weight:700;">（国家排放许可证）验证</h4>
        <br>
        <p>韩国的NEP（国家排放许可证）由环境部验证，并以现行市场价格进行交易。尽管市场对NEP的需求不断增长，但环境部对NEP的配额依然有限。截至2018年4月14日，NEP的价格高达约每吨22,000韩元（20美元），这高于欧盟的CER（核证减排量）。截至2017年4月16日，欧盟的CER价格约为每吨13.84欧元（约合每吨17,700韩元）。</p>
        <br><br>
        <img src="img/graph-nep.png" alt="">
        <br>
        <br>
        <br>
        <br>
        <h4 style="font-weight:700;">NEP（国家排放许可证）市场规模</h4>
        <br>
        <p>目前约有600家公司参与韩国的碳排放交易。NEP市场规模从2015年的573亿韩元基线迅速增长；2016年，KETS高达1946亿韩元，2017年则达到4385亿韩元（取自于2017年1月至10月的有效数据）（韩国战略与金融部，2017年）。据韩国政府预计，未来几年内NEP市场将持续增长。</p>
        
      </div> 
    </div>
  </div>
</section>
<!------------ About end ------------>

<!------------ Features start ------------>
<section id="features">
  <div class="container">
    <h1>特点</h1>
    <div class="h-line" style="background:#001a3d;"></div>
    <div style="text-align:center;">
      <h2>WGP生态系统</h2>
      <br>
      <p>个人可以在HOOXI应用程序上轻松开设帐户。作为该应用程序的用户，大家可以选择许多简单的预定义任务，例如乘坐公共交通工具，减少用电量或购买已识别的环境友好型产品。</p>
      <br>
      <br>
      <br>
      <img src="img/feature.jpg" alt="">
      <br>
      <br>
      <br>
      <h4 style="font-weight:700;">如何收集WGP作为收益回报？示例如下：</h4>
      <br>
      <div style="max-width:555px; display:inline-block;"><img src="img/card.jpg" alt=""></div>
      <br>
      <div class="row">
        <div class="col-md-4 col-sm-4 v-pad">
          <div style="max-width:36px; display:inline-block;"><img src="img/check.png" alt=""></div>
          <br><br>
          <h4>在W Green Pay 购买环保产品合作伙伴门店消费</h4>
        </div>
        <div class="col-md-4 col-sm-4 v-pad">
          <div style="max-width:36px; display:inline-block;"><img src="img/check.png" alt=""></div>
          <br><br>
          <h4>购买已确定的生态产品</h4>
        </div>
        <div class="col-md-4 col-sm-4 v-pad">
          <div style="max-width:36px; display:inline-block;"><img src="img/check.png" alt=""></div>
          <br><br>
          <h4>乘坐公共交通工具</h4>
        </div>
      </div>
    </div>
  </div>
</section>
<!------------ Features end ------------>

<!------------ Token sale start ------------>
<section id="token">
  <div class="container">
    <h1>代币发售</h1>
    <div class="h-line"></div>
      <div class="col-md-4 token-graph">
        <img src="img/chart-tokensale.png" alt="">
        <br>
        <br>
        <p>W Green Pay的发行总数将保持不变，为1亿代币。</p>
        <br>
        <p>本次ICO仅发售10亿总量中的2亿个WGP，未售出的8亿WGP具有以下用途：</p>
        <ul>
          <li>2亿（20%）：WGP发行人持有（自本次ICO公开发售结束日期2018年8月27日起6个月内限售）</li>
          <li>2亿（2 0%）：分配给H O O X I应用软件，为HOOXI运动的参与者提供奖励（当奖励持有量耗尽时，通过在市场上购买WGP来维持奖励系统运作）</li>
          <li>4亿（40%）：保留待售（自本次ICO公开发售结束日期2018年8月27日起6个月内限售）</li>
        </ul>
      </div>
      <div class="col-md-8 token-table">
        <table>
            <tr valign="top">
              <td class="left-table" style="padding-top:40px;">代币名称</td>
              <td style="padding-top:40px;">W Green Pay</td>
            </tr>
            <tr valign="top">
              <td class="left-table">货币符号</td>
              <td>WGP</td>
            </tr>
            <tr valign="top">
              <td class="left-table">交易平台</td>
              <td>恒星币</td>
            </tr>
            <tr valign="top">
              <td class="left-table">代币供应 </td>
              <td>固定供应量为1亿，其中2000万可售</td>
            </tr>
            <tr valign="top">
              <td class="left-table">交易货币</td>
              <td>恒星币/以太币 / 比特币 / 美元</td>
            </tr>
            <tr valign="top">
              <td class="left-table">代币价格</td>
              <td>每币2美元</td>
            </tr>
            <tr valign="top">
              <td class="left-table">私人发售日期</td>
              <td>2018年5月至10月</td>
            </tr>
            <tr valign="top">
              <td class="left-table">公开发售日期</td>
              <td>2018年第四季度</td>
            </tr>
            <tr valign="top">
              <td class="left-table">软上限</td>
              <td>2500万美元</td>
            </tr>
            <tr valign="top">
              <td class="left-table">硬上限</td>
              <td>WGP 2亿个</td>
            </tr>
            <tr valign="top">
              <td class="left-table" style="padding-bottom:40px;">禁售期</td>
              <td style="padding-bottom:40px;">公开售卖日（2018年8月27日）起六（6）个月内为禁售期，团体及私人投资者需等待禁售期过后才能出售持有的W Green Pay 。</td>
            </tr>
        </table>
      </div>
  </div>
</section>
<!------------ Token sale end ------------>

<!------------ Media start ------------>
<section id="media">
  <div class="container">
    <h1>媒体</h1>
    <div class="h-line" style="background:#001a3d;"></div>
    <div class="row">
      <div class="flex-container">
        <div class="media-slider">
          <ul class="slides" style="text-align:center;">
            <li>
              <div class="col-md-6 col-sm-6 v-pad">
                <a href="https://www.youtube.com/watch?v=VB2oOM2MlcQ" class="video-pop-up"><img src="img/video-thumb-1.jpg" alt=""></a>
                <br><br>
                <h4>国民温室气体减排运动（HOOXI运动）发布仪式</h4>
              </div>
              <div class="col-md-6 col-sm-6 v-pad">
                <a href="https://www.youtube.com/watch?v=QXNmaJxk0Nc" class="video-pop-up"><img src="img/video-thumb-2.jpg" alt=""></a>
                <br><br>
                <h4>W-Foundation呈现歌曲，Beautiful World </h4>
              </div>
            </li>
            <li>
              <div class="col-md-6 col-sm-6 v-pad">
                <a href="https://www.youtube.com/watch?v=0KNCErbpYvc" class="video-pop-up"><img src="img/video-thumb-3.jpg" alt=""></a>
                <br><br>
                <h4>W-Foundation呈现歌曲，Talk about Love</h4>
              </div>
              <div class="col-md-6 col-sm-6 v-pad">
                <a href="https://www.youtube.com/watch?v=j47MC3V9qMM" class="video-pop-up"><img src="img/video-thumb-4.jpg" alt=""></a>
                <br><br>
                <h4>W-Foundation呈现歌曲，Together As One</h4>
              </div>
            </li>
            <li>
              <div class="col-md-6 col-sm-6 v-pad">
                <a href="https://www.youtube.com/watch?v=SxTATUzroa0" class="video-pop-up"><img src="img/video-thumb-5.jpg" alt=""></a>
                <br><br>
                <h4>国民温室气体减排运动（HOOXI运动)委员会建队仪式</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div style="background:#00bc7b; width:100%; height:1px; margin:60px 0;"></div>
    <h2>文章</h2>
    <br>
    <br>
    <div class="row">
      <div class="flex-container">
        <div class="articles-slider">
          <ul class="slides">
            <li>
              <div class="col-md-4 col-sm-4 v-pad">
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
              </div>
            </li>
            <li>
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
              </div>
            </li>
            <li>
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
              </div>
            </li>
            <li>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-eng-afp.png" alt="">
                  <br><br>
                  <p>AFP</p>
                  <br>
                  <h4>W Green Pay（WGP） -  温室气体全球减排解决方案</h4>
                  <br>
                  <a href="https://www.afp.com/en/news/1314/w-green-pay-wgp-global-solution-greenhouse-gas-ghg-reduction-201805300056201" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
            </li>
          </ul>
          <div class="articles-viewall"><a href="media.html" target="_blank" class="btn white-btn articles-btn">View All</a></div>
        </div>
      </div>
    </div>
    
    <div class="row" style="margin-top:80px;">
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
		<a href="https://icobench.com/ico/w-green-pay" target="_blank"><img src="img/media-logos/media-icobench.jpg"></a>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <a href="https://www.icoalert.com/?q=w%20green%20pay&is_v=1" target="_blank"><img src="img/media-logos/media-icoalert.jpg"></a>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <a href="https://www.coinhills.com/ico/view/w-green-pay/" target="_blank"><img src="img/media-logos/media-coinhills.jpg"></a>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <a href="https://www.trackico.io/ico/w-green-pay/" target="_blank"><img src="img/media-logos/media-trackico.jpg"></a>
      </div>
    </div>
  </div>
</section>
<!------------ Media end ------------>

<!------------ Roadmap start ------------>
<section id="roadmap">
  <div class="container">
    <h1>路径图</h1>
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
                <h3 class="timeline-title">2017年12月</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>HOOXI运动发布仪式</h4></li>
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
                <h3 class="timeline-title">2018年4月</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>HOOXI运动委员会成立仪式</h4></li>
                  <li><h4>W Green Pay在新加坡获得认证</h4></li>
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
                <h3 class="timeline-title">2018年5月-10月</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>私人发售W Green Pay</h4></li>
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
                <h3 class="timeline-title">2018年第四季度8</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>公开发售W Green Pay</h4></li>
                </ul>
              </div>
              <div style="clear:both;"></div>
            </div>
          </li>
          <!--
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker timeline-inactive"></div>
            <div class="timeline-content">
              <div class="timeline-icon" style="height:70px;"><img src="img/tree.png" alt=""></div>
              <div class="timeline-detail">
                <h3 class="timeline-title">2018年10月</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>推出HOOXI 应用软件</h4></li>
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
                <h3 class="timeline-title">2018年10月中旬</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>HOOXI应用软件、HOOXI运动节</h4></li>
                </ul>
              </div>
              <div style="clear:both;"></div>
            </div>
          </li>-->
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker timeline-inactive"></div>
            <div class="timeline-content">
              <div class="timeline-icon" style="height:70px;"><img src="img/tree.png" alt=""></div>
              <div class="timeline-detail">
                <h3 class="timeline-title">2019年3月</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>成立W Exchange</h4></li>
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
    <h1>团队</h1>
    <div class="h-line"></div>
    <div class="row">
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#wooklee" class="open-popup-link"><div class="team-img"><img src="img/team-wook-lee.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Wook Lee</h3>
          <h4>主席</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#kyung" class="open-popup-link"><div class="team-img"><img src="img/team-kyeong-keun-hong.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Kyung Keun Hong</h3>
          <h4>W-Foundation总裁</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#youreelee" class="open-popup-link"><div class="team-img"><img src="img/team-youree-lee.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Youree Lee 博士</h3>
          <h4>CEO</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#bruno" class="open-popup-link"><div class="team-img"><img src="img/team-bruno-wu.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Bruno Wu</h3>
          <h4>策略总监</h4>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#keon" class="open-popup-link"><div class="team-img"><img src="img/team-keon.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>KEON HO SHIM</h3>
          <h4>财务顾问</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#chen" class="open-popup-link"><div class="team-img"><img src="img/team-chen-shun-teng.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Chen Shun Teng</h3>
          <h4>商务顾问</h4>
          <p>WWRC Holding Pte. Ltd. WWRC 集团，集团战略与公司事务经理</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#alex" class="open-popup-link"><div class="team-img"><img src="img/team-sung-hyuk-hong.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Alex Sung-Hyeok Hong, Msci学位,理学硕士</h3>
          <h4>W-Foundation董事</h4>
          <p>（HOOXI Global 董事兼 AZworth Trust首席执行官）</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#chris" class="open-popup-link"><div class="team-img"><img src="img/team-chris.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Chris Low</h3>
          <h4>技术顾问</h4>
          <p>Novum Capital 高级管理合伙人兼执行主席</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#jeremy" class="open-popup-link"><div class="team-img"><img src="img/team-jeremy.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Jeremy Khoo</h3>
          <h4>商务拓展顾问</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#irwin" class="open-popup-link"><div class="team-img"><img src="img/team-irwin.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Irwin Chee</h3>
          <h4>商务拓展顾问</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#seonggu" class="open-popup-link"><div class="team-img"><img src="img/team-seonggu-ryu.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Seonggu Ryu 博士.</h3>
          <h4>顾问/首席公关官</h4>
          <p>（韩国西京大学教授</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#chuljun" class="open-popup-link"><div class="team-img"><img src="img/team-chuljun-kim.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>医学博士Chuljun Kim</h3>
          <h4>顾问/首席技术官</h4>
          <p>（大田Wellness医院主席/医生）</p>
        </div>
      </div>
    </div>
    <div style="width:100%; background:rgba(255,255,255,0.2); height:1px; margin-top:60px;"></div>
    <section id="advisers" style="padding-bottom:60px;">
      <h1>顾问 (W-Foundation, HOOXI活动)</h1>
      <div class="h-line"></div>
      <h2>政府</h2>
      <br>
      <div class="row" style="margin-bottom:60px;">
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/team-im.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Im, Jongseong</h3>
            <h4>M韩国国会议员</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/team-yoon-kwansuk.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Yoon, Kwansuk</h3>
            <h4>韩国国会议员</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Kim,-Beongwook--National-Assembly-.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Kim, Beongwook</h3>
            <h4>韩国国会议员</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/MOCT--Oh,-Jangsup.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Oh, Jangsup</h3>
            <h4>前建设与运输部部长</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Lee,-Sanghui.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Lee, Sanghui</h3>
            <h4>前科技部部长</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Ma-Changhwan--MOCIT.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Ma, Changwan</h3>
            <h4>科学与信息通信技术部规划与协调部（Planning and Coordination）副部长</h4>
          </div>
        </div>
      </div>
      <h2>法律专业领域及金融机构</h2>
      <br>
      <div class="row" style="margin-bottom:60px;">
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Ko,-Eunseok--Prosecutor.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Ko, Eunseok</h3>
            <h4>仁川地方检察官办事处富川分会（Bucheon）首席检察官</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Kim,-Chadong---Hanyang-Univ.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Kim, Chadong</h3>
            <h4>汉阳大学法学系教授，首尔高等法院前法官</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Park,-Huiseung--Lawyer.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Park, Huiseung</h3>
            <h4>地区法院、 Pyeong San（律师事务所）及水原地方法院主任律师兼前首席法官 </h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Jang,-Ilsuk--NEw-Finance-Society-Institute.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Jang, Ilsuk</h3>
            <h4>新金融社会学会（New Finance Society Institute）主席</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Choi,-Huinam--KIC.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Choi, Huinam</h3>
            <h4>韩国投资公司（ Korea Investment Corporation）（主权财富基金）总裁</h4>
          </div>
        </div>
      </div>
      <h2>媒体与娱乐</h2>
      <br>
      <div class="row" style="margin-bottom:60px;">
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Song,-Jaejo---Korea-Economy-TV.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Song, Jaejo</h3>
            <h4>韩国经济TV社长</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/team-dongyul-seok.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Dongyul Seok</h3>
            <h4>公共关系顾问（《东亚日报》副主任）)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Min,-Yongjae--YJM-Games.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Min, Yongjae</h3>
            <h4>YJM游戏董事长</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Park,-Junhee--inet-TV.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Park, Junhee</h3>
            <h4>Inet TV 会长</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/team-yoon-Ilsang.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Yoon, Ilsang</h3>
            <h4>作曲家</h4>
          </div>
        </div>
      </div>
      <h2>公司和组织</h2>
      <br>
      <div class="row" style="margin-bottom:30px;">
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Kim-Jongryang---Hanyang-Univ-Chairman.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Kim, Jongryang</h3>
            <h4>汉阳大学理事长</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/team-cho.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>CHO, DONGHYUK</h3>
            <h4>韩松化学会长</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Choi Jonggu - Easter Jet.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Choi, Jonggu</h3>
            <h4>易斯达航空社长</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Peter-Kim--JIOS.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Kim, Peter</h3>
            <h4>JIOS Aerogel会长</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Kwon,-Ryan---Jimei.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Kwon, Ryan</h3>
            <h4>JIMEI韩国代表理事</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Park,-Jonghwa---KR-Industry.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Park, Jonghwa</h3>
            <h4>(株) KR 产业代表</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Moon,-Gyeonghwan---SCGO.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Moon, Gyeonghwan</h3>
            <h4>SCGO代表</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Lee,-Bonggyu---Hanyang.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Lee, Bonggyu</h3>
            <h4>(株) 汉阳专务理事</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Kim,-Dongman---Khan.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Kim, Dongman</h3>
            <h4>K-Khane会长</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Choi,-Youngeun---Mantoss-Power.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Choi, Youngeun</h3>
            <h4>Mantoss代表</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Hong,Nanggi---Kumho.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Hong, Nanggi</h3>
            <h4>锦湖建设常务理事</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Chun,-Jonggi---Seegene-Medical-Foundation.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Chun, Jonggi</h3>
            <h4>Seegene医疗基金会理事长</h4>
          </div>
        </div>
      </div>
    </section>	  
    <div class="team-advisor">
      <h3>请点击以下链接以了解更多<br>有关160多位领导者和具有影响力人物<br>为W-Foundation和HOOXI活动提供的建议和资讯</h3>
 	    <br>
 	    <h4>韩语: <a href="http://www.gcrfund.org/honorary_advisors/" style="color:#87b44c;" target="_blank">http://www.gcrfund.org/honorary_advisors/</a></h4>
       <h4>英语: <a href="http://www.gcrfund.org/en/honorary-advisors/" style="color:#87b44c;" target="_blank">http://www.gcrfund.org/en/honorary-advisors/</a></h4>
    </div>    
  </div>
</section>
<!------------ Team end ------------>

<!------------ Contact start ------------>
<section id="contact">
  <div class="container">
    <h1>联系方式</h1>
    <div class="h-line"></div>
    <div style="text-align:center;">
      <h3 style="text-transform:none;">有关咨询事宜：请发送邮件至</h3>
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
      <div class="col-md-6 v-pad" style="text-align:center; padding-top:30px;"><h3 style="text-transform:none;">不要错过最新消息与更新。</h3></div>
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
        <a href="http://www.gcrfund.org/en/"><img src="img/logo-hooxi.jpg" alt=""></a>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-6 v-pad wfoundation">
        <a href="http://www.gcrfund.org/en/"><img src="img/logo-wfoundation.jpg" alt=""></a>
      </div>
    </div>
  </div>
  <br>
    <span class="small-font" style="color:#333;">@ 2018 W GLOBAL INVESTMENT PTE. LTD. <br>版权所有</span>
    <br><br>
    <div style="color:#87b44c; font-weight:400;"><a href="#terms_service" class="open-popup-link">服务条款</a> &nbsp;&nbsp;I&nbsp;&nbsp; <a href="#policy" class="open-popup-link">隐私政策y</a></div>
</div>

<!---------- Participate form ------------> 

<div id="participateform" class="white-popup mfp-hide sans">
  <h4>加入<b>W GREEN PAY</b></h4>
  <br><br>
  <div class="participate-messages"></div>
  <form id='participate' class="ajax-participate" action='https://global.us18.list-manage.com/subscribe/post?u=e1cce14547abb01d594305d38&amp;id=db0d55a049' method='post' accept-charset='UTF-8' name="mc-embedded-subscribe-form">
    <input type='hidden' name='submitted' id='submitted' value='1'/>
    <input type="hidden" name="type" value="participate" />
    <input type='text' class="input-style" name='FNAME' id='participate_name'  placeholder="姓名" />
    <br>
    <br>
    <input type='text' class="input-style" name='EMAIL' id='participate_email'  placeholder="邮箱" required/>
    <br>
    <br>
    <br>
    <div style="float:right;">
      <button type='submit' value='Submit' class="btn white-btn">提交</button>
    </div>
    <div style="clear:both;"></div>
  </form>
</div>

<!---------- Participate form ------------> 

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
  <h4>W-Foundation主席</h4>
  <br><br><br>
  <p>WOOK LEE主席是W-Foundation创始人兼董事长，慈善家、企业家，他建立了全球网络，实现了与政府、企业和各机构的公私合作伙伴关系；与全球捐助者建立了全球气候难民基金（Global Climate Refugee Fund ），并将W-Foundation发展成为极具影响力的全球自然保护组织（ Global Nature Conservation Organization）。Lee主席拥有汉阳大学法学学士学位。</p>
</div>

<div id="youreelee" class="white-popup mfp-hide sans">
  <h3>YOUREE LEE 博士</h3>
  <h4>W-Foundation CEO</h4>
  <br><br><br>
  <p>
Youree Lee 博士是W-Foundation的联合创始人兼首席执行官，W-HY R＆D、Hooxi研究所及Hooxi Foundation（美国）的首席运营官。Lee 博士在Shinhan Macquarie Financial Advisory和Sumitomo Mitsui Banking Corporation拥有广泛的投资和企业银行业务经验，拥有梨花女子大学国际商务博士、文学硕士学位以及文学学士学位，目前在梨花女子大学和汉阳大学任教。</p>
</div>

<div id="keon" class="white-popup mfp-hide sans">
  <h3>KEON HO SHIM</h3>
  <h4>W-Foundation财务顾问n</h4>
  <br><br><br>
  <p>
KEON HO SHIM拥有23年银行、咨询及新业务拓展经验，曾在美林银行、花旗银行、奥纬咨询和三星公司任职，拥有纽约大学斯特恩商学院的工商管理硕士学位及乔治华盛顿大学的政治经济学的文学学士学位。
</p>
</div>

<div id="dongyul" class="white-popup mfp-hide sans">
  <h3>DONGYUL SEOK</h3>
  <h4>W-Foundation公共关系顾问（《东亚日报》副主任）</h4>
  <br><br><br>
  <p>
Dongyul Seok先生是韩国知名记者、国际新闻工作者联合会（ International Federation of Journalists）副主席，韩国新闻摄影协会（Korea Press Photography Association）主席，他拥有25年从业经验。同时任汉阳大学媒体与传播学（Media & Communication）兼职教授。</p>
</div>

<div id="seonggu" class="white-popup mfp-hide sans">
  <h3>SEONGGU RYU 博士</h3>
  <h4>W-Foundation顾问/首席公关官（韩国西京大学教授）</h4>
  <br><br><br>
  <p>Seonggu Ryu博士曾于三星公司担任战略规划、集团管理咨询与营销相关职务，拥有25年的相关工作经验。近期出任三星电子（Samsung Electronics）营销战略集团（Marketing Strategy Group）副总裁，并任西京大学工商管理学教授。</p>
</div>

<div id="chuljun" class="white-popup mfp-hide sans">
  <h3>CHULJUN KIM M.D.</h3>
  <h4>W-Foundation顾问/首席技术官（大田Wellness医院主席/医生）</h4>
  <br><br><br>
  <p>Chuljun Kim 博士是医生、企业家、投资人，拥有20余年相关领域从业经验。作为一家大型医院的CEO，领导了业界瞩目的医疗行业并购及投资活动。目前致力于为医疗行业拓展区块链技术，帮助医生与患者安全地存储病例记录，同时兼任韩国忠南大学康复医学助理教授。</p>
</div>

<div id="bruno" class="white-popup mfp-hide sans">
  <h3>BRUNO WU</h3>
  <h4>W-Foundation策略总监 </h4>
  <br><br><br>
  <p>中国五十大富豪，他是中国最大传媒公司“阳光七星娱乐媒体集团有限 公司”的创始人、主席、CEO。他是美国SEC(证券委员会)唯一授权区 块链交易所DBOT(Delaware Board of Trade Holdings Inc.)的第一大 股东。既是阳光传媒集团的前任董事长，也是盛大集团的前董事。他 和妻子杨澜(中国知名主持人)曾在2016年荣登《福布斯》中国顶 级富豪榜。</p>
</div>

<div id="chen" class="white-popup mfp-hide sans">
  <h3>CHEN SHUN TENG</h3>
  <h4>商务顾问, WWRC Holding Pte. Ltd. WWRC 集团，集团战略与公司事务经理</h4>
  <br><br><br>
  <p>WWRC集团已成为16个亚洲国家的主要化学品分销商，他在集团内负责 基于海外扩张、合资、合作、并购的未来战略规划。他在任职于WWRC 集团之前，曾在花旗银行和华侨银行工作。拥有南洋理工大学材料工程 系学士学位(荣誉毕业)。</p>
</div>

<div id="chris" class="white-popup mfp-hide sans">
  <h3>CHRIS LOW</h3>
  <h4>W-Foundation技术顾问，（Novum Capital 高级管理合伙人兼执行主席）</h4>
  <br><br><br>
  <p>Chris Low先生是一位成功的连续创业者，他创办了东南亚最大的社交游戏网站之一Viwawa，联合创立了越南最大的移动POS机公司SoftPay Mobile。Low先生毕业于新加坡国立大学计算机科学专业并拥有理学学士学位。</p>
</div>

<div id="jeremy" class="white-popup mfp-hide sans">
  <h3>JEREMY KHOO</h3>
  <h4>W-Foundation商务拓展顾问</h4>
  <br><br><br>
  <p>区块链专家兼成功的全球企业家。他成功退出VC投资的3家风险投资公 司，现任零售中心iFashion Group集团的首席执行官，正在新加坡证券 交易所(SGX)推动MC Payment上市。他深入参与许多区块链项目，并 在为8家机构售出1亿美元以上区块链代币的过程中发挥重要作用。</p>
</div>

<div id="irwin" class="white-popup mfp-hide sans">
  <h3>IRWIN CHEE</h3>
  <h4>W-Foundation商务拓展顾问</h4>
  <br><br><br>
  <p>作为Novum Capital的首席顾问，专门从事区块链应用、ICO咨询、投资 者关系等工作。在个人经办的ICO项目中成功售出超过1亿美元的代币。</p>
</div>

<div id="kyung" class="white-popup mfp-hide sans">
  <h3>KYUNG KEON HONG</h3>
  <h4>W-Foundation总裁</h4>
  <br><br><br>
  <p>W基金会总裁、HOOXI Global和Truben Investment集团的董事长。Truben Investment是韩国规模最大的基金之一，主要投资海内外的基础设施资产和长期持有资产。Ktoto Co.，Ltd是Trueben Investment集团 旗下的子公司，是根据与韩国政府签订的独家许可协议运营的彩票发行人和分销商。Ktoto的年销售额约为5万亿韩元。</p>
</div>

<div id="alex" class="white-popup mfp-hide sans">
  <h3>ALEX SUNG-HYEOK HONG, Msci, MSc</h3>
  <h4>W-Foundation理事（HOOXI Global 董事兼 AZworth Trust首席执行官）</h4>
  <br><br><br>
  <p>在私募基金和科学、技术战略咨询方面拥有超过10年的经验。曾在伦敦帝国理工学院获得理论物理硕士学位，在伦敦大学学院获得自然科学哲学和历史硕士学位。 AZworth Trust既是Truben Investment的母公司，也是HOOXIGlobal的股东。目前，他在AZworth Trust担任首席执行官，负责管理各种投资组合和业务。</p>
</div>
 

<!---------- Team popup content end------------

<!-- Add countdown --> 

<script>
	jQuery(function($){
		//var NY = Math.round((new Date('1/01/2015 00:00:01')).getTime()/1000);
		$('#token_sale').flipcountdown({
			size:'md',
			beforeDateTime:'7/27/2018 00:00:01'
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