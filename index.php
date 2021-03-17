<!DOCTYPE html>
<html>
<head>
  <title>PT Multi Media Selular</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
body {
  font-family: Arial;
  color: white;
}

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
  background-color: #ffffff;
}

.right {
  right: 0;
  background-color: #ffffff;
}

.centered {
  position: absolute;
  width: 481px;
height: 132px;
left: 135px;
top: 120px;
  text-align: center;
}

.centered img {
  width: 150px;
  border-radius: 50%;
}

.centeredRight {
  position: absolute;
  text-align: center;
  top: 170px;
}

.centeredBg {
  width: 80%;
  position: absolute;
  text-align: center;
  bottom: 120px;
  right: 120px;
  z-index: 1;
  transform: rotate(-180deg);
  filter: drop-shadow(-3px 4px 10px rgba(0, 0, 0, 0.25));
  
}

.centeredBg2 {
  width: 80%;
  position: absolute;
  text-align: center;
  bottom: 40px;
  left: 80px;
  z-index: 2;
  filter: drop-shadow(-3px 4px 10px rgba(0, 0, 0, 0.25));
}

.centeredLogo {
  position: absolute;
  text-align: center;
  top: 270px;
  left: 200px;
  z-index: 4;
  filter: drop-shadow(-3px 4px 8px rgba(0, 0, 0, 0.25));
}

.rectangle {
  position: absolute;
  left: 25%;
  right: 28%;
  top: 26%;
  bottom: 28%;

  background: #FFFFFF;
  box-shadow: -3px 4px 10px rgba(0, 0, 0, 0.25);
  border-radius: 120px;
  z-index: 3;
}


.learnButton {
  background-color:#397335;
  border-radius:5px;
  border:1px solid #18ab29;
  display:inline-block;
  cursor:pointer;
  color:#ffffff;
  font-family:Arial;
  font-size:16px;
  padding:20px 70px;
  text-decoration:none;
  text-shadow:0px 1px 0px #2f6627;
}
.learnButton:hover {
  background-color:#58b652;
}
.learnButton:active {
  position:relative;
  top:1px;
}

.loginButton {
  background-color: transparent;
  border-radius:5px;
  border:1.5px solid #397335;
  display:inline-block;
  cursor:pointer;
  color:#ffffff;
  font-family:Arial;
  font-size:16px;
  padding:20px 95px;
  text-decoration:none;
  text-shadow:0px 1px 0px #2f6627;
}
.loginButton:hover {
  background-color:#58b652;
}
.loginButton:active {
  position:relative;
  top:1px;
}



</style>
</head>
<body>

<div class="split left">
  <div class="centered">
    <h1 style="text-align: justify; color: #000;font-family: Roboto;
        font-style: normal;
        font-weight: 500;
        font-size: 51px;
        line-height: 66px;">Introducing New MMS E-Proposal</h1>
    <p style="text-align: justify; color: #000; font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 20px;
        line-height: 28px;">Live demo MMS E-Proposal Website. Non-commercial and for personal use only.</p>
    <p style="float: left; padding-right: 10px" align="left"><a style="font-family: Arial" class="learnButton" href="#">Learn More</a></p>
    <p style="float: right;" align="right"><a style="color: black; font-family: Arial" class="loginButton" href="logindex.php">Login</a></p>
  </div>
</div>

<div class="split right">
  <div class="centeredLogo">
    <img style="float: left;" src="images/pngmms.png" alt="MMS Logo" width="50%">
  </div>
  <div class="rectangle">
    
  </div>
  <div class="centeredBg" style="margin-top: 100px">
    <img style="float: left;" src="images/pngpattern.png" alt="MMS Logo" width="100%">
  </div>
  <div class="centeredBg2" style="margin-top: 100px">
    <img style="float: left;" src="images/pngpattern.png" alt="MMS Logo" width="100%">
  </div>
</div>
     
</body>
</html> 