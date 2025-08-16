<?php

namespace App\Filament\Resources\ActionPlaneHindis;

use App\Filament\Resources\ActionPlaneHindis\Pages\CreateActionPlaneHindi;
use App\Filament\Resources\ActionPlaneHindis\Pages\EditActionPlaneHindi;
use App\Filament\Resources\ActionPlaneHindis\Pages\ListActionPlaneHindis;
use App\Filament\Resources\ActionPlaneHindis\Schemas\ActionPlaneHindiForm;
use App\Filament\Resources\ActionPlaneHindis\Tables\ActionPlaneHindisTable;
use App\Models\ActionPlaneHindi;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ActionPlaneHindiResource extends Resource
{
    protected static ?string $model = ActionPlaneHindi::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ActionPlaneHindiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ActionPlaneHindisTable::configure($table);
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
            'index' => ListActionPlaneHindis::route('/'),
            'create' => CreateActionPlaneHindi::route('/create'),
            'edit' => EditActionPlaneHindi::route('/{record}/edit'),
        ];
    }
}
