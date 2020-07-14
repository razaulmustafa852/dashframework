<!DOCTYPE html>
<html>
<body><table style="width:100%">

<tr>

<th>intExpID</th>
<th>type</th>
<th>column</th>
<th>case</th>
<th>total_users</th>
<th>user_no</th>
<th>intSeg</th>
<th>intArr</th>
<th>intDel</th>
<th>intSta</th>
<th>intRep</th>
<th>intDelRate</th>



<th>intActRate</th>
<th>intByteSize</th>
<th>floatBuf</th>
<th>algorithm_used</th>

<th>seg_Dur</th>

<th>width</th>

<th>height</th>
<th>resolutions</th>


<th>play_Pos</th>
<th>RTT</th>






<th>Clae</th>

<th>Duanmu</th>
<th>Yin</th>
<th>Yu</th>
<th>P1203</th>







<th>rtt_qos</th>
<th>tp_qos</th>
<th>p_qos</th>


</tr>

<?php
include "config.php";
#SELECT * FROM `experiments` where column_name=2 and new_exp!=1 and intUsers=2 ORDER BY `intID` DESC 
#Missing Experiments Case:  60, 24,28,65, 37, 11 , 14 , 19,20,

## 5,136,33,35,48,64,  135,72,75,137,84,85,  2,18,32,41,134,54,   8,12,133,40,55,66,  3,17,36,42,47,49, 67,68,81,86,87,131 ,  95,96,98,99,100,130, 69,77,78,82,83,88,89,90,91,93,128,129, 114,122,121,120,119,116,118,117,115,123,124,126, 102,103,104,105,106,107,112,111,110,109,108,127, 21,22,30,34,50,63,1,13,38,39,51, 23,31,52, 10,16,29,45,62, 4,7,9,15

$i=1;
function showDups($array)
{
  $array_temp = array();

   foreach($array as $val)
   {
     if (!in_array($val, $array_temp))
     {
       $array_temp[] = $val;
     }
     else
     {
       echo 'duplicate = ' . $val . '<br />';
     }
   }
}




#$numbers = array(5,136,33,35,48,64,  135,72,75,137,84,85,  2,18,32,41,134,54,   8,12,133,40,55,66,  3,17,36,42,47,49, 67,68,81,86,87,131 ,  95,96,98,99,100,130, 69,77,78,82,83,88,89,90,91,93,128,129, 114,122,121,120,119,116,118,117,115,123,124,126, 102,103,104,105,106,107,112,111,110,109,108,127, 21,22,30,34,50,63,1,13,38,39,51, 23,31,52, 10,16,29,45,62, 4,7,9,15);

#$array = array(1,2,2,4,5);
#showDups($numbers);

#die();

$query = mysql_query("SELECT * from dashoutput  where intExpID IN (5,136,33,35,48,64,  135,72,75,137,84,85,  2,18,32,41,134,54,   8,12,133,40,55,66,  3,17,36,42,47,49, 67,68,81,86,87,131 ,  95,96,98,99,100,130, 69,77,78,82,83,88,89,90,91,93,128,129, 114,122,121,120,119,116,118,117,115,123,124,126, 102,103,104,105,106,107,112,111,110,109,108,127, 21,22,30,34,50,63,1,13,38,39,51, 23,31,52, 10,16,29,45,62, 4,7,9,15) order by intID, intSeg desc");
while($row = mysql_fetch_assoc($query)){
?>
<tr>
	
		<th><?php   echo $row['intExpID'];  ?></th>
		<th><?php   $type =  getColumn($row['intExpID'],'column_name');  ?><?php   if($type == 1 || $type == 2 || $type == 8 || $type == 10 ){ echo 'driving';}else {echo 'static';} ?></th>
		<th><?php   echo getColumn($row['intExpID'],'column_name');  ?></th>
		<th><?php   echo "case_".getColumn($row['intExpID'],'column_name');  ?></th>
		<th><?php   echo getColumn($row['intExpID'],'intUsers');  ?></th>
		<th><?php   echo $row['intUser'];  ?></th>
		<th><?php   echo $row['intSeg'];  ?></th>
		<th><?php   echo $row['intArr'];  ?></th>
		<th><?php   echo $row['intDel'];  ?></th>
		<th><?php   echo $row['intSta'];  ?></th>
		<th><?php   echo $row['intRep'];  ?></th>
		<th><?php   echo $row['intDelRate'];  ?></th>
		<th><?php   echo $row['intActRate'];  ?></th>
		<th><?php   echo $row['intByteSize'];  ?></th>
		<th><?php   echo $row['floatBuf'];  ?></th>
		<th><?php   echo $row['algorithm_used'];  ?></th>
		<th><?php   echo $row['Seg_Dur'];  ?></th>
		<th><?php   echo $row['Width'];  ?></th>
		<th><?php   echo $row['Height'];  ?></th>
		<th><?php  echo  $row['Width']."x".$row['Height'];  ?></th>
		<th><?php   echo $row['Play_Pos'];  ?></th>
		<th><?php   echo $row['RTT'];  ?></th>
		<th><?php   echo $row['Clae'];  ?></th>
		<th><?php   echo $row['Duanmu'];  ?></th>
		<th><?php   echo $row['Yin'];  ?></th>
		<th><?php   echo $row['Yu'];  ?></th>
		<th><?php   echo $row['P1203'];  ?></th>
		<th><?php   echo $row['rtt_qos'];  ?></th>
		<th><?php   echo $row['tp_qos'];  ?></th>
		<th><?php   echo $row['p_qos'];  ?></th>

</tr>


 <?php } ?>
</table>

</body>
</html>
