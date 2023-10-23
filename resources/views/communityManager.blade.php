@extends('layouts.temp')
@section('title', 'Community Manager | CodeHuit')
@section('main-cont')
    {{-- section 1 --}}
    <section class="panel w-full h-full sm:h-[100vh] bg-black relative border-none p-6">
        @include('include.nav')
        <div class="w-full flex justify-center items-center flex-col mx-3">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 mb-8 md:mb-0 mt-5">
                    <h1 style="font-family: 'Antonio', sans-serif; "
                        class="text-white tracking-tight font-extrabold uppercase text-5xl sm:text-7xl mb-6">
                        We exist to promote the development and <span class="text-[#b4ff00]">evolution</span> of our clients
                        and our value chain.</h1>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('images/illustration.png') }}" alt="s"
                        class="w-ml sm:w-full rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>
    {{-- section 2 --}}
    <section class="panel w-full h-[100vh] sm:h-[120vh] bg-black relative">
        <div class="w-full mx-auto">
            <div class="w-full h-[50vh] mx-auto grid grid-cols-1 sm:grid-cols-2 gap-3  not-prose items-center">
                <a href="#" target="_blank"
                    class="relative flex flex-col items-start justify-between p-6 bg-black group">
                    <div class="flex items-center justify-between w-full  ">
                        <h1 class="text-white text-2xl sm:text-6xl  uppercase">what do<br> <span
                                class="text-[#b4ff00] uppercase font-extrabold text-4xl sm:text-6xl "
                                style="font-family: 'Antonio', sans-serif; ">we do</span><span
                                class="uppercase font-extrabold" style="font-family: 'Antonio', sans-serif; ">?</span></h1>

                    </div>
                    <span class="relative text-xl sm:text-2xl font-extralight text-white">We develop solutions in strategic
                        communication, technology, advertising, marketing and digital transformation.</span>
                </a>
                <a href="#" target="_blank"
                    class="relative flex flex-col items-start justify-between p-6 bg-black group">
                    <div class="flex items-center justify-between w-full">
                        <h1 class="text-white text-2xl sm:text-6xl uppercase">What inspires<br> <span
                                class="text-[#b4ff00] uppercase font-extrabold text-4xl sm:text-6xl"
                                style="font-family: 'Antonio', sans-serif; ">us</span><span
                                class="uppercase font-extrabold " style="font-family: 'Antonio', sans-serif; ">?</span></h1>
                    </div>
                    <span class="relative text-xl sm:text-2xl font-extralight  text-white">We face challenges with
                        creativity, inventiveness, courage and empathy.</span>
                </a>
            </div>
            <div class="bg-black w-full p-6 mt-10 sm:mt-0 ">
                <div class="mx-auto flex  md:flex-row flex-col">
                    <div class="lg:flex-grow  flex flex-col ">
                        <h1
                            class="text-4xl sm:text-8xl tracking-[7px] sm:tracking-[3px]  font-thin leading-[30px] sm:leading-[60px] uppercase text-white">
                            our <br> <span style="font-family: 'Antonio', sans-serif; "
                                class="font-extrabold tracking-[0px] text-6xl sm:text-9xl">services</span>
                        </h1>
                    </div>
                    <div class="">
                        <p class="relative text-xl sm:text-2xl font-extralight  text-white">
                            We have a multidisciplinary team prepared to analyze expectations and needs
                            of our clients, detect strengths and opportunities for improvement, on which to develop
                            a work plan.
                        </p>
                        <p class="relative text-xl sm:text-2xl font-extralight  text-white">
                            We study the environment to help organizations of a public or private nature by implementing a
                            comprehensive approach that includes strategy, creativity and planning, advertising and
                            marketing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div></div>
    </section>
    {{-- section 3 --}}
    <section class="panel w-full h-[270vh] sm:h-[120vh] bg-black relative">
        <div
            class="grid  p-6 grid-cols-1  mt-8 text-center gap-y-4 sm:gap-x-8 sm:grid-cols-2 lg:grid-cols-3 sm:mt-12 lg:mt-20 sm:text-left">
            {{-- comunicacion --}}
            <div class="relative ">
                <div class="relative overflow-hidden bg-white shadow-md rounded-xl h-full">
                    <div class="  rounded-lg flex justify-center items-center h-full">
                        <div class="flex flex-col items-center justify-center w-full h-full">
                            <div class="p-4 ">
                                <h2
                                    class="mb-2 block font-sans text-3xl  leading-snug tracking-normal text-blue-gray-900 antialiased">
                                    strategic
                                </h2>
                                <h1 style="font-family: 'Antonio', sans-serif; "
                                    class="mb-2 block font-sans text-4xl sm:text-6xl font-extrabold uppercase text-blue-gray-900 antialiased">
                                    communication
                                </h1>
                            </div>
                            <a href="{{ route('communication') }}"
                                class="mt-3 font-bold text-black hover:text-green-500 inline-flex justify-start items-start">Learn
                                More
                                <svg class="bg-[#191A23] text-[#b4ff00] w-7 h-7 ml-2 rounded-2xl" fill="none"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Marketing --}}
            <div class="overflow-hidden bg-[#b4ff00] shadow-md rounded-xl">
                <div class="relative overflow-hidden bg-[b4ff00] shadow-md rounded-xl h-full">
                    <div class="  rounded-lg flex justify-center items-center h-full">
                        <div class="flex flex-col items-center justify-center w-full h-full">
                            <div class="p-4 ">
                                <h1
                                    class="mb-2 block font-sans text-3xl  leading-snug tracking-normal text-white antialiased">
                                    advertising and
                                </h1>
                                <h1 style="font-family: 'Antonio', sans-serif; "
                                    class="mb-2 block font-sans text-4xl sm:text-6xl font-extrabold uppercase text-white antialiased">
                                    marketing
                                </h1>
                            </div>
                            <a href="{{ route('marketing') }}"
                                class="mt-3 font-bold text-black hover:text-white inline-flex justify-start items-start">Learn
                                More
                                <svg class="bg-[#191A23] text-white w-7 h-7 ml-2 rounded-2xl" fill="none"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- tech --}}
            <div class="relative">
                <div class="relative overflow-hidden bg-[#191A23] shadow-md rounded-xl h-full">
                    <div class="  rounded-lg flex justify-center items-center h-full">
                        <div class="flex flex-col items-center justify-center w-full h-full">
                            <div class="p-4 ">
                                <h1
                                    class="mb-2 block font-sans text-3xl  leading-snug tracking-normal text-[#b4ff00] antialiased">
                                    technology
                                </h1>
                                <h2 style="font-family: 'Antonio', sans-serif; "
                                    class="mb-2 block font-sans text-4xl sm:text-6xl font-extrabold uppercase text-[#b4ff00] antialiased">
                                    laboratory
                                </h2>
                            </div>
                            <a href="{{ route('technology') }}"
                                class="mt-3 font-bold text-white hover:text-green-500 inline-flex justify-start items-start">Learn
                                More
                                <svg class="bg-[#b4ff00] text-white w-7 h-7 ml-2 rounded-2xl" fill="none"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- desabilitado --}}
            <div class="overflow-hidden bg-[#b4ff00] shadow-md rounded-xl">
                <div class="relative overflow-hidden bg-[b4ff00] shadow-md rounded-xl h-full">
                    <div class="  rounded-lg flex justify-center items-center h-full">
                        <div class="flex flex-col items-center justify-center w-full h-full">
                            <div class="p-4 ">
                                <h1
                                    class="mb-2 block font-sans text-3xl  leading-snug tracking-normal text-white antialiased">
                                    digital
                                </h1>
                                <h1 style="font-family: 'Antonio', sans-serif;"
                                    class="mb-2 block font-sans text-4xl sm:text-6xl font-extrabold uppercase text-white antialiased">
                                    transformation
                                </h1>
                            </div>
                            <a href="#" @disabled(true)
                                class="mt-3 font-bold text-gray-500  inline-flex justify-start items-start">Learn
                                More
                                <svg class="bg-[#191A23] text-white w-7 h-7 ml-2 rounded-2xl" fill="none"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- desabilitado --}}
            <div class="relative">
                <div class="relative overflow-hidden bg-white shadow-md rounded-xl h-full">
                    <div class="  rounded-lg flex justify-center items-center h-full">
                        <div class="flex flex-col items-center justify-center w-full h-full">
                            <div class="p-4 ">
                                <h1
                                    class="mb-2 block font-sans text-3xl  leading-snug tracking-normal text-blue-gray-900 antialiased">
                                    content
                                </h1>
                                <h1 style="font-family: 'Antonio', sans-serif; "
                                    class="mb-2 block font-sans text-4xl sm:text-6xl font-extrabold uppercase text-blue-gray-900 antialiased">
                                    creation
                                </h1>
                            </div>
                            <a href="#"  @disabled(true)
                                class="mt-3 font-bold text-gray-400 inline-flex justify-start items-start">Learn
                                More
                                <svg class="bg-[#191A23] text-[#b4ff00] w-7 h-7 ml-2 rounded-2xl" fill="none"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- desabilitado --}}
            <div class="overflow-hidden bg-[#191A23] shadow-md rounded-xl">
                <div class="relative overflow-hidden bg-[#191A23] shadow-md rounded-xl h-full">
                    <div class="  rounded-lg flex justify-center items-center h-full">
                        <div class="flex flex-col items-center justify-center w-full h-full">
                            <div class="p-4 ">
                                <h1
                                    class="mb-2 block font-sans text-3xl  leading-snug tracking-normal text-[#b4ff00] antialiased">
                                    email
                                </h1>
                                <h1 style="font-family: 'Antonio', sans-serif; "
                                    class="mb-2 block font-sans text-4xl sm:text-6xl font-extrabold uppercase text-[#b4ff00] antialiased">
                                    marketing
                                </h1>
                            </div>
                            <a href="#" @disabled(true)
                                class="mt-3 font-bold text-gray-400 inline-flex justify-start items-start">Learn
                                More
                                <svg class="bg-[#b4ff00] text-white w-7 h-7 ml-2 rounded-2xl" fill="none"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    {{-- section 4 --}}
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
    {{-- section 5 --}}
    <section class="panel w-full h-[80vh] sm:h-[80vh] bg-black relative">
        <div class=" px-4 mx-auto flex items-center">
            <div class="text-center">
                <h1 style="font-family: 'Antonio', sans-serif; "
                    class=" mx-auto text-3xl font-extrabold tracking-normal text-white sm:text-3xl md:text-5xl lg:text-6xl md:leading-none ">
                    <span class="block">We are a team of professionals with extensive experience</span>
                </h1>
                <h2 class="px-0 sm:px-12 mx-auto mt-1 font-normal text-white text-md text-sm sm:text-xl  md:mt-5 ">
                    We have extensive experience in different markets and in various disciplines: strategy, business
                    science,
                    data, communication, marketing, international relations, cybersecurity, sustainability and CSR,
                    technology and innovation.
                </h2>
            </div>
        </div>


    </section>
    {{-- section 6 --}}
    <footer class="bg-black panel w-full h-full sm:h-[100vh] relative border-none">
        <div class="w-full h-full flex justify-center items-center relative">
            <!-- Video de fondo -->

            <div class="absolute inset-0 z-0 flex justify-center items-center">
                <video class="w-40 h-auto" src="{{ asset('videos/robot.mp4') }}" type="video/mp4" muted autoplay
                    loop></video>
            </div>
            <!-- Contenido del footer (título) -->
            <div class="z-10 text-white text-center">
                <h1 style="font-family: 'Antonio', sans-serif;" class="text-7xl font-bold uppercase"><a
                        href="{{ route('contact') }}">Let's <span class="text-[#b4ff00]">talk</span></a></h1>
                <p class="font-extralight text-sm text-center">We develop your future project together now.</p>
            </div>
            <div style="font-family: 'Antonio', sans-serif;"
                class="absolute bottom-0 left-0 right-0 p-4 text-white text-center font-extralight text-sm">
                ©Code<span class="text-[#b4ff00]">Huit</span>
            </div>
        </div>
    </footer>
@endsection
