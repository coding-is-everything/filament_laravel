<?php

namespace App\Filament\Resources\ActionPlanes\Pages;

use App\Filament\Resources\ActionPlanes\ActionPlaneResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditActionPlane extends EditRecord
{
    protected static string $resource = ActionPlaneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
