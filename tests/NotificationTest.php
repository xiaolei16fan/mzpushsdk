<?php

use MzPush\MzPush;
use MzPush\VarnishedMessage;
use PHPUnit\Framework\TestCase;

class Notification extends TestCase
{
    /**
     * 发送通知栏消息
     */
    public function testVarnishedMessage()
    {
        $varnishedMessage = new VarnishedMessage();
        $mzPush = new MzPush(100999, '531732bc45324098978bf41c6954c09e');
        $data = json_encode(array("a" => "aaa", "b" => "bbb"));
        $varnishedMessage->setTitle('通知标题')
                        ->setContent($data)
                        ->setClickType(2)
                        ->setUrl('http://www.baidu.com/')
                        ->setNoticeExpandType(1)
                        ->setNoticeExpandContent('扩展内容')
                        ->setOffLine(1);
        $res = $mzPush->varnishedPush(array('868773027203481100999'), $varnishedMessage);
        print_r($res);
        // $this->assertInstanceOf(MzPush::class, $mzPush);
        // print_r($varnishedMessage); 
        // $this->assertEquals(0, 0);
    }
}