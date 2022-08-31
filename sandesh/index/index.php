
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/sajan.jpg">
    <title>Resturant</title>
    <script src="https://kit.fontawesome.com/02fb9ec234.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
</head>

<body onload="sajan()">
    <div class="loading"></div>
    <!-- header section  -->
    
    <header>
        <a href="#" class="logo"><i class="fa-solid fa-utensils"></i>restro</a>
        <nav class="navbar">
            <a href="#home" class="active">home</a>
            <a href="#dishes">dishes</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#order">order</a>
        </nav>
        <div class="icon">
            <input type="text" placeholder="search here.." class="search">
            <i class="fa-solid fa-magnifying-glass" id="search-icon"></i>
            <i class="fa-solid fa-heart"></i>
            <i class="fa-solid fa-cart-arrow-down"></i>
            <i class="fas fa-bars" id="bars"></i>
        </div>
    </header>

    <!-- home section -->
    <section class="home" id="home">

        <div class="swiper mySwiper home-slider">

            <div class="swiper-wrapper wrapper">

                <div class="swiper-slide slide">

                    <div class="content">
                        <span>our special dishes</span>
                        <h3>spicy noodles</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id incidunt, illo itaque tempore
                            labore cupiditate?</p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="images/home-img-1.png" alt="noodles">
                    </div>

                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dishes</span>
                        <h3>fried chicken</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id incidunt, illo itaque tempore
                            labore cupiditate?</p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="images/home-img-2.png" alt="noodles">
                    </div>

                </div>

                <div class="swiper-slide slide">

                    <div class="content">
                        <span>our special dishes</span>
                        <h3>hot pizza</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id incidunt, illo itaque tempore
                            labore cupiditate?</p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="images/home-img-3.png" alt="noodles">
                    </div>

                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- antoher section  -->
    <section class="dishes" id="dishes">
        <h3 class="sub-heading">our dishes</h3>
        <h1 class="heading">popular dishes</h1>
        <div class="box-container">
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dish-1.png" alt="">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="food">
                    <span>$5    </span>
                    <a href="#" class="btn">add to cart</a>
                </div>

            </div>
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dish-4.png" alt="">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="food">
                    <span>$10</span>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dish-3.png" alt="">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="food">
                    <span>$10</span>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dish-2.png" alt="">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="food">
                    <span>$10</span>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dish-6.png" alt="">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="food">
                    <span>$10</span>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dish-5.png" alt="">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="food">
                    <span>$10</span>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
        </div>
    </section>



    <script>
        function sajan() {
            document.querySelector('.loading').style.display = 'none';
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="javaScript/script.js"></script>
</body>

</html>