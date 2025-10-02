<?php
/**
 * 广播，广播信道
 */

namespace Illuminate\Broadcasting;

class Channel
{
    /**
     * The channel's name.
	 * 信道名
     *
     * @var string
     */
    public $name;

    /**
     * Create a new channel instance.
	 * 创建新的信道实例
     *
     * @param  string  $name
     * @return void
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Convert the channel instance to a string.
	 * 转换信道实例为字符串
     *
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }
}
