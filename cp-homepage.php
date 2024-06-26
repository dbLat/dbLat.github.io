<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = "techshopDB";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_error());
    exit();
}

session_start();
$error = "";

if(!isset($_SESSION['username'])) {
 header("Location: index.html");
 exit(); 
}
?>

<!DOCTYPE html>
<html>
 <head>
  <title>CHES Cellphone and Accessories Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--css-->
  <link href="cp-homepage.css" type="text/css" rel="stylesheet" />
  <!---->

  <!--fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Krona+One&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
  <!---->

  <!--icons-->
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.2.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.2.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.2.0/uicons-solid-straight/css/uicons-solid-straight.css'>
  <!---->

<!-- Web logo-->
<link rel="icon" href="icons/logo.svg">

 </head>
 <body>

  <!--header-->
  <div class="header-container">
    <div class="left-header">
     <img src="icons/logo.svg">
     <p>CHES</p>
    </div>
    <div class="navbar">
     <div class="menu" id="hidden-menu">
      <a href="#"><button class="menu-btn-vivo">Cellphones</button></a>
      <a href="accessories-homepage.html"><button class="menu-btn">Accessories</button></a>
      <a href="services-homepage.html"><button class="menu-btn">Services</button></a>
      <a href="about-us.html"><button class="menu-btn">About Us</button></a>
     </div>
     <div class="right-header">
      <div id="account-btn">
       <img src="icons/account.svg">
       <!--account menu//hidden-->
       <div class="account-container">
        <div class="accounts-menu">
          <div class="accounts-menu">
            <div class="acc-menu-btn" id="myProfile"><i class="fi fi-rr-user"></i>My Profile</div>
            <div class="acc-menu-btn"><i class="fi fi-rr-reservation-table"></i><a href="my-reservations.html">My Reservations</a></div>
            <div class="acc-menu-btn"><i class="fi fi-rr-reservation-table"></i><a href="my-appointments.html">My Appointments</a></div>
            <div class="acc-menu-btn" id="logOut"><i class="fi fi-rr-exit"></i>Log out</div>
          </div>
        </div>
       </div>
       <!---->
      </div>
      <div id="menu-icon">
       <i class="fi fi-br-bars-staggered"></i>
      </div>
      <div class="x">
        <i class="fi fi-br-cross"></i>
      </div>
     </div>
    </div>
   </div>
   <!---->
   <div class="bodiv">
        <div class="maindiv">
  
            <form > 
                <select id="dropdown" class="dropdown" name="dropdown"> 
                <option value="vivo" selected>Vivo</option> 
                <option value="tecno">Tecno</option> 
                <option value="infinix">Infinix</option> 
                <option value="zte">ZTE</option> 
                <option value="realme">Realme</option> 
                </select> 
            </form>
            
            <div class="search-con">
              <input class="search" type="search" name="search"/>
              <button class="search-button"><p>Search</p><img class="search-icon" src="icons/search.svg"></button>
            </div>
        </div>
        <!--vivo new arrivals container-->
    <div id="vivo-product-container" class="content">
      <div class="vivo-container">
        <p class="vivo-txt">Vivo</p>
        <div class="phone-choices">
          <a href="#" class="vivo-new-arrivals" id="vivo-new-arrivals">New Arrivals</a>
          <a href="#" class="vivo-best-seller" id="vivo-best-seller">Best Seller</a>
        </div>
      </div>
      <div class="cellphone1" id="cellphone1">
      <div class="cellphone-container vivo1">
            <div class="first-half">
              <p class="cp-brand">Vivo V29</p><br>
                <ul class="cp-dets">
                  <li>Qualcomm Snapdragon 778G Processor</li>
                  <li>12 GB + 256 GB (RAM & ROM)</li>
                  <li>12 GB + 512 GB (RAM & ROM)</li>
                </ul>
                <br>
              <a href="cp-overview.html"><p class="cp-specs"><u>See full specs</u></p></a><br>
              <a href="reservation-form.html"><button class="pre-order-btn">Pre order now</button></a>
            </div>
            <div class="sec-half">
              <p>Php 15, 980</p>
              <img src="product-img/cp-vivo1.svg" alt="vivo1">
            </div>
      </div>
      <div class="cellphone-container vivo2">
        <div class="first-half">
          <p class="cp-brand">Vivo Y02T</p><br>
            <ul class="cp-dets cp-dets2">
              <li>Helio P35 Processor</li>
              <li>4GB RAM</li>
              <li>64GB Storage</li>
              <li>5000 mAh (TYP) Battery</li>
            </ul>
            <br>
          <p class="cp-specs"><u>See full specs</u></p><br>
          <button class="pre-order-btn">Pre order now</button>
        </div>
        <div class="sec-half">
          <p>Php 12,980</p>
          <img src="product-img/cp-vivo2.svg" alt="vivo1">
        </div>
      </div>
      </div>
      <div class="cellphone2" id="cellphone2">
        <div class="cellphone-container vivo1">
          <div class="first-half">
            <p class="cp-brand">Vivo V29</p><br>
              <ul class="cp-dets">
                <li>Qualcomm Snapdragon 778G Processor</li>
                <li>12 GB + 256 GB (RAM & ROM)</li>
                <li>12 GB + 512 GB (RAM & ROM)</li>
              </ul>
              <br>
              <a href="cp-overview.html"><p class="cp-specs"><u>See full specs</u></p></a><br>
            <a href="reservation-form.html"><button class="pre-order-btn">Pre order now</button></a>
          </div>
          <div class="sec-half">
            <p>Php 15, 980</p>
            <img src="product-img/cp-vivo1.svg" alt="vivo1">
          </div>
        </div>
        <div class="cellphone-container vivo2">
          <div class="first-half">
            <p class="cp-brand">Vivo Y02T</p><br>
              <ul class="cp-dets">
                <li>Helio P35 Processor</li>
                <li>4GB RAM</li>
                <li>64GB Storage</li>
                <li>5000 mAh (TYP) Battery</li>
              </ul>
              <br>
            <p class="cp-specs"><u>See full specs</u></p><br>
            <button class="pre-order-btn">Pre order now</button>
          </div>
          <div class="sec-half">
            <p>Php 12,980</p>
            <img src="product-img/cp-vivo2.svg" alt="vivo1">
          </div>
        </div>
      </div>
      <div class="cellphone3" id="cellphone3">
        <div class="cellphone-container vivo1">
          <div class="first-half">
            <p class="cp-brand">Vivo V29</p><br>
              <ul class="cp-dets">
                <li>Qualcomm Snapdragon 778G Processor</li>
                <li>12 GB + 256 GB (RAM & ROM)</li>
                <li>12 GB + 512 GB (RAM & ROM)</li>
              </ul>
              <br>
              <a href="cp-overview.html"><p class="cp-specs"><u>See full specs</u></p></a><br>
            <a href="reservation-form.html"><button class="pre-order-btn">Pre order now</button></a>
          </div>
          <div class="sec-half">
            <p>Php 15, 980</p>
            <img src="product-img/cp-vivo1.svg" alt="vivo1">
          </div>
        </div>
        <div class="cellphone-container vivo2">
          <div class="first-half">
            <p class="cp-brand">Vivo Y02T</p><br>
              <ul class="cp-dets">
                <li>Helio P35 Processor</li>
                <li>4GB RAM</li>
                <li>64GB Storage</li>
                <li>5000 mAh (TYP) Battery</li>
              </ul>
              <br>
            <p class="cp-specs"><u>See full specs</u></p><br>
            <button class="pre-order-btn">Pre order now</button>
          </div>
          <div class="sec-half">
            <p>Php 12,980</p>
            <img src="product-img/cp-vivo2.svg" alt="vivo1">
          </div>
        </div>
      </div>
      
   
   </div>
   <!---->
 
   <!--vivo best seller container//hidden-->
   <div id="vivo-product-container2">
          <div class="vivo-container2">
            <p class="vivo-txt">Vivo</p>
            <div class="phone-choices">
              <a href="#" class="vivo-new-arrivals2" id="vivo-new-arrivals2">New Arrivals</a>
              <a href="#" class="vivo-best-seller2" id="vivo-best-seller2">Best Seller</a>
            </div>
          </div>
          <div class="cellphone4" id="cellphone4">
                <div class="cellphone-container vivo1">
                  <div class="first-half">
                    <p class="cp-brand">Vivo Y02T</p><br>
                      <ul class="cp-dets">
                        <li>Helio P35 Processor</li>
                        <li>4GB RAM</li>
                        <li>64GB Storage</li>
                        <li>5000 mAh (TYP) Battery</li>
                      </ul>
                      <br>
                    <p class="cp-specs"><u>See full specs</u></p><br>
                    <button class="pre-order-btn">Pre order now</button>
                  </div>
                  <div class="sec-half">
                    <p>Php 12,980</p>
                    <img src="product-img/cp-vivo2.svg" alt="vivo1">
                  </div>
                </div>
            <div class="cellphone-container vivo2">
                <div class="first-half">
                <p class="cp-brand">Vivo V29</p><br>
                  <ul class="cp-dets">
                    <li>Qualcomm Snapdragon 778G Processor</li>
                    <li>12 GB + 256 GB (RAM & ROM)</li>
                    <li>12 GB + 512 GB (RAM & ROM)</li>
                  </ul>
                  <br>
                  <a href="cp-overview.html"><p class="cp-specs"><u>See full specs</u></p></a><br>
                <a href="reservation-form.html"><button class="pre-order-btn">Pre order now</button></a>
              </div>
              <div class="sec-half">
                <p>Php 15, 980</p>
                <img src="product-img/cp-vivo1.svg" alt="vivo1">
              </div>
            </div>
          </div>
        <div class="cellphone5" id="cellphone5">
              <div class="cellphone-container vivo1">
                <div class="first-half">
                  <p class="cp-brand">Vivo Y02T</p><br>
                    <ul class="cp-dets">
                      <li>Helio P35 Processor</li>
                      <li>4GB RAM</li>
                      <li>64GB Storage</li>
                      <li>5000 mAh (TYP) Battery</li>
                    </ul>
                    <br>
                  <p class="cp-specs"><u>See full specs</u></p><br>
                  <button class="pre-order-btn">Pre order now</button>
                </div>
                <div class="sec-half">
                  <p>Php 12,980</p>
                  <img src="product-img/cp-vivo2.svg" alt="vivo1">
                </div>
              </div>
              <div class="cellphone-container vivo2">
                <div class="first-half">
                  <p class="cp-brand">Vivo V29</p><br>
                    <ul class="cp-dets">
                      <li>Qualcomm Snapdragon 778G Processor</li>
                      <li>12 GB + 256 GB (RAM & ROM)</li>
                      <li>12 GB + 512 GB (RAM & ROM)</li>
                    </ul>
                    <br>
                    <a href="cp-overview.html"><p class="cp-specs"><u>See full specs</u></p></a><br>
                  <a href="reservation-form.html"><button class="pre-order-btn">Pre order now</button></a>
                </div>
                <div class="sec-half">
                  <p>Php 15, 980</p>
                  <img src="product-img/cp-vivo1.svg" alt="vivo1">
                </div>
              </div>
        </div>
        <div class="cellphone6" id="cellphone6">
            <div class="cellphone-container vivo1">
              <div class="first-half">
                <p class="cp-brand">Vivo Y02T</p><br>
                  <ul class="cp-dets">
                    <li>Helio P35 Processor</li>
                    <li>4GB RAM</li>
                    <li>64GB Storage</li>
                    <li>5000 mAh (TYP) Battery</li>
                  </ul>
                  <br>
                <p class="cp-specs"><u>See full specs</u></p><br>
                <button class="pre-order-btn">Pre order now</button>
              </div>
              <div class="sec-half">
                <p>Php 12,980</p>
                <img src="product-img/cp-vivo2.svg" alt="vivo1">
              </div>
            </div>
            <div class="cellphone-container vivo2">
              <div class="first-half">
                <p class="cp-brand">Vivo V29</p><br>
                  <ul class="cp-dets">
                    <li>Qualcomm Snapdragon 778G Processor</li>
                    <li>12 GB + 256 GB (RAM & ROM)</li>
                    <li>12 GB + 512 GB (RAM & ROM)</li>
                  </ul>
                  <br>
                  <a href="cp-overview.html"><p class="cp-specs"><u>See full specs</u></p></a><br>
                <a href="reservation-form.html"><button class="pre-order-btn">Pre order now</button></a>
              </div>
              <div class="sec-half">
                <p>Php 15, 980</p>
                <img src="product-img/cp-vivo1.svg" alt="vivo1">
              </div>
            </div>
          </div>
      </div>
   <!---->

      <!--tecno new arrivals container-->
          <div id="tecno-product-container" class="content">
            <div class="tecno-container">
            <p class="tecno-txt">Tecno</p>
            <div class="phone-choices">
              <a href="#" class="tecno-new-arrivals" id="tecno-new-arrivals">New Arrivals</a>
              <a href="#" class="tecno-best-seller" id="tecno-best-seller">Best Seller</a>
            </div>
            </div>
            <div class="cellphone1" id="cellphone1">
            <div class="cellphone-container tecno1">
                  <div class="first-half">
                    <p class="cp-brand">Tecno POVA 6 Pro 5G</p><br>
                      <ul class="cp-dets">
                        <li>MediaTek Dimensity 6080 5G Gaming Processor</li>
                        <li>24RAM+256ROM Super Memory</li>
                        <li>6000mAh Battery/70W Ultra Charge</li>
                      </ul>
                      <br>
                    <p class="cp-specs"><u>See full specs</u></p><br>
                    <button class="pre-order-btn">Pre order now</button>
                  </div>
                  <div class="sec-half">
                    <p>Php 10,499</p>
                    <img src="product-img/cp-tecno1.svg" alt="tecno1">
                  </div>
            </div>
            <div class="cellphone-container tecno2">
              <div class="first-half">
                <p class="cp-brand">Tecno Spark 20</p><br>
                  <ul class="cp-dets">
                    <li>Android 13 (Go edition), HIOS 13</li>
                    <li>256GB 8GB RAM</li>
                    <li>50 MP Camera</li>
                    <li>Li-Po 5000 mAh Battery Life</li>
                  </ul>
                  <br>
                <p class="cp-specs"><u>See full specs</u></p><br>
                <button class="pre-order-btn">Pre order now</button>
              </div>
              <div class="sec-half">
                <p>Php 9,980</p>
                <img src="product-img/cp-tecno2.svg" alt="tecno2">
              </div>
            </div>
            </div>
            <div class="cellphone2" id="cellphone2">
              <div class="cellphone-container tecno1">
                <div class="first-half">
                  <p class="cp-brand">Tecno POVA 6 Pro 5G</p><br>
                    <ul class="cp-dets">
                      <li>MediaTek Dimensity 6080 5G Gaming Processor</li>
                      <li>24RAM+256ROM Super Memory</li>
                      <li>6000mAh Battery/70W Ultra Charge</li>
                    </ul>
                    <br>
                  <p class="cp-specs"><u>See full specs</u></p><br>
                  <button class="pre-order-btn">Pre order now</button>
                </div>
                <div class="sec-half">
                  <p>Php 10,499</p>
                  <img src="product-img/cp-tecno1.svg" alt="tecno1">
                </div>
              </div>
              <div class="cellphone-container tecno2">
                <div class="first-half">
                  <p class="cp-brand">Tecno Spark 20</p><br>
                    <ul class="cp-dets">
                      <li>Android 13 (Go edition), HIOS 13</li>
                      <li>256GB 8GB RAM</li>
                      <li>50 MP Camera</li>
                      <li>Li-Po 5000 mAh Battery Life</li>
                    </ul>
                    <br>
                  <p class="cp-specs"><u>See full specs</u></p><br>
                  <button class="pre-order-btn">Pre order now</button>
                </div>
                <div class="sec-half">
                  <p>Php 9,980</p>
                  <img src="product-img/cp-tecno2.svg" alt="tecno2">
                </div>
              </div>
            </div>
            <div class="cellphone3" id="cellphone3">
              <div class="cellphone-container tecno1">
                <div class="first-half">
                  <p class="cp-brand">Tecno POVA 6 Pro 5G</p><br>
                    <ul class="cp-dets">
                      <li>MediaTek Dimensity 6080 5G Gaming Processor</li>
                      <li>24RAM+256ROM Super Memory</li>
                      <li>6000mAh Battery/70W Ultra Charge</li>
                    </ul>
                    <br>
                  <p class="cp-specs"><u>See full specs</u></p><br>
                  <button class="pre-order-btn">Pre order now</button>
                </div>
                <div class="sec-half">
                  <p>Php 10,499</p>
                  <img src="product-img/cp-tecno1.svg" alt="tecno1">
                </div>
              </div>
              <div class="cellphone-container vivo2">
                <div class="first-half">
                  <p class="cp-brand">Tecno Spark 20</p><br>
                    <ul class="cp-dets">
                      <li>Android 13 (Go edition), HIOS 13</li>
                      <li>256GB 8GB RAM</li>
                      <li>50 MP Camera</li>
                      <li>Li-Po 5000 mAh Battery Life</li>
                    </ul>
                    <br>
                  <p class="cp-specs"><u>See full specs</u></p><br>
                  <button class="pre-order-btn">Pre order now</button>
                </div>
                <div class="sec-half">
                  <p>Php 9,980</p>
                  <img src="product-img/cp-tecno2.svg" alt="tecno2">
                </div>
              </div>
            </div>
            
        
        </div>
        <!---->
      
        <!--tecno best seller container//hidden-->
        <div id="tecno-product-container2">
                <div class="tecno-container2">
                  <p class="tecno-txt">Tecno</p>
                  <div class="phone-choices">
                    <a href="#" class="tecno-new-arrivals2" id="tecno-new-arrivals2">New Arrivals</a>
                    <a href="#" class="tecno-best-seller2" id="tecno-best-seller2">Best Seller</a>
                  </div>
                </div>
                <div class="cellphone4" id="cellphone4">
                      <div class="cellphone-container tecno1">
                        <div class="first-half">
                          <p class="cp-brand">Tecno Spark 20</p><br>
                            <ul class="cp-dets">
                              <li>Android 13 (Go edition), HIOS 13</li>
                              <li>256GB 8GB RAM</li>
                              <li>50 MP Camera</li>
                              <li>Li-Po 5000 mAh Battery Life</li>
                            </ul>
                            <br>
                          <p class="cp-specs"><u>See full specs</u></p><br>
                          <button class="pre-order-btn">Pre order now</button>
                        </div>
                        <div class="sec-half">
                          <p>Php 9,980</p>
                          <img src="product-img/cp-tecno2.svg" alt="tecno2">
                        </div>
                      </div>
                  <div class="cellphone-container tecno2">
                    <div class="first-half">
                      <p class="cp-brand">Tecno POVA 6 Pro 5G</p><br>
                        <ul class="cp-dets">
                          <li>MediaTek Dimensity 6080 5G Gaming Processor</li>
                          <li>24RAM+256ROM Super Memory</li>
                          <li>6000mAh Battery/70W Ultra Charge</li>
                        </ul>
                        <br>
                      <p class="cp-specs"><u>See full specs</u></p><br>
                      <button class="pre-order-btn">Pre order now</button>
                    </div>
                    <div class="sec-half">
                      <p>Php 10,499</p>
                      <img src="product-img/cp-tecno1.svg" alt="tecno1">
                    </div>
                  </div>
                </div>
              <div class="cellphone5" id="cellphone5">
                    <div class="cellphone-container tecno1">
                      <div class="first-half">
                        <p class="cp-brand">Tecno Spark 20</p><br>
                          <ul class="cp-dets">
                            <li>Android 13 (Go edition), HIOS 13</li>
                            <li>256GB 8GB RAM</li>
                            <li>50 MP Camera</li>
                            <li>Li-Po 5000 mAh Battery Life</li>
                          </ul>
                          <br>
                        <p class="cp-specs"><u>See full specs</u></p><br>
                        <button class="pre-order-btn">Pre order now</button>
                      </div>
                      <div class="sec-half">
                        <p>Php 9,980</p>
                        <img src="product-img/cp-tecno2.svg" alt="tecno2">
                      </div>
                    </div>
                    <div class="cellphone-container tecno2">
                      <div class="first-half">
                        <p class="cp-brand">Tecno POVA 6 Pro 5G</p><br>
                          <ul class="cp-dets">
                            <li>MediaTek Dimensity 6080 5G Gaming Processor</li>
                            <li>24RAM+256ROM Super Memory</li>
                            <li>6000mAh Battery/70W Ultra Charge</li>
                          </ul>
                          <br>
                        <p class="cp-specs"><u>See full specs</u></p><br>
                        <button class="pre-order-btn">Pre order now</button>
                      </div>
                      <div class="sec-half">
                        <p>Php 10,499</p>
                        <img src="product-img/cp-tecno1.svg" alt="tecno1">
                      </div>
                    </div>
              </div>
              <div class="cellphone6" id="cellphone6">
                  <div class="cellphone-container tecno1">
                    <div class="first-half">
                      <p class="cp-brand">Tecno Spark 20</p><br>
                        <ul class="cp-dets">
                          <li>Android 13 (Go edition), HIOS 13</li>
                          <li>256GB 8GB RAM</li>
                          <li>50 MP Camera</li>
                          <li>Li-Po 5000 mAh Battery Life</li>
                        </ul>
                        <br>
                      <p class="cp-specs"><u>See full specs</u></p><br>
                      <button class="pre-order-btn">Pre order now</button>
                    </div>
                    <div class="sec-half">
                      <p>Php 9,980</p>
                      <img src="product-img/cp-tecno2.svg" alt="tecno2">
                    </div>
                  </div>
                  <div class="cellphone-container tecno2">
                    <div class="first-half">
                      <p class="cp-brand">Tecno POVA 6 Pro 5G</p><br>
                        <ul class="cp-dets">
                          <li>MediaTek Dimensity 6080 5G Gaming Processor</li>
                          <li>24RAM+256ROM Super Memory</li>
                          <li>6000mAh Battery/70W Ultra Charge</li>
                        </ul>
                        <br>
                      <p class="cp-specs"><u>See full specs</u></p><br>
                      <button class="pre-order-btn">Pre order now</button>
                    </div>
                    <div class="sec-half">
                      <p>Php 10,499</p>
                      <img src="product-img/cp-tecno1.svg" alt="tecno1">
                    </div>
                  </div>
                </div>
            </div>
        <!---->
        
   
   
  </div>
    
  <div class="account-container">
   <div class="triangle"><i class="fi fi-ss-pyramid"></i></div>
   <div class="accounts-menu">
    <div class="acc-menu-btn" id="myProfile"><i class="fi fi-rr-user"></i>My Profile</div>
    <div class="acc-menu-btn"><i class="fi fi-rr-reservation-table"></i><a href="my-reservations.html">My Reservations</a></div>
    <div class="acc-menu-btn"><i class="fi fi-rr-reservation-table"></i><a href="my-appointments.html">My Appointments</a></div>
    <div class="acc-menu-btn" id="logOut"><i class="fi fi-rr-exit"></i>Log out</div>
   </div>
  </div>
  <!--script-->
  <script type="text/javascript" src="cp-homepage.js"></script>
 </body>
</html>

