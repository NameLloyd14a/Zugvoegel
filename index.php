<!DOCTYPE html>
<html>
<head>
<style>
ul {
  position: fixed;
  top: 0;
  width: 100%;
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right: 1px solid #bbb;
}
/* Remove the border from the last element */
li:last-child {
  border-right: none;
}
/* styling for buttons */
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 16px 30px;
  text-decoration: none;
  font-size: 20px;
}
/* defines the color of the inactive blocks */
li a:hover:not(.active) {
  background-color: #111;
}
/* defines the color of the active blocks */
.active {
  background-color: #04AA6D;
}
/* Style for the home button */
#home-icon {
  height: 30px; /* Adjust the height of the image */
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home"><img id="home-icon" src="website_logo.png" alt="Home"></a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li style="float:right"><a href="#about">About</a></li>
</ul>

</body>
</html>


