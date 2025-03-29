<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

run_event('pre_head');

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<div id="skip-nav">
    <a href="#gnb">메뉴 바로가기</a>
    <a href="#container">본문 바로가기</a>
</div>

<div id="wrap">
<!-- 상단 시작 { -->
<header id="header" class="">
    <div class="inner">
        <h1 id="logo">
        <a href="#">
            <span>logo</span>
        </a>
        </h1>
        <nav id="gnb" class="gnb">
        <ul class="gnb__depth1">
            <li>
            <a href="#">
                <span>menu1</span>
            </a>
            <ul class="gnb__depth2">
                <li><a href="#">menu1-1</a></li>
                <li><a href="#">menu1-2</a></li>
                <li><a href="#">menu1-3</a></li>
                <li><a href="#">menu1-4</a></li>
            </ul>
            </li>
            <li>
            <a href="#"><span>menu2</span></a>
            <ul class="gnb__depth2">
                <li><a href="#">menu2-1</a></li>
                <li><a href="#">menu2-2</a></li>
                <li><a href="#">menu2-3</a></li>
                <li><a href="#">menu2-4</a></li>
            </ul>
            </li>
            <li>
            <a href="#"><span>menu3</span></a>
            <ul class="gnb__depth2">
                <li><a href="#">menu3-1</a></li>
                <li><a href="#">menu3-2</a></li>
                <li><a href="#">menu3-3</a></li>
                <li><a href="#">menu3-4</a></li>
            </ul>
            </li>
            <li>
            <a href="#"><span>menu4</span></a>
            <ul class="gnb__depth2">
                <li><a href="#">menu4-1</a></li>
                <li><a href="#">menu4-2</a></li>
                <li><a href="#">menu4-3</a></li>
                <li><a href="#">menu4-4</a></li>
            </ul>
            </li>
        </ul>
        </nav>
        <div class="util">
        <!-- active 추가시 활성화 -->
        <div class="lang">
            <button class="lang__btn">kor</button>
            <ul class="lang__lst">
            <li>kor</li>
            <li>eng</li>
            </ul>
        </div>
        <button class="search">
            <span class="blind">검색</span>
        </button>
        <button class="all-menu">
            <span class="blind">전체메뉴</span>
        </button>
        </div>
    </div>
    <!-- active 추가시 활성화 -->
    <nav id="nav-all" class="">
        <ul class="gnb__depth1">
        <li>
            <a href="#">
            <span>menu1</span>
            </a>
            <ul class="gnb__depth2">
            <li><a href="#">menu1-1</a></li>
            <li><a href="#">menu1-2</a></li>
            <li><a href="#">menu1-3</a></li>
            <li><a href="#">menu1-4</a></li>
            </ul>
        </li>
        <li>
            <a href="#"><span>menu2</span></a>
            <ul class="gnb__depth2">
            <li><a href="#">menu2-1</a></li>
            <li><a href="#">menu2-2</a></li>
            <li><a href="#">menu2-3</a></li>
            <li><a href="#">menu2-4</a></li>
            </ul>
        </li>
        <li>
            <a href="#"><span>menu3</span></a>
            <ul class="gnb__depth2">
            <li><a href="#">menu3-1</a></li>
            <li><a href="#">menu3-2</a></li>
            <li><a href="#">menu3-3</a></li>
            <li><a href="#">menu3-4</a></li>
            </ul>
        </li>
        <li>
            <a href="#"><span>menu4</span></a>
            <ul class="gnb__depth2">
            <li><a href="#">menu4-1</a></li>
            <li><a href="#">menu4-2</a></li>
            <li><a href="#">menu4-3</a></li>
            <li><a href="#">menu4-4</a></li>
            </ul>
        </li>
        </ul>

        <button class="close">
        <span class="">전체메뉴 닫기</span>
        </button>
    </nav>
    </header>
<!-- } 상단 끝 -->


<hr>

<!-- 콘텐츠 시작 { -->
<!-- div 3개 삭제 -->
<?php if (!defined("_INDEX_")) { ?><h2 id="container_title"><span title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span></h2><?php }
