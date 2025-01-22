@extends('layouts.app')
@section('content')
@php
    use App\Models\Section;
    $sections = Section::all()->keyBy('name');
@endphp

    <!-- Hero Section -->
    <section class="p-5" id="hero">
        @php 
            $hero = isset($sections['hero']) ? json_decode($sections['hero']->content, true) : null;
        @endphp
        <div class="d-flex flex-wrap flex-row pb-5">
            <div class="float-left align-self-center col-lg-7 col-md-9 pe-4">
                <div class="text-left">
                    <p class="text-primary"><i class="bi bi-gear-fill"></i><b>working for your success</b></p>
                    <h1 class="text-dark">{{ $hero['heading']??'Heading' }}</h1>
                    <h3 class="text-primary">{{ $hero['subheading']??'Sub Heading' }}</h3>
                </div>
                <button class="btn btn-primary rounded-pill">Get Started</button>
                <button class="btn btn-default"><b><i class="bi bi-play-circle"></i>Play Video</b></button>
            </div>
            <div class="float-right col-lg-4 col-md-9 ">
                <img class="bg-img-cover" src="img/img1.webp" alt="img1">
            </div>
        </div>
    </section>

    <section class="p-5" id="about">
        @php 
            //$about = isset($sections['hero']) ? json_decode($sections['hero']->content, true) : null;
        @endphp
        <div class="d-flex flex-row flex-wrap justify-content-between pb-5">
            <div class="float-left align-self-center col-lg-7 col-md-9">
                <div class="text-left ">
                    <p class="text-primary"><b>MORE ABOUT US</b></p>
                    <h2 class="text-dark">Heading</h2>
                    <p class="text-dark">lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
                        lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum </p>
                </div>
                <div class="d-flex flex-row justify-content-around pb-5">
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
                <div class="d-flex justify-content-between small">
                    <div class="col-lg-7 d-flex flex-row">
                        <img src="img/img1.webp" class=""  style="border-radius: 50%;width: 40px;height:40px">
                        <div class="d-flex flex-column">
                            <span>Maria Smith</span>
                            <span class="text-primary">CEO & Founder</span>
                        </div>
                    </div>
                    <div class="col-lg-7 d-flex flex-row shadow p-3 rounded bg-white">
                        <span class="text-primary bi bi-telephone-fill" style="font-size:2em"></span>
                        <div class="d-flex flex-column">
                            <span>Cal us anytime</span>
                            <span class="text-primary">+263777111222</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="float-right col-lg-5 col-md-9">
                <img class="bg-img-cover" src="img/img1.webp" alt="img1">
            </div>
        </div>
    </section>
    
    <section class="p-5" id="testimonials" class="m-5 p-5" style="background-color:rgba(80, 155, 255,0.2)">
        @php 
            //$testimonials = isset($sections['hero']) ? json_decode($sections['hero']->content, true) : null;
        @endphp
        <div class="d-flex flex-column flex-wrap justify-content-between pb-5">
            <div class="d-flex flex-column text-center align-content-center align-self-center">
                <h3>Testimonials</h3>
                <hr class="align-self-center" style="width:40px;height:4px;border:none;color:#0000ff;background-color:#00f;">
                <p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </p>
            </div>
            <div class="d-flex flex-row flex-wrap justify-content-between">
            <div class="col-5 shadow bg-white rounded mb-5 me-1">
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-row">
                            <img src="img/img1.webp" class=""  style="border-radius: 50%;width: 60px;height:60px">
                            <div class="d-flex flex-column">
                                <span>Maria Smith</span>
                                <span class="small">CEO & Founder</span>
                                <div>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>                                    
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <span class="display-1 text-primary">“</span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores tempore numquam cum temporibus, facilis accusantium quae veritatis esse, corporis laboriosam accusamus deserunt! Quisquam quas illum voluptates! Tenetur porro et repudiandae.
                            <span class="display-1 text-primary">”</span>
                        </div>
                    </div>
                </div>
                <div class="col-5 shadow bg-white rounded mb-5 me-1">
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-row">
                            <img src="img/img1.webp" class=""  style="border-radius: 50%;width: 60px;height:60px">
                            <div class="d-flex flex-column">
                                <span>Maria Smith</span>
                                <span class="small">CEO & Founder</span>
                                <div>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>                                    
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <span class="display-1 text-primary">“</span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores tempore numquam cum temporibus, facilis accusantium quae veritatis esse, corporis laboriosam accusamus deserunt! Quisquam quas illum voluptates! Tenetur porro et repudiandae.
                            <span class="display-1 text-primary">”</span>
                        </div>
                    </div>
                </div>
                <div class="col-5 shadow bg-white rounded mb-5 me-1">
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-row">
                            <img src="img/img1.webp" class=""  style="border-radius: 50%;width: 60px;height:60px">
                            <div class="d-flex flex-column">
                                <span>Maria Smith</span>
                                <span class="small">CEO & Founder</span>
                                <div>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>                                    
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <span class="display-1 text-primary">“</span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores tempore numquam cum temporibus, facilis accusantium quae veritatis esse, corporis laboriosam accusamus deserunt! Quisquam quas illum voluptates! Tenetur porro et repudiandae.
                            <span class="display-1 text-primary">”</span>
                        </div>
                    </div>
                </div>
                <div class="col-5 shadow bg-white rounded mb-5 me-1">
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-row">
                            <img src="img/img1.webp" class=""  style="border-radius: 50%;width: 60px;height:60px">
                            <div class="d-flex flex-column">
                                <span>Maria Smith</span>
                                <span class="small">CEO & Founder</span>
                                <div>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>                                    
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <span class="display-1 text-primary">“</span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores tempore numquam cum temporibus, facilis accusantium quae veritatis esse, corporis laboriosam accusamus deserunt! Quisquam quas illum voluptates! Tenetur porro et repudiandae.
                            <span class="display-1 text-primary">”</span>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section class="p-5 bg-info" id="calltoaction" class="m-5 p-5">
        @php 
            //$calltoaction = isset($sections['hero']) ? json_decode($sections['hero']->content, true) : null;
        @endphp
        <div class="d-flex flex-column flex-wrap justify-content-between pb-5">
            <div class="d-flex flex-column text-center align-content-center align-self-center">
                <h3>Call To Action</h3>
                <hr class="align-self-center" style="width:40px;height:4px;border:none;color:#0000ff;background-color:#00f;">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos laborum possimus mollitia velit assumenda. Quos, itaque distinctio assumenda debitis quas laudantium exercitationem consequatur molestiae dicta accusamus quo nobis quae aperiam.</p>
                <div>
                    <button class="btn btn-primary">Call To Action</button>
                </div>
            </div>
        </div>
    </section>

    <section class="p-5" id="services" class="m-5 p-5">
        @php 
            //$services = isset($sections['hero']) ? json_decode($sections['hero']->content, true) : null;
        @endphp
        <div class="d-flex flex-column flex-wrap justify-content-between pb-5">
            <div class="d-flex flex-column text-center align-content-center align-self-center">
                <h3>Services</h3>
                <hr class="align-self-center" style="width:40px;height:4px;border:none;color:#0000ff;background-color:#00f;">
                <p>Consequatur molestiae dicta accusamus quo nobis quae aperiam.</p>
            </div>
            <div class="d-flex flex-row flex-wrap container">
                <div class="row text-center">
                    <div class="d-flex flex-row col-lg-6 shadow p-3 bg-white">
                        <div class="col-lg-1"><i class="bi bi-activity text-primary bg-info rounded" style="font-size:1.4em;"></i></div>
                        <div class="col-lg-9">
                            <div class="accordion">
                                <span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam corrupti 
                                </span>
                                <span id="collapse1" class="collapse">
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet quasi reiciendis harum quibusdam tempore commodi! Voluptatem recusandae incidunt accusamus expedita.</span>
                                </span>
                            </div>
                            <span class="SeeMore2 text-primary" data-id="collapse1">Read More<i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                    <div class="d-flex flex-row col-lg-6 shadow p-3 bg-white">
                        <div class="col-lg-1"><i class="bi bi-diagram-3 text-primary bg-info rounded" style="font-size:1.4em;"></i></div>
                        <div class="col-lg-9">
                            <div class="accordion">
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam corrupti 
                                    </span>
                                    <span id="collapse2" class="collapse">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet quasi reiciendis harum quibusdam tempore commodi! Voluptatem recusandae incidunt accusamus expedita.</span>
                                    </span>
                            </div>
                            <span class="SeeMore2 text-primary" data-id="collapse2">Read More<i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                    <div class="d-flex flex-row col-lg-6 shadow p-3 bg-white">
                        <div class="col-lg-1"><i class="bi bi-easel text-primary bg-info rounded" style="font-size:1.4em;"></i></div>
                        <div class="col-lg-9">
                            <div class="accordion">
                                    <span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam corrupti Lorem ipsum dolor sit amet consectetur
                                    </span>
                                    <span id="collapse3" class="collapse">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet quasi reiciendis harum quibusdam tempore commodi! Voluptatem recusandae incidunt accusamus expedita.</span>
                                    </span>
                            </div>
                            <span class="SeeMore2 text-primary" data-id="collapse3">Read More<i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                    <div class="d-flex flex-row col-lg-6 shadow p-3 bg-white">
                        <div class="col-lg-1"><i class="bi bi-clipboard-data text-primary bg-info rounded" style="font-size:1.4em;"></i></div>
                        <div class="col-lg-9">
                            <div class="accordion">
                                    <span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam corrupti                                    </span>
                                    <span id="collapse4" class="collapse">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet quasi reiciendis harum quibusdam tempore commodi! Voluptatem recusandae incidunt accusamus expedita.</span>
                                    </span>
                            </div>
                            <span class="SeeMore2 text-primary" data-id="collapse4">Read More<i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    
    <section id="contact" class="p-5">
        @php 
            //$contact = isset($sections['hero']) ? json_decode($sections['hero']->content, true) : null;
        @endphp
        <div class="d-flex flex-column flex-wrap justify-content-between pb-5">
            <div class="d-flex flex-column text-center align-content-center align-self-center">
                <h3>Contact</h3>
                <hr class="align-self-center" style="width:40px;height:4px;border:none;color:#0000ff;background-color:#00f;">
                <p>Quos laborum possimus mollitia velit assumenda. Quos, itaque distinctio assumenda debitis quas laudantium exercitationem consequatur molestiae dicta accusamus quo nobis quae aperiam.</p>
            </div>
            <div class="d-flex flex-row flex-wrap text-left">
                
                <div class="col-lg-5 bg-primary shadow me-2 text-white rounded">
                        <div class="ps-5">
                            <h2>Contact Info</h2>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
                        </div>
                        <div class="d-flex flex-row flex-wrap ps-5">
                            <div class="col-lg-2 p-4"><i class="bi bi-geo-alt text-light" style="font-size:2em;width: 60px;height:60px"></i></div>
                            <div class="flex-column text-left">
                                <h3>Our Location</h3>
                                <address>ABC 23 street</address>
                                <address>Harare</address>
                            </div>
                        </div>
                        <div class="d-flex flex-row flex-wrap ps-5">
                            <div class="col-lg-2 p-4"><i class="bi bi-telephone text-light" style="font-size:2em;width: 60px;height:60px"></i></div>
                            <div class="flex-column text-left">
                                <h3>Phone Number</h3>
                                <div>+263777111222</div>
                                <div>+263722222222</div>
                            </div>
                        </div>
                        <div class="d-flex flex-row flex-wrap ps-5">
                            <div class="col-lg-2 p-4"><i class="bi bi-envelope text-light" style="font-size:2em;width: 60px;height:60px"></i></div>
                            <div class="flex-column text-left">
                                <h3>Email <Address></Address></h3>
                                <div>info@abc.com</div>
                                <div>admin@abc.com</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 bg-white shadow ms-2 rounded">
                        <div class="d-flex flex-column text-left text-dark ps-5 align-content-start align-self-start">
                            <h3>Get In Touch</h3>
                            <p>Consequatur molestiae dicta accusamus quo nobis quae aperiam.</p>
                        </div>
                        <div class="d-flex flex-row flex-wrap text-left">
                            <form class="container container-fluid" action="#">
                                <div class="form-group d-flex flex-row flex-wrap justify-content-between p-5">
                                    <div class="form-group col-lg-6 d-flex flex-row flex-wrap pe-5">
                                        <input id="names" class="form-control rounded" type="text" placeholder="Your Name">    
                                    </div>
                                    <div class="form-group col-lg-6 d-flex flex-row flex-wrap">
                                        <input id="email" class="form-control rounded" type="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="form-group col-lg-12 d-flex flex-row flex-wrap px-5">
                                        <input id="subject" class="form-control rounded" type="text" placeholder="Subject">
                                </div>
                                <div class="form-group col-lg-12 d-flex flex-row flex-wrap p-5">
                                    <textarea id="message" rows="5" class="form-control rounded" placeholder="Message"></textarea>
                                </div>
                                <div class="col-lg-12 pb-5">
                                    <center><button id="send" class="text-center align-self-center rounded-pill text-light btn btn-primary" >Send Message</button></center>
                                </div>
                                </div>
                            </form>
                        </div>
                
                    </div>
            </div>
        </div>
    </section>


    <!-- Features Section -->
    <section class="p-5" id="features">
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