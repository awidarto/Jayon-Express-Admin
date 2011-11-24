	<?php
	    function set_hilite($urlpattern){
	        $hilite = preg_match('/'.$urlpattern.'/',current_url());
	        return ($hilite)?'nav_current':'';
	    }
	
	?>
	
	<div id="header">
		
		<div class="content_pad">
			<h1><a href="./dashboard.html">Dashboard Admin</a></h1>
			
			<ul id="nav">
				<li class="<?php print set_hilite('admin\/home')?> nav_icon"><a href="<?php print site_url('admin/home');?>"><span class="ui-icon ui-icon-home"></span>Home</a></li>
				<li class="<?php print set_hilite('admin\/admin\/deliveryorders$')?> nav_icon"><a href="<?php print site_url('admin/admin/deliveryorders');?>"><span class="ui-icon ui-icon-signal"></span>Delivery Orders</a></li>
				<li class="<?php print set_hilite('admin\/admin\/deliverylogs$')?> nav_icon"><a href="<?php print site_url('admin/admin/deliverylogs');?>"><span class="ui-icon ui-icon-signal"></span>Delivery Log</a></li>
				<li class="<?php print set_hilite('admin\/admin\/locationlogs$')?> nav_icon"><a href="<?php print site_url('admin/admin/locationlogs');?>"><span class="ui-icon ui-icon-signal"></span>Location Tracker</a></li>
				<li class="nav_dropdown">
					<a href="">Administrator</a>
					<div class="nav_menu">
						<ul>
							<li class="<?php print set_hilite('admin\/admin\/users$')?> nav_icon"><a href="<?php print site_url('admin/admin/users');?>"><span class="ui-icon ui-icon-signal"></span>Users</a></li>
							<li class="<?php print set_hilite('admin\/admin\/merchants$')?> nav_icon"><a href="<?php print site_url('admin/admin/merchants');?>"><span class="ui-icon ui-icon-signal"></span>Merchants</a></li>
							<li class="<?php print set_hilite('admin\/admin\/administrators$')?> nav_icon"><a href="<?php print site_url('admin/admin/administrators');?>"><span class="ui-icon ui-icon-signal"></span>Administrators</a></li>
							<li class="<?php print set_hilite('admin\/admin\/couriers$')?> nav_icon"><a href="<?php print site_url('admin/admin/couriers');?>"><span class="ui-icon ui-icon-signal"></span>Couriers</a></li>
							<li class="<?php print set_hilite('admin\/admin\/keys$')?> nav_icon"><a href="<?php print site_url('admin/admin/keys');?>"><span class="ui-icon ui-icon-signal"></span>App. Keys</a></li>
							<li class="<?php print set_hilite('admin\/admin\/settings$')?> nav_icon"><a href="<?php print site_url('admin/admin/settings');?>"><span class="ui-icon ui-icon-signal"></span>Settings</a></li>
							<li class="<?php print set_hilite('admin\/admin\/periodicals$')?> nav_icon"><a href="<?php print site_url('admin/admin/periodicals');?>"><span class="ui-icon ui-icon-signal"></span>Scheduler</a></li>
							<li class="<?php print set_hilite('admin\/admin\/reports')?> nav_icon"><a href="<?php print site_url('admin/admin/reports');?>"><span class="ui-icon ui-icon-signal"></span>Reports</a></li>
						</ul>
					</div> <!-- .menu -->
				</li>
			</ul>
		</div> <!-- .content_pad -->
		
	</div> <!-- #header -->	
	
