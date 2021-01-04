@extends('layout/main')

@section('title','Create ATP Report')

@section('main-content')

<style type="text/css">

.step {
	display: none;
}
.step.active {
	display: block;
}

</style>

<div class="section-body mt-2">
	<div class="container-fluid">
		<h1 class="page-title">Create ATP</h1>
		<div class="tab-content mt-2">
			<form>

				<div class="step step-1 active">
					<div class="card">
						<div class="card-header text-white bg-info">Basic Information</div>
						<div class="card-body">
							<div class="form-group">
								<label>Project</label>
								<input type="text" class="form-control">
							</div>

							<div class="form-group">
								<label>Location</label>
								<input type="text" class="form-control">
							</div>

							<div class="form-group">
								<label>Site ID</label>
								<input type="text" class="form-control">
							</div>

							<div class="form-group">
								<label>Area</label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="card-footer">
							<button type="button" class="next-btn btn btn-success float-right">Next</button>
						</div>
					</div>
				</div>

				<div class="step step-2">
					<div class="card">
						<div class="card-header text-white bg-info">Rectifier System</div>
						<div class="card-body">
							<div class="form-group">
								<label>Rectifier Series</label>
								<input type="text" class="form-control">
							</div>

							<div class="form-group">
								<label>Rectifier Type</label>
								<input type="text" class="form-control">
							</div>

							<div class="form-group">
								<label>Rectifier Capacity</label>
								<input type="text" class="form-control">
							</div>

							<div class="form-group">
								<label>Voltage Input</label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="card-footer">
							<button type="button" class="next-btn btn btn-success float-right">Next</button>
							<button type="button" class="previous-btn btn btn-secondary float-left">Previous</button>
						</div>
					</div>
				</div>

				<div class="step step-3">
					<div class="card">
						<div class="card-header text-white bg-info">Visual Check - 1.1 System</div>
						<div class="card-body">
							<div class="form-group">
								<label>1. Rack Type - Outdoor :</label>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Rack Dimension (l x w x h - mm)</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label>2. Name Plate :</label>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Telkomsel Name Plate</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Vendor Name Plate</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label>3. Incoming AC Distribution :</label>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Incoming AC cable type & size</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>MBC Brand</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions5" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions5" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>MCB Type</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions6" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions6" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>MCB Rate (Amp)</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions7" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions7" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label>4. Rectifier Module Distribution :</label>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>MBC Brand</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions8" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions8" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>MCB Type</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions9" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions9" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>MCB Rate (Amp)</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions10" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions10" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label>5. Battery Distribution :</label>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>MCB / NH-Fuse Brand</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions11" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions11" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>MCB / NH-Fuse Type</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions12" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions12" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>MCB / NH-Fuse Rate (Amp)</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions13" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions13" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>MCB / NH-Fuse Quantity</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions14" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions14" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label>6. Load Distribution :</label>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>MBC Brand</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions15" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions15" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>MCB Type</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions16" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions16" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>MCB Rate (Amp) x Quantity…..[1]</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions17" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions17" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>MCB Rate (Amp) x Quantity…..[2]</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions18" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions18" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>MCB Rate (Amp) x Quantity…..[3]</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions19" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions19" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label>7. Incoming Arrester :</label>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Arrester Brand</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions20" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions20" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Arrester Type</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions21" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions21" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label>8. Subrack System Module :</label>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Subrack Quantity</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions22" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions22" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>S/N Subrack #1</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions23" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions23" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>S/N Subrack #2</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions24" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions24" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>S/N Subrack #3</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions25" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions25" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label>9. Battery Rack Type (separated) :</label>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Rack dimension (l x w x h - mm)</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions26" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions26" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Capacity per Rack (bank & block)</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions27" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions27" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Battery Rack Quantity</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions28" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions28" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

							</div>

							<div class="form-group">
								<label>10. Battery Security system :</label>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Battery Cage</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions29" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions29" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Limit switch alarm</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions30" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions30" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

							</div>

							<div class="form-group">
								<label>11. DDF for Alarm :</label>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>DDF wiring/connection</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions31" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions31" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>DDF Alarm labeling</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions32" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions32" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>

						<div class="card-footer">
							<button type="button" class="next-btn btn btn-success float-right">Next</button>
							<button type="button" class="previous-btn btn btn-secondary float-left">Previous</button>
						</div>
					</div>
				</div>

				<div class="step step-4">
					<div class="card">
						<div class="card-header text-white bg-info">Visual Check - 1.2 Monitor & Control Card</div>
						<div class="card-body">
							<div class="form-group">
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Monitor & Control Card Type</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions33" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions33" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Serial number of Monitor & Control Card</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions34" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions34" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<button type="button" class="next-btn btn btn-success float-right">Next</button>
							<button type="button" class="previous-btn btn btn-secondary float-left">Previous</button>
						</div>
					</div>
				</div>

				<div class="step step-5">
					<div class="card">
						<div class="card-header text-white bg-info">Visual Check - 1.3 Battery</div>
						<div class="card-body">
							<div class="form-group">
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Battery Brand</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions35" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions35" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Battery Type</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions36" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions36" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Total Bank Battery</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions37" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions37" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Battery physical Condition</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions38" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions38" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Battery S/N Label</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions39" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions39" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Battery Bank Label</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions40" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions40" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label>Serial Number Battery</label>
									<div class="row">
										<div class="col-6">
											<div class="form-group">
												<label>Battery 1 S/N :</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label>Bank :</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-6">
											<div class="form-group">
												<label>Battery 2 S/N :</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label>Bank :</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-6">
											<div class="form-group">
												<label>Battery 3 S/N :</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label>Bank :</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-6">
											<div class="form-group">
												<label>Battery 4 S/N :</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label>Bank :</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-6">
											<div class="form-group">
												<label>Battery 5 S/N :</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label>Bank :</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>

								</div>

							</div>
						</div>
						<div class="card-footer">
							<button type="button" class="next-btn btn btn-success float-right">Next</button>
							<button type="button" class="previous-btn btn btn-secondary float-left">Previous</button>
						</div>
					</div>
				</div>

				<div class="step step-6">
					<div class="card">
						<div class="card-header text-white bg-info">Visual Check - 1.4 Rectifier Module</div>
						<div class="card-body">
							<div class="form-group">
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Rectifier Module Brand</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions41" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions41" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Rectifier Module Brand</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions42" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions42" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Rectifier Module Type</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions43" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions43" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Module Capacity (Watt @ 48 Vdc)</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions44" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions44" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label>Serial Number module rectifier</label>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Rectifier 1 S/N :</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Phase :</label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Rectifier 2 S/N :</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Phase :</label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Rectifier 3 S/N :</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Phase :</label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Rectifier 4 S/N :</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Phase :</label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Rectifier 5 S/N :</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Phase :</label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="card-footer">
							<button type="button" class="next-btn btn btn-success float-right">Next</button>
							<button type="button" class="previous-btn btn btn-secondary float-left">Previous</button>
						</div>
					</div>
				</div>

				<div class="step step-7">
					<div class="card">
						<div class="card-header text-white bg-info">Visual Check - 1.5 Installation</div>
						<div class="card-body">
							<div class="form-group">
								<label>1. Rectifier</label>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Installation AC cable to rectifier</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions45" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions45" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Installation Alarm cable to DDF Rectifier</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions46" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions46" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Labelling of DDF Alarm</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions47" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions47" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Installation Blank Panel Module</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions48" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions48" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label>2. Battery</label>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Installation Battery Position</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions49" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions49" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Installation Battery Bank Cable</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions50" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions50" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Installation Battery Temperature Sensor</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions51" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions51" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label>3. SDPAC</label>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Installation AC cable to rectifier</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions52" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions52" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Arrester Installation</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions53" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions53" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label>4. Grounding</label>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Grounding cable size (mm)</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions54" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions54" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Installation grounding cable to Rectifier</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions55" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions55" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="card-footer">
							<button type="button" class="next-btn btn btn-success float-right">Next</button>
							<button type="button" class="previous-btn btn btn-secondary float-left">Previous</button>
						</div>
					</div>
				</div>

				<div class="step step-8">
					<div class="card">
						<div class="card-header text-white bg-info">Functional - 2.1 Monitor & Control Card</div>
						<div class="card-body">
							<div class="form-group">
								<label>1. Current Display</label>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Rectifier</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions56" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions56" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Load</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions57" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions57" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Battery</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions58" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions58" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label>2. Current Measurement</label>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Load</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions59" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions59" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Battery</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions60" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions60" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label>3. Bus Voltage Display</label>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Bus Voltage Measurement</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions61" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions61" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label>4. AC Voltage Display</label>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>V phase - Netral</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions62" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions62" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label>5. AC Voltage Measurement</label>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>V phase R – Netral</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions63" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions63" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>V phase S – Netral</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions64" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions64" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>V phase T – Netral</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions65" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions65" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>V Netral – Ground</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions66" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions66" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label>6. LVD Setting</label>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>LVD1 Disconnect (LVLD)</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions67" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions67" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>LVD1 Reconnect (LVLD)</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions68" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions68" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>LVD2 Disconnect (LVBD)</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions69" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions69" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>LVD2 Reconnect (LVBD)</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions70" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions70" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label>7. Alarm Setting</label>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>High Float</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions71" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions71" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Low Float</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions72" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions72" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Low Load</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions73" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions73" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>AC Fail Alarm</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions74" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions74" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Partial AC Fail</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions75" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions75" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Battery Fuse Fail</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions76" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions76" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Rectifier Fail Alarm</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions77" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions77" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Battery high Temperature</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions78" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions78" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label>8. Alarm Relay Mapping & Simulation</label>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Relay #1</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions79" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions79" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Relay #2</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions80" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions80" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Relay #3</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions81" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions81" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Relay #4</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions82" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions82" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Relay #5</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions83" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions83" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Relay #6</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions84" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions84" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Relay #7</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions85" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions85" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Relay #8</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions86" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions86" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Relay #9</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<div><label>Condition</label></div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions87" id="inlineRadio1" value="option1">
												<label class="form-check-label" for="inlineRadio1">OK</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="inlineRadioOptions87" id="inlineRadio2" value="option2">
												<label class="form-check-label" for="inlineRadio2">NOK</label>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="card-footer">
							<button type="button" class="next-btn btn btn-success float-right">Next</button>
							<button type="button" class="previous-btn btn btn-secondary float-left">Previous</button>
						</div>
					</div>
				</div>

				<div class="step step-9">
					<div class="card">
						<div class="card-header text-white bg-info">General Information Photo</div>
						<div class="card-body">
							<div class="form-group">
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Site Information</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Site Access</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Site - Front View</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Site - Rear View</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Site - Left View</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Site - Right View</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>


							</div>
						</div>
						<div class="card-footer">
							<button type="button" class="next-btn btn btn-success float-right">Next</button>
							<button type="button" class="previous-btn btn btn-secondary float-left">Previous</button>
						</div>
					</div>
				</div>

				<div class="step step-10">
					<div class="card">
						<div class="card-header text-white bg-info">New Foundation Installation Photo</div>
						<div class="card-body">
							<div class="form-group">
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Before Installation</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Installation #1</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Installation #2</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Installation #3</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Installation #4</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Installation #5</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Installation #6</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Installation #7</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Foundation Wide Measurement</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Foundation Height Measurement</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Foundation Long Measurement</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>After Installation</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="card-footer">
							<button type="button" class="next-btn btn btn-success float-right">Next</button>
							<button type="button" class="previous-btn btn btn-secondary float-left">Previous</button>
						</div>
					</div>
				</div>

				<div class="step step-11">
					<div class="card">
						<div class="card-header text-white bg-info">Site Layout</div>
						<div class="card-body">
							<div class="form-group">
								<label>Site Layout</label>
								<input type="file" class="dropify">
							</div>
						</div>
						<div class="card-footer">
							<button type="button" class="next-btn btn btn-success float-right">Next</button>
							<button type="button" class="previous-btn btn btn-secondary float-left">Previous</button>
						</div>
					</div>
				</div>

				<div class="step step-12">
					<div class="card">
						<div class="card-header text-white bg-info">Rectifier Installation Photo</div>
						<div class="card-body">
							<div class="form-group">
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Base Frame Before Installation</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Base Frame After Installation</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Main Rack</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Slave Rack</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>PLN KWH - Before</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>PLN KWH - After</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>ACPDB - Before</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>ACPDB - After</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>MCB ACPDB - Before</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>MCB ACPDB - After</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Rectifier Front</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Main MCB AC Input Rectifier</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>MCB DC Distribution</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Controller Module</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Module #1</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Module #2</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Module #3</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Module #4</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>DC Cable Connection – Main Rack</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>DC Cable Label – Main Rack</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>DC Cable Connection – Slave Rack</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>DC Cable Label – Slave Rack</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>GND Connection #1</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>GND Connection #2</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>GND Connection #3</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>GND Connection #4</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Laying Cable #1</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Laying Cable #2</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Laying Cable #3</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Laying Cable #4</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Fan – Main Rack</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Fan – Slave rack</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Lamp – Main Rack</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Lamp – Slave Rack</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Panel Distribution CDC</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>AC Measurement  (R – S)</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>AC Measurement  (S – T)</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>AC Measurement  (R – T)</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>AC Measurement  (R – N)</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>AC Measurement  (S – N)</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>AC Measurement  (T – N)</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>AC Measurement  (N – G)</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>DC Output/Distribution Measurement</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>AC Output Measurement</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Controller Module Setting #1</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Controller Module Setting #2</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Controller Module Setting #3</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Controller Module Setting #4</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Alarm Connection #1</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Alarm Connection #2</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Alarm Label #1</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Alarm Label #2</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Battery Rack - Front View</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Battery Bank Installation #1</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Battery Bank Installation #2</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Battery Bank Installation #3</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Battery Bank #1 DC Measurement</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Battery Bank #2 DC Measurement</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Battery Bank #3 DC Measurement</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Battery Label</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Battery Main Bar installation</label>
											<input type="file" class="dropify">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Battery MCB/Fuse</label>
											<input type="file" class="dropify">
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="card-footer">
							<button type="button" class="next-btn btn btn-success float-right">Next</button>
							<button type="button" class="previous-btn btn btn-secondary float-left">Previous</button>
						</div>
					</div>
				</div>

				<div class="step step-13">
					<div class="card">
						<div class="card-header text-white bg-info">Site Layout</div>
						<div class="card-body">
							<div class="form-group">
								<label>Site Layout</label>
								<input type="file" class="dropify">
							</div>
						</div>
						<div class="card-footer">
							<button type="submit" class="btn btn-success float-right">Submit</button>
							<button type="button" class="previous-btn btn btn-secondary float-left">Previous</button>
						</div>
					</div>
				</div>

			</form>
		</div>
	</div>
</div>

<script type="text/javascript">

const steps = Array.from(document.querySelectorAll("form .step"));
const nextBtn = document.querySelectorAll("form .next-btn");
const prevBtn = document.querySelectorAll("form .previous-btn");
const form = document.querySelector("form");

nextBtn.forEach((button) => {
	button.addEventListener("click", () => {
		changeStep("next");
	});
});
prevBtn.forEach((button) => {
	button.addEventListener("click", () => {
		changeStep("prev");
	});
});

form.addEventListener("submit", (e) => {
	e.preventDefault();
	const inputs = [];
	form.querySelectorAll("input").forEach((input) => {
		const { name, value } = input;
		inputs.push({ name, value });
	});
	console.log(inputs);
	form.reset();
});

function changeStep(btn) {
	let index = 0;
	const active = document.querySelector(".active");
	index = steps.indexOf(active);
	steps[index].classList.remove("active");
	if (btn === "next") {
		index++;
	} else if (btn === "prev") {
		index--;
	}
	steps[index].classList.add("active");
}

</script>

<script src="assets/bundles/lib.vendor.bundle.js"></script>
<script src="assets/plugins/dropify/js/dropify.min.js"></script>
<script src="assets/js/dropify.js"></script>

@endsection