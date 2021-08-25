<?php

namespace EndorphinStudio\Transliteration;

/**
 * Class RussianTransliterator
 * @package EndorphinStudio\Transliteration
 * @author Serhii Nekhaienko <serhii.nekhaienko@gmail.com>
 */
class RussianTransliterator extends BaseTransliterate
{
    protected string $schemaName = 'RU';

    /**
     * @var string[]
     * @link https://ru.wikipedia.org/wiki/%D0%A2%D1%80%D0%B0%D0%BD%D1%81%D0%BB%D0%B8%D1%82%D0%B5%D1%80%D0%B0%D1%86%D0%B8%D1%8F_%D1%80%D1%83%D1%81%D1%81%D0%BA%D0%BE%D0%B3%D0%BE_%D0%B0%D0%BB%D1%84%D0%B0%D0%B2%D0%B8%D1%82%D0%B0_%D0%BB%D0%B0%D1%82%D0%B8%D0%BD%D0%B8%D1%86%D0%B5%D0%B9
     */
    protected array $dictionary = [
        'А' => 'A', 'а' => 'a', 'Б' => 'B', 'б' => 'b',
        'В' => 'V', 'в' => 'v', 'Г' => 'G', 'г' => 'g',
        'Д' => 'D', 'д' => 'd', 'Е' => 'E', 'е' => 'e',
        'Ё' => 'E', 'ё' => 'e', 'Ж' => 'zh', 'ж' => 'zh',
        'З' => 'Z', 'з' => 'z', 'И' => 'I', 'и' => 'i',
        'Й' => 'I', 'й' => 'i', 'К' => 'K', 'к' => 'k',
        'Л' => 'L', 'л' => 'l', 'М' => 'M', 'м' => 'm',
        'Н' => 'N', 'н' => 'n', 'О' => 'O', 'о' => 'o',
        'П' => 'P', 'п' => 'p', 'Р' => 'R', 'р' => 'r',
        'С' => 'S', 'с' => 's', 'Т' => 'T', 'т' => 't',
        'У' => 'U', 'у' => 'u', 'Ф' => 'F', 'ф' => 'f',
        'Х' => 'Kh', 'х' => 'kh', 'Ц' => 'Ts', 'ц' => 'ts',
        'Ч' => 'Ch', 'ч' => 'ch', 'Ш' => 'Sh', 'ш' => 'sh',
        'Щ' => 'Shch', 'щ' => 'shch', 'Ъ' => 'Ie', 'ъ' => 'ie',
        'Ы' => 'Y', 'ы' => 'y', 'Э' => 'e', 'э' => 'e',
        'Ю' => 'Iu', 'ю' => 'iu', 'Я' => 'Ia', 'я' => 'ia',
    ];
}
