@extends('layouts.master')

@section('title', 'Category Page')

@section('content')
<h1 class="relative z-50 text-white text-5xl text-center mt-10">
    Product_detail Page
</h1>
   <body class="bg-background text-on-background font-body-md selection:bg-secondary selection:text-background">
<!-- TopNavBar -->
<header class="fixed top-0 left-0 right-0 z-50 bg-background border-b-2 border-surface-container-highest">
<nav class="flex justify-between items-center w-full px-grid-margin-desktop py-base max-w-container-max mx-auto">
<div class="font-display-lg text-headline-lg tracking-tighter text-secondary">VELOCITY</div>
<div class="hidden md:flex items-center space-x-8">
<a class="text-secondary font-label-bold border-b-2 border-secondary pb-1 skew-x-[-12deg] transition-transform duration-150" href="#">RUNNING</a>
<a class="text-on-surface font-label-bold hover:text-secondary transition-colors transition-all duration-200" href="#">BASKETBALL</a>
<a class="text-on-surface font-label-bold hover:text-secondary transition-colors transition-all duration-200" href="#">TRAINING</a>
<a class="text-on-surface font-label-bold hover:text-secondary transition-colors transition-all duration-200" href="#">LIFESTYLE</a>
</div>
<div class="flex items-center space-x-6 text-primary">
<div class="hidden lg:flex items-center bg-surface-container-high px-4 py-2">
<span class="material-symbols-outlined text-on-surface-variant mr-2">search</span>
<input class="bg-transparent border-none focus:ring-0 text-label-bold w-48 placeholder:text-on-surface-variant" placeholder="Tìm kiếm sản phẩm..." type="text"/>
</div>
<button class="hover:text-secondary transition-all duration-200">
<span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
</button>
<button class="hover:text-secondary transition-all duration-200">
<span class="material-symbols-outlined" data-icon="person">person</span>
</button>
</div>
</nav>
</header>
<main class="pt-24 pb-section-gap-desktop max-w-container-max mx-auto px-grid-margin-desktop">
<!-- Product Hero Section -->
<section class="grid grid-cols-1 lg:grid-cols-12 gap-grid-gutter mb-section-gap-desktop">
<!-- Gallery Column -->
<div class="lg:col-span-7 flex flex-col md:flex-row-reverse gap-4">
<div class="flex-grow bg-surface-container-high aspect-square overflow-hidden relative group">
<img alt="Velocity Aero-Max" class="w-full h-full object-cover" data-alt="A professional close-up shot of a high-performance red sneaker with carbon fiber accents, positioned dynamically on a dark slate background. The lighting is sharp and cinematic, highlighting the intricate texture of the knit fabric and the aggressive curves of the sole. The atmosphere is elite and high-tech, using a palette of deep charcoal and neon orange highlights." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAwvchdpiYQB_c4eoefECzzlkpNYBYVZodtCta5NSsTwm4DHydJLJ4GkarFAHnqXwKd_2BywtvExKW_N2CXkxLwu4h6vndbUTyI1EvPzNjR7_OVcytAYP1BVo1LN2islGUdwo5jf2TU0DPnW_iuMCsqGVuadaFmjvtAJ_gt6Z5rOHDp5YPRqyLsJ43xrMpir1iigB2oTcFWX4GPdJ59KKf45LJmlgUn27AxPWmjakn-6DFG98QZ2N98sZk2wSQp-mMgewo2317xIC4"/>
<div class="absolute top-6 right-6 bg-secondary-container text-on-secondary-fixed font-label-bold px-4 py-1 skew-x-[-12deg]">NEW ARRIVAL</div>
</div>
<div class="flex md:flex-col gap-4 overflow-x-auto md:overflow-y-auto md:w-32 custom-scrollbar">
<div class="flex-shrink-0 w-24 md:w-full aspect-square bg-surface-container border-2 border-secondary overflow-hidden">
<img alt="Side View" class="w-full h-full object-cover opacity-80" data-alt="A side view of the Velocity Aero-Max sneaker showcasing its streamlined silhouette and reactive foam midsole. The image uses sharp lighting to define the sharp edges and performance-driven design of the heel counter. Dark mode aesthetic with high-contrast shadows." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAN8enC8_0S-gkDqZE8KS8swRJeK2ECI1KiM6s7eZDaVrSeW33pxim38lBNz5sthmJ0uMDFeNwtW4YWlm3v17xVHN6T-i36bvq4SNeq6I_buHrpw9uWbmyVS0bG8YEUaOaMWnaUofvU6e1ukwJRi1b_vu8CjyzvcaLBjDrJF6AL442keOWpXpPK80lH4ZD_q_wGtpaCGYdKvuyEKMbb8YAAGeDPAOcpiABxvNqniRWjAmBRq8b2U77ojwftGUcl4YL6bMuwQagMQXM"/>
</div>
<div class="flex-shrink-0 w-24 md:w-full aspect-square bg-surface-container overflow-hidden hover:border-secondary border-2 border-transparent transition-all cursor-pointer">
<img alt="Top View" class="w-full h-full object-cover" data-alt="A top-down bird's-eye view of the racing sneaker, revealing the precise lacing system and breathable mesh upper. The background is a textured black surface that enhances the premium orange and carbon tones. Crisp, architectural composition." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCNjmrOia6afIbg1mTJ-h9Ku9a2yVdS7vKDJpiKXe6LXCp0-_2LnhH8APvdR8LJUG7iIs_mS3hQqmMuepgfi5_HebuCkqhN64rOiBDA5OCWz8iiQY2zPQD9gXXQb10lPfuWX_Yc0sMxpkL2HNj7fkzSn5RD07mCBJTXa6LbdAox2lEl5gTJgjFzgJZl0ua7xbpI1NzRG_j3AzK46v4nhfXlR5cD8IwiC31nlxMArIA8yTP3IsJwdtAXx1bWYSpM_uE6AD5ny-Y7GOI"/>
</div>
<div class="flex-shrink-0 w-24 md:w-full aspect-square bg-surface-container overflow-hidden hover:border-secondary border-2 border-transparent transition-all cursor-pointer">
<img alt="Sole View" class="w-full h-full object-cover" data-alt="A macro detail shot of the sneaker's outsole, highlighting the aggressive traction pattern and carbon plate through the translucent rubber. Kinetic energy feel with cool-toned studio lighting and sharp, defined ridges." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVK_6xrxkCj6b_ZfduFdTvTzUT6Nf166Psycoshy9aojCe5HswPvypO2xABevInlabH3Bv4taAosG-sf8QP6DLPD_i0qlQsxXiddw9azVGiQk_mfqjD7SDNxUYyrOdb8ZKP3Z-naxleP2vSvgB_Au70GhES8vfIzdJpWJBEisAwye0k0H4ulqOD8zjXroA-GSL2PG2X6zdO8iMw_v68cMIXZhkpE1Jir83EvWMZk6cyGNntUCAi8x1VcI7e0QLe0oo3XKlgbKrXrU"/>
</div>
<div class="flex-shrink-0 w-24 md:w-full aspect-square bg-surface-container overflow-hidden hover:border-secondary border-2 border-transparent transition-all cursor-pointer">
<img alt="Heel View" class="w-full h-full object-cover" data-alt="Rear view focusing on the stabilized heel cage and reflective branding elements of the footwear. The composition uses high-contrast tonal layering of charcoal and neon accents to evoke a sense of speed and precision." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDNrpGNZnwmzbLa1Z9Es5DJYiARcA46ci4v7E__FWw5MBdVj-G_EQcETuYRpC7NsCa58tQCKsp6nDNCNC254j3jRu6nUhSoQG6jlbOhp249OjBLYBIJxRK4FTXxOf1TpnODN5EbIMw_VxBLiwaxv7GbC-A-tlXnO0625LZAhRa6Ly3JCIFPoqir_Yab3bGD06JiuvvJrfeyvJ1RTSnw7ZY0k6ZiPNRmPzVsTwyABHZn6EMpjNlZHJ6gEu4CTNgbQYycUMIxoI1_71o"/>
</div>
</div>
</div>
<!-- Info Column -->
<div class="lg:col-span-5 flex flex-col justify-start space-y-8">
<div>
<h2 class="font-label-bold text-secondary tracking-widest mb-2">PRO RUNNING / ELITE SERIES</h2>
<h1 class="font-headline-xl text-headline-xl text-on-surface leading-tight">AERO-MAX KINETIC V3</h1>
<div class="flex items-center mt-4">
<div class="flex text-secondary mr-2">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined">star_half</span>
</div>
<span class="font-label-bold text-on-surface-variant">(128 ĐÁNH GIÁ)</span>
</div>
</div>
<div class="font-headline-md text-headline-md text-on-surface">
          4.850.000 VNĐ
        </div>
<div class="space-y-4">
<label class="font-label-bold text-on-surface block">MÀU SẮC: <span class="text-secondary ml-2">HYPER ORANGE / CARBON</span></label>
<div class="flex gap-3">
<button class="w-10 h-10 border-2 border-secondary bg-secondary-container"></button>
<button class="w-10 h-10 border-2 border-outline-variant bg-[#1a1a1a] hover:border-on-surface-variant"></button>
<button class="w-10 h-10 border-2 border-outline-variant bg-[#ffffff] hover:border-on-surface-variant"></button>
</div>
</div>
<div class="space-y-4">
<div class="flex justify-between items-center">
<label class="font-label-bold text-on-surface">CHỌN KÍCH CỠ (EU)</label>
<button class="text-label-bold text-on-surface-variant underline hover:text-secondary">BẢNG SIZE</button>
</div>
<div class="grid grid-cols-4 gap-2">
<button class="py-3 border-2 border-outline-variant font-label-bold hover:border-secondary transition-colors">40</button>
<button class="py-3 border-2 border-outline-variant font-label-bold hover:border-secondary transition-colors">41</button>
<button class="py-3 border-2 border-secondary font-label-bold text-secondary bg-surface-container-high">42</button>
<button class="py-3 border-2 border-outline-variant font-label-bold hover:border-secondary transition-colors">43</button>
<button class="py-3 border-2 border-outline-variant font-label-bold hover:border-secondary transition-colors">44</button>
<button class="py-3 border-2 border-outline-variant font-label-bold hover:border-secondary transition-colors">45</button>
<button class="py-3 border-2 border-outline-variant font-label-bold opacity-30 cursor-not-allowed">46</button>
</div>
</div>
<div class="flex flex-col gap-4 pt-4">
<button class="bg-secondary-container text-on-secondary-fixed py-4 font-headline-md skew-btn transition-transform duration-150 flex justify-center items-center gap-2">
            THÊM VÀO GIỎ HÀNG
            <span class="material-symbols-outlined">shopping_bag</span>
</button>
<button class="border-2 border-on-surface text-on-surface py-4 font-headline-md skew-btn transition-transform duration-150">
            MUA NGAY
          </button>
</div>
<p class="font-body-md text-on-surface-variant leading-relaxed">
          Được thiết kế cho những vận động viên khao khát tốc độ. Aero-Max Kinetic V3 kết hợp công nghệ sợi carbon siêu nhẹ với lớp đệm phản hồi lực Kinetic-Cloud, giúp tối ưu hóa mỗi sải chân của bạn. Trải nghiệm sự khác biệt từ vật liệu cao cấp và kỹ thuật chế tác chính xác.
        </p>
</div>
</section>
<!-- Tech Specs - Asymmetric Layout -->
<section class="mb-section-gap-desktop">
<h3 class="font-headline-lg text-headline-lg mb-12 border-l-4 border-secondary pl-6">CÔNG NGHỆ VƯỢT TRỘI</h3>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-surface-container-high p-8 flex flex-col space-y-4">
<span class="material-symbols-outlined text-secondary text-5xl">bolt</span>
<h4 class="font-headline-md">KINETIC-CLOUD</h4>
<p class="text-on-surface-variant font-body-md">Hệ thống đệm bọt khí mật độ cao, hoàn trả năng lượng lên đến 85% sau mỗi cú chạm đất.</p>
</div>
<div class="bg-surface-container-high p-8 flex flex-col space-y-4 mt-8 md:mt-0">
<span class="material-symbols-outlined text-secondary text-5xl">layers</span>
<h4 class="font-headline-md">CARBON-FLY PLATE</h4>
<p class="text-on-surface-variant font-body-md">Tấm sợi carbon nguyên khối chạy dọc thân giày tạo độ ổn định và lực đẩy phi thường.</p>
</div>
<div class="bg-surface-container-high p-8 flex flex-col space-y-4 mt-8 md:mt-0">
<span class="material-symbols-outlined text-secondary text-5xl">air</span>
<h4 class="font-headline-md">AERO-KNIT 2.0</h4>
<p class="text-on-surface-variant font-body-md">Sợi dệt kỹ thuật cao cấp, siêu thoáng khí và co giãn đa chiều theo chuyển động tự nhiên.</p>
</div>
</div>
</section>
<!-- Reviews Section - Bento Style -->
<section>
<div class="flex justify-between items-end mb-12">
<h3 class="font-headline-lg text-headline-lg border-l-4 border-secondary pl-6">ĐÁNH GIÁ THỰC TẾ</h3>
<button class="text-label-bold text-secondary underline">XEM TẤT CẢ 128 ĐÁNH GIÁ</button>
</div>
<div class="grid grid-cols-1 md:grid-cols-4 gap-6">
<!-- Main Stats Card -->
<div class="md:col-span-1 bg-surface-container-highest p-8 flex flex-col items-center justify-center text-center">
<div class="text-display-lg font-display-lg text-secondary">4.8</div>
<div class="flex text-secondary mb-4">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="font-label-bold text-on-surface">92% Khách hàng đề xuất sản phẩm này</p>
</div>
<!-- Review Card 1 -->
<div class="md:col-span-3 grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="bg-surface-container-high p-6 border-l-2 border-secondary">
<div class="flex justify-between mb-4">
<span class="font-label-bold text-secondary">TRẦN MINH QUÂN</span>
<span class="text-label-sm text-on-surface-variant">2 ngày trước</span>
</div>
<div class="flex text-secondary text-sm mb-3">
<span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="font-body-md text-on-surface mb-2">"Giày cực kỳ nhẹ và êm. Tôi đã thử chạy 10km đầu tiên và cảm giác lực đẩy từ tấm carbon rất rõ rệt. Đáng đồng tiền bát gạo."</p>
</div>
<div class="bg-surface-container-high p-6 border-l-2 border-secondary">
<div class="flex justify-between mb-4">
<span class="font-label-bold text-secondary">LÊ THỊ HOÀNG YẾN</span>
<span class="text-label-sm text-on-surface-variant">1 tuần trước</span>
</div>
<div class="flex text-secondary text-sm mb-3">
<span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="font-body-md text-on-surface mb-2">"Thiết kế quá đẹp, form ôm chân rất chắc chắn. Màu Hyper Orange ngoài đời nhìn rực rỡ và chuyên nghiệp hơn hẳn trên ảnh."</p>
</div>
</div>
</div>
</section>
</main>
@endsection