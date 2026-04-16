<?php

namespace App\Filament\Resources\CampusProfiles;

use App\Filament\Resources\CampusProfiles\Pages\ManageCampusProfiles;
use App\Models\CampusProfile;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CampusProfileResource extends Resource
{
    protected static ?string $model = CampusProfile::class;

    protected static string|\UnitEnum|null $navigationGroup = 'Metland College';

    protected static ?string $navigationLabel = 'Profil Kampus';

    protected static ?string $modelLabel = 'Profil Kampus';

    protected static ?string $pluralModelLabel = 'Profil Kampus';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedIdentification;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                RichEditor::make('content')
                    ->label('Konten')
                    ->columnSpanFull(),
                FileUpload::make('hero_image')
                    ->label('Hero image')
                    ->disk('public')
                    ->directory('campus')
                    ->image()
                    ->imageEditor()
                    ->maxSize(8192),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('updated_at')->dateTime()->sortable(),
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
            'index' => ManageCampusProfiles::route('/'),
        ];
    }
}
