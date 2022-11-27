<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $feedback=$_POST['feedback'];


  $sql="insert into `crud` (name,email,mobile,feedback) 
  values('$name','$email','$mobile','$feedback')";
  $result=mysqli_query($con,$sql);
  if($result){
   // echo "Data inserted successfully";
   header('location:display.php');
  }else{
    die(mysqli_error($con)); 
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FARHAN AHMED</title>
    
    <link href="https://fonts.googleapis.com/css?family=Caveat|Montserrat:400,600&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <main>
      <!-- ***************  ABOUT / PROFILE  **************** -->
      <header>
        <div class="content-wrap">
          <h1>FARHAN AHMED</h1>
          <div class="abc">
            <img src=https://i.ibb.co/xSHKHjh/Screenshot-36.jpg
            boder-radius="20px">
           </div>
          <h2>Frontend developer</h2>

          <p>As a developer, I specialize in creating modular and scalable front-end architectures.for now i am focusing on doing some great web3 based block chain projects, am always curious to know about future trends in tech!.</p>
          <p>I am a student who has an addictive interest over the web building, capturing moments and editing them i.e photography and editing ✨</p>
        </div>
      </header>
      <!-- ************ PROJECTS / PORTFOLIO  ************** -->
      <section class="projects">
        <div class="content-wrap">
          <h2>Featured Projects</h2>
          <p>View selected projects below. More information can be found at <a href="https://drive.google.com/drive/folders/10cFLfHKMke8mMY9QFJw6hBHoPf0Zk_lM">drive.link</a>.</p>

          <!-- Project 1 -->
          <section class="project-item">
            <img  src="https://i.postimg.cc/j5yG9PL4/project.jpg" alt="LinkedIn Learning course list">
            <br>
            <h3>LinkedIn Learning Courses</h3>
            <p>learnt
               various CSS
              and front-end focused web
              development courses
              including CSS Essential
              Training, Getting my
              Website Online
              more.
            these are few of my course complition certificates</p>
            <a class="btn" href="https://www.linkedin.com/learning/certificates/6dbf3930c779f110b0bd3f03fc96ccdf1506de757f392e2fe4a578e4a5cadd66?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base%3BHR5eHz6LSc2ltBR4Y5qaKw%3D%3D" target="_blank">CSS Training</a>
            <a class="btn" href="https://www.linkedin.com/learning/certificates/8b1f420874759b0cc17662137fe1491a354d5b64d958601948aee8cb153c0925">HTML Training</a>
          </section>


      <!-- *************  EDUCATION & CERTIFICATIONS *********** -->
      <section class="education">
        <div class="content-wrap">
          <h2>Education</h2>

          <section>
            <h3>KAKATIYA JUINOUR COLLEGE - NIZAMABAD, TELANGANA</h3>
            <p>completed my intermediate Studies, 2021</p>
            <p>14 week full-time program covering HTML, CSS, SOME WORKSHOPS AND online PROJECTS.</p>
          </section>

          <section>
            <h3>CMR TECHNICAL CAMPUS- Hyderabad,India</h3>
            <p>Bachelor OF COMPUTER SCIENCE, 2021-2025</p>
          </section>

        
        </div>
      </section>

      <!-- ************  CONTACT INFO / SOCIAL MEDIA  ************ -->
      <footer>
        <div class="content-wrap">
          <h2>Let's Keep in Touch!</h2>

          <!-- Social media and contact links. Add or remove any networks. -->
          <ul class="contact-list">
            <li><a href="mailto:farhanahmed91548@gmail.com">email-Farhan AHMED</a></li>
            <li><a href="https://www.instagram.com/farhanahmed1729_1/" target="_blank">instagram</a></li>
            <li><a href="https://www.linkedin.com/in/farhan-ahmed-63324b242/" target="_blank">LinkedIn</a></li>
          </ul>
        </div>
        <p>I would love to listen your precious word!</p>
        <div class="container my-5">
        <form method="post">
      <div class="mb-3">
        
      <div class="container my-5">
        <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="enter your name" name="name" >
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="enter your email" name="email">
  </div>
  <div class="form-group">
    <label>Mobile</label>
    <input type="number" class="form-control" placeholder="enter your number" name="mobile">
  </div>
  <div class="form-group">
    <label>feedback</label>
    <input type="text" class="form-control" placeholder="enter your feedback" name="feedback">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
      </footer>
    </main>
  </body>
</html>
  

