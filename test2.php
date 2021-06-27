<!DOCTYPE html>
<html>

<head>
  <title>Online Examination System</title>
  <link href="css/test.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="data/css/bootstrap.min.css">
  <script type="text/javascript" src="data/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="data/css/bootstrap.min.css">
  <script type="text/javascript" src="js/clear.js"></script>

  <script src="http://code.jquery.com/jquery-latest.js"></script>

  <script>
    $document.ready(fucntion(){
      $("#timing2").load("time.php");
      setInterval(function() {
        $("#timing2").load("time.php");
      },1000);
    });
    </script>
</head>

<body>
  <?php
  $con = mysqli_connect("localhost:3308","root","","subject");
  $id = $qno = $question = $opt1 = $opt2 = $opt3 = $opt4 = $ans = [];
  $count = 0;
  $sql2 = "select id, qno, question , opt1, opt2, opt3, opt4, ans from bio";
  $result = $con -> query($sql2);
  if($result-> num_rows > 0) {
    while($row = $result-> fetch_assoc()) { 
      $id[$count] = $row["id"];
      $qno[$count] = $row["qno"];
      $question[$count] = $row["question"];
      $opt1[$count] = $row["opt1"];
      $opt2[$count] = $row["opt2"];
      $opt3[$count] = $row["opt3"];
      $opt4[$count] = $row["opt4"];
      $ans[$count] = $row["ans"];
      $count++;
   } }
   $count = 0;
  ?>
  <div id="header">
    <h1 class="heading-name">
      Online Examination System
    </h1>
  </div>
  <!-- Login info and timing -->
  <div class="subject-info">
    <h1 class="subject">
      biology chapter 1
    </h1>
  </div>
  <div class="timing">
    <p class="ign"> Welcome : ( user name )</p>
  </div>
  <div id="timing2">
    <p class="time"> REMAINING TIME : <?php echo date('H:i:s') ?></p>
  </div>

  <!-- question paper start from here-->
  <div class="qno">
   <?php 
    if (!isset($_GET['page'])){
      $page = 1;
    } 
    else {
      $page = $_GET['page'];
    }
    echo '<p class="number" style="color : red; font-size: 20px; padding-top : 6px;">Queation Number : &nbsp'. $page; 
    echo '</p>';
    echo '<p class="neg">Correct marks: +2 Negative marks: -0.5</p>'; 
    ?>
  </div>
  <!-- THIS SECTION IS FOR PAGINATION -->
  <?php 
  $results_per_page = 1;
  $sql = "select * from bio";
  $result = mysqli_query($con,$sql);
  $number_of_results = mysqli_num_rows($result);
  $number_of_pages = ceil($number_of_results/$results_per_page);
  if (!isset($_GET['page'])){
      $page = 1;
  } else {
      $page = $_GET['page'];
  }
  $this_page_first_result = ($page-1)*$results_per_page;
  $sql2 = "SELECT * from bio LIMIT " . $this_page_first_result . ',' . $results_per_page;
  $result2 = mysqli_query($con, $sql2) or die("error at this line still");
  while($row = mysqli_fetch_array($result2)) {
      echo $row['question'] . ' <br> ';
      echo $row['opt1'] . ' <br> ';
      echo $row['opt2'] . ' <br> ';
      echo $row['opt3'] . ' <br> ';
      echo $row['opt4'] . ' <br> ';
  }
  for ($page=1;$page<=$number_of_pages;$page++){
      echo '<a href="test2.php?page=' .$page. '">' . $page . '</a?>';
  }
  ?>
  <!-- footer start from here-->
  <div class="card text-center">
    <div class="card-header">
    </div>
    <div class="card-body">
      <h5 class="card-title">Contact Info</h5>
      <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
      <a href="https://in.linkedin.com/in/dipak-bansode-213bbb152" class="btn-btn-primary">Contact Us</a>
      <a href="#" class="btn-btn-primary1">Whatsapp</a>
      <a href="https://www.youtube.com/channel/UCZj1CTt3azBgRiTIJTCInbw" class="btn-btn-primary2">Youtube</a>
      <a href="#" class="btn-btn-primary3">Admin</a>
    </div>
    <div class="card-footer text-muted">
      Made by Dipak Bansode @ 2021
    </div>
  </div>
</body>

</html>