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
        <div class="d-flex flex-row">
            <div class="float-left align-self-center w-60 col-7 pe-4">
                <div class="text-left">
                    <p class="text-primary"><i class="bi bi-gear-fill"></i><b>working for your success</b></p>
                    <h1 class="text-dark">{{ $hero['heading']??'Heading' }}</h1>
                    <h3 class="text-primary">{{ $hero['subheading']??'Sub Heading' }}</h3>
                </div>
                <button class="btn btn-primary rounded-pill">Get Started</button>
                <button class="btn btn-default"><b><i class="bi bi-play-circle"></i>Play Video</b></button>
            </div>
            <div class="float-right w-50 col-4 ">
                <img class="bg-img-cover" src="img/img1.webp" alt="img1">
            </div>
        </div>
    </section>

    <section id="about">
        @php 
            //$about = isset($sections['hero']) ? json_decode($sections['hero']->content, true) : null;
        @endphp
        <div class="d-flex flex-row justify-content-between">
            <div class="float-left align-self-center w-50 col-5">
                <div class="text-left ">
                    <p class="text-primary"><b>MORE ABOUT US</b></p>
                    <h2 class="text-dark">Heading</h2>
                    <p class="text-dark">lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
                        lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum </p>
                </div>
                <div class="d-flex flex-row justify-content-around">
                    <div class="row flex-column">
                        <span class="col"><i class="bi bi-check-circle-fill text-primary"></i>Lorem ipsum 1</span>
                        <span class="col"><i class="bi bi-check-circle-fill text-primary"></i>Lorem ipsum 2</span>
                        <span class="col"><i class="bi bi-check-circle-fill text-primary"></i>Lorem ipsum 3</span>
                    </div>
                    <div class="row flex-column">
                        <span class="col"><i class="bi bi-check-circle-fill text-primary"></i>Lorem ipsum 4</span>
                        <span class="col"><i class="bi bi-check-circle-fill text-primary"></i>Lorem ipsum 5</span>
                        <span class="col"><i class="bi bi-check-circle-fill text-primary"></i>Lorem ipsum 6</span>
                    </div>
                </div>
            </div>
            <div class="float-right w-40 col-4">
                <img class="bg-img-cover" src="img/img1.webp" alt="img1">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features">
        @php 
            $features = isset($sections['features']) ? json_decode($sections['features']->content, true) : null;
        
        @endphp
        @if($features)
            @foreach ($features as $key =>$feature)
                <div class="feature-item">
                    <h4>{{ $feature['title'] }}</h4>
                    <p>{{ $feature['description'] }}</p>
                </div>
            @endforeach
        @else
            <p>Features section content is not available.</p>
        @endif
    </section>
@endsection