<section id="locations-section" class="py-5 bg-brighten">
    <div class="container-xl">
	    <div class="row gx-xl-5 gx-lg-3">
		    <div class="col-xl-4 col-lg-4">
			    <div class="list-group" id="list-tab" role="tablist">
				    <li class="list-group-item px-4 py-4"><h4 class="text-danger"><span class="me-2"><i class="fas fa-city"></i></span> {{ __('locations') }} :</h4></li>
					<a class="list-group-item list-group-item-action active px-4 py-3" id="list-casablanca-list" data-bs-toggle="list" href="#list-casablanca" role="tab" aria-controls="casablanca">
					    <span class="me-3"><i class="far fa-building fs-4"></i></span> {{ __('casablanca') }}
					</a>
					<a class="list-group-item list-group-item-action px-4 py-3" id="list-rabat-list" data-bs-toggle="list" href="#list-rabat" role="tab" aria-controls="rabat">
					    <span class="me-3"><i class="far fa-building fs-4"></i></span> {{ __('rabat') }}
					</a>
					<a class="list-group-item list-group-item-action px-4 py-3" id="list-marrakech-list" data-bs-toggle="list" href="#list-marrakech" role="tab" aria-controls="marrakech">
					    <span class="me-3"><i class="far fa-building fs-4"></i></span> {{ __('marrakech') }}
					</a>
					<a class="list-group-item list-group-item-action px-4 py-3" id="list-tanger-list" data-bs-toggle="list" href="#list-tanger" role="tab" aria-controls="tanger">
					    <span class="me-3"><i class="far fa-building fs-4"></i></span> {{ __('tanger') }}
					</a>
					<a class="list-group-item list-group-item-action px-4 py-3" id="list-agadir-list" data-bs-toggle="list" href="#list-agadir" role="tab" aria-controls="agadir">
					    <span class="me-3"><i class="far fa-building fs-4"></i></span> {{ __('agadir') }}
					</a>
					<a href="#" class="list-group-item list-group-item-action px-4 py-4" id="list-agadir-list">
					    {{ __('all cities') }} <span class="float-end"><i class="fas fa-arrow-right"></i></span>
					</a>
				</div>
			</div>{{-- End Column --}}
			<div class="col-xl-8 col-lg-8">
			    <div class="tab-content" id="nav-tabContent">
				    <div class="tab-pane fade show active" id="list-casablanca" role="tabpanel" aria-labelledby="list-casablanca-list">
					    <div class="tab-pane-content">
						    <div class="row mb-5">
							    <div class="col">
								    <ul class="list-inline">
									    <li class="list-inline-item text-capitalize text-muted me-4"><span class="me-1"><i class="fas fa-eye"></i></span> {{ __('view') }}</li>
										<li class="list-inline-item"><span><i class="fas fa-border-all"></i></span></li>
										<li class="list-inline-item"><span><i class="fas fa-list"></i></span></li>
									</ul>
								</div>{{-- End Column --}}
								<div class="col">
								    <ul class="list-inline">
									    <li class="list-inline-item text-capitalize text-muted me-4"><span class="me-1"><i class="far fa-clock"></i></span> {{ __('time left') }} <span class="ms-1"><i class="fas fa-chevron-down"></i></span></li>
										<li class="list-inline-item text-capitalize text-muted me-4"><span class="me-1"><i class="far fa-star"></i></span> {{ __('ratings') }} <span class="ms-1"><i class="fas fa-chevron-down"></i></span></li>
										<li class="list-inline-item text-capitalize text-muted"><span class="me-1"><i class="far fa-calendar"></i></span> {{ __('date') }} <span class="ms-1"><i class="fas fa-chevron-down"></i></span></li>
									</ul>
								</div>{{-- End Column --}}
							</div>{{-- End Row --}}
							
							<div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
							    <div class="col">
								    <article class="card location-card border-0">
									    <a href="" class="card-img-link"><img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1525&q=80" alt="" class="card-img-top img-fluid overflow-hidden"></a>
										<div class="d-flex align-items-center card-body shadow-sm">
										    <div class="w-100">
							                    <ul class="list-inline list-inline location-feeds-top mb-3">
								                    <li class="list-inline-item">
								                        <small>
						                                    <span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
									                    </small>
								                    </li>
								                    <li class="list-inline-item"><small>22 reviews</small></li>
								                    <li class="list-inline-item"><small>Expire Date : <span class="text-danger">02/02/2020</span></small></li>
								                </ul>
								                <h5 class="card-title mb-0"><a href="" class="card-title-link text-capitalize fw-bold">suite deluxe supéreure 25%</a></h5>
								                <ul class="list-inline location-feeds-bottom mt-3 mb-4">
				                                    <li class="list-inline-item">
					                                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-map-marker"></i></span> Casablanca</small>
					                                </li>
				                                    <li class="list-inline-item">
					                                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-tag"></i></span> Hotel Ifran Place</small>
					                                </li>
								                </ul>
												<div class="row">
												    <div class="col-lg-6 col text-start">
									                    <div class="location-posted-time">
										                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-clock"></i></span> 8 Hours</small>
										                </div>
									                </div>{{-- End Column --}}
									                <div class="col-lg-6 col text-end">
									                    <div class="location-operations">
										                    <p class="h6 location-operations-subprice mt-0 mb-0 d-inline"><del>60 DH</del></p>
											                <p class="h4 location-operations-price mb-0 fw-bold d-inline">49.00 DH</p>
										                </div>
									                </div>{{-- End Column --}}
												</div>{{-- End Row --}}
											</div>
										</div>
									</article>
								</div>{{-- End Column --}}
							    <div class="col">
								    <article class="card location-card border-0">
									    <a href="" class="card-img-link"><img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1525&q=80" alt="" class="card-img-top img-fluid overflow-hidden"></a>
										<div class="d-flex align-items-center card-body shadow-sm">
										    <div class="w-100">
							                    <ul class="list-inline list-inline location-feeds-top mb-3">
								                    <li class="list-inline-item">
								                        <small>
						                                    <span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
									                    </small>
								                    </li>
								                    <li class="list-inline-item"><small>22 reviews</small></li>
								                    <li class="list-inline-item"><small>Expire Date : <span class="text-danger">02/02/2020</span></small></li>
								                </ul>
								                <h5 class="card-title mb-0"><a href="" class="card-title-link text-capitalize fw-bold">suite deluxe supéreure 25%</a></h5>
								                <ul class="list-inline location-feeds-bottom mt-3 mb-4">
				                                    <li class="list-inline-item">
					                                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-map-marker"></i></span> Casablanca</small>
					                                </li>
				                                    <li class="list-inline-item">
					                                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-tag"></i></span> Hotel Ifran Place</small>
					                                </li>
								                </ul>
												<div class="row">
												    <div class="col-lg-6 col text-start">
									                    <div class="location-posted-time">
										                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-clock"></i></span> 8 Hours</small>
										                </div>
									                </div>{{-- End Column --}}
									                <div class="col-lg-6 col text-end">
									                    <div class="location-operations">
										                    <p class="h6 location-operations-subprice mt-0 mb-0 d-inline"><del>60 DH</del></p>
											                <p class="h4 location-operations-price mb-0 fw-bold d-inline">49.00 DH</p>
										                </div>
									                </div>{{-- End Column --}}
												</div>{{-- End Row --}}
											</div>
										</div>
									</article>
								</div>{{-- End Column --}}
							</div>{{-- End Row --}}
						    
							<div class="col-12">
							    <x-frontend.pagination />
							</div>{{-- End Column --}}
						</div>{{-- End Tab Pane Content --}}
					</div>{{-- End Tab Pane --}}
					<div class="tab-pane fade" id="list-rabat" role="tabpanel" aria-labelledby="list-rabat-list">
					    <div class="tab-pane-content">
						    <div class="row mb-5">
							    <div class="col">
								    <ul class="list-inline">
									    <li class="list-inline-item text-capitalize text-muted me-4"><span class="me-1"><i class="fas fa-eye"></i></span> {{ __('view') }}</li>
										<li class="list-inline-item"><span><i class="fas fa-border-all"></i></span></li>
										<li class="list-inline-item"><span><i class="fas fa-list"></i></span></li>
									</ul>
								</div>{{-- End Column --}}
								<div class="col">
								    <ul class="list-inline">
									    <li class="list-inline-item text-capitalize text-muted me-4"><span class="me-1"><i class="far fa-clock"></i></span> {{ __('time left') }} <span class="ms-1"><i class="fas fa-chevron-down"></i></span></li>
										<li class="list-inline-item text-capitalize text-muted me-4"><span class="me-1"><i class="far fa-star"></i></span> {{ __('ratings') }} <span class="ms-1"><i class="fas fa-chevron-down"></i></span></li>
										<li class="list-inline-item text-capitalize text-muted"><span class="me-1"><i class="far fa-calendar"></i></span> {{ __('date') }} <span class="ms-1"><i class="fas fa-chevron-down"></i></span></li>
									</ul>
								</div>{{-- End Column --}}
							</div>{{-- End Row --}}
							
							<div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
							    <div class="col">
								    <article class="card location-card border-0">
									    <a href="" class="card-img-link"><img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1525&q=80" alt="" class="card-img-top img-fluid overflow-hidden"></a>
										<div class="d-flex align-items-center card-body shadow-sm">
										    <div class="w-100">
							                    <ul class="list-inline list-inline location-feeds-top mb-3">
								                    <li class="list-inline-item">
								                        <small>
						                                    <span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
									                    </small>
								                    </li>
								                    <li class="list-inline-item"><small>22 reviews</small></li>
								                    <li class="list-inline-item"><small>Expire Date : <span class="text-danger">02/02/2020</span></small></li>
								                </ul>
								                <h5 class="card-title mb-0"><a href="" class="card-title-link text-capitalize fw-bold">suite deluxe supéreure 25%</a></h5>
								                <ul class="list-inline location-feeds-bottom mt-3 mb-4">
				                                    <li class="list-inline-item">
					                                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-map-marker"></i></span> Casablanca</small>
					                                </li>
				                                    <li class="list-inline-item">
					                                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-tag"></i></span> Hotel Ifran Place</small>
					                                </li>
								                </ul>
												<div class="row">
												    <div class="col-lg-6 col text-start">
									                    <div class="location-posted-time">
										                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-clock"></i></span> 8 Hours</small>
										                </div>
									                </div>{{-- End Column --}}
									                <div class="col-lg-6 col text-end">
									                    <div class="location-operations">
										                    <p class="h6 location-operations-subprice mt-0 mb-0 d-inline"><del>60 DH</del></p>
											                <p class="h4 location-operations-price mb-0 fw-bold d-inline">49.00 DH</p>
										                </div>
									                </div>{{-- End Column --}}
												</div>{{-- End Row --}}
											</div>
										</div>
									</article>
								</div>{{-- End Column --}}
							    <div class="col">
								    <article class="card location-card border-0">
									    <a href="" class="card-img-link"><img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1525&q=80" alt="" class="card-img-top img-fluid overflow-hidden"></a>
										<div class="d-flex align-items-center card-body shadow-sm">
										    <div class="w-100">
							                    <ul class="list-inline list-inline location-feeds-top mb-3">
								                    <li class="list-inline-item">
								                        <small>
						                                    <span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
									                    </small>
								                    </li>
								                    <li class="list-inline-item"><small>22 reviews</small></li>
								                    <li class="list-inline-item"><small>Expire Date : <span class="text-danger">02/02/2020</span></small></li>
								                </ul>
								                <h5 class="card-title mb-0"><a href="" class="card-title-link text-capitalize fw-bold">suite deluxe supéreure 25%</a></h5>
								                <ul class="list-inline location-feeds-bottom mt-3 mb-4">
				                                    <li class="list-inline-item">
					                                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-map-marker"></i></span> Casablanca</small>
					                                </li>
				                                    <li class="list-inline-item">
					                                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-tag"></i></span> Hotel Ifran Place</small>
					                                </li>
								                </ul>
												<div class="row">
												    <div class="col-lg-6 col text-start">
									                    <div class="location-posted-time">
										                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-clock"></i></span> 8 Hours</small>
										                </div>
									                </div>{{-- End Column --}}
									                <div class="col-lg-6 col text-end">
									                    <div class="location-operations">
										                    <p class="h6 location-operations-subprice mt-0 mb-0 d-inline"><del>60 DH</del></p>
											                <p class="h4 location-operations-price mb-0 fw-bold d-inline">49.00 DH</p>
										                </div>
									                </div>{{-- End Column --}}
												</div>{{-- End Row --}}
											</div>
										</div>
									</article>
								</div>{{-- End Column --}}
							</div>{{-- End Row --}}
						    
							<div class="col-12">
							    <x-frontend.pagination />
							</div>{{-- End Column --}}
						</div>{{-- End Tab Pane Content --}}
					</div>{{-- End Tab Pane --}}
					<div class="tab-pane fade" id="list-marrakech" role="tabpanel" aria-labelledby="list-marrakech-list">
					    <div class="tab-pane-content">
						    <div class="row mb-5">
							    <div class="col">
								    <ul class="list-inline">
									    <li class="list-inline-item text-capitalize text-muted me-4"><span class="me-1"><i class="fas fa-eye"></i></span> {{ __('view') }}</li>
										<li class="list-inline-item"><span><i class="fas fa-border-all"></i></span></li>
										<li class="list-inline-item"><span><i class="fas fa-list"></i></span></li>
									</ul>
								</div>{{-- End Column --}}
								<div class="col">
								    <ul class="list-inline">
									    <li class="list-inline-item text-capitalize text-muted me-4"><span class="me-1"><i class="far fa-clock"></i></span> {{ __('time left') }} <span class="ms-1"><i class="fas fa-chevron-down"></i></span></li>
										<li class="list-inline-item text-capitalize text-muted me-4"><span class="me-1"><i class="far fa-star"></i></span> {{ __('ratings') }} <span class="ms-1"><i class="fas fa-chevron-down"></i></span></li>
										<li class="list-inline-item text-capitalize text-muted"><span class="me-1"><i class="far fa-calendar"></i></span> {{ __('date') }} <span class="ms-1"><i class="fas fa-chevron-down"></i></span></li>
									</ul>
								</div>{{-- End Column --}}
							</div>{{-- End Row --}}
							
							<div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
							    <div class="col">
								    <article class="card location-card border-0">
									    <a href="" class="card-img-link"><img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1525&q=80" alt="" class="card-img-top img-fluid overflow-hidden"></a>
										<div class="d-flex align-items-center card-body shadow-sm">
										    <div class="w-100">
							                    <ul class="list-inline list-inline location-feeds-top mb-3">
								                    <li class="list-inline-item">
								                        <small>
						                                    <span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
									                    </small>
								                    </li>
								                    <li class="list-inline-item"><small>22 reviews</small></li>
								                    <li class="list-inline-item"><small>Expire Date : <span class="text-danger">02/02/2020</span></small></li>
								                </ul>
								                <h5 class="card-title mb-0"><a href="" class="card-title-link text-capitalize fw-bold">suite deluxe supéreure 25%</a></h5>
								                <ul class="list-inline location-feeds-bottom mt-3 mb-4">
				                                    <li class="list-inline-item">
					                                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-map-marker"></i></span> Casablanca</small>
					                                </li>
				                                    <li class="list-inline-item">
					                                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-tag"></i></span> Hotel Ifran Place</small>
					                                </li>
								                </ul>
												<div class="row">
												    <div class="col-lg-6 col text-start">
									                    <div class="location-posted-time">
										                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-clock"></i></span> 8 Hours</small>
										                </div>
									                </div>{{-- End Column --}}
									                <div class="col-lg-6 col text-end">
									                    <div class="location-operations">
										                    <p class="h6 location-operations-subprice mt-0 mb-0 d-inline"><del>60 DH</del></p>
											                <p class="h4 location-operations-price mb-0 fw-bold d-inline">49.00 DH</p>
										                </div>
									                </div>{{-- End Column --}}
												</div>{{-- End Row --}}
											</div>
										</div>
									</article>
								</div>{{-- End Column --}}
							    <div class="col">
								    <article class="card location-card border-0">
									    <a href="" class="card-img-link"><img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1525&q=80" alt="" class="card-img-top img-fluid overflow-hidden"></a>
										<div class="d-flex align-items-center card-body shadow-sm">
										    <div class="w-100">
							                    <ul class="list-inline list-inline location-feeds-top mb-3">
								                    <li class="list-inline-item">
								                        <small>
						                                    <span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
									                    </small>
								                    </li>
								                    <li class="list-inline-item"><small>22 reviews</small></li>
								                    <li class="list-inline-item"><small>Expire Date : <span class="text-danger">02/02/2020</span></small></li>
								                </ul>
								                <h5 class="card-title mb-0"><a href="" class="card-title-link text-capitalize fw-bold">suite deluxe supéreure 25%</a></h5>
								                <ul class="list-inline location-feeds-bottom mt-3 mb-4">
				                                    <li class="list-inline-item">
					                                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-map-marker"></i></span> Casablanca</small>
					                                </li>
				                                    <li class="list-inline-item">
					                                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-tag"></i></span> Hotel Ifran Place</small>
					                                </li>
								                </ul>
												<div class="row">
												    <div class="col-lg-6 col text-start">
									                    <div class="location-posted-time">
										                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-clock"></i></span> 8 Hours</small>
										                </div>
									                </div>{{-- End Column --}}
									                <div class="col-lg-6 col text-end">
									                    <div class="location-operations">
										                    <p class="h6 location-operations-subprice mt-0 mb-0 d-inline"><del>60 DH</del></p>
											                <p class="h4 location-operations-price mb-0 fw-bold d-inline">49.00 DH</p>
										                </div>
									                </div>{{-- End Column --}}
												</div>{{-- End Row --}}
											</div>
										</div>
									</article>
								</div>{{-- End Column --}}
							</div>{{-- End Row --}}
						    
							<div class="col-12">
							    <x-frontend.pagination />
							</div>{{-- End Column --}}
						</div>{{-- End Tab Pane Content --}}
					</div>{{-- End Tab Pane --}}
					<div class="tab-pane fade" id="list-tanger" role="tabpanel" aria-labelledby="list-tanger-list">
					    <div class="tab-pane-content">
						    <div class="row mb-5">
							    <div class="col">
								    <ul class="list-inline">
									    <li class="list-inline-item text-capitalize text-muted me-4"><span class="me-1"><i class="fas fa-eye"></i></span> {{ __('view') }}</li>
										<li class="list-inline-item"><span><i class="fas fa-border-all"></i></span></li>
										<li class="list-inline-item"><span><i class="fas fa-list"></i></span></li>
									</ul>
								</div>{{-- End Column --}}
								<div class="col">
								    <ul class="list-inline">
									    <li class="list-inline-item text-capitalize text-muted me-4"><span class="me-1"><i class="far fa-clock"></i></span> {{ __('time left') }} <span class="ms-1"><i class="fas fa-chevron-down"></i></span></li>
										<li class="list-inline-item text-capitalize text-muted me-4"><span class="me-1"><i class="far fa-star"></i></span> {{ __('ratings') }} <span class="ms-1"><i class="fas fa-chevron-down"></i></span></li>
										<li class="list-inline-item text-capitalize text-muted"><span class="me-1"><i class="far fa-calendar"></i></span> {{ __('date') }} <span class="ms-1"><i class="fas fa-chevron-down"></i></span></li>
									</ul>
								</div>{{-- End Column --}}
							</div>{{-- End Row --}}
							
							<div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
							    <div class="col">
								    <article class="card location-card border-0">
									    <a href="" class="card-img-link"><img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1525&q=80" alt="" class="card-img-top img-fluid overflow-hidden"></a>
										<div class="d-flex align-items-center card-body shadow-sm">
										    <div class="w-100">
							                    <ul class="list-inline list-inline location-feeds-top mb-3">
								                    <li class="list-inline-item">
								                        <small>
						                                    <span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
									                    </small>
								                    </li>
								                    <li class="list-inline-item"><small>22 reviews</small></li>
								                    <li class="list-inline-item"><small>Expire Date : <span class="text-danger">02/02/2020</span></small></li>
								                </ul>
								                <h5 class="card-title mb-0"><a href="" class="card-title-link text-capitalize fw-bold">suite deluxe supéreure 25%</a></h5>
								                <ul class="list-inline location-feeds-bottom mt-3 mb-4">
				                                    <li class="list-inline-item">
					                                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-map-marker"></i></span> Casablanca</small>
					                                </li>
				                                    <li class="list-inline-item">
					                                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-tag"></i></span> Hotel Ifran Place</small>
					                                </li>
								                </ul>
												<div class="row">
												    <div class="col-lg-6 col text-start">
									                    <div class="location-posted-time">
										                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-clock"></i></span> 8 Hours</small>
										                </div>
									                </div>{{-- End Column --}}
									                <div class="col-lg-6 col text-end">
									                    <div class="location-operations">
										                    <p class="h6 location-operations-subprice mt-0 mb-0 d-inline"><del>60 DH</del></p>
											                <p class="h4 location-operations-price mb-0 fw-bold d-inline">49.00 DH</p>
										                </div>
									                </div>{{-- End Column --}}
												</div>{{-- End Row --}}
											</div>
										</div>
									</article>
								</div>{{-- End Column --}}
							    <div class="col">
								    <article class="card location-card border-0">
									    <a href="" class="card-img-link"><img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1525&q=80" alt="" class="card-img-top img-fluid overflow-hidden"></a>
										<div class="d-flex align-items-center card-body shadow-sm">
										    <div class="w-100">
							                    <ul class="list-inline list-inline location-feeds-top mb-3">
								                    <li class="list-inline-item">
								                        <small>
						                                    <span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
									                    </small>
								                    </li>
								                    <li class="list-inline-item"><small>22 reviews</small></li>
								                    <li class="list-inline-item"><small>Expire Date : <span class="text-danger">02/02/2020</span></small></li>
								                </ul>
								                <h5 class="card-title mb-0"><a href="" class="card-title-link text-capitalize fw-bold">suite deluxe supéreure 25%</a></h5>
								                <ul class="list-inline location-feeds-bottom mt-3 mb-4">
				                                    <li class="list-inline-item">
					                                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-map-marker"></i></span> Casablanca</small>
					                                </li>
				                                    <li class="list-inline-item">
					                                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-tag"></i></span> Hotel Ifran Place</small>
					                                </li>
								                </ul>
												<div class="row">
												    <div class="col-lg-6 col text-start">
									                    <div class="location-posted-time">
										                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-clock"></i></span> 8 Hours</small>
										                </div>
									                </div>{{-- End Column --}}
									                <div class="col-lg-6 col text-end">
									                    <div class="location-operations">
										                    <p class="h6 location-operations-subprice mt-0 mb-0 d-inline"><del>60 DH</del></p>
											                <p class="h4 location-operations-price mb-0 fw-bold d-inline">49.00 DH</p>
										                </div>
									                </div>{{-- End Column --}}
												</div>{{-- End Row --}}
											</div>
										</div>
									</article>
								</div>{{-- End Column --}}
							</div>{{-- End Row --}}
						    
							<div class="col-12">
							    <x-frontend.pagination />
							</div>{{-- End Column --}}
						</div>{{-- End Tab Pane Content --}}
					</div>{{-- End Tab Pane --}}
					<div class="tab-pane fade" id="list-agadir" role="tabpanel" aria-labelledby="list-agadir-list">
					    <div class="tab-pane-content">
						    <div class="row mb-5">
							    <div class="col">
								    <ul class="list-inline">
									    <li class="list-inline-item text-capitalize text-muted me-4"><span class="me-1"><i class="fas fa-eye"></i></span> {{ __('view') }}</li>
										<li class="list-inline-item"><span><i class="fas fa-border-all"></i></span></li>
										<li class="list-inline-item"><span><i class="fas fa-list"></i></span></li>
									</ul>
								</div>{{-- End Column --}}
								<div class="col">
								    <ul class="list-inline">
									    <li class="list-inline-item text-capitalize text-muted me-4"><span class="me-1"><i class="far fa-clock"></i></span> {{ __('time left') }} <span class="ms-1"><i class="fas fa-chevron-down"></i></span></li>
										<li class="list-inline-item text-capitalize text-muted me-4"><span class="me-1"><i class="far fa-star"></i></span> {{ __('ratings') }} <span class="ms-1"><i class="fas fa-chevron-down"></i></span></li>
										<li class="list-inline-item text-capitalize text-muted"><span class="me-1"><i class="far fa-calendar"></i></span> {{ __('date') }} <span class="ms-1"><i class="fas fa-chevron-down"></i></span></li>
									</ul>
								</div>{{-- End Column --}}
							</div>{{-- End Row --}}
							
							<div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
							    <div class="col">
								    <article class="card location-card border-0">
									    <a href="" class="card-img-link"><img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1525&q=80" alt="" class="card-img-top img-fluid overflow-hidden"></a>
										<div class="d-flex align-items-center card-body shadow-sm">
										    <div class="w-100">
							                    <ul class="list-inline list-inline location-feeds-top mb-3">
								                    <li class="list-inline-item">
								                        <small>
						                                    <span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
									                    </small>
								                    </li>
								                    <li class="list-inline-item"><small>22 reviews</small></li>
								                    <li class="list-inline-item"><small>Expire Date : <span class="text-danger">02/02/2020</span></small></li>
								                </ul>
								                <h5 class="card-title mb-0"><a href="" class="card-title-link text-capitalize fw-bold">suite deluxe supéreure 25%</a></h5>
								                <ul class="list-inline location-feeds-bottom mt-3 mb-4">
				                                    <li class="list-inline-item">
					                                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-map-marker"></i></span> Casablanca</small>
					                                </li>
				                                    <li class="list-inline-item">
					                                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-tag"></i></span> Hotel Ifran Place</small>
					                                </li>
								                </ul>
												<div class="row">
												    <div class="col-lg-6 col text-start">
									                    <div class="location-posted-time">
										                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-clock"></i></span> 8 Hours</small>
										                </div>
									                </div>{{-- End Column --}}
									                <div class="col-lg-6 col text-end">
									                    <div class="location-operations">
										                    <p class="h6 location-operations-subprice mt-0 mb-0 d-inline"><del>60 DH</del></p>
											                <p class="h4 location-operations-price mb-0 fw-bold d-inline">49.00 DH</p>
										                </div>
									                </div>{{-- End Column --}}
												</div>{{-- End Row --}}
											</div>
										</div>
									</article>
								</div>{{-- End Column --}}
							    <div class="col">
								    <article class="card location-card border-0">
									    <a href="" class="card-img-link"><img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1525&q=80" alt="" class="card-img-top img-fluid overflow-hidden"></a>
										<div class="d-flex align-items-center card-body shadow-sm">
										    <div class="w-100">
							                    <ul class="list-inline list-inline location-feeds-top mb-3">
								                    <li class="list-inline-item">
								                        <small>
						                                    <span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
															<span class="location-rating"><i class="las la-star"></i></span>
									                    </small>
								                    </li>
								                    <li class="list-inline-item"><small>22 reviews</small></li>
								                    <li class="list-inline-item"><small>Expire Date : <span class="text-danger">02/02/2020</span></small></li>
								                </ul>
								                <h5 class="card-title mb-0"><a href="" class="card-title-link text-capitalize fw-bold">suite deluxe supéreure 25%</a></h5>
								                <ul class="list-inline location-feeds-bottom mt-3 mb-4">
				                                    <li class="list-inline-item">
					                                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-map-marker"></i></span> Casablanca</small>
					                                </li>
				                                    <li class="list-inline-item">
					                                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-tag"></i></span> Hotel Ifran Place</small>
					                                </li>
								                </ul>
												<div class="row">
												    <div class="col-lg-6 col text-start">
									                    <div class="location-posted-time">
										                    <small><span class="location-feeds-bottom-icons me-2"><i class="las la-clock"></i></span> 8 Hours</small>
										                </div>
									                </div>{{-- End Column --}}
									                <div class="col-lg-6 col text-end">
									                    <div class="location-operations">
										                    <p class="h6 location-operations-subprice mt-0 mb-0 d-inline"><del>60 DH</del></p>
											                <p class="h4 location-operations-price mb-0 fw-bold d-inline">49.00 DH</p>
										                </div>
									                </div>{{-- End Column --}}
												</div>{{-- End Row --}}
											</div>
										</div>
									</article>
								</div>{{-- End Column --}}
							</div>{{-- End Row --}}
						    
							<div class="col-12">
							    <x-frontend.pagination />
							</div>{{-- End Column --}}
						</div>{{-- End Tab Pane Content --}}
					</div>{{-- End Tab Pane --}}
				</div>
			</div>{{-- End Column --}}
		</div>{{-- End Row --}}
	</div>{{-- End Container --}}
</section>