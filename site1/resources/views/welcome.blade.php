@php
    use App\Models\Section;
    $sections = Section::all()->keyBy('name');
@endphp

@section('content')

    <!-- Hero Section -->
    <section id="hero">
        @php $hero = json_decode($sections['hero']->content, true); @endphp
        <h1>{{ $hero['heading'] }}</h1>
        <p>{{ $hero['subheading'] }}</p>
        <a href="#features" class="btn btn-primary">{{ $hero['button1'] }}</a>
        <a href="#contact" class="btn btn-secondary">{{ $hero['button2'] }}</a>
    </section>

    <!-- Features Section -->
    <section id="features">
        @php $features = json_decode($sections['features']->content, true); @endphp
        @foreach ($features as $feature)
            <div class="feature-item">
                <h4>{{ $feature['title'] }}</h4>
                <p>{{ $feature['description'] }}</p>
            </div>
        @endforeach
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials">
        @php $testimonials = json_decode($sections['testimonials']->content, true); @endphp
        @foreach ($testimonials as $testimonial)
            <div class="testimonial-item">
                <blockquote>
                    <p>{{ $testimonial['quote'] }}</p>
                </blockquote>
                <p>- {{ $testimonial['author'] }}</p>
            </div>
        @endforeach
    </section>

    <!-- Contact Section -->
    <section id="contact">
        @php $contact = $sections['contact']->content; @endphp
        @if ($contact)
            <p>{{ $contact }}</p>
        @else
            <p>Contact information is currently unavailable.</p>
        @endif
    </section>

@endsection
