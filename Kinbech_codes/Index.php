<?php
        $conn = new mysqli('localhost','root','','res1'); 
        if($conn->connect_error){
            die('Connection Failed :'.$conn->connect_error);
        }
        
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Fira Sans:wght@300;700;800&display=swap"
    />
  </head>
  <body>
    <div class="landing-page">
      <div class="search8">
        <input
          class="search-bar8"
          type="search"
          placeholder="Search"
        />

        <img class="search-icon8" alt="" src="./public/search@2x.png" />
      </div>
      <div class="login" id="loginContainer">
        <div class="sing-up">Login</div>
      </div>
      <div class="singup" id="singupContainer">
        <div class="sing-up">Singup</div>
      </div>
      <div class="logo8">
        <div class="logo-child5"></div>
        <img
          class="untitled-design-8-18"
          alt=""
          src="./public/untitled-design-8-1@2x.png"
        />
      </div>
      <div class="home8"id="HomeText">Home</div>
      <div class="notification8">Notification</div>
      <img
        class="offer-section-icon1"
        alt=""
        src="./public/offer-section@2x.png"
      /><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <table>
        <?php
                  $sql="SELECT * from iteminfo WHERE id";
                  $result=$conn-> query($sql);
                  $count=1;
                  if ($result-> num_rows > 0){
                    while ($row=$result-> fetch_assoc()) {
                    $cat="Electronic"; 
                      if($row['category']==$cat ){ 
        ?>  
        <td>
              <div class="pro" id="productContainer6" style="margin: 50px;">
              <img style="border-radius: 20px;" src="./image/<?php echo $row['product_img']; ?>" ><br>
                <div class="name52"><?php echo $row['itemname']; ?></div>
               <div class="price-51">Price:-<?php echo $row['price'] ?></div>
                </div>
          </td><?php $count=$count+1;
        }}}
      ?></table>
    
      <table>
      <?php 
                $sql="SELECT * from iteminfo WHERE id";
                $result=$conn-> query($sql);
                $count=1;
                if ($result-> num_rows > 0){
                  while ($row=$result-> fetch_assoc()) {
                  $cat="Miscellaneous"; 
                    if($row['category']==$cat ){
      
          ?><td>
                      <div class="" id="productContainer7" style="margin: 50px;">
                      <img style="border-radius: 20px;" src="./image/<?php echo $row['product_img']; ?>" /> <br>
                        <div class="name52"><?php echo $row['itemname']; ?></div>
                        <div class="price-51">Price:-<?php echo $row['price'] ?></div>
                      </div>
                    </td>
                 <?php }}} ?>             
      </table>
      <img
        class="shopping-cart-icon8"
        alt=""
        src="./public/shopping-cart@2x.png"
      />

      <div class="about-us17">
        <div class="about-us18">About Us</div>
        <div class="contact-us9">Contact Us</div>
        <div class="connect-with-us8">Connect With Us</div>
        <img
          class="facebook-icon8"
          alt=""
          src="./public/facebook-icon@2x.png"
        />

        <img
          class="instagram-icon8"
          alt=""
          src="./public/instagram-icon@2x.png"
        />
      </div>
      <div class="category17">Electronic</div>
      <div class="category18">Miscellaneous</div>
    </div>
    

    <script>
      var loginContainer = document.getElementById("loginContainer");
      if (loginContainer) {
        loginContainer.addEventListener("click", function (e) {
          window.location.href = "Login.php";
        });
      }

      var onSellText = document.getElementById("onSellText");
      if (onSellText) {
        onSellText.addEventListener("click", function (e) {
          window.location.href = "./OnSellPage.html";
        });
      }
      
      var singupContainer = document.getElementById("singupContainer");
      if (singupContainer) {
        singupContainer.addEventListener("click", function (e) {
          window.location.href = "SingUp.Html";
        });
      }
      
      var HomeText = document.getElementById("HomeText");
      if (HomeText) {
        HomeText.addEventListener("click", function (e) {
          window.location.href = "./HomePage.html";
        });
      }

      var categoryText = document.getElementById("categoryText");
      if (categoryText) {
        categoryText.addEventListener("click", function (e) {
          window.location.href = "./CatagoryPage.html";
        });
      }
      
      var productContainer = document.getElementById("productContainer");
      if (productContainer) {
        productContainer.addEventListener("click", function (e) {
          window.location.href = "./ProductDescriptionPage.html";
        });
      }
      
      var productContainer1 = document.getElementById("productContainer1");
      if (productContainer1) {
        productContainer1.addEventListener("click", function (e) {
          window.location.href = "./ProductDescriptionPage.html";
        });
      }
      
      var productContainer2 = document.getElementById("productContainer2");
      if (productContainer2) {
        productContainer2.addEventListener("click", function (e) {
          window.location.href = "./ProductDescriptionPage.html";
        });
      }
      
      var productContainer3 = document.getElementById("productContainer3");
      if (productContainer3) {
        productContainer3.addEventListener("click", function (e) {
          window.location.href = "./ProductDescriptionPage.html";
        });
      }
      
      var productContainer4 = document.getElementById("productContainer4");
      if (productContainer4) {
        productContainer4.addEventListener("click", function (e) {
          window.location.href = "./ProductDescriptionPage.html";
        });
      }
      
      var productContainer5 = document.getElementById("productContainer5");
      if (productContainer5) {
        productContainer5.addEventListener("click", function (e) {
          window.location.href = "./ProductDescriptionPage.html";
        });
      }
      
      var productContainer6 = document.getElementById("productContainer6");
      if (productContainer6) {
        productContainer6.addEventListener("click", function (e) {
          window.location.href = "./ProductDescriptionPage.html";
        });
      }
      
      var productContainer7 = document.getElementById("productContainer7");
      if (productContainer7) {
        productContainer7.addEventListener("click", function (e) {
          window.location.href = "./ProductDescriptionPage.html";
        });
      }
      </script>
  </body>
</html>
