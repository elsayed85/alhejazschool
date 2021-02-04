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
            'body' => 'To meet the needs of our learners that will lead to educational excellence within Islamic core values of life, tolerance and respect of tradition of diverse community.',
            'cover_image' => "mission.png"
        ]);

        Page::create([
            'title' => 'OUR VISION',
            'body' => 'To build a learning generation, powered by the 21st Century skills that are enriched with innovation, responsibility and collaboration.',
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

        Page::create([
            'title' => "Boys",
            'body' => '<p>
            <br />
            &nbsp;
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">H.I.S Times&nbsp; - Issue No.&nbsp;</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Contents:</span></span></span></span></span></span>
          </p>
          <ol>
            <li aria-level="1" style="list-style-type:decimal"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Welcome message from our Distinguished Principals</span></span></span></span></span></span></li>
            <li aria-level="1" style="list-style-type:decimal"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">School Mission and Vision</span></span></span></span></span></span></li>
            <li aria-level="1" style="list-style-type:decimal"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Editors desk&nbsp;</span></span></span></span></span></span></li>
            <li aria-level="1" style="list-style-type:decimal"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Cognia &ndash; AdvancED accreditation</span></span></span></span></span></span></li>
            <li aria-level="1" style="list-style-type:decimal"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Curricular activities-</span></span></span></span></span></span></li>
          </ol>
          <ul>
            <li aria-level="1" style="list-style-type:disc"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">School Inter classes debate</span></span></span></span></span></span></li>
            <li aria-level="1" style="list-style-type:disc"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Scientific Trip to King AbdulAziz University</span></span></span></span></span></span></li>
            <li aria-level="1" style="list-style-type:disc"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">School What do you know contest</span></span></span></span></span></span></li>
          </ul>
          <ol start="6">
            <li aria-level="1" style="list-style-type:decimal"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Extra curricular activities-&nbsp;</span></span></span></span></span></span></li>
          </ol>
          <ul>
            <li aria-level="1" style="list-style-type:disc"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Field Trips ( boys&rsquo; Section- Girls&rsquo; section)</span></span></span></span></span></span></li>
            <li aria-level="1" style="list-style-type:disc"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Students Council</span></span></span></span></span></span></li>
          </ul>
          <ol start="7">
            <li aria-level="1" style="list-style-type:decimal"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Saudi National Day&nbsp;</span></span></span></span></span></span></li>
            <li aria-level="1" style="list-style-type:decimal"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">PTA Meeting</span></span></span></span></span></span></li>
          </ol>
          <p>
            <br />
            <br />
            <br />
            &nbsp;
          </p>
          <ol>
            <li aria-level="2" style="list-style-type:decimal"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Welcome News from our Principals:</span></span></span></span></span></span></li>
          </ol>
          <p>&nbsp;
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">Welcome Message from the Principal to parents</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Dear Students, Parents and Guardians:</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Welcome to Al Hejaz School.&nbsp; We are honored by our dedicated, experienced staff and enthusiastic learners! We are continuing with our latest edition of our news stand, in line with the tradition of free flow of information.</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">With the demands and complexities of teaching children being on the increase, it becomes more evident that we all need to work together to ensure that our children reach their potential.&nbsp; We fervently believe that all of us &ndash; the school and the community &ndash; must work at par in an extended family environment to guarantee success for all our students.&nbsp; We are certain that it is everyone&rsquo;s responsibility to empower children with the creative, intellectual, and decision-making skills necessary for them to become academically, socially, physically, and emotionally successful and responsible in today&rsquo;s competitive environment.</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">With that in mind, and in consonance of our vision and mission, It is our desire to keep you informed of all that is taking place at school.&nbsp; Up-to-date and additional information will be sent to you through the New Ifada system and will appear on our&nbsp;webpage. If you have questions or concerns that arise at any time, please do not hesitate to contact the School administration.&nbsp; I look forward to having a long and rewarding relationship with you and your family.</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Sincerely,</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Mazed Al Otibi, &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mrs. Nora Hashem</span></span></span></span></span></span>
            <br />
            <span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Principal- Boys&rsquo; Section&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Principal- Girls&rsquo; Section</span></span></span></span></span></span>
            <br />
            &nbsp;
          </p>
          <p>
            <br />
            <br />
            &nbsp;
          </p>
          <p style="line-height:1.3800000000000001; text-align:center; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">Mission and Vision</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-left:48px; text-align:center"><span style="font-size:13pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Mission</span></span></span></span></span></span>
          </p>
          <p style="line-height:2.4; margin-left:48px; text-align:center"><span style="font-size:15pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">To meet the needs of our learners that will lead to educational excellence within Islamic core values of life, tolerance and respect of tradition of diverse community.</span></span></span></span></span></span>
          </p>
          <p>&nbsp;
          </p>
          <p style="line-height:1.3800000000000001; margin-left:48px; text-align:center"><span style="font-size:13pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Vision</span></span></span></span></span></span>
          </p>
          <p style="line-height:2.4; text-align:center; margin-bottom:13px"><span style="font-size:15pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">To build a learning generation, powered by the 21</span></span></span></span></span></span><span style="font-size:15pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><sup style="font-size:0.6em">st</sup></span></span></span></span></span></span><span style="font-size:15pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"> Century skills that are enriched with innovation, responsibility and collaboration.</span></span></span></span></span></span>
          </p>
          <p>
            <br />
            <br />
            &nbsp;
          </p>
          <p style="line-height:1.3800000000000001; text-align:center; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">Editors&rsquo; Desk</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">We warmly welcome you to the latest edition of Hejaz Times. It is our fervent hope and wishes that everyone will enjoy reading this episode, which is parked with interesting and amazing news about Al Hejaz.&nbsp;</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.2"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">One way we would keep in touch with our stake holders is to continue producing this piece to enable you be abreast with Hejaz information. We believe that it will also serve as a medium through which our young writers will expose their innovative talents in the making.&nbsp;</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.2"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">We are greatly indebted to all members of staff particularly Mr. Daryl, our ICT technician, for their contribution without which this completion would not have taken the present form and style. Continue reading and savour the joy.</span></span></span></span></span></span>
          </p>
          <p>
            <br />
            <br />
            <br />
            <br />
            <br />
            &nbsp;
          </p>
          <p style="line-height:1.3800000000000001; margin-left:8px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">Cognia &ndash; AdvancED accreditation</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-left:8px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Hurray, once again Al Hejaz International School is back on track to renew its accreditation, hopefully for another five year term. The school accreditation team led by Mr. Abdulhameed, are working round the clock to steer affairs to a success. It is expected that the staff will give unceasing support to the team.&nbsp;</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-left:8px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">It should be noted that, AdvancED is now operating under the auspices of a new name known as Cognia. We would like to take the opportunity to inform members of the change of our mission and vision, which has been spelt out above.</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-left:8px; margin-right:-20px; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">We hope to keep you informed about any further changes, regarding AdvancED.</span></span></span></span></span></span>
          </p>
          <p>&nbsp;
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">School Inter classes Debate and Speaking Competition:</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">The boys&rsquo; section was treated to a class debate (upper grades) and speaking contest (lower grades). These contests were aimed at boosting the speaking skill of our students both publicly and examination context. Actually, some students displayed their speaking prowess amidst exhibits of vocabulary and fluency. It is for this noble reason that a speaking class has been introduced the lower grades, to facilitate their oral presentations. What is surprising about the debates is the unearthing of some talented learners that we called &ldquo; &nbsp; &nbsp; &ldquo;. Notwithstanding their groups dismal performance, they were the students that stood tall in their debating groups, and deserve a huge round of applause.</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">(insert pictures)</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">Educational Visit to King Abdul Aziz University</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">The Grade 9(Boys&rsquo; Section) had the opportunity to visit the King Abdul Aziz University Science Department under the guardianship of our distinguished veteran teacher (Mr. AbdulRahman Alsaadi). The visit took place ( Date......) Students used the opportunity to buttress their scientific research and knowledge by practicalizing all theories from the classrooms. Indeed, it was a very fruitful piece of academic trips. Students urged the school administration to proceed with more trips of this nature as it comes along with lots of benefits.</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">( insert pictures)</span></span></span></span></span></span>
          </p>
          <p>&nbsp;
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">School what do you know Quiz contest&nbsp;</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">The boys&rsquo; section is pleased to inform you that under the notable leadership of Mr. Sameer and Mr. Mohammed Mansoury, we have embarked on inter classes what do you know Quiz, which pits all lower grades together (Grade 4-6). Questions ranged from Arabic, Islamic, Science, English, Mathematics, P.E., ICT and Saudi Geography were answered during the contest.</span></span></span></span></span></span>
            <br />
            <span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">After some interesting and thought provoking performances, </span></span></span></span></span></span><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">Grade 5B,</span></span></span></span></span></span><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"> became the overall winners of lower grade, which covered a span of five weeks. The event was moderated by Mr. Smith and held every Thursday.&nbsp; All in all, the homerooms (class teachers) are to be commended for their wonderful support. It is our fervent hope that, upper grades will also flex their muscles to challenge each other in the second term.&nbsp;</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">We will bring you updates from upper grades contests soon.</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">(insert pictures)</span></span></span></span></span></span>
          </p>
          <p>&nbsp;
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">FIELD TRIPS</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Students of Al Hejaz International School conducted their annual trip on (___date____) and guess where? To Attalla Happy Land Park. They had a break from the hustles and bustle of school life to relax the brain after long teaching and learning weeks. Students got the chance to play from 9.am. till afternoon. Activities ranged from bumper cars, musical dancing, surf rider, young fan, state &ndash; of &ndash; the&nbsp; - art computer games arcade and merry go round. Many students echoed on the fact that, they wish most school day are like this.</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">(insert pictures)</span></span></span></span></span></span>
          </p>
          <p>&nbsp;
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">STUDENT COUNCIL</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Hurray, our student council is back on track. Elections have been conducted&nbsp; to choose thee leaders. Amazingly, Mohammed Yaser became the President , and Mahmoud Hamido became the vice President ( Boys&rsquo; Section). As reiterated, the objective of the Student Council is to give voice to these young academicians who will turn indirectly shape some students issues in the school. This justified by the fact that they are part of stakeholders. More activities will follow during the second term.</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">SAUDI NATIONAL DAY</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">This is a day (23</span></span></span></span></span></span><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><sup style="font-size:0.6em">rd</sup></span></span></span></span></span></span><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"> of September, )which occurs annually&nbsp; that all students have been awaiting eagerly to honour the country&rsquo;s founder- King Abdul Aziz Al Saudi (May his soul rest in perfect Peace) and his descendants who are currently on the throne. Students displayed the Saudi National Colours with the pictures of the King ( His Royal Highness King Salman bin AbdulAziz Al Saud and his successor ( Prince Mohammed bin Salman) boldly displayed. The Saudi National Anthem was also sung to commemorate the occasion. Of course, this day has become part and parcel of our tradition to pay tribute to the country&rsquo;s heroes mentioned earlier.</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">(insert pictures)</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">OPEN PTA MEETING</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">On the (___date___ )In this periphery, Parents had the chance to meet their respected teachers, discuss reports of their children or wards. Attendance was about 35%, apparently due to the time of the meeting which coincides with working hours. Parents had a tit a tat with teachers. Most went home smiling due to the amazing performances of their wards, while others had some issues to settle due to some irregularities with their report cards. Parents voiced out how the school can improve academically and physically. The meeting ,which began at 9.am. ended at 1 p.m.</span></span></span></span></span></span>
          </p>
          <p style="line-height:1.3800000000000001; margin-bottom:13px"><span style="font-size:13.999999999999998pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">(insert picture)</span></span></span></span></span></span>
          </p>
          <p>&nbsp;
          </p>
          ',
        ]);

        Page::create([
            'title' => 'Girls',
            'body' => '<p>&nbsp;
            </p>
            <p style="line-height:1.2"><span style="font-size:19pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:"Helvetica Neue",sans-serif"><span style="color:#1d2228"><span style="background-color:#ffffff"><span style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">&ldquo;Field Trip&rdquo;</span></span></span></span></span></span></span>
              <br />
              &nbsp;
            </p>
            <p style="line-height:1.2; background-color:#ffffff; padding:0pt 0pt 2.25pt 0pt"><span style="font-size:19pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:"Helvetica Neue",sans-serif"><span style="color:#1d2228"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">At the commencement of November 2019, the school embarked for the Field Trip of the Girls Section. This has been a gratifying month for the school and the students. The KG Department went to Billy Beez on the 28th of November, while the Grades 1-3 Girls had fun in Skyzone on the 20th of November. On the other hand, Grades 1-3 Boys had a satisfying trip in Sparkys during the 21st of November. While the Grades 4-9 Girls had a pleasurable trip watching Maleficent 2 in cinema. Most of the students had a delightful trip this term and still looking forward to their next trip in the second term.&nbsp;</span></span></span></span></span></span>
            </p>
            <p style="line-height:1.2; background-color:#ffffff; padding:0pt 0pt 2.25pt 0pt">&nbsp;
            </p>
            <p style="line-height:1.2; background-color:#ffffff; padding:0pt 0pt 2.25pt 0pt"><span style="font-size:19pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:"Helvetica Neue",sans-serif"><span style="color:#1d2228"><span style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">&ldquo;Saudi National Day&rdquo;</span></span></span></span></span></span>
            </p>
            <p style="line-height:1.2; background-color:#ffffff; padding:0pt 0pt 2.25pt 0pt"><span style="font-size:19pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:"Helvetica Neue",sans-serif"><span style="color:#1d2228"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Students, teachers and management of Alhejaz International School celebrated the &ldquo;Saudi National Day&rdquo; in the Girls Section. The Grades 1-3 boys celebrated it on 25th of Sept, while the Grades 1-9 Girls had acclaimed it on 29th of September. The students and staff were all dressed&nbsp;in green and white to reflect the true spirit of Nationalism.&nbsp;&nbsp;A variety of cultural programs were&nbsp;performed by the students under the supervision of their teachers. The Saudi National Day was celebrated with great enthusiasm and great fervor.&nbsp;</span></span></span></span></span></span>
            </p>
            <p style="line-height:1.2; background-color:#ffffff; padding:0pt 0pt 2.25pt 0pt">&nbsp;
            </p>
            <p style="line-height:1.2; background-color:#ffffff; padding:0pt 0pt 2.25pt 0pt"><span style="font-size:19pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:"Helvetica Neue",sans-serif"><span style="color:#1d2228"><span style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">&ldquo;Parent Teacher Meeting&rdquo;</span></span></span></span></span></span>
            </p>
            <p style="line-height:1.2; background-color:#ffffff"><span style="font-size:14.5pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:"Helvetica Neue",sans-serif"><span style="color:#1d2228"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">In line with the school&rsquo;s policy, the First Term of the School Year 2019-2020 witnessed the Girls Section&rsquo;s Parent Teacher Meeting on the 14th November. It is important to have this kind of conference in order to discuss several issues about what the parents feel are hindering their children&rsquo;s learning. Face to face communication with the teacher helps the parents to plan out the learning process of their children. Hence the reason behind this noble meeting with Alhejaz International School, which is aimed at helping the students and their parents improve understanding of issues at stake. The meeting was a success and a lot of parents were happy with the outputs of the teachers.&nbsp;</span></span></span></span></span></span>
            </p>
            <p style="line-height:1.2; background-color:#ffffff">&nbsp;
            </p>
            <p style="line-height:1.2; background-color:#ffffff; padding:0pt 0pt 2.25pt 0pt"><span style="font-size:19pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:"Helvetica Neue",sans-serif"><span style="color:#1d2228"><span style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">&ldquo;Student Council&rdquo;</span></span></span></span></span></span>
            </p>
            <p style="line-height:1.2; background-color:#ffffff"><span style="font-size:14.5pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:"Helvetica Neue",sans-serif"><span style="color:#1d2228"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Al Hejaz International School had formed Student Council with the Grades 4-9 students. The student council will serve as the voice of the student body in the school to give students an opportunity to develop leadership through carrying out school activities and projects. We hope that these students will be able to help the school to plan events that might contribute to school essence and for the progress of our community.&nbsp;&nbsp;</span></span></span></span></span></span>
            </p>
            <p>&nbsp;
            </p>
            <p>&nbsp;
            </p>
            ',
        ]);

        Page::create([
            'title' => "About",
            'body' => '<p >Al Hejaz is an international school based in Jeddah. The School is licensed by
            the Saudi Arabian Ministry of Education and delivers a British Curriculum. The language
            of education within the school is English.</p>
            <p >As part of its commitment to support the strengthening of Saudi identity and
                            Islamic ethos, and in keeping with Ministry of Education rules, the school also delivers
                            Arabic, Islamic studies, the History and Geography of the Saudi Kingdom and Quran
                            lessons in the Arabic language.</p>
            '
        ]);

        Page::create([
            'title' => 'Kindergarten (KG1 to KG3)',
            'slug' => 'kindergarten-kg1-to-kg3',
            'body' => '
            <p>The education of our youngest learners is vitally important; it lays the foundation for all future learning. Our KG department is recognised as a leader in Early Years education and has acquired a reputation for excellence amongst our parents. Our practice is based on learning from the very best of other practices from around the world and, in particular, is based on the English Early Years Foundation Stage.<br><br>The KG curriculum is designed to help our children develop the vital skills needed to become healthy and successful young learners. We focus on developing the following six areas:&nbsp;<br></p>



            <ul><li>Personal, Social and Emotional Development</li><li>Communication, Language and Literacy</li><li>Problem Solving, Reasoning and Numeracy</li><li>Knowledge and Understanding of the World</li><li>Physical Development</li><li>Creative Development</li><li></li></ul>



            <p>Although these areas are presented separately, the teachers at Al Hejaz ensure that the skills, knowledge and experiences are at the heart of every lesson and learning environment.&nbsp;</p>



            <p>The teachers in the KG phase appreciate the importance of learning through play and exploration. During the day the children play with others during their playtime, whilst also having the opportunity to play alone. Within each KG classroom there is a teaching assistant who is directed by the teacher. The teacher and teaching assistant extend and develop the children’s language and communication through careful observation and appropriate intervention. Children play with equipment in all of their learning experiences, which allows them to acquire and develop skills and knowledge they can later use to solve problems successfully. Making dens, dressing up and role play areas are used and integrated within the curriculum.</p>



            <p>The Kindergarten children are taught in mixed gender classes. The curriculum is organised into areas of Early Years Foundation Stage learning:</p>



            <ul><li>Communication, Language and Literacy</li><li>General Knowledge including science</li><li>Personal, social and emotional development</li><li>Physical development</li><li>Mathematical development</li><li>Creative development</li><li>Knowledge and understanding of the world</li><li>Information, communication teachnology</li><li>Arabic studies *</li><li>Islamic Studies including Quran *</li><li></li></ul>



            <p>The curriculum is delivered in English and students are encouraged to use English throughout their time at the school. </p>



            <p>*As part of its commitment to support the strengthening of Saudi identity and Islamic ethos, and in keeping with Ministry of Education rules, the school delivers Arabic and Islamic Studies including Quran lessons in the Arabic language.</p>'
        ]);

        page::create([
            'title' => 'Primary School (G1 to G3)',
            'slug' => 'primary-school-g1-to-g3',
            'body' => '<p>In the Primary School boys and girls are taught in separate classes. The primary curriculum is designed to embed and build on the key knowledge and skills the children began to acquire in KG. Early literacy and numeracy skills are further developed so that children become more confident in speaking and listening, reading, writing and numeracy.</p>



            <p>Grade one and two classes are structured on the same home base model used in KG so that the class teacher can closely track and report upon learning and development for every child within the class. This structure provides a smooth transition from KG to Primary School and enables the children to continue their development of key skills in the six key areas:</p>



            <ul><li>Personal, Social and Emotional Development</li><li>Communication, Language and Literacy</li><li>Problem Solving, Reasoning and Numeracy</li><li>Knowledge and Understanding of the World</li><li>Physical Development</li><li>Creative Development</li></ul>



            <p>Although these areas are presented separately, the teachers at Al Hejaz ensure that the skills, knowledge and experiences are at the heart of every lesson and learning environment.</p>



            <p>The Primary curriculum comprises:</p>



            <ul><li>English</li><li>Maths</li><li>Science</li><li>*Islamic Studies including Quran</li><li>Activities including PE &amp; Sport</li><li>Art</li><li>Social studies</li><li>French</li><li>ICT</li><li>*Arabic</li></ul>



            <p>From Grade 3 onwards children are taught these separate subjects by subject-specific specialists and will have different teachers for each subject. This will enable us to make sure that each subject area is delivered to the highest possible standards to optimise development and learning. The transition from home-based teaching to subject teaching has been carefully planned so that your child will settle into the next phase of their learning.</p>



            <p>The curriculum is delivered in English and students are encouraged to use English throughout their time at the school.<br> </p>



            <p>*As part of its commitment to support the strengthening of Saudi identity and Islamic ethos, and in keeping with Ministry of Education rules, the school delivers Arabic and Islamic Studies including Quran lessons in the Arabic language.</p>'
        ]);

        Page::create([
            'title' => 'Boys Middle School (G4 to G8)',
            'slug' => 'boys-middle-school-g4-to-g8',
            'body' => '<p>In G4 to G8 boys are taught in a separate section of the building. The middle school curriculum is designed to further develop key skills whilst gradually moving to more specialised subject learning and with a greater emphasis on acquiring subject-specific knowledge and skills. From Grade 7 they progress from Science to the separate sciences: Physics, Chemistry and Biology. The students are regularly assessed and provided with detailed feedback that enables them to further improve their learning in each subject. By Grade 8 students begin being taught the specific knowledge and skills they will need for their IGCSE courses.</p>



            <ul><li>English &amp; Maths</li><li> Science</li><li> Physics, Chemistry &amp; Biology</li><li> ICT</li><li><em>Arabic</em>Islamic Studies including Quran</li><li> *History &amp; Geography of Saudi Kingdom</li><li> Activities in PE, Sport &amp; Art</li><li> French </li></ul>



            <p>The students in Grade 8 will&nbsp;be entered for&nbsp;Checkpoint examinations to enable the school to monitor, review and evaluate the academic progress of each individual student in order to enable them to achieve their full potential.&nbsp; In the next academic year Grade 6 and 8 will take Checkpoint examinations.<br> <br>The curriculum is delivered in English and students are encouraged to use English throughout their time at the school.<br> <br>*As part of its commitment to support the strengthening of Saudi identity and Islamic ethos, and in keeping with Ministry of Education rules, the school delivers Arabic, the History and Geography of the Saudi Kingdom, and Islamic Studies, including Quran lessons, in the Arabic language.</p>'
        ]);

        Page::create([
            'title' => 'Girls Middle School (G4 to G8)',
            'slug' => 'girls-middle-school-g4-to-g8',
            'body' => '<p>In G4 to G8 girls are taught in a separate section of the building. The middle school curriculum is designed to further develop key skills whilst gradually moving to more specialised subject learning and with a greater emphasis on acquiring subject-specific knowledge and skills. From Grade 7 they progress from Science to the separate sciences: Physics, Chemistry and Biology. The students are regularly assessed and provided with detailed feedback that enables them to further improve their learning in each subject. By Grade 8 students begin being taught the specific knowledge and skills they will need for their IGCSE courses.</p>



            <ul><li> English &amp; Maths</li><li> Science</li><li> Physics, Chemistry &amp; Biology</li><li> ICT</li><li><em>Arabic</em>Islamic Studies including Quran</li><li> *History &amp; Geography of Saudi Kingdom</li><li> Activities in PE, Sport &amp; Art</li><li> French </li></ul>



            <p>The students in&nbsp;Grade 8 will be entered&nbsp;for Checkpoint examinations to enable the school to monitor, review and evaluation the academic progress of each individual student in order to enable them to achieve their full potential.&nbsp; In the next academic year Checkpoint examinations will be offered to grade 6 and 8<br> <br>The curriculum is delivered in English and students are encouraged to use English throughout their time at the school.<br> <br>*As part of its commitment to support the strengthening of Saudi identity and Islamic ethos, and in keeping with Ministry of Education rules, the school delivers Arabic, the History and Geography of the Saudi Kingdom, and Islamic Studies, including Quran lessons, in the Arabic language.</p>'
        ]);


        Page::create([
            'title' => 'Boys Upper School (G9 to G10)',
            'slug' => 'boys-upper-school-g9-to-g10',
            'body' => '<p>In G9 to G10 boys are taught in a separate section of the building. The boys continue to build on the knowledge and skills they developed in the middle school whilst focusing on the development of a high level of specialist knowledge and understanding in all their subjects. Increasingly, the curriculum will require the students to learn, understand and apply new knowledge and incorporate this into their understanding of the real world. Each subject area will require them to develop a deep and thorough understanding of key ideas and concepts, and be able to use these to solve real-life problems and articulate these confidently in English.<br> <br>Teachers will support students through this challenging phase with regular assessments using IGCSE-level questions for homework and school-based assessments.<br><br>The curriculum comprises:</p>



            <ul><li>English (IGCSE)</li><li>Maths (IGCSE)</li><li>Science (IGCSE)</li><li>Physics (IGCSE)</li><li>Chemistry (IGCSE)</li><li>Biology (IGCSE)</li><li>ICT (IGCSE)</li><li>*Arabic (IGCSE)</li><li>*Islamic Studies including Quran</li><li>*History &amp; Geography of Saudi Kingdom</li><li>Activities in PE, Sport &amp; and curricular activities</li></ul>



            <p>The students in G9 and G10 are prepared thoroughly and we build on the information gathered from G6 &amp; G8 Checkpoints, and any additional testing. As a result, the academic progress of each individual is closely monitored throughout their time at school in order to ensure that everyone receives the appropriate intervention and learning support. This, in turn, will help them to develop their skills and enable them to achieve their full potential.<br> <br>The curriculum is delivered in English and students are encouraged to use English throughout their time at the school.<br> <br>*As part of its commitment to support the strengthening of Saudi identity and Islamic ethos, and in keeping with Ministry of Education rules, the school delivers Arabic, the History and Geography of the Saudi Kingdom, and Islamic Studies, including Quran lessons, in the Arabic language.</p>'
        ]);


        Page::create([
            'title' => 'Girls Upper School (G9 to G10)',
            'slug' => 'girls-upper-school-g9-to-g10',
            'body' => '
            <ul><li>English (IGCSE)</li><li>Maths (IGCSE)</li><li>Science (IGCSE)</li><li>Physics (IGCSE)</li><li>Chemistry (IGCSE)</li><li>Biology (IGCSE)</li><li>ICT (IGCSE)</li><li>*Arabic (IGCSE)</li><li>*Islamic Studies including Quran</li><li>*History &amp; Geography of Saudi Kingdom</li><li>Activities in PE, Sport &amp; curricular activities</li></ul>



            <p>The students in G9 and G10 are prepared thoroughly and we build on the information gathered from G6 &amp; G8 Checkpoints, and any additional testing. As a result, the academic progress of each individual is closely monitored throughout their time at school, in order to ensure that everyone receives the appropriate intervention and learning support. This, in turn, will help them to develop their skills and enable them to achieve their full potential.<br></p>



            <p>The curriculum is delivered in English and students are encouraged to use English throughout their time at the school.<br></p>



            <p>*As part of its commitment to support the strengthening of Saudi identity and Islamic ethos, and in keeping with Ministry of Education rules, the school delivers Arabic, the History and Geography of the Saudi Kingdom, and Islamic Studies, including Quran lessons, in the Arabic language.</p>'
        ]);
    }
}
