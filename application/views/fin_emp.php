<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Constructive HTML Template</title>
	<!--

Template 2102 Constructive

http://www.tooplate.com/view/2102-constructive

-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400"> <!-- Google web font "Open Sans" -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/magnific-popup.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>slick/slick.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/slick-theme.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/tooplate-style.css">

	<script>
		var renderPage = true;

		if (navigator.userAgent.indexOf('MSIE') !== -1 ||
			navigator.appVersion.indexOf('Trident/') > 0) {
			/* Microsoft Internet Explorer detected in. */
			alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
			renderPage = false;
		}
	</script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<!-- Loader -->
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>

	<!-- Page Content -->
	<div class="container-fluid tm-main">
		<div class="row tm-main-row">

			<!-- Sidebar -->
			<div id="tmSideBar" class="col-xl-3 col-lg-4 col-md-12 col-sm-12 sidebar"
			style="background-image: url('data:image/jpeg;base64,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');">

			>

				<button id="tmMainNavToggle" class="menu-icon">&#9776;</button>

				<div class="inner">
					<nav id="tmMainNav" class="tm-main-nav">
						<ul>
							<li>
								<a href="#intro" id="tmNavLink1" class="scrolly active"  
								
								data-page="#tm-section-1">
								<i class="fa fa-address-book-o mx-3" style="font-size:36px"></i>

									<span>Welcome! <?php echo $name->name ?> </span>
								</a>
							</li>
							<li>
								<a href="#products" id="tmNavLink2" class="scrolly" data-bg-img="https://media.istockphoto.com/photos/young-woman-having-online-mental-health-session-picture-id1317943154?b=1&k=20&m=1317943154&s=170667a&w=0&h=okooIESMVACtUNHsv-PQ7uAdkBOMyONr4DdnKAZaNn8=" data-page="#tm-section-2" data-page-type="carousel">
								<i class='fas fa-file-alt mx-3' style='font-size:36px'></i>

									<span>File A Leave</span>
								</a>
							</li>
							<li>
								<a href="#company" class="scrolly" data-bg-img="" data-page="#tm-section-3">
								<i class='far fa-folder-open mx-3' style='font-size:36px'></i>

									<span>Leave History</span>
								</a>
							</li>
							<li>
								<a href="#contact" class="scrolly" data-bg-img="" data-page="#tm-section-4">
								<i class="fa fa-check-square mx-3" style="font-size:36px;"></i>

									<span>Approve Leaves</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>

			<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 tm-content"
			 style="background-image: url('data:image/jpeg;base64,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');">

				<!-- section 1 -->
				<section id="tm-section-1" class="tm-section">
					<div class="ml-auto">
						<header class="mb-4">
							<h1 class="tm-text-shadow">Welcome! <?php echo $name->name ?></h1>
						</header>
						<p class="mb-5 tm-font-big">Welcome To Leave Management System!!</p>
						<a href="#" class="btn tm-btn tm-font-big" data-nav-link="#tmNavLink2">Continue to file a leave...</a>
						<!-- data-nav-link holds the ID of nav item, which means this link should behave the same as that nav item  -->
					</div>
				</section>

				<!-- section 2 -->
				<section id="tm-section-2" class="tm-section tm-section-carousel">
					<form action="http://localhost/lms/index.php/login/file_leave" method="post">

						<div class="tm-bg-transparent-black tm-contact-box-pad">
							<div class="row mb-4">
								<div class="col-sm-12">
									<header>
										<h2 class="tm-text-shadow">File A Leave</h2>
									</header>
								</div>
							</div>
							<div class="row mb-4">
								<div class="col-sm-12">
									<table class="table table-dark">
										<th>Leaves Remain</th>
										<tr>
											<th>EL</th>
											<th>VL</th>
											<th>HPL</th>

											<th>CL</th>

										</tr>
										<td><?php echo $leave_info->el_bal ?></td>
										<td><?php echo $leave_info->vl_bal ?></td>
										<td><?php echo $leave_info->hpl_bal ?></td>
										<td><?php echo $leave_info->cl_bal ?></td>
									</table>
								</div>
							</div>

							<div class="row tm-page-4-content">
								<div class="col-md-6 col-sm-12 tm-contact-col">
									<div class="contact_message">
										<form action="#contact" method="post" class="contact-form">
											<div class="form-group">
												<input type="text" id="name" name="name" class="form-control" value="<?php echo $name->name ?>" required="">
											</div>
											<div class="form-group">
												<input type="text" id="emp_id" name="emp_id" class="form-control" value="<?php echo $name->emp_id ?>" required="">
											</div>
											
											<div class="form-group">
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<label class="input-group-text" for="inputGroupSelect01">Type of leave</label>
													</div>
													<select class="custom-select" name="leave_type" id="leave_type">
														<option value="EL">EL</option>
														<option value="VL">VL</option>
														<option value="HPL">HPL</option>
														<option value="CL">CL</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<input type="text" id="person_to_leave_duties" name="person_to_leave_duties" class="form-control" placeholder="person_to_leave_duties" >
											</div>
											<div class="form-group">
												<input type="date" id="From" name="From" class="form-control" placeholder="From" required="">
											</div>
											<div class="form-group">
												<input type="date" id="To" name="To" class="form-control" placeholder="To" required="">
											</div>
											<div class="form-group">
												<input type="text" id="approving_emp" name="approving_emp" class="form-control" placeholder="approving_emp" required="">
											</div>
											<button type="submit" class="btn tm-btn-submit tm-btn ml-auto">Submit</button>
										</form>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 tm-contact-col">
									<div class="tm-address-box">
										<p>Aliquam interdum, nisl sedd faucibus tempor, massa velit laoreet ipsum, et faucibus sapien magna at enim. Suspendisse a dictum tortor.</p>
										<p>Curabitur venenatis leo in augue convallis, vulputate sollicitudin ex maximus.</p>
										<address>
											120-240 Aliquam nec neque augue<br>
											Suspendisse tincidunt nunc,<br>
											vitae sagis justo 11000
										</address>
									</div>
								</div>
							</div>
						</div>
					</form>
				</section>

				<!-- section 3 -->
				<section id="tm-section-3" class="tm-section">
					<div class="row mb-4">
						<header class="col-xl-12">
							<h2 class="tm-text-shadow">Files Leaves</h2>
						</header>
					</div>
					<div class="row">

						<div class="panel">

							<div class="panel-body table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>Ref #</th>
											<th>submitted_to_empno</th>
											<th>status</th>
											<th>nature_of_leave</th>
											<th>leave_from</th>
											<th>leave_to</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($prev_leaves as $pl) : ?>
											<tr>
												<td><?php echo $pl->ref_id ?></td>
												<td><?php echo $pl->submitted_to_empno ?></td>
												<td><?php echo $pl->status ?></td>
												<td><?php echo $pl->nature_of_leave ?></td>
												<td><?php echo $pl->leave_from ?></td>
												<td>
													<?php echo $pl->leave_to ?>
												</td>
											</tr>
										<?php endforeach; ?>




									</tbody>
								</table>
							</div>
							<div class="panel-footer">
								<div class="row">
									<div class="col col-sm-6 col-xs-6">showing <b><?php echo count($prev_leaves) ?></b> entries</div>

								</div>
							</div>
						</div>

					</div>
				</section>

				<!-- section 4 -->
				<section id="tm-section-4" class="tm-section">

					<!-- <?php print_r($appr_leave_info) ?> -->
					<?php foreach ($appr_leave_info as $lf) : ?>
						<form action="http://localhost/lms/index.php/login/update_auth" method="post">

							<div class="tm-bg-transparent-black tm-contact-box my-3">
								<div class="row mb-4">
									<div class="col-sm-12">
										<header>
											<h2 class="tm-text-shadow">File A Leave</h2>
										</header>
									</div>
								</div>
								<div class="row mb-4">
									<div class="col-sm-12">
										<table class="table table-dark">
											<th>Leaves Remain</th>
											<tr>
												<th>EL</th>
												<th>VL</th>
												<th>HPL</th>

												<th>CL</th>

											</tr>
											<td><?php echo $leave_info->el_bal ?></td>
											<td><?php echo $leave_info->vl_bal ?></td>
											<td><?php echo $leave_info->hpl_bal ?></td>
											<td><?php echo $leave_info->cl_bal ?></td>
										</table>
									</div>
								</div>

								<div class="row tm-page-4-content">
									<div class="col-md-6 col-sm-12 tm-contact-col">
										<div class="contact_message">`
											<form action="#contact" method="post" class="contact-form">
												<div class="form-group">
													<label for="ref_no">Ref No</label>
													<input type="text" id="ref_no" name="ref_no" class="form-control" value="<?php echo $lf->ref_id ?>" required="">
												</div>


												<div class="form-group">
													<label for="emp_no">Sub By Emp No</label>
													<input type="text" id="emp_no" name="emp_no" class="form-control" value="<?php echo $lf->submitted_by_empno ?>" required="">
												</div>

												<div class="form-group">
													<label for="sup_no">Sub To Emp No</label>
													<input type="text" id="sup_no" name="sup_no" class="form-control" value="<?php echo $name->emp_id ?>" required="">
												</div>




												<div class="form-group">
													<label for="from">From</label>
													<input type="text" class="form-control" name="from" id="from" value="<?php echo $lf->leave_from  ?>"></input>


													


												</div>

												<div class="form-group">
														<label for="to">To</label>
														<input type="text" id="to" name="to" class="form-control" value="<?php echo $lf->leave_to ?>" required="">
												</div>

												<div class="form-group">
												<span class="badge bg-primary"><?php echo $lf->status ?></span>
												</div>

												<div class="form-group">
														<label for="action_sel">Select An Action</label>
														<select name="action_sel" id="action_sel">
  <option value="Approve">Approve</option>
  <option value="Forward">Forward</option>
  <option value="Back">Back</option>
  <option value="Reject">Reject</option>
</select>
												</div>
												
												

												<button type="submit" class="btn tm-btn-submit tm-btn ml-auto">Submit</button>
											</form>
										</div>
									</div>
									<div class="col-md-6 col-sm-12 tm-contact-col">
										<div class="tm-address-box">
											<p>Carefully check the details of the employee with the leave balances and leave amounts</p>
											
										</div>
									</div>
								</div>

							</div>
						</form>

					<?php endforeach; ?>


				</section>
			</div> <!-- .tm-content -->
			
		</div> <!-- row -->
	</div>
	<div id="preload-01"></div>
	<div id="preload-02"></div>
	<div id="preload-03"></div>
	<div id="preload-04"></div>

	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.backstretch.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>slick/slick.min.js"></script> <!-- Slick Carousel -->

	<script>
		var sidebarVisible = false;
		var currentPageID = "#tm-section-1";

		// Setup Carousel
		function setupCarousel() {

			// If current page isn't Carousel page, don't do anything.
			if ($('#tm-section-2').css('display') == "none") {} else { // If current page is Carousel page, set up the Carousel.

				var slider = $('.tm-img-slider');
				var windowWidth = $(window).width();

				if (slider.hasClass('slick-initialized')) {
					slider.slick('destroy');
				}

				if (windowWidth < 640) {
					slider.slick({
						dots: true,
						infinite: false,
						slidesToShow: 1,
						slidesToScroll: 1
					});
				} else if (windowWidth < 992) {
					slider.slick({
						dots: true,
						infinite: false,
						slidesToShow: 2,
						slidesToScroll: 1
					});
				} else {
					// Slick carousel
					slider.slick({
						dots: true,
						infinite: false,
						slidesToShow: 3,
						slidesToScroll: 2
					});
				}

				// Init Magnific Popup
				$('.tm-img-slider').magnificPopup({
					delegate: 'a', // child items selector, by clicking on it popup will open
					type: 'image',
					gallery: {
						enabled: true
					}
					// other options
				});
			}
		}

		// Setup Nav
		function setupNav() {
			// Add Event Listener to each Nav item
			$(".tm-main-nav a").click(function(e) {
				e.preventDefault();

				var currentNavItem = $(this);
				changePage(currentNavItem);

				setupCarousel();
				setupFooter();

				// Hide the nav on mobile
				$("#tmSideBar").removeClass("show");
			});
		}

		function changePage(currentNavItem) {
			// Update Nav items
			$(".tm-main-nav a").removeClass("active");
			currentNavItem.addClass("active");

			$(currentPageID).hide();

			// Show current page
			currentPageID = currentNavItem.data("page");
			$(currentPageID).fadeIn(1000);

			// Change background image
			var bgImg = currentNavItem.data("bgImg");
			$.backstretch("img/" + bgImg);
		}

		// Setup Nav Toggle Button
		function setupNavToggle() {

			$("#tmMainNavToggle").on("click", function() {
				$(".sidebar").toggleClass("show");
			});
		}

		// If there is enough room, stick the footer at the bottom of page content.
		// If not, place it after the page content
		function setupFooter() {

			var padding = 100;
			var footerPadding = 40;
			var mainContent = $("section" + currentPageID);
			var mainContentHeight = mainContent.outerHeight(true);
			var footer = $(".footer-link");
			var footerHeight = footer.outerHeight(true);
			var totalPageHeight = mainContentHeight + footerHeight + footerPadding + padding;
			var windowHeight = $(window).height();

			if (totalPageHeight > windowHeight) {
				$(".tm-content").css("margin-bottom", footerHeight + footerPadding + "px");
				footer.css("bottom", footerHeight + "px");
			} else {
				$(".tm-content").css("margin-bottom", "0");
				footer.css("bottom", "20px");
			}
		}

		// Everything is loaded including images.
		$(window).on("load", function() {

			// Render the page on modern browser only.
			if (renderPage) {
				// Remove loader
				$('body').addClass('loaded');

				// Page transition
				var allPages = $(".tm-section");

				// Handle click of "Continue", which changes to next page
				// The link contains data-nav-link attribute, which holds the nav item ID
				// Nav item ID is then used to access and trigger click on the corresponding nav item
				var linkToAnotherPage = $("a.tm-btn[data-nav-link]");

				if (linkToAnotherPage != null) {

					linkToAnotherPage.on("click", function() {
						var navItemToHighlight = linkToAnotherPage.data("navLink");
						$("a" + navItemToHighlight).click();
					});
				}

				// Hide all pages
				allPages.hide();

				$("#tm-section-1").fadeIn();

				// Set up background first page
				var bgImg = $("#tmNavLink1").data("bgImg");

				$.backstretch("img/" + bgImg, {
					fade: 500
				});

				// Setup Carousel, Nav, and Nav Toggle
				setupCarousel();
				setupNav();
				setupNavToggle();
				setupFooter();

				// Resize Carousel upon window resize
				$(window).resize(function() {
					setupCarousel();
					setupFooter();
				});
			}
		});
	</script>
</body>

</html>