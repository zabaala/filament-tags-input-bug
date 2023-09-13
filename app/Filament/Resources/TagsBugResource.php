<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TagsBugResource\Pages;
use App\Models\TagsBug;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TagsBugResource extends Resource
{
    protected static ?string $model = TagsBug::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    Toggle::make('disable_tags_toggle'),
                    TagsInput::make('tags')
                        ->default(['a', 'b', 'c'])
                        ->disabled(static fn (Get $get) => $get('disable_tags_toggle')),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTagsBugs::route('/'),
            'create' => Pages\CreateTagsBug::route('/create'),
            'edit' => Pages\EditTagsBug::route('/{record}/edit'),
        ];
    }
}
