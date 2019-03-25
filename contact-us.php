<!DOCTYPE html>

<head>
  <link rel="stylesheet" type="text/css" href="css/contact-us.css">
</head>

<?php include"header.php";?>
<!-- THE HEADER -->
<h1 class="container page-title color-grey header-font">Contact <span class="color-orange">Us</span></h1>

  <!-- THE EXPLANATION -->
<div class="background-container">
  <div class="content-container container">
    <div class="exp-container description-font background-grey color-grey">
      <p>It is our mission in life to put on events that capture our customers' imagination. We will do our utmost to turn your dream event into a reality, whether that's putting on a great festival or performing the arcane rituals required to summon the dread lord Cthulu. We've got talent, skill and experience. Get in touch with us today to find out more.</p>
    </div>
  </div>
</div>

<!-- THE CONTACT FORM -->
<div class="background-container container">
<div class="content-container background-grey border-round ">
<form class="form">
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Nature of your query</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Planning an event</option>
      <option>Help needed</option>
      <option>Some kind of unknown third option</option>
      <option>Killer bees</option>
      </select>
  </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Give us a bit more information, yeah?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>
</div>
</div>

<?php include"footer.php";?>
