<?php

namespace App\Filament\Resources\Testimonials;

use App\Filament\Resources\Testimonials\Pages\ManageTestimonials;
use App\Models\Testimonial;
use BackedEnum;
use Filament\Actions\Action;
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
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static string|\UnitEnum|null $navigationGroup = 'Content';

    protected static ?string $navigationLabel = 'Testimonials';

    protected static ?string $modelLabel = 'Testimonial';

    protected static ?string $pluralModelLabel = 'Testimonials';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChatBubbleLeftRight;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->label('Name')->required()->maxLength(255),
                FileUpload::make('photo')
                    ->label('Photo')
                    ->disk('public')
                    ->directory('testimonials')
                    ->image()
                    ->imageEditor()
                    ->maxSize(4096),
                TextInput::make('program')->label('Program')->maxLength(255),
                TextInput::make('current_job')->label('Current Job')->maxLength(255),
                TextInput::make('company')->label('Company')->maxLength(255),
                Textarea::make('testimonial')
                    ->label('Testimonial')
                    ->required()
                    ->rows(6)
                    ->maxLength(4000)
                    ->columnSpanFull(),
                TextInput::make('rating')
                    ->label('Rating (1-5)')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(5)
                    ->default(5)
                    ->required(),
                Toggle::make('is_approved')->label('Approved')->default(false),
                Toggle::make('is_featured')->label('Featured')->default(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn (Builder $query) => $query->select([
                'id',
                'photo',
                'name',
                'program',
                'company',
                'rating',
                'is_approved',
                'is_featured',
                'created_at',
            ]))
            ->columns([
                ImageColumn::make('photo')->disk('public')->square()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('program')->searchable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('company')->searchable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('rating')->sortable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('is_approved')
                    ->label('Approved')
                    ->badge()
                    ->formatStateUsing(fn (bool $state): string => $state ? 'Approved' : 'Pending')
                    ->color(fn (bool $state): string => $state ? 'success' : 'warning')
                    ->sortable(),
                TextColumn::make('is_featured')
                    ->label('Featured')
                    ->badge()
                    ->formatStateUsing(fn (bool $state): string => $state ? 'Featured' : 'Normal')
                    ->color(fn (bool $state): string => $state ? 'info' : 'gray')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->filters([
                TernaryFilter::make('is_approved')->label('Approved'),
                TernaryFilter::make('is_featured')->label('Featured'),
            ])
            ->recordActions([
                Action::make('approve')
                    ->label('Approve')
                    ->icon(Heroicon::OutlinedCheckCircle)
                    ->color('success')
                    ->requiresConfirmation()
                    ->visible(fn (Testimonial $record): bool => ! $record->is_approved)
                    ->action(fn (Testimonial $record) => $record->update(['is_approved' => true])),
                EditAction::make()
                    ->fillForm(fn (Testimonial $record): array => Testimonial::query()
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
            'index' => ManageTestimonials::route('/'),
        ];
    }
}
