<?php

namespace App\Filament\Resources\ActionPlanes;

use App\Filament\Resources\ActionPlanes\Pages\CreateActionPlane;
use App\Filament\Resources\ActionPlanes\Pages\EditActionPlane;
use App\Filament\Resources\ActionPlanes\Pages\ListActionPlanes;
use App\Filament\Resources\ActionPlanes\Schemas\ActionPlaneForm;
use App\Filament\Resources\ActionPlanes\Tables\ActionPlanesTable;
use App\Models\ActionPlane;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ActionPlaneResource extends Resource
{
    protected static ?string $model = ActionPlane::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ActionPlaneForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ActionPlanesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListActionPlanes::route('/'),
            'create' => CreateActionPlane::route('/create'),
            'edit' => EditActionPlane::route('/{record}/edit'),
        ];
    }
}
