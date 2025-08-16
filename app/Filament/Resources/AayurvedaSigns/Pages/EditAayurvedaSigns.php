<?php

namespace App\Filament\Resources\AayurvedaSigns\Pages;

use App\Filament\Resources\AayurvedaSigns\AayurvedaSignsResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAayurvedaSigns extends EditRecord
{
    protected static string $resource = AayurvedaSignsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
