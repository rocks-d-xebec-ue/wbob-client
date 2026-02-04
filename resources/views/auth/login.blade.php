@extends('layouts.guest')

@section('content')
    <div class="w-full md:min-w-[440px] md:max-w-[440px] mx-4 md:mx-0">
        <div class="flex flex-col gap-y-[35px] lg:gap-6">
            <h6 class="text-xl sm:text-[22px] font-semibold text-center text-dark-500 w-full !leading-normal">
                আপনার অ্যাকাউন্টে লগইন করুন
            </h6>

            <form class="flex flex-col gap-3.5">
                @csrf

                <div class="relative flex flex-col gap-2">
                    <label for="mobile" class="text-dark-500 font-medium select-none text-base">মোবাইল নম্বর</label>
                    <input type="text" inputmode="numeric" pattern="[0-9]*" id="mobile" name="mobile"
                        placeholder="মোবাইল নম্বর দিন"
                        class="text-sm w-full p-4 border border-natural-300 rounded-lg outline-none focus:outline-none text-dark-500 placeholder:text-dark-200 bg-transparent min-h-12 max-h-12 disabled:bg-slate-200">
                </div>

                <div class="relative flex flex-col gap-2">
                    <label for="password" class="text-dark-500 font-medium select-none text-base">পাসওয়ার্ড</label>
                    <input type="password" id="password" name="password" placeholder="পাসওয়ার্ড দিন"
                        class="text-sm w-full p-4 border border-natural-300 rounded-lg outline-none focus:outline-none text-dark-500 placeholder:text-dark-200 bg-transparent min-h-12 max-h-12">

                    <button class="absolute bottom-4 right-3 text-blue-600" type="button" onclick="togglePassword()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </button>
                </div>

                <button type="submit"
                    class="h-12 lg:h-[58px] rounded-lg w-full text-lg font-semibold mt-2 bg-primary-gradient shadow-md transition-transform active:scale-95">
                    <span class="text-white">লগইন করুন</span>
                </button>
            </form>
        </div>

        <div class="mt-4 flex justify-center">
            <p class="text-dark-500 text-center group w-max">
                একাউন্ট নেই?
                <a draggable="false" class="ml-1 font-semibold text-gradient group-hover:underline decoration-blue-500"
                    href="/register">
                    নিবন্ধন করুন
                </a>
            </p>
        </div>
    </div>
@endsection
