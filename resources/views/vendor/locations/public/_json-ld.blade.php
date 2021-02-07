{{--
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "",
    "name": "{{ $location->title }}",
    "description": "{{ $location->summary !== '' ? $location->summary : strip_tags($location->body) }}",
    "image": [
        "{{ $location->present()->image() }}"
    ],
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ $location->uri() }}"
    }
}
</script>
--}}
