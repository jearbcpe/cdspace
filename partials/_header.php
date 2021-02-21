<?php
$page = $_GET['page'];
$arrPage = explode("/", $page);
?>
<!--begin::Header-->
<div id="kt_header" class="header header-fixed">

	<!--begin::Header Wrapper-->
	<div class="header-wrapper rounded-top-xl d-flex flex-grow-1 align-items-center">

		<!--begin::Container-->
		<div class="container d-flex align-items-center justify-content-end justify-content-lg-between flex-wrap">

			<!--begin::Menu Wrapper-->
			<div class="header-menu-wrapper header-menu-wrapper-left py-lg-2" id="kt_header_menu_wrapper">

				<!--begin::Menu-->
				<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">

					<!--begin::Nav-->
					<ul class="menu-nav">
						<!--li class="menu-item menu-item-active" aria-haspopup="true">
												<a href="index.html" class="menu-link">
													<span class="menu-text">Dashboard</span>
												</a>
											</li>-->
											
						<li class="menu-item menu-item-submenu menu-item-rel menu-item-open-dropdown  <?= ($arrPage[0] == "javascript") ?  'menu-item-active' :  ''; ?>" data-menu-toggle="click" aria-haspopup="true">
							<a href="javascript:;" class="menu-link menu-toggle">
								<span class="menu-text">JavaScript</span>
								<span class="menu-desc"></span>
								<i class="menu-arrow"></i>
							</a>
							<div id="divJSMenu"></div>
						</li>
						<li class="menu-item menu-item-submenu menu-item-rel menu-item-open-dropdown  <?= ($arrPage[0] == "jquery") ?  'menu-item-active' :  ''; ?>" data-menu-toggle="click" aria-haspopup="true">
							<a href="javascript:;" class="menu-link menu-toggle">
								<span class="menu-text">jQuery</span>
								<span class="menu-desc"></span>
								<i class="menu-arrow"></i>
							</a>
							<div id="divJQMenu"></div>
						</li>
					
						<li class="menu-item menu-item-submenu menu-item-rel menu-item-open-dropdown  <?= ($arrPage[0] == "workshop") ?  'menu-item-active' :  ''; ?>" data-menu-toggle="click" aria-haspopup="true">
							<a href="javascript:;" class="menu-link menu-toggle">
								<span class="menu-text">Workshop</span>
								<span class="menu-desc"></span>
								<i class="menu-arrow"></i>
							</a>
							<div id="divWSMenu" >
						
							</div>
						</li>
					</ul>

					<!--end::Nav-->
				</div>

				<!--end::Menu-->
			</div>

			<!--end::Menu Wrapper-->

			<!--begin::Toolbar-->
			<div class="d-flex align-items-center py-3">


			</div>

			<!--end::Toolbar-->
		</div>

		<!--end::Container-->
	</div>

	<!--end::Header Wrapper-->
</div>

<!--end::Header-->