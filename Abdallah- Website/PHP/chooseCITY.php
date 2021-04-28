<html>
<head>
   <div class="logoimg5">
<img src="/images/logoTeal.png" alt="logo" style="width:300px;height:150px;">

</div>
<style>
.logoimg5 {
  position: absolute;
  top: 0;
  right: 5%;
}


</style>
    <link rel="stylesheet" href= "/css/StyleSheetus.css">
    <script src="/js/javascriptfile.js"></script>

    <div class ="titleH">

        <h1>COVIDASH CORONAVIRUS DASHBOARD</h1>
        <style>
        .titleH {
         position: absolute;
            color: teal;
            top: 0;
            right: 34%;

        }


        </style>

    </div>

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
    background-color: white;
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


<span onclick="openNav()"> <img src="/images/navTeal.png" alt="tNAVpng" width="60" height="50"> </span>
</div>
   <div id="main">

   </div>


<!--####---- COVID CASES CONTAIENR & DATABASE PHP-->

   </div>

   
   <div class="HOME_container_PAGE5">
    <div class="block"> <h3> SELECT CITY</h3> 
  
  <div class="dropdown-content">
    <a href="/PHP/dataconnect.php">MANCHESTER</a>
    <a href="/PHP/birminghamCOVID.php">BIRMINGHAM</a>
    <a href="/PHP/LondonCovid.php">LONDON</a>
    <a href="/PHP/liverpoolCOVID.php">LIVERPOOL</a>
    


  </div>
</div>
    




    <!--<div class="iconCASES">
    <p><a href="graph2.php">
    <img src="charticonPNG.png" alt="CHART" width="50" height="50">
    </a></p>
   </div>
   <div class="iconBAR">
   <img src="greenBAR.png"    alt="CHART" width="300" height="50">
   <div class ="greenBAR_text">
   
   </div> -->


</div>   
<!--Cases & Deaths, obtained frm database and displayed in the ####### holder-->
</div>

<!--
<div class="HOME_container_PAGE2">
 <div class="block"> <h3> DEATHS TODAY </h3> 
 
    <div class="iconCASES">
    <p><a href="manchesterCASES_GRAPH.php">
    <img src="charticonPNG.png" alt="CHART" width="50" height="50">
    </a></p>
   </div>
    

    </div>
    <!-- <button class="btnGRAPH"> <img src="charticonPNG.png" alt="CHART" width="50" height="50">  <i class="GRAPH_CASE"></i></button>    </div> -->
 <!--   
</div>   

<div class="HOME_container_PAGE2">
 <div class="block"> <h3> PATIENTS IN HOSPITAL WITH COVID </h3> 
 <
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