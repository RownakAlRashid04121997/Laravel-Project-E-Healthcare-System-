<html>
<h1> Doctor Review Page</h1>

<body>

<style>
body {
  background-color: green;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
h1 {
  font-size: 50px;
}
</style>



<form action='/submitPatientDoctorReview' method="POST">
<table>
		
		<tr>
			<td>Doctor name</td>
			<td><input type="text" name="name"></td>
		</tr>

		<tr>
			<td>Review doctor</td>
			<td><input type="text" name="message"></td>
		</tr>

        <tr>
			<td></td>
			<td><input type="submit"   value="submit"></td>
		</tr>



	</table>

	</form> 
</body>
</html>