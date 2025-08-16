<?php

namespace App\Filament\Resources\AayurvedaInformation;

use App\Filament\Resources\AayurvedaInformation\Pages\CreateAayurvedaInformation;
use App\Filament\Resources\AayurvedaInformation\Pages\EditAayurvedaInformation;
use App\Filament\Resources\AayurvedaInformation\Pages\ListAayurvedaInformation;
use App\Filament\Resources\AayurvedaInformation\Schemas\AayurvedaInformationForm;
use App\Filament\Resources\AayurvedaInformation\Tables\AayurvedaInformationTable;
use App\Models\AayurvedaInformation;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AayurvedaInformationResource extends Resource
{
    protected static ?string $model = AayurvedaInformation::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return AayurvedaInformationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AayurvedaInformationTable::configure($table);
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
            'index' => ListAayurvedaInformation::route('/'),
            'create' => CreateAayurvedaInformation::route('/create'),
            'edit' => EditAayurvedaInformation::route('/{record}/edit'),
        ];
    }
}
