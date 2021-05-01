<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dana Raffaela Józsa</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?  family=Quicksand&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/81017c79b5.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="side-strip">
            <img class="your-image" src="CSS/imgs/portrait.jpeg" alt="portrait of applicant">
            <h2 class="name">Dana Raffaela Józsa</h2>
                <nav>
                    <ul>
                        <li style="border-top: 2px solid #ccd;"><a href="#about">About</a></li>
                        <li><a href="#experience">Experience</a></li>
                        <li><a href="#qualification">Qualification</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
                    <ul class="social-list">
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
            
            <p class="licence">Made by <a href="#">Anthony jaimes nortje</a></p>
        </div>
    </header>
    <main>
        <section id="about">
            <h2><span>ABOUT ME</span></h2>
            <p>My name is Dana Raffaela Józsa. I was born in Bonn, German on 22de December 2002. At the age of 4 I moved with my family to Drenthe in the Netherlands where we stayed for 1.5 years, then back to Bonn. Following a longer stay in Bonn I relocated to Cape Town, South Africa, in 2014. In Cape Town I graduated from a bilingual (German/English) internal School (Deutsche Schule Kapstadt) with a German Allgemeine Hochshulreife/Abitur and a South African Matric (IEB) in 2020. Having experienced life in three countries has made me very passionate about different cultures and the people who follow individual ways of life. I recently accepted my placement at te University of Amsterdam where I will study for my Bachelor in Phychology(Bachelor of Science), Furthermore, I will strive to gain my Bachelor degree, a following Master degree and a PhD in Phychology and thereafter become a psychologist or psychotherapist.</p>
        </section>
        <section id="experience">
            <h2><span>Experience</span></h2>
            <div class="flex">
                <div>
                    <h3>Lifesaving</h3>
                    <p>LLANDUDNO SURF LIFESAVING CLUB / Cape Town <br> Mar 2019/Jan 2020</p>
                </div>
            </div>
        </section>
        <section id="qualification">
            <h2><span>Education / qualifications</span></h2>
            <div class="flex">
                <div>
                    <h3>CBS DE FONTEIN</h3>
                    <p>Dwingeloo, The Netherlands <br> Basis School <br> 2008 - 2009</p>
                </div>
                <div>
                    <h3>grundschulverbund marienschule-nordschule</h3>
                    <p>Bonn, Germany <br>  <br> 2009 - 2012 </p>
                </div>
                <div>
                    <h3>Erzbischofliche liebruenschule bonn</h3>
                    <p>Bonn, Germany<br> High School/Gymnasium <br>2012 - 2014</p>
                </div>
                <div>
                    <h3>German international school cape town</h3>
                    <p> cape town, south africa <br> Allgemeine Hochshulreife/Abitur, Matric (IEB) <br> 2015 - 2020</p>
                </div>
            </div>
        </section>
        <section style="margin-bottom: 0;" id="contact">
            <h2><span>Contact</span></h2>
            <div class="flex">
                <div class="cont-form">
                    <h3>Contact Me</h3>
                    <form class="contact-form" action="contactform.php" method="post">
                        <input type="text" name="name" placeholder="Full Name...">
                        <input type="text" name="email" placeholder="Email...">
                        <input type="text" name="subject" placeholder="Subject...">
                        <textarea name="massage" placeholder="Message..." cols="30" rows="10"></textarea>
                        <button type="submit" name="submit">Send    </button>
                    </form>
                </div>
                <div>
                    <h3><i class="fas fa-phone"></i>Phone Number</h3>
                    <p>+27715057402</p>
                </div>
                <div>
                    <h3><i class="fas fa-envelope"></i>Email</h3>
                    <p>danajozsa@gemil.com</p>
                </div>
            </div>
        </section>
    </main>
</body>
    <script src="JS/main.js"></script>
</html>