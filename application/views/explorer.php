
<style>
		body {
			background-color: #001935;
			color: whitesmoke;
			padding-top: 70px;
		}

		#sidebar>.list-group-item {
			padding: 0.4em 1em;
		}

		@media (min-width: 1em) {
			.grid {
				width: 660px;
			}
		}

		@media (max-width: 991.98px) {
			.stamp{
				position: absolute;
				right: 18px;
				position: absolute;
			}
			.grid {
				width: 633px;
			}
		}

		@media (min-width: 62em) {
			.stamp{
				position: absolute;
				right: 30px;
				position: absolute;
			}
			.grid {
				width: 960px;
			}
		}

		@media (min-width: 80em) {
			.grid {
				width: 1286px;
			}
			.stamp{
				position: absolute;
				right: 40px;
				position: absolute;
			}
		}

		@media (min-width: 102em) {
			.stamp{
				position: absolute;
				right: 53px;
				position: absolute;
			}
			.grid {
				width: 1613px;
			}
		}

		.card-footer {
			position: relative;
		}

		.icons {
			position: ;
			top: -.35rem;
			font-size: 2.5em;
		}

		.nounderline {
			text-decoration: none !important
		}
		/* ---- grid ---- */
		/* clearfix */
		.grid:after {
			content: '';
			display: block;
			clear: both;
		}
		/* ---- grid-item ---- */
		.mycard {
			float: left;
			width: 300px;
			margin-bottom: 10px;
		}

		hr {
			border-color: #21374f;
			border-width: 2px;
			margin-top: 2px;
			margin-bottom: 2px;
		}
	</style>

<div class="d-flex p-0 mt-5 mx-5 justify-content-center" >
	<div class="row ">
		<div class="col p-0">

			<div class="grid">
				<div class="mycard  stamp">
					<h6 class="ml-3 mb-2 font-weight-bold">Trending Blogs</h6>
					<div>
						<ul class="list-group borderless" id="sidebar">
							<!-- start perulangan Blog -->
							<li class="list-group-item" style="background-color:transparent; border-right:0; border-left : 0; border-color: rgb(139, 153, 173)">
								<div class="d-flex">
									<img alt="" class="rounded" src="<?php echo base_url(); ?>assets/tempImage-min.jpg" alt="UNKNOWN" width="45px" height="45px">

									<div class="ml-2">
										<b>pratamays</b>
										<p class="text-muted" style="margin-bottom : 0;"><small>Tama</small></p>
									</div>

									<div class="ml-auto mt-2">
										<a href="" class="nounderline">Follow</a>
									</div>
								</div>
							</li>
							<!-- end perulangan profil blog, max 4 Blog -->

							<li class="list-group-item" style="background-color:transparent; border-right:0; border-left : 0; border-color: rgb(139, 153, 173)">
								<div class="d-flex">
									<img alt="" class="rounded" src="<?php echo base_url(); ?>assets/tempImage-min.jpg" alt="UNKNOWN" width="45px" height="45px">
s
									<div class="ml-2">
										<b>pratamays</b>
										<p class="text-muted" style="margin-bottom : 0;"><small>Tama</small></p>
									</div>

									<div class="ml-auto mt-2">
										<a href="" class="nounderline">Follow</a>
									</div>
								</div>
							</li>
							<li class="list-group-item" style="background-color:transparent; border-right:0; border-left : 0; border-color: rgb(139, 153, 173)">
								<div class="d-flex">
									<img alt="" class="rounded" src="<?php echo base_url(); ?>assets/tempImage-min.jpg" alt="UNKNOWN" width="45px" height="45px">

									<div class="ml-2">
										<b>pratamays</b>
										<p class="text-muted" style="margin-bottom : 0;"><small>Tama</small></p>
									</div>

									<div class="ml-auto mt-2">
										<a href="" class="nounderline">Follow</a>
									</div>
								</div>
							</li>
							<li class="list-group-item" style="background-color:transparent; border-right:0; border-left : 0; border-color: rgb(139, 153, 173)">
								<div class="d-flex">
									<img alt="" class="rounded" src="<?php echo base_url(); ?>assets/tempImage-min.jpg" alt="UNKNOWN" width="45px" height="45px">

									<div class="ml-2">
										<b>pratamays</b>
										<p class="text-muted" style="margin-bottom : 0;"><small>Tama</small></p>
									</div>

									<div class="ml-auto mt-2">
										<a href="" class="nounderline">Follow</a>
									</div>
								</div>
							</li>
						</ul>

						<a href="#" class="mt-1 ml-3 nounderline text-light" ><small>Show more goblogs</small></a>
					</div>
					<div class="mt-4">
						<h6 class="ml-3 mb-2 font-weight-bold">Trending Searches</h6>
						<hr/>
						<div class="row px-3 h-25 my-1">
							<a href="" class="col-auto nounderline font-weight-bold text-dark bg-warning rounded py-0 mx-1">
								<p>STAR TREK DISCOVERY</p>
							</a>
							<a href="" class="col-auto nounderline font-weight-bold text-dark bg-success rounded py-0 mx-1">
								<p>ase</p>
							</a>
						</div>
						<div class="row px-3 h-25 my-1">
							<a href="" class="col-auto nounderline font-weight-bold text-dark bg-warning rounded py-0 mx-1">
								<p>STAR TREK DISCOVERY</p>
							</a>
							<a href="" class="col-auto nounderline font-weight-bold text-dark bg-success rounded py-0 mx-1">
								<p>taY</p>
							</a>
						</div>
						<div class="row px-3 h-25 my-1">
							<a href="" class="col-auto nounderline font-weight-bold text-dark bg-warning rounded py-0 mx-1">
								<p>STAR TREK DISCOVERY</p>
							</a>
							<a href="" class="col-auto nounderline font-weight-bold text-dark bg-success rounded py-0 mx-1">
								<p>fak</p>
							</a>
						</div>
					</div>
				</div>
				<!-- Start Perulangan Explorer-->
				<div class="card mycard">
					<div class="class-header p-3 border-bottom" style="height: 60px">
						<div class=""container>
							<div class="row">
								<div class="col-12 pl-3 px-0" style="height: 120px">
									<div class="d-inline-flex pr-2">
										<a href="">
											<img src="https://66.media.tumblr.com/avatar_54b555cf6abd_64.pnj" class="img-fluid rounded" alt="" style="width: 30px">
										</a>
									</div>
									<a href="" class="nounderline text-dark font-weight-bold" >asdasdasds</a>
									<a href="" class="nounderline">Follow</a>
								</div>
							</div>
						</div>
					</div>
					<img src="https://66.media.tumblr.com/7f29ea150dd1af2b8b21620e5819e4cc/tumblr_pq3lqeMdPr1tt0dgdo1_500.jpg" class="card-img" alt="...">
					<div class="card-body">
						<p class="card-text text-dark">Post Content</p>
					</div>
					<div class="card-footer">
						<div class="float-right">
							<ul class="list-inline text-muted">
								<li class="list-inline-item mr-2">
									<ion-icon name="send"></ion-icon>
								</li>
								<li class="list-inline-item mr-2">
									<!-- modal harus tetep open saat klik reply dan cuma ngehilang pas ngeclick outside -->
									<a id="komen" class="text-muted" href="#" data-backdrop="" data-toggle="modal" data-target="#modalKomen">
										<ion-icon name="text"></ion-icon>
									</a>
								</li>
								<li class="list-inline-item mr-2">
									<ion-icon name="repeat"></ion-icon>
								</li>
								<li class="list-inline-item mr-2">
									<ion-icon name="settings"></ion-icon>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- End Perulangan explorer-->
				<!-- START DUMMY BUAT CONTOH-->
				<div class="card mycard">
					<div class="class-header p-3 border-bottom" style="height: 60px">
						<div class=""container>
							<div class="row">
								<div class="col-12 pl-3 px-0" style="height: 120px">
									<div class="d-inline-flex pr-2">
										<a href="">
											<img src="https://66.media.tumblr.com/avatar_54b555cf6abd_64.pnj" class="img-fluid rounded" alt="" style="width: 30px">
										</a>
									</div>
									<a href="" class="nounderline text-dark font-weight-bold" >asdasdasds</a>
									<a href="" class="nounderline">Follow</a>
								</div>
							</div>
						</div>
					</div>
					<img src="https://66.media.tumblr.com/3addaa13d13e9f324098fe6d2343c9b7/tumblr_pq3hjiqpPp1uwx719_400.jpg" class="card-img" alt="...">
					<div class="card-body">
						<p class="card-text text-dark">Post Content</p>
					</div>
					<div class="card-footer">
						<div class="float-right">
							<ul class="list-inline text-muted">
								<li class="list-inline-item mr-2">
									<ion-icon name="send"></ion-icon>
								</li>
								<li class="list-inline-item mr-2">
									<!-- modal harus tetep open saat klik reply dan cuma ngehilang pas ngeclick outside -->
									<a id="komen" class="text-muted" href="#" data-backdrop="" data-toggle="modal" data-target="#modalKomen">
										<ion-icon name="text"></ion-icon>
									</a>
								</li>
								<li class="list-inline-item mr-2">
									<ion-icon name="repeat"></ion-icon>
								</li>
								<li class="list-inline-item mr-2">
									<ion-icon name="settings"></ion-icon>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="card mycard">
					<div class="class-header p-3 border-bottom" style="height: 60px">
						<div class=""container>
							<div class="row">
								<div class="col-12 pl-3 px-0" style="height: 120px">
									<div class="d-inline-flex pr-2">
										<a href="">
											<img src="https://66.media.tumblr.com/avatar_54b555cf6abd_64.pnj" class="img-fluid rounded" alt="" style="width: 30px">
										</a>
									</div>
									<a href="" class="nounderline text-dark font-weight-bold" >asdasdasds</a>
									<a href="" class="nounderline">Follow</a>
								</div>
							</div>
						</div>
					</div>
					<img src="https://66.media.tumblr.com/ab5ea7c948237f25823bb908c5c40510/tumblr_pp1ydqwj9l1xm6mero1_500.jpg" class="card-img" alt="...">
					<div class="card-body">
						<p class="card-text text-dark">Post Content</p>
					</div>
					<div class="card-footer">
						<div class="float-right">
							<ul class="list-inline text-muted">
								<li class="list-inline-item mr-2">
									<ion-icon name="send"></ion-icon>
								</li>
								<li class="list-inline-item mr-2">
									<!-- modal harus tetep open saat klik reply dan cuma ngehilang pas ngeclick outside -->
									<a id="komen" class="text-muted" href="#" data-backdrop="" data-toggle="modal" data-target="#modalKomen">
										<ion-icon name="text"></ion-icon>
									</a>
								</li>
								<li class="list-inline-item mr-2">
									<ion-icon name="repeat"></ion-icon>
								</li>
								<li class="list-inline-item mr-2">
									<ion-icon name="settings"></ion-icon>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="card mycard">
					<div class="class-header p-3 border-bottom" style="height: 60px">
						<div class=""container>
							<div class="row">
								<div class="col-12 pl-3 px-0" style="height: 120px">
									<div class="d-inline-flex pr-2">
										<a href="">
											<img src="https://66.media.tumblr.com/avatar_54b555cf6abd_64.pnj" class="img-fluid rounded" alt="" style="width: 30px">
										</a>
									</div>
									<a href="" class="nounderline text-dark font-weight-bold" >asdasdasds</a>
									<a href="" class="nounderline">Follow</a>
								</div>
							</div>
						</div>
					</div>
					<img src="https://66.media.tumblr.com/2110020230981b2cf14376e515f28897/tumblr_pq60hfVGjh1u2uujfo3_500.gif" class="card-img" alt="...">
					<div class="card-body">
						<p class="card-text text-dark">Post Content</p>
					</div>
					<div class="card-footer">
						<div class="float-right">
							<ul class="list-inline text-muted">
								<li class="list-inline-item mr-2">
									<ion-icon name="send"></ion-icon>
								</li>
								<li class="list-inline-item mr-2">
									<!-- modal harus tetep open saat klik reply dan cuma ngehilang pas ngeclick outside -->
									<a id="komen" class="text-muted" href="#" data-backdrop="" data-toggle="modal" data-target="#modalKomen">
										<ion-icon name="text"></ion-icon>
									</a>
								</li>
								<li class="list-inline-item mr-2">
									<ion-icon name="repeat"></ion-icon>
								</li>
								<li class="list-inline-item mr-2">
									<ion-icon name="settings"></ion-icon>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="card mycard">
					<div class="class-header p-3 border-bottom" style="height: 60px">
						<div class=""container>
							<div class="row">
								<div class="col-12 pl-3 px-0" style="height: 120px">
									<div class="d-inline-flex pr-2">
										<a href="">
											<img src="https://66.media.tumblr.com/avatar_54b555cf6abd_64.pnj" class="img-fluid rounded" alt="" style="width: 30px">
										</a>
									</div>
									<a href="" class="nounderline text-dark font-weight-bold" >asdasdasds</a>
									<a href="" class="nounderline">Follow</a>
								</div>
							</div>
						</div>
					</div>
					<img src="https://66.media.tumblr.com/86280b0bebbf6bd6c8d88b0aa48d20ff/tumblr_pp57s93mxy1r65eeio2_400.gif" class="card-img" alt="...">
					<div class="card-body">
						<p class="card-text text-dark">Post Content</p>
					</div>
					<div class="card-footer">
						<div class="float-right">
							<ul class="list-inline text-muted">
								<li class="list-inline-item mr-2">
									<ion-icon name="send"></ion-icon>
								</li>
								<li class="list-inline-item mr-2">
									<!-- modal harus tetep open saat klik reply dan cuma ngehilang pas ngeclick outside -->
									<a id="komen" class="text-muted" href="#" data-backdrop="" data-toggle="modal" data-target="#modalKomen">
										<ion-icon name="text"></ion-icon>
									</a>
								</li>
								<li class="list-inline-item mr-2">
									<ion-icon name="repeat"></ion-icon>
								</li>
								<li class="list-inline-item mr-2">
									<ion-icon name="settings"></ion-icon>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- END DUMMY BUAT CONTOH-->
			</div>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
	<script>
		$('.grid').masonry({
			itemSelector: '.card',
			columnWidth: 315,
			stamp: '.stamp'
		});

	</script>

