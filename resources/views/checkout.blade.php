@extends('layouts.master')

@section('title', 'Category Page')

@section('content')
<h1 class="relative z-50 text-white text-5xl text-center mt-10">
    Checkout Page
</h1>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-grid-gutter items-start">
<!-- Left Column: Checkout Forms -->
<div class="lg:col-span-7 space-y-12">
<!-- Step 1: Customer Info -->
<section>
<div class="flex items-center gap-4 mb-8">
<span class="bg-secondary text-on-secondary-fixed font-headline-md px-3 py-1">01</span>
<h2 class="font-headline-md text-headline-md uppercase">SHIPPING DETAILS</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="font-label-bold text-label-bold text-on-surface-variant uppercase">FIRST NAME</label>
<input class="bg-surface-container-low border border-surface-container-highest focus:border-secondary focus:ring-0 text-on-surface p-4 transition-all" placeholder="John" type="text"/>
</div>
<div class="flex flex-col gap-2">
<label class="font-label-bold text-label-bold text-on-surface-variant uppercase">LAST NAME</label>
<input class="bg-surface-container-low border border-surface-container-highest focus:border-secondary focus:ring-0 text-on-surface p-4 transition-all" placeholder="Doe" type="text"/>
</div>
<div class="md:col-span-2 flex flex-col gap-2">
<label class="font-label-bold text-label-bold text-on-surface-variant uppercase">ADDRESS</label>
<input class="bg-surface-container-low border border-surface-container-highest focus:border-secondary focus:ring-0 text-on-surface p-4 transition-all" placeholder="Street name and number" type="text"/>
</div>
<div class="flex flex-col gap-2">
<label class="font-label-bold text-label-bold text-on-surface-variant uppercase">CITY</label>
<input class="bg-surface-container-low border border-surface-container-highest focus:border-secondary focus:ring-0 text-on-surface p-4 transition-all" placeholder="HCM City" type="text"/>
</div>
<div class="flex flex-col gap-2">
<label class="font-label-bold text-label-bold text-on-surface-variant uppercase">PHONE</label>
<input class="bg-surface-container-low border border-surface-container-highest focus:border-secondary focus:ring-0 text-on-surface p-4 transition-all" placeholder="+84 XXX XXX XXX" type="tel"/>
</div>
</div>
</section>
<!-- Step 2: Delivery Method -->
<section>
<div class="flex items-center gap-4 mb-8">
<span class="bg-surface-container-highest text-on-surface font-headline-md px-3 py-1">02</span>
<h2 class="font-headline-md text-headline-md uppercase">SHIPPING METHOD</h2>
</div>
<div class="space-y-4">
<label class="flex items-center justify-between p-6 bg-surface-container-high border-2 border-secondary cursor-pointer transition-all">
<div class="flex items-center gap-4">
<input checked="" class="text-secondary focus:ring-0 bg-transparent border-on-surface-variant" name="shipping" type="radio"/>
<div>
<p class="font-label-bold text-on-surface uppercase">ELITE EXPRESS</p>
<p class="text-label-sm text-on-surface-variant">1-2 Business Days Delivery</p>
</div>
</div>
<span class="font-headline-md text-secondary">$15.00</span>
</label>
<label class="flex items-center justify-between p-6 bg-surface-container-low border-2 border-transparent hover:border-surface-container-highest cursor-pointer transition-all">
<div class="flex items-center gap-4">
<input class="text-secondary focus:ring-0 bg-transparent border-on-surface-variant" name="shipping" type="radio"/>
<div>
<p class="font-label-bold text-on-surface uppercase">STANDARD PERFORMANCE</p>
<p class="text-label-sm text-on-surface-variant">3-5 Business Days Delivery</p>
</div>
</div>
<span class="font-headline-md text-on-surface">FREE</span>
</label>
</div>
</section>
<!-- Step 3: Payment -->
<section>
<div class="flex items-center gap-4 mb-8">
<span class="bg-surface-container-highest text-on-surface font-headline-md px-3 py-1">03</span>
<h2 class="font-headline-md text-headline-md uppercase">PAYMENT OPTION</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<button class="flex flex-col items-center justify-center p-6 bg-surface-container-low border-2 border-secondary group hover:bg-surface-container transition-all">
<span class="material-symbols-outlined text-4xl text-secondary mb-2" style="font-variation-settings: 'FILL' 1;">credit_card</span>
<span class="font-label-bold text-on-surface uppercase text-xs">CREDIT CARD</span>
</button>
<button class="flex flex-col items-center justify-center p-6 bg-surface-container-low border-2 border-transparent hover:border-surface-container-highest group transition-all">
<span class="material-symbols-outlined text-4xl text-on-surface-variant group-hover:text-on-surface mb-2">account_balance_wallet</span>
<span class="font-label-bold text-on-surface-variant group-hover:text-on-surface uppercase text-xs">E-WALLET</span>
</button>
<button class="flex flex-col items-center justify-center p-6 bg-surface-container-low border-2 border-transparent hover:border-surface-container-highest group transition-all">
<span class="material-symbols-outlined text-4xl text-on-surface-variant group-hover:text-on-surface mb-2">payments</span>
<span class="font-label-bold text-on-surface-variant group-hover:text-on-surface uppercase text-xs">COD</span>
</button>
</div>
<!-- Credit Card Details (Active State) -->
<div class="mt-8 p-8 bg-surface-container-high space-y-6">
<div class="flex flex-col gap-2">
<label class="font-label-bold text-label-bold text-on-surface-variant uppercase">CARD NUMBER</label>
<div class="relative">
<input class="w-full bg-background border border-surface-container-highest focus:border-secondary focus:ring-0 text-on-surface p-4 transition-all" placeholder="XXXX XXXX XXXX XXXX" type="text"/>
<div class="absolute right-4 top-1/2 -translate-y-1/2 flex gap-2">
<span class="w-8 h-5 bg-surface-container-highest"></span>
<span class="w-8 h-5 bg-surface-container-highest"></span>
</div>
</div>
</div>
<div class="grid grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="font-label-bold text-label-bold text-on-surface-variant uppercase">EXPIRY DATE</label>
<input class="bg-background border border-surface-container-highest focus:border-secondary focus:ring-0 text-on-surface p-4 transition-all" placeholder="MM/YY" type="text"/>
</div>
<div class="flex flex-col gap-2">
<label class="font-label-bold text-label-bold text-on-surface-variant uppercase">CVV</label>
<input class="bg-background border border-surface-container-highest focus:border-secondary focus:ring-0 text-on-surface p-4 transition-all" placeholder="123" type="text"/>
</div>
</div>
</div>
</section>
</div>
<!-- Right Column: Order Summary (Sticky) -->
<div class="lg:col-span-5">
<div class="sticky top-28 bg-surface-container-low border border-surface-container-highest p-8">
<h2 class="font-headline-md text-headline-md uppercase mb-8 pb-4 border-b border-surface-container-highest">ORDER SUMMARY</h2>
<!-- Product List -->
<div class="space-y-6 mb-8 max-h-[400px] overflow-y-auto pr-2">
<div class="flex gap-4">
<div class="w-24 h-24 bg-surface-container-high flex-shrink-0">
<img class="w-full h-full object-cover" data-alt="A high-performance neon orange running shoe with a sharp, aerodynamic design, positioned against a stark black background. Professional sports photography with dramatic side-lighting highlighting the intricate carbon fiber texture of the sole and the sleek knit upper. The mood is intense, energetic, and premium." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBFAp0zBdEFv-lGVypERYIo5LPHj6pSeuo8Un01qPFU7wKiiYP8K765yOxCw5JqgJ2_E0de6WZlf_HiMyrAGKmuX44EuVCXXUJYNrTaUN7s6jeImHTdF-ec1g0X5a4SLNroNnhshDurylR51W1Ty8xajeqt5qswzs6767YlqFKxM8h9SPo0liUAumCfkd59nivcR8gtYyATihQUAtjJrHmQDo6dOK0nt6Vx2E-JFMBymlvMkYxRNfnJdlQTlHSmWRZOZuFTc3sq1AE"/>
</div>
<div class="flex flex-col justify-between py-1">
<div>
<h3 class="font-label-bold text-on-surface uppercase leading-tight">VELOCITY NITRO ELITE V3</h3>
<p class="text-label-sm text-on-surface-variant uppercase mt-1">SIZE: 42 / NEON ORANGE</p>
</div>
<p class="font-headline-md text-secondary">$220.00</p>
</div>
</div>
<div class="flex gap-4">
<div class="w-24 h-24 bg-surface-container-high flex-shrink-0">
<img class="w-full h-full object-cover" data-alt="Professional studio shot of a lime green performance sneaker with sharp geometric lines and a futuristic look. The background is a deep charcoal grey with subtle smoke effects to emphasize speed. The lighting is cinematic, casting sharp shadows that define the shoe's architectural structure." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA6Lo6NNCc5aa_TDbuOxuIdwywpWsdyBwLf_8ezleZKK13w4tfX9l7WnnpQyfpbP5uIS_i1KPqN4l4pnel1xTgO-BqsWWT6Wc4PA47vt43zgE22ceiChksQ1_M2pSFgj4yRssMv-UcINApuZotaKZ4Q_-z56N8fypDLXXJ-5Ko2fz-iJs1hHcFxQmomuzF6bKSyeZ9RNs7V4lhqlddiTU0OW39vu9XSp3QlnAzTRnwUexT1U7384-RBlNer94dXnzMmBnKYULLphzQ"/>
</div>
<div class="flex flex-col justify-between py-1">
<div>
<h3 class="font-label-bold text-on-surface uppercase leading-tight">AERO-KNIT TRAINER X</h3>
<p class="text-label-sm text-on-surface-variant uppercase mt-1">SIZE: 42 / BLACK-GREEN</p>
</div>
<p class="font-headline-md text-on-surface">$180.00</p>
</div>
</div>
</div>
<!-- Discount Code -->
<div class="flex gap-2 mb-8">
<input class="flex-grow bg-background border border-surface-container-highest focus:border-secondary focus:ring-0 text-on-surface px-4 py-3 text-sm uppercase font-label-bold" placeholder="PROMO CODE" type="text"/>
<button class="bg-on-surface text-background px-6 py-3 font-label-bold text-xs hover:bg-secondary hover:text-on-secondary transition-all">APPLY</button>
</div>
<!-- Totals -->
<div class="space-y-3 pt-6 border-t border-surface-container-highest">
<div class="flex justify-between text-on-surface-variant font-label-bold text-xs uppercase">
<span>SUBTOTAL</span>
<span>$400.00</span>
</div>
<div class="flex justify-between text-on-surface-variant font-label-bold text-xs uppercase">
<span>SHIPPING (ELITE)</span>
<span>$15.00</span>
</div>
<div class="flex justify-between text-on-surface-variant font-label-bold text-xs uppercase">
<span>TAX (8%)</span>
<span>$32.00</span>
</div>
<div class="flex justify-between pt-4 mt-2 border-t-2 border-secondary">
<span class="font-headline-md text-on-surface uppercase">TOTAL</span>
<span class="font-headline-md text-secondary text-headline-md">$447.00</span>
</div>
</div>
<!-- Action Button -->
<button class="w-full mt-10 bg-secondary text-on-secondary-fixed font-headline-md text-headline-md py-5 btn-slant transition-transform duration-150 uppercase shadow-[0px_4px_0px_rgba(0,0,0,0.5)]">
                        COMPLETE ORDER
                    </button>
<div class="mt-6 flex items-center justify-center gap-2 text-on-surface-variant">
<span class="material-symbols-outlined text-sm">lock</span>
<span class="text-label-sm uppercase font-label-bold tracking-widest">SSL SECURED TRANSACTIONS</span>
</div>
</div>
</div>
</div>
</main>
@endsection