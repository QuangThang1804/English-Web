<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{ url('/') }}">Kuro </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active btn btn-sm animated-button thar-three mr-2" href="{{ url('/') }}">Trang chủ</a></li>
          <li class="dropdown"><a class="btn btn-sm animated-button thar-three  mr-2" href="{{ url('/courses') }} "><span>Khoá học</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="btn btn-sm animated-button thar-three" href="{{ url('/words') }}">Từ vựng</a></li>
              <li><a class="btn btn-sm animated-button thar-three" href="{{ url('/phrases') }}">Cụm từ (TOEIC)</a></li>
              <li><a class="btn btn-sm animated-button thar-three" href="{{ url('/news') }}">Đọc báo theo levels</a></li>
            </ul>
          </li>
          <li><a class="btn btn-sm animated-button thar-three" href="about.html">Về chúng tôi</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{ url('/courses') }}" class="get-started-btn">Bắt đầu</a>

    </div>
  </header><!-- End Header -->