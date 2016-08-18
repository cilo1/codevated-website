<?php
	class FunctionClass{
		
		function __construct(){
			mysql_connect("localhost","root","");
			mysql_select_db("codevated");
		}
		
		function getLanguages(){
			$sql = "SELECT * FROM languages";
			$q = mysql_query($sql)or die(mysql_error());
			
			while($row = mysql_fetch_array($q)){
				echo $row['lang_name'];
			}
		}
		
		
	}
?>