<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TaxpayerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'tpin' => $this->tpin,
            'business_certificate_number' => $this->business_certificate_number,
            'trading_name' => $this->trading_name,
            'mobile_number' => $this->mobile_number,
            'email' => $this->email,
            'business_registration_date' => $this->business_registration_date,
            'physical_location' => $this->physical_location,
            'user_id' => $this->user_id
        ];
    }
}
