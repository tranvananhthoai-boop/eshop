@extends('layouts.master')

@section('title', 'Category Page')

@section('content')
<h1 class="relative z-50 text-white text-5xl text-center mt-10">
    Search Page
</h1>
   <!-- Search Results Grid -->
<main class="w-full px-grid-margin-desktop py-8 max-w-container-max mx-auto mb-section-gap-desktop">
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-grid-gutter">
<!-- Product Card 1 -->
<div class="bg-surface-container-high group relative">
<div class="absolute top-0 right-0 z-10 bg-secondary-container text-on-primary px-3 py-1 font-label-bold">NEW</div>
<div class="aspect-[4/5] overflow-hidden bg-surface-container-low flex items-center justify-center p-4">
<img class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500" data-alt="High-performance neon orange running shoe displayed against a dark carbon gray background. The lighting is dramatic and sharp, highlighting the technical mesh textures and sleek aerodynamic silhouette of the footwear. The overall aesthetic is elite, professional, and kinetic, perfectly aligned with a premium sports brand's visual identity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCqY9ofEfTC7DRGyqqmqc6LKvqY2YDh7LDbndAVnODTLck6E77snlu7ASKy64Ih-8bAVds9M0DTGx56npGuc6JfqoK_RNPsd2Kdij6qvh-EQYCwYadaWCz5FGPIv96v-zpTzvq_hB1Ezfa4Cpd-0ohrdl-GpZ56g7kxxRqCmFJDyZ80JgKSrSyuQz1-zNduP6PGUbsvm2ufz0GrTMnxnoRnnkkr9wLNLY4JWdjRN3sMHMr_Eu3ICnbwFes3rzBrG8Yx-vaDMe-XdcI"/>
</div>
<div class="p-6">
<p class="font-label-sm text-on-surface-variant mb-2">RUNNING / PERFORMANCE</p>
<h3 class="font-headline-md text-headline-md text-on-surface mb-4">VELOCITY NITRO ELITE V2</h3>
<div class="flex justify-between items-end">
<span class="font-headline-md text-secondary-container">5,490,000₫</span>
<button class="w-12 h-12 bg-on-surface text-background flex items-center justify-center hover:bg-secondary-container transition-colors">
<span class="material-symbols-outlined" data-icon="add_shopping_cart">add_shopping_cart</span>
</button>
</div>
</div>
</div>
<!-- Product Card 2 -->
<div class="bg-surface-container-high group relative">
<div class="aspect-[4/5] overflow-hidden bg-surface-container-low flex items-center justify-center p-4">
<img class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500" data-alt="Modern white and silver lightweight running shoes shown in an action-oriented pose over a deep charcoal floor. The atmosphere is high-contrast with intense lighting that emphasizes the sharp lines and architectural design of the midsole. This image captures a sense of speed and high-end technical engineering for elite athletes." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7Yf_Bv_3781j2oNsNPCjjubmQM1ZhmJvscc6v3jv6X02x9v1cWmIEdyC8ozZKQxGd03cqwyh7fxQi4mrHAgyFdszC1Q_N9Dglh2Q-2YpX7GwARmrXnY6ikzi8PwQAyxc9cTu-K84jfaTrYJt9-FVKOBW4MoamGhKw_U7MkdE6vDfBM9eOmZvkDIAReosPLghUB-5DgOVlS-gn-nxyx8atIuT2ZhXwYWehURsLqZ2wE8TYZGrA6KnNDU3BSHZXUurS6AjfkhXGTpg"/>
</div>
<div class="p-6">
<p class="font-label-sm text-on-surface-variant mb-2">RUNNING / LONG DISTANCE</p>
<h3 class="font-headline-md text-headline-md text-on-surface mb-4">SONIC BOOM X-CARBON</h3>
<div class="flex justify-between items-end">
<span class="font-headline-md text-on-surface">4,850,000₫</span>
<button class="w-12 h-12 bg-on-surface text-background flex items-center justify-center hover:bg-secondary-container transition-colors">
<span class="material-symbols-outlined" data-icon="add_shopping_cart">add_shopping_cart</span>
</button>
</div>
</div>
</div>
<!-- Product Card 3 -->
<div class="bg-surface-container-high group relative">
<div class="absolute top-0 right-0 z-10 bg-secondary text-on-secondary px-3 py-1 font-label-bold">LIMITED</div>
<div class="aspect-[4/5] overflow-hidden bg-surface-container-low flex items-center justify-center p-4">
<img class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500" data-alt="Vibrant lime green athletic footwear presented on a minimal dark pedestal. The high-contrast color palette of neon against deep carbon creates a powerful visual impact. Strong directional lighting creates sharp shadows, highlighting the aggressive tread and premium materials designed for extreme training speed." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBJrejjdQJRo47XGrEWRbV14QjsnCe7xMyXCIBfxqH40HjsNlgKkZyn9pTM2pQpDz6ix2umptruHRIxuTEjJuJJTzFuCDpoFb_SA-faQZI4LnTBx4vBRwQQexmxkY8KccRUxMeEBRffte-U9xeANkcOSbyU2qpJ-EAsXp1zBvkDyjepJmrUDxaxNhGnWGrHuYW0Owupp0Ltxk4om6wMgfaXex_IGqVaKhxxdrJSVvrT08x8jKAvB-oiydbEeAXIXTwrJA0m0o8Evgs"/>
</div>
<div class="p-6">
<p class="font-label-sm text-on-surface-variant mb-2">RUNNING / TRAIL</p>
<h3 class="font-headline-md text-headline-md text-on-surface mb-4">APEX TRAIL GRIPPER</h3>
<div class="flex justify-between items-end">
<span class="font-headline-md text-on-surface">3,200,000₫</span>
<button class="w-12 h-12 bg-on-surface text-background flex items-center justify-center hover:bg-secondary-container transition-colors">
<span class="material-symbols-outlined" data-icon="add_shopping_cart">add_shopping_cart</span>
</button>
</div>
</div>
</div>
<!-- Product Card 4 -->
<div class="bg-surface-container-high group relative">
<div class="aspect-[4/5] overflow-hidden bg-surface-container-low flex items-center justify-center p-4">
<img class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500" data-alt="Sleek black and charcoal performance running shoes with minimal orange accents. The lighting is moody and low-key, focused on the sharp contours and performance-driven materials. The image feels stealthy and high-tech, evoking the atmosphere of a professional training facility at night with extreme precision." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCGti5Vi2jhGoPowKESPZI9b4l-6aa66DSIAw6AFFGgyz5gLFGiqPxD2JArtb9H58tcCf8UjPG1ySEQhw5mZdOKBUCi81aZDq_J89Ep1I0jsJhNH4F_saKrt__S5y0nxyTGYRwnlx2cOj2MrcP1G_UA1bsv2YAQzkJ9lx0FvGrQ9IefxkBjpDODYLMVgPzCL4ADyBIzQYspqyNqkgkqul60hJMVjU-ow1ab6XNkCoX5okLPHhOGJQfbxdr_y6Jbp2mNUpxqCbzMf5c"/>
</div>
<div class="p-6">
<p class="font-label-sm text-on-surface-variant mb-2">RUNNING / DAILY</p>
<h3 class="font-headline-md text-headline-md text-on-surface mb-4">KINETIC FLOW 360</h3>
<div class="flex justify-between items-end">
<span class="font-headline-md text-on-surface">2,950,000₫</span>
<button class="w-12 h-12 bg-on-surface text-background flex items-center justify-center hover:bg-secondary-container transition-colors">
<span class="material-symbols-outlined" data-icon="add_shopping_cart">add_shopping_cart</span>
</button>
</div>
</div>
</div>
<!-- More results... -->
<!-- Repeat Product Card structure for a full grid -->
</div>
<!-- Pagination -->
<div class="mt-16 flex justify-center items-center gap-4">
<button class="w-12 h-12 border-2 border-surface-container-highest flex items-center justify-center hover:border-secondary-container transition-all">
<span class="material-symbols-outlined" data-icon="chevron_left">chevron_left</span>
</button>
<span class="font-label-bold text-secondary-container border-b-2 border-secondary-container px-2">1</span>
<span class="font-label-bold hover:text-secondary-container cursor-pointer transition-colors px-2">2</span>
<span class="font-label-bold hover:text-secondary-container cursor-pointer transition-colors px-2">3</span>
<span class="font-label-bold px-2">...</span>
<span class="font-label-bold hover:text-secondary-container cursor-pointer transition-colors px-2">12</span>
<button class="w-12 h-12 border-2 border-surface-container-highest flex items-center justify-center hover:border-secondary-container transition-all">
<span class="material-symbols-outlined" data-icon="chevron_right">chevron_right</span>
</button>
</div>
</main>
@endsection