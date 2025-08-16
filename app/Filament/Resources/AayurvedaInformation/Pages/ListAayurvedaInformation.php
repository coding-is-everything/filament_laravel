<?php

namespace App\Filament\Resources\AayurvedaInformation\Pages;

use App\Filament\Resources\AayurvedaInformation\AayurvedaInformationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAayurvedaInformation extends ListRecords
{
    protected static string $resource = AayurvedaInformationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
