<?php
// Component: components/gallery.php
// Data contract: $products = array<int, array{name:string, desc:string, price:float, image:string, tag:string}>
?>
<section id="menu" class="mx-auto px-6 py-20 max-w-7xl">
    <div class="flex flex-wrap justify-between items-end gap-4 mb-10">
        <h2 class="drop-shadow-[0_0_8px_#ff00ff] font-orbitron font-bold text-neon-magenta text-3xl md:text-4xl">Signature Menu</h2>
        <span class="text-gray-light/50 text-xs uppercase tracking-wide">Curated cyber-fusion selection</span>
    </div>
    <div class="gap-10 grid md:grid-cols-3 lg:grid-cols-4">
        <?php foreach ($products as $p): ?>
            <div class="group relative bg-gray-mid/40 shadow-[0_0_6px_#00ffff55] backdrop-blur border border-hud-line/30 rounded-xl overflow-hidden">
                <div class="w-full aspect-[4/3] overflow-hidden">
                    <img src="<?= htmlspecialchars($p['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($p['name'], ENT_QUOTES, 'UTF-8') ?>" class="w-full h-full object-center object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="flex flex-col gap-2 p-4">
                    <div class="flex justify-between items-center gap-2">
                        <h3 class="font-semibold text-neon-cyan text-sm tracking-wide"><?= htmlspecialchars($p['name'], ENT_QUOTES, 'UTF-8') ?></h3>
                        <span class="font-mono text-neon-green text-xs">$<?= number_format($p['price'], 2) ?></span>
                    </div>
                    <p class="text-gray-light/70 text-xs leading-relaxed"><?= htmlspecialchars($p['desc'], ENT_QUOTES, 'UTF-8') ?></p>
                    <span class="self-start bg-neon-magenta/20 mt-1 px-2 py-0.5 border border-neon-magenta/40 rounded-full text-[10px] text-neon-magenta"><?= htmlspecialchars(strtoupper($p['tag']), ENT_QUOTES, 'UTF-8') ?></span>
                </div>
                <div class="absolute inset-0 bg-gradient-to-tr from-neon-magenta/10 via-transparent to-neon-cyan/20 opacity-0 group-hover:opacity-100 transition pointer-events-none"></div>
            </div>
        <?php endforeach; ?>
    </div>
</section>