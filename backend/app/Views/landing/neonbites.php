<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/../components/head.php'; ?>

<body class="bg-black-deep min-h-screen text-gray-light antialiased">
    <header class="relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-fuchsia-700/40 via-cyan-500/20 to-emerald-400/10 blur-3xl"></div>
        <nav class="z-10 relative flex justify-between items-center px-6 py-4">
            <span class="drop-shadow-[0_0_6px_#ff00ff] font-orbitron text-neon-magenta text-2xl tracking-wider">NeonBites</span>
            <ul class="hidden md:flex gap-8 font-medium">
                <li><a class="hover:text-neon-cyan transition" href="/features">Features</a></li>
                <li><a class="hover:text-neon-cyan transition" href="/menu">Menu</a></li>
                <li><a class="hover:text-neon-cyan transition" href="/contact">Contact</a></li>
            </ul>
            <a href="/get-started" class="bg-neon-magenta/20 hover:bg-neon-magenta shadow-[0_0_10px_#ff00ff] px-4 py-2 border border-neon-magenta rounded-md font-semibold text-neon-magenta hover:text-black-deep text-sm transition">Get Started</a>
        </nav>
        <div class="z-10 relative mx-auto px-6 pt-16 pb-28 max-w-5xl text-center">
            <h1 class="bg-clip-text bg-gradient-to-r from-neon-magenta via-neon-cyan to-neon-green drop-shadow-[0_0_12px_#00ffff] font-orbitron font-bold text-transparent text-5xl md:text-6xl leading-tight tracking-wide">
                Cyber Flavor. Real Bites.
            </h1>
            <p class="mx-auto mt-6 max-w-2xl text-gray-light/80 text-lg md:text-xl">
                Welcome to <?= htmlspecialchars($siteName ?? 'NeonBites', ENT_QUOTES, 'UTF-8') ?> — a neon-lit culinary hub blending futuristic aesthetics with immersive taste experiences.
            </p>
            <div class="flex md:flex-row flex-col justify-center gap-4 mt-10">
                <a href="/menu" class="bg-neon-cyan/20 hover:bg-neon-cyan shadow-[0_0_12px_#00ffff] px-6 py-3 border border-neon-cyan rounded-md font-semibold text-neon-cyan hover:text-black-deep transition">Explore Menu</a>
                <a href="/features" class="bg-neon-green/20 hover:bg-neon-green shadow-[0_0_12px_#39ff14] px-6 py-3 border border-neon-green rounded-md font-semibold text-neon-green hover:text-black-deep transition">Why NeonBites?</a>
            </div>
        </div>
    </header>

    <main class="z-10 relative">
        <?php
        // Feature data (could later come from a service)
        $features = $features ?? [
            [
                'title' => 'Immersive Ambience',
                'body'  => 'A synthwave-inspired dining atmosphere with holographic menus and ambient glow.',
                'accent' => 'magenta',
            ],
            [
                'title' => 'Dynamic Flavor Tech',
                'body'  => 'Adaptive taste mapping curates recommendations based on your past palette.',
                'accent' => 'cyan',
            ],
            [
                'title' => 'Sustainable Fusion',
                'body'  => 'Plant-forward cyber-fusion plates engineered for low impact and high punch.',
                'accent' => 'green',
            ],
        ];
        include __DIR__ . '/../components/features.php';
        ?>
    </main>

    <footer class="px-6 py-10 border-gray-mid/60 border-t text-gray-light/60 text-xs text-center">
        <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($siteName ?? 'NeonBites', ENT_QUOTES, 'UTF-8') ?>. All rights reserved.</p>
    </footer>
</body>

</html>