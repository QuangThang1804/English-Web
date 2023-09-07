<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{ url('/') }}">Kuro </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active btn btn-sm animated-button thar-three mr-2 border-0" href="{{ url('/') }}">Trang chủ</a></li>
          <li class="dropdown"><a class="btn btn-sm animated-button thar-three  mr-2" href="{{ url('/courses') }} "><span>Khoá học</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="btn btn-sm animated-button thar-three" href="{{ url('/words') }}">Từ vựng</a></li>
              <li><a class="btn btn-sm animated-button thar-three" href="{{ url('/phrases') }}">Cụm từ (TOEIC)</a></li>
              <li><a class="btn btn-sm animated-button thar-three" href="{{ url('/news') }}">Đọc báo theo levels</a></li>
            </ul>
          </li>
          <li><a class="btn btn-sm animated-button thar-three" href="about.html">Về chúng tôi</a></li>

          @if(Session::has('success'))
            <li class="dropdown">
              <div class="flex gap-3" style="width:200px">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle"
                  height="22" style="width:10%" alt="Avatar" loading="lazy" />
                <p class="mb-0 mt-1 font-bold">Phạm Quang Thăng</p>
              </div>
              <ul>
                <li><a class="btn btn-sm animated-button thar-three" href="">My profile</a></li>
                <li><a class="btn btn-sm animated-button thar-three" href="">Settings</a></li>
                <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                  @csrf
                  @method('DELETE')
                  <!-- <li><a class="btn btn-sm animated-button thar-three" href="">Logout</a></li> -->
                  <button class="btn btn-sm animated-button thar-three w-100" type="submit">Đăng xuất</button>
                </form>
                
              </ul>
            </li>
          @else
            <a href="{{ route('login') }}" class="get-started-btn btn text-white font-weight-bold">Đăng nhập</a>

          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!-- <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Đăng xuất</button>
      </form> -->
      <!-- <a href="{{ route('login') }}" class="get-started-btn btn text-white font-weight-bold">Đăng nhập</a> -->

    </div>
  </header><!-- End Header -->