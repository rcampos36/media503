<div class="staff--title"><h2><?php the_field('staff_title')?></h2></div>

			<?php 
						// Get repeater value
						$repeater = get_field('staff');

						// Obtain list of columns
						foreach ($repeater as $key => $row) {
							$the_staff_location[$key] = $row['staff_location'];
						}
						?>
						
						<div class="leadership-button-group-wrapper">
							<div class="leadership-button-group staff-filter-button-group">
								<div class="leadership-button-group-locations">Locations:</div>
							  <button class="staff" data-filter="*">all</button>
							 <button data-filter=".national">National</button>
							 <button data-filter=".ch">Chicago</button>
							 <button data-filter=".dc">Washington, DC</button>
							 <button data-filter=".la">Los Angeles</button>
							 <button data-filter=".ny">New York</button>
							</div>
						</div>

				<div class="staff-wrapper grid" id="names">

					<?php 
						// Get repeater value
						$repeater = get_field('staff');

						// Obtain list of columns
						foreach ($repeater as $key => $row) {
							$image[$key] = $row['staff_image'];
							$the_first_name[$key] = $row['staff_first_name'];
							$the_last_name[$key] = $row['staff_last_name'];
							$the_first_last_name[$key] = $row['staff_first_last_name'];
							$the_staff_title[$key] = $row['staff_title'];
							$the_staff_btn[$key] = $row['staff_bio_btn'];
							$the_staff_location[$key] = $row['staff_location'];
						}

						// Sort the data by restaurant name column, ascending
						array_multisort($the_last_name, SORT_ASC, $repeater);

						// Display newly orded columns
						// Unsure if this is the optimal way to do this...
						foreach( $repeater as $row ) { ?>
						<div class="staff-wrapper--card store-list-item grid-item <?php echo $row['staff_location']?>">
							<img class="staff-wrapper--card-image" src="<?php echo $row['staff_image']; ?>" />
							<div class="staff-wrapper--card-name">
								<div class="staff-wrapper--card-first-name"><h3><?php echo $row['staff_first_name']?></h3></div>
								<div class="staff-wrapper--card-first-name"><h3><?php echo $row['staff_first_last_name']?></h3></div>
								<div class="staff-wrapper--card-last-name"><h3> <?php echo $row['staff_last_name']?></h3></div>
							</div>
							<div class="staff-wrapper--card-title"><p><?php echo $row['staff_title']?></p></div>
							<div class="staff-wrapper--card-button showSingleStaff"><p><?php echo $row['staff_bio_btn']?></p></div>
						</div>

						<div class="staff-overlay">
		      		<div class="staff-overlay-wrapper">
		      			<span class="close">×</span>
			      		<div id="div<?php echo get_row_index(); ?>" class="staff-wrapper--bios-bio targetDivStaff"><p><?php echo $row['staff_bio']?></p></div>
			      	</div>
		     	 	</div>
					<?php } ?>
				</div>