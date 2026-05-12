@extends('layouts.master')

@section('title', 'Category Page')

@section('content')
<h1 class="relative z-50 text-white text-5xl text-center mt-10">
    Cart Page
</h1>
        <main class="pt-[100px] pb-section-gap-desktop px-grid-margin-desktop max-w-container-max mx-auto">
<!-- Cart Header -->
<div class="mb-12">
<h1 class="font-display-lg text-headline-xl text-on-surface uppercase tracking-tight">GIỎ HÀNG CỦA BẠN</h1>
<p class="font-body-md text-on-surface-variant mt-2">[ 2 SẢN PHẨM TRONG TÚI ]</p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-grid-gutter">
<!-- Product List Section -->
<div class="lg:col-span-8 space-y-base">
<!-- Item 1 -->
<div class="group flex flex-col md:flex-row gap-6 bg-surface-container-high p-6 relative">
<div class="w-full md:w-48 h-48 bg-surface-container overflow-hidden shrink-0">
<img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" data-alt="A professional studio photograph of a high-performance neon orange running shoe against a dark carbon background. The lighting is sharp and cinematic, highlighting the technical mesh texture and aerodynamic silhouette. The overall mood is aggressive and elite, perfectly capturing the spirit of a professional racing product. The high-contrast aesthetic features deep blacks and vibrant orange tones." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAEzwXqzOWGHSVrb2o8WUK5ldsrjvmRL-zfIrWK9zupinfvC09Zvlxj2O4ECUb_-DE99Fer9I1kuo1bEEOgoVPYXzCq9PHwYpOYZ28lXS_WInn898GnyBWX6srvVsqgEDtq6Pw2R8eVcGUY_r85SxpyPSqjoojWyqnrz4p6NSuyUB_Fy-E-wm2dn9jwNvC-q-vvYNTvcOOMG3rMdrO5wrMOGjmYw3qDp_PFBqTjsguU2bcIuoYynJyEIxGglYPEvExxQeinHVH5M7M"/>
</div>
<div class="flex-grow flex flex-col justify-between py-2">
<div class="flex justify-between items-start">
<div>
<h3 class="font-headline-md text-on-surface leading-tight">VELOCITY ELITE NITRO PRO</h3>
<p class="font-label-bold text-on-secondary-container bg-secondary-container px-2 py-0.5 inline-block mt-2">NEW ARRIVAL</p>
</div>
<p class="font-headline-md text-secondary">3.450.000đ</p>
</div>
<div class="mt-4 grid grid-cols-2 md:flex md:gap-8 gap-4">
<div>
<label class="block font-label-sm text-on-tertiary-container uppercase mb-1">MÀU SẮC</label>
<span class="font-label-bold text-on-surface">NEON ORANGE / CARBON</span>
</div>
<div>
<label class="block font-label-sm text-on-tertiary-container uppercase mb-1">KÍCH CỠ (US)</label>
<span class="font-label-bold text-on-surface">10.5</span>
</div>
</div>
<div class="mt-6 flex items-center gap-6">
<div class="flex items-center border border-outline-variant">
<button class="px-3 py-1 hover:bg-surface-container-highest transition-colors"><span class="material-symbols-outlined text-sm">remove</span></button>
<span class="px-4 font-label-bold border-x border-outline-variant">01</span>
<button class="px-3 py-1 hover:bg-surface-container-highest transition-colors"><span class="material-symbols-outlined text-sm">add</span></button>
</div>
<button class="flex items-center gap-2 text-on-surface-variant hover:text-error transition-colors font-label-bold text-sm">
<span class="material-symbols-outlined text-lg">delete</span>
<span>XÓA</span>
</button>
</div>
</div>
</div>
<!-- Item 2 -->
<div class="group flex flex-col md:flex-row gap-6 bg-surface-container-high p-6 relative">
<div class="w-full md:w-48 h-48 bg-surface-container overflow-hidden shrink-0">
<img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" data-alt="Premium athletic footwear in a sleek electric green colorway, presented in a minimalist studio environment with high-contrast lighting. The shoe features architectural design lines and a technical upper material. Sharp shadows and tonal charcoal layering create a high-performance feeling. The image is clean and focused, emphasizing the precision engineering of the sports gear." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBXYLEf6LWMaEAWc86lRfJev6s6zQrLYvYUQHsp7VQZ2JAv6v8ex1VOlXF9L5dxrpCJBz8mW3lTjyEal0fU_FARVzzliCA362Iek3_mVAF_CcrEn8MyK-rentctpfYcX84sUeyWD5poj62UXVlmuZPmEcRYGs0djIdfOqt_qQk4KMkzKqd9onLDFS94bbEPFDUI_1nR15vFOAIjX8M1whr8O3-vITTt1gSOSNXmxQ6rv_HkVE3jVUXjNvkTuUOdWccqpT0u8w-E_-c"/>
</div>
<div class="flex-grow flex flex-col justify-between py-2">
<div class="flex justify-between items-start">
<div>
<h3 class="font-headline-md text-on-surface leading-tight">AERO-KNIT TRAINER X</h3>
<p class="font-label-bold text-on-surface-variant border border-outline-variant px-2 py-0.5 inline-block mt-2 uppercase">BEST SELLER</p>
</div>
<p class="font-headline-md text-secondary">2.890.000đ</p>
</div>
<div class="mt-4 grid grid-cols-2 md:flex md:gap-8 gap-4">
<div>
<label class="block font-label-sm text-on-tertiary-container uppercase mb-1">MÀU SẮC</label>
<span class="font-label-bold text-on-surface">ELECTRIC GREEN</span>
</div>
<div>
<label class="block font-label-sm text-on-tertiary-container uppercase mb-1">KÍCH CỠ (US)</label>
<span class="font-label-bold text-on-surface">9.0</span>
</div>
</div>
<div class="mt-6 flex items-center gap-6">
<div class="flex items-center border border-outline-variant">
<button class="px-3 py-1 hover:bg-surface-container-highest transition-colors"><span class="material-symbols-outlined text-sm">remove</span></button>
<span class="px-4 font-label-bold border-x border-outline-variant">01</span>
<button class="px-3 py-1 hover:bg-surface-container-highest transition-colors"><span class="material-symbols-outlined text-sm">add</span></button>
</div>
<button class="flex items-center gap-2 text-on-surface-variant hover:text-error transition-colors font-label-bold text-sm">
<span class="material-symbols-outlined text-lg">delete</span>
<span>XÓA</span>
</button>
</div>
</div>
</div>
</div>
<!-- Summary Section -->
<div class="lg:col-span-4">
<div class="bg-surface-container-high p-8 border border-outline-variant">
<h2 class="font-headline-md text-on-surface mb-8 border-b-2 border-secondary pb-2 uppercase tracking-wide">TÓM TẮT ĐƠN HÀNG</h2>
<div class="space-y-4 mb-8">
<div class="flex justify-between font-body-md text-on-surface-variant">
<span>TẠM TÍNH</span>
<span>6.340.000đ</span>
</div>
<div class="flex justify-between font-body-md text-on-surface-variant">
<span>PHÍ VẬN CHUYỂN</span>
<span>MIỄN PHÍ</span>
</div>
<div class="flex justify-between font-body-md text-on-surface-variant">
<span>THUẾ (VAT 8%)</span>
<span>507.200đ</span>
</div>
</div>
<div class="pt-6 border-t border-outline-variant mb-8">
<div class="flex justify-between items-baseline">
<span class="font-label-bold text-on-surface uppercase">TỔNG CỘNG</span>
<span class="font-headline-lg text-secondary">6.847.200đ</span>
</div>
</div>
<div class="space-y-4">
<button class="w-full bg-secondary-container text-on-secondary-fixed py-5 font-headline-md uppercase tracking-widest hover:bg-secondary transition-all slant-hover shadow-[0px_4px_0px_rgba(0,0,0,0.5)]">
                            TIẾN HÀNH THANH TOÁN
                        </button>
<a class="block w-full text-center border-2 border-on-surface text-on-surface py-4 font-label-bold uppercase hover:bg-on-surface hover:text-surface transition-all duration-300" href="#">
                            TIẾP TỤC MUA SẮM
                        </a>
</div>
<div class="mt-8 flex flex-col gap-4">
<div class="flex items-center gap-3 text-on-surface-variant">
<span class="material-symbols-outlined">local_shipping</span>
<span class="text-label-sm">Giao hàng nhanh toàn quốc (2-4 ngày)</span>
</div>
<div class="flex items-center gap-3 text-on-surface-variant">
<span class="material-symbols-outlined">verified</span>
<span class="text-label-sm">Bảo hành 12 tháng chính hãng</span>
</div>
</div>
</div>
<!-- Promo Code -->
<div class="mt-6 bg-surface-container p-6">
<label class="block font-label-bold text-on-surface uppercase mb-3">MÃ GIẢM GIÁ</label>
<div class="flex gap-2">
<input class="flex-grow bg-background border-outline-variant focus:border-secondary focus:ring-0 text-on-surface placeholder:text-surface-variant font-label-bold py-3 px-4 uppercase" placeholder="NHẬP MÃ..." type="text"/>
<button class="bg-surface-container-highest px-6 text-on-surface font-label-bold hover:bg-secondary hover:text-on-secondary transition-colors">ÁP DỤNG</button>
</div>
</div>
</div>
</div>
</main>
@endsection