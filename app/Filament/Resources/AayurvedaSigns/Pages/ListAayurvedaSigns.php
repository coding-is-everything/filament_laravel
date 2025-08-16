<?php

namespace App\Filament\Resources\AayurvedaSigns\Pages;

use App\Filament\Resources\AayurvedaSigns\AayurvedaSignsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAayurvedaSigns extends ListRecords
{
    protected static string $resource = AayurvedaSignsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
