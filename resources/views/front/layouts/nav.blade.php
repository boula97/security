  <!-- header section strats -->
  <header class="header_section">
      <div class="container">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
              <a class="navbar-brand -2" href="#">
                  <div class="logo_box mx-2">
                      <a href="{{ route('home') }}">
                          <img src="images/logo.png" alt="" />
                      </a>
                  </div>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto mr-2">
                      <li class="nav-item">
                          <a class="nav-link {{ request()->routeIs('home') ? 'text-primary' : '' }}"
                              href="{{ route('home') }}">الصفحة الرئسية </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link {{ request()->routeIs('about') ? 'text-primary' : '' }}"
                              href="{{ route('about') }}">من نحن </a>
                      </li>
                      <!-- <li class="nav-item">
              <a class="nav-link" href="service.html">الخدمات</a>
            </li> -->
                      <li class="nav-item">
                          <a class="nav-link {{ request()->routeIs('blogs') ? 'text-primary' : '' }}"
                              href="{{ route('blogs') }}">المقالات</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link {{ request()->routeIs('contact') ? 'text-primary' : '' }}"
                              href="{{ route('contact') }}">اتصل بنا</a>
                      </li>

                  </ul>
                  {{-- <form class="form-inline my-2 my-lg-0">
                      <input class="form-control nav_search-input mr-sm-2 d-none" type="search" placeholder="Search"
                          aria-label="Search" value="" />
                      <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                  </form> --}}
              </div>
          </nav>
      </div>
  </header>
  <!-- end header section -->
