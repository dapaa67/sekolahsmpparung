<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PrestasiResource\Pages;
use App\Filament\Resources\PrestasiResource\RelationManagers;
use App\Models\Prestasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\DeleteAction;

class PrestasiResource extends Resource
{
    protected static ?string $model = Prestasi::class;
    protected static ?string $navigationLabel = 'Prestasi';
    protected static ?string $pluralModelLabel = 'Prestasi';
    protected static ?string $modelLabel = 'Prestasi';
    protected static ?string $navigationGroup = 'Home';


    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
        TextInput::make('judul')->required(),
        DatePicker::make('tanggal')->required(),
        FileUpload::make('gambar')->image()->required(),
        TextInput::make('siswa')->label('Siswa/i')->required(),
        TextInput::make('kelas')->required(),
        TextInput::make('skala')->required(),

        // Tambahan deskripsi
        Textarea::make('deskripsi')
            ->label('Isi Artikel / Deskripsi Prestasi')
            ->rows(8)
            ->placeholder('Tulis isi prestasi di sini...')
            ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            Tables\Columns\ImageColumn::make('gambar')
                ->disk('public')
                ->label('Foto')
                ->height(100) // atur tinggi gambar (px)
                ->width(100),
            Tables\Columns\TextColumn::make('judul')->label('Judul'),
            Tables\Columns\TextColumn::make('siswa')->label('Siswa'),
            Tables\Columns\TextColumn::make('kelas')->label('Kelas'),
            Tables\Columns\TextColumn::make('skala')->label('Skala'),
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
            'index' => Pages\ListPrestasis::route('/'),
            'create' => Pages\CreatePrestasi::route('/create'),
            'edit' => Pages\EditPrestasi::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->orderByDesc('tanggal'); // atau bisa 'created_at' kalau mau urut dari tanggal dibuat
    }
}
