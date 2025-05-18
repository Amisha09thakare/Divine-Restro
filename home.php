<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hero Carousel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
     <script>
        AOS.init();
    </script>
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
    }
    /* corosuel  */
 
    .hero {
      position: relative;
      width: 100%;
      height: 100vh;
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: space-between;
      color: white;
      transition: background-image 0.5s ease-in-out;
    }

    .hero-overlay {
      background: rgba(0, 0, 0, 0.5);
      padding: 50px;
      max-width: 50%;
    }

    .hero-overlay h1 {
      font-size: 3rem;
      font-weight: bold;
    }

    .hero-overlay p {
      font-size: 1.2rem;
      margin-top: 10px;
    }

    .hero-overlay button {
      margin-top: 20px;
      padding: 10px 20px;
      font-size: 1rem;
      border: none;
      background-color: white;
      color: black;
      border-radius: 5px;
      cursor: pointer;
    }

    .hero-controls {
      position: absolute;
      right: 30px;
      top: 50%;
      transform: translateY(-50%);
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .hero-controls button {
      background: rgba(255, 255, 255, 0.8);
      border: none;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      font-size: 18px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .hero-controls button:hover {
      background: rgba(255, 255, 255, 1);
    }

    @media (max-width: 768px) {
      .hero-overlay {
        max-width: 100%;
        padding: 20px;
      }

      .hero-overlay h1 {
        font-size: 2rem;
      }

      .hero-controls {
        right: 15px;
      }
    }
    /* corosuel end */

    /* staters start */
    .container-off {
            background-color: white ;
            /* Replace with your desired background color */
            height: 20%;
            margin-top: 10%;
            margin-left: 5%;
            margin-right: 5%;
            display: flex;
            text-align: center;
            justify-content: center;
            flex-direction: column;
            /* Align items vertically */
        }

        .d-flex {
            height: 1px;
            /* Fixed height */
            display: flex;
            align-items: center;
        }

        .d-flex .p-2 {
            flex: 1;
            /* Equal width for all child elements */
            text-align: center;
            position: relative;
            /* Needed for absolute positioning */
        }

        .d-flex .p-2 img {
            width: 130px;
            /* Adjust size as needed */
            height: 60px;
            /* Maintain aspect ratio */
            border-radius: 30%;
            /* Rounded image */

            /* Space below the image */
            transition: transform 0.3s ease;
            /* Smooth transition for scaling */
        }

        .d-flex .p-2 .overlay {
            position: absolute;
            top: 20%;
            right: 15%;
            left: 6%;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Semi-transparent black overlay */
            color: #fff;
            /* Text color */
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            /* Smooth transition for opacity */
            border-radius: 100%;
            /* Match the image border radius */
        }

        .d-flex .p-2:hover .overlay {
            opacity: 1;
            /* Show overlay on hover */
        }

        .d-flex .p-2 .overlay p {
            text-align: center;
            padding: 10px;
        }
      /* starters end */
      /* why us */
       /* Basic styles for the Why Choose Us section */
        .why-choose-us {
            background-color: #f9f9f9;
            padding: 40px 0;
        }

        .container-why {

            margin-top: 25%;
            margin-left: 12%;
            margin-right: 10%;
            text-align: center;
        }

        h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .features {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .feature {
            display: flex;
            flex-direction: row-reverse;
            /* Images on the right, paragraphs on the left */
            align-items: center;
            flex: 1 1 calc(50% - 40px);
            /* Two columns with 20px margin on each side */
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .feature img {
            width:150px;
            height: 150px;
            border-radius: 8px;
            margin-left: 20px;
            /* Add space between image and paragraph */
        }

        .feature p {
            font-size: 18px;
            color: #555;
            text-align: left;
            /* Align paragraph text to the left */
            margin-right: 20px;
            /* Add space between paragraph and image */
        }

        @media (max-width: 768px) {
            .feature {
                flex: 1 1 100%;
                /* Full width on smaller screens */
            }
        }
      /* why us end  */


      /* upcoming event */
         
        .container-slid {
            margin-left: 5%;
            margin-right: 5%;
            margin-top:5%;
            background: #ddd;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }
        

        .box {
            width: 250px;
            height: 350px;
            margin: 10px;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            transition: transform 0.3s ease;
            /* Smooth transition for scale */
        }

        .box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
            /* Smooth transition for scale */
        }

        .box:hover {
            transform: scale(1.05);
            /* Scale up on hover */
        }

        .box:hover img {
            transform: scale(1.1);
            /* Scale up the image more than the box */
        }

         .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Semi-transparent black overlay */
            color: #fff;
            /* Text color */
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            /* Smooth transition for opacity */
            border-radius: 10px;
            /* Match the box border radius */
        }

        .box:hover .overlay {
            opacity: 1;
            /* Show overlay on hover */
        }
        /* upcoming event  end*/

         /* our special end */
        .dreamy-luxe {
    background: linear-gradient(135deg, #fefcfb, #f5f3f0);
    padding: 80px 0;
  }

  .speciality-title {
    text-align: center;
    font-size: 2.8rem;
    font-weight: 600;
    color: #1a1a1a;
    margin-bottom: 60px;
    font-family: 'Poppins', sans-serif;
  }

  .speciality-card {
    background: #f9f9f9;
    border-radius: 20px;
    padding: 20px;
    margin: 10px;
    box-shadow: 8px 8px 16px #dcdcdc, -8px -8px 16px #ffffff;
    transition: all 0.3s ease;
  }

  .speciality-card:hover {
    transform: translateY(-8px);
    box-shadow: 6px 6px 12px #ccc, -6px -6px 12px #fff;
  }

  .img-wrapper {
    overflow: hidden;
    border-radius: 15px;
  }

  .img-wrapper img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    border-radius: 15px;
    transition: transform 0.3s ease;
  }

  .speciality-card:hover img {
    transform: scale(1.05);
  }

  .card-info {
    padding-top: 20px;
    text-align: center;
  }

  .card-info h5 {
    font-size: 1.3rem;
    color: #333;
    margin-bottom: 10px;
    font-family: 'Poppins', sans-serif;
  }

  .card-info p {
    font-size: 0.95rem;
    color: #666;
  }

  .rating {
    font-size: 1.2rem;
    color: #f1c40f;
    margin: 10px 0;
  }

  .btn-special {
    background: #ffd6d6;
    border: none;
    padding: 8px 25px;
    border-radius: 50px;
    color: #333;
    font-weight: 600;
    font-family: 'Poppins', sans-serif;
    transition: all 0.3s ease;
  }

  .btn-special:hover {
    background: #eabfbf;
    color: #000;
  }

  .carousel-btn {
    background: #fff;
    border: 2px solid #ccc;
    color: #333;
    font-size: 22px;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    transition: all 0.3s ease;
  }

  .carousel-btn:hover {
    background: #e0e0e0;
  }
 /* our special end */
         /* about divine */

        .about-us-section {
            background: #ffffff;
        }

        .section-title {
            color: #d35400;
            /* warm orange accent */
            font-size: 1.2rem;
        }

        .about-us-section h2 {
            font-size: 2rem;
            color: #800020;
            /* rich red wine shade for heading */
        }

        .about-us-section p {
            font-size: 1rem;
            color: #495057;
        }

        .about-us-section img {
            width: 100%;
            height: auto;
            aspect-ratio: 1 / 1;
            object-fit: cover;
            border-radius: 0.5rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .btn-danger {
            background-color: #b02a30;
            /* same rich red for theme */
            border: none;
        }

        .btn-danger:hover {
            background-color: #922024;
        }
        /* about divine end */
        .container-fav {
            margin-top: 2%;
            margin-left: 8%;
        }

        
  </style>
</head>
<?php
include "include/nav.php";
?>

<body>

<div class="hero" id="hero">
  <div class="hero-overlay">
    <h1 id="hero-title">"TASTE THE ART OF FLAVOR"</h1>
    <p id="hero-desc">Indulge in sophisticated dining in a relaxed ambiance!</p>
    <button>See More</button>
  </div>
  <div class="hero-controls">
    <button onclick="prevSlide()">&#8592;</button>
    <button onclick="nextSlide()">&#8594;</button>
  </div>
</div>

<br>
 <section class="about-us-section py-5">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left Image -->
                <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-right">
                    <img src="image/restro.jpg" class="img-fluid" alt="restaurant interior left">
                </div>

                <!-- Center Text -->
                <div class="col-md-4 text-center" data-aos="fade-up">
                    <p class="section-title fw-bold mb-2">WHO ARE WE</p>
                    <h2 class="fw-bold mb-3">Divine – Not Just a Meal, It’s a Mood!</h2>
                    <p>
                        Step into Divine, where every dish tells a story of love, purity, and soulful indulgence. 
                    </p>
                    <a href="#visit" class="btn btn-danger mt-3 px-4 py-2">VISIT OUR RESTAURANT</a>
                </div>

                <!-- Right Image -->
                <div class="col-md-4" data-aos="fade-left">
                    <img src="image/right.png" class="img-fluid" alt="restaurant interior right">
                </div>
            </div>
        </div>
    </section>
<br>
<br>

        
    <br>



<div class="container-off">
        <p>"Elevate your dining experience with our enticing array of culinary delights."
        </p>
        <h3 style="margin-bottom: 30% ; font-size: xx-large; color:black;">We Offer Top Notchs</h3>

        <div class="d-flex bg-light">
            <div class="p-2 ">
                <p style="font-size: large;">"Start your meal with a symphony of flavors, perfectly crafted in every
                    starter."</p>
                <img class="rounded-circle" style="height: 300px ; width: 400px;" src="image/ravili.jpeg" alt="Image 3">
                <div style="height: 300px ; width: 400px;" class="overlay">
                    <P>STARTERS</p>
                </div>
            </div>

            <div class="p-2  align-self-end">
                <p style="font-size: large;">"Dive into a world of main courses that marry tradition with innovation,
                    creating unforgettable flavors."</p>
                <img class="rounded-circle" style="height: 300px ; width: 400px;" src="image/INDIA.jpg" alt="Image 2">
                <div style="height: 300px ; width: 400px;" class="overlay">
                    <p>MAIN COURSES</p>
                </div>
            </div>
            <div class="p-2 ">
                <p style="font-size: large;">"Sip on carefully curated beverages that enhance your dining experience sip
                    by sip."</p>
                <img class="rounded-circle" style="height: 300px ; width: 400px;" src="image/drink.jpeg" alt="Image 3">
                <div style="height: 300px ; width: 400px;" class="overlay">
                    <P>BEVERAGES</p>
                </div>
            </div>
        </div>
    </div>
    <br>
  <div class="why-choose-us">
        <div class="container-why">
            <h2>Why Choose Us?</h2>
            <div class="features">
                <div class="feature">
                    <img src="image/why1.png" alt="Feature 1">
                    <div>
                        <center>
                            <h3 style="font-weight: bolder;">Quality Food</h3>
                            <br>
                            <p style="text-align: center;">Experience artisanal cuisine crafted with the freshest local
                                ingredients, ensuring every
                                bite is a taste of excellence.</p>
                        </center>
                    </div>
                </div>
                <div class="feature">
                    <img src="image/wh2.png" alt="Feature 2">
                    <div>
                        <center>
                            <h3 style="font-weight: bolder;">Classical Taste</h3>
                            <br>
                            <p style="text-align: center;">Savor the timeless flavors of our dishes, meticulously
                                prepared to honor traditional
                                culinary excellence.</p>
                        </center>
                    </div>
                </div>
                <div class="feature">
                    <img src="image/wh3.png" alt="Feature 3">
                    <div>
                        <center>
                            <h3 style="font-weight: bolder;">Skilled Cheif</h3>
                            <br>
                            <p style="text-align: center;">Our kitchen is led by skilled chefs dedicated to creating
                                culinary masterpieces with
                                passion and precision.</p>
                        </center>
                    </div>
                </div>
                <div class="feature">
                    <img src="image/wh4.png" alt="Feature 4">
                    <div>
                        <center>
                            <h3 style="font-weight: bolder;">Best Services</h3>
                            <br>
                            <p style="text-align: center;">Enjoy impeccable service that exceeds expectations, ensuring
                                every visit is a memorable
                                dining experience.

                            </p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <section class="speciality-section dreamy-luxe">
  <div class="container">
    <h2 class="speciality-title">Our Speciality</h2>
    <div id="specialityCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- First Slide -->
        <div class="carousel-item active">
          <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4">
              <div class="speciality-card">
                <div class="img-wrapper">
                  <img src="image/s1.jpeg" alt="Pizza" />
                </div>
                <div class="card-info">
                  <h5>Wood-Fired Pizza</h5>
                  <p>Classic Italian taste from our brick oven.</p>
                  <div class="rating">★★★★★</div>
                  <button class="btn-special">Order Now</button>
                </div>
              </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4">
              <div class="speciality-card">
                <div class="img-wrapper">
                  <img src="image/s2.webp" alt="Burger" />
                </div>
                <div class="card-info">
                  <h5>Juicy Burger</h5>
                  <p>Grilled to perfection with fresh ingredients.</p>
                  <div class="rating">★★★★☆</div>
                  <button class="btn-special">Order Now</button>
                </div>
              </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4">
              <div class="speciality-card">
                <div class="img-wrapper">
                  <img src="image/s3.jpg" alt="Pasta" />
                </div>
                <div class="card-info">
                  <h5>Creamy Pasta</h5>
                  <p>Rich and cheesy pasta cooked with love.</p>
                  <div class="rating">★★★★★</div>
                  <button class="btn-special">Order Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Second Slide -->
        <div class="carousel-item">
          <div class="row">
            <!-- Card 4 -->
            <div class="col-md-4">
              <div class="speciality-card">
                <div class="img-wrapper">
                  <img src="image/s4.webp" alt="Sushi" />
                </div>
                <div class="card-info">
                  <h5>Fresh Sushi</h5>
                  <p>Experience authentic Japanese flavors.</p>
                  <div class="rating">★★★★☆</div>
                  <button class="btn-special">Order Now</button>
                </div>
              </div>
            </div>
            <!-- Card 5 -->
            <div class="col-md-4">
              <div class="speciality-card">
                <div class="img-wrapper">
                  <img src="image/s5.jpg" alt="Salad" />
                </div>
                <div class="card-info">
                  <h5>Garden Salad</h5>
                  <p>A healthy mix of fresh greens and veggies.</p>
                  <div class="rating">★★★☆☆</div>
                  <button class="btn-special">Order Now</button>
                </div>
              </div>
            </div>
            <!-- Card 6 -->
            <div class="col-md-4">
              <div class="speciality-card">
                <div class="img-wrapper">
                  <img src="image/s6.jpg" alt="Dessert" />
                </div>
                <div class="card-info">
                  <h5>Delightful Dessert</h5>
                  <p>Sweet treats to finish your meal right.</p>
                  <div class="rating">★★★★★</div>
                  <button class="btn-special">Order Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="d-flex justify-content-center mt-4">
        <button class="carousel-btn me-2" type="button" data-bs-target="#specialityCarousel" data-bs-slide="prev">‹</button>
        <button class="carousel-btn" type="button" data-bs-target="#specialityCarousel" data-bs-slide="next">›</button>
      </div>
    </div>
  </div>
</section>
    <br>
          <center><h2>Cheers & Celebrations</h2></center>
          <center><p>"Experience the divine fusion of dining and entertainment with our
            exclusive weekly party events!"
        </p></center>
        <div class="container-slid">
            <h3 style="font-weight: bolder;">UPCOMING EVENTS</h3>
            <div class="box">
                <img src="image/wine.jpg" alt="Event Image">
                <div style="font-weight: bolder;" class="overlay">Wine Tasting Evening</div>
            </div>
            <div class="box">
                <img src="image/sunday bunch.jpeg" alt="Event Image">
                <div style="font-weight: bolder;" class="overlay">Sunday Brunch</div>
            </div>
            <div class="box">
                <img src="image/Live-music.webp" alt="Event Image">
                <div style="font-weight: bolder;" class="overlay">Live Music Night</div>
            </div>
            <div class="box">
                <img src="image/happy hour.jpg" alt="Event Image">
                <div style="font-weight: bolder;" class="overlay">Family Fun Day</div>
            </div>
            <div class="box">
                <img src="image/cooking workshop.jpeg" alt="Event Image">
                <div style="font-weight: bolder;" class="overlay">Chef's Special Dinner</div>
            </div>
        </div>
    </div>
    <br>
   
     <?php
        include "include/footer.php";
        ?>


<script>
  const slides = [
    {
      image: 'image/fine.avif',
      title: '"TASTE THE ART OF FLAVOR"',
      desc: 'Indulge in sophisticated dining in a relaxed ambiance!',
    },
    {
      image: 'image/g2.jpg',
      title: '"WHERE FLAVOR MEETS ELEGANCE"',
      desc: 'Experience culinary mastery with every dish!',
    },
    {
      image: 'image/g4.avif',
      title: '"A CULINARY JOURNEY AWAITS"',
      desc: 'Discover a menu inspired by global flavors!',
    },
    {
      image: 'image/g2.avif',
      title: '"CRAFTED WITH PASSION"',
      desc: 'Dishes prepared with love and attention!',
    },
  ];

  let currentSlide = 0;

  function updateSlide() {
    const hero = document.getElementById('hero');
    const title = document.getElementById('hero-title');
    const desc = document.getElementById('hero-desc');

    hero.style.backgroundImage = `url(${slides[currentSlide].image})`;
    title.textContent = slides[currentSlide].title;
    desc.textContent = slides[currentSlide].desc;
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    updateSlide();
  }

  function prevSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    updateSlide();
  }

  // Initial render
  updateSlide();
</script>
<!-- JS -->
    
    <script>
        AOS.init();
    </script>



</body>
</html>
