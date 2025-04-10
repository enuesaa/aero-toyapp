<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Services\Nasa\DataModels\AstronomyPicture;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PictureResource extends JsonResource
{
    /**
     * @var AstronomyPicture
     */
    public $resource;

    public function __construct(AstronomyPicture $resource)
    {
        $this->resource = $resource;
    }
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $data = [
            'title' => $this->resource->title(),
            'url' => $this->resource->url(),
        ];
        return $data;
    }
}
