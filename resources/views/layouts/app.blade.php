<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>JBJapp</title>
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>


<nav class="navbar navbar-expand-lg navbar-light py-4 ml-5 mr-5" 				style="background-color: #ffffff;">
  <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img class="img-fluid" src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="48px" height="48px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav_lc" aria-controls="nav_lc" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="nav_lc">
        <ul class="navbar-nav my-3 my-lg-0 ms-lg-3 me-auto">
          <li class="nav-item me-4"><a class="nav-link" href="">Home</a></li>
          <li class="nav-item me-4"><a class="nav-link" href="#">About us</a></li>
          <li class="nav-item me-4"><a class="nav-link" href="#">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact us</a></li>
        </ul>
	</div>
			
    <div class="align-right">
          <a class="btn btn-primary" href="{{ route('login')}}" role="button">Login</a>
          <a class="btn btn-primary" href="{{ route('register')}}" role="button">Signup</a>
    </div>
      
    
</nav>

<!---hero---->

<div class="container">
	<div class="row align-items-center">
		<div class="col-12 col-md-6 col-xl-7 mb-lg-0 py-5 py-md-6">
			<div class="lc-block mb-3 mb-md-5 lh-1">
				<div editable="rich">
					<h1 class="rfs-30 text-primary">Welcome to JBJapp.</h1>
				</div>
			</div><!-- /lc-block -->
			<div class="lc-block">
				<a class="btn btn-lg btn-dark" href="#" role="button">More Info</a>
			</div><!-- /lc-block -->
		</div><!-- /col -->
		<div class="col-12 col-md-6 col-xl-5">
			<div class="lc-block px-md-4 px-lg-5 lh-lg">
				<div editable="rich">
					<p class="rfs-7"> Here you will discover more than just a candidate. Browse the links and pages to discover more about my learning journey, my courses, resume and current projects.</p>
				</div>
			</div><!-- /lc-block -->
		</div><!-- /col -->
	</div>
	<div class="row">
		<div class="col-md-12 g-0">
			<div class="lc-block">
				<a href="https://images.unsplash.com/photo-1489058535093-8f530d789c3b?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8Mzl8fGFyY2hpdGVjdHVyZXxlbnwwfDB8fHwxNjM0MzgwMDgz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1620&amp;h=1152">
					<img class="img-fluid w-100" src="https://images.unsplash.com/photo-1489058535093-8f530d789c3b?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8Mzl8fGFyY2hpdGVjdHVyZXxlbnwwfDB8fHwxNjM0MzgwMDgz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1620&amp;h=1152" alt="Photo by Sandro Katalina" style="object-fit:cover;
max-height:35vh">
				</a>
			</div><!-- /lc-block -->
		</div><!-- /col -->
	</div>
	<div class="row mt-3">
		<div class="col-md-12 d-flex justify-content-center align-items-baseline">
			<div class="lc-block py-4 me-3">
				<div editable="rich">
					<h4 class="fw-bolder">2016</h4>
				</div>
			</div><!-- /lc-block -->
			<div class="lc-block py-4">

				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="2em" height="2em" viewBox="0 0 24 24" style="" lc-helper="svg-icon" fill="currentColor">
					<path d="M23,12L19,16V13H6.83C6.42,14.17 5.31,15 4,15A3,3 0 0,1 1,12A3,3 0 0,1 4,9C5.31,9 6.42,9.83 6.83,11H19V8L23,12Z"></path>
				</svg>

			</div><!-- /lc-block -->
			<div class="lc-block py-4 ms-3">
				<div editable="rich">
					<h4 class="fw-bolder"> 2021</h4>
				</div>
			</div><!-- /lc-block -->
		</div><!-- /col -->
	</div>
</div>
<!---end-of-hero--->
<!---content---->

<div class="container py-5">
	<div class="row">
		<div class="col-md-4 align-self-center">
			<div class="lc-block border-top py-4" style="letter-spacing:10px">
				<div editable="rich">
					<h2><strong>OUR STORY</strong></h2>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="lc-block">
				<div editable="rich">

					<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin faucibus porttitor dui, in vestibulum metus pulvinar sit amet. Phasellus finibus fermentum eros quis maximus. Aenean feugiat elit id quam ornare, in iaculis nunc tincidunt. Nullam pellentesque ante sit amet ipsum pulvinar, ac accumsan metus pulvinar.&nbsp;</strong></p>


				</div>
			</div>
			<div class="lc-block">
				<div editable="rich">

					<p>Mauris sollicitudin, ante quis suscipit molestie, est tellus semper nunc, quis porttitor tellus tortor et orci. Quisque egestas gravida eros et tristique. Praesent arcu turpis, rhoncus at nunc ut, ornare ultrices purus. Nullam fermentum eros eget sapien dignissim eleifend. Maecenas sodales, neque vestibulum aliquam varius, elit turpis tincidunt enim, eu pellentesque leo ante sit amet lectus.</p>


				</div>
			</div>
			<div class="lc-block">
				<div editable="rich">

					<p><em>Pellentesque eu dolor in enim efficitur dapibus id quis nisi. Quisque interdum bibendum vulputate. Nunc dui lacus, ultrices id gravida tempor, sollicitudin dapibus nisl. Vivamus dictum quam in purus commodo molestie. Mauris ultricies tortor urna. Praesent non aliquet lectus. Sed eget massa mauris. Vestibulum euismod cursus tortor, et aliquet orci facilisis eu. Cras ultricies luctus dolor quis laoreet. Suspendisse nisi massa, feugiat in dignissim sed, fermentum sed nibh.</em></p>


				</div>
			</div>
		</div>
	</div>
</div>
<!----end-of-content--->
<!---content-secondary--->

<div class="container py-4">
	<div class="row mb-5">
		<div class="col-md-6 align-self-center">
			<div class="lc-block">
				<img class="img-fluid mx-auto d-block" src="https://cdn.livecanvas.com/media/svg/undraw/analytics.svg" style="height:30vh">
			</div><!-- /lc-block -->
		</div><!-- /col -->
		<div class="col-md-6">
			<div class="lc-block">
				<div editable="rich">

					<h2>The quick brown fox jumps over the lazy dog</h2>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a lacus est. Etiam diam metus, lobortis non augue at, placerat viverra risus. Cras ornare faucibus laoreet.&nbsp;</p>
					<p>Aenean vel nisi in ipsum congue fermentum et ut arcu. Proin leo diam,
						vulputate eu tellus ac, mattis cursus nunc. In aliquet erat ac eros congue maximus.&nbsp;</p>
					<p><br></p>
				</div>
			</div><!-- /lc-block -->
		</div><!-- /col -->
	</div>
	<div class="row mt-4">
		<div class="col-md-3 col-sm-6">
			<div class="lc-block">
				<img class="img-fluid mx-auto d-block mb-2" src="https://cdn.livecanvas.com/media/svg/undraw/tweetstorm.svg" style="height:10vh">
			</div><!-- /lc-block -->
			<div class="lc-block text-center">
				<div editable="rich">

					<h4>The quick brown</h4>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;</p>
				</div>
			</div><!-- /lc-block -->
		</div><!-- /col -->
		<div class="col-md-3 col-sm-6">
			<div class="lc-block">
				<img class="img-fluid mx-auto d-block mb-2" src="https://cdn.livecanvas.com/media/svg/undraw/playful-cat.svg" style="height:10vh">
			</div><!-- /lc-block -->
			<div class="lc-block text-center">
				<div editable="rich">

					<h4>The quick brown</h4>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;</p>
				</div>
			</div><!-- /lc-block -->
		</div><!-- /col -->
		<div class="col-md-3 col-sm-6">
			<div class="lc-block">
				<img class="img-fluid mx-auto d-block mb-2" src="https://cdn.livecanvas.com/media/svg/undraw/broadcast.svg" style="height:10vh">
			</div><!-- /lc-block -->
			<div class="lc-block text-center">
				<div editable="rich">

					<h4>The quick brown</h4>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;</p>
				</div>
			</div><!-- /lc-block -->
		</div><!-- /col -->
		<div class="col-md-3 col-sm-6">
			<div class="lc-block">
				<img class="img-fluid mx-auto d-block mb-2" src="https://cdn.livecanvas.com/media/svg/undraw/android.svg" style="height:10vh">
			</div><!-- /lc-block -->
			<div class="lc-block text-center">
				<div editable="rich">

					<h4>The quick brown</h4>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;</p>
				</div>
			</div><!-- /lc-block -->
		</div><!-- /col -->
	</div>
</div>
<!--end-content-secondary------->
<!--footer---->


<section>
	<div class="d-flex container-fluid" lc-helper="background" style="min-height:40vh;background:url(https://images.unsplash.com/photo-1500964757637-c85e8a162699?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1980&amp;h=768&amp;fit=crop&amp;ixid=eyJhcHBfaWQiOjM3ODR9)  center / cover no-repeat;"></div>
	<div class="container py-5 bg-light" style="margin-top:-20vh">
		<div class="row">
			<div class="col-md-12 text-center text-dark">
				<div class="lc-block">
					<img alt="logo" class="img-fluid" src="https://birdlux.com/wp-content/uploads/2022/04/cropped-birdlux-logo-2.png" style="max-height:10vh">
					<div class="lc-block ">
						<div editable="rich">
							<h2>Company Slogan</h2>
						</div>
					</div>
					<!-- /lc-block -->
				</div>
				<!-- /lc-block -->
				<div class="lc-block text-center">
					<div editable="rich">
						<p> Copyright © Birdlux 2022</p>
					</div>
				</div>
				<!-- /lc-block -->
			</div>
			<!-- /col -->
		</div>
		<div class="row d-flex justify-content-center">
			<div class="d-flex col-md-12 justify-content-center">
				<div class="lc-block text-center text-dark py-5 mx-2">
					<a class="text-decoration-none" href="https://www.facebook.com/Birdlux-115485917809743">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="2em" height="2em" lc-helper="svg-icon" fill="currentColor">
							<path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"></path>
						</svg>
					</a>
				</div>
				<div class="lc-block text-center text-dark py-5 mx-2">
					<a class="text-decoration-none" href="https://www.pinterest.com/">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="2em" height="2em" lc-helper="svg-icon" fill="currentColor">
							<path d="M448 80v352c0 26.5-21.5 48-48 48H154.4c9.8-16.4 22.4-40 27.4-59.3 3-11.5 15.3-58.4 15.3-58.4 8 15.3 31.4 28.2 56.3 28.2 74.1 0 127.4-68.1 127.4-152.7 0-81.1-66.2-141.8-151.4-141.8-106 0-162.2 71.1-162.2 148.6 0 36 19.2 80.8 49.8 95.1 4.7 2.2 7.1 1.2 8.2-3.3.8-3.4 5-20.1 6.8-27.8.6-2.5.3-4.6-1.7-7-10.1-12.3-18.3-34.9-18.3-56 0-54.2 41-106.6 110.9-106.6 60.3 0 102.6 41.1 102.6 99.9 0 66.4-33.5 112.4-77.2 112.4-24.1 0-42.1-19.9-36.4-44.4 6.9-29.2 20.3-60.7 20.3-81.8 0-53-75.5-45.7-75.5 25 0 21.7 7.3 36.5 7.3 36.5-31.4 132.8-36.1 134.5-29.6 192.6l2.2.8H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48z"></path>
						</svg>
					</a>
				</div>
				<div class="lc-block text-center text-dark py-5 mx-2">
					<a class="text-decoration-none" href="https://www.linkedin.com/in/james-bienaime-36aa32176/">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="2em" height="2em" lc-helper="svg-icon" fill="currentColor">
							<path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path>
						</svg>
					</a>
				</div>
				<div class="lc-block text-center text-dark py-5 mx-2">
					<a class="text-decoration-none" href="https://www.instagram.com/">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="2em" height="2em" lc-helper="svg-icon" fill="currentColor">
							<path d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0,25.63,1.29,48.33,7.15,67,25.85s24.63,41.42,25.85,67.05C384.37,216.44,384.37,295.56,382.88,322Z"></path>
						</svg>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>









  