<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SejarahSekolahResource\Pages;
use App\Models\SejarahSekolah;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Tables\Actions\DeleteAction;

class SejarahSekolahResource extends Resource
{
    protected static ?string $model = SejarahSekolah::class;
    protected static ?string $navigationLabel = 'Sejarah Sekolah';
    protected static ?string $pluralModelLabel = 'Sejarah Sekolah';
    protected static ?string $modelLabel = 'Sejarah Sekolah';
    protected static ?string $navigationGroup = 'Profil Sekolah';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Sejarah Sekolah')
                    ->schema([
                        TextInput::make('tahun_berdiri')->numeric(),
                        TextInput::make('bentuk_sekolah'),
                        TextInput::make('status_sekolah'),
                        TextInput::make('sk_ban'),
                        DatePicker::make('tgl_sk_ban'),
                        TextInput::make('waktu_penyelenggaraan'),
                        TextInput::make('sk_izin'),
                        DatePicker::make('tgl_sk_izin'),
                        TextInput::make('surat_pengukuhan'),
                        DatePicker::make('tgl_surat_pengukuhan'),
                        TextInput::make('nss'),
                        TextInput::make('nds'),
                        TextInput::make('npsn'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Bisa ditambahkan kolom preview kalau mau
                Tables\Columns\TextColumn::make('tahun_berdiri')->label('Tahun Berdiri'),
                Tables\Columns\TextColumn::make('status_sekolah')->label('Status'),
                Tables\Columns\TextColumn::make('npsn')->label('NPSN'),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSejarahSekolahs::route('/'),
            'create' => Pages\CreateSejarahSekolah::route('/create'),
            'edit' => Pages\EditSejarahSekolah::route('/{record}/edit'),
        ];
    }
}
