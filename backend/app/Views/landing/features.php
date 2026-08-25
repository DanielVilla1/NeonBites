<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/../components/head.php'; ?>

<body class="bg-black-deep min-h-screen text-gray-light antialiased">
    <header class="px-6 py-8 text-center">
        <h1 class="bg-clip-text bg-gradient-to-r from-neon-magenta via-neon-cyan to-neon-green drop-shadow-[0_0_12px_#00ffff] font-orbitron font-bold text-transparent text-4xl tracking-wide">
            <?= htmlspecialchars($siteName ?? 'NeonBites', ENT_QUOTES, 'UTF-8') ?> Features
        </h1>
        <p class="mx-auto mt-4 max-w-2xl text-gray-light/70">Discover what powers the NeonBites experience.</p>
        <p class="opacity-50 mt-2 text-xs"><a class="hover:text-neon-cyan underline" href="/">Back to Home</a></p>
    </header>
    <main class="z-10 relative">
        <?php
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
            [
                'title' => 'Real-time Menu Sync',
                'body'  => 'Micro seasonal updates delivered instantly across displays and devices.',
                'accent' => 'cyan',
            ],
            [
                'title' => 'Taste Profile Learning',
                'body'  => 'Adaptive recommendations evolve using anonymous flavor preference clustering.',
                'accent' => 'green',
            ],
            [
                'title' => 'Low-Impact Sourcing',
                'body'  => 'Supply chain optimized for sustainability and freshness in every bite.',
                'accent' => 'magenta',
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