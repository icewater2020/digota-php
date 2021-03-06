<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: github.com/digota/digota/order/orderpb/order.proto

namespace Orderpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>orderpb.NewRequest</code>
 */
class NewRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.paymentpb.Currency currency = 1;</code>
     */
    private $currency = 0;
    /**
     * <code>repeated .orderpb.OrderItem items = 2;</code>
     */
    private $items;
    /**
     * <code>map&lt;string, string&gt; metadata = 3;</code>
     */
    private $metadata;
    /**
     * <code>string email = 4;</code>
     */
    private $email = '';
    /**
     * <code>.orderpb.Shipping shipping = 5;</code>
     */
    private $shipping = null;

    public function __construct() {
        \GPBMetadata\GithubCom\Digota\Digota\Order\Orderpb\Order::initOnce();
        parent::__construct();
    }

    /**
     * <code>.paymentpb.Currency currency = 1;</code>
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * <code>.paymentpb.Currency currency = 1;</code>
     */
    public function setCurrency($var)
    {
        GPBUtil::checkEnum($var, \Paymentpb\Currency::class);
        $this->currency = $var;
    }

    /**
     * <code>repeated .orderpb.OrderItem items = 2;</code>
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * <code>repeated .orderpb.OrderItem items = 2;</code>
     */
    public function setItems(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Orderpb\OrderItem::class);
        $this->items = $arr;
    }

    /**
     * <code>map&lt;string, string&gt; metadata = 3;</code>
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * <code>map&lt;string, string&gt; metadata = 3;</code>
     */
    public function setMetadata(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;
    }

    /**
     * <code>string email = 4;</code>
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * <code>string email = 4;</code>
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;
    }

    /**
     * <code>.orderpb.Shipping shipping = 5;</code>
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * <code>.orderpb.Shipping shipping = 5;</code>
     */
    public function setShipping(&$var)
    {
        GPBUtil::checkMessage($var, \Orderpb\Shipping::class);
        $this->shipping = $var;
    }

}

