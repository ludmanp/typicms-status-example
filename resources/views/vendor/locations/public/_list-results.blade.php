<ul class="location-list-results-list">
    @foreach ($items as $location)
    <li class="location-list-results-item">
        <a class="location-list-results-item-link" href="{{ $location->uri() }}" title="{{ $location->title }}">
            <span class="location-list-results-item-title">{{ $location->title }}</span>
        </a>
    </li>
    @endforeach
</ul>
