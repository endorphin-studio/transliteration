<?php


namespace EndorphinStudio\Transliteration;

use Iterator;

/**
 * Class BaseTransliterate
 * @package EndorphinStudio\Transliteration
 * @author Serhii Nekhaienko <serhii.nekhaienko@gmail.com>
 */
abstract class BaseTransliterate implements TransliterateSchemaInterface
{
    /**
     * Language code
     * @var string
     */
    protected string $schemaName = '';
    /**
     * List of replacements
     * @var string[]
     */
    protected array $dictionary = [];

    public function __construct()
    {
        /**
         * Call extend function if we want to extend existing dictionary
         */
        $this->extend();
    }

    /**
     * This method will be used if you want to extend existing dictionary
     */
    public function extend(): void
    {

    }

    /**
     * @return string
     */
    public function getSchemaName(): string
    {
        return $this->schemaName;
    }

    /**
     * Transliterate Russian or Ukrainian names into Transliterated form
     * @param string $phrase
     * @return string Result
     */
    public function transliterate(string $phrase): string
    {
        $result = '';
        $ignore = [' ', '-', ',', '.'];
        foreach ($this->getChars($phrase) as $char) {
            $replacement = $this->dictionary[$char] ?? '';
            if (in_array($char, $ignore, true)) {
                $replacement .= $char;
            }
            $result .= $replacement;
        }
        return $result;
    }

    /**
     * Iterate over string (name)
     * @param string $phrase
     * @return Iterator
     */
    private function getChars(string $phrase): Iterator
    {
        $length = mb_strlen($phrase);
        for ($i = 0; $i < $length; $i++) {
            yield mb_substr($phrase, $i, 1);
        }
    }
}
