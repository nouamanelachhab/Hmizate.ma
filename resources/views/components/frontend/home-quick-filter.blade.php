<div id="quickfilter-wrapper">
    <nav class="quickfilter-tabs">
	    <div class="nav nav-tabs" id="quickfilter-nav-tabs" role="tablist">
		    <a class="nav-link active" id="nav-hotels-tab" data-bs-toggle="tab" href="#nav-hotels" role="tab" aria-controls="nav-hotels" aria-selected="true"><span class="me-2"><i class="fas fa-hotel"></i></span> {{ __('hotels') }}</a>
			<a class="nav-link" id="nav-others-tab" data-bs-toggle="tab" href="#nav-others" role="tab" aria-controls="nav-others" aria-selected="false"><span class="me-2"><i class="fas fa-sitemap"></i></span> {{ __('others') }}</a>
		</div>
	</nav>
	<form class="quickfilter-form" method="POST" action="">
	    <div class="tab-content">
		    <div class="tab-pane fade show active" id="nav-hotels" role="tabpanel" aria-labelledby="nav-hotels-tab">
			    <div class="preloader p-3 bg-danger text-center text-white">
				    <div class="spinner-border" role="status"></div>
				</div>
				<fieldset class="quickfilter-fieldset p-3">
				    <div class="row row-cols-lg-5 gx-0">
					    <div class="col-12 col-md-6 filter-column-a">
					        <div class="filter-input h-100 mb-lg-0 mb-3">
						        <input type="text" id="destination" class="form-control" placeholder="{{ __('city, region') }}" required>
						        <small for="destination" class="form-label">{{ __('destination') }}</small>
						    </div>
					    </div>{{-- End Column --}}
				        <div class="col-12 col-md-6 filter-column-a">
					        <div class="filter-input h-100 mb-lg-0 mb-3">
						        <input type="text" id="check-in-date" class="form-control" placeholder="{{ __('select date') }}" required>
						        <small for="check-in-date" class="form-label">{{ __('check-in') }}</small>
					        </div>
					    </div>{{-- End Column --}}
				        <div class="col-12 col-md-6 filter-column-a">
					        <div class="filter-input h-100 mb-lg-0 mb-3">
							    <input type="text" id="check-out-date" class="form-control" placeholder="{{ __('select date') }}" required>
						        <small for="check-out-date" class="form-label">{{ __('check-out') }}</small>
					        </div>
					    </div>{{-- End Column --}}
				        <div class="col-12 col-md-6 filter-column-a">
					        <div class="filter-input h-100 mb-lg-0 mb-3">
						        <input type="number" id="travelers" class="form-control" placeholder="{{ __('travelers') }}" required>
						        <small for="travelers" class="form-label">{{ __('how many?') }}</small>
					        </div>
					    </div>{{-- End Column --}}
				        <div class="col-12 filter-column-a">
					        <div class="filter-button">
						        <button type="submit" id="search-btn" class="btn search-btn btn-lg px-5 py-3 float-xl-end w-100 h-100"><span class="me-1"><i class="fas fa-search"></i></span> {{ __('search') }}</button>
					        </div>
					    </div>{{-- End Column --}}
					</div>{{-- End Row --}}
				</fieldset>
			</div>{{-- End Tab Pane --}}
			<div class="tab-pane fade" id="nav-others" role="tabpanel" aria-labelledby="nav-others-tab">
			    <div class="preloader p-3 bg-danger text-center text-white">
				    <div class="spinner-border" role="status"></div>
				</div>
				<fieldset class="quickfilter-fieldset p-3">
				    <div class="row row-cols-lg-3 gx-0">
					    <div class="col-12 filter-column-b">
					        <div class="filter-input h-100 mb-lg-0 mb-3">
						        <input type="text" id="destination" class="form-control" placeholder="{{ __('city, region') }}" required>
						        <small for="destination" class="form-label">{{ __('destination') }}</small>
						    </div>
					    </div>{{-- End Column --}}
				        <div class="col-12 filter-column-b">
						    <div class="dropdown h-100 mb-lg-0 mb-3">
						        <button class="btn btn-secondary w-100" type="button" id="dropdownMenuSelectBudget" data-bs-toggle="dropdown" aria-expanded="false">
							        <span>{{ __('budget') }}</span> <small class="form-label">{{ __('select your budget') }}</small>
							    </button>
							    <div class="dropdown-menu budget-dropdown-menu border-0 w-100" aria-labelledby="dropdownMenuSelectBudget">
							        <div class="budget-dropdown-item">
								        <div class="budget-range-slider">
										    <div class="budget-slider-percentage d-flex justify-content-between">
										        <small class="badge budget-slider-min-label"><span id="budget-slider-min-label"></span> DH</small>
											    <small class="badge budget-slider-bet-label"><span id="budget-slider-bet-label"></span> DH</small>
											    <small class="badge budget-slider-max-label">2000 DH</small>
										    </div>
										    <div id="budget-range-slider-field">
										        <input type="text" id="budget-filter"
											        data-slider-min="100"
											        data-slider-max="2000"
											        data-slider-value="[100,1000]"
											        data-slider-tooltip="hide" />
										    </div>
									    </div>
								    </div>
							    </div>
						    </div>
					    </div>{{-- End Column --}}
				        <div class="col-12 filter-column-b">
					        <div class="filter-button">
						        <button type="submit" id="search-btn" class="btn search-btn btn-lg px-5 py-3 float-xl-end w-100 h-100"><span class="me-1"><i class="fas fa-search"></i></span> {{ __('search') }}</button>
					        </div>
					    </div>{{-- End Column --}}
					</div>{{-- End Row --}}
				</fieldset>
			</div>{{-- End Tab Pane --}}
		</div>{{-- End Tab Content --}}
	</form>
</div>