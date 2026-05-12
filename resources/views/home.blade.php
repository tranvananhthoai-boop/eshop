@extends('layouts.master')

@section('title', 'Home Page')

@section('content')
<h1 class="relative z-50 text-white text-5xl text-center mt-10">
    Home Page
</h1>

        <!-- Hero Section -->
<section class="relative min-h-screen flex items-center pt-20 overflow-hidden bg-background">
<div class="absolute inset-0 opacity-10 pointer-events-none select-none">
<div class="font-display-lg text-[40vw] leading-none text-secondary tracking-tighter absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">FAST</div>
</div>
<div class="relative w-full max-w-container-max mx-auto px-grid-margin-desktop grid grid-cols-1 lg:grid-cols-12 items-center gap-grid-gutter">
<div class="lg:col-span-6 z-10">
<div class="inline-block bg-secondary-container text-on-secondary-container px-4 py-1 font-label-bold mb-6">NEW SEASON ARRIVAL</div>
<h1 class="font-display-lg text-display-lg md:text-[120px] md:leading-[110px] mb-8 italic">PHÁ VỠ<br/>MỘI GIỚI HẠN</h1>
<p class="font-body-lg text-on-surface-variant max-w-md mb-10">Khai phá tốc độ tiềm ẩn với dòng sản phẩm Velocity Elite. Thiết kế khí động học cùng công nghệ bọt siêu nhẹ.</p>
<div class="flex flex-wrap gap-6">
<button class="bg-secondary-container text-white font-headline-md px-10 py-4 skew-hover transition-transform duration-150 sharp-shadow">MUA NGAY</button>
<button class="border-2 border-white text-white font-headline-md px-10 py-4 skew-hover transition-transform duration-150">TÌM HIỂU THÊM</button>
</div>
</div>
<div class="lg:col-span-6 relative">
<img alt="Running Shoe" class="w-full h-auto object-contain transform rotate-[-15deg] scale-110 drop-shadow-[0_20px_50px_rgba(254,95,0,0.3)]" data-alt="A professional high-performance neon red running shoe captured in a dynamic action shot, floating against a dark charcoal background with sharp architectural lighting. The lighting emphasizes the technical texture of the mesh and the aggressive curve of the carbon plate sole. High contrast and minimalist aesthetic create a sense of elite speed and premium athletic gear." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4TltoEliTLw1SpVAvlo-ATN_p4VV9kQFn9c7PRWCEwGTstgbHkhW6mrmeTxG7b8_XPc3Z8JOgn27TL2o8YRiUmoJxSSu8Cj_00vdCYUjwBCJxQcb2nFewBppIf_qfueFDQD79qPTX1jvwIpMMF5qgAmx-gp0T_ytj_ym0emqjv2f8DIEv-EF0hdlJ_0b1M0bvwHh2sbjlq_AScyLpkwV5PQ4qkXCM8OePQfi7QmbypvUSLlBCcC1cPWhzI-HrSZoypYBw6PUGfIs"/>
</div>
</div>
</section>

<!-- Category Grid (Bento Style) -->
<section class="py-section-gap-desktop max-w-container-max mx-auto px-grid-margin-desktop">
<h2 class="font-headline-xl text-headline-xl mb-12 border-l-8 border-secondary-container pl-6 uppercase">DANH MỤC NỔI BẬT</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-grid-gutter h-[600px]">
<div class="md:col-span-2 relative group overflow-hidden bg-surface-container-high cursor-pointer">
<img alt="Running Category" class="absolute inset-0 w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105" data-alt="A cinematic low-angle shot of a runner's legs in motion on a modern urban track during twilight. The setting features cool blue and grey tones with sharp neon orange accents reflecting on the wet pavement. The overall mood is intense and focused, showcasing the high-performance lifestyle and athletic precision of the Velocity brand." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDLskRCyrQB2zFwOlveja5bMFY95kOZT8ay_P-LX7NEqZkb6t8qIwqGpoVMiIgoMuHNITTiO71h-BvBJC1ywuxaUGV73PQ7Q-6NzhCsGCq_uCVjwmpIVjlOnN4edgJVg3h0MxGqzNCXf2bcrK7CbrjUK5EVjdPtVePbrXllkXRrrtczN52rtRUJZ6LBo_I6NeeTD7_HzYM4Mmyrvl8HFtcjaVhNtk2PeKWDRiyORgJc2JT0ewfiyZrP60IqVpMh5uDbvuPKL1jBjOY"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
<div class="absolute bottom-10 left-10">
<h3 class="font-headline-lg text-headline-lg text-white mb-2">RUNNING</h3>
<p class="font-label-bold text-secondary-container">KHÁM PHÁ CÔNG NGHỆ CHẠY BỘ &gt;</p>
</div>
</div>
<div class="grid grid-rows-2 gap-grid-gutter">
<div class="relative group overflow-hidden bg-surface-container-high cursor-pointer">
<img alt="Basketball Category" class="absolute inset-0 w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105" data-alt="A close-up of a basketball player's hands gripping a high-quality leather ball on a dark, industrial indoor court. The lighting is dramatic and moody, with high-contrast shadows defining the textures. Neon orange highlights cut through the darkness, aligning with the bold and powerful aesthetic of professional basketball competition." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQKO9BjzYhO3etUgxyv31BJUF2Gq3mlmpPnOsJAtWH1uCxbrSybbhIyxsA-f4wKbLzmmjvZBpkeZCBf5TgMs94hgXTaSRau6EuIelj9tgLRQQCYuvE2SpywQ39fMnGfxOGxbX4LYGNWX4rwDbHerJ-fms0ys9ui2Hc8h_3mRe8PyATg2wJyS8tIBA1uiNHewDGvoOHHatOe30a_1yvli88QJY-W8a9nUTm_6nJT5flWZO8aLvVPS5hF2PUlNzI-ly5qcy2ocldCDc"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
<div class="absolute bottom-6 left-6">
<h3 class="font-headline-md text-headline-md text-white">BASKETBALL</h3>
</div>
</div>
<div class="relative group overflow-hidden bg-surface-container-high cursor-pointer">
<img alt="Training Category" class="absolute inset-0 w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105" data-alt="A wide shot of a modern, brutalist-style gymnasium with concrete walls and stark lighting. A single pair of training shoes sits in the center of the frame, illuminated by a focused spotlight. The atmosphere is quiet yet intense, representing the discipline and strength required in elite training environments." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDKtqlF2qSQx5n-SXsegEEjybeCwK0C7m6wuu8Pr3LXdF-k5oyfdJvEyvxMnrlVhLMI6hGKGwVBLBlQ5gXrMMP85TNDk29t8IGIQVdwzgEiPQHz5_EsGdH4iQlqMnbbI_R9NvTZ7slhMD-ilJJZf9m-cN9S-fH3Ixyl5QO4_557MLNWB58tJbr5lR-cnQ32SQrCtTlE4yZhUKxXdjrxL-ZBJF0PMjZTuj1jpEDw-qg0kKg1iHUkKVG-Q75jjkI0L86qUWUqjAgbyU4"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
<div class="absolute bottom-6 left-6">
<h3 class="font-headline-md text-headline-md text-white">TRAINING</h3>
</div>
</div>
</div>
</div>
</section>

<!-- Best Sellers -->
<section class="py-section-gap-desktop bg-surface-container-lowest">
<div class="max-w-container-max mx-auto px-grid-margin-desktop">
<div class="flex justify-between items-end mb-12">
<div>
<h2 class="font-headline-xl text-headline-xl">BÁN CHẠY NHẤT</h2>
<p class="text-on-surface-variant font-label-bold mt-2">DÀNH RIÊNG CHO HIỆU SUẤT ĐỈNH CAO</p>
</div>
<button class="font-label-bold text-secondary border-b-2 border-secondary pb-1 hover:text-white transition-colors">XEM TẤT CẢ</button>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-grid-gutter">

<!-- Product Card 1 -->
<div class="bg-surface-container-high relative group">
<div class="absolute top-0 right-0 bg-secondary-container text-black font-label-bold px-3 py-1 z-10">NEW</div>
<div class="aspect-square p-8 overflow-hidden">
<img alt="Shoe Product" class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCu6sx2kSocbgBowKma8CtN0eOR4U6YdwZJU9dMG0lfkyRfPSI9OXMSx8IkFQL0HqryGb5h4-9IHF1gXQky0NmSZ3QFHbLWZs8gQ5B2CbZKbt3hJ8tS0flcey-iNa3PDRFrilaSK26xunzwqnkv6z98OXSCDjm3Ta8Go0g8CNs_KxUgt_tmwup1zOShi7zb201AeJAhk8zby9sNTOGqCzDIXgrFYM-V6umgzl5mbz1hEbyPUJ4okbGhHX37RjQYxBglPBxcr-Vr-BI"/>
</div>
<div class="p-6">
<h4 class="font-headline-md text-headline-md text-white">VELOCITY V1 NITRO</h4>
<p class="text-on-surface-variant font-label-sm mb-4">RUNNING / PERFORMANCE</p>
<div class="flex justify-between items-center">
<span class="font-headline-md text-secondary">3,490,000đ</span>
<button class="w-10 h-10 bg-white text-black flex items-center justify-center skew-hover transition-all">
<span class="material-symbols-outlined">add</span>
</button>
</div>
</div>
</div>

</div>
</div>
</section>

<!-- Tech Feature Section -->
<section class="py-section-gap-desktop overflow-hidden">
<div class="max-w-container-max mx-auto px-grid-margin-desktop grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

<div class="order-2 lg:order-1 relative">
<div class="absolute -top-20 -left-20 w-96 h-96 bg-secondary-container/10 blur-[100px] rounded-full"></div>

<div class="relative bg-surface-container-high p-8 lg:p-16 border-l-4 border-secondary-container">
<h2 class="font-display-lg text-headline-xl mb-6">CÔNG NGHỆ ĐỆM KHÍ AIR-CELL</h2>

<p class="font-body-lg text-on-surface-variant mb-8 leading-relaxed">
Đột phá trong nghiên cứu vật liệu. Công nghệ Air-Cell mới cung cấp độ phản hồi năng lượng lên đến 85%, giúp bạn duy trì tốc độ tối đa trong thời gian dài hơn mà không gây mỏi cơ.
</p>

<ul class="space-y-6">
<li class="flex items-start gap-4">
<span class="material-symbols-outlined text-secondary-container">bolt</span>
<div>
<span class="font-label-bold text-white block">SIÊU NHẸ</span>
<span class="text-on-surface-variant text-label-sm">Giảm 20% trọng lượng so với thế hệ trước.</span>
</div>
</li>

<li class="flex items-start gap-4">
<span class="material-symbols-outlined text-secondary-container">auto_graph</span>
<div>
<span class="font-label-bold text-white block">ĐỘ BỀN CỰC HẠN</span>
<span class="text-on-surface-variant text-label-sm">Chịu được hơn 1000km chạy bộ cường độ cao.</span>
</div>
</li>
</ul>

<button class="mt-12 bg-white text-black font-label-bold px-8 py-3 skew-hover transition-all">KHÁM PHÁ CHI TIẾT</button>
</div>
</div>

<div class="order-1 lg:order-2">
<img alt="Tech Detail" class="w-full h-auto object-cover grayscale brightness-75 hover:grayscale-0 transition-all duration-1000" src="https://lh3.googleusercontent.com/aida-public/AB6AXuByXcec6EH4qtsWdONTp_fd1UZtqH6v_TMCjxZ8bXYzT0vQu7vQSKA9e7Q3dPoG-sl2b6qLiVyfluuIXKUqSaoKVaJQBaFUPJODPYsJMpyiq_bva2A20Ls1u3P0bHko-3A9sIhPCZCLByh9uVpYcVieYkzTL23HQoNXIPBfNWV5ZpM6l2kLekPTKBDS9SpJ7iJn7tpRnZyKcn3878bzLXR2N2KaJiqB0LC-WxmfEPrpuWHrykNTu1WBPn7r__8mlk3geVOpatopaiE"/>
</div>

</div>
</section>

<!-- Newsletter/CTA Section -->
<section class="py-section-gap-desktop bg-secondary-container">
<div class="max-w-container-max mx-auto px-grid-margin-desktop text-center">

<h2 class="font-display-lg text-headline-xl text-black mb-4">GIA NHẬP VELOCITY ELITE</h2>

<p class="font-label-bold text-black/70 mb-10 max-w-xl mx-auto">
ĐĂNG KÝ NHẬN THÔNG TIN VỀ CÁC DÒNG SẢN PHẨM LIMITED VÀ ƯU ĐÃI ĐẶC QUYỀN.
</p>

<form class="flex flex-col md:flex-row gap-4 max-w-2xl mx-auto">
<input class="flex-grow bg-black/10 border-2 border-black text-black placeholder:text-black/50 font-label-bold px-6 py-4 focus:ring-0 focus:border-white outline-none" placeholder="EMAIL CỦA BẠN" type="email"/>
<button class="bg-black text-white font-headline-md px-12 py-4 skew-hover transition-all" type="submit">ĐĂNG KÝ</button>
</form>

</div>
</section>
@endsection