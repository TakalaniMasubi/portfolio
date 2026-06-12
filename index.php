<?php 
$page = 'home';
include 'includes/header.php'; 
?>

<!-- Hero Section -->
<section class="hero section">
    <div class="container flex items-center justify-between">
        <div class="hero-content animate-on-scroll">
            <h1 class="heading-xl">
                Transforming Businesses Through <span class="text-gradient">Modern Software Solutions</span>
            </h1>
            <p class="text-lg">
                Custom web applications, educational management systems, and business platforms built to help organizations operate smarter and grow faster.
            </p>
            <div class="hero-buttons">
                <a href="projects.php" class="btn btn-primary">
                    <i data-lucide="folder-code" style="margin-right: 0.5rem;"></i> View Projects
                </a>
                <a href="contact.php" class="btn btn-outline">
                    <i data-lucide="calendar" style="margin-right: 0.5rem;"></i> Book Consultation
                </a>
            </div>
        </div>
        <!-- Optional Image or Graphic here -->
    </div>
</section>

<!-- Stats / Quick Info -->
<section class="section" style="background: var(--bg-secondary); border-top: 1px solid rgba(0,0,0,0.05); border-bottom: 1px solid rgba(0,0,0,0.05);">
    <div class="container grid grid-cols-3 text-center animate-on-scroll">
        <div>
            <h3 class="heading-md text-gradient" style="font-size: 2.5rem;">5+</h3>
            <p class="text-lg" style="margin-bottom:0;">Major Systems Deployed</p>
        </div>
        <div>
            <h3 class="heading-md text-gradient" style="font-size: 2.5rem;">100%</h3>
            <p class="text-lg" style="margin-bottom:0;">Client Satisfaction</p>
        </div>
        <div>
            <h3 class="heading-md text-gradient" style="font-size: 2.5rem;">PHP & Node</h3>
            <p class="text-lg" style="margin-bottom:0;">Full-Stack Expertise</p>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="text-center animate-on-scroll">
            <span class="badge">Featured Case Study</span>
            <h2 class="heading-lg">Tiny Tots Crèche Management System</h2>
            <p class="text-lg" style="max-width: 700px; margin: 0 auto 3rem;">
                A complete digital management platform developed to solve manual admissions, streamline communication, and secure operations for an educational institution.
            </p>
        </div>
        
        <div class="grid grid-cols-2 items-center gap-4 animate-on-scroll">
            <div class="card" style="border: none; box-shadow: none; padding: 0; background: transparent;">
                <div class="card-img-container" style="height: 400px; box-shadow: var(--shadow-lg);">
                    <img src="images/tiny-tots.png" alt="Tiny Tots Dashboard Screenshot" style="width: 100%; height: 100%; object-fit: cover; object-position: left top;">
                </div>
            </div>
            
            <div style="padding: 2rem;">
                <h3 class="heading-md">The Problem</h3>
                <p class="mb-4 text-lg">Heavy reliance on manual paperwork for admissions, poor tracking of parent-school communication, and administrative bottlenecks.</p>
                
                <h3 class="heading-md">The Solution</h3>
                <ul class="mb-4 grid gap-2" style="list-style: none;">
                    <li class="flex items-center gap-2"><i data-lucide="check-circle" style="color: var(--success);"></i> Online admissions & application tracking</li>
                    <li class="flex items-center gap-2"><i data-lucide="check-circle" style="color: var(--success);"></i> Secure parent portals & document uploads</li>
                    <li class="flex items-center gap-2"><i data-lucide="check-circle" style="color: var(--success);"></i> Administrative dashboard & role-based authentication</li>
                    <li class="flex items-center gap-2"><i data-lucide="check-circle" style="color: var(--success);"></i> Gallery management & communication systems</li>
                </ul>
                
                <div style="display: flex; gap: 1rem; margin-top: 1rem; flex-wrap: wrap;">
                    <a href="tiny-tots.php" class="btn btn-outline">Read Full Case Study <i data-lucide="arrow-right" style="margin-left: 0.5rem; width: 16px;"></i></a>
                    <a href="https://tinytots.saixge.co.za" target="_blank" class="btn btn-primary"><i data-lucide="external-link" style="margin-right: 0.5rem; width: 16px;"></i> Visit Live Site</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Client: Thulamela Business Forum -->
<section class="section" style="background: var(--bg-secondary);">
    <div class="container">
        <div class="text-center animate-on-scroll">
            <span class="badge">QA & Testing Contributor · Live</span>
            <h2 class="heading-lg">Thulamela Business Forum</h2>
            <p class="text-lg" style="max-width: 700px; margin: 0 auto 3rem;">
                A live member onboarding platform for a business networking NPO in Limpopo. I led the full testing lifecycle — from component and integration testing through to user testing and UAT sign-off.
            </p>
        </div>

        <div class="grid grid-cols-2 items-center gap-4 animate-on-scroll">
            <div class="card" style="background: linear-gradient(135deg, #1a1a2e, #16213e); border: 1px solid rgba(255,255,255,0.07); display: flex; align-items: center; justify-content: center; min-height: 300px;">
                <div style="text-align: center; padding: 2rem;">
                    <div style="width: 80px; height: 80px; border-radius: 50%; background: white; margin: 0 auto 1rem; overflow: hidden; display: flex; align-items: center; justify-content: center;">
                        <img src="https://mob.thulamelabusiness.co.za/assets/logo.jpg" alt="TBF Logo" style="width: 100%; height: 100%; object-fit: cover;" onerror="this.style.display='none'; this.parentElement.innerHTML='<span style=\'font-weight:800;color:#1a1a2e;font-size:1.25rem;\'>TBF</span>';">
                    </div>
                    <p style="color: white; font-weight: 700; font-size: 1.1rem; margin-bottom: 0.25rem;">Thulamela Business Forum</p>
                    <p style="color: #94a3b8; font-size: 0.875rem;">Thohoyandou, Limpopo · NPO</p>
                    <p style="color: #60A5FA; font-size: 0.8rem; margin-top: 0.5rem;">Connecting Businesses · Building Opportunities</p>
                </div>
            </div>

            <div style="padding: 1rem;">
                <h3 class="heading-md">My Testing Role</h3>
                <ul class="mb-4 grid gap-2" style="list-style: none;">
                    <li class="flex items-center gap-2"><i data-lucide="check-circle" style="color: var(--success);"></i> Component testing — individual UI and backend modules</li>
                    <li class="flex items-center gap-2"><i data-lucide="check-circle" style="color: var(--success);"></i> Integration testing — end-to-end flows and data integrity</li>
                    <li class="flex items-center gap-2"><i data-lucide="check-circle" style="color: var(--success);"></i> User testing — real users, documented findings</li>
                    <li class="flex items-center gap-2"><i data-lucide="check-circle" style="color: var(--success);"></i> User Acceptance Testing (UAT) — stakeholder sign-off before go-live</li>
                </ul>
                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <a href="thulamela.php" class="btn btn-outline">Read Case Study <i data-lucide="arrow-right" style="margin-left: 0.5rem; width: 16px;"></i></a>
                    <a href="https://mob.thulamelabusiness.co.za" target="_blank" class="btn btn-primary"><i data-lucide="external-link" style="margin-right: 0.5rem; width: 16px;"></i> Visit Live Platform</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Project: Event Platform -->
<section class="section">
    <div class="container">
        <div class="text-center animate-on-scroll">
            <span class="badge" style="background: rgba(16,185,129,0.15); color: #34d399; border-color: rgba(16,185,129,0.2);">In Development</span>
            <h2 class="heading-lg">Event Planning SaaS Platform</h2>
            <p class="text-lg" style="max-width: 700px; margin: 0 auto 3rem;">
                My most complex build — a multi-tenant SaaS platform with 16+ modules, hierarchical permissions, and a full plugin system. Built without any PHP framework using spec-driven development.
            </p>
        </div>

        <div class="grid grid-cols-2 items-center gap-4 animate-on-scroll">
            <div style="padding: 2rem;">
                <h3 class="heading-md">What Makes It Complex</h3>
                <ul class="mb-4 grid gap-2" style="list-style: none;">
                    <li class="flex items-center gap-2"><i data-lucide="check-circle" style="color: var(--success);"></i> Multi-tenant architecture with URL-scoped isolation</li>
                    <li class="flex items-center gap-2"><i data-lucide="check-circle" style="color: var(--success);"></i> 5-layer permission resolution system</li>
                    <li class="flex items-center gap-2"><i data-lucide="check-circle" style="color: var(--success);"></i> Plugin system with hierarchical config (global → group → tenant)</li>
                    <li class="flex items-center gap-2"><i data-lucide="check-circle" style="color: var(--success);"></i> Full event lifecycle: Draft → Planning → Execution → Archived</li>
                    <li class="flex items-center gap-2"><i data-lucide="check-circle" style="color: var(--success);"></i> Vanilla JS PWA frontend, zero framework dependencies</li>
                </ul>
                <a href="event-platform.php" class="btn btn-outline">View Full Case Study <i data-lucide="arrow-right" style="margin-left: 0.5rem; width: 16px;"></i></a>
            </div>

            <div class="card" style="background: linear-gradient(135deg, #0f2027, #203a43); border: 1px solid rgba(59,130,246,0.2); display: flex; align-items: center; justify-content: center; min-height: 320px;">
                <div style="text-align: center; padding: 2rem;">
                    <i data-lucide="calendar-range" style="width: 64px; height: 64px; color: #60A5FA; margin-bottom: 1rem;"></i>
                    <p style="color: white; font-weight: 600; font-size: 1.1rem; margin-bottom: 0.5rem;">Multi-Tenant SaaS</p>
                    <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; justify-content: center; margin-top: 1rem;">
                        <span class="badge">PHP 8.2</span>
                        <span class="badge">Vanilla JS PWA</span>
                        <span class="badge">16+ Modules</span>
                        <span class="badge">PHPUnit + Playwright</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Overview -->
<section class="section">
    <div class="container">
        <div class="text-center mb-4 animate-on-scroll">
            <h2 class="heading-lg">Core Services</h2>
            <p class="text-lg">Delivering robust technical solutions tailored to business needs.</p>
        </div>
        
        <div class="grid grid-cols-3 animate-on-scroll">
            <div class="card">
                <i data-lucide="layout" style="width: 40px; height: 40px; color: var(--accent-blue); margin-bottom: 1.5rem;"></i>
                <h3 class="heading-md">Custom Web Apps</h3>
                <p style="color: var(--secondary-text);">Building tailored, scalable web applications to solve specific operational challenges for your business.</p>
            </div>
            <div class="card">
                <i data-lucide="database" style="width: 40px; height: 40px; color: var(--accent-blue); margin-bottom: 1.5rem;"></i>
                <h3 class="heading-md">Management Systems</h3>
                <p style="color: var(--secondary-text);">Developing secure, role-based dashboards and management platforms (like CRM and ERP solutions).</p>
            </div>
            <div class="card">
                <i data-lucide="smartphone" style="width: 40px; height: 40px; color: var(--accent-blue); margin-bottom: 1.5rem;"></i>
                <h3 class="heading-md">Digital Transformation</h3>
                <p style="color: var(--secondary-text);">Digitizing manual paperwork processes, integrating APIs, and streamlining your workflow.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section text-center" style="background: var(--primary-dark); color: white;">
    <div class="container animate-on-scroll">
        <h2 class="heading-lg text-gradient">Ready to Build Your System?</h2>
        <p class="text-lg mb-4" style="color: #94a3b8; max-width: 600px; margin: 0 auto 2rem;">
            Whether it's an educational platform, an ordering system, or a custom internal tool, let's discuss how software can scale your business.
        </p>
        <a href="contact.php" class="btn btn-primary">Start a Conversation</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
