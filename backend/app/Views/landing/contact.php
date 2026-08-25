<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/../components/head.php'; ?>

<body class="bg-black-deep min-h-screen text-gray-light antialiased">
    <header class="px-6 py-10 text-center">
        <h1 class="bg-clip-text bg-gradient-to-r from-neon-magenta via-neon-cyan to-neon-green drop-shadow-[0_0_12px_#00ffff] font-orbitron font-bold text-transparent text-4xl tracking-wide">Contact Us</h1>
        <p class="mx-auto mt-4 max-w-2xl text-gray-light/70">Got a partnership idea, press inquiry, or feedback? Reach out.</p>
        <p class="opacity-50 mt-2 text-xs"><a class="hover:text-neon-cyan underline" href="/">Back to Home</a></p>
    </header>
    <main class="z-10 relative">
        <section id="contact" class="mx-auto px-6 pb-24 max-w-3xl">
            <form method="post" action="/contact" class="space-y-8 mt-6">
                <div class="gap-6 grid md:grid-cols-2">
                    <div>
                        <label for="name" class="block mb-2 font-semibold text-neon-cyan text-xs tracking-wide">Name</label>
                        <input id="name" name="name" type="text" required class="bg-gray-mid/40 px-3 py-2 border border-hud-line/40 rounded-md focus:outline-none focus:ring-2 focus:ring-neon-cyan/60 w-full text-sm" placeholder="Jane Doe">
                    </div>
                    <div>
                        <label for="email" class="block mb-2 font-semibold text-neon-cyan text-xs tracking-wide">Email</label>
                        <input id="email" name="email" type="email" required class="bg-gray-mid/40 px-3 py-2 border border-hud-line/40 rounded-md focus:outline-none focus:ring-2 focus:ring-neon-cyan/60 w-full text-sm" placeholder="jane@domain.com">
                    </div>
                </div>
                <div>
                    <label for="subject" class="block mb-2 font-semibold text-neon-cyan text-xs tracking-wide">Subject</label>
                    <input id="subject" name="subject" type="text" class="bg-gray-mid/40 px-3 py-2 border border-hud-line/40 rounded-md focus:outline-none focus:ring-2 focus:ring-neon-cyan/60 w-full text-sm" placeholder="Partnership proposal">
                </div>
                <div>
                    <label for="message" class="block mb-2 font-semibold text-neon-cyan text-xs tracking-wide">Message</label>
                    <textarea id="message" name="message" rows="6" required class="bg-gray-mid/40 px-3 py-2 border border-hud-line/40 rounded-md focus:outline-none focus:ring-2 focus:ring-neon-cyan/60 w-full text-sm" placeholder="Tell us more..."></textarea>
                </div>
                <div class="flex flex-wrap items-center gap-4">
                    <label class="flex items-center gap-2 text-gray-light/70 text-xs">
                        <input type="checkbox" name="consent" required class="accent-neon-cyan">
                        <span>I agree to processing of this information.</span>
                    </label>
                    <button type="submit" class="bg-neon-cyan/20 hover:bg-neon-cyan shadow-[0_0_8px_#00ffff] ml-auto px-6 py-2 border border-neon-cyan rounded-md font-semibold text-neon-cyan hover:text-black-deep text-sm transition">Send</button>
                </div>
            </form>
        </section>
    </main>
    <footer class="px-6 py-10 border-gray-mid/60 border-t text-gray-light/60 text-xs text-center">
        <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($siteName ?? 'NeonBites', ENT_QUOTES, 'UTF-8') ?>. All rights reserved.</p>
    </footer>
</body>

</html>