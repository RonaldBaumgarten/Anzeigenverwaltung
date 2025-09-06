@props(['active' => false])

<a class="nav-link px-2 {{ $active ? 'link-secondary': 'link-body-emphasis' }}"
   aria-current="{{ $active ? 'page': 'false' }}"
   {{ $attributes }}
   >{{ $slot }}</a>
