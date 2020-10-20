<?php include('include/header.php');?>

<!-- Photo Grid -->
<div class="w3-row" id="myGrid" style="margin-bottom:128px">
  <div class="w3-third">
    <img src="images/amsterdam.jpg" style="width:100%">
    <img src="images/athens.jpg" style="width:100%">
    <img src="images/berlin.jpg" style="width:100%">
    <img src="images/bratislava.jpg" style="width:100%">
    <img src="images/brussels.jpg" style="width:100%">
    <img src="images/budapest.jpg" style="width:100%">   
 
  </div>

  <div class="w3-third">
    <img src="images/copenhagem.jpg" style="width:100%">
    <img src="images/dublin.jpg" style="width:100%">
    <img src="images/helsinki.jpg" style="width:100%">
    <img src="images/lisbon.jpg" style="width:100%">
    <img src="images/london.jpg" style="width:100%">
    <img src="images/luxemburg.jpg" style="width:100%">
  </div>

  <div class="w3-third">
    <img src="images/madrid.jpg" style="width:100%">
    <img src="images/nicosia.jpg" style="width:100%">
    <img src="images/paris.jpg" style="width:100%">
    <img src="images/prague.jpg" style="width:100%">
    <img src="images/riga.jpg" style="width:100%">
    <img src="images/rome.jpg" style="width:100%">   
   
  </div>
</div>

<!-- End Page Content -->
</div>


 
<script>
// Toggle grid padding
function myFunction() {
  var x = document.getElementById("myGrid");
  if (x.className === "w3-row") {
    x.className = "w3-row-padding";
  } else { 
    x.className = x.className.replace("w3-row-padding", "w3-row");
  }
}

// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.width = "100%";
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>



