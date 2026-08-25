<?php
// Component: components/head.php
// Data contract:
// $heading: string
// $sub: string|null
// $primary: object
// $secondary: object
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= (($title ?? '') !== '' ? htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . ' | ' : '') ?><?= htmlspecialchars($siteName ?? 'NeonBites', ENT_QUOTES, 'UTF-8') ?></title>

    <!-- Default CDN includes -->
    <!-- Google Fonts: Playfair Display + Lato (global) -->
    <!-- Cyberpunk City Font Pairing -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">

    <!-- Tailwind CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Font Awsome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Global base typography -->
    <!-- Cyberpunk City Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">

    <style>
        :root {
            /* Cyberpunk City Theme */

            /* Core neon palette */
            --neon-magenta: #ff00ff;
            --neon-cyan: #00ffff;
            --neon-green: #39ff14;

            /* Dark and light tones for depth */
            --black-deep: #000000;
            --black-soft: #0a0a0a;
            --magenta-dark: #b300b3;
            --cyan-dark: #009999;
            --green-dark: #1aff66;

            /* Accent and highlight shades */
            --neon-highlight: #f0f;
            --hud-line: #00e6e6;
            --glow-green: #66ff66;

            /* Neutral gray for text/UI balance */
            --gray-soft: #1a1a1a;
            --gray-mid: #2e2e2e;
            --gray-light: #d1d1d1;
        }

        .swatch {
            width: 100%;
            height: 3rem;
            border-radius: .375rem;
            border: 1px solid rgba(255, 255, 255, 0.06);
        }

        /* --- Cyberpunk Button Styles --- */
        .btn-cyan {
            background: var(--neon-cyan);
            color: var(--black-deep);
            transition: all 0.3s ease-in-out;
            font-weight: 700;
        }

        .btn-cyan:hover {
            background: var(--cyan-dark);
            color: var(--neon-green);
            box-shadow: 0 0 12px var(--neon-cyan);
        }

        .btn-magenta {
            background: var(--neon-magenta);
            color: var(--black-deep);
            transition: all 0.3s ease-in-out;
            font-weight: 700;
        }

        .btn-magenta:hover {
            background: var(--magenta-dark);
            color: var(--neon-green);
            box-shadow: 0 0 12px var(--neon-magenta);
        }

        .btn-border {
            border: 2px solid var(--neon-green);
            color: var(--neon-green);
            background: transparent;
            font-weight: 700;
            transition: all 0.3s ease-in-out;
        }

        .btn-border:hover {
            background: var(--neon-green);
            color: var(--black-deep);
            box-shadow: 0 0 10px var(--neon-green);
        }

        .btn-disabled {
            background-color: var(--gray-mid);
            color: var(--gray-light);
            cursor: not-allowed;
        }

        /* Header CTA */
        .header-cta {
            background: var(--neon-magenta);
            color: var(--black-deep);
            font-weight: 700;
            text-transform: uppercase;
            transition: 0.3s;
        }

        .header-cta:hover {
            background: var(--magenta-dark);
            color: var(--neon-green);
            box-shadow: 0 0 15px var(--neon-magenta);
        }

        /* Text utilities */
        .text-cyan {
            color: var(--neon-cyan);
        }

        .text-green {
            color: var(--neon-green);
        }

        .text-magenta {
            color: var(--neon-magenta);
        }

        /* Background utilities */
        .bg-dark {
            background: var(--black-deep);
        }

        .bg-soft {
            background: var(--black-soft);
        }

        .bg-cyan {
            background: var(--neon-cyan);
        }

        /* Scrollbar styling (Cyberpunk style) */
        ::-webkit-scrollbar {
            width: 12px;
            height: 12px;
        }

        ::-webkit-scrollbar-track {
            background: var(--gray-soft);
            border-radius: 8px;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, var(--neon-cyan) 0%, var(--neon-magenta) 100%);
            border-radius: 8px;
            border: 2px solid var(--black-soft);
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, var(--neon-magenta) 0%, var(--neon-cyan) 100%);
        }

        * {
            scrollbar-width: thin;
            scrollbar-color: var(--neon-cyan) var(--gray-soft);
        }

        .custom-scroll {
            overflow: auto;
        }

        /* Base typography with new fonts */
        html,
        body {
            font-family: 'Share Tech Mono', monospace;
            background-color: var(--black-deep);
            color: var(--neon-green);
            line-height: 1.6;
            letter-spacing: 0.5px;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: 'Orbitron', sans-serif;
            color: var(--neon-magenta);
            text-transform: uppercase;
            letter-spacing: 1px;
        }
    </style>

</head>