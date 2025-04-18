document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.site-header');
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const mainNavigation = document.querySelector('.main-navigation');
    
    // ハンバーガーメニューの制御
    hamburgerMenu.addEventListener('click', function() {
        this.classList.toggle('active');
        mainNavigation.classList.toggle('active');
        document.body.classList.toggle('menu-open');
    });

    // メニューリンクをクリックしたらメニューを閉じる
    const menuLinks = document.querySelectorAll('.nav-menu a');
    menuLinks.forEach(link => {
        link.addEventListener('click', () => {
            hamburgerMenu.classList.remove('active');
            mainNavigation.classList.remove('active');
            document.body.classList.remove('menu-open');
        });
    });
    
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

    // Work Swiperの初期化
    const workSwiper = new Swiper('.work-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.work-next',
            prevEl: '.work-prev',
        },
        breakpoints: {
            // 768px以上の場合
            768: {
                slidesPerView: 2,
            },
            // 1024px以上の場合
            1024: {
                slidesPerView: 3,
            }
        }
    });

    // Top Image Slider
    const topSwiper = new Swiper('.top-swiper', {
        loop: true,
        speed: 1000,
        effect: 'fade',
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        fadeEffect: {
            crossFade: true
        }
    });

    // モーダル処理
    const workSlides = document.querySelectorAll('.swiper-slide[data-modal]');
    const modals = document.querySelectorAll('.modal');
    const closeButtons = document.querySelectorAll('.modal-close');

    // モーダルを開く
    workSlides.forEach(slide => {
        slide.addEventListener('click', function() {
            const modalId = this.getAttribute('data-modal');
            const modal = document.getElementById(modalId);
            modal.classList.add('show');
            document.body.style.overflow = 'hidden'; // スクロール防止
        });
    });

    // モーダルを閉じる
    function closeModal(modal) {
        modal.classList.remove('show');
        document.body.style.overflow = ''; // スクロール再開
    }

    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const modal = this.closest('.modal');
            closeModal(modal);
        });
    });

    // モーダル外クリックで閉じる
    modals.forEach(modal => {
        modal.addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal(this);
            }
        });
    });

    // ESCキーでモーダルを閉じる
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            modals.forEach(modal => {
                if (modal.classList.contains('show')) {
                    closeModal(modal);
                }
            });
        }
    });

    // スクロールアニメーション
    const observerOptions = {
        root: null,
        rootMargin: '-50px',
        threshold: 0.15
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                // 一度表示されたら監視を解除（オプション）
                // observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // すべてのフェードインセクションを監視
    const fadeElements = document.querySelectorAll('.fade-in-section');
    fadeElements.forEach(element => {
        observer.observe(element);
    });
}); 