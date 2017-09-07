<?php
/**
 * Created by PhpStorm.
 * User: VI5
 * Date: 2017/9/7
 * Time: 10:33
 */

namespace vinsonhu\createLaravelPackageTest;


class Clpt
{
    /**
     * Laravel application
     *
     * @var \Illuminate\Foundation\Application
     */
    public $app;

    /**
     * Create a new confide instance.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return void
     */
    public function __construct($app)
    {
        $this->app = $app;
    }

    /**
     * Checks if the current user has a role by its name
     *
     * @param string $name Role name.
     *
     * @return bool
     */
    public function linkSuccess()
    {
        return 'linkSuccess';
    }

}