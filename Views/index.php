<?php
include("public/include/header.php");
include("public/include/slider.php");
?>

<br/>
        <!-- محتويات الصفحة الرئيسية و أزرار التسجيل -->
<div class="content">
        <section class="sec1">
            <article class="art-head">
                <p>التسجيل</p>
            </article>
            <article class="art-body1">
                <section style="width:30%; float:left;">
                    <img src="img/260x215.jpg" style="" width="260" height="215"/>
                </section>
            <section style="width:65%; text-align: justify;">
                <ol>
                    <li color="blue" aline="justfy">التسجيل هو عبارة عن عملية تقييد الطالب في كل فصل دراسي، وتتم هذه العملية في بداية الفصل الدراسي، حسب اللوائح الأكاديمية للجامعة</li>
                    <li>تسجيل الفصل الدراسي الأول يتم بقواعد محددة ، أما تسجيل الفصول الدراسية التي تلي الفصل الأول فيتم وفق الوضع الأكاديمي للطالب في الكلية المعنية ويتم بعد سداد المصروفات الخاصة بالتسجيل وتعبئة الاستمارة الالكترونية المعدة لذلك.</li>
                    <li>يتم اعلان تاريخ التسجيل لكل فصل دراسي حسب التقويم الجامعي الصادر من أمانة الشؤون العلمية .</li>
                    <li>يكون التسجيل نظامياً أو إعادة</li>
                    <li>يقدم الطالب بنفسه بالتسجيل فى بداية كل فصل دراسى وعليه الالتزام بالجدول الدراسى المعلن</li>
                    <li>يجب على الطالب أن يكمل إجراءات تسجيله خلال الوقت المحدد للتسجيل</li>
                </ol>

                <a href="newstudent.php" style="color:#fff;"><button class=" btn btn-success" style="margin:25px;margin-right:50px; margin-top:0;">التسجيل لطالب جديد</button></a>
                <a href="#" style="color:#fff;"><button class=" btn btn-danger" style="margin:25px; margin-top:0;">التسجيل لطالب قديم</button></a>
            </section>

            </article>
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
    
    <!-- نهاية محتويات الصفحة الرئيسية و أزرار التسجيل -->
<br/>
        
   <?php
    include("public/include/footer.php");
?>
