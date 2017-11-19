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
    margin-bottom:200px;
    background: url("y2.jpg") center bottom no-repeat;
    padding: 15px;
}

div.desc {
    padding: 15px;
    text-align: center;
}
</style>
</head>


<body id="b">
  <div class="header">
    
  </div>
 
<div class="topnav">
    <a href="signout.php">Sign_Out</a>
  <a  href="about1.php">About</a>
  <a class="active" href="ht.php">Home</a>
</div>
  <br/>
  <div class="gallery">
    <a href="read.php">
    <img src="read.jpg" alt="Image can't be displayed" width="300" height="200">
    </a>
    <div class="desc">Read your stories here</div>
  </div>

  <div class="gallery1">
    <a  href="write.php">
      <img src="w.jpg" alt="Image can't be displayed" width="600" height="400">
    </a>
    <div class="desc">Write your new stories</div>
  </div>
  <div id="b">
  </div>

</body>
</html>
