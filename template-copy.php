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
                      <img src="<?php bloginfo("template_url") ?>/static/icons/i-1.svg" alt="icon" class="advantages__card-icon">

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
              <li class="advantages__list-item">
                  <div class="advantages__card">
                      <img src="<?php bloginfo("template_url") ?>/static/icons/i-2.svg" alt="icon" class="advantages__card-icon">

                      <div class="advantages__card-content">
                          <h3 class="advantages__card-title">
                            Object Recogation
                          </h3>
                          <div class="advantages__card-text">
                              <p>Автоматическая фиксация и выгрузка 
                              нарушений. Потоковая обработка и проверка</p>
                          </div>
                      </div>
                  </div>
              </li>
              <li class="advantages__list-item">
                  <div class="advantages__card">
                      <img src="<?php bloginfo("template_url") ?>/static/icons/i-3.svg" alt="icon" class="advantages__card-icon">

                      <div class="advantages__card-content">
                          <h3 class="advantages__card-title">
                            Транскрибация речи
                          </h3>
                          <div class="advantages__card-text">
                              <p>Автоматическая фиксация и выгрузка 
                              нарушений. Потоковая обработка и проверка</p>
                          </div>
                      </div>
                  </div>
              </li>
              <li class="advantages__list-item">
                  <div class="advantages__card">
                      <img src="<?php bloginfo("template_url") ?>/static/icons/i-4.svg" alt="icon" class="advantages__card-icon">

                      <div class="advantages__card-content">
                          <h3 class="advantages__card-title">
                          Машинное зрение
                          </h3>
                          <div class="advantages__card-text">
                              <p>Автоматическая фиксация и выгрузка 
                              нарушений. Потоковая обработка и проверка</p>
                          </div>
                      </div>
                  </div>
              </li>
              <li class="advantages__list-item">
                  <div class="advantages__card">
                      <img src="<?php bloginfo("template_url") ?>/static/icons/i-5.svg" alt="icon" class="advantages__card-icon">

                      <div class="advantages__card-content">
                          <h3 class="advantages__card-title">
                            Тепловые карты
                          </h3>
                          <div class="advantages__card-text">
                              <p>Автоматическая фиксация и выгрузка 
                              нарушений. Потоковая обработка и проверка</p>
                          </div>
                      </div>
                  </div>
              </li>
              <li class="advantages__list-item">
                  <a href="#" class="advantages__demo js-open-modal">
                      <div class="advantages__demo-content">
                          <h3 class="advantages__demo-title">
                          ПО внесено в реестр Российского ПО Минцифры
                          </h3>
                          <div class="advantages__demo-text">
                              <p>
                              Запись в реестре от 21.03.2023 №16997 https://reestr.digital.gov.ru/reestr/1382984/ . Также ООО "Смарт Технлогии" являются Свидетельство № 2023612513
                              </p>
                          </div>
                      </div>
                  </a>
              </li>

      </ul>
  </div>
</section>

<section class="about">
    <div class="about__content">
        <div class="about__video">
                <a href="https://smartmetrics.su/wp-content/uploads/2023/10/full-video.mp4" class="about__video-wrapper" data-fancybox="">
                <video src="https://smartmetrics.su/wp-content/uploads/2023/10/full-video.mp4" playsinline="" autoplay="" muted="" loop="" class="about__video-preview-clip"></video>
                <div class="about__video-info">
                    <svg width="14" height="14" aria-hidden="true">
                        <use xlink:href="#play"></use>
                    </svg>
                    01:31                        
                </div>
                </a>
        </div>
        <div class="about__manager">
                <div class="about__manager-text">
                 Программное обеспечение фиксирует и предоставляет в виде отчетов всю необходимую информацию, 
                 <b>вам больше не нужно тратить время на просмотр камер видеонаблюдения</b>
                </div>
            <div class="about__manager-info">
                <div class="about__manager-photo-wrapper">
                    <img src="https://smartmetrics.su/wp-content/uploads/2023/10/1-5.webp" alt="image" class="about__manager-photo" />
                </div>
                    <div class="about__manager-content">
                            <div class="about__manager-name">
                            Ильнар Сафин                            
                            </div>
                            <div class="about__manager-role">
                            CEO Smartmetrics                            
                            </div>
                    </div>
            </div>
        </div>
    </div>
</section>

    <section class="tasks">
        <div class="tasks__content">
                <h2 class="tasks__heading">
                Управляйте розничной сетью из любой точки
                </h2>
            <div class="tasks__row">
                <div class="tasks__nav">
                    <ul class="tasks__nav-list">
                            <li class="tasks__nav-list-item">
                                <a href="#" class="tasks__nav-link">
                                  Управление розничной сетью                                
                                </a>
                            </li>
                            <li class="tasks__nav-list-item">
                                <a href="#" class="tasks__nav-link">
                                  Техническая служба                              
                                </a>
                            </li>
                            <li class="tasks__nav-list-item">
                                <a href="#" class="tasks__nav-link">
                                  Служба безопасности                               
                                </a>
                            </li>
                            <li class="tasks__nav-list-item">
                                <a href="#" class="tasks__nav-link">
                                  Коммерческая служба                             
                                </a>
                            </li>
                            <li class="tasks__nav-list-item">
                                <a href="#" class="tasks__nav-link">
                                  Маркетинг                               
                                </a>
                            </li>
                            <li class="tasks__nav-list-item">
                                <a href="#" class="tasks__nav-link">
                                  Финансовая служба                             
                                </a>
                            </li>
                    </ul>
                </div>
                <div class="tasks__tabs-wrapper">
                    <div class="tasks__tabs-items">
                            <div class="tasks__tabs-item">
                                <div class="tasks__card">
                                    <div class="tasks__card-top">
                                        <div class="tasks__card-text-content">
                                              <h3 class="tasks__card-title">
                                                Управляйте розничной сетью из любой точки
                                              </h3>
                                              <div class="tasks__card-text">
                                                Дистанционный контроль большого количества точек с возможностью просмотра камер видеонаблюдения и получения комплексных отчетов в онлайн режиме
                                              </div>
                                              <ul class="tasks__card-features-list">
                                                    <li class="tasks__card-features-list-item">
                                                        <div class="tasks__card-feature">
                                                            <div class="tasks__card-feature-amount">
                                                              580+
                                                            </div>
                                                            <div class="tasks__card-feature-text">
                                                              Торговых точек, подключили к дистанционному контролю за год
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="tasks__card-features-list-item">
                                                        <div class="tasks__card-feature">
                                                            <div class="tasks__card-feature-amount">
                                                              84%
                                                            </div>
                                                            <div class="tasks__card-feature-text">
                                                              Средний прирост KPI
                                                            </div>
                                                        </div>
                                                    </li>
                                              </ul>
                                        </div>
                                        <div class="tasks__card-image-wrapper">
                                            <img src="https://smartmetrics.su/wp-content/uploads/2023/10/cart.webp" alt="image" class="tasks__card-image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tasks__tabs-item">
                                <div class="tasks__card">
                                    <div class="tasks__card-top">
                                        <div class="tasks__card-text-content">
                                              <h3 class="tasks__card-title">
                                              Внедрите автоматизированный контроль за сотрудниками на базе искусственного интеллекта
                                              </h3>
                                              <div class="tasks__card-text">
                                              Готовые предобученные модели машинного зрения и транскрипции речи для контроля за розничными точками, на базе существующего видеонаблюдения
                                              </div>
                                              <ul class="tasks__card-features-list">
                                                    <li class="tasks__card-features-list-item">
                                                        <div class="tasks__card-feature">
                                                            <div class="tasks__card-feature-amount">
                                                            99,9%
                                                            </div>
                                                            <div class="tasks__card-feature-text">
                                                            Показатели надежности системы
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="tasks__card-features-list-item">
                                                        <div class="tasks__card-feature">
                                                            <div class="tasks__card-feature-amount">
                                                              84%
                                                            </div>
                                                            <div class="tasks__card-feature-text">
                                                              Средний прирост KPI
                                                            </div>
                                                        </div>
                                                    </li>
                                              </ul>
                                        </div>
                                        <div class="tasks__card-image-wrapper">
                                            <img src="https://smartmetrics.su/wp-content/uploads/2023/10/mask-group.png" alt="image" class="tasks__card-image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tasks__tabs-item">
                                <div class="tasks__card">
                                    <div class="tasks__card-top">
                                        <div class="tasks__card-text-content">
                                              <h3 class="tasks__card-title">
                                              Фиксируйте нарушения в автомат режиме с подтверждением видеозаписью
                                              </h3>
                                              <div class="tasks__card-text">
                                              Фиксация фактов мошенничества, контроль безопасности объектов с удаленным наблюдением
                                              </div>
                                              <ul class="tasks__card-features-list">
                                                    <li class="tasks__card-features-list-item">
                                                        <div class="tasks__card-feature">
                                                            <div class="tasks__card-feature-amount">
                                                            90%
                                                            </div>
                                                            <div class="tasks__card-feature-text">
                                                            Снижение кол-ва инцидентов в течение 1 месяца
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="tasks__card-features-list-item">
                                                        <div class="tasks__card-feature">
                                                            <div class="tasks__card-feature-amount">
                                                            6-8 раз
                                                            </div>
                                                            <div class="tasks__card-feature-text">
                                                            Увеличение скорости реакции на событие
                                                            </div>
                                                        </div>
                                                    </li>
                                              </ul>
                                        </div>
                                        <div class="tasks__card-image-wrapper">
                                            <img src="https://smartmetrics.su/wp-content/uploads/2023/10/mask-group-1.png" alt="image" class="tasks__card-image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tasks__tabs-item">
                                <div class="tasks__card">
                                    <div class="tasks__card-top">
                                        <div class="tasks__card-text-content">
                                              <h3 class="tasks__card-title">
                                              Влияйте на показатели выручки розничной сети через kpi
                                              </h3>
                                              <div class="tasks__card-text">
                                              Автоматический объективный расчет kpi и эффективности торговой точки в разрезе каждого объекта, в ежедневном режиме
                                              </div>
                                              <ul class="tasks__card-features-list">
                                                    <li class="tasks__card-features-list-item">
                                                        <div class="tasks__card-feature">
                                                            <div class="tasks__card-feature-amount">
                                                            12%
                                                            </div>
                                                            <div class="tasks__card-feature-text">
                                                            Средний прирост выручки в торговой точке в течение 3 месяцев
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="tasks__card-features-list-item">
                                                        <div class="tasks__card-feature">
                                                            <div class="tasks__card-feature-amount">
                                                            26%
                                                            </div>
                                                            <div class="tasks__card-feature-text">
                                                            Средний прирост прибыли с каждой торговой точки
                                                            </div>
                                                        </div>
                                                    </li>
                                              </ul>
                                        </div>
                                        <div class="tasks__card-image-wrapper">
                                            <img src="https://smartmetrics.su/wp-content/uploads/2023/10/mask-group-2.png" alt="image" class="tasks__card-image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tasks__tabs-item">
                                <div class="tasks__card">
                                    <div class="tasks__card-top">
                                        <div class="tasks__card-text-content">
                                              <h3 class="tasks__card-title">
                                              Повышайте лояльность вашей ЦА за счет улучшения сервиса
                                              </h3>
                                              <div class="tasks__card-text">
                                              Система контроля выполнения стандартов с формированием отчетов влияния эффективности на ключевые показатели
                                              </div>
                                              <ul class="tasks__card-features-list">
                                                    <li class="tasks__card-features-list-item">
                                                        <div class="tasks__card-feature">
                                                            <div class="tasks__card-feature-amount">
                                                            45%
                                                            </div>
                                                            <div class="tasks__card-feature-text">
                                                            Снижение негативных отзывов
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="tasks__card-features-list-item">
                                                        <div class="tasks__card-feature">
                                                            <div class="tasks__card-feature-amount">
                                                            15%
                                                            </div>
                                                            <div class="tasks__card-feature-text">
                                                            Увеличение возвращаемость (retention) клиентов
                                                            </div>
                                                        </div>
                                                    </li>
                                              </ul>
                                        </div>
                                        <div class="tasks__card-image-wrapper">
                                            <img src="https://smartmetrics.su/wp-content/uploads/2023/10/mask-group-3.png" alt="image" class="tasks__card-image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tasks__tabs-item">
                                <div class="tasks__card">
                                    <div class="tasks__card-top">
                                        <div class="tasks__card-text-content">
                                              <h3 class="tasks__card-title">
                                              Получите сервис повышения выручки с окупаемостью 3,6 месяца
                                              </h3>
                                              <div class="tasks__card-text">
                                              Сертифицированный it продукт с внедрением в течение одного месяца без капиталозатрат
                                              </div>
                                              <ul class="tasks__card-features-list">
                                                    <li class="tasks__card-features-list-item">
                                                        <div class="tasks__card-feature">
                                                            <div class="tasks__card-feature-amount">
                                                            500+
                                                            </div>
                                                            <div class="tasks__card-feature-text">
                                                            Коэффициент рентабельности инвестиций (ROI)
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="tasks__card-features-list-item">
                                                        <div class="tasks__card-feature">
                                                            <div class="tasks__card-feature-amount">
                                                            26%
                                                            </div>
                                                            <div class="tasks__card-feature-text">
                                                            Средний прирост прибыли с каждой торговой точки
                                                            </div>
                                                        </div>
                                                    </li>
                                              </ul>
                                        </div>
                                        <div class="tasks__card-image-wrapper">
                                            <img src="https://smartmetrics.su/wp-content/uploads/2023/10/mask-group-4.png" alt="image" class="tasks__card-image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tasks__card-bottom">
                        <a href="#" class="tasks__card-link tasks__card-link--blue js-open-modal">
                            Запросить демо
                        </a>
                        <a href="/tariffs" class="tasks__card-link"><?php echo esc_html($link_title); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="advantages">
  <div class="advantages__content">
      <h2 class="advantages__heading">
        За счет чего увеличиваем прибыль?
      </h2>
      <ul class="advantages__list">
          
              <li class="advantages__list-item">
                  <div class="advantages__card">
                      <img src="<?php bloginfo("template_url") ?>/static/icons/i-6.svg" alt="icon" class="advantages__card-icon">

                      <div class="advantages__card-content">
                          <h3 class="advantages__card-title">
                            Соблюдение регламентов
                          </h3>
                          <div class="advantages__card-text">
                              <p>Автоматическая фиксация и выгрузка 
                              нарушений. Потоковая обработка и проверка</p>
                          </div>
                      </div>
                  </div>
              </li>
              <li class="advantages__list-item">
                  <div class="advantages__card">
                      <img src="<?php bloginfo("template_url") ?>/static/icons/i-7.svg" alt="icon" class="advantages__card-icon">

                      <div class="advantages__card-content">
                          <h3 class="advantages__card-title">
                            Контроль качества
                          </h3>
                          <div class="advantages__card-text">
                              <p>Автоматическая фиксация и выгрузка 
                              нарушений. Потоковая обработка и проверка</p>
                          </div>
                      </div>
                  </div>
              </li>
              <li class="advantages__list-item">
                  <div class="advantages__card">
                      <img src="<?php bloginfo("template_url") ?>/static/icons/i-8.svg" alt="icon" class="advantages__card-icon">

                      <div class="advantages__card-content">
                          <h3 class="advantages__card-title">
                            Мерчандайзинг
                          </h3>
                          <div class="advantages__card-text">
                              <p>Автоматическая фиксация и выгрузка 
                              нарушений. Потоковая обработка и проверка</p>
                          </div>
                      </div>
                  </div>
              </li>
              <li class="advantages__list-item">
                  <div class="advantages__card">
                      <img src="<?php bloginfo("template_url") ?>/static/icons/i-9.svg" alt="icon" class="advantages__card-icon">

                      <div class="advantages__card-content">
                          <h3 class="advantages__card-title">
                            Безопасность
                          </h3>
                          <div class="advantages__card-text">
                              <p>Автоматическая фиксация и выгрузка 
                              нарушений. Потоковая обработка и проверка</p>
                          </div>
                      </div>
                  </div>
              </li>
              <li class="advantages__list-item">
                  <div class="advantages__card">
                      <img src="<?php bloginfo("template_url") ?>/static/icons/i-10.svg" alt="icon" class="advantages__card-icon">

                      <div class="advantages__card-content">
                          <h3 class="advantages__card-title">
                            Оценка эффективности маркетинга
                          </h3>
                          <div class="advantages__card-text">
                              <p>Автоматическая фиксация и выгрузка 
                              нарушений. Потоковая обработка и проверка</p>
                          </div>
                      </div>
                  </div>
              </li>
              <li class="advantages__list-item">
                  <a href="#" class="advantages__demo js-open-modal">
                      <div class="advantages__demo-content">
                          <h3 class="advantages__demo-title">
                          ПО внесено в реестр Российского ПО Минцифры
                          </h3>
                          <div class="advantages__demo-text">
                              <p>
                              Описание — это словесное изображение кого-либо или чего-либо. Ключевые слова — прилагательные.
                              </p>
                          </div>
                          <svg width="14" height="14" aria-hidden="true">
                                <use xlink:href="#fat-arrow-right"></use>
                            </svg>
                      </div>
                  </a>
              </li>

      </ul>
  </div>
</section>