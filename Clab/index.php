<?php
require_once "../functions/functions.php";
if(is_search()){
    $posts = find_post($_GET['search']);
  }else{
    $posts = get_file();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <title>اولین پروژه مینی من</title>

    <!--web fonts-->


    <!--basic styles-->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/custom-icon/style.css" rel="stylesheet">
    <link href="assets/vendor/vl-nav/css/core-menu.css" rel="stylesheet">
    <link href="assets/vendor/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="assets/vendor/owl/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/owl/assets/owl.theme.default.min.css" rel="stylesheet">

    <!--custom styles-->
    <link href="assets/css/main.css" rel="stylesheet">

    <!--[if (gt IE 9) |!(IE)]><!-->
    <!--<link rel="stylesheet" href="assets/vendor/custom-nav/css/effects/fade-menu.css"/>-->
    <link rel="stylesheet" href="assets/vendor/vl-nav/css/effects/slide-menu.css" />
    <!--<![endif]-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136585988-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-136585988-1');
    </script>
</head>

<body class="bg-gray">

    <!--header start-->
    <header class="app-header transparent-header transparent-header-dark-nav">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--<div class="branding-wrap">-->
                    <!--brand start-->
                    <div class="navbar-brand float-left">
                        <a class="" href="index-2.html">
                            <img class="logo-light" src="assets/img/logo.png" srcset="assets/img/logo@2x.png 2x" alt="CLab">
                            <img class="logo-dark" src="assets/img/logo-dark.png" srcset="assets/img/logo-dark@2x.png 2x" alt="CLab">
                        </a>
                    </div>
                    <!--brand end-->
                    <!--start responsive nav toggle button-->
                    <div class="nav-btn hamburger hamburger--slider js-hamburger ">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                    <!--end responsive nav toggle button-->
                    <!--</div>-->

                    <!--top mega menu start-->
                    <nav id="vl-menu">
                        <!--start nav-->
                        <ul class="vlmenu light-sub-menu slide-effect float-right">
                            <li><a href="#">خانه <i class="fa fa-angle-down"></i></a>
                                <!--mega menu start-->
                                <div class="mega-menu half-nav">
                                    <div class="col3">
                                        <h3>دمو ها</h3>
                                        <ol>
                                            <li><a href="home-01.html">لندینگ یک</a></li>
                                            <li><a href="home-02.html">لندینگ دو</a></li>
                                            <li><a href="home-03.html">لندینگ سه</a></li>
                                            <li><a href="home-04.html">لندینگ چهار</a></li>
                                            <li><a href="home-05.html">لندینگ پنج</a></li>
                                            <li><a href="home-agency.html">آژانسی</a></li>
                                            <li><a href="home-agency2.html">آژانسی دو</a></li>
                                        </ol>
                                    </div>
                                    <div class="col3">
                                        <h3> &nbsp;</h3>
                                        <ol>
                                            <li><a href="home-business.html">کسب و کار</a></li>
                                            <li><a href="home-charity.html">خیریه</a></li>
                                            <li><a href="home-corporate.html">شرکت خیریه</a></li>
                                            <li><a href="home-creative.html">خلاق</a></li>
                                            <li><a href="home-gym.html">تناسب اندام</a></li>
                                            <li><a href="home-insurance.html">بیمه</a></li>
                                            <li><a href="home-job.html">کاریابی</a></li>
                                        </ol>
                                    </div>
                                    <div class="col3">
                                        <h3> &nbsp;</h3>
                                        <ol>
                                            <li><a href="home-listing.html">فهرست</a></li>
                                            <li><a href="home-portfolio.html">نمونه کار</a></li>
                                            <li><a href="home-product.html">محصولات</a></li>
                                            <li><a href="home-startup.html">استارت آپ</a></li>
                                            <li><a href="home-travel.html">سفر</a></li>
                                            <li><a href="home-blog.html">مقاله وبلاگ</a></li>
                                            <li></li>
                                        </ol>
                                        <a href="page-landing.html" class="btn btn-sm btn-theme ml-3 mt-2">مشاهده همه دمو ها</a>
                                    </div>
                                </div>
                                <!--mega menu end-->
                            </li>
                            <li><a href="#"> صفحات <i class="fa fa-angle-down"></i></a>
                                <!--start level 2-->
                                <ul>
                                    <li>
                                        <a href="page-landing.html" class="d-flex">
                                            <i class="vl-pop-corn font-size-20"></i>
                                            <div class="font-weight-700"> صفحات فرود </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="page-inner.html" class="d-flex">
                                            <i class="vl-layer font-size-20"></i>
                                            <div class="font-weight-700">صفحات داخلی</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="page-utility.html" class="d-flex">
                                            <i class="vl-gear font-size-20"></i>
                                            <div class="font-weight-700">صفحات سودمند</div>
                                        </a>
                                    </li>
                                </ul>
                                <!--end level 2-->
                            </li>
                            <li><a href="#">بلاگ <i class="fa fa-angle-down"></i></a>
                                <!--start level 2-->
                                <ul>
                                    <li><a href="#">پوسته وبلاگ</a>
                                        <!--start level 3-->
                                        <ul>
                                            <li><a href="blog-standard.html">استاندارد وبلاگ</a></li>
                                            <li><a href="blog-standard-left.html">بلاگ استاندارد چپ</a></li>
                                            <li><a href="blog-standard-right.html">بلاگ استاندارد راست</a></li>
                                            <li><a href="blog-list.html">لیست بلاگ</a></li>
                                            <li><a href="blog-cards.html">کارت های وبلاگ</a></li>
                                            <li><a href="blog-cards-masonry.html">وبلاگ کارت های مختلف</a></li>
                                        </ul>
                                        <!--end level 3-->
                                    </li>
                                    <li><a href="#">پست تک </a>
                                        <!--start level 3-->
                                        <ul>
                                            <li><a href="blog-single.html">پست استاندارد تک</a></li>
                                            <li><a href="blog-single-audio.html">پست صوتی تک</a></li>
                                            <li><a href="blog-single-video.html">پست ویدیو تک</a></li>
                                            <li><a href="blog-single-gallery.html">پست گالری تک</a></li>
                                        </ul>
                                        <!--end level 3-->
                                    </li>
                                </ul>
                                <!--end level 2-->
                            </li>
                            <li><a href="#">اجزاء <i class="fa fa-angle-down"></i></a>
                                <!--mega menu start-->
                                <div class="mega-menu full-nav  ">
                                    <div class="col5">
                                        <!--<h3>Components</h3>-->
                                        <ol>
                                            <li><a href="component-accordions.html">آکاردئون ها</a></li>
                                            <li><a href="component-alert.html">هشدار ها</a></li>
                                            <li><a href="component-blurb.html">اعلان</a></li>
                                            <li><a href="component-buttons.html">دکمه ها</a></li>
                                            <li><a href="component-call-to-action.html">تماس به عملکردها</a></li>
                                            <li><a href="component-card.html">کارت ها</a></li>
                                            <li><a href="component-carousel.html">چرخ فلک ها</a></li>
                                            <li><a href="component-clients.html">مشتریان</a></li>
                                        </ol>
                                    </div>
                                    <div class="col5">
                                        <!--<h3> &nbsp;</h3>-->
                                        <ol>
                                            <li><a href="component-countdown.html">شمارش معکوس</a></li>
                                            <li><a href="component-footer.html">پاورقی ها</a></li>
                                            <li><a href="component-form.html">فرم ها</a></li>
                                            <li><a href="component-fun-factor.html">عوامل سرگرم کننده</a></li>
                                            <li><a href="component-gradient-background.html">پس زمینه گرادیان</a></li>
                                            <li><a href="component-grid-even.html">شبکه</a></li>
                                            <li><a href="component-grid-masonry.html">ساختمان شبکه ای</a></li>
                                            <li><a href="component-hero-header.html">سربرگ حرفه ای</a></li>
                                        </ol>
                                    </div>

                                    <div class="col5">
                                        <!--<h3>Extra Pages</h3>-->
                                        <ol>
                                            <li><a href="component-icon-box.html">جعبه آیکون</a></li>
                                            <li><a href="component-image-background.html">تصویر پس زمینه</a></li>
                                            <li><a href="component-image-block.html">بلوک های تصویر</a></li>
                                            <li><a href="component-list.html">لیست ها</a></li>
                                            <li><a href="component-list-group.html">لیست گروه ها</a></li>
                                            <li><a href="component-modal.html">مدال ها</a></li>
                                            <li><a href="component-parallax.html">پارالاکس</a></li>
                                            <li><a href="component-pricing-table.html">جداول قیمت</a></li>
                                        </ol>
                                    </div>
                                    <div class="col5">
                                        <!--<h3>Layouts</h3>-->
                                        <ol>
                                            <li><a href="component-progress-bar.html">میله پیشرفت</a></li>
                                            <li><a href="component-slider.html">اسلایدر ها</a></li>
                                            <li><a href="component-steps.html">مراحل</a></li>
                                            <li><a href="component-subscription.html">اشتراک ها</a></li>
                                            <li><a href="component-table.html">جداول</a></li>
                                            <li><a href="component-tabs.html">زبانه ها</a></li>
                                            <li><a href="component-team.html">تیم ها</a></li>
                                            <li><a href="component-testimonial.html">مشتریان</a></li>
                                        </ol>
                                    </div>
                                    <div class="col5">
                                        <!--<h3>Icons</h3>-->
                                        <ol>
                                            <li><a href="component-twitter.html">توییتر <span class="badge badge-pill badge-success text-white d-inline-block ml-2 py-1 px-2">زنده</span></a></li>
                                            <li><a href="component-typed-text.html">متن تایپ شده</a></li>
                                            <li><a href="component-typography.html">تایپوگرافی</a></li>
                                            <li><a href="component-video.html">ویدیو</a></li>
                                        </ol>
                                    </div>

                                </div>
                                <!--mega menu end-->
                            </li>
                            <li class="menu-right"><a href="#">نمونه کار <i class="fa fa-angle-down"></i></a>
                                <!--start level 2-->
                                <ul>
                                    <li><a href="#">شبکه</a>
                                        <!--start level 3-->
                                        <ul>
                                            <li><a href="portfolio-grid-2.html">ستون دو</a></li>
                                            <li><a href="portfolio-grid-3.html">ستون سه</a></li>
                                            <li><a href="portfolio-grid-4.html">ستون چهار</a></li>
                                        </ul>
                                        <!--end level 3-->
                                    </li>
                                    <li><a href="#">شبکه کامل عرض</a>
                                        <!--start level 3-->
                                        <ul>
                                            <li><a href="portfolio-grid-2-fullwidth.html">ستون دو</a></li>
                                            <li><a href="portfolio-grid-3-fullwidth.html">ستون سه</a></li>
                                            <li><a href="portfolio-grid-4-fullwidth.html">ستون چهار</a></li>
                                        </ul>
                                        <!--end level 3-->
                                    </li>
                                    <li><a href="#">عنوان شبکه</a>
                                        <!--start level 3-->
                                        <ul>
                                            <li><a href="portfolio-grid-title-2.html">ستون دو</a></li>
                                            <li><a href="portfolio-grid-title-3.html">ستون سه</a></li>
                                            <li><a href="portfolio-grid-title-4.html">ستون چهار</a></li>
                                        </ul>
                                        <!--end level 3-->
                                    </li>
                                    <li><a href="#">ساختمانی</a>
                                        <!--start level 3-->
                                        <ul>
                                            <li><a href="portfolio-masonry-2.html">ستون دو</a></li>
                                            <li><a href="portfolio-masonry-3.html">ستون سه</a></li>
                                            <li><a href="portfolio-masonry-4.html">ستون چهار</a></li>
                                        </ul>
                                        <!--end level 3-->
                                    </li>
                                    <li><a href="#">مصالح ساختمانی عرض کامل</a>
                                        <!--start level 3-->
                                        <ul>
                                            <li><a href="portfolio-masonry-2-fullwidth.html">ستون دو</a></li>
                                            <li><a href="portfolio-masonry-3-fullwidth.html">ستون سه</a></li>
                                            <li><a href="portfolio-masonry-4-fullwidth.html">ستون چهار</a></li>
                                        </ul>
                                        <!--end level 3-->
                                    </li>
                                    <li><a href="#">عنوان ساختمان</a>
                                        <!--start level 3-->
                                        <ul>
                                            <li><a href="portfolio-masonry-title-2.html">ستون دو</a></li>
                                            <li><a href="portfolio-masonry-title-3.html">ستون سه</a></li>
                                            <li><a href="portfolio-masonry-title-4.html">ستون چهار</a></li>
                                        </ul>
                                        <!--end level 3-->
                                    </li>

                                    <li><a href="portfolio-single.html">تک پروژه</a></li>

                                </ul>
                                <!--end level 2-->
                            </li>
                            <li><a href="#"> فروشگاه <i class="fa fa-angle-down"></i></a>
                                <!--start level 2-->
                                <ul>
                                    <li><a href="shop-2.html">شبکه فروشگاه 2 </a></li>
                                    <li><a href="shop-3.html">شبکه فروشگاه 3 </a></li>
                                    <li><a href="shop-4.html">شبکه فروشگاه 4 </a></li>
                                    <li><a href="shop-single.html">تک فروش </a></li>
                                    <li><a href="shop-cart.html">صفحه سبد خرید</a></li>
                                    <li><a href="shop-checkout.html">صفحه بررسی</a></li>
                                </ul>
                                <!--end level 2-->
                            </li>
                            <li><a href="#"> پشتیبانی <i class="fa fa-angle-down"></i></a>
                                <!--start level 2-->
                                <ul>
                                    <li>
                                        <a href="mailto:dkmosa@gmail.com?subject=Clab-Support" class="d-flex">
                                            <i class="vl-support font-size-20"></i>
                                            <div class="font-weight-700">برای پشتیبانی بیایید</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://thevectorlab.net/clab-doc" target="_blank" class="d-flex">
                                            <i class="vl-file font-size-20"></i>
                                            <div class="font-weight-700">کمک آنلاین</div>
                                        </a>
                                    </li>
                                </ul>
                                <!--end level 2-->
                            </li>
                        </ul>
                        <!--end nav-->
                    </nav>
                    <!--top mega menu end-->
                </div>
            </div>
        </div>
    </header>
    <!--header end-->
    <!--blog start-->
    <section class="section-gap">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-8">


                    <?php if (count((array)$posts) <> 0) : ?>
                        <?php foreach ($posts as $pid => $post) : ?>
                            <div class="card border-0 mb-4 box-hover">
                                <div class="card-body row align-items-center">
                                    <div class="col-md-4 mb-md-0 mb-3">
                                        <a href="#"><img class="card-img" src="assets/img/cards/10a.jpg" alt=""></a>
                                    </div>
                                    <div class="col-md-8">
                                        <a href="#" class="font-size-14">categories</a>
                                        <h6 class="my-2"><a href="#"><?= $post->title ?></a></h6>
                                        <span class="font-size-14 text-muted">create_date</span>
                                        <div class="mt-3">
                                            <p><?= $post->content ?></p>
                                        </div>
                                        <div><?= $post->author ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    <?php endif ?>
                    <!--pagination-->
                    <div class="pagination justify-content-center mt-lg-5 mb-4">
                        <a href="#" class="btn btn-dark disabled"><i class="fa fa-angle-left"></i></a>
                        <div class="h6 mt-2 mx-4">
                            1 از 17
                        </div>
                        <a href="#" class="btn btn-dark"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog-widget mb-4">
                        <div class="card card-body border-0">

                            <h6 class="mb-2">وضعیت شما :</h6>
                            <?php if (is_logged() == true) : ?>
                                <?php if (is_admin() == true) : ?>
                                    <ul class="footer-link">
                                        <li class="d-block"><a href="<?= BASE_URL . 'panel' ?>">پنل مدیریت</a></li>
                                    <?php else : ?>
                                        <li class="d-block"><a href="#">پنل کاربری</a></li>
                                    <?php endif  ?>
                                <?php else : ?>
                                    <li class="d-block"><a href="#">وارد شوید</a></li>
                                <?php endif  ?>
                                    </ul>
                        </div>
                    </div>
                    <div class="blog-widget mb-4">

                        <form action="" method="GET">
                            <div class="form-group">
                                <div class="icon-field">
                                    <i class="vl-search"></i>
                                    <input type="text" name="search" value="<?= (is_search()) ? $_GET['search'] : ''  ?>" class="form-control" placeholder="جستجو">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="blog-widget mb-4">
                        <h6 class="mb-4">دسته بندی ها</h6>
                        <div class="list-group list-group-right-arrow">
                            <a href="#" class="list-group-item">هنر (20)</a>
                            <a href="#" class="list-group-item">غذا (32)</a>
                            <a href="#" class="list-group-item">شیوه زندگی (17)</a>
                            <a href="#" class="list-group-item">سفر (02)</a>
                        </div>
                    </div>
                    <div class="blog-widget mb-4">
                        <div class="card border-0 mb-md-0 mb-3">
                            <img class="card-img-top" src="assets/img/blog/blog-author.jpg" alt="card image" />
                            <div class="card-body py-4">
                                <h6 class="mb-2">عباسی</h6>
                                <div>
                                    <p class="font-lora">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                    <div class="p-0 social-links mb-0 mt-4">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-widget mb-4">
                        <h6 class="mb-4">پست های اخیر</h6>
                        <div class="card border-0 mb-1">
                            <div class="card-body row align-items-center">
                                <div class="col-4">
                                    <a href="#"><img class="card-img" src="assets/img/blog/bt-1.jpg" alt=""></a>
                                </div>
                                <div class="col-8">
                                    <h6 class="my-2 font-size-14"><a href="#">زندگی پرحجم در لس آنجلس</a></h6>
                                    <span class="font-size-14 text-muted">فروردین 1398</span>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-1">
                            <div class="card-body row align-items-center">
                                <div class="col-4">
                                    <a href="#"><img class="card-img" src="assets/img/blog/bt-2.jpg" alt=""></a>
                                </div>
                                <div class="col-8">
                                    <h6 class="my-2 font-size-14"><a href="#">قیمت عالی برای قالب کلاب</a></h6>
                                    <span class="font-size-14 text-muted">فروردین 1398</span>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-1">
                            <div class="card-body row align-items-center">
                                <div class="col-4">
                                    <a href="#"><img class="card-img" src="assets/img/blog/bt-3.jpg" alt=""></a>
                                </div>
                                <div class="col-8">
                                    <h6 class="my-2 font-size-14"><a href="#">نمونه طراحی های ما را دنبال کنید</a></h6>
                                    <span class="font-size-14 text-muted">فروردین 1398</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-widget mb-4">
                        <div class="card card-body border-0">
                            <h6 class="mb-2">مشترک شدن</h6>
                            <p class="text-muted font-size-14">ثبت نام کنید و خبرنامه ما را دریافت کنید</p>
                            <form>
                                <div class="form-group mb-0 mt-3">
                                    <div class="icon-field-right">
                                        <i class="fa fa-paper-plane text-primary"></i>
                                        <input type="email" class="form-control" placeholder="آدرس ایمیل خود را وارد نمایید">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="blog-widget mb-4">
                        <div class="card card-body border-0">
                            <h6 class="mb-2">اینستاگرام</h6>
                            <p class="text-muted font-size-14">عکس ها ازاینستاگرام نشان داده می شوند</p>
                            <div class="instagram-feed">
                                <a href="#"><img src="assets/img/cards/10a.jpg" alt=""></a>
                                <a href="#"><img src="assets/img/cards/10b.jpg" alt=""></a>
                                <a href="#"><img src="assets/img/cards/10c.jpg" alt=""></a>
                                <a href="#"><img src="assets/img/cards/11a.jpg" alt=""></a>
                                <a href="#"><img src="assets/img/cards/12a.jpg" alt=""></a>
                                <a href="#"><img src="assets/img/cards/3a.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-widget mb-4">
                        <div class="card card-body border-0 text-center py-5">
                            <h6 class="mb-2 text-muted mt-lg-4 font-size-14">افزودن بنر</h6>
                            <p class="text-muted font-size-14">500X400</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog end-->


    <!--footer start-->
    <footer class="app-footer bg-dark pb-0 border-0 text-md-left text-center">
        <div class="container">
            <div class="row align-items-center mb-md-5 mb-3">
                <div class="col-md-4">
                    <img class="pr-3 mb-md-0 mb-4" src="assets/img/logo-color.png" srcset="assets/img/logo-color@2x.png 2x" alt="">
                </div>
                <div class="col-md-8">
                    <span class="font-lora h5 font-weight-normal">- یک بسته ساز قدرتمند خلاق برای بوت استرپ 4</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-md-0 mb-4">
                    <p class="text-muted">یک مجموعه بزرگ و قدرتمند از بسته بندی جزء مدرن برای ساختن وب سایت بهتر برای پروژه بعدی شما</p>
                </div>
                <div class="col-md-2 mb-md-0 mb-4">
                    <h6 class="mb-4">حرکت کن</h6>
                    <ul class="footer-link">
                        <li class="d-block"><a href="#">پیش نمایش</a></li>
                        <li class="d-block"><a href="#">صفحات فرود</a></li>
                        <li class="d-block"><a href="#">صفحات اپ</a></li>
                        <li class="d-block"><a href="#">صفحات داخلی</a></li>
                    </ul>
                </div>
                <div class="col-md-2 mb-md-0 mb-4">
                    <h6 class="mb-4">پلتفرم</h6>
                    <ul class="footer-link">
                        <li class="d-block"><a href="#">iOS مک و </a></li>
                        <li class="d-block"><a href="#">آندروید و جاوا</a></li>
                        <li class="d-block"><a href="#">ویندوز</a></li>
                        <li class="d-block"><a href="#">لینوکس</a></li>
                    </ul>
                </div>
                <div class="col-md-2 mb-md-0 mb-4">
                    <h6 class="mb-4">جامعه</h6>
                    <ul class="footer-link">
                        <li class="d-block"><a href="#">پایگاه دانش</a></li>
                        <li class="d-block"><a href="#">یک کارشناس استخدام کنید</a></li>
                        <li class="d-block"><a href="#">گفت و گو</a></li>
                        <li class="d-block"><a href="#">تماس</a></li>
                    </ul>
                </div>
                <div class="col-md-2 mb-md-0 mb-4">
                    <h6 class="mb-4">شرکت</h6>
                    <ul class="footer-link">
                        <li class="d-block"><a href="#">درباره شرکت</a></li>
                        <li class="d-block"><a href="#">تاریخ</a></li>
                        <li class="d-block"><a href="#">تیم</a></li>
                        <li class="d-block"><a href="#">سرمایه گذاری</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="app-secondary-footer mt-md-5 mt-3">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <span class="copyright">© 2019 کلاب. تمام حقوق محفوظ است.</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <!--basic scripts-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/vl-nav/js/vl-menu.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendor/owl/owl.carousel.min.js"></script>
    <script src="assets/vendor/jquery.animateNumber.min.js"></script>
    <script src="assets/vendor/jquery.countdown.min.js"></script>
    <script src="assets/vendor/typist.js"></script>
    <script src="assets/vendor/jquery.isotope.js"></script>
    <script src="assets/vendor/imagesloaded.js"></script>
    <script src="assets/vendor/visible.js"></script>
    <script src="assets/vendor/wow.min.js"></script>

    <!--basic scripts initialization-->
    <script src="assets/js/scripts.js"></script>

</body>

</html>