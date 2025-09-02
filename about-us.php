<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width,initial-scale=1" name="viewport"/>
<title>About Us | Genify AI - The Next-Gen AI Video Generator</title>
<meta content="Learn about Genify AI, our mission to make video creation accessible, and the technology that powers our text-to-video platform. We're a team of innovators dedicated to creative freedom." name="description"/>
<meta content="about us, Genify AI, company mission, team, AI video technology, video creation, artificial intelligence, our story" name="keywords"/>
<meta content="About Genify AI" property="og:title"/>
<meta content="Learn about our mission and the technology that powers the Genify AI platform." property="og:description"/>
<meta content="website" property="og:type"/>
<meta content="https://genify.space/about-us.php" property="og:url"/>
<meta content="https://genify.space/assets/images/social-share.jpg" property="og:image"/>
<meta content="#f0f2f5" id="theme-color-meta" name="theme-color"/>
<link href="/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180"/>
<link href="/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png"/>
<link href="/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png"/>
<link href="/site.webmanifest" rel="manifest"/>
<link href="/about-us.php" rel="canonical"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"/>
<style>
        :root {
            --accent: #7a5dff; --accent-2: #bb6bff;
            --blur: 20px; --rad: 18px; --header-h: 64px;
            --bg1: #f0f2f5; --bg2: #e6e9ee; --text-color: #1a202c;
            --glass: rgba(255, 255, 255, .6); --glass-light: rgba(255, 255, 255, 0.8);
            --card-border: rgba(0, 0, 0, .08); --card-shadow: rgba(0, 0, 0, .1);
        }
        body.dark-mode {
            --bg1: #0b0b14; --bg2: #161627; --text-color: #ffffffcc;
            --glass: rgba(255, 255, 255, .07); --glass-light: rgba(255, 255, 255, 0.12);
            --card-border: rgba(255, 255, 255, .08); --card-shadow: rgba(0, 0, 0, .5);
        }
        *, *::before, *::after { margin:0; padding:0; box-sizing:border-box; -webkit-tap-highlight-color: transparent; }
        html, body { min-height:100vh; }
        body { font-family:Poppins,sans-serif; color:var(--text-color); background:var(--bg1); overflow-x:hidden; line-height: 1.6; transition: background 0.3s ease, color 0.3s ease; }
        body::before { content:""; position:fixed; inset:0; z-index:-2; background:radial-gradient(circle at 25% 35%, var(--bg2) 0%, var(--bg1) 70%); transition: background 0.3s ease; }
        body.dark-mode::after { content:""; position:fixed; inset:-30% -30% 0 -30%; z-index:-1; background:linear-gradient(60deg, #ff00c8 0%, #5300ff 30%, #00d4ff 60%, #ff9900 100%); opacity:.15; filter:blur(100px); animation:shift 18s ease-in-out alternate infinite; }
        @keyframes shift { 0% { transform: translate3d(25%,-10%,0) scale(1.1); } 50% { transform: translate3d(-10%,20%,0) scale(1.05); opacity: .18; } 100% { transform: translate3d(25%,-10%,0) scale(1.1); } }
        
        header { position:fixed; top:0; left:0; width:100%; z-index:100; display:flex; justify-content:space-between; align-items:center; padding:1.3rem clamp(1.5rem, 6vw/1.618, 4rem); background:var(--glass); backdrop-filter:blur(var(--blur)); border-bottom:1px solid var(--card-border); box-shadow:0 2px 20px var(--card-shadow); transition: background 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease; }
        .logo { font-size:1.7rem; font-weight:600; color:var(--text-color); display:flex; align-items:center; gap:.75rem; transition: color 0.3s ease; }
        .logo a { text-decoration: none; color: inherit; }
        .logo i { color:var(--accent); animation:pulse 1.5s infinite alternate ease-in-out; }
        @keyframes pulse { from { transform:scale(1); } to { transform:scale(1.05); } }
        nav { display:flex; align-items:center; gap:1.5rem; }
        nav a { position:relative; color:var(--text-color); text-decoration:none; font-weight:500; font-size:1.05rem; padding:0.5rem 0.2rem; transition: all 0.3s ease-out; }
        nav a:hover { color:var(--accent); }
        nav a::after { content:''; position:absolute; left:50%; bottom:-8px; width:0; height:3px; background:linear-gradient(90deg, var(--accent-2), var(--accent)); border-radius:3px; transform:translateX(-50%); transition: width 0.3s ease-out; }
        nav a:hover::after, nav a.active::after { width:100%; }
        nav a.active { color:var(--accent); }
        #theme-toggle { font-size:1.5rem; cursor:pointer; color:var(--text-color); transition:color 0.3s ease; }
        #theme-toggle:hover { color:var(--accent); }
        footer.legal { text-align:center; padding:1.5rem 0; background:var(--glass); color:var(--text-color); font-size:.9rem; border-top:1px solid var(--card-border); margin-top: 5rem; transition: background 0.3s ease, border-color 0.3s ease, color 0.3s ease; }
        footer.legal ul { list-style:none; padding:0; margin:0; display:flex; justify-content:center; gap:2.5rem; flex-wrap: wrap; }
        footer.legal li a { color: var(--text-color); text-decoration:none; transition: color .2s ease-out; opacity: 0.8; }
        footer.legal li a:hover { opacity: 1; color: var(--accent); }
        
        main { padding: calc(var(--header-h) + 3rem) clamp(1.5rem, 6vw/1.618, 4rem) 4.6rem; }
        .about-section { max-width: 900px; margin: 0 auto; padding: 2rem 0; text-align: center; }
        .about-section h1 { font-size: clamp(2.5rem, 6vw, 4rem); line-height: 1.1; background: linear-gradient(92deg, var(--accent), var(--accent-2)); -webkit-background-clip: text; color: transparent; letter-spacing: -1px; margin-bottom: 1rem; }
        .about-section p { font-size: 1.1rem; color: var(--text-color); opacity: 0.8; margin-bottom: 2rem; }
        .card-container { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; margin-top: 3rem; }
        .about-card { background: var(--glass-light); backdrop-filter: blur(var(--blur)); border-radius: var(--rad); padding: 2rem; border: 1px solid var(--card-border); box-shadow: 0 10px 30px rgba(0,0,0,0.05); text-align: left; transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease, border-color 0.3s ease; }
        .about-card h3 { font-size: 1.5rem; color: var(--accent); margin-bottom: 0.5rem; }
        .about-card p { font-size: 1rem; color: var(--text-color); opacity: 0.8; margin: 0; }
        
        @media(max-width:768px){ header { padding:1rem clamp(1rem, 4vw, 2rem); } .logo { font-size:1.5rem; } main { padding:calc(var(--header-h) + 2rem) clamp(1rem, 4vw, 2rem) 3rem; } footer.legal ul { gap: 1.5rem; } }
        @media(max-width:480px){ header { padding:0.8rem 1rem; } .logo { font-size:1.3rem; } main { padding:calc(var(--header-h) + 1.5rem) 1rem 2rem; } .panel { padding: 2rem 1.5rem; } footer.legal ul { flex-direction: column; gap: 0.8rem; } }
    </style>
</head>
<body>
<header>
<div class="logo"><a href="/index.html"><i class="fa-solid fa-palette"></i> Genify AI</a></div>
<nav>
<a class="home-link" href="/index.html">Home</a>
<a class="about-link" href="/about-us.php">About Us</a>
<i class="fas fa-moon" id="theme-toggle"></i>
</nav>
</header>
<main>
<section class="about-section">
<h1>Our Story &amp; Mission</h1>
<p>At Genify AI, we believe that creativity should be limitless and accessible to all. Our journey began with a simple question: What if anyone could create professional-quality videos just by describing their vision? We are a team of passionate innovators, engineers, and artists dedicated to building a platform that turns imagination into reality with the power of artificial intelligence.</p>
<div class="card-container">
<div class="about-card">
<h3>Our Mission</h3>
<p>To democratize video creation. We're committed to building an AI platform that removes technical barriers, enabling creators, marketers, and storytellers to produce stunning visual content effortlessly and efficiently.</p>
</div>
<div class="about-card">
<h3>Our Technology</h3>
<p>Genify AI is built on a state-of-the-art text-to-video model, continuously trained on vast datasets of visual and textual information. This allows our AI to understand complex prompts and generate rich, detailed, and cinematic video sequences that match your creative intent.</p>
</div>
<div class="about-card">
<h3>Our Commitment</h3>
<p>We are constantly evolving and improving our technology to bring you the best possible experience. We value your feedback and are dedicated to making Genify AI a tool that empowers your creativity at every step.</p>
</div>
</div>
</section>
</main>
<footer class="legal">
<ul>
<li><a href="/privacy/index.html">Privacy Policy</a></li>
<li><a href="/terms/index.html">Terms &amp; Conditions</a></li>
</ul>
<p>© 2025 Genify AI. All rights reserved.</p>
</footer>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const themeToggleBtn = document.getElementById('theme-toggle');
        const themeColorMeta = document.getElementById('theme-color-meta');
        const homeLink = document.querySelector('.home-link');
        const aboutLink = document.querySelector('.about-link');

        const lightThemeColor = '#f0f2f5';
        const darkThemeColor = '#0b0b14';

        function setTheme(theme) {
            if (theme === 'dark') {
                document.body.classList.add('dark-mode');
                themeToggleBtn.classList.remove('fa-moon');
                themeToggleBtn.classList.add('fa-sun');
                themeColorMeta.setAttribute('content', darkThemeColor);
                localStorage.setItem('theme', 'dark');
            } else {
                document.body.classList.remove('dark-mode');
                themeToggleBtn.classList.remove('fa-sun');
                themeToggleBtn.classList.add('fa-moon');
                themeColorMeta.setAttribute('content', lightThemeColor);
                localStorage.setItem('theme', 'light');
            }
        }
        const currentTheme = localStorage.getItem('theme') || 'dark';
        setTheme(currentTheme);

        themeToggleBtn.addEventListener('click', () => {
            const newTheme = document.body.classList.contains('dark-mode') ? 'light' : 'dark';
            setTheme(newTheme);
        });

        // Set active link in nav
        if (window.location.pathname === '/' || window.location.pathname === '/index.php') {
            homeLink.classList.add('active');
            aboutLink.classList.remove('active');
        } else if (window.location.pathname.includes('about-us.php')) {
            aboutLink.classList.add('active');
            homeLink.classList.remove('active');
        }
    });
</script>
</body>
</html>
