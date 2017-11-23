<!-- breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
		<ul>
			<li class="home"> <a title="Go to Home Page" href="<?=site_url()?>">Home</a><span>&mdash;›</span></li>
			<li class="category13"><strong>Contact Us</strong></li>
		</ul>
		</div>
	</div>
</div>
<!-- main-container -->
<div class="main-container col2-right-layout">
	<div class="main container">
		<div class="row">
			<section class="col-main col-sm-9 wow bounceInUp animated">
				<div class="page-title">
				<h2>Contact Us</h2>
				</div>
				<div class="static-contain">
				<fieldset class="group-select">
					<ul>
					<li id="billing-new-address-form" style="display:block;">
						<fieldset>
						<ul>
							<li>
								<div class="customer-name">
									<div class="input-box name-firstname">
										<label for="firstname"> First Name<span class="required">*</span></label>
										<br>
										<input type="text" id="firstname" name="firstname" title="First Name" class="input-text ">
									</div>
									<div class="input-box name-lastname">
										<label for="billing:lastname"> Email Address <span class="required">*</span> </label>
										<br>
										<input type="text" id="lastname" name="lastname" title="Last Name" class="input-text">
									</div>
								</div>
							</li>
							<li>
							<div class="input-box">
								<label for="company">Company</label>
								<br>
								<input type="text" id="company" name="company" title="Company" class="input-text">
							</div>
							<div class="input-box">
								<label for="email">Telephone <span class="required">*</span></label>
								<br>
								<input type="text" name="email" id="email" title="Email Address" class="input-text validate-email">
							</div>
							</li>
							<li>
								<label for="street1">Address <span class="required">*</span></label>
								<br>
								<textarea title="Street Address" name="street" id="street" class="input-text required-entry" rows="5"></textarea>
							</li>
							<li class="">
								<label for="comment">Comment<em class="required">*</em></label>
								<br>
								<div class="">
									<textarea name="comment" id="comment" title="Comment" class="required-entry input-text" rows="7"></textarea>
								</div>
							</li>
						</ul>
						</fieldset>
					</li>
					<li>
					<p class="require"><em class="required">* </em>Required Fields</p>
					<input type="text" name="hideit" id="hideit" value="">
					<div class="buttons-set">
						<button type="submit" title="Submit" class="button submit"> <span> Submit </span> </button>
					</div>
					</li>
					</ul>
				</fieldset>
				</div>
			</section>
			<aside class="col-right sidebar col-sm-3 wow bounceInUp animated">
				<div class="block block-company">
				<div class="block-title">Company </div>
				<div class="block-content">
					<ol id="recently-viewed-items">
					<li class="item odd"><a href="<?=site_url('aboutus')?>">About Us</a></li>
					<li class="item last"><strong>Contact Us</strong></li>
					</ol>
				</div>
				</div>
			</aside>
		</div>
	</div>
</div>
<!--End main-container --> 