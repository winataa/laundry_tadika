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
    </head>
    <body>

        <div class = "products">
            <div class = "container">
                <h1 class = "lg-title">Our Pricing</h1>
                <p class = "text-light">Every sheets of yours will be shown here. Check the price now and order immediately.</p>

                <div class = "product-items">
                    <!-- single product 1 -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "img/shoe-1.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                                <button type = "button" class = "btn-cart"> add
                                    <span><i class = "fas fa-plus"></i></span>
                                </button>
                                <button type = "button" class = "btn-buy"> detail
                                    <span><i class = "fas fa-tint"></i></span>
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title">men's clothing</h2>
                                <div class = "rating">
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "far fa-star"></i></span>
                                </div>
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
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "img/shoe-2.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                                <button type = "button" class = "btn-cart"> add
                                    <span><i class = "fas fa-plus"></i></span>
                                </button>
                                <button type = "button" class = "btn-buy"> detail
                                    <span><i class = "fas fa-tint"></i></span>
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title">men's clothing</h2>
                                <div class = "rating">
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "far fa-star"></i></span>
                                </div>
                            </div>
                            <a href = "#" class = "product-name">safari shirt</a>
                            <br>
                            <!-- <p class = "product-price">Rp40.000</p> -->
                            <p class = "product-price">Rp30.000</p>
                        </div>
                    </div>
                    <!-- end of single product 2 -->
                    <!-- single product 3 -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "img/shoe-3.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                                <button type = "button" class = "btn-cart"> add
                                    <span><i class = "fas fa-plus"></i></span>
                                </button>
                                <button type = "button" class = "btn-buy"> detail
                                    <span><i class = "fas fa-tint"></i></span>
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title">fashion accessories</h2>
                                <div class = "rating">
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "far fa-star"></i></span>
                                </div>
                            </div>
                            <a href = "#" class = "product-name">necktie</a>
                            <br>
                            <!-- <p class = "product-price">Rp30.000</p> -->
                            <p class = "product-price">Rp22.000</p>
                        </div>
                    </div>
                    <!-- end of single product 3 -->
                    <!-- single product 4 -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "img/shoe-4.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                                <button type = "button" class = "btn-cart"> add
                                    <span><i class = "fas fa-plus"></i></span>
                                </button>
                                <button type = "button" class = "btn-buy"> detail
                                    <span><i class = "fas fa-tint"></i></span>
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title">men's clothing</h2>
                                <div class = "rating">
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "far fa-star"></i></span>
                                </div>
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
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "img/shoe-5.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                                <button type = "button" class = "btn-cart"> add
                                    <span><i class = "fas fa-plus"></i></span>
                                </button>
                                <button type = "button" class = "btn-buy"> detail
                                    <span><i class = "fas fa-tint"></i></span>
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title">men's clothing</h2>
                                <div class = "rating">
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "far fa-star"></i></span>
                                </div>
                            </div>
                            <a href = "#" class = "product-name">unisex suit</a>
                            <!-- <p class = "product-price">$ 150.00</p> -->
                            <br>
                            <p class = "product-price">Rp27.000</p>
                        </div>
                    </div>
                    <!-- end of single product 5 -->
                    <!-- single product 6 -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "img/shoe-6.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                                <button type = "button" class = "btn-cart"> add
                                    <span><i class = "fas fa-plus"></i></span>
                                </button>
                                <button type = "button" class = "btn-buy"> detail
                                    <span><i class = "fas fa-tint"></i></span>
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title">women's clothing</h2>
                                <div class = "rating">
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "far fa-star"></i></span>
                                </div>
                            </div>
                            <a href = "#" class = "product-name">women underwear</a>
                            <!-- <p class = "product-price">$ 150.00</p> -->
                            <br>
                            <p class = "product-price">Rp10.000</p>
                        </div>
                    </div>
                    <!-- end of single product 6 -->
                    <!-- single product 7 -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "img/shoe-7.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                                <button type = "button" class = "btn-cart"> add
                                    <span><i class = "fas fa-plus"></i></span>
                                </button>
                                <button type = "button" class = "btn-buy"> detail
                                    <span><i class = "fas fa-tint"></i></span>
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title">women's clothing</h2>
                                <div class = "rating">
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "far fa-star"></i></span>
                                </div>
                            </div>
                            <a href = "#" class = "product-name">blazer</a>
                            <!-- <p class = "product-price">$ 150.00</p> -->
                            <br>
                            <p class = "product-price">Rp22.000</p>
                        </div>
                    </div>
                    <!-- end of single product 7 -->
                    <!-- single product 8 -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "img/shoe-8.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                                <button type = "button" class = "btn-cart"> add
                                    <span><i class = "fas fa-plus"></i></span>
                                </button>
                                <button type = "button" class = "btn-buy"> detail
                                    <span><i class = "fas fa-tint"></i></span>
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title">shower cloth</h2>
                                <div class = "rating">
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "far fa-star"></i></span>
                                </div>
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
        
    </body>
</html>
{{--@endsection--}}