<?php
/**
 * Created by PhpStorm.
 * User: EZ
 * Date: 2020/4/2
 * Time: 21:33
 */

namespace EasySwoole\WeChat\Bean\OfficialAccount\ServiceMessage;
use EasySwoole\Spl\SplArray;
use EasySwoole\Spl\SplBean;
use EasySwoole\WeChat\Bean\OfficialAccount\RequestConst;

class MsgList extends RequestedReplyMsg
{
    protected $starttime    = 0;
    protected $endtime  = 0;
    protected $msgid  = 1;
    protected $number =1000;

    /**
     * @return SplArray
     */
    public function buildMessage() : SplArray
    {

        $data = $this->toArray(null, MsgList::FILTER_NOT_NULL);

        return new SplArray($data);
    }

    /**
     * @return int
     */
    public function getStarttime() : ?int
    {
        return $this->starttime ?? time()-24*30*60*60;
    }

    /**
     * @param string $starttime
     *
     * @return MsgList
     */
    public function setStarttime(int $starttime) : MsgList
    {
        $this->starttime = $starttime;

        return $this;
    }
    /**
     * @return int
     */
    public function getEndtime() : ?int
    {
        return $this->endtime ?? time();
    }

    /**
     * @param string $endtime
     *
     * @return MsgList
     */
    public function setEndtime(int $endtime) : MsgList
    {
        $this->endtime = $endtime;

        return $this;
    }
    /**
     * @return int
     */
    public function getMsgid() : ?int
    {
        return $this->msgid ?? 1;
    }

    /**
     * @param string $msgid
     *
     * @return MsgList
     */
    public function setMsgid(int $msgid) : MsgList
    {
        $this->msgid = $msgid;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumber() : ?int
    {
        return $this->number ?? 1000;
    }

    /**
     * @param string $msgid
     *
     * @return MsgList
     */
    public function setNumber(int $number) : MsgList
    {
        $this->number = $number;

        return $this;
    }


}