{{-- Dynamic Product Card with Actions --}}
<article class="product-card product-{{ $product }}" data-product="{{ $product }}">
    <div class="click-indicator">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" stroke-width="2"
            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M8 13v-8.5a1.5 1.5 0 0 1 3 0v7.5"></path>
            <path d="M11 11.5v-2a1.5 1.5 0 0 1 3 0v2.5"></path>
            <path d="M14 10.5a1.5 1.5 0 0 1 3 0v1.5"></path>
            <path
                d="M17 11.5a1.5 1.5 0 0 1 3 0v4.5a6 6 0 0 1 -6 6h-2h.208a6 6 0 0 1 -5.012 -2.7l-.196 -.3c-.312 -.479 -1.407 -2.388 -3.286 -5.728a1.5 1.5 0 0 1 .536 -2.022a1.867 1.867 0 0 1 2.28 .28l1.47 1.47">
            </path>
        </svg>
    </div>
    <div class="product-logo-wrapper">
        <img src="{{ asset($logo) }}" alt="شعار {{ $name }}" class="product-logo {{ $logoClass ?? '' }}">
    </div>

    <div class="product-info">
        <h2 class="product-name">{{ $name }}</h2>
        <p class="product-tagline">{{ $tagline }}</p>

        <div class="product-details-content">
            <span class="badge">{{ $badge }}</span>
            <p class="product-description">{!! $description !!}</p>

            <div class="product-actions">
                @foreach($actions as $action)
                    @if($action['type'] === 'pdf')
                        @if($linkType === 'direct')
                            <a href="{{ asset($action['url']) }}" target="_blank" class="{{ $action['class'] }}"
                                onclick="event.stopPropagation()">
                                <svg fill="none" class="w-5 h-5" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                                <span>{{ $action['label'] }}</span>
                            </a>
                        @else
                            <button class="{{ $action['class'] }}" onclick="openModal('pdf', '{{ asset($action['url']) }}', event)">
                                <svg fill="none" class="w-5 h-5" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                                <span>{{ $action['label'] }}</span>
                            </button>
                        @endif
                    @elseif($action['type'] === 'link')
                        @if($linkType === 'direct')
                            <a href="{{ $action['url'] }}" target="_blank" class="{{ $action['class'] }}"
                                onclick="event.stopPropagation()">
                                <svg fill="none" class="w-5 h-5" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                <span>{{ $action['label'] }}</span>
                            </a>
                        @else
                            <button class="{{ $action['class'] }}" onclick="openModal('iframe', '{{ $action['url'] }}', event)">
                                <svg fill="none" class="w-5 h-5" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                <span>{{ $action['label'] }}</span>
                            </button>
                        @endif
                    @elseif($action['type'] === 'button')
                        <button class="{{ $action['class'] }}" onclick="event.stopPropagation()">
                            <svg fill="none" class="w-5 h-5" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>{{ $action['label'] }}</span>
                        </button>
                    @elseif($action['type'] === 'video')
                        <button class="{{ $action['class'] }}" onclick="openModal('iframe', '{{ $action['url'] }}', event)">
                            <svg fill="none" class="w-5 h-5" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>{{ $action['label'] }}</span>
                        </button>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</article>