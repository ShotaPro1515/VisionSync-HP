<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spring & Sky</title>
  <link href="./dist/output.css" rel="stylesheet">
  <link href="./assets/css/swiper-bundle.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-t from-pink-100 to-yellow-200">

  <!-- Header -->
  <header class="bg-white shadow-md fixed top-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <div class="flex-shrink-0">
          <h1 class="text-2xl font-bold text-gray-800">VisionSync</h1>
        </div>
        <nav class="hidden md:block">
          <ul class="flex space-x-8">
            <li><a href="#" class="text-gray-600 hover:text-gray-900">ホーム</a></li>
            <li class="relative group">
              <a href="#" class="text-gray-600 hover:text-gray-900">サービス</a>
              <ul class="absolute left-0 hidden group-hover:block w-48 py-2 bg-white shadow-lg rounded-md">
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">IT技術</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">ライフコーチング</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">コミュニティ</a>
                </li>
              </ul> 
            </li>
            <li class="relative group">
              <a href="#" class="text-gray-600 hover:text-gray-900">ブログ</a>
              <ul class="absolute left-0 hidden group-hover:block w-48 py-2 bg-white shadow-lg rounded-md">
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">IT技術</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">ライフコーチング</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">コミュニティ</a>
                </li>
              </ul>
            </li>
            <li><a href="./pages/contact.php" class="text-gray-600 hover:text-gray-900">お問い合わせ</a></li>
          </ul>
        </nav>
        <div class="md:hidden">
          <button class="text-gray-600 hover:text-gray-900">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="relative text-center py-16 px-4 mt-16 overflow-hidden h-[500px]">
    <video 
      class="absolute top-0 left-0 w-full h-full object-cover opacity-60" 
      autoplay 
      muted 
      loop 
      playsinline
    >
      <source src="./assets/videos/VisionSync_main.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="relative z-10">
      <h1 class="text-4xl text-white font-bold mb-4">VisionSync</h1>
      <p class="text-lg text-white mb-8">ビジョンシンクはあなたの夢やビジョン達成の強力なパートナーとなります。</p>
    </div>
  </section>

  <!-- About Section -->
  <section class="bg-gradient-to-b from-green-100 to-teal-100 py-16 px-4">
    <div class="max-w-5xl mx-auto text-center">
      <h2 class="text-3xl font-semibold text-gray-800 mb-4">ワクワクする人生を</h2>
      <p class="text-lg text-gray-600">多くの夢やビジョンを持ち、それらを実現するために、あなたの夢やビジョン達成の強力なパートナーとなります。</p>
    </div>
  </section>

  <!-- Services Section -->
  <section class="relative py-16 bg-gradient-to-b from-blue-100 to-purple-100">
    <div class="max-w-7xl mx-auto text-center mb-8 px-4">
      <h2 class="text-3xl font-semibold text-gray-800">サービス一覧</h2>
    </div>
    <div class="max-w-7xl mx-auto relative">
      <!-- 左矢印 -->
      <div class="swiper-button-prev absolute left-4 z-10 text-gray-800 lg:left-8"></div>
      
      <div class="swiper servicesSwiper px-4">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="text-center p-6 bg-white shadow-lg rounded-xl hover:shadow-xl transition duration-300">
              <a href="./pages/services/it_education.php" class="block">
                <img src="./img/IT_education1.jpg" alt="IT教育事業" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-2xl font-semibold text-gray-700 mb-4">IT教育</h3>
                <p class="text-gray-600">IT教育事業では、初心者から上級者までを対象にしたプログラミング教育やシステム開発スキルの習得支援を提供します。</p>
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="text-center p-6 bg-white shadow-lg rounded-xl hover:shadow-xl transition duration-300">
              <a href="./pages/services/coaching.php" class="block">
                <img src="./img/life_coating1.jpg" alt="ライフコーチング事業" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-2xl font-semibold text-gray-700 mb-4">ライフコーチング</h3>
                <p class="text-gray-600">お悩み相談から、目標達成に向けたコンサルティングまで、あなたの人生をサポートします。</p>
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="text-center p-6 bg-white shadow-lg rounded-xl hover:shadow-xl transition duration-300">
              <a href="./community.php" class="block">
                <img src="./img/community1.jpg" alt="コミュニティ事業" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-2xl font-semibold text-gray-700 mb-4">コミュニティ</h3>
                <p class="text-gray-600">勉強会から雑談まで、人生を通して一緒に目標達成を楽しみながら、お互いに高め合えるコミュニティを提供します。</p>
                <p class="text-red">※準備中</p>
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="text-center p-6 bg-white shadow-lg rounded-xl hover:shadow-xl transition duration-300">
              <a href="#" class="block">
                <img src="./img/japanease_education1.jpg" alt="コミュニティ事業" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-2xl font-semibold text-gray-700 mb-4">Japanese Conversation Service</h3>
                <p class="text-gray-600">We offer curricula tailored to all levels, from beginners to advanced learners, enabling you to acquire practical skills useful in everyday conversations and business situations.</p>
                <p class="text-red">※準備中</p>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- 右矢印 -->
      <div class="swiper-button-next absolute right-4 z-10 text-gray-800 lg:right-8"></div>
    </div>
  </section>

  <!-- Blog Section -->
  <!-- <section class="bg-gradient-to-t from-orange-100 to-yellow-200 py-16 px-4">
    <div class="max-w-5xl mx-auto text-center">
      <h2 class="text-3xl font-semibold text-gray-800 mb-4">ブログ</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div>
          <img src="./img/nature-2990060_1280.jpg" alt="Blog Image" class="w-full rounded-lg mb-4">
          <h3 class="text-xl font-semibold text-gray-700 mb-2">より良い人生を送るめの食事</h3>
          <p class="text-gray-600">健康に良い食事で心身ともに元気に。</p>
        </div>
        <div>
          <img src="./img/nature-2990060_1280.jpg" alt="Blog Image" class="w-full rounded-lg mb-4">
          <h3 class="text-xl font-semibold text-gray-700 mb-2">人生を変える5つのスーパーフード</h3>
          <p class="text-gray-600">あなたの健康をサポートする5つの食材。</p>
        </div>
        <div>
          <img src="./img/nature-2990060_1280.jpg" alt="Blog Image" class="w-full rounded-lg mb-4">
          <h3 class="text-xl font-semibold text-gray-700 mb-2">簡単レシピで体に栄養を</h3>
          <p class="text-gray-600">忙しいあなたにぴったりの簡単レシピ。</p>
        </div>
      </div>
    </div>
  </section> -->

  <!-- 実績一覧セクションを修正 -->
  <!-- <section class="bg-gradient-to-t from-orange-100 to-yellow-200 py-16 px-4">
    <div class="max-w-5xl mx-auto text-center">
      <h2 class="text-3xl font-semibold text-gray-800 mb-4">実績一覧</h2>
      <div class="swiper achievementsSwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide p-4">
            <img src="./img/nature-2990060_1280.jpg" alt="実績画像" class="w-full rounded-lg mb-4">
            <h3 class="text-xl font-semibold text-gray-700 mb-2">より良い人生を送るめの食事</h3>
            <p class="text-gray-600">健康に良い食事で心身ともに元気に。</p>
          </div>
          <div class="swiper-slide p-4">
            <img src="./img/nature-2990060_1280.jpg" alt="実績画像" class="w-full rounded-lg mb-4">
            <h3 class="text-xl font-semibold text-gray-700 mb-2">人生を変える5つのスーパーフード</h3>
            <p class="text-gray-600">あなたの健康をサポートする5つの食材。</p>
          </div>
          <div class="swiper-slide p-4">
            <img src="./img/nature-2990060_1280.jpg" alt="実績画像" class="w-full rounded-lg mb-4">
            <h3 class="text-xl font-semibold text-gray-700 mb-2">簡単レシピで体に栄養を</h3>
            <p class="text-gray-600">忙しいあなたにぴったりの簡単レシピ。</p>
          </div>
          <div class="swiper-slide p-4">
            <img src="./img/nature-2990060_1280.jpg" alt="実績画像" class="w-full rounded-lg mb-4">
            <h3 class="text-xl font-semibold text-gray-700 mb-2">より良い人生を送るめの食事</h3>
            <p class="text-gray-600">健康に良い食事で心身ともに元気に。</p>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Footer -->
  <footer class="bg-gradient-to-b from-pink-200 to-purple-300 py-8 px-4 text-center">
    <div class="flex justify-center space-x-6 mb-4">
      <a href="#" class="text-gray-600 hover:text-gray-800">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
        </svg>
      </a>
      <a href="#" class="text-gray-600 hover:text-gray-800">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/>
        </svg>
      </a>
      <a href="#" class="text-gray-600 hover:text-gray-800">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
        </svg>
      </a>
    </div>
    <p class="text-gray-600">© 2024 Spring & Sky. All Rights Reserved.</p>
  </footer>

  <script src="./assets/js/swiper-bundle.min.js"></script>
  <script>
    const achievementsSwiper = new Swiper('.achievementsSwiper', {
      slidesPerView: 2,
      spaceBetween: 30,
      centeredSlides: false,
      loop: true,
      loopAdditionalSlides: 3,
      speed: 1000,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        }
      },
      effect: 'slide',
      grabCursor: true,
      observer: true,
      observeParents: true,
      watchSlidesProgress: true,
      watchSlidesVisibility: true,
      on: {
        reachEnd: function () {
          this.snapGrid = [...this.slidesGrid];
          this.slideTo(0, 0);
        }
      }
    });

    const servicesSwiper = new Swiper('.servicesSwiper', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      speed: 1000,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        }
      },
      effect: 'slide',
      grabCursor: true,
      observer: true,
      observeParents: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>

</body>
</html>
