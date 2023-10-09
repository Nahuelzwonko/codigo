@extends('layouts.template')
@section('main-content')
    @include('include.banner')
    {{-- section 1 --}}
    <section class="panel w-full h-full sm:h-[100vh] bg-black relative border-none">
        @include('include.nav')
        <div class="relative z-10 h-full flex flex-col justify-center items-center text-white">
            <h1 style="font-family: 'Antonio', sans-serif;"
                class="mb-4 text-6xl mt-20 sm:mt-0 text-center font-extrabold md:text-9xl lg:text-6xl   text-white   uppercase">
                Digital, Creative & Immersive
            </h1>
            <p class="text-sm text-center">We think and design unique experiences for the innovative products of tomorrow.
            </p>
        </div>
        <div class="absolute inset-0 z-0 top-40 md:top-0    video-container md:order-first ">
            <video class="absolute inset-0 w-screen sm:w-full " src="{{ asset('videos/inicio.mkv') }}" type="video/x-matroska"
                muted autoplay loop></video>
        </div>
    </section>
    {{-- section 2 --}}
    <section class="panel w-full h-[100vh] sm:h-[120vh] bg-black relative">
        <div class="grid grid-cols-1 md:grid-cols-2 h-[100vh] sm:h-[120vh]">
            <div class="w-full flex justify-center items-center h-full border-none">
                <video class="w-full" src="{{ asset('videos/infitine.mkv') }}" alt="" type="video/x-matroska" muted
                    autoplay loop>
            </div>
            <div class="p-8 md:p-16 flex flex-col justify-center ">
                <h2 style="font-family: 'Antonio', sans-serif;" class="text-sm mb-4 text-white">Bring your ideas to life.</h2>
                <p class="text-3xl md:text-4xl font-extralight text-white">We share our expertise and knowledge to turn your
                    wildest projects into unique experiences. Explore our variety of experiences, each adding a unique
                    dimension to your vision.</p>
            </div>
        </div>
    </section>
    {{-- section 3 --}}
    <section class="panel  demo-text " style="height:60vh">
        <div class="marquee bg-black text-white">
            <div class="marquee__inner" aria-hidden="true" ref="inner">
                <div class="marquee__part uppercase">
                    Your future project now.
                </div>
                <div class="marquee__part uppercase">
                    Your future project now.
                </div>
            </div>
        </div>
    </section>
    {{-- section 4 --}}
    <section class="w-full  bg-black panel">
        {{-- <div class="w-full flex justify-between flex-col">
            <div class="py-6 sm:py-8 lg:py-12 w-full">
                <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                    <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8 items-center mt-20">
                        <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg  md:h-80">
                            <img src="{{ asset('images/1.png') }}" loading="lazy"
                                class="absolute  h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                            <div
                                class="pointer-events-none absolute  bg-gradient-to-t  via-transparent to-transparent opacity-50">
                            </div>
                            <span
                                class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg uppercase">Space
                                | DEV</span>
                        </a>
                        <a href="#"
                            class="group relative flex h-48 items-end overflow-hidden rounded-lg  md:col-span-2 md:h-80">
                            <img src="{{ asset('images/2.png') }}" loading="lazy"
                                class="absolute  h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                            <div
                                class="pointer-events-none absolute  bg-gradient-to-t  via-transparent to-transparent opacity-50">
                            </div>
                            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">CKFM | DEV |
                                CM</span>
                        </a>
                        <a href="#"
                            class="group relative flex h-48 items-end overflow-hidden rounded-lg  md:col-span-2 md:h-80">
                            <img src="{{ asset('images/6.png') }}" loading="lazy"
                                class="absolute  h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                            <div
                                class="pointer-events-none absolute  bg-gradient-to-t  via-transparent to-transparent opacity-50">
                            </div>
                            <span
                                class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg uppercase">benticuaga
                                | ecommerce | branding</span>
                        </a>
                        <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg  md:h-80">
                            <img src="{{ asset('images/4.png') }}" loading="lazy"
                                class="absolute  h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                            <div
                                class="pointer-events-none absolute  bg-gradient-to-t  via-transparent to-transparent opacity-50">
                            </div>
                            <span
                                class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg uppercase">VIA
                                VENETO | system</span>
                        </a>
                        <!-- image - end -->
                    </div>
                </div>
            </div>
            <div class="marquee bg-black text-white">
                <div class="marquee__inner" aria-hidden="true" ref="inner">
                    <div class="marquee__part uppercase">
                        Your future project now.
                    </div>
                    <div class="marquee__part uppercase">
                        Your future project now.
                    </div>

                </div>
            </div>
        </div> --}}

        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
            <div class="grid">
                <div>
                    <img class="h-auto max-w-full mb-1  " src="{{ asset('images/1a.png') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full mb-1 " src="{{ asset('images/5a.png') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full mb-1 " src="{{ asset('images/9a.png') }}" alt="">
                </div>
            </div>
            <div class="grid">
                <div>
                    <img class="h-auto max-w-full mb-1 " src="{{ asset('images/2a.png') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full mb-1 " src="{{ asset('images/6a.png') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full mb-1 " src="{{ asset('images/10a.png') }}" alt="">
                </div>
            </div>
            <div class="grid">
                <div>
                    <img class="h-auto max-w-full mb-1 " src="{{ asset('images/3a.png') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full mb-1 " src="{{ asset('images/7a.png') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full mb-1 " src="{{ asset('images/11a.png') }}" alt="">
                </div>
            </div>
            <div class="grid">
                <div>
                    <img class="h-auto max-w-full mb-1 " src="{{ asset('images/4a.png') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full mb-1 " src="{{ asset('images/8a.png') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full mb-1 " src="{{ asset('images/12a.png') }}" alt="">
                </div>
            </div>
        </div>

    </section>
    {{-- section 6 --}}
    <section class="w-full h-[120vh] relative bg-white">
        <div class="grid grid-cols-1 md:grid-cols-2 h-[120vh]">
            <div class="p-8 md:p-16 flex flex-col text-start justify-center">
                <h2 style="font-family: 'Antonio', sans-serif;" class="text-sm  mb-4 text-black">Our culture.</h2>
                <p class="text-3xl   text-black">
                    Humanity and the relentless pursuit of excellence are fundamental elements in the values and culture of
                    our teams. Whether it's in developing a product from its inception to its launch phase or in the work of
                    designers and developers, our aim is always to achieve excellence in ambitious and innovative design
                    projects.</p>
            </div>
            <div class="w-full flex justify-center items-center h-full">
                <img src="{{ asset('videos/robot.jpg') }}" alt="">
            </div>
        </div>
    </section>
    {{-- section 5 --}}
    <div class="marquee">
        <div class="marquee__inner" aria-hidden="true" ref="inner">
            <div class="marquee__part uppercase">
                We build the product, you focus on the business -
            </div>
            <div class="marquee__part uppercase">
                We build the product, you focus on the business -
            </div>

        </div>
    </div>
    {{-- section 7 --}}
    <footer class="bg-black panel w-full h-full sm:h-[100vh] relative border-none">
        <div class="w-full h-full flex justify-center items-center relative">
            <!-- Video de fondo -->

            <div class="absolute inset-0 z-0 flex justify-center items-center">
                <video class="w-40 h-auto" src="{{ asset('videos/robot.mp4') }}" type="video/mp4" muted autoplay
                    loop></video>
            </div>
            <!-- Contenido del footer (título) -->
            <div class="z-10 text-white text-center">
                <h1 style="font-family: 'Antonio', sans-serif;" class="text-7xl font-bold uppercase"><a href="{{ route('contact') }}">Let's <span class="text-[#b4ff00]">talk</span></a></h1>
                <p class="font-extralight text-sm text-center">We develop your future project together now.</p>
            </div>
            <div style="font-family: 'Antonio', sans-serif;" class="absolute bottom-0 left-0 right-0 p-4 text-white text-center font-extralight text-sm">
                ©Code<span class="text-[#b4ff00]">Huit</span>
            </div>
        </div>
    </footer>
@endsection
