<?php

namespace T1nkl\RandomGenerator\Catalogs;

interface CatalogInterface
{
    /**
     * @return array
     */
    public function extract(): array;

    /**
     * @param  string  $catalog
     * @return array
     */
    public function set(string $catalog): array;

    /**
     * @return string
     */
    public function random(): string;
}
