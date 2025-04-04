document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.site-header');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // Swiperの初期化
    const heroSwiper = new Swiper('.hero-swiper', {
        effect: 'fade',
        speed: 1500,
        autoplay: {
            delay: 1500,
            disableOnInteraction: false,
        },
        loop: true,
    });

    // スクロールアニメーション
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    // キャリアセクションの監視
    const careerSection = document.querySelector('.career');
    if (careerSection) {
        observer.observe(careerSection);
    }

    // タイムラインアイテムの監視
    const timelineItems = document.querySelectorAll('.timeline-item');
    timelineItems.forEach(item => {
        observer.observe(item);
    });
}); 