<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-home</title>
    <script src="https://kit.fontawesome.com/02fb9ec234.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://kit.fontawesome.com/02fb9ec234.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

</head>


<body onload="sajan()">
    <div class="loading"></div>

    <!-- nav bar section  -->
    <section class="navbar">
        <div class="container">
            <div class="logo"><i class="fa-solid fa-utensils"></i>sajan</div>
            <div class="nav">
                <ul>
                    <li><i class="fa-solid fa-house-chimney"></i><a href="#" class='active'>Home</a></li>
                    <li><i class="fa-solid fa-bars"></i><a href="#">Menu</a></li>
                    <li><i class="fa-solid fa-bowl-food"></i><a href="#">Dishes</a></li>
                    <li><i class="fa-solid fa-address-book"></i><a href="#">About</a></li>

                </ul>
            </div>
        </div>
        <div class="account">
            <button><a href="#">signin</a></button>
        </div>
        <div class="menu-bar">
            <i class="fas fa-bars" id="bars"></i>
        </div>
    </section>

    <!-- home section -->
    <section class="home" id="home">
        <div class="swiper mySwiper home-slider">
            <div class="swiper-wrapper wrapper"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- dishes section  -->
    <section class="dishes" id="dishes">
        <h3 class="sub-heading">our dishes</h3>
        <h1 class="heading" data-aos="fade-up">popular dishes</h1>
        <div class="box-container" data-aos="fade-up"></div>
        <div class="more">
            <button>show more</button>
        </div>
    </section>

    <!-- main menu section  -->
    <section class='menu-inner'>
        <div class="main-menu-content"></div>
        <div class="overlay"></div>
        <div class="menu-container">
            <div class="menu-section">Luxury Menu</div>
            <div class="menu-outline">

                <div class="menu-first">
                    <div class="menu-heading">Lunch Section</div>
                    <div class="menu-box">
                        <h1>hei</h1>
                        <img src="images/lunch-2.jpg" alt="">
                        <h2>Explore our items</h2>
                        <h2>& Foods</h2>
                        <button data-modal-target="#modal">Go to</button>
                    </div>
                </div>
                <div class="menu-first">
                    <div class="menu-heading">Dinner Section</div>
                    <div class="menu-box">
                        <h1>hei</h1>
                        <img src="images/dinner.jpg" alt="">
                        <h2>Explore our items</h2>
                        <h2>& Foods</h2>
                        <button data-modal-target="#modal2">Go to</button>
                    </div>
                </div>
                <div class="menu-first">
                    <div class="menu-heading">Drink/Bar Section</div>
                    <div class="menu-box">
                        <h1>hei</h1>
                        <img src="images/drink.jpg" alt="">
                        <h2>Explore our items</h2>
                        <h2>& Foods</h2>
                        <button data-modal-target="#modal3">Go to</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- about section  -->
    <section class="about" id="about" data-aos="fade-up">
        <div class="top">come dine in</div>
        <div class="second">HOURS & LOCATION</div>
        <div class="third">
            <div class="third-first">
                <span>monday - friday</span>
                <p>11am - 9pm</p>
            </div>
            <div class="third-second">
                <span>Saturday</span>
                <p>12pm - 6pm</p>
            </div>
            <div class="third-third">
                <span>sunday</span>
                <p>12pm - 5pm</p>
            </div>
        </div>
        <div class="four">
            <div class="four-first">
                <h3>Bardewa Group</h3>
                <p>20 W 34th St., New York,</p>
                <p>NY 10001, United States</p>
                <p><i class="fa-solid fa-envelope"></i>sajanbardewa328@gmail.com</p>
                <p><i class="fa-solid fa-address-card"></i>+9779847633184</p>
            </div>
            <div class="four-second">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a405a163!2sEmpire%20State%20Building!5e0!3m2!1sen!2snp!4v1660185597471!5m2!1sen!2snp" width="450" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- footer section  -->
    <section>
        <footer>
            <ul class="social_icon">
                <li><a href="#">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a></li>
                <li><a href="#">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a></li>
                <li><a href="#">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a></li>
                <li><a href="#">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a></li>
            </ul>
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">order</a></li>
            </ul>
            <div class="credit"> copyright &copy; 2022 by <span>sajan bardewa</span> </div>
        </footer>
    </section>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        function sajan() {
            document.querySelector('.loading').style.display = 'none';
        }

        AOS.init({
            duration: 2000,
        });
    </script>
    <script src="script.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src='javaScript/index.js'></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>