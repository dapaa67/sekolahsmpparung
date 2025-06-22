<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeritaResource\Pages;
use App\Filament\Resources\BeritaResource\RelationManagers;
use App\Models\Berita;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Tables\Actions\DeleteAction;


class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;
    protected static ?string $navigationLabel = 'Berita';
    protected static ?string $pluralModelLabel = 'Berita';
    protected static ?string $modelLabel = 'Berita';
    protected static ?string $navigationGroup = 'Home';


    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
        {
            return $form
                ->schema([
                    Forms\Components\TextInput::make('judul')
                        ->label('Judul')
                        ->maxLength(150) // batas aman
                        ->required()
                        ->hint('Maksimal 150 karakter')
                        ->hintColor('danger'),
                    Forms\Components\DatePicker::make('tanggal')->required(),
                    Forms\Components\Textarea::make('excerpt')
                        ->label('Ringkasan')
                        ->required()
                        ->maxLength(255) // batas maksimal karakter
                        ->hint('Maksimal 255 karakter')
                        ->hintColor('danger')
                        ->live() // biar langsung update saat ngetik
                        ->helperText(fn ($state) => strlen($state) . ' / 255 karakter')
                        ->rules(['max:255']), // validasi backend juga
                    Forms\Components\FileUpload::make('gambar')
                        ->image()
                        ->directory('images')
                        ->disk('public')
                        ->required(),
                    Forms\Components\RichEditor::make('isi')
                        ->label('Isi Berita'),

                ]);
        }




    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('gambar')->disk('public')->width(100)->height(100),
                Tables\Columns\TextColumn::make('judul')->searchable(),
                Tables\Columns\TextColumn::make('tanggal')->date(),

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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->orderByDesc('tanggal'); // atau bisa 'created_at' kalau mau urut dari tanggal dibuat
    }

}
