<?php 
$page = 'about';
include 'includes/header.php'; 
?>

<section class="section" style="padding-top: 4rem;">
    <div class="container grid grid-cols-2 items-center gap-4">
        <div class="animate-on-scroll">
            <h1 class="heading-xl">A Developer Who Understands <span class="text-gradient">Business</span>.</h1>
            <p class="text-lg">
                I'm Takalani Masubi, a Full-Stack Software Developer specializing in business systems, educational platforms, and digital transformation solutions.
            </p>
            <p class="text-lg">
                I don't just write code; I build tools that solve manual bottlenecks, improve communication, and help organizations operate smarter. My work on systems like the Tiny Tots Crèche Management System and an Event Planning SaaS Platform reflects my commitment to end-to-end deployment and delivering real value.
            </p>
            <div class="mt-4" style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <a href="contact.php" class="btn btn-primary">Let's Work Together</a>
                <a href="https://github.com/TakalaniMasubi" target="_blank" class="btn btn-outline">
                    <i class="fa-brands fa-github" style="margin-right: 0.5rem;"></i> GitHub
                </a>
            </div>
        </div>
        
        <div class="animate-on-scroll text-center" style="transition-delay: 0.2s;">
            <div style="width: 100%; max-width: 400px; height: 500px; margin: 0 auto; border-radius: 1rem; box-shadow: var(--shadow-lg); overflow: hidden; background: linear-gradient(135deg, #172033, #0B1121); display: flex; align-items: center; justify-content: center; border: 1px solid rgba(255,255,255,0.08);">
                <!-- Replace the src below with your actual photo path once you have one -->
                <!-- e.g. src="images/takalani.jpg" -->
                <div style="text-align: center; padding: 2rem;">
                    <div style="width: 120px; height: 120px; border-radius: 50%; background: linear-gradient(135deg, var(--accent-blue), var(--highlight)); margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; font-size: 3rem; font-weight: 800; color: white;">T</div>
                    <p style="color: white; font-size: 1.25rem; font-weight: 700; margin-bottom: 0.25rem;">Takalani Masubi</p>
                    <p style="color: var(--secondary-text); font-size: 0.9rem;">Full-Stack Software Developer</p>
                    <p style="color: var(--accent-blue); font-size: 0.85rem; margin-top: 0.5rem;">📍 South Africa</p>
                </div>
            </div>
            <p style="color: var(--secondary-text); font-size: 0.8rem; margin-top: 0.75rem;">
                <!-- Remove this note once you add a real photo -->
                Add your photo to <code style="color: var(--accent-blue);">images/takalani.jpg</code> to replace this placeholder.
            </p>
        </div>
    </div>
</section>

<section class="section" style="background: var(--bg-secondary);">
    <div class="container animate-on-scroll">
        <h2 class="heading-lg text-center mb-4">Technical Arsenal</h2>
        
        <div class="grid grid-cols-3 gap-4">
            <div class="card text-center" style="padding: 1.5rem;">
                <i data-lucide="server" style="width: 36px; height: 36px; color: var(--accent-blue); margin: 0 auto 1rem;"></i>
                <h3 class="heading-md">Backend Development</h3>
                <p style="color: var(--secondary-text);">PHP 8.2, Node.js, Express, RESTful APIs</p>
            </div>
            <div class="card text-center" style="padding: 1.5rem;">
                <i data-lucide="monitor" style="width: 36px; height: 36px; color: var(--accent-blue); margin: 0 auto 1rem;"></i>
                <h3 class="heading-md">Frontend Development</h3>
                <p style="color: var(--secondary-text);">HTML5, CSS3, Vanilla JS SPA, Tailwind, Bootstrap, React</p>
            </div>
            <div class="card text-center" style="padding: 1.5rem;">
                <i data-lucide="database" style="width: 36px; height: 36px; color: var(--accent-blue); margin: 0 auto 1rem;"></i>
                <h3 class="heading-md">Database & Architecture</h3>
                <p style="color: var(--secondary-text);">MySQL, MongoDB, System Design (DFD, ERD), Multi-Tenant SaaS</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container text-center animate-on-scroll">
        <h2 class="heading-lg mb-4">Open Source & Code</h2>
        <p class="text-lg" style="max-width: 600px; margin: 0 auto 2rem;">
            My code and projects live on GitHub. Check out my repositories to see how I structure and build systems.
        </p>
        <a href="https://github.com/TakalaniMasubi" target="_blank" class="btn btn-outline" style="font-size: 1.1rem; padding: 1rem 2.5rem;">
            <i class="fa-brands fa-github" style="margin-right: 0.75rem; font-size: 1.3rem;"></i> Visit My GitHub
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
