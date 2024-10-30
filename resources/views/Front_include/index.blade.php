<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Landing Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                        url("https://www.orielstat.com/blog/wp-content/uploads/2019/04/business-people-working-on-a-plan_Resized-1104W736H.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            align-items: center;
            width: 100%;
        }

        .service-card {
            padding: 2rem;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .service-icon {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: #2974de;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }

        .btn-custom {
            background-color: ;
            border: none;
            padding: 0.8rem 2rem;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #2974de;
            color: white;
        }

        .nav-link {
            color: white;
            margin: 0 1rem;
        }

        .services-section, .testimonials-section, .cta-section {
            padding: 5rem 0;
        }

        .services-section {
            background-color: black;
            color: white;
        }

        .testimonials-section {
            background-color: #f8f9fa;
            color: #212529;
        }

        .cta-section {
            background-color: #fd4a36;
            color: white;
        }

        footer {
            background-color: #212529;
            color: white;
            padding: 2rem 0;
            text-align: center;
        }
    </style>
</head>
<body class="bg-dark text-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-absolute w-100">
        <div class="container">
            <a class="navbar-brand" style="color: #fd4a36; font-size: 30px" href="#">
                <img src="https://ittiq.com/assets/Logo-5f01c355.svg" alt="">
                TEAM
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
					@if (Route::has('login'))
						@auth
							<li class="nav-item"><a class="btn btn-custom ms-3" href="{{ route("dashboarduser.index") }}">Dashboard</a></li>
							<form method="POST" action="{{ route('logout') }}">
								@csrf
								<li class="nav-item"><a class="btn btn-custom ms-3" href="{{ route("logout") }}" 
									onclick="event.preventDefault();
												this.closest('form').submit();">Logout</a></li>
							</form>
						@else
							<li class="nav-item"><a class="btn btn-custom ms-3" href="{{ route("login") }}">Login</a></li>
								@if (Route::has('register'))
								<li class="nav-item"><a class="btn btn-custom" href="{{ route("register") }}">Sign up</a></li>
								@endif
						@endauth
					@endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4">Our app enables employees to track all company activities in real-time for optimized collaboration and productivity.</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <h2 class="text-center mb-4">Our Services</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="service-card">
                        <i class="fas fa-comment-dots service-icon"></i>
                        <h4>Make a post</h4>
                        <p class="text-secondary">Share your insights, experiences, or questions in the field of special education.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service-card">
                        <i class="fas fa-comments service-icon"></i>
                        <h4>Chat with colleagues</h4>
                        <p class="text-secondary">Engage in real-time conversations with your colleagues to share insights.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service-card">
                        <i class="fas fa-tasks service-icon"></i>
                        <h4>Project monitoring</h4>
                        <p class="text-secondary">Stay on schedule, manage resources efficiently, and achieve desired outcomes.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service-card">
                        <i class="fas fa-share-alt service-icon"></i>
                        <h4>Sharing</h4>
                        <p class="text-secondary">Empower each other to grow and succeed together through knowledge exchange.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Your ITTIQ. All rights reserved.</p>
            <p><a href="#" class="text-light">Privacy Policy</a> | <a href="#" class="text-light">Terms of Service</a></p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
