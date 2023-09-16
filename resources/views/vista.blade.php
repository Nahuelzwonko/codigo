@extends('layouts.template')

@section('main-content')
    <section class="flex-col flex justify-center align-center bg-black text-white">
        @include('include.nav')
        <div
            class="w-full h-screen flex justify-center sm:justify-between sm:flex-col sm:w-[calc(100% - 120px)] sm:h-[calc(100vh - 120px)] sm:max-h-[60vw] p-16  ">
            <div class="content__first w-full flex ">
                <h1
                    class="mt-52 sm:mt-0 font-extrabold text-start sm:text-center leading-none tracking-tight text-white text-6xl sm:text-9xl  uppercase w-2/4 ">
                    OUR MISSION <span class="text-[#b4ff00]">&</span> VALUES</h1>
                <div class="w-full h-[50vh] hidden md:block   relative overflow-hidden">
                    <video class="absolute inset-0 w-full h-full object-cover" src="{{ asset('videos/inicio.mkv') }}"
                        type="video/x-matroska" muted autoplay loop></video>
                    <div class="relative z-20 h-full flex flex-col justify-center items-center text-start text-white px-4">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="flex-col flex justify-center align-center bg-black text-white">
        <div class="bigText flex ">
            <div class="bigText__inner flex">
                WOOO LET'S GO
                <img src="{{ asset('images/emoji.png') }}" />
                <div class="bigText__sticker bigText__sticker1">Hello</div>
                <div class="bigText__sticker bigText__sticker2">Ciao</div>
                <div class="bigText__sticker bigText__sticker3">こんにちは</div>
                <div class="bigText__sticker bigText__sticker4">Holaa!</div>
            </div>
        </div>
    </section>

    <section class=" bg-black">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
            <h2
                class="mb-8 text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 lg:mb-16 dark:text-white md:text-4xl">
                Let's talk a little about ourselves</h2>
        </div>
    </section>

    <section class=" dark:bg-black flex flex-col">
        <div class="py-2 px-4 mx-auto max-w-screen-xl  lg:px-6">
            <div class="max-w-screen-lg text-white sm:text-lg dark:text-gray-400">
                <h2 class="text-sm  mb-4 text-white "><span class="text-[#b4ff00]">Product</span> vision</h2>
                <p class="mb-4  font-extralight text-white">Our product vision is one of our greatest strengths.
                    We strive to provide a clear vision and
                    details of your product before even starting your
                    design. <br>
                    Ask questions, think and formulate in advance to
                    limit risks and create a relevant product that
                    It will perfectly satisfy the needs of its users.</p>
            </div>
        </div>
        <div class="py-2 px-4 mx-auto max-w-screen-xl  lg:px-6">
            <div class="max-w-screen-lg text-white sm:text-lg dark:text-gray-400">
                <h2 class="text-sm  mb-4 text-white ">The<span class="text-[#b4ff00]"> requirement</span></h2>
                <p class="mb-4  font-extralight text-white">Quality is our priority.
                    We design products and services by researching
                    systematically to achieve excellence.

                    We work hard to exceed your expectations and you
                    offer unique results.

                    Our rigor and attention to detail allow us
                    maintain high standards and ensure their
                    full satisfaction.</p>
            </div>
        </div>
        <div class="py-2 px-4 mx-auto max-w-screen-xl  lg:px-6">
            <div class="max-w-screen-lg text-white sm:text-lg dark:text-gray-400">
                <h2 class="text-sm  mb-4 text-white "><span class="text-[#b4ff00]"> Human</span> focus</h2>
                <p class="mb-4  font-extralight text-white">We put people at the center of
                    Our focus.
                    We believe that listening and empathy are
                    essential to achieve excellent results.
                    We select our talents based on your
                    needs and their different sensitivities.
                    Each project has its own tailored team, united by
                    deep desire to offer the best experience
                    possible.</p>
            </div>
        </div>
        <div class="py-2 px-4 mx-auto max-w-screen-xl  lg:px-6">
            <div class="max-w-screen-lg text-white sm:text-lg dark:text-gray-400">
                <h2 class="text-sm  mb-4 text-white ">AI at the<span class="text-[#b4ff00]"> center </span>of our processes
                </h2>
                <p class="mb-4  font-extralight text-white">We put people at the center of
                    Our focus.
                    We believe that listening and empathy are
                    essential to achieve excellent results.
                    We select our talents based on your
                    needs and their different sensitivities.
                    Each project has its own tailored team, united by
                    deep desire to offer the best experience
                    possible.</p>
            </div>
        </div>
    </section>

    <footer class="bg-black panel w-full h-full sm:h-[100vh] relative border-none">
        <div class="w-full h-full flex justify-center items-center relative">

            <div class="absolute inset-0 z-0 flex justify-center items-center">
                <video class="w-40 h-auto" src="{{ asset('videos/robot.mp4') }}" type="video/mp4" muted autoplay
                    loop></video>
            </div>
            <!-- Contenido del footer (título) -->
            <div class="z-10 text-white text-center">
                <h1 class="text-7xl font-bold uppercase"><a href="{{ route('contact') }}">Let's talk</a></h1>
                <p class="font-extralight text-sm text-center">We develop your future project together now.</p>
            </div>
            <div class="absolute bottom-0 left-0 right-0 p-4 text-white text-center font-extralight text-sm">
                ©Code<span class="text-[#b4ff00]">Huit</span>
            </div>
        </div>
    </footer>
@endsection
