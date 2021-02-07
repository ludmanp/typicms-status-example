<li class="location-list-item">
    <a class="location-list-item-link" href="{{ $location->uri() }}" title="{{ $location->title }}">
        <div class="location-list-item-title">{{ $location->title }}</div>
        <div class="location-list-item-image-wrapper">
            @empty (!$location->image)
            <img class="location-list-item-image" src="{{ $location->present()->image(null, 200) }}" width="{{ $location->image->width }}" height="{{ $location->image->height }}" alt="{{ $location->image->alt_attribute }}">
            @endempty
        </div>
    </a>
</li>
