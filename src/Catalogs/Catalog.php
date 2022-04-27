<?php

namespace T1nkl\RandomGenerator\Catalogs;

use ErrorException;

abstract class Catalog implements CatalogInterface
{
    protected int $length = 0;
    protected string $catalog = '';
    protected array $catalogArray = [];

    /**
     * @throws ErrorException
     */
    public function __construct()
    {
        if (empty($this->catalog)) {
            throw new ErrorException('Catalog file not sets!');
        }

        $this->catalogArray = $this->set($this->catalog);
        $this->length = count($this->catalogArray);
    }

    /**
     * @param  string  $catalog
     * @return array
     */
    public function set(string $catalog): array
    {
        $path = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR . $catalog;

        return array_values(
            array_filter(file($path), static function ($line) {
                return !empty(trim($line));
            })
        );
    }

    /**
     * @return string
     */
    public function random(): string
    {
        $catalog = $this->extract();

        if (!empty($catalog)) {
            $index = random_int(0, count($catalog) - 1);

            return $catalog[$index];
        }

        return '';
    }

    /**
     * @return array
     */
    public function extract(): array
    {
        return $this->catalogArray;
    }
}
