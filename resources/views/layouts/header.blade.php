<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{ url('/') }}">Kuro </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="{{ url('/') }}">Trang chủ</a></li>
          <li class="dropdown"><a href="{{ url('/courses') }} "><span>Khoá học</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/words') }}">Từ vựng</a></li>
              <li><a href="{{ url('/pharses') }}">Cụm từ (TOEIC)</a></li>
              <li><a href="{{ url('/news') }}">Đọc báo theo levels</a></li>
            </ul>
          </li>
          <li><a href="about.html">Về chúng tôi</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="courses.html" class="get-started-btn">Bắt đầu</a>

    </div>
  </header><!-- End Header -->