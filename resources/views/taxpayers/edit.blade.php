@extends('layouts.app')

@section('content')

<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">
        <form action="{{ route('taxpayers.update',$taxpayer->id) }}" method="post" class="mb-4">
            @csrf
            @method('put')
            <div class="mb-4">
                <label for="tpin" class="sr-only">tpin</label>
                <input type="number" min="1" name="tpin" id="tpin" value="{{ $taxpayer->tpin }}" class="bg-gray-100 border-2 w-full p-4
                rounded-lg">
            </div>
            <div class="mb-4">
                <label for="business-certificate-number" class="sr-only">business Certificate Number</label>
                <input type="text" name="business_certificate_number" id="business-certificate-number" class="bg-gray-100 border-2 w-full p-4
                rounded-lg" value="{{ $taxpayer->business_certificate_number }}">
            </div>
            <div class="mb-4">
                <label for="trading-name" class="sr-only">Trading name</label>
                <input type="text" name="trading_name" id="trading-name" class="bg-gray-100 border-2 w-full p-4
                rounded-lg" value="{{ $taxpayer->trading_name}}">
            </div> 
            <div class="mb-4">
                <label for="mobile-number" class="sr-only">Mobile number</label>
                <input type="number" min="9" name="mobile_number" id="mobile-number" class="bg-gray-100 border-2 w-full p-4
                rounded-lg" value="{{ $taxpayer->mobile_number}}">
            </div>
            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="text" name="email" id="email" class="bg-gray-100 border-2 w-full p-4
                rounded-lg" value="{{ $taxpayer->email}}">
            </div>
            <div class="mb-4">
                <label for="business-registration-date" class="sr-only">Business registration date</label>
                <input type="date" name="business_registration_date" id="business-registration-date" class="bg-gray-100 border-2 w-full p-4
                rounded-lg" value="{{ $taxpayer->business_registration_date }}">
            </div>
            <div class="mb-4">
                <label for="physical-location" class="sr-only">Physical location</label>
                <textarea name="physical_location" id="physical-location" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4
                rounded-lg">
                {{ $taxpayer->physical_location }}
                </textarea>
            </div>

            <div>
                <button type="submit" class="bg-green-500 text-white px-4 py-3 rounded font-medium ">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
@endsection