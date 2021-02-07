<ul class="location-list-list">
    @foreach ($items as $location)
    @include('locations::public._list-item')
    @endforeach
</ul>
