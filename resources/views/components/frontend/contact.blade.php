<section id="contact-section" class="py-5 bg-brighten">
    <div class="container-xl">
	    <div class="row">
	        <div class="col-12 col-lg-7 mb-lg-0 mb-4">
			    <div class="contact-form-wrap card border-0 shadow-sm">
				    <div class="card-body p-5">
					    <div class="contact-heading mb-5">
							<p class="h2">Fill out the form and we will contact you as soon as possible!</p>
						</div>
						<form class="contact-form" method="POST" action="{{ route('contact') }}">
						    @csrf
							<fieldset class="row g-3">
							    <div class="col-md-6">
								    <label for="firstname" class="form-label">{{ __('first name') }} <span class="text-danger fw-bold">*</span></label>
									<div class="input-group">
									    <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
										<input type="text" id="firstname" class="form-control @error('firstname') is-invalid @enderror" placeholder="{{ __('first name') }} *" name="firstname" value="{{ old('firstname') }}" autocomplete="firstname" autofocus>
									</div>
									@error('firstname')
									    <span class="invalid-feedback d-block mt-2 text-danger rounded" role="alert">
										    <span><i class="fas fa-exclamation-triangle"></i></span> <strong>{{ $message }}</strong>
									    </span>
									@enderror
								</div>{{-- End Column --}}
							    <div class="col-md-6">
								    <label for="lastname" class="form-label">{{ __('last address') }} <span class="text-danger fw-bold">*</span></label>
									<div class="input-group">
									    <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
										<input type="text" id="lastname" class="form-control @error('lastname') is-invalid @enderror" placeholder="{{ __('last name') }} *" name="lastname" value="{{ old('lastname') }}" autocomplete="lastname">
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
										<input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('email address') }} *" name="email" value="{{ old('email') }}" autocomplete="email">
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
										<input type="tel" id="phone_number" class="form-control @error('phone') is-invalid @enderror" placeholder="{{ __('phone number') }} *" name="phone" value="{{ old('phone') }}" autocomplete="phone">
									</div>
									@error('phone')
									    <span class="invalid-feedback d-block mt-2 text-danger rounded" role="alert">
										    <span><i class="fas fa-exclamation-triangle"></i></span> <strong>{{ $message }}</strong>
									    </span>
									@enderror
								</div>{{-- End Column --}}
							    <div class="col-md-12">
								    <label for="message" class="form-label">{{ __('message') }} <span class="text-danger fw-bold">*</span></label>
									<div class="input-group">
									    <span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
										<textarea type="text" id="message" class="form-control @error('message') is-invalid @enderror" placeholder="{{ __('how can we help?') }}" name="message" value="{{ old('message') }}" autocomplete="message" rows="4"></textarea>
									</div>
									@error('message')
									    <span class="invalid-feedback d-block mt-2 text-danger rounded" role="alert">
										    <span><i class="fas fa-exclamation-triangle"></i></span> <strong>{{ $message }}</strong>
									    </span>
									@enderror
								</div>{{-- End Column --}}
								<div class="col-md-12">
									<div class="form-check">
								        <input type="radio" class="form-check-input" id="conditions-link" checked>
									    <label class="form-check-label" for="conditions-link">
									        {{ __('i have read and accept') }} <span>hmizate's</span> <a href="">{{ __('terms of service') }}</a> {{ __('and') }} <a href="">{{ __('privacy policy') }}</a>.
									    </label>
								    </div>
								</div>{{-- End Column --}}
								<div class="col-md-12">
							        <button type="submit" class="btn btn-send btn-danger w-100"><span class="me-1"><i class="fas fa-share-square"></i></span> {{ __('send message') }} <span class="ms-1"><i class="fas fa-long-arrow-alt-right"></i></span></button> 
							    </div>{{-- End Column --}}
							</fieldset>
						</form>
					</div>
				</div>
			</div>{{-- End Column --}}
	        <div class="col-12 col-lg-5">
			    <div class="contact-info-wrap card border-0 shadow-sm mb-4">
				    <div class="card-body p-5">
					    <div class="media">
						    <div class="media-icon me-4">
							    <span class="icon"><i class="bi bi-alarm"></i></span>
							</div>
							<div class="media-body">
							    <p class="lead">Lundi au Vendredi de 09:00 à 19:00 <br> Samedi de 10:00 à 17:00</p>
							</div>
						</div>
					    <div class="media">
						    <div class="media-icon me-4">
							    <span class="icon"><i class="bi bi-telephone"></i></span>
							</div>
							<div class="media-body">
							    <p class="lead">+212 6 61 37 34 82 <br> +212 6 68 40 22 24</p>
							</div>
						</div>
					    <div class="media">
						    <div class="media-icon me-4">
							    <span class="icon"><i class="bi bi-envelope"></i></span>
							</div>
							<div class="media-body">
							    <p class="lead">
								    <span class="special">Service Client :</span> support@hmizate.ma
									<span class="special">Partenariat :</span> partenariat@hmizate.ma
								</p>
							</div>
						</div>
					</div>
				</div>
			    <div class="contact-support-wrap card border-0 shadow-sm">
				    <div class="card-header bg-light p-3 px-4">
					    <h4 class="header-title"><span class="me-1"><i class="fas fa-question-circle"></i></span> Need help ?</h4>
					</div>
					<div class="card-body p-4">
					    <p class="lead">contact an expert to help you</p>
						<a href="#" class="btn btn-outline-danger w-100"><span class="me-1"><i class="far fa-comments"></i></span> chat ∕ call</a>
					</div>
				</div>
			</div>{{-- End Column --}}
        </div>{{-- End Row --}}
	</div>{{-- End Container --}}
</section>