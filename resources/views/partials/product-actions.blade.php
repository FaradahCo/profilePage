{{-- Dynamic Product Card with Actions --}}
<article class="product-card product-{{ $product }}" data-product="{{ $product }}">
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
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</article>