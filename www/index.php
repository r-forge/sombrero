
<!-- This is the project specific website template -->
<!-- It can be changed as liked or replaced by other content -->

<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);
$themeroot='r-forge.r-project.org/themes/rforge/';

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $group_name; ?></title>
	<link href="http://<?php echo $themeroot; ?>styles/estilo1.css" rel="stylesheet" type="text/css" />
  </head>

<body>

<!-- R-Forge Logo -->
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td>
<a href="http://r-forge.r-project.org/"><img src="http://<?php echo $themeroot; ?>/imagesrf/logo.png" border="0" alt="R-Forge Logo" /> </a> </td> </tr>
</table>


<!-- get project title  -->
<!-- own website starts here, the following may be changed as you like -->

<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td>
<a href=""><img src="http://tuxette.nathalievilla.org/wp-content/uploads/2013/06/sombrero.png" border="0" alt="SOMbrero" width="250" /> </a></td>
<td>
<?php if ($handle=fopen('http://'.$domain.'/export/projtitl.php?group_name='.$group_name,'r')){
$contents = '';
while (!feof($handle)) {
	$contents .= fread($handle, 8192);
}
fclose($handle);
echo $contents; } ?>
</td></tr></table>

<!-- end of project description -->

<ul>
<li>You can find the <strong>project summary page</strong> <a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name; ?>/">here</a>. </li>
<li>You can find the <strong>project webpage</strong> with various documents <a href="http://tuxette.nathalievilla.org/?p=1099&lang=en">here</a>.</li>
<li><strong>Package's vignettes</strong> (detailed use cases) are also available for <a href="./doc-numericSOM.html">numeric data</a>,
for <a href="./doc-korrespSOM.html">contingency tables</a> and for <a href="./doc-relationalSOM.html">dissimilarity data</a>.
An overview of the package is given in the <a href="./doc-SOMbrero-package.html">package's main vignette</a>.</li>
<li>You can find the <strong>download page</strong> <a href="https://r-forge.r-project.org/R/?group_id=1707">here</a>. Installation is done by using the R install command:
<pre>
install.packages("SOMbrero", repos="http://R-Forge.R-project.org")
</pre>
or, alternatively, 
<pre>
install.packages("SOMbrero", repos="http://R-Forge.R-project.org", type="source")
</pre>
if you are using a Mac.<br>
<div style="background-color: pink; border:solid"><strong>Important warning</strong><br>
Direct installation from R-Forge is temporarily unavailable. Alternatively, you can download one of the two following files and directly install the package:
<ul><li><a href="http://tuxette.nathalievilla.org/wp-content/uploads/2013/07/SOMbrero_0.4.tar.gz"><em>Source package</em></a>;</li>
<li><a href="http://tuxette.nathalievilla.org/wp-content/uploads/2013/07/SOMbrero_0.4.zip"><em>Windows package</em></a>.</li></ul>
<br>
</div></li>
</ul>

<p style="color:#A558B4"><em>Remember that this package has been developped only by girls. Default colors may not be suited for men.</em></p>

</body>
</html>
