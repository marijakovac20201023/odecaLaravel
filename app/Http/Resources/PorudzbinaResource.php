<?php

namespace App\Http\Resources;

use App\Models\Odeca;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Resources\Json\JsonResource;

class PorudzbinaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap='porudzbina';
    public function toArray($request)
    {
        return [
            'id'=>$this->resource->id,
            'adresa' => $this->resource->adresaDostave,
            'cena' => $this->resource->cena,
            'status' => $this->resource->status,
            'korisnik' => new UserResource(User::find($this->resource->user_id)),
            'odeca' => new OdecaResource(Odeca::find($this->resource->odeca_id))
        ];
    }
}
