{{-- Shared Content: Header, Profile, Products, Form --}}
<div class="page-container">
    {{-- Header Section --}}
    <header class="header-section">
        <img src="{{ asset('logos/faradah.png') }}" alt="شعار فرادة" class="logo-main">

        <button id="toggleProfileBtn" class="profile-toggle-btn">
            <span>تعرف علينا أكثر</span>
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>
    </header>

    {{-- Company Profile Sections (Collapsible) --}}
    <div id="companyProfileSection" class="company-profile-section collapsed">
        {{-- Intro & Story --}}
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

        {{-- What Distinguishes Us --}}
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

        {{-- What We Have Today --}}
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

        {{-- Mission --}}
        <div class="profile-card mission-card">
            <h2 class="section-title">رسالتنا</h2>
            <p class="profile-text">
                إعادة تشكيل مستقبل الأوقاف الرقمية عبر حلول مستدامة تعزز الثقة، وترفع الكفاءة، وتوسّع الأثر.
            </p>
        </div>
    </div>

    {{-- Products Grid --}}
    <main class="products-wrapper" id="productsContainer">
        @include('partials.product-actions', [
            'product' => 'heba',
            'logo' => 'logos/heba.png',
            'name' => 'حباء',
            'tagline' => 'إدارة المنح بمنظومة متكاملة',
            'badge' => 'منصة · منح · حوكمة',
            'description' => 'منصة منح رشيقة مخصصة للمؤسسات الأهلية والأوقاف برسوم رمزية، تمكّنها من إدارة دورة المنح كاملة من الإعلان واستقبال الطلبات إلى الفرز والتقييم والاعتماد والصرف والمتابعة.<br><br>تركّز حباء على تقليل التعقيد الإداري وتسهيل تجربة الجهة المانحة والجهات المتقدمة، مع تقارير واضحة ولوحات متابعة تساعد على رفع كفاءة القرار وتحسين الحوكمة دون الحاجة إلى إجراءات ثقيلة أو أنظمة معقدة.',
            'actions' => [
                ['type' => 'pdf', 'url' => 'pdf/hebaa-report.pdf', 'label' => 'نموذج التقارير', 'class' => 'action-btn'],
                ['type' => 'pdf', 'url' => 'pdf/hebaa-profile.pdf', 'label' => 'العرض التعريفي', 'class' => 'action-btn'],
                ['type' => 'link', 'url' => 'https://platform.hebaa.sa/event-register', 'label' => 'تسجيل مباشر', 'class' => 'action-btn primary'],
                ['type' => 'link', 'url' => 'https://hebaa.sa/', 'label' => 'جرب المنصة الآن', 'class' => 'action-btn highlight']
            ]
        ])

        @include('partials.product-actions', [
            'product' => 'nami',
            'logo' => 'logos/nami.png',
            'logoClass' => 'name-logo',
            'name' => 'الوقف النامي',
            'tagline' => 'السوق الأول للأوقاف المعتمدين',
            'badge' => 'سوق وقفي · خدمات · شفافية',
            'description' => 'منصة سوق وقفي تربط الأوقاف ونظارها بمزودي خدمات وقفية مرخصين ومعتمدين في مجالات مثل الخدمات القانونية والمحاسبية والاستثمارية والإدارية والشرعية وغيرها.<br><br>تمكّن المنصة الوقف من طلب الخدمة بسهولة، واستلام عروض فنية من أكثر من مزود، والمقارنة بينها، ثم متابعة التنفيذ عبر رحلة منظمة وشفافة. وتعزّز المنصة جودة الخدمة وثقة الأوقاف عبر آلية ضمان واضحة؛ إذ يتم الاحتفاظ بمبلغ الخدمة داخل المنصة ولا يُصرف لمزود الخدمة إلا بعد تأكيد الوقف استلام الخدمة.',
            'actions' => [
                ['type' => 'pdf', 'url' => 'pdf/nami.pdf', 'label' => 'نموذج عرض فني', 'class' => 'action-btn'],
                ['type' => 'pdf', 'url' => 'pdf/nami.pdf', 'label' => 'الملف التعريفي', 'class' => 'action-btn'],
                ['type' => 'link', 'url' => 'https://waqfnami.com/', 'label' => 'صفحة الوقف النامي', 'class' => 'action-btn primary'],
                ['type' => 'link', 'url' => 'https://waqfnami.com/provider-landing', 'label' => 'صفحة مزود الخدمة', 'class' => 'action-btn']
            ]
        ])

        @include('partials.product-actions', [
            'product' => 'wdeem',
            'logo' => 'logos/Wdeem.png',
            'name' => 'وديم',
            'tagline' => 'حوكمة مثالية لوقفك',
            'badge' => 'تأسيس · تنظيم · امتثال',
            'description' => 'منصة لتأسيس وتنظيم الوقف وفق المتطلبات النظامية بيسر وسهولة، تستهدف الراغب في الوقف وناظر الوقف عبر رحلة واضحة خطوة بخطوة تقلل التردد وتزيل الغموض.<br><br>تساعد وديم المستخدم على التسجيل والتأسيس بسهولة، وتتابع المتطلبات النظامية مع أرشفة مركزية وآمنة لبيانات الوقف ووثائقه، وتمكين التواصل المنظم مع المستفيدين بسجل يمكن الرجوع إليه. وديم هي "بوابة الوقف" التي ترفع الأمان والامتثال وتضمن استمرارية الوقف.',
            'actions' => [
                ['type' => 'link', 'url' => 'https://wdeem.com', 'label' => 'زيارة المنصة', 'class' => 'action-btn primary w-full']
            ]
        ])

        @include('partials.product-actions', [
            'product' => 'ai',
            'logo' => 'logos/ai.png',
            'name' => 'AI المنح',
            'tagline' => 'حلول ذكية لرفع كفاءة إدارة المنح',
            'badge' => 'ذكاء اصطناعي · تحليل · كفاءة',
            'description' => 'حزمة حلول ذكية موجهة للجهات المانحة لتحسين كفاءة إدارة المنح ورفع جودة القرار. تعمل على تسريع فرز وتحليل طلبات المنح، واستخلاص المعلومات من الملفات، وتقديم ملخصات تساعد على التقييم الأولي.<br><br>الهدف هو تقليل الزمن والجهد التشغيلي، ورفع الدقة والشفافية، وتحسين تجربة الطرفين دون المساس بخصوصية البيانات ومعايير الامتثال.',
            'actions' => [
                ['type' => 'button', 'label' => 'اعرف المزيد', 'class' => 'action-btn w-full']
            ]
        ])
    </main>

    {{-- Thumbnails Container --}}
    <div class="thumbnails-container" id="thumbnailsContainer"></div>

    {{-- Interest Registration Section --}}
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
                    <div class="form-group">
                        <label class="form-label" for="name">الاسم</label>
                        <input type="text" id="name" name="name" class="form-input" placeholder="أدخل اسمك الكامل" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="phone">رقم الجوال</label>
                        <input type="tel" id="phone" name="phone" class="form-input" placeholder="05XXXXXXXX" pattern="[0-9]{10}" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="email">
                            البريد الإلكتروني
                            <span class="optional">(اختياري)</span>
                        </label>
                        <input type="email" id="email" name="email" class="form-input" placeholder="example@domain.com">
                    </div>

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
