<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/../components/head.php'; ?>

<body class="bg-black-deep min-h-screen text-gray-light antialiased">
    <header class="px-6 py-10 text-center">
        <h1 class="bg-clip-text bg-gradient-to-r from-neon-magenta via-neon-cyan to-neon-green drop-shadow-[0_0_12px_#00ffff] font-orbitron font-bold text-transparent text-5xl tracking-wide">Menu</h1>
        <p class="mx-auto mt-4 max-w-2xl text-gray-light/70">Explore the evolving cyber-fusion creations of <?= htmlspecialchars($siteName ?? 'NeonBites', ENT_QUOTES, 'UTF-8') ?>.</p>
        <p class="opacity-50 mt-2 text-xs"><a class="hover:text-neon-cyan underline" href="/">Back to Home</a></p>
    </header>
    <main class="z-10 relative">
        <?php include __DIR__ . '/../components/gallery.php'; ?>
    </main>
    <footer class="px-6 py-10 border-gray-mid/60 border-t text-gray-light/60 text-xs text-center">
        <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($siteName ?? 'NeonBites', ENT_QUOTES, 'UTF-8') ?>. All rights reserved.</p>
    </footer>
</body>

</html>