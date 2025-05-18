 <style> /* footer */
        .footer-section {
            background-color: #000;
            color: #eee;
        }

        .footer-logo {
            font-size: 28px;
            font-weight: bold;
            color: #800000;
        }

        .footer-section ul li a {
            color: #ccc;
            text-decoration: none;
        }

        .footer-section ul li a:hover {
            color: #800000;
            text-decoration: underline;
        }

        .social-icons a:hover {
            color:#800000 !important;
        }

        .footer-top-card {
            background: #1c1c1c;
            border-radius: 8px;
            padding: 55px;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
        }

        .footer-top-card img {
          height: 100px;
            width: 150px;
            border-radius: 8px;
            margin-right: 20px;
        }

        .footer-top-card input[type="email"] {
            width: 250px;
            padding: 6px;
            border-radius: 4px;
            border: 1px solid #555;
            background-color: #2c2c2c;
            color: #eee;
        }

        .footer-top-card input[type="email"]::placeholder {
            color: #aaa;
        }

        .footer-top-card button {
            background-color: #800000;
            border: none;
            padding: 6px 12px;
            color: white;
            border-radius: 4px;
        }
         /* footer  end*/
         </style>
         
         <!-- Top Subscription Section -->
    <div class="container" data-aos="fade-up">
        <div class="footer-top-card">
            <div class="d-flex align-items-center">
                <img src="image/p5.jpg" alt="Food">
                <div>
                    <h5 class="mb-1 text-light">Get Our Every Single Menu Notifications</h5>
                    <p class="mb-0 text-muted">Subscribe to get updates directly in your inbox</p>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <input type="email" placeholder="Enter your email">
                <button class="ml-2">Subscribe</button>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="footer-section text-light py-5">
        <div class="container">
            <div class="row">
                <!-- About Section -->
                <div class="col-md-3" data-aos="fade-up">
                    <h4 class="footer-logo mb-3">Divine Restro</h4>
                    <p>A unique destination for irresistible Indian flavors.</p>
                    <div class="social-icons mt-3">
                        <a href="#" class="text-light mx-2"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#" class="text-light mx-2"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="text-light mx-2"><i class="fab fa-twitter fa-lg"></i></a>
                    </div>
                </div>

                <!-- Useful Links -->
                <div class="col-md-3" data-aos="fade-right">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Locations</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="col-md-3" data-aos="fade-up">
                    <h5>Contact Info</h5>
                    <p>Email: hello@divinerestro.com</p>
                    <p>Phone: +91 99999 88888</p>
                    <p>Support: support@divinerestro.com</p>
                </div>

                <!-- Download App -->
                <div class="col-md-3" data-aos="fade-left">
                    <h5>Download App</h5>
                    <a href="#" class="btn btn-maroon btn-sm mb-2 d-block"><i class="fab fa-google-play mr-1"></i>
                        Google Play</a>
                    <a href="#" class="btn btn-maroon btn-sm d-block"><i class="fab fa-apple mr-1"></i> App Store</a>
                </div>
            </div>
            <hr class="bg-white mt-4">
            <p class="text-center small">© 2025 Divine Restro. All rights reserved.</p>
        </div>
    </footer>
        