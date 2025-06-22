<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisiMisiResource\Pages;
use App\Filament\Resources\VisiMisiResource\RelationManagers;
use App\Models\VisiMisi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;


class VisiMisiResource extends Resource
{
    protected static ?string $model = VisiMisi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Visi & Misi';
    protected static ?string $pluralModelLabel = 'Visi & Misi';
    protected static ?string $modelLabel = 'Visi & Misi';
    protected static ?string $navigationGroup = 'Profil Sekolah';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('visi')->required(),
                Forms\Components\Repeater::make('indikator_visi')
                    ->label('Indikator Visi')
                    ->schema([
                        Forms\Components\TextInput::make('poin'),
                    ])
                    ->default([])
                    ->columnSpan('full'),
                Forms\Components\Textarea::make('misi')->required(),
                Forms\Components\Repeater::make('daftar_misi')
                    ->label('Daftar Misi')
                    ->schema([
                        Forms\Components\TextInput::make('poin'),
                    ])
                    ->default([])
                    ->columnSpan('full'),
                FileUpload::make('gambar_visi')->directory('images')->disk('public')->image(),
                FileUpload::make('gambar_misi')->directory('images')->disk('public')->image(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('visi')->limit(50),
                Tables\Columns\TextColumn::make('misi')->limit(50),
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
            'index' => Pages\ListVisiMisis::route('/'),
            'create' => Pages\CreateVisiMisi::route('/create'),
            'edit' => Pages\EditVisiMisi::route('/{record}/edit'),
        ];
    }
}
