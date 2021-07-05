<section id="cart-section" class="py-5 bg-lighten">
    <div class="container-xl">
		<div class="first-row row justify-content-lg-center d-none">
			<div class="col-12 col-lg-10">
			    <div class="empty-cart alert alert-warning border-0 shadow-sm p-4" role="alert">
				    <h4 class="empty-cart-heading"><span class="me-1"><i class="far fa-surprise"></i></span> {{ __('oops! your shopping cart is currently empty') }}.</h4>
				    <p class="empty-cart-text lead">
					    {{ __('discover the most') }} <a href="" class="empty-cart-link alert-link">{{ __('popular deals') }}</a> {{ __('available or browse our hottest') }} <a href="" class="empty-cart-link alert-link">{{ __('new deals') }}</a>.
					</p>
				</div>
			    <div class="not-signed-in alert alert-info border-0 shadow-sm p-4" role="alert">
				    <h4 class="not-signed-in-heading"><span class="me-1"><i class="fas fa-info-circle"></i></span> {{ __("oops! it look like you're not signed in") }}.</h4>
					<p class="not-signed-in-text lead">
					    if you want to save these items or see your previously saved items please <a href="" class="empty-cart-link alert-link">{{ __('sign in') }}</a> now.
					</p>
				</div>
			</div>{{-- End Column --}}
		</div>{{-- End Row --}}
		
		<div class="second-row row justify-content-lg-center">
			<div class="col-12 col-lg-10">
			    <div class="card bg-transparent border-0">
				    <div class="card-header bg-light p-3 d-lg-flex justify-content-lg-between">
					    <h5 class="card-header-title text-lg-start text-center"><span class="me-1"><i class="fas fa-shopping-basket"></i></span> {{ __('shopping cart') }} <span class="special-header-title">(3 {{ __('items') }})</span></h5>
					    <a href="#" class="card-header-link d-lg-block d-none"><span class="me-1"><i class="far fa-comments"></i></span> {{ __('send us your comments') }}</a>
					</div>
					<div class="table-content card-body p-0">
					    <form method="#" action="#">
						    <div class="table-responsive">
							    <table class="table table-borderless bg-light mb-0">
						            <thead class="table-header">
							            <tr>
								            <th scope="col" class="product-thumbnail"></th>
										    <th scope="col" class="product-name"><span class="me-1 d-lg-inline d-none"><i class="fas fa-box-open"></i></span> {{ __('product') }}</th>
										    <th scope="col" class="product-price"><span class="me-1 d-lg-inline d-none"><i class="fas fa-dollar-sign"></i></span> {{ __('price') }}</th>
										    <th scope="col" class="product-quantity"><span class="me-1 d-lg-inline d-none"><i class="fas fa-plus"></i></span> {{ __('quantity') }}</th>
										    <th scope="col" class="product-subtotal"><span class="me-1 d-lg-inline d-none"><i class="fas fa-wallet"></i></span> {{ __('subtotal') }}</th>
										    <th scope="col" class="product-action"></th>
								        </tr>
							        </thead>
							        <tbody class="table-body">
							            <tr>
								            <td class="product-thumbnail">
									            <a href="#"><img src="https://via.placeholder.com/80" alt="" class="img-fluid rounded-circle" width="80" height="80"></a>
									        </td>
									        <td class="product-name">
									            <a href="#" class="product-name-title d-inline-block text-truncate">What is Lorem Ipsum?</a>
										        <small><a href="#" class="product-name-category"><span class="me-1"><i class="fas fa-tag"></i></span> {{ __('hotels') }}</a></small>
									        </td>
									        <td class="product-price">
									            <span class="original-price">$250.00</span>
										        <span class="old-price"><del>$350.00</del></span>
									        </td>
									        <td class="product-quantity">
									            <input type="number" class="form-control" value="1" min="0" max="100" step="1" name="quantity">
									        </td>
									        <td class="product-subtotal">
									            <span class="subtotal-price">$220.00</span>
									        </td>
									        <td class="product-action">
									            <button type="button" id="view-item-details" class="btn btn-link text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('view details') }}"><span><i class="fas fa-eye"></i></span></button>
										        <button type="button" id="remove-item" class="btn btn-link text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('remove item') }}" onclick="return confirm('Are you sure you want to delete this item from the cart?');"><span><i class="far fa-trash-alt"></i></span></button>
									        </td>
								        </tr>
							            <tr>
								            <td class="product-thumbnail">
									            <a href="#"><img src="https://via.placeholder.com/80" alt="" class="img-fluid rounded-circle" width="80" height="80"></a>
									        </td>
									        <td class="product-name">
									            <a href="#" class="product-name-title d-inline-block text-truncate">What is Lorem Ipsum?</a>
										        <small><a href="#" class="product-name-category"><span class="me-1"><i class="fas fa-tag"></i></span> {{ __('hotels') }}</a></small>
									        </td>
									        <td class="product-price">
									            <span class="original-price">$250.00</span>
										        <span class="old-price"><del>$350.00</del></span>
									        </td>
									        <td class="product-quantity">
									            <input type="number" class="form-control" value="1" min="0" max="100" step="1" name="quantity">
									        </td>
									        <td class="product-subtotal">
									            <span class="subtotal-price">$220.00</span>
									        </td>
									        <td class="product-action">
									            <button type="button" id="view-item-details" class="btn btn-link text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('view details') }}"><span><i class="fas fa-eye"></i></span></button>
										        <button type="button" id="remove-item" class="btn btn-link text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('remove item') }}" onclick="return confirm('Are you sure you want to delete this item from the cart?');"><span><i class="far fa-trash-alt"></i></span></button>
									        </td>
								        </tr>
							            <tr>
								            <td class="product-thumbnail">
									            <a href="#"><img src="https://via.placeholder.com/80" alt="" class="img-fluid rounded-circle" width="80" height="80"></a>
									        </td>
									        <td class="product-name">
									            <a href="#" class="product-name-title d-inline-block text-truncate">What is Lorem Ipsum?</a>
										        <small><a href="#" class="product-name-category"><span class="me-1"><i class="fas fa-tag"></i></span> {{ __('hotels') }}</a></small>
									        </td>
									        <td class="product-price">
									            <span class="original-price">$250.00</span>
										        <span class="old-price"><del>$350.00</del></span>
									        </td>
									        <td class="product-quantity">
									            <input type="number" class="form-control" value="1" min="0" max="100" step="1" name="quantity">
									        </td>
									        <td class="product-subtotal">
									            <span class="subtotal-price">$220.00</span>
									        </td>
									        <td class="product-action">
									            <button type="button" id="view-item-details" class="btn btn-link text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('view details') }}"><span><i class="fas fa-eye"></i></span></button>
										        <button type="button" id="remove-item" class="btn btn-link text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('remove item') }}" onclick="return confirm('Are you sure you want to delete this item from the cart?');"><span><i class="far fa-trash-alt"></i></span></button>
									        </td>
								        </tr>
							        </tbody>
						        </table>
							</div>
							<div class="table-bottom-actions card card-body border-top">
							    <div class="d-flex flex-column flex-md-row justify-content-lg-between">
								    <button type="button" class="btn btn-dark mb-lg-0 mb-3"><span class="me-1"><i class="far fa-edit"></i></span> {{ __('update cart') }}</button>
								    <button type="button" class="btn btn-primary mb-lg-0 mb-3"><span class="me-1"><i class="fas fa-cart-plus"></i></span> {{ __('continue shopping') }}</button>
								    <button type="button" class="btn btn-danger"><span class="me-1"><i class="fas fa-broom"></i></span> {{ __('clear cart') }}</button>
								</div>		 
							</div>
						</form>
					</div>
				</div>
			</div>{{-- End Column --}}
		</div>{{-- End Row --}}
		
		<div class="third-row row justify-content-lg-center">
		    <div class="col-12 col-lg-10">
			    <div class="card card-body border-0 shadow-sm">
				    <div class="row">
					    <div class="col-12 col-lg-6 mb-lg-0 mb-4">
						    <div class="shopping-coupon-code">
							    <form method="#" action="#">
								    <fieldset>
									    <div class="input-group flex-nowrap">
										    <span class="input-group-text"><i class="fas fa-percentage"></i></span>
											<input type="text" class="form-control" id="coupon-code" name="coupon-code" placeholder="{{ __('coupon code') }}" aria-label="{{ __('coupon code') }}" required>
											<button type="button" class="btn btn-primary disabled" disabled><span class="me-1"><i class="fas fa-check-circle"></i></span> {{ __('apply coupon') }} <span class="ms-1"><i class="fas fa-long-arrow-alt-right"></i></span></button>
										</div>
									</fieldset>
								</form>
							</div>
						</div>{{-- End Column --}}
						<div class="col-12 col-lg-6">
						    <div class="cart-totals-desc card border-0">
							    <div class="card-header bg-dark text-white p-3 d-lg-flex justify-content-lg-between">
								    <h5 class="card-header-title">
									    <span class="me-1"><i class="fas fa-shopping-cart"></i></span> {{ __('cart totals') }}
									</h5>
									<span class="special-header-title d-lg-block d-none">(3 {{ __('items') }})</span>
								</div>
								<div class="card-body">
									<ul class="list-group list-group-flush mb-3 shadow-none">
									    <li class="list-group-item bg-transparent px-0 d-flex justify-content-between align-items-center">
										    <span class="list-group-item-title"><span class="me-1"><i class="fas fa-wallet"></i></span> {{ __('subtotal') }}</span>
											<span class="badge bg-primary rounded-pill">$275.00</span>
										</li>
									    <li class="list-group-item bg-transparent px-0 d-flex justify-content-between align-items-center">
										    <span class="list-group-item-title"><span class="me-1"><i class="fas fa-file-invoice"></i></span> {{ __('tax') }}</span>
											<span class="badge bg-warning rounded-pill">$10.00</span>
										</li>
									    <li class="list-group-item bg-transparent px-0 d-flex justify-content-between align-items-center">
										    <span class="list-group-item-title"><span class="me-1"><i class="fas fa-calculator"></i></span> {{ __('total') }}</span>
											<span class="badge bg-info rounded-pill">$285.00</span>
										</li>
									    <li class="list-group-item bg-transparent px-0 d-flex justify-content-between align-items-center">
										    <span class="list-group-item-title special-item-title text-success"><span class="me-1"><i class="far fa-money-bill-alt"></i></span> {{ __('payable Total') }}</span>
											<span class="badge bg-success rounded-pill">$285.00</span>
										</li>
									</ul>  
                                    <button type="button" class="custom-outline-btn w-100 rounded-pill p-3"><span class="me-1"><i class="fas fa-credit-card"></i></span> {{ __('proceed to checkout') }} <span class="ms-1"><i class="fas fa-long-arrow-alt-right"></i></span></button>									
								</div>
							</div>
						</div>{{-- End Column --}}
					</div>{{-- End Row --}}
				</div>
			</div>{{-- End Column --}}
		</div>{{-- End Row --}}
	</div>{{-- End Container --}}
</section>