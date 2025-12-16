<?php

namespace App\Filament\Resources\PromotionalMessages;

use App\Filament\Resources\PromotionalMessages\Pages\CreatePromotionalMessage;
use App\Filament\Resources\PromotionalMessages\Pages\EditPromotionalMessage;
use App\Filament\Resources\PromotionalMessages\Pages\ListPromotionalMessages;
use App\Filament\Resources\PromotionalMessages\Pages\ViewPromotionalMessage;
use App\Filament\Resources\PromotionalMessages\Schemas\PromotionalMessageForm;
use App\Filament\Resources\PromotionalMessages\Schemas\PromotionalMessageInfolist;
use App\Filament\Resources\PromotionalMessages\Tables\PromotionalMessagesTable;
use App\Models\PromotionalMessage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PromotionalMessageResource extends Resource
{
    protected static ?string $model = PromotionalMessage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'PromotionalMessage';

    public static function form(Schema $schema): Schema
    {
        return PromotionalMessageForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PromotionalMessageInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PromotionalMessagesTable::configure($table);
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
            'index' => ListPromotionalMessages::route('/'),
            'create' => CreatePromotionalMessage::route('/create'),
            'view' => ViewPromotionalMessage::route('/{record}'),
            'edit' => EditPromotionalMessage::route('/{record}/edit'),
        ];
    }
}
