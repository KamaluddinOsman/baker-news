<header class="nav">

    <div class="nav__holder nav--sticky">
        <div class="container relative">
            <div class="flex-parent">


                <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
          <span class="nav-icon-toggle__box">
            <span class="nav-icon-toggle__inner"></span>
          </span>
                </button>

                <a href="/" class="logo">
                    <h3>باكرنيوز</h3>
                </a>

                <nav class="flex-child nav__wrap d-none d-lg-block">
                    <ul class="nav__menu">

                        <li class={{ $title == "باكر نيوز - الرئيسية" ? "active" : "not-active" }}>
                            <a href="/">الرئيسية</a>
                        </li>

                        <li class={{ $title == "باكر نيوز - أخبار" ? "active" : "not-active" }}>
                            <a href="{{ route('news') }}">أخبار</a>
                        </li>

                        <li class={{ $title == "باكر نيوز - إقتصاد" ? "active" : "not-active" }}>
                            <a href="{{ route('economics') }}">إقتصاد</a>
                        </li>

                        <li class={{ $title == "باكر نيوز - رأي" ? "active" : "not-active" }}>
                            <a href="{{ route('opinions') }}">رأي</a>
                        </li>

                        <li class={{ $title == "باكر نيوز - رياضة" ? "active" : "not-active" }}>
                            <a href="{{ route('sports') }}">رياضة</a>
                        </li>

                        <li class={{ $title == "باكر نيوز - حوادث ومنوعات" ? "active" : "not-active" }}>
                            <a href="{{ route('collections') }}">حوادث ومنوعات</a>
                        </li>

                        <li class={{ $title == "باكر نيوز - تويتبوك" ? "active" : "not-active" }}>
                            <a href="{{ route('twitbook') }}">تويتبوك</a>
                        </li>
                        
                        <li class={{ $title == "باكر نيوز - تواصل معنا" ? "active" : "not-active" }}>
                            <a href="{{ route('contact') }}">تواصل معنا</a>
                        </li>

                    </ul>
                </nav>

                <div class="nav__right">

                    <div class="nav__right-item nav__search">
                        <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                            <i class="ui-search nav__search-trigger-icon"></i>
                        </a>
                        <div class="nav__search-box" id="nav__search-box">
                            <form class="nav__search-form">
                                <input type="text" placeholder="ادخل نص البحث" class="nav__search-input" style="padding-right: 50px;">
                                <button type="submit" class="search-button btn btn-lg btn-color btn-button">
                                    <i class="ui-search nav__search-icon"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</header>