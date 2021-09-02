<?php

if (! function_exists('resource_path')) {
    /**
     * Get the path to the resources folder.
     *
     * @param  string  $path
     * @return string
     */
    function resource_path($path = '')
    {
        return __DIR__.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'assets'.($path ? DIRECTORY_SEPARATOR.$path : $path);
    }
}
