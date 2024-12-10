<?php

/* 
Template Name: copy
*/
?>

<?php get_header(); ?>

<section class="intro">
    <div class="intro__content">
        <div class="intro__text-content">
            <h1 class="intro__heading">
              Увеличьте выручку вашего бизнеса при помощи cервиса видео аналитики на базе ИИ
            </h1>
            <div class="intro__text">
              <p>
                Не знаете, как увеличить выручку вашего бизнеса? Затрудняетесь решить стандартные проблемы, такие как "контроль за сотрудниками", "система допродаж" и "мошенничество"? Наш сервис предназначен для контроля более 6 служб вашего предприятия. Воспользуйтесь "Демо Режимом", чтобы ознакомиться с полным функционалом системы.
                <br> <br>
                Система сама укажет на слабые места в вашем бизнесе, составив отчет на основе искусственного интеллекта, выполнит контроль ваших сотрудников, после чего даст рекомендации по улучшению работы вашего предприятия.
              </p>
            </div>
            <a href="#" class="intro__link js-open-modal">
                Запросить демо
            </a>
        </div>
        <div class="intro__images-row">
            <div class="intro__images-col">
                <div class="intro__images-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/static/dist/images/intro/1.webp" alt="" class="intro__image">
                </div>
                <div class="intro__images-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/static/dist/images/intro/3.webp" alt="" class="intro__image">
                    <video src="<?php echo get_template_directory_uri(); ?>/static/dist/video/small-video.mp4" class="intro__video" playsinline="" muted="" autoplay="" loop=""></video>
                </div>
            </div>
            <div class="intro__images-col">
                <div class="intro__images-item">
                    <?php include_once get_theme_file_path('/sections/chart.php'); ?>
                </div>
                <div class="intro__images-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/static/dist/images/intro/4.webp" alt="" class="intro__image">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="advantages">
  <div class="advantages__content">
      <h2 class="advantages__heading">
        Что мы предлагаем
      </h2>
      <ul class="advantages__list">
          
              <li class="advantages__list-item">
                  <div class="advantages__card">
                      <img src="<?php bloginfo("template_url") ?>/src/icons/i-1.svg" alt="icon" class="advantages__card-icon">

                      <div class="advantages__card-content">
                          <h3 class="advantages__card-title">
                            Face ID
                          </h3>
                          <div class="advantages__card-text">
                              <p>Автоматическая фиксация и выгрузка 
                              нарушений. Потоковая обработка и проверка</p>
                          </div>
                      </div>
                  </div>
              </li>
          <?php if ($text || $heading) : ?>
              <li class="advantages__list-item">
                  <a href="#" class="advantages__demo js-open-modal">
                      <div class="advantages__demo-content">
                          <?php if ($heading) : ?>
                              <h3 class="advantages__demo-title">
                                  <?php echo $heading; ?>
                              </h3>
                          <?php endif; ?>
                          <?php if ($text) : ?>
                              <div class="advantages__demo-text">
                                  <?php echo $text; ?>
                              </div>
                          <?php endif; ?>
                      </div>
                      <svg width="14" height="14" aria-hidden="true">
                          <use xlink:href="#fat-arrow-right"></use>
                      </svg>
                  </a>
              </li>
          <?php endif; ?>

      </ul>
  </div>
</section>