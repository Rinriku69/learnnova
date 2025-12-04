<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LessonsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lessons')->delete();
        
        \DB::table('lessons')->insert(array (
            0 => 
            array (
                'id' => 7,
                'title' => 'ก-ฮ',
                'content' => 'Aiya',
                'video_url' => 'a',
                'courses_id' => 23,
                'updated_at' => '2025-10-21 09:10:47',
                'created_at' => '2025-10-21 09:10:47',
            ),
            1 => 
            array (
                'id' => 8,
                'title' => 'Hiragana',
            'content' => 'To learn hiragana is to create a foundation for the rest of your Japanese. By learning hiragana, you will learn the basics of Japanese pronunciation. It will also open doors in terms of the Japanese resources you can use. There are no (good) Japanese textbooks or learning resources that don\'t require you to know hiragana. In essence, it\'s the first step to learn Japanese.

Many classes and individuals spend months learning hiragana. This is too long. You should be able to learn everything in a couple days. A week, tops. Some people have reported back that they could read all the hiragana after a few hours, using this method. How long it takes depends on you, but if you follow the steps laid out below, you\'ll come out the other side with the ability to read hiragana.

To make this possible, you will employ a few important methods.

Mnemonics: Due to hiragana\'s relative simplicity (at least compared to kanji), image-based mnemonics are a perfect method for memorization. Each hiragana character has a memorable illustration that goes along with it. For a long time I believed that mnemonics were a waste of time. If this is you, I recommend you give it a serious try. It\'s amazing what you are able to memorize when using a mnemonic method.

No Writing: "WHAT? NO WRITING!?" you scream. I know what you\'re thinking. But, think about it for a moment. When\'s the last time you actually wrote something by hand? Probably the last time you had to sign your name on a receipt at a restaurant. The need to write by hand is going down. Most of your written communication comes in the form of typing. Learning to read can be done very quickly and is very useful. Learning to write doubles or triples how long it takes to learn hiragana, with very little real-life benefit. It will be important to learn eventually, but for now you have more important fish to fry.

Exercises: After studying each column of hiragana, there are exercises for you to go through to review what you\'ve just learned. They also happen to be very well thought out, too. If you do them, and you don\'t cheat (yourself), you will learn hiragana. In these exercises, you should do your best to force yourself recall items, even when you don\'t think you can come up with the answer. The more effort and strain you put into recalling something, the stronger of a memory your brain will end up building (as long as you actually recall it, that is).

For the most part, if you follow along and do everything that this hiragana guide says, you will learn the hiragana. It will be difficult not to.',
                'video_url' => 'ab',
                'courses_id' => 13,
                'updated_at' => '2025-11-03 04:48:04',
                'created_at' => '2025-10-21 10:56:43',
            ),
            2 => 
            array (
                'id' => 10,
                'title' => 'Aloha',
                'content' => 'あA いI うU えE おO
This is the first (and most important!) column in hiragana. It sets the pronunciation of every other column coming after it, because every other column is basically just the a-i-u-e-o column with consonants attached to them. The same basic sound repeats over and over and over, with a consonant plus these five vowel sounds, so make sure you have the right pronunciation for these five right from the start.

Shall we? No, that\'s okay, after you',
                'video_url' => 'ada',
                'courses_id' => 27,
                'updated_at' => '2025-10-28 09:41:56',
                'created_at' => '2025-10-21 13:03:21',
            ),
            3 => 
            array (
                'id' => 11,
                'title' => 'What is a Computer?',
                'content' => 'An introduction to hardware, software, and the basic components of a computer system.',
                'video_url' => 'comp101_vid1.mp4',
                'courses_id' => 39,
                'updated_at' => '2025-11-03 11:05:08',
                'created_at' => '2025-11-03 11:05:08',
            ),
            4 => 
            array (
                'id' => 12,
                'title' => 'Understanding Binary',
                'content' => 'Learn how computers use 0s and 1s to represent all data.',
                'video_url' => 'comp101_vid2.mp4',
                'courses_id' => 39,
                'updated_at' => '2025-11-03 11:05:08',
                'created_at' => '2025-11-03 11:05:08',
            ),
            5 => 
            array (
                'id' => 13,
                'title' => 'Setting Up Your Workspace',
                'content' => 'Choosing the right software and configuring your drawing tablet.',
                'video_url' => 'paint101_vid1.mp4',
                'courses_id' => 40,
                'updated_at' => '2025-11-03 11:05:08',
                'created_at' => '2025-11-03 11:05:08',
            ),
            6 => 
            array (
                'id' => 14,
                'title' => 'Brushes and Blending',
                'content' => 'An overview of basic brush types and blending techniques.',
                'video_url' => 'paint101_vid2.mp4',
                'courses_id' => 40,
                'updated_at' => '2025-11-03 11:05:08',
                'created_at' => '2025-11-03 11:05:08',
            ),
            7 => 
            array (
                'id' => 15,
                'title' => 'What is an Atom?',
                'content' => 'The fundamental building blocks of matter: protons, neutrons, and electrons.',
                'video_url' => 'chem101_vid1.mp4',
                'courses_id' => 44,
                'updated_at' => '2025-11-03 11:05:08',
                'created_at' => '2025-11-03 11:05:08',
            ),
            8 => 
            array (
                'id' => 16,
                'title' => 'The Periodic Table',
                'content' => 'How to read the periodic table and understand element properties.',
                'video_url' => 'chem101_vid2.mp4',
                'courses_id' => 44,
                'updated_at' => '2025-11-03 11:05:08',
                'created_at' => '2025-11-03 11:05:08',
            ),
            9 => 
            array (
                'id' => 17,
                'title' => 'Hiragana Basics',
                'content' => 'Learn the first 5 characters: a, i, u, e, o.',
                'video_url' => 'jp101_v1.mp4',
                'courses_id' => 13,
                'updated_at' => '2025-11-03 11:07:26',
                'created_at' => '2025-11-03 11:07:26',
            ),
            10 => 
            array (
                'id' => 18,
                'title' => 'Katakana Basics',
                'content' => 'Learn the Katakana equivalents: a, i, u, e, o.',
                'video_url' => 'jp101_v2.mp4',
                'courses_id' => 13,
                'updated_at' => '2025-11-03 11:07:26',
                'created_at' => '2025-11-03 11:07:26',
            ),
            11 => 
            array (
                'id' => 19,
                'title' => 'Thai Consonants',
                'content' => 'Introduction to the 44 Thai consonants.',
                'video_url' => 'th101_v1.mp4',
                'courses_id' => 23,
                'updated_at' => '2025-11-03 11:07:26',
                'created_at' => '2025-11-03 11:07:26',
            ),
            12 => 
            array (
                'id' => 20,
                'title' => 'Vowels and Tones',
                'content' => 'Understanding Thai vowels and the 5 tones.',
                'video_url' => 'th101_v2.mp4',
                'courses_id' => 23,
                'updated_at' => '2025-11-03 11:07:26',
                'created_at' => '2025-11-03 11:07:26',
            ),
            13 => 
            array (
                'id' => 21,
                'title' => 'Introduction to Mammals',
                'content' => 'What defines a mammal?',
                'video_url' => 'animal_v1.mp4',
                'courses_id' => 24,
                'updated_at' => '2025-11-03 11:07:26',
                'created_at' => '2025-11-03 11:07:26',
            ),
            14 => 
            array (
                'id' => 22,
                'title' => 'Reptiles vs Amphibians',
                'content' => 'Key differences between reptiles and amphibians.',
                'video_url' => 'animal_v2.mp4',
                'courses_id' => 24,
                'updated_at' => '2025-11-03 11:07:26',
                'created_at' => '2025-11-03 11:07:26',
            ),
            15 => 
            array (
                'id' => 23,
                'title' => 'Admin Lesson 1',
                'content' => 'Content for admins.',
                'video_url' => 'admin_v1.mp4',
                'courses_id' => 27,
                'updated_at' => '2025-11-03 11:07:26',
                'created_at' => '2025-11-03 11:07:26',
            ),
            16 => 
            array (
                'id' => 24,
                'title' => 'Admin Lesson 2',
                'content' => 'More secret content.',
                'video_url' => 'admin_v2.mp4',
                'courses_id' => 27,
                'updated_at' => '2025-11-03 11:07:26',
                'created_at' => '2025-11-03 11:07:26',
            ),
            17 => 
            array (
                'id' => 25,
                'title' => 'Basic Greetings',
                'content' => 'Learn Annyeonghaseyo and Kamsahamnida.',
                'video_url' => 'kor101_v1.mp4',
                'courses_id' => 37,
                'updated_at' => '2025-11-03 11:07:26',
                'created_at' => '2025-11-03 11:07:26',
            ),
            18 => 
            array (
                'id' => 26,
                'title' => 'Ordering Food',
                'content' => 'How to order food in a Korean restaurant.',
                'video_url' => 'kor101_v2.mp4',
                'courses_id' => 37,
                'updated_at' => '2025-11-03 11:07:26',
                'created_at' => '2025-11-03 11:07:26',
            ),
            19 => 
            array (
                'id' => 27,
                'title' => 'The 4 Ps of Marketing',
                'content' => 'Product, Price, Place, Promotion.',
                'video_url' => 'mark101_v1.mp4',
                'courses_id' => 40,
                'updated_at' => '2025-11-03 11:07:26',
                'created_at' => '2025-11-03 11:07:26',
            ),
            20 => 
            array (
                'id' => 28,
                'title' => 'Understanding Your Customer',
                'content' => 'What is a target audience?',
                'video_url' => 'mark101_v2.mp4',
                'courses_id' => 40,
                'updated_at' => '2025-11-03 11:07:26',
                'created_at' => '2025-11-03 11:07:26',
            ),
            21 => 
            array (
                'id' => 29,
                'title' => 'What is an Argument?',
                'content' => 'Identifying premises and conclusions.',
                'video_url' => 'ct101_v1.mp4',
                'courses_id' => 41,
                'updated_at' => '2025-11-03 11:07:26',
                'created_at' => '2025-11-03 11:07:26',
            ),
            22 => 
            array (
                'id' => 30,
                'title' => 'Logical Fallacies',
                'content' => 'Common errors in reasoning.',
                'video_url' => 'ct101_v2.mp4',
                'courses_id' => 41,
                'updated_at' => '2025-11-03 11:07:26',
                'created_at' => '2025-11-03 11:07:26',
            ),
            23 => 
            array (
                'id' => 31,
                'title' => 'Greetings and Introductions',
                'content' => 'Hola, Cómo estás?',
                'video_url' => 'spa101_v1.mp4',
                'courses_id' => 42,
                'updated_at' => '2025-11-03 11:07:26',
                'created_at' => '2025-11-03 11:07:26',
            ),
            24 => 
            array (
                'id' => 32,
            'title' => 'Basic Verbs (Ser vs Estar)',
                'content' => 'Understanding the two forms of "to be".',
                'video_url' => 'spa101_v2.mp4',
                'courses_id' => 42,
                'updated_at' => '2025-11-03 11:07:26',
                'created_at' => '2025-11-03 11:07:26',
            ),
            25 => 
            array (
                'id' => 33,
                'title' => 'Budgeting 101',
                'content' => 'How to create a monthly budget.',
                'video_url' => 'fin101_v1.mp4',
                'courses_id' => 43,
                'updated_at' => '2025-11-03 11:07:26',
                'created_at' => '2025-11-03 11:07:26',
            ),
            26 => 
            array (
                'id' => 34,
                'title' => 'Introduction to Investing',
                'content' => 'Stocks, bonds, and mutual funds.',
                'video_url' => 'fin101_v2.mp4',
                'courses_id' => 43,
                'updated_at' => '2025-11-03 11:07:26',
                'created_at' => '2025-11-03 11:07:26',
            ),
            27 => 
            array (
                'id' => 35,
                'title' => 'Establishing Routines',
                'content' => 'Creating a structured learning environment.',
                'video_url' => 'edu101_v1.mp4',
                'courses_id' => 45,
                'updated_at' => '2025-11-03 11:07:26',
                'created_at' => '2025-11-03 11:07:26',
            ),
            28 => 
            array (
                'id' => 36,
                'title' => 'Positive Reinforcement',
                'content' => 'Techniques for encouraging good behavior.',
                'video_url' => 'edu101_v2.mp4',
                'courses_id' => 45,
                'updated_at' => '2025-11-03 11:07:26',
                'created_at' => '2025-11-03 11:07:26',
            ),
            29 => 
            array (
                'id' => 37,
                'title' => 'HTML Basics',
                'content' => 'Understanding tags, elements, and attributes.',
                'video_url' => 'web101_v1.mp4',
                'courses_id' => 46,
                'updated_at' => '2025-11-03 11:07:26',
                'created_at' => '2025-11-03 11:07:26',
            ),
            30 => 
            array (
                'id' => 38,
                'title' => 'CSS Fundamentals',
                'content' => 'Selectors, properties, and values.',
                'video_url' => 'web101_v2.mp4',
                'courses_id' => 46,
                'updated_at' => '2025-11-03 11:07:26',
                'created_at' => '2025-11-03 11:07:26',
            ),
            31 => 
            array (
                'id' => 39,
                'title' => 'The Age of Exploration',
                'content' => 'Navigators and new continents.',
                'video_url' => 'hist101_v1.mp4',
                'courses_id' => 47,
                'updated_at' => '2025-11-03 11:07:26',
                'created_at' => '2025-11-03 11:07:26',
            ),
            32 => 
            array (
                'id' => 40,
                'title' => 'The Industrial Revolution',
                'content' => 'Changes in technology and society.',
                'video_url' => 'hist101_v2.mp4',
                'courses_id' => 47,
                'updated_at' => '2025-11-03 11:07:26',
                'created_at' => '2025-11-03 11:07:26',
            ),
            33 => 
            array (
                'id' => 42,
                'title' => 'Japan History',
                'content' => 'Samurai 1998',
                'video_url' => 'asd',
                'courses_id' => 13,
                'updated_at' => '2025-11-03 04:50:55',
                'created_at' => '2025-11-03 04:50:55',
            ),
            34 => 
            array (
                'id' => 45,
                'title' => 'H123',
                'content' => 'sdfsdf',
                'video_url' => 'sdf',
                'courses_id' => 13,
                'updated_at' => '2025-11-03 07:31:27',
                'created_at' => '2025-11-03 07:31:27',
            ),
        ));
        
        
    }
}