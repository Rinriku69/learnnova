<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('courses')->delete();
        
        \DB::table('courses')->insert(array (
            0 => 
            array (
                'id' => 13,
                'code' => 'J101',
                'name' => 'Japanese 101',
            'description' => 'To learn hiragana is to create a foundation for the rest of your Japanese. By learning hiragana, you will learn the basics of Japanese pronunciation. It will also open doors in terms of the Japanese resources you can use. There are no (good) Japanese textbooks or learning resources that don\'t require you to know hiragana. In essence, it\'s the first step to learn Japanese.

Many classes and individuals spend months learning hiragana. This is too long. You should be able to learn everything in a couple days. A week, tops. Some people have reported back that they could read all the hiragana after a few hours, using this method. How long it takes depends on you, but if you follow the steps laid out below, you\'ll come out the other side with the ability to read hiragana.

To make this possible, you will employ a few important methods.

Mnemonics: Due to hiragana\'s relative simplicity (at least compared to kanji), image-based mnemonics are a perfect method for memorization. Each hiragana character has a memorable illustration that goes along with it. For a long time I believed that mnemonics were a waste of time. If this is you, I recommend you give it a serious try. It\'s amazing what you are able to memorize when using a mnemonic method.

No Writing: "WHAT? NO WRITING!?" you scream. I know what you\'re thinking. But, think about it for a moment. When\'s the last time you actually wrote something by hand? Probably the last time you had to sign your name on a receipt at a restaurant. The need to write by hand is going down. Most of your written communication comes in the form of typing. Learning to read can be done very quickly and is very useful. Learning to write doubles or triples how long it takes to learn hiragana, with very little real-life benefit. It will be important to learn eventually, but for now you have more important fish to fry.

Exercises: After studying each column of hiragana, there are exercises for you to go through to review what you\'ve just learned. They also happen to be very well thought out, too. If you do them, and you don\'t cheat (yourself), you will learn hiragana. In these exercises, you should do your best to force yourself recall items, even when you don\'t think you can come up with the answer. The more effort and strain you put into recalling something, the stronger of a memory your brain will end up building (as long as you actually recall it, that is)a.',
                'img' => 'japanese.png',
                'user_id' => 13,
                'created_at' => '2025-10-08 14:13:36',
                'updated_at' => '2025-11-03 07:21:36',
                'visibility' => 'Private',
            ),
            1 => 
            array (
                'id' => 23,
                'code' => 'TH0019',
                'name' => 'Thai Language 1',
                'description' => 'Core components of a Thai course
Introduction to the sounds: Understanding the Thai sound system, including its tones, is crucial, as a misunderstanding of tones can change the meaning of words.
Basic vocabulary and phrases: Students typically start with essential words and phrases for daily life, such as greetings, numbers, and ordering food.
Grammar fundamentals: Courses will cover basic Thai grammar to help learners construct simple sentences.
Conversational practice: The focus is often on practical communication, allowing students to feel confident in everyday situations, like asking for directions.
Cultural context: Many programs integrate cultural insights, customs, and traditions to enhance the learning experience. 
Learning formats and options
Online courses: These are flexible options that allow for learning at your own pace, often with audio and video lessons.
In-person courses: These offer a structured environment, with some intensive programs meeting multiple days a week.
Private lessons: A personalized approach with one-on-one instruction, providing immediate feedback and tailored pacing.
Flexible learning paths: Some schools structure their curriculum from beginner to advanced levels, often with modular programs. 
Optional skills (reading and writing)
Reading and writing: While some courses focus exclusively on speaking and listening, many also offer modules for learning the Thai script.
Romanized script: It\'s possible to learn a functional level of Thai using a romanized script, which can be a good starting point for "travel Thai" if time is limited. 
How to choose a course
Consider your goals: Decide if you want to focus on conversational fluency or if you want to learn to read and write the Thai script.
Evaluate learning style: Choose a format that best suits you, such as a private lesson for personalized attention or an online course for flexibility.
Look for structured content: A well-structured course with a clear learning path can make the process easier.',
                'img' => 'thaiL.jpg',
                'user_id' => 13,
                'created_at' => '2025-10-14 06:50:09',
                'updated_at' => '2025-10-21 14:54:51',
                'visibility' => 'Public',
            ),
            2 => 
            array (
                'id' => 24,
                'code' => '511781',
                'name' => 'Animal',
                'description' => 'asd5',
                'img' => 'animalVoting.jpg',
                'user_id' => 13,
                'created_at' => '2025-10-14 06:51:04',
                'updated_at' => '2025-10-21 12:39:39',
                'visibility' => 'Public',
            ),
            3 => 
            array (
                'id' => 27,
                'code' => '503301',
                'name' => 'How to become Admin',
                'description' => 'You can\'t HAHAHA',
                'img' => 'admin.jpg',
                'user_id' => 10,
                'created_at' => '2025-10-16 14:13:22',
                'updated_at' => '2025-11-03 06:01:35',
                'visibility' => 'Private',
            ),
            4 => 
            array (
                'id' => 37,
                'code' => 'HJ9881',
                'name' => 'Korean In Everyday life',
                'description' => 'Korean Kombe',
                'img' => 'korean.jpg',
                'user_id' => 15,
                'created_at' => '2025-11-01 16:40:43',
                'updated_at' => '2025-11-03 06:42:33',
                'visibility' => 'Public',
            ),
            5 => 
            array (
                'id' => 38,
                'code' => 'CS101',
                'name' => 'Introduction to Computing',
                'description' => 'A foundational course covering the basics of computer science, algorithms, data structures, and programming paradigms. Ideal for absolute beginners interested in technology.',
                'img' => 'Introduction to Computing.png',
                'user_id' => 13,
                'created_at' => '2025-11-02 19:37:00',
                'updated_at' => '2025-11-02 19:37:00',
                'visibility' => 'Public',
            ),
            6 => 
            array (
                'id' => 39,
                'code' => 'ART150',
                'name' => 'Digital Painting Fundamentals',
                'description' => 'Learn core techniques in digital art, focusing on color theory, composition, brush use, and layer management. Practical exercises include still life and portraiture.',
                'img' => 'Digital Painting Fundamentals.png',
                'user_id' => 15,
                'created_at' => '2025-11-02 19:37:00',
                'updated_at' => '2025-11-02 19:37:00',
                'visibility' => 'Private',
            ),
            7 => 
            array (
                'id' => 40,
                'code' => 'BUS205',
                'name' => 'Principles of Marketing',
            'description' => 'Explore the $4$ Ps of marketing (Product, Price, Place, Promotion), market segmentation, consumer behavior, and current digital marketing trends. Includes case studies.',
                'img' => 'Principles of Marketing.png',
                'user_id' => 13,
                'created_at' => '2025-11-02 19:37:00',
                'updated_at' => '2025-11-02 19:37:00',
                'visibility' => 'Public',
            ),
            8 => 
            array (
                'id' => 41,
                'code' => 'PHL301',
                'name' => 'Critical Thinking',
                'description' => 'A course designed to enhance analytical and reasoning skills. Topics include logical fallacies, argument construction, and evaluating sources of information effectively.',
                'img' => 'Critical Thinking.png',
                'user_id' => 13,
                'created_at' => '2025-11-02 19:37:00',
                'updated_at' => '2025-11-02 19:37:00',
                'visibility' => 'Private',
            ),
            9 => 
            array (
                'id' => 42,
                'code' => 'SPA101',
                'name' => 'Spanish Language Level 1',
                'description' => 'Master the basics of Spanish grammar, essential vocabulary, and conversational phrases for everyday situations. Cultural insights into Spanish-speaking countries are also included.',
                'img' => 'Spanish Language Level 1.png',
                'user_id' => 15,
                'created_at' => '2025-11-02 19:37:00',
                'updated_at' => '2025-11-02 19:37:00',
                'visibility' => 'Public',
            ),
            10 => 
            array (
                'id' => 43,
                'code' => 'FIN400',
                'name' => 'Personal Financial Management',
                'description' => 'Learn how to budget, save, invest for retirement, manage debt, and understand basic tax implications. Focuses on practical financial planning for individuals.',
                'img' => 'Personal Financial Management.png',
                'user_id' => 15,
                'created_at' => '2025-11-02 19:37:00',
                'updated_at' => '2025-11-02 19:37:00',
                'visibility' => 'Private',
            ),
            11 => 
            array (
                'id' => 44,
                'code' => 'SCI110',
                'name' => 'Basic Chemistry',
                'description' => 'An introductory survey of general chemistry principles, including atomic structure, chemical bonding, reactions, and the states of matter. Lab safety is a key component.',
                'img' => 'Basic Chemistry.png',
                'user_id' => 15,
                'created_at' => '2025-11-02 19:37:00',
                'updated_at' => '2025-11-02 19:37:00',
                'visibility' => 'Public',
            ),
            12 => 
            array (
                'id' => 45,
                'code' => 'EDU550',
                'name' => 'Classroom Management',
                'description' => 'Techniques and strategies for creating a positive, productive learning environment. Covers behavior management, instructional design, and student engagement.',
                'img' => 'Classroom Management.png',
                'user_id' => 13,
                'created_at' => '2025-11-02 19:37:00',
                'updated_at' => '2025-11-02 19:37:00',
                'visibility' => 'Private',
            ),
            13 => 
            array (
                'id' => 46,
                'code' => 'WEB210',
                'name' => 'Frontend Web Development',
                'description' => 'A practical course on building interactive and responsive user interfaces using HTML5, CSS3, and JavaScript. Focus on modern frameworks and design principles.',
                'img' => 'Frontend Web Development.png',
                'user_id' => 13,
                'created_at' => '2025-11-02 19:37:00',
                'updated_at' => '2025-11-02 19:37:00',
                'visibility' => 'Public',
            ),
            14 => 
            array (
                'id' => 47,
                'code' => 'HIS105',
                'name' => 'World History Since 1500',
                'description' => 'An overview of major global events, trends, and conflicts from the Renaissance to the present day. Examines political, social, and economic developments.',
                'img' => 'World History Since 1500.png',
                'user_id' => 15,
                'created_at' => '2025-11-02 19:37:00',
                'updated_at' => '2025-11-02 19:37:00',
                'visibility' => 'Public',
            ),
        ));
        
        
    }
}