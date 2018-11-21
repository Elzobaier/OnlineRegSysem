<?php
include ("public/include/header.php");
?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3 text-right">إتصل بنا

        </h1>

        <ol class="breadcrumb text-right">
            <li class="breadcrumb-item">
                <a href="index.php">الرئيسية</a>
            </li>
            <li class="breadcrumb-item active">إتصل بنا</li>
        </ol>

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-lg-8 mb-4">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=ar&amp;ie=UTF8&amp;ll=18.7876037,32.8797798&amp;spn=18.6650008,32.8436788&amp;t=m&amp;z=4&amp;output=embed"></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-lg-4 mb-4 text-right">
                <h3 class="text-right">تفاصيل الاتصال</h3>
                <p class="text-right">
                    3481 Melrose Place
                    <br>السودان , نهر النيل , بربر , القدواب
                    <br>
                </p>
                <p class="text-right">
                    <abbr title="Phone">هاتف</abbr>: (123) 456-7890
                </p>
                <p>
                    <abbr title="Email">البريد الالكتروني</abbr>:
                    <a href="mailto:alzobaer@zerowap.ml">alzobaer@zerowap.ml
                    </a>
                </p>
                <p >
                    <abbr title="Hours">الساعات</abbr>: الاحد - الخميس: 7:30 AM to 2:30 PM
                </p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->


        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row text-right">
            <div class="col-lg-8 mb-4">
                <h3>راسلنا</h3>
                <form name="sentMessage" id="contactForm" novalidate method="post">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>الاسم الكامل :</label>
                            <input name="yourname" type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>رقم الهاتف :</label>
                            <input name="phone" type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>البريد الالكتروني :</label>
                            <input name="Email" type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>الرســاله :</label>
                            <textarea name="message" rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button name="submit" type="submit" class="btn btn-primary" >إرسال الرساله</button>
                </form>
                <?php
                if(isset($_POST['submit']))
                {
                    $name = $_POST['yourname'];
                    $Email = $_POST['Email'];
                    $phone = $_POST['phone'];
                    $message = $_POST['message'];
                    $AdminWebSite="alzobaer@zerowap.ml";

                    $headers="Reply-to:$Email";
                    mail($name,$Email,$message,$headers,"from:alzobaer15@gmil.com");
                }
                ?>
            </div>

        </div>
        <!-- /.row -->




</div>
        <!-- /.container -->
    <br/><br/><br/>

<?php
include ("public/include/footer.php");
?>