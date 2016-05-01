<footer class="footer style-3">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3">
                <div class="text-widget">
                    <div class="text-widget-title">{{ config('blog.name') }}</div>
                    <div class="text-widget-text">{{ config('blog.subtitle') }}</div>
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
