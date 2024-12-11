<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title> Php Full Project </title>

     <!-- css link start here -->
      <link rel="stylesheet" href="/php_full_project/style.css">
</head>
<body>
     <section class="main">

          <nav>
               <a href="#"> <img src="images/logo1.png" alt=""> </a>

               <ul class="menu">
                    <li><a href="" class="action">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Features</a></li>
                    <li><a href="">Contact</a></li>
               </ul>
          </nav>

          <div class="main_heading">
               <h1> Create Prespective With Virtual Reality </h1>
               <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, dignissimos?</p>
               <a class="main_btn" href="#"> Contact </a>
          </div>
          
     </section>

     <!-- Features section start here -->

     <section class="Features">
          <div class="Features_container">

               <div class="Features_box">
                    <div class="f_imge">
                         <img src="images/info-icon1.png" alt="">
                    </div>

                    <div class="text">
                         <h4> Web Development </h4>
                         <p>Lorem ipsum dolor sit amet.</p>
                         <a href="" class="main_btn"> Check </a>
                    </div>
               </div>


               <div class="Features_box">
                    <div class="f_imge">
                         <img src="images/info-icon2.png" alt="">
                    </div>

                    <div class="text">
                         <h4> Web Development </h4>
                         <p>Lorem ipsum dolor sit amet.</p>
                         <a href="" class="main_btn"> Check </a>
                    </div>
               </div>


               <div class="Features_box">
                    <div class="f_imge">
                         <img src="images/info-icon3.png" alt="">
                    </div>

                    <div class="text">
                         <h4> Web Development </h4>
                         <p>Lorem ipsum dolor sit amet.</p>
                         <a href="" class="main_btn"> Check </a>
                    </div>
               </div>

          </div>

     </section>

      <!-- About section start here -->
     <section class="about">
          
          <div class="about_img">
               <img src="images/about.png" alt="">
          </div>
          <div class="about_text">
               <h2> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, odio.</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae sapiente quidem magnam cupiditate ipsam itaque quo ducimus a enim vel suscipit laborum commodi debitis natus, numquam harum labore rerum! Ipsum?</p>
               <button class="main_btn"> Read More </button>
          </div>
          
     </section>


     <!-- contact form area start here -->
     <section class="contact">
          <div class="contact_heading">
               <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, labore!</h1>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto temporibus accusantium assumenda vero laudantium impedit voluptas est ipsa, quia repellendus?</p>
          </div>
          

          <form action="userinfo.php" method="POST">
               <input type="text" name="user" placeholder="Enter your name">
               <input type="email" name="email" placeholder="Enter your email">
               <textarea name="message" placeholder="Type Message Here"></textarea>
               <input type="submit" name="submit" value="Submit" class="btn1">
          </form>
     </section>

</body>
</html>