</main>

<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div>
                <a href="index.php" class="logo" style="color: white;">
                    Takalani<span style="color: var(--highlight);">Tech</span>
                </a>
                <p class="mt-4" style="max-width: 300px;">
                    Building Modern Software Solutions for Businesses, Schools, and Growing Organizations.
                </p>
            </div>
            
            <div>
                <h4>Quick Links</h4>
                <ul style="list-style: none; padding: 0;" class="grid gap-2">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            
            <div>
                <h4>Contact Info</h4>
                <ul style="list-style: none; padding: 0;" class="grid gap-2">
                    <li>
                        <a href="mailto:takalanimusubi117@gmail.com" class="flex items-center gap-2">
                            <i data-lucide="mail" width="16"></i> Email Me
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/27660245504" target="_blank" class="flex items-center gap-2">
                            <i data-lucide="message-circle" width="16"></i> WhatsApp: 066 024 5504
                        </a>
                    </li>
                </ul>
            </div>
            
            <div>
                <h4>Connect</h4>
                <div class="social-links mt-4" style="font-size: 1.25rem;">
                    <a href="https://github.com/TakalaniMasubi" target="_blank" aria-label="GitHub" title="GitHub">
                        <i class="fa-brands fa-github" style="color: white;"></i>
                    </a>
                    <a href="https://wa.me/27660245504" target="_blank" aria-label="WhatsApp" title="WhatsApp">
                        <i class="fa-brands fa-whatsapp" style="color: #25D366;"></i>
                    </a>
                    <a href="mailto:takalanimusubi117@gmail.com" aria-label="Email" title="Email">
                        <i class="fa-solid fa-envelope" style="color: #EA4335;"></i>
                    </a>
                    <a href="https://www.facebook.com/search/top?q=Kiddow%20ZA" target="_blank" aria-label="Facebook (Kiddow ZA)" title="Kiddow ZA">
                        <i class="fa-brands fa-facebook" style="color: #1877F2;"></i>
                    </a>
                    <a href="https://www.instagram.com/kiddowza/" target="_blank" aria-label="Instagram (kiddowZA)" title="kiddowZA">
                        <i class="fa-brands fa-instagram" style="color: #E4405F;"></i>
                    </a>
                    <a href="https://www.tiktok.com/search?q=musubi%20takalani" target="_blank" aria-label="TikTok (musubi takalani)" title="musubi takalani">
                        <i class="fa-brands fa-tiktok" style="color: white;"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Takalani Masubi Technologies. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- Initialize Icons -->
<script>
    lucide.createIcons();
</script>

<!-- Mobile Nav Toggle -->
<script>
    const navToggle = document.getElementById('nav-toggle');
    const navLinks = document.getElementById('nav-links');

    if (navToggle && navLinks) {
        navToggle.addEventListener('click', () => {
            const isOpen = navLinks.classList.toggle('open');
            navToggle.classList.toggle('open', isOpen);
            navToggle.setAttribute('aria-expanded', isOpen);
        });

        // Close menu when a link is clicked
        navLinks.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('open');
                navToggle.classList.remove('open');
                navToggle.setAttribute('aria-expanded', 'false');
            });
        });
    }
</script>

<!-- Scroll animations -->
<script>
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                entry.target.style.transform = 'translateY(0)';
                obs.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.animate-on-scroll').forEach((el) => {
        el.style.opacity = 0;
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'all 0.6s ease-out';
        observer.observe(el);
    });
</script>

</body>
</html>
