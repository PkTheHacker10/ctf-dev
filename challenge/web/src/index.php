<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bug-e-com</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #f4f4f4;
        }
        header {
            background: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
            font-size: 24px;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .hero {
            background: url('img/bg1.svg') no-repeat center center/cover;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: rgb(0, 0, 0);
            font-size: 32px;
            font-weight: bold;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
        }
        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .product {
            background: #fff;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .product img {
            max-width: 100%;
            border-radius: 5px;
        }
        .product h3 {
            margin: 10px 0;
        }
        .product button {
            background: #ff5733;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 15px;
            margin-top: 17%;
        }
    </style>
</head>
<body>
    <header>Bug e-com</header>
    <div class="hero">Welcome to Bug-e-com store</div>
    <div class="container">
        <div class="products">
            <div class="product">
                <img src="https://via.placeholder.com/250" alt="Product 1">
                <h3>Product 1</h3>
                <p>$19.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/250" alt="Product 2">
                <h3>Product 2</h3>
                <p>$24.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/250" alt="Product 3">
                <h3>Product 3</h3>
                <p>$29.99</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>
    <footer>&copy; 2025 My E-Commerce. All Rights Reserved.</footer>
</body>
</html>
