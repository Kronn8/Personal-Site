<!DOCTYPE html>
<html>
<title>Kronn8's Site</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="w3.css">
<link rel="stylesheet" href="css.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Home</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Link1</a> 
    <a href="" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Link2</a> 
    <a href="" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Link3</a> 
    <a href="" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Link4</a> 
    <a href="" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Link5</a> 
    <a href="" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Link6</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Home</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Kronn8's Site</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Home</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>

  <!-- Heading1 -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Heading1</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Paragraph</p>
  </div>
  
  <!-- Designers -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Boxes</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Paragraph</p>
    <p><b>Paragraph</b></p>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <div class="w3-container">
          <h3>Box1</h3>
          <p class="w3-opacity">Title</p>
          <p>Paragraph</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <div class="w3-container">
          <h3>Box2</h3>
          <p class="w3-opacity">Title</p>
          <p>Paragraph</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <div class="w3-container">
          <h3>Box3</h3>
          <p class="w3-opacity">Title</p>
          <p>Paragraph</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Lists and Buttons -->
  <div class="w3-container" id="packages" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Lists and Buttons</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Paragraph</p>
  </div>

  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Gray List</li>
        <li class="w3-padding-16">ListItem</li>
        <li class="w3-padding-16">ListItem</li>
        <li class="w3-padding-16">
          <h2>$ a</h2>
          <span class="w3-opacity">per b</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-white w3-padding-large w3-hover-black">GrayButton</button>
        </li>
      </ul>
    </div>
        
    <div class="w3-half">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-red w3-xlarge w3-padding-32">Red List</li>
        <li class="w3-padding-16">ListItem</li>
        <li class="w3-padding-16">ListItem</li>
        <li class="w3-padding-16">
          <h2>$ x</h2>
          <span class="w3-opacity">y</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-red w3-padding-large w3-hover-black">RedButton</button>
        </li>
      </ul>
    </div>
  </div>
  
  <!-- Input Fields -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Input Fields</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Paragraph</p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Field1</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Field2</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Field3</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">WideRedButton</button>
    </form>  
  </div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>