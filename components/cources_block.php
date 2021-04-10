<div class="cources_details" id="cources_details">
	<div id="cources_details-menu-block" class="row col-mb-50 mb-1">


		<div class="col-lg-3">
			<aside class="sidebar">

				<div id="leftside-navigation">
					<div class="accordion">
						<div class="accordion__wrapper">

							<div class="accordion__item">
								<div class="menu-item-QA accordion__question" id="defaultOpen">
									<!-- id="defaultOpen" -->
									QA Engineer
								</div>
								<div class="accordion__answer">
									<ul class="sub-menu tab active">
										<li class="menu-sub-item-QA"><a href='#QA_automation'
												onclick="openTab(event, 'qa_automation')" class="tablinks active"
												id="defaultOpen">Автоматизація</a>
										</li>

										<li class="menu-sub-item-QA"><a href='#QA_theory'
												onclick="openTab(event, 'qa_theory')" class="tablinks">Менторство</a>
										</li>
										<li class="menu-sub-item-QA "><a href='#QA_practice'
												onclick="openTab(event, 'qa_practice')" class="tablinks">Практика</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="accordion__item">
								<div class="menu-item-QA accordion__question">
									Business Analyst
								</div>
								<div class="accordion__answer">
									<ul class="sub-menu tab">

										<li class="menu-sub-item-QA"><a href='#ba_practice'
												onclick="openTab(event, 'ba_practice')" class="tablinks">Практика</a>
										</li>

									</ul>
								</div>
							</div>

							<div class="accordion__item">
								<div class="menu-item-QA accordion__question">
									Project Manager
								</div>
								<div class="accordion__answer">
									<ul class="sub-menu tab">

										<li class="menu-sub-item-QA"><a href='#pm_practice'
												onclick="openTab(event, 'pm_practice')" class="tablinks">Практика</a>
										</li>

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

			</aside>
		</div>

		<div class="col-xl-9">
			<div class="cources_details-text">

				<?php include 'cources/automation.html'?>
				<?php include 'cources/practice-theory.html'?>
				<?php include 'cources/practice.html'?>
				<?php include 'cources/ba_practice.html'?>
				<?php include 'cources/pm_practice.html'?>

			</div>
		</div>

	</div>
</div>