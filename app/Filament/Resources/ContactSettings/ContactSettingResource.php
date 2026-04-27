<?php

namespace App\Filament\Resources\ContactSettings;

use App\Filament\Resources\ContactSettings\Pages\ManageContactSettings;
use App\Models\ContactSetting;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ContactSettingResource extends Resource
{
    protected static ?string $model = ContactSetting::class;

    protected static string|\UnitEnum|null $navigationGroup = 'Metland College';

    protected static ?string $navigationLabel = 'Kontak';

    protected static ?string $modelLabel = 'Kontak';

    protected static ?string $pluralModelLabel = 'Kontak';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPhone;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('address')->label('Alamat')->rows(3),
                TextInput::make('phone')->label('Telepon')->maxLength(50),
                TextInput::make('email')->label('Email')->email()->maxLength(255),
                TextInput::make('whatsapp')->label('WhatsApp')->maxLength(50),
                TextInput::make('instagram')->label('Instagram')->maxLength(255),
                TextInput::make('website')->label('Website')->maxLength(255),
                TextInput::make('maps_url')->label('Google Maps URL')->maxLength(2048),
                TextInput::make('open_hours')->label('Jam operasional')->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn (Builder $query) => $query->select([
                'id',
                'phone',
                'email',
                'updated_at',
            ]))
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('phone')->label('Telepon')->searchable(),
                TextColumn::make('email')->label('Email')->searchable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')->dateTime()->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()
                    ->fillForm(fn (ContactSetting $record): array => ContactSetting::query()
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
            'index' => ManageContactSettings::route('/'),
        ];
    }
}
