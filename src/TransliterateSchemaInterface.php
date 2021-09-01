<?php


namespace EndorphinStudio\Transliteration;


interface TransliterateSchemaInterface
{
    public function extend(): void;
    public function transliterate(string $phrase): string;
}
