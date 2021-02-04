<?php

use App\Models\Page\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'title' => 'OUR MISSION',
            'body' => 'To be the leading English speaking International School in Jeddah by promoting a culture of educational excellence from within a caring and secure Islamic environment, enriched with the values of discipline, mutual care and respect, which extends beyond the school into the wider community.',
            'cover_image' => "mission.png"
        ]);

        Page::create([
            'title' => 'OUR VISION',
            'body' => 'To create an inspirational lifelong learning campus with effective interaction that guarantees a high standard of education within a stimulating atmosphere that enhances students’ recreational abilities.',
            'cover_image' => "vision.png"
        ]);

        Page::create([
            'title' => 'OUR ETHOS',
            'body' => 'Our ethos is defined by Faith, Excellence and Service.',
            'cover_image' => "ethos.png"
        ]);


        Page::create([
            'title' => 'FAITH',
            'body' => '<p>
    Through the curriculum and the work of our staff, we focus on key aspects of our
    faith, so that our students can understand how they relate to their everyday lives.
    We promote:<br>
    A wholesome and inclusive identity<br>
    A national and global identity<br>
    A faith identity and a wider spiritual identity that connects the whole world<br>
    A healthy body and mind<br>
    A belief that we are all part of, and are contributing to, something far greater than
    ourselves<br>
    A focus on character development<br>
    An environmental responsibility<br>
        </p>',
            'cover_image' => "faith.png"
        ]);

        Page::create([
            'title' => 'EXCELLENCE',
            'body' => '<p>
Quality, excellence and high standards underpin the Hejaz philosophy. We promote
these values in everything our students do, from the presentation of work in an
exercise book to a piece of complex-level coursework. Staff at Hejaz are expected to
model these behaviours too. In short, ‘If a job’s worth doing, it’s worth doing well’.
We promote:<br>
High aspirations – we celebrate success at every opportunity<br>
Personalised excellence – a passionate belief that each individual is unique and
special – our job is to nurture this talent<br>
Healthy competition – a competitive environment that permeates the life and
conduct of the school<br>
Ambition for our students – to continue to study in Saudi Arabia and overseas, go to
university or pursue a career that is worthy of their talents, beliefs and interests
        </p>',
            'cover_image' => "excellence.png"
        ]);

        Page::create([
            'title' => 'SERVICE',
            'body' => '<p>
Staff and students at Hejaz understand the nature and complexity of today’s society,
and the contribution that each individual must make to sustain a healthy, positive
and creative Saudi nation that can face the challenges of the 21st century with
confidence. We all have our part to play.
At Hejaz we aim to instill a love of learning, a thorough understanding of the
curriculum and a personal commitment to community service, civic pride and
charitable giving in each and every one of our students.
Our aim is to create an outstanding learning community that inspires learners with
excellence in academic achievement, personal development and service to the local
and global community. We want to provide a place for children and young people to
develop as future leaders and active global citizens, and to contribute locally,
nationally and internationally.
<br>
Our goal is to develop children and young people of the highest intellectual calibre who are able to
contribute morally, spiritually, socially, economically and politically to the societies and communities
in which they live, study and work.
Hejaz is driven by the same belief in setting the highest standards in every aspect of school life to
help its pupils attain educational excellence, career success and determination to contribute to the
greater good in the local, national and global community.
        </p>',
            'cover_image' => "service.png"
        ]);
    }
}
