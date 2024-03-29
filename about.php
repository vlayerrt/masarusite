<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="media/logo1.ico" type="image/x-icon">
    <title>MasaruGang - About</title>
</head>
<body>
    <header>
        <section>
            <nav class="header">
                <ul class="navlist">
                    <a href="index.php"><li>Главная</li></a> 
                    <a href="about.php"><li>Кто мы такие?</li></a>
                    <a href="mist.php"><li>Mist The Game</li></a>
                    <a href="contacts.php"><li>Контакты</li></a>
                </ul>
                <?php 
                    if($_COOKIE['user'] == ''): 
                ?>
                <span class="logreg">
                    <p><a href="loginpage.php">Log In</a> / <a href="regpage.php"> Register</a></p>
                </span>
                <?php 
                    else: 
                ?>
                    <span class="logreg">
                        <p><?=$_COOKIE['user']?> - <a href="exit.php"> Exit</a></p>
                    </span>
                
                <?php 
                    endif; 
                ?>
            </nav>
            
        </section>
    </header>
    <div class="main">
        <section>
            <div class="head-logo">
                <div class="title"><div class="logo"></div><h1 id="title"><span id="title-span">Masaru</span>Gang</h1></div>
                <p class="afterlogo">
                    A group of enthusiasts with no experience in developing <br>computer games
                    </p>
            </div>
            <div class="maininfo">
                
            <div class="teamblock">
                <h2 id="caption">Our team</h2>
                
                <div class="teamperson">
                    <div class="teamimg"><img src="media/Mer.jpg" width="100%"></div>
                    <div class="personinfo">
                        <h3>Меринов Дмитрий Александрович<br>27.11.2002</h3>
                        <h4>Masaru</h4>
                        <p>>Родился и вырос в городе Омск, вёл активный образ жизни. Не брезговал долгими прогулками на свежем воздухе. Очень любил кататься на велосипеде.
                            По достижению 9 лет - переехал в Московскую Область, город Дзержинский. Пошёл в местную школу и начал своё обучение там с 4-го класса.
                            Старался учиться хорошо, но так как основал "плохую" компанию - учителя начали плохо относиться к каждому, занижали оценки, отпадало желание учиться.
                            Ушёл в колледж после 9-го класса, так как в школе оставаться не было никакого желания. Балл аттестата был одним из самых низких при поступлении. 
                            Из-за этого пришлось поступить на повара, так как просто не хватило баллов на программиста. После полутора месяца обучения на повара, в группе программистов ушёл парень.
                            Он освободил своё место и я решил перевестись. С этого момента моя жизнь повернулась. Я окончательно понял, что желаю связать свою жизнь с программированием и компьютерами.</p>
                        
                        <h3>Merinov Dmitry Aleksandrovich<br>27.11.2002</h3>
                            <h4>Masaru</h4>
                        <p>>Born and raised in the city of Omsk, led an active lifestyle. He did not disdain long walks in the fresh air. He loved to ride a bike.
                            Upon reaching the age of 9, he moved to the Moscow Region, the city of Dzerzhinsky. I went to a local school and began my studies there from the 4th grade.
                            I tried to study well, but since I founded a "bad" company, the teachers began to treat everyone badly, lowered grades, and the desire to study disappeared.
                            He left for college after the 9th grade, as there was no desire to stay at school. The score of the certificate was one of the lowest upon admission.
                            Because of this, I had to enroll as a chef, because I simply did not have enough points for a programmer. After a month and a half of training as a cook, a guy left the group of programmers.
                            He vacated his seat and I decided to transfer. From that moment on, my life turned around. I finally realized that I want to connect my life with programming and computers.</p>
                        </p>
                    </div>
                </div>
                <div class="teamperson">
                    <div class="teamimgright"><img src="media/kalash.jpg" width="100%"></div>
                    <div class="personinfo right">
                        
                    <h3>Калашников Михаил Романович <br>02.04.2003</h3>
                        <h4>Mihromka</h4>
                        <p>>Живу в Лыткарино, учился в обычной школе в своём городе. На каждом собрании учителя обращали своё внимание на мою общительность и жизнерадостность, отмечали хорошую учёбу.
                        Во время школы сконцентрировал все силы на общении и знакомствах. Всегда любил необычно мыслить и искать интересное в окружающих вещах.
                        Отвечаю за все, что связано с визуальными и эстетическими составляющими, притворяюсь, что умею программировать. </p>
                        
                        <h3>Kalashnikov Mikhail Romanovich<br> 02.04.2003</h3>
                        <h4>Mihromka</h4>
                        <p>>I live in Lytkarino, studied at an ordinary school in my city. At each meeting, the teachers drew their attention to my sociability and cheerfulness, noted good studies.
                        During school, I concentrated all my efforts on communication and acquaintances. I have always liked to think in an unusual way and look for interesting things in the surrounding things.
                        I am responsible for everything related to visual and aesthetic components, I pretend that I know how to program.</p>
                    
                    </div>
                </div>
                <div class="teamperson">
                    <div class="teamimg"><img src="media/kar.jpg" width="100%"></div>
                    <div class="personinfo">
                        <h3>Карабчиков Денис Викторович<br>11.02.2003</h3>
                        <h4>kapotnyabanana</h4>
                        <p>>Живу в Москве, Район Капотня, учился в обычной школе, закончил с хорошим баллом, хватило чтобы поступить на престижную специальность.
                            С первого курса очень нравилось писать простые программы и тестировать чужие. В студии отвечаю по больше части за тестирование чего-либо.
                            В мои обязанности входит: тестирование кода на наличие непродуманностей, составление технической документации, тестирование продукта.
                            В числе предпочтительных языков программирования у меня С# и С++, так же есть опыт написания простейших программ на Python
                            Иногда мыслю необычно, но это бывает очень редко, в случаях, если это получается - делюсь ими с остальными.</p>
                        
                        <h3>Karabchikov Denis Viktorovich<br>11.02.2003</h3>
                            <h4>kapotnyabanana</h4>
                        <p>>I live in Moscow, Kapotnya District, I studied at a regular school, I graduated with a good score, enough to enter a prestigious specialty.
                            From the first year I really liked writing simple programs and testing others. In the studio, I am mostly responsible for testing something.
                            My responsibilities include: testing the code for lack of thought, writing technical documentation, testing the product.
                            Among my preferred programming languages, I have C# and C++, I also have experience writing simple programs in Python
                            Sometimes I think unusually, but it happens very rarely, in cases where it works out, I share them with others.</p>

                    </div>
                </div>
                <div class="teamperson">
                    <div class="teamimgright"><img src="media/Komarov.jpg" width="100%"></div>
                    <div class="personinfo right">
                        <h3>Комаров Данила Алексеевич<br>18.06.2003</h3>
                        <h4>MeganFoxTerminator</h4>
                        <h4>Он же, ДжанклодВанДаммТерминатор</h4>
                        <h4>Он же топ-1 пудж с винрейтом 59 за 700 игр</h4>
                        <p> >18 лет, добрый и позитивный парень.
                            >Играю профессионально в футбол, катаю в доту по ночам. <br>
                            >Закончил лицей, пошел в колледж на программиста, потому что эта специальность была интересна. <br>
                            >Живу в полной семье и двумя младшими братьями. Люблю почитать криминальные детективы. <br>
                            >Работаю в маке, дабы обеспечить себя)</p>
                        
                        <h3>Komarov Danila Alekseevich<br>18.06.2003</h3>
                        <h4>MeganFoxTerminator</h4>
                        <h4>AKA Juncloud Van Damme Terminator</h4>
                        <h4>AKA TOP-1 Pudge, winrate 59 over 700 games</h4>
                        <p>>I play football professionally, I play DotA at night.<br>
                            >I graduated from the lyceum, went to college to become a programmer, because this specialty was interesting.<br>
                            >I live in a complete family and two younger brothers. I love reading crime stories.<br>
                            >I work on a Mac to support myself)</p>
                    </div>
                </div>
                <div class="teamperson">
                    <div class="teamimg"><img src="media/sav.jpg" width="90%"></div>
                    <div class="personinfo">
                        <h3>Савицкий Даниил Валентинович<br>12.09.2003</h3>
                        <h4>CHVRXN</h4>
                        <p>>Родился, вырос, и живу по сей день в городе Люберцы. 
                            Обучался в обычной районной школе. С раннего детства проявлял интерес к компьютерной технике. 
                            Заимев свой первый настольный ПК, быстро стал учиться обращению с ним как в техническом, так и в программном плане.
                            Познавая всё больше нового, я полностью связал свою жизнь с информационными технологиями.
                            Поступил в колледж на специальность программиста, где и познакомился с будущей командой.
                            За счёт своих творческих способностей попал в студию как художник – дизайнер, работая над окружением и созданием объектов.</p>
                        
                        <h3>Savitsky Daniil Valentinovich<br>12.09.2003</h3>
                            <h4>CHVRXN</h4>
                        <p>>I was born, raised, and live to this day in the city of Lyubertsy.
                            He studied at a regular district school. From an early age, he showed an interest in computers.
                            Having acquired my first desktop PC, I quickly began to learn how to use it both technically and software-wise.
                            Learning more and more new things, I completely connected my life with information technology.
                            He entered college as a programmer, where he met the future team.
                            Due to his creative abilities, he got into the studio as an artist-designer, working on the environment and creating objects.</p>
                    </div>
                </div>
                
            </div>         
            </div>
            <h2 id="caption">Team Media</h2>

            <div class="teammedia">
                <img src="media/team/2AonsRkmv0ntG5Xu9u1mloEwgctG8vTS7Dv8HQAB6XZ2U7KAPlmcyGHFU4W2GgYxZlP2EI6b7XpHeSMOy8oAzyif.jpg" class="mediaimg">
                <img src="media/team/2unr7szNmvj93AxwwIGDJ-e5dZ2GyXH0hCmzq-nSBkEdbhuHAMlRc4Fy1TfByVFu4eFOBnkYmmabUG1vRDknNXSa.jpg" class="mediaimg">
                <img src="media/team/3QRgJno290UyxeiFl468vn1Alty4BlasLjTrbpR10QQqw3JRnkmJzzNKeVax6rhEkTvyUDEHshQnyD4akOzb_gJM.jpg" class="mediaimg">
                <img src="media/team/4V_96jwA9BVI8qo9Qt2DWuE-WeGf22nlVBsaRwf2bbW85JuqxiOxkcun0uTNgxb6IC0SrSoFnrIq5T4q8PmxY7eB.jpg" class="mediaimg">
                <img src="media/team/99Y-HK9PtTQUYoeH7fZ_-8sC-5NIkbajrqWSE2gyM8k8xHhsrZYHQNGFHta4_wtVQEmmwFU1Ec4W1OC32yEiugQH.jpg" class="mediaimg">
                <img src="media/team/__JWJh95o6jYZheBQX6lnd4a90mJFks9r2jLSmkupXTuc0ul7tlPXrQ1p-wRv09NJ8WsFpPf_4aRU9tfKIE2jNgS.jpg" class="mediaimg">
                <img src="media/team/dmvIEpm_AtiVA5fEeylZ5864mBTq6s6P9OCE1BG_1r9u3DySIZVJ1DjktFie9SO5rJRqX5i_yDbhvsj1yBPJqiwA.jpg" class="mediaimg">
                <img src="media/team/eU5PuPY-xMfK4hJJy6hYmC6PXNdtiCULlN12RAjYG434HKlj213KyclMh52syAS20VsPmFh3ddR9-5Bi2AVhBO-A.jpg" class="mediaimg">
                <img src="media/team/f_aFOe1V0y60S_GVj_B5HALFCAlDRP7nxXOO2OdWAikHxMazM-zS-BRYNyfP0EAcleyxsc6s3VDrpFPAYw_xBPlD.jpg" class="mediaimg">
                <img src="media/team/G8o2n8anlHibUJB3wlWM7B9D3NdppHDJ2myMP7v1fNMfOcnZtN7890i6Ku6BwYtTg80_NPvLp99yJO4f0P7pufOD.jpg" class="mediaimg">
                <img src="media/team/G90p9znikdVjYJ6N7Qp4TkM74bLXI7Mi5hI2qjIWgP5gU74VtxXgdZLwVFOVgI0V3QGdV-ZeVybL12I3g6m_uYuE.jpg" class="mediaimg">
                <img src="media/team/JspJ7iz2bx8J5HCW-93gBO3bNfV_pjAbqw-Q05OAl6CLvwBpMABKyh9I3tjt2xCbSts0G1LJA_tj0Edo1n3s5ofZ.jpg" class="mediaimg">
                <img src="media/team/k1xZFuD7KDM3CqMSDXVNmZxWdo5MDilCln8MgfXUS2pjz26m-5vAHhEEeGTH08jSRomkbv2wETuMFmjobXczNBMj.jpg" class="mediaimg">
                <img src="media/team/klVIWWDTIx0QgqTDrsgr9YGjsuzDNHyJz1CoDsEz4S5vKYXptwovOTsawQzV2OyEKt6770ToL_BRad2P0OCpDuI8.jpg" class="mediaimg">
                <img src="media/team/KRPZ1DBHWqpDZ00VDm-cWSpOWayHSy3_AClZ5ZQZFvEmOqA1wJz__iHYFM35dIId4k03S8JY6hkixWyiGM9HEkDq.jpg" class="mediaimg">
                <img src="media/team/lOfiUJ86m8EnMyUBk3YC80w9duoGm8StadSiMdv86c-t8_luGX6Vr-dnWWxXFNVoma5yeRTqpDowE_PHLY9nWKWj.jpg" class="mediaimg">
                <img src="media/team/lTocR2zsydkgcDSuQKGQ3753L4GvSsVg4BRWrxyss_R7pCDp3eEk77xeCnVf4C8hquEXCjxTP8MenuFuk47U8qLy.jpg" class="mediaimg">
                <img src="media/team/od9CRDHYmLyIjkulErLLYxarKFL2JMixfrlzmBD3Op9BL-NyD1Ke0NDM-8KpjGOU1tIg_s8F58_EB0--cdlwJVFv.jpg" class="mediaimg">
                <img src="media/team/RQNaPNBWxXcl65OKr0-YTRT3e7Iif10mf77h6gFiunrWNnan91ylUAn2HZm9XV5Y6E1Q99oG4Y2ccwAkFQI-VX-O.jpg" class="mediaimg">
                <img src="media/team/ss3-t0GEbZAQllkmvqzy4JR4lTapHI4ZgrWrhJldDFc5jVE64tUt7krlAzl0oyRSKWtECPN8etajC-zOi8zAioyz.jpg" class="mediaimg">
                <img src="media/team/t-KrKhH9T_ZIi9VRAwPKlQmlQgJK2KAIvqaLqMyam1AqVK0KDkrfXgx-lDKNLZNiNjoy8GcoCz2asBXnWq4FNeCJ.jpg" class="mediaimg">
                <img src="media/team/tuQ5IDFdmFlTCszdIKr4KrqmhWEDPN5QIVQyNEgg1wCIA0kmCTGg_0lZGqy1gkiGfZCrgcNg8D9n0kfC7kUhGW_e.jpg" class="mediaimg">
                <img src="media/team/U0z4_VJj1mDZ1WXVs7BZ-xqvIQMN9wVkqGePsXLr3CW7zDKxVi-XEfOp3xzUcIyGlsIr2k92K1lbbBnltJZ_oG2b.jpg" class="mediaimg">
                <img src="media/team/UJR5va3wvoOi5RTwpw6ZerpXsgj8ri6ar_K-7GS84rRVgSmrQs9KuRSrIg-NbnWD4MJv5WWldc46HFjmq7ZdRkU7.jpg" class="mediaimg">
                <img src="media/team/uOpDUk5yDfPdYgADgA7AqSh7eaZCNdZ5gOIGD4ase6fwpW-P0NzQh_4K-bWjzCuxuY6NXxYVz1qFfHdC2PZBneZz.jpg" class="mediaimg">
                <img src="media/team/vJt_xPUytLCrKozNvsYOb3NbGV49NHqWi4MJ3ChDa5bvlGzyT6VtYiCLGvkMWTwBNIiL42iHME6fwWzy9AHT8Fpt.jpg" class="mediaimg">
                <img src="media/team/XnEgr8l_ZlFFi48SZP_0ym4BzdkqkfR8ulEB6xdaXsDraIc4noQ07qqU-QonGKmC-XpTioafMndvGSsu97SIJi8N.jpg" class="mediaimg">
                <img src="media/team/xO1w_8uTSSsK7HjORjk3SHlT771DlZJGzkdcFwyn0ZFYCs4nKU8mVlA5TZP3eIJA3zLIRKUNzzfdKA9jcJ-D0wXg.jpg" class="mediaimg">
                <img src="media/team/Y-TqWHx6xi3VX2pmL8LcJHxs_zhit-nhxGJEdB_xJXzK_i2I7BYn9ll_j6279HZMrUllpC2d1HXKOPuDdiGNdpF1.jpg" class="mediaimg">
                <img src="media/team/YpjIh7TqftJ6cZbBXKrXvQx-FTJ67K1DuUs6B32za7lcN0y74hwUEX7mlSWkZQUu3M7GL0wKMNLrCn9zCPfonN7d.jpg" class="mediaimg">
                <img src="media/team/z-rkRl48qvtSuJxxKIZR0uXtkFTCPWt1WmAD_kVx2DJZwMF5STIXq60q8NSi8mf0m_EyLwAFOnx5DynTVh-MKiMj.jpg" class="mediaimg">


            </div>
        </section>
    </div>
    <footer>
        <section>
            <div class="footblock">
                <nav class="footnav">
                    <ul class="footlist">
                        <li><img src="media/logo1.png" height="24px"></li>
                        <a href="index.php"><li>Главная</li></a> 
                    <a href="about.php"><li>Кто мы такие?</li></a>
                    <a href="mist.php"><li>Mist The Game</li></a>
                    <a href="contacts.php"><li>Контакты</li></a>
                    </ul>
                </nav>        
            </div>
            <div class="footblock">
                <div>
                    <p>© 2022 Masaru Ltd. All Rights Reserved.</p>
                </div>
                <div class="policy">
                    <p><a href="/copyright/">Privacy &amp; Cookie Policy</a>
                    <a href="/terms-of-use/">Terms of Use</a></p>
                </div>
            </div>
        </section>
    </footer>
</body>
</html>
