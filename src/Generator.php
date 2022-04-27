<?php

namespace T1nkl\RandomGenerator;

use T1nkl\RandomGenerator\Catalogs\AdjectivesCatalog;
use T1nkl\RandomGenerator\Catalogs\NounsCatalog;
use T1nkl\RandomGenerator\Catalogs\VideoGameCatalog;

final class Generator
{
    private const CATALOGS = [
        AdjectivesCatalog::class,
        VideoGameCatalog::class,
        NounsCatalog::class,
    ];

    /**
     * @return string
     */
    public static function getName(): string
    {
        $words = [];

        /** @var NounsCatalog $catalog */
        foreach (self::getCatalogs() as $catalog) {
            $parsed = self::parse(trim($catalog->random()));
            $words[] = ucfirst($parsed);
        }

        return implode(' ', $words);
    }

    /**
     * @return array
     */
    private static function getCatalogs(): array
    {
        $catalogs = [];

        foreach (self::CATALOGS as $catalog) {
            $catalogs[$catalog] = new $catalog();
        }

        return $catalogs;
    }

    /**
     * @param  string  $word
     * @return string
     */
    private static function parse(string $word): string
    {
        $words = [];

        $position = strpos($word, '^');

        if ($position !== false) {
            $words = explode('^', substr($word, 0, $position));
            $word = substr($word, $position + 1);
        }

        $position = strpos($word, '|');

        if ($position !== false) {
            $words = array_merge($words, explode('|', $word));

            $words = array_values(
                array_filter($words, static function ($line) {
                    return !empty(trim($line));
                })
            );

            $word = $words[array_rand($words)];
        }

        return $word;
    }
}
