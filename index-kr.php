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
<li><a href="#token">토큰세일</a></li>
<li><a href="#media">미디어</a></li>
<li><a href="#roadmap">로드맵p</a></li>
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
<a href="#token" onClick="closeSidebar(this)">토큰세일</a>
<a href="#media" onClick="closeSidebar(this)">미디어</a>
<a href="#roadmap" onClick="closeSidebar(this)">로드맵</a>
<a href="#team" onClick="closeSidebar(this)">팀</a>
<a href="#contact" onClick="closeSidebar(this)">연락처</a>
<div class="lng-mobile">
<a href="#">한국어</a>
</div>
</nav>
</div>
</div>
<!------------ Navigation end ------------>

<!------------ Home banner start ------------>
<div id="home">
<div class="home-container">
<h1><span style="color:#87b44c;">W 그린 페이</span> 후시 캠페인 참여하세요!</h1>
<h4>가장 혁신적인 소셜 탄소 신용 플랫폼이 출시됩니다.</h4>
<h4>지금 참여하여 본인의 계정을 등록하고 20% 공개 세일 보너스를 받으세요! </h4>
<br><br>
<h4 style="font-weight:700;"><span style="color:#87b44c;">공개 세일이 </span> 아래 시간이 지나면 시작됩니다:</h4>
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
<div class="publicsale">60.000.000 WPAY</div>
</div>-->
<br>
<br>
<br>
<ul class="home-btn">
<li><a href="#participateform" class="open-popup-link btn">참여하기</a></li>
<li><a href="WGreenPay-whitepaper-v2.0.pdf" target="_blank" class="btn">백서</a></li>
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
<h1>W <span style="color:#87b44c;">그린 페이 </span></h1>
<br>
<h4>W 그린 페이 ("WGP")는 ERC20를 준수하는 토큰으로 이더리움 블록체인에서 구동됩니다. W 그린 페이는 온실가스 배출 감소에 대중의 참여를 증진하고자 합니다. W 그린 페이는 온실가스 배출 감소 노력에 있어서 대중에게 인센티브를 제공하고자 합니다. </h4>
<br>
<h4>후시 앱은 유저가 온실가스 배출 감소를 위한 미션을 완료하면 보상을 지급하는 플랫폼입니다.</h4>
<br>
<br>
<h2 style="text-transform:none; color:#87b44c;">사명</h2>
<br>
<p>2009년 코펜하겐 합의에서 발표한 정부의 약속에 따라 한국은 2030년까지 온실가스 배출량을 37% 감소하고자 합니다.</p>
<br>
<p>한국 정부는 W 재단을 선정하여 전국적으로 온실가스 배출량을 줄이는 대중 운동 (후시 캠페인)을 이끌도록 했습니다.</p>
<br>
<p>한국 정부의 온실가스 배출 감소 노력을 지원하기 위해서 W 재단은 후시 앱이라는 모바일 앱을 출시하여 온실가스를 줄이려는 개인과 대중의 노력을 모니터링하고 이에 대해 보상을 제공할 것입니다.</p>
</div>
</div>
<br>
<h2>솔루션</h2>
<br>
<p>가장 혁신적인 소셜 탄소 신용 플랫폼이 출시됩니다.</p>
<br>
<p>한국 정부가 지원하는 온실가스 감축 캠페인(후시)에서 기초한 블록체인인 W 그린 페이 (WGP)는 한국의 온실가스 배출권 거래제(KET) 시장 하에서 온실가스 감축을 위해 대중이 노력을 기울인 것에 대해 보상을 지급하고자 발행됩니다.</p>
<br>
<h4 style="font-weight:700;">WGP는 후시 앱 상에서 온실가스 감축 노력을 한 것에 대한 보상입니다.  앱을 통해 유저들은 다음을 실행할 수 있습니다:</h4>
<br>
<br>
<div class="row">
<div class="col-md-4 v-pad">
<div class="features-icon">
<img src="img/feature-icon-1.png" alt="">
<br><br>
<h4>미션 완료로 얻은 포인트를 W 그린 페이로 교환하세요</h4>
</div>
</div>
<div class="col-md-4 v-pad">
<div class="features-icon">
<img src="img/feature-icon-2.png" alt="">
<br>
<h4>W 재단 파트너인 인터넷 쇼핑 몰에서 W 그린 페이로 쇼핑하기</h4>
</div>
</div>
<div class="col-md-4 v-pad">
<div class="features-icon">
<img src="img/feature-icon-3.png" alt="">
<br>
<h4>W 그린 페이로 신용 카드 대금 갚기</h4>
</div>
</div>
</div>
<br>
<br>
<h2>W 재단</h2>
<br>
<p>W 재단은 2012년에 설립된 국제 비영리 기관이자 한국 전략재정부가 지정한 기부 기관으로 후시 캠페인을 뒷받침하는 자선 단체입니다. 후시 모바일 앱을 활용하여 개인이 온실가스 감축 미션을 수행하여 WGP로 교환이 가능한 미션 포인트를 얻을 수 있습니다.</p>
<br>
<h2><span style="color:#fff;">HOOXI</span> 앱</h2>
<br>
<p>후시 앱은 개인의 온실가스 감축 데이터를 추적, 수집합니다. 이를 기초로 W 재단은 한국 시장에서 거래되는 탄소 배출 유닛인 국가 탄소 배출 허용권(NEP)을 할당받습니다. 후시 캠페인을 통해 NEP 기반 탄소 배출권 거래에 대한 금전적 인센티브가 비단 회사나 기관만을 위한 것이 아니라, 개인을 위한 것이 됩니다.</p>
<br>
<h2>W 거래소</h2>
<br>
<p>한전의 승인 하에서 W 거래소는 2019년 3월에 출시됩니다. W 거래소는 한국 탄소 배출권 거래제의 대상이 되는 사업체가 될 것이라 기대합니다. 후시 앱 상에 할당된 NEP를 W 거래소를 통해 한국 거래소에서 거래할 수 있을 것이라 기대합니다.</p>
</div>
</section>
<section class="sponsors">
<div class="container">
<div class="row">
<div class="col-md-4 v-pad">
<h1>후시 캠페인 <span style="color:#87b44c;">스폰서</span></h1>
<br>
<p>농협 금융 그룹, 농협 생명 보험회사, 농협 투자 증권회사, 국민 은행, YG 연예, 블랙야크, 호텔 롯데 DFS, 롯데 홈쇼핑, 필립모리스 코리아, 한국 경영관리 협회, 우마트 스토어(중국), 한솔 화학, 한솔 오크 밸리, 보림 CS, Fn가이드, 성도 엔지니어링 & 건설, 한국 비즈니스 뉴스, YJM 게임, 클린토피아, 넷 TV</p>
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
<h1>명예<span style="color:#87b44c;"> 홍보 대사</span></h1>
<br>
<h4>K-pop 스타를 비롯한 한국 유명인사 300명 이상이 W 재단의 명예 홍보 대사로 후시 캠페인를 지원하고 있습니다.</h4>
<br>
<p>인피니티, 리디아 고, 에일리, 장혁, 김태우, IOI, 에디 김, 심형택, 맥시 창민, 죄시원, 동해, 김유정, 알베르토가 주요 홍보 대사 중의 일원입니다. 명예 홍보 대사로 W 재단과 함께 하고 있는 한국 유명인사가 더 많습니다.</p>
</div>
</div>
</div>
</section>
<section style="background:#001a3d;" class="emission">
<div class="container">
<div class="row">
<div class="col-md-6 v-pad">
<h2>KETS <span style="color:#87b44c;">(한국 탄소 배출권 거래제)</span></h2>
<br>
<p>2009년에 한국은 코펜하겐 합의에서 온실가스 감축을 위한 글로벌 운동에 참여하겠다고 선언했습니다. 2030년까지 한국 정부는 자체 시나리오에 따라 온실가스를 37%만큼 감축하고자 합니다. 2015년에 한국은 유럽 연합 탄소배출권 거래제 다음 규모인 탄소 배출권 거래제를 도입하였습니다. </p>
<br>
<p>한국의 캡-거래 시스템은 시장 메커니즘을 통해 온실가스 배출량을 줄이며, 한국의 온실가스 배출량의 68% 이상을 차지하는 약 600개 기업에 적용됩니다(2018년 한국 탄소). 회사의 탄소 최대 배출량을 결정하는 캡은 정부가 결정하고, 회사가 캡을 초과하는 경우 추가로 시장에서 시장 가격으로 국가 탄소 배출 혀용권을 구매해야 하고, 구매하지 않는 경우에는 정부에 벌금을 지불해야 합니다.</p>
<br>
<p>한국 탄소배출 거래제를 준수하지 않을 때 부과되는 벌금은 탄소 유닛 당 평균 시장 가격의 3배입니다. 벌금 최대치는 단소 유닛 당 10만원입니다.</p>
<br>
<p>출처: <a href="https://ieta.wildapricot.org/resources/Resources/Case_Studies_Worlds_Carbon_Markets/re publicofkorea_case%20study_june_2015.pdf" target="_blank" style="color:#87b44c;">2015년 국제 탄소 배출권 거래 협회 (IETA)</a></p>
<br>
<br>
<img src="img/emission.png" alt="">
</div>
<div class="col-md-6 v-pad">
<h2>NEP <span style="color:#87b44c;">(국가 탄소 배출 허용권)</span></h2>
<br>
<h4 style="font-weight:700;">NEP 타당성</h4>
<br>
<p>환경부는 한국 정부의 NEP를 검증하고, NEP는 시장 가격으로 거래됩니다. 시장 내 NEP 수요가 증가하고 있지만, 환경부가 할당하는 NEP 수량은 제한됩니다. 톤 당 NEP 가격은 2018년 4월 14일 기준 약 2만 2천원입니다. 이는 2018년 4월 16일 기준 유럽 연합 (약 만 7천 7백원)보다 높은 수치입니다. </p>
<br><br>
<img src="img/graph-nep.png" alt="">
<br>
<br>
<br>
<br>
<h4 style="font-weight:700;">NEP 시장 크기</h4>
<br>
<p>한국에서 약 600개 기업이 탄소 배출권 거래에 참여하고 있습니다. NEP 시장 크기는 2015년 573억원에서 급격히 증가하여 2016년에 한국 탄소배출권 거래제가 시작한 시기인 2016년에 1946억원, 이후 2017년에 4385억원(2017년 1월부터 10월 기준)이 되었습니다(2017년 한국 전략재정부). 한국 정부는 NEP 시장이 앞으로도 계속 성장할 것이라 기대합니다.</p>

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
<h2>WGP 생태계</h2>
<br>
<p>개인은 후시 앱에서 계정을 쉽게 개설할 수 있습니다. 앱 유저로서 개인은 대중 교통 이용하기, 전기 사용 줄이기, 친환경 제품 구매하기 등 다양한 미션을 선택할 수 있습니다. </p>
<br>
<br>
<br>
<img src="img/feature.jpg" alt="">
<br>
<br>
<br>
<h4 style="font-weight:700;">WGP를 신용 카드 사용에 대한 캐시백으로 수집할 수 있는 사례</h4>
<br>
<div style="max-width:555px; display:inline-block;"><img src="img/card.jpg" alt=""></div>
<br>
<div class="row">
<div class="col-md-4 col-sm-4 v-pad">
<div style="max-width:36px; display:inline-block;"><img src="img/check.png" alt=""></div>
<br><br>
<h4>W 그린 페이 파트너 회사에서 쇼핑하세요</h4>
</div>
<div class="col-md-4 col-sm-4 v-pad">
<div style="max-width:36px; display:inline-block;"><img src="img/check.png" alt=""></div>
<br><br>
<h4>친환경 제품 구매하기</h4>
</div>
<div class="col-md-4 col-sm-4 v-pad">
<div style="max-width:36px; display:inline-block;"><img src="img/check.png" alt=""></div>
<br><br>
<h4>대중 교통 이용하기</h4>
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
<p>W 그린 페이 발행 총량은 1억 개로 유지될 것입니다.</p>
<br>
<p>1억 W 그린 페이 중에서 2천만 W 그린 페이 (20%)는 판매되지 않고 W 그린 페이 발행자에게 지급되고, 2천만 W 그린 페이 (20%)는 후시 캠페인 참여자에게 보상금을 지급하기 위해 후시 앱에 할당됩니다. 나머지 6천만 W 그린 페이 (60%)는 비공개, 공개 세일을 통해 판매됩니다.</p>
</div>
<div class="col-md-8 token-table">
<table>
<tr valign="top">
<td class="left-table" style="padding-top:40px;">토큰 명</td>
<td style="padding-top:40px;">W 그린 페이 </td>
</tr>
<tr valign="top">
<td class="left-table">토큰 상징</td>
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
<td class="left-table">비공개 세일 일자</td>
<td>2018년 5월 14일-25일</td>
</tr>
<tr valign="top">
<td class="left-table">공개 세일 일자</td>
<td>2018년 5월 26일-31일</td>
</tr>
<tr valign="top">
<td class="left-table">공개 세일 보너스/td>
<td>초반에 판매된 토큰 천만 개 - 20%, 나머지 토큰 - 10 %</td>
</tr>
<tr valign="top">
<td class="left-table">소프트 캡</td>
<td>2,500만 달러</td>
</tr>
<tr valign="top">
<td class="left-table">하드 캡</td>
<td>1,000만 달러</td>
</tr>
<tr valign="top">
<td class="left-table" style="padding-bottom:40px;">매각 제한 기간</td>
<td style="padding-bottom:40px;">팀과 비공개 세일 투자자가 보유한 W 그린 페이는 공개 세일 종료 일자인 2018년 7월 31일부터 6개월 동안 매각 제한 기간의 적용을 받습니다.</td>
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
<li><h4>GHG (후시 캠페인 선언)</h4></li>
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
<li><h4>GHG (후시 캠페인 위원회 출범)</h4></li>
<li><h4>싱가포르에서 W 그린 페이 인증서</h4></li>
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
<li><h4>W 그린 페이 비공개 세일</h4></li>
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
<li><h4>W 그린 페이 공개 세일</h4></li>
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
<li><h4>후시 앱 출시</h4></li>
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
<li><h4>후시 앱 출시 축제</h4></li>
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
<h3 class="timeline-title">2019년 3월9</h3>
<br>
<ul class="roadmap">
<li><h4>W 그린 페이 거래소 출범</h4></li>
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
<h1>팀</h1>
<div class="h-line"></div>
<div class="row">
<div class="col-md-4 col-sm-4 v-pad">
<a href="#wooklee" class="open-popup-link"><div class="team-img"><img src="img/team-wook-lee.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>이욱 (Wook Lee)</h3>
<h4>의장</h4>
</div>
</div>
<div class="col-md-4 col-sm-4 v-pad">
<a href="#youreelee" class="open-popup-link"><div class="team-img"><img src="img/team-youree-lee.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>이유리 박사 (Youree Lee PH.D.)</h3>
<h4>CEO</h4>
</div>
</div>
<div class="col-md-4 col-sm-4 v-pad">
<a href="#keon" class="open-popup-link"><div class="team-img"><img src="img/team-keon.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>심근호(KEON HO SHIM)</h3>
<h4>금융 고문</h4>
</div>
</div>
<div class="col-md-4 col-sm-4 v-pad">
<a href="#dongyul" class="open-popup-link"><div class="team-img"><img src="img/team-dongyul-seok.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>석동율(Dongyul Seok)</h3>
<h4>홍보 고문</h4>
<p>(동아 일보 부국장)</p>
</div>
</div>
<div class="col-md-4 col-sm-4 v-pad">
<a href="#seonggu" class="open-popup-link"><div class="team-img"><img src="img/team-seonggu-ryu.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>류성구 박사(Seonggu Ryu Ph.D.)</h3>
<h4>고문 / 최고 관계  책임자</h4>
<p>(서경대학교 교수)</p>
</div>
</div>
<div class="col-md-4 col-sm-4 v-pad">
<a href="#chuljun" class="open-popup-link"><div class="team-img"><img src="img/team-chuljun-kim.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>김철준(Chuljun Kim M.D.)</h3>
<h4>고문 / 최고 기술 책임자</h4>
<p>(의장 / 대전 건강 병원)</p>
</div>
</div>
<div class="col-md-4 col-sm-4 v-pad">
<a href="#ryan" class="open-popup-link"><div class="team-img"><img src="img/team-ryan-kim.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>Ryan Kim</h3>
<h4>비즈니스 고문</h4>
<p>(Jimei 코리아, CEO)</p>
</div>
</div>
<div class="col-md-4 col-sm-4 v-pad">
<a href="#chen" class="open-popup-link"><div class="team-img"><img src="img/team-chen-shun-teng.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>Chen Shun Teng</h3>
<h4>비즈니스 고문</h4>
<p>(WWRC Holding Pte. Ltd. “WWRC 그룹"의 전략 & 대외 협력 매니저)</p>
</div>
</div>
<div class="col-md-4 col-sm-4 v-pad">
<a href="#chris" class="open-popup-link"><div class="team-img"><img src="img/team-chris.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>Chris Low</h3>
<h4>기술 고문</h4>
<p>(Novum 캐피탈의 관리 파트너, 최고 의장)</p>
</div>
</div>
</div>
<div style="height:1px; width:100%; opacity:0.2; background:#fff; margin:60px 0;"></div>
<div style="text-align:center;">
<h2>고문</h2>
<br>
<h4>W-재단 웹 사이트 명예 고문 페이지 링크</h4>
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
<h3 style="text-transform:none;">다음 이메일로 연락주시기 바랍니다:</h3>
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
<span class="small-font" style="color:#333;"> @ 2018년 W 글로벌 투자 주식회사 <br>저작권 보유.</span>
<br><br>
<div style="color:#87b44c; font-weight:400;"><a href="#terms_service" class="open-popup-link">Terms of Service</a> &nbsp;&nbsp;I&nbsp;&nbsp; <a href="#policy" class="open-popup-link">Privacy Policy</a></div>
</div>

<!---------- Participate form ------------>

<div id="participateform" class="white-popup mfp-hide sans">
<h4><b>W 그린 페이 </b>에 참여하세요</h4>
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
<h4>W-재단의 의장</h4>
<br><br><br>
<p>W-재단의 설립자이자 의장, 자선가, 기업가. 정부, 기업, 기관과의 공공-개인 파트너십을 가능케 하는 글로벌 네트워크를 구축함. 글로벌 기부자와 함께글로벌 기후 난민 기금을 마련하고, W-재단을 영향력 있는 글로벌 자연 보전 기구로 발전시킴. 한양대학교 법과 대학에서 학사 학위를 취득함.</p>
</div>

<div id="youreelee" class="white-popup mfp-hide sans">
<h3>이유리 박사(YOUREE LEE PH.D.)</h3>
<h4>W-재단의 CEO</h4>
<br><br><br>
<p>W-재단, W-HY 기술개발, 후시 연구소의 공동 설립자이자 CEO, 후시 재단(미국)의 COO. 신한 맥커리 금융 자문회사, 수미모토 미쑤이 은행회사에서 투자, 기업 은행 분야에서 풍부한 경험을 쌓음. 이화여자 대학교 국제 경영학과에서 학사, 석사, 박사 학위를 취득함. 현재 이화여자 대학교와 한양 대학교에서 강사로 활동.</p>
</div>

<div id="keon" class="white-popup mfp-hide sans">
<h3>심근호(KEON HO SHIM)</h3>
<h4>W-재단의 금융 고문</h4>
<br><br><br>
<p>뱅크오브 아메리카 메릴 린치, 시티, 올리버 와이만, 삼성의 은행, 컨설팅, 신 사업 개발 분야에서 23년 이상의 경험을 보유. 뉴욕 대학교 Stern 경영 대학에서 MBA, 조지 워싱턴 대학교 정경 대학에서 학사 학위를 취득함.</p>
</div>

<div id="dongyul" class="white-popup mfp-hide sans">
<h3>석동율(DONGYUL SEOK)</h3>
<h4>W-재단의 홍보 고문 (동아 일보 부국장)</h4>
<br><br><br>
<p>영향력 있는 언론인, 국제 언론인 협회 부회장, 한국 언론 사진 협회 회장으로서 25년의 경험 보유. 한양 대학교 미디어, 커뮤니케이션 학과의 겸임 교수로도 활동.</p>
</div>

<div id="seonggu" class="white-popup mfp-hide sans">
<h3>류성구 박사(SEONGGU RYU PH.D.)</h3>
<h4>W-재단의 고문 / 최고 관계 책임자 (서경 대학교 교수)</h4>
<br><br><br>
<p>삼성 그룹의 전략 계획, 그룹 경영관리 컨설팅, 마케팅 분야에서 25년 경험 보유. 최근에는 삼성 전자 마케팅 전략 그룹 부회장으로 근무. 서경 대학교 경영 대학 교수로 근무.</p>
</div>

<div id="chuljun" class="white-popup mfp-hide sans">
<h3>김철준 (CHULJUN KIM M.D.)</h3>
<h4>W-재단의 고문 / 최고 기술 책임자 (의장 / 대전 건강 병원 의사)</h4>
<br><br><br>
<p>의사, 기업가, 투자자로서 20년 경험 보유. 대형 병원 CEO로서 의료 분야에서 세간의 이목을 끄는 인수합병과 투자를 실시함. 현재는 의료 분야를 위한 블록 체인 기술을 개발하여 의료 기록을 안전하게 보호하는 일에 관심이 있음. 충남 대학교 재활 의학과 조교수로 근무.</p>
</div>

<div id="ryan" class="white-popup mfp-hide sans">
<h3>RYAN KWON</h3>
<h4>W-재단의 비즈니스 고문 (Jimei 코리아의 CEO)</h4>
<br><br><br>
<p>Jimei 그룹에서 한중 투자 기회에 초점을 둔 글로벌 부동산 개발 및 금융 자문을 담담하여 한중 양자 간 관계 발전에 기여함. Ozoo 재단의 회장으로서 면학 장학금을 제공함.</p>
</div>

<div id="chen" class="white-popup mfp-hide sans">
<h3>CHEN SHUN TENG</h3>
<h4>W-재단의 비즈니스 고문 (WWRC Holding Pte. Ltd. “WWRC 그룹"의 전략 & 대외 협력 매니저)</h4>
<br><br><br>
<p>16개 아시아 도시에서 화학 제품 유통자로 자리 매김해 온 WWRC 그룹에서 해외 진출, JV/파트너십, 인수합병을 통한 미래 성장 예측 업무 담당. WWRC 그룹 근무 이전에 시티, OCBC에서 은행 업무에 종사함. 난양 기술 대학교 재료 공학과를 학사 학위를 취득함 (우등 졸업).</p>
</div>

<div id="chris" class="white-popup mfp-hide sans">
<h3>CHRIS LOW</h3>
<h4>W-재단의 기술 고문 (Novum 캐피탈의 관리 파트너, 최고 의장)</h4>
<br><br><br>
<p>성공적인 연쇄 창업가로서 동남 아시아에서 대형 소셜 게이밍 사이트인 Viwawa를 개발함. 베트남 최대의 모바일 POS 회사인 소프트페이 모바일을 공동 설립함. 국립 싱가포르 대학교 컴퓨터 공학과에서 학사 학위를 취득함.</p>
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
                                                                                   $(notifyMessages).text("W 그린 페이 토큰 세일에 등록해 주셔서 감사합니다. 앞으로 흥미진진한 특혜가 먾이 주어질 것이니 이메일 알림을 기다려 주시기 바랍니다.");
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
                                                                                    
                                                                                    $(contactMessages).text("W 그린 페이 토큰 세일에 등록해 주셔서 감사합니다. 앞으로 흥미진진한 특혜가 먾이 주어질 것이니 이메일 알림을 기다려 주시기 바랍니다.");
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
