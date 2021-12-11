<?php session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
error_reporting(E_WARNING); ?>
<?php if(isset($_SESSION['email'])) : ?>

<?php require '../owner/navbar.php'; ?>

<link rel="stylesheet" href="css/signup.css">
<title>Space2Share - About</title>
<!-- navbar -->



</ul>
</div>
</nav>

<body style=" background-color: #ebebeb;">
  

    <div style="width: 100%; height:32rem; background-color: black;position: relative; color: white; justify-content: center;">


      <br><br><br><br><br>
  <center>
<h1 class="ml15">
  <span class="word">Want to</span>
  <span class="word">know more about</span>
  
</h1>

<h1 class="ml6">
  <span class="text-wrapper">
   
    <span class="letters letters-left">Space</span>
    <span class="letters ampersand" style="margin-left: -0.5em">2</span>
    <span class="letters letters-right" style="margin-left: -0.5em">Share ?</span>
    
  </span>
</h1>
</center>

</div>
    <br>

              <h3 style="margin-left: 2rem">About Us</h3>

<div class="tab" >
  <button class="tablinks" onclick="openCity(event, 'London')">About Space2Share</button>
  <button class="tablinks" style= "margin-left: 5rem;" onclick="openCity(event, 'Paris')">How to use Space2Share</button>
  <button class="tablinks" style= "margin-left: 5rem;" onclick="openCity(event, 'Tokyo')">Space2Share Contact info</button>


</div>
</center>

<div id="London" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<br><br>


<style type="text/css">
  .ml15 {
    top: 50
  font-weight: 800;
  font-size: 3.8em;
  font-family: Quicksand;

  text-transform: uppercase;
  word-spacing: 0em;
  position: relative;
  letter-spacing: 0em;
}

.ml15 .word {
  display: inline-block;
  line-height: 1em;
}


.ml6 {
    font-family: Quicksand;

  position: relative;
  font-weight: 300;
  font-size: 4.5em;
  color: #fff;
}

.ml6 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.1em;
  padding-right: 0.05em;
  padding-bottom: 0.15em;
  line-height: 1em;
}

.ml6 .line {
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  margin: auto;
  height: 3px;
  width: 100%;
  background-color: #402d2d;
  transform-origin: 0.5 0;
}

.ml6 .ampersand {
  font-family: Times New Roman;
  font-weight: 400;
  width: 1em;
  margin-right: -0.1em;
  margin-left: -0.1em;
}

.ml6 .letters {
  display: inline-block;
  opacity: 0;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<script type="text/javascript">
  anime.timeline({loop: true})
  .add({
    targets: '.ml15 .word',
    scale: [14,1],
    opacity: [0,1],
    easing: "easeOutCirc",
    duration: 1000,
    delay: function(el, i) {
      return 800 * i;
    }
  }).add({
    targets: '.ml15',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 9500
  });

  
</script>



<script type="text/javascript">
  // Wrap every letter in a span
anime.timeline({loop: true})
  .add({
    targets: '.ml6 .line',
    opacity: [0.5,1],
    scaleX: [0, 1],
    easing: "easeInOutExpo",
    duration: 1200
  }).add({
    targets: '.ml6 .line',
    duration: 1200,
    easing: "easeOutExpo",
    translateY: function(e, i, l) {
      var offset = -0.625 + 0.625*2*i;
      return offset + "em";
    }
  }).add({
    targets: '.ml6 .ampersand',
    opacity: [0,1],
    scaleY: [0.5, 1],
    easing: "easeOutExpo",
    duration: 1200,
    offset: '-=600'
  }).add({
    targets: '.ml6 .letters-left',
    opacity: [0,1],
    translateX: ["0.5em", 0],
    easing: "easeOutExpo",
    duration: 1200,
    offset: '-=300'
  }).add({
    targets: '.ml6 .letters-right',
    opacity: [0,1],
    translateX: ["-0.5em", 0],
    easing: "easeOutExpo",
    duration: 1200,
    offset: '-=600'
  }).add({
    targets: '.ml6',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 8000
  });
</script>


<style>

/* Style the tab */
.tab {
  overflow: hidden;
  width: 100%;
  text-align: center;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

<?php else : ?>
<?php header('Location: owner-index.php'); ?>
<?php endif; ?>