<?php


namespace EndorphinStudio\Transliteration;

/**
 * Class BaseTransliterate
 * @package EndorphinStudio\Transliteration
 * @author Serhii Nekhaienko <serhii.nekhaienko@gmail.com>
 */
abstract class BaseTransliterate implements TransliterateSchemaInterface
{
    /**
     * This method will be used if you want to extend existing dictionary
     */
    public function extend(): void
    {

    }

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
        foreach ($this->getChars($phrase) as $char) {
            $replacement = $this->dictionary[$char] ?? '';
            if($char === ' ') {
                $replacement .= ' ';
            }
            $result .= $replacement;
        }
        return $result;
    }

    /**
     * Iterate over string (name)
     * @param string $phrase
     * @return \Iterator
     */
    private function getChars(string $phrase): \Iterator
    {
        $length = mb_strlen($phrase);
        for ($i = 0; $i < $length; $i++) {
            yield mb_substr($phrase, $i, 1);
        }
    }
}
