<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
  margin: 0;
}
.header {
    background-color: #00004d;
    text-align: center;
    padding: 20px;
    background-image: url("logo.png") ;
    background-repeat: no-repeat;
    height: 150px;
    width: 100%;
    background-position: center;
}
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
    background-color: #4CAF50;
    color: white;
}
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 22%;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}
div.gallery1 {
    margin-left: 170px;
    margin: 5px;
    border: 1px solid #ccc;
    float: right;
    width: 22%;
}

div.gallery1:hover {
    border: 1px solid #777;
}

div.gallery1 img {
    width: 100%;
    height: auto;
}
#b {
    margin-bottom:600px;
    background: url("y1.jpg") center bottom no-repeat;
    padding: 0px;
}

div.desc {
    padding: 15px;
    text-align: center;
}
</style>
</head>

<div class="topnav">
  <a  href="about.php">About</a>
  <a class="active" href="ht1.php">Home</a>
</div>
<body id="b">
  <div class="header">
    
  </div>
 

  <br/>
 


  <div class="gallery">
    <a href="sign.php">
      <img src="sign.jpg" alt="Image can't be displayed" width="600" height="400">
    </a>
    <div class="desc">Register here to read others stories</div>
  </div>

  <div class="gallery1">
    <a href="signin.php">
      <img src="signin.jpg" alt="Image can't be displayed" width="600" height="400">
    </a>
    <div class="desc">Sign in</div>
  </div>
  <div id="b">
  </div>

</body>
</html>
