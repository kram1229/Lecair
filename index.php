<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Lecair Travels
    </title>

    <link rel="stylesheet" href="css/bs/bootstrap.css">
    <link rel="stylesheet" href="css/bs/bootstrap.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />

    <script src="js/bjs/jquery.js"></script>
    <script src="js/bjs/popper.min.js"></script>
    <script src="js/bjs/bootstrap.js"></script>
</head>

<body class="bgchange">
    <header>
        <!--<div id="menu-bar" class="fas fa-bars"></div>-->
        <img src="images/lecair2.png" class="profile_image" alt="">

        <!--<a href="#" class="logo"><span>T</span>ravel</a>-->

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#book">book</a>
            <a href="#packages">packages</a>
            <a href="#services">services</a>
            <a href="#gallery">gallery</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" name="" id="search-bar" placeholder="search here..." />
            <label for="search-bar" class="fas fa-search"></label>
        </form>
    </header>
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="images/Carousel/osaka.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption  d-md-block">
                    <h3>Welcome to Lecair Travel</h3>
                    <p>Discover New Places With Us, Adventure Awaits</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/Carousel/fuji.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption  d-md-block">
                    <h3>Enjoy travel with our services</h3>

                </div>
            </div>
            <div class="carousel-item">
                <img src="images/Carousel/Canada.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption  d-md-block">
                    <h3>Choose Lecair Travels!</h3>
                    <p>As one of the most promising and growing travel agency in the Central Luzon Philippines.
                        LecAir Travels always make sure to deliver. Flights and Tour Packages / Domestic and International.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
    <section class="category">
        <h1 class="heading">book by category</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/int.jpg" alt="">
                <div class="content">

                    <h3>international package</h3>
                    <a href="" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/domestic.jpg" alt="">
                <div class="content">

                    <h3>domestic package</h3>
                    <a href="" class="btn">book now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="intpackages">
        <h1 class="heading">international packages</h1>
        <div class="swiper mySwiper int-slider gap">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="images/p-1.jpg" alt="">
                        </div>
                        <div class="content">

                            <h3><i class="fas fa-map-marker-alt"></i> Mumbai</h3>
                            <div class="price">₱38,488.00 </div>
                            <a href="#" class="btn">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="images/p-2.jpg" alt="">
                        </div>
                        <div class="content">

                            <h3><i class="fas fa-map-marker-alt"></i> Sydney</h3>
                            <div class="price">₱40,000.00</div>
                            <a href="#" class="btn">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="images/p-3.jpg" alt="">
                        </div>
                        <div class="content">

                            <h3><i class="fas fa-map-marker-alt"></i> Hawaii</h3>
                            <div class="price">₱58,358.00</div>
                            <a href="#" class="btn">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="images/p-4.jpg" alt="">
                        </div>
                        <div class="content">

                            <h3><i class="fas fa-map-marker-alt"></i> Paris</h3>
                            <div class="price">₱40,000.00</div>
                            <a href="#" class="btn">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="images/p-5.jpg" alt="">
                        </div>
                        <div class="content">

                            <h3><i class="fas fa-map-marker-alt"></i> Tokyo</h3>
                            <div class="price">₱30,000.00</div>
                            <a href="#" class="btn">add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
    </section>
    <section class="dpckages">
    </section>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>