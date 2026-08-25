<?php
// Component: components/features.php
// Data Contract:
// $features: array<int, array{title:string, body:string, accent:string}>
// Accepts accent values: magenta|cyan|green (maps to neon colors)
?>
<section id="features" class="mx-auto px-6 py-24 max-w-6xl">
    <h2 class="drop-shadow-[0_0_6px_#00ffff] mb-12 font-orbitron font-bold text-neon-cyan text-3xl md:text-4xl">Powered By Neon</h2>
    <div class="gap-10 grid md:grid-cols-3">
        <?php foreach ($features as $feature):
            $accent = $feature['accent'] ?? 'magenta';
            $colorMap = [
                'magenta' => ['title' => 'text-neon-magenta', 'shadow' => 'shadow-[0_0_10px_#ff00ff55]', 'border' => 'border-neon-magenta/40'],
                'cyan'    => ['title' => 'text-neon-cyan', 'shadow' => 'shadow-[0_0_10px_#00ffff55]', 'border' => 'border-hud-line/40'],
                'green'   => ['title' => 'text-neon-green', 'shadow' => 'shadow-[0_0_10px_#39ff1455]', 'border' => 'border-neon-green/40'],
            ];
            $styles = $colorMap[$accent] ?? $colorMap['magenta'];
        ?>
            <div class="bg-gray-mid/40 <?= $styles['shadow'] ?> backdrop-blur p-6 border <?= $styles['border'] ?> rounded-xl">
                <h3 class="mb-3 font-semibold <?= $styles['title'] ?>"><?= htmlspecialchars($feature['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                <p class="text-gray-light/80 text-sm leading-relaxed"><?= htmlspecialchars($feature['body'], ENT_QUOTES, 'UTF-8') ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>