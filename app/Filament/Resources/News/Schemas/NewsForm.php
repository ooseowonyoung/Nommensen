<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('contoh: B University Raih Akreditasi Unggul')
                    ->columnSpanFull(),

                RichEditor::make('content')
                    ->label('Isi Berita')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'bulletList',
                        'orderedList',
                        'link',
                        'h3',
                    ])
                    ->required()
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->label('Foto Berita')
                    ->image()
                    ->directory('news')
                    ->visibility('public')
                    ->imagePreviewHeight('200')
                    ->maxSize(2048)
                    ->required()
                    ->helperText('Format: JPG, PNG. Maks 2MB.')
                    ->columnSpanFull(),

                Hidden::make('slug'),
                Hidden::make('users_id'),
            ]);
    }
}