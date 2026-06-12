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
                <span class="badge">In Development</span>
                <span class="badge">PHP</span>
                <span class="badge">SaaS</span>
                <span class="badge">Multi-Tenant</span>
            </div>
            <h1 class="heading-xl">Event Planning <span class="text-gradient">SaaS Platform</span></h1>
            <p class="text-lg" style="max-width: 800px; margin-bottom: 1.5rem;">
                A full-scale, multi-tenant SaaS platform for planning, managing, and executing events — built from scratch using spec-driven development with zero external frameworks.
            </p>
        </div>

        <!-- Hero Banner -->
        <div style="width: 100%; height: 400px; border-radius: 1rem; overflow: hidden; margin-bottom: 3rem; background: linear-gradient(135deg, #0f2027, #203a43, #2c5364); display: flex; align-items: center; justify-content: center; box-shadow: var(--shadow-lg); position: relative;">
            <div style="text-align: center; z-index: 2; padding: 2rem;">
                <i data-lucide="calendar-range" style="width: 64px; height: 64px; color: #60A5FA; margin-bottom: 1rem;"></i>
                <h2 style="font-size: 2rem; font-weight: 700; color: white; margin-bottom: 0.5rem;">Event Planning SaaS</h2>
                <p style="color: #94a3b8; font-size: 1rem;">Multi-Tenant · Spec-Driven · PHP 8.2 · Vanilla JS PWA</p>
            </div>
            <div style="position: absolute; inset: 0; background: radial-gradient(circle at 30% 50%, rgba(59,130,246,0.15), transparent 60%), radial-gradient(circle at 80% 20%, rgba(6,182,212,0.1), transparent 50%);"></div>
        </div>

        <!-- Overview + Stack -->
        <div class="grid grid-cols-2 gap-4" style="margin-bottom: 3rem;">
            <div>
                <h3 class="heading-md">Project Overview</h3>
                <p class="mb-4" style="color: var(--secondary-text);">
                    This is my most complex and comprehensive project to date — a full SaaS platform built to support teams managing the entire lifecycle of an event, from initial concept through to execution and closeout.
                </p>
                <p style="color: var(--secondary-text);">
                    The system is multi-tenant, meaning multiple independent organizations each get their own isolated workspace and URL context. It supports complex role hierarchies, plugin modules, and a full participant management pipeline — all built without a PHP framework.
                </p>
            </div>
            <div class="card" style="padding: 2rem;">
                <h3 class="heading-md">Tech Stack</h3>
                <ul style="list-style: none; padding: 0;" class="grid gap-3">
                    <li class="flex items-center gap-2">
                        <i data-lucide="server" style="color: var(--accent-blue); width: 20px; flex-shrink: 0;"></i>
                        <span><strong>Backend:</strong> PHP 8.2 — no framework, PSR-4 autoloading</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="code-2" style="color: var(--accent-blue); width: 20px; flex-shrink: 0;"></i>
                        <span><strong>Frontend:</strong> Vanilla JS SPA + PWA (no React, no Vue)</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="database" style="color: var(--accent-blue); width: 20px; flex-shrink: 0;"></i>
                        <span><strong>Storage:</strong> JSON flat-file store (MySQL migration planned)</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="test-tube-2" style="color: var(--accent-blue); width: 20px; flex-shrink: 0;"></i>
                        <span><strong>Testing:</strong> PHPUnit + Playwright E2E</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="wind" style="color: var(--accent-blue); width: 20px; flex-shrink: 0;"></i>
                        <span><strong>CSS:</strong> Tailwind CSS</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="git-branch" style="color: var(--accent-blue); width: 20px; flex-shrink: 0;"></i>
                        <span><strong>Process:</strong> Spec-driven development with full docs</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Architecture Highlights -->
        <div style="margin-bottom: 3rem;">
            <h3 class="heading-md text-center mb-4">Architecture Highlights</h3>
            <div class="grid grid-cols-3">
                <div class="card text-center">
                    <i data-lucide="building-2" style="width: 40px; height: 40px; color: var(--accent-blue); margin: 0 auto 1rem;"></i>
                    <h4 style="color: white; font-weight: 600; margin-bottom: 0.5rem;">Multi-Tenant</h4>
                    <p style="color: var(--secondary-text); font-size: 0.9rem;">Each organization gets a URL-scoped session with fully isolated data. Zero cross-tenant leakage enforced at the service layer.</p>
                </div>
                <div class="card text-center">
                    <i data-lucide="shield-check" style="width: 40px; height: 40px; color: var(--success); margin: 0 auto 1rem;"></i>
                    <h4 style="color: white; font-weight: 600; margin-bottom: 0.5rem;">Layered Permissions</h4>
                    <p style="color: var(--secondary-text); font-size: 0.9rem;">5-layer permission resolution: Super User → Tenant Role → Team Permissions → Event Role → Participant Role.</p>
                </div>
                <div class="card text-center">
                    <i data-lucide="puzzle" style="width: 40px; height: 40px; color: var(--highlight); margin: 0 auto 1rem;"></i>
                    <h4 style="color: white; font-weight: 600; margin-bottom: 0.5rem;">Plugin System</h4>
                    <p style="color: var(--secondary-text); font-size: 0.9rem;">Core modules are always available. Optional plugins (Floor Plan, AI Output, Session Engagement) can be toggled per tenant with hierarchical config inheritance.</p>
                </div>
            </div>
        </div>

        <!-- Modules Built -->
        <div style="margin-bottom: 3rem;">
            <h3 class="heading-md mb-4">What's Inside — 16+ Modules</h3>
            <div class="grid" style="grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 1rem;">
                <?php
                $modules = [
                    ['icon' => 'calendar', 'name' => 'Event Lifecycle', 'desc' => 'Draft → Planning → Execution → Archived'],
                    ['icon' => 'users', 'name' => 'Participant Management', 'desc' => 'Attendees, Speakers, Exhibitors, VIPs'],
                    ['icon' => 'clipboard-list', 'name' => 'Registration', 'desc' => 'Self-service & admin-controlled flows'],
                    ['icon' => 'check-square', 'name' => 'Checklist Module', 'desc' => 'Task tracking with completion scoring'],
                    ['icon' => 'wallet', 'name' => 'Budget Module', 'desc' => 'Planned vs actual financial tracking'],
                    ['icon' => 'layout-list', 'name' => 'Programme / Schedule', 'desc' => 'Sessions, speakers, capacity'],
                    ['icon' => 'gauge', 'name' => 'Progress Engine', 'desc' => 'Event readiness score 0–100%'],
                    ['icon' => 'message-square', 'name' => 'Comments Module', 'desc' => 'Team + moderator collaboration'],
                    ['icon' => 'map', 'name' => 'Floor Plan [Plugin]', 'desc' => 'Space definition & exhibitor allocation'],
                    ['icon' => 'bot', 'name' => 'AI Output [Plugin]', 'desc' => 'Structured prompt generation'],
                    ['icon' => 'mail-check', 'name' => 'Invite Management [Plugin]', 'desc' => 'Outreach pipeline with templates'],
                    ['icon' => 'navigation', 'name' => 'Navigation Service', 'desc' => 'Server-resolved, role-aware nav'],
                ];
                foreach ($modules as $mod): ?>
                <div style="background: rgba(23,32,51,0.6); border: 1px solid rgba(255,255,255,0.05); border-radius: 0.75rem; padding: 1.25rem; display: flex; gap: 0.75rem; align-items: flex-start;">
                    <i data-lucide="<?= $mod['icon'] ?>" style="width: 20px; height: 20px; color: var(--accent-blue); flex-shrink: 0; margin-top: 2px;"></i>
                    <div>
                        <div style="font-weight: 600; color: white; font-size: 0.9rem; margin-bottom: 0.25rem;"><?= $mod['name'] ?></div>
                        <div style="color: var(--secondary-text); font-size: 0.8rem;"><?= $mod['desc'] ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Spec-Driven Development Callout -->
        <div class="card" style="background: linear-gradient(135deg, rgba(59,130,246,0.1), rgba(6,182,212,0.05)); border: 1px solid rgba(59,130,246,0.2); margin-bottom: 3rem;">
            <div class="grid grid-cols-2 items-center gap-4">
                <div>
                    <h3 class="heading-md">Built Spec-First</h3>
                    <p style="color: var(--secondary-text);">
                        Before writing a single line of code, every module was defined with inputs, outputs, data ownership, rules, and service interaction flows. The project has a full documentation suite covering:
                    </p>
                    <ul style="list-style: none; padding: 0; margin-top: 1rem;" class="grid gap-2">
                        <li class="flex items-center gap-2"><i data-lucide="file-text" style="color: var(--success); width: 16px;"></i> <span style="color: var(--secondary-text);">Product-Level Specification</span></li>
                        <li class="flex items-center gap-2"><i data-lucide="file-text" style="color: var(--success); width: 16px;"></i> <span style="color: var(--secondary-text);">Module Breakdown (16 modules)</span></li>
                        <li class="flex items-center gap-2"><i data-lucide="file-text" style="color: var(--success); width: 16px;"></i> <span style="color: var(--secondary-text);">Service Definitions (22 services)</span></li>
                        <li class="flex items-center gap-2"><i data-lucide="file-text" style="color: var(--success); width: 16px;"></i> <span style="color: var(--secondary-text);">State Transitions, Roles & Permissions, API Specs</span></li>
                    </ul>
                </div>
                <div style="padding: 1.5rem; background: rgba(0,0,0,0.2); border-radius: 0.75rem; border-left: 4px solid var(--accent-blue);">
                    <p style="color: #94a3b8; font-style: italic; margin-bottom: 0.5rem;">
                        "Define behavior before implementation. Build incrementally using stable specifications."
                    </p>
                    <p style="color: var(--accent-blue); font-size: 0.875rem; font-weight: 600;">— Project guiding principle</p>
                </div>
            </div>
        </div>

        <!-- Status + CTA -->
        <div class="card text-center" style="background: var(--bg-secondary);">
            <span class="badge" style="background: rgba(16,185,129,0.15); color: #34d399; border-color: rgba(16,185,129,0.2); font-size: 0.875rem; padding: 0.4rem 1rem; margin-bottom: 1rem;">🔧 Actively In Development</span>
            <h3 class="heading-md">Interested in This System?</h3>
            <p style="color: var(--secondary-text); max-width: 500px; margin: 0 auto 2rem;">
                If you're looking for a custom event management platform or want to collaborate, let's talk.
            </p>
            <a href="contact.php" class="btn btn-primary">Get in Touch</a>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>
