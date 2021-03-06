<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: github.com/digota/digota/order/orderpb/order.proto

namespace Orderpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>orderpb.OrderList</code>
 */
class OrderList extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated .orderpb.Order orders = 1;</code>
     */
    private $orders;
    /**
     * <code>int32 total = 2;</code>
     */
    private $total = 0;

    public function __construct() {
        \GPBMetadata\GithubCom\Digota\Digota\Order\Orderpb\Order::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated .orderpb.Order orders = 1;</code>
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * <code>repeated .orderpb.Order orders = 1;</code>
     */
    public function setOrders(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Orderpb\Order::class);
        $this->orders = $arr;
    }

    /**
     * <code>int32 total = 2;</code>
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * <code>int32 total = 2;</code>
     */
    public function setTotal($var)
    {
        GPBUtil::checkInt32($var);
        $this->total = $var;
    }

}

