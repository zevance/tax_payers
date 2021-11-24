@extends('layouts.app')

@section('content')

<div class="flex justify-center">  
    <div class="w-12/12 bg-white p-6 rounded-lg">
            <div class="w-12/12 bg-white p-6 rounded-lg">
                <a href="{{ route('add') }}" class="bg-blue-500 hover:bg-blue-700 text-white text-center py-2 px-4 rounded">
                    Add Tax Payer
                </a>
            </div>
        <br><br><hr>

        @if($taxpayers->count())
           
                    <table class="table-auto shadow-lg bg-white border">
                        <thead>
                        <tr class="bg-gray-100">
                            <th class="border text-left py-4">TPIN</th>
                            <th class="border text-left py-4">BusinessCertificateNumber</th>
                            <th class="border text-left py-4">TradingName</th>
                            <th class="border text-left py-4">BusinessRegistration Date</th>
                            <th class="border text-left py-4">MobileNumber</th>
                            <th class="border text-left py-4">Email</th>
                            <th class="border text-left py-4">PhysicalLocation</th>
                            <th class="border text-left px4 py-4">Action</th>
                        </tr>
                        </thead>
                    
                        <tbody>
                 @foreach($taxpayers as $taxpayer)
                    @if ($taxpayer->user_id == Auth::user()->id)
                        <tr>
                            <td class="border">
                                {{ $taxpayer->tpin }}
                            </td>
                            <td class="border">
                                {{ $taxpayer->business_certificate_number }}
                            </td>
                            <td class="border">
                                {{ $taxpayer->trading_name }}
                            </td>
                            <td class="border">
                                {{ $taxpayer->business_registration_date }}
                            </td>
                            <td class="border">
                                {{ $taxpayer->mobile_number }}
                            </td>
                            <td class="border">
                                {{ $taxpayer->email }}
                            </td>
                            <td class="border">
                                {{ $taxpayer->physical_location }}
                            </td>
                            <td class="border">
                               
                                <a href="{{ route('taxpayers.edit', $taxpayer) }}" class="text-green-700 py-2 px-4">
                                    Edit
                                </a>
                                    |
                                <a href="#" class="text-red-700">
                                    <span onclick="event.preventDefault();
                                           if(confirm('Do you really want to delete this Tax Payer?')){
                                             document.getElementById('form-delete-{{$taxpayer->id}}')
                                           .submit()
                                           }">
                                        Delete
                                    </span>
                                </a>

                                <form style="display: none;" id="{{'form-delete-'.$taxpayer->id}}"
                                    action="{{ route('taxpayers.destroy',$taxpayer) }}" method="post" class="mr-1">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            
                            </td>
                        </tr>
                        </tbody>
                     @endif
                    @endforeach
                    </table>
                  

        {{ $taxpayers->links() }}

        @else
        <div class="flex justify-center">
            <div class="w-12/12 bg-white p-6 rounded-lg">
                <p class="text-red-500"> You did not register any tax payer</p>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection