<?php

namespace App\Filament\Resources\Careers;

use App\Filament\Resources\Careers\Pages\ManageCareers;
use App\Models\Career;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CareerResource extends Resource
{
    protected static ?string $model = Career::class;

    protected static string|\UnitEnum|null $navigationGroup = 'Metland College';

    protected static ?string $navigationLabel = 'Karir (LPK & LKP)';

    protected static ?string $modelLabel = 'Karir';

    protected static ?string $pluralModelLabel = 'Karir';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBriefcase;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('track')
                    ->label('Track')
                    ->options([
                        'lpk' => 'LPK',
                        'lkp' => 'LKP',
                    ])
                    ->required(),
                TextInput::make('title')->label('Judul')->required()->maxLength(255),
                RichEditor::make('content')->label('Konten')->columnSpanFull(),
                FileUpload::make('image')
                    ->label('Image')
                    ->disk('public')
                    ->directory('careers')
                    ->image()
                    ->imageEditor()
                    ->maxSize(8192),
                Toggle::make('is_published')->label('Published')->default(true),
                DateTimePicker::make('published_at')->label('Publish at'),
                TextInput::make('sort_order')->label('Sort order')->numeric()->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable()->sortable(),
                TextColumn::make('track')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => strtoupper($state))
                    ->sortable(),
                IconColumn::make('is_published')->boolean()->label('Published')->sortable(),
                TextColumn::make('published_at')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
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
            'index' => ManageCareers::route('/'),
        ];
    }
}
