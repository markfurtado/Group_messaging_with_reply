<?php
$con = mysql_connect('localhost','root','');
mysql_select_db('chatbox',$con);
$result1 = mysql_query("SELECT * FROM logs ORDER by id DESC");




echo "<fieldset class='field'><br>";
 echo "<table align='left'>";
/*
while($extract = mysql_fetch_array($result1)){
	
	
	
	
    if($extract['reply_msg'])
	{
		echo "<tr><td class='msg'>". $extract['id'] .": :</td><td class='uname'>". $extract['username'] ." : </td><td class='msg'>". $extract['msg'] ."</td></tr>";
		echo "<tr> <td></td> <td></td><td><span class='uname'>". $extract['reply_username'] ." : </span><span class='msg'>". $extract['reply_msg'] ."</span></td></tr>";
		
	}
	else
	{
	
        echo "<tr><td class='msg'>". $extract['id'] .": :</td><td class='uname'>". $extract['username'] ." : </td><td class='msg'>". $extract['msg'] ."</td></tr>";
	
	
	
		//echo "<span class='uname'>" . $extract['username'] . "</span>: <span class='msg'>" . $extract['msg'] . "</span><br>";
	}
}
*/





while($extract1 = mysql_fetch_array($result1))
	{
		echo "<tr><td class='msg'>". $extract1['id'] .": :</td><td class='uname'>". $extract1['username'] ." : </td><td class='msg'>". $extract1['msg'] ."</td></tr>";
		$result2 = mysql_query("SELECT * FROM reply ORDER by id DESC");
		while($extract2 = mysql_fetch_array($result2))
		{
			if($extract2['id']==$extract1['id'])
			{
				echo "<tr> <td></td> <td></td><td><span class='uname'>". $extract2['username'] ." : </span><span class='msg'>". $extract2['msg'] ."</span></td></tr>";
			}
		}
	}
	
	
	
	
	
  


echo "</table></fieldset>";

?>