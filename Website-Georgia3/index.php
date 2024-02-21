<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">

    <title>Navigation Menu</title>
    <link rel="icon" type="image/png" href="images/logo-modified.png" >
    <link rel="icon" type="image/x-icon" href="images/logo-modified.ico">
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&family=Taviraj:wght@300&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link href="https://fonts.googleapis.com/css2?family=Optima&display=swap" rel="stylesheet">
  </head>

  <body>
    <!--First Section-->
    <section class="header-section">
      <nav>
        <h1>Style in Georgia</h1>
        <div class="nav-links" id="navLinks">
          <img src="images/close.PNG" class="close" onclick="hideMenu()"></i>
          <ul>
            <li><a href="#second">About Us</a></li>
            <li><a href="#third">Catalog</a></li>
            <li><a href="#designers">Designers</a></li>
            <li><a href="#contact-mail">Contact</a></li>
            <li><a href="login1.php">Registration | Log In</a></li>
          </ul>
        </div>
        <img src="images/menu.PNG" class="menu" onclick="showMenu()"></i>
      </nav>
      <div class="white-rectangle">
        <div class="white-content">
          <h1>Georgian Designers</h1>
          <div class="designer-style">
            <span class="style-text">Your New Style<br/>For Every Day.</span>
            </div>
          <div class="style-description">
            Style in Georgia - a place for those who are looking for<br />fashionable,
            high quality and designer shoes.
          </div>
          <div class="button-wrapper">
            <a href="#" class="btn1">Buy Now +</a>
            <a href="#" class="btn2">About Us</a>
          </div>
        </div>
      </div>
    </section>
    
    <!--Second Section-->
    <section class="second-section" id="second">

          <div class="left">
              <div class="rectanlge2">
                <img src="images/1.webp.png">
              </div>
          </div>

          <div class="right">
          <!--  <div style="width: 100%; text-align: center; color: black; font-size: 15px; font-family: Optima; font-weight: 600; line-height: 10x; word-wrap: break-word;">Про нас:</div>-->
            <div style="width: 100%; height: 20%; text-align: center; font-size: 48px; font-family: Rufina; font-weight: 400; line-height: 55px; word-wrap: break-word;">
              <span style="color: white;">—</span>
              <div style="color: #383838;">
                Yours
              </div>
              <div style="color: #383838;">
                  Uniqueness
              </div>
              <div style="color: #383838;">
                  Starts from here.
              </div>
          </div>
          
          <div class="container">
            <div class="welcome-text">Welcome to the world of unique and stylish shoes from talented Georgian designers!</div>
             <div class="description-text">We present a huge number of shoes from Georgian designers on one site. All models are handmade, sewn with love and trepidation. Each model has its own character, its own mood and uniqueness. </div>
             <div class="unique-features-text">The uniqueness of our shoes lies in the variety of styles, combinations of materials and the ability to order your size according to individual measurements.</div>
             <div class="designer-accessories-text">Designer accessories for every taste and stylish shoes for every season are our guarantee.</div>
             <img src="images/2.webp.png" alt="Designer Shoes">
          </div>
      </div>
    </section>

    <!--third section-->
    <section class="third-section" id="third">
      <div style="width: 100%; height: 100%; margin-top: 10%; text-align: center; font-size: 48px; font-family: Rufina; font-weight: 400; line-height: 57.60px; word-wrap: break-word">
        <span style="color: #F8F3F1;">Designers from Georgia Enter Fashion - Georgian<br/>Style Marches Around the World.</span>
    </div>
    
      <div class="row1">
        <div class="ro-img">
        <img src="images/3.webp.png">
        <div style="width: 100%; margin-top: 2%; color: white; font-size: 24px; font-family: Optima; font-weight: 600; line-height: 36px; word-wrap: break -word">Thighs</div>
        <div style="width: 100%; margin-top: 2%; color: #F8F3F1; font-size: 17px; font-family: Optima; font-weight: 400; line-height: 25.50px; word-wrap : break-word">Our entire range of over the knee boots<br/>is made exclusively from genuine<br/>leather, while maintaining comfort and<br/>ease of wearing.</div>
      </div>
      <div class="ro-img">
        <img src="images/4.webp.png">
        <div style="width: 100%; margin-top: 2%; color: white; font-size: 24px; font-family: Optima; font-weight: 600; line-height: 36px; word-wrap: break -word">Boots</div>
        <div style="width: 100%; margin-top: 2%; color: #F8F3F1; font-size: 17px; font-family: Optima; font-weight: 400; line-height: 25.50px; word-wrap : break-word">In our assortment you can find<br/>ideal boots with the ideal<br/>size for you.</div>
        </div>
        <div class="ro-img">
        <img src="images/5.webp.png">
        <div style="width: 100%; margin-top: 2%; color: white; font-size: 24px; font-family: Optima; font-weight: 600; line-height: 36px; word-wrap: break -word">Shoes</div>
        <div style="width: 100%; margin-top: 2%; color: #F8F3F1; font-size: 17px; font-family: Optima; font-weight: 400; line-height: 25.50px; word-wrap : break-word">Shoes that will emphasize your elegance, subtlety and femininity.</div>
        </div>
      </div>
    </section>

    <!--Fourth Section with nav bar-->
    <section class="fourth-section" id="designers">
      <div style="width: 100%; margin-top: 5%; height: 100%; text-align: center; color: black; font-size: 48px; font-family: Rufina; font-weight: 400; line-height: 57.60px; word-wrap: break-word">
        Our Designers
    </div>
    <div class="full-menu">
      <div class="menu">
        <ul>
          <li><a href="#" onclick="showImages('nanuDesign')">Nanu Design</a></li>
          <li><a href="#" onclick="showImages('suji')">Suji</a></li>
          <li><a href="#" onclick="showImages('Nina Arabuli')">Nina Arabuli</a></li>
          <li><a href="#" onclick="showImages('Tamasa')">Tamasa</a></li>
          <li><a href="#" onclick="showImages('Lalo Shoes')">Lalo Shoes</a></li>
          <li><a href="#" onclick="showImages('Tamta Shindelishvili')">Tamta Shindelishvili</a></li>
          <li><a href="#" onclick="showImages('Nini Patsatsia')">Nini Patsatsia</a></li>
          <li><a href="#" onclick="showImages('Libens')">Libens</a></li>
          <li><a href="catalog.php">Full List</a></li>
          <!-- Add more menu items with unique IDs -->
          <!--...-->
        </ul>
      </div>
    </div>
  
    <!-- Image grids -->
    <div class="image-grid" id="nanuDesignImages" style="display: none;">
      <!-- Images for Nanu Design -->
      <!-- Add 6 images for Nanu Design -->
      <figure>
        <img src="images/Nanuka/IMG_3101.PNG" alt="Nanu Image 1">
         <figcaption>Boots</figcaption>
       </figure>
       <figure>
         <img src="images/Nanuka/IMG_3125.PNG" alt="Nanu Image 2">
         <figcaption>Boots</figcaption>
       </figure>
       <figure>
         <img src="images/Nanuka/IMG_3128.PNG" alt="Nanu Image 3">
         <figcaption>Shoes</figcaption>
       </figure>
       <figure>
         <img src="images/Nanuka/IMG_5528.JPG" alt="Nanu Image 4">
         <figcaption>Loafers</figcaption>
       </figure>
       <figure>
         <img src="images/Nanuka/IMG_9172.PNG" alt="Nanu Image 5">
         <figcaption>Thigh boots</figcaption>
       </figure>
       <figure>
         <img src="images/div.w-picture__image.png" alt="Nanu Image 6">
         <figcaption>Thigh boots</figcaption>
      </figure>
    </div>

    <div class="image-grid" id="sujiImages" style="display: none;">
      <!-- Images for Suji -->
      <!-- Add 6 images for Suji -->
      <figure>
        <img src="images/Suji/IMG_5324.jpg" alt="suji Image 1">
        <figcaption>Boots</figcaption>
      </figure>
      <figure>
        <img src="images/Suji/IMG_1241.PNG" alt="suji Image 2">
        <figcaption>Boots</figcaption>
      </figure>
      <figure>
        <img src="images/Suji/IMG_2616.PNG" alt="suji Image 3">
        <figcaption>Shoes</figcaption>
      </figure>
      <figure>
        <img src="images/Suji/IMG_8751.PNG" alt="suji Image 4">
        <figcaption>Loafers</figcaption>
      </figure>
      <figure>
        <img src="images/Suji/IMG_5323.jpg" alt="suji Image 5">
        <figcaption>Thigh boots</figcaption>
      </figure>
      <figure>
        <img src="images/div.w-picture__image.png" alt="suji Image 6">
        <figcaption>Thigh boots</figcaption>
      </figure>
    </div>

    <div class="image-grid" id="Nina ArabuliImages" style="display: none;">
      <figure>
        <img src="images/Arabuli/IMG_0730.JPG" alt="Nina Arabuli 1">
        <figcaption>Boots</figcaption>
      </figure>
      <figure>
        <img src="images/Arabuli/IMG_3441.PNG" alt="Nina Arabuli 2">
        <figcaption>Boots</figcaption>
      </figure>
      <figure>
        <img src="images/Arabuli/IMG_9460.JPG" alt="Nina Arabuli 3">
        <figcaption>Shoes</figcaption>
      </figure>
      <figure>
        <img src="images/Arabuli/IMG_9460.JPG" alt="Nina Arabuli 4">
        <figcaption>Loafers</figcaption>
      </figure>
      <figure>
        <img src="images/Arabuli/IMG_9805.JPG" alt="Nina Arabuli 5">
        <figcaption>Thigh boots</figcaption>
      </figure>
      <figure>
        <img src="images/div.w-picture__image.png" alt="Nina Arabuli 6">
        <figcaption>Thigh boots</figcaption>
      </figure>
    </div>

    <div class="image-grid" id="TamasaImages" style="display: none;">
      <figure>
        <img src="images/Tamasa/IMG_6405.JPG" alt="Tamasa 1">
        <figcaption>Boots</figcaption>
      </figure>
      <figure>
        <img src="images/Tamasa/IMG_6912.JPG" alt="Tamasa 2">
        <figcaption>Boots</figcaption>
      </figure>
      <figure>
        <img src="images/Tamasa/IMG_7385.PNG" alt="Tamasa 3">
        <figcaption>Shoes</figcaption>
      </figure>
      <figure>
        <img src="images/Tamasa/IMG_7675.JPG" alt="Tamasa 4">
        <figcaption>Loafers</figcaption>
      </figure>
      <figure>
        <img src="images/Tamasa/IMG_9965.JPG" alt="Tamasa 5">
        <figcaption>Thigh boots</figcaption>
      </figure>
      <figure>
        <img src="images/div.w-picture__image.png" alt="Tamasa 6">
        <figcaption>Thigh boots</figcaption>
      </figure>
    </div>

    <div class="image-grid" id="Lalo ShoesImages" style="display: none;">
      <figure>
        <img src="images/Lalo/IMG_7316.PNG" alt="Lalo Shoes 1">
        <figcaption>Boots</figcaption>
      </figure>
      <figure>
        <img src="images/Lalo/IMG_1067.PNG" alt="Lalo Shoes 2">
        <figcaption>Boots</figcaption>
      </figure>
      <figure>
        <img src="images/Lalo/IMG_1102.PNG" alt="Lalo Shoes 3">
        <figcaption>Shoes</figcaption>
      </figure>
      <figure>
        <img src="images/Lalo/IMG_6469.PNG" alt="Lalo Shoes 4">
        <figcaption>Loafers</figcaption>
      </figure>
      <figure>
        <img src="images/Lalo/IMG_6751.PNG" alt="Lalo Shoes 5">
        <figcaption>Thigh boots</figcaption>
      </figure>
      <figure>
        <img src="images/Lalo/IMG_7047.PNG" alt="Lalo Shoes 6">
        <figcaption>Thigh boots</figcaption>
      </figure>
    </div>

    <div class="image-grid" id="Tamta ShindelishviliImages" style="display: none;">
      <figure>
        <img src="images/Tamata/IMG_0921.PNG" alt="Tamta Shindelishvili 1">
        <figcaption>Boots</figcaption>
      </figure>
      <figure>
        <img src="images/Tamata/IMG_1017.PNG" alt="Tamta Shindelishvili 2">
        <figcaption>Boots</figcaption>
      </figure>
      <figure>
        <img src="images/Tamata/IMG_1018.PNG" alt="Tamta Shindelishvili 3">
        <figcaption>Shoes</figcaption>
      </figure>
      <figure>
        <img src="images/Tamata/IMG_1018.PNG" alt="Tamta Shindelishvili 4">
        <figcaption>Loafers</figcaption>
      </figure>
      <figure>
        <img src="images/Tamata/IMG_1020.PNG" alt="Tamta Shindelishvili 5">
        <figcaption>Thigh boots</figcaption>
      </figure>
      <figure>
        <img src="images/Tamata/IMG_1085.PNG" alt="Tamta Shindelishvili 6">
        <figcaption>Thigh boots</figcaption>
      </figure>
    </div>

    <div class="image-grid" id="Nini PatsatsiaImages" style="display: none;">
      <figure>
        <img src="images/Nina/IMG_0229.PNG" alt="Nini Patsatsia 1">
        <figcaption>Boots</figcaption>
       </figure>
       <figure>
         <img src="images/Nina/IMG_3192.PNG" alt="Nini Patsatsia 2">
         <figcaption>Boots</figcaption>
       </figure>
       <figure>
         <img src="images/Nina/IMG_8428.PNG" alt="Nini Patsatsia 3">
         <figcaption>Shoes</figcaption>
       </figure>
       <figure>
         <img src="images/Nina/IMG_6613.PNG" alt="Nini Patsatsia 4">
         <figcaption>Loafers</figcaption>
       </figure>
       <figure>
         <img src="images/Nina/IMG_8431.PNG" alt="Nini Patsatsia 5">
         <figcaption>Thigh boots</figcaption>
       </figure>
       <figure>
         <img src="images/div.w-picture__image.png" alt="Nini Patsatsia 6">
         <figcaption>Thigh boots</figcaption>
      </figure>
    </div>

    <div class="image-grid" id="LibensImages" style="display: none;">
      <figure>
        <img src="images/Libens/IMG_0447.PNG" alt="Libens 1">
        <figcaption>Boots</figcaption>
       </figure>
       <figure>
         <img src="images/Libens/IMG_0448.PNG" alt="Libens  2">
         <figcaption>Boots</figcaption>
       </figure>
       <figure>
         <img src="images/Libens/IMG_0996.PNG" alt="Libens  3">
         <figcaption>Shoes</figcaption>
       </figure>
       <figure>
         <img src="images/Libens/IMG_0043.PNG" alt="Libens  4">
         <figcaption>Loafers</figcaption>
       </figure>
       <figure>
         <img src="images/div.w-picture__image.png" alt="Libens  5">
         <figcaption>Thigh boots</figcaption>
       </figure>
       <figure>
         <img src="images/div.w-picture__image.png" alt="Libens  6">
         <figcaption>Thigh boots</figcaption>
      </figure>
    </div>
    </section>

    <!--Section Five-->
    <section class="five-section">
      <div class="five-row">
        <div class="gallery-title">Gallery:</div>
         <div class="main-title">
          
           <span class="title-text"> Keep Up with the Times - Wear Only</span>
         </div>
         <div class="sub-title">Original, High-Quality And Stylish Shoes.</div>
        <div class="image-gallery">
          
          <div class="image-container imageShoe1">
            <img src="images/01.webp.png" alt="Shoe Image1" />
          </div>
          <div class="image-container imageShoe2">
            <img src="images/02.webp.png" alt="Shoe Image2" />
          </div>
          <div class="image-container imageShoe3">
            <img src="images/03.webp.png" alt="Shoe Image3" />
          </div>
          <div class="image-container imageShoe4">
            <img src="images/04.webp.png" alt="Shoe Image4" />
          </div>
          <div class="image-container imageShoe5">
            <img src="images/05.webp.png" alt="Shoe Image5" />
          </div>
          <div class="image-container imageShoe6">
            <img src="images/06.webp.png" alt="Shoe Image6" />
          </div>
        </div>
      </div>
    </section>
    
    

    <!--Section seven-->
    <section class="contact-us" id="contact-mail">
      <div class="contact-rectangle">
        <img class="email" src="images/SVG.png">
        <div style="width: 100%; height: 10%; text-align: center; color: #212121; font-size: 34px; font-family: Rufina; font-weight: 400; line-height: 48.57px ; word-wrap: break-word">Do you have any Questions?</div>
        <div style="width: 100%; height: 5%; align-self: center; margin-top: 4%; position: relative; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
        <div style="width: 100px; height: 0px; align-self: center; border: 2px #C2A18A solid"></div>
      </div>
         <div style="width: 100%; height: 20%; text-align: center; color: #595959; font-size: 19px; font-family: Optima; font-weight: 400; line-height: 28.50px ; word-wrap: break-word">Please contact us and we will answer all your questions.</div>
         <a class="contact-btn" href="#">Contact Us +</a>
      </div>
    </section>

    <!--Section 7 -->
    <section class="section7">
      <div class="row3">
       <div style="width: 100%; height: 50%; text-align: center; color: #F8F3F1; font-size: 15px; font-family: Optima; font-weight: 600; line-height: 21.43px ; word-wrap: break-word">Custom-made shoes:</div>
         <div style="width: 100%; height: 50%; padding-top: 10px; color: #F8F3F1; font-size: 50px; font-family: Rufina; font-weight: 400; line-height: 57.60px ; word-wrap: break-word">— Do you want to Order Custom Shoes?</div>
         <div style="width: 100%; height: 50%; padding-top: 20px; color: #212121; font-size: 17px; font-family: Optima; font-weight: 400; line-height: 28.50px ; word-wrap: break-word">We make shoes to order, it can be either an item from our catalog or your individual sketch!</div>
       </div>
       <div class="btn-row">
       <a class="btn-7" href="#">Write to us +</a>
     </div>
    </section>

    <!--Section 8-->
    <section class="section8">
      <div class="row5">
      <div style="width: 100%;   height: 100%; text-align: center; color: #797979; font-size: 12px; font-family: Optima; font-weight: 700; line-height: 16.80px; word-wrap: break-word">INSTAGRAM</div>
      <div style="width: 100%; height: 100%; padding-top: 10px; text-align: center"><span style="color: white; font-size: 48px; font-family: Rufina; font-weight: 400; line-height: 57.60px; word-wrap: break-word">—</span><span style="color: black; font-size: 48px; font-family: Rufina; font-weight: 400; line-height: 57.60px; word-wrap: break-word"> </span><span style="color: black; font-size: 48px; font-family: Rufina; font-weight: 400; line-height: 57.60px; word-wrap: break-word">Subscribe to Us on Social Networks.</span></div>
      <div style="width: 100%; height: 100%; padding-top: 10px; text-align: center; color: #595959; font-size: 19px; font-family: Optima; font-weight: 400; line-height: 28.50px; word-wrap: break-word">Be the first to know about new collections and discounts!</div>
    </div>
      <div class="row4">
        <img src="images/7.webp.png">
        <img src="images/subscribe-image2.png">
        <img src="images/subscribe-image3.png">
        <img src="images/subscribe-image4.png">
        <img src="images/subscribe-image5.png">
        <img src="images/subscribe-image6.png">
        </div>
      </section>

      <!--Section 9-->
      <section class="section9">
        <div class="footer-navigation">
            <div class="footer-column">
              <div class="footer-header">Navigation</div>
              <div class="footer-links">
                  <a href="#">About us</a>
                  <a href="#">Catalogue</a>
                  <a href="#">Collection</a>
                </div>
            </div>
            <div class="footer-column">
                <div class="footer-brand">Style In Georgia</div>
            </div>
            <div class="footer-column">
                <div class="footer-header">Social Medieas</div>
                <div class="footer-social">
                    <img src="images/social/insta.png">
                    <img src="images/social/face.png">
                    <img src="images/social/twitter.png">
                    <img src="images/social/youtube.png">
                </div>
            </div>
        </div>
        <div class="footer-divider"></div>
    </section>
    



    <!--JavaScript for toggle Mennu-->
    <script>
      var navLinks = document.getElementById("navLinks");

      function showMenu() {
        navLinks.style.right = "0";
      }
      function hideMenu() {
        navLinks.style.right = "-100%";
      }
    </script>

    <script>
function showImages(designer) {
  // Prevent default anchor link behavior
  event.preventDefault();

  // Hide all image grids
  const imageGrids = document.querySelectorAll('.image-grid');
  imageGrids.forEach(grid => {
    grid.style.display = 'none';
  });

  // Show the selected image grid
  const selectedGrid = document.getElementById(`${designer}Images`);
  if (selectedGrid) {
    if (window.matchMedia('(max-width: 1000px)').matches) {
      // If the screen width is 1000px or less, display images in a single line
      selectedGrid.style.display = 'block'; // Change display to block for individual images
      selectedGrid.style.overflowX = 'auto';
      selectedGrid.style.scrollBehavior = 'smooth';
      const images = selectedGrid.querySelectorAll('img');

      images.forEach(img => {
        img.style.display = 'inline-block'; // Display images inline-block
        img.style.marginRight = '20px'; // Add margin between images
        // Replace 'src' attribute with actual image sources
        // img.src = 'path_to_your_image.jpg';
      });
    } else {
      // For wider screens, revert to the grid layout
      selectedGrid.style.display = 'grid';
      const images = selectedGrid.querySelectorAll('img');
      images.forEach(img => {
        img.style.display = 'block';
        // Replace 'src' attribute with actual image sources
        // img.src = 'path_to_your_image.jpg';
      });
    }

    // Scroll to the selected section
    selectedGrid.scrollIntoView({ behavior: 'smooth' });
  }
}



    </script>
  </body>
</html>
