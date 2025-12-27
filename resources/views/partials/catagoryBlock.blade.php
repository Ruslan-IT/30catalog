<!-- Start Section Content -->
<div class="section-content-gap">
    <div class="container">
        <div class="row">
            <div class="section-content">
                <h3 class="section-title">Popular Categories</h3>
            </div>
        </div>
    </div>
</div>

<!-- Start Category Wrapper -->
<div class="product-catagory-wrapper">
    <div class="container">
        <div class="row">

            @foreach($categoriesRandom as $category)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">

                    <a href="{{ route('category.show', $category->slug) }}"
                       class="product-catagory-single">

                        <div class="product-catagory-img">
                            <img src="{{ asset('storage/' . $category->main_image) }}"
                                 alt="{{ $category->name }}">
                        </div>

                        <div class="product-catagory-content">
                            <h5 class="product-catagory-title">
                                {{ $category->name }}
                            </h5>
                            <span class="product-catagory-items">
                                ({{ $category->products()->count() }} Items)
                            </span>
                        </div>

                    </a>

                </div>
            @endforeach

        </div>
    </div>
</div>
