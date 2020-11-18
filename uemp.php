<html>
<head>
<link rel="stylesheet" type="text/css" href="rec.css">
</head>
<body>
<h1 style="text-align:center"><div1>Update Employee</div1></h1>

<?php
$link=mysqli_connect("localhost","root","","admin");
mysqli_select_db($link,"admin");
$query="select * from tblempmst";
$data=mysqli_query($link,$query);
$total=mysqli_num_rows($data);

if($total!=0)
{
	?>
	<table border="2px">
		<tr>
			<th>Name</th>
			<th>ID no:</th>
			<th>Div Code</th>
			<th>Designation</th>
			<th>DOJ</th>
			<th>DOR</th>
			<th>Address</th>
			<th>Mobile Number</th>
			<th>Service Provider</th>
			<th>LandLine Provider</th>
			<th>LandLine Number</th>
			<th>Grade pay</th>
			<th>GP wef</th>
			<th>Account Number</th>
			<th>Update</th>
		</tr>
		
	<?php
	
	while($result=mysqli_fetch_assoc($data))
	{
	echo"<tr>
		    <td>".$result['Name']."</td>
			<td>".$result['ID']."</td>
			<td>".$result['DivCode']."</td>
			<td>".$result['Designation']."</td>
			<td>".$result['DOJ']."</td>
			<td>".$result['DOR']."</td>
			<td>".$result['Address']."</td>
			<td>".$result['MobNo']."</td>
			<td>".$result['Mobservprov']."</td>
			<td>".$result['LandlineProvider']."</td>
			<td>".$result['LandlineNumber']."</td>
			<td>".$result['GradePay']."</td>
			<td>".$result['GPwef']."</td>
			<td>".$result['AccNo']."</td>
			<td><a href='upemp.php?name=$result[Name]&id=$result[ID]&div=$result[DivCode]&desg=$result[Designation]&doj=$result[DOJ]&dor=$result[DOR]&addr=$result[Address]&mobno=$result[MobNo]&ms=$result[Mobservprov]&lprov=$result[LandlineProvider]&lnum=$result[LandlineNumber]&gp=$result[GradePay]&gpe=$result[GPwef]&accno=$result[AccNo]'>Edit</a></td>
		</tr>";
	}
		
}
else
{
	echo "no record found";
}

?>
</table>
</body>
</html>
