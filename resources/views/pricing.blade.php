{{--@extends ('landing.templateNav')
@section ('page-heading')--}}
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/pricing.css">
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- CSS Link -->
        <link rel="stylesheet" href="public/css/style.css">

        <!-- Font Link -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
        

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
        <!-- Title dan Icon -->
        <title>Tadika Laundry</title>
        <link rel="icon" href="img/logo.png" type="image/x-icon">

        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- CSS Link -->
        <link rel="stylesheet" href="css/style.css">

        <!-- custom js file link  -->
        <script src="public/js/pricing-popup.js" defer></script>

        <!-- Font Link -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
        

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
        <!-- Title dan Icon -->
        <title>Tadika Laundry</title>
        <link rel="icon" href="img/logo.png" type="image/x-icon">

        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    </head>

    <body>
        <!-- NavBar -->
        <div style="width:100%;" data-aos="fade-down">
            <nav class="navbar navbar-expand-lg navbar-light navigasi" style="width: 100%;">
                  <div class="container cnav" style="width: 100%;">
                      <img src="img/logo.png" alt="Bootstrap" width="" height="76">
                      <a class="navbar-brand nav-b ms-4" style="color: #0455c0" href="#">Tadika Laundry</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav" >
                        <li class="nav-item nav-i">
                          <a class="nav-link  nav-l active" aria-current="page" href="/" style="color: #0455c0">Home</a>
                        </li>
                        <li class="nav-item mx-0.1">
                          <a class="nav-link nav-l " href="/login" style="color: #0455c0">Service</a>
                        </li>
                        <li class="nav-item mx-0.1">
                          <a class="nav-link nav-l " href="/pricing" style="color: #0455c0">Pricing</a>
                        </li>
                        <li class="nav-item mx-0.1">
                          <a class="nav-link nav-l " href="/faq" style="color: #0455c0">FAQ</a>
                        </li>
                        <li class="nav-item mx-0.1">
                          <a class="nav-link nav-l " href="/contact-create" style="color: #0455c0">Contact</a>
                        </li>
                        <li class="nav-item mx-0.1">
                          {{-- @if (Route::has('login'))
                          <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                              @auth --}}
          
          
                                  @if (Route::has('login'))
                                      <a href="{{ route('login') }}" class="btn btn-primary tombol px-4 mx-5" class="nav-link nav-l " >LOGIN</a>
                                  @endif
                              {{-- @endauth
                          </div>
                      @endif --}}
                          {{-- <a class="btn btn-primary tombol px-4" style="margin-left: 50px" href="/register">REGIS</a> --}}
                        </li>
                      </ul>
          
              
                    </div>
                  </div>
                </nav>
            </div>
        

        <div class = "products">
            <div class = "container">
                <h1 class = "lg-title">Our Pricing</h1>
                <p class = "text-light">Every sheets of yours will be shown here. Check the price now and order immediately.</p>

                <div class = "product-items">
                    <!-- single product 1 -->
                    <div class = "product" data-aos="zoom-in">
                        <div class = "product-content" data-aos="zoom-out">
                            <div class = "product-img" data-aos="zoom-in-up">
                                <img src = "img/shoe-1.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                                <a href="/login">
                                <button type = "button" class = "btn-cart"> add
                                    <span><i class = "fas fa-plus"></i></span>
                                </button>
                                </a>
                                <button type = "button" class = "btn-buy"> detail
                                    <span><i class = "fas fa-tint"></i></span>
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title">men's clothing</h2>
                                <!--<div class = "rating">
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "far fa-star"></i></span>
                                </div>-->
                            </div>
                            <a href = "#" class = "product-name">t-shirt</a>
                            <p class = "product-price-disc">Rp30.000</p>
                            <p class = "product-price">Rp22.000</p>
                        </div>

                        <div class = "off-info">
                            <h2 class = "sm-title">26% off</h2>
                        </div>
                    </div>
                    <!-- end of single product 1 -->
                    <!-- single product 2 -->
                    <div class = "product" data-aos="zoom-in">
                        <div class = "product-content" data-aos="zoom-out">
                            <div class = "product-img" data-aos="zoom-in-up">
                                <img src = "img/shoe-2.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                                <a href="/login">
                                    <button type = "button" class = "btn-cart"> add
                                        <span><i class = "fas fa-plus"></i></span>
                                    </button>
                                    </a>
                                <button type = "button" class = "btn-buy"> detail
                                    <span><i class = "fas fa-tint"></i></span>
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title">men's clothing</h2>
                                <!--<div class = "rating">
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "far fa-star"></i></span>
                                </div>-->
                            </div>
                            <a href = "#" class = "product-name">safari shirt</a>
                            <br>
                            <!-- <p class = "product-price">Rp40.000</p> -->
                            <p class = "product-price">Rp30.000</p>
                        </div>
                    </div>
                    <!-- end of single product 2 -->
                    <!-- single product 3 -->
                    <div class = "product" data-aos="zoom-in">
                        <div class = "product-content" data-aos="zoom-out">
                            <div class = "product-img" data-aos="zoom-in-up">
                                <img src = "img/shoe-3.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                                <a href="/login">
                                    <button type = "button" class = "btn-cart"> add
                                        <span><i class = "fas fa-plus"></i></span>
                                    </button>
                                    </a>
                                <button type = "button" class = "btn-buy"> detail
                                    <span><i class = "fas fa-tint"></i></span>
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title">fashion accessories</h2>
                                <!--<div class = "rating">
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "far fa-star"></i></span>
                                </div>-->
                            </div>
                            <a href = "#" class = "product-name">necktie</a>
                            <br>
                            <!-- <p class = "product-price">Rp30.000</p> -->
                            <p class = "product-price">Rp22.000</p>
                        </div>
                    </div>
                    <!-- end of single product 3 -->
                    <!-- single product 4 -->
                    <div class = "product" data-aos="zoom-in">
                        <div class = "product-content" data-aos="zoom-out">
                            <div class = "product-img" data-aos="zoom-in-up">
                                <img src = "img/shoe-4.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                                <a href="/login">
                                    <button type = "button" class = "btn-cart"> add
                                        <span><i class = "fas fa-plus"></i></span>
                                    </button>
                                </a>
                                <button type = "button" class = "btn-buy"> detail
                                    <span><i class = "fas fa-tint"></i></span>
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title">men's clothing</h2>
                                <!--<div class = "rating">
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "far fa-star"></i></span>
                                </div>-->
                            </div>
                            <a href = "#" class = "product-name">men boxer</a>
                            <p class = "product-price-disc">Rp15.000</p>
                            <p class = "product-price">Rp10.000</p>
                        </div>

                        <div class = "off-info">
                            <h2 class = "sm-title">25% off</h2>
                        </div>
                    </div>
                    <!-- end of single product 4 -->
                    <!-- single product 5 -->
                    <div class = "product" data-aos="zoom-in">
                        <div class = "product-content" data-aos="zoom-out">
                            <div class = "product-img" data-aos="zoom-in-up">
                                <img src = "img/shoe-5.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                                <a href="/login">
                                    <button type = "button" class = "btn-cart"> add
                                        <span><i class = "fas fa-plus"></i></span>
                                    </button>
                                </a>
                                <button type = "button" class = "btn-buy"> detail
                                    <span><i class = "fas fa-tint"></i></span>
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title">men's clothing</h2>
                                <!--<div class = "rating">
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "far fa-star"></i></span>
                                </div>-->
                            </div>
                            <a href = "#" class = "product-name">unisex suit</a>
                            <!-- <p class = "product-price">$ 150.00</p> -->
                            <br>
                            <p class = "product-price">Rp27.000</p>
                        </div>
                    </div>
                    <!-- end of single product 5 -->
                    <!-- single product 6 -->
                    <div class = "product" data-aos="zoom-in">
                        <div class = "product-content" data-aos="zoom-out">
                            <div class = "product-img" data-aos="zoom-in-up">
                                <img src = "img/shoe-6.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                                <a href="/login">
                                    <button type = "button" class = "btn-cart"> add
                                        <span><i class = "fas fa-plus"></i></span>
                                    </button>
                                </a>
                                <button type = "button" class = "btn-buy"> detail
                                    <span><i class = "fas fa-tint"></i></span>
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title">women's clothing</h2>
                                <!--<div class = "rating">
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "far fa-star"></i></span>
                                </div>-->
                            </div>
                            <a href = "#" class = "product-name">women underwear</a>
                            <!-- <p class = "product-price">$ 150.00</p> -->
                            <br>
                            <p class = "product-price">Rp10.000</p>
                        </div>
                    </div>
                    <!-- end of single product 6 -->
                    <!-- single product 7 -->
                    <div class = "product" data-aos="zoom-in">
                        <div class = "product-content" data-aos="zoom-out">
                            <div class = "product-img" data-aos="zoom-in-up">
                                <img src = "img/shoe-7.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                                <a href="/login">
                                    <button type = "button" class = "btn-cart"> add
                                        <span><i class = "fas fa-plus"></i></span>
                                    </button>
                                </a>
                                <button type = "button" class = "btn-buy"> detail
                                    <span><i class = "fas fa-tint"></i></span>
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title">women's clothing</h2>
                                <!--<div class = "rating">
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "far fa-star"></i></span>
                                </div>-->
                            </div>
                            <a href = "#" class = "product-name">blazer</a>
                            <!-- <p class = "product-price">$ 150.00</p> -->
                            <br>
                            <p class = "product-price">Rp22.000</p>
                        </div>
                    </div>
                    <!-- end of single product 7 -->
                    <!-- single product 8 -->
                    <div class = "product" data-aos="zoom-in">
                        <div class = "product-content" data-aos="zoom-out">
                            <div class = "product-img" data-aos="zoom-in-up">
                                <img src = "img/shoe-8.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                                <a href="/login">
                                    <button type = "button" class = "btn-cart"> add
                                        <span><i class = "fas fa-plus"></i></span>
                                    </button>
                                </a>
                                <button type = "button" class = "btn-buy"> detail
                                    <span><i class = "fas fa-tint"></i></span>
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title">shower cloth</h2>
                                <!--<div class = "rating">
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "far fa-star"></i></span>
                                </div>-->
                            </div>
                            <a href = "#" class = "product-name">towel</a>
                            <p class = "product-price-disc">Rp20.000</p>
                            <p class = "product-price">Rp10.000</p>
                        </div>

                        <div class = "off-info">
                            <h2 class = "sm-title">35% off</h2>
                        </div>
                    </div>
                    <!-- end of single product 8 -->
                </div>
            </div>
        </div>
        
        
        <div class="products-preview">

            <div class="preview" data-target="p-1">
               <i class="fas fa-times"></i>
               <img src="img/shoe-1.png" alt="">
               <h3>t-shirt</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span>( 250 )</span>
               </div>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
               <div class="price">$2.00</div>
               <div class="buttons">
                  <a href="#" class="buy">wash now</a>
                  <a href="#" class="cart">add to cart</a>
               </div>
            </div>
         
            <div class="preview" data-target="p-2">
               <i class="fas fa-times"></i>
               <img src="img/shoe-2.png" alt="">
               <h3>safari shirt</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span>( 250 )</span>
               </div>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
               <div class="price">$2.00</div>
               <div class="buttons">
                  <a href="#" class="buy">wash now</a>
                  <a href="#" class="cart">add to cart</a>
               </div>
            </div>
         
            <div class="preview" data-target="p-3">
               <i class="img/shoe-3.png"></i>
               <img src="images/3.png" alt="">
               <h3>necktie</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span>( 250 )</span>
               </div>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
               <div class="price">$2.00</div>
               <div class="buttons">
                  <a href="#" class="buy">wash now</a>
                  <a href="#" class="cart">add to cart</a>
               </div>
            </div>
         
            <div class="preview" data-target="p-4">
               <i class="fas fa-times"></i>
               <img src="img/shoe-4.png" alt="">
               <h3>men boxer</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span>( 250 )</span>
               </div>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
               <div class="price">$2.00</div>
               <div class="buttons">
                  <a href="#" class="buy">wash now</a>
                  <a href="#" class="cart">add to cart</a>
               </div>
            </div>
         
            <div class="preview" data-target="p-5">
               <i class="fas fa-times"></i>
               <img src="img/shoe-5.png" alt="">
               <h3>unisex suit</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span>( 250 )</span>
               </div>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
               <div class="price">$2.00</div>
               <div class="buttons">
                  <a href="#" class="buy">wash now</a>
                  <a href="#" class="cart">add to cart</a>
               </div>
            </div>
         
            <div class="preview" data-target="p-6">
               <i class="fas fa-times"></i>
               <img src="img/shoe-6.png" alt="">
               <h3>women underwear</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span>( 250 )</span>
               </div>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
               <div class="price">$2.00</div>
               <div class="buttons">
                  <a href="#" class="buy">wash now</a>
                  <a href="#" class="cart">add to cart</a>
               </div>
            </div>

            <div class="preview" data-target="p-7">
                <i class="fas fa-times"></i>
                <img src="img/shoe-7.png" alt="">
                <h3>blazer</h3>
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                   <span>( 250 )</span>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
                <div class="price">$2.00</div>
                <div class="buttons">
                   <a href="#" class="buy">wash now</a>
                   <a href="#" class="cart">add to cart</a>
                </div>
             </div>

             <div class="preview" data-target="p-8">
                <i class="fas fa-times"></i>
                <img src="img/shoe-8.png" alt="">
                <h3>blazer</h3>
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                   <span>( 250 )</span>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
                <div class="price">$2.00</div>
                <div class="buttons">
                   <a href="#" class="buy">wash now</a>
                   <a href="#" class="cart">add to cart</a>
                </div>
             </div>
         
         </div>



        {{--
        <div class = "product-collection">
            <div class = "container">
                <div class = "product-collection-wrapper">
                    <!-- product col left -->
                    <div class = "product-col-left flex">
                        <div class = "product-col-content">
                            <h2 class = "sm-title">atasan </h2>
                            <h2 class = "md-title">men's clothing </h2>
                            <p class = "text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae consequatur facilis eligendi quibusdam voluptatibus exercitationem autem voluptatum, beatae architecto odit, quisquam repellat. Deleniti, architecto ab.</p>
                            <button type = "button" class = "btn-dark">detail sekarang</button>
                        </div>
                    </div>

                    <!-- product col right -->
                    <div class = "product-col-right">
                        <div class = "product-col-r-top flex">
                            <div class = "product-col-content">
                                <h2 class = "sm-title">aksesoris </h2>
                                <h2 class = "md-title">aksesoris wanita </h2>
                                <p class = "text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae consequatur facilis eligendi quibusdam voluptatibus exercitationem autem voluptatum, beatae architecto odit, quisquam repellat. Deleniti, architecto ab.</p>
                                <button type = "button" class = "btn-dark">detail sekarang</button>
                            </div>
                        </div>

                        <div class = "product-col-r-bottom">
                            <!-- left -->
                            <div class = "flex">
                                <div class = "product-col-content">
                                    <h2 class = "sm-title">UAS sale </h2>
                                    <h2 class = "md-title">Extra 30% Off </h2>
                                    <p class = "text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae consequatur facilis eligendi quibusdam voluptatibus exercitationem autem voluptatum, beatae architecto odit, quisquam repellat. Deleniti, architecto ab.</p>
                                    <button type = "button" class = "btn-dark">detail sekarang</button>
                                </div>
                            </div>
                            <!-- right -->
                            <div class = "flex">
                                <div class = "product-col-content">
                                    <h2 class = "sm-title">shoes </h2>
                                    <h2 class = "md-title">best sellers </h2>
                                    <p class = "text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae consequatur facilis eligendi quibusdam voluptatibus exercitationem autem voluptatum, beatae architecto odit, quisquam repellat. Deleniti, architecto ab.</p>
                                    <button type = "button" class = "btn-dark">detail sekarang</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>
{{--@endsection--}}