</head>

<body>

  <header class="page-header">
    <!-- topline -->
    <div class="page-header__topline">
      <div class="container clearfix">

        <div class="currency">
          <a class="currency__change" href="customer/my_account.php?my_orders">
          <?php
          if(!isset($_SESSION['customer_email'])){
          echo "مرحباً : ضيف"; 
          }
          else
          { 
              echo "مرحباً : " . $_SESSION['customer_email'] . "";
            }
?>
          </a>
        </div>


        
        
        <ul class="login">

<li class="login__item">
<?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="customer_register.php" class="login__link">تسجيل</a>';
} 
  else
  { 
      echo '<a href="customer/my_account.php?my_orders" class="login__link">حسابي</a>';
  }   
?>  
</li>


<li class="login__item">
<?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="checkout.php" class="login__link">تسجيل دخول</a>';
} 
  else
  { 
      echo '<a href="./logout.php" class="login__link">تسجيل خروج</a>';
  }   
?>  
  
</li>
</ul>
      
      </div>
    </div>
    <!-- bottomline -->
    <div class="page-header__bottomline">
      <div class="container clearfix">

        <div class="logo">
          <a class="logo__link" href="index.php">
            <img class="logo__img" src="images/black-1.png" alt="Avenue fashion logotype" width="237" height="19">
          </a>
        </div>

        <nav class="main-nav">
          <ul class="categories">
          <a href="cart.php" class="btn btn--basket">
          <i class="icon-basket"></i>
            <?php items(); ?> 
          </a>
            <li class="categories__item">
              <a class="categories__link" href="shop.php">
                الاكثر مبيعاً
              </a>
              </li>

            <li class="categories__item">
              <a class="categories__link" href="shop.php">
                اكواب
               
              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link categories__link--active" href="shop.php">
             جميع المنتجات
              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link" href="shop.php">
                كتب فنتج
              </a>
            </li>

          <li class="categories__item">
              <a class="categories__link" href="customer/my_account.php?my_orders">
                حسابي
                <i class="icon-down-open-1"></i>
              </a>
              <div class="dropdown dropdown--lookbook">
                <div class="clearfix">
                  <div class="dropdown__half">
                    <div class="dropdown__heading">اعدادات الحساب</div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">المفضلات</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">طلباتي</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">سلة المشتريات</a>
                      </li>
                    </ul>
                  </div>
                  <div class="dropdown__half">
                    <div class="dropdown__heading"></div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">تعديل حسابي</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">تغيير كلمة السر</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">حذف حسابي</a>
                      </li>

                    </ul>
                  </div>
                </div>
             

              </div>

            </li>

          </ul>
        </nav>
      </div>
    </div>
  </header>