<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: github.com/digota/digota/payment/paymentpb/payment.proto

namespace Paymentpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>paymentpb.ChargeList</code>
 */
class ChargeList extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated .paymentpb.Charge charges = 1;</code>
     */
    private $charges;
    /**
     * <code>int32 total = 2;</code>
     */
    private $total = 0;

    public function __construct() {
        \GPBMetadata\GithubCom\Digota\Digota\Payment\Paymentpb\Payment::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated .paymentpb.Charge charges = 1;</code>
     */
    public function getCharges()
    {
        return $this->charges;
    }

    /**
     * <code>repeated .paymentpb.Charge charges = 1;</code>
     */
    public function setCharges(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Paymentpb\Charge::class);
        $this->charges = $arr;
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

