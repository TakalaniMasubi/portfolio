<?php 
$page = 'projects';
include 'includes/header.php'; 
?>

<section class="section" style="padding-top: 4rem;">
    <div class="container">
        <div class="text-center mb-4 animate-on-scroll">
            <h1 class="heading-xl">Real <span class="text-gradient">Projects.</span> Real <span class="text-gradient">Value.</span></h1>
            <p class="text-lg" style="max-width: 800px; margin: 0 auto;">
                A collection of full-stack business solutions, educational management systems, and digital transformation tools built to solve real-world problems.
            </p>
        </div>

        <div class="grid grid-cols-2">
            <!-- Tiny Tots -->
            <div class="card animate-on-scroll">
                <div class="card-img-container">
                    <img src="images/tiny-tots.png" alt="Tiny Tots Interface" style="width: 100%; height: 100%; object-fit: cover; object-position: left top;">
                </div>
                <div class="mb-2">
                    <span class="badge">Flagship</span>
                    <span class="badge">PHP</span>
                    <span class="badge">Education</span>
                </div>
                <h3 class="heading-md">Tiny Tots Crèche Management System</h3>
                <p class="mb-4" style="color: var(--secondary-text);">
                    A complete digital management platform handling online admissions, parent portals, document uploads, and administrative dashboards. Replaced manual paperwork with a streamlined secure system.
                </p>
                <div style="margin-top: auto; display: flex; gap: 0.5rem; flex-direction: column;">
                    <a href="tiny-tots.php" class="btn btn-outline" style="width: 100%;">View Case Study</a>
                    <a href="https://tinytots.saixge.co.za" target="_blank" class="btn btn-primary" style="width: 100%;"><i data-lucide="external-link" style="margin-right: 0.5rem; width: 16px;"></i> Visit Live Site</a>
                </div>
            </div>

            <!-- Thulamela Business Forum -->
            <div class="card animate-on-scroll" style="transition-delay: 0.05s;">
                <div class="card-img-container" style="background: linear-gradient(135deg, #1a1a2e, #16213e, #0f3460); display: flex; align-items: center; justify-content: center;">
                    <div style="text-align: center;">
                        <div style="width: 56px; height: 56px; border-radius: 50%; background: white; margin: 0 auto 0.5rem; overflow: hidden; display: flex; align-items: center; justify-content: center;">
                            <img src="https://mob.thulamelabusiness.co.za/assets/logo.jpg" alt="TBF Logo" style="width: 100%; height: 100%; object-fit: cover;" onerror="this.style.display='none'; this.parentElement.innerHTML='<span style=\'font-weight:800;color:#1a1a2e;\'>TBF</span>';">
                        </div>
                        <p style="color: #94a3b8; font-size: 0.8rem; margin: 0;">Thulamela Business Forum</p>
                    </div>
                </div>
                <div class="mb-2">
                    <span class="badge">QA & Testing</span>
                    <span class="badge">Contributor</span>
                    <span class="badge">Live</span>
                </div>
                <h3 class="heading-md">Thulamela Business Forum Member Platform</h3>
                <p class="mb-4" style="color: var(--secondary-text);">
                    A live member onboarding platform for a business networking NPO in Limpopo. My role covered the full testing lifecycle — component testing, integration testing, user testing, and leading the user acceptance testing (UAT) phase before go-live.
                </p>
                <div style="margin-top: auto; display: flex; gap: 0.5rem; flex-direction: column;">
                    <a href="thulamela.php" class="btn btn-outline" style="width: 100%;">View Case Study</a>
                    <a href="https://mob.thulamelabusiness.co.za" target="_blank" class="btn btn-primary" style="width: 100%;"><i data-lucide="external-link" style="margin-right: 0.5rem; width: 16px;"></i> Visit Live Platform</a>
                </div>
            </div>

            <!-- Event Planning SaaS Platform -->
            <div class="card animate-on-scroll" style="transition-delay: 0.05s;">
                <div class="card-img-container" style="background: linear-gradient(135deg, #0f2027, #203a43, #2c5364); display: flex; align-items: center; justify-content: center;">
                    <div style="text-align: center;">
                        <i data-lucide="calendar-range" style="width: 48px; height: 48px; color: #60A5FA; margin-bottom: 0.5rem;"></i>
                        <p style="color: #94a3b8; font-size: 0.85rem; margin: 0;">Multi-Tenant SaaS</p>
                    </div>
                </div>
                <div class="mb-2">
                    <span class="badge" style="background: rgba(16,185,129,0.15); color: #34d399; border-color: rgba(16,185,129,0.2);">In Development</span>
                    <span class="badge">PHP</span>
                    <span class="badge">SaaS</span>
                </div>
                <h3 class="heading-md">Event Planning SaaS Platform</h3>
                <p class="mb-4" style="color: var(--secondary-text);">
                    My most complex project — a multi-tenant SaaS platform for event lifecycle management with 16+ modules, layered permissions, plugin architecture, and a full spec-driven documentation suite. Built without any PHP framework.
                </p>
                <div style="margin-top: auto;">
                    <a href="event-platform.php" class="btn btn-outline" style="width: 100%;">View Case Study</a>
                </div>
            </div>

            <!-- InternFlow -->
            <div class="card animate-on-scroll" style="transition-delay: 0.1s;">
                <div class="card-img-container" style="background: linear-gradient(135deg, #0f172a, #1e293b); display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden;">
                    <!-- Decorative code lines background -->
                    <div style="position: absolute; inset: 0; padding: 1rem; font-family: 'Courier New', monospace; font-size: 0.65rem; color: rgba(96,165,250,0.15); line-height: 1.6; overflow: hidden; user-select: none;">
                        function mapDataFlow(process) {<br>
                        &nbsp;&nbsp;const nodes = process.getEntities();<br>
                        &nbsp;&nbsp;return nodes.map(n => ({<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;id: n.id, input: n.inputs,<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;output: n.outputs<br>
                        &nbsp;&nbsp;}));<br>
                        }<br><br>
                        class SystemArchitecture {<br>
                        &nbsp;&nbsp;constructor(requirements) {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;this.dfd = new DFDBuilder();<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;this.wbs = new WBSPlanner();<br>
                        &nbsp;&nbsp;}<br>
                        &nbsp;&nbsp;validate() { ... }<br>
                        }<br><br>
                        // Process flow definition<br>
                        const internship = defineFlow([<br>
                        &nbsp;&nbsp;'apply', 'screen',<br>
                        &nbsp;&nbsp;'match', 'onboard'<br>
                        ]);
                    </div>
                    <!-- Centered icon overlay -->
                    <div style="text-align: center; z-index: 2; position: relative;">
                        <div style="display: flex; align-items: center; justify-content: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                            <i data-lucide="monitor" style="width: 32px; height: 32px; color: #60A5FA;"></i>
                            <i data-lucide="git-branch" style="width: 28px; height: 28px; color: #22D3EE;"></i>
                            <i data-lucide="file-code-2" style="width: 32px; height: 32px; color: #60A5FA;"></i>
                        </div>
                        <p style="color: #94a3b8; font-size: 0.8rem; margin: 0; font-family: 'Courier New', monospace;">System Design · DFD · Architecture</p>
                    </div>
                </div>
                <div class="mb-2">
                    <span class="badge">System Design</span>
                    <span class="badge">Analysis</span>
                </div>
                <h3 class="heading-md">InternFlow Architecture</h3>
                <p class="mb-4" style="color: var(--secondary-text);">
                    Comprehensive system analysis and design for an internship management platform. Covered detailed Data Flow Diagrams (DFDs), process flows, and complete software requirements specification.
                </p>
                <div style="margin-top: auto;">
                    <a href="internflow.php" class="btn btn-outline" style="width: 100%;">View Project Detail</a>
                </div>
            </div>

            <!-- Kota Joe Management -->
            <div class="card animate-on-scroll" style="transition-delay: 0.15s;">
                <div class="card-img-container">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=800&q=80" alt="Kota Joe System" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="mb-2">
                    <span class="badge">Node.js</span>
                    <span class="badge">MongoDB</span>
                    <span class="badge">Inventory</span>
                </div>
                <h3 class="heading-md">Kota Joe Digital Management System</h3>
                <p class="mb-4" style="color: var(--secondary-text);">
                    An inventory and order management system resolving poor stock tracking and slow service. Implemented intelligent order processing, customer registration, and real-time inventory alerts.
                </p>
                <div style="margin-top: auto;">
                    <a href="kota-joe.php" class="btn btn-outline" style="width: 100%;">View Project Detail</a>
                </div>
            </div>
            
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
