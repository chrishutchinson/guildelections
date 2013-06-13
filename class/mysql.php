<?php
class MySQL extends Conn{

	function __construct()
	{
			$this->Conn = new Conn();

		foreach($_POST as $key => $val)
		{
			$_POST[$key] = stripslashes(strip_tags(htmlspecialchars($val, ENT_QUOTES)));
			$$key = stripslashes(strip_tags(htmlspecialchars($val, ENT_QUOTES)));
		}
		
		foreach($_GET as $key => $val)
		{
			$_GET[$key] = stripslashes(strip_tags(htmlspecialchars($val, ENT_QUOTES))); 
			$$key = stripslashes(strip_tags(htmlspecialchars($val, ENT_QUOTES)));
		}
			
			
		foreach($_COOKIE as $key => $val)
		{
			$_COOKIE[$key] = stripslashes(strip_tags(htmlspecialchars($val, ENT_QUOTES))); 
			$$key = stripslashes(strip_tags(htmlspecialchars($val, ENT_QUOTES)));
		}
	}

	function get_candidates($role)
	{
		$query = mysql_query("SELECT * FROM candidates WHERE position = '$role'") or die(mysql_error());
		return $query;
	}

	function get_all_sabb_candidates()
	{
		$query = mysql_query("SELECT * FROM candidates WHERE sabb = '1'") or die(mysql_error());
		return $query;
	}

	function doshortname()
	{
		$query = mysql_query("SELECT * FROM candidates") or die(mysql_error());
		while($result = @mysql_fetch_assoc($query))
		{
			$id = $result['id'];
			$name = $result['name'];
			$shortname = strtolower(str_replace(" ", "-", $name));
			$update = mysql_query("UPDATE candidates SET shortname = '$shortname' WHERE id = '$id'") or die(mysql_error());
		}
	}

	function get_candidate($shortname)
	{
		$query = mysql_query("SELECT * FROM candidates WHERE shortname = '$shortname'") or die(mysql_error());
		return $query;
	}

	function update_views($id)
	{
		$query = mysql_query("UPDATE candidates SET views = views+1 WHERE id ='$id'") or die(mysql_error());
	}

	function do_role($role)
	{
		$array = array(
			"president" => "President",
   			"vpad" => "Vice President (Activities &amp; Development)",
   			"vpdr" => "Vice President (Democracy &amp; Resources)",
   			"vpe" => "Vice President (Education)",
   			"vps" => "Vice President (Sport)",
   			"vphc" => "Vice President (Housing &amp; Community)",
   			"vpw" => "Vice President (Welfare)",
   			"arafo" => "Anti-Racism Anti-Fascism Officer",
   			"cao" => "Community Action Officer",
   			"dso" => "Disabled Students' Officer",
   			"eeo" => "Ethical &amp; Environmental Officer",
   			"emo" => "Ethnic Minority Students' Officer",
   			"hso" => "Home Students' Officer",
   			"iso" => "International Students' Officer",
   			"lgbtqso" => "Lesbian, Gay, Bisexual, Trans and Queer Students’ Officer",
   			"mptso" => "Mature and Part-Time Students’ Officer",
   			"wo" => "Women's Officer"
		);
		echo $array[$role];
	}

}
?>