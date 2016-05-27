@extends('blog.layouts.master', ['meta_description' => 'About Me'])

@section('content')
    <section id="about" class="about">
        <div class="container">
            <img src="{{ asset('assets/images/about.jpg') }}" alt="About Me">
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. </p>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. </p>
        </div><!-- /.container -->
    </section><!-- /#about -->
@stop