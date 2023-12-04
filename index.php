<?php
session_start();

// Cerrar sesión si se hace clic en el botón de cerrar sesión
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Food Website</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>


    <section id="Home">
      <nav>
        <div class="logo">
          <img
            src="https://1000marcas.net/wp-content/uploads/2020/01/KFC-logo-2006.jpg"
          />
        </div>

        <ul>
          <li><a href="#Home">Home</a></li>
          <li><a href="#About">About</a></li>
          <li><a href="#Menu">Menu</a></li>
          <li><a href="#Gallary">Gallary</a></li>
          <li><a href="#Review">Review</a></li>
          <li><a href="#Order">Problems?</a></li>
          <li><a href="creditos.php">We Are??</a></li>
        </ul>

        <div class="icon">
          <?php
if (isset($_SESSION['username'])) {
    echo "<div style='font-style: italic; font-size: 14px; display: flex; align-items: center;'>";
    echo "<h2 style='margin-right: 10px;'>Hola, " . $_SESSION['username'] . " ¡Bienvenido!</h2>";
    echo "<img src='https://w7.pngwing.com/pngs/567/745/png-transparent-mcdonald-s-quarter-pounder-hamburger-fast-food-cheeseburger-big-burger.png' alt='Hamburguesa Icono' style='width: 40px; height: 40px;'>";
    echo "<form method='post' class='logout-form' style='margin-left: 10px;'><input type='submit' name='logout' value='Cerrar Sesión'></form>";
    echo "</div>";
} else {
   
    echo "<div style='font-style: italic; font-size: 14px; display: flex; align-items: center;'>";
    echo "<p style='margin-right: 10px;'>¿Nuevo usuario?</p>";
    echo "<a href='registro.php' style='text-decoration: none; color: #4CAF50;'><img src='https://img.freepik.com/fotos-premium/pizza-aislada-setas-aceitunas_219193-8149.jpg' alt='Go Icono' style='width: 40px; height: 40px;'> </a>";
     echo "<h2 style='font-style: italic; font-size: 14px;'>No has iniciado sesión. Por favor, hazlo <a href='init.php'>aquí</a>.</h2>";
    echo "</div>";
}
?>


        </div>
      </nav>

      <div class="main">
        <div class="men_text">
          <h1>Get Fresh<span>Food</span><br />in a Easy Way</h1>
        </div>

        <div class="main_image">
          <img src="image/main_img.png" />
        </div>
      </div>



      <p>
        "KFC, known for its iconic fried chicken, is a global fast-food
        favorite. With its secret blend of herbs and spices, KFC's crispy and
        flavorful chicken has captured the taste buds of millions. The menu
        boasts a variety of chicken options, from the classic Original Recipe to
        innovative new offerings. Whether you're craving a bucket of crispy
        goodness or a satisfying sandwich, KFC delivers a finger-licking
        experience that has made it a go-to choice for chicken enthusiasts
        worldwide."

  
        
      
      </p>

      <div class="main_btn">
        <a href="init.php">Order Now</a>

        <i class="fa-solid fa-angle-right"></i>
      </div>
    </section>

    <!--About-->

    <div class="about" id="About">
      <div class="about_main">
        <div class="image">
          <img src="image/Food-Plate.png" />
        </div>

        <div class="about_text">
          <h1><span>About</span>Us</h1>
          <h3>Why Choose us?</h3>
          <p>
          KFC, globally acclaimed for its mouthwatering fried chicken, is a true culinary icon. With secret recipes and unique flavors, KFC has won the hearts and taste buds of millions.

From the first bite, you're immersed in a one-of-a-kind experience of crispy and juicy perfection. The chicken pieces, marinated in select spices, are coated in a secret blend that gives them that unmistakable KFC flavor.

But KFC doesn't stop at fried chicken; its menu is a feast of tempting choices. From tender chicken

          </p>
        </div>
      </div>

      <a href="fila.php" class="about_btn">Order Now</a>
    </div>

    <!--Menu-->

    <div class="menu" id="Menu">
      <h1>Our<span>Menu</span></h1>

      <div class="menu_box">
        <div class="menu_card">
          <div class="menu_image">
            <img src="image/buger.jpg" />
          </div>

          <div class="small_card">
            <i class="fa-solid fa-heart"></i>
          </div>

          <div class="menu_info">
            <h2>Buger</h2>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum
              assumenda voluptates
            </p>
            <h3>$20.00</h3>
            <div class="menu_icon">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>
            </div>
            <a href="#" class="menu_btn">Order Now</a>
          </div>
        </div>

        <div class="menu_card">
          <div class="menu_image">
            <img src="image/pasta.jpg" />
          </div>

          <div class="small_card">
            <i class="fa-solid fa-heart"></i>
          </div>

          <div class="menu_info">
            <h2>pasta</h2>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum
              assumenda voluptates
            </p>
            <h3>$20.00</h3>
            <div class="menu_icon">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>
            </div>
            <a href="#" class="menu_btn">Order Now</a>
          </div>
        </div>

        <div class="menu_card">
          <div class="menu_image">
            <img src="image/lasagna.webp" />
          </div>

          <div class="small_card">
            <i class="fa-solid fa-heart"></i>
          </div>

          <div class="menu_info">
            <h2>lasagna</h2>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum
              assumenda voluptates
            </p>
            <h3>$20.00</h3>
            <div class="menu_icon">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>
            </div>
            <a href="#" class="menu_btn">Order Now</a>
          </div>
        </div>

        <div class="menu_card">
          <div class="menu_image">
            <img src="image/chocolate_Drink.jpg" />
          </div>

          <div class="small_card">
            <i class="fa-solid fa-heart"></i>
          </div>

          <div class="menu_info">
            <h2>Drink</h2>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum
              assumenda voluptates
            </p>
            <h3>$20.00</h3>
            <div class="menu_icon">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>
            </div>
            <a href="#" class="menu_btn">Order Now</a>
          </div>
        </div>

        <div class="menu_card">
          <div class="menu_image">
            <img src="image/pizza.jpg" />
          </div>

          <div class="small_card">
            <i class="fa-solid fa-heart"></i>
          </div>

          <div class="menu_info">
            <h2>pizza</h2>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum
              assumenda voluptates
            </p>
            <h3>$20.00</h3>
            <div class="menu_icon">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>
            </div>
            <a href="#" class="menu_btn">Order Now</a>
          </div>
        </div>

        <div class="menu_card">
          <div class="menu_image">
            <img src="image/Hot_dog.jpg" />
          </div>

          <div class="small_card">
            <i class="fa-solid fa-heart"></i>
          </div>

          <div class="menu_info">
            <h2>Hot Dog</h2>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum
              assumenda voluptates
            </p>
            <h3>$20.00</h3>
            <div class="menu_icon">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>
            </div>
            <a href="#" class="menu_btn">Order Now</a>
          </div>
        </div>

        <div class="menu_card">
          <div class="menu_image">
            <img src="image/juse.jpg" />
          </div>

          <div class="small_card">
            <i class="fa-solid fa-heart"></i>
          </div>

          <div class="menu_info">
            <h2>Juse</h2>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum
              assumenda voluptates
            </p>
            <h3>$20.00</h3>
            <div class="menu_icon">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>
            </div>
            <a href="#" class="menu_btn">Order Now</a>
          </div>
        </div>

        <div class="menu_card">
          <div class="menu_image">
            <img src="image/biryani.webp" />
          </div>

          <div class="small_card">
            <i class="fa-solid fa-heart"></i>
          </div>

          <div class="menu_info">
            <h2>Biryani</h2>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum
              assumenda voluptates
            </p>
            <h3>$20.00</h3>
            <div class="menu_icon">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>
            </div>
            <a href="#" class="menu_btn">Order Now</a>
          </div>
        </div>

        <div class="menu_card">
          <div class="menu_image">
            <img src="image/chocolate.jpg" />
          </div>

          <div class="small_card">
            <i class="fa-solid fa-heart"></i>
          </div>

          <div class="menu_info">
            <h2>Chocolate</h2>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum
              assumenda voluptates
            </p>
            <h3>$20.00</h3>
            <div class="menu_icon">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>
            </div>
            <a href="#" class="menu_btn">Order Now</a>
          </div>
        </div>

        <div class="menu_card">
          <div class="menu_image">
            <img src="image/ice_cream.jpg" />
          </div>

          <div class="small_card">
            <i class="fa-solid fa-heart"></i>
          </div>

          <div class="menu_info">
            <h2>Ice Cream</h2>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum
              assumenda voluptates
            </p>
            <h3>$20.00</h3>
            <div class="menu_icon">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>
            </div>
            <a href="#" class="menu_btn">Order Now</a>
          </div>
        </div>

        <div class="menu_card">
          <div class="menu_image">
            <img src="image/Spanchi.jpg" />
          </div>

          <div class="small_card">
            <i class="fa-solid fa-heart"></i>
          </div>

          <div class="menu_info">
            <h2>Spanchi</h2>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum
              assumenda voluptates
            </p>
            <h3>$20.00</h3>
            <div class="menu_icon">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>
            </div>
            <a href="#" class="menu_btn">Order Now</a>
          </div>
        </div>

        <div class="menu_card">
          <div class="menu_image">
            <img src="image/sandwich.jpg" />
          </div>

          <div class="small_card">
            <i class="fa-solid fa-heart"></i>
          </div>

          <div class="menu_info">
            <h2>Sandwich</h2>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum
              assumenda voluptates
            </p>
            <h3>$20.00</h3>
            <div class="menu_icon">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>
            </div>
            <a href="#" class="menu_btn">Order Now</a>
          </div>
        </div>
      </div>
    </div>

    <!--Gallary-->

    <div class="gallary" id="Gallary">
      <h1>Our<span>Gallary</span></h1>

      <div class="gallary_image_box">
        <div class="gallary_image">
          <img src="image/gallary_1.jpg" />

          <h3>Food</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi
            sint eveniet laboriosam
          </p>
          <a href="#" class="gallary_btn">Order Now</a>
        </div>

        <div class="gallary_image">
          <img src="image/gallary_2.jpg" />

          <h3>Food</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi
            sint eveniet laboriosam
          </p>
          <a href="#" class="gallary_btn">Order Now</a>
        </div>

        <div class="gallary_image">
          <img src="image/gallary_3.jpg" />

          <h3>Food</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi
            sint eveniet laboriosam
          </p>
          <a href="#" class="gallary_btn">Order Now</a>
        </div>

        <div class="gallary_image">
          <img src="image/gallary_4.jpg" />

          <h3>Food</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi
            sint eveniet laboriosam
          </p>
          <a href="#" class="gallary_btn">Order Now</a>
        </div>

        <div class="gallary_image">
          <img src="image/gallary_5.jpg" />

          <h3>Food</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi
            sint eveniet laboriosam
          </p>
          <a href="#" class="gallary_btn">Order Now</a>
        </div>

        <div class="gallary_image">
          <img src="image/gallary_6.jpg" />

          <h3>Food</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi
            sint eveniet laboriosam
          </p>
          <a href="#" class="gallary_btn">Order Now</a>
        </div>
      </div>
    </div>

    <!--Review-->

    <div class="review" id="Review">
      <h1>Customer<span>Review</span></h1>

      <div class="review_box">
        <div class="review_card">
          <div class="review_profile">
            <img src="image/review_1.png" />
          </div>

          <div class="review_text">
            <h2 class="name">John Deo</h2>

            <div class="review_icon">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>
            </div>

            <div class="review_social">
              <i class="fa-brands fa-facebook-f"></i>
              <i class="fa-brands fa-instagram"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-linkedin-in"></i>
            </div>

            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Repellendus quam facere blanditiis in fugiat tempore
              necessitatibus aliquid. Id adipisci, rem corrupti asperiores
              distinctio delectus quae quia tenetur totam laboriosam quam. Lorem
              ipsum, dolor sit amet consectetur adipisicing elit. Dolores soluta
          
            </p>
          </div>
        </div>

        <div class="review_card">
          <div class="review_profile">
            <img src="image/review_2.png" />
          </div>

          <div class="review_text">
            <h2 class="name">John Deo</h2>

            <div class="review_icon">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>
            </div>

            <div class="review_social">
              <i class="fa-brands fa-facebook-f"></i>
              <i class="fa-brands fa-instagram"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-linkedin-in"></i>
            </div>

            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Repellendus quam facere blanditiis in fugiat tempore
              necessitatibus aliquid. Id adipisci, rem corrupti asperiores
              distinctio delectus quae quia tenetur totam laboriosam quam. Lorem
              ipsum, dolor sit amet consectetur adipisicing elit. Dolores soluta
             
            </p>
          </div>
        </div>

        <div class="review_card">
          <div class="review_profile">
            <img src="image/review_3.png" />
          </div>

          <div class="review_text">
            <h2 class="name">John Deo</h2>

            <div class="review_icon">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>
            </div>

            <div class="review_social">
              <i class="fa-brands fa-facebook-f"></i>
              <i class="fa-brands fa-instagram"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-linkedin-in"></i>
            </div>

            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Repellendus quam facere blanditiis in fugiat tempore
              necessitatibus aliquid. Id adipisci, rem corrupti asperiores
              distinctio delectus quae quia tenetur totam laboriosam quam. Lorem
              ipsum, dolor sit amet consectetur adipisicing elit. Dolores soluta
             
            </p>
          </div>
        </div>

        <div class="review_card">
          <div class="review_profile">
            <img src="image/review_4.png" />
          </div>

          <div class="review_text">
            <h2 class="name">John Deo</h2>

            <div class="review_icon">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>
            </div>

            <div class="review_social">
              <i class="fa-brands fa-facebook-f"></i>
              <i class="fa-brands fa-instagram"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-linkedin-in"></i>
            </div>

            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Repellendus quam facere blanditiis in fugiat tempore
              necessitatibus aliquid. Id adipisci, rem corrupti asperiores
            
            </p>
          </div>
        </div>
      </div>
    </div>

    <!--Order-->

    <div class="order" id="Order">
      <h1><span>Help</span>Now</h1>

      <div class="order_main">
        <div class="order_image">
          <img src="image/order_image.png" />
        </div>
        <form
  action="https://formspree.io/f/mzbllwgz"
  method="POST">
          <div class="input">
            <p>Name</p>
            <input type="text" placeholder="you name" name="message" required/>
          </div>

          <div class="input">
            <p>Email</p>
            <input type="email" name="email" required>
          </div>

          <div class="input">
            <p>Number</p>
            <input placeholder="you number" name="message" />
          </div>

          <div class="input">
            <p>How Much</p>
            <input type="number" placeholder="how many order" name="message"/>
          </div>

          <div class="input">
            <p>What Wrgond with u?</p>
            <input placeholder="What is u Problem?" name="message"/>
          </div>

          <div class="input">
            <p>Address</p>
            <input placeholder="you Address" name="message" required/>
          </div>

          <button type="submit" class="send">Send</button>

        </form>
      </div>
    </div>



    

    <!--Team-->

    <div class="team">
      <h1>Our<span>Team</span></h1>

      <div class="team_box">
        <div class="profile">
          <img src="image/chef1.png" />

          <div class="info">
            <h2 class="name">Chef</h2>
            <p class="bio">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>

            <div class="team_icon">
              <i class="fa-brands fa-facebook-f"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-instagram"></i>
            </div>
          </div>
        </div>

        <div class="profile">
          <img src="image/chef2.png" />

          <div class="info">
            <h2 class="name">Chef</h2>
            <p class="bio">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>

            <div class="team_icon">
              <i class="fa-brands fa-facebook-f"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-instagram"></i>
            </div>
          </div>
        </div>

        <div class="profile">
          <img src="image/chef3.jpg" />

          <div class="info">
            <h2 class="name">Chef</h2>
            <p class="bio">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>

            <div class="team_icon">
              <i class="fa-brands fa-facebook-f"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-instagram"></i>
            </div>
          </div>
        </div>

        <div class="profile">
          <img src="image/chef4.jpg" />

          <div class="info">
            <h2 class="name">Chef</h2>
            <p class="bio">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>

            <div class="team_icon">
              <i class="fa-brands fa-facebook-f"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-instagram"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Footer-->

    <footer>
      <div class="footer_main">
        <div class="footer_tag">
          <h2>Location</h2>
          <p>Sri Lanka</p>
          <p>USA</p>
          <p>India</p>
          <p>Japan</p>
          <p>Italy</p>
        </div>

        <div class="footer_tag">
          <h2>Quick Link</h2>
          <p>Home</p>
          <p>About</p>
          <p>Menu</p>
          <p>Gallary</p>
          <p>Order</p>
        </div>

        <div class="footer_tag">
          <h2>Contact</h2>
          <p>+94 12 3456 789</p>
          <p>+94 25 5568456</p>
          <p>johndeo123@gmail.com</p>
          <p>foodshop123@gmail.com</p>
        </div>

        <div class="footer_tag">
          <h2>Our Service</h2>
          <p>Fast Delivery</p>
          <p>Easy Payments</p>
          <p>24 x 7 Service</p>
        </div>

        <div class="footer_tag">
          <h2>Follows</h2>
          <i class="fa-brands fa-facebook-f"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-linkedin-in"></i>
        </div>
      </div>

      <p class="end">
        Design by<span
          ><i class="fa-solid fa-face-grin"></i> WT Master Code</span
        >
      </p>
    </footer>
  </body>
</html>