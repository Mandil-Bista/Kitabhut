<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Kitabhut</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Yaldevi&amp;display=swap">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/Banner-Heading-Image-images.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-Dark-icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/440a9384c4.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Navigation Bar -->

    <nav class="navbar navbar-light navbar-expand-md sticky-top bg-white py-3">
        <div class="container">
            <img class="ms-1 " src="F:\Kitab Hut\assets\img\Logo2.png" alt="">
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-5">
                <span class="visually-hidden">Toggle Navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-5">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active link-dark" href="index.html" style="font-family: Yaldevi, sans-serif;">Home
                            Page</a>
                    </li>
                    <a class="nav-link active link-dark" href="seller.html" style="font-family: Yaldevi, sans-serif;">Seller</a>
                    </li>
                    <a class="nav-link active link-dark" href="daily.html" style="font-family: Yaldevi, sans-serif;">Daily
                        Quotes</a></li>
                    <a class="nav-link active link-dark" href="feedback.html" style="font-family: Yaldevi, sans-serif;">Feedback</a>
                    </li>
                </ul>
               <button1 type="button" onclick="location.href='login.html'">Log In</button1>
               <button2 type="button" onclick="location.href='signup.html'">Sign Up</button2>
            </div>
        </div>
        <div class="c">
            <!-- The dropdown starts here... -->
            <div class="dd">
              <div class="dd-a"><span><a href=""><i class="fa-solid fa-user" ></i></a></span></div>
              <input type="checkbox">
              <div class="dd-c">
                <ul>
                  <li><a href="#"><span>My Profile</span></a></li>
                  <li><a href="#"><span>Order History</span></a></li>
                  <li><a href="#"><span>Settings</span></a></li>
                  <li><a href="#"><span>Log Out</span></a></li>
                </ul>
              </div>
            </div>
            <!-- ...and ends here. -->
          </div>
    </nav>

    <!-- Name and Logo Section -->
    <section id="home">
        <div class="d-flex flex-column justify-content-center align-items-center"
            style="background: #e3d8d8;height: 146.975px;">
            <h1 class="bounce animated"
             style="color: maroon;width: 193.575px;height: 33.575px;">Kitab-Hut</h1>
            <p class="font-monospace text-nowrap fs-6 text-start d-flex flex-column align-items-start bounce animated"
                style="color: rgb(125,34,34);width: 145.325px;height: 83px;">Receive Read Renew Return<img
                    class="d-flex flex-column justify-content-center align-items-center align-content-center"
                    src="assets/img/Logo.png" width="62" height="58" style="width: 71px;height: 75px;margin: -76px;">
            </p>
            
        </div>
    </section>
    <!-- Featured Product -->
    <section style="background-color:aliceblue" id="featured">
        <div class=" container text-center mb-3">
            <h3 style="color: maroon;">Trending Books</h3>
            <input type="text" placeholder="Search Books">
        </div>
        <div class="row mx-auto container-fluid">
                <div class="book col-lg-3 col-md-4 col-sm-10">
                    <img class="m-auto h-auto w-auto mb-2" src="assets/img/book1.jpg" alt="">
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h5 class="b-name" style="color: maroon;">Ugly Love</h5>
                    <h4 class="b-price "style="color: maroon;">Rs.650.00</h4>
                    <button3 class="buy-btn m-auto">Order Now</button3>
                </div>
                <div class="book col-lg-3 col-md-4 col-sm-10">
                    <img class="m-auto h-auto w-auto mb-2" src="assets/img/book2.jpg" alt="">
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h5 class="b-name"style="color: maroon;">The Kindest Lie</h5>
                    <h4 class="b-price "style="color: maroon;">Rs.550.00</h4>
                    <button3 class="buy-btn m-auto">Order Now</button3>
                </div>
                <div class="book col-lg-3 col-md-4 col-sm-10">
                    <img class="m-auto h-auto w-auto mb-2" src="assets/img/book3.jpg" alt="">
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h5 class="b-name" style="color: maroon;">It Ends With Us</h5>
                    <h4 class="b-price "style="color: maroon;">Rs.800.00</h4>
                    <button3 class="buy-btn m-auto">Order Now</button3>
                </div>
                <div class="book col-lg-3 col-md-4 col-sm-10">
                    <img class="m-auto h-auto w-auto mb-2" src="assets/img/book4.jpg" alt="">
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h5 class="b-name"style="color: maroon;">Not A Happy Family</h5>
                    <h4 class="b-price "style="color: maroon;">Rs.450.00</h4>
                    <button3 class="buy-btn m-auto">Order Now</button3>
                </div>
                <div class="book col-lg-3 col-md-4 col-sm-10">
                    <img class="m-auto h-auto w-auto mb-2" src="assets/img/book5.jpg" alt="">
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h5 class="b-name" style="color: maroon;">Reminders Of Him</h5>
                    <h4 class="b-price "style="color: maroon;">Rs.650.00</h4>
                    <button3 class="buy-btn m-auto">Order Now</button3>
                </div>
                <div class="book col-lg-3 col-md-4 col-sm-10">
                    <img class="m-auto h-auto w-auto mb-2" src="assets/img/book6.jpg" alt="">
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                       
                    </div>
                    <h5 class="b-name" style="color: maroon;">The Little Book Of Trading</h5>
                    <h4 class="b-price "style="color: maroon;">Rs.650.00</h4>
                    <button3 class="buy-btn m-auto">Order Now</button3>
                </div>
                <div class="book col-lg-3 col-md-4 col-sm-10">
                    <img class="m-auto h-auto w-auto mb-2" src="assets/img/book7.jpg" alt="">
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      
                    </div>
                    <h5 class="b-name" style="color: maroon;">I Have A Great Future</h5>
                    <h4 class="b-price "style="color: maroon;">Rs.850.00</h4>
                    <button3 class="buy-btn m-auto">Order Now</button3>
                </div>
                <div class="book col-lg-3 col-md-4 col-sm-10">
                    <img class="m-auto h-auto w-auto mb-2" src="assets/img/book8.jpg" alt="">
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        
                    </div>
                    <h5 class="b-name" style="color: maroon;">The Four Winds</h5>
                    <h4 class="b-price "style="color: maroon;">Rs.350.00</h4>
                    <button3 class="buy-btn m-auto">Order Now</button3>
                </div>
                
        </div>
    </section>

    <footer class="mt-5 py-5">
        <div class="row container mx-auto pt-5">
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <img class=" m-auto" src="assets/img/Logo.png" alt="">
                <p class="m-auto pt-3" >Kitab-Hut is a website for readers who want to sell, buy or rent the books.</p>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <h5 class="pb-2" >Featured Books</h5>
                <ul class="text-uppercase list-unstyled">
                    <li><a href="#">Novel</a></li>
                    <li><a href="#">Story</a></li>
                    <li><a href="#">Biography</a></li>
                    <li><a href="#">Documentaries</a></li>
                    <li><a href="#">Self-Helf</a></li>
                    <li><a href="#">Mystery</a></li>
                    <li><a href="#">Fantasy</a></li>
                    <li><a href="#">Science Fiction</a></li>
                </ul>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <h5 class="pb-2" >Contact Us</h5>
               <div>
                <h6 class="text-uppercase">Address</h6>
                  <p>Kathmandu, Nepal</p>
               </div>
               <div>
                <h6 class="text-uppercase">Phone</h6>
                <p>9812345678</p>
               </div>
               <div>
                <h6 class="text-uppercase">Email</h6>
                <p>kitabhut@gmail.com</p>
               </div>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <h5 class="pb-2" >Featured Images</h5>
              <div class="row">
                <img class="image-fluid w-25 h-100 m-2"   src="assets/img/book9.jpg" alt="">
                <img class="image-fluid w-25 h-100 m-2"   src="assets/img/book7.jpg" alt="">
                <img class="image-fluid w-25 h-100 m-2"   src="assets/img/book2.jpg" alt="">
                <img class="image-fluid w-25 h-100 m-2"   src="assets/img/book5.jpg" alt="">
                <img class="image-fluid w-25 h-100 m-2"   src="assets/img/book1.jpg" alt="">
                <img class="image-fluid w-25 h-100 m-2"   src="assets/img/book4.jpg" alt="">

              </div>
            </div>
        </div>
        <div class="copyright mt-5">
            <!-- <div class="row container mx-auto"> -->
                <!-- <div class=" mx-auto col-lg-3 col-md-6 col-12">
                 <img src="assets/img/esewa.png" alt="">
                 <img src="assets/img/khalti.png" alt="">
                 <img src="assets/img/bank.png" alt="">
                </div> -->
                <div class="container text-center col-lg-3 col-md-6 col-12 text-nowrap">
                    <p>kitabhut eCommerce © 2023. All Rights Reserved</p>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>


    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>

</html>