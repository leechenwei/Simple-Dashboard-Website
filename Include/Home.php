<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Home.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxs-school'></i>
      <span class="logo_name">Student Portal</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="../Dashboard/dashboard.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
      </li>
      <li>
          <a href="">
          <i class='bx bxs-calendar' ></i>
            <span class="link_name">Academic Calender</span>
          </a>
      </li>
      <li>
          <a href="">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Announcements</span>
          </a>
      </li>
      <li>
        <a href="">
          <i class='bx bxs-user-check'></i>
          <span class="link_name">Attendance</span>
        </a>
      </li>
      <li>
        <a href="">
          <i class='bx bxs-door-open'></i>
          <span class="link_name">Classes</span>
        </a>
      </li>
      <li>
        <a href="">
          <i class='bx bx-compass' ></i>
          <span class="link_name">Transcript</span>
        </a>
      </li>
      <li>
        <a href="">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Update Password</span>
        </a>
      </li>
      <li>
    <div class="profile-details">
      <div class="name-job">
        <div class="profile_name"><?php echo $_SESSION['username'];?></div>
        <div class="job"><?php echo $_SESSION['role'];?></div>
      </div>
      <a href="">
        <i class='bx bx-log-out' id="logout"></i>
      </a>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu'></i>
    </div>
  </section>
<script src="../Include/Home.js">
</script>
</body>
</html>
