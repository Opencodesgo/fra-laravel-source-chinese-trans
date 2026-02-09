<?php
/**
 * Illuminate，控制台，事件，工具开始
 */

namespace Illuminate\Console\Events;

class ArtisanStarting
{
    /**
     * The Artisan application instance.
	 * 工具应用实例
     *
     * @var \Illuminate\Console\Application
     */
    public $artisan;

    /**
     * Create a new event instance.
	 * 创建新的事件实例
     *
     * @param  \Illuminate\Console\Application  $artisan
     * @return void
     */
    public function __construct($artisan)
    {
        $this->artisan = $artisan;
    }
}
