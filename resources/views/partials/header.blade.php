@php
    $links = [
        [
            'url' => '/',
            'label' => 'Home',
            'active' => true,
        ],
        [
            'url' => '/about',
            'label' => 'Chi siamo',
            'active' => true,
        ],
        [
            'url' => '/books',
            'label' => 'Libri',
            'active' => true,
        ],
    ];
@endphp

<header>
    <nav>
        <ul class="d-flex justify-content-around align-items-center p-0 m-0">
            @foreach ($links as $link)
                <li class="list-unstyled">
                    <a class="text-decoration-none" href="{{ $link['url'] }}">
                        {{ $link['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>
