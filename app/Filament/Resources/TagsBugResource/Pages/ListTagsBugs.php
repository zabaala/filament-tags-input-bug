<?php

namespace App\Filament\Resources\TagsBugResource\Pages;

use App\Filament\Resources\TagsBugResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTagsBugs extends ListRecords
{
    protected static string $resource = TagsBugResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
