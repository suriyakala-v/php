<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus�">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Assignment-1</title>
  <link rel="stylesheet" href="css/main.css">
 </head>
 <body>
    <h1>PHP Assignment 1 - String Function</h1>
    <form method="POST">
	<br><br>
	INPUT:
	<input type="text" id="input" name="input" placeholder="Type here"></input>
	<br>
	<div class=buttons>
	<br>
	<input type="submit" id="button" value="string length" name="btn_strLength"></input>
	<input type="submit" id="button" value="string reverse" name="btn_strReverse"></input>
	<input type="submit" id="button" value="string uppercase" name="btn_strUppercase"></input>
	<input type="submit" id="button" value="string lowercase" name="btn_strLowercase"></input>
	<input type="submit" id="button" value="string replace" name="btn_strReplace"></input>
	</div>
	</form>

<?php
//13
if(empty($_POST['input'])){
		echo "Please Give input";
}else{
	 $user_ip=$_POST['input'];
	 if(isset($_POST['btn_strLength'])){
		 echo "<br> String Length: ".strlen( $user_ip);
	 }
	 if(isset($_POST['btn_strReverse'])){
		 echo "<br> String reverse: ".strrev( $user_ip);
	 }
	 if(isset($_POST['btn_strUppercase'])){
		 echo "<br> String Uppercase: ".strtoupper( $user_ip);
	 }
	 if(isset($_POST['btn_strLowercase'])){
		 echo "<br> String Lowercase: ".strtolower( $user_ip);
	 }
	 if(isset($_POST['btn_strReplace'])){
		 $user_ip=explode(",",$user_ip);
		 echo "<br> String Replace: ".str_replace($user_ip[1],$user_ip[2],$user_ip[0]);
	 } 
}

//1
$str="welcome to VINS family";
echo "<br><br>1. ORIGINAL STRING: ".$str;
$str=strtoupper($str);
echo " <br>a) To uppercase: ".$str;
$str=strtolower($str);
echo "<br>b) To lowercase: ".$str;
$str=ucfirst($str);
echo " <br>c) make a string's first character uppercase: ".$str;
$str=ucwords($str);
echo " <br>d) make a string's first character of all the words uppercase: ".$str;

//2
$num_str='082307';
echo "<br><br>2. ORIGINAL STRING: ".$num_str;
echo " <br> output: ".substr(chunk_split($num_str, 2, ':'),0,8);

//3
$sample_string ='The quick brown fox jumps over the lazy dog.';
$check="jumps";
echo "<br><br>3. ORIGINAL STRING: ".$sample_string;
echo "<br>".strpos($sample_string,$check);
echo " <br> Check whether the said string contains the string 'jumps'. ";
echo " <br> output: ";
if(empty(strpos($sample_string,$check))){
	echo "No";
}
else{ echo"yes";}


//4
echo "<br><br>4. ORIGINAL STRING: ".$str;
$new_str=substr($str,-3);
echo " <br> get the last three characters of a string";
echo " <br> output: ".$new_str;

//5
echo "<br><br>5. ORIGINAL STRING: ".$sample_string;
$new_str=preg_replace('/The/', 'That',$sample_string,1);
echo " <br> PHP script to replace the first 'the' of the following string with 'That'.";
echo " <br> output: ".$new_str;

//6
$sample_path ='http://www.w3resource.com/index.php';
echo "<br><br>6. ORIGINAL STRING: ".$sample_path;
echo " <br> PHP script to get the filename component of the following path";
$file = basename($sample_path, ".php"); 
echo " <br> output: ".$file;


//7
$Sample_string = 'rayy@example.com';
echo "<br><br>7. ORIGINAL STRING: ".$Sample_string;
echo " <br> PHP script to remove a part of a string from the beginning";
$part='rayy@';
if (substr($Sample_string,0, strlen($part)) == $part) {
	$Sample_string=substr($Sample_string,strlen($part));
}
echo " <br> output: ".$Sample_string;

//8
$Sample_string='The quick brown fox';
echo "<br><br>8. ORIGINAL STRING: ".$Sample_string;
echo " <br> Write a PHP script to get the first word of a sentence";
$arr1 = explode(' ',($Sample_string));
echo " <br> output: ". $arr1[0];

//9
$original_string= '000547023.24';
echo "<br><br>9. ORIGINAL STRING: ".$original_string;
echo " <br> PHP script to remove all leading zeroes from a string";
echo " <br> output: " .ltrim($original_string,'0');

//10
$Sample_Str ='\"\1+2/3*2:2-3/4*3';
echo "<br><br>10. ORIGINAL STRING: ".$Sample_Str;
echo " <br> PHP script to replace multiple characters from the following string";
echo " <br> output: ".str_replace(str_split('\\/:*?"<>|+-'), ' ', $Sample_Str);

//11
$Sample ='The quick brown fox jumps over the lazy dog';
echo "<br><br>11. ORIGINAL STRING: ".$Sample;
echo " <br> PHP script to select first 5 words from the following string.";
$Sample=explode(' ',$Sample);   //string to array
$Sample=array_slice($Sample,0,5); // 0-5 array elements
$Sample=implode(' ',$Sample);    // array to string
echo " <br> output: ".$Sample;

//12
$Sample_num ='2,543.12';
echo "<br><br>12. ORIGINAL STRING: ".$Sample_num;
echo " <br>  PHP script to remove comma(s) from the following numeric string";
echo " <br> output: ".str_replace(',','',$Sample_num );



//14
$string=" Enjoy the life !";
echo "<br><br>14. ORIGINAL STRING: ".$string;
echo " <br> Remove spaces at the beginning only".ltrim($string,' ');
echo " <br> Remove spaces at theend only".rtrim($string,' ');

?>

</body>
</html>
