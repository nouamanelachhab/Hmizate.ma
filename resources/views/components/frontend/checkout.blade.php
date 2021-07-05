<section id="checkout-section" class="py-5 bg-lighten">
    <div class="container-xl">
	    <div class="row">
		    <div class="col-12 col-lg-7 mb-lg-0 mb-4">
			    <div class="checkout-informations card border-0 shadow-sm">
					<div class="card-body p-4">
					    <form class="checkout-form" method="POST" action="{{ route('checkout') }}">
							@csrf
						    
							<ul class="nav nav-tabs" id="checkoutTab" role="tablist">
							    <li class="nav-item" role="presentation">
								    <a class="nav-link active" id="finalization-of-the-command-tab" data-bs-toggle="tab" href="#finalization-of-the-command" role="tab" aria-controls="finalization-of-the-command" aria-selected="true">
										<span class="nav-link-dot"></span>
										<span class="nav-link-label">{{ __('finalization of the command') }}</span>
									</a>
								</li>
								<li class="nav-item" role="presentation">
								    <a class="nav-link" id="payment-method-tab" data-bs-toggle="tab" href="#payment-method" role="tab" aria-controls="payment-method" aria-selected="false">
										<span class="nav-link-dot"></span>
										<span class="nav-link-label">{{ __('payment method') }}</span>
									</a>
								</li>
								<li class="nav-item" role="presentation">
								    <a class="nav-link" id="confirmation-tab" data-bs-toggle="tab" href="#confirmation" role="tab" aria-controls="confirmation" aria-selected="false">
										<span class="nav-link-dot"></span>
										<span class="nav-link-label">{{ __('confirmation') }}</span>
									</a>
								</li>
							</ul>{{-- End Tab Steps --}}
							
							<div class="tab-content mt-3">
						        <div class="tab-pane tab-pane-finalization-of-the-command fade show active py-4 px-0" id="finalization-of-the-command" role="tabpanel" aria-labelledby="finalization-of-the-command-tab">
									<h3 class="tab-pane-title"><span class="me-1"><i class="fas fa-box"></i></span> {{ __('finalization of the command') }}</h3>
									<fieldset class="row g-3">
									    <div class="col-md-6">
										    <label for="firstname" class="form-label">{{ __('first name') }} <span class="text-danger fw-bold">*</span></label>
											<div class="input-group">
											    <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
												<input type="text" id="firstname" class="form-control @error('firstname') is-invalid @enderror" placeholder="first name *" name="firstname" value="{{ old('firstname') }}" autocomplete="firstname" autofocus>
											</div>
								            @error('firstname')
									            <span class="invalid-feedback d-block mt-2 text-danger rounded" role="alert">
										            <span><i class="fas fa-exclamation-triangle"></i></span> <strong>{{ $message }}</strong>
									            </span>
								            @enderror
										</div>{{-- End Column --}}
						                
										<div class="col-md-6">
                                            <label for="lastname" class="form-label">{{ __('last name') }} <span class="text-danger fw-bold">*</span></label>
									        <div class="input-group">
									            <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
										        <input type="text" id="lastname" class="form-control @error('lastname') is-invalid @enderror" placeholder="last name *" name="lastname" value="{{ old('lastname') }}" autocomplete="lastname">
								            </div>
								            @error('lastname')
									            <span class="invalid-feedback d-block mt-2 text-danger rounded" role="alert">
										            <span><i class="fas fa-exclamation-triangle"></i></span> <strong>{{ $message }}</strong>
									            </span>
								            @enderror
								        </div>{{-- End Column --}}
									    
						                <div class="col-md-6">
                                            <label for="email" class="form-label">{{ __('email address') }} <span class="text-danger fw-bold">*</span></label>
									        <div class="input-group">
									            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
										        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="email address *" name="email" value="{{ old('email') }}" autocomplete="email">
								            </div>
								            @error('email')
									        <span class="invalid-feedback d-block mt-2 text-danger rounded" role="alert">
										        <span><i class="fas fa-exclamation-triangle"></i></span> <strong>{{ $message }}</strong>
									        </span>
								            @enderror
								        </div>{{-- End Column --}}
									
						                <div class="col-md-6">
                                            <label for="phone_number" class="form-label">{{ __('phone number') }} <span class="text-danger fw-bold">*</span></label>
									        <div class="input-group">
									            <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
										        <input type="tel" id="phone_number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="phone number *" name="phone_number" value="{{ old('phone_number') }}" autocomplete="phone_number">
								            </div>
								            @error('phone_number')
									            <span class="invalid-feedback d-block mt-2 text-danger rounded" role="alert">
										            <span><i class="fas fa-exclamation-triangle"></i></span> <strong>{{ $message }}</strong>
									            </span>
								            @enderror
								        </div>{{-- End Column --}}
									
						                <div class="col-md-6">
                                            <label for="address" class="form-label">{{ __('address') }} <span class="text-danger fw-bold">*</span></label>
									        <div class="input-group">
									            <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
										        <input type="text" id="address" class="form-control @error('address') is-invalid @enderror" placeholder="address *" name="address" value="{{ old('address') }}" autocomplete="address">
								            </div>
								            @error('address')
									            <span class="invalid-feedback d-block mt-2 text-danger rounded" role="alert">
										            <span><i class="fas fa-exclamation-triangle"></i></span> <strong>{{ $message }}</strong>
									            </span>
								            @enderror
								        </div>{{-- End Column --}}
									
						                <div class="col-md-6">
                                            <label for="city" class="form-label">{{ __('city') }} <span class="text-danger fw-bold">*</span></label>
									        <div class="input-group">
									            <span class="input-group-text"><i class="fas fa-city"></i></span>
										        <select id="city" class="form-control @error('city') is-invalid @enderror" name="city">
											        <option value="casablanca" selected>casablanca</option>
											        <option value="agadir">agadir</option>
											        <option value="el-jadida">el jadida</option>
										        </select>
								            </div>
								            @error('city')
									            <span class="invalid-feedback d-block mt-2 text-danger rounded" role="alert">
										            <span><i class="fas fa-exclamation-triangle"></i></span> <strong>{{ $message }}</strong>
									            </span>
								            @enderror
								        </div>{{-- End Column --}}
									
								        <div class="col-md-12">
								            {!! Captcha::display() !!}
								            @error('g-recaptcha-response')
									            <span class="invalid-feedback d-block mt-2 text-danger rounded" role="alert">
										            <span><i class="fas fa-exclamation-triangle"></i></span> <strong>{{ $message }}</strong>
									            </span>
								            @enderror
								        </div>{{-- End Column --}}
										
								        <div class="col-md-12">
								            <div class="form-check">
									            <input type="radio" class="form-check-input" id="conditions-link" checked>
										        <label class="form-check-label" for="conditions-link">
										            {{ __('i have read and accept') }} <span>hmizate's</span> <a href="{{ route('terms-of-service') }}">{{ __('terms of service') }}</a> {{ __('and') }} <a href="{{ route('privacy-policy') }}">{{ __('privacy policy') }}</a>.
										        </label>
									        </div>
								        </div>{{-- End Column --}}
									
									</fieldset>
							    </div>{{-- End Tab Pane --}}
						        
								<div class="tab-pane tab-pane-payment-method fade py-4 px-0" id="payment-method" role="tabpanel" aria-labelledby="payment-method-tab">
									<h3 class="tab-pane-title"><span class="me-1"><i class="fas fa-credit-card"></i></span> {{ __('payment method') }}</h3>
									<fieldset class="row g-3">
								        <div class="col-md-12">
								            <div class="form-check mb-3">
											    <input type="radio" class="form-check-input" id="credit-payment">
												<label class="form-check-label" for="credit-payment">
												    <img src="https://payzone.ma/wp-content/uploads/2018/07/logo.png" alt="{{ __('credit payment') }}" class="img-fluid">
												</label>
											</div>
								            <div class="form-check mb-3">
											    <input type="radio" class="form-check-input" id="online-payment">
												<label class="form-check-label" for="online-payment">
												    <img src="https://payzone.ma/wp-content/uploads/2018/07/logo.png" alt="{{ __('online payment') }}" class="img-fluid">
												</label>
											</div>
								            <div class="form-check mb-3">
											    <input type="radio" class="form-check-input" id="express-payment">
												<label class="form-check-label" for="express-payment">
												    <img src="https://payzone.ma/wp-content/uploads/2018/07/logo.png" alt="{{ __('express payment') }}" class="img-fluid">
												</label>
											</div>
								            <div class="form-check">
											    <input type="radio" class="form-check-input" id="online2-payment">
												<label class="form-check-label" for="online2-payment">
												    <img src="https://payzone.ma/wp-content/uploads/2018/07/logo.png" alt="{{ __('online payment') }}" class="img-fluid">
												</label>
											</div>
								        </div>{{-- End Column --}}
									</fieldset>
							    </div>{{-- End Tab Pane --}}
						        
								<div class="tab-pane tab-pane-confirmation fade py-4 px-0" id="confirmation" role="tabpanel" aria-labelledby="confirmation-tab">
							        <div class="row justify-content-center">
									    <div class="col-12 col-lg-9">
										    <div class="text-start text-lg-center mb-4">
											    <h3 class="tab-pane-title">{{ __('a very big thank you') }}</h3>
												<p class="tab-pane-text">
												    {{ __('welcome to the hmizate family!') }} {{ __("We'll take it from here. we sent a confirmation email to") }} <span class="tab-pane-special-text">john@gmail.com</span>
												</p>
												<p class="tab-pane-text text-capitalize">
												    {{ __('order number') }} : <span class="tab-pane-special-text">#F2102356</span>
												</p>
											</div>
											<a href="#" class="btn btn-special-action btn-outline-danger w-100 mb-4"><span class="me-1"><i class="fas fa-long-arrow-alt-left"></i></span> {{ __('back to home page') }}</a>
										    <hr class="special-broken-line">
											<div class="contact-info mt-4">
											    <h4 class="contact-info-title"><span class="me-1"><i class="far fa-envelope"></i></span> {{ __('keep in touch') }}</h4>
												<ul class="contact-info-list list-inline">
												    <li class="list-inline-item">
													    <a href="#" class="list-inline-item-link list-inline-item-link-facebook"><span class="fs-5"><i class="fab fa-facebook-f"></i></span></a>
													</li>
												    <li class="list-inline-item">
													    <a href="#" class="list-inline-item-link list-inline-item-link-instagram"><span class="fs-5"><i class="fab fa-instagram"></i></span></a>
													</li>
												    <li class="list-inline-item">
													    <a href="#" class="list-inline-item-link list-inline-item-link-twitter"><span class="fs-5"><i class="fab fa-twitter"></i></span></a>
													</li>
												    <li class="list-inline-item">
													    <a href="#" class="list-inline-item-link list-inline-item-link-google-plus"><span class="fs-5"><i class="fab fa-google-plus-g"></i></span></a>
													</li>
												    <li class="list-inline-item">
													    <a href="#" class="list-inline-item-link list-inline-item-link-whatsapp"><span class="fs-5"><i class="fab fa-whatsapp"></i></span></a>
													</li>
												</ul>
											</div>
										</div>{{-- End Column --}}
									</div>{{-- End Row --}}
							    </div>{{-- End Tab Pane --}}
						    </div>{{-- End Tab Content --}}
					        <div class="tab-actions">
							    <button type="submit" class="btn btn-next btn-danger w-100">{{ __('next step') }} <span class="ms-1"><i class="fas fa-long-arrow-alt-right"></i></span></button>
						    </div>{{-- End Tab Actions --}}
						</form>
					</div>
				</div>
			</div>{{-- End Column --}}
			<div class="col-12 col-lg-5">
			    <div class="checkout-details card border-0 shadow-sm mb-4">
				    <div class="card-header bg-light p-3 px-4">
					    <h4 class="header-title"><span class="me-1"><i class="fas fa-file-alt"></i></span> summary</h4>
					</div>
					<div class="card-body p-4">
					    <div class="checkout-info">
						    <div class="media">
							    <a href="#">
								    <img src="https://via.placeholder.com/300/f1f1f1.png" alt="{{ __('product thumbnail') }}" class="product-thumbnail me-3 img-fluid img-thumbnail rounded" width="100" height="100">
							    </a>
								<div class="media-body">
								    <div class="product-info">
									    <div class="d-flex justify-content-between">
										    <h5 class="product-title">
											    <a href="#" class="product-title-link d-inline-block text-truncate">13.3-inch LED-backlit display with IPS</a>
											</h5>
											<button type="button" class="btn-close" aria-label="Close"></button>
										</div>
										<div class="product-outils">
										    <div class="row align-items-center">
											    <div class="col">
												    <form class="product-outils-form" method="#" action="#">
													    <fieldset>
														    <div class="input-group input-spinner flex-nowrap">
															    <button type="button" id="button-minus" class="btn btn-minus"><span class="button-icon"><i class="fas fa-minus"></i></span></button>
																<input type="text" class="form-control" value="1">
																<button type="button" id="button-plus" class="btn btn-plus"><span class="button-icon"><i class="fas fa-plus"></i></span></button>
															</div>
														</fieldset>
													</form>
												</div>
											    <div class="col">
												    <p class="product-outils-text"><span class="me-1 fs-3 align-middle">&#215;</span> <span class="badge bg-danger rounded-pill">$100</span></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						    <div class="media">
							    <a href="#">
								    <img src="https://via.placeholder.com/300/f1f1f1.png" alt="{{ __('product thumbnail') }}" class="product-thumbnail me-3 img-fluid img-thumbnail rounded" width="100" height="100">
							    </a>
								<div class="media-body">
								    <div class="product-info">
									    <div class="d-flex justify-content-between">
										    <h5 class="product-title">
											    <a href="#" class="product-title-link d-inline-block text-truncate">13.3-inch LED-backlit display with IPS</a>
											</h5>
											<button type="button" class="btn-close" aria-label="Close"></button>
										</div>
										<div class="product-outils">
										    <div class="row align-items-center">
											    <div class="col">
												    <form class="product-outils-form" method="#" action="#">
													    <fieldset>
														    <div class="input-group input-spinner flex-nowrap">
															    <button type="button" id="button-minus" class="btn btn-minus"><span class="button-icon"><i class="fas fa-minus"></i></span></button>
																<input type="text" class="form-control" value="1">
																<button type="button" id="button-plus" class="btn btn-plus"><span class="button-icon"><i class="fas fa-plus"></i></span></button>
															</div>
														</fieldset>
													</form>
												</div>
											    <div class="col">
												    <p class="product-outils-text"><span class="me-1 fs-3 align-middle">&#215;</span> <span class="badge bg-danger rounded-pill">$100</span></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<hr class="special-broken-line">
						<div class="checkout-coupon-code">
						    <form method="#" action="#">
							    <fieldset>
								    <label for="coupon-code" class="form-label">{{ __('discount code') }} :</label>
									<div class="input-group flex-nowrap">
									    <span class="input-group-text"><i class="fas fa-percentage"></i></span>
										<input type="text" class="form-control" id="coupon-code" name="coupon-code" placeholder="{{ __('coupon code') }}" aria-label="{{ __('coupon code') }}" required>
										<button type="button" class="btn btn-outline-danger disabled" disabled><span class="me-1"><i class="fas fa-check-circle"></i></span> {{ __('apply coupon') }} <span class="ms-1"><i class="fas fa-long-arrow-alt-right"></i></span></button>
									</div>
								</fieldset>
							</form>
						</div>
						<hr class="special-broken-line">
						<div class="checkout-totals-desc">
						    <ul class="list-group list-group-flush shadow-none">
								<li class="list-group-item bg-transparent border-0 px-0 d-flex justify-content-between align-items-center">
									<span class="list-group-item-title"><span class="me-1"><i class="fas fa-wallet"></i></span> {{ __('sub-total') }}</span>
									<span>$275.00</span>
								</li>
								<li class="list-group-item bg-transparent border-0 px-0 d-flex justify-content-between align-items-center">
									<span class="list-group-item-title"><span class="me-1"><i class="fas fa-file-invoice"></i></span> {{ __('tax') }}</span>
									<span>{{ __('free') }}</span>
								</li>
								<li class="list-group-item special bg-transparent border-0 px-0 d-flex justify-content-between align-items-center">
									<span class="list-group-item-title"><span class="me-1"><i class="far fa-money-bill-alt"></i></span> {{ __('total') }}</span>
									<span class="badge bg-danger rounded-pill">$285.00</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				
			    <div class="checkout-support card border-0 shadow-sm">
				    <div class="card-header bg-light p-3 px-4">
					    <h4 class="header-title"><span class="me-1"><i class="fas fa-question-circle"></i></span> Need help ?</h4>
					</div>
					<div class="card-body p-4">
					    <p class="lead">{{ __('contact an expert to help you') }}</p>
						<a href="#" class="btn btn-outline-danger w-100"><span class="me-1"><i class="far fa-comments"></i></span> {{ __('chat') }} &#8725; {{ __('call') }}</a>
					</div>
				</div>
				
			</div>{{-- End Column --}}
		</div>{{-- End Row --}}
	</div>{{-- End Container --}}
</section>