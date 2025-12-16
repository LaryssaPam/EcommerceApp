<?php

namespace App\Filament\Resources\PromotionalMessages\Pages;

use App\Filament\Resources\PromotionalMessages\PromotionalMessageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPromotionalMessages extends ListRecords
{
    protected static string $resource = PromotionalMessageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
