<?php

namespace App\Filament\Resources\CarreraPlanResource\Pages;

use App\Filament\Resources\CarreraPlanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCarreraPlans extends ListRecords
{
    protected static string $resource = CarreraPlanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
