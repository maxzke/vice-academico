<?php

namespace App\Filament\Resources\SniResource\Pages;

use App\Filament\Resources\SniResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSni extends EditRecord
{
    protected static string $resource = SniResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
