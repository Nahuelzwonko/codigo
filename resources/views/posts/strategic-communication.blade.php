@extends('layouts.temp')
@section('title', 'Strategic Communication | CodeHuit')
@section('main-cont')
    {{-- section 1 --}}
    <section class="panel w-full h-full sm:h-[100vh] bg-black relative border-none p-6">
        @include('include.nav')
        <div class="flex flex-1 w-full flex-col items-center justify-center text-center px-4 py-20 bg-gradient-to-r ">
            <h1
                class="mx-auto max-w-4xl font-display text-4xl font-bold tracking-normal text-white-300 dark:text-gray-300 sm:text-7xl">
                Our approach
                <span class="relative whitespace-nowrap text-white-600 dark:text-gray-300">to </span>
                <span class="relative whitespace-nowrap text-[#b4ff00] ">
                    <svg aria-hidden="true" viewBox="0 0 418 42"
                        class="absolute top-2/3 left-0 h-[0.58em] w-full fill-[#b4ff00] " preserveAspectRatio="none">
                        <path
                            d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.780 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.540-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.810 23.239-7.825 27.934-10.149 28.304-14.005 .417-4.348-3.529-6-16.878-7.066Z">
                        </path>
                    </svg>
                    <span class="relative">communication</span>
                </span>
            </h1>
            <h2 class="mx-auto mt-12 max-w-xl text-lg sm:text-white-400 text-white-500 dark:text-gray-300 leading-7">
                In a world marked by volatility, uncertainty, complexity and ambiguity, where
                misinformation is commonplace and the demands and expectations of stakeholders are increasing, at Azafrán we
                are committed to our clients so that
                thrive in this challenging context.
            </h2>
            {{-- <a class="bg-orange-600 dark:bg-gray-800 rounded-xl text-white dark:text-gray-300 font-medium px-4 py-3 sm:mt-10 mt-8 hover:bg-orange-500 dark:hover:bg-gray-600 transition"
                href="">Get started</a> --}}
        </div>
    </section>
    {{-- section 2 --}}
    <section class="panel w-full h-[140vh] sm:h-[130vh] bg-black relative border-none p-6">
        <div class="flex flex-col">
            <div class="relative flex flex-col items-center max-w-screen-xl  mx-auto md:flex-row sm:px-6 ">
                <div class="flex items-center py-5 md:w-1/2 md:pb-20 md:pt-10 md:pl-10">
                   
                    <div class="relative w-full p-3 rounded  md:p-8">
                        <div class="rounded-lg  text-black w-full">
                            <img src="{{ asset('images/bomba.png') }}" />
                        </div>
                    </div>
                </div>
                <div class="flex items-center py-5 md:w-1/2 md:pb-20 md:pt-10 md:pr-10">
                   
                    <div class="text-left">
                        <p class="max-w-md mx-auto mt-3 text-xl sm:text-2xl text-white font-light  ">
                            At Azafrán, the strategic communication practice is the result of an approach
                            multidisciplinary that includes strategic studies, public affairs management,
                            public relations, marketing, advertising, sustainability and compliance.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <p class=" mx-full text-start sm:text-center text-white font-light text-xl sm:text-2xl ">Our approach to
                    planning
                    Our clients' communication is based on obtaining a deep and exhaustive vision of their
                    organizations and activities, identify and understand their interested parties (stakeholders) and design
                    a plan that contemplates the needs and requirements of its audiences and provides ways to carry out
                    your communications to meet the expected objectives.</p>
            </div>
        </div>
    </section>
    {{-- section 3 --}}
    <section class="panel w-full h-[220vh] sm:h-[120vh] bg-black relative border-none p-6">
        <div class="w-full flex flex-col">
            <div class="w-full flex items-center text-center justify-center text-5xl sm:text-7xl text-white font-extrabold">
                <h1 style="font-family: 'Antonio', sans-serif;" class="uppercase">areas of <span
                        class="text-[#b4ff00]">action</span> </h1>
            </div>
            <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
                    <!-- CARD 1 -->
                    <div class="rounded overflow-hidden shadow-lg flex flex-col">
                        <a href="#"></a>
                        <div class="relative"><a href="#">
                                <img class="w-full" src="{{ asset('images/posts/a.png') }}" alt="Sunset in the mountains">
                                <div
                                    class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                                </div>
                            </a>
                        </div>
                        <div class="px-6 py-4 mb-auto">
                            <a href="#" style="font-family: 'Antonio', sans-serif;"
                                class="font-extrabold text-4xl sm:text-6xl  uppercase text-white  text-center mb-2">
                                CORPORATE</a>
                            <p class="text-white font-light text-lg sm:text-xl">
                                We use an approach with an integrated strategic vision of your business to provide clarity,
                                focus and direction to your organization's efforts in meeting its objectives and
                                management of your interests.
                            </p>
                        </div>
                    </div>
                    <!-- CARD 2 -->
                    <div class="rounded overflow-hidden shadow-lg flex flex-col">
                        <a href="#"></a>
                        <div class="relative"><a href="#">
                                <img class="w-full" src="{{ asset('images/posts/d.png') }}" alt="Sunset in the mountains">
                                <div
                                    class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                                </div>
                            </a>
                        </div>
                        <div class="px-6 py-4 mb-auto">
                            <a href="#" style="font-family: 'Antonio', sans-serif;"
                                class="font-extrabold text-4xl sm:text-6xl   uppercase text-white  text-center mb-2">
                                Governmental
                            </a>
                            <p class="text-white font-light text-lg sm:text-xl ">
                                We work with governments and public sector organizations helping them meet their
                                missions, helping them communicate effectively with citizens and others
                                public of interest.
                            </p>
                        </div>
                    </div>
                    <!-- CARD 3 -->
                    <div class="rounded overflow-hidden shadow-lg flex flex-col">
                        <a href="#"></a>
                        <div class="relative"><a href="#">
                                <img class="w-full" src="{{ asset('images/posts/s.png') }}" alt="Sunset in the mountains">
                                <div
                                    class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                                </div>
                            </a>
                        </div>
                        <div class="px-6 py-4 mb-auto">
                            <a href="#" style="font-family: 'Antonio', sans-serif;"
                                class="font-extrabold text-4xl sm:text-6xl   uppercase text-white  text-center mb-2">
                                Civil society
                            </a>
                            <p class="text-white font-light text-lg sm:text-xl">
                                Civil society organizations face great challenges in trying to attract
                                attention of the public of interest to its missions and its messages. Our work model
                                helps organize your vision and mission, focus on your key audiences and achieve the effects
                                Wanted.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- section 4 --}}
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
