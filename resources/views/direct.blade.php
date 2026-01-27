<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    @include('partials.head')
</head>

<body>
    @include('partials.shared-content', ['linkType' => 'direct'])

    {{-- Universal Modal System --}}
    <div id="universalModal" class="modal-overlay" onclick="closeModal(event)">
        <button type="button" class="modal-close-btn fixed-btn"
            onclick="event.stopPropagation(); closeModal(null, true)">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <div class="modal-content-wrapper">
            <div id="modalBody" class="modal-body">
                <div class="modal-placeholder">
                    <div class="loader"></div>
                    <p>جاري التحميل...</p>
                </div>
                <iframe id="modalIframe" src="" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <script>
        @include('partials.shared-scripts', ['pageType' => 'جوال'])

        // Modal Logic
        function openModal(type, url, event) {
            if (event) event.stopPropagation();
            const modal = document.getElementById('universalModal');
            const iframe = document.getElementById('modalIframe');
            const placeholder = document.querySelector('.modal-placeholder');
            if (!modal || !iframe) return;
            placeholder.style.display = 'flex';
            iframe.style.opacity = '0';
            iframe.src = url;
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
            iframe.onload = () => {
                placeholder.style.display = 'none';
                iframe.style.opacity = '1';
            };
        }

        function closeModal(event, force = false) {
            if (force || (event && event.target.id === 'universalModal')) {
                const modal = document.getElementById('universalModal');
                const iframe = document.getElementById('modalIframe');
                if (!modal || !iframe) return;
                modal.classList.remove('active');
                document.body.style.overflow = '';
                setTimeout(() => {
                    iframe.src = '';
                }, 300);
            }
        }
    </script>
</body>

</html>