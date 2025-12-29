<div class="blog-feed-section section-top-gap-100">
    <!-- Start Section Content -->
    <div class="section-content-gap">
        <div class="container">
            <div class="row">
                <div class="section-content">
                   <h3 class="section-title">Industrial Categories</h3>
                </div>
            </div>
        </div>
    </div> <!-- End Section Content -->

    <!-- Start Blog Feed Wrapper -->
    <div class="blog-feed-wrapper">
        <div class="container">
            <div class="row">

                @foreach($categoriesRandom->take(3) as $category)
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Blog Feed Single -->
                        <div class="blog-feed-single">
                            <a href="{{ route('category.show', $category->slug) }}"
                               class="blog-feed-img-link">

                                <img
                                    src="{{ asset('storage/' . $category->main_image) }}"
                                    alt="{{ $category->name }}"
                                    class="blog-feed-img"
                                >
                            </a>

                            <div class="blog-feed-content">
                                <h5 class="blog-feed-link">
                                    <a href="{{ route('category.show', $category->slug) }}">
                                        {{ $category->name }}
                                    </a>
                                </h5>
                            </div>
                        </div><!-- End Blog Feed Single -->
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- End Blog Feed Wrapper -->


</div>
