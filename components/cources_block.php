<div class="cources_details" id="cources_details">
	<div id="cources_details-menu-block" class="row col-mb-50 mb-1">

		<div class="col-lg-3">
			<aside class="sidebar">

				<div id="leftside-navigation">
					<div class="accordion">
						<div class="accordion__wrapper">
			
<?php
$cource_tab_GET = $_GET["cource"] ; 
$cource_name_GET = $_GET["name"] ; 

// building root menu	
$json = file_get_contents( 'cources/_menu_root.json');
$json_data = json_decode($json,true);
foreach ($json_data as $cource_file => $cource_tab) {
	if ($cource_tab['availability'])
		{
			// setting up "current" menu tab
			if ( $cource_tab['cource'] ==  $cource_tab_GET )
				$defaultFlag = 'id="defaultOpen"';
			else
				$defaultFlag = '';
			
			
			
			
			echo '<div class="accordion__item" ' . $defaultFlag . '>';
			echo '<div class="menu-item-QA accordion__question" ' . $defaultFlag . '>';
			echo $cource_tab['courceTabName'];
			echo '</div>';
			echo '<div class="accordion__answer">';
			echo '<ul class="sub-menu tab active">';

			// building second level of menu
			$json_cource = file_get_contents( 'cources/' . $cource_tab['courcefile'] );
			$json_cource_data = json_decode($json_cource,true);
			foreach ($json_cource_data as $cource_name_file => $cource_name)
				{
					if ($cource_name['availability']){
						if ( $cource_name['courseFileName'] ==  $cource_name_GET ){
							$activeFlag = 'active';
							$defaultFlag = 'id="defaultOpen"';}
						else{
							$activeFlag = '';
							$defaultFlag = '';}

						
						echo '<li class="menu-sub-item-QA"><a href="#' . $cource_name['courseFileName'] . '"';
							echo 'onclick="openTab(event, &#039;' . $cource_name['courseFileName'] . '&#039;)" class="tablinks ' . $activeFlag . '"';
							echo $defaultFlag . '>' . $cource_name['courseName'] . '</a>';
						echo '</li>';
					}
				}
			echo '</ul>';
				echo '</div>';
			echo '</div>';
		}
}
?>
						</div>
					</div>
				</div>

			</aside>
		</div>

		<div class="col-xl-9">
			<div class="cources_details-text">

				<?php include 'cources/qa_automation.html'?>
				<?php include 'cources/qa_theory.html'?>
				<?php include 'cources/qa_practice.html'?>
				<?php include 'cources/ba_practice.html'?>
				<?php include 'cources/pm_practice.html'?>

			</div>
		</div>

	</div>
</div>	