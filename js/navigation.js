document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileMenuPanel = document.getElementById('mobileMenuPanel');
    const closeMobileMenu = document.getElementById('closeMobileMenu');
    const mobileMenuIcon = document.getElementById('mobileMenuIcon');

    // Open mobile menu
    mobileMenuBtn.addEventListener('click', function() {
        mobileMenu.classList.remove('hidden');
        setTimeout(() => {
            mobileMenuPanel.classList.remove('translate-x-full');
        }, 10);
        mobileMenuIcon.classList.remove('fa-bars');
        mobileMenuIcon.classList.add('fa-times');
        document.body.style.overflow = 'hidden'; // Prevent scrolling
    });

    // Close mobile menu
    function closeMobileMenuFunction() {
        mobileMenuPanel.classList.add('translate-x-full');
        setTimeout(() => {
            mobileMenu.classList.add('hidden');
        }, 300);
        mobileMenuIcon.classList.remove('fa-times');
        mobileMenuIcon.classList.add('fa-bars');
        document.body.style.overflow = ''; // Restore scrolling
    }

    // Close menu when close button is clicked
    closeMobileMenu.addEventListener('click', closeMobileMenuFunction);

    // Close menu when clicking outside the panel
    mobileMenu.addEventListener('click', function(e) {
        if (e.target === mobileMenu) {
            closeMobileMenuFunction();
        }
    });

    // Close menu when clicking on a menu item
    const mobileMenuLinks = mobileMenuPanel.querySelectorAll('a');
    mobileMenuLinks.forEach(link => {
        link.addEventListener('click', closeMobileMenuFunction);
    });

    // Close menu on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
            closeMobileMenuFunction();
        }
    });

    // Submenu toggle functionality
    const submenuToggles = document.querySelectorAll('.submenu-toggle');
    submenuToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const submenuId = this.getAttribute('data-submenu');
            const submenu = document.getElementById(`submenu-${submenuId}`);
            const chevron = this.querySelector('.fa-chevron-down');
            
            // Toggle submenu visibility
            if (submenu.classList.contains('hidden')) {
                // Close all other submenus first
                submenuToggles.forEach(otherToggle => {
                    if (otherToggle !== this) {
                        const otherSubmenuId = otherToggle.getAttribute('data-submenu');
                        const otherSubmenu = document.getElementById(`submenu-${otherSubmenuId}`);
                        const otherChevron = otherToggle.querySelector('.fa-chevron-down');
                        otherSubmenu.classList.add('hidden');
                        otherChevron.style.transform = 'rotate(0deg)';
                    }
                });
                
                // Open current submenu
                submenu.classList.remove('hidden');
                chevron.style.transform = 'rotate(180deg)';
            } else {
                // Close current submenu
                submenu.classList.add('hidden');
                chevron.style.transform = 'rotate(0deg)';
            }
        });
    });
});
