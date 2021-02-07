@extends('core::public.master')

@section('title', $model->title.' – '.__('Locations').' – '.$websiteTitle)
@section('ogTitle', $model->title)
@section('description', $model->summary)
@section('ogImage', $model->present()->image(1200, 630))
@section('bodyClass', 'body-locations body-location-'.$model->id.' body-page body-page-'.$page->id)

@section('content')

<article class="location">
    <header class="location-header">
        <div class="location-header-container">
            <div class="location-header-navigator">
                @include('core::public._items-navigator', ['module' => 'Locations', 'model' => $model])
            </div>
            <h1 class="location-title">{{ $model->title }}</h1>
        </div>
    </header>
    <div class="location-body">
        @include('locations::public._json-ld', ['location' => $model])
        @empty(!$model->summary)
        <p class="location-summary">{!! nl2br($model->summary) !!}</p>
        @endempty
        @empty(!$model->image)
        <picture class="location-picture">
            <img class="location-picture-image" src="{{ $model->present()->image(2000, 1000) }}" width="{{ $model->image->width }}" height="{{ $model->image->height }}" alt="">
            @empty(!$model->image->description)
            <legend class="location-picture-legend">{{ $model->image->description }}</legend>
            @endempty
        </picture>
        @endempty
        @empty(!$model->body)
        <div class="rich-content">{!! $model->present()->body !!}</div>
        @endempty
        @include('files::public._documents')
        @include('files::public._images')
    </div>
</article>

@endsection
