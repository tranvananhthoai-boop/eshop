@extends('layouts.master')

@section('title', 'Category Page')

@section('content')
<h1 class="relative z-50 text-white text-5xl text-center mt-10">
    Category Page
</h1>

     <main class="max-w-container-max mx-auto px-grid-margin-desktop py-base lg:py-12">
  <!-- Category Header -->
  <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
  <div class="max-w-2xl">
  <h1 class="font-display-lg text-display-lg uppercase italic mb-2">RUNNING PERFORMANCE</h1>
  <p class="font-body-lg text-on-surface-variant">Elevate your stride with engineered precision. Our latest running collection features kinetic energy return and lightweight carbon-fiber plates for elite speed.</p>
  </div>
  <div class="flex items-center gap-4 border-b-2 border-surface-container-highest pb-2 w-full md:w-auto">
  <span class="font-label-bold text-on-surface-variant">SẮP XẾP:</span>
  <select class="bg-transparent border-none text-label-bold text-on-surface focus:ring-0 cursor-pointer">
  <option class="bg-surface-container-high">MỚI NHẤT</option>
  <option class="bg-surface-container-high">GIÁ: CAO ĐẾN THẤP</option>
  <option class="bg-surface-container-high">GIÁ: THẤP ĐẾN CAO</option>
  <option class="bg-surface-container-high">PHỔ BIẾN NHẤT</option>
  </select>
  <div class="ml-4 font-label-bold text-secondary">48 SẢN PHẨM</div>
  </div>
  </div>
  <div class="flex flex-col lg:flex-row gap-grid-gutter">
  <!-- Filters Sidebar -->
  <aside class="w-full lg:w-64 flex-shrink-0 space-y-10">
  <!-- Sport Type -->
  <div>
  <h3 class="font-label-bold text-on-surface mb-4 tracking-widest uppercase">LOẠI MÔN THỂ THAO</h3>
  <div class="flex flex-col gap-3">
  <label class="flex items-center gap-3 cursor-pointer group">
  <input class="w-5 h-5 rounded-none border-2 border-surface-container-highest bg-transparent checked:bg-secondary checked:border-secondary focus:ring-0" type="checkbox"/>
  <span class="font-label-bold text-on-surface-variant group-hover:text-secondary transition-colors">Road Running</span>
  </label>
  <label class="flex items-center gap-3 cursor-pointer group">
  <input class="w-5 h-5 rounded-none border-2 border-surface-container-highest bg-transparent checked:bg-secondary checked:border-secondary focus:ring-0" type="checkbox"/>
  <span class="font-label-bold text-on-surface-variant group-hover:text-secondary transition-colors">Trail Running</span>
  </label>
  <label class="flex items-center gap-3 cursor-pointer group">
  <input checked="" class="w-5 h-5 rounded-none border-2 border-surface-container-highest bg-transparent checked:bg-secondary checked:border-secondary focus:ring-0" type="checkbox"/>
  <span class="font-label-bold text-secondary transition-colors">Track &amp; Field</span>
  </label>
  </div>
  </div>
  <!-- Price Range -->
  <div>
  <h3 class="font-label-bold text-on-surface mb-4 tracking-widest uppercase">KHOẢNG GIÁ</h3>
  <div class="space-y-4">
  <input class="w-full h-1 bg-surface-container-highest appearance-none cursor-pointer accent-secondary" max="5000000" min="0" type="range"/>
  <div class="flex justify-between font-label-bold text-on-surface-variant">
  <span>0đ</span>
  <span>5.000.000đ+</span>
  </div>
  </div>
  </div>
  <!-- Size Grid -->
  <div>
  <h3 class="font-label-bold text-on-surface mb-4 tracking-widest uppercase">KÍCH CỠ (EU)</h3>
  <div class="grid grid-cols-4 gap-2">
  <button class="border-2 border-surface-container-highest py-2 font-label-bold text-on-surface hover:border-secondary transition-all">38</button>
  <button class="border-2 border-secondary bg-secondary text-on-secondary py-2 font-label-bold transition-all">39</button>
  <button class="border-2 border-surface-container-highest py-2 font-label-bold text-on-surface hover:border-secondary transition-all">40</button>
  <button class="border-2 border-surface-container-highest py-2 font-label-bold text-on-surface hover:border-secondary transition-all">41</button>
  <button class="border-2 border-surface-container-highest py-2 font-label-bold text-on-surface hover:border-secondary transition-all">42</button>
  <button class="border-2 border-surface-container-highest py-2 font-label-bold text-on-surface hover:border-secondary transition-all">43</button>
  <button class="border-2 border-surface-container-highest py-2 font-label-bold text-on-surface hover:border-secondary transition-all">44</button>
  <button class="border-2 border-surface-container-highest py-2 font-label-bold text-on-surface hover:border-secondary transition-all">45</button>
  </div>
  </div>
  <!-- Colors -->
  <div>
  <h3 class="font-label-bold text-on-surface mb-4 tracking-widest uppercase">MÀU SẮC</h3>
  <div class="flex flex-wrap gap-3">
  <button class="w-8 h-8 rounded-none bg-black ring-2 ring-offset-2 ring-offset-background ring-transparent hover:ring-secondary"></button>
  <button class="w-8 h-8 rounded-none bg-white ring-2 ring-offset-2 ring-offset-background ring-transparent hover:ring-secondary border border-surface-container-highest"></button>
  <button class="w-8 h-8 rounded-none bg-[#fe5f00] ring-2 ring-offset-2 ring-offset-background ring-secondary"></button>
  <button class="w-8 h-8 rounded-none bg-primary ring-2 ring-offset-2 ring-offset-background ring-transparent hover:ring-secondary"></button>
  <button class="w-8 h-8 rounded-none bg-blue-600 ring-2 ring-offset-2 ring-offset-background ring-transparent hover:ring-secondary"></button>
  </div>
  </div>
  <button class="w-full bg-surface-container-highest text-on-surface font-label-bold py-4 uppercase tracking-widest hover:bg-on-surface-variant hover:text-background transition-all duration-300">XÓA TẤT CẢ BỘ LỌC</button>
  </aside>
  <!-- Product Grid -->
  <div class="flex-grow">
  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-grid-gutter">
  <!-- Product Card 1 -->
  <div class="group relative flex flex-col bg-surface-container-high overflow-hidden shadow-[0px_4px_0px_rgba(0,0,0,0.5)]">
  <div class="absolute top-0 right-0 z-10 bg-secondary text-on-secondary px-3 py-1 font-label-bold">NEW</div>
  <div class="aspect-[4/5] overflow-hidden bg-surface-container">
  <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A professional studio shot of a neon orange performance running shoe. The shoe is angled to show its aerodynamic carbon-fiber plate and aggressive tread pattern. It is set against a dark charcoal minimalist background that emphasizes its vibrant color and sharp architectural lines. The lighting is dramatic and high-contrast, highlighting the technical mesh fabric texture." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDXNhEzxRnpotwF2QhzJc_HQdNwhYET7gu_-vhNhfOJ9EcQYGK6wvXgG0z4DQq457W2UcUSuhfLJCzLRBvs7q4KYCEVrPD0YVRVEy9YETae1luCRWK2z86XFgtwn1yYm0gEu5fLxDqnCZtzNclpvIvcwg5b6wCchyzr0Q75HEcDQd3F5sHcC7GJ-ql_mzbqMF97flDKQ55cwCYCEEwGWf0oVlSzrb-qUzA_LxWKINEoT51dNIrJrwxM_MRBTb3gpMU-o0yuzj43NgA"/>
  </div>
  <div class="p-6">
  <div class="text-label-sm text-on-surface-variant uppercase mb-1">ROAD RUNNING</div>
  <h3 class="font-headline-md text-on-surface mb-2 group-hover:text-secondary transition-colors">VELOCITY NITRO 3</h3>
  <div class="font-headline-md text-secondary">3.450.000đ</div>
  </div>
  <button class="absolute bottom-0 left-0 right-0 translate-y-full group-hover:translate-y-0 transition-transform duration-300 bg-secondary text-on-secondary py-4 font-label-bold uppercase">THÊM VÀO GIỎ HÀNG</button>
  </div>
  <!-- Product Card 2 -->
  <div class="group relative flex flex-col bg-surface-container-high overflow-hidden shadow-[0px_4px_0px_rgba(0,0,0,0.5)]">
  <div class="aspect-[4/5] overflow-hidden bg-surface-container">
  <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A side view of a premium white and silver athletic sneaker designed for lifestyle and light training. The shoe features multi-layered textures of suede and mesh in a monochromatic aesthetic. It sits on a dark, reflective surface within a sleek, modern sports facility. The mood is elite and high-performance, with cool-toned studio lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4RDH8TrgY6UPr4me8-xYuShnZVZ34qIIxLjYyk4lZgnNyHWb1uTUlZ5zZnK_GPiHpJK_2h8eViBuCLJ4d4zpyJkk_lmt3Ed08eHzkW3Va8i70Mqbdw2frVzsiwSesxgT5PAppUJGckEHsquoukjaweiI_eNlbpcneL_4QhZNfkdX4AZG86H3mbNZdWFAitppf_lAFjw56czzFj64O5eoeE5UlM0LqyEAm7BQV7QY7BJ4moP1YzXCpwigtBcuV7wQTZdOkEW1-yeM"/>
  </div>
  <div class="p-6">
  <div class="text-label-sm text-on-surface-variant uppercase mb-1">ELITE PERFORMANCE</div>
  <h3 class="font-headline-md text-on-surface mb-2 group-hover:text-secondary transition-colors">APEX STRIDE ELITE</h3>
  <div class="font-headline-md text-on-surface">4.200.000đ</div>
  </div>
  <button class="absolute bottom-0 left-0 right-0 translate-y-full group-hover:translate-y-0 transition-transform duration-300 bg-secondary text-on-secondary py-4 font-label-bold uppercase">THÊM VÀO GIỎ HÀNG</button>
  </div>
  <!-- Product Card 3 -->
  <div class="group relative flex flex-col bg-surface-container-high overflow-hidden shadow-[0px_4px_0px_rgba(0,0,0,0.5)]">
  <div class="absolute top-0 right-0 z-10 bg-secondary text-on-secondary px-3 py-1 font-label-bold">LIMITED</div>
  <div class="aspect-[4/5] overflow-hidden bg-surface-container">
  <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A dark-themed athletic shoe featuring carbon-fiber detailing and deep red accents. The shoe is positioned mid-air as if in motion, highlighting its lightweight construction. The setting is a minimalist, high-contrast studio with sharp geometric shadows on a black floor. The visual style is aggressive and kinetic, focusing on speed and precision engineering." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAfviLABSjTw9O1iBtYZ6yWMZWtbSyW6uXwIjHEuvCHAqQE0twXsWR0tR0d7yg3jAwEZW1dCXD9UeAN33pzdXLCJnynR205O8_oLafi2tzlzSGjgSV8v5W5k0rfkTDHJ500nD6oopPTcdA7j6nIlCq0eImuXclKaLIdhWsyWIEmX4k7fYtXozf1y1f5TI9Q0-Kmm0EwuD4CcFcUzkEHu1eF56fFpeLmqF_4fF-tZW2AGvcBNBX4cDuVhr2iZopEofFZh8VUlG97gLU"/>
  </div>
  <div class="p-6">
  <div class="text-label-sm text-on-surface-variant uppercase mb-1">TRAIL &amp; TRACK</div>
  <h3 class="font-headline-md text-on-surface mb-2 group-hover:text-secondary transition-colors">CARBON X-PRO</h3>
  <div class="font-headline-md text-secondary">5.150.000đ</div>
  </div>
  <button class="absolute bottom-0 left-0 right-0 translate-y-full group-hover:translate-y-0 transition-transform duration-300 bg-secondary text-on-secondary py-4 font-label-bold uppercase">THÊM VÀO GIỎ HÀNG</button>
  </div>
  <!-- Product Card 4 -->
  <div class="group relative flex flex-col bg-surface-container-high overflow-hidden shadow-[0px_4px_0px_rgba(0,0,0,0.5)]">
  <div class="aspect-[4/5] overflow-hidden bg-surface-container">
  <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Close-up of a high-tech running shoe with a unique cellular midsole structure. The shoe is presented in a monochromatic gray and white palette with sharp orange branding. It sits on a architectural concrete surface, under bright, clinical lighting that emphasizes its futuristic design and material innovation. The overall feel is professional and technically advanced." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCgvnDB6EZguJSdZHs-lC1DY3BwUSvMaXnKhXciFFOvdJ9pNTfM57U8ypI1lyc9iTKY_EwBCuYXA5SkAalFuMhpyRY-e0--YoGyCWCWmnTGjsQH1g-xyYpbiXOvZjOUyvToQMVfWLwE0BQDcDCdSFE9hCN5khKhC4W-25CoM3zuR2IR8m3szoaC7gGUfeTF6NTE1SsI7MbXq0jdtdRnp4njdiQCE7BTPu664gb9qMyXUHUsIzTX_vX2PxA2DPHIcrMaB5r-G14XVhY"/>
  </div>
  <div class="p-6">
  <div class="text-label-sm text-on-surface-variant uppercase mb-1">DAILY TRAINER</div>
  <h3 class="font-headline-md text-on-surface mb-2 group-hover:text-secondary transition-colors">CORE FLOW V2</h3>
  <div class="font-headline-md text-on-surface">2.800.000đ</div>
  </div>
  <button class="absolute bottom-0 left-0 right-0 translate-y-full group-hover:translate-y-0 transition-transform duration-300 bg-secondary text-on-secondary py-4 font-label-bold uppercase">THÊM VÀO GIỎ HÀNG</button>
  </div>
  <!-- Product Card 5 -->
  <div class="group relative flex flex-col bg-surface-container-high overflow-hidden shadow-[0px_4px_0px_rgba(0,0,0,0.5)]">
  <div class="aspect-[4/5] overflow-hidden bg-surface-container">
  <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A colorful, high-energy sports shoe featuring a mix of neon green, blue, and electric pink. The shoe is presented in a dynamic, low-angle shot on a professional synthetic running track. The background is slightly blurred, focusing all attention on the shoe's aggressive geometry and performance materials. The lighting is natural but intense, highlighting the vivid color spectrum." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAR0GJYEdVeKmixmnfBuJ5FrCpTupSjMITAv4NIq_ibXqfo498e14JT5IpsZ5j7N7q_Jj58MqPIAQBeLXfpo441CQ5mCLmfyRSMP41_QbCMrxCPL_Mg-NlEGd9VqVl0M7_wVvE-5TorDblhR0yv4DqP9OwaOmaZtNOT3BvRn3a2qo8gTXeMJPgLj_Ge_GFkODQzxNRK8pjZPtA8RJhDG_BRPRleYgWHdMHy64xTasQX_p076Bt8hUIiySO2cCAPf-oqNwew3AvCnzI"/>
  </div>
  <div class="p-6">
  <div class="text-label-sm text-on-surface-variant uppercase mb-1">RACE DAY</div>
  <h3 class="font-headline-md text-on-surface mb-2 group-hover:text-secondary transition-colors">KINETIC SPECTRUM</h3>
  <div class="font-headline-md text-on-surface">4.890.000đ</div>
  </div>
  <button class="absolute bottom-0 left-0 right-0 translate-y-full group-hover:translate-y-0 transition-transform duration-300 bg-secondary text-on-secondary py-4 font-label-bold uppercase">THÊM VÀO GIỎ HÀNG</button>
  </div>
  <!-- Product Card 6 -->
  <div class="group relative flex flex-col bg-surface-container-high overflow-hidden shadow-[0px_4px_0px_rgba(0,0,0,0.5)]">
  <div class="aspect-[4/5] overflow-hidden bg-surface-container">
  <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A sleek black minimalist sneaker with subtle glossy textures. The shoe is displayed against a dark carbon background with a single sharp orange light line reflecting on its side. The style is ultra-modern and premium, emphasizing the shoe's sleek silhouette and architectural form. The mood is sophisticated and mysterious, perfect for an elite athletic brand." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD5KZG9nmafjwTX0nRlHuaTFLPOmly0K-GcO1CH40pLmTIn-NLsTuPuZfPUj1bWc_rJlEr9MnFClevtFRD5mLzvTYRaZHqo_gP08Y3xpnELRRLimdiisXyxNo2jzLCJcBq7gw9S-CN9AXbUGLqR5ULoKVgcABwimXGrFXBxbgbHSGcn5TxJ8aL7ZGfLSaDffu0CR97EXAwcdEeFaaDYzQs1L0jXWK2ARzfFqpiKibJgkREPipPbCdjnQiUmDwMx2z2JxsmqPn1RsMk"/>
  </div>
  <div class="p-6">
  <div class="text-label-sm text-on-surface-variant uppercase mb-1">URBAN LIFESTYLE</div>
  <h3 class="font-headline-md text-on-surface mb-2 group-hover:text-secondary transition-colors">SHADOW PHANTOM</h3>
  <div class="font-headline-md text-on-surface">3.200.000đ</div>
  </div>
  <button class="absolute bottom-0 left-0 right-0 translate-y-full group-hover:translate-y-0 transition-transform duration-300 bg-secondary text-on-secondary py-4 font-label-bold uppercase">THÊM VÀO GIỎ HÀNG</button>
  </div>
  </div>
  <!-- Pagination -->
  <div class="mt-section-gap-mobile flex justify-center items-center gap-4">
  <button class="w-12 h-12 flex items-center justify-center border-2 border-surface-container-highest text-on-surface hover:border-secondary transition-colors">
  <span class="material-symbols-outlined">chevron_left</span>
  </button>
  <button class="w-12 h-12 flex items-center justify-center border-2 border-secondary bg-secondary text-on-secondary font-label-bold">1</button>
  <button class="w-12 h-12 flex items-center justify-center border-2 border-surface-container-highest text-on-surface font-label-bold hover:border-secondary transition-colors">2</button>
  <button class="w-12 h-12 flex items-center justify-center border-2 border-surface-container-highest text-on-surface font-label-bold hover:border-secondary transition-colors">3</button>
  <span class="text-on-surface-variant px-2">...</span>
  <button class="w-12 h-12 flex items-center justify-center border-2 border-surface-container-highest text-on-surface font-label-bold hover:border-secondary transition-colors">8</button>
  <button class="w-12 h-12 flex items-center justify-center border-2 border-surface-container-highest text-on-surface hover:border-secondary transition-colors">
  <span class="material-symbols-outlined">chevron_right</span>
  </button>
  </div>
  </div>
  </div>
  </main>
@endsection