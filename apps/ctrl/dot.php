<?php
/**
 * Created by PhpStorm.
 * User: shenzhe
 * Date: 2016/11/21
 * Time: 12:05
 */

namespace ctrl;

use common;

class dot extends Base
{

    /**
     * @desc 服务调用者时间打点
     */
    public function client()
    {
        $serverName = $this->getString('serviceName', 'undefined');
        $serverIp = $this->getString('serviceIp', 'undefined');
        $serverPort = $this->getString('servicePort', 'undefined');
        $api = $this->getString('api', 'undefined');
        $time = $this->getFloat('time', 0);
        common\Log::info([
            $serverName, $serverIp, $serverPort, $api, $time
        ], 'client');
    }

    /**
     * @desc 服务提供者时间打点
     */
    public function service()
    {
        $serverName = $this->getString('serviceName', 'undefined');
        $serverIp = $this->getString('serviceIp', 'undefined');
        $serverPort = $this->getString('servicePort', 'undefined');
        $api = $this->getString('api', 'undefined');
        $time = $this->getFloat('time', 0);
        common\Log::info([
            $serverName, $serverIp, $serverPort, $api, $time
        ], 'service');
    }
}