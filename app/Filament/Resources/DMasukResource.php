<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DMasukResource\Pages;
use App\Filament\Resources\DMasukResource\RelationManagers;
use App\Models\d_masuk;
use App\Models\masuk;
use App\Models\barang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DMasukResource extends Resource
{
    protected static ?string $model = d_masuk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('kd_masuk')
                ->label('Kode Masuk')
                ->options(masuk::all()->pluck('kd_masuk','kd_masuk'))
                ->required(),
                Forms\Components\Select::make('kd_barang')
                ->label('Kode Barang')
                ->options(barang::all()->pluck('kd_barang','kd_barang'))
                ->required(),
                Forms\Components\TextInput::make('jumlah')
                ->label('jumlah')
                ->numeric()
                ->required(),
                Forms\Components\TextInput::make('harga_beli')
                ->label('Harga_Beli')
                ->numeric()
                ->required(),
                Forms\Components\TextInput::make('subtotal')
                ->label('Subtotal')
                ->numeric()
                ->disabled(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kd_masuk')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kd_barang')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('jumlah')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('subtotal')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('harga_beli')->sortable()->searchable(),
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
            'index' => Pages\ListDMasuks::route('/'),
            'create' => Pages\CreateDMasuk::route('/create'),
            'edit' => Pages\EditDMasuk::route('/{record}/edit'),
        ];
    }
}
