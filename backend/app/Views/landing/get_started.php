<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/../components/head.php'; ?>

<body class="bg-black-deep min-h-screen text-gray-light antialiased">
    <header class="px-6 py-10 text-center">
        <h1 class="bg-clip-text bg-gradient-to-r from-neon-magenta via-neon-cyan to-neon-green drop-shadow-[0_0_12px_#00ffff] font-orbitron font-bold text-transparent text-4xl tracking-wide">Get Started</h1>
        <p class="mx-auto mt-4 max-w-2xl text-gray-light/70">Launch your NeonBites experience—reserve, subscribe, and connect.</p>
        <p class="opacity-50 mt-2 text-xs"><a class="hover:text-neon-cyan underline" href="/">Back to Home</a></p>
    </header>
    <main class="z-10 relative pb-24">
        <section class="gap-12 grid md:grid-cols-3 mx-auto px-6 max-w-5xl">
            <div class="bg-gray-mid/40 shadow-[0_0_8px_#ff00ff55] backdrop-blur p-6 border border-neon-magenta/40 rounded-xl">
                <h2 class="mb-3 font-semibold text-neon-magenta">1. Reserve</h2>
                <p class="text-gray-light/70 text-xs leading-relaxed">Choose your preferred slot for immersive dining. Reactive seating layout coming soon.</p>
            </div>
            <div class="bg-gray-mid/40 shadow-[0_0_8px_#00ffff55] backdrop-blur p-6 border border-hud-line/40 rounded-xl">
                <h2 class="mb-3 font-semibold text-neon-cyan">2. Customize</h2>
                <p class="text-gray-light/70 text-xs leading-relaxed">Define flavor preferences to unlock adaptive recommendations.</p>
            </div>
            <div class="bg-gray-mid/40 shadow-[0_0_8px_#39ff1455] backdrop-blur p-6 border border-neon-green/40 rounded-xl">
                <h2 class="mb-3 font-semibold text-neon-green">3. Experience</h2>
                <p class="text-gray-light/70 text-xs leading-relaxed">Arrive and enjoy a radiant taste journey synced across devices.</p>
            </div>
        </section>
    </main>
    <footer class="px-6 py-10 border-gray-mid/60 border-t text-gray-light/60 text-xs text-center">
        <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($siteName ?? 'NeonBites', ENT_QUOTES, 'UTF-8') ?>. All rights reserved.</p>
    </footer>
</body>

</html>