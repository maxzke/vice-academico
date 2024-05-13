<?php

namespace App\Filament\Resources\SniResource\Pages;

use App\Filament\Resources\SniResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSnis extends ListRecords
{
    protected static string $resource = SniResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
