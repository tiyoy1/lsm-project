<?php

namespace App\Filament\Resources\CampusHistories;

use App\Filament\Resources\CampusHistories\Pages\ManageCampusHistories;
use App\Models\CampusHistory;
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
use Illuminate\Database\Eloquent\Builder;

class CampusHistoryResource extends Resource
{
    protected static ?string $model = CampusHistory::class;

    protected static string|\UnitEnum|null $navigationGroup = 'Metland College';

    protected static ?string $navigationLabel = 'Sejarah';

    protected static ?string $modelLabel = 'Sejarah';

    protected static ?string $pluralModelLabel = 'Sejarah';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBookOpen;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                RichEditor::make('content')
                    ->label('Konten')
                    ->columnSpanFull(),
                FileUpload::make('cover_image')
                    ->label('Cover image')
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
            ->modifyQueryUsing(fn (Builder $query) => $query->select([
                'id',
                'updated_at',
            ]))
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('updated_at')->dateTime()->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()
                    ->fillForm(fn (CampusHistory $record): array => CampusHistory::query()
                        ->find($record->getKey())
                        ?->attributesToArray() ?? []),
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
            'index' => ManageCampusHistories::route('/'),
        ];
    }
}
