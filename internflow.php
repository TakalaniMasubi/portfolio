<?php 
$page = 'projects';
include 'includes/header.php'; 
?>

<section class="section" style="padding-top: 4rem;">
    <div class="container animate-on-scroll">
        <div class="mb-4">
            <a href="projects.php" style="display: inline-flex; align-items: center; gap: 0.5rem; color: var(--secondary-text); margin-bottom: 1rem;"><i data-lucide="arrow-left" width="16"></i> Back to Projects</a>
            <div class="mb-2">
                <span class="badge">System Design</span>
                <span class="badge">Process Flow</span>
                <span class="badge">Architecture</span>
            </div>
            <h1 class="heading-xl">InternFlow <span class="text-gradient">System Architecture</span></h1>
            <p class="text-lg" style="max-width: 800px;">
                A deep dive into system analysis, focusing on defining clear business processes, data flows, and technical requirements for an internship management platform.
            </p>
        </div>

        <!-- Hero Banner -->
        <div style="width: 100%; height: 400px; border-radius: 1rem; box-shadow: var(--shadow-lg); overflow: hidden; margin-bottom: 3rem; background: linear-gradient(135deg, #0f172a, #1e293b); display: flex; align-items: center; justify-content: center;">
            <div style="text-align: center; padding: 2rem;">
                <i data-lucide="git-branch" style="width: 72px; height: 72px; color: #60A5FA; margin-bottom: 1rem;"></i>
                <h2 style="color: white; font-size: 1.75rem; font-weight: 700; margin-bottom: 0.5rem;">InternFlow Architecture</h2>
                <p style="color: #94a3b8;">System Analysis &amp; Design · DFDs · Process Flows · Requirements Specification</p>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <h3 class="heading-md">Project Scope</h3>
                <p class="mb-4" style="color: var(--secondary-text);">
                    InternFlow was focused heavily on the planning and architectural phases of software development. The goal was to take complex business requirements and translate them into a structured technical blueprint.
                </p>

                <h3 class="heading-md">Key Deliverables</h3>
                <ul class="grid gap-2 mb-4" style="list-style: none; padding: 0;">
                    <li class="flex items-center gap-2"><i data-lucide="file-text" style="color: var(--accent-blue); width: 20px;"></i> <strong>Data Flow Diagrams (DFDs):</strong> Mapping how information moves through the system.</li>
                    <li class="flex items-center gap-2"><i data-lucide="git-branch" style="color: var(--accent-blue); width: 20px;"></i> <strong>Process Flows:</strong> Visualizing user journeys and system logic.</li>
                    <li class="flex items-center gap-2"><i data-lucide="list-checks" style="color: var(--accent-blue); width: 20px;"></i> <strong>Work Breakdown Structures (WBS):</strong> Organizing the project lifecycle into manageable tasks.</li>
                    <li class="flex items-center gap-2"><i data-lucide="book-open" style="color: var(--accent-blue); width: 20px;"></i> <strong>Requirements Specification:</strong> Defining clear technical and user constraints.</li>
                </ul>
            </div>

            <div class="card">
                <h3 class="heading-md">Why This Matters</h3>
                <p class="mb-4" style="color: var(--secondary-text);">
                    Writing code is only one part of software development. The InternFlow project demonstrates my ability to step back, understand the <em>business needs</em>, and design an architecture that ensures the final code actually solves the right problems.
                </p>
                <div style="padding: 1.5rem; background: var(--bg-color); border-radius: 0.5rem; border-left: 4px solid var(--accent-blue);">
                    <p style="color: var(--secondary-text); font-style: italic; margin: 0;">"Good architecture makes complex systems manageable and scalable."</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
