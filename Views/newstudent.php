<?php
    include("public/include/header.php");
?>


<link rel="stylesheet" type="text/css" href="css/newstudent.css">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        
          
        

<br/>
        <!-- about the colloge -->
<div class="content">
        <section class="sec1">
            <article class="art-head">
                <p>تسجيل طالب جديد</p>
            </article>
            <article class="art-body1">
            <section style="width:65%; text-align: justify;">
                <ol>
                   <form action="#.php">
  <div class="imgcontainer">
  <div class="container">
    <br/>
			<br/>
			<br/>
    <input class="form-control form-control-lg" type="text" placeholder="أدخل رقم الاستمارة...">
<br/>
    <button type="submit" class=" btn btn-success" style="margin:25px;margin-right:150px; margin-top:0;">متابعه</button>
                
                </ol>
             
                
            </section>
            
            </article>
			<br/>
			<br/>
			<br/>
            <article class="art-head">
                <p>القيادات</p>
            </article>
            <article class="art-body1">
            <?php
        include("public/include/leaders.php");
    ?>
            
            </article>


        </section>
        <?php
        include("public/include/sidebar.php");
?>
</div>
    
    <!-- about the colloge End -->
    <br/><br/><br/>
        

<?php
    include("public/include/footer.php");
?>