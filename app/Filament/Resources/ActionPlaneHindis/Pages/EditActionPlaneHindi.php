<?php

namespace App\Filament\Resources\ActionPlaneHindis\Pages;

use App\Filament\Resources\ActionPlaneHindis\ActionPlaneHindiResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditActionPlaneHindi extends EditRecord
{
    protected static string $resource = ActionPlaneHindiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
