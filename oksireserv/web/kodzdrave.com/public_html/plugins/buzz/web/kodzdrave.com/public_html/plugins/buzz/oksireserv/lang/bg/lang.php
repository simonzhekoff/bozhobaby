<?php

return [

    'plugin' => [
        'name' => 'Окси Резервации',
        'category' => 'Окси Резервации',
        'description' => 'Quick reservations plugin.',
        'menu_label' => 'Окси Резервации',
    ],

    'permission' => [
        'tab_label' => 'Окси Reservations',
        'reservations' => 'Окси Reservations management',
        'statuses' => 'Statuses management',
        'export' => 'Reservations export',
    ],

    'reservations' => [
        'menu_label' => 'Окси Резервации',
        'widget_label' => 'Окси Резервации',
        'bulk_actions' => 'Bulk actions',
        'approved' => 'Одобри',
        'approved_question' => 'Искате ли да промените статусът на резервацията на Одобрена?',
        'closed' => 'Затвори',
        'closed_question' => 'Искате ли да промените статусът на резервацията на Затворена?',
        'received' => 'Получен',
        'received_question' => 'Искате ли да промените статусът на резервацията на Получена?',
        'cancelled' => 'Откажи',
        'cancelled_question' => 'Искате ли да промените статусът на резервацията на Отказан',
        'delete' => 'Изтрий',
        'delete_question' => 'Искате ли да изтриете резервацията?',
        'change_status_success' => 'Статусът на резервацията беше променен успешно.',
    ],

    'reservation' => [
        'date' => 'Дата',
        'time' => 'Час',
        'date_format' => 'd.m.Y H:i:s',
        'name' => 'Име',
        'email' => 'Email',
        'phone' => 'Телефон',
        'status' => 'Статус',
        'created_at' => 'Създадена на:',
        'created_at_format' => 'd.m.Y H:i:s',
        'street' => 'Адрес',
        'message' => 'Съобщение',
        'number' => 'Номер',
        'nomer_obuv' => 'Номер на обувка',
        'usluga' => 'Вид на услугата',
        'returning' => 'Returning',
        'submit' => 'Добави',
        'komp_analiz' => 'Анализ на ходила и стойка - 40 лв.',
        'izrabotka_stelki' => 'Изработка на стелки - 165 лв.',
        'double' => 'Комп. анализ + стелки',
        'oksi' => 'Окси-водородна терапия - 25 лв. (1 час)',
    ],

    'statuses' => [
        'menu_label' => 'Статуси',
        'change_order' => 'Пренареди',
    ],

    'status' => [
        'name' => 'Статус',
        'color' => 'Цвят',
        'ident' => 'Ident',
        'order' => 'Подредба',
        'enabled' => 'Разрешено',
        'created' => 'Създадено',
        'created_format' => 'd.m.Y H:i:s',
        'updated' => 'Обновено',
        'updated_format' => 'd.m.Y H:i:s',
    ],

    'export' => [
        'menu_label' => 'Експорт',
        'status_filter' => 'Филтрирай по статус',
        'status_filter_label' => 'Статус',
        'status_filter_tab' => 'Статус',
    ],

    'reservationform' => [
        'name' => 'Резервационна форма',
        'description' => 'Form for taking reservations in specific date/time.',
        'success' => 'Резервацията беше изпратена успешно!',
    ],

    'mail' => [
        'cs_label' => 'Окси Reservation confirmation CS',
        'en_label' => 'Окси Reservation confirmation EN',
        'es_label' => 'Окси Reservation confirmation ES',
        'fr_label' => 'Окси Reservation confirmation FR',
        'ru_label' => 'Окси Reservation confirmation RU',
        'bg_label' => 'Окси Reservation confirmation BG',
    ],

    'errors' => [
        'empty_date' => 'Трябва да изберете дата!',
        'empty_hour' => 'Трябва да изберете час!',
        'please_wait' => 'Може да изпращате по 1 резервация на 30сек. Моля, изчакайте',
        'session_expired' => 'Изтекла сесия! Моля, обновете страницата.',
        'exception' => 'Нещо се обърка и не можахме да изпратим резервацията.',
        'already_booked' => 'Дата :Вече има такава резервация.',
        'days_off' => 'Избраната дата е почивен ден.',
        'out_of_hours' => 'Избраният час е извън работното време.',
        'past_date' => 'Избраната дата е в минал период.',
    ],

    'settings' => [
        'description' => 'Управление на настройките за резервации.',
        'tabs' => [
            'plugin'  => 'Настройки на резервациите',
            'admin'   => 'Потвърждение от админ',
            'datetime' => 'Настройка на дата и час',
            'returning' => 'Върнали се клиенти',
            'working_days' => 'Работни дни',
        ],

        'returning_mark' => [
            'label'   => 'Маркирай клиентите, които са се върнали.',
            'comment' => 'Mark customers with that number of reservations or more. Disable by value 0.',
        ],
        'admin_confirmation_enable' => [
            'label'   => 'Разреши одобрението от администратор.',
        ],
        'admin_confirmation_email' => [
            'label'   => 'Admin email',
            'comment' => 'Admin email, за да бъде изпратено потвърждение.',
        ],
        'admin_confirmation_name' => [
            'label'   => 'Admin име',
            'comment' => 'Admin име за email за потвърждение.',
        ],
        'admin_confirmation_locale' => [
            'label'   => 'Admin confirmation locale',
            'comment' => 'Locale of confirmation email.',
        ],
        'reservation_interval' => [
            'label'   => 'Reservations interval slot (minute)',
            'comment' => 'Used for reservation form time picker.',
        ],
        'reservation_length' => [
            'label'   => 'Length of one reservation',
            'comment' => 'How much time one reservation takes.',
        ],
        'reservation_length_unit' => [
            'options' => [
                'minutes' => 'minutes',
                'hours' => 'hours',
                'days' => 'days',
                'weeks' => 'weeks',
            ],
        ],
        'formats_date' => [
            'label'   => 'Date format',
            'comment' => 'You can use: d, dd, ddd, dddd, m, mm, mmm, mmmm, yy, yyyy, Y',
        ],
        'formats_time' => [
            'label'   => 'Time format',
            'comment' => 'You can use: h, hh, H, HH, i, a, A',
        ],
        'first_weekday' => [
            'label'   => 'The first day of the week is Monday?',
        ],
        'work_time_from' => [
            'label'   => 'Start working from',
            'comment' => 'Time to format HH:mm (24 hours format)',
        ],
        'work_time_to' => [
            'label'   => 'Finish working at',
            'comment' => 'Time to format HH:mm (24 hours format)',
        ],
        'work_days' => [
            'label'   => 'Работни дни',
            'monday'    => 'Понеделник',
            'tuesday'   => 'Вторник',
            'wednesday' => 'Сряда',
            'thursday'  => 'Четвъртък',
            'friday'    => 'Петък',
            'saturday'  => 'Събота',
            'sunday'    => 'Неделя',
        ],
    ],
];
