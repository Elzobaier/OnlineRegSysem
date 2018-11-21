<?php
    include("public/include/header.php");
?>
<fieldset>
	<legend>بيانات الطالب</legend>
<link rel="stylesheet" type="text/css" href="css/nextnewstudent.css">
<br>
<form action="#.php">
  
  <input type="text" id="fname" name="firstname" placeholder="الرقم الوطني">

  
  <input type="text" id="lname" name="nationality" placeholder="الجنسية">

  
  <select id="type" name="type">
    <option value="australia" disabled>النوع</option>
    <option value="canada">ذكر</option>
    <option value="usa">انثى</option>
  </select>

  <input type="submit" value="متابعه">
</form>
  </fieldset>
<br/>
        

<?php
    include("public/include/footer.php");
?>