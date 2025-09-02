<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerModelResource\Pages;
use App\Filament\Resources\CustomerModelResource\RelationManagers;
use App\Models\CustomerModel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class CustomerModelResource extends Resource
{
    protected static ?string $model = CustomerModel::class;

    protected static ?string $navigationLabel = 'Kelola Customer';

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $slug = 'kelola-customer';

    protected static ?string $navigationGroup = 'Kelola';

    protected static ?string $label = 'Kelola Customer';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_customer')->label('Nama') ->placeholder('Masukan Nama Customer')->required(),
                TextInput::make('kode_customer')->label('Kode')->numeric()->required(),
                TextInput::make('alamat_customer')->label('Alamat')->required(),
                TextInput::make('telepon_customer')->label('Telepon')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_customer') ->label('Nama')->searchable()->sortable(),
                TextColumn::make('kode_customer') ->label('Kode')->copyable()->copyMessage('Berhasil Menyalin'),
                TextColumn::make('alamat_customer')->label('Alamat'),
                TextColumn::make('telepon_customer')->label('Telepon'),

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
            'index' => Pages\ListCustomerModels::route('/'),
            'create' => Pages\CreateCustomerModel::route('/create'),
            'edit' => Pages\EditCustomerModel::route('/{record}/edit'),
        ];
    }
}
