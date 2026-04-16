<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ADEEL-MD ULTIMATE PORTAL</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Syncopate:wght@700&family=Space+Grotesk:wght@300;500;700&display=swap" rel="stylesheet">
<style>
:root {
  --primary: #00f2ff; /* Cyan */
  --secondary: #7000ff; /* Purple */
  --accent: #ff007a; /* Pink/Magenta */
  --dark-bg: #03000a;
  --glass: rgba(15, 10, 30, 0.7);
  --border: rgba(0, 242, 255, 0.2);
}

* { margin: 0; padding: 0; box-sizing: border-box; outline: none; }

body {
  font-family: 'Space Grotesk', sans-serif;
  background: var(--dark-bg);
  color: #fff;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  overflow-x: hidden;
  padding: 40px 20px;
}

/* Cosmic Background */
#bg { position: fixed; inset: 0; z-index: -1; }

.container {
  width: 100%;
  max-width: 450px;
  position: relative;
  z-index: 10;
  animation: fadeIn 1s ease;
}

@keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }

/* Modern Logo Section */
.header { text-align: center; margin-bottom: 30px; }
.logo-container {
  width: 120px; height: 120px; margin: 0 auto 15px;
  position: relative; display: flex; align-items: center; justify-content: center;
}
.ring {
  position: absolute; width: 100%; height: 100%;
  border: 2px solid transparent; border-top-color: var(--primary);
  border-bottom-color: var(--accent); border-radius: 50%;
  animation: rotate 3s linear infinite;
}
.ring:nth-child(2) { border-color: transparent; border-left-color: var(--secondary); animation-duration: 2s; width: 85%; height: 85%; }

@keyframes rotate { to { transform: rotate(360deg); } }

.logo-core {
  font-size: 40px; text-shadow: 0 0 20px var(--primary);
  background: rgba(255,255,255,0.05); width: 70%; height: 70%;
  border-radius: 50%; display: flex; align-items: center; justify-content: center;
}

.title {
  font-family: 'Syncopate', sans-serif; font-size: 24px;
  letter-spacing: 4px; text-transform: uppercase;
  background: linear-gradient(to right, var(--primary), #fff, var(--accent));
  -webkit-background-clip: text; -webkit-text-fill-color: transparent;
}

/* Status Cards */
.status-bar {
  background: var(--glass); border: 1px solid var(--border);
  border-radius: 15px; padding: 15px; margin-bottom: 25px;
  backdrop-filter: blur(10px); display: flex; flex-direction: column; gap: 8px;
}
.status-item { font-size: 12px; font-weight: 700; letter-spacing: 1px; display: flex; align-items: center; gap: 10px; }
.dot { width: 8px; height: 8px; border-radius: 50%; background: var(--primary); box-shadow: 0 0 10px var(--primary); animation: pulse 1.5s infinite; }

@keyframes pulse { 0%, 100% { opacity: 1; } 50% { opacity: 0.3; } }

/* Button Styles */
.main-card {
  background: var(--glass); border: 1px solid var(--border);
  border-radius: 24px; padding: 25px; backdrop-filter: blur(20px);
  box-shadow: 0 20px 50px rgba(0,0,0,0.5);
}

.btn {
  display: flex; align-items: center; justify-content: space-between;
  padding: 16px 20px; margin-bottom: 12px; border-radius: 16px;
  text-decoration: none; color: #fff; transition: 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.05);
  position: relative; overflow: hidden;
}

.btn:hover { transform: scale(1.03); background: rgba(255,255,255,0.08); border-color: var(--primary); box-shadow: 0 10px 20px rgba(0,242,255,0.1); }

.btn-icon { width: 45px; height: 45px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 20px; margin-right: 15px; }

.btn-content { flex-grow: 1; }
.btn-content b { display: block; font-size: 16px; letter-spacing: 0.5px; }
.btn-content span { font-size: 10px; opacity: 0.5; text-transform: uppercase; }

/* Colors per button */
.qr { --c: var(--secondary); }
.pair { --c: var(--primary); }
.git { --c: #fff; }
.wa { --c: #25d366; }
.yt { --c: #ff0000; }
.sup { --c: var(--accent); }

.btn .btn-icon { background: rgba(255,255,255,0.05); border: 1px solid var(--c); color: var(--c); box-shadow: inset 0 0 10px var(--c); }

.section-label { font-size: 10px; text-transform: uppercase; color: var(--primary); letter-spacing: 3px; margin: 20px 0 10px 5px; opacity: 0.7; }

/* Footer */
.footer { text-align: center; margin-top: 30px; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.1); }
.footer p { font-size: 11px; color: rgba(255,255,255,0.3); letter-spacing: 1.5px; }
.heart { color: var(--accent); animation: heartbeat 1.2s infinite; display: inline-block; }
@keyframes heartbeat { 0%, 100% { transform: scale(1); } 50% { transform: scale(1.3); } }

</style>
</head>
<body>

<canvas id="bg"></canvas>

<div class="container">
  <div class="header">
    <div class="logo-container">
      <div class="ring"></div>
      <div class="ring"></div>
      <div class="logo-core"><i class="fa-solid fa-microchip"></i></div>
    </div>
    <h1 class="title">ADEEL-MD</h1>
    <p style="font-size: 10px; letter-spacing: 5px; opacity: 0.4; margin-top: 5px;">AESTHETIC AUTOMATION</p>
  </div>

  <div class="status-bar">
    <div class="status-item"><div class="dot"></div> WELCOME TO ADEEL-MD INTERFACE</div>
    <div class="status-item" style="color: var(--primary); opacity: 0.8;"><i class="fa-solid fa-shield-halved"></i> SECURE MULTI-DEVICE CONNECTION</div>
  </div>

  <div class="main-card">
    <div class="section-label">Session</div>
    
    <a href="/qr" class="btn qr">
      <div class="btn-icon"><i class="fa-solid fa-qrcode"></i></div>
      <div class="btn-content"><b>QR CODE</b><span>Scan with WhatsApp</span></div>
      <i class="fa-solid fa-angle-right"></i>
    </a>

    <a href="/pair" class="btn pair">
      <div class="btn-icon"><i class="fa-solid fa-link"></i></div>
      <div class="btn-content"><b>PAIRING CODE</b><span>Connect via number</span></div>
      <i class="fa-solid fa-angle-right"></i>
    </a>

    <div class="section-label">Resources</div>

    <a href="https://github.com/Adeel-Xtech/ADEEL-MD" class="btn git">
      <div class="btn-icon"><i class="fa-brands fa-github"></i></div>
      <div class="btn-content"><b>GET REPO</b><span>Fork on GitHub</span></div>
      <i class="fa-solid fa-angle-right"></i>
    </a>

    <a href="https://whatsapp.com/channel/0029VbBmz4V5vKAIaWfYPT0C" class="btn wa">
      <div class="btn-icon"><i class="fa-brands fa-whatsapp"></i></div>
      <div class="btn-content"><b>COMMUNITY</b><span>Updates channel</span></div>
      <i class="fa-solid fa-angle-right"></i>
    </a>

    <a href="https://youtube.com/@adeel-xtech" class="btn yt">
      <div class="btn-icon"><i class="fa-brands fa-youtube"></i></div>
      <div class="btn-content"><b>TUTORIALS</b><span>YouTube channel</span></div>
      <i class="fa-solid fa-angle-right"></i>
    </a>

    <div class="section-label">Help Desk</div>

    <a href="https://wa.me/+923035512967?text=*ASLAM_U_ALIKUM_ADEEL-MD 🌸*" class="btn sup">
      <div class="btn-icon"><i class="fa-solid fa-headset"></i></div>
      <div class="btn-content"><b>SUPPORT</b><span>Direct Developer Help</span></div>
      <i class="fa-solid fa-angle-right"></i>
    </a>

    <div class="footer">
      <p>© <span id="yr"></span> ADEEL-MD · MADE WITH <span class="heart">❤</span></p>
    </div>
  </div>
</div>

<script>
document.getElementById('yr').textContent = new Date().getFullYear();

// Particle Background Logic
const canvas = document.getElementById('bg');
const ctx = canvas.getContext('2d');
let particles = [];

function init() {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
}

class Particle {
  constructor() {
    this.x = Math.random() * canvas.width;
    this.y = Math.random() * canvas.height;
    this.size = Math.random() * 2;
    this.speedX = Math.random() * 0.5 - 0.25;
    this.speedY = Math.random() * 0.5 - 0.25;
    this.color = Math.random() > 0.5 ? '#00f2ff' : '#7000ff';
  }
  update() {
    this.x += this.speedX;
    this.y += this.speedY;
    if (this.x > canvas.width) this.x = 0;
    if (this.x < 0) this.x = canvas.width;
    if (this.y > canvas.height) this.y = 0;
    if (this.y < 0) this.y = canvas.height;
  }
  draw() {
    ctx.fillStyle = this.color;
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
    ctx.fill();
  }
}

function createParticles() {
  for (let i = 0; i < 100; i++) {
    particles.push(new Particle());
  }
}

function animate() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  particles.forEach(p => {
    p.update();
    p.draw();
  });
  requestAnimationFrame(animate);
}

window.addEventListener('resize', init);
init();
createParticles();
animate();
</script>
</body>
</html>
