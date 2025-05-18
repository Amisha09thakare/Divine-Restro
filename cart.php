<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Food Item - Restaurant</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: antiquewhite;
    }

    .container {
      max-width: 600px;
      margin: auto;
      padding: 20px;
      background-color:WHITE;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .food-item {
      margin-bottom: 30px;
      padding: 20px;
      border: 1px solid black;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .food-item img {
      max-width: 100%;
      height: 200px;
      width: 500px;
      border-radius: 8px;
      margin-bottom: 10px;
    }

    .delivery-policy {
      display: none;
      padding: 10px;
      background-color: salmon;
      border-radius: 8px;
      margin-top: 10px;
    }

    .price {
      font-size: 24px;
      font-weight: bold;
      margin-top: 10px;
    }

    .btn {
      border-radius: 4px;
      padding: 10px 20px;
      cursor: pointer;
    }

    .btn-buy-now {
      background-color: #4CAF50;
      color: #ffffff;
      border: none;
      margin-right: 10px;
    }

    .btn-buy-now:hover {
      background-color: #45a049;
    }

    .btn-add-more {
      background-color:orange;
      color: #ffffff;
      border: none;
    }

    .btn-add-more:hover {
      background-color: #0069d9;
    }

    .dropdown-menu {
      border-radius: 8px;
    }
    .p{
        justify-content: right;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Food Item</h2>

  <div class="food-item">
    <div class="row align-items-center">
      <div class="col-md-6">
        <img src="cach-nuong-pizza-thumbnail.jpg" alt="Burger">
      </div>
      <div class="col-md-6">
        <h4>Pizza</h4>
        <p>Delicious beef pizza with lettuce, tomato, and cheese.</p>
        <div class="price">$5.99</div>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="deliveryDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            Delivery Charges & Policies
          </button>
          <ul class="dropdown-menu" aria-labelledby="deliveryDropdown">
            <li class="px-3 py-2">
              Delivery Charge: $2.99
            </li>
            <li class="px-3 py-2">
              Free delivery on orders above $20.
            </li>
            <li class="px-3 py-2">
              Delivery within 30 minutes in local area.
            </li>
            <li class="px-3 py-2">
              See <a href="policies.html">restaurant policies</a> for more details.
            </li>
          </ul>
        </div>
       
        <div class="mt-3"><center>
          <button style=" font-weight: bolder;" class="btn btn-buy-now">Buy Now</button>
          <button style=" font-weight: bolder;" class="btn btn-add-more">Add More</button></center>
        </div>
      </div>
    </div>
  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
