<?php namespace Buzz\Oksireserv;

use Backend;
use Illuminate\Support\Facades\Validator;
use System\Classes\PluginBase;
use Buzz\Oksireserv\Facades\ReservationsFacade;
use Buzz\Oksireserv\Validators\ReservationsValidators;

/**
 * Plugin class
 */
class Plugin extends PluginBase
{
    public function boot()
    {
        $this->app->bind('buzz.oksireserv.facade', ReservationsFacade::class);

        // registrate reservations validators
        Validator::resolver(function($translator, $data, $rules, $messages, $customAttributes) {
            return new ReservationsValidators($translator, $data, $rules, $messages, $customAttributes);
        });
    }

    public function registerNavigation()
    {
        return [
            'reservations' => [
                'label'       => 'buzz.oksireserv::lang.plugin.menu_label',
                'url'         => Backend::url('buzz/oksireserv/reservations'),
                'icon'        => 'icon-plus-square',
                'permissions' => ['buzz.oksireserv.*'],
                'order'       => 500,
                'sideMenu' => [
                    'reservations' => [
                        'label'       => 'buzz.oksireserv::lang.reservations.menu_label',
                        'url'         => Backend::url('buzz/oksireserv/reservations'),
                        'icon'        => 'icon-plus-square',
                        'permissions' => ['buzz.oksireserv.reservations'],
                        'order'       => 100,
                    ],
                    'statuses' => [
                        'label'       => 'buzz.oksireserv::lang.statuses.menu_label',
                        'icon'        => 'icon-star',
                        'url'         => Backend::url('buzz/oksireserv/statuses'),
                        'permissions' => ['buzz.oksireserv.statuses'],
                        'order'       => 200,
                    ],
                    'export' => [
                        'label'       => 'buzz.oksireserv::lang.export.menu_label',
                        'icon'        => 'icon-sign-out',
                        'url'         => Backend::url('buzz/oksireserv/reservations/export'),
                        'permissions' => ['buzz.oksireserv.export'],
                        'order'       => 300,
                    ],
                ],
            ],
        ];
    }

    public function registerComponents()
    {
        return [
            'Buzz\Oksireserv\Components\ReservationForm' => 'BuzzOksi',
        ];
    }

    public function registerReportWidgets()
    {
        return [
            'Buzz\Oksireserv\ReportWidgets\Reservations' => [
                'label'   => 'buzz.oksireserv::lang.reservations.widget_label',
                'context' => 'dashboard',
            ],
        ];
    }

    public function registerMailTemplates()
    {
        return [
            'buzz.oksireserv::mail.reservation-cs' => 'Reservation confirmation CS',
            'buzz.oksireserv::mail.reservation-en' => 'Reservation confirmation EN',
            'buzz.oksireserv::mail.reservation-es' => 'Reservation confirmation ES',
            'buzz.oksireserv::mail.reservation-fr' => 'Reservation confirmation FR',
            'buzz.oksireserv::mail.reservation-ru' => 'Reservation confirmation RU',
            'buzz.oksireserv::mail.reservation-bg' => 'Reservation confirmation BG',
            'buzz.oksireserv::mail.reservation-admin-cs' => 'Reservation confirmation for admin CS',
            'buzz.oksireserv::mail.reservation-admin-en' => 'Reservation confirmation for admin EN',
            'buzz.oksireserv::mail.reservation-admin-es' => 'Reservation confirmation for admin ES',
            'buzz.oksireserv::mail.reservation-admin-fr' => 'Reservation confirmation for admin FR',
            'buzz.oksireserv::mail.reservation-admin-ru' => 'Reservation confirmation for admin RU',
            'buzz.oksireserv::mail.reservation-admin-bg' => 'Reservation confirmation for admin BG',
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'category' => 'buzz.oksireserv::lang.plugin.category',
                'label' => 'buzz.oksireserv::lang.plugin.name',
                'description' => 'buzz.oksireserv::lang.settings.description',
                'icon' => 'icon-plus-square',
                'class' => 'Buzz\Oksireserv\Models\Settings',
                'order' => 100,
            ],
        ];
    }
}
