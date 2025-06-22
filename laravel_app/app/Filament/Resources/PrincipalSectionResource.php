<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PrincipalSectionResource\Pages;
use App\Filament\Resources\PrincipalSectionResource\RelationManagers;
use App\Models\PrincipalSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\DeleteAction;

class PrincipalSectionResource extends Resource
{
    protected static ?string $model = PrincipalSection::class;
    protected static ?string $navigationLabel = 'Sambutan Kepala Sekolah';
    protected static ?string $pluralModelLabel = 'Sambutan Kepala Sekolah';
    protected static ?string $modelLabel = 'Sambutan Kepala Sekolah';
    protected static ?string $navigationGroup = 'Home';


    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')->required(),
            TextInput::make('position')->default('Kepala Sekolah'),
            FileUpload::make('image')
                ->directory('principal')
                ->image()
                ->required(),
            Textarea::make('greeting')->rows(10)->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->disk('public')
                    ->label('Foto')
                    ->height(100) // atur tinggi gambar (px)
                    ->width(100),
                Tables\Columns\TextColumn::make('name')->label('Nama'),
                Tables\Columns\TextColumn::make('position')->label('Jabatan'),
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
            'index' => Pages\ListPrincipalSections::route('/'),
            'create' => Pages\CreatePrincipalSection::route('/create'),
            'edit' => Pages\EditPrincipalSection::route('/{record}/edit'),
        ];
    }
}
