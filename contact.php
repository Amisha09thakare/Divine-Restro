<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    :root {
      --bg-color: #ffffff;
      --primary-color: #000000;
      --secondary-color: #444444;
      --button-color: #000000;
      --button-hover: #222222;
      --white: #ffffff;
      --glass-bg: rgba(255, 255, 255, 0.9);
      --glass-border: rgba(0, 0, 0, 0.1);
      --transition-speed: 0.4s;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
  background-color: var(--bg-color);
  animation: fadeIn 1s ease-in;
  margin: 0;
  padding: 0; /* remove the 1rem padding */
}

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .contact-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  min-height: calc(100vh - 160px); /* keep this if nav+footer are 80px each */
  padding: 0; /* remove top-bottom space */
  width: 100%;
}


    .contact-wrapper {
      display: flex;
      max-width: 1000px;
      background: var(--glass-bg);
      border: 1px solid var(--glass-border);
      backdrop-filter: blur(12px);
      border-radius: 20px;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
      overflow: hidden;
      width: 100%;
      transition: transform var(--transition-speed), box-shadow var(--transition-speed);
    }

    .contact-wrapper:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
    }

    .contact-image {
      flex: 1;
      background: url('image/contact.jpg') center/cover no-repeat;
      min-height: 100%;
    }

    .contact-form {
      flex: 1;
      padding: 3rem 2rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      animation: slideIn 1.2s ease;
    }

    @keyframes slideIn {
      from { opacity: 0; transform: translateX(30px); }
      to { opacity: 1; transform: translateX(0); }
    }

    h1 {
      font-size: 2rem;
      color: var(--primary-color);
      margin-bottom: 0.5rem;
    }

    p {
      color: var(--secondary-color);
      font-size: 0.95rem;
      margin-bottom: 2rem;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1.2rem;
    }

    label {
      font-size: 0.8rem;
      color: var(--secondary-color);
      text-transform: uppercase;
    }

    input,
    textarea {
      width: 100%;
      padding: 0.8rem;
      border: 1px solid #bbb;
      border-radius: 10px;
      font-size: 0.95rem;
      background-color: #f9f9f9;
      color: #000;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
      transition: all 0.3s ease;
    }

    input:focus,
    textarea:focus {
      outline: none;
      border-color: var(--button-color);
      box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.1);
    }

    textarea {
      resize: vertical;
      min-height: 120px;
    }

    button {
      margin-top: 1rem;
      padding: 0.8rem 2rem;
      background-color: var(--button-color);
      color: var(--white);
      border: none;
      border-radius: 10px;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.2s ease;
    }

    button:hover {
      background-color: var(--button-hover);
      transform: translateY(-2px);
    }

    #error, #success-msg {
      display: none;
      font-size: 0.9rem;
      padding: 0.5rem;
      border-radius: 5px;
    }

    #error {
      color: #a94442;
      background: #f8d7da;
      border: 1px solid #f5c6cb;
    }

    #success-msg {
      color: #155724;
      background: #d4edda;
      border: 1px solid #c3e6cb;
    }

    @media (max-width: 768px) {
      .contact-wrapper {
        flex-direction: column;
      }

      .contact-image {
        height: 200px;
      }
    }
  </style>
</head>

<body>

  <?php if (file_exists("include/nav.php")) include "include/nav.php"; ?>
<br>
  <div class="contact-container">
    <div class="contact-wrapper">
      <div class="contact-image"></div>
      <div class="contact-form">
        <h1>Contact Us</h1>
        <p>We’d love to hear from you. Leave us a message below!</p>

        <div id="error"></div>
        <div id="success-msg">Your message has been sent!</div>

        <form id="contact-form" method="POST" action="#">
          <div>
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Your full name" required />
          </div>

          <div>
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="your@example.com" required />
          </div>

          <div>
            <label for="message">Your Message</label>
            <textarea id="message" name="message" placeholder="Write your message here..." required></textarea>
          </div>

          <button type="submit">Send Message</button>
        </form>
      </div>
    </div>
  </div>
<br>
  <script>
    const form = document.getElementById("contact-form");
    const errorBox = document.getElementById("error");
    const successBox = document.getElementById("success-msg");

    form.addEventListener("submit", function (e) {
      e.preventDefault();

      const name = form.name.value.trim();
      const email = form.email.value.trim();
      const message = form.message.value.trim();

      if (!name || !email || !message) {
        errorBox.style.display = "block";
        errorBox.textContent = "All fields are required.";
        successBox.style.display = "none";
        return;
      }

      errorBox.style.display = "none";
      successBox.style.display = "block";
      form.reset();
    });
  </script>

  <?php if (file_exists("include/footer.php")) include "include/footer.php"; ?>

</body>
</html>
