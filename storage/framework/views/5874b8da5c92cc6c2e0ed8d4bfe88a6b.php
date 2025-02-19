<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEANIE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Marcellus&family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('img/logoBar.png')); ?>">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="flex flex-col min-h-screen bg-bg-primary">
    
    <header>
        <?php echo $__env->make('main.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>
    


    <main class="flex-grow">
        
        <div class="flex flex-col md:flex-row justify-center min-h-screen pt-48 px-8 md:px-20 ">
            <!-- Kotak Gambar Pertama -->
            <div class="relative w-full md:w-1/2 aspect-square">
                <img src="https://images.unsplash.com/photo-1517487881594-2787fef5ebf7?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Specialty Coffee"
                    class="absolute inset-0 w-full h-full object-cover rounded-bl-3xl rounded-tl-3xl">
            </div>

            <!-- Kotak Gambar Kedua -->
            <div class="relative w-full py-8 md:w-1/2 aspect-square flex flex-col items-center justify-center bg-cover bg-center rounded-br-3xl rounded-tr-3xl"
                style="background-image: url('img/heroKanan.png')">
                <div class="text-center">
                    <span
                        class="text-font-primary text-[65px] font-normal font-['Marcellus'] uppercase tracking-[3.90px]">Special
                    </span>
                    <span
                        class="text-font-secondary text-[65px] font-normal font-['Marcellus'] uppercase tracking-[3.90px]">coffee</span>
                </div>

                <p class="text-font-primary text-center mb-6 px-20 ">
                    Morbi justo vel diam non leo elementum massa. Molestie ipsum condimentum egestas vitae ut cras
                    aenean enim. Laoreet odio adipiscing auctor scelerisque phasellus nisl faucibus.
                </p>

                <div class="flex space-x-4">
                    <a href="/shop"
                        class="hover:bg-font-primary outline outline-1 outline-font-primary text-font-primary hover:text-bg-primary font-semibold py-2 px-4 rounded-full">
                        Order Now
                    </a>
                </div>
            </div>
        </div>
        

        
        <div class="w-full min-h-max pb-16 pt-24 relative ">
            <img class="aspect-square top-0 absolute left-0 " src="/img/shortKiri.png" />
            <div
                class="w-full pb-24 pt-24 px-8 md:px-48  justify-center items-center text-center text-font-primary text-3xl md:text-4xl font-light  italic font-['Open Sans']  ">
                Morbi justo vel diam non leo elementum massa. Molestie ipsum condimentum egestas vitae ut cras aenean
                enim. Laoreet odio adipiscing auctor scelerisque phasellus nisl faucibus.
            </div>
            <img class="aspect-square top-0 absolute right-0" src="/img/shortKanan.png" />
        </div>
        

        
        
        <div class="w-full flex flex-col md:flex-row justify-center items-center relative md:pt-[160px] px-20 ">
            <div
                class="w-full min-h-fit text-center md:text-left text-font-primary text-3xl md:text-6xl font-normal font-['Marcellus'] uppercase tracking-[3.60px]">
                shop Best coffee
            </div>

            <div class="w-full flex flex-col md:flex-row justify-end items-center   ">
                <div class="flex mt-4 gap-4">
                    <div
                        class=" text-font-primary font-semibold font-['Open Sans'] uppercase  tracking-wider underline underline-offset-8 pr-8">
                        view all
                    </div>
                    <div class=" space-x-4 bg-btn-light rounded-[10px]">
                        <button id="prev-button" class=" text-font-primary py-2 px-2 aspect-square ">
                            <svg class="h-8 w-8 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                    </div>
                    <div class=" space-x-4 bg-font-primary rounded-[10px]">
                        <button id="next-button" class="text-btn-light py-2 px-2 aspect-square">
                            <svg class="h-8 w-8 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="justify-center items-center min-h-fit relative pb-16 pt-8 px-8 md:px-20">
            <div class="w-full">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4" id="menu-container">
                    <?php $__currentLoopData = $bestCoffee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="menu-item flex flex-col justify-start items-start gap-6">
                            <img class="aspect-square rounded-[10px]" src="<?php echo e($item->menu_image); ?>"
                                alt="<?php echo e($item->menu_name); ?>">
                            <div class="flex-col justify-start items-start gap-1.5 flex">
                                <div
                                    class="text-font-primary text-[34px] font-normal font-['Marcellus'] uppercase tracking-widest">
                                    <?php echo e($item->menu_name); ?>

                                </div>
                                <div
                                    class="text-font-secondary text-[33px] font-normal font-['Open Sans'] tracking-wider">
                                    $<?php echo e(number_format($item->price, 2)); ?>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        
        

        
        <div class="w-full min-h-max pt-8 pb-16 px-20 relative  ">
            <div class="flex flex-col md:flex-row justify-between items-center ">
                <div class="flex space-x-4 ">
                    <a class="text-btn-line aspect-square ">
                        <svg class="h-16 w-16 outline outline-1 outline-btn-line rounded-full " fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.6"
                                d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>
                </div>

                <div class="flex flex-col items-center justify-center gap-[21px]">
                    <div
                        class="w-full px-8 md:px-20 justify-center items-center text-center text-font-primary text-3xl md:text-4xl font-light italic font-['Open Sans'] ">
                        “Habitant aliquet sed suspendisse lectus sit gravida sit morbi augue. Porta cursus diam sit
                        velit mi. Maecenas scelerisque tellus nulla ut vitae amet morbi platea blandit vestibulum
                        dignissim.”
                    </div>
                    <div
                        class="w-full px-20 justify-center items-center text-center text-font-primary text-2xl md:text-3xl font-regular font-['Marcellus'] ">
                        SARAH ANDERSON
                    </div>
                </div>

                <div class="flex space-x-4 ">
                    <a class="text-btn-light aspect-square">
                        <svg class="h-16 w-16 bg-font-primary rounded-full" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        

        
        <div class="justify-center items-center min-h-screen relative pt-8 px-8 md:px-20">
            <div class="w-full ">
                <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 ">
                    <?php $__currentLoopData = $categoriesCoffee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="bg-white text-center shadow-md overflow-hidden flex flex-col md:flex-row">
                            <?php if($key % 4 < 2): ?>
                                <div class="w-full md:w-1/2">
                                    <img class="w-full h-full object-cover aspect-square"
                                        src="https://images.unsplash.com/photo-1528048929606-66942bfedecb?q=80&w=1035&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="<?php echo e($item->category_name); ?>">
                                </div>

                                <div
                                    class="w-full md:w-1/2 p-2 flex text-center items-center flex-col justify-center  ">
                                    <div
                                        class="w-full flex flex-col items-center justify-center aspect-square p-6 border-2 border-border">
                                        <div
                                            class="text-font-primary text-2xl font-regular font-['Marcellus'] uppercase tracking-widest mb-4">
                                            <?php echo e($item->category_name); ?>

                                        </div>

                                        <div class="text-font-primary  text-sm font-light font-['Open Sans']">
                                            <?php echo e($item->category_description); ?>

                                        </div>

                                        <a
                                            class="mt-4 text-font-primary py-2 px-4 rounded-lg underline underline-offset-4 inline-block font-semibold font-['Open Sans']">
                                            SHOP CATEGORY
                                        </a>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div
                                    class="w-full md:w-1/2 p-2 flex text-center items-center flex-col justify-center  ">
                                    <div
                                        class="w-full flex flex-col items-center justify-center aspect-square p-6 border-2 border-border">
                                        <div
                                            class="text-font-primary text-2xl font-regular font-['Marcellus'] uppercase tracking-widest mb-4">
                                            <?php echo e($item->category_name); ?>

                                        </div>

                                        <div class="text-font-primary  text-sm font-light font-['Open Sans']">
                                            <?php echo e($item->category_description); ?>

                                        </div>

                                        <a
                                            class="mt-4 text-font-primary py-2 px-4 rounded-lg underline underline-offset-4 inline-block font-semibold font-['Open Sans']">
                                            SHOP CATEGORY
                                        </a>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2">
                                    <img class="w-full h-full object-cover aspect-square"
                                        src="https://images.unsplash.com/photo-1528048929606-66942bfedecb?q=80&w=1035&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="<?php echo e($item->category_name); ?>">
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        

        
        <div
            class="w-full min-h-screen px-8 md:px-20 lg:px-76 py-8 flex flex-col lg:flex-row justify-center items-center gap-10 lg:gap-140">
            <!-- New Arrivals Section -->
            <div class="w-full lg:w-1/2 flex flex-col gap-10  ">
                <div
                    class="text-font-primary text-4xl lg:text-6xl font-normal font-['Marcellus'] uppercase tracking-[3.60px]">
                    New Arrivals
                </div>
                <div class="flex flex-col gap-5 ">
                    <?php $__currentLoopData = $newCoffee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex flex-col lg:flex-row items-start gap-4 lg:gap-18 ">
                            <img class="w-20 h-20 lg:w-90 lg:h-90 rounded-full" src="<?php echo e($item->menu_image); ?>"
                                alt="<?php echo e($item->name); ?>">
                            <div class="w-full flex flex-col gap-3">
                                <div class="flex justify-between items-end gap-1.5">
                                    <div
                                        class="text-font-primary text-xl lg:text-2xl font-normal font-['Marcellus'] uppercase tracking-wider">
                                        <?php echo e($item->menu_name); ?>

                                    </div>
                                    <div class="grow shrink basis-0 h-[0px] border-2 border-dashed border-border">
                                    </div>
                                    <div
                                        class="text-font-primary text-xl lg:text-2xl font-normal font-['Marcellus'] uppercase tracking-wider">
                                        $<?php echo e(number_format($item->price, 2)); ?>

                                    </div>
                                </div>
                                <div
                                    class="text-font-primary text-sm lg:text-base font-light font-['Open Sans'] leading-[28.96px] tracking-tight">
                                    <?php echo e($item->menu_description); ?>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class=" justify-start items-center gap-2.5 inline-flex">
                    <div
                        class="text-font-primary underline underline-offset-8 text-lg font-semibold font-['Open Sans'] uppercase leading-[27px] tracking-wider">
                        View All
                    </div>
                </div>
            </div>

            <!-- Best Selling Section -->
            <div class="w-full lg:w-1/2 flex flex-col gap-10 ">
                <div
                    class="text-font-primary text-4xl lg:text-6xl font-normal font-['Marcellus'] uppercase tracking-[3.60px]">
                    Best Selling
                </div>
                <div class="flex flex-col gap-5">
                    <?php $__currentLoopData = $bestSelling; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex flex-col lg:flex-row items-start  gap-4 lg:gap-18">
                            <img class="w-20 h-20 lg:w-90 lg:h-90 rounded-full" src="<?php echo e($item->menu_image); ?>"
                                alt="<?php echo e($item->name); ?>">
                            <div class="w-full flex flex-col gap-3">
                                <div class="flex justify-between items-end gap-1.5">
                                    <div
                                        class="text-font-primary text-xl lg:text-2xl font-normal font-['Marcellus'] uppercase tracking-wider">
                                        <?php echo e($item->menu_name); ?>

                                    </div>
                                    <div class="grow shrink basis-0 h-[0px] border-2 border-dashed border-border">
                                    </div>
                                    <div
                                        class="text-font-primary text-xl lg:text-2xl font-normal font-['Marcellus'] uppercase tracking-wider">
                                        $<?php echo e(number_format($item->price, 2)); ?>

                                    </div>
                                </div>
                                <div
                                    class="text-font-primary text-sm lg:text-base font-light font-['Open Sans'] leading-[28.96px] tracking-tight">
                                    <?php echo e($item->menu_description); ?>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class=" justify-start items-center gap-2.5 inline-flex">
                    <div
                        class="text-font-primary underline underline-offset-8 text-lg font-semibold font-['Open Sans'] uppercase leading-[27px] tracking-wider">
                        View All
                    </div>
                </div>
            </div>
        </div>
        

        
        <div class="w-full min-h-max py-40 relative ">
            <img class="aspect-square top-0 absolute left-0 " src="/img/shortKiri.png" />
            <img class="aspect-square top-0 absolute right-0" src="/img/shortKanan.png" />

            <div class="w-full min-h-max  rounded-[20px] flex-col justify-start items-center gap-[50px] inline-flex">
                <div class="h-full flex-col justify-start items-center gap-10 flex">
                    <div class="flex-col justify-start items-center gap-2.5 flex">
                        <div
                            class="text-font-primary text-6xl font-normal font-['Marcellus'] uppercase tracking-[3.60px]">
                            Subscribe us</div>
                        <div class="text-font-primary text-base font-light font-['Open Sans'] tracking-tight">
                            Subscribe to our newsletter for discount codes and updates.</div>
                    </div>
                    <div
                        class="self-stretch h-[52px] pl-7 rounded-[200px] border border-border justify-between items-center inline-flex">
                        <div
                            class="text-font-primary text-base font-light font-['Open Sans'] leading-[28.96px] tracking-tight">
                            Write your email address here...
                        </div>
                        <div
                            class=" py-2 px-4 self-stretch rounded-[200px] border border-font-primary justify-center items-center gap-2.5 flex">
                            <div
                                class="text-center text-font-primary text-lg font-semibold font-['Open Sans'] uppercase leading-[27px] tracking-wider">
                                Subscribe
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex gap-4">
                    <img class="aspect-square " src="/img/fb.png" />
                    <img class="aspect-square " src="/img/ig.png" />
                    <img class="aspect-square " src="/img/twt.png" />
                    <img class="aspect-square " src="/img/linkedin.png" />
                    <img class="aspect-square " src="/img/yt.png" />

                </div>
            </div>
        </div>
        

        
        <div
            class="w-full  px-8 md:px-20 py-20 border-t border-b border-font-primary flex flex-wrap justify-center items-center gap-8">
            <div class="flex-1 min-w-[200px] max-w-full flex-col justify-start items-center gap-3.5 inline-flex">
                <img src="/img/service1.png" alt="Quick Delivery" class="w-15 h-15">
                <div class="self-stretch h-[90px] flex-col justify-start items-center gap-1 flex">
                    <div
                        class="self-stretch text-center text-font-primary text-2xl font-normal font-['Marcellus'] uppercase tracking-wider">
                        Quick Delivery</div>
                    <div
                        class="self-stretch text-center text-font-primary text-base font-light font-['Open Sans'] leading-7 tracking-tight">
                        Purus pulvinar feugiat orci dictumst ellentesque ut sem partu rient.</div>
                </div>
            </div>
            <div class="flex-1 min-w-[200px] max-w-full flex-col justify-start items-center gap-3.5 inline-flex">
                <img src="/img/service2.png" alt="Pickup in Store" class="w-15 h-15">
                <div class="self-stretch h-[90px] flex-col justify-start items-center gap-1 flex">
                    <div
                        class="self-stretch text-center text-font-primary text-2xl font-normal font-['Marcellus'] uppercase tracking-wider">
                        Pickup in Store</div>
                    <div
                        class="self-stretch text-center text-font-primary text-base font-light font-['Open Sans'] leading-7 tracking-tight">
                        Orci dictumst ellentesque ut sem partu rient purus pulvinar feugiat.</div>
                </div>
            </div>
            <div class="flex-1 min-w-[200px] max-w-full flex-col justify-start items-center gap-3.5 inline-flex">
                <img src="/img/service3.png" alt="No Shipping Charge" class="w-15 h-15">
                <div class="self-stretch h-[90px] flex-col justify-start items-center gap-1 flex">
                    <div
                        class="self-stretch text-center text-font-primary text-2xl font-normal font-['Marcellus'] uppercase tracking-wider">
                        No Shipping Charge</div>
                    <div
                        class="self-stretch text-center text-font-primary text-base font-light font-['Open Sans'] leading-7 tracking-tight">
                        Eugiat orci dictumst ellentesque ut sem purus pulvinar partu rient.</div>
                </div>
            </div>
            <div class="flex-1 min-w-[200px] max-w-full flex-col justify-start items-center gap-3.5 inline-flex">
                <img src="/img/service4.png" alt="Friendly Service" class="w-15 h-15">
                <div class="self-stretch h-[90px] flex-col justify-start items-center gap-1 flex">
                    <div
                        class="self-stretch text-center text-font-primary text-2xl font-normal font-['Marcellus'] uppercase tracking-wider">
                        Friendly Service</div>
                    <div
                        class="self-stretch text-center text-font-primary text-base font-light font-['Open Sans'] leading-7 tracking-tight">
                        Dictumst ellentesque ut sem purus pulvinar feugiat orci partu rient.</div>
                </div>
            </div>
        </div>
        

        
        <div class="w-full min-h-max px-8 md:px-20 py-40 flex flex-col justify-start items-start gap-10">
            <div class="w-full flex flex-col md:flex-row justify-between items-center gap-4">
                <div
                    class="text-font-primary text-4xl md:text-6xl font-normal font-['Marcellus'] uppercase tracking-[3.60px] text-center md:text-left">
                    Read Our Blogs
                </div>
                <div class="border-b-2 border-[#d0d0d0] justify-center items-center gap-2.5 flex">
                    <div
                        class="text-font-primary text-lg font-semibold font-['Open Sans'] uppercase leading-[27px] tracking-wider">
                        Read Blog posts
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 ">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex flex-col justify-start items-start gap-5">
                        <img class="w-full h-auto rounded-3xl object-cover aspect-square" src="<?php echo e($blog->image); ?>"
                            alt="<?php echo e($blog->title); ?>">
                        <div class="flex flex-col justify-start items-start gap-1.5">
                            <div
                                class="text-font-primary text-2xl font-normal font-['Marcellus'] uppercase tracking-wider">
                                <?php echo e($blog->title); ?>

                            </div>

                            <div
                                class="text-font-primary text-base font-light font-['Open Sans'] leading-7 tracking-tight">
                                <?php echo e($blog->content); ?>

                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        

        
        <div class="flex flex-col items-center gap-4 py-10 px-8 md:px-20">
            <div
                class="text-font-primary text-2xl md:text-[34px] font-normal font-['Marcellus'] uppercase tracking-widest text-center">
                Follow our Instagram #Beanie
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <img class="w-full h-auto rounded-[20px] object-cover aspect-square"
                    src="https://images.unsplash.com/photo-1567880905822-56f8e06fe630?q=80&w=1035&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Instagram Post">
                <img class="w-full h-auto rounded-[20px] object-cover aspect-square"
                    src="https://images.unsplash.com/photo-1567880905822-56f8e06fe630?q=80&w=1035&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Instagram Post">
                <img class="w-full h-auto rounded-[20px] object-cover aspect-square"
                    src="https://images.unsplash.com/photo-1567880905822-56f8e06fe630?q=80&w=1035&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Instagram Post">
                <img class="w-full h-auto rounded-[20px] object-cover aspect-square"
                    src="https://images.unsplash.com/photo-1567880905822-56f8e06fe630?q=80&w=1035&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Instagram Post">
                <img class="w-full h-auto rounded-[20px] object-cover aspect-square"
                    src="https://images.unsplash.com/photo-1567880905822-56f8e06fe630?q=80&w=1035&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Instagram Post">
                <img class="w-full h-auto rounded-[20px] object-cover aspect-square"
                    src="https://images.unsplash.com/photo-1567880905822-56f8e06fe630?q=80&w=1035&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Instagram Post">
            </div>
        </div>
        

        
        <footer class=" py-12 px-8 md:px-20">
            <div class="container  justify-between max-w-full">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 ">
                    <div>
                        <h6
                            class="text-font-primary text-lg font-normal font-['Marcellus'] uppercase tracking-widest mb-4">
                            Menu</h6>
                        <ul
                            class="text-font-primary text-base font-normal font-['Marcellus'] uppercase tracking-widest space-y-2">
                            <li>Home</li>
                            <li>About</li>
                            <li>Shop</li>
                        </ul>
                    </div>
                    <div>
                        <h6
                            class="text-font-primary text-lg font-normal font-['Marcellus'] uppercase tracking-widest mb-4">
                            Information</h6>
                        <ul
                            class="text-font-primary text-base font-normal font-['Marcellus'] uppercase tracking-widest space-y-2">
                            <li>Shop Single</li>
                            <li>Blog</li>
                            <li>Contact</li>
                        </ul>
                    </div>
                    <div>
                        <h6
                            class="text-font-primary text-lg font-normal font-['Marcellus'] uppercase tracking-widest mb-4">
                            Legal</h6>
                        <ul
                            class="text-font-primary text-base font-normal font-['Marcellus'] uppercase tracking-widest space-y-2">
                            <li>Terms & Condition</li>
                            <li>Services</li>
                            <li>Privacy Policy</li>
                        </ul>
                    </div>
                    <div>
                        <h6
                            class="text-font-primary text-lg font-normal font-['Marcellus'] uppercase tracking-widest mb-4">
                            Contact Us</h6>
                        <ul
                            class="text-font-primary text-base font-normal font-['Marcellus'] uppercase tracking-widest space-y-2">
                            <li>Address, Location, 123</li>
                            <li>yourinfo@gmail.com</li>
                            <li>111 333 444 555</li>
                        </ul>
                    </div>
                </div>
            </div>

        </footer>
        
        <div class=" w-full border-b border-font-primary pb-12"></div>
        <div class="text-center py-6 ">
            <span class="text-[#362c27] text-base font-light font-['Open Sans'] leading-7 tracking-tight">&copy;
                2023 Beanie. Designed by </span>
            <span
                class="text-[#362c27] text-base font-normal font-['Open Sans'] underline leading-7 tracking-tight">TemplatesJungle</span>
        </div>
        

        

    </main>



</body>

</html>



<script>
    const menuContainer = document.getElementById('menu-container');
    const menuItems = document.querySelectorAll('.menu-item');
    const prevButton = document.getElementById('prev-button');
    const nextButton = document.getElementById('next-button');
    const visibleItems = 3; // Jumlah item yang ditampilkan

    let startIndex = 0;

    function showMenuItems() {
        for (let i = 0; i < menuItems.length; i++) {
            if (i >= startIndex && i < startIndex + visibleItems) {
                menuItems[i].style.display = 'block';
            } else {
                menuItems[i].style.display = 'none';
            }
        }

        // Disable/enable tombol navigasi
        prevButton.disabled = startIndex === 0;
        nextButton.disabled = startIndex + visibleItems >= menuItems.length;
    }

    showMenuItems(); // Tampilkan item awal

    nextButton.addEventListener('click', () => {
        startIndex += visibleItems;
        showMenuItems();
    });

    prevButton.addEventListener('click', () => {
        startIndex -= visibleItems;
        showMenuItems();
    });
</script>
<?php /**PATH E:\DATA\KERJA\NEXA SEMARANG\Web-Programmer-Challenge\resources\views/main/main.blade.php ENDPATH**/ ?>