<?php

namespace App\Filament\Resources\StudentWorks;

use App\Filament\Resources\StudentWorks\Pages\ManageStudentWorks;
use App\Models\StudentWork;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DatePicker;
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

class StudentWorkResource extends Resource
{
    protected static ?string $model = StudentWork::class;

    protected static string|\UnitEnum|null $navigationGroup = 'Legacy SMK';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPhoto;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->maxLength(255),
                TextInput::make('title_en')->label('Title (EN)')->maxLength(255),
                TextInput::make('slug')->disabled()->dehydrated(false),
                RichEditor::make('content')->columnSpanFull(),
                RichEditor::make('content_en')->label('Content (EN)')->columnSpanFull(),
                FileUpload::make('image')
                    ->disk('public')
                    ->directory('student-works')
                    ->image()
                    ->imageEditor()
                    ->maxSize(8192),
                DateTimePicker::make('published_at')->label('Publish at'),
                Select::make('author_id')
                    ->relationship('author', 'name')
                    ->searchable()
                    ->preload()
                    ->default(fn () => auth()->id()),
                TextInput::make('work_name')->label('Work name')->maxLength(255),
                RichEditor::make('description')->columnSpanFull(),
                TextInput::make('creator_name')->label('Creator')->maxLength(255),
                DatePicker::make('created_date')->label('Created date'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->disk('public')->square()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('title')->searchable()->sortable(),
                TextColumn::make('creator_name')->label('Creator')->searchable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('published_at')->dateTime()->sortable(),
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
            'index' => ManageStudentWorks::route('/'),
        ];
    }
}
