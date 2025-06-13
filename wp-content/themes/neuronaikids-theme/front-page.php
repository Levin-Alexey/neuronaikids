<?php get_header(); ?>

    <main>

        <!-- Первый экран -->
        <section class="hero">
            <div class="container hero-content">
                <div class="hero-text">
                    <h1>Первая школа в России,<br>где Искусственный Интеллект помогает ребенку стать программистом</h1>
                    <p>Научим детей кодить весело! AI помощник всегда будет помогать в обучении</p>
                    <div class="hero-buttons">
                        <!--<a href="#start" class="btn btn-primary">Попробовать бесплатно</a>-->
                        <a href="#demo" class="btn btn-hero">Записаться на бесплатный урок</a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main2.png" alt="Дети программируют">
                </div>
            </div>
        </section>

        <!-- Блок преимуществ -->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/robot-fly.png"
             alt="Flying Robot"
             id="flying-robot">




        <!-- Переходный блок -->
        <!-- Волна-переход -->
        <!-- 🌌 Вот сюда вставляешь HTML ночного неба -->
        <section class="wave-transition night-sky">

            <!-- Градиентное ночное небо -->
            <!-- Плавающий слой звёзд на фоне -->
              <div class="stars-layer"></div>

               <!-- Градиентное ночное небо -->
              <div class="sky-background"></div>

              <!-- Анимированные звезды -->
            <!--  <div class="stars">
                 <div class="star" style="top: 10%; left: 6%; animation-delay: 0s;"></div>
                 <div class="star" style="top: 24%; left: 20%; animation-delay: 1.1s;"></div>
                 <div class="star" style="top: 18%; left: 35%; animation-delay: 0.8s;"></div>
                 <div class="star" style="top: 5%; left: 50%; animation-delay: 0.3s;"></div>
                 <div class="star" style="top: 15%; left: 65%; animation-delay: 1.6s;"></div>
                 <div class="star" style="top: 22%; left: 85%; animation-delay: 0.9s;"></div>
             </div>-->

             <!-- Верхняя волна -->
            <svg class="wave wave-top" viewBox="0 0 1440 100" preserveAspectRatio="none">
                <defs>
                    <linearGradient id="waveGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="#3c80e4" />
                        <stop offset="100%" stop-color="#00b2c8" />
                    </linearGradient>
                </defs>
                <path d="M0,96L60,80C120,64,240,32,360,26.7C480,21,600,43,720,53.3C840,64,960,64,1080,69.3C1200,75,1320,85,1380,90.7L1440,96L1440,0L0,0Z"
                      fill="url(#waveGradient)"/>
            </svg>


            <!-- Нижняя волна! -->

        </section>



        <section class="advantages">
            <svg class="wave wave-bottom" viewBox="0 0 1440 150" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="waveGradientBottom" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="#2b3dbf" />
                        <stop offset="100%" stop-color="#309be3" />
                    </linearGradient>
                </defs>
                <path d="M0,0 C480,100 960,0 1440,100 L1440,150 L0,150 Z" fill="url(#waveGradient)" />
            </svg>
            <div class="container">
                <div class="section-title">
                    <h2><span>ПОЧЕМУ</span><br><strong class="highlight, gradient-text">NEURON_AI_KIDS?</strong></h2>
                    <p>Мы верим, что Neuronaikids — это не просто обучение, это увлекательное путешествие в мир ИТ. <br>
                        Наши профессиональные преподаватели вместе с ИИ-наставником помогают детям осваивать программирование весело, понятно и эффективно.</p>
                </div>
                <section class="custom-advantages">
                    <div class="container custom-cards">
        <!--   <div class="adv-card">
                            <img class="adv-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/self-taught-icon1.svg" alt="Self Taught">
                            <h3>Collaborative Learning</h3>
                            <p>Our Dojos encourage collaboration with like-minded peers!</p>
                        </div>-->
                        <div class="adv-card">
                            <img class="adv-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/trophy1.svg" alt="Guided Education">
                            <h3>НА 67%</h3>
                            <p>УВЕЛИЧИВАЕТСЯ ВОВЛЕЧЕННОСТЬ РЕБЕНКА В УЧЕБНЫЙ ПРОЦЕСС</p>
                        </div>
                        <div class="adv-card">
                            <img class="adv-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/one-size-fits-all-icon1.svg" alt="Flexible Curriculum">
                            <h3>НА 43%</h3>
                            <p>ПОВЫШАЕТСЯ ПОНИМАНИЕ СЛОЖНЫХ ТЕМ</p>
                        </div>
                        <div class="adv-card">
                            <img class="adv-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/learn-in-isolation-icon1.svg" alt="Rewarding Community">
                            <h3>НА 86%</h3>
                            <p>УВЕЛИЧИВАЕТСЯ ПЕРСОНАЛИЗАЦИЯ УЧЕБНОГО ПРОЦЕССА</p>
                        </div>
                    </div>
                </section>
                <section class="year-program-section">
                    <div class="container text-center py-5">
                        <h5 class="text-primary mb-2 section-title h2">ПРОГРАММЫ НАШЕЙ ШКОЛЫ</h5>
                        <h2 class="fw-bold">
                            <span class="text-primary gradient-text">ДЛЯ ВАШЕГО РЕБЕНКА</span>
                        </h2>
                    </div>
                </section>

                    <section class="gradient-overlay-block fullwidth-fix">
                        <div class="gradient-layer"></div>
                        <div class="scratch-section">
                            <div class="scratch-left">
                                <img src="/wp-content/themes/neuronaikids-theme/assets/images/create bg.png" alt="BG Shape" class="scratch-bg">
                                <img src="/wp-content/themes/neuronaikids-theme/assets/images/scratch.jpg" alt="Scratch Demo" class="scratch-foreground">
                            </div>

                            <div class="scratch-right">
                                <p class="scratch-age">ВОЗРАСТ ОТ 5 ДО 7 ЛЕТ</p>
                                <h3 class="scratch-heading">Знакомство с компьютером и первые шаги в программировании</h3>
                                <h2 class="scratch-title">JUNIOR</h2>
                                <p class="scratch-description">
                                    Это увлекательное погружение в мир технологий через игру и творчество. Ребята учатся основам компьютерной грамотности и делают первые шаги в программировании с помощью интерактивных платформ, таких как ScratchJr, CodeMonkey и Blockly. Занятия развивают логическое мышление, внимание и уверенность в работе с компьютером
                                </p>
                                <a href="#" class="btn btn-learn-more">LEARN MORE</a>
                            </div>
                        </div>
                    </section>
                <section class="gradient-overlay-block fullwidth-fix gradient-overlay-block2">
                    <div class="gradient-layer"></div>
                    <div class="scratch-section">
                        <div class="scratch-left">
                            <img src="/wp-content/themes/neuronaikids-theme/assets/images/jr bg.webp" alt="BG Shape" class="scratch-bg">
                            <img src="/wp-content/themes/neuronaikids-theme/assets/images/maxresdefault%20(1).jpg" alt="Scratch Demo" class="scratch-foreground">
                        </div>

                        <div class="scratch-right">
                            <p class="scratch-age scratch-age2">ВОЗРАСТ ОТ 5 ДО 7 ЛЕТ</p>
                            <h3 class="scratch-heading">Знакомство с компьютером и первые шаги в программировании</h3>
                            <h2 class="scratch-title scratch-title2">JUNIOR</h2>
                            <p class="scratch-description">
                                Это увлекательное погружение в мир технологий через игру и творчество. Ребята учатся основам компьютерной грамотности и делают первые шаги в программировании с помощью интерактивных платформ, таких как ScratchJr, CodeMonkey и Blockly. Занятия развивают логическое мышление, внимание и уверенность в работе с компьютером
                            </p>
                            <a href="#" class="btn btn-learn-more">LEARN MORE</a>
                        </div>
                    </div>
                </section>
                <section class="gradient-overlay-block fullwidth-fix gradient-overlay-block3">
                    <div class="gradient-layer"></div>
                    <div class="scratch-section">
                        <div class="scratch-left">
                            <img src="/wp-content/themes/neuronaikids-theme/assets/images/camps%20bg.webp" alt="BG Shape" class="scratch-bg">
                            <img src="/wp-content/themes/neuronaikids-theme/assets/images/server.jpg" alt="Scratch Demo" class="scratch-foreground">
                        </div>

                        <div class="scratch-right">
                            <p class="scratch-age scratch-age3">ВОЗРАСТ ОТ 5 ДО 7 ЛЕТ</p>
                            <h3 class="scratch-heading">Знакомство с компьютером и первые шаги в программировании</h3>
                            <h2 class="scratch-title scratch-title3">JUNIOR</h2>
                            <p class="scratch-description">
                                Это увлекательное погружение в мир технологий через игру и творчество. Ребята учатся основам компьютерной грамотности и делают первые шаги в программировании с помощью интерактивных платформ, таких как ScratchJr, CodeMonkey и Blockly. Занятия развивают логическое мышление, внимание и уверенность в работе с компьютером
                            </p>
                            <a href="#" class="btn btn-learn-more">LEARN MORE</a>
                        </div>
                    </div>
                </section>

            </div>
            <div class="bubble bubble-1"></div>
            <div class="bubble bubble-2"></div>
            <div class="bubble bubble-3"></div>
        </section>

    </main>

<?php get_footer(); ?>