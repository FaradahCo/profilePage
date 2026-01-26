{{-- Shared JavaScript: Profile toggle, Card interactions, Device detection, Form handler --}}
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

// Card Interactions (Hero Mode)
const container = document.getElementById('productsContainer');
const thumbnailsContainer = document.getElementById('thumbnailsContainer');
const cards = Array.from(document.querySelectorAll('.product-card'));
const body = document.body;
const originalOrder = cards.map(card => card.dataset.product);

cards.forEach(card => {
card.addEventListener('click', () => handleCardClick(card));
});

function handleCardClick(clickedCard) {
const isAlreadyHero = clickedCard.classList.contains('is-hero');

if (isAlreadyHero) {
closeHeroMode();
return;
}

if (body.classList.contains('hero-mode')) {
switchHero(clickedCard);
container.scrollIntoView({ behavior: 'smooth', block: 'start' });
return;
}

openHeroMode(clickedCard);
container.scrollIntoView({ behavior: 'smooth', block: 'start' });
}

function openHeroMode(heroCard) {
body.classList.add('hero-mode');
heroCard.classList.add('is-hero');
heroCard.classList.remove('is-thumbnail');
container.appendChild(heroCard);

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
currentHero.classList.remove('is-hero');
currentHero.classList.add('is-thumbnail');
thumbnailsContainer.appendChild(currentHero);
}

newHeroCard.classList.remove('is-thumbnail');
newHeroCard.classList.add('is-hero');
container.appendChild(newHeroCard);
}

function closeHeroMode() {
body.classList.remove('hero-mode');

cards.forEach(card => {
card.classList.remove('is-hero', 'is-thumbnail');
});

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

// Device Detection Functions
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

const SCRIPT_URL =
'https://script.google.com/macros/s/AKfycbwJZ8uxJZUbKjk8csQQIVFl-xMSabcbDDqgk3OEq9S4llI9Ml1IQfCRmAvbnf_PzB8l/exec';

const form = e.target;
const submitBtn = form.querySelector('.submit-button');
const originalBtnText = submitBtn.innerText;
const formData = new FormData(form);

// Prepare data
const data = new URLSearchParams();
data.append('name', formData.get('name'));
data.append('phone', formData.get('phone'));
data.append('email', formData.get('email'));

const platforms = formData.getAll('platforms[]');
platforms.forEach(p => data.append('platforms[]', p));

// Add device and tracking information
data.append('page_type', '{{ $pageType }}');
data.append('device_type', getDeviceType());
data.append('browser', getBrowserInfo());
data.append('os', getOSInfo());
data.append('screen_size', `${window.screen.width}x${window.screen.height}`);
data.append('viewport_size', `${window.innerWidth}x${window.innerHeight}`);
data.append('timestamp', new Date().toISOString());
data.append('timezone', Intl.DateTimeFormat().resolvedOptions().timeZone);
data.append('language', navigator.language);

// Show success Toast
showToast('شكراً لتسجيل اهتمامك! سنتواصل معك قريباً.');

// Reset and Close Form
form.reset();
submitBtn.disabled = false;
submitBtn.innerText = originalBtnText;
document.getElementById('toggleFormBtn').classList.remove('active');
document.getElementById('formContainer').classList.remove('expanded');

// Send to Google Apps Script in Background
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

// Toast Notification
function showToast(message) {
let container = document.querySelector('.toast-container');
if (!container) {
container = document.createElement('div');
container.className = 'toast-container';
document.body.appendChild(container);
}

const toast = document.createElement('div');
toast.className = 'toast';
toast.innerHTML = `
<span class="toast-icon">✅</span>
<span>${message}</span>
`;

container.appendChild(toast);

requestAnimationFrame(() => {
toast.classList.add('show');
});

setTimeout(() => {
toast.classList.remove('show');
setTimeout(() => {
toast.remove();
}, 400);
}, 3000);
}