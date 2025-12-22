<?php

namespace App\Filament\Resources\PromotionalMessages\Schemas;

<<<<<<< HEAD
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
=======
>>>>>>> Branch-Cashier
use Filament\Schemas\Schema;

class PromotionalMessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
<<<<<<< HEAD
                TextInput::make('title')
                    ->required(),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('type')
                    ->required()
                    ->default('info'),
                Toggle::make('is_active')
                    ->required(),
                DateTimePicker::make('start_date')
                    ->required(),
                DateTimePicker::make('end_date')
                    ->required(),
=======
                //
>>>>>>> Branch-Cashier
            ]);
    }
}
