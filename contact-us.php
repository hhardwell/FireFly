<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/site.css">
  <link rel="stylesheet" type="text/css" href="css/contact-us.css">
</head>

<?php include"header.php";?>
<!-- THE HEADER -->
<div class="background-container">
<div class="content-container">
<div class="title-container header-font">
<h1 class="color-grey">Contact</h1><h1 class="color-orange">Us</h1>
</div>
</div>
</div>

<!-- THE EXPLANATION -->
<div class="background-container">
<div class="content-container">
<div class="exp-container description-font background-grey color-grey">
<p>It is our mission in life to put on events that capture our customers' imagination. We will do our utmost to turn your dream event into a reality, whether that's putting on a great festival or performing the arcane rituals required to summon the dread lord Cthulu. We've got talent, skill and experience. Get in touch with us today to find out more.</p>
</div>
</div>
</div>

<!-- THE CONTACT FORM -->
<div class="background-container">
<div class="content-container background-grey border-round">
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
<!-- THE FINISHING IMAGE -->
<div class="content-container">
<div class="finishImg">
<img src="./images/facebook/facebook-background.png" alt="flags">
</div>
</div>
</div>

<?php include"footer.php";?>
