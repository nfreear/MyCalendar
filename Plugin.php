<?php namespace KurtJensen\MyCalendar;

use Backend;
use KurtJensen\MyCalendar\Controllers\Events as EventController;
use KurtJensen\MyCalendar\Models\Event as EventModel;
//use October\Rain\Auth\Models\User as BackUser;
use RainLab\User\Models\User;
use System\Classes\PluginBase;
use System\Classes\PluginManager;

/**
 * MyCalendar Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => 'kurtjensen.mycalendar::lang.plugin.name',
            'description' => 'kurtjensen.mycalendar::lang.plugin.description',
            'author' => 'KurtJensen',
            'icon' => 'icon-birthday-cake',
        ];
    }

    public function boot()
    {
        $manager = PluginManager::instance();
        if ($manager->exists('rainlab.user')) {
            User::extend(function ($model) {
                $model->hasMany['mycalevents'] = [
                    'KurtJensen\MyCalendar\Models\Events',
                    'table' => 'kurtjensen_mycal_events'];
            });

            EventModel::extend(function ($model) {
                $model->belongsTo['user'] = [
                    'RainLab\User\Models\User',
                    'table' => 'user',
                    'key' => 'user_id',
                    'otherKey' => 'id'];
            });

            EventController::extendFormFields(function ($form, $model, $context) {

                if (!$model instanceof EventModel) {
                    return;
                }

                $form->addFields([
                    'user_id' => [
                        'label' => 'kurtjensen.mycalendar::lang.event.user_id',
                        'type' => 'dropdown',
                        'span' => 'right',
                    ],
                ]);
            });

            EventController::extendListColumns(function ($lists, $model) {
                $lists->addColumns([
                    'fname' => [
                        'label' => 'kurtjensen.mycalendar::lang.event.fname',
                        'relation' => 'user',
                        'select' => 'name',
                        'searchable' => 'true',
                        'sortable' => 'true',
                    ],
                    'lname' => [
                        'label' => 'kurtjensen.mycalendar::lang.event.lname',
                        'relation' => 'user',
                        'select' => 'surname',
                        'searchable' => 'true',
                        'sortable' => 'true',
                    ],
                ]);
            });
        }

    }

    public function registerComponents()
    {
        return [
            'KurtJensen\MyCalendar\Components\Month' => 'Month',
            'KurtJensen\MyCalendar\Components\MonthEvents' => 'MonthEvents',
            //'KurtJensen\MyCalendar\Components\Week' => 'Week',
            'KurtJensen\MyCalendar\Components\EvList' => 'EvList',
            'KurtJensen\MyCalendar\Components\ListEvents' => 'ListEvents',
            'KurtJensen\MyCalendar\Components\Events' => 'Events',
            'KurtJensen\MyCalendar\Components\Event' => 'Event',
            'KurtJensen\MyCalendar\Components\EventForm' => 'EventForm',
        ];
    }

    public function registerNavigation()
    {
        $navMenu = [
            'mycalendar' => [
                'label' => 'kurtjensen.mycalendar::lang.plugin.name',
                'icon' => 'icon-birthday-cake',
                'url' => Backend::url('kurtjensen/mycalendar/events'),
                'permissions' => ['kurtjensen.mycalendar.*'],
                'order' => 500,

                'sideMenu' => [
                    'events' => [
                        'label' => 'kurtjensen.mycalendar::lang.events.menu_label',
                        'icon' => 'icon-birthday-cake',
                        'url' => Backend::url('kurtjensen/mycalendar/events'),
                        'permissions' => ['kurtjensen.mycalendar.events'],
                        'order' => 400],
                    'categories' => [
                        'label' => 'kurtjensen.mycalendar::lang.categories.menu_label',
                        'url' => Backend::url('kurtjensen/mycalendar/categories'),
                        'icon' => 'icon-folder',
                        'permissions' => ['kurtjensen.mycalendar.categories'],
                        'order' => 500,
                    ],
                ],
            ],
        ];

        if (class_exists('UserModel')) {
            $navMenu['mycalendar']['sideMenu']['events'] = [
                'label' => 'Events',
                'url' => Backend::url('kurtjensen/mycalendar/events'),
                'icon' => 'icon-birthday-cake',
                'permissions' => ['kurtjensen.mycalendar.events'],
            ];
        }

        return $navMenu;
    }

    public function registerPermissions()
    {
        return [
            'kurtjensen.mycalendar.events' => ['label' => 'kurtjensen.mycalendar::lang.plugin.access_events', 'tab' => 'kurtjensen.mycalendar::lang.plugin.tab'],
            'kurtjensen.mycalendar.categories' => ['label' => 'kurtjensen.mycalendar::lang.plugin.access_categories', 'tab' => 'kurtjensen.mycalendar::lang.plugin.tab'],
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label' => 'kurtjensen.mycalendar::lang.plugin.name',
                'icon' => 'icon-birthday-cake',
                'description' => 'kurtjensen.mycalendar::lang.settings.description',
                'class' => 'KurtJensen\MyCalendar\Models\Settings',
                'order' => 199,
            ],
        ];

    }

}
