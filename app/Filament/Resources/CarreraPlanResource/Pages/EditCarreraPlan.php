<?php

namespace App\Filament\Resources\CarreraPlanResource\Pages;

use App\Filament\Resources\CarreraPlanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCarreraPlan extends EditRecord
{
    protected static string $resource = CarreraPlanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
