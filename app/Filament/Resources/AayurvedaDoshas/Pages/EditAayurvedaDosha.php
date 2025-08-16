<?php

namespace App\Filament\Resources\AayurvedaDoshas\Pages;

use App\Filament\Resources\AayurvedaDoshas\AayurvedaDoshaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAayurvedaDosha extends EditRecord
{
    protected static string $resource = AayurvedaDoshaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
