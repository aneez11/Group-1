<?php include("header.html"); ?>
	<div class="container-fluid mt-4 row mb-4">
		<div class="col-3">
			<div class="white-paper pr-4 pl-1 pt-2">
				<ul class="sideBar"> 
					<li class="nav-item">
				        <a class="item-link" href="#" onclick="DropToogle('1')">
				          Refine Search
				        </a>
				        <div class="hiddenBlock" id="dropBox1">
				          	<form class="form-inline my-3 my-lg-0" style="width: 100%;">
						      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" style="width: 100%;">
						    </form>
				        </div>
					</li>
					<hr>
					<li class="nav-item">
				        <a class="item-link" href="#" onclick="DropToogle('2')">
				          Category
				        </a>
				        <div class="hiddenBlock" id="dropBox2">
				          	<form class="form-inline my-3 my-lg-0 w-100">
						      <input class="form-control mr-sm-2 w-100" type="text" placeholder="Search" aria-label="Search">
						      	<div class="checkbox">
									<label><input type="checkbox" value="">Option 1</label>
								</div>
								<div class="checkbox">
									  <label><input type="checkbox" value="">Option 2</label>
								</div>
								<div class="checkbox">
									  <label><input type="checkbox" value="">Option 3</label>
								</div>
						    </form>
				        </div>
					</li>
					<hr>

				</ul>
			</div>




		</div>
		<div class="col-9">
			<div class="white-paper p-3">
				<div class="container-fluid">
					<strong>"Most Popular"</strong> &nbsp;&nbsp; 460 results from 64 stores
					<hr>
					<div class="row">
						<div class="col-4 top-view">
							<img class="img-fluid w-25 h-100" src="development/images/logo.png">
								Apple iphone
						</div>
						
						<div class="col-4 top-view">
							<img class="img-fluid w-25 h-100" src="development/images/logo.png">
								Apple iphone
						</div>
						
						<div class="col-4 top-view">
							<img class="img-fluid w-25 h-100" src="development/images/logo.png">
								Apple iphone
						</div>
						
					</div>
				</div>
				<hr>

				<div class="container-fluid mt-2">
					<div class="row">
						<div class="col-4">
							<img class="w-100" src="development/images/A.jpg">
						</div>
						<div class="col-6 h-100  align-middle w-100">
							Apple Is Here!!
						</div>
						<div class="col-2 align-middle h-100 d-inline-block">
							<button class="btn btn-success">
								Go to Shop
							</button>
						</div>
						
					</div>
				</div>
				<div class="container-fluid mt-2">
					<div class="row">
						<div class="col-4">
							<img class="w-100" src="development/images/A.jpg">
						</div>
						<div class="col-6 h-100  align-middle w-100">
							Apple Is Here!!
						</div>
						<div class="col-2 align-middle h-100 d-inline-block">
							<button class="btn btn-success">
								Go to Shop
							</button>
						</div>
						
					</div>
				</div>
				<div class="container-fluid mt-2">
					<div class="row">
						<div class="col-4">
							<img class="w-100" src="development/images/A.jpg">
						</div>
						<div class="col-6 h-100  align-middle w-100">
							Apple Is Here!!
						</div>
						<div class="col-2 align-middle h-100 d-inline-block">
							<button class="btn btn-success">
								Go to Shop
							</button>
						</div>
						
					</div>
				</div>


			</div>
		</div>
		
	</div>

<?php include("footer.html"); ?>