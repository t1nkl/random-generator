<?php

namespace T1nkl\RandomGenerator\Catalogs;

class VideoGameCatalog extends Catalog
{
    /**
     * @var string
     */
    public string $catalog = 'video-game.catalog';

    /**
     * @return array
     */
    public function extract(): array
    {
        $this->catalogArray = array_filter($this->catalogArray, static function (string $word) {
            if (str_starts_with($word, '#')) {
                return false;
            }

            return true;
        });

        return $this->catalogArray;
    }
}
