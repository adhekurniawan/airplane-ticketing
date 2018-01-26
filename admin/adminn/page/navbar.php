	<!--/sidebar-menu-->
	<div class="sidebar-menu">
		<header class="logo">
			<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.php"> <span id="logo"> <h1>Traveler</h1></span> 
				<!--<img id="logo" src="" alt="Logo"/>--> 
			</a> 
		</header>
		<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
		<!--/down-->
		<!--//down-->
		<div class="menu">
			<ul id="menu" >
				<li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
				<li><a href="tambah-pesawat.php"><i class="fa fa-table"></i> <span>Data Pesawat</span></a>
					<ul id="menu-academico-sub" >
						<li id="menu-academico-avaliacoes" ><a href="tambah-pesawat.php">Tambah Data Pesawat</a></li>
						<li id="menu-academico-avaliacoes" ><a href="data-pesawat.php">Data Pesawat</a></li>
					</ul>
				</li>
				<li><a href="data.php"><i class="fa fa-table"></i> <span>Data</span></a>
					<ul id="menu-academico-sub" >
						<li id="menu-academico-avaliacoes" ><a href="login.php">Login</a></li>
					</ul>
				</li>
				<li><a href="logout.php"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
			</ul>
		</div>
	</div>
	<div class="clearfix"></div>		
</div>
<script>
	var toggle = true;
	
	$(".sidebar-icon").click(function() {                
		if (toggle)
		{
			$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
			$("#menu span").css({"position":"absolute"});
		}
		else
		{
			$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
			setTimeout(function() {
				$("#menu span").css({"position":"relative"});
			}, 400);
		}
		
		toggle = !toggle;
	});
</script>