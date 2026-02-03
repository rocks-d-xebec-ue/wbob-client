@extends('layouts.guest')

@section('content')
    <div class="text-center mb-8">
        <h2 class="text-xl font-bold text-gray-800">আপনার অ্যাকাউন্টে লগইন করুন</h2>
    </div>

    <form class="flex flex-col gap-3.5 px-4">
        @csrf

        <div>
            <label for="mobile_number" class="block text-md font-medium text-gray-700 mb-1">
                মোবাইল নম্বর
            </label>
            <input id="mobile_number" type="text" name="mobile_number" placeholder="মোবাইল নম্বর দিন"
                class="w-full px-4 py-3 bg-[#F0F8FD] border border-gray-200 rounded-lg focus:ring-1 focus:ring-gray-200 focus:border-transparent outline-none transition-all"
                required autofocus>
            @error('mobile_number')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password" class="block text-md font-medium text-gray-700 mb-1">
                পাসওয়ার্ড
            </label>
            <div class="relative">
                <input id="password" type="password" name="password" placeholder="পাসওয়ার্ড দিন"
                    class="w-full px-4 py-3 bg-[#F0F8FD] border border-gray-200 rounded-lg focus:ring-1 focus:ring-gray-200 focus:border-transparent outline-none transition-all"
                    required>
            </div>
            @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <button type="submit"
                class="w-full py-3 px-4 bg-wb-gradient text-white font-bold rounded-lg shadow-lg hover:opacity-90 transition-opacity active:scale-[0.98]">
                লগইন করুন
            </button>
        </div>
    </form>
@endsection