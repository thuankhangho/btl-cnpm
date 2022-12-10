<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>
<head>
  <title>Dashboard</title>
</head>
<div class="my-container" style="padding: 20px;">
  <div>
    <h1 class="h-100 d-flex align-items-center justify-content-center">Admin Dashboard</h1>
  </div>
  <div class="boxes">
    <div class="row">
      <a class="col-sm-3 rounded p-2" href="" style="background-color: #FFF8E5">
        <div class="p-2">
          <div class="circle1 my-circle">
              <box-icon name='bell' class="bell1"></box-icon>
          </div>
          <div>
            <h5>Notifications</h5>
            <div class="small-text">4 Unread Notifications</div>
          </div>
        </div>
      </a>
      <a class="col-sm-3 rounded p-2" href="" style="background-color: #E4F8EB;">
        <div class="p-2">
          <div class="circle2 my-circle">
              <box-icon name='bell' class="bell1"></box-icon>
          </div>
          <div>
            <h5>Tasks</h5>
            <div class="small-text">4 Projects last Updated</div>
          </div>
        </div>
      </a>
      <a class="col-sm-3 rounded p-2" href="<?=ROOT?>/employees" style="background-color:#EBE8FE">
      <div class="p-2">
        <div class="circle3 my-circle">
            <box-icon name='bell' class="bell1"></box-icon>
        </div>
        <div>
          <h5>Employees</h5>
          <div class="small-text">5 Employees on Standby</div>
        </div>
      </div>
      </a>
      <a class="col-sm-3 rounded p-2" href="" style="background-color: #3C21F7">
        <div class="p-2">
          <div class="circle4 my-circle">
              <box-icon name='bell' class="bell1"></box-icon>
          </div>
          <div>
            <h5 style="color:white">MCPs</h5>
            <div class="small-text" style="color:white">3 MCPs ready to be emptied</div>
          </div>
        </div>
      </a>
    </div>
  </div>
  
  <div class="container-2">
    <div class="row">
      <div class="container-notif col-6">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Tasks</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="background-color: green; color: white; border-radius: 20px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="gold" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                  <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                  <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                </svg>
                <b>An MVC is full. Time to send someone to clear it!</b>
                </td>
            </tr>

            <tr>
              <td style="background-color: green; color: white; border-radius: 20px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="gold" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                  <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                  <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                </svg>
                <b>An MVC is full. Time to send someone to clear it!</b>
              </td>
            </tr>

            <tr>
              <td style="background-color: green; color: white; border-radius: 20px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="gold" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                  <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                  <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                </svg>
                <b>An MVC is full. Time to send someone to clear it!</b>
              </td>
            </tr>

            <tr>
              <td style="background-color: green; color: white; border-radius: 20px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="gold" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                  <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                  <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                </svg>
                <b>An MVC is full. Time to send someone to clear it!</b>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="daily-task col-6">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col" colspan="2">Today's Agenda</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th style="width: 10%; background: green; color: white">07:00</th>
              <td style="background: #E4F8EB">Daily standup</td>
            </tr>
            <tr>
              <th style="width: 10%; background: green; color: white">09:00</th> 
              <td style="background: #E4F8EB">Assign routes to today's employees</td>
            </tr>
            <tr>
              <th style="width: 10%; background: green; color: white">10:00</th> 
              <td style="background: #E4F8EB">Random MCPs check</td>
            </tr>
            <tr>
              <th style="width: 10%; background: green; color: white">12:00</th> 
              <td style="background: #E4F8EB">Lunch</td>
            </tr>
            <tr>
              <th style="width: 10%; background: green; color: white">13:00</th> 
              <td style="background: #E4F8EB">Meetup with government</td>
            </tr>
            <tr>
              <th style="width: 10%; background: green; color: white">15:00</th> 
              <td style="background: #E4F8EB">Daily radio show (Asking While Snacking)</td>
            </tr>
            <tr>
              <th style="width: 10%; background: green; color: white">17:00</th> 
              <td style="background: #E4F8EB">Finish work</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="calendar row">
      <h3 class="h-100 d-flex align-items-center justify-content-center">Calendar</h3>
      <div class="month">
        <ul>
          <li class="prev">&#10094;</li>
          <li class="next">&#10095;</li>
          <li>December<br><span style="font-size: 18px">2022</span></li>
          <li style="font-size: 12px">Never settle</li>
          <li style="font-size: 12px">Gonna do better</li>
          <li style="font-size: 12px">Give everything you've got</li>
          <li style="font-size: 12px">You can do it</li>
          <li style="font-size: 12px">Up the ante</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">
  <?php for ($i = -2; $i <= 31; $i++) {
    if ($i < 0) {
      echo '<li></li>';
    } elseif ($i == 10) {
      echo '<li><span class="active">'.$i.'</span></li>';
    } else {
      echo '<li>'.$i.'</li>';
    }
  } ?>
</ul>

<?php $this->view('includes/footer') ?>

<style>
  ul {list-style-type: none;}

  /* Month header */
  .month {
    padding: 70px 25px;
    width: 100%;
    background: green;
    text-align: center;
  }

  /* Month list */
  .month ul {
    margin: 0;
    padding: 0;
  }

  .month ul li {
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
  }

  /* Previous button inside month header */
  .month .prev {
    float: left;
    padding-top: 10px;
  }

  /* Next button */
  .month .next {
    float: right;
    padding-top: 10px;
  }

  /* Weekdays (Mon-Sun) */
  .weekdays {
    margin: 0;
    padding: 10px 0;
    background-color:#ddd;
  }

  .weekdays li {
    display: inline-block;
    width: 13.6%;
    color: #666;
    text-align: center;
  }

  /* Days (1-31) */
  .days {
    padding: 10px 0;
    background: #eee;
    margin: 0;
  }

  .days li {
    list-style-type: none;
    display: inline-block;
    width: 13.6%;
    text-align: center;
    margin-bottom: 5px;
    font-size: 12px;
    color: #777;
  }

  /* Highlight the "current" day */
  .days li .active {
    padding: 5px;
    background: #E4F8EB;
    color: black;
    font-weight: bold;
  }
</style>