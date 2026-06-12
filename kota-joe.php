<?php 
$page = 'projects';
include 'includes/header.php'; 
?>

<section class="section" style="padding-top: 4rem;">
    <div class="container animate-on-scroll">
        <div class="mb-4">
            <a href="projects.php" style="display: inline-flex; align-items: center; gap: 0.5rem; color: var(--secondary); margin-bottom: 1rem;"><i data-lucide="arrow-left" width="16"></i> Back to Projects</a>
            <div class="mb-2">
                <span class="badge">Node.js</span>
                <span class="badge">MongoDB</span>
                <span class="badge">REST API</span>
            </div>
            <h1 class="heading-xl">Kota Joe <span class="text-gradient">Digital Management System</span></h1>
            <p class="text-lg" style="max-width: 800px; margin-bottom: 1.5rem;">
                An advanced inventory and order management backend designed to speed up service and track stock in real-time.
            </p>
        </div>

        <div style="width: 100%; height: 500px; border-radius: 1rem; box-shadow: var(--shadow-lg); overflow: hidden; margin-bottom: 3rem;">
            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=1200&q=80" alt="Kota Joe System" style="width: 100%; height: 100%; object-fit: cover;">
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <h3 class="heading-md">The Challenge</h3>
                <p class="mb-4">
                    The business faced poor stock management, slow service during busy hours, and a lack of data collection for marketing. They needed a system that could handle real-time inventory and customer tracking.
                </p>

                <h3 class="heading-md">Technical Implementation</h3>
                <ul class="grid gap-2 mb-4" style="list-style: none; padding: 0;">
                    <li class="flex items-center gap-2"><i data-lucide="server" style="color: var(--accent-blue); width: 20px;"></i> <strong>Node.js & Express:</strong> Fast, scalable backend API.</li>
                    <li class="flex items-center gap-2"><i data-lucide="database" style="color: var(--accent-blue); width: 20px;"></i> <strong>MongoDB:</strong> Flexible document storage for complex orders.</li>
                    <li class="flex items-center gap-2"><i data-lucide="shield" style="color: var(--accent-blue); width: 20px;"></i> <strong>Smart Validation:</strong> Advanced email/phone formatting and duplicate detection.</li>
                    <li class="flex items-center gap-2"><i data-lucide="bar-chart-3" style="color: var(--accent-blue); width: 20px;"></i> <strong>Inventory Alerts:</strong> Automated stock tracking and alerts.</li>
                </ul>
            </div>

            <div class="card" style="background: #1e293b; color: white; border: none;">
                <h3 class="heading-md" style="color: white;">Expected Outcomes</h3>
                <div class="grid gap-4 mt-4">
                    <div style="background: rgba(255,255,255,0.05); padding: 1rem; border-radius: 0.5rem;">
                        <div class="flex items-center justify-between mb-2">
                            <span style="color: #94a3b8;">Service Speed</span>
                            <span style="color: var(--success); font-weight: bold;">+30%</span>
                        </div>
                        <div style="width: 100%; background: rgba(255,255,255,0.1); height: 6px; border-radius: 3px;">
                            <div style="width: 80%; background: var(--success); height: 100%; border-radius: 3px;"></div>
                        </div>
                    </div>
                    
                    <div style="background: rgba(255,255,255,0.05); padding: 1rem; border-radius: 0.5rem;">
                        <div class="flex items-center justify-between mb-2">
                            <span style="color: #94a3b8;">Stock Errors</span>
                            <span style="color: var(--highlight); font-weight: bold;">-25%</span>
                        </div>
                        <div style="width: 100%; background: rgba(255,255,255,0.1); height: 6px; border-radius: 3px;">
                            <div style="width: 75%; background: var(--highlight); height: 100%; border-radius: 3px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
