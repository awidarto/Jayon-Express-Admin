
	<script>

		$(document).ready(function() {
			
			$('#jayonmap').gmap3({
				action:'init',
				options:{
				      center:[-6.17742,106.828308],
				      zoom: 12
				    }
			});
		        
		});

	</script>
	<div id="masthead">
		
		<div class="content_pad">
			
			<h1 class="no_breadcrumbs">Home</h1>
			
		</div> <!-- .content_pad -->
		
	</div> <!-- #masthead -->	
	
	<div id="content">
		<div id="jayonmap"></div>
		<div id="lasttime"></div>
		<div id="container_arp" style="width:1000px;height:250px;"></div>
		<div id="container_http" style="width:1000px;height:250px;"></div>
		<div id="container_ftp" style="width:1000px;height:250px;"></div>
	
	
	</div> <!-- #content -->
	
