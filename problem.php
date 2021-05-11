<!DOCTYPE html>
<html lang="en">
<head>
  <title>sample</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
	function checkletter(){
		var letter = document.getElementById("letters").value;
		var capletter = letter.toUpperCase();
		if ((capletter == 'Z')||(capletter == 'X')||(capletter == 'Y')||(capletter == 'O')) {

		} else {
			alert("letter should be Z,X,Y or O");
		}

	}

	function checkNumber(){
		var number = document.getElementById("oddnumber").value;
		var letter = document.getElementById("letters").value;
		var capletter = letter.toUpperCase();
		if (((number % 2) == 1) && (number != 1)) {
			$.ajax({
	            type: "POST",
	            url: "back.php",
	            data: {"number": number,"letter":capletter},
	            success: function(data) {
	              $("#list").html(data);
	            }
	        });
		} else {
			alert("number is not an odd");
		}
	}
</script>
</head>
<body>
	<label>Input letter either Z,X,Y,O</label>
	<input type="text" name="letters" id="letters" onchange="checkletter()"><br><br>
	<label>Input an odd number</label>
	<input type="number" name="oddnumber" id="oddnumber" onchange="checkNumber()">
	<div id="list"></div>
</body>
</html>