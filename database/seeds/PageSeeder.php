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
            'body' => '<p class="CxSpFirst" style="margin-left: 48px; text-align: center;"><b><span style="font-size:14.0pt"><span style="line-height:115%">Mission</span></span></b>
            </p>
            <p class="CxSpMiddle" style="margin-left: 48px; text-align: center;"><span style="line-height:200%"><b><span style="font-size:16.0pt"><span style="line-height:200%">To meet the needs of our learners that will lead to educational excellence within Islamic core values of life, tolerance and respect of tradition of diverse community</span></span></b><span style="font-size:16.0pt"><span style="line-height:200%">.</span></span></span>
            </p>
            <p style="margin-bottom: 13px; text-align: center;"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Calibri,sans-serif"><span dir="RTL" lang="AR-SA" style="font-size:16.0pt"><span style="line-height:115%"><span style="font-family:&quot;Arial&quot;,sans-serif">تلبية احتياجات المتعلمين و التي سوف تؤدي الى الامتياز في تعلم اطار القيم الاسلامية و التسامح و احترام </span></span></span><span style="font-size:16.0pt"><span style="line-height:115%">.</span></span><span dir="RTL" lang="AR-SA" style="font-size:16.0pt"><span style="line-height:115%"><span style="font-family:&quot;Arial&quot;,sans-serif">الثقافات المختلفة في المجتمع</span></span></span></span></span></span>
            </p>
            <p style="text-align: center;">&nbsp;
            </p>
            ',
            'cover_image' => "mission.png"
        ]);

        Page::create([
            'title' => 'OUR VISION',
            'body' => '<p class="CxSpFirst" style="margin-left: 48px; text-align: center;"><b><span style="font-size:14.0pt"><span style="line-height:115%">Vision</span></span></b>
            </p>
            <p style="margin-bottom: 13px; text-align: center;"><span style="font-size:11pt"><span style="line-height:200%"><span style="font-family:Calibri,sans-serif"><b><span style="font-size:16.0pt"><span style="line-height:200%">To build a learning generation, powered by the 21<sup>st</sup> Century skills that are enriched with innovation, responsibility and collaboration.</span></span></b></span></span></span>
            </p>
            <p style="margin-bottom: 13px; text-align: center;"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Calibri,sans-serif"><span dir="RTL" lang="AR-SA" style="font-size:16.0pt"><span style="line-height:115%"><span style="font-family:&quot;Arial&quot;,sans-serif">بناء جيل متعلم مسلح بمهارات القرن الواحد والعشرين</span></span></span></span></span></span>
            </p>
            <p dir="RTL" style="margin-right: 48px; margin-bottom: 13px; text-align: center;"><span style="font-size:11pt"><span style="direction:rtl"><span style="unicode-bidi:embed"><span style="line-height:115%"><span style="font-family:Calibri,sans-serif"><span lang="AR-SA" style="font-size:16.0pt"><span style="line-height:115%"><span style="font-family:&quot;Arial&quot;,sans-serif">قادر على الابداع و تحمل المسؤلية و التعاون</span></span></span><span dir="LTR" style="font-size:16.0pt"><span style="line-height:115%">.</span></span></span></span></span></span></span>
            </p>
            <p style="text-align: center;">&nbsp;
            </p>
            ',
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
            'title' => 'Boys Middle School (G4 to G9)',
            'slug' => 'boys-middle-school-g4-to-g8',
            'body' => '<p>In G4 to G9 boys are taught in a separate section of the building. The middle school curriculum is designed to further develop key skills whilst gradually moving to more specialised subject learning and with a greater emphasis on acquiring subject-specific knowledge and skills. From Grade 7 they progress from Science to the separate sciences: Physics, Chemistry and Biology. The students are regularly assessed and provided with detailed feedback that enables them to further improve their learning in each subject. By Grade 8 students begin being taught the specific knowledge and skills they will need for their IGCSE courses.</p>



            <ul><li>English &amp; Maths</li><li> Science</li><li> Physics, Chemistry &amp; Biology</li><li> ICT</li><li><em>Arabic</em>Islamic Studies including Quran</li><li> *History &amp; Geography of Saudi Kingdom</li><li> Activities in PE, Sport &amp; Art</li><li> French </li></ul>



            <p>The students in Grade 8 will&nbsp;be entered for&nbsp;Checkpoint examinations to enable the school to monitor, review and evaluate the academic progress of each individual student in order to enable them to achieve their full potential.&nbsp; In the next academic year Grade 6 and 8 will take Checkpoint examinations.<br> <br>The curriculum is delivered in English and students are encouraged to use English throughout their time at the school.<br> <br>*As part of its commitment to support the strengthening of Saudi identity and Islamic ethos, and in keeping with Ministry of Education rules, the school delivers Arabic, the History and Geography of the Saudi Kingdom, and Islamic Studies, including Quran lessons, in the Arabic language.</p>'
        ]);

        Page::create([
            'title' => 'Girls Middle School (G4 to G9)',
            'slug' => 'girls-middle-school-g4-to-g8',
            'body' => '<p>In G4 to G8 girls are taught in a separate section of the building. The middle school curriculum is designed to further develop key skills whilst gradually moving to more specialised subject learning and with a greater emphasis on acquiring subject-specific knowledge and skills. From Grade 7 they progress from Science to the separate sciences: Physics, Chemistry and Biology. The students are regularly assessed and provided with detailed feedback that enables them to further improve their learning in each subject. By Grade 8 students begin being taught the specific knowledge and skills they will need for their IGCSE courses.</p>



            <ul><li> English &amp; Maths</li><li> Science</li><li> Physics, Chemistry &amp; Biology</li><li> ICT</li><li><em>Arabic</em>Islamic Studies including Quran</li><li> *History &amp; Geography of Saudi Kingdom</li><li> Activities in PE, Sport &amp; Art</li><li> French </li></ul>



            <p>The students in&nbsp;Grade 8 will be entered&nbsp;for Checkpoint examinations to enable the school to monitor, review and evaluation the academic progress of each individual student in order to enable them to achieve their full potential.&nbsp; In the next academic year Checkpoint examinations will be offered to grade 6 and 8<br> <br>The curriculum is delivered in English and students are encouraged to use English throughout their time at the school.<br> <br>*As part of its commitment to support the strengthening of Saudi identity and Islamic ethos, and in keeping with Ministry of Education rules, the school delivers Arabic, the History and Geography of the Saudi Kingdom, and Islamic Studies, including Quran lessons, in the Arabic language.</p>'
        ]);


        Page::create([
            'title' => 'Boys Upper School (G9 to G9)',
            'slug' => 'boys-upper-school-g9-to-g10',
            'body' => '<p>In G9 to G10 boys are taught in a separate section of the building. The boys continue to build on the knowledge and skills they developed in the middle school whilst focusing on the development of a high level of specialist knowledge and understanding in all their subjects. Increasingly, the curriculum will require the students to learn, understand and apply new knowledge and incorporate this into their understanding of the real world. Each subject area will require them to develop a deep and thorough understanding of key ideas and concepts, and be able to use these to solve real-life problems and articulate these confidently in English.<br> <br>Teachers will support students through this challenging phase with regular assessments using IGCSE-level questions for homework and school-based assessments.<br><br>The curriculum comprises:</p>



            <ul><li>English (IGCSE)</li><li>Maths (IGCSE)</li><li>Science (IGCSE)</li><li>Physics (IGCSE)</li><li>Chemistry (IGCSE)</li><li>Biology (IGCSE)</li><li>ICT (IGCSE)</li><li>*Arabic (IGCSE)</li><li>*Islamic Studies including Quran</li><li>*History &amp; Geography of Saudi Kingdom</li><li>Activities in PE, Sport &amp; and curricular activities</li></ul>



            <p>The students in G9 and G10 are prepared thoroughly and we build on the information gathered from G6 &amp; G8 Checkpoints, and any additional testing. As a result, the academic progress of each individual is closely monitored throughout their time at school in order to ensure that everyone receives the appropriate intervention and learning support. This, in turn, will help them to develop their skills and enable them to achieve their full potential.<br> <br>The curriculum is delivered in English and students are encouraged to use English throughout their time at the school.<br> <br>*As part of its commitment to support the strengthening of Saudi identity and Islamic ethos, and in keeping with Ministry of Education rules, the school delivers Arabic, the History and Geography of the Saudi Kingdom, and Islamic Studies, including Quran lessons, in the Arabic language.</p>'
        ]);


        Page::create([
            'title' => 'Girls Upper School (G9 to G19)',
            'slug' => 'girls-upper-school-g9-to-g10',
            'body' => '
            <ul><li>English (IGCSE)</li><li>Maths (IGCSE)</li><li>Science (IGCSE)</li><li>Physics (IGCSE)</li><li>Chemistry (IGCSE)</li><li>Biology (IGCSE)</li><li>ICT (IGCSE)</li><li>*Arabic (IGCSE)</li><li>*Islamic Studies including Quran</li><li>*History &amp; Geography of Saudi Kingdom</li><li>Activities in PE, Sport &amp; curricular activities</li></ul>



            <p>The students in G9 and G10 are prepared thoroughly and we build on the information gathered from G6 &amp; G8 Checkpoints, and any additional testing. As a result, the academic progress of each individual is closely monitored throughout their time at school, in order to ensure that everyone receives the appropriate intervention and learning support. This, in turn, will help them to develop their skills and enable them to achieve their full potential.<br></p>



            <p>The curriculum is delivered in English and students are encouraged to use English throughout their time at the school.<br></p>



            <p>*As part of its commitment to support the strengthening of Saudi identity and Islamic ethos, and in keeping with Ministry of Education rules, the school delivers Arabic, the History and Geography of the Saudi Kingdom, and Islamic Studies, including Quran lessons, in the Arabic language.</p>'
        ]);

        Page::create([
            'title' => "Mission, Vision and Ethos",
            'slug' => "mission-vision-and-ethos",
            'body' => '<div class="entry-content">
            <h2>Our Mission</h2>
    <p align="center">To be the leading English speaking International School in Jeddah by promoting a culture of educational excellence from within a caring and secure Islamic environment, enriched with the values of discipline, mutual care and respect, which extends beyond the school into the wider community.</p>
    <h2></h2>
    <h2>Our Vision</h2>
    <p style="text-align:center;">To create an inspirational lifelong learning campus with effective interaction that guarantees a high standard of education within a stimulating atmosphere that enhances students’ recreational abilities.</p>
    <p style="text-align:center;">
    </p><h2 style="text-align:left;">Our Ethos</h2>
    <p style="text-align:center;">Our ethos is defined by Faith, Excellence and Service.</p>
    <h3>Faith</h3>
    <p>Through the curriculum and the work of our staff, we focus on key aspects of our faith, so that our students can understand how they relate to their everyday lives. We promote:</p>
    <ul>
    <li>A wholesome and inclusive identity</li>
    <li>A national and global identity</li>
    <li>A faith identity and a wider spiritual identity that connects the whole world</li>
    <li>A healthy body and mind</li>
    <li>A belief that we are all part of, and are contributing to,&nbsp;something far greater than ourselves</li>
    <li>A focus on character development</li>
    <li>An environmental responsibility<strong>&nbsp;</strong></li>
    </ul>
    <h3>Excellence</h3>
    <p>Quality, excellence and high standards underpin the Hejaz philosophy. We promote these values in everything our students do, from the presentation of work in an exercise book to a piece of complex-level coursework. Staff at Hejaz are expected to model these behaviours too. In short, ‘If a job’s worth doing, it’s worth doing well’. We promote:</p>
    <ul>
    <li>High aspirations – <em>we celebrate success at every opportunity</em></li>
    <li>Personalised excellence – <em>a passionate belief that each individual is unique and special – our job is to nurture this talent</em></li>
    <li>Healthy competition – <em>a competitive environment that permeates the life and conduct of the school</em></li>
    <li>Ambition for our students – <em>to continue to study in Saudi Arabia and overseas, go to university or pursue a career that is worthy of their talents, beliefs and interests</em></li>
    </ul>
    <h3>Service</h3>
    <p>Staff and students at Hejaz understand the nature and complexity of today’s society, and the contribution that each individual must make to sustain a healthy, positive and creative Saudi nation that can face the challenges of the 21st century with confidence. We all have our part to play.</p>
    <p>At Hejaz we aim to instill a love of learning, a thorough understanding of the curriculum and a personal commitment to community service, civic pride and charitable giving in each and every one of our students.</p>
    <p>Our aim is to create an outstanding learning community that inspires learners with excellence in academic achievement, personal development and service to the local and global community. We want to provide a place for children and young people to develop as future leaders and active global citizens, and to contribute locally, nationally and internationally.</p>
    <p>Our goal is to develop children and young people of the highest intellectual calibre who are able to contribute morally, spiritually, socially, economically and politically to the societies and communities in which they live, study and work.</p>
    <p>Hejaz is driven by the same belief in setting the highest standards in every aspect of school life to help its pupils attain educational excellence, career success and determination to contribute to the greater good in the local, national and global community.</p>
    <div id="atatags-370373-60226a7c0ab90">
        </div></div>'
        ]);

        Page::create([
            'title' => 'Welcome From The Chairman',
            'slug' => 'welcome-from-the-chairman',
            'body' => '<div class="entry-content">
            <h2><img data-attachment-id="1189" data-permalink="https://alhejazsite.wordpress.com/dr_abddallah/" data-orig-file="https://alhejazsite.files.wordpress.com/2017/02/dr_abddallah.jpg" data-orig-size="1245,480" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;1&quot;}" data-image-title="dr_abddallah" data-image-description="" data-medium-file="https://alhejazsite.files.wordpress.com/2017/02/dr_abddallah.jpg?w=300" data-large-file="https://alhejazsite.files.wordpress.com/2017/02/dr_abddallah.jpg?w=1024" class="alignnone size-full wp-image-1189" src="https://alhejazsite.files.wordpress.com/2017/02/dr_abddallah.jpg?w=1080" alt="dr_abddallah" srcset="https://alhejazsite.files.wordpress.com/2017/02/dr_abddallah.jpg?w=1080 1080w, https://alhejazsite.files.wordpress.com/2017/02/dr_abddallah.jpg?w=150 150w, https://alhejazsite.files.wordpress.com/2017/02/dr_abddallah.jpg?w=300 300w, https://alhejazsite.files.wordpress.com/2017/02/dr_abddallah.jpg?w=768 768w, https://alhejazsite.files.wordpress.com/2017/02/dr_abddallah.jpg?w=1024 1024w, https://alhejazsite.files.wordpress.com/2017/02/dr_abddallah.jpg 1245w" sizes="(max-width: 1080px) 100vw, 1080px">Assalamu Alaikum!</h2>
    <p style="text-align:justify;">It is a great pleasure to welcome this outstanding group of educators to Al Hejaz International School for the academic year 2020 - 2021.We are optimistic that you will soon feel the sense of pride we share in belonging to this noble educational establishment.</p>
    <p style="text-align:justify;">We believe that a great responsibility is laid on you to fortify the image of the school in order to educate a new generation of our school and to offer them the opportunity for a brilliant future. Therefore, we wish you all the best in your mission and we encourage you to exert more effort to achieve our goals in the current developments of the school which will consequently enable us to meet the highest standards of education. Remember, that “to the world you may be just a teacher, but to your students, you are a HERO.<br>
    I would personally like to express my deep appreciation for your efforts.</p>
    <p>Chairman of the board<br>
    Mazed ALotibi</p>
    <div id="atatags-370373-60226afbb4e64">

        </div></div>'
        ]);
        Page::create([
            'title' => 'Welcome From The Principal',
            'slug' => 'welcome-from-the-principal',
            'body' => '<div class="entry-content">
            <h2>Assalamu Alaikum!</h2>
    <p><img class="aligncenter size-full wp-image-46" src="https://alhejazsite.files.wordpress.com/2013/07/bukhaaree.jpg?w=1080" alt="bukhaaree"></p>
    <blockquote><p>Indeed actions are by intention and every man shall have that which he intended.</p></blockquote>
    <p style="text-align:justify;">At the beginning of a new academic year, I would like to express my warm welcome to all the staff of Al Hejaz International School.</p>
    <p style="text-align:justify;">It is my fervent hope that you will exert more efforts in what promises to be an interesting and stimulating new learning atmosphere in our school this concurrent year with the continuing academic accreditation process. I am absolutely confident that you will introduce a high standard of education that reflects your educational experiences. This I believe will be compatible to the prerequisites of this era, in harmony with our educational mission accompanied by its Islamic features and international standards towards a better education.<br>
    I wish you success and may Allah bless you.</p>
    <p style="text-align:justify;">General Manager<br>
    Mr.Mazed al Otibi</p>
    <p style="text-align:justify;">
    </p></div>'
        ]);
        Page::create([
            'title' => 'School’s General Calendar',
            'slug' => 'schools-general-calendar',
            'body' => ''
        ]);
        Page::create([
            'title' => 'student handbook',
            'slug' => 'student-handbook',
            'body' => '<p><a href="https://drive.google.com/open?id=0B0Bj3M5jxY6OSEp6VGRoM2VOYmM">CLICK HERE to view and download our Student Handbook.</a></p>'
        ]);
        Page::create([
            'title' => 'Annual School Fees for 2020-2021',
            'slug' => 'annual-school-fees-for-2020-2021',
            'body' => '<div class="entry-content">
            <p>&nbsp;</p>
    <table style="border-collapse:collapse;width:530px;height:382px;" border="0" width="288" cellspacing="0" cellpadding="0">
    <colgroup>
    <col style="width:54pt;" span="4" width="72"> </colgroup>
    <tbody>
    <tr style="height:14.25pt;">
    <td class="xl65" style="height:14.25pt;width:54pt;" width="72" height="19">Grade</td>
    <td class="xl66" style="border-left:none;width:54pt;" width="72">No Discount</td>
    <td class="xl65" style="border-left:none;width:54pt;" width="72">With Discount</td>
    <td class="xl66" style="border-left:none;width:54pt;" width="72">Total</td>
    </tr>
    <tr style="height:14.25pt;">
    <td class="xl65" style="height:14.25pt;width:54pt;" width="72" height="19">KG-1</td>
    <td class="xl66" style="border-left:none;width:54pt;" width="72">11,500</td>
    <td class="xl65" style="border-left:none;width:54pt;" width="72">2000</td>
    <td class="xl66" style="border-left:none;width:54pt;" width="72">13,500</td>
    </tr>
    <tr style="height:14.25pt;">
    <td class="xl65" style="height:14.25pt;border-top:none;" height="19">KG-2</td>
    <td class="xl66" style="border-top:none;border-left:none;">12,000</td>
    <td class="xl65" style="border-top:none;border-left:none;">2000</td>
    <td class="xl66" style="border-top:none;border-left:none;">14,000</td>
    </tr>
    <tr style="height:14.25pt;">
    <td class="xl65" style="height:14.25pt;border-top:none;" height="19">KG-3</td>
    <td class="xl66" style="border-top:none;border-left:none;">12,500</td>
    <td class="xl65" style="border-top:none;border-left:none;">2000</td>
    <td class="xl66" style="border-top:none;border-left:none;">14,500</td>
    </tr>
    <tr style="height:14.25pt;">
    <td class="xl65" style="height:14.25pt;border-top:none;" height="19">GR1</td>
    <td class="xl66" style="border-top:none;border-left:none;">13,500</td>
    <td class="xl65" style="border-top:none;border-left:none;">2000</td>
    <td class="xl66" style="border-top:none;border-left:none;">15,500</td>
    </tr>
    <tr style="height:14.25pt;">
    <td class="xl65" style="height:14.25pt;border-top:none;" height="19">GR2</td>
    <td class="xl66" style="border-top:none;border-left:none;">13,500</td>
    <td class="xl65" style="border-top:none;border-left:none;">2000</td>
    <td class="xl66" style="border-top:none;border-left:none;">15,500</td>
    </tr>
    <tr style="height:14.25pt;">
    <td class="xl65" style="height:14.25pt;border-top:none;" height="19">GR3</td>
    <td class="xl66" style="border-top:none;border-left:none;">13,500</td>
    <td class="xl65" style="border-top:none;border-left:none;">2000</td>
    <td class="xl66" style="border-top:none;border-left:none;">15,500</td>
    </tr>
    <tr style="height:14.25pt;">
    <td class="xl65" style="height:14.25pt;border-top:none;" height="19">GR4</td>
    <td class="xl66" style="border-top:none;border-left:none;">14,500</td>
    <td class="xl65" style="border-top:none;border-left:none;">2000</td>
    <td class="xl66" style="border-top:none;border-left:none;">16,500</td>
    </tr>
    <tr style="height:14.25pt;">
    <td class="xl65" style="height:14.25pt;border-top:none;" height="19">GR5</td>
    <td class="xl66" style="border-top:none;border-left:none;">14,500</td>
    <td class="xl65" style="border-top:none;border-left:none;">2000</td>
    <td class="xl66" style="border-top:none;border-left:none;">16,500</td>
    </tr>
    <tr style="height:14.25pt;">
    <td class="xl65" style="height:14.25pt;border-top:none;" height="19">GR6</td>
    <td class="xl66" style="border-top:none;border-left:none;">14,500</td>
    <td class="xl65" style="border-top:none;border-left:none;">2000</td>
    <td class="xl66" style="border-top:none;border-left:none;">16,500</td>
    </tr>
    <tr style="height:14.25pt;">
    <td class="xl65" style="height:14.25pt;border-top:none;" height="19">GR7</td>
    <td class="xl66" style="border-top:none;border-left:none;">15,500</td>
    <td class="xl65" style="border-top:none;border-left:none;">2000</td>
    <td class="xl66" style="border-top:none;border-left:none;">17,500</td>
    </tr>
    <tr style="height:14.25pt;">
    <td class="xl65" style="height:14.25pt;border-top:none;" height="19">GR8</td>
    <td class="xl66" style="border-top:none;border-left:none;">15,500</td>
    <td class="xl65" style="border-top:none;border-left:none;">2000</td>
    <td class="xl66" style="border-top:none;border-left:none;">17,500</td>
    </tr>
    <tr style="height:14.25pt;">
    <td class="xl65" style="height:14.25pt;border-top:none;" height="19">GR9</td>
    <td class="xl66" style="border-top:none;border-left:none;">16,500</td>
    <td class="xl65" style="border-top:none;border-left:none;">2000</td>
    <td class="xl66" style="border-top:none;border-left:none;">18,500</td>
    </tr>
    <tr style="height:14.25pt;">
    <td class="xl65" style="height:14.25pt;border-top:none;" height="19">GR10</td>
    <td class="xl66" style="border-top:none;border-left:none;">17,500</td>
    <td class="xl65" style="border-top:none;border-left:none;">2000</td>
    <td class="xl66" style="border-top:none;border-left:none;">19,500</td>
    </tr>
    </tbody>
    </table>
    <p>All registration systems followed the rules of the Ministry of Education which is done through the Nour program by arranging the candidate’s age to align for each stage.</p>
    <p>KG-1 (3-4) Years<br>
    KG-2 (4-5) Years<br>
    KG-3 (5-6) Years</p>
    <p>Additionally, there are level test done according to the rules of registration of each school.</p>
    <p>&nbsp;</p>
    <ol>
    <li>A 10% discount is granted in case of paying all the fees at the beginning of registration till 10<sup>th</sup> of October 2017.</li>
    <li>A 10% discount is offered to second child or any other additional child when paying the fees of the first child.</li>
    <li>The discount does not include book and transportation charges.</li>
    <li>School fees does not include book and Transportation charges.</li>
    <li>School uniform and school activities (Fieldtrips) are free.</li>
    </ol>
	</div>'
        ]);
        Page::create([
            'title' => 'Recruitment',
            'slug' => 'application-form',
            'body' => '<div class="embed-jotform"><iframe width="1080" height="1000" src="//oembed.jotform.com/form/63525574427461" sandbox="allow-forms allow-scripts allow-same-origin allow-top-navigation"></iframe></div>'
        ]);
        Page::create([
            'title' => 'About Boys Section',
            'slug' => 'about-boys-section',
            'body' => '<div class="entry-content">
            <h2>Education</h2>
    <p>Education is principally, the growth of character and mental influences within the frame- work of a definite coordination. Even though this is the common objective underlining education systems, the structure may vary in response to the needs of different societies. The consistency between ends and means is a strategy universally recognized. From this perspective, Al Hejaz International School Boys’ Section, Jeddah (HIS) was created by directive of the <i> Ministry of Education</i> to provide quality education to our children in the country of their residence.</p>
</div>'
        ]);
        Page::create([
            'title' => 'Intermediate Section',
            'slug' => 'boys-middle-school-g4-to-g8',
            'body' => '<div class="entry-content">
            <p>In G4 to G8, boys are taught in a separate section of the building. The middle school curriculum is designed to further develop key skills whilst gradually moving to more specialised subject learning and with a greater emphasis on acquiring subject-specific knowledge and skills. From Grade 7 they progress from Science to the separate sciences: Physics, Chemistry and Biology. The students are regularly assessed and provided with detailed feedback that enables them to further improve their learning in each subject. By Grade 8 students begin being taught the specific knowledge and skills they will need for their IGCSE courses. Courses offered include:</p>
    <ul>
    <li>English &amp; Maths</li>
    <li>Science</li>
    <li>Physics, Chemistry &amp; Biology</li>
    <li>ICT</li>
    <li>*Arabic</li>
    <li>*Islamic Studies including Quran</li>
    <li>*History &amp; Geography of Saudi Kingdom</li>
    <li>Activities in PE, Sport &amp; Art</li>
    <li>French</li>
    </ul>
    <p>The students in Grade 8 will&nbsp;be entered for&nbsp;Checkpoint examinations to enable the school to monitor, review and evaluate the academic progress of each individual student in order to enable them to achieve their full potential.&nbsp; From this academic year onwards, Grade 6 and 8 will take Checkpoint examinations based on the reason mentioned earlier.</p>
    <p>The curriculum is delivered in English and students are encouraged to use English throughout their time at the school.</p>
    <p>*As part of its commitment to support the strengthening of Saudi identity and Islamic ethos, and in keeping with Ministry of Education rules, the school delivers Arabic, the History and Geography of the Saudi Kingdom, and Islamic Studies, including Quran lessons, in the Arabic language.</p>
  =</div>'
        ]);
        Page::create([
            'title' => 'Secondary Section',
            'slug' => 'boys-upper-school-g9-to-g10',
            'body' => ''
        ]);
        Page::create([
            'title' => 'Parents Council',
            'slug' => 'girls-weekly-plan',
            'body' => '<div class="entry-content">
            <p>Our mission is to promote the exchange of ideas among parent representatives of all sections in Al Hejaz School and to serve as a vehicle of communications within the District for parents, teachers, administrators, the Board of Education and the community. We exist to ensure that all parents are supported and empowered to become effective partners in their children’s education.</p>
    <ul>
    <li><span style="color:#ff9900;"><a style="color:#ff9900;" href="https://alhejazsite.wordpress.com/top-10-exam-tips/">Top 9 Exam Tips</a></span></li>
    <li><span style="color:#ff9900;"><a style="color:#ff9900;" href="http://wp.me/P84l8O-is">How to Avoid Stress during Exams</a></span></li>
    <li><span style="color:#ff9900;"><a style="color:#ff9900;" href="https://alhejazsite.wordpress.com/knowledge-in-islam/">Knowledge in Islam</a></span></li>
    </ul>
</div>'
        ]);
        Page::create([
            'title' => 'Student Council',
            'slug' => 'boys-student-council',
            'body' => '<div class="entry-content">
            <p>Meet Al Hejaz School Student Council Members for the 2016-2017 school year. Student Council’s mission this year is to improve our school and community.</p>
    <p>The group meets once a month on Tuesdays during the council members’ recess and lunch hour. Council members are elected by their peers. They represent their class by sharing what the council talks about with their classroom and sharing with the council what their class’ thoughts/opinions are. Council members contribute ideas, strategies, and effort to improve the school and community. Council members also use their leadership skills to coordinate with other school committees and teachers to put events together.</p>
    <h2>October</h2>
    <p>Council members were welcomed into Student Council. We did an inclusion activity, went over guidelines and expectations of council members, created the group’s mission and purpose, and started coordinating our first school community event, the Quran Competition.</p>
    <h2>November</h2>
    <p>The group continued their communication with classrooms about the morning broadcasting program with the coordinator, Mr Zain AlAbedeen. We also brainstormed different ideas for our school-wide celebrations, community circles, and spirit days. Council members will go back to their classroom and get ideas for broadcasting days. Ideas will be shared at next month’s council meeting.</p>
    <h2>Advisors</h2>
    <p>If you have any questions, comments or ideas for student council, please contact one of the advisors at Tel. 6171300 Ext.120<br>
    1. Mr. Sameh: the Student advisor<br>
    2. Mr. Smith : Adpat executive –</p>
   	</div>'
        ]);
        Page::create([
            'title' => 'Boys Activities Gallery',
            'slug' => 'boys-activities-gallery',
            'body' => '<ul class="gallery_box">
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0273.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0280.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0324.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0325.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0326.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0343.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0371.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0375.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0389.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0397.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0402.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0416.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0440.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0559.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0561.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0569.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0574.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0603.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0610.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0759.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0774.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0776.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0787.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_1620.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_1643.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_2249.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_2266.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_2321.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_2323.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_2344.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_3876.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_3911.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_3913.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_3971.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_3972.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_3977.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_3979.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_4165.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/Geology Trip1.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
        </ul>'
        ]);
        Page::create([
            'title' => 'About Girls Section',
            'slug' => 'about-girls-section',
            'body' => '<div class="entry-content">
            <p><strong>Welcome to the Girls’ Section of Al Hejaz International School<img loading="lazy" data-attachment-id="1171" data-permalink="https://alhejazsite.wordpress.com/about-girls-section/about-girls/" data-orig-file="https://alhejazsite.files.wordpress.com/2016/12/about-girls.png" data-orig-size="386,286" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="about-girls" data-image-description="" data-medium-file="https://alhejazsite.files.wordpress.com/2016/12/about-girls.png?w=300" data-large-file="https://alhejazsite.files.wordpress.com/2016/12/about-girls.png?w=386" class=" wp-image-1171 alignright" src="https://alhejazsite.files.wordpress.com/2016/12/about-girls.png?w=255&amp;h=189" alt="about-girls" width="255" height="189" align="right" srcset="https://alhejazsite.files.wordpress.com/2016/12/about-girls.png?w=255&amp;h=189 255w, https://alhejazsite.files.wordpress.com/2016/12/about-girls.png?w=150&amp;h=111 150w, https://alhejazsite.files.wordpress.com/2016/12/about-girls.png?w=300&amp;h=222 300w, https://alhejazsite.files.wordpress.com/2016/12/about-girls.png 386w" sizes="(max-width: 255px) 100vw, 255px"></strong></p>
    <p style="text-align:justify;">Al Hejaz School, Girls’ Section is committed to bring out the best in everyone.&nbsp;In congruent to our schools’ ethos of &nbsp;<strong><em>Faith, Excellence and Service,</em></strong>&nbsp;we want our children and young people to be confident, well-rounded individuals who are prepared to play a full role in the world in which they live, at the same with strong faith in their religion.</p>
    <p style="text-align:justify;">In pursuit of this, Girls’ Section is composed of KG Department, Primary Department ( from Grades 1- 4) and Secondary Department ( from Grades 5-8). We are following British Curriculum, thus our learning resources and classroom practices are according to this standard. Our major exams are composed of Quizzes and Term&nbsp;Exams. Checkpoint exams for Grades 6 and 8 is given. We likewise adhere to the standards of the Ministry of Education in all its standards and supervisions. The lined up co-curricular and extra curricular activities in the&nbsp; Girl’s section aim to develop the holistic development of our students. A strong and dynamic homeroom class facilitated by the mentor teacher is a venue for open communication and interaction among students and between teachers.</p>
    <p style="text-align:justify;">Parents may log in to their&nbsp; personal account and see results of quizzes and exams of their child. You may also see weekly plan from this site. &nbsp;Aside from the site’s updated look, you will notice information is accessible and organized with our students, parents and educators in mind. This site reflects our continued efforts to communicate effectively and transparently about education at Al Hejaz.</p>
    <p style="text-align:justify;">We constantly strive to inspire a passion for learning in our young people that goes beyond the school gates, out into the local community and ultimately enriches the society they live in. We are a strongly united school built around a supportive culture for learning where we empower our young people to feel free to pursue knowledge and ideas within a caring culture of warm relationships and powerful diversity.&nbsp; In doing this, we work closely with our families in order to continually develop resilient, confident and aspirational young people who will be proud of themselves.</p>
    <p style="text-align:justify;">We are driven by one key principle which is that education can truly make a positive difference to a young person’s life . We are honored by your trust and confidence in putting your child in our care.&nbsp; Best regards and only the best for all of us. May Allah bless us all!</p>
    <p>&nbsp;</p>
    <p><strong>Munira Al Ghamdi<br>
    </strong><strong>Principal, Girl’s Section</strong></p>
	</div>'
        ]);
        Page::create([
            'title' => 'Girls Weekly Plan',
            'slug' => 'girls-weekly-plan-2',
            'body' => ''
        ]);


        Page::create([
            'title' => 'boys weekly plan',
            'slug' => 'boys-weekly-plan',
            'body' => ''
        ]);

        Page::create([
            'title' => 'Parents Dashboard',
            'slug' => 'parents-dashboard',
            'body' => ''
        ]);

        Page::create([
            'title' => 'girls activity gallery',
            'slug' => 'girls-activity-gallery',
            'body' => '<ul class="gallery_box">
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0273.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0280.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0324.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0325.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0326.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0343.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0371.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0375.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0389.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0397.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0402.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0416.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0440.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0559.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0561.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0569.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0574.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0603.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0610.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0759.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0774.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0776.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0787.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_1620.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_1643.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_2249.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_2266.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_2321.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_2323.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_2344.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_3876.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_3911.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_3913.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_3971.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_3972.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_3977.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_3979.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_4165.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/Geology Trip1.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
        </ul>'
        ]);

        Page::create([
            'title' => 'KG Weekly Plan',
            'slug' => 'kg-weekly-plan',
            'body' => ''
        ]);

        Page::create([
            'title' => 'KG Events Calendar',
            'slug' => 'kg-events-calendar',
            'body' => ''
        ]);

        Page::create([
            'title' => 'KG Activities Gallery',
            'slug' => 'kg-activities-gallery',
            'body' => '<ul class="gallery_box">
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0273.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0280.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0324.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0325.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0326.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0343.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0371.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0375.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0389.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0397.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0402.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0416.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0440.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0559.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0561.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0569.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0574.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0603.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0610.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0759.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0774.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0776.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_0787.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_1620.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_1643.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_2249.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_2266.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_2321.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_2323.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_2344.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_3876.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_3911.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_3913.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_3971.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_3972.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_3977.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_3979.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/IMG_4165.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
            <li>
                <a href="#0"><img src="' . asset('storage/gallery/Geology Trip1.JPG') . '">
                <div class="box_data">
                </div>
                </a>
            </li>
        </ul>'
        ]);
    }
}
