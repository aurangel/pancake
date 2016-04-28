<footer class="footer style-3">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3">
                <div class="text-widget">
                    <div class="text-widget-title">nrg blog</div>
                    <div class="text-widget-text">
                        Integer blandit velit nec purus convallis ullamcorper. Pellentesque habitant morbi tristique
                        senectus et netus et malesuada fames ac turpis egestas. In blandit porttitor urna, eu ultrices
                        enim volutpat ut. Nulla facilisi. Fusce ut molestie purus.
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3">
                <h4 class="widget-title">Popular photos</h4>
                <div class="popular-photos clearfix">
                    <a href="#"><img class="img-responsive img-full" src="{{ asset('assets/img/pop_1.jpg') }}" alt=""></a>
                    <a href="#"><img class="img-responsive img-full" src="{{ asset('assets/img/pop_2.jpg') }}" alt=""></a>
                    <a href="#"><img class="img-responsive img-full" src="{{ asset('assets/img/pop_3.jpg') }}" alt=""></a>
                    <a href="#"><img class="img-responsive img-full" src="{{ asset('assets/img/pop_4.jpg') }}" alt=""></a>
                    <a href="#"><img class="img-responsive img-full" src="{{ asset('assets/img/pop_5.jpg') }}" alt=""></a>
                    <a href="#"><img class="img-responsive img-full" src="{{ asset('assets/img/pop_6.jpg') }}" alt=""></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3">
                <h4 class="widget-title">recent posts</h4>
                <div class="recent-posts">
                    <div class="r-post">
                        <div class="r-post-date">July 20, 2015</div>
                        <a class="r-post-link">Fusce dolor libero, efficitur et lobortis at, faucibus nec nunc</a>
                    </div>
                    <div class="r-post">
                        <div class="r-post-date">July 20, 2015</div>
                        <a class="r-post-link">Fusce dolor libero, efficitur et lobortis at, faucibus nec nunc</a>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-3">
                <h4 class="widget-title">subscribe</h4>
                <div class="subscribe-block">
                    <p>
                        Pellentesque habitant morbi tristique senectus et netusturpis egestas.
                    </p>
                    <form action="./">
                        <input type="email" placeholder="Enter your email" required="">
                        <input type="submit" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>

{{--

<hr>
<div class="container">
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        @include('blog.partials.disqus')
    </div>
</div>
<hr>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <ul class="list-inline text-center">
                    <li>
                        <a href="{{ url('rss') }}" data-toggle="tooltip"
                           title="RSS feed">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-rss fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/PERSONALIZE" data-toggle="tooltip"
                           title="My Twitter Page">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/PERSONALIZE" data-toggle="tooltip"
                           title="My Facebook Page">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.google.com/+PERSONALIZE" data-toggle="tooltip"
                           title="My Google+ Page">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.linkedin.com/in/PERSONALIZE/" data-toggle="tooltip"
                           title="My LinkedIn Page">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/PERSONALIZE" data-toggle="tooltip"
                           title="My GitHub Pages">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright">Copyright © {{ config('blog.author') }}</p>
            </div>
        </div>
    </div>
</footer>
--}}
