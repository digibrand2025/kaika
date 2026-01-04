<?php
require_once '../includes/config.php';
require_once '../includes/functions.php';  // IMPORTANT: Load functions first
require_once '../includes/auth.php';

// Redirect if already logged in
if (isLoggedIn()) {
    header('Location: dashboard.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? sanitize($_POST['username']) : '';
    $password = $_POST['password'] ?? '';
    
    if (empty($username) || empty($password)) {
        $error = 'Please enter both username and password';
    } elseif (verifyLogin($pdo, $username, $password)) {
        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'Invalid username or password';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login | Kaika Holdings</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <script src="https://unpkg.com/lucide@latest"></script>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;900&display=swap" rel="stylesheet">

  <script>
    tailwind.config = {
      theme: {
        fontFamily: {
          sans: ['Inter', 'sans-serif'],
        },
        extend: {
          colors: {
            brand: {
              red: '#D32F2F',
              dark: '#1A1A1A'
            }
          }
        }
      }
    }
  </script>

  <style>
    .glass {
      background: rgba(255, 255, 255, 0.12);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }
  </style>
</head>

<body class="min-h-screen bg-slate-900 text-white">

  <div class="fixed inset-0 z-0">
    <img
      src="https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?auto=format&fit=crop&q=80&w=2000"
      class="w-full h-full object-cover opacity-40"
      alt="Background"
    />
    <div class="absolute inset-0 bg-gradient-to-r from-red-700 to-slate-900 opacity-80"></div>
  </div>

  <div class="relative z-10 flex items-center justify-center min-h-screen px-6">
    <div class="glass w-full max-w-md rounded-2xl shadow-2xl p-10">

      <div class="flex items-center justify-center mb-8 gap-3">
        <div class="w-12 h-12 bg-brand-red rotate-45 flex items-center justify-center rounded-sm">
          <span class="-rotate-45 font-black text-xl text-white">K</span>
        </div>
        <div class="text-left">
          <h1 class="text-xl font-bold tracking-tight">KAIKA</h1>
          <p class="text-xs uppercase tracking-widest text-slate-300">Holdings</p>
        </div>
      </div>

      <h2 class="text-2xl font-bold text-center mb-2">Welcome Back</h2>
      <p class="text-center text-slate-300 text-sm mb-8">
        Sign in to access your dashboard
      </p>

      <?php if ($error): ?>
      <div class="bg-red-500/20 border border-red-500/50 text-red-200 px-4 py-3 rounded-lg mb-6 flex items-center gap-3">
          <i data-lucide="alert-circle" class="w-5 h-5"></i>
          <p class="text-sm"><?php echo htmlspecialchars($error); ?></p>
      </div>
      <?php endif; ?>

      <form method="POST" action="" class="space-y-5">

        <div>
          <label class="block text-sm mb-2 text-slate-200" for="username">Username</label>
          <div class="relative">
            <i data-lucide="user" class="absolute left-3 top-3 w-5 h-5 text-slate-400"></i>
            <input
              type="text"
              id="username"
              name="username"
              required
              placeholder="Enter your username"
              class="w-full pl-11 pr-4 py-3 bg-white/10 border border-white/20 rounded-lg focus:outline-none focus:border-brand-red focus:ring-1 focus:ring-brand-red text-white placeholder:text-slate-500"
            />
          </div>
        </div>

        <div>
          <label class="block text-sm mb-2 text-slate-200" for="password">Password</label>
          <div class="relative">
            <i data-lucide="lock" class="absolute left-3 top-3 w-5 h-5 text-slate-400"></i>
            <input
              type="password"
              id="password"
              name="password"
              required
              placeholder="••••••••"
              class="w-full pl-11 pr-4 py-3 bg-white/10 border border-white/20 rounded-lg focus:outline-none focus:border-brand-red focus:ring-1 focus:ring-brand-red text-white placeholder:text-slate-500"
            />
          </div>
        </div>

        <div class="flex items-center justify-between text-sm">
          <label class="flex items-center gap-2 cursor-pointer">
            <input type="checkbox" class="accent-brand-red">
            <span class="text-slate-300">Remember me</span>
          </label>
          <a href="../index.html" class="text-slate-300 hover:text-brand-red transition">Back to site</a>
        </div>

        <button
          type="submit"
          class="w-full py-3 bg-brand-red hover:bg-red-700 font-bold uppercase tracking-widest rounded-lg transition-all hover:shadow-[0_0_20px_rgba(211,47,47,0.6)]"
        >
          Sign In
        </button>
      </form>

      <p class="text-center text-xs text-slate-400 mt-8">
        © 2025 Kaika Holdings. Internal access only.
      </p>
    </div>
  </div>

  <script>
    lucide.createIcons();
  </script>

</body>
</html>