<?php 
$page = 'contact';
include 'includes/header.php'; 
?>

<section class="section" style="padding-top: 4rem;">
    <div class="container">
        <div class="text-center mb-4 animate-on-scroll">
            <h1 class="heading-xl">Let's <span class="text-gradient">Connect</span>.</h1>
            <p class="text-lg" style="max-width: 600px; margin: 0 auto;">
                Interested in building a custom system or need technical expertise for your organization? Reach out through any of the channels below.
            </p>
        </div>

        <div class="grid grid-cols-2 gap-4 animate-on-scroll" style="max-width: 900px; margin: 0 auto;">
            <!-- Contact Card -->
            <div class="card text-center">
                <i data-lucide="mail" style="width: 48px; height: 48px; color: var(--accent-blue); margin: 0 auto 1rem;"></i>
                <h3 class="heading-md">Email</h3>
                <p class="mb-2" style="color: var(--secondary-text);">Send me a direct email for project inquiries.</p>
                <a href="mailto:takalanimusubi117@gmail.com" class="btn btn-outline" style="width: 100%;">takalanimusubi117@gmail.com</a>
            </div>

            <!-- WhatsApp Card -->
            <div class="card text-center">
                <i data-lucide="message-circle" style="width: 48px; height: 48px; color: var(--success); margin: 0 auto 1rem;"></i>
                <h3 class="heading-md">WhatsApp</h3>
                <p class="mb-2" style="color: var(--secondary-text);">Available for quick chats and consultations.</p>
                <a href="https://wa.me/27660245504" target="_blank" class="btn btn-outline" style="width: 100%; border-color: var(--success); color: var(--success);">066 024 5504</a>
            </div>

            <!-- GitHub Card -->
            <div class="card text-center" style="grid-column: 1 / -1;">
                <i class="fa-brands fa-github" style="font-size: 3rem; color: white; margin-bottom: 1rem; display: block;"></i>
                <h3 class="heading-md">GitHub</h3>
                <p class="mb-2" style="color: var(--secondary-text);">Browse my code, projects, and repositories.</p>
                <a href="https://github.com/takalanimasubi" target="_blank" class="btn btn-outline" style="border-color: rgba(255,255,255,0.2);">
                    github.com/takalanimasubi
                </a>
                <p style="color: var(--secondary-text); font-size: 0.8rem; margin-top: 0.75rem;"><em>Update this link once your GitHub profile and repos are live.</em></p>
            </div>
        </div>

        <div class="text-center mt-4 pt-4 animate-on-scroll" style="max-width: 800px; margin: 2rem auto 0; border-top: 1px solid rgba(255,255,255,0.1);">
            <h3 class="heading-md mb-4">Find Me Here</h3>
            <div class="social-links" style="justify-content: center; font-size: 1.75rem; gap: 1.5rem;">
                <a href="https://github.com/takalanimasubi" target="_blank" style="background: var(--bg-secondary); width: 60px; height: 60px;" title="GitHub">
                    <i class="fa-brands fa-github" style="color: white;"></i>
                </a>
                <a href="https://wa.me/27660245504" target="_blank" style="background: var(--bg-secondary); width: 60px; height: 60px;" title="WhatsApp">
                    <i class="fa-brands fa-whatsapp" style="color: #25D366;"></i>
                </a>
                <a href="mailto:takalanimusubi117@gmail.com" style="background: var(--bg-secondary); width: 60px; height: 60px;" title="Email">
                    <i class="fa-solid fa-envelope" style="color: #EA4335;"></i>
                </a>
                <a href="https://www.facebook.com/search/top?q=Kiddow%20ZA" target="_blank" style="background: var(--bg-secondary); width: 60px; height: 60px;" title="Kiddow ZA">
                    <i class="fa-brands fa-facebook" style="color: #1877F2;"></i>
                </a>
                <a href="https://www.instagram.com/kiddowza/" target="_blank" style="background: var(--bg-secondary); width: 60px; height: 60px;" title="kiddowZA">
                    <i class="fa-brands fa-instagram" style="color: #E4405F;"></i>
                </a>
                <a href="https://www.tiktok.com/search?q=musubi%20takalani" target="_blank" style="background: var(--bg-secondary); width: 60px; height: 60px;" title="musubi takalani">
                    <i class="fa-brands fa-tiktok" style="color: white;"></i>
                </a>
            </div>
            <p class="mt-4 text-sm" style="color: var(--secondary-text);">WhatsApp: 066 024 5504 | Email: takalanimusubi117@gmail.com | Facebook: Kiddow ZA | Instagram: kiddowZA</p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
