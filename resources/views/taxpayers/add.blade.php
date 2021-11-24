@extends('layouts.app')

@section('content')

<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">
        <form action="{{ route('taxpayers') }}" method="post" class="mb-4">
            @csrf
            <div class="mb-4">
                <label for="tpin" class="sr-only">tpin</label>
                <input type="number" min="1" name="tpin" id="tpin" placeholder="TPIN" class="bg-gray-100 border-2 w-full p-4
                rounded-lg @error('tpin') border-red-500 @enderror" value="{{ old('tpin') }}">

                @error('tpin')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="business-certificate-number" class="sr-only">business Certificate Number</label>
                <input type="text" name="business_certificate_number" id="business-certificate-number" placeholder="business Certificate Number" class="bg-gray-100 border-2 w-full p-4
                rounded-lg @error('business_certificate_number') border-red-500 @enderror" value="{{ old('business_certificate_number') }}">

                @error('business_certificate_number')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="trading-name" class="sr-only">Trading name</label>
                <input type="text" name="trading_name" id="trading-name" placeholder="Trading name" class="bg-gray-100 border-2 w-full p-4
                rounded-lg @error('trading_name') border-red-500 @enderror" value="{{ old('trading_name') }}">


                @error('trading_name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div> <div class="mb-4">
                <label for="mobile-number" class="sr-only">Mobile number</label>
                <input type="number" min="9" name="mobile_number" id="mobile-number" placeholder="Mobile number" class="bg-gray-100 border-2 w-full p-4
                rounded-lg @error('mobile_number') border-red-500 @enderror" value="{{ old('mobile_number') }}">


                @error('mobile_number')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="text" name="email" id="email" placeholder="Your email address" class="bg-gray-100 border-2 w-full p-4
                rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">

                @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="business-registration-date" class="sr-only">Business registration date</label>
                <input type="date" name="business_registration_date" id="business-registration-date" placeholder="Business registration date" class="bg-gray-100 border-2 w-full p-4
                rounded-lg @error('business_registration_date') border-red-500 @enderror" value="{{ old('email') }}">

                @error('business_registration_date')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="physical-location" class="sr-only">Physical location</label>
                <textarea name="physical_location" id="physical-location" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4
                rounded-lg @error('physical_location') border-red-500 @enderror" placeholder="Physical location">
                </textarea>

                @error('physical_location')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium ">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection