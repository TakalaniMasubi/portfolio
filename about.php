<?php
$page = 'about';
include 'includes/header.php';
?>

<!-- ═══ HERO ═══ -->
<section class="section" style="padding-top: 5rem;">
  <div class="container">
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 5rem; align-items: center;">

      <!-- Text -->
      <div class="animate-on-scroll">
        <div class="hero-eyebrow">
          <span class="dot"></span> Full-Stack Developer · South Africa
        </div>
        <h1 class="heading-xl">A Developer Who Understands <span class="text-gradient">Business</span>.</h1>
        <p class="text-lg">
          I'm Takalani Masubi — I build software that solves real operational problems.
          Not just clean code, but systems that make organizations run better.
        </p>
        <p style="color: var(--secondary-text); margin-bottom: 2rem; line-height: 1.8;">
          My work spans from educational management platforms to multi-tenant SaaS systems.
          I approach every project spec-first — defining behavior before writing a single line of code.
          That discipline shows in the systems I ship.
        </p>

        <div class="code-block" style="margin-bottom: 2rem;">
          <div class="code-dots">
            <span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span>
          </div>
          <span class="code-comment">// who I am</span><br>
          <span class="code-kw">const</span> <span class="code-var">takalani</span> = {<br>
          &nbsp;&nbsp;role: <span class="code-str">"Full-Stack Developer"</span>,<br>
          &nbsp;&nbsp;location: <span class="code-str">"South Africa"</span>,<br>
          &nbsp;&nbsp;approach: <span class="code-str">"spec-driven"</span>,<br>
          &nbsp;&nbsp;philosophy: <span class="code-str">"solve real problems"</span><br>
          };
        </div>

        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
          <a href="contact.php" class="btn btn-primary">Let's Work Together</a>
          <a href="https://github.com/TakalaniMasubi" target="_blank" class="btn btn-outline">
            <i class="fa-brands fa-github" style="margin-right: 0.5rem;"></i> GitHub
          </a>
        </div>
      </div>

      <!-- Photo: Blue suit — professional headshot -->
      <div class="animate-on-scroll" style="transition-delay: 0.15s;">
        <div class="about-photo-wrapper">
          <img
            src="images/takalani-suit.jpg"
            alt="Takalani Masubi"
            onerror="this.src=''; this.parentElement.style.minHeight='500px'; this.parentElement.style.background='linear-gradient(135deg,#0f2027,#203a43)'; this.style.display='none';"
          >
          <div style="position:absolute;inset:0;background:linear-gradient(to bottom,transparent 60%,rgba(6,13,31,0.5) 100%);pointer-events:none;"></div>
        </div>
      </div>

    </div>
  </div>
</section>

<hr class="divider">

<!-- ═══ SKILLS ═══ -->
<section class="section" style="background: var(--bg-secondary);">
  <div class="container">
    <div class="section-header animate-on-scroll">
      <span class="section-tag">Technical Skills</span>
      <h2 class="heading-lg">Technical <span class="text-gradient">Arsenal</span></h2>
    </div>

    <div class="grid grid-cols-3 animate-on-scroll">
      <div class="skill-card">
        <i data-lucide="server" class="skill-icon"></i>
        <h3 class="heading-md">Backend</h3>
        <div class="tech-pills" style="justify-content: center; margin-top: 0.75rem;">
          <span class="tech-pill">PHP 8.2</span>
          <span class="tech-pill">Node.js</span>
          <span class="tech-pill">Express</span>
          <span class="tech-pill">REST APIs</span>
        </div>
      </div>
      <div class="skill-card">
        <i data-lucide="monitor" class="skill-icon" style="color: var(--accent-cyan);"></i>
        <h3 class="heading-md">Frontend</h3>
        <div class="tech-pills" style="justify-content: center; margin-top: 0.75rem;">
          <span class="tech-pill">Vanilla JS</span>
          <span class="tech-pill">SPA / PWA</span>
          <span class="tech-pill">Tailwind</span>
          <span class="tech-pill">Bootstrap</span>
          <span class="tech-pill">React</span>
        </div>
      </div>
      <div class="skill-card">
        <i data-lucide="database" class="skill-icon" style="color: var(--success);"></i>
        <h3 class="heading-md">Data & Architecture</h3>
        <div class="tech-pills" style="justify-content: center; margin-top: 0.75rem;">
          <span class="tech-pill">MySQL</span>
          <span class="tech-pill">MongoDB</span>
          <span class="tech-pill">DFD / ERD</span>
          <span class="tech-pill">Multi-Tenant</span>
        </div>
      </div>
    </div>

    <!-- Additional skills row -->
    <div class="grid grid-cols-3 animate-on-scroll" style="margin-top: 1.5rem;">
      <div class="skill-card">
        <i data-lucide="test-tube-2" class="skill-icon" style="color: var(--warning);"></i>
        <h3 class="heading-md">Testing & QA</h3>
        <div class="tech-pills" style="justify-content: center; margin-top: 0.75rem;">
          <span class="tech-pill">PHPUnit</span>
          <span class="tech-pill">Playwright</span>
          <span class="tech-pill">UAT</span>
          <span class="tech-pill">Component Testing</span>
        </div>
      </div>
      <div class="skill-card">
        <i data-lucide="git-branch" class="skill-icon" style="color: #f97316;"></i>
        <h3 class="heading-md">Tools & Process</h3>
        <div class="tech-pills" style="justify-content: center; margin-top: 0.75rem;">
          <span class="tech-pill">Git / GitHub</span>
          <span class="tech-pill">Spec-Driven Dev</span>
          <span class="tech-pill">PSR-4</span>
        </div>
      </div>
      <div class="skill-card">
        <i data-lucide="shield-check" class="skill-icon" style="color: #a78bfa;"></i>
        <h3 class="heading-md">Architecture</h3>
        <div class="tech-pills" style="justify-content: center; margin-top: 0.75rem;">
          <span class="tech-pill">SaaS / Multi-Tenant</span>
          <span class="tech-pill">RBAC</span>
          <span class="tech-pill">Plugin Systems</span>
        </div>
      </div>
    </div>
  </div>
</section>

<hr class="divider">

<!-- ═══ WORKING SHOT ═══ -->
<section class="section">
  <div class="container">
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">

      <!-- Reading / studying photo -->
      <div class="animate-on-scroll">
        <div class="about-photo-wrapper">
          <img
            src="images/takalani-reading.jpg"
            alt="Takalani Masubi studying"
            onerror="this.src=''; this.parentElement.style.minHeight='400px'; this.parentElement.style.background='linear-gradient(135deg,#0f1729,#172033)'; this.style.display='none';"
          >
        </div>
      </div>

      <!-- GitHub section -->
      <div class="animate-on-scroll" style="transition-delay: 0.15s;">
        <span class="section-tag">Open Source</span>
        <h2 class="heading-lg" style="margin-top: 1rem;">My Code Lives on <span class="text-gradient">GitHub</span></h2>
        <p style="color: var(--secondary-text); margin-bottom: 1.5rem; line-height: 1.8;">
          Every project starts with a spec and ends with a working system.
          Browse my repositories to see how I structure, architect, and build software.
        </p>

        <div class="code-block" style="margin-bottom: 2rem;">
          <div class="code-dots">
            <span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span>
          </div>
          <span class="code-comment"># clone my portfolio repo</span><br>
          git clone https://github.com/<br>
          &nbsp;&nbsp;TakalaniMasubi/portfolio.git<br><br>
          <span class="code-comment"># explore the code</span><br>
          cd portfolio && ls -la
        </div>

        <a href="https://github.com/TakalaniMasubi" target="_blank" class="btn btn-primary" style="font-size:1rem; padding: 0.875rem 2rem;">
          <i class="fa-brands fa-github" style="margin-right: 0.75rem; font-size: 1.1rem;"></i>
          Visit My GitHub
        </a>
      </div>

    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
