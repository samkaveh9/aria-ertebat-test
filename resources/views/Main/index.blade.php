<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="image/favicon.png" rel="icon" />
    <title>مارکت شاپ - قالب HTML فروشگاهی</title>
    <meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
    <!-- CSS Part Start-->
    <link rel="stylesheet" type="text/css" href="/main/js/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/main/js/bootstrap/css/bootstrap-rtl.min.css" />
    <link rel="stylesheet" type="text/css" href="/main/css/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/main/css/stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="/main/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="/main/css/owl.transitions.css" />
    <link rel="stylesheet" type="text/css" href="/main/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="/main/css/stylesheet-rtl.css" />
    <link rel="stylesheet" type="text/css" href="/main/css/responsive-rtl.css" />
    <link rel="stylesheet" type="text/css" href="/main/css/stylesheet-skin2.css" />

    <!-- CSS Part End-->
</head>
<body>
<div class="wrapper-wide">
    <div id="header">
        <!-- Top Bar Start-->
        <nav id="top" class="htop">
            <div class="container">
                <div class="row"> <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
                    <div class="pull-left flip left-top">
                        <div class="links">
                            <ul>
                                <li class="mobile"><i class="fa fa-phone"></i>+21 9898777656</li>
                                <li class="email"><a href="mailto:info@marketshop.com"><i class="fa fa-envelope"></i>info@marketshop.com</a></li>
                                <li class="wrap_custom_block hidden-sm hidden-xs"><a>بلاک سفارشی<b></b></a>
                                    <div class="dropdown-menu custom_block">
                                        <ul>
                                            <li>
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><img alt="" src="{{ asset("main/image/banner/cms-block.jpg") }}"></td>
                                                        <td><img alt="" src="{{ asset("main/image/banner/responsive.jpg") }}"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><h4>بلاک های محتوا</h4></td>
                                                        <td><h4>قالب واکنش گرا</h4></td>
                                                    </tr>
                                                    <tr>
                                                        <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                                                        <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong><a class="btn btn-default btn-sm" href="#">ادامه مطلب</a></strong></td>
                                                        <td><strong><a class="btn btn-default btn-sm" href="#">ادامه مطلب</a></strong></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="top-links" class="nav pull-right flip">
                        <ul>
                            <li><a href="login.html">ورود</a></li>
                            <li><a href="register.html">ثبت نام</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Top Bar End-->
        <!-- Header Start-->
        <header class="header-row">
            <div class="container">
                <div class="table-container">
                    <!-- Logo Start -->
                    <div class="col-table-cell col-lg-6 col-md-6 col-sm-12 col-xs-12 inner">
                        <div id="logo"><a href="index.html"><img class="img-responsive" src="/main/image/logo.png" title="MarketShop" alt="MarketShop" /></a></div>
                    </div>
                    <!-- Logo End -->
                    <!-- Mini Cart Start-->
                    <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div id="cart">
                            <button type="button" data-toggle="dropdown" data-loading-text="بارگذاری ..." class="heading dropdown-toggle">
                                <span class="cart-icon pull-left flip"></span>
                                <span id="cart-total"> </span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td class="text-center"><a href="product.html"><img class="img-thumbnail" title="کفش راحتی مردانه" alt="کفش راحتی مردانه" src="image/product/sony_vaio_1-50x75.jpg"></a></td>
                                            <td class="text-left"><a href="product.html">کفش راحتی مردانه</a></td>
                                            <td class="text-right">x 1</td>
                                            <td class="text-right">32000 تومان</td>
                                            <td class="text-center"><button class="btn btn-danger btn-xs remove" title="حذف" onClick="" type="button"><i class="fa fa-times"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><a href="product.html"><img class="img-thumbnail" title="تبلت ایسر" alt="تبلت ایسر" src="image/product/samsung_tab_1-50x75.jpg"></a></td>
                                            <td class="text-left"><a href="product.html">تبلت ایسر</a></td>
                                            <td class="text-right">x 1</td>
                                            <td class="text-right">98000 تومان</td>
                                            <td class="text-center"><button class="btn btn-danger btn-xs remove" title="حذف" onClick="" type="button"><i class="fa fa-times"></i></button></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <div>
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <td class="text-right"><strong>جمع کل</strong></td>
                                                <td class="text-right">132000 تومان</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>کسر هدیه</strong></td>
                                                <td class="text-right">4000 تومان</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>مالیات</strong></td>
                                                <td class="text-right">11880 تومان</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>قابل پرداخت</strong></td>
                                                <td class="text-right">139880 تومان</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <p class="checkout"><a href="cart.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> مشاهده سبد</a>&nbsp;&nbsp;&nbsp;<a href="checkout.html" class="btn btn-primary"><i class="fa fa-share"></i> تسویه حساب</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mini Cart End-->
                    <!-- جستجو Start-->
                    <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12 inner">
                        <div id="search" class="input-group">
                            <input id="filter_name" type="text" name="search" value="" placeholder="جستجو" class="form-control input-lg" />
                            <button type="button" class="button-search"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <!-- جستجو End-->
                </div>
            </div>
        </header>
        <!-- Header End-->
        <!-- Main آقایانu Start-->

        <nav id="menu" class="navbar">
            <div class="navbar-header"> <span class="visible-xs visible-sm"> منو <b></b></span></div>
            <div class="container">
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="home_link" title="خانه" href="index.html">خانه</a></li>
                        <li class="dropdown"><a href="category.html">مد و زیبایی</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="category.html">آقایان <span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="category.html">زیردسته ها </a> </li>
                                                <li><a href="category.html">زیردسته ها </a> </li>
                                                <li><a href="category.html">زیردسته ها </a> </li>
                                                <li><a href="category.html">زیردسته ها </a> </li>
                                                <li><a href="category.html">زیردسته جدید </a> </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="category.html" >بانوان</a> </li>
                                    <li><a href="category.html">دخترانه<span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="category.html">زیردسته ها </a></li>
                                                <li><a href="category.html">زیردسته جدید</a></li>
                                                <li><a href="category.html">زیردسته جدید</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="category.html">پسرانه</a></li>
                                    <li><a href="category.html">نوزاد</a></li>
                                    <li><a href="category.html">لوازم <span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="category.html">زیردسته های جدید</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown"> <a href="category.html">الکترونیکی</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li> <a href="category.html">لپ تاپ <span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li> <a href="category.html">زیردسته های جدید </a> </li>
                                                <li> <a href="category.html">زیردسته های جدید </a> </li>
                                                <li> <a href="category.html">زیردسته جدید </a> </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li> <a href="category.html">رومیزی <span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li> <a href="category.html">زیردسته های جدید </a> </li>
                                                <li> <a href="category.html">زیردسته جدید </a> </li>
                                                <li> <a href="category.html">زیردسته جدید </a> </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li> <a href="category.html">دوربین <span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li> <a href="category.html">زیردسته های جدید</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="category.html">موبایل و تبلت <span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="category.html">زیردسته های جدید</a></li>
                                                <li><a href="category.html">زیردسته های جدید</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="category.html">صوتی و تصویری <span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="category.html">زیردسته های جدید </a> </li>
                                                <li><a href="category.html">زیردسته جدید </a> </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="category.html">لوازم خانگی</a> </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown"><a href="category.html">کفش</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="category.html">آقایان</a> </li>
                                    <li><a href="category.html">بانوان <span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="category.html">زیردسته های جدید </a> </li>
                                                <li><a href="category.html">زیردسته ها </a> </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="category.html">دخترانه</a> </li>
                                    <li><a href="category.html">پسرانه</a> </li>
                                    <li><a href="category.html">نوزاد</a> </li>
                                    <li><a href="category.html">لوازم <span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="category.html">زیردسته های جدید</a></li>
                                                <li><a href="category.html">زیردسته های جدید</a></li>
                                                <li><a href="category.html">زیردسته ها</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown"> <a href="category.html">ساعت</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li> <a href="category.html">ساعت مردانه</a></li>
                                    <li> <a href="category.html">ساعت زنانه</a></li>
                                    <li> <a href="category.html">ساعت بچگانه</a></li>
                                    <li> <a href="category.html">لوازم</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown"><a href="category.html">زیبایی و سلامت</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li> <a href="category.html">عطر و ادکلن</a></li>
                                    <li> <a href="category.html">آرایشی</a></li>
                                    <li> <a href="category.html">ضد آفتاب</a></li>
                                    <li> <a href="category.html">مراقبت از پوست</a></li>
                                    <li> <a href="category.html">مراقبت از چشم</a></li>
                                    <li> <a href="category.html">مراقبت از مو</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu_brands dropdown"><a href="#">برند ها</a>
                            <div class="dropdown-menu">
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/apple_logo-60x60.jpg" title="اپل" alt="اپل" /></a><a href="#">اپل</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/canon_logo-60x60.jpg" title="کنون" alt="کنون" /></a><a href="#">کنون</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"> <a href="#"><img src="image/product/hp_logo-60x60.jpg" title="اچ پی" alt="اچ پی" /></a><a href="#">اچ پی</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/htc_logo-60x60.jpg" title="اچ تی سی" alt="اچ تی سی" /></a><a href="#">اچ تی سی</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/palm_logo-60x60.jpg" title="پالم" alt="پالم" /></a><a href="#">پالم</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/sony_logo-60x60.jpg" title="سونی" alt="سونی" /></a><a href="#">سونی</a> </div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/canon_logo-60x60.jpg" title="test" alt="test" /></a><a href="#">تست</a> </div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/apple_logo-60x60.jpg" title="test 3" alt="test 3" /></a><a href="#">تست 3</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/canon_logo-60x60.jpg" title="test 5" alt="test 5" /></a><a href="#">تست 5</a> </div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/canon_logo-60x60.jpg" title="test 6" alt="test 6" /></a><a href="#">تست 6</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/apple_logo-60x60.jpg" title="test 7" alt="test 7" /></a><a href="#">تست 7</a> </div>


                            </div>
                        </li>
                        <li class="dropdown wrap_custom_block hidden-sm hidden-xs"><a>بلاک سفارشی</a>
                            <div class="dropdown-menu custom_block">
                                <ul>
                                    <li>
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td><img alt="" src="image/banner/cms-block.jpg"></td>
                                                <td><img alt="" src="image/banner/responsive.jpg"></td>
                                                <td><img alt="" src="image/banner/cms-block.jpg"></td>
                                            </tr>
                                            <tr>
                                                <td><h4>بلاک های محتوا</h4></td>
                                                <td><h4>قالب واکنش گرا</h4></td>
                                                <td><h4>پشتیبانی ویژه</h4></td>
                                            </tr>
                                            <tr>
                                                <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                                                <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                                                <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                                            </tr>
                                            <tr>
                                                <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>
                                                <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>
                                                <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown information-link"><a>برگه ها</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="login.html">ورود</a></li>
                                    <li><a href="register.html">ثبت نام</a></li>
                                    <li><a href="category.html">دسته بندی (شبکه/لیست)</a></li>
                                    <li><a href="product.html">محصولات</a></li>
                                    <li><a href="cart.html">سبد خرید</a></li>
                                    <li><a href="checkout.html">تسویه حساب</a></li>
                                    <li><a href="compare.html">مقایسه</a></li>
                                    <li><a href="wishlist.html">لیست آرزو</a></li>
                                    <li><a href="search.html">جستجو</a></li>
                                </ul>
                                <ul>
                                    <li><a href="about-us.html">درباره ما</a></li>
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="elements.html">عناصر</a></li>
                                    <li><a href="faq.html">سوالات متداول</a></li>
                                    <li><a href="sitemap.html">نقشه سایت</a></li>
                                    <li><a href="contact-us.html">تماس با ما</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="custom-link-right"><a href="#" target="_blank"> همین حالا بخرید!</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main آقایانu End-->
    </div>
    <div id="container">

        <div class="container">
            <div class="row">
                <!--Middle Part Start-->
                <div id="content" class="col-xs-12">
                    <!-- Slideshow Start-->
                    <div class="slideshow single-slider owl-carousel">
                        <div class="item"> <a href="#"><img class="img-responsive" src="/main/image/slider/banner-2.jpg" alt="banner 2" /></a> </div>
                        <div class="item"> <a href="#"><img class="img-responsive" src="/main/image/slider/banner-1.jpg" alt="banner 1" /></a> </div>
                    </div>
                    <div id="product-tab" class="product-tab">
                        <ul id="tabs" class="tabs">
                            <li><a href="#tab-featured">ویژه</a></li>
                            <li><a href="#tab-latest">جدیدترین</a></li>
                        </ul>
                        <div id="tab-featured" class="tab_content">
                            <div class="owl-carousel product_carousel_tab">
                               @foreach($products as $product)
                                    <div class="product-thumb clearfix">
                                        <div class="image"><a href="{{ route('product.single', $product->id) }}"><img src="{{ asset('storage/'. $product->image) }}" alt="تی شرت کتان مردانه" title="تی شرت کتان مردانه" class="img-responsive" /></a></div>
                                        <div class="caption">
                                            <h4><a href="{{ route('product.single', $product->id) }}">{{ $product->title }}</a></h4>
                                            <p class="price"><span class="price-new">{{ $product->price }} تومان</span></p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="cart.add('42');"><span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی ها" onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="مقایسه این محصول" onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div id="tab-latest" class="tab_content">
                            <div class="owl-carousel product_carousel_tab">
                                @foreach($latestProducts as $product)
                                    <div class="product-thumb clearfix">
                                        <div class="image"><a href="{{ route('product.single', $product->id) }}"><img src="{{ asset('storage/'. $product->image) }}" alt="تی شرت کتان مردانه" title="تی شرت کتان مردانه" class="img-responsive" /></a></div>
                                        <div class="caption">
                                            <h4><a href="{{ route('product.single', $product->id) }}">{{ $product->title }}</a></h4>
                                            <p class="price"><span class="price-new">{{ $product->price }} تومان</span></p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="cart.add('42');"><span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی ها" onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="مقایسه این محصول" onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>    <!-- محصولات Tab Start -->

                    <!-- برند Logo Carousel Start-->
{{--                    <div id="carousel" class="owl-carousel nxt">--}}
{{--                        <div class="item text-center"> <a href="#"><img src="/main/image/product/apple_logo-100x100.jpg" alt="پالم" class="img-responsive" /></a> </div>--}}
{{--                        <div class="item text-center"> <a href="#"><img src="/main/image/product/canon_logo-100x100.jpg" alt="سونی" class="img-responsive" /></a> </div>--}}
{{--                        <div class="item text-center"> <a href="#"><img src="/main/image/product/apple_logo-100x100.jpg" alt="کنون" class="img-responsive" /></a> </div>--}}
{{--                        <div class="item text-center"> <a href="#"><img src="/main/image/product/canon_logo-100x100.jpg" alt="اپل" class="img-responsive" /></a> </div>--}}
{{--                        <div class="item text-center"> <a href="#"><img src="/main/image/product/apple_logo-100x100.jpg" alt="اچ تی سی" class="img-responsive" /></a> </div>--}}
{{--                        <div class="item text-center"> <a href="#"><img src="/main/image/product/canon_logo-100x100.jpg" alt="اچ پی" class="img-responsive" /></a> </div>--}}
{{--                        <div class="item text-center"> <a href="#"><img src="/main/image/product/apple_logo-100x100.jpg" alt="brand" class="img-responsive" /></a> </div>--}}
{{--                        <div class="item text-center"> <a href="#"><img src="/main/image/product/canon_logo-100x100.jpg" alt="brand1" class="img-responsive" /></a> </div>--}}
{{--                    </div>--}}
                    <!-- برند Logo Carousel End -->
                </div>
                <!--Middle Part End-->
            </div>
        </div>
    </div>
    <!-- Feature Box Start-->
    <div class="container">
        <div class="custom-feature-box row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="feature-box fbox_1">
                    <div class="title">ارسال رایگان</div>
                    <p>برای خرید های بیش از 100 هزار تومان</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="feature-box fbox_2">
                    <div class="title">پس فرستادن رایگان</div>
                    <p>بازگشت کالا تا 24 ساعت پس از خرید</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="feature-box fbox_3">
                    <div class="title">کارت هدیه</div>
                    <p>بهترین هدیه برای عزیزان شما</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="feature-box fbox_4">
                    <div class="title">امتیازات خرید</div>
                    <p>از هر خرید امتیاز کسب کرده و از آن بهره بگیرید</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Box End-->
    <!--Footer Start-->
    <footer id="footer">
        <div class="fpart-first">
            <div class="container">
                <div class="row">
                    <div class="contact col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <h5>درباره مارکت شاپ</h5>
                        <p>قالب HTML فروشگاهی مارکت شاپ. این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</p>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>اطلاعات</h5>
                        <ul>
                            <li><a href="about-us.html">درباره ما</a></li>
                            <li><a href="about-us.html">اطلاعات 0 تومان</a></li>
                            <li><a href="about-us.html">حریم خصوصی</a></li>
                            <li><a href="about-us.html">شرایط و قوانین</a></li>
                        </ul>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>خدمات مشتریان</h5>
                        <ul>
                            <li><a href="contact-us.html">تماس با ما</a></li>
                            <li><a href="#">بازگشت</a></li>
                            <li><a href="sitemap.html">نقشه سایت</a></li>
                        </ul>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>امکانات جانبی</h5>
                        <ul>
                            <li><a href="#">برند ها</a></li>
                            <li><a href="#">کارت هدیه</a></li>
                            <li><a href="#">بازاریابی</a></li>
                            <li><a href="#">ویژه ها</a></li>
                        </ul>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>حساب من</h5>
                        <ul>
                            <li><a href="#">حساب کاربری</a></li>
                            <li><a href="#">تاریخچه سفارشات</a></li>
                            <li><a href="#">لیست علاقه مندی</a></li>
                            <li><a href="#">خبرنامه</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="fpart-second">
            <div class="container">
                <div id="powered" class="clearfix">
                    <div class="powered_text pull-left flip">
                        <p>کپی رایت © 2016 فروشگاه شما </p>
                    </div>

                </div>
                <div class="bottom-row">
                    <div class="custom-text text-center">
                        <p>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.<br> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    </div>

                </div>
            </div>
        </div>
        <div id="back-top"><a data-toggle="tooltip" title="بازگشت به بالا" href="javascript:void(0)" class="backtotop"><i class="fa fa-chevron-up"></i></a></div>
    </footer>
    <!--Footer End-->

</div>
<!-- JS Part Start-->
<script type="text/javascript" src="/main/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/main/js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/main/js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="/main/js/jquery.dcjqaccordion.min.js"></script>
<script type="text/javascript" src="/main/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/main/js/custom.js"></script>
<!-- JS Part End-->

</body>
</html>
