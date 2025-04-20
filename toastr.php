<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Toastr Configuration
    |--------------------------------------------------------------------------
    |
    | This configuration file allows you to customize the behavior and appearance
    | of Toastr notifications.
    |
     */

    'options' => [

        /*
        |--------------------------------------------------------------------------
        | Default Notification Duration
        |--------------------------------------------------------------------------
        |
        | The default duration (in milliseconds) for how long a notification will
        | be displayed on the screen before it automatically disappears.
        |
         */

        'duration' => 3000,

        /*
        |--------------------------------------------------------------------------
        | Show/Hide Animation Duration
        |--------------------------------------------------------------------------
        |
        | The duration (in milliseconds) for the show and hide animations of the
        | notification.
        |
         */

        'animationDuration' => 400,

        /*
        |--------------------------------------------------------------------------
        | Progress Bar
        |--------------------------------------------------------------------------
        |
        | Enable or disable the progress bar that indicates the remaining time
        | for auto-closing notifications.
        |
         */

        'progressBar' => true,

        /*
        |--------------------------------------------------------------------------
        | Auto-Close Notifications
        |--------------------------------------------------------------------------
        |
        | Enable or disable auto-closing of notifications after the specified
        | duration.
        |
         */

        'autoClose' => true,

        /*
        |--------------------------------------------------------------------------
        | Close Button
        |--------------------------------------------------------------------------
        |
        | Enable or disable the close button on notifications.
        |
         */

        'closeButton' => true,

        /*
        |--------------------------------------------------------------------------
        | Close Button Icon
        |--------------------------------------------------------------------------
        |
        | Customize the icon for the close button (if enabled).
        |
         */

        'closeButtonIcon' => 'wisiva-toast-close-icon',

        /*
        |--------------------------------------------------------------------------
        | Notification Position Class
        |--------------------------------------------------------------------------
        |
        | Set the position class for notifications (toast-top-right, toast-top-center, toast-top-left,
        | toast-bottom-right, toast-bottom-center, toast-bottom-left).
        |
         */

        'positionClass' => 'wisiva-toast-top-right',

        /*
        |--------------------------------------------------------------------------
        | Show Notification Icons
        |--------------------------------------------------------------------------
        |
        | Enable or disable the display of icons in notifications.
        |
         */

        'showIcon' => true,

        /*
        |--------------------------------------------------------------------------
        | Prevent Duplicates
        |--------------------------------------------------------------------------
        |
        | Enable or disable duplicating the toasts
        |
         */

        'preventDuplicates' => true,

        /*
        |--------------------------------------------------------------------------
        | Icon Classes
        |--------------------------------------------------------------------------
        |
        | Define custom icon classes for different notification types.
        |
         */

        'icons' => [
            'info' => 'wisiva-toast-info-icon',
            'warning' => 'wisiva-toast-warning-icon',
            'success' => 'wisiva-toast-success-icon',
            'error' => 'wisiva-toast-error-icon',
        ],

        /*
        |--------------------------------------------------------------------------
        | Notification Color Classes
        |--------------------------------------------------------------------------
        |
        | Define custom color classes for different notification types.
        |
         */

        'colorsClasses' => [
            'info' => 'wisiva-toast-info',
            'warning' => 'wisiva-toast-warning',
            'success' => 'wisiva-toast-success',
            'error' => 'wisiva-toast-error',
        ],
    ],

];