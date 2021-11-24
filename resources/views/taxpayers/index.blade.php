@extends('layouts.app')

@section('content')

<div class="flex justify-center">

   
    <div class="w-12/12 bg-white p-6 rounded-lg">
        <div>
            <a href="{{ route('add') }}" class="bg-blue-500 hover:bg-blue-700 text-white text-center py-2 px-4 rounded">
                Add Tax Payer
              </a>
        </div><br><br>
        @if($taxpayers->count())
           
                    <table class="table-auto shadow-lg bg-white border">
                        <thead>
                        <tr>
                            <th class="bg-blue-100 border text-left py-4">TPIN</th>
                            <th class="bg-blue-100 border text-left py-4">BusinessCertificateNumber</th>
                            <th class="bg-blue-100 border text-left py-4">TradingName</th>
                            <th class="bg-blue-100 border text-left py-4">BusinessRegistration Date</th>
                            <th class="bg-blue-100 border text-left py-4">MobileNumber</th>
                            <th class="bg-blue-100 border text-left py-4">Email</th>
                            <th class="bg-blue-100 border text-left py-4">PhysicalLocation</th>
                            <th class="bg-blue-100 border text-left px4 py-4">Action</th>
                        </tr>
                        </thead>
                    
                        <tbody>
                 @foreach($taxpayers as $taxpayer)
                    @if ($taxpayer->user_id == Auth::user()->id)
                        <tr>
                            <td>{{ $taxpayer->tpin }}</td>
                            <td>{{ $taxpayer->business_certificate_number }}</td>
                            <td>{{ $taxpayer->trading_name }}</td>
                            <td>{{ $taxpayer->business_registration_date }}</td>
                            <td>{{ $taxpayer->mobile_number }}</td>
                            <td>{{ $taxpayer->email }}</td>
                            <td>{{ $taxpayer->physical_location }}</td>
                            <td>
                               
                                <a href="#" class="text-green py-2 px-4">
                                    Edit
                                  </a>
                                <form action="{{ route('taxpayers.destroy',$taxpayer) }}" method="post" class="mr-1">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500"> Delete</button>
                                </form>
                            
                            </td>
                        </tr>
                        </tbody>
                     @endif
                    @endforeach
                    </table>
                  

        {{ $taxpayers->links() }}

        @else

        <p> {{ $taxpayer->user->name }} did not register any tax payer</p>

        @endif
    </div>
</div>
@endsection