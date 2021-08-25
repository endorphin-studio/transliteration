<?php


namespace EndorphinStudio\Transliteration;

/**
 * Class BaseTransliterate
 * @package EndorphinStudio\Transliteration
 * @author Serhii Nekhaienko <serhii.nekhaienko@gmail.com>
 */
abstract class BaseTransliterate
{
    /**
     * Language code
     * @var string
     */
    protected string $language = '';

    /**
     * List of replacements
     * @var string[]
     */
    protected array $dictionary = [];

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
