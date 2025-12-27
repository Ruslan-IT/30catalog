@extends('layouts.app')

@section('title', 'Главная')

@section('content')


    @include('partials.header')

    <div class="breadcrumb-section">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between justify-content-md-between  align-items-center flex-md-row flex-column">

                        <h1 class="breadcrumb-title">Product Details Default</h1>

                        <div class="breadcrumb-nav">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}">Главная</a>
                                    </li>

                                    @foreach($category->breadcrumbs as $crumb)
                                        <li class="{{ $loop->last ? 'active' : '' }}">
                                            @if($loop->last)
                                                {{ $crumb->name }}
                                            @else
                                                <a href="{{ route('category.show', $crumb->slug) }}">
                                                    {{ $crumb->name }}
                                                </a>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-feed-wrapper">
        <div class="container">
            <div class="row">
                @forelse($products as $product)
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Blog Feed Single -->
                        <div class="blog-feed-single">
                            <a href="{{ route('product.show', $product->slug) }}" class="blog-feed-img-link">
                                <img src="{{ asset('storage/' . $product->main_image) }}" alt="{{ $product->title }}" class="blog-feed-img">
                            </a>
                            <div class="blog-feed-content">
                                <div class="blog-feed-post-meta">
                                    <span>By:</span>
                                    <a href="" class="blog-feed-post-meta-author">Admin</a> -
                                    <a href="" class="blog-feed-post-meta-date">Sep 14, 2020</a>
                                </div>
                                <h5 class="blog-feed-link">
                                    <a href="{{ route('product.show', $product->slug) }}">
                                        {{ $product->title }}
                                    </a>
                                </h5>
                            </div>
                        </div><!-- End Blog Feed Single -->
                    </div>
                @empty
                    <p>Товары не найдены</p>
                @endforelse
            </div>

        </div>
    </div>


    @include('partials.footer')


@endsection


