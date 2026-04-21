<?php

namespace App\Filament\Resources\Registrations;

use App\Filament\Resources\Registrations\Pages\ManageRegistrations;
use App\Models\Registration;
use App\Models\Student;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class RegistrationResource extends Resource
{
    protected static ?string $model = Registration::class;

    protected static string|\UnitEnum|null $navigationGroup = 'Legacy SMK';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClipboardDocumentList;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('full_name')->required()->maxLength(255),
                DatePicker::make('birth_date')->required(),
                Select::make('gender')
                    ->options([
                        'male' => 'Male',
                        'female' => 'Female',
                    ])
                    ->required(),
                Textarea::make('address')->rows(3)->required(),
                TextInput::make('phone')->tel()->maxLength(50),
                TextInput::make('email')->email()->required()->maxLength(255),
                Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'accepted' => 'Accepted',
                        'rejected' => 'Rejected',
                    ])
                    ->default('pending')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn (Builder $query) => $query->select([
                'id',
                'full_name',
                'phone',
                'email',
                'status',
                'created_at',
            ]))
            ->columns([
                TextColumn::make('full_name')->searchable()->sortable(),
                TextColumn::make('email')->searchable(),
                TextColumn::make('phone')->searchable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'accepted' => 'success',
                        'rejected' => 'danger',
                        default => 'warning',
                    })
                    ->sortable(),
                TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                Action::make('accept')
                    ->label('Accept')
                    ->icon(Heroicon::OutlinedCheckCircle)
                    ->color('success')
                    ->requiresConfirmation()
                    ->visible(fn (Registration $record): bool => $record->status === 'pending')
                    ->action(function (Registration $record): void {
                        $record->refresh();
                        $record->update(['status' => 'accepted']);

                        Student::updateOrCreate(
                            ['email' => $record->email],
                            [
                                'full_name' => $record->full_name,
                                'birth_date' => $record->birth_date,
                                'gender' => $record->gender,
                                'address' => $record->address,
                                'phone' => $record->phone,
                                'email' => $record->email,
                            ]
                        );
                    }),
                Action::make('reject')
                    ->label('Reject')
                    ->icon(Heroicon::OutlinedXCircle)
                    ->color('danger')
                    ->requiresConfirmation()
                    ->visible(fn (Registration $record): bool => $record->status === 'pending')
                    ->action(fn (Registration $record) => $record->update(['status' => 'rejected'])),
                EditAction::make()
                    ->fillForm(fn (Registration $record): array => Registration::query()
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
            'index' => ManageRegistrations::route('/'),
        ];
    }
}
