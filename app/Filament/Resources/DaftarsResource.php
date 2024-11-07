<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Daftars;
use Filament\Forms\Form;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\DaftarsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DaftarsResource\RelationManagers;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class DaftarsResource extends Resource
{
    protected static ?string $model = Daftars::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('pasien_id')
                    ->relationship('pasien', 'nama')
                    ->label('Nama Pasien')
                    ->required()
                    ->searchable(),
                DatePicker::make('tanggal_daftar')
                    ->required(),
                Select::make('poli_id')
                    ->relationship('poli', 'nama')
                    ->label('Nama Poli')
                    ->required(),
                Textarea::make('keluhan')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('diagnosis')
                    ->columnSpanFull(),
                Textarea::make('tindakan')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pasien.nama') // Mengakses nama pasien dari relasi
                    ->label('Nama Pasien') // Label kolom
                    ->sortable() // Membuat kolom dapat diurutkan
                    ->searchable(), // Membuat kolom dapat dicari
                Tables\Columns\TextColumn::make('tanggal_daftar')
                    ->date()
                    ->sortable(),
                TextColumn::make('poli.nama') // Mengakses nama pasien dari relasi
                    ->label('Nama Poli') // Label kolom
                    ->sortable() // Membuat kolom dapat diurutkan
                    ->searchable(), // Membuat kolom dapat dicari
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
                ExportBulkAction::make(),
            ])
            ->headerActions(
                [
                    ExportBulkAction::make(),
                ]
            );
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
            'index' => Pages\ListDaftars::route('/'),
            'create' => Pages\CreateDaftars::route('/create'),
            'edit' => Pages\EditDaftars::route('/{record}/edit'),
        ];
    }
}
