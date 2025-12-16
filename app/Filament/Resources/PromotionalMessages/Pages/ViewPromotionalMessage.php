<?php

namespace App\Filament\Resources\PromotionalMessages\Pages;

use App\Filament\Resources\PromotionalMessages\PromotionalMessageResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPromotionalMessage extends ViewRecord
{
    protected static string $resource = PromotionalMessageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
