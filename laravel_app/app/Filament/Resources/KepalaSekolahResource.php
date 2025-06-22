<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KepalaSekolahResource\Pages;
use App\Filament\Resources\KepalaSekolahResource\RelationManagers;
use App\Models\KepalaSekolah;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\DeleteAction;

use Filament\Forms\Components\TextInput;

class KepalaSekolahResource extends Resource
{
    protected static ?string $model = KepalaSekolah::class;
    protected static ?string $navigationLabel = 'Kepala Sekolah';
    protected static ?string $pluralModelLabel = 'Kepala Sekolah';
    protected static ?string $modelLabel = 'Kepala Sekolah';
    protected static ?string $navigationGroup = 'Profil Sekolah';


    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('nama')->required(),
            TextInput::make('periode')->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Kepala Sekolah')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('periode')
                    ->label('Periode')
                    ->sortable(),
            ])
            ->defaultSort('periode', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListKepalaSekolahs::route('/'),
            'create' => Pages\CreateKepalaSekolah::route('/create'),
            'edit' => Pages\EditKepalaSekolah::route('/{record}/edit'),
        ];
    }
}
