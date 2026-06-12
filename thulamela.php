<?php 
$page = 'projects';
include 'includes/header.php'; 
?>

<section class="section" style="padding-top: 4rem;">
    <div class="container animate-on-scroll">
        <div class="mb-4">
            <a href="projects.php" style="display: inline-flex; align-items: center; gap: 0.5rem; color: var(--secondary-text); margin-bottom: 1rem;">
                <i data-lucide="arrow-left" width="16"></i> Back to Projects
            </a>
            <div class="mb-2">
                <span class="badge">QA & Testing</span>
                <span class="badge">Contributor</span>
                <span class="badge">Live</span>
            </div>
            <h1 class="heading-xl">Thulamela Business Forum <span class="text-gradient">Member Platform</span></h1>
            <p class="text-lg" style="max-width: 800px; margin-bottom: 1.5rem;">
                A member onboarding and management platform for the Thulamela Business Forum NPO. My role on this project was end-to-end quality assurance — from component-level testing through to user acceptance testing.
            </p>
            <div style="display: flex; gap: 1rem; flex-wrap: wrap; margin-bottom: 2rem;">
                <a href="https://mob.thulamelabusiness.co.za" target="_blank" class="btn btn-primary">
                    <i data-lucide="external-link" style="margin-right: 0.5rem;"></i> Visit Live Platform
                </a>
                <a href="https://www.thulamelabusiness.co.za" target="_blank" class="btn btn-outline">
                    <i data-lucide="globe" style="margin-right: 0.5rem;"></i> Organisation Website
                </a>
            </div>
        </div>

        <!-- Hero Banner -->
        <div style="width: 100%; height: 400px; border-radius: 1rem; overflow: hidden; margin-bottom: 3rem; background: linear-gradient(135deg, #1a1a2e, #16213e, #0f3460); display: flex; align-items: center; justify-content: center; box-shadow: var(--shadow-lg); position: relative;">
            <div style="text-align: center; z-index: 2; padding: 2rem;">
                <div style="width: 80px; height: 80px; border-radius: 50%; background: white; margin: 0 auto 1rem; overflow: hidden; display: flex; align-items: center; justify-content: center;">
                    <img src="https://mob.thulamelabusiness.co.za/assets/logo.jpg" alt="Thulamela Business Forum Logo" style="width: 100%; height: 100%; object-fit: cover;" onerror="this.style.display='none'; this.parentElement.innerHTML='<span style=\'font-weight:800;color:#1a1a2e;font-size:1.5rem;\'>TBF</span>';">
                </div>
                <h2 style="font-size: 1.75rem; font-weight: 700; color: white; margin-bottom: 0.5rem;">Thulamela Business Forum</h2>
                <p style="color: #94a3b8;">Connecting Businesses · Sharing Information · Building Opportunities</p>
                <p style="color: #60A5FA; font-size: 0.875rem; margin-top: 0.5rem;">Thohoyandou, Limpopo, South Africa</p>
            </div>
            <div style="position: absolute; inset: 0; background: radial-gradient(circle at 30% 50%, rgba(59,130,246,0.1), transparent 60%);"></div>
        </div>

        <!-- My Role -->
        <div class="card" style="background: linear-gradient(135deg, rgba(59,130,246,0.08), rgba(6,182,212,0.04)); border: 1px solid rgba(59,130,246,0.2); margin-bottom: 3rem;">
            <div class="grid grid-cols-2 items-center gap-4">
                <div>
                    <h3 class="heading-md">My Role: Quality Assurance</h3>
                    <p style="color: var(--secondary-text); margin-bottom: 1rem;">
                        I was responsible for the full testing lifecycle on this project — ensuring the platform worked correctly at every layer before going live. This covered everything from individual components right through to sign-off with real users.
                    </p>
                    <p style="color: var(--secondary-text);">
                        Testing on a live client platform with real stakeholders requires precision, structured documentation, and the ability to communicate findings clearly to the development team.
                    </p>
                </div>
                <div style="padding: 1.5rem; background: rgba(0,0,0,0.2); border-radius: 0.75rem; border-left: 4px solid var(--accent-blue);">
                    <p style="color: #94a3b8; font-style: italic; margin-bottom: 0.5rem;">
                        "Testing is not just finding bugs — it's verifying that the system actually does what the business needs it to do."
                    </p>
                    <p style="color: var(--accent-blue); font-size: 0.875rem; font-weight: 600;">— QA principle applied throughout this project</p>
                </div>
            </div>
        </div>

        <!-- Testing Types -->
        <div style="margin-bottom: 3rem;">
            <h3 class="heading-md text-center mb-4">Testing Coverage</h3>
            <div class="grid grid-cols-2 gap-4">

                <div class="card">
                    <div style="display: flex; align-items: flex-start; gap: 1rem;">
                        <i data-lucide="component" style="width: 36px; height: 36px; color: var(--accent-blue); flex-shrink: 0; margin-top: 2px;"></i>
                        <div>
                            <h4 style="color: white; font-weight: 600; margin-bottom: 0.5rem; font-size: 1.1rem;">Component Testing</h4>
                            <p style="color: var(--secondary-text);">
                                Tested individual UI components and backend modules in isolation — verifying that each piece of the platform behaved correctly on its own before integration. This included forms, buttons, data displays, and API responses.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div style="display: flex; align-items: flex-start; gap: 1rem;">
                        <i data-lucide="git-merge" style="width: 36px; height: 36px; color: var(--highlight); flex-shrink: 0; margin-top: 2px;"></i>
                        <div>
                            <h4 style="color: white; font-weight: 600; margin-bottom: 0.5rem; font-size: 1.1rem;">Integration Testing</h4>
                            <p style="color: var(--secondary-text);">
                                Verified that components worked together correctly — for example, that the member registration flow correctly triggered onboarding steps, profile creation, and portal access end-to-end.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div style="display: flex; align-items: flex-start; gap: 1rem;">
                        <i data-lucide="user-check" style="width: 36px; height: 36px; color: var(--success); flex-shrink: 0; margin-top: 2px;"></i>
                        <div>
                            <h4 style="color: white; font-weight: 600; margin-bottom: 0.5rem; font-size: 1.1rem;">User Testing</h4>
                            <p style="color: var(--secondary-text);">
                                Conducted structured user testing sessions — observing real users interacting with the platform to identify friction points, usability issues, and unclear flows. Findings were documented and fed back to the development team.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div style="display: flex; align-items: flex-start; gap: 1rem;">
                        <i data-lucide="clipboard-check" style="width: 36px; height: 36px; color: #f59e0b; flex-shrink: 0; margin-top: 2px;"></i>
                        <div>
                            <h4 style="color: white; font-weight: 600; margin-bottom: 0.5rem; font-size: 1.1rem;">User Acceptance Testing (UAT)</h4>
                            <p style="color: var(--secondary-text);">
                                Led the UAT phase — working directly with the Thulamela Business Forum stakeholders to validate that the platform met their requirements. This is the final gate before a system goes live, and it requires translating business expectations into verifiable test scenarios.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- About the Platform -->
        <div style="margin-bottom: 3rem;">
            <h3 class="heading-md mb-4">About the Platform</h3>
            <div class="grid grid-cols-3 text-center">
                <div class="card" style="padding: 1.5rem;">
                    <i data-lucide="users" style="width: 36px; height: 36px; color: var(--accent-blue); margin: 0 auto 0.75rem;"></i>
                    <h4 style="color: white; font-weight: 600; margin-bottom: 0.25rem;">Member Onboarding</h4>
                    <p style="color: var(--secondary-text); font-size: 0.875rem;">Streamlined registration and member portal access for entrepreneurs and business stakeholders.</p>
                </div>
                <div class="card" style="padding: 1.5rem;">
                    <i data-lucide="calendar-range" style="width: 36px; height: 36px; color: var(--highlight); margin: 0 auto 0.75rem;"></i>
                    <h4 style="color: white; font-weight: 600; margin-bottom: 0.25rem;">AEEC 2026</h4>
                    <p style="color: var(--secondary-text); font-size: 0.875rem;">AfriKan Entrepreneurship Excellence Conference — 9–11 September 2026, Thohoyandou.</p>
                </div>
                <div class="card" style="padding: 1.5rem;">
                    <i data-lucide="globe" style="width: 36px; height: 36px; color: var(--success); margin: 0 auto 0.75rem;"></i>
                    <h4 style="color: white; font-weight: 600; margin-bottom: 0.25rem;">Live & Operational</h4>
                    <p style="color: var(--secondary-text); font-size: 0.875rem;">Platform is live and serving the Thulamela Business Forum community across Limpopo.</p>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div style="display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center;">
            <a href="https://mob.thulamelabusiness.co.za" target="_blank" class="btn btn-primary">
                <i data-lucide="external-link" style="margin-right: 0.5rem;"></i> Visit Live Platform
            </a>
            <a href="projects.php" class="btn btn-outline">
                <i data-lucide="arrow-left" style="margin-right: 0.5rem;"></i> All Projects
            </a>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>
