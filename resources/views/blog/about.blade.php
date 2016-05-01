@extends('blog.layouts.master', ['meta_description' => 'About Me'])

@section('content')
    <div id="content-wrapper">
        <div class="container">
            <div class="content-wrapper-content big-block type-3">
                <div class="row">
                    <div class="col-md-10 col-md-push-1">
                        <div class="page-title">
                            <h1 class="title">
                                About me
                            </h1>
                            <div class="links">
                                <a href="/">Home</a>
                                <span>—</span>
                                <a href="/about">About me</a>
                            </div>
                        </div>
                        <div class="simple-article">
                            <div class="quote">
                                Pellentesque bibendum ipsum at tortor dapibus sagittis. Praesent facilisis in tellus in
                                luctus.
                            </div>
                            <img src="{{ asset('assets/img/img100.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-push-2">
                        <div class="simple-article">
                            <p>
                                In hac habitasse platea dictumst. Praesent nec vulputate nulla, vitae varius tellus. In
                                bibendum dolor ac rhoncus lacinia. Vivamus dapibus accumsan lectus vel imperdiet.
                                Quisque sollicitudin tincidunt eros ac convallis. Nam mollis ipsum non ante auctor, non
                                dignissim augue aliquet. Nullam scelerisque elit et dictum lacinia. Sed est massa,
                                feugiat a porta eu, accumsan sit amet elit.
                            </p>
                            <p>
                                Nullam ultricies feugiat pharetra. Aliquam erat volutpat. Donec sed blandit quam. Proin
                                sit amet feugiat nulla. Praesent et eros elementum, fermentum velit blandit, vehicula
                                diam. Fusce purus nulla, rutrum et fermentum ac, tempus in augue. Nam in urna arcu. Sed
                                vulputate ut leo at fermentum. Aliquam rutrum pretium augue, at tempus lacus tincidunt
                                quis. Vestibulum consequat odio quis placerat varius. Sed commodo felis eget felis
                                euismod ornare. Nam pretium, justo vel mollis faucibus, mauris eros feugiat arcu, eget
                                gravida mauris turpis in felis. Quisque placerat ex nec elit dictum, ac auctor purus
                                pretium.
                            </p>
                            <p>
                                Etiam quis libero iaculis, ultrices sapien non, tristique neque. Vestibulum velit nisi,
                                porta vel vestibulum nec, tincidunt aliquet nulla. Aenean pharetra posuere leo vitae
                                consequat. Phasellus interdum condimentum suscipit. Nulla facilisi. Aliquam vitae
                                sodales justo.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-push-1">
                        <div class="about-galerry row">
                            <img src="img/img101.jpg" alt="">
                            <img src="img/img102.jpg" alt="">
                            <img src="img/img103.jpg" alt="">
                            <img src="img/img104.jpg" alt="">
                            <img src="img/img105.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-push-2">
                        <div class="simple-article">
                            <p>
                                Donec sed blandit quam. Proin sit amet feugiat nulla. Praesent et eros elementum,
                                fermentum velit blandit, vehicula diam. Fusce purus nulla, rutrum et fermentum ac,
                                tempus in augue. Nam in urna arcu. Sed vulputate ut leo at fermentum. Aliquam rutrum
                                pretium augue, at tempus lacus tincidunt quis. Vestibulum consequat odio quis placerat
                                varius. Sed commodo felis eget felis euismod ornare.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection