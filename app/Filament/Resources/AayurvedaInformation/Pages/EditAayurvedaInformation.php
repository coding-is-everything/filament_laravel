<?php

namespace App\Filament\Resources\AayurvedaInformation\Pages;

use App\Filament\Resources\AayurvedaInformation\AayurvedaInformationResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAayurvedaInformation extends EditRecord
{
    protected static string $resource = AayurvedaInformationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
