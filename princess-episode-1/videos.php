<?php include('../includes/header.php') ?>
<main class="container-fluid page episode-1 media">
	<div class="main-content row justify-content-end">
		<div class="content-column">
			<h2 class="mt-5 mx-5 mb-4 text-center">
				<img src="<?php echo $base_url.'images/episode1/title_red.png'; ?>" width="180px">
				<span class="text-uppercase">Episode 1:</span> Videos
			</h2>
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-sm-12 col-md-10 col-xl-8 p-4">
						<div class="media-block p-4 my-4">
							<video width="320" controls>
								<source src="<?php echo $base_url.'videos/episode1/e1-ushuaia-helicopter.mp4'; ?>" type="video/mp4">
							</video>
							<p class="caption mt-4">
								<b>Le Cloche Summit, Argentina (2013) &mdash; </b>A stunning view of the seaport at Ushuaia, the Beagle Channel, and the Andes Mountains moments before liftoff in a helicopter from a snowcapped peak.
							</p>
						</div>
						<div class="media-block p-4 my-4">
							<video class="large" width="640" controls>
								<source src="<?php echo $base_url.'videos/episode1/e1-ushuaia-airplane.mp4'; ?>" type="video/mp4">
							</video>
							<p class="caption mt-4">
								<b>Ushuaia, Argentina (2013) &mdash; </b>Picking the right time to fly in a small airplane is critical because Ushuaia has some of the most challenging flying conditions in the world. We’re landing before the weather gets too bad.
							</p>
						</div>
						<div class="media-block p-4 my-4">
							<video class="large" width="640" controls>
								<source src="<?php echo $base_url.'videos/episode1/e1-ushuaia-port.mp4'; ?>" type="video/mp4">
							</video>
							<p class="caption mt-4">
								<b>Ushuaia, Argentina (2013) &mdash; </b>From a sailboat dock in the harbor, a 360&deg; view gives good bearings for the port and city of Ushuaia and for the way to get to Antarctica.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php include('../includes/footer.php') ?>
