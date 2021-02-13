
<!-- begin::User Panel-->
		<div id="kt_quick_user" class="offcanvas offcanvas-left p-10">

			<!--begin::Header-->
			<div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
				<h3 class="font-weight-bold m-0">User Profile
					<small class="text-muted font-size-sm ml-2"></small>
				</h3>
				<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
					<i class="ki ki-close icon-xs text-muted"></i>
				</a>
			</div>

			<!--end::Header-->

			<!--begin::Content-->
			<div class="offcanvas-content pr-5 mr-n5">

				<!--begin::Header-->
				<div class="d-flex align-items-center mt-5">
					<div class="symbol symbol-100 mr-5">
						<div class="symbol-label" style="background-image:url('assets/media/users/300_21.jpg')"></div>
						<i class="symbol-badge bg-success"></i>
					</div>
					<div class="d-flex flex-column">
						<a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary"><?=$_SESSION['u_fullName'];?></a>
						<div class="text-muted mt-1"><?=$_SESSION['position'];?></div>
						<div class="navi mt-2">
							<a href="#" class="navi-item">
								<span class="navi-link p-0 pb-2">
								
								</span>
							</a>
							<a href="logout.php" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
						</div>
					</div>
				</div>

				<!--end::Header-->

				<!--begin::Separator-->
				<div class="separator separator-dashed mt-8 mb-5"></div>

				<!--end::Separator-->

				
			</div>

			<!--end::Content-->
		</div>

		<!-- end::User Panel-->