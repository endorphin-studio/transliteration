<?php


namespace EndorphinStudio\Transliteration;

/**
 * Class UkrainianTransiterator
 * @package EndorphinStudio\Transliteration
 * @author Serhii Nekhaienko <serhii.nekhaienko@gmail.com>
 */
class UkrainianTransiterator extends BaseTransliterate
{
    protected string $language = 'UA';

    /**
     * @var string[]
     * @link https://pasport.org.ua/ru/faq/transliteration
     */
    protected array $dictionary = [
        'А' => 'A', 'а' => 'a', 'Б' => 'B', 'б' => 'b',
        'В' => 'V', 'в' => 'v', 'Г' => 'H', 'г' => 'h',
        'Ґ' => 'G', 'ґ' => 'g', 'Д' => 'D', 'д' => 'd',
        'Е' => 'E', 'е' => 'e', 'Є' => 'Ye', 'є' => 'ie',
        'Ж' => 'Zh', 'ж' => 'zh', 'З' => 'Z', 'з' => 'z',
        'И' => 'Y', 'и' => 'y', 'І' => 'I', 'і' => 'i',
        'Ї' => 'Yi', 'ї' => 'i', 'Й' => 'Y', 'й' => 'i',
        'К' => 'K', 'к' => 'k', 'Л' => 'L', 'л' => 'l',
        'М' => 'M', 'м' => 'm', 'Н' => 'N', 'н' => 'n',
        'О' => 'O', 'о' => 'o', 'П' => 'P', 'п' => 'p',
        'Р' => 'R', 'р' => 'r', 'С' => 'S', 'с' => 's',
        'Т' => 'T', 'т' => 't', 'У' => 'U', 'у' => 'u',
        'Ф' => 'F', 'ф' => 'F', 'Х' => 'Kh', 'х' => 'kh',
        'Ц' => 'Ts', 'ц' => 'ts', 'Ч' => 'Ch', 'ч' => 'ch',
        'Ш' => 'Sh', 'ш' => 'sh', 'Щ' => 'Shch', 'щ' => 'shch',
        'Ю' => 'Yu', 'ю' => 'іu', 'Я' => 'Ya', 'я' => 'ia',
    ];
}
