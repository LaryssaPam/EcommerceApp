<?php

namespace App\Filament\Resources\PromotionalMessages\Pages;

use App\Filament\Resources\PromotionalMessages\PromotionalMessageResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPromotionalMessage extends EditRecord
{
    protected static string $resource = PromotionalMessageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
