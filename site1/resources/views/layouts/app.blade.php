@php
    use App\Models\Section;
    $sections = Section::all()->keyBy('name')->filter(function ($section) {
        return $section->name == 'contact';
    });
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('/img/img1.webp') }}" type="image/png">
    <title>My Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            scroll-behavior: smooth;
        }
        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: #fff;
        }
    </style>
</head>
<body class="bg-light">
    <header id="header" class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">My Site</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="/#hero">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="/#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="/#contact">Contact</a></li>
                    </ul>
                    <a href="/login" class="btn btn-primary ms-lg-3">
                        @guest
                        Login
                        @endguest
                        @auth
                        Admin
                        @endauth
                    </a>
                    @auth
                    <a href="/register" class="btn btn-success ms-lg-3">Register Admin</a>
                    <a href="/logout" class="btn btn-danger ms-lg-3">Log Out</a>
                    @endauth
                </div>
            </div>
        </nav>
    </header>
    <main class="main  d-flex flex-column flex-wrap">
    @yield('content')
    <script>
        $('.SeeMore2').click(function(){
		var $this = $(this);
        var collapsed=$("#"+$this.attr('data-id'));
		$this.toggleClass('SeeMore2');
        collapsed.toggleClass('collapse');
		if($this.hasClass('SeeMore2')){
			$this.html('Read More<i class="bi bi-arrow-right"></i>');			
		} else {
			$this.html('Read Less<i class="bi bi-caret-up"></i>');
		}
	});
    $(document).ready(function(){
        $("a[href^='#']").on('click', function(event) {
            event.preventDefault();

            var target = this.hash;
            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 800, function(){
                window.location.hash = target;
            });
        });
    });
</script>
</main>
<footer id="footer" class="p-5 bg-white shadow">
@php
    $contact = isset($sections['contact']) ? json_decode($sections['contact']->content, true) : null;
@endphp
    <div class="container container-fluid text-left d-flex flex-colum">
        <div class="col-3 d-flex flex-colum">
            <div class="flex-column">
                <div><h3>My Website</h3></div>
                <div>
                    <div>
                        <address>{{$contact['address']??'Sample Address 123'}}</address>    
                        <address>{{$contact['country']??'Zimbabwe'}}</address>
                    </div>
                    <div>
                        <div><b>Phone:</b>{{$contact['phone1']??'#phone'}}</div>
                        <div><b>Email:</b>{{$contact['email1']??'#email'}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-9 d-flex flex-row justify-contents-between">
        <div class="col-3 pt-3">
                <div><h5>Useful Links</h5></div>
                <div class="d-flex flex-column">
                    <a href="/#hero" class="text-decoration-none pb-3">Home</a>
                    <a href="/#about" class="text-decoration-none pb-3">About Us</a> 
                    <a href="/#services" class="text-decoration-none pb-3">Services</a>
                    <a href="/#contact" class="text-decoration-none pb-3">Contact</a>
                </div>
            </div>
            <div class="col-3 pt-3">
                <div><h5>Our Services</h5></div>
                <div class="d-flex flex-column">
                    <a href="/#" class="text-decoration-none pb-3">Web Dev</a>
                    <a href="/#" class="text-decoration-none pb-3">Software Dev</a> 
                    <a href="/#" class="text-decoration-none pb-3">Constultation</a>
                    <a href="/#" class="text-decoration-none pb-3">Delivery</a>
                </div>
            </div>
            <div class="col-3 pt-3">
                <div><h5>Other Links</h5></div>
                <div class="d-flex flex-column">
                    <a href="/#hero" class="text-decoration-none pb-3">Home</a>
                    <a href="/#about" class="text-decoration-none pb-3">About Us</a> 
                    <a href="/#services" class="text-decoration-none pb-3">Services</a>
                    <a href="/#contact" class="text-decoration-none pb-3">Contact</a>
                </div>
            </div>
            <div class="col-3 pt-3">
                <div><h5>Another Links</h5></div>
                <div class="d-flex flex-column">
                    <a href="/#hero" class="text-decoration-none pb-3">Home</a>
                    <a href="/#about" class="text-decoration-none pb-3">About Us</a> 
                    <a href="/#services" class="text-decoration-none pb-3">Services</a>
                    <a href="/#contact" class="text-decoration-none pb-3">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <hr/>
    <div class="text-center ">
        <div>@Copyright <b>My Website</b> All Rights Reserved</div>
        <div>Designed by <span class="text-primary">Fredrick<span></div>
    </div>
</footer>
</body>
</html>