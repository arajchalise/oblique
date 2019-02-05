
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="Scripts/validation.min.js"></script>
<script type="text/javascript" src="Scripts/ajax.js"></script>

<div class="container">
	<form method="post" id="currency-form"> 		
		
		<table>
			<tr>
				<td>From: </td>
			<td><select name="from_currency">
				<option value="NPR" selected="1">Nepalese Rupee</option>
				<option value="USD" >US Dollar</option>
				<option value="BDT">Bangladeshi Taka</option>
				<option value="EUR">Euro</option>
				<option value="PLN">Polish Zloty</option>
				<option value="CNY">Chinese Yuan</option>
				<option value="JPY">Japanese Yen</option>
			</select></td></tr>	
			
			<tr><td>Amount: </td><td>	
			<input type="text" placeholder="Currency" name="amount" id="amount" />	</td></tr>		
			<tr><td>To: </td><td>
			<select name="to_currency">
				<option value="NPR" >Nepalese Rupee</option>
				<option value="USD" selected="1">US Dollar</option>
				<option value="BDT">Bangladeshi Taka</option>
				<option value="EUR">Euro</option>
				<option value="PLN">Polish Zloty</option>
				<option value="CNY">Chinese Yuan</option>
				<option value="JPY">Japanese Yen</option>
			</select></td></tr>			
			<tr><td colspan="2"><button type="submit" name="convert" id="convert" class="btn btn-default">Convert</button>	</td>
				</table>
				
	</form>	
	
	<div class="form-group" id="converted_rate"></div>	
	<div id="converted_amount"></div>
				
		
</div>



