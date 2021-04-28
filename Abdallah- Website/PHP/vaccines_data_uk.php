<html>
<head>
<div class="logoimg5">
<img src="/images/CVLOGO.png" alt="logo" style="width:300px;height:150px;">

</div>
<style>
.logoimg5 {
  position: absolute;
  top: 0;
  right: 5%;
  shadow: 2px 2px 4px #000000;
}


</style>


<div class ="titleNAV">

        <h1>National Vaccination</h1>

    </div>
    <style>
        .titleNAV {
            position: absolute;
            color: white;
            top: 0;
            right: 35%;
            font-size: 30px;
            text-shadow: 2px 2px 4px #000000;

        }




    </style>

    <link rel="stylesheet" href= "/css/StyleSheetus.css">
    <script src="/js/javascriptfile.js"></script>

    


    <style>
        .footer {
           position: fixed;
           left: 0;
           bottom: 0;
           width: 100%;
           background-color:teal;
           color: white;
           text-align: center;
        }
        </style>





</head>
<body>
<style>
body {
    background-image: url('/images/vaccineBCK.png');
}
</style>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="/PHP/Summary.php">Summary</a> <a href="CovidashHOME.php">
    <a href="/PHP/reg.php">Restriction & Rules</a> 
       <a href="/PHP/vaccines_data_uk.php">Vaccines</a> 
       <a href="/PHP/virus.php">Virus Overview</a>
       <a href="/PHP/chooseCITY.php">Select City</a>
       <div class="logoimg">
<img src="/images/CVLOGO.png" alt="logo" style="width:200px;height:100px;">

</div>
<style>
.logoimg {
position: absolute;
  top: 800;
  left: 10%;
}
</style>
   </div>
<div class ="openH">


<span onclick="openNav()"> <img src="/images/navSIDE.png" alt="sNAVpng" width="75" height="75"> </span>
</div>
   <div id="main">

   </div>


<!--####---- COVID CASES CONTAIENR & DATABASE PHP-->

   </div>
   <div class="HOME_container_PAGE2">
    <div class="block"> <h3> Number Of 1st Vaccine Dose Taken</h3> 
    <p> As of the 19/04/2021</p>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "vaccines_unitedkingdom_data");
    $sql = "SELECT * FROM  vaccines WHERE vaccines_date ='19/04/2021';";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
            echo "1ST VACCINATION TAKEN: ";
            echo $row["vaccines_first_dose"];
        }
    
    }
 
    ?>
    <div class="iconCASES">
    <p><a href="/GraphsPHP/nationalVaccinations/graphNATIONL_vaccDose1.php">
    <img src="/images/charticonPNG.png" alt="CHART" width="50" height="50">
    </a></p>
   </div>
   


</div>   
<!--Cases & Deaths, obtained frm database and displayed in the ####### holder-->
</div>
<div class="HOME_container_PAGE2">
 <div class="block"> <h3> Number Of 2nd Vaccine Dose Taken</h3> 
 <p> As of the 19/04/2021</p>
 <?php
    $conn = mysqli_connect("localhost", "root", "", "vaccines_unitedkingdom_data");
    $sql = "SELECT * FROM vaccines WHERE vaccines_date ='19/04/2021';";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
            echo "2ND VACCINATION TAKEN: ";
            echo $row["vaccines_second_dose"];
        }
    
    }
 
    ?>
    <div class="iconCASES">
    <p><a href="/GraphsPHP/nationalVaccinations/second_dose.php">
    <img src="/images/charticonPNG.png" alt="CHART" width="50" height="50">
    </a></p>
   </div>
    

    </div>
    <!-- <button class="btnGRAPH"> <img src="charticonPNG.png" alt="CHART" width="50" height="50">  <i class="GRAPH_CASE"></i></button>    </div> -->
    
</div>   
<!--
<div class="HOME_container_PAGE2">
 <div class="block"> <h3> PATIENTS IN HOSPITAL WITH COVID </h3> 
 <?php
  //  $conn = mysqli_connect("localhost", "root", "", "greatermanchester_covid_cases");
 //   $sql = "SELECT * FROM cases WHERE cases_date ='06/04/21';";
 //   $result = $conn->query($sql);
    
 //   if ($result->num_rows > 0) {
 //       while ($row = $result-> fetch_assoc()) {
  //          echo $row["cases_admitted"];
  //      }
    
 //   }
 
    ?>
    <p>########</p></div>
</div>   

  
-->

<div class= "MapWHOLE">



<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d75993.07573246791!2d-2.293502128959371!3d53.4723271517751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487a4d4c5226f5db%3A0xd9be143804fe6baa!2sManchester!5e0!3m2!1sen!2suk!4v1617721340973!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
-->



</body>

<footer>


    <div class="footer">
        <p> Covidash Coronavirus Dashboard</p>
        
      </div>

</footer>


</html>