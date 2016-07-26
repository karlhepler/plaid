<?php

if (! function_exists('dd') ) {
    /**
     * Die & dump
     *
     * @param  mixed $mixed
     *
     * @return void
     */
    function dd()
    {
        $output = func_num_args() > 1
            ? print_r(func_get_args(), true)
            : print_r(func_get_args()[0], true);

        $output .= PHP_EOL;

        die($output);
    }
}
