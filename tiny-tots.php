<?php 
$page = 'projects';
include 'includes/header.php'; 
?>

<section class="section" style="padding-top: 4rem;">
    <div class="container animate-on-scroll">
        <div class="mb-4">
            <a href="projects.php" style="display: inline-flex; align-items: center; gap: 0.5rem; color: var(--secondary); margin-bottom: 1rem;"><i data-lucide="arrow-left" width="16"></i> Back to Projects</a>
            <div class="mb-2">
                <span class="badge">Flagship Project</span>
                <span class="badge">PHP</span>
                <span class="badge">MySQL</span>
                <span class="badge">Bootstrap</span>
            </div>
            <h1 class="heading-xl">Tiny Tots <span class="text-gradient">Crèche Management System</span></h1>
            <p class="text-lg" style="max-width: 800px; margin-bottom: 1.5rem;">
                A comprehensive digital transformation project replacing manual paperwork with a secure, centralized management platform for an educational institution.
            </p>
            <a href="https://tinytots.saixge.co.za" target="_blank" class="btn btn-primary" style="margin-bottom: 2rem;">
                <i data-lucide="external-link" style="margin-right: 0.5rem;"></i> Visit Live Site
            </a>
        </div>

        <div style="width: 100%; height: 500px; background: var(--secondary); border-radius: 1rem; box-shadow: var(--shadow-lg); overflow: hidden; margin-bottom: 3rem;">
            <img src="images/tiny-tots.png" alt="Tiny Tots Dashboard Mockup" style="width: 100%; height: 100%; object-fit: cover; object-position: left top;">
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <h3 class="heading-md">The Challenge</h3>
                <p class="mb-4">
                    Before this system, the crèche relied on manual paper forms for admissions, causing delays, lost information, and poor communication between staff and parents. Administrative tasks were slow and bottlenecked.
                </p>

                <h3 class="heading-md">The Solution</h3>
                <p class="mb-4">
                    I architected and developed a full-stack platform providing:
                </p>
                <ul class="grid gap-2 mb-4" style="list-style: none; padding: 0;">
                    <li class="flex items-center gap-2"><i data-lucide="check-circle" style="color: var(--success); width: 20px;"></i> <strong>Digital Admissions:</strong> Parents can apply online.</li>
                    <li class="flex items-center gap-2"><i data-lucide="check-circle" style="color: var(--success); width: 20px;"></i> <strong>Parent Portal:</strong> Secure access to track application status.</li>
                    <li class="flex items-center gap-2"><i data-lucide="check-circle" style="color: var(--success); width: 20px;"></i> <strong>Admin Dashboard:</strong> Centralized control over students and applications.</li>
                    <li class="flex items-center gap-2"><i data-lucide="check-circle" style="color: var(--success); width: 20px;"></i> <strong>Document Management:</strong> Secure upload and storage of sensitive files.</li>
                </ul>
            </div>

            <div class="card" style="background: var(--primary-dark); color: white;">
                <h3 class="heading-md" style="color: white;">Business Impact</h3>
                <ul class="grid gap-4" style="list-style: none; padding: 0;">
                    <li>
                        <strong style="color: var(--highlight); font-size: 1.2rem;">Reduced Paperwork</strong>
                        <p style="color: #94a3b8; font-size: 0.9rem;">Eliminated physical forms, drastically saving time and physical storage space.</p>
                    </li>
                    <li>
                        <strong style="color: var(--highlight); font-size: 1.2rem;">Improved Processing</strong>
                        <p style="color: #94a3b8; font-size: 0.9rem;">Admissions processing time cut down significantly due to automated tracking.</p>
                    </li>
                    <li>
                        <strong style="color: var(--highlight); font-size: 1.2rem;">Secure Data</strong>
                        <p style="color: #94a3b8; font-size: 0.9rem;">Role-based authentication ensuring only authorized personnel view sensitive data.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
