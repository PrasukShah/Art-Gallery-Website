<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OdysseyOfArt</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- ************HOME PAGE TITLE********** -->
    <section class="homepage">
        <h2>EXPLORE</h2>
        <h3>THE</h3>
        <h4>COLLECTION</h4>
    </section>

    <!-- ***************NAVIGATION BAR**************** -->
    <nav>
      <a href="#" class="logo">OdysseyOfArt</a>
        <ul class="link">
          <li>
            <?php
                  // Check if the user is logged in
                  if (isset($_SESSION['username'])) {
                      // User is logged in, display their name and logout link
                      echo '<span style="color:white;font-family:sans-serif;">Hello ' . $_SESSION['username'] . '</span> !';
                      echo '&nbsp;';
                      echo '&nbsp;';
                      echo '<a class="nav-links" href="index.html" id="logout">Log Out</a>';
                  } else {
                      // User is not logged in, display login link
                      echo '<a class="nav-link" href="login.html" ;">Log In</a>';
                  }
            ?>
            <a href="#container">Home</a>
            <a href="#links">About us</a>
          
            <!-- <a href="logout.php">Logout</a> -->
          </li>
        </ul>
    </nav>
      
    <section class="page2">
    <!--*************FLEX-BOX CONATINER******************  -->
    <div class="container" id="container">
      <div class="box">
        <img src="images\Art 1.jpg" alt="Image 1">
        <div class="content">
          <h2>Realism</h2>
          <p>Realism in the arts is generally the attempt to represent subject matter truthfully, 
            without artificiality and avoiding speculative and supernatural elements. The term is 
            often used interchangeably with naturalism</p>
          <a href="realism.html" class="explore-button">Explore Now</a>
        </div>
      </div>
      
      <div class="box">
        <img src="images\Art 2.jpeg" alt="Image 2">
        <div class="content">
          <h2>Abstraction</h2>
          <p>Abstract art uses visual language of shape, form, color and line to create a 
            composition which may exist with a degree of independence from visual 
            references in the world.</p>
          <a href="abstraction.html" class="explore-button">Explore Now</a>
        </div>
      </div>
      <div class="box">
        <img src="images\Art 3.jpeg" alt="Image 2">
        <div class="content">
          <h2>Painterly</h2>
          <p>Painterly refers to the application of paint in a 'loose' or less than 
            controlled manner, resulting in the appearance of visible brushstrokes 
            within the finished painting</p>
          <a href="painterly.html" class="explore-button">Explore Now</a>
        </div>
      </div>
      <div class="box">
        <img src="images\Art 4.jpg" alt="Image 2">
        <div class="content">
          <h2>Impressionism</h2>
          <p>Impressionism was a 19th-century art movement characterized by 
            relatively small, thin, yet visible brush strokes, open composition, 
            emphasis on accurate depiction of light in its changing qualities 
            (often accentuating the effects of the passage of time), ordinary 
            subject matter, unusual visual angles, and inclusion of movement 
            as a crucial element of human perception and experience.</p>
          <a href="impressionism.html" class="explore-button">Explore Now</a>
        </div>
      </div>
      <div class="box">
        <img src="images\Art 5.jpg" alt="Image 2">
        <div class="content">
          <h2>Photorealism</h2>
          <p>Photorealism is a genre of art that encompasses painting, 
            drawing and other graphic media, in which an artist studies a 
            photograph and then attempts to reproduce the image as realistically 
            as possible in another medium.</p>
          <a href="photorealism.html" class="explore-button">Explore Now</a>
        </div>
      </div>
      <div class="box">
        <img src="images\Art 6.jpg" alt="Image 2">
        <div class="content">
          <h2>Fauvism</h2>
          <p>Fauvism is a style of painting and an art movement that emerged in 
            France at the beginning of the 20th century characterized by 
            vivid colors, bold brushwork, and simplified forms, emphasizing 
            emotional expression.</p>
          <a href="fauvism.html" class="explore-button">Explore Now</a>
        </div>
      </div>
    </div>
    </section>
    <section class="page3">
    <!-- ***********PAGE-3 TITLE************* -->
        <h1>
          Don't be shy, ask the Odyssey
          <br />
          team!
        </h1>

    <!-- ******************CONTACT DETAILS***************** -->
      <div class="contact-container">
        <!-- <div class="contact-item">
            <div class="cimg-1"></div>
            <p class="chatboxall">Share Your Reviews</p>
            <a href="#" class="chatbox">Comments</a>
        </div> -->
        <div class="contact-item">
            <div class="cimg-2"></div>
            <p class="chatboxall">Drop us a line</p>
            <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox" class="chatbox">Submit a Request</a>
        </div>
        <div class="contact-item">
            <div class="cimg-3"></div>
            <p class="chatboxall">Get Connected</p>
            <a href="https://twitter.com/home" class="chatbox">Tweet Us</a>
        </div>
      </div>     
    </section>

    <!-- *******************FOOTER************************ -->
    <footer>
      <div class="links" id="links">
          <a target="_blank" href="https://www.linkedin.com/in/prasuk-shah-18b014223/"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i></a>
          <a target="_blank" href="https://twitter.com/Prasuk_Shah24"><i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i></a>
          <a target="_blank" href="https://github.com/PrasukShah"><i class="fa fa-github-square fa-lg" aria-hidden="true"></i></a>
    </div>

    <!-- *******************CREDIT************** -->
      <h2>Created by Prasuk Shah</h2>
    </footer>
   
  </body>
</html>
