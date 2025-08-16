<?php

namespace App\Filament\Resources\AayurvedaSigns;

use App\Filament\Resources\AayurvedaSigns\Pages\CreateAayurvedaSigns;
use App\Filament\Resources\AayurvedaSigns\Pages\EditAayurvedaSigns;
use App\Filament\Resources\AayurvedaSigns\Pages\ListAayurvedaSigns;
use App\Filament\Resources\AayurvedaSigns\Schemas\AayurvedaSignsForm;
use App\Filament\Resources\AayurvedaSigns\Tables\AayurvedaSignsTable;
use App\Models\AayurvedaSigns;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AayurvedaSignsResource extends Resource
{
    protected static ?string $model = AayurvedaSigns::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return AayurvedaSignsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AayurvedaSignsTable::configure($table);
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
            'index' => ListAayurvedaSigns::route('/'),
            'create' => CreateAayurvedaSigns::route('/create'),
            'edit' => EditAayurvedaSigns::route('/{record}/edit'),
        ];
    }
}
