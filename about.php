<?php include'header.php';?>
<style>
  video{
    
    margin-top: 10px;
    margin-right: 200px;
  }
  .header-overlay{
    height: 100vh;
    
    position: absolute;
    top:0;
    left:0;
    
    z-index: 1;
    opacity:0.85;

  }

  .header-content{
    position: absolute;
    top:  400px;
    z-index: 4;
    display: flex;
    justify-content: center;
  }

  .header-content h1{
    font-size:40px;
    font-style: italic;
    margin-bottom: 0;
  }

  .header-content p{
    font-size:15px;
    display: block;
    padding-bottom: 2rem;

  }

  .section{
    padding: 20px 0;
  }
  .section-a{
    background:  #333;
    color:#fff;padding-left: 20px;
    margin-left: 20px;
    margin-right: 100px;
  }
  .section-b{
    background: #333;
    color:#fff;padding-left: 20px;
    margin-right: 150px;
  }

  .btn{
    background: #34b3a0;
    color:#fff;
    font-size: 1.2rem 2rem;
    text-decoration: none;
  }
</style>
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="home.php">Home</a> / About Us</span>
    <h2>About Us</h2>
</div>
</div>
<!-- banner -->
     <header class="v-header container">
      <div class="fullscreen-video-wrap">
     <video src="images/video1.mp4" autoplay="true" loop="true" muted>
       
     </video>
   </div>
     <div class = "header-overlay"></div>
     <div class="header-content">
      <section class="section section-a">
      
      <h1>Company Overview</h1>
      <p>Serenidad Homes, the company has made its presence strongly felt in the Kenyan property market and can with certainty declare itself a market leader. The firm offers a wide scope of real estate services,  </p>
    <a href="#" class="btn">Read More</a>
  
    </section> </br></br>  
    <section class="section section-b">
      
      <h1>Business Background</h1>
      <p>Today, the company has made its presence strongly felt in the Kenyan property market and can with certainty declare itself a market leader. The firm offers a wide scope of real estate services, </p>
    <a href="#" class="btn">Read More</a>
  
    </section>         
     </div>
    
   </header>
   
<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script>
    $(document).ready(function(){
      var readMoreHtml = $(".section-a").html();
      var lessText = readMoreHtml.subtr(0,100);
      if(readMoreHtml.length > 100){
         $(".section-a").html(lessText).append("<a href='' class='read-more-li'>Show More</a>");
      } else {

        $(".section-a").html(readMoreHtml);

      }

      
    });
  </script>


<?php include'footer.php';?>