
<?php 

if($_GET)
	$route = $_GET['page'] ? 'pages/'.$_GET['page'] : 'partials/_content';
else
	$route = 'partials/_content';

?>

<!--begin::Main-->

		<?php include("partials/_header-mobile.php"); ?>
		<div class="d-flex flex-column flex-root">

			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">

				<?php include("partials/_aside.php"); ?>

				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

					<?php include("partials/_header.php"); ?>

					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

						<?php include("partials/_subheader/subheader-v1.php"); ?>

						<?php include($route.".php"); ?>
						
					</div>

					<!--end::Content-->

					<?php include("partials/_footer.php"); ?>
				</div>

				<!--end::Wrapper-->

				<?php //include("partials/_sidebar.php"); ?>
			</div>

			<!--end::Page-->
		</div>

		<!--end::Main-->

<script>
	var parm = new Object();
	parm.examNo = $("#hiddenExamNo").val();
	var myJson = JSON.stringify(parm);
	$.ajax({
		url: 'https://portal.moj.go.th/ws/academy/academy.php/examStatus',
		type: "POST",
		datatype: "application/json",
		data: myJson,
		async: true,
		success: function(data) {
			var rs = $.parseJSON(data);
			if(rs['status']=="1")
				$('#swExamStatus').prop('checked', true);
			else
				$('#swExamStatus').prop('checked', false);

			if("<?php echo $_SESSION['u_id']; ?>" == "1229"){
				$("#swExamStatus").prop("disabled", false);
			}
			else{
				$("#swExamStatus").prop("disabled", true);
			}
				

		},
		error: function() {
			console.log("error"); //writeLog
		}
	});

	$("#swExamStatus").change(function() {
		
			var parm = new Object();
			parm.examNo = $("#hiddenExamNo").val();
			if(this.checked) {
				parm.status = '1';
			}else
				parm.status = '0';
			var myJson = JSON.stringify(parm);
			$.ajax({
				url: 'https://portal.moj.go.th/ws/academy/academy.php/toggleStatus',
				type: "POST",
				datatype: "application/json",
				data: myJson,
				async: true,
				success: function(data) {
					var rs = $.parseJSON(data);
					if(rs['status']!="success")
						alert("ไม่สำเร็จ");
				},
				error: function() {
					console.log("error"); //writeLog
				}
			});
		
	});


		
		$.ajax({
			url: 'https://portal.moj.go.th/ws/academy/academy.php/examList',
			type: "POST",
			datatype: "application/json",
			async: true,
			success: function(data) {
	
				var strMenu = '<div class="menu-submenu menu-submenu-classic menu-submenu-left"><ul class="menu-subnav">';
				var rs = $.parseJSON(data);
				for(var i = 0;i<rs.length;i++){
					var order = rs[i]['order'];
					var no = rs[i]['examNo'];
					var code = rs[i]['examCode'];
					var name = rs[i]['examName'];
					var active = rs[i]['active'];
					var strActive = "";
					if(code == "<?php echo $arrPage[1]; ?>")
						strActive += "menu-item-active";
					
					if(active == "1" || "<?php echo $_SESSION['u_id']; ?>" == "1229"){
						strMenu += '<li class="menu-item ' + strActive + '" aria-haspopup="true">';
						strMenu += '<a href="./home.php?page=javascript/'+code+'" class="menu-link"><i class="menu-bullet menu-bullet-dot"><span></span></i>';
						strMenu += '<span class="menu-text">'+(parseInt(order) +1 )+ '. ' + name + '</span></a></li>';
					}
				}
				strMenu += '</ul></div>';
				$("#divMenu").html(strMenu);
				
			},
			error: function() {
				console.log("error"); //writeLog
			}
	
		});
</script>