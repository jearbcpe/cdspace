
<?php

$page = $_GET['page'];
$arrPage = explode("/", $page);

?>

<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">

								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">

									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">

										<!--begin::Page Title-->
										<h5 class="text-dark font-weight-bold my-1 mr-5">Exercise : <?php echo $arrPage[1]; ?>
										</h5>
									
										<!--end::Page Title-->
									</div>

									<!--end::Page Heading-->
								</div>

								<!--end::Info-->
								<div class="d-flex align-items-right flex-wrap mr-1" id="divSwitchMenu">
									<span class="switch switch-outline switch-icon switch-success">
										<label>
											<input type="checkbox" id="swExamStatus" checked="checked" name="select">
											<span></span>
										</label>
									</span>
								</div>
							

								<!--end::Toolbar-->
							</div>
						</div>

						<!--end::Subheader-->