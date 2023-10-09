@extends('layouts.template')
@section('main-content')
    <section class="panel w-full h-full sm:h-[100vh] bg-black relative border-none">
        @include('include.nav')
        <div class="w-full flex justify-center items-center flex-col">
            <h1 style="font-family: 'Antonio', sans-serif;"
                class="mb-4 mt-20 text-center text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                Let's do something <span class="text-[#b4ff00]">awesome</span>  together!</h1>
            <p class="mb-6 text-sm font-normal text-white lg:text-sm text-center mt-10 ">We place people at the center of our
                approach. We believe that listening and empathy are essential to achieving excellent results.
            </p>
        </div>
    </section>
    <section class="panel w-full h-full  bg-black relative border-none">
        <div class="w-full flex justify-center items-center ">
            <form class="h-[100vh] w-9/12" method="POST" action="{{ route('contact.store') }}">
                @csrf
                @if (session('success'))
                    <div id="alert-3" class="flex items-center p-4 mb-4 rounded-lg bg-green-100 :text-green-400"
                        role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div class="ml-3 text-sm font-medium">
                            {{ session('success') }}
                        </div>
                        <button type="button"
                            class="ml-auto -mx-1.5 -my-1.5 bg-green-50 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8  text-green-400 "
                            data-dismiss-target="#alert-3" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @endif
                @if (session('error'))
                    <div id="alert-2" class="flex items-center p-4 mb-4 rounded-lg bg-red-100 text-red-400"
                        role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div class="ml-3 text-sm font-medium">
                            {{ session('error') }}
                        </div>
                        <button type="button"
                            class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5  inline-flex items-center justify-center h-8 w-8   "
                            data-dismiss-target="#alert-2" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @endif
                @error('g-recaptcha-response')
                    <div id="alert-2" class="flex items-center p-4 mb-4 rounded-lg bg-red-100 text-red-400" role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div class="ml-3 text-sm font-medium">
                            {{ $message }}
                        </div>
                        <button type="button"
                            class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5  inline-flex items-center justify-center h-8 w-8   "
                            data-dismiss-target="#alert-2" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @enderror
                {{-- nombre --}}
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-3xl font-medium text-gray-900 dark:text-white">
                        WHAT IS YOUR NAME?</label>
                    <input type="text" id="name" name="name" placeholder="Write your name here"
                        class="bg-black border-b-1 border-l-0 border-r-0 border-t-0 border-white text-white text-sm block w-full p-2.5 dark:text-white">
                </div>
                {{-- proyecto --}}
                <div class="mb-6">
                    <label for="project" class="block mb-2 text-3xl font-medium text-gray-900 dark:text-white">
                        TELL US ABOUT YOUR PROJECT.</label>
                    <textarea id="project" name="project" placeholder="Describe your project here"
                        class="bg-black border-b-1 border-l-0 border-r-0 border-t-0 border-white text-white text-sm block w-full p-2.5 dark:text-white"></textarea>
                </div>
                {{-- email --}}
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-3xl font-medium text-gray-900 dark:text-white">
                        WHAT IS YOUR EMAIL?</label>
                    <input type="text" id="email" name="email" placeholder="Leave us your email here"
                        class="bg-black border-b-1 border-l-0 border-r-0 border-t-0 border-white text-white text-sm block w-full p-2.5 dark:text-white">
                </div>
                {{-- plazo --}}
                <div class="mb-6">
                    <label for="deadline" class="block mb-2 text-3xl font-medium text-gray-900 dark:text-white">
                        DO YOU HAVE A DEADLINE FOR THE PROJECT?</label>
                    <textarea id="deadline" name="deadline" placeholder="Tell us a little more about your project"
                        class="bg-black border-b-1 border-l-0 border-r-0 border-t-0 border-white text-white text-sm block w-full p-2.5 dark:text-white"></textarea>
                </div>

                <div class="w-full flex justify-center items-center">
                    <div class="mb-6">
                        <!-- Agregar el widget de reCAPTCHA -->
                        <div class="g-recaptcha" data-sitekey="{{ $recaptchaSiteKey }}"></div>
                    </div>
                </div>


                <div class="w-full flex justify-center">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Send</button>
                </div>
            </form>

        </div>

    </section>
@endsection
