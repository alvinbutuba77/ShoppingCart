<?php
 session_start();
 include("connect.php");

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
    crossorigin="anonymous">
    <title>Shop</title>
</head>
<body>
    <div class="container mt-3">
        <div>
            <nav id="bord">
             <h1>LaShop</h1>
             <h3>get what you need online!</h3>

              <div id="nav-top">
                <label for="search">
                    <input type="text" name="search" placeholder="search products"><button>Search</button>
                 </label>
                 
                 <p> <a href="index.html">Home</a> </p>
                 <p><a href="">View</a> </p>
                 <p><a href="">Cart</a> </p>
                 <p><a href="signin.php">Sign in</a> </p>
                 <p><a href="signup.php">Sign up</a></p>

              </div>
             
             <hr>

            </nav>
            
        </div>

        <header class="header">
            <div class="img-wrapper">
                <img src="images/pc.png" alt="">
            </div>

            <div class="banner">
                <h1>Computers, Laptops and Mobile Phones</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <button>Discover now</button>
            </div>
         </header>

        <div class="cat-pics">
            <h2 id="he"></h2>
            <div id="deals">
                  <img src="images/thr.png" alt="">

                  <img src="images/thr1.png" alt="">

                  <img src="images/thr2.png" alt="">
            </div>
        </div>
        <hr>

        <div>
            <h2 id="he">Categories</h2>

            <div id="groups">

                <div id="lap">
                    
                        <a href="products.html"> 
                            <img src="images/big_pic.jpg" alt="lap"></a>
                        
                   
                </div>
                
                <div id="comp">
                    
                        <a href="products.html">
                            <img src="images/pc.png" alt="comp"></a>
                     
                </div>

                <div id="phone">
                    
                        <a href="products.html">
                            <img src="images/1.png" alt="phone"></a>
                    
            </div>
            
        </div>
        <hr>

        

        <div>
            <footer class="foot">
                <div class=>
                    <p>2022 LaShop</p>
                    <p>all rights reserved</p>
                </div>

                <div>
                    <p>info:</p>
                    <ul>
                        <li>home</li>
                        <li>about us</li>
                        <li>contacts</li>

                    </ul>
                </div>
                
            </footer>
        </div>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
crossorigin="anonymous"></script>

</body>

</html>