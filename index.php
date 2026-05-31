<?php
// PHP Logic: Dynamic greeting and page title
$current_hour = date("H");
if ($current_hour < 12) {
    $greeting = "Good morning!";
} elseif ($current_hour < 18) {
    $greeting = "Good afternoon!";
} else {
    $greeting = "Good evening!";
}

$pageTitle = "Modern PHP";
$navItems = [
    ["label" => "Home", "href" => "#home"],
    ["label" => "About", "href" => "#about"],
    ["label" => "Client", "href" => "#client"],
    ["label" => "Contact", "href" => "#contact"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <style>
        :root {
            --bg: #f7f8fb;
            --surface: #ffffff;
            --text: #1f2937;
            --muted: #64748b;
            --accent: #4f46e5;
            --accent-soft: #eef2ff;
            --border: rgba(148, 163, 184, 0.25);
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
        }
        body, html { scroll-behavior: smooth; }
        header {
            background: var(--surface);
            position: sticky;
            top: 0;
            z-index: 10;
            border-bottom: 1px solid var(--border);
        }
        .container {
            width: min(1120px, calc(100% - 2rem));
            margin: 0 auto;
            padding: 1rem 0;
        }
        .brand {
            font-size: 1.25rem;
            font-weight: 700;
            letter-spacing: -0.03em;
        }
        nav {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            justify-content: center;
        }
        nav a {
            color: var(--muted);
            text-decoration: none;
            transition: color 0.2s ease;
        }
        nav a:hover,
        nav a:focus {
            color: var(--accent);
        }
        .top-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }
        .hero {
            display: grid;
            gap: 1.5rem;
            padding: 4rem 0;
            text-align: center;
        }
        .hero h1 {
            font-size: clamp(2.5rem, 4vw, 4rem);
            margin: 0;
        }
        .hero p {
            max-width: 720px;
            margin: 0 auto;
            color: var(--muted);
        }
        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.95rem 1.8rem;
            border-radius: 999px;
            background: var(--accent);
            color: white;
            border: none;
            text-decoration: none;
            font-weight: 600;
            transition: transform 0.2s ease, background 0.2s ease;
        }
        .button:hover {
            transform: translateY(-1px);
            background: #4338ca;
        }
        .grid {
            display: grid;
            gap: 1.5rem;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        }
        .card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 24px;
            padding: 1.75rem;
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.04);
        }
        .card h2 {
            margin-top: 0;
            color: var(--text);
        }
        .card p {
            color: var(--muted);
        }
        footer {
            padding: 2rem 0;
            color: var(--muted);
            text-align: center;
        }
        .footer-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 1rem;
            font-size: 0.95rem;
        }
        .footer-links a {
            color: var(--muted);
            text-decoration: none;
        }
        .footer-links a:hover {
            color: var(--accent);
        }
        @media (min-width: 768px) {
            nav { justify-content: flex-end; }
            .top-bar { justify-content: space-between; }
            .hero { text-align: left; }
        }
    </style>
</head>
<body>
    <header>
        <div class="container top-bar">
            <div class="brand">BlogPost</div>
            <nav>
                <?php foreach ($navItems as $item): ?>
                    <a href="<?php echo $item['href']; ?>"><?php echo $item['label']; ?></a>
                <?php endforeach; ?>
            </nav>
        </div>
    </header>

    <main class="container">
        <section id="home" class="hero">
            <div>
                <p style="color: var(--accent); font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 1rem;">Welcome</p>
                <h1><?php echo $greeting; ?> Welcome to BlogPost repo</h1>
                <p>This is about posting good information about software.</p>
                <a class="button" href="#contact">Get in touch</a>
            </div>
        </section>

        <section id="about" style="padding: 2rem 0;">
            <div class="grid">
                <article class="card">
                    <h2>About</h2>
                    <p>commit to support people via this website.</p>
                </article>
                <article class="card">
                    <h2>Client</h2>
                    <p>If you are a client will talk.</p>
                </article>
                   <article class="card">
                    <h2>Contact</h2>
                    <p>Please use the provided links for contact about this project.</p>
                </article>
            </div>
        </section>

        <section id="services" style="padding: 2rem 0;">
            <div class="grid">
                <article class="card">
                    <h2>Custom: OpenWork</h2>
                    <p>Openwork is about freeing people from work.</p>
                </article>
                <article class="card">
                    <h2>Blockchain</h2>
                    <p>We use metamask for our blockchain wallet.</p>
                </article>
                <article class="card">
                    <h2>Learning Everyday</h2>
                    <p>Self development through learning is what i focus on today i delevelop software.</p>
                </article>
            </div>
        </section>

        <section id="contact" style="padding: 2rem 0;">
            <div class="card">
                <h2>Contact</h2>
                <p>Ready to share your information or update this page? Replace this text with your email, phone, or contact form.</p>
                <p style="margin-top: 1rem;"><strong>Email:</strong> hello@example.com</p>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> . All rights reserved.</p>
            <div class="footer-links">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#services">Services</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
    </footer>
</body>
</html>
