<div>
    <ol class="breadcrumb m-0">
        @foreach ($items as $item)
            <li class="breadcrumb-item {{ $item['active'] ?? '' ? 'active' : '' }}">
                @if (!($item['active'] ?? false))
                    <a href="{{ $item['href'] ?? 'javascript: void(0);' }}">{{ $item['text'] }}</a>
                @else
                    {{ $item['text'] }}
                @endif
            </li>
        @endforeach
    </ol>
</div>