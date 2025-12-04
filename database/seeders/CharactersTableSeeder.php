<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CharactersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('characters')->delete();
        
        \DB::table('characters')->insert(array (
            0 => 
            array (
                'id' => 1,
                'character' => 'あ',
                'romaji' => 'a',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:35:03',
                'created_at' => '2025-09-07 09:35:03',
            ),
            1 => 
            array (
                'id' => 2,
                'character' => 'い',
                'romaji' => 'i',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:36:57',
                'created_at' => '2025-09-07 09:36:57',
            ),
            2 => 
            array (
                'id' => 3,
                'character' => 'う',
                'romaji' => 'u',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:37:24',
                'created_at' => '2025-09-07 09:37:24',
            ),
            3 => 
            array (
                'id' => 4,
                'character' => 'え',
                'romaji' => 'e',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:37:32',
                'created_at' => '2025-09-07 09:37:32',
            ),
            4 => 
            array (
                'id' => 5,
                'character' => 'お',
                'romaji' => 'o',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:37:42',
                'created_at' => '2025-09-07 09:37:42',
            ),
            5 => 
            array (
                'id' => 6,
                'character' => 'か',
                'romaji' => 'ka',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            6 => 
            array (
                'id' => 7,
                'character' => 'き',
                'romaji' => 'ki',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            7 => 
            array (
                'id' => 8,
                'character' => 'く',
                'romaji' => 'ku',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            8 => 
            array (
                'id' => 9,
                'character' => 'け',
                'romaji' => 'ke',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            9 => 
            array (
                'id' => 10,
                'character' => 'こ',
                'romaji' => 'ko',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            10 => 
            array (
                'id' => 11,
                'character' => 'さ',
                'romaji' => 'sa',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            11 => 
            array (
                'id' => 12,
                'character' => 'し',
                'romaji' => 'shi',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            12 => 
            array (
                'id' => 13,
                'character' => 'す',
                'romaji' => 'su',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            13 => 
            array (
                'id' => 14,
                'character' => 'せ',
                'romaji' => 'se',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            14 => 
            array (
                'id' => 15,
                'character' => 'そ',
                'romaji' => 'so',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            15 => 
            array (
                'id' => 16,
                'character' => 'た',
                'romaji' => 'ta',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            16 => 
            array (
                'id' => 17,
                'character' => 'ち',
                'romaji' => 'chi',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            17 => 
            array (
                'id' => 18,
                'character' => 'つ',
                'romaji' => 'tsu',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            18 => 
            array (
                'id' => 19,
                'character' => 'て',
                'romaji' => 'te',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            19 => 
            array (
                'id' => 20,
                'character' => 'と',
                'romaji' => 'to',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            20 => 
            array (
                'id' => 21,
                'character' => 'な',
                'romaji' => 'na',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            21 => 
            array (
                'id' => 22,
                'character' => 'に',
                'romaji' => 'ni',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            22 => 
            array (
                'id' => 23,
                'character' => 'ぬ',
                'romaji' => 'nu',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            23 => 
            array (
                'id' => 24,
                'character' => 'ね',
                'romaji' => 'ne',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            24 => 
            array (
                'id' => 25,
                'character' => 'の',
                'romaji' => 'no',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            25 => 
            array (
                'id' => 26,
                'character' => 'は',
                'romaji' => 'ha',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            26 => 
            array (
                'id' => 27,
                'character' => 'ひ',
                'romaji' => 'hi',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            27 => 
            array (
                'id' => 28,
                'character' => 'ふ',
                'romaji' => 'fu',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            28 => 
            array (
                'id' => 29,
                'character' => 'へ',
                'romaji' => 'he',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            29 => 
            array (
                'id' => 30,
                'character' => 'ほ',
                'romaji' => 'ho',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            30 => 
            array (
                'id' => 31,
                'character' => 'ま',
                'romaji' => 'ma',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            31 => 
            array (
                'id' => 32,
                'character' => 'み',
                'romaji' => 'mi',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            32 => 
            array (
                'id' => 33,
                'character' => 'む',
                'romaji' => 'mu',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            33 => 
            array (
                'id' => 34,
                'character' => 'め',
                'romaji' => 'me',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            34 => 
            array (
                'id' => 35,
                'character' => 'も',
                'romaji' => 'mo',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            35 => 
            array (
                'id' => 36,
                'character' => 'や',
                'romaji' => 'ya',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            36 => 
            array (
                'id' => 37,
                'character' => 'ゆ',
                'romaji' => 'yu',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            37 => 
            array (
                'id' => 38,
                'character' => 'よ',
                'romaji' => 'yo',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            38 => 
            array (
                'id' => 39,
                'character' => 'ら',
                'romaji' => 'ra',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            39 => 
            array (
                'id' => 40,
                'character' => 'り',
                'romaji' => 'ri',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            40 => 
            array (
                'id' => 41,
                'character' => 'る',
                'romaji' => 'ru',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            41 => 
            array (
                'id' => 42,
                'character' => 'れ',
                'romaji' => 're',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            42 => 
            array (
                'id' => 43,
                'character' => 'ろ',
                'romaji' => 'ro',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            43 => 
            array (
                'id' => 44,
                'character' => 'わ',
                'romaji' => 'wa',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            44 => 
            array (
                'id' => 45,
                'character' => 'を',
                'romaji' => 'wo',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            45 => 
            array (
                'id' => 46,
                'character' => 'ん',
                'romaji' => 'n',
                'type' => 'hiragana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            46 => 
            array (
                'id' => 47,
                'character' => 'ア',
                'romaji' => 'a',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            47 => 
            array (
                'id' => 48,
                'character' => 'イ',
                'romaji' => 'i',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            48 => 
            array (
                'id' => 49,
                'character' => 'ウ',
                'romaji' => 'u',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            49 => 
            array (
                'id' => 50,
                'character' => 'エ',
                'romaji' => 'e',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            50 => 
            array (
                'id' => 51,
                'character' => 'オ',
                'romaji' => 'o',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            51 => 
            array (
                'id' => 52,
                'character' => 'カ',
                'romaji' => 'ka',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            52 => 
            array (
                'id' => 53,
                'character' => 'キ',
                'romaji' => 'ki',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            53 => 
            array (
                'id' => 54,
                'character' => 'ク',
                'romaji' => 'ku',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            54 => 
            array (
                'id' => 55,
                'character' => 'ケ',
                'romaji' => 'ke',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            55 => 
            array (
                'id' => 56,
                'character' => 'コ',
                'romaji' => 'ko',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            56 => 
            array (
                'id' => 57,
                'character' => 'サ',
                'romaji' => 'sa',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            57 => 
            array (
                'id' => 58,
                'character' => 'シ',
                'romaji' => 'shi',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            58 => 
            array (
                'id' => 59,
                'character' => 'ス',
                'romaji' => 'su',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            59 => 
            array (
                'id' => 60,
                'character' => 'セ',
                'romaji' => 'se',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            60 => 
            array (
                'id' => 61,
                'character' => 'ソ',
                'romaji' => 'so',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            61 => 
            array (
                'id' => 62,
                'character' => 'タ',
                'romaji' => 'ta',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            62 => 
            array (
                'id' => 63,
                'character' => 'チ',
                'romaji' => 'chi',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            63 => 
            array (
                'id' => 64,
                'character' => 'ツ',
                'romaji' => 'tsu',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            64 => 
            array (
                'id' => 65,
                'character' => 'テ',
                'romaji' => 'te',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            65 => 
            array (
                'id' => 66,
                'character' => 'ト',
                'romaji' => 'to',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            66 => 
            array (
                'id' => 67,
                'character' => 'ナ',
                'romaji' => 'na',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            67 => 
            array (
                'id' => 68,
                'character' => 'ニ',
                'romaji' => 'ni',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            68 => 
            array (
                'id' => 69,
                'character' => 'ヌ',
                'romaji' => 'nu',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            69 => 
            array (
                'id' => 70,
                'character' => 'ネ',
                'romaji' => 'ne',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            70 => 
            array (
                'id' => 71,
                'character' => 'ノ',
                'romaji' => 'no',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            71 => 
            array (
                'id' => 72,
                'character' => 'ハ',
                'romaji' => 'ha',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            72 => 
            array (
                'id' => 73,
                'character' => 'ヒ',
                'romaji' => 'hi',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            73 => 
            array (
                'id' => 74,
                'character' => 'フ',
                'romaji' => 'fu',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            74 => 
            array (
                'id' => 75,
                'character' => 'ヘ',
                'romaji' => 'he',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            75 => 
            array (
                'id' => 76,
                'character' => 'ホ',
                'romaji' => 'ho',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            76 => 
            array (
                'id' => 77,
                'character' => 'マ',
                'romaji' => 'ma',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            77 => 
            array (
                'id' => 78,
                'character' => 'ミ',
                'romaji' => 'mi',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            78 => 
            array (
                'id' => 79,
                'character' => 'ム',
                'romaji' => 'mu',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            79 => 
            array (
                'id' => 80,
                'character' => 'メ',
                'romaji' => 'me',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            80 => 
            array (
                'id' => 81,
                'character' => 'モ',
                'romaji' => 'mo',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            81 => 
            array (
                'id' => 82,
                'character' => 'ヤ',
                'romaji' => 'ya',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            82 => 
            array (
                'id' => 83,
                'character' => 'ユ',
                'romaji' => 'yu',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            83 => 
            array (
                'id' => 84,
                'character' => 'ヨ',
                'romaji' => 'yo',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            84 => 
            array (
                'id' => 85,
                'character' => 'ラ',
                'romaji' => 'ra',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            85 => 
            array (
                'id' => 86,
                'character' => 'リ',
                'romaji' => 'ri',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            86 => 
            array (
                'id' => 87,
                'character' => 'ル',
                'romaji' => 'ru',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            87 => 
            array (
                'id' => 88,
                'character' => 'レ',
                'romaji' => 're',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            88 => 
            array (
                'id' => 89,
                'character' => 'ロ',
                'romaji' => 'ro',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            89 => 
            array (
                'id' => 90,
                'character' => 'ワ',
                'romaji' => 'wa',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            90 => 
            array (
                'id' => 91,
                'character' => 'ヲ',
                'romaji' => 'wo',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            91 => 
            array (
                'id' => 92,
                'character' => 'ン',
                'romaji' => 'n',
                'type' => 'katakana',
                'updated_at' => '2025-09-07 02:40:00',
                'created_at' => '2025-09-07 09:40:00',
            ),
            92 => 
            array (
                'id' => 999,
                'character' => 'wrong',
                'romaji' => 'wrong input',
                'type' => 'wrong',
                'updated_at' => '2025-09-14 10:31:24',
                'created_at' => NULL,
            ),
        ));
        
        
    }
}