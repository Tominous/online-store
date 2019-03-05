<nav class="sidebar bar-block white collapse top" style="z-index:3;width:250px" id="mySidebar">
  <div class="padding-64 large text-grey" style="font-weight:bold">
	<?php
	$items = mysqli_query($conn,"SELECT group_name FROM inventory_group");
	
	while($row = mysqli_fetch_array($items)) {
		$url = strtolower($row["group_name"]);
		echo'<a href="/pages/store/'.$url.'.php" class="bar-item button">'.$row["group_name"].'</a>';
	}
	?>
  </div>
</nav>