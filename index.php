<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Anusweets</title>
    <style>
        body {
            font-family: Arial;
            margin: 0;
            background: #fff8f0;
        }
        header {
            background: #d2691e;
            color: white;
            text-align: center;
            padding: 15px;
        }
        nav {
            background: #8b4513;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: white;
            margin: 10px;
            text-decoration: none;
        }
        section {
            padding: 20px;
        }
        .menu {
            display: flex;
            gap: 20px;
        }
        .item {
            background: white;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }
        footer {
            background: #d2691e;
            color: white;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>

<header>
    <h1>Anusweets 🍬</h1>
    <p>Delicious Moments, Sweet Memories</p>
</header>

<nav>
    <a href="#about">About</a>
    <a href="#menu">Menu</a>
    <a href="#contact">Order</a>
</nav>

<section id="about">
    <h2>About Us</h2>
    <p>We provide fresh and tasty traditional sweets made with love.</p>
</section>

<section id="menu">
    <h2>Menu</h2>
    <div class="menu">
        <div class="item">
            <h3>Laddu</h3>
            <p>₹150/kg</p>
        </div>
        <div class="item">
            <h3>Jalebi</h3>
            <p>₹180/kg</p>
        </div>
        <div class="item">
            <h3>Cake</h3>
            <p>₹500</p>
        </div>
    </div>
</section>

<section id="contact">
    <h2>Order Now</h2>
    <form action="contact.php" method="post">
        Name: <br>
        <input type="text" name="name" required><br><br>

        Phone: <br>
        <input type="text" name="phone" required><br><br>

        Order Item: <br>
        <input type="text" name="item" required><br><br>

        <input type="submit" value="Place Order">
    </form>
</section>

<footer>
    <p>© 2026 Anusweets</p>
</footer>

</body>
</html>