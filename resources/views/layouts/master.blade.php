<!DOCTYPE html>

<html class="dark" lang="vi"><head>
    <title>@yield('title')</title>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Anton&amp;family=Lexend:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "inverse-primary": "#5f5e5e",
                    "tertiary": "#c6c6c7",
                    "secondary-fixed": "#ffdbce",
                    "surface-container": "#1f2020",
                    "surface-dim": "#131313",
                    "surface-container-low": "#1b1c1c",
                    "on-surface": "#e4e2e1",
                    "on-primary": "#313030",
                    "on-tertiary-fixed": "#1a1c1c",
                    "primary-fixed-dim": "#c8c6c5",
                    "error": "#ffb4ab",
                    "on-tertiary-fixed-variant": "#454747",
                    "tertiary-fixed": "#e2e2e2",
                    "on-primary-fixed": "#1c1b1b",
                    "tertiary-container": "#101213",
                    "surface": "#131313",
                    "on-error": "#690005",
                    "surface-tint": "#c8c6c5",
                    "inverse-surface": "#e4e2e1",
                    "secondary": "#ffb599",
                    "background": "#131313",
                    "on-tertiary": "#2f3131",
                    "outline-variant": "#444748",
                    "primary-container": "#121212",
                    "inverse-on-surface": "#303030",
                    "primary-fixed": "#e5e2e1",
                    "on-secondary-container": "#521900",
                    "error-container": "#93000a",
                    "on-surface-variant": "#c4c7c7",
                    "primary": "#c8c6c5",
                    "on-secondary": "#5a1c00",
                    "tertiary-fixed-dim": "#c6c6c7",
                    "surface-container-highest": "#353535",
                    "surface-container-lowest": "#0e0e0e",
                    "secondary-container": "#fe5f00",
                    "on-primary-fixed-variant": "#474646",
                    "on-secondary-fixed": "#370e00",
                    "on-secondary-fixed-variant": "#7f2b00",
                    "surface-variant": "#353535",
                    "on-tertiary-container": "#7c7d7e",
                    "outline": "#8e9192",
                    "surface-container-high": "#2a2a2a",
                    "surface-bright": "#393939",
                    "secondary-fixed-dim": "#ffb599",
                    "on-background": "#e4e2e1",
                    "on-error-container": "#ffdad6",
                    "on-primary-container": "#7e7d7d"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "section-gap-mobile": "64px",
                    "section-gap-desktop": "120px",
                    "grid-margin-desktop": "40px",
                    "grid-gutter": "24px",
                    "base": "8px",
                    "container-max": "1440px"
            },
            "fontFamily": {
                    "display-lg": ["Anton"],
                    "headline-xl": ["Anton"],
                    "headline-lg-mobile": ["Anton"],
                    "body-lg": ["Lexend"],
                    "headline-lg": ["Anton"],
                    "body-md": ["Lexend"],
                    "label-sm": ["Lexend"],
                    "label-bold": ["Lexend"],
                    "headline-md": ["Anton"]
            },
            "fontSize": {
                    "display-lg": ["84px", {"lineHeight": "80px", "letterSpacing": "0.02em", "fontWeight": "400"}],
                    "headline-xl": ["60px", {"lineHeight": "56px", "letterSpacing": "0.02em", "fontWeight": "400"}],
                    "headline-lg-mobile": ["32px", {"lineHeight": "34px", "letterSpacing": "0.02em", "fontWeight": "400"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                    "headline-lg": ["40px", {"lineHeight": "44px", "letterSpacing": "0.02em", "fontWeight": "400"}],
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "label-sm": ["12px", {"lineHeight": "16px", "fontWeight": "500"}],
                    "label-bold": ["14px", {"lineHeight": "20px", "letterSpacing": "0.05em", "fontWeight": "700"}],
                    "headline-md": ["24px", {"lineHeight": "28px", "letterSpacing": "0.03em", "fontWeight": "400"}]
            }
          },
        },
      }
    </script>
<style>
        .skew-hover:hover { transform: skewX(-12deg); }
        .sharp-shadow { box-shadow: 0px 4px 0px rgba(0,0,0,0.5); }
        .diagonal-bg { background: linear-gradient(135deg, transparent 95%, #fe5f00 5%); }
    </style>
</head>
<body class="bg-background text-on-background font-body-md selection:bg-secondary-container selection:text-white">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-background border-b-2 border-surface-container-highest">
<div class="flex justify-between items-center w-full px-grid-margin-desktop py-base max-w-container-max mx-auto">
<div class="font-display-lg text-headline-lg tracking-tighter text-secondary">VELOCITY</div>
<div class="hidden md:flex gap-8 items-center">
<a class="text-on-surface font-label-bold hover:text-secondary transition-colors" href="#">RUNNING</a>
<a class="text-on-surface font-label-bold hover:text-secondary transition-colors" href="#">BASKETBALL</a>
<a class="text-on-surface font-label-bold hover:text-secondary transition-colors" href="#">TRAINING</a>
<a class="text-on-surface font-label-bold hover:text-secondary transition-colors" href="#">LIFESTYLE</a>
</div>
<div class="flex items-center gap-6">
<div class="relative hidden lg:block">
<input class="bg-primary-container border-none text-on-surface font-label-bold px-4 py-2 w-48 focus:ring-1 focus:ring-secondary focus:w-64 transition-all outline-none" placeholder="SEARCH" type="text"/>
</div>
<div class="flex gap-4">
<button class="hover:text-secondary transition-all duration-200"><span class="material-symbols-outlined">person</span></button>
<button class="hover:text-secondary transition-all duration-200 relative">
<span class="material-symbols-outlined">shopping_cart</span>
<span class="absolute -top-1 -right-1 bg-secondary-container text-white text-[10px] w-4 h-4 flex items-center justify-center font-bold">0</span>
</button>
<button class="md:hidden"><span class="material-symbols-outlined">menu</span></button>
</div>
</div>
</div>
</nav>
@yield('content')
<!-- Footer -->
<footer class="bg-surface-container-lowest dark:bg-surface-container-lowest border-t-2 border-surface-container-highest">
<div class="flex flex-col md:flex-row justify-between items-center w-full px-grid-margin-desktop py-section-gap-mobile max-w-container-max mx-auto">
<div class="mb-8 md:mb-0">
<div class="font-display-lg text-headline-md text-secondary mb-4">VELOCITY</div>
<div class="flex gap-6">
<a class="text-on-surface-variant hover:text-secondary transition-colors" href="#"><span class="material-symbols-outlined">social_leaderboard</span></a>
<a class="text-on-surface-variant hover:text-secondary transition-colors" href="#"><span class="material-symbols-outlined">alternate_email</span></a>
<a class="text-on-surface-variant hover:text-secondary transition-colors" href="#"><span class="material-symbols-outlined">public</span></a>
</div>
</div>
<div class="flex flex-wrap justify-center gap-8 md:gap-16 mb-8 md:mb-0">
<a class="text-on-surface-variant hover:text-secondary transition-colors font-label-sm hover:translate-x-1 transition-transform" href="#">PRIVACY POLICY</a>
<a class="text-on-surface-variant hover:text-secondary transition-colors font-label-sm hover:translate-x-1 transition-transform" href="#">TERMS OF SERVICE</a>
<a class="text-on-surface-variant hover:text-secondary transition-colors font-label-sm hover:translate-x-1 transition-transform" href="#">RETURNS</a>
<a class="text-on-surface-variant hover:text-secondary transition-colors font-label-sm hover:translate-x-1 transition-transform" href="#">LOCATE STORE</a>
</div>
<div class="text-on-surface font-label-sm text-center md:text-right opacity-50">
                © 2024 VELOCITY PERFORMANCE FOOTWEAR. ENGINEERED FOR SPEED.
            </div>
</div>
</footer>
</body></html>