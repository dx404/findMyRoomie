<?php session_start(); ?>
<form id="dormCart-form" action="PHPScripts/dormRegistrar.php" method='post'>
	<div class="selectYourDorm">
		<input type="hidden" id="uid"
			name="uid" value=<?php echo $_SESSION['uid'];?>>
		<div class="left-column preSelect">
			<fieldset class="preSelect">
				<legend class="preSelect">Preselect Your Buildings</legend>
				<div id="preSelect-ratio" class="ration preSelect textRight">
					Selected: <span class="numerator">0 </span> / Total: <span
						class="denominator">0 </span>
				</div>

				<div class="top-button">
					<button type="button" id="preSelect-all" class="top preSelect">Select
						All</button>
					<button type="button" id="preSelect-none" class="top preSelect">Select
						None</button>
					<select id="preSelect-sort" class="preSelect sort floatRight">
						<option value="default">Default order</option>
						<option value="a2z">Sort in order (A-Z)</option>
						<option value="z2a">Sort in order (Z-A)</option>
					</select>
				</div>

				<div id="preSelect-table-div">
					<table id="preSelect-dorm-table" class="preSelect">
						<thead class="preSelect">
							<tr id="preSelect-table-head">
								<th>Status</th>
								<th>Photo</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody class="preSelect">
							<tr>
								<td><input type="checkbox" value="RAM">
								</td>
								<td>A picture</td>
								<td>Sample table</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="bottom-button">
					<button type="button" id="add-selected" class="preSelect bottom">Add
						Selected</button>
				</div>
			</fieldset>
		</div>

		<div class="right-column cart">
			<fieldset class="cart">
				<legend class="cart">Cart of Your Dormitories</legend>
				<span id="preDorms">previous selection:  </span>
				<form id="cart-form" class="cart">
					<div id="cart-ratio" class="cart ratio" style="text-align: right">
						Selected: <span class="numerator"> 0 </span> / Total: <span
							class="denominator">0 </span>
					</div>

					<div class="top-button">
						<button type="button" id="uncheck-all-cart" class="cart">Uncheck
							All</button>
						<button type="button" id="check-all-cart" class="cart">Check All</button>
						<select id="cart-sort" class="cart sort floatRight">
							<option value="default">Default order</option>
							<option value="a2z">Sort in order (A-Z)</option>
							<option value="z2a">Sort in order (Z-A)</option>
						</select>
					</div>

					<div id="cart-table-div">
						<table id="cart-table" class='cart'>
							<thead class="cart">
								<tr id="cart-table-head">
									<th>Status</th>
									<th>Name</th>
								</tr>
							</thead>
							<tbody class="cart">
								<tr>
									<td><img class="cart-checkbox" src='image/icons/validBlue.png'
										alt='errorPic'>
									</td>
									<td>Rams Village</td>
								</tr>
							</tbody>
						</table>
					</div>

					<div class="bottom-button">
						<button type="button" id="refresh-cart" class="bottom cart">Refresh
							Cart</button>
						<button type="submit" id="confirm-selected"
							class="submit bottom cart">Confirm</button>
					</div>
				</form>
			</fieldset>
		</div>
	</div>
</form>
