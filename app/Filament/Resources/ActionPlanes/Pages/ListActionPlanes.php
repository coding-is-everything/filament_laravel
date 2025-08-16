<?php

namespace App\Filament\Resources\ActionPlanes\Pages;

use App\Filament\Resources\ActionPlanes\ActionPlaneResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListActionPlanes extends ListRecords
{
    protected static string $resource = ActionPlaneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
