@extends('layouts.app')

@section('content')

    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <h2 data-aos="fade-up">Crime Report Management System of Laguna City</h2>
                    <blockquote>

                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis cum recusandae eum laboriosam voluptatem repudiandae odio, vel exercitationem officiis provident minima. </p>
                    </blockquote>
                </div>
{{--                Chart in main page--}}
                @include('chart')
            </div>
        </div>
    </section><!-- End Hero Section -->
@endsection
