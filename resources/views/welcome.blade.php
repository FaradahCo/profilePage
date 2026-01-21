<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شركة فرادة | Faradah Co.</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <div class="page-container">
        <!-- Header Section -->
        <header class="header-section">
            <img src="{{ asset('logos/faradah.png') }}" alt="شعار فرادة" class="logo-main">
            <p class="company-subtitle">نصنع التميز في عالم التقنية</p>
        </header>

        <!-- Products Grid / Layout -->
        <main class="products-wrapper" id="productsContainer">
            <!-- Product 1: حباء -->
            <article class="product-card product-heba" data-product="heba">
                <div class="product-logo-wrapper">
                    <img src="{{ asset('logos/heba.png') }}" alt="شعار حباء" class="product-logo">
                </div>

                <div class="product-info">
                    <h2 class="product-name">حباء</h2>
                    <p class="product-tagline">منصة العطاء الرقمية المتكاملة</p>

                    <div class="product-details-content">
                        <span class="badge">منصة · عطاء · تواصل</span>

                        <p class="product-description">
                            حباء هي منصة رقمية شاملة تربط بين المحسنين والمستفيدين بطريقة آمنة وشفافة،
                            تسهل عملية التبرع وتضمن وصول المساعدات لمستحقيها بأعلى معايير الحوكمة.
                        </p>

                        <div class="features-list">
                            <div class="feature-item">
                                <svg class="feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>إدارة ذكية للحملات الخيرية</span>
                            </div>
                            <div class="feature-item">
                                <svg class="feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>تتبع شفاف للتبرعات</span>
                            </div>
                            <div class="feature-item">
                                <svg class="feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                <span>تقارير تفصيلية للمحسنين</span>
                            </div>
                            <div class="feature-item">
                                <svg class="feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                    </path>
                                </svg>
                                <span>واجهة سهلة الاستخدام</span>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Product 2: الوقف النامي -->
            <article class="product-card product-nami" data-product="nami">
                <div class="product-logo-wrapper">
                    <img src="{{ asset('logos/nami.png') }}" alt="شعار الوقف النامي" class="product-logo">
                </div>

                <div class="product-info">
                    <h2 class="product-name">الوقف النامي</h2>
                    <p class="product-tagline">نمو مستدام للأوقاف الخيرية</p>

                    <div class="product-details-content">
                        <span class="badge">استدامة · نمو · ريادة</span>

                        <p class="product-description">
                            نظام تقني متطور لإدارة الأوقاف واستثمارها، يهدف لتعظيم العائد الاجتماعي والمالي
                            للأصول الموقوفة من خلال أدوات استثمارية ذكية ورقابة فعالة.
                        </p>

                        <div class="features-list">
                            <div class="feature-item">
                                <svg class="feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                                <span>تنمية الأصول الوقفية</span>
                            </div>
                            <div class="feature-item">
                                <svg class="feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                                    </path>
                                </svg>
                                <span>إدارة مالية دقيقة</span>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Product 3: وديم -->
            <article class="product-card product-wdeem" data-product="wdeem">
                <div class="product-logo-wrapper">
                    <img src="{{ asset('logos/Wdeem.png') }}" alt="شعار وديم" class="product-logo">
                </div>

                <div class="product-info">
                    <h2 class="product-name">وديم</h2>
                    <p class="product-tagline">منصة الخدمات الذكية المتكاملة</p>

                    <div class="product-details-content">
                        <span class="badge">سرعة · ذكاء · تكامل</span>

                        <p class="product-description">
                            الحل الأمثل لإدارة الخدمات الرقمية، يقدم تجربة مستخدم سلسة لربط مقدمي الخدمات
                            بالعملاء مع أدوات جدولة ودفع ومتابعة فورية.
                        </p>

                        <div class="features-list">
                            <div class="feature-item">
                                <svg class="feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>جدولة مواعيد آلية</span>
                            </div>
                            <div class="feature-item">
                                <svg class="feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                                    </path>
                                </svg>
                                <span>بوابات دفع متعددة</span>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Product 4: AI المنح -->
            <article class="product-card product-ai" data-product="ai">
                <div class="product-logo-wrapper">
                    <img src="{{ asset('logos/heba.png') }}" alt="شعار AI المنح" class="product-logo">
                </div>

                <div class="product-info">
                    <h2 class="product-name">AI المنح</h2>
                    <p class="product-tagline">الذكاء الاصطناعي لإدارة المنح</p>

                    <div class="product-details-content">
                        <span class="badge">مستقبل · تحليل · دقة</span>

                        <p class="product-description">
                            نظام ثوري يستخدم خوارزميات الذكاء الاصطناعي لتحليل بيانات المنح والتبرعات،
                            مما يساعد المؤسسات المانحة على اتخاذ قرارات مدروسة وتوجيه الدعم للأكثر احتياجاً.
                        </p>

                        <div class="features-list">
                            <div class="feature-item">
                                <svg class="feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                    </path>
                                </svg>
                                <span>تحليل تنبئي للاحتياجات</span>
                            </div>
                            <div class="feature-item">
                                <svg class="feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                    </path>
                                </svg>
                                <span>تقارير أداء فورية</span>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </main>

        <!-- Thumbnails Container (للمصغرات) -->
        <div class="thumbnails-container" id="thumbnailsContainer"></div>

        <!-- Interest Registration Section -->
        <section class="interest-section">
            <button class="interest-button" id="toggleFormBtn">
                <span>سجل اهتمامك</span>
                <span class="arrow">▼</span>
            </button>

            <div class="interest-form-container" id="formContainer">
                <div class="interest-form-content">
                    <h2 class="form-title">سجل اهتمامك</h2>
                    <p class="form-subtitle">نسعد بتواصلك معنا لمعرفة المزيد عن منصاتنا</p>

                    <form id="interestForm" onsubmit="handleFormSubmit(event)">
                        <!-- Name Field -->
                        <div class="form-group">
                            <label class="form-label" for="name">الاسم</label>
                            <input type="text" id="name" name="name" class="form-input" placeholder="أدخل اسمك الكامل"
                                required>
                        </div>

                        <!-- Phone Field -->
                        <div class="form-group">
                            <label class="form-label" for="phone">رقم الجوال</label>
                            <input type="tel" id="phone" name="phone" class="form-input" placeholder="05XXXXXXXX"
                                pattern="[0-9]{10}" required>
                        </div>

                        <!-- Email Field (Optional) -->
                        <div class="form-group">
                            <label class="form-label" for="email">
                                البريد الإلكتروني
                                <span class="optional">(اختياري)</span>
                            </label>
                            <input type="email" id="email" name="email" class="form-input"
                                placeholder="example@domain.com">
                        </div>

                        <!-- Platforms Multi-Select -->
                        <div class="form-group">
                            <label class="form-label">المنصات التي تهمك</label>
                            <div class="platforms-grid">
                                <label class="platform-option">
                                    <input type="checkbox" name="platforms[]" value="heba">
                                    <div class="platform-info">
                                        <div class="platform-name">حباء</div>
                                        <div class="platform-desc">منصة العطاء الرقمية لربط المحسنين بالمستفيدين</div>
                                    </div>
                                </label>

                                <label class="platform-option">
                                    <input type="checkbox" name="platforms[]" value="nami">
                                    <div class="platform-info">
                                        <div class="platform-name">الوقف النامي</div>
                                        <div class="platform-desc">إدارة واستثمار الأوقاف بذكاء</div>
                                    </div>
                                </label>

                                <label class="platform-option">
                                    <input type="checkbox" name="platforms[]" value="wdeem">
                                    <div class="platform-info">
                                        <div class="platform-name">وديم</div>
                                        <div class="platform-desc">منصة الخدمات الذكية المتكاملة</div>
                                    </div>
                                </label>

                                <label class="platform-option">
                                    <input type="checkbox" name="platforms[]" value="ai">
                                    <div class="platform-info">
                                        <div class="platform-name">AI المنح</div>
                                        <div class="platform-desc">الذكاء الاصطناعي لإدارة المنح</div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="submit-button">إرسال الطلب</button>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const container = document.getElementById('productsContainer');
            const thumbnailsContainer = document.getElementById('thumbnailsContainer');
            const cards = Array.from(document.querySelectorAll('.product-card'));
            const body = document.body;

            // Store original order for grid restoration
            const originalOrder = cards.map(card => card.dataset.product);

            cards.forEach(card => {
                card.addEventListener('click', () => handleCardClick(card));
            });

            function handleCardClick(clickedCard) {
                const isAlreadyHero = clickedCard.classList.contains('is-hero');
                
                // إذا ضغط على البطاقة المفتوحة: أغلقها وارجع للشبكة
                if (isAlreadyHero) {
                    closeHeroMode();
                    return;
                }
                
                // إذا في وضع البطل وضغط على بطاقة مصغرة: بدل البطل
                if (body.classList.contains('hero-mode')) {
                    switchHero(clickedCard);
                    return;
                }
                
                // فتح وضع البطل لأول مرة
                openHeroMode(clickedCard);
            }

            function openHeroMode(heroCard) {
                body.classList.add('hero-mode');
                
                // Set hero
                heroCard.classList.add('is-hero');
                heroCard.classList.remove('is-thumbnail');
                
                // Move hero to container
                container.appendChild(heroCard);
                
                // Move others to thumbnails
                cards.forEach(card => {
                    if (card !== heroCard) {
                        card.classList.add('is-thumbnail');
                        card.classList.remove('is-hero');
                        thumbnailsContainer.appendChild(card);
                    }
                });
            }

            function switchHero(newHeroCard) {
                const currentHero = cards.find(c => c.classList.contains('is-hero'));
                
                if (currentHero) {
                    // Current hero becomes thumbnail
                    currentHero.classList.remove('is-hero');
                    currentHero.classList.add('is-thumbnail');
                    thumbnailsContainer.appendChild(currentHero);
                }
                
                // New hero
                newHeroCard.classList.remove('is-thumbnail');
                newHeroCard.classList.add('is-hero');
                container.appendChild(newHeroCard);
            }

            function closeHeroMode() {
                body.classList.remove('hero-mode');
                
                // Remove all states
                cards.forEach(card => {
                    card.classList.remove('is-hero', 'is-thumbnail');
                });
                
                // Restore original order in grid
                originalOrder.forEach(productId => {
                    const card = cards.find(c => c.dataset.product === productId);
                    if (card) {
                        container.appendChild(card);
                    }
                });
            }

            // Expandable Form Logic
            const toggleBtn = document.getElementById('toggleFormBtn');
            const formContainer = document.getElementById('formContainer');

            toggleBtn.addEventListener('click', (e) => {
                e.preventDefault();
                toggleBtn.classList.toggle('active');
                formContainer.classList.toggle('expanded');
            });
        });

        // Form Submission Handler
        function handleFormSubmit(e) {
            e.preventDefault();

            const formData = new FormData(e.target);
            const data = {
                name: formData.get('name'),
                phone: formData.get('phone'),
                email: formData.get('email'),
                platforms: formData.getAll('platforms[]')
            };

            console.log('Form Data:', data);
            alert('شكراً لتسجيل اهتمامك! سنتواصل معك قريباً.');
            e.target.reset();
        }
    </script>
</body>

</html>