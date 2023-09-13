<?php

namespace App\Filament\Resources\TagsBugResource\Pages;

use App\Filament\Resources\TagsBugResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTagsBug extends EditRecord
{
    protected static string $resource = TagsBugResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
