<!DOCTYPE html>

<head>
  <link rel="stylesheet" type="text/css" href="css/site.css">
  <link rel="stylesheet" type="text/css" href="css/whats-on.css">

</head>

<body>
<!-- THE NAVBAR GOES HERE -->


<!-- Page title -->

<div class="title-container">
<div class="page-title header-font">
  <a href="#" class="card-font-size color-grey">What's</a><a href="#" class="card-font-size color-orange"> On</a>
</div>
</div>


<!-- Beginning of content -->

<div class="background-container">
<div class="description-font background-grey color-grey description-button-font-size descriptor">
  <p class="intro">This is the "What's On" page and features the many exciting events that are coming up. I'm sure you're as thrilled as we are to learn about the FireFly events schedule and you'll obviously be planning your entire year around what we've got on. Or something.</p><p class="intro color-orange">Insert excitment here.</p>
</div>
</div>


<!-- PAST EVENTS SECTION -->

<div class="background-container">
<div class="event-container">

  <div class="eventCard">
    <div class="card-top">
    </div>
    <div class="card-bottom">
    <p>the information about the event goes here.</p>
    </div>
  </div>

  <div class="eventCard">
      <div class="card-top">
      </div>
      <div class="card-bottom">
      <p>the information about the event goes here.</p>
      </div>
  </div>

  <div class="eventCard">
      <div class="card-top">
      </div>
      <div class="card-bottom">
      <p>the information about the event goes here.</p>
      </div>
      </div>
</div>
</div>

<!-- THE CALENDAR -->

<div class="content-container">
<div class="calendar-section description-font">
<div id="calendar">
<div class="cal1"></div>
<div class="cal2">
<script type="text/template" id="template-calendar">
<div class="clndr-controls">
<div class="clndr-previous-button">&lsaquo;</div>
<div class="month"><%= intervalStart.format('M/DD') + ' &mdash; ' + intervalEnd.format('M/DD') %></div>
<div class="clndr-next-button">&rsaquo;</div>
</div>
<div class="clndr-grid">
<div class="days-of-the-week">
<% _.each(daysOfTheWeek, function(day) { %>
<div class="header-day"><%= day %></div>
<% }); %>
<div class="days">
<% _.each(days, function(day) { %>
<div class="<%= day.classes %>"><%= day.day %></div>
<% }); %>
</div>
</div>
</div>
<div class="clndr-today-button">Today</div>
</script>
</div>
<div class="cal3">
<script type="text/template" id="template-calendar-months">
<div class="clndr-controls top">
<div class="clndr-previous-button">&lsaquo;</div>
<div class="clndr-next-button">&rsaquo;</div>
</div>
<div class="clearfix">
<% _.each(months, function(cal) { %>
<div class="cal">
<div class="clndr-controls">
<div class="month"><%= cal.month.format('MMMM') %></div>
</div>
<div class="clndr-grid">
<div class="days-of-the-week">
<% _.each(daysOfTheWeek, function(day) { %>
<div class="header-day"><%= day %></div>
<% }); %>
<div class="days">
<% _.each(cal.days, function(day) { %>
<div class="<%= day.classes %>"><%= day.day %></div>
<% }); %>
</div>
</div>
</div>
</div>
<% }); %>
</div>
<div class="clndr-today-button">Today</div>
</script>
</div>
</div>
</div>
</div> <!-- End of calendar section div -->
</div> <!-- End of the calendar section content container -->


<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clndr/1.4.7/clndr.min.js"></script>
<script>

$('#calendar').clndr({
  template: $('#calendar-template').html(),
  events: [
    { date: '2018-12-12', title: 'CLNDR GitHub Page Finished', url: 'http://github.com/kylestetz/CLNDR' }
  ],
  clickEvents: {
    click: function(target) {
      console.log(target);
    },
    onMonthChange: function(month) {
      console.log('you just went to ' + month.format('MMMM, YYYY'));
    }
  },
  doneRendering: function() {
    console.log('this would be a fine place to attach custom event handlers.');
  }
});

</script>

</body>
