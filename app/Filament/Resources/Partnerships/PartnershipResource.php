<?php

namespace App\Filament\Resources\Partnerships;

use App\Filament\Resources\Partnerships\Pages\ManagePartnerships;
use App\Models\Partnership;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PartnershipResource extends Resource
{
    protected static ?string $model = Partnership::class;

    protected static string|\UnitEnum|null $navigationGroup = 'Metland College';

    protected static ?string $navigationLabel = 'Kerja Sama';

    protected static ?string $modelLabel = 'Kerja Sama';

    protected static ?string $pluralModelLabel = 'Kerja Sama';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedHandRaised;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->label('Nama')->required()->maxLength(255),
                Textarea::make('description')->label('Deskripsi')->rows(4),
                FileUpload::make('logo')
                    ->label('Logo')
                    ->disk('public')
                    ->directory('partnerships')
                    ->image()
                    ->imageEditor()
                    ->maxSize(4096),
                TextInput::make('url')->label('URL')->maxLength(2048),
                TextInput::make('sort_order')->label('Sort order')->numeric()->default(0),
                Toggle::make('is_active')->label('Active')->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('logo')->disk('public')->square()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('name')->searchable()->sortable(),
                IconColumn::make('is_active')->boolean()->label('Active')->sortable(),
                TextColumn::make('sort_order')->sortable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManagePartnerships::route('/'),
        ];
    }
}
