<header id="header" class="header">
    <div class="container">
        <div class="logo">
            <a href="/blog"><img src="{{ asset('assets/images/logo.png') }}" alt="Logo"></a>
        </div> <!-- /.logo -->
        <div class="row navigation">
            <div class="dextop-left col-xs-12 col-md-12 col-lg-7">
                <nav>
                    <div class="navbar yamm" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse">
                            <!-- Right nav -->
                            <ul class="nav navbar-nav">
                                <li><a href="/">Главная</a></li>
                                <li><a href="sitemap.xml">Карта блога</a></li>
                                <li><a href="rss">RSS лента</a></li>
                                <li><a href="/contact">Контакты</a></li>
                                <li><a href="/about">От автора</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </nav>
            </div> <!-- /.col-md-8 -->
            <div class="col-xs-12 col-md-12 col-lg-3">
                <div class="header-social">
                    <ul class="header-social-list list-inline">
                        <li class="header-social-list-item">
                            <a href="{{ config('blog.social.personal') }}" title="Личный уголок в этой паутине" target="_blank">
                                <i class="fa fa-user"></i>
                            </a>
                        </li>
                        <li class="header-social-list-item">
                            <a href="{{ config('blog.social.site') }}" title="Сайт моей команды" target="_blank">
                                <i class="fa fa-globe"></i>
                            </a>
                        </li>
                        <li class="header-social-list-item">
                            <a href="{{ config('blog.social.cm') }}" title="Наша площадка для продаж" target="_blank">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </li>
                        <li class="header-social-list-item">
                            <a href="{{ config('blog.social.facebook') }}" title="Наша бизнес страница" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="header-social-list-item">
                            <a href="{{ config('blog.social.github') }}" title="Мой git репозиторий" target="_blank">
                                <i class="fa fa-github-alt"></i>
                            </a>
                        </li>
                        <li class="header-social-list-item">
                            <a href="{{ config('blog.social.vimeo') }}" title="Презентации некоторых товаров" target="_blank">
                                <i class="fa fa-vimeo"></i>
                            </a>
                        </li>
                        <li class="header-social-list-item">
                            <a href="{{ config('blog.social.linkedin') }}" title="На самом деле просто профиль" target="_blank">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div><!-- ./header-social -->
            </div> <!-- /.col-md-2 -->
            <div class="col-xs-12 col-md-12 col-lg-2">
                <div class="header-search">
                    <form role="search" method="get" class="search-form" action="/blog/search">
                        <label for="search"></label>
                        <input type="text" class="search-box"
                               id="search"
                               name="s"
                               value="{{ old('s') }}"
                               required="" />
                        <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                    </form> <!-- end form -->
                </div> <!-- /.header-search-box -->
            </div> <!-- /.col-md-2 -->
        </div> <!-- /.navigation -->
    </div><!-- /.container -->
</header><!-- end Header -->