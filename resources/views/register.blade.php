@extends('layouts.master')

@section('title', 'Category Page')

@section('content')
<h1 class="relative z-50 text-white text-5xl text-center mt-10">
    Register Page
</h1>
<main class="min-h-screen grid grid-cols-1 md:grid-cols-12 gap-0 relative">
<!-- Visual Section (Hidden on Mobile for focused registration, or visible as banner) -->
<section class="hidden md:block md:col-span-6 relative overflow-hidden bg-surface-container-low">
<div class="absolute inset-0 z-10 bg-gradient-to-r from-background/20 to-transparent"></div>
<img alt="Velocity Member Benefits" class="absolute inset-0 w-full h-full object-cover grayscale contrast-125 opacity-70" data-alt="A professional studio photograph of a high-performance orange sneaker with sharp architectural lines, set against a dark charcoal background. The lighting is dramatic and high-contrast, emphasizing the sleek textures and technical mesh of the shoe. The overall aesthetic is elite, kinetic, and minimalist, using a color palette of deep carbon blacks and vibrant neon orange accents to convey speed and precision." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAjonfZkMlRsXhRwqiuGhPivFpKleGlsJsKNH3TRZmsZ8JeAZUAgDc_KktLFJ__gqEVV9sE07QUA0RCgulCE1pCnmE7_LI3QIbIQcG6vkD7CGawnELAgDL2at7UJVscecgKP0Jn3BtuaCWYoVXoOym9hL5scaATiVcJX5wGs9gmWZiHJ6h0uxHLD3GyVZpzpmvYQEPR_vmuIeyt-lp3lxEw3wjIuiRFqAdKdhHQ8g3BvCKR7AUVNhYLEdCH9AN9sp1Ct-kRJHq3y2o"/>
<div class="absolute inset-0 flex flex-col justify-end p-grid-margin-desktop z-20">
<div class="bg-secondary-container text-on-secondary-fixed inline-block px-4 py-2 font-headline-md w-fit mb-4 skew-x-[-12deg]">
                    GIA NHẬP ĐỘI NGŨ
                </div>
<h1 class="font-display-lg text-display-lg text-on-surface uppercase mb-6 leading-none">VƯỢT TRỘI <br/> MỖI GIÂY</h1>
<p class="font-body-lg text-body-lg text-primary max-w-md">
                    Trở thành thành viên VELOCITY để nhận ngay các đặc quyền dành riêng cho vận động viên chuyên nghiệp.
                </p>
</div>
</section>
<!-- Registration Form Section -->
<section class="col-span-1 md:col-span-6 flex items-center justify-center py-section-gap-mobile md:py-section-gap-desktop px-base md:px-grid-margin-desktop bg-surface">
<div class="w-full max-w-xl">
<!-- Promo Banner -->
<div class="bg-surface-container-high p-8 mb-10 border-l-4 border-secondary-container custom-shadow">
<div class="flex items-start gap-4">
<span class="material-symbols-outlined text-secondary-container text-4xl" style="font-variation-settings: 'FILL' 1;">bolt</span>
<div>
<h3 class="font-headline-md text-headline-md text-on-surface mb-2">ƯU ĐÃI THÀNH VIÊN</h3>
<ul class="space-y-3 font-label-bold text-on-surface-variant">
<li class="flex items-center gap-2">
<span class="material-symbols-outlined text-secondary-container text-sm">check_circle</span>
                                    GIẢM GIÁ 15% CHO ĐƠN HÀNG ĐẦU TIÊN
                                </li>
<li class="flex items-center gap-2">
<span class="material-symbols-outlined text-secondary-container text-sm">check_circle</span>
                                    CẬP NHẬT MẪU MỚI SỚM NHẤT (EARLY ACCESS)
                                </li>
<li class="flex items-center gap-2">
<span class="material-symbols-outlined text-secondary-container text-sm">check_circle</span>
                                    MIỄN PHÍ VẬN CHUYỂN TOÀN QUỐC
                                </li>
</ul>
</div>
</div>
</div>
<!-- Registration Form -->
<form class="space-y-8">
<div>
<h2 class="font-headline-lg text-headline-lg text-on-surface uppercase mb-2">ĐĂNG KÝ TÀI KHOẢN</h2>
<p class="font-body-md text-on-surface-variant">Đã có tài khoản? <a class="text-secondary hover:underline transition-all" href="#">Đăng nhập ngay</a></p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-grid-gutter">
<div class="space-y-2">
<label class="font-label-bold text-label-bold text-on-surface block">HỌ</label>
<input class="w-full bg-surface-container-low border border-surface-container-highest p-4 font-body-md text-on-surface focus:border-secondary-container transition-colors rounded-none" placeholder="Vd: Nguyễn" type="text"/>
</div>
<div class="space-y-2">
<label class="font-label-bold text-label-bold text-on-surface block">TÊN</label>
<input class="w-full bg-surface-container-low border border-surface-container-highest p-4 font-body-md text-on-surface focus:border-secondary-container transition-colors rounded-none" placeholder="Vd: Thành" type="text"/>
</div>
</div>
<div class="space-y-2">
<label class="font-label-bold text-label-bold text-on-surface block">EMAIL TRUY CẬP</label>
<input class="w-full bg-surface-container-low border border-surface-container-highest p-4 font-body-md text-on-surface focus:border-secondary-container transition-colors rounded-none" placeholder="example@velocity.com" type="email"/>
</div>
<div class="space-y-2">
<label class="font-label-bold text-label-bold text-on-surface block">MẬT KHẨU</label>
<input class="w-full bg-surface-container-low border border-surface-container-highest p-4 font-body-md text-on-surface focus:border-secondary-container transition-colors rounded-none" placeholder="Tối thiểu 8 ký tự" type="password"/>
</div>
<div class="flex items-start gap-3 py-2">
<input class="mt-1 w-5 h-5 border-2 border-surface-container-highest bg-transparent checked:bg-secondary-container checked:border-secondary-container focus:ring-0 rounded-none cursor-pointer" type="checkbox"/>
<p class="font-body-md text-on-surface-variant text-sm">
                            Tôi đồng ý nhận các thông tin cập nhật về sản phẩm, sự kiện và các chương trình khuyến mãi từ VELOCITY qua email. Tôi có thể hủy đăng ký bất kỳ lúc nào.
                        </p>
</div>
<div class="pt-4">
<button class="w-full bg-secondary-container text-on-secondary-fixed font-headline-md text-headline-md py-6 slant-hover uppercase tracking-widest custom-shadow" type="submit">
                            GIA NHẬP VELOCITY
                        </button>
</div>
<div class="text-center">
<p class="font-label-sm text-on-surface-variant">
                            Bằng cách tạo tài khoản, bạn đồng ý với <a class="underline" href="#">Điều khoản Dịch vụ</a> và <a class="underline" href="#">Chính sách Bảo mật</a> của chúng tôi.
                        </p>
</div>
</form>
</div>
</section>
</main>
@endsection