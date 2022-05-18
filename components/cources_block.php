<div class="courses_details" id="courses_details">
	<div id="courses_details-menu-block" class="row col-mb-50 mb-1">

		<div class="col-lg-3">
			<aside class="sidebar">

				<div id="leftside-navigation">
					<div class="accordion">
						<div class="accordion__wrapper">
			
<?php
$course_tab_GET = $_GET["course"] ; 
$course_name_GET = $_GET["name"] ; 

// building root menu	
$json = file_get_contents( 'courses/_menu_root.json');
$json_data = json_decode($json,true);
foreach ($json_data as $course_file => $course_tab) {
	if ($course_tab['availability'])
		{
			// setting up "current" menu tab
			if ( $course_tab['course'] ==  $course_tab_GET )
				$defaultFlag = 'id="defaultOpen"';
			else
				$defaultFlag = '';
			
			
			$course_tab_id = $course_tab['course'];
			
			echo '<div class="accordion__item">';
			echo '<div class="menu-item-QA accordion__question" ' . $defaultFlag . '>';
			echo $course_tab['courseTabName'];
			echo '</div>';
			echo '<div class="accordion__answer">';
			echo '<ul class="sub-menu tab active">';

			// building second level of menu
			$json_course = file_get_contents( 'courses/' . $course_tab['coursefile'] );
			$json_course_data = json_decode($json_course,true);
			foreach ($json_course_data as $course_name_file => $course_name)
				{
					if ($course_name['availability']){
						if ( $course_name['courseFileName'] ==  $course_name_GET ){
							$activeFlag = 'active';
							$defaultFlag = 'id="defaultOpen"';}
						else{
							$activeFlag = '';
							$defaultFlag = '';}

						//echo '<li class="menu-sub-item-QA"><a href="#' . $course_name['courseFileName'] . '"';
						echo '<li class="menu-sub-item-QA"><a href="?course=' . $course_tab_id . '&name=' . $course_name['courseFileName'] . '"';
							echo ' onclick="openTab(event, &#039;' . $course_name['courseFileName'] . '&#039;)" class="tablinks ' . $activeFlag . '"';
							echo $defaultFlag . '>' . $course_name['courseName'] . '</a>';
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
			<div class="courses_details-text">
			
			<?php
			foreach ($json_data as $course_file => $course_tab) {
				if ($course_tab['availability']){
					$json_course = file_get_contents( 'courses/' . $course_tab['coursefile'] );
					$json_course_data = json_decode($json_course,true);
					foreach ($json_course_data as $course_name_file => $course_name){
						if ($course_name['availability']){
							if ( $course_name['courseFileName'] ==  $course_name_GET )
								$activeFlag = 'style="display: block;"';
							else
								$activeFlag = 'style="display: none;"';

							echo '<div id="' . $course_name['courseFileName'] . '" class="tabcontent" ' . $activeFlag . '>' ;
							include 'courses/' . $course_name['courseFileName'] . '.html';
							echo '</div>';
						}
					}
				}
			}
			?>		


			</div>
		</div>

	</div>
</div>	