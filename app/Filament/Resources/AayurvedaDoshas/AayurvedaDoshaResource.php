<?php

namespace App\Filament\Resources\AayurvedaDoshas;

use App\Filament\Resources\AayurvedaDoshas\Pages\CreateAayurvedaDosha;
use App\Filament\Resources\AayurvedaDoshas\Pages\EditAayurvedaDosha;
use App\Filament\Resources\AayurvedaDoshas\Pages\ListAayurvedaDoshas;
use App\Filament\Resources\AayurvedaDoshas\Schemas\AayurvedaDoshaForm;
use App\Filament\Resources\AayurvedaDoshas\Tables\AayurvedaDoshasTable;
use App\Models\AayurvedaDosha;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AayurvedaDoshaResource extends Resource
{
    protected static ?string $model = AayurvedaDosha::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return AayurvedaDoshaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AayurvedaDoshasTable::configure($table);
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
            'index' => ListAayurvedaDoshas::route('/'),
            'create' => CreateAayurvedaDosha::route('/create'),
            'edit' => EditAayurvedaDosha::route('/{record}/edit'),
        ];
    }
}
