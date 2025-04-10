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

            <!-- Нижняя волна -->

        </section>



        <section class="advantages">
            <div class="container">
                <div class="section-title">
                    <h2><span>ПОЧЕМУ</span><br><strong class="highlight, gradient-text">NEURON_AI_KIDS?</strong></h2>
                    <p>Мы верим, что Neuronaikids — это не просто обучение, это увлекательное путешествие в мир ИТ. <br>
                        Наш ИИ-наставник помогает детям осваивать программирование весело, понятно и эффективно.</p>
                </div>
                <div class="advantage-wrapper">
                    <div class="advantage-items">
                        <div class="item">
                            <p class="gradient-text">на 82%</p>
                            <p>увеличивается вовлеченность ребёнка</p>
                        </div>
                        <div class="item">
                            <p class="gradient-text">на 60%</p>
                            <p>лучше запоминаются темы</p>
                        </div>
                        <div class="item">
                            <p class="gradient-text">на 43%</p>
                            <p>родители довольны прогрессом</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bubble bubble-1"></div>
            <div class="bubble bubble-2"></div>
            <div class="bubble bubble-3"></div>
        </section>

    </main>

<?php get_footer(); ?>