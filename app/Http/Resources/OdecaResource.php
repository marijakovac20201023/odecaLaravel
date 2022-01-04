<?php

namespace App\Http\Resources;

use App\Models\Kategorija;
use Illuminate\Http\Resources\Json\JsonResource;

class OdecaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'naziv' => $this->resource->naziv,
            'opis' => $this->resource->opis,
            'proizvedenoU' => $this->resource->proizvedenoU,
            'velicina' => $this->resource->velicina,
            'kategorija' => new KategorijaResource(Kategorija::find($this->resource->kategorija_id))

            



        ];
    
    }
}
