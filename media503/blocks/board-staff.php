<div class="board-wrapper">

					<div class="board-wrapper--title"><h2><?php the_field('board_title')?></h2></div>

					<?php 
						// Get repeater value
						$repeater = get_field('board');

						// Obtain list of columns
						foreach ($repeater as $key => $row) {
							$the_board_location[$key] = $row['board_location'];
						}
						?>
						
						<div class="leadership-button-group-wrapper">
							<div class="leadership-button-group board-filter-button-group">
								<div class="leadership-button-group-locations">Locations:</div>
							 <button data-filter="*">National</button>
							 <button data-filter=".ch">Chicago</button>
							 <button data-filter=".dc">Washington, DC</button>
							 <button data-filter=".la">Los Angeles</button>
							 <button data-filter=".ny">New York</button>
							</div>
						</div>

				<div class="board-wrapper--content grid" id="names">

					<?php 
						// Get repeater value
						$repeater = get_field('board');

						// Obtain list of columns
						foreach ($repeater as $key => $row) {
							$board_image[$key] = $row['board_image'];
							$the_first_name[$key] = $row['board_first_name'];
							$the_last_name[$key] = $row['board_last_name'];
							$the_board_title[$key] = $row['board_title'];
							$the_board_btn[$key] = $row['board_bio_btn'];
							$the_board_location[$key] = $row['board_location'];
						}

						// Sort the data by restaurant name column, ascending
						array_multisort($the_last_name, SORT_ASC, $repeater);

						// Display newly orded columns
						// Unsure if this is the optimal way to do this...
						foreach( $repeater as $row ) { ?>
						<div class="board-wrapper--content-card store-list-item grid-item <?php echo $row['board_location']?>">
							<img class="board-wrapper--content-card-image" src="<?php echo $row['board_image']; ?>" />
							<div class="board-wrapper--content-card-name">
								<div class="board-wrapper--content-card-first-name"><h3><?php echo $row['board_first_name']?></h3></div>
								<div class="board-wrapper--content-card-last-name"><h3> <?php echo $row['board_last_name']?></h3></div>
							</div>
							<div class="board-wrapper--content-card-title"><p><?php echo $row['board_title']?></p></div>
							<div class="board-wrapper--content-card-button showSingleBoard"><p><?php echo $row['board_bio_btn']?></p></div>
						</div>

						<div class="board-overlay">
		      		<div class="board-overlay-wrapper">
		      			<span class="close">×</span>
			      		<div id="div<?php echo get_row_index(); ?>" class="board-wrapper--bios-bio targetDivBoard"><p><?php echo $row['board_bio']?></p></div>
			      	</div>
		     	 	</div>
					<?php } ?>

			</div>
			</div>