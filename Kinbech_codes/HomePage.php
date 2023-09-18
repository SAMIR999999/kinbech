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
    <link rel="stylesheet" href="./HomePage.css" />
    <link rel="stylesheet" href="./index.css.css" />
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
    <div class="home-page">
      <div class="search7">
        <div class="search-bar7"></div>
        <img
          class="search-icon7"
          alt=""
          src="./public/search2@2x.png"
          id="searchIcon"
        />
      </div>
      <div class="logo7">
        <div class="logo-child4"></div>
        <img
          class="untitled-design-8-17"
          alt=""
          src="./public/untitled-design-8-15@2x.png"
        />
      </div>
      <a class="home7" href="HomePage.html"HomeText>Home</a>
      <div class="notification7">Notification</div>
      <img
        class="offer-section-icon"
        alt=""
        src="./public/offer-section1@2x.png"
      />
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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
              <img src="./image/<?php echo $row['product_img']; ?>" ><br>
                <div class="name52"><?php echo $row['itemname']; ?></div>
               <div class="price-51">Price:-<?php echo $row['price'] ?></div>
                </div>
          </td><?php $count=$count+1;
        }}}
      ?></table>
      <br><br><br><br>
    
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
                      <img src="./image/<?php echo $row['product_img']; ?>" /> <br>
                        <div class="name52"><?php echo $row['itemname']; ?></div>
                        <div class="price-51">Price:-<?php echo $row['price'] ?></div>
                      </div>
                    </td>
                 <?php }}} ?>             
      </table>


      
    
      
      <img
        class="shopping-cart-icon7"
        alt=""
        src="./public/shopping-cart1@2x.png"
        id="shoppingCartImage"
      />

      <div class="about-us15">
        <div class="about-us16">About Us</div>
        <div class="contact-us8">Contact Us</div>
        <div class="connect-with-us7">Connect With Us</div>
        <img
          class="facebook-icon7"
          alt=""
          src="./public/facebook-icon@2x.png"
        />

        <img
          class="instagram-icon7"
          alt=""
          src="./public/instagram-icon@2x.png"
        />
      </div>
      <div class="category14">Category</div>
      <div class="category15">Category</div>
      <div class="profile-botten7" id="profileBottenContainer">
        <img
          class="profile-botten-child4"
          alt=""
          src="./public/ellipse-21@2x.png"
        />

        <div class="user-name8">User Name</div>
      </div>
    </div>

    <script>
      var searchIcon = document.getElementById("searchIcon");
      if (searchIcon) {
        searchIcon.addEventListener("click", function (e) {
          window.location.href = "./SearchPage.html";
        });
      }
      
      var onSellText = document.getElementById("onSellText");
      if (onSellText) {
        onSellText.addEventListener("click", function (e) {
          window.location.href = "./OnSellPage.html";
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
      
      var shoppingCartImage = document.getElementById("shoppingCartImage");
      if (shoppingCartImage) {
        shoppingCartImage.addEventListener("click", function (e) {
          window.location.href = "./CartPage.html";
        });
      }
      
      var profileBottenContainer = document.getElementById("profileBottenContainer");
      if (profileBottenContainer) {
        profileBottenContainer.addEventListener("click", function (e) {
          window.location.href = "./ProfilePage.html";
        });
      }
      </script>
  </body>
</html>
