<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="hero">
      <a href="shop.php" class="btn1">عرض كل المنتجات
</a>
    </div>
    <!-- Main -->
    <div class="wrapper">
            <h1>المنتجات الاكثر مبيعاً<h1>
            
      </div>



    <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

    <?php

    getPro();

    ?>

    </div><!-- row Ends -->

    </div><!-- container Ends -->
    <!-- FOOTER -->
    <footer class="page-footer">

      <div class="footer-nav">
        <div class="container clearfix">

          <div class="footer-nav__col footer-nav__col--info">
            <div class="footer-nav__heading">معلومات</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">العلامة التجارية</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Local stores</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">خدمة العملاء</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Privacy &amp; cookies</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">موقع المكتبة</a>
              </li>
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--whybuy">
            <div class="footer-nav__heading">لماذا تشتري منا</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">الشحن  &amp; الاسترجاع</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">التوصيل الآمن</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">التوصيات</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">حائز على جائزة</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">آراء</a>
              </li>
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--account">
            <div class="footer-nav__heading">حسابك</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">تسجيل دخول</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">تسجيل جديد</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">مشاهدة السلة</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">عرض سجل البحث</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">تتبع الطلب</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">تحديث المعلومات</a>
              </li>
            </ul>
          </div>


          <div class="footer-nav__col footer-nav__col--contacts">
            <div class="footer-nav__heading">معلومات التواصل</div>

            <div class="phone">
            رقم الهاتف :
              <a class="phone__number" href="tel:0123456789">0771 555 1111</a>
            </div>
            <div class="email">
              البريد الاكتروني :
              <a href="mailto:support@yourwebsite.com" class="email__addr">support@claint.com</a>
            </div>
            <div class="banner-social">
            <a href="#" class="banner-social__link">
            <i class="icon-facebook"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-twitter"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-instagram"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-pinterest-circled"></i>
          </a>
          </div>
          </div>

        </div>
      </div>

      <div class="page-footer__subline">
        <div class="container clearfix">

          <div class="copyright">
            &copy; <?php echo date("Y");?> Vintug&trade;
          </div>

          <div class="developer">
            Developed by Abdullah Firas
          </div>

          <div class="designby">
            Design by Abdullah Firas
          </div>

        </div>
      </div>
    </footer>
</body>
</html>

