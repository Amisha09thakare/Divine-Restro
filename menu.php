<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Restaurant Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
            color: #1c1c1c;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        

        .filters {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 30px;
            flex-wrap: wrap;
        }

        .filters .form-control,
        .filters .form-select {
            margin: 10px 10px 0 0;
            width: auto;
            min-width: 200px;
        }

        .category-tabs {
            display: flex;
            justify-content: center;
            margin: 20px 0;
            border-bottom: 2px solid #eee;
            flex-wrap: wrap;
        }

        .category-tabs .nav-item {
            margin-right: 15px;
        }

        .category-tabs .nav-link {
            padding: 10px 20px;
            font-weight: bold;
            color: #333;
            cursor: pointer;
            border-radius: 10px;
            border: 1px solid transparent;
            background-color: #f7f7f7;
        }

        .category-tabs .nav-link.active {
            background-color: #800000;
            /* Changed to red to keep color theme consistent */
            color: #fff;
            border-color: #800000;
            /* Match active state border color */
        }

        .menu-card {
            display: none;
            transition: transform 0.3s ease-in-out;
        }

        .menu-card.show {
            display: block;
        }

        .card {
            width: 380px;
            height: 400px;
            margin: 10%;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            border: none;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .card-title {
            color: #800000;
            /* Matches the theme color */
        }

        .form-control,
        .form-select {
            background-color: #fafafa;
            border-color: #ccc;
            color: #333;
        }

        .no-items-message {
            text-align: center;
            font-size: 1.5rem;
            color: #999;
            display: none;
        }

        .tags span {
            font-size: 0.85rem;
            margin-right: 5px;
            color: #555;
        }

        /* Floating Cart Icon */
        .floating-cart {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #800000;
            /* Red theme */
            color: #fff;
            padding: 15px;
            border-radius: 50%;
            font-size: 20px;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        /* Cart Modal */
        .cart-modal {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: flex-end;
            align-items: center;
            padding: 50px;
            overflow-y: auto;
        }

        .cart-panel {
            background-color: white;
            width: 200px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .cart-panel .cart-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .cart-panel .cart-item button {
            background: none;
            border: none;
            color: #ff0000;
            cursor: pointer;
        }

        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #000;
            margin: 0;
            padding: 0;
        }

        /* Container for sections */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Specials Section */
        .specials-section {
            background-color: #f7f7f7;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
        }

        .specials-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .specials-header h2 {
            font-size: 2rem;
            font-weight: bold;
            color: #800000;
            /* Consistent theme color */
        }

        .specials-header p {
            color: #555;
        }

        .specials-button {
            background-color: #800000;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .specials-button:hover {
            background-color: #660000;
        }

        .specials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }

        .special-card {
            background-color: #fff;
            border: 1px solid #eee;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .special-card img {
            border-radius: 10px;
            width: 100%;
            height: 200px;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .special-card .chef-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: #eee;
            color: #800000;
            /* Matches the theme color */
            font-size: 12px;
            padding: 5px 10px;
            border-radius: 50px;
        }

        .special-card h3 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .special-card p {
            color: #777;
        }
      


       .promo-card {
    border: none;
    border-radius: 20px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .promo-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
  }

  .promo-card .card-title {
    font-size: 1.4rem;
    font-weight: 600;
  }

  .promo-card .card-text {
    font-size: 1rem;
    margin-bottom: 0.5rem;
  }

  .promo-card .coupon-code {
    background-color: #8B0000;
    color: white;
    display: inline-block;
    padding: 8px 16px;
    border-radius: 8px;
    font-weight: bold;
    font-size: 1.1rem;
  }

  .container h2 {
    font-size: 2rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 2rem;
    position: relative;
  }

  .container h2::after {
    content: "";
    background: linear-gradient(90deg, #ff7a18, #af002d 70%);
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    border-radius: 2px;
  }
  .promo-card.happy-hour {
  height: 170px;
  width: 90%;
}
.promo-card.coupon {
  height: 170px;
  width: 90%;
}


  .promo-card.spring {
    background: linear-gradient(135deg, #e0c3fc 0%, #8ec5fc 100%);
    color: #3b3b3b;
  }
   .promo-card.happy-hour{
    background: linear-gradient(135deg, #ffe259 0%, #ffa751 100%);
    color: #5c3d00;
  }


  .promo-card.coupon {
    background: linear-gradient(135deg, #fddb92 0%, #d1fdff 100%);
    color: #2f2f2f;
  }
    </style>
</head>
<?php
include "include/nav.php";
?>

<body>
     <section id="video-section" class="position-relative">
        <video autoplay muted loop class="w-100">
            <source src="image/ami.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

    </section>

    

    <!-- Filter & Search Row -->
    <div class="container filters">
        <div class="d-flex align-items-center gap-3 flex-wrap">
            <select class="form-select" id="typeFilter">
                <option value="">All Types</option>
                <option value="veg">Vegetarian</option>
                <option value="non-veg">Non-Vegetarian</option>
                <option value="vegan">Vegan</option>
            </select>
            <select class="form-select" id="priceFilter">
                <option value="">All Prices</option>
                <option value="low">Below ₹200</option>
                <option value="mid">₹200 - ₹500</option>
                <option value="high">Above ₹500</option>
            </select>
        </div>
        <input type="text" class="form-control" id="searchInput" placeholder="Search dishes...">
    </div>

    <!-- Category Tabs -->
    <div class="container category-tabs nav nav-tabs" id="categoryTabs">
        <div class="nav-item">
            <div class="nav-link active" data-category="starters">Starters</div>
        </div>
        <div class="nav-item">
            <div class="nav-link" data-category="main">Main Course</div>
        </div>
        <div class="nav-item">
            <div class="nav-link" data-category="beverages">Beverages</div>
        </div>
        <div class="nav-item">
            <div class="nav-link" data-category="desserts">Desserts</div>
        </div>
    </div>

    <!-- Food Cards Grid Placeholder -->
    <div class="container">
        <div class="row" id="menuGrid">
            <!-- JS will insert cards here -->
        </div>
        <div class="no-items-message" id="noItemsMsg">No items found for this filter.</div>
    </div>

    <!-- Floating Cart Icon -->
    <div class="floating-cart" id="floatingCart">🛒</div>

    <!-- Cart Modal -->
    <div class="cart-modal" id="cartModal">
        <div class="cart-panel">
            <h5>Cart</h5>
            <div id="cartItems"></div>
            <div id="totalPrice">Total: ₹0</div>
            <button class="btn btn-danger" id="closeCart">Close</button>
        </div>
    </div>

    
   

    <section class="container specials-section">
        <div class="specials-header">
            <div>
                <h2>🍽️ Today's Specials</h2>
                <p>Fresh from the kitchen – handpicked for you!</p>
            </div>
            <button class="specials-button">View Full Menu</button>
        </div>

        <div class="specials-grid">
            <div class="special-card">
                <span class="chef-badge">👨‍🍳 Chef's Pick</span>
                <img src="image/th25.jpg" alt="Pasta">
                <h3>Truffle Alfredo Pasta</h3>
                <p>Rich & creamy with wild mushrooms and herbs.</p>
            </div>

            <div class="special-card">
                <img src="image/th26.jpg" alt="Steak">
                <h3>Grilled Peppercorn Steak</h3>
                <p>Juicy sirloin with a bold peppercorn glaze.</p>
            </div>

            <div class="special-card">
                <span class="chef-badge">👨‍🍳 Chef's Pick</span>
                <img src="image/th27.jpeg" alt="Dessert">
                <h3>Molten Lava Cake</h3>
                <p>Warm chocolate center with a scoop of vanilla ice cream.</p>
            </div>
            <div class="special-card">
                <span class="chef-badge">👨‍🍳 Chef's Pick</span>
                <img src="image/th28.jpeg" alt="Dessert">
                <h3>Truffle Infused Lobster Risotto</h3>
                <p>"Its creamy lobster and truffle blend creates a luxurious, unforgettable risotto."</p>
            </div>
        </div>
    </section>

<br>
 <div class="container my-5">
  <h2 class="text-center">🎉 Promotions & Discounts</h2>

  <div class="row g-4">
    <!-- Spring Special -->
    <div class="col-md-4">
      <div class="card promo-card spring h-80">
        <div class="card-body">
          <h5 class="card-title">🌸 Spring Special</h5>
          <p class="card-text">Enjoy 20% off on all smoothies this Spring season!</p>
          <p class="text-muted">Valid till: <strong>May 30</strong></p>
        </div>
      </div>
    </div>

    <!-- Happy Hour -->
    <div class="col-md-4">
      <div class="card promo-card happy-hour ">
        <div class="card-body">
          <h5 class="card-title">⏰ Happy Hour</h5>
          <p class="card-text">Get 1+1 free on beverages from 4 PM - 6 PM daily!</p>
<p class="card-text fw-bold">Applicable on coffee, tea, smoothies & mocktails.</p>
        </div>
      </div>
    </div>

    <!-- Use Coupon -->
    <div class="col-md-4">
      <div class="card promo-card coupon h-70">
        <div class="card-body">
          <h5 class="card-title">🎁 Use Coupon</h5>
          <p class="card-text">Apply the code below at checkout and get 15% off your order!</p>
          <p class="coupon-code">SAVE15</p>
        </div>
      </div>
    </div>
  </div>
</div>


    
   
    <br>

    <section class="container reservation-section" style="background-color: #f9f9f9; color: #000; padding: 60px 20px;">
        <h2 style="text-align: center; color: #800000; font-size: 2.5rem; margin-bottom: 10px;">Make a Reservation</h2>
        <p style="text-align: center; font-size: 1.1rem; color: #555; margin-bottom: 40px;">Reserve your table in
            advance
            for a flawless dining experience.</p>

        <div
            style="background-color: #fff; max-width: 720px; margin: 0 auto; padding: 40px 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
            <form class="reservation-form" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <input type="text" placeholder="Full Name" required
                    style="padding: 10px; border: 1px solid #ccc; border-radius: 6px;" />
                <input type="email" placeholder="Email Address" required
                    style="padding: 10px; border: 1px solid #ccc; border-radius: 6px;" />
                <input type="tel" placeholder="Phone Number" required
                    style="padding: 10px; border: 1px solid #ccc; border-radius: 6px;" />
                <select required style="padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
                    <option value="">Number of Guests</option>
                    <option>1 Person</option>
                    <option>2 People</option>
                    <option>3 People</option>
                    <option>4+ People</option>
                </select>
                <input type="date" required style="padding: 10px; border: 1px solid #ccc; border-radius: 6px;" />
                <input type="time" required style="padding: 10px; border: 1px solid #ccc; border-radius: 6px;" />
                <textarea rows="4" placeholder="Any special requests? (Optional)"
                    style="padding: 10px; border: 1px solid #ccc; border-radius: 6px; grid-column: 1 / -1;"></textarea>
                <button type="submit"
                    style="padding: 12px 20px; background-color: #800000; color: white; border: none; border-radius: 6px; cursor: pointer; grid-column: 1 / -1;">Reserve
                    Now</button>
            </form>
        </div>
    </section>
   


    <script>
    const categoryTabs = document.querySelectorAll('[data-category]');
    const menuGrid = document.getElementById('menuGrid');
    const searchInput = document.getElementById('searchInput');
    const typeFilter = document.getElementById('typeFilter');
    const priceFilter = document.getElementById('priceFilter');
    const noItemsMsg = document.getElementById('noItemsMsg');
    const cartModal = document.getElementById('cartModal');
    const cartItemsContainer = document.getElementById('cartItems');
    const totalPriceElem = document.getElementById('totalPrice');
    const floatingCart = document.getElementById('floatingCart');
    const closeCartBtn = document.getElementById('closeCart');
    const cart = [];

    const dishes = [
        { name: "Spring Rolls", category: "starters", type: "veg", price: 150, image: "image/th1.jpg", desc: "Crispy rolls with veg filling.", tags: ["🌶️ Spicy", "✅ Available"] },
        { name: "Chicken Tikka", category: "starters", type: "non-veg", price: 250, image: "image/th2.jpg", desc: "Marinated grilled chicken.", tags: ["⭐ Bestseller"] },
        { name: "Paneer Tikka", category: "starters", type: "veg", price: 220, image: "image/th3.jpeg", desc: "Spiced paneer cubes grilled.", tags: ["✅ Available"] },
        { name: "Grilled Sandwich", category: "starters", type: "vegan", price: 180, image: "image/th4.jpg", desc: "Toasted sandwich delight.", tags: [] },
        { name: "Manchurian Balls", category: "starters", type: "veg", price: 200, image: "image/th5.jpg", desc: "Saucy and crispy.", tags: ["🌶️ Spicy"] },
        { name: "Fish Fingers", category: "starters", type: "non-veg", price: 270, image: "image/th6.jpg", desc: "Breaded fish delight.", tags: [] },

        { name: "Butter Chicken", category: "main", type: "non-veg", price: 320, image: "image/th7.jpg", desc: "Creamy & spicy curry.", tags: ["⭐ Bestseller"] },
        { name: "Veg Biryani", category: "main", type: "veg", price: 210, image: "image/th8.jpg", desc: "Fragrant rice & veggies.", tags: [] },
        { name: "Palak Paneer", category: "main", type: "veg", price: 240, image: "image/th9.jpg", desc: "Spinach & cottage cheese.", tags: [] },
        { name: "Chole Bhature", category: "main", type: "vegan", price: 200, image: "image/th10.jpg", desc: "Classic North Indian dish.", tags: ["✅ Available"] },
        { name: "Mutton Rogan Josh", category: "main", type: "non-veg", price: 380, image: "image/th11.jpg", desc: "Rich & flavorful curry.", tags: [] },
        { name: "Mushroom Masala", category: "main", type: "veg", price: 230, image: "image/th12.jpeg", desc: "Tasty mushroom curry.", tags: [] },

        { name: "Lassi", category: "beverages", type: "veg", price: 90, image: "image/th13.jpeg", desc: "Sweet & refreshing drink.", tags: [] },
        { name: "Cold Coffee", category: "beverages", type: "veg", price: 110, image: "image/th14.jpeg", desc: "Chilled coffee treat.", tags: ["✅ Available"] },
        { name: "Fruit Juice", category: "beverages", type: "vegan", price: 100, image: "image/th15.jpg", desc: "Fresh seasonal juice.", tags: [] },
        { name: "Green Tea", category: "beverages", type: "vegan", price: 80, image: "image/th16.jpg", desc: "Healthy warm tea.", tags: [] },
        { name: "Milkshake", category: "beverages", type: "veg", price: 130, image: "image/th15.jpeg", desc: "Thick & creamy.", tags: [] },
        { name: "Soda", category: "beverages", type: "vegan", price: 70, image: "image/th16.jpeg", desc: "Fizz & refresh.", tags: [] },

        { name: "Gulab Jamun", category: "desserts", type: "veg", price: 90, image: "image/th19.jpg", desc: "Soft syrup balls.", tags: ["✅ Available"] },
        { name: "Rasgulla", category: "desserts", type: "veg", price: 85, image: "image/th20.jpeg", desc: "Spongy & sweet.", tags: [] },
        { name: "Ice Cream", category: "desserts", type: "veg", price: 120, image: "image/th21.jpeg", desc: "Creamy scoops.", tags: [] },
        { name: "Fruit Salad", category: "desserts", type: "vegan", price: 100, image: "image/th22.jpeg", desc: "Fresh & juicy.", tags: [] },
        { name: "Brownie", category: "desserts", type: "veg", price: 150, image: "image/th23.jpeg", desc: "Fudgy chocolate cake.", tags: [] },
        { name: "Tiramisu", category: "desserts", type: "veg", price: 200, image: "image/th24.jpeg", desc: "Coffee-flavored dessert.", tags: [] },
    ];

    // Filter & Search Functionality
    searchInput.addEventListener('input', filterItems);
    typeFilter.addEventListener('change', filterItems);
    priceFilter.addEventListener('change', filterItems);
    categoryTabs.forEach(tab => tab.addEventListener('click', function () {
        categoryTabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        filterItems();
    }));

    // Cart functionality
    floatingCart.addEventListener('click', () => {
        cartModal.style.display = 'flex';
    });

    closeCartBtn.addEventListener('click', () => {
        cartModal.style.display = 'none';
    });

    // Filter items based on search, type, price, and category
    function filterItems() {
        const searchText = searchInput.value.toLowerCase();
        const type = typeFilter.value;
        const price = priceFilter.value;
        const activeCategory = document.querySelector('.category-tabs .nav-link.active').dataset.category;

        const filteredDishes = dishes.filter(dish => {
            const matchesSearch = dish.name.toLowerCase().includes(searchText);
            const matchesType = !type || dish.type === type;
            const matchesPrice = price === 'low' ? dish.price < 200 : price === 'mid' ? dish.price >= 200 && dish.price <= 500 : price === 'high' ? dish.price > 500 : true;
            const matchesCategory = activeCategory === 'all' || dish.category === activeCategory;

            return matchesSearch && matchesType && matchesPrice && matchesCategory;
        });

        displayMenu(filteredDishes);
    }

    // Display filtered dishes on the menu
    function displayMenu(dishes) {
        menuGrid.innerHTML = '';
        if (dishes.length === 0) {
            noItemsMsg.style.display = 'block';
        } else {
            noItemsMsg.style.display = 'none';
            dishes.forEach(dish => {
                const card = document.createElement('div');
                card.className = 'col-12 col-md-6 col-lg-4 menu-card show';
                card.innerHTML = `
                    <div class="card">
                        <img src="${dish.image}" class="card-img-top" alt="${dish.name}">
                        <div class="card-body">
                            <h5 class="card-title">${dish.name}</h5>
                            <p class="card-text">${dish.desc}</p>
                            <p><strong>₹${dish.price}</strong></p>
                            <div class="tags">
                                ${dish.tags.map(tag => `<span>${tag}</span>`).join('')}
                            </div>
                            <button class="btn btn-primary add-to-cart" data-name="${dish.name}" data-price="${dish.price}">Add to Cart</button>
                        </div>
                    </div>
                `;
                menuGrid.appendChild(card);
            });

            // Add to Cart functionality
            document.querySelectorAll('.add-to-cart').forEach(button => {
                button.addEventListener('click', addToCart);
            });
        }
    }

    // Add an item to the cart
    function addToCart(event) {
        const name = event.target.dataset.name;
        const price = parseFloat(event.target.dataset.price);
        const cartItem = cart.find(item => item.name === name);

        if (cartItem) {
            cartItem.quantity++;
        } else {
            cart.push({ name, price, quantity: 1 });
        }

        updateCart();
    }

    // Update cart display
    function updateCart() {
        cartItemsContainer.innerHTML = '';
        let total = 0;

        cart.forEach(item => {
            total += item.price * item.quantity;
            cartItemsContainer.innerHTML += `
                <div class="cart-item">
                    <span>${item.name} x${item.quantity}</span>
                    <button class="remove-item" data-name="${item.name}">Remove</button>
                </div>
            `;
        });

        totalPriceElem.innerHTML = `Total: ₹${total}`;
        document.querySelectorAll('.remove-item').forEach(button => {
            button.addEventListener('click', removeFromCart);
        });
    }

    // Remove item from the cart
    function removeFromCart(event) {
        const name = event.target.dataset.name;
        const cartItem = cart.find(item => item.name === name);
        if (cartItem) {
            cartItem.quantity--;
            if (cartItem.quantity === 0) {
                const index = cart.indexOf(cartItem);
                cart.splice(index, 1);
            }
        }

        updateCart();
    }

    // Initialize menu correctly based on selected tab
    filterItems();
</script>

    <?php
include "include/footer.php";
?>
</body>

</html>