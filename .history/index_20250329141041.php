<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>

<!-- 본인 코드 삽입 -->
<div class="intro">
        <!-- Slider main container -->
        <div class="swiper slide-intro">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <a href="#">
                <video src="../resources/images/pattern/common/intro.mp4" autoplay loop></video>
                <div class="text-area">
                  <div class="inner">
                    <strong class="text-area__tit">슬라이드 제목</strong>
                    <p class="text-area__cont">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <span class="text-area__goto text-area__goto--hidden">바로가기</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#">
                <picture>
                  <source srcset="https://images.unsplash.com/photo-1515002246390-7bf7e8f87b54?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" media="(min-width: 1024px)" />
                  <source srcset="https://images.unsplash.com/photo-1511275539165-cc46b1ee89bf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" media="(min-width: 600px)" />
                  <source srcset="https://images.unsplash.com/photo-1516139008210-96e45dccd83b?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                  <img src="https://images.unsplash.com/photo-1516139008210-96e45dccd83b?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Flowers" />
                </picture>
                <div class="text-area">
                  <div class="inner">
                    <strong class="text-area__tit">슬라이드 제목</strong>
                    <p class="text-area__cont">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <span class="text-area__goto text-area__goto--hidden">바로가기</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#">
                <picture>
                  <source srcset="https://images.unsplash.com/photo-1515002246390-7bf7e8f87b54?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" media="(min-width: 1024px)" />
                  <source srcset="https://images.unsplash.com/photo-1511275539165-cc46b1ee89bf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" media="(min-width: 600px)" />
                  <source srcset="https://images.unsplash.com/photo-1516139008210-96e45dccd83b?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                  <img src="https://images.unsplash.com/photo-1516139008210-96e45dccd83b?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Flowers" />
                </picture>
                <div class="text-area">
                  <div class="inner">
                    <strong class="text-area__tit">슬라이드 제목</strong>
                    <p class="text-area__cont">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <span class="text-area__goto text-area__goto--hidden">바로가기</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#">
                <picture>
                  <source srcset="https://images.unsplash.com/photo-1515002246390-7bf7e8f87b54?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" media="(min-width: 1024px)" />
                  <source srcset="https://images.unsplash.com/photo-1511275539165-cc46b1ee89bf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" media="(min-width: 600px)" />
                  <source srcset="https://images.unsplash.com/photo-1516139008210-96e45dccd83b?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                  <img src="https://images.unsplash.com/photo-1516139008210-96e45dccd83b?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Flowers" />
                </picture>
                <div class="text-area">
                  <div class="inner">
                    <strong class="text-area__tit">슬라이드 제목</strong>
                    <p class="text-area__cont">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <span class="text-area__goto text-area__goto--hidden">바로가기</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#">
                <picture>
                  <source srcset="https://images.unsplash.com/photo-1515002246390-7bf7e8f87b54?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" media="(min-width: 1024px)" />
                  <source srcset="https://images.unsplash.com/photo-1511275539165-cc46b1ee89bf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" media="(min-width: 600px)" />
                  <source srcset="https://images.unsplash.com/photo-1516139008210-96e45dccd83b?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                  <img src="https://images.unsplash.com/photo-1516139008210-96e45dccd83b?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Flowers" />
                </picture>
                <div class="text-area">
                  <div class="inner">
                    <strong class="text-area__tit">슬라이드 제목</strong>
                    <p class="text-area__cont">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <span class="text-area__goto text-area__goto--hidden">바로가기</span>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!-- If we need pagination -->
          <div class="swiper-pagination"></div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>

<main id="container">
  <!-- 스튜디오 섹션 -->
  <section class="sec-g sec-studio">
    <div class="inner">
      <h2 class="sec-g__tit">섹션 타이틀</h2>
      <p class="sec-g__desc">섹션 설명</p>
      <div class="sec-g__cont">
        <div class="swiper slide-studio">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a href="#">
                <img src="https://www.wooriam.kr/upload/public/board/LnMCTNmG6JaCGQHJ/tb5eAihFnIe9tAmJ.jpg" alt="" />
                <strong>미국 공모주 정말 쉽게 받는 방법</strong>
                <em>2024.10.16</em>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#">
                <img src="https://www.wooriam.kr/upload/public/board/LnMCTNmG6JaCGQHJ/tb5eAihFnIe9tAmJ.jpg" alt="" />
                <strong>미국 공모주 정말 쉽게 받는 방법</strong>
                <em>2024.10.16</em>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#">
                <img src="https://www.wooriam.kr/upload/public/board/LnMCTNmG6JaCGQHJ/tb5eAihFnIe9tAmJ.jpg" alt="" />
                <strong>미국 공모주 정말 쉽게 받는 방법</strong>
                <em>2024.10.16</em>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#">
                <img src="https://www.wooriam.kr/upload/public/board/LnMCTNmG6JaCGQHJ/tb5eAihFnIe9tAmJ.jpg" alt="" />
                <strong>미국 공모주 정말 쉽게 받는 방법</strong>
                <em>2024.10.16</em>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#">
                <img src="https://www.wooriam.kr/upload/public/board/LnMCTNmG6JaCGQHJ/tb5eAihFnIe9tAmJ.jpg" alt="" />
                <strong>미국 공모주 정말 쉽게 받는 방법</strong>
                <em>2024.10.16</em>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#">
                <img src="https://www.wooriam.kr/upload/public/board/LnMCTNmG6JaCGQHJ/tb5eAihFnIe9tAmJ.jpg" alt="" />
                <strong>미국 공모주 정말 쉽게 받는 방법</strong>
                <em>2024.10.16</em>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#">
                <img src="https://www.wooriam.kr/upload/public/board/LnMCTNmG6JaCGQHJ/tb5eAihFnIe9tAmJ.jpg" alt="" />
                <strong>미국 공모주 정말 쉽게 받는 방법</strong>
                <em>2024.10.16</em>
              </a>
            </div>
          </div>
        </div>
      </div>
      <a href="#" class="sec-g__more">더보기</a>
    </div>
  </section>

  <!-- ㄴㅠㅅㅡㅅㅔㄱㅅㅕㄴ -->
  <section class="sec-g sec-news bg-gray">
    <div class="inner">
      <h2 class="sec-g__tit">섹션 타이틀</h2>
      <p class="sec-g__desc">섹션 설명</p>
      <div class="sec-g__cont">컨텐츠</div>
      <a href="#" class="sec-g__more">더보기</a>
    </div>
  </section>

  <!-- ㄴㅠㅅㅡㅅㅔㄱㅅㅕㄴ -->
  <section class="sec-g sec-about">
    <div class="inner">
      <h2 class="sec-g__tit">섹션 타이틀</h2>
      <p class="sec-g__desc">섹션 설명</p>
      <div class="sec-g__cont">컨텐츠</div>
      <a href="#" class="sec-g__more">더보기</a>
    </div>
  </section>

  <!-- ㄴㅠㅅㅡㅅㅔㄱㅅㅕㄴ -->
  <section class="sec-g sec-business bg-gray">
    <div class="inner">
      <h2 class="sec-g__tit">섹션 타이틀</h2>
      <p class="sec-g__desc">섹션 설명</p>
      <div class="sec-g__cont">컨텐츠</div>
      <a href="#" class="sec-g__more">더보기</a>
    </div>
  </section>
</main>
<!-- //본인 코드 삽입 -->

<?php
include_once(G5_PATH.'/tail.php');
