<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PersyaratanPpdbResource\Pages;
use App\Filament\Resources\PersyaratanPpdbResource\RelationManagers;
use App\Models\PersyaratanPpdb;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\DeleteAction;

class PersyaratanPpdbResource extends Resource
{
    protected static ?string $model = PersyaratanPpdb::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Persyaratan PPDB';
    protected static ?string $pluralModelLabel = 'Persyaratan PPDB';
    protected static ?string $modelLabel = 'Persyaratan PPDB';
    protected static ?string $navigationGroup = 'PPDB';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('syarat')->label('Isi Persyaratan')->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('syarat')->label('Persyaratan')->searchable(),
            ])
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
            'index' => Pages\ListPersyaratanPpdbs::route('/'),
            'create' => Pages\CreatePersyaratanPpdb::route('/create'),
            'edit' => Pages\EditPersyaratanPpdb::route('/{record}/edit'),
        ];
    }
}
