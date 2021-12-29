<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResepResource extends JsonResource
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
            'id' => $this->id,
            'judul' =>$this->judul,
            'penulis' => $this->penulis,
            'deskripsi' => $this->deskripsi,
            'waktuMasak' => $this->waktuMasak,
            'penyajian' => $this->penyajian,
            'komposisi' => $this->komposisi,
        ];
    }
}
