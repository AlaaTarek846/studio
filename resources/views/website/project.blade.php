@extends('layout.website.master')

@section('title',__('website.Acting workshops'))

@section('content')
    <!-- Banner Header -->
    <section class="section section-banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12 col-12">
                    <h2 class="title-h2">{{ __('website.Acting workshops') }}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('website.home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('website.Acting workshops') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="section-banner__box">
            <div class="section-banner__thumb">
                <img class="section-banner__img" src="/website/img/header-img.jpg" alt="Image Banner">
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="section section-portfolio">
        <div class="container">
            @if($categories->count() > 0)
                <ul class="nav nav-tabs nav-tabs-portfolio" id="Portfolio" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link {{ $categoryId == 'all' ? 'active' : '' }}" 
                           id="all-tab" 
                           data-toggle="tab" 
                           href="#all" 
                           role="tab" 
                           aria-controls="all" 
                           aria-selected="{{ $categoryId == 'all' ? 'true' : 'false' }}"
                           data-category="all">All</a>
                    </li>
                    @foreach($categories as $category)
                        <li class="nav-item">
                            <a class="nav-link {{ $categoryId == $category->id ? 'active' : '' }}" 
                               id="category-{{ $category->id }}-tab" 
                               data-toggle="tab" 
                               href="#category-{{ $category->id }}" 
                               role="tab" 
                               aria-controls="category-{{ $category->id }}" 
                               aria-selected="{{ $categoryId == $category->id ? 'true' : 'false' }}"
                               data-category="{{ $category->id }}">{{ $category->title }}</a>
                        </li>
                    @endforeach
                </ul>
            @endif
            
            <div class="tab-content tab-portfolio" id="myTabContent">
                <div class="tab-pane fade {{ $categoryId == 'all' ? 'show active' : '' }}" 
                     id="all" 
                     role="tabpanel" 
                     aria-labelledby="all-tab">
                    <div class="box-portfolio" id="projects-container-all">
                        @if($categoryId == 'all')
                            @foreach($projects as $project)
                                <div class="box-portfolio-item">
                                    <a href="{{ route('project-details', $project->slug) }}">
                                        <div class="portfolio-thumb" style="background-image: url('{{ $project->thumbnail ? $project->thumbnail->url : '/website/img/service.jpg' }}'); background-size: cover; background-position: center; min-height: 300px;">
                                            <div class="portfolio-thumb__info">
                                                <p class="portfolio-thumb__name">{{ $project->title }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                            @if($hasMore)
                                <div class="text-center w-100" id="load-more-container-all" style="flex: 0 0 100%; max-width: 100%; margin-top: 2rem;">
                                    <button type="button" class="load-more-btn btn btn-primary" data-offset="6" data-category="all">{{ __('website.Load more') }}</button>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
                
                @foreach($categories as $category)
                    <div class="tab-pane fade {{ $categoryId == $category->id ? 'show active' : '' }}" 
                         id="category-{{ $category->id }}" 
                         role="tabpanel" 
                         aria-labelledby="category-{{ $category->id }}-tab">
                        <div class="box-portfolio" id="projects-container-{{ $category->id }}">
                            @if($categoryId == $category->id)
                                @foreach($projects as $project)
                                    <div class="box-portfolio-item">
                                        <a href="{{ route('project-details', $project->slug) }}">
                                            <div class="portfolio-thumb" style="background-image: url('{{ $project->thumbnail ? $project->thumbnail->url : '/website/img/service.jpg' }}'); background-size: cover; background-position: center; min-height: 300px;">
                                                <div class="portfolio-thumb__info">
                                                    <p class="portfolio-thumb__name">{{ $project->title }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                                @if($hasMore)
                                    <div class="text-center w-100" id="load-more-container-{{ $category->id }}" style="flex: 0 0 100%; max-width: 100%; margin-top: 2rem;">
                                        <button type="button" class="load-more-btn btn btn-primary" data-offset="6" data-category="{{ $category->id }}">{{ __('website.Load more') }}</button>
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

@push('script')
<script>
$(document).ready(function() {
    // Handle tab clicks
    $(document).on('click', '.nav-tabs-portfolio .nav-link', function(e) {
        e.preventDefault();
        const categoryId = $(this).attr('data-category');
        
        // Update URL without reload
        const url = new URL(window.location);
        if (categoryId === 'all') {
            url.searchParams.delete('category');
        } else {
            url.searchParams.set('category', categoryId);
        }
        window.history.pushState({}, '', url);
        
        // Load projects for this category
        loadProjectsByCategory(categoryId);
    });
    
    // Load projects by category
    function loadProjectsByCategory(categoryId) {
        const containerId = 'projects-container-' + categoryId;
        const $container = $('#' + containerId);
        if ($container.length === 0) return;
        
        // Show loading
        $container.html('<div class="text-center w-100" style="flex: 0 0 100%; padding: 2rem;"><p>Loading...</p></div>');
        
        $.ajax({
            url: '{{ route("projects") }}',
            type: 'GET',
            data: { category: categoryId },
            success: function(html) {
                const $html = $(html);
                const $newContainer = $html.find('#' + containerId);
                if ($newContainer.length > 0) {
                    $container.html($newContainer.html());
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
                $container.html('<div class="text-center w-100" style="flex: 0 0 100%; padding: 2rem;"><p>حدث خطأ أثناء تحميل المشاريع</p></div>');
            }
        });
    }

    // Handle load more button clicks
    $(document).on('click', '.load-more-btn', function() {
        const $btn = $(this);
        const offset = parseInt($btn.attr('data-offset'));
        const categoryId = $btn.attr('data-category');
        const containerId = 'projects-container-' + categoryId;
        const $container = $('#' + containerId);
        const $loadMoreContainer = $btn.closest('[id^="load-more-container"]');
        if ($container.length === 0 || $loadMoreContainer.length === 0) return;
        $btn.prop('disabled', true);
        $btn.text('Loading...');
        
        $.ajax({
            url: '{{ route("projects.load-more") }}',
            type: 'GET',
            data: {
                offset: offset,
                category: categoryId
            },
            dataType: 'json',
            headers: {
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            success: function(data) {
                if (data.html) {
                    // Append new projects before the load more button
                    const $tempDiv = $('<div>').html(data.html);
                    const $newItems = $tempDiv.find('.box-portfolio-item');
                    
                    $newItems.each(function() {
                        $loadMoreContainer.before($(this));
                    });
                    
                    // Update offset
                    const newOffset = data.nextOffset;
                    $btn.attr('data-offset', newOffset);
                    
                    // Hide button if no more projects
                    if (!data.hasMore) {
                        $loadMoreContainer.hide();
                    } else {
                        $btn.prop('disabled', false);
                        $btn.text('{{ __("website.Load more") }}');
                    }
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
                $btn.prop('disabled', false);
                $btn.text('{{ __("website.Load more") }}');
                alert('حدث خطأ أثناء تحميل المشاريع. يرجى المحاولة مرة أخرى.');
            }
        });
    });
});
</script>
@endpush