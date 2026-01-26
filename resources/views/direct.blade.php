<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شركة فرادة | Faradah - روابط مباشرة</title>
    <link rel="icon" type="image/png" href="{{ asset('icon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <div class="page-container">
        <!-- Header Section -->
        <header class="header-section">
            <img src="{{ asset('logos/faradah.png') }}" alt="شعار فرادة" class="logo-main">

            <button id="toggleProfileBtn" class="profile-toggle-btn">
                <span>تعرف علينا أكثر</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
        </header>

        <!-- Company Profile Sections (Collapsible) -->
        <div id="companyProfileSection" class="company-profile-section collapsed">

            <!-- Intro & Story -->
            <div class="profile-card">
                <h2 class="section-title">فرادة التقنية</h2>
                <p class="profile-text">
                    شركة تقنية سعودية متخصصة في التحول الرقمي للقطاع الوقفي والقطاع غير الربحي والصناديق العائلية، تجمع
                    بين خبرة استشارية وقفية تراكمية تمتد لأكثر من 20 عامًا وبين بناء منتجات رقمية مرنة قابلة للاستدامة.
                </p>

                <h2 class="section-title" style="margin-top: 2rem;">قصتنا</h2>
                <p class="profile-text">
                    انطلقت فرادة من قناعة عملية: التحدي الحقيقي ليس "بناء" الحل التقني، بل استدامته وتكيّفه مع احتياجات
                    الأوقاف المتغيرة. فقد كشفت التجارب مع مزودي خدمات خارجيين عن محدودية المرونة وضعف التوافق مع
                    المتطلبات الوقفية وتقادم الأنظمة مع الوقت. ومن هنا جاءت فرادة لتطوير حلول رقمية مصممة من الداخل
                    للوقف—تخدمه اليوم وتستمر معه لسنوات.
                </p>
            </div>

            <!-- What Distinguishes Us -->
            <div class="profile-card">
                <h2 class="section-title">ما يميزنا</h2>
                <ul class="profile-list">
                    <li class="profile-list-item">
                        <h3>شريك استراتيجي</h3>
                        <p>لا يكتفي بالتطوير، بل يصنع منظومات رقمية قابلة للنمو والاستدامة.</p>
                    </li>
                    <li class="profile-list-item">
                        <h3>حلول متخصصة</h3>
                        <p>تُعزز الحوكمة والكفاءة والامتثال، وتترجم المتطلبات الوقفية إلى تجارب رقمية واضحة.</p>
                    </li>
                    <li class="profile-list-item">
                        <h3>منهجية مبتكرة</h3>
                        <p>قائمة على الأتمتة والابتكار وربط التقنية بالأثر والاستدامة.</p>
                    </li>
                </ul>
            </div>

            <!-- What We Have Today -->
            <div class="profile-card">
                <h2 class="section-title">ماذا لدينا اليوم ؟</h2>
                <ul class="profile-list">
                    <li class="profile-list-item">
                        <h3>منصات رقمية</h3>
                        <p>متخصصة لدعم رحلة الوقف والجهات غير الربحية من التشخيص إلى التطبيق.</p>
                    </li>
                    <li class="profile-list-item">
                        <h3>تمكين البيانات</h3>
                        <p>نماذج من تمكين البيانات والذكاء الاصطناعي لرفع كفاءة القرار وزيادة الأثر.</p>
                    </li>
                    <li class="profile-list-item">
                        <h3>استدامة تقنية</h3>
                        <p>نهج يضمن أن الأنظمة لا تتقادم، بل تتطور مع احتياج المستخدم.</p>
                    </li>
                </ul>
            </div>

            <!-- Mission -->
            <div class="profile-card mission-card">
                <h2 class="section-title">رسالتنا</h2>
                <p class="profile-text">
                    إعادة تشكيل مستقبل الأوقاف الرقمية عبر حلول مستدامة تعزز الثقة، وترفع الكفاءة، وتوسّع الأثر.
                </p>
            </div>

        </div>

        <!-- Products Grid / Layout -->
        <main class="products-wrapper" id="productsContainer">
            <!-- Product 1: حباء -->
            <article class="product-card product-heba" data-product="heba">
                <div class="product-logo-wrapper">
                    <img src="{{ asset('logos/heba.png') }}" alt="شعار حباء" class="product-logo">
                </div>

                <div class="product-info">
                    <h2 class="product-name">حباء</h2>
                    <p class="product-tagline">إدارة المنح بمنظومة متكاملة</p>

                    <div class="product-details-content">
                        <span class="badge">منصة · منح · حوكمة</span>

                        <p class="product-description">
                            منصة منح رشيقة مخصصة للمؤسسات الأهلية والأوقاف برسوم رمزية، تمكّنها من إدارة دورة المنح
                            كاملة من الإعلان واستقبال الطلبات إلى الفرز والتقييم والاعتماد والصرف والمتابعة.
                            <br><br>
                            تركّز حباء على تقليل التعقيد الإداري وتسهيل تجربة الجهة المانحة والجهات المتقدمة، مع تقارير
                            واضحة ولوحات متابعة تساعد على رفع كفاءة القرار وتحسين الحوكمة دون الحاجة إلى إجراءات ثقيلة
                            أو أنظمة معقدة.
                        </p>

                        <div class="product-actions">
                            <a href="{{ asset('pdf/hebaa-report.pdf') }}" target="_blank" class="action-btn"
                                onclick="event.stopPropagation()">
                                <svg fill="none" class="w-5 h-5" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                                <span>نموذج التقارير</span>
                            </a>
                            <a href="{{ asset('pdf/hebaa-profile.pdf') }}" target="_blank" class="action-btn"
                                onclick="event.stopPropagation()">
                                <svg fill="none" class="w-5 h-5" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>العرض التعريفي</span>
                            </a>
                            <a href="https://platform.hebaa.sa/event-register" target="_blank"
                                class="action-btn primary" onclick="event.stopPropagation()">
                                <svg fill="none" class="w-5 h-5" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z">
                                    </path>
                                </svg>
                                <span>تسجيل مباشر</span>
                            </a>
                            <a href="https://hebaa.sa/" target="_blank" class="action-btn highlight"
                                onclick="event.stopPropagation()">
                                <svg fill="none" class="w-5 h-5" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                <span>جرب المنصة الآن</span>
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Product 2: الوقف النامي -->
            <article class="product-card product-nami" data-product="nami">
                <div class="product-logo-wrapper">
                    <img src="{{ asset('logos/nami.png') }}" alt="شعار الوقف النامي" class="product-logo name-logo">
                </div>

                <div class="product-info">
                    <h2 class="product-name">الوقف النامي</h2>
                    <p class="product-tagline">السوق الأول للأوقاف المعتمدين</p>

                    <div class="product-details-content">
                        <span class="badge">سوق وقفي · خدمات · شفافية</span>

                        <p class="product-description">
                            منصة سوق وقفي تربط الأوقاف ونظارها بمزودي خدمات وقفية مرخصين ومعتمدين في مجالات مثل الخدمات
                            القانونية والمحاسبية والاستثمارية والإدارية والشرعية وغيرها.
                            <br><br>
                            تمكّن المنصة الوقف من طلب الخدمة بسهولة، واستلام عروض فنية من أكثر من مزود، والمقارنة بينها،
                            ثم متابعة التنفيذ عبر رحلة منظمة وشفافة.
                            وتعزّز المنصة جودة الخدمة وثقة الأوقاف عبر آلية ضمان واضحة؛ إذ يتم الاحتفاظ بمبلغ الخدمة
                            داخل المنصة ولا يُصرف لمزود الخدمة إلا بعد تأكيد الوقف استلام الخدمة.
                        </p>

                        <div class="product-actions">
                            <a href="{{ asset('pdf/nami.pdf') }}" target="_blank" class="action-btn"
                                onclick="event.stopPropagation()">
                                <svg fill="none" class="w-5 h-5" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                                <span>نموذج عرض فني</span>
                            </a>
                            <a href="{{ asset('pdf/nami.pdf') }}" target="_blank" class="action-btn"
                                onclick="event.stopPropagation()">
                                <svg fill="none" class="w-5 h-5" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                    </path>
                                </svg>
                                <span>الملف التعريفي</span>
                            </a>
                            <a href="https://waqfnami.com/" target="_blank" class="action-btn primary"
                                onclick="event.stopPropagation()">
                                <svg fill="none" class="w-5 h-5" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                                <span>صفحة الوقف النامي</span>
                            </a>
                            <a href="https://waqfnami.com/provider-landing" target="_blank" class="action-btn"
                                onclick="event.stopPropagation()">
                                <svg fill="none" class="w-5 h-5" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <span>صفحة مزود الخدمة</span>
                            </a>
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
                    <p class="product-tagline">حوكمة مثالية لوقفك</p>

                    <div class="product-details-content">
                        <span class="badge">تأسيس · تنظيم · امتثال</span>

                        <p class="product-description">
                            منصة لتأسيس وتنظيم الوقف وفق المتطلبات النظامية بيسر وسهولة، تستهدف الراغب في الوقف وناظر
                            الوقف عبر رحلة واضحة خطوة بخطوة تقلل التردد وتزيل الغموض.
                            <br><br>
                            تساعد وديم المستخدم على التسجيل والتأسيس بسهولة، وتتابع المتطلبات النظامية مع أرشفة مركزية
                            وآمنة لبيانات الوقف ووثائقه، وتمكين التواصل المنظم مع المستفيدين بسجل يمكن الرجوع إليه. وديم
                            هي "بوابة الوقف" التي ترفع الأمان والامتثال وتضمن استمرارية الوقف.
                        </p>

                        <div class="product-actions">
                            <a href="https://wdeem.com" target="_blank" class="action-btn primary w-full"
                                onclick="event.stopPropagation()">
                                <svg fill="none" class="w-5 h-5" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                    </path>
                                </svg>
                                <span>زيارة المنصة</span>
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Product 4: AI المنح -->
            <article class="product-card product-ai" data-product="ai">
                <div class="product-logo-wrapper">
                    <img src="{{ asset('logos/ai.png') }}" alt="شعار AI المنح" class="product-logo">
                </div>

                <div class="product-info">
                    <h2 class="product-name">AI المنح</h2>
                    <p class="product-tagline">حلول ذكية لرفع كفاءة إدارة المنح</p>

                    <div class="product-details-content">
                        <span class="badge">ذكاء اصطناعي · تحليل · كفاءة</span>

                        <p class="product-description">
                            حزمة حلول ذكية موجهة للجهات المانحة لتحسين كفاءة إدارة المنح ورفع جودة القرار. تعمل على
                            تسريع فرز وتحليل طلبات المنح، واستخلاص المعلومات من الملفات، وتقديم ملخصات تساعد على التقييم
                            الأولي.
                            <br><br>
                            الهدف هو تقليل الزمن والجهد التشغيلي، ورفع الدقة والشفافية، وتحسين تجربة الطرفين دون المساس
                            بخصوصية البيانات ومعايير الامتثال.
                        </p>

                        <div class="product-actions">
                            <button class="action-btn w-full" onclick="event.stopPropagation()">
                                <svg fill="none" class="w-5 h-5" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>اعرف المزيد</span>
                            </button>
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
                                    <input type="checkbox" name="platforms[]" value="حباء">
                                    <div class="platform-info">
                                        <div class="platform-name">حباء</div>
                                        <div class="platform-desc">إدارة المنح بمنظومة متكاملة</div>
                                    </div>
                                </label>

                                <label class="platform-option">
                                    <input type="checkbox" name="platforms[]" value="الوقف النامي">
                                    <div class="platform-info">
                                        <div class="platform-name">الوقف النامي</div>
                                        <div class="platform-desc">السوق الأول للأوقاف</div>
                                    </div>
                                </label>

                                <label class="platform-option">
                                    <input type="checkbox" name="platforms[]" value="وديم">
                                    <div class="platform-info">
                                        <div class="platform-name">وديم</div>
                                        <div class="platform-desc">حوكمة مثالية لوقفك</div>
                                    </div>
                                </label>

                                <label class="platform-option">
                                    <input type="checkbox" name="platforms[]" value="AI المنح">
                                    <div class="platform-info">
                                        <div class="platform-name">AI المنح</div>
                                        <div class="platform-desc">حلول ذكية لرفع كفاءة إدارة المنح</div>
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
            // Profile Toggle Logic
            const profileBtn = document.getElementById('toggleProfileBtn');
            const profileSection = document.getElementById('companyProfileSection');

            if (profileBtn && profileSection) {
                profileBtn.addEventListener('click', () => {
                    const isExpanded = profileSection.classList.contains('expanded');

                    if (isExpanded) {
                        profileSection.classList.remove('expanded');
                        profileSection.classList.add('collapsed');
                        profileBtn.classList.remove('active');
                        profileBtn.querySelector('span').textContent = 'تعرف علينا أكثر';
                    } else {
                        profileSection.classList.remove('collapsed');
                        profileSection.classList.add('expanded');
                        profileBtn.classList.add('active');
                        profileBtn.querySelector('span').textContent = 'إخفاء التفاصيل';
                    }
                });
            }

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
                    // Scroll to top of products container
                    container.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    return;
                }

                // فتح وضع البطل لأول مرة
                openHeroMode(clickedCard);

                // Scroll to top of products container
                container.scrollIntoView({ behavior: 'smooth', block: 'start' });
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

        // Device Detection Helper Functions
        function getDeviceType() {
            const ua = navigator.userAgent;
            if (/(tablet|ipad|playbook|silk)|(android(?!.*mobi))/i.test(ua)) {
                return 'Tablet';
            }
            if (/Mobile|Android|iP(hone|od)|IEMobile|BlackBerry|Kindle|Silk-Accelerated|(hpw|web)OS|Opera M(obi|ini)/.test(ua)) {
                return 'Mobile';
            }
            return 'Desktop';
        }

        function getBrowserInfo() {
            const ua = navigator.userAgent;
            let browserName = 'Unknown';
            let browserVersion = 'Unknown';

            if (ua.indexOf('Firefox') > -1) {
                browserName = 'Firefox';
                browserVersion = ua.match(/Firefox\/([0-9.]+)/)?.[1] || 'Unknown';
            } else if (ua.indexOf('SamsungBrowser') > -1) {
                browserName = 'Samsung Browser';
                browserVersion = ua.match(/SamsungBrowser\/([0-9.]+)/)?.[1] || 'Unknown';
            } else if (ua.indexOf('Opera') > -1 || ua.indexOf('OPR') > -1) {
                browserName = 'Opera';
                browserVersion = ua.match(/(?:Opera|OPR)\/([0-9.]+)/)?.[1] || 'Unknown';
            } else if (ua.indexOf('Trident') > -1) {
                browserName = 'Internet Explorer';
                browserVersion = ua.match(/rv:([0-9.]+)/)?.[1] || 'Unknown';
            } else if (ua.indexOf('Edge') > -1) {
                browserName = 'Edge (Legacy)';
                browserVersion = ua.match(/Edge\/([0-9.]+)/)?.[1] || 'Unknown';
            } else if (ua.indexOf('Edg') > -1) {
                browserName = 'Edge (Chromium)';
                browserVersion = ua.match(/Edg\/([0-9.]+)/)?.[1] || 'Unknown';
            } else if (ua.indexOf('Chrome') > -1) {
                browserName = 'Chrome';
                browserVersion = ua.match(/Chrome\/([0-9.]+)/)?.[1] || 'Unknown';
            } else if (ua.indexOf('Safari') > -1) {
                browserName = 'Safari';
                browserVersion = ua.match(/Version\/([0-9.]+)/)?.[1] || 'Unknown';
            }

            return `${browserName} ${browserVersion}`;
        }

        function getOSInfo() {
            const ua = navigator.userAgent;
            let os = 'Unknown';

            if (ua.indexOf('Win') > -1) os = 'Windows';
            else if (ua.indexOf('Mac') > -1) os = 'macOS';
            else if (ua.indexOf('Linux') > -1) os = 'Linux';
            else if (ua.indexOf('Android') > -1) os = 'Android';
            else if (ua.indexOf('like Mac') > -1) os = 'iOS';

            return os;
        }

        // Form Submission Handler
        function handleFormSubmit(e) {
            e.preventDefault();

            const SCRIPT_URL = 'https://script.google.com/macros/s/AKfycbyW4TRrsHIlatrWQZcFX9tFNuq7IGlobXz9lxGubmjs_6FBESAu8enPgr9yDSl9rKQZhA/exec';

            if (SCRIPT_URL.includes('YOUR_GOOGLE_APPS_SCRIPT')) {
                alert('الرجاء إعداد رابط Google Apps Script أولاً في الكود.');
                return;
            }

            const form = e.target;
            const submitBtn = form.querySelector('.submit-button');
            const originalBtnText = submitBtn.innerText;

            // Optimistic UI Update (Background Sending)
            const formData = new FormData(form);

            // Prepare data for background sending
            const data = new URLSearchParams();
            data.append('name', formData.get('name'));
            data.append('phone', formData.get('phone'));
            data.append('email', formData.get('email'));

            // Handle array for platforms
            const platforms = formData.getAll('platforms[]');
            platforms.forEach(p => data.append('platforms[]', p));

            // Add device and tracking information
            data.append('page_type', 'جوال'); // Main page = Mobile
            data.append('device_type', getDeviceType());
            data.append('browser', getBrowserInfo());
            data.append('os', getOSInfo());
            data.append('screen_size', `${window.screen.width}x${window.screen.height}`);
            data.append('viewport_size', `${window.innerWidth}x${window.innerHeight}`);
            data.append('timestamp', new Date().toISOString());
            data.append('timezone', Intl.DateTimeFormat().resolvedOptions().timeZone);
            data.append('language', navigator.language);

            // 1. Show success Toast immediately
            showToast('شكراً لتسجيل اهتمامك! سنتواصل معك قريباً.');

            // 2. Reset and Close Form
            form.reset();
            submitBtn.disabled = false;
            submitBtn.innerText = originalBtnText;

            document.getElementById('toggleFormBtn').classList.remove('active');
            document.getElementById('formContainer').classList.remove('expanded');

            // 3. Send to Google Apps Script in Background
            fetch(SCRIPT_URL, {
                method: 'POST',
                mode: 'no-cors',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: data
            })
                .then(() => {
                    console.log('Background submission initiated');
                })
                .catch(error => {
                    console.error('Background submission error:', error);
                });
        }

        // Custom Toast Notification Function
        function showToast(message) {
            // Create container if not exists
            let container = document.querySelector('.toast-container');
            if (!container) {
                container = document.createElement('div');
                container.className = 'toast-container';
                document.body.appendChild(container);
            }

            // Create toast element
            const toast = document.createElement('div');
            toast.className = 'toast';
            toast.innerHTML = `
                <span class="toast-icon">✅</span>
                <span>${message}</span>
            `;

            container.appendChild(toast);

            // Animate in
            requestAnimationFrame(() => {
                toast.classList.add('show');
            });

            // Remove after 3 seconds
            setTimeout(() => {
                toast.classList.remove('show');
                setTimeout(() => {
                    toast.remove();
                }, 400); // Wait for transition out
            }, 3000);
        }
    </script>
</body>

</html>