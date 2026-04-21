<?php

namespace App\Filament\Resources\News;

use App\Filament\Resources\News\Pages\ManageNews;
use App\Models\News;
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
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static string|\UnitEnum|null $navigationGroup = 'Metland College';

    protected static ?string $navigationLabel = 'Berita';

    protected static ?string $modelLabel = 'Berita';

    protected static ?string $pluralModelLabel = 'Berita';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedNewspaper;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->required()->maxLength(255),
                TextInput::make('title_en')->label('Title (EN)')->maxLength(255),
                TextInput::make('slug')->disabled()->dehydrated(false),
                RichEditor::make('content')->required()->columnSpanFull(),
                RichEditor::make('content_en')->label('Content (EN)')->columnSpanFull(),
                FileUpload::make('image')
                    ->disk('public')
                    ->directory('news')
                    ->image()
                    ->imageEditor()
                    ->maxSize(8192),
                DateTimePicker::make('published_at')->label('Publish at'),
                Select::make('author_id')
                    ->relationship('author', 'name')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->default(fn () => auth()->id()),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn (Builder $query) => $query
                ->select([
                    'news.id',
                    'news.title',
                    'news.image',
                    'news.published_at',
                    'news.updated_at',
                    'news.author_id',
                ])
                ->with(['author:id,name']))
            ->columns([
                ImageColumn::make('image')->disk('public')->square()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('title')->searchable()->sortable(),
                TextColumn::make('author.name')->label('Author')->sortable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('published_at')->dateTime()->sortable(),
                TextColumn::make('updated_at')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()
                    ->fillForm(fn (News $record): array => News::query()
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
            'index' => ManageNews::route('/'),
        ];
    }
}
