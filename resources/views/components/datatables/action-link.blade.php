<a
href="{{ $attributes->get('url') }}"
data-bs-toggle="tooltip" data-bs-placement="top"
title="{{ $attributes->get('title') }}"
type="button"
class="{{ $attributes->get('class') }}">
{!! $slot !!}
</a>