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
<li><a href="#about">소개</a></li>
<li><a href="#features">특징</a></li>
<li><a href="#token">토큰판매</a></li>
<li><a href="#media">미디어</a></li>
<li><a href="#roadmap">로드맵</a></li>
<li><a href="#team">팀</a></li>
<li><a href="#contact">연락처</a></li>
</ul>
<div class="lng-container">
<a href="index.php" class="lng">영어</a> &nbsp;<a href="#" class="lng lng-active">한국어</a>
</div>
<nav>
<a href="" id="menuToggle" title="show menu"><span class="navClosed"></span></a>
<a href="#about" onClick="closeSidebar(this)">소개</a>
<a href="#features" onClick="closeSidebar(this)">특징</a>
<a href="#token" onClick="closeSidebar(this)">토큰판매</a>
<a href="#media" onClick="closeSidebar(this)">미디어</a>
<a href="#roadmap" onClick="closeSidebar(this)">로드맵</a>
<a href="#team" onClick="closeSidebar(this)">팀</a>
<a href="#contact" onClick="closeSidebar(this)">연락처</a>
<div class="lng-mobile">
<a href="index.php">한국어</a>
</div>
</nav>
</div>
</div>
<!------------ Navigation end ------------>

<!------------ Home banner start ------------>
<div id="home">
<div class="home-container">
<h1><span style="color:#87b44c;">W Green Pay</span> HOOXI 캠페인 참여하세요!</h1>
<h4>가장 혁신적인 온실가스 감축 플랫폼이 출시됩니다.</h4>
<h4>지금 본인의 계정을 등록하고 20% 할인 혜택을 받으세요! </h4>
<br><br>
<h4 style="font-weight:700;"><span style="color:#87b44c;">공개 판매가 곧 시작됩니다! (하기 카운트 다운):</h4>
<br><br>
<div id="token_sale"></div>
<br>
<ul class="countdown">
<li class="days small-font">
일
</li>
<li class="hrs small-font">
시간
</li>
<li class="mins small-font">
분
</li>
<li class="sec small-font">
초
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
<div class="publicsale">60.000.000 WGP</div>
</div>-->
<br>
<br>
<br>
<ul class="home-btn">
<li><a href="#participateform" class="open-popup-link btn">참여하기</a></li>
<li><a href="WPay-whitepaper-KR-v2.pdf" target="_blank" class="btn">백서</a></li>
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
<h1>소개</h1>
<div class="h-line"></div>
<h1><span style="color:#87b44c;">W Green Pay </span></h1>
<br>
<h4>W Green Pay ("WGP")는 ERC20를 준수하는 토큰으로 이더리움 블록체인에서 구동됩니다. W Green Pay는 W Green Pay는 한국의 탄소배출권 거래 시장에서 국민의 온실가스 감축 노력을 보상하는 리워드 시스템으로 사용됩니다. </h4>
<br>
<h4>HOOXI 앱은 개개인의 온실가스 배출 감축 노력을 미션으로 제공하고 미션 성공시 유저에게 리워드를 지급하는 플랫폼입니다.</h4>
<br>
<br>
<h2 style="text-transform:none; color:#87b44c;">목표</h2>
<br>
<p>2009년 코펜하겐 협정에서 발표한 정부의 공약에 따라 한국은 2030년까지 온실가스 배출량을 37% 감소하고자 합니다.</p>
<br>
<p>한국 정부는 지난 2017년 W재단을 선정, 대국민 온실가스 감축운동 (HOOXI 캠페인)을 주도하도록 하였습니다.</p>
<br>
<p>W재단은 한국 정부의 온실가스 감축 목표 달성에 협력하기위해 HOOXI 앱을 출시하여 환경 이슈에 관한 대중의 인식을 고취하고, 대중의 온실가스 감축 참여를 높일 계획입니다. HOOXI 앱을 통해 온실가스 감축 노력에 참여하는 이들에게는 W Green Pay를 통해 리워드가 제공됩니다.</p>
</div>
</div>
<br>
<h2>솔루션</h2>
<br>
<p>가장 혁신적인 온실가스 감축 플랫폼이 출시됩니다.</p>
<br>
<p>한국 정부와 W재단의 대국민 온실가스 감축운동(HOOXI 캠페인)을 위한 블록체인, W Green Pay(WGP)는 온실가스 감축노력에 참여하는 대중에게 제공될 보상수단으로 사용됩니다.</p>
<br>
<h4 style="font-weight:700;">W Green Pay(WGP)의 사용처는 다음과 같이 다양합니다:</h4>
<br>
<br>
<div class="row">
<div class="col-md-4 v-pad">
<div class="features-icon">
<img src="img/feature-icon-1.png" alt="">
<br><br>
<h4>HOOXI 앱 미션 수행 후  WGP 획득</h4>
</div>
</div>
<div class="col-md-4 v-pad">
<div class="features-icon">
<img src="img/feature-icon-2.png" alt="">
<br>
<h4>W재단 파트너사 쇼핑몰 (오프라인, 온라인)에서 WGP로 쇼핑</h4>
</div>
</div>
<div class="col-md-4 v-pad">
<div class="features-icon">
<img src="img/feature-icon-3.png" alt="">
<br>
<h4>신용카드 캐시백으로 WGP 받기</h4>
</div>
</div>
</div>
<br>
<br>
<h2>W재단</h2>
<br>
<p>2012년에 설립된 세계자연보전기관 W재단은 기획재정부가 지정한 지정기부금단체로 HOOXI 캠페인을 리드하는 국제구호기구입니다. HOOXI 모바일 앱을 활용하여 온실가스 감축 미션을 수행하면 W Green Pay를 리워드로 받을 수 있습니다.</p>
<br>
<h2><span style="color:#fff;">HOOXI</span> 앱</h2>
<br>
<p>HOOXI 앱은 개인의 온실가스 감축량을 데이터를 통합, 해당 데이터를 환경부로부터 인증받아 탄소배출권을 할당받습니다. HOOXI 앱을 통해 연간 온실가스 천만 톤을 줄일 수 있을 것으로 예측, 탄소배출권 거래를 통해 연간 약 2억 달러의 매출을 올릴 것으로 예상합니다.</p>
<br>
<h2>W Exchange</h2>
<br>
<p>W Exchange는 한국전력의 승인하에 2019년 3월에 출시예정이다. W Exchange는 한국 탄소배출권 거래제 대상 사업체로써, HOOXI 앱 온실가스 감축데이터에 할당된 탄소배출권을 한국거래소에서 거래할 예정입니다. W Exchange는 W Green Pay 를 현금으로 교환할 수 있는 거래소로도 활용될 예정입니다.</p>
</div>
</section>
<section class="sponsors">
<div class="container">
<div class="row">
<div class="col-md-4 v-pad">
<h1>HOOXI <span style="color:#87b44c;">캠페인 후원사</span></h1>
<br>
<p>NH농협금융지주, NH농협생명, NH농협증권, KB국민은행, YG엔터테인먼트, 롯데면세점, 롯데홈쇼핑, 필립모리스, KMA한국능률협회, 중국 우메이그룹, 한솔케미칼, 한솔오크밸리, ㈜보림씨에스, 에프엔가이드, 성도이엔지, 한국경제TV, YJM게임즈, 크린토피아, 아이넷TV</p>
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
<h1><span style="color:#87b44c;"> 홍보대사</span></h1>
<br>
<h4>K-pop 스타를 비롯한 한국 유명인사 300여명이 W재단의 HOOXI 캠페인 홍보대사로 참여하고 있습니다.</h4>
<br>
<p>윤일상 작곡가, 에일리, 김유정, 정글의 법칙 김진호PD, 인피니트, 강남, 에디킴, 김태우, 최강창민(동방신기), 시원, 동해(슈퍼주니어), 백성현, 권혁수, 울랄라세션, 심형탁, 서문탁, 이루, 유인영, 조PD, 아이오아이(I.O.I.), 한고은, 장혁, 스테파니, 알베르토 몬디, 리디아 고 등 많은 유명인사들이 HOOXI 캠페인과 함께합니다.</p>
</div>
</div>
</div>
</section>
<section style="background:#001a3d;" class="emission">
<div class="container">
<div class="row">
<div class="col-md-6 v-pad">
<h2><span style="color:#87b44c;">한국 탄소배출권 거래제</span></h2>
<br>
<p>2009년에 한국은 코펜하겐 협정에서 온실가스 감축을 위한 글로벌 이니셔티브에 참여하겠다고 선언했습니다. 2015냔 도입된 한국 탄소배출권 거래제는 유럽 연합 탄소배출권 거래제 다음, 세계 2위 규모의 탄소배출권 거래제입니다.</p>
<br>
<p>한국의 탄소배출권 거래제 시스템은 한국의 온실가스 배출량의 68% 이상을 차지하는 약 600개의 기업에 적용됩니다 (출처: Korea Carbon, 2018년). 할당 기업당 탄소배출량에 대한 캡(한도)은 정부가 결정하고, 기업 당 배출량이 캡을 초과하는 경우 추가로 시장에서 시장 가격으로 탄소배출권을 구매해야 하고, 구매하지 못한 경우에는 정부에 벌금을 지불해야 합니다.</p>
<br>
<p>한국 탄소배출 거래제 미준수 시 부과되는 벌금은 탄소배출권 평균 시장 거래가의 3배로 최대 톤 당 10만원까지 벌금이 부과됩니다.</p>
<br>
<p>출처: <a href="https://ieta.wildapricot.org/resources/Resources/Case_Studies_Worlds_Carbon_Markets/re publicofkorea_case%20study_june_2015.pdf" target="_blank" style="color:#87b44c;">The International Emissions Trading Association (IETA), 2015</a></p>
<br>
<br>
<img src="img/emission.png" alt="">
</div>
<div class="col-md-6 v-pad">
<h2><span style="color:#87b44c;">탄소배출권 거래가</span></h2>
<br>
<h4 style="font-weight:700;"></h4>
<br>
<p>환경부는 탄소배출권을 인증하고 할당합니다. 국내 탄소배출권의 수요는 증가하는 추세이지만, 환경부가 할당하는 탄소배출권의 수량은 제한적입니다. 톤 당 탄소배출권 가격은 2018년 4월 14일 기준 약 22,000원으로 2018년 4월 16일 기준 유럽 시장의 탄소배출권 (약 17,700원)보다 높습니다. </p>
<br><br>
<img src="img/graph-nep.png" alt="">
<br>
<br>
<br>
<br>
<h4 style="font-weight:700;">탄소배출권 시장규모</h4>
<br>
<p>한국에는 약 600개 기업이 탄소배출권 거래에 참여하고 있습니다. 탄소배출권 시장의 규모는 거래제 출범년도인 2015년이래 573억원에서 급격히 증가하는 추세이며, 2016년 1,946억원 그리고 2017년 1월~10월 동안 약 4,385억원 규모의 탄소배출권이 거래되었습니다 (출처: 기획재정부, 2017년). 한국 정부에 따르면 국내 탄소배출권 시장은 앞으로도 계속 성장 할 것입니다.</p>

</div>
</div>
</div>
</section>
<!------------ About end ------------>

<!------------ Features start ------------>
<section id="features">
<div class="container">
<h1>특징</h1>
<div class="h-line" style="background:#001a3d;"></div>
<div style="text-align:center;">
<h2>W Green Pay (WGP) 활용방법</h2>
<br>
<p>HOOXI 앱의 계정은 누구나 쉽게 개설할 수 있습니다 (영어버전 출시 예정). 앱 유저는 대중 교통 이용하기, 전기 사용 줄이기, 친환경 제품 구매하기 등 다양한 환경 미션을 선택, 미션을 성공함에 따라 WGP를 리워드로 받습니다. HOOXI 앱은 유저의 WGP잔액을 보여주는 토큰 지갑 역할을 하여 유저가 WGP를 사용하거나 수취할 수 있도록 유저의 편의를 제공할 것입니다.</p>
<br>
<br>
<br>
<img src="img/feature.jpg" alt="">
<br>
<br>
<br>
<h4 style="font-weight:700;">W Green Pay (WGP)를 신용카드 사용 캐시백 받을 수 있는 방법</h4>
<br>
<div style="max-width:555px; display:inline-block;"><img src="img/card.jpg" alt=""></div>
<br>
<div class="row">
<div class="col-md-4 col-sm-4 v-pad">
<div style="max-width:36px; display:inline-block;"><img src="img/check.png" alt=""></div>
<br><br>
<h4>WGP 파트너사에서 쇼핑</h4>
</div>
<div class="col-md-4 col-sm-4 v-pad">
<div style="max-width:36px; display:inline-block;"><img src="img/check.png" alt=""></div>
<br><br>
<h4>친환경 제품 구매</h4>
</div>
<div class="col-md-4 col-sm-4 v-pad">
<div style="max-width:36px; display:inline-block;"><img src="img/check.png" alt=""></div>
<br><br>
<h4>대중 교통 이용</h4>
</div>
</div>
</div>
</div>
</section>
<!------------ Features end ------------>

<!------------ Token sale start ------------>
<section id="token">
<div class="container">
<h1>토큰 판매</h1>
<div class="h-line"></div>
<div class="col-md-4 token-graph">
<img src="img/chart-tokensale.png" alt="">
<br>
<br>
<p>W Green Pay (WGP) 발행량은 총 1억 개로 한정, 유지됩니다.</p>
<br>
<p>전체 물량 중, 2천 만 WGP (20%)는 판매되지 않고 WGP 발행자가 보유하고, 2천 만 WGP (20%)는 HOOXI 캠페인 참가자에 대한 리워드 제공을 위해 HOOXI 앱에 할당된다 (리워드 보유물량 소진시, 시장에서 WGP 구매하여 리워드 시스템 유지). 나머지 6천 만 WGP는 비공개 및 공개일정에 판매됩니다.</p>
</div>
<div class="col-md-8 token-table">
<table>
<tr valign="top">
<td class="left-table" style="padding-top:40px;">토큰 이름</td>
<td style="padding-top:40px;">W Green Pay</td>
</tr>
<tr valign="top">
<td class="left-table">토큰 Symbol</td>
<td>WGP</td>
</tr>
<tr valign="top">
<td class="left-table">플랫폼</td>
<td>ERC20</td>
</tr>
<tr valign="top">
<td class="left-table">토큰 유효 소수점 자리수</td>
<td>18</td>
</tr>
<tr valign="top">
<td class="left-table">토큰 공급량</td>
<td>고정 공급량 1억 개, 판매용 6천만 개</td>
</tr>
<tr valign="top">
<td class="left-table">허용되는 화폐</td>
<td>ETH / BTC / USD</td>
</tr>
<tr valign="top">
<td class="left-table">토큰 가격</td>
<td>토큰 당 20달러</td>
</tr>
<tr valign="top">
<td class="left-table">비공개 판매일정</td>
<td>2018년 5월 14일-5월25일</td>
</tr>
<tr valign="top">
<td class="left-table">공개 판매일정</td>
<td>2018년 6월 26일-7월31일</td>
</tr>
<tr valign="top">
<td class="left-table">공개 판매 특가 (할인율)</td>
<td>초기 토큰 천만 개 - 20% 할인판매 후 소진시, 잔량  토큰 - 10 % 할인판매</td>
</tr>
<tr valign="top">
<td class="left-table">소프트 캡</td>
<td>2,500만 달러</td>
</tr>
<tr valign="top">
<td class="left-table">하드 캡</td>
<td>1억개 토큰 판매</td>
</tr>
<tr valign="top">
<td class="left-table" style="padding-bottom:40px;">매각 제한 기간</td>
<td style="padding-bottom:40px;">발행자와 비공개 투자자가 보유한 W Green Pay는 공개 판매 종료 일자인 2018년 7월 31일부터 6개월 동안 매각이 제한됩니다.</td>
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
<h1>로드맵</h1>
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
<h3 class="timeline-title">2017년 12월</h3>
<br>
<ul class="roadmap">
<li><h4>HOOXI 캠페인 선포식</h4></li>
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
<h3 class="timeline-title">2018년 4월</h3>
<br>
<ul class="roadmap">
<li><h4>HOOXI 캠페인 위원회 발대식</h4></li>
<li><h4>싱가포르에서 W Green Pay 런칭</h4></li>
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
<h3 class="timeline-title">2018년 5월</h3>
<br>
<ul class="roadmap">
<li><h4>W Green Pay 비공개판매</h4></li>
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
<h3 class="timeline-title">2018년 6월-7월</h3>
<br>
<ul class="roadmap">
<li><h4>W Green Pay 공개판매</h4></li>
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
<h3 class="timeline-title">2018년 10월</h3>
<br>
<ul class="roadmap">
<li><h4>HOOXI 앱 출시</h4></li>
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
<h3 class="timeline-title">2018년 10월 중순</h3>
<br>
<ul class="roadmap">
<li><h4>HOOXI 앱, HOOXI 캠페인 페스티벌</h4></li>
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
<h3 class="timeline-title">2019년 3월</h3>
<br>
<ul class="roadmap">
<li><h4>W Exchange 출범</h4></li>
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
<h1>TEAM</h1>
<div class="h-line"></div>
<div class="row">
<div class="col-md-4 col-sm-4 v-pad">
<a href="#wooklee" class="open-popup-link"><div class="team-img"><img src="img/team-wook-lee.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>이욱 (Wook Lee)</h3>
<h4>W재단 이사장</h4>
</div>
</div>
<div class="col-md-4 col-sm-4 v-pad">
<a href="#youreelee" class="open-popup-link"><div class="team-img"><img src="img/team-youree-lee.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>이유리 박사 (Youree Lee PH.D.)</h3>
<h4>W재단 CEO</h4>
</div>
</div>
<div class="col-md-4 col-sm-4 v-pad">
<a href="#keon" class="open-popup-link"><div class="team-img"><img src="img/team-keon.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>심건호 (KEON HO SHIM)</h3>
<h4>W재단 Financial Adviser</h4>
</div>
</div>
<div class="col-md-4 col-sm-4 v-pad">
<a href="#dongyul" class="open-popup-link"><div class="team-img"><img src="img/team-dongyul-seok.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>석동률 (DONGYUL SEOK)</h3>
<h4>W재단 Public Relations Adviser</h4>
<p>(동아일보 부국장)</p>
</div>
</div>
<div class="col-md-4 col-sm-4 v-pad">
<a href="#seonggu" class="open-popup-link"><div class="team-img"><img src="img/team-seonggu-ryu.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>유승규 교수 (SEONGGU RYU PH.D.)</h3>
<h4>W 재단 Adviser/Chief Relationship Officer</h4>
<p>(서경대학교 교수)</p>
</div>
</div>
<div class="col-md-4 col-sm-4 v-pad">
<a href="#chuljun" class="open-popup-link"><div class="team-img"><img src="img/team-chuljun-kim.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>김철준(Chuljun Kim M.D.)</h3>
<h4>W재단 Adviser/Chief Technology Officer</h4>
<p>(대전 웰니스 요양병원 병원장)</p>
</div>
</div>
<div class="col-md-4 col-sm-4 v-pad">
<a href="#ryan" class="open-popup-link"><div class="team-img"><img src="img/team-ryan-kim.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>Ryan Kwon</h3>
<h4>W재단 Business Adviser</h4>
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
<h4>W재단 Technology Adviser</h4>
<p>(Managing Partner and Executive Chairman at Novum Capital)</p>
</div>
</div>
</div>
<div style="height:1px; width:100%; opacity:0.2; background:#fff; margin:60px 0;"></div>
<div style="text-align:center;">
<h2>명예고문</h2>
<br>
<h4>W재단 명예고문단 링크</h4>
<h4>한국어: <a href="http://www.gcrfund.org/honorary_advisors/" style="color:#87b44c;" target="_blank">http://www.gcrfund.org/honorary_advisors/</a></h4>
<h4>영어: <a href="http://www.gcrfund.org/en/honorary-advisors/" style="color:#87b44c;" target="_blank">http://www.gcrfund.org/en/honorary-advisors/</a></h4>
</div>
</div>
</section>
<!------------ Team end ------------>

<!------------ Contact start ------------>
<section id="contact">
<div class="container">
<h1>연락처</h1>
<div class="h-line"></div>
<div style="text-align:center;">
<h3 style="text-transform:none;">문의사항은 하기 이메일로 연락바랍니다:</h3>
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
<div class="col-md-6 v-pad" style="text-align:center; padding-top:30px;"><h3 style="text-transform:none;">최신 뉴스와 업데이트를 놓치지 마세요</h3></div>
<div class="col-md-6 v-pad">
<div class="subscription-messages"></div>
<form id='subscription' class="ajax-subscription" action='https://global.us18.list-manage.com/subscribe/post?u=e1cce14547abb01d594305d38&amp;id=db0d55a049' method='post' accept-charset='UTF-8' name="mc-embedded-subscribe-form">
<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type="hidden" name="type" value="subscription" />
<div class="subscription-container">
<input type='text' class="input-style input-box" name='EMAIL' id='subscription_email'  placeholder="이메일" required/>
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
    <a href="http://www.gcrfund.org/"><img src="img/logo-hooxi.jpg" alt=""></a>
</div>
<div class="col-md-6 col-sm-6 col-xs-6 v-pad wfoundation">
    <a href="http://www.gcrfund.org/"><img src="img/logo-wfoundation.jpg" alt=""></a>
</div>
</div>
</div>
<br>
<span class="small-font" style="color:#333;"> @ 2018년 W Global Investment 저작권 보유.</span>
<br><br>
<div style="color:#87b44c; font-weight:400;"><a href="#terms_service" class="open-popup-link">Terms of Service</a> &nbsp;&nbsp;I&nbsp;&nbsp; <a href="#policy" class="open-popup-link">Privacy Policy</a></div>
</div>

<!---------- Participate form ------------>

<div id="participateform" class="white-popup mfp-hide sans">
<h4><b>W Green Pay </b>에 참여하세요</h4>
<br><br>
<div class="participate-messages"></div>
<form id='participate' class="ajax-participate" action='https://global.us18.list-manage.com/subscribe/post?u=e1cce14547abb01d594305d38&amp;id=db0d55a049' method='post' accept-charset='UTF-8' name="mc-embedded-subscribe-form">
<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type="hidden" name="type" value="participate" />
<input type='text' class="input-style" name='FNAME' id='participate_name'  placeholder="성명 " />
<br>
<br>
<input type='text' class="input-style" name='EMAIL' id='participate_email'  placeholder="이메일" required/>
<br>
<br>
<br>
<div style="float:right;">
<button type='submit' value='Submit' class="btn white-btn">제출하기</button>
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
<h3>이욱(WOOK LEE)</h3>
<h4>W재단 이사장</h4>
<br><br><br>
<p>W재단 설립자, 자선가, 기업가. 정부, 기업, 기관과의 공공-개인 파트너십을 가능케 하는 글로벌 네트워크를 구축함. 글로벌 기부자와 함께 글로벌 기후 난민 기금을 설립, W재단을 영향력 있는 글로벌 자연 보전 기구로 발전시킴. 한양대학교 법과 대학에서 학사 학위를 취득함.</p>
</div>

<div id="youreelee" class="white-popup mfp-hide sans">
<h3>이유리 박사(YOUREE LEE PH.D.)</h3>
<h4>W재단 CEO</h4>
<br><br><br>
<p>W재단 공동설립자, W-HY 연구소, HOOXI 연구소의 CEO, HOOXI 재단(미국)의 COO. 신한 맥커리 금융 자문회사 (투자은행), 스미모토 미쓰이 은행에서 기업금융을 담당 함. 이화여자대학교 국제경영  학사, 석사, 박사 학위를 취득함. 현재 이화여자대학교 국제대학원, 한양대학교 국제학부에서 강의 중.</p>
</div>

<div id="keon" class="white-popup mfp-hide sans">
<h3>심건호 (KEON HO SHIM)</h3>
<h4>W재단 Financial Adviser</h4>
<br><br><br>
<p>뱅크오브아메리카 메릴린치, 시티은행, 올리버 와이만, 삼성물산 등 은행, 컨설팅, 신사업 개발 분야에서 23년 이상의 경험을 보유. 뉴욕대 Stern MBA, 조지 워싱턴 대학교 경영학 학사 학위를 취득함.</p>
</div>

<div id="dongyul" class="white-popup mfp-hide sans">
<h3>석동률 (DONGYUL SEOK)</h3>
<h4>W재단 Public Relations Adviser (동아일보 부국장)</h4>
<br><br><br>
<p>영향력 있는 언론인, 국제언론인협회 부회장, 한국언론사진협회 회장으로서 25년의 경험 보유. 한양 대학교 미디어, 커뮤니케이션 학과의 겸임 교수로도 활동.</p>
</div>

<div id="seonggu" class="white-popup mfp-hide sans">
<h3>유승규 교수 (SEONGGU RYU PH.D.)</h3>
<h4>W재단 Adviser/Chief Relationship Officer (서경대학교 교수)</h4>
<br><br><br>
<p>삼성그룹의 전략 계획, 그룹 경영관리 컨설팅, 마케팅 분야에서 25년 경험 보유. 최근에는 삼성전자 미래전략기획실 전무으로 근무. 현재 서경대학교 경영 대학 교수.</p>
</div>

<div id="chuljun" class="white-popup mfp-hide sans">
<h3>김철준(Chuljun Kim M.D.)</h3>
<h4>W재단 Adviser/Chief Technology Officer (대전 웰니스 요양병원 병원장)</h4>
<br><br><br>
<p>의사, 기업가, 투자자로서 20년 경험 보유. 대형 병원 CEO로서 의료 분야에서 세간의 이목을 끄는 인수합병과 투자를 성공함. 현재는 의료 분야를 위한 블록 체인 기술을 개발하여 의료 기록을 안전하게 보호하는 기술 개발에 참여. 충남대학교 재활 의학과 조교수.</p>
</div>

<div id="ryan" class="white-popup mfp-hide sans">
<h3>RYAN KWON</h3>
<h4>W재단 Business Adviser (CEO, Jimei Korea)</h4>
<br><br><br>
<p>Jimei 그룹에서 한중 투자 기회에 초점을 둔 글로벌 부동산 개발 및 금융 자문을 담당하여 한중 양자 간 관계 발전에 기여함. Ozoo 재단 (장학사업) 이사장.</p>
</div>

<div id="chen" class="white-popup mfp-hide sans">
<h3>CHEN SHUN TENG</h3>
<h4>W재단 Business Adviser (Group Strategy & Corporate Affairs Manager at WWRC Holding Pte. Ltd. “WWRC Group”)</h4>
<br><br><br>
<p>16개 아시아 국가에서 주요 화학제품 유통사로 자리 매김해 온 WWRC 그룹에서 해외 진출, JV/파트너십, 인수합병을 통한 미래전략 기획 업무 담당. WWRC 그룹 근무 이전에 시티은행, OCBC은행에서 근무함. 난양기술대학교 재료공학과를 학사 학위를 취득함 (우등 졸업).</p>
</div>

<div id="chris" class="white-popup mfp-hide sans">
<h3>CHRIS LOW</h3>
<h4>W재단 Technology Adviser ((Managing Partner and Executive Chairman at Novum Capital)</h4>
<br><br><br>
<p>성공적인 창업가로서 동남 아시아에서 대형 소셜 게임 사이트인 Viwawa를 개발함. 베트남 최대의 모바일 POS 회사인 소프트페이 모바일을 공동 설립함. 국립싱가포르대학교 컴퓨터공학과에서 학사 학위를 취득함.</p>
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
                                       var    range      = NY-Math.round((new Date()).getTime()/1000),
                                       secday = 86400, sechour = 3600,
                                       days     = parseInt(range/secday),
                                       hours    = parseInt((range%secday)/sechour),
                                       min        = parseInt(((range%secday)%sechour)/60),
                                       sec        = ((range%secday)%sechour)%60;
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
                                                                                   $(notifyMessages).text("W Green Pay에 등록해주셔서 감사합니다. 앞으로 이벤트, 프로모션 등 다양한 소식을 가장 빨리 받아보실 수 있습니다. 이메일 알람을 기다려주세요!");
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
                                                                                    
                                                                                    $(contactMessages).text("W Green Pay에 등록해주셔서 감사합니다. 앞으로 이벤트, 프로모션 등 다양한 소식을 가장 빨리 받아보실 수 있습니다. 이메일 알람을 기다려주세요!");
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
