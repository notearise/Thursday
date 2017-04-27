<hr />
<style>
.copyright {padding-bottom: 50px;}
</style>
<div class="copyright">For testing purposes only, people!</p>&copy; <?php
$copyYear = 2017; // Set your website start date
$curYear = date('Y'); // Keeps the second year updated
echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
?> Notearise, Inc. All rights reserved.</div>
</div>

<?php include_once("analyticstracking.php") ?>

  </body>
</html>
