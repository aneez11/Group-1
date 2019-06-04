<?php include("header.html"); ?>
	
	<div class="container-fluid row mb-4 mt-4">
		<div class="white-paper p-4 w-100 ml-4 mb-4">
			<strong>Contact Us</strong>
			<form class="w-25 pl-2" action="#">
				<div class="form-group">
					  <label for="sel1">Subject*</label>
					  <select class="form-control" id="subject" placeholder="Select Subject">
						    <option>Select Subject</option>
						    <option>2</option>
						    <option>3</option>
						    <option>4</option>
					  </select>
				</div>
			  	<div class="form-group">
				    <label for="name">Name*</label>
				    <input type="text" class="form-control" id="name">
			  	</div>
			  	<div class="form-group">
				    <label for="email">Email*</label>
				    <input type="email" class="form-control" id="email">
			  	</div>
			  	<div class="form-group">
				    <label for="email">Phone No.*</label>
				    <input type="text" class="form-control" id="phn">
			  	</div>
			  	<div class="form-group">
				    <label for="email">Body*</label>
				    <textarea type="text" class="form-control" id="info"></textarea>
			  	</div>
			  	<button type="submit" class="btn btn-success">Submit</button>
			</form>
				<br>
				<br>

			<p class="f-12">
				Please note that Pricena does not sell any products. <br>
				To follow up on your order or resolve any issues please contact the store you ordered from directly.<br><br>
				Email Support: info[at]pricena.com <br>
				Address: Pricena FZ LLC, Fujairah Creative City Freezone, Creative Tower, Fujairah, United Arab Emirates.
			</p>
		</div>
	</div>

<?php include("footer.html"); ?>
