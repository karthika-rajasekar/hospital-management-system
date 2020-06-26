<html>
<head>
<title>bill</title>
<style>
.np
{    position:relative;
	left:800%;
	float:left;
    font-size:14px !important;
}

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet"  type="text/css" href="bl.css">

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand " href="#"><b>Doctor Panel</b></a>
    </div>
<ul class="nav navbar-nav"> 

      <li class="nv"><a style="background-color:#BDC3C7" href="GenerateBill.php" >Prescription</a></li>
      <li class="nv"><a href="report.php">Appointments</a></li>
	  <li><a class="np" href="logout.php">Logout</a></li>

    </ul>
  </div>
</nav>
<!--h3>PRESCRIPTION</h3-->
<form name="product"  method="POST" action="cacc.php">
<div class="ll"> 
<br><br>
<table align="left">
<tr class="head"><td><b>PRESCRIPTION DETAILS</b></td></tr>
<tr><td><br>
Prescription No:<br>
<input class="w3-input" type="text" name="in_no" required /></td></tr>
<tr><td>
Prescription Date:<br>
<input class="w3-input" type="date" name="date"required /></td></tr>
<tr><td>
Patient ID :<br>
<input class="w3-input" type="text" name="in_id" required /></td></tr>
<tr><td>
Patient Name:<br>
<input class="w3-input" type="text" name="name"required /></td></tr>
<tr><td>
Medicine Names:<br>
<input class="w3-input" type="text" name="m1"required /></td></tr>
<tr><td>
<input class="w3-input" type="text" name="m2"required /></td></tr>
<tr><td>
<input class="w3-input" type="text" name="m3"required /></td></tr>
<tr><td>
<input class="w3-input" type="text" name="m4"required /></td></tr>
<tr><td>
<input class="w3-input" type="text" name="m5"required /></td></tr>
<tr><td>
<input class="w3-input" type="text" name="m6" /></td></tr>
<tr><td>
<input class="w3-input" type="text" name="m7"/></td></tr>
<tr><td>
<input class="w3-input" type="text" name="m8"required /></td></tr>
<tr><td>
<input class="w3-input" type="text" name="m9"required /></td></tr>
<tr><td>
<input class="w3-input" type="text" name="m10"required /></td></tr>
<tr><td>

</div>
<input type="submit"></input>
</form>
<SCRIPT language="javascript">
		function addRow(tableID) {

			var table = document.getElementById(tableID);

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			var cell1 = row.insertCell(0);
			var element1 = document.createElement("input");
			element1.type = "checkbox";
			element1.name="chkbox[]";
			cell1.appendChild(element1);

			var cell2 = row.insertCell(1);
			cell2.innerHTML = rowCount + 1;

			var cell3 = row.insertCell(2);
			var element2 = document.createElement("input");
			element2.type = "text";
			element2.name = "txtbox[]";
			cell3.appendChild(element2);


		}

		function deleteRow(tableID) {
			try {
			var table = document.getElementById(tableID);
			var rowCount = table.rows.length;

			for(var i=0; i<rowCount; i++) {
				var row = table.rows[i];
				var chkbox = row.cells[0].childNodes[0];
				if(null != chkbox && true == chkbox.checked) {
					table.deleteRow(i);
					rowCount--;
					i--;
				}


			}
			}catch(e) {
				alert(e);
			}
		}

	</SCRIPT>
</body>
</html>