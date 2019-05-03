<?php
	if (isset($_POST['submit'])){
		include("db.php");
		$res= mysql_query("SELECT * FROM TT");
		$noofsessions=0;
		while($a = mysql_fetch_array($res)){
			$fnvalue=$a['fnvalue'];
			$anvalue=$a['anvalue'];
			$noofsessions+=$fnvalue + $anvalue;
		}
		$rn=$_POST["rast"];
		$rm=$_POST["rasc"];
		$rl=$_POST["rp"];
		$str=$_POST["adding"];
		echo $str;
		if($str!="00000"){
		$ak=explode(",",$str);
		
		foreach($ak as $v){		
			$coufn=mysql_query("SELECT * FROM grietfaculty WHERE ID='$v'");
			$i = mysql_fetch_assoc($coufn);
			mysql_query("INSERT INTO `grietfaculty`.`facultylist1` (`sno`, `name`, `id`, `deid`, `designation`, `branchcode`, `countfn`, `countan`) VALUES (NULL,'$i[name]','$i[id]','$i[deid]','$i[designation]','$i[branchcode]','0','0')");
			echo "INSERT INTO `grietfaculty`.`facultylist1` (`sno`, `name`, `id`, `deid`, `designation`, `branchcode`, `countfn`, `countan`) VALUES (NULL,'$i[name]','$i[id]','$i[deid]','$i[designation]''$i[branchcode]','0','0')"."<br>";
		}
		}
		
		$str=$_POST["remove"];
		echo $str;
		if($str!="00000"){
		$ak=explode(",",$str);
		foreach($ak as $v){		
			$coufn=mysql_query("SELECT * FROM grietfaculty WHERE ID='$v'");
			$i = mysql_fetch_assoc($coufn);
			mysql_query("DELETE FROM `facultylist1` WHERE id='$i[id]'");
			echo "DELETE FROM `facultylist1` WHERE id='$i[id]'"."<br>";
			}
		}
		
		$result= mysql_query("SELECT * FROM facultylist1 where designation='Asst.Professor'");
		$result1=mysql_query("SELECT * FROM facultylist1 where designation='Associate Professor'");
		$result2=mysql_query("SELECT * FROM facultylist1 where designation='Professor'");
		$resultpro = mysql_query("SELECT * from facultylist1 where designation='Professor'");
		$pno = mysql_num_rows($resultpro);
		$resultasoc = mysql_query("SELECT * from facultylist1 where designation='Associate Professor'");
		$ascno = mysql_num_rows($resultasoc);echo $pno."<br>";
		$resultasst = mysql_query("SELECT * from facultylist1 where designation='Asst.Professor'");
		$astno = mysql_num_rows($resultasst);
		$n=$rn;$m=$rm;$l=$rl;
		$countast=$countasc=$countp=1;$sum=0;
		echo $sum."sum".$noofsessions."nod";
		while($sum < $noofsessions){
			if($n>0){   
				if($countast>$astno){
					$countast=1;
					$result= mysql_query("SELECT * FROM facultylist1 where designation='Asst.Professor'");
				}
				if($allast = mysql_fetch_array($result)){
					if(($countast<=$astno) && ($sum < $noofsessions)){		
						echo "<br>".$allast['id'].$allast['designation']."<br>";
						mysql_query("INSERT INTO ASSIGN(id, name,designation,dayno,date, fnoran,branchcode ) VALUES ('$allast[id]','$allast[name]','$allast[designation]', '0','0000-00-00','0','$allast[branchcode]')");
						echo "INSERT INTO ASSIGN(id, name,designation,dayno,date, fnoran,branchcode ) VALUES ('$allast[id]','$allast[name]','$allast[designation]', '0','0000-00-00','0','$allast[branchcode]')";
						echo $allast['id'];
						$countast++;
						$sum++;
						
					}	
				}
				$n--;
			}
			//echo $sum;
			if($m>0){
				if($countasc>$ascno){
					$countasc=1;
					$result1= mysql_query("SELECT * FROM facultylist1 where designation='Associate Professor'");
				}
				if($allasc = mysql_fetch_array($result1)){
					if(($countasc<=$ascno) && ($sum < $noofsessions)){
						echo "<br>".$allasc['id'].$allasc['designation']."<br>";
						
						mysql_query("INSERT INTO `grietfaculty`.`assign` (`sno`, `id`, `name`, `designation`, `branchcode`, `dayno`, `date`, `fnoran`) VALUES (NULL, '$allasc[id]', '$allasc[name]', '$allasc[designation]', '$allasc[branchcode]', '0', '0000-00-00',NULL)");
						echo "INSERT INTO `grietfaculty`.`assign` (`sno`, `id`, `name`, `designation`, `branchcode`, `dayno`, `date`, `fnoran`) VALUES (NULL, '$allasc[id]', '$allasc[name]', '$allasc[designation]', '$allasc[branchcode]', '0', '0000-00-00',NULL)";
						echo $allasc['id'];
						$countasc++;
						$sum++;
						
					}		
				}
				$m--;
			}
			//echo $sum;
			if($l>0){	
				if($countp>$pno){		
					$countp=1;
					$result2= mysql_query("SELECT * FROM facultylist1 where designation='Professor'");
				}
				if($allp = mysql_fetch_array($result2)){
					if(($countp<=$pno)&&($sum < $noofsessions)){
						mysql_query("INSERT INTO `grietfaculty`.`assign` (`sno`, `id`, `name`, `designation`, `branchcode`, `dayno`, `date`, `fnoran`) VALUES (NULL, '$allp[id]', '$allp[name]', '$allp[designation]', '$allp[branchcode]', '0', '0000-00-00',NULL)");
						//mysql_query("INSERT INTO ASSIGN(id, name,designation,dayno,date, fnoran,,branchcode ) VALUES ('$allp[id]','$allp[name]','$allp[designation]', '0','0000-00-00','0','$allp[branchcode]')");
						//mysql_query("INSERT INTO ASSIGN(id,dept,desg,dayno,date ,fnoran ) VALUES ('$allp[id]','$allasc[dept]','0',0 ,0000-00-00,0)");
						echo "INSERT INTO ASSIGN(id, name,designation,dayno,date, fnoran,,branchcode ) VALUES ('$allp[id]','$allp[name]','$allp[designation]', '0','0000-00-00','0','$allast[branchcode]')";
						echo "<br>".$allp['id'].$allp['designation']."<br>";		
						$countp++;
						$sum++;
						
					}
				}
				$l--;
			}
			//echo $sum;
			if(($l==0)&&($m==0)&&($n==0)&&($sum!=$noofsessions)){
				$l=$rl;
				$m=$rm;
				$n=$rn;
			}
		}
		//echo $sum;	
	}
	echo $sum."fty";
	$result= mysql_query("SELECT * FROM TT");
	$n=1;$d=1;
	while($all = mysql_fetch_array($result)){
	    $date=$all['date'];
		$an=$all['anvalue'];
		$fn=$all['fnvalue'];	
		for($i=1;$i<=$fn;$i++){
			mysql_query("UPDATE ASSIGN SET dayno='$d',fnoran='fn' WHERE sno='$n'");
			mysql_query("UPDATE ASSIGN SET date='$date' WHERE dayno='$d' ");
			$idat=mysql_query("SELECT id FROM ASSIGN WHERE sno='$n'");
			$id = mysql_fetch_assoc($idat);
			$coufn=mysql_query("SELECT * FROM facultylist1 WHERE id='$id[id]'");
			echo "SELECT * FROM facultylist1 WHERE id=$id[id]";
			$countfn = mysql_fetch_assoc($coufn);
			$c = $countfn['countfn'];
			mysql_query("UPDATE facultylist1 SET COUNTFN=($c+1) WHERE id=$id[id]");
			mysql_query("UPDATE ASSIGN SET designation='$countfn[designation]' WHERE id=$id[id]");
			echo "UPDATE ASSIGN SET designation=$countfn[designation] WHERE id=$id[id]"."<br>";
			//echo $countan['desg'];//echo "UPDATE facultylist1 SET COUNTFN=($c+1) WHERE id='$id[id]'<br>";
			$n++;
		}
		for($i=1;$i<=$an;$i++){
			mysql_query("UPDATE ASSIGN SET dayno='$d',fnoran='an' WHERE sno='$n'");
			mysql_query("UPDATE ASSIGN SET date='$date' WHERE dayno='$d' ");
			$idat=mysql_query("SELECT id FROM ASSIGN WHERE sno='$n'");
			$id = mysql_fetch_assoc($idat);
			$couan=mysql_query("SELECT * FROM facultylist1 WHERE id='$id[id]'");
			$countan= mysql_fetch_assoc($couan);
			$ca = $countan['countan'];
			mysql_query("UPDATE facultylist1 SET COUNTAN=($ca +1) WHERE id=$id[id]");
			//mysql_query("UPDATE ASSIGN SET desg='$des' WHERE id=$id[id]");
       		echo "UPDATE ASSIGN SET designation=$countan[designation] WHERE id=$id[id]"."<br>";
			mysql_query("UPDATE ASSIGN SET designation='$countan[designation]' WHERE id=$id[id]");
			//echo $countan['desg'];
			$n++;
		}
		$d++;
	}
	
	header("Location: final_report.php");

?>
	