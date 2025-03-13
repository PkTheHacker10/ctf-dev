<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruhina | Home</title>
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Serif;
        }
        body {
            background-color: #ffd9fb;
            padding-top: 0px;
        }
        header {
            background: #333;
            color: #fff;
            padding: 0px;
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
            background: url('img/svg/bg1.svg') no-repeat center center/cover;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: rgb(238, 235, 235);
            font-size: 45px;
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
        .searchbar{
            padding-left: 50%;
        }
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 15px;
            margin-top: 17%;
        }

    </style>
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    </head>
    <!-- nav bar start-->
        <div>
            <body style="background-color:rgb(212, 212, 212);padding-top: 0px;">
            <header class="py-3 border-bottom searchbar">
                <div class="container-fluid d-grid gap-3 align-items-center searchtab" style="grid-template-columns: 1fr 2fr;margin-left: 65%;">
                <div class="d-flex align-items-center">
                    <form class="w-100 me-3" role="search">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    </form>

                    <div class="flex-shrink-0 dropdown">
                    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="img/profile.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small shadow">
                        <li><a class="dropdown-item" href="#">Cart</a></li>
                        <li><a class="dropdown-item" href="#">My orders</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Login</a></li>
                    </ul>
                    </div>
                </div>
            </header>
        </div>
        <!-- nav bar end-->
    </div>
    <div class="hero">WELCOME TO RUHINA E-COM </h6></div>
    <div class="container">
        <div class="slide">
        <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/banner1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/banner2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">                                                 
                <img src="img/banner1.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
        <div class="products">
            <div class="product">
                <img src="img/lipstic.jpg" alt="Product 1">
                <h3>Product 1</h3>
                <p>$19.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="img/lipstic2.jpg" alt="Product 2" height=70% width=100%>
                <h3>Product 2</h3>
                <p>$24.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="img/product3.jpg" alt="Product 3" height=70% width=100%>
                <h3>Product 3</h3>
                <p>$29.99</p>
                
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="img/product8.webp" alt="Product 1">
                <h3>Product 1</h3>
                <p>$19.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="img/product5.webp" alt="Product 1">
                <h3>Product 1</h3>
                <p>$19.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="img/product6.webp" alt="Product 1">
                <h3>Product 1</h3>
                <p>$19.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="img/product7.jpg" alt="Product 1">
                <h3>Product 1</h3>
                <p>$19.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="img/product4.jpg" alt="Product 1">
                <h3>Product 1</h3>
                <p>$19.99</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="slide">
        <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/banner2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/banner1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">                                                 
                <img src="img/banner2.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
        <div class="products">
            <div class="product">
                <img src="img/product5.webp" alt="Product 1">
                <h3>Product 1</h3>
                <p>$19.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="img/product6.webp" alt="Product 1">
                <h3>Product 1</h3>
                <p>$19.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="img/product7.jpg" alt="Product 1">
                <h3>Product 1</h3>
                <p>$19.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="img/product4.jpg" alt="Product 1">
                <h3>Product 1</h3>
                <p>$19.99</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>
    <input type="hidden" value="UmFiYml0IGhvbGUgOiBFdmVyeSBoYWNrZXIgd2FzIG9uY2UgYSBiZWdpbm5lci4gRXZlcnkgZXhwZXJ0IHdhcyBvbmNlIGEgbmV3YmllLiBLZWVwIGxlYXJuaW5nLiA=">
    <!-- Not here...! Dig Deeper-->
    <!-- Hey alex you are already 25+ but you still scared about robots !!-->
    <footer>&copy; 2025 Ruhina Store. All Rights Reserved.</footer>
    
</body>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/carousel.js"></script>
</html>
