<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Author | Music Shop</title>

    <?php $activeLink = 3; ?>
    <?php include_once("templates/_includes.php"); ?>
</head>
<body>
<?php include_once("templates/_navigation.php"); ?>

<main id="main-content">
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-10">
                <div class="about-me">{ ABOUT ME }</div>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
            </div>
            <div class="col-6">

                <div class="my-name-is">
                    <img id="profile" src="/images/moja.jpg" />
                    <div class="title">HI, MY NAME IS STEFAN KUPRESAK</div>
                    <div class="content">
                      And I'm a self though full stack developer, employed as a big data developer at Blue Grid. I'm passionate about learning new
                      technologies, and currently, I program in Elixir and Node JS.
                      Functional community has driven me for the past year, and I really enjoyed switching over to the mindset that
                      feels more right then the OOP approach.
                    </div>
                </div>
                <div class="facts">
                    <div class="title">FACTS ABOUT ME</div>
                    <div class="content">
                        <ul class="content-list">
                            <li class="content-list-item">Like writting clean code and making project maintanance more easy and approachable</li>
                            <li class="content-list-item">Several open source GitHub projects in tons of programming languages</li>
                            <li class="content-list-item">Experience in working in teams and delivering high quality code fast</li>
                        </ul>
                    </div>
                </div>
                <div class="skill-set">
                    <div class="title">SKILL SET</div>
                    <div class="content">
                        <ul class="languages">
                            <li class="language-item progress">
                                <div class="process-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="item-text">Elixir</div>
                                <span class="percent-label">90%</span>
                            </li>
                            <li class="language-item progress">
                                <div class="process-bar bg-info" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="item-text">Javascript</div>
                                <span class="percent-label">95%</span>
                            </li>
                            <li class="language-item progress">
                                <div class="process-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="item-text">Python</div>
                                <span class="percent-label">90%</span>
                            </li>
                            <li class="language-item progress">
                                <div class="process-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="item-text">Ruby</div>
                                <span class="percent-label">80%</span>
                            </li>
                            <li class="language-item progress">
                                <div class="process-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="item-text">PHP</div>
                                <span class="percent-label">75%</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="other">
                    <div class="title">Like my Work?</div>
                    <div class="content">
                      Drop me an email at stefan.kupresak.68.16@ict.edu.rs
                      Or contact me personally using the in-site contact form
                    </div>
                </div>


            </div>
            <div class="col">
            </div>
        </div>
    </div>
</main>
<footer class='main-footer-dark'>
    <p class='text-center'>Open Source software under MIT licence
    <p>
    <p class='text-center'><span>Stefan Kupresak</span> | <a href="http://www.bluegrid.io/" target="_blank">Blue Grid
            Doo</a> | <a href="https://github.com/dev-cyprium/web-programming-ict" target="_blank"> GitHub</a></p>
</footer>


<script type="text/javascript" src='js/index.js'>

</script>
</body>
</html>
