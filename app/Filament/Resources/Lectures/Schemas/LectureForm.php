<?php

namespace App\Filament\Resources\Lectures\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LectureForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->label('Nama Lengkap')
                    ->required()
                    ->maxLength(255),

                TextInput::make('nidn')
                    ->label('NIDN')
                    ->required()
                    ->maxLength(255),

                TextInput::make('pendidikan')
                    ->label('Pendidikan Terakhir')
                    ->required()
                    ->maxLength(255),

                TextInput::make('jabatan')
                    ->label('Jabatan')
                    ->required()
                    ->maxLength(255),

                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->maxLength(255),

                TextInput::make('topik')
                    ->label('Topik Penelitian')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('image')
                    ->label('Foto')
                    ->image()
                    ->directory('lectures')
                    ->visibility('public')
                    ->imagePreviewHeight('150')
                    ->maxSize(2048)
                    ->required()
                    ->helperText('Upload foto dosen. Format: JPG, PNG. Maks 2MB.')
                    ->columnSpanFull(),
            ])
            ->columns(2);
    }
}