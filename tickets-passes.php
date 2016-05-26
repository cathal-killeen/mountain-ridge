<?php
	$pageTitle = 'Tickets & Passes';
	$backgroundImageSrc = 'media/chairlift.jpg';
	$backgroundImageAlt = 'Chairlift';

	include 'head.php';
?>

<div id="main-body">
	<div id="main-body-text">
		<h1>Tickets & Passes</h1>
		<br>
		<p>Book your tickets in advance and save!</p>
		<br>
		<p>Book your tickets for Mountain Ridge Resort in advance in order to recieve discounted prices. Tickets can be purchased online or by <a href="./contact.php">calling or emailing</a> us.</p>
		<br>
		<br>
		<table style="width:100%" border="0" cellpadding="0" cellspacing="0">
  			<tr class="passes-table-highlight">
    			<th>Pass Duration</th>
    			<th>Adult</th>
    			<th>Child(Under 18)</th>
    			<th>Over 60</th>
  			</tr>
  			<tr>
    			<td class="passes-table-highlight">1 Day</td>
    			<td>$32</td> 
    			<td>$18</td>
    			<td>$25</td>
  			</tr>
  			<tr>
    			<td class="passes-table-highlight">3 Day</td>
    			<td>$89</td> 
    			<td>$65</td>
    			<td>$70</td>
  			</tr>
  			<tr>
    			<td class="passes-table-highlight">5 Day</td>
    			<td>$125</td> 
    			<td>$99</td>
    			<td>$109</td>
  			</tr>
  			<tr>
    			<td class="passes-table-highlight">7 Day</td>
    			<td>$139</td> 
    			<td>$109</td>
    			<td>$119</td>
  			</tr>
  			<tr id="passes-table-gold">
    			<td>Season</td>
    			<td>$589</td> 
    			<td>$399</td>
    			<td>$450</td>
  			</tr>
		</table>
		<br>
		<br>
		<h1>Book Tickets</h1>
		<br>
		<form> 
			<input type="text" name="fname" id="fname" placeholder="First Name" class="text-input"><br>
			<input type="text" name="sname" id="sname" placeholder="Surname" class="text-input"><br>
			<input type="text" name="email" id="email" placeholder="Email Address" class="text-input"><br>
			<table>
				<tr>
					<td>Pass Duration: </td>
					<td>
						<select name="pass-dur" id="pass-dur">
						<option value="1">1 Day</option>
						<option value="3">3 Day</option>
						<option value="5">5 Day</option>
						<option value="7">7 Day</option>
						<option value="10">Season</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Adult Passes:</td>
					<td>
						<select name="adult-pass" id="adult-pass">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Child Passes:</td>
					<td>
						<select name="child-pass" id="child-pass">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Over 60 Passes:</td>
					<td>
						<select name="senior-pass" id="senior-pass">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select>
					</td>
				</tr>
			</table>
			<br>
			<button type="button" name="b1" id="b1" onclick="bookTickets(
							document.getElementById('fname').value,
							document.getElementById('sname').value,
							document.getElementById('email').value,
							document.getElementById('pass-dur'),
							document.getElementById('adult-pass'),
							document.getElementById('child-pass'),
							document.getElementById('senior-pass'))">Book Tickets</button>
		</form>
		<script type="text/javascript">
			function bookTickets(first_name, surname, email, dur, adult, child, senior){

    			var myWindow = window.open("", "mypopup", "width=300, height=300");
    			myWindow.document.write("<b>Booking Receipt</b><br>");
    			myWindow.document.write("Name: " + first_name + " " + surname + "<br>");
    			myWindow.document.write("Email: " + email + "<br>");
    			var passtype = dur.options[dur.selectedIndex].value;
    			if(passtype == 10){
    				myWindow.document.write("Pass Type: Season Pass<br>");
    			}else{
    				myWindow.document.write("Pass Type: " + passtype + " Day Pass<br>");
    			}

    			var numadult = adult.options[adult.selectedIndex].value;
    			myWindow.document.write("Adult Passes: " + numadult + "<br>");

    			var numchild = child.options[child.selectedIndex].value;
    			myWindow.document.write("Child Passes: " + numchild + "<br>");

    			var numsenior = senior.options[senior.selectedIndex].value;
    			myWindow.document.write("Senior Passes: " + numsenior + "<br>");

   			}
		</script>
	</div>
</div>
<?php
		include 'ticket-box.php';
		include 'foot.php';
?>