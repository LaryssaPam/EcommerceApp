<?php

namespace App\Filament\Resources\PromotionalMessages\Schemas;

<<<<<<< HEAD
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
=======
>>>>>>> Branch-Cashier
use Filament\Schemas\Schema;

class PromotionalMessageInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
<<<<<<< HEAD
                TextEntry::make('title'),
                TextEntry::make('content')
                    ->columnSpanFull(),
                TextEntry::make('type'),
                IconEntry::make('is_active')
                    ->boolean(),
                TextEntry::make('start_date')
                    ->dateTime(),
                TextEntry::make('end_date')
                    ->dateTime(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
=======
                //
>>>>>>> Branch-Cashier
            ]);
    }
}
