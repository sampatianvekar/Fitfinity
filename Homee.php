<!DOCTYPE html>
<html>
<head>
  <title>Fitfinity</title>
  <style>
    /* Reset default browser styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
  }

body{
       

}
  
    /* Header styles */
    header {
      background-color: royalblue;
      padding: 20px;
     color:white;
    }
    
    .logo {
      font-weight: bold;
      font-size: 24px;
    }
    
    .menu {
      display: inline-block;
      margin-left: 20px;
     color:white;
    }
    
    .menu li {
      display: inline-block;
      position: relative;
      padding: 10px;
      cursor: pointer; 
     
    }
    
    .menu li:hover {
      background-color: purple;
    }
    
    .submenu {
      position: absolute;
      top: 100%;
      left: 0;
      background-color: peach;
      display: none;
      padding: 10px;
      z-index: 1;
    }
    
    .menu li:hover .submenu {
      display: block;
    }
    
    .submenu li {
      display: block;
      padding: 5px;
      background-color:black;
    }
    
    .login {
      float: right;
      margin-left: 20px;
      background-color:white;
    }
    
    .login button {
      background-color: white;
      font-color: white;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }
    
    .login button:hover {
      background-color: #45a049;
    }



.container {
    display: flex;
}

/* Sidebar styles */


.sidebar {
    background-color:snow;
    width: 250px;
    background-color: #f2f2f2;
    padding: 20px;
}

.sidebar h1 {
    color: #333;
    margin-bottom: 20px;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar ul li a {
    display: block;
    color: #666;
    padding: 20px;
    text-decoration: none;
    transition: background-color 0.3s;
}

.sidebar ul li a:hover {
    background-color: #ddd;
}

.sidebar ul ul {
    display: none;
    margin-left: 20px;
}

.sidebar ul li:hover > ul {
    display: inherit;
}



/* Content styles */

.content {
   background-color:white;
     flex: 1;
    padding:  100px;
     text-align: center;
}


.content h2 {
  color:black;
  font-size: 36px;
  margin-bottom: 20px;
}

.content p {
  color:black;
  font-size: 18px;
  /*margin-bottom: 40px;*/
 margin-bottom: 20px;
  padding-inline: 60px;
}

 right-column {
  background-color:#f2f2f2 ;
  width: 10%;
  padding: 10px;
}





footer {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 20px;
}
  </style>

<script type="text/javascript">
  function preventBack() {window.history.forward(); }
 setTimeout("preventBack()",0);
 window.onunload=function () {null};

</script>

</head>
<body>

  <header>
    <span class="logo">Fitfinity</span>
    <ul class="menu">
      <li>Home</li>
      <li>About
        <ul class="submenu">
          <li>Our Mission</li>
          <li>Our Team</li>
        </ul>
      </li>
      <li>Services
        <ul class="submenu">
          <li>Medical Consultation</li>
          <li>Emergency Care</li>
         
        </ul>
      </li>
 
    </ul>
    <div class="login">
      <button><a href="login.php"> Logout</a></button>
    </div>
  </header>



 <div class="container">
        <div class="sidebar">
            <h1>Healthcare</h1>
            <ul>
                <li><a href="C:\Users\Sampati Anvekar\Desktop\w3\diets\index.html">Diets</a></li>
                 <li>
                    <a href="#">Medical</a>
                    <ul>
                        <li><a href="#">Kids/Teen (05 -17 years)</a></li>
                        <li><a href="#">Adult (18 - 40+  years)</a></li>
                    </ul>
                </li>
                <li><a href="#">Fitness</a></li>
                <li><a href="asmr2.html">ASMR</a></li>
            </ul>
        </div>
        <div class="content">
            <h2>Welcome to Fitfinity!</h2>
            <p>We provide information on Health and Find Best Doctors for you in Belgaum.</p>
        </div>

<div class="bg">


</div>

 </div>
   


<div class="right-column">
<h1>Hospitals in Belgaum<h1>
<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d61407.89510185037!2d74.46996791688714!3d15.856941906609059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1shospitals%20in%20belgaum!5e0!3m2!1sen!2sin!4v1685096834478!5m2!1sen!2sin" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

 <footer>
    <!-- Footer content -->
    <p>&copy; 2023 Fitfinity. All rights reserved.</p>
  </footer>
  
</body>
</html>
