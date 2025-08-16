<?php

namespace App\Filament\Resources\AayurvedaDoshas\Pages;

use App\Filament\Resources\AayurvedaDoshas\AayurvedaDoshaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAayurvedaDoshas extends ListRecords
{
    protected static string $resource = AayurvedaDoshaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
