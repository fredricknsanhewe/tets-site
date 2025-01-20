@extends('layouts.app')
@section('content')
@php
    use App\Models\Section;
    $sections = Section::all()->keyBy('name');
@endphp
    <!-- Hero Section -->
    <section id="hero">
        @php 
            $hero = isset($sections['hero']) ? json_decode($sections['hero']->content, true) : null;
        @endphp
        @if($hero)
            <h1>{{ $hero['heading']??'Heading' }}</h1>
            <p>{{ $hero['subheading']??'Sub Heading' }}</p>
            <a href="#features" class="btn btn-primary">{{ $hero['button1'] }}</a>
            <a href="#contact" class="btn btn-secondary">{{ $hero['button2'] }}</a>
        @else
            <p>Hero section content is not available.</p>
        @endif
    </section>

    <!-- Features Section -->
    <section id="features">
        @php 
            $features = isset($sections['features']) ? json_decode($sections['features']->content, true) : null;
        @endphp
        @if($features)
            @foreach ($features as $feature)
                <div class="feature-item">
                    <h4>{{ $feature['title'] }}</h4>
                    <p>{{ $feature['description'] }}</p>
                </div>
            @endforeach
        @else
            <p>Features section content is not available.</p>
        @endif
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials">
        @php 
            $testimonials = isset($sections['testimonials']) ? json_decode(json_encode($sections['testimonials']->content), true) : null;
        @endphp
        @if($testimonials)
            @foreach ($testimonials as $testimonial)
                <div class="testimonial-item">
                    <blockquote>
                        <p>{{ $testimonial['quote'] }}</p>
                    </blockquote>
                    <p>- {{ $testimonial['author'] }}</p>
                </div>
            @endforeach
        @else
            <p>Testimonials section content is not available.</p>
        @endif
    </section>

    <!-- Contact Section -->
    <section id="contact">
        @php
            $contact = isset($sections['contact']) ? $sections['contact']->content : null;
        @endphp
        @if($contact)
            <p>{{ $contact }}</p>
        @else
            <p>Contact section content is not available.</p>
        @endif
    </section>

@endsection
