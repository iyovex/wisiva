<?php

if (!function_exists('toastr')) {

    /**
     * Get the Toastr instance from the service container.
     *
     * @return \Wisiva\Toastr\Toastr
     */
    function toastr()
    {
        return app('toastr');
    }
}
