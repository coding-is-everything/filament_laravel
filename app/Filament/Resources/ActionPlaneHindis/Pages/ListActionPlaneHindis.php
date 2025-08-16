<?php

namespace App\Filament\Resources\ActionPlaneHindis\Pages;

use App\Filament\Resources\ActionPlaneHindis\ActionPlaneHindiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListActionPlaneHindis extends ListRecords
{
    protected static string $resource = ActionPlaneHindiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
