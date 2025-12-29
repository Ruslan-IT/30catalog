
<div class="product-tab-section section-top-gap-100">
    <!-- Start Section Content -->
    <div class="section-content-gap">
        <div class="container">
            <div class="row">
                <div class="section-content d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column">
                    <h3 class="section-title">Featured Products</h3>

                </div>
            </div>
        </div>
    </div> <!-- End Section Content -->

    <!-- Start Tab Wrapper -->
    <div class="product-tab-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-content tab-animate-zoom">

                        <div class="tab-pane show active" id="drive_trucks">
                            <div class="product-default-slider product-default-slider-4grids-1row">

                                @foreach($products->take(10)  as $product)
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="{{ route('product.show', $product->slug) }}"
                                               class="product-default-img-link">

                                                <img
                                                    src="{{ asset('storage/' . $product->main_image) }}"
                                                    alt="{{ $product->name }}"
                                                    class="product-default-img img-fluid">
                                            </a>

                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li>
                                                        <a href="#"
                                                           class="open-modal"
                                                           data-subject="{{ $product->id }}">
                                                            <i class="icon-eye"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="product-default-content">
                                            <h6 class="product-default-link">
                                                <a href="{{ route('product.show', $product->slug) }}">
                                                    {{ $product->name }}
                                                </a>
                                            </h6>

                                            <span class="product-default-price">
                                                {{ $product->title }}
                                            </span>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Catagory Wrapper -->
</div>
