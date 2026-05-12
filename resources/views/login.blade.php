@extends('layouts.master')

@section('title', 'Category Page')

@section('content')
<h1 class="relative z-50 text-white text-5xl text-center mt-10">
    Login Page
</h1>
   <body class="bg-background text-on-background font-body-md overflow-hidden">
<main class="relative min-h-screen w-full flex items-center justify-center px-4">
<!-- Background Image with Motivation Blur -->
<div class="absolute inset-0 z-0 overflow-hidden">
<img class="w-full h-full object-cover filter blur-sm grayscale opacity-40 scale-110" data-alt="A cinematic, low-angle shot of a professional sprinter in motion on a dark metropolitan track at night. The lighting is high-contrast with sharp rim light highlighting the athlete's silhouette against a deep charcoal background. Motion blur creates a sense of extreme speed and kinetic energy. The overall aesthetic is elite, minimalist, and powerful, utilizing a dark mode palette with subtle neon orange reflections." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDOUMc_MsuE-5EY0yUf3MimbSPvfF2CykK1ci4OGSMdypwHV7LualbTw6y_bADGBEyeRHBk22IyViR71vzsGiQbm2onuEC30qfITA9IWuzwO8OjSrgiYrJwY7i5BvJ3L0aoHXr0-2Bg-Ftit1eG_g88yfj0bhh8i75FjUJGoVPk1ayP3Pm0hUmtvHO168ggIIQaugF2r9Hk7FgX0Ro-Na1oPjd9Ka9OYIxsXWNHoJPHi867wFM9W4pPjYLNzdgPcwzJkIFGAFLKR1Q"/>
<div class="absolute inset-0 kinetic-overlay"></div>
</div>
<!-- Login Container -->
<div class="relative z-10 w-full max-w-md">
<div class="bg-surface-container-high p-8 md:p-12 shadow-[0px_8px_0px_rgba(0,0,0,0.5)] border-l-4 border-secondary">
<!-- Brand Anchor -->
<div class="mb-10 text-center">
<h1 class="font-display-lg text-headline-xl text-secondary tracking-tighter uppercase">VELOCITY</h1>
<p class="font-label-bold text-on-surface-variant tracking-widest mt-2">FUEL YOUR PERFORMANCE</p>
</div>
<!-- Form -->
<form class="space-y-6">
<div class="space-y-2">
<label class="font-label-bold text-on-surface uppercase block" for="email">Email Address</label>
<input class="w-full bg-background border border-surface-container-highest px-4 py-3 text-on-surface focus:outline-none focus:border-secondary transition-colors font-body-md" id="email" name="email" placeholder="runner@velocity.com" type="email"/>
</div>
<div class="space-y-2">
<div class="flex justify-between items-center">
<label class="font-label-bold text-on-surface uppercase block" for="password">Password</label>
<a class="font-label-sm text-secondary hover:underline uppercase" href="#">Forgot?</a>
</div>
<input class="w-full bg-background border border-surface-container-highest px-4 py-3 text-on-surface focus:outline-none focus:border-secondary transition-colors font-body-md" id="password" name="password" placeholder="••••••••" type="password"/>
</div>
<button class="w-full bg-secondary-container text-on-secondary-fixed py-4 font-headline-md uppercase tracking-tight skew-hover transition-transform duration-150 flex items-center justify-center gap-2" type="submit">
                        Sign In
                        <span class="material-symbols-outlined">trending_flat</span>
</button>
</form>
<!-- Divider -->
<div class="relative my-8">
<div class="absolute inset-0 flex items-center"><div class="w-full border-t border-surface-container-highest"></div></div>
<div class="relative flex justify-center"><span class="bg-surface-container-high px-4 font-label-bold text-on-surface-variant uppercase">Or continue with</span></div>
</div>
<!-- Social Logins -->
<div class="grid grid-cols-2 gap-4">
<button class="flex items-center justify-center gap-2 border-2 border-surface-container-highest py-3 font-label-bold text-on-surface hover:border-on-surface transition-colors uppercase skew-hover">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">google</span>
                        Google
                    </button>
<button class="flex items-center justify-center gap-2 border-2 border-surface-container-highest py-3 font-label-bold text-on-surface hover:border-on-surface transition-colors uppercase skew-hover">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">social_leaderboard</span>
                        Facebook
                    </button>
</div>
<!-- Footer Link -->
<div class="mt-10 text-center">
<p class="font-body-md text-on-surface-variant">
                        Don't have an account? 
                        <a class="text-secondary font-label-bold uppercase ml-1 hover:underline" href="#">Register Now</a>
</p>
</div>
</div>
</div>
<!-- Kinetic Accents -->
<div class="absolute top-10 right-10 hidden md:block">
<div class="text-secondary opacity-20 rotate-90 origin-right">
<span class="font-display-lg text-display-lg block tracking-tighter">FASTEST.</span>
<span class="font-display-lg text-display-lg block tracking-tighter -mt-10">STRONGEST.</span>
</div>
</div>
</main>
@endsection