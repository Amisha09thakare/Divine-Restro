<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divine Restro | Welcome</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins&display=swap"
        rel="stylesheet">
    
    <!-- Bootstrap Icons CSS (for the icons) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        /* Global styles */
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
            background-color: #fff8f8;
            color: #4b1d1d;
        }

        /* About Section */
        .about-section {
            background: url('https://images.unsplash.com/photo-1600891964599-f61ba0e24092?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80') no-repeat center center/cover;
            height: 70vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            padding: 50px 0;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .about-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 20px;
            animation: fadeInUp 2s ease forwards;
            opacity: 0;
            transform: translateY(50px);
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 3.5rem;
            margin-bottom: 20px;
        }

        .lead {
            font-size: 1.3rem;
            margin-bottom: 30px;
            color: #ddd;
        }

        .btn-explore {
            padding: 12px 30px;
            font-size: 1rem;
            border-radius: 30px;
            background-color: hsl(1, 67%, 35%);
            border: none;
            color: white;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .btn-explore:hover {
            background-color: #bc8a5f;
            color: white;
        }

        /* Learn More Section */
        .learnmore-section {
            display: flex;
            flex-wrap: wrap;
            gap: 50px;
            padding: 80px 20px;
            align-items: center;
            justify-content: center;
        }

        .about-text {
            flex: 1;
            min-width: 300px;
            max-width: 500px;
        }

        .about-text h2 {
            color: #800000;
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .about-text p {
            font-size: 1.2rem;
            color: #5c2c2c;
            margin-bottom: 20px;
        }

        blockquote {
            font-style: italic;
            background: #fff;
            border-left: 5px solid #800000;
            margin: 20px 0;
            padding: 20px;
            color: #4b1d1d;
        }

        .btn-join {
            background-color: #800000;
            color: white;
            border: none;
            padding: 14px 30px;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: background 0.3s ease;
            margin-top: 20px;
        }

        .btn-join:hover {
            background-color: #5c2c2c;
        }

        .about-images {
            flex: 1;
            min-width: 300px;
            max-width: 600px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .about-images img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .about-images img:hover {
            transform: scale(1.05);
        }

        body,
        html {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            background-color: #fff8f0;
        }

        h1,
        h2,
        h5 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
        }

        p {
            font-size: 1.1rem;
        }

        /* Button Styling */
        .btn-maroon {
            background: linear-gradient(45deg, #800000, #a52a2a);
            color: #fff;
            border: none;
            padding: 12px 36px;
            border-radius: 50px;
            font-weight: bold;
            font-size: 1.1rem;
            transition: all 0.4s ease;
        }

        .btn-maroon:hover {
            background: linear-gradient(45deg, #a52a2a, #800000);
            transform: scale(1.08);
            box-shadow: 0 4px 15px rgba(128, 0, 0, 0.3);
        }

        /* Sections */
        section {
            padding: 80px 20px;
        }

        .essence-section {
            background-color: #fff;
            text-align: center;
        }

        .essence-section h1 {
            color: #800000;
        }

        .essence-section p {
            color: #555;
            max-width: 720px;
            margin: auto;
        }

        /* Soul Section */
        .soul-section {
            background: #fefefe;
            text-align: center;
        }

        .soul-section h2 {
            color: #800000;
        }

        .soul-section .card {
            background: #ffffff;
            color: #5a2d2d;
            border-radius: 20px;
            border: 1px solid #ddd;
            transition: all 0.3s ease;
            padding: 30px 20px;
            height: 100%;
        }

        .soul-section .card i {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #800000;
        }

        .soul-section .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 20px rgba(128, 0, 0, 0.2);
        }

        /* Impact Section Styles */
        .impact-section {
            position: relative;
            background: url('https://images.unsplash.com/photo-1525610553991-2bede1a236e2?auto=format&fit=crop&w=1400&q=80') no-repeat center center/cover;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .impact-section .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            /* Black transparent overlay */
            z-index: 1;
        }

        .impact-section .container {
            position: relative;
            z-index: 2;
            color: #ffffff;
            /* White text */
        }

        .impact-section h2 {
            color: #ffffff;
            margin-bottom: 40px;
        }

        /* Impact Section Cards Styling */
        .impact-section .card {
            background: rgba(0, 0, 0, 0.7);
            /* Dark black for contrast */
            border-radius: 20px;
            padding: 30px 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            /* Light border for sharp contrast */
            color: #ffffff;
            transition: all 0.3s ease;
        }

        .impact-section .card i {
            font-size: 3rem;
            margin-bottom: 15px;
            color: #ffd700;
            /* Golden icons */
        }

        .impact-section .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 20px rgba(255, 255, 255, 0.3);
            /* Subtle glow effect */
        }
        .testimonial-section {
            background-image: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=1600&q=80');
            background-size: cover;
            background-position: center;
            padding: 5rem 0;
            position: relative;
            filter: brightness(80%) contrast(120%);
            /* Make the image slightly brighter */
        }

        .testimonial-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
            /* Darker overlay for contrast */
            z-index: 0;
        }

        .overlay {
            position: relative;
            z-index: 1;
            background-color: rgba(0, 0, 0, 0.1);
            /* Lighter black overlay */
            padding: 3rem;
            border-radius: 20px;
        }

        .testimonial-box {
            position: relative;
            background-color: #fff;
            border-radius: 20px;
            padding: 2rem;
            margin: 1rem;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .testimonial-box::before {
            content: "";
            position: absolute;
            top: -40px;
            right: -40px;
            width: 140px;
            height: 140px;
            background-color: #fff;
            border-radius: 50%;
            z-index: 0;
        }

        .testimonial-box .content {
            position: relative;
            z-index: 1;
        }

        .testimonial-img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            margin-bottom: 1rem;
        }

        .testimonial-name {
            font-weight: 700;
            color: #000;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
            /* Adding text shadow for better contrast */
        }

        .testimonial-role {
            font-size: 1.1rem;
            font-weight: bold;
            color: #444;
            margin-bottom: 0.5rem;
        }

        .testimonial-text {
            font-size: 1rem;
            color: #333;
            font-style: italic;
        }

        .testimonial-section h2 {
            color: #fff;
            font-weight: bold;
            font-size: 2rem;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            /* Added text shadow for the title */
        }

        .carousel-indicators {
            margin-top: 2rem;
            position: relative;
        }

        .carousel-indicators [data-bs-target] {
            background-color: #ff9900;
        }

        .carousel-inner {
            padding-bottom: 3rem;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 2.5rem;
            }

            .lead {
                font-size: 1.1rem;
            }

            .about-images {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <?php include "include/nav.php"; ?>

    <!-- About Section -->
    <section class="about-section" id="about">
        <div class="overlay"></div>
        <div class="about-content">
            <h1 class="section-title">Welcome to Divine Restro</h1>
            <p class="lead">
                A place where every flavor tells a story. Step into a world of rich traditions, heartwarming
                hospitality, and exquisite tastes crafted to perfection. Your journey to divine dining begins here.
            </p>
            <a href="#learnmore" class="btn-explore">Explore Our Story</a>
        </div>
    </section>

    <!-- Learn More Section -->
    <div class="container">
        <div class="learnmore-section" id="learnmore">

            <div class="about-text">
                <h2> Divine Restro</h2>
                <p>Every detail at Divine Restro has been meticulously crafted to create an experience that goes beyond
                    just dining. From the elegant decor to the carefully curated dishes, we’ve designed every space with
                    <b>passion</b> and <b>artistry</b> in mind.
                </p>
                <blockquote>
                    "At Divine Restro, every dish is crafted with love, passion, and a bit of magic."
                </blockquote>
                <button class="btn-join">Join us for a meal that tells a story</button>
            </div>

            <div class="about-images">
                <img src="image/vis.jpg" alt="Restaurant Ambiance">
                <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Fine Dining Dish">
            </div>

        </div>
    </div>

    <!-- The Essence We Serve -->
    <section class="essence-section">
        <div class="container animate__animated animate__fadeInDown">
            <h1 class="display-4 mb-4">The Essence We Serve</h1>
            <p class="lead mb-4">Peace. Joy. Togetherness. Divine Restro is not just a place to eat; it’s a place to
                pause,
                smile, and savor life.</p>
            <p>Whether you're sharing a meal with loved ones or finding a quiet moment with yourself, you'll feel at
                home
                here.</p>
            <button class="btn btn-maroon mt-4" onclick="showMessage()">Learn More</button>
        </div>
    </section>

   

    <!-- Our Impact Beyond the Plate -->
    <section class="impact-section">
        <div class="overlay"></div>
        <div class="container animate__animated animate__fadeInRight">
            <h2 class="display-5">🌍 Our Impact Beyond the Plate</h2>
            <div class="row justify-content-center">
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <i class="bi bi-globe"></i>
                        <h5>Global Outreach</h5>
                        <p>We bring flavors from around the world to your table, creating an unforgettable international
                            dining experience.</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <i class="bi bi-recycle"></i>
                        <h5>Sustainability</h5>
                        <p>We are committed to sustainability by sourcing locally, reducing waste, and embracing eco-friendly practices.</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <i class="bi bi-people"></i>
                        <h5>Community Support</h5>
                        <p>Giving back to the community through charity events, food drives, and initiatives that make a
                            difference.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


     <!-- A Place for Every Soul -->
    <section class="soul-section">
        <div class="container animate__animated animate__fadeInLeft">
            <h2 class="display-5 mb-5">A Place for Every Soul</h2>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <i class="bi bi-person-heart"></i>
                        <h5 class="card-title">Families</h5>
                        <p class="card-text">Create lasting memories with your loved ones in an atmosphere of warmth and
                            joy.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <i class="bi bi-chat-square-text"></i>
                        <h5 class="card-title">Foodies</h5>
                        <p class="card-text">Savor the rich flavors that make every bite a delightful experience for
                            food
                            lovers.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <i class="bi bi-eye"></i>
                        <h5 class="card-title">Spiritual Seekers</h5>
                        <p class="card-text">Find peace and tranquility in the atmosphere, perfect for quiet reflection
                            and
                            growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <section class="testimonial-section">
        <div class="container overlay">
            <h2 class="text-center mb-5">What Our Clients Say</h2>

            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row g-4">
                            <div class="col-md-4" data-aos="fade-right">
                                <div class="testimonial-box text-center">
                                    <img src="https://cdn-icons-png.flaticon.com/512/4140/4140048.png"
                                        alt="Client Profile" class="testimonial-img">
                                    <div class="testimonial-name">Ashish Massy</div>
                                    <p class="testimonial-text">"Dining at Divine was an unforgettable experience! The food was absolutely delicious,
                                         and the atmosphere made us feel so welcome. We can't wait to come back!"</p>
                                </div>
                            </div>
                            <div class="col-md-4" data-aos="fade-up">
                                <div class="testimonial-box text-center">
                                    <img src="https://cdn-icons-png.flaticon.com/512/4140/4140051.png"
                                        alt="Client Profile" class="testimonial-img">
                                    <div class="testimonial-name">Mr. Vivan</div>
                                    <p class="testimonial-text">"Every dish at Divine tastes like it’s crafted with love and expertise. From the appetizers to the desserts, everything was simply divine. Highly recommended!"</p>
                                </div>
                            </div>
                            <div class="col-md-4" data-aos="fade-left">
                                <div class="testimonial-box text-center">
                                    <img src="https://cdn-icons-png.flaticon.com/512/4140/4140037.png"
                                        alt="Client Profile" class="testimonial-img">
                                    <div class="testimonial-name">Jaswant Arora</div>
                                    <p class="testimonial-text">"Exceptional service, cozy ambiance, and mouthwatering food — Divine truly lives up to its name. Easily one of the best dining experiences I've had!"</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="testimonial-box text-center">
                                    <img src="https://cdn-icons-png.flaticon.com/512/4140/4140061.png"
                                        alt="Client Profile" class="testimonial-img">
                                    <div class="testimonial-name">Sneha Nair</div>
                                    <p class="testimonial-text">"I celebrated my birthday at Divine, and it was perfect! The staff went above and beyond to make it special, and every guest raved about the food."</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-box text-center">
                                    <img src="https://cdn-icons-png.flaticon.com/512/4140/4140061.png"
                                        alt="Client Profile" class="testimonial-img">
                                    <div class="testimonial-name">Karan L.</div>
                                    <p class="testimonial-text">"The moment you step into Divine, you know you’re somewhere special. Warm smiles, quick service, and food that speaks to your soul. Thank you for an amazing evening!"</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-box text-center">
                                    <img src="https://cdn-icons-png.flaticon.com/512/4140/4140061.png"
                                        alt="Client Profile" class="testimonial-img">
                                    <div class="testimonial-name">Sameer P</div>
                                    <p class="testimonial-text">"Divine has a wonderful menu with something for everyone. Fresh ingredients, creative presentation, and the flavors — wow! Five stars from me."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>
            </div>
        </div>
    </section>
<br>
        <?php include "include/footer.php"; ?>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
