
<?php 
@$active [$current] = 'class=current';
?>

<!-- Navigation starts here -->
<nav role="navigation" id="nav">
<section class="main-nav">
	<ul id="topnav">
  <li><a href="index.php" <?php if (isset($active[1])) echo $active[1];?>>गृहपृष्ठ</a></li>
  <li><a href="about.php" <?php if (isset($active[2])) echo $active[2];?>>हाम्रो बारे</a></li>
   <li><a href="interests.php" <?php if (isset($active[6])) echo $active[6];?>>ब्याजदरहरु</a></li>
  <li><a href="members.php" <?php if (isset($active[3])) echo $active[3];?>>समिति सदस्यहरु</a></li>
  <li><a href="info.php" <?php if (isset($active[4])) echo $active[4];?>>सूचना र खबर</a></li>
  <li><a href="contact.php" <?php if (isset($active[5])) echo $active[5];?>>सम्पर्क</a></li>
</ul>
</section>

</nav>
<!-- Navigation ends -->