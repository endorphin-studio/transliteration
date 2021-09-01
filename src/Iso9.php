<?php

namespace EndorphinStudio\Transliteration;

class Iso9 extends BaseTransliterate
{
    protected string $schemaName = 'ISO 9';

    protected array $dictionary = [
        'А' => 'A', 'а' => 'a',
        'Б' => 'B', 'б' => 'b',
        'В' => 'V', 'в' => 'v',
        'Г' => 'G', 'г' => 'g',
        'Ґ' => 'G', 'ґ' => 'g',
        'Д' => 'D', 'д' => 'd',
        'Ѓ' => 'Ǵ', 'ѓ' => 'ǵ',
        'Ђ' => 'Đ', 'ђ' => 'đ',
        'Е' => 'E', 'е' => 'e',
        'Ё' => 'Yo', 'ё' => 'yo',
        'Є' => 'Je', 'є' => 'je',
        'Ж' => 'Zh', 'ж' => 'zh',
        'З' => 'Z', 'з' => 'z',
        'Ѕ' => 'Dz', 'ѕ' => 'dz',
        'И' => 'I', 'и' => 'i',
        'I' => 'I', 'і' => 'i',
        'Ї' => 'Ji', 'ї' => 'ji',
        'Й' => 'J', 'й' => 'j',
        'Ј' => 'J', 'ј' => 'j',
        'К' => 'K', 'к' => 'k',
        'Л' => 'L', 'л' => 'l',
        'Љ' => 'Lj', 'љ' => 'lj',
        'М' => 'M', 'м' => 'm',
        'Н' => 'N', 'н' => 'n',
        'Њ' => 'Nj', 'њ' => 'nj',
        'О' => 'O', 'о' => 'o',
        'П' => 'P', 'п' => 'p',
        'Р' => 'R', 'р' => 'r',
        'С' => 'S', 'с' => 's',
        'Т' => 'T', 'т' => 't',
        'Ќ' => 'K', 'ќ' => 'k',
        'Ћ' => 'Ć', 'ћ' => 'ć',
        'У' => 'U', 'у' => 'u',
        'Ў' => 'Ŭ', 'ў' => 'ŭ',
        'Ф' => 'F', 'ф' => 'f',
        'Х' => 'Kh', 'х' => 'kh',
        'Ц' => 'C', 'ц' => 'c',
        'Ч' => 'Ch', 'ч' => 'ch',
        'Џ' => 'Dž', 'џ' => 'dž',
        'Ш' => 'Sh', 'ш' => 'sh',
        'Щ' => 'Shch', 'щ' => 'shch',
        'Ы' => 'ʺ', 'ы' => 'ʺ',
        'Ъ' => 'Y', 'ъ' => 'y',
        'Ь' => 'ʹ', 'ь' => 'ʹ',
        'Ѣ' => 'Ě', 'ѣ' => 'ě',
        'Э' => 'È', 'э' => 'è',
        'Ю' => 'Yu', 'ю' => 'yu',
        'Я' => 'Ya', 'я' => 'ya',
        '’' => '’',
        'Ѫ' => 'Ǎ', 'ѫ' => 'ǎ',
        'Ѳ' => 'F̀', 'ѳ' => 'f̀',
        'Ѵ' => 'Ỳ', 'ѵ' => 'ỳ̀',
    ];
}
