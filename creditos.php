<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credits view </title>
</head>
<body>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,900;1,400;1,900&display=swap');
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Playfair Display', serif;
}
body{ background:url(https://images.unsplash.com/photo-1495195129352-aeb325a55b65?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1776&q=80);
  background-size:cover;
  background-position:right;
  background-attachment:fixed;
}
#header{
  margin:20px;
}
#header>h1{
  text-align:center;
  font-size:3rem;
}
#header>p{
  text-align:center;
  font-size:1.5rem;
  font-style:italic;
}
.container{
  width:100vw;
  display:flex;
  justify-content:space-around;
  flex-wrap:wrap;
  padding:40px 20px;
}
.card{
  display:flex;
  flex-direction:column;
  width:400px;
  margin-bottom:60px;
}
.card>div{
  box-shadow:0 15px 20px 0 rgba(0,0,0,0.5);
}
.card-image{
  width:400px;
  height:250px;
}
.card-image>img{
  width:100%;
  height:100%;
  object-fit:cover;
  object-position:bottom;
}
.card-text{
  margin:-30px auto;
  margin-bottom:-50px;
  height:300px;
  width:300px;
  background-color:#1D1C20;
  color:#fff;
  padding:20px;
}
.card-meal-type{
  font-style:italic;
}
.card-title{
  font-size:2.2rem;
  margin-bottom:20px;
  margin-top:5px;
}
.card-body{
  font-size:1.25rem;
}
.card-price{
  width:100px;
  height:100px;
  background-color:#970C0A;
  color:#fff;
  margin-left:auto;
  font-size:2rem;
  display:flex;
  justify-content:center;
  align-items:center;
}

</style>
<div id="header">
<h1>
    <a href="index.php">
    <img src="https://i.pinimg.com/originals/11/b9/7b/11b97b19c74c4c3516f2f3e73ebaadf4.png"  width="100" height="80" alt="">

    </a>
</h1>
<p>

Design Credits: Cristian Andres de Avila Fonseca

SENA ID: 2558346

Welcome to our website! We are proud to acknowledge the creative efforts of Cristian Andres de Avila Fonseca, whose design expertise has shaped the visual identity of this platform.

About the Designer:
Cristian Andres de Avila Fonseca, identified with the SENA ID 2558346, has brought a unique and innovative perspective to the aesthetics of our website. His dedication and skill have played a crucial role in creating an engaging and user-friendly experience for our visitors.

Icon Credits: FontAwesome

We would like to express our gratitude to FontAwesome for providing the stylish and intuitive icons used throughout the website. These icons not only enhance the visual appeal but also contribute to the overall functionality and navigation.

Connect with Us:
Stay connected with us on social media! Click on the icons below to visit our official profiles.
</p>

<style>
.alert {
  padding: 20px;
  background-color: #FF6060;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
</head>
<body>

<h2>Products in the future !!!</h2>
<br><br>

<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>KFC!</strong> This are productos in a future in our store KFC are deliccius and typycals of suramerica 
</div>

  </div>
<div class="container">
<div class="card">
  <div class="card-image">
    <img src="https://images.unsplash.com/photo-1604135307399-86c6ce0aba8e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1374&q=80">
  </div>
  <div class="card-text">
    <p class="card-meal-type">Breakfast/Eggs</p>
    <h2 class="card-title">Breakfast</h2>
    <p class="card-body">Eggs Benedict with hollandaise sauce, crispy bacon and an assortment of garden herbs.</p>
  </div>
  <div class="card-price">$56</div>
</div>
  <div class="card">
  <div class="card-image">
    <img src="https://images.unsplash.com/photo-1551782450-17144efb9c50?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1769&q=80">
  </div>
  <div class="card-text">
    <p class="card-meal-type">Lunch/Meat</p>
    <h2 class="card-title">Hamburguer</h2>
    <p class="card-body">A beef burger with wholewheat patty, juicy lettuce and a side of gluten free fries</p>
  </div>
  <div class="card-price">$39</div>
</div>
  <div class="card">
  <div class="card-image">
    <img src="https://images.unsplash.com/photo-1635146037526-a75e6905ad78?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1834&q=80">
  </div>
  <div class="card-text">
    <p class="card-meal-type">Soups/Meat</p>
    <h2 class="card-title">Meat of best quality here </h2>
    <p class="card-body">The traditional French soup made with onions and beef with a dollop of garlic and saffaron mayonise.</p>
  </div>
  <div class="card-price">$10</div>
</div>
  <div class="card">
  <div class="card-image">
    <img src="https://hazdeoros.com/familiar/wp-content/uploads/2022/02/como-preparar-un-perro-caliente.png">
  </div>
  <div class="card-text">
    <p class="card-meal-type">Hot Dogs Here </p>
    <h2 class="card-title">Hot dogs Now</h2>
    <p class="card-body">Chickens doused in wine, mushrooms, pork, onions and garlic.</p>
  </div>
  <div class="card-price">$104</div>
</div>
<div class="card">
  <div class="card-image">
    <img src="https://media.ambito.com/p/bd0f0c0fc9a64343a1e78f680f32dbf4/adjuntos/239/imagenes/039/765/0039765708/empanadajpg.jpg">
  </div>
  <div class="card-text">
    <p class="card-meal-type">Empanadas  </p>
    <h2 class="card-title">Empanadas </h2>
    <p class="card-body">Chickens doused in wine, mushrooms, pork, onions and garlic.</p>
  </div>
  <div class="card-price">$104</div>
</div>
<div class="card">
  <div class="card-image">
    <img src="https://pbs.twimg.com/media/FJvleYLXoAAaNUj.jpg">
  </div>
  <div class="card-text">
    <p class="card-meal-type">Typical Colombian </p>
    <h2 class="card-title">Arepa and chorizo</h2>
    <p class="card-body">Chickens doused in wine, mushrooms, pork, onions and garlic.</p>
  </div>
  <div class="card-price">$104</div>
</div>
</div>
</body>
</html>