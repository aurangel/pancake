@extends('blog.layouts.master', ['meta_description' => 'My Projects'])

@section('content')
    <style type="text/css">
        .page-title {
            min-height: 200px;
            width: 100%;
            margin-bottom: 30px;
            position: relative
        }
        
        .page-title h1 {
            font-size: 36px;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: .05em;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%)
        }
    </style>
    
    <section id="contact" class="contact">
        <div class="container">
            <div class="page-title" style="background-image: url({{ asset('assets/images/projects.jpg') }}); background-position: -356px 392px;">
				<h1>Моё портфолио</h1>
			</div>
			
            <div class="row">
                
            </div><!-- /.row -->
            <!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /#contact -->
@stop
