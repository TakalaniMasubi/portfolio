<?php
$page = 'home';
include 'includes/header.php';
?>

<!-- ═══ HERO ═══ -->
<section class="hero section">
  <div class="container">
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 5rem; align-items: center;">

      <!-- Left: Text -->
      <div class="animate-on-scroll">
        <div class="hero-eyebrow">
          <span class="dot"></span>
          Available for projects
        </div>

        <h1 class="heading-xl">
          Building Software That <span class="text-gradient">Solves Real Problems</span>
        </h1>

        <p class="text-lg">
          Full-Stack Developer specializing in custom business systems, educational platforms,
          and digital transformation. Based in South Africa, building for the world.
        </p>

        <!-- Inline code snippet decoration -->
        <div class="code-block" style="margin-bottom: 2rem;">
          <div class="code-dots">
            <span class="dot-red"></span>
            <span class="dot-yellow"></span>
            <span class="dot-green"></span>
          </div>
          <span class="code-comment">// current status</span><br>
          <span class="code-kw">const</span> <span class="code-var">developer</span> = {<br>
          &nbsp;&nbsp;name: <span class="code-str">"Takalani Masubi"</span>,<br>
          &nbsp;&nbsp;stack: [<span class="code-str">"PHP"</span>, <span class="code-str">"Node.js"</span>, <span class="code-str">"JS"</span>],<br>
          &nbsp;&nbsp;status: <span class="code-str">"open to work"</span> <span class="code-comment">✓</span><br>
          };
        </div>

        <div class="hero-buttons">
          <a href="projects.php" class="btn btn-primary">
            <i data-lucide="folder-code" style="margin-right: 0.5rem; width:18px;"></i> View Projects
          </a>
          <a href="contact.php" class="btn btn-outline">
            <i data-lucide="mail" style="margin-right: 0.5rem; width:18px;"></i> Get In Touch
          </a>
        </div>
      </div>

      <!-- Right: Photo -->
      <div class="hero-photo-frame animate-on-scroll" style="transition-delay: 0.15s;">
        <div class="photo-wrapper">
          <img
            src="images/takalani-laptop.jpg"
            alt="Takalani Masubi — Developer"
            onerror="this.src=''; this.parentElement.style.background='linear-gradient(135deg,#0f2027,#1e3a5f)'; this.style.display='none';"
          >
          <div class="photo-overlay"></div>
          <div class="photo-badge">
            <span class="status-dot"></span>
            <div>
              <div style="font-weight: 700; font-size: 0.875rem; color: white;">Takalani Masubi</div>
              <div style="font-size: 0.75rem; color: var(--secondary-text);">Full-Stack Developer · South Africa</div>
            </div>
          </div>
        </div>

        <!-- Floating tech pills -->
        <div style="position: absolute; top: 1.5rem; right: -1rem; background: rgba(6,13,31,0.9); border: var(--border-subtle); border-radius: 0.75rem; padding: 0.75rem 1rem; backdrop-filter: blur(12px); box-shadow: var(--shadow-md);">
          <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.8rem; color: var(--accent-cyan); font-weight: 600;">
            <i data-lucide="code-2" style="width:14px;"></i> PHP 8.2
          </div>
        </div>
        <div style="position: absolute; top: 4.5rem; right: -2rem; background: rgba(6,13,31,0.9); border: var(--border-subtle); border-radius: 0.75rem; padding: 0.75rem 1rem; backdrop-filter: blur(12px); box-shadow: var(--shadow-md);">
          <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.8rem; color: #34d399; font-weight: 600;">
            <i data-lucide="server" style="width:14px;"></i> Node.js
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<hr class="divider">

<!-- ═══ STATS ═══ -->
<section class="stats-strip section-sm">
  <div class="container">
    <div class="grid grid-cols-3 text-center animate-on-scroll">
      <div class="stat-item">
        <span class="stat-number">5+</span>
        <span class="stat-label">Systems Deployed</span>
      </div>
      <div class="stat-item" style="border-left: var(--border-subtle); border-right: var(--border-subtle);">
        <span class="stat-number">100%</span>
        <span class="stat-label">Client Satisfaction</span>
      </div>
      <div class="stat-item">
        <span class="stat-number">2+</span>
        <span class="stat-label">Years Building</span>
      </div>
    </div>
  </div>
</section>

<hr class="divider">

<!-- ═══ FEATURED: TINY TOTS ═══ -->
<section class="section">
  <div class="container">
    <div class="section-header animate-on-scroll">
      <span class="section-tag">Featured Case Study</span>
      <h2 class="heading-lg">Tiny Tots Crèche <span class="text-gradient">Management System</span></h2>
      <p class="text-lg" style="max-width: 600px; margin: 0 auto;">
        Eliminating manual paperwork for an educational institution — from admissions to parent portals.
      </p>
    </div>

    <div class="featured-project animate-on-scroll">
      <div class="project-img-frame">
        <img src="images/tiny-tots.png" alt="Tiny Tots Dashboard" style="object-position: left top;">
        <div class="img-overlay"></div>
      </div>

      <div>
        <div class="mb-2">
          <span class="badge">Flagship</span>
          <span class="badge">PHP</span>
          <span class="badge">MySQL</span>
          <span class="badge">Education</span>
        </div>

        <h3 class="heading-md" style="font-size: 1.75rem;">From Paperwork to Digital Platform</h3>
        <p style="color: var(--secondary-text); margin-bottom: 1.5rem; line-height: 1.8;">
          The crèche was drowning in manual forms — lost applications, slow processing, frustrated parents.
          I architected and built a complete digital platform to replace every paper process.
        </p>

        <ul class="check-list mb-4">
          <li>
            <i data-lucide="check-circle" class="check-icon"></i>
            <span><strong>Online admissions</strong> — parents apply from anywhere</span>
          </li>
          <li>
            <i data-lucide="check-circle" class="check-icon"></i>
            <span><strong>Parent portal</strong> — secure access to application status</span>
          </li>
          <li>
            <i data-lucide="check-circle" class="check-icon"></i>
            <span><strong>Admin dashboard</strong> — centralized control, role-based auth</span>
          </li>
          <li>
            <i data-lucide="check-circle" class="check-icon"></i>
            <span><strong>Document management</strong> — secure file upload & storage</span>
          </li>
        </ul>

        <div class="tech-pills" style="margin-bottom: 2rem;">
          <span class="tech-pill">PHP</span>
          <span class="tech-pill">MySQL</span>
          <span class="tech-pill">Bootstrap</span>
          <span class="tech-pill">Role-Based Auth</span>
        </div>

        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
          <a href="tiny-tots.php" class="btn btn-outline">Case Study <i data-lucide="arrow-right" style="margin-left: 0.4rem; width:16px;"></i></a>
          <a href="https://tinytots.saixge.co.za" target="_blank" class="btn btn-primary">
            <i data-lucide="external-link" style="margin-right: 0.5rem; width:16px;"></i> Live Site
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<hr class="divider">

<!-- ═══ FEATURED: THULAMELA ═══ -->
<section class="section" style="background: var(--bg-secondary);">
  <div class="container">
    <div class="section-header animate-on-scroll">
      <span class="section-tag">QA & Testing</span>
      <h2 class="heading-lg">Thulamela Business Forum <span class="text-gradient">Member Platform</span></h2>
      <p class="text-lg" style="max-width: 600px; margin: 0 auto;">
        Led end-to-end quality assurance — from component testing through to UAT sign-off on a live NPO platform.
      </p>
    </div>

    <div class="featured-project reverse animate-on-scroll">
      <div>
        <div class="mb-2">
          <span class="badge" style="background:rgba(16,185,129,0.12);color:#34d399;border-color:rgba(16,185,129,0.2);">Live</span>
          <span class="badge">QA Lead</span>
          <span class="badge">UAT</span>
          <span class="badge">Limpopo NPO</span>
        </div>

        <h3 class="heading-md" style="font-size: 1.75rem;">Full Testing Lifecycle</h3>
        <p style="color: var(--secondary-text); margin-bottom: 1.5rem; line-height: 1.8;">
          The Thulamela Business Forum needed their member platform verified before going live ahead of the
          AfriKan Entrepreneurship Excellence Conference 2026. I owned the full QA process.
        </p>

        <ul class="check-list mb-4">
          <li>
            <i data-lucide="check-circle" class="check-icon"></i>
            <span><strong>Component testing</strong> — every UI and backend module in isolation</span>
          </li>
          <li>
            <i data-lucide="check-circle" class="check-icon"></i>
            <span><strong>Integration testing</strong> — end-to-end flows and data integrity</span>
          </li>
          <li>
            <i data-lucide="check-circle" class="check-icon"></i>
            <span><strong>User testing</strong> — real users, documented findings</span>
          </li>
          <li>
            <i data-lucide="check-circle" class="check-icon"></i>
            <span><strong>UAT</strong> — stakeholder sign-off before go-live</span>
          </li>
        </ul>

        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
          <a href="thulamela.php" class="btn btn-outline">Case Study <i data-lucide="arrow-right" style="margin-left: 0.4rem; width:16px;"></i></a>
          <a href="https://mob.thulamelabusiness.co.za" target="_blank" class="btn btn-primary">
            <i data-lucide="external-link" style="margin-right: 0.5rem; width:16px;"></i> Live Platform
          </a>
        </div>
      </div>

      <div class="project-img-frame">
        <!-- TBF logo banner -->
        <div style="width:100%; height:400px; background: linear-gradient(135deg, #1a1a2e, #16213e, #0f3460); display:flex; align-items:center; justify-content:center; position:relative;">
          <div style="text-align:center; z-index:2;">
            <div style="width:90px;height:90px;border-radius:50%;background:white;margin:0 auto 1.25rem;overflow:hidden;display:flex;align-items:center;justify-content:center;box-shadow:var(--shadow-lg);">
              <img src="https://mob.thulamelabusiness.co.za/assets/logo.jpg" alt="TBF" style="width:100%;height:100%;object-fit:cover;" onerror="this.style.display='none';this.parentElement.innerHTML='<span style=\'font-weight:800;color:#1a1a2e;font-size:1.5rem;\'>TBF</span>';">
            </div>
            <p style="color:white;font-weight:700;font-size:1.2rem;margin-bottom:0.25rem;">Thulamela Business Forum</p>
            <p style="color:#94a3b8;font-size:0.875rem;">Thohoyandou, Limpopo · NPO</p>
            <div class="tech-pills" style="justify-content:center;margin-top:1rem;">
              <span class="tech-pill">AEEC 2026</span>
              <span class="tech-pill">Sept 9–11</span>
            </div>
          </div>
          <div style="position:absolute;inset:0;background:radial-gradient(circle at 30% 40%, rgba(59,130,246,0.12), transparent 60%);pointer-events:none;"></div>
        </div>
        <div class="img-overlay"></div>
      </div>
    </div>
  </div>
</section>

<hr class="divider">

<!-- ═══ FEATURED: EVENT PLATFORM ═══ -->
<section class="section">
  <div class="container">
    <div class="section-header animate-on-scroll">
      <span class="section-tag" style="background:rgba(16,185,129,0.08);color:#34d399;border-color:rgba(16,185,129,0.2);">In Development</span>
      <h2 class="heading-lg">Event Planning <span class="text-gradient">SaaS Platform</span></h2>
      <p class="text-lg" style="max-width: 600px; margin: 0 auto;">
        My most architecturally complex project — a multi-tenant SaaS platform built from scratch without any framework.
      </p>
    </div>

    <div class="featured-project animate-on-scroll">
      <!-- Code showcase -->
      <div class="code-block" style="font-size:0.78rem; height: 100%; min-height: 360px;">
        <div class="code-dots">
          <span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span>
        </div>
        <span class="code-comment">// TenantContextService.php</span><br>
        <span class="code-kw">class</span> <span class="code-fn">TenantContextService</span> {<br><br>
        &nbsp;&nbsp;<span class="code-kw">public function</span> <span class="code-fn">resolve</span>(<span class="code-var">$url</span>): <span class="code-fn">Tenant</span> {<br>
        &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-var">$slug</span> = <span class="code-fn">$this</span>-&gt;<span class="code-fn">extractSlug</span>(<span class="code-var">$url</span>);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-var">$tenant</span> = <span class="code-fn">Tenant</span>::<span class="code-fn">findBySlug</span>(<span class="code-var">$slug</span>)<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;?? <span class="code-fn">abort</span>(<span class="code-num">404</span>);<br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-fn">session</span>()-&gt;<span class="code-fn">set</span>(<span class="code-str">'tenant_id'</span>, <span class="code-var">$tenant</span>-&gt;id);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-kw">return</span> <span class="code-var">$tenant</span>;<br>
        &nbsp;&nbsp;}<br><br>
        &nbsp;&nbsp;<span class="code-comment">// 5-layer permission resolution</span><br>
        &nbsp;&nbsp;<span class="code-kw">public function</span> <span class="code-fn">resolvePermissions</span>(): <span class="code-fn">array</span> {<br>
        &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-kw">return</span> <span class="code-fn">array_merge</span>(<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-fn">$this</span>-&gt;<span class="code-fn">tenantRole</span>(),<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-fn">$this</span>-&gt;<span class="code-fn">teamPermissions</span>(),<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-fn">$this</span>-&gt;<span class="code-fn">eventRole</span>()<br>
        &nbsp;&nbsp;&nbsp;&nbsp;);<br>
        &nbsp;&nbsp;}<br>
        }
      </div>

      <div>
        <div class="mb-2">
          <span class="badge">PHP 8.2</span>
          <span class="badge">Multi-Tenant</span>
          <span class="badge">SaaS</span>
          <span class="badge">16+ Modules</span>
        </div>

        <h3 class="heading-md" style="font-size: 1.75rem;">Zero Framework. Full Architecture.</h3>
        <p style="color: var(--secondary-text); margin-bottom: 1.5rem; line-height: 1.8;">
          Built entirely without Laravel or any full framework — custom router, service container,
          middleware stack, and a Vanilla JS PWA frontend. Every line of logic is deliberate and documented.
        </p>

        <ul class="check-list mb-4">
          <li><i data-lucide="check-circle" class="check-icon"></i><span><strong>Multi-tenant</strong> — URL-scoped session isolation per org</span></li>
          <li><i data-lucide="check-circle" class="check-icon"></i><span><strong>5-layer permissions</strong> — Super User → Tenant → Team → Event → Participant</span></li>
          <li><i data-lucide="check-circle" class="check-icon"></i><span><strong>Plugin system</strong> — global → group → tenant config hierarchy</span></li>
          <li><i data-lucide="check-circle" class="check-icon"></i><span><strong>Spec-driven</strong> — full documentation suite before any code</span></li>
        </ul>

        <div class="tech-pills" style="margin-bottom: 2rem;">
          <span class="tech-pill">PHP 8.2</span>
          <span class="tech-pill">Vanilla JS PWA</span>
          <span class="tech-pill">PHPUnit</span>
          <span class="tech-pill">Playwright</span>
          <span class="tech-pill">Tailwind CSS</span>
        </div>

        <a href="event-platform.php" class="btn btn-outline">
          View Full Architecture <i data-lucide="arrow-right" style="margin-left: 0.4rem; width:16px;"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<hr class="divider">

<!-- ═══ SERVICES ═══ -->
<section class="section" style="background: var(--bg-secondary);">
  <div class="container">
    <div class="section-header animate-on-scroll">
      <span class="section-tag">What I Do</span>
      <h2 class="heading-lg">Core <span class="text-gradient">Services</span></h2>
    </div>

    <div class="grid grid-cols-3 animate-on-scroll">
      <div class="card">
        <i data-lucide="layout-dashboard" style="width:44px;height:44px;color:var(--accent-blue);margin-bottom:1.5rem;"></i>
        <h3 class="heading-md">Custom Web Apps</h3>
        <p style="color:var(--secondary-text);">Tailored, scalable web applications built to solve your specific operational challenges — not off-the-shelf templates.</p>
      </div>
      <div class="card">
        <i data-lucide="database" style="width:44px;height:44px;color:var(--accent-cyan);margin-bottom:1.5rem;"></i>
        <h3 class="heading-md">Management Systems</h3>
        <p style="color:var(--secondary-text);">Secure, role-based dashboards and management platforms — from school admin systems to business member portals.</p>
      </div>
      <div class="card">
        <i data-lucide="zap" style="width:44px;height:44px;color:var(--success);margin-bottom:1.5rem;"></i>
        <h3 class="heading-md">Digital Transformation</h3>
        <p style="color:var(--secondary-text);">Digitizing manual paper processes, integrating APIs, and modernizing how your organization operates day-to-day.</p>
      </div>
    </div>
  </div>
</section>

<hr class="divider">

<!-- ═══ CTA ═══ -->
<section class="cta-section section text-center">
  <div class="container animate-on-scroll">
    <h2 class="heading-lg"><span class="text-gradient">Ready to Build</span> Your System?</h2>
    <p class="text-lg" style="max-width: 550px; margin: 0 auto 2.5rem;">
      Whether it's a management platform, an ordering system, or a custom internal tool —
      let's turn your idea into working software.
    </p>
    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
      <a href="contact.php" class="btn btn-primary" style="font-size:1.05rem;padding:0.875rem 2.25rem;">
        <i data-lucide="mail" style="margin-right:0.5rem;width:18px;"></i> Start a Conversation
      </a>
      <a href="projects.php" class="btn btn-outline" style="font-size:1.05rem;padding:0.875rem 2.25rem;">
        Browse All Projects
      </a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
