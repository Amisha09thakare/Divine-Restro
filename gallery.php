<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurant Gallery</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }

        .gallery-header {
            text-align: center;
            padding: 60px 20px 20px;
        }

        .gallery-header h1 {
            font-size: 3rem;
            font-weight: bold;
            color: #333;
        }

        .gallery-header p {
            font-size: 1.2rem;
            color: #666;
        }

        .gallery {
            padding: 40px 0;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: 0.4s;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
            filter: brightness(70%);
        }

        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            padding: 15px;
            text-align: center;
            opacity: 0;
            transition: opacity 0.4s ease;
            font-size: 1.2rem;
            font-weight: 600;
        }

        .gallery-item:hover .overlay {
            opacity: 1;
        }

        .modal-img {
            width: 100%;
        }

        footer {
            text-align: center;
            padding: 30px 10px;
            background: #343a40;
            color: #fff;
            margin-top: 40px;
        }
    </style>
</head>
 <?php
        include "include/nav.php";
        ?>

<body>
   

    <!-- Header -->
    <div class="gallery-header">
        <h1>Our Delicious Moments</h1>
        <p>Take a look at our specialties and vibrant atmosphere</p>
    </div>

    <!-- Gallery -->
    <div class="container gallery">
        <div class="row g-4">
            <!-- Gallery Item 1 -->
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#imageModal"
                    onclick="showModal('image/b1.jpg')">
                    <img src="image/b1.jpg" alt="Dish 1">
                    <div class="overlay">Raj Kachori</div>
                </div>
            </div>
            <!-- Gallery Item 2 -->
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#imageModal"
                    onclick="showModal('image/g1.jpg')">
                    <img src="image/g1.jpg" alt="Dish 2">
                    <div class="overlay">Chilli Paneer</div>
                </div>
            </div>
            <!-- Gallery Item 3 -->
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#imageModal"
                   onclick="showModal('image/b3.jpg')">
                    <img src="image/b3.jpg" alt="Dish 3">
                    <div class="overlay">Veggie Pizza</div>
                </div>
            </div>
            <!-- Gallery Item 4 -->
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#imageModal"
                     onclick="showModal('image/b4.jpg')">
                    <img src="image/b4.jpg" alt="Dish 4">
                    <div class="overlay">Chicken Sloppy Joe (Indian Style)</div>
                </div>
            </div>
            <!-- Gallery Item 5 -->
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#imageModal"
                    onclick="showModal('image/mm2.jpg')">
                    <img src="image/mm2.jpg" alt="Dish 5">
                    <div class="overlay">Paneer Tikka Sub Sandwich </div>
                </div>
            </div>
            <!-- Gallery Item 6 -->
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#imageModal"
                    onclick="showModal('image/b6.jpg')">
                    <img src="image/b6.jpg" alt="Dish 6">
                    <div class="overlay">Tacos (Mexican Style)</div>
                </div>
            </div>
             <!-- Gallery Item 7 -->
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#imageModal"
                     onclick="showModal('image/s3.jpg')">
                    <img src="image/s3.jpg" alt="Dish 7">
                    <div class="overlay">Pasta Arrabbiata</div>
                </div>
            </div>
            <!-- Gallery Item 8 -->
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#imageModal"
                    onclick="showModal('image/start.jpeg')">
                    <img src="image/start.jpeg" alt="Dish 8">
                    <div class="overlay">Hariyali Paneer Tikka</div>
                </div>
            </div>
            <!-- Gallery Item 9-->
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#imageModal"
                    onclick="showModal('image/bb6.png')">
                    <img src="image/bb6.png" alt="Dish 9">
                    <div class="overlay">Chicken Tandoori/Tikka</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Image Preview -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="" class="modal-img" id="modal-image" alt="Modal Image">
                </div>
            </div>
        </div>
    </div>

    <?php
        include "include/footer.php";
        ?>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // This function ensures the modal image is set when clicked
        function showModal(src) {
            const modalImage = document.getElementById('modal-image');
            modalImage.src = src;
            const myModal = new bootstrap.Modal(document.getElementById('imageModal'));
            myModal.show();
        }
    </script>

    
</body>

</html>