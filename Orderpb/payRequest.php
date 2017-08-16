<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: order/orderpb/order.proto

namespace Orderpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>orderpb.payRequest</code>
 */
class payRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string id = 1 [(.gogoproto.moretags) = "validate:&#92;"uuid4,required&#92;""];</code>
     */
    private $id = '';
    /**
     * <code>.paymentpb.card card = 2 [(.gogoproto.moretags) = "validate:&#92;"dive,required&#92;""];</code>
     */
    private $card = null;
    /**
     * <code>.paymentpb.paymentProviderId paymentProviderId = 3 [(.gogoproto.moretags) = "validate:&#92;"required,gte=1,lte=1&#92;""];</code>
     */
    private $paymentProviderId = 0;

    public function __construct() {
        \GPBMetadata\Order\Orderpb\Order::initOnce();
        parent::__construct();
    }

    /**
     * <code>string id = 1 [(.gogoproto.moretags) = "validate:&#92;"uuid4,required&#92;""];</code>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <code>string id = 1 [(.gogoproto.moretags) = "validate:&#92;"uuid4,required&#92;""];</code>
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;
    }

    /**
     * <code>.paymentpb.card card = 2 [(.gogoproto.moretags) = "validate:&#92;"dive,required&#92;""];</code>
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * <code>.paymentpb.card card = 2 [(.gogoproto.moretags) = "validate:&#92;"dive,required&#92;""];</code>
     */
    public function setCard(&$var)
    {
        GPBUtil::checkMessage($var, \Paymentpb\card::class);
        $this->card = $var;
    }

    /**
     * <code>.paymentpb.paymentProviderId paymentProviderId = 3 [(.gogoproto.moretags) = "validate:&#92;"required,gte=1,lte=1&#92;""];</code>
     */
    public function getPaymentProviderId()
    {
        return $this->paymentProviderId;
    }

    /**
     * <code>.paymentpb.paymentProviderId paymentProviderId = 3 [(.gogoproto.moretags) = "validate:&#92;"required,gte=1,lte=1&#92;""];</code>
     */
    public function setPaymentProviderId($var)
    {
        GPBUtil::checkEnum($var, \Paymentpb\paymentProviderId::class);
        $this->paymentProviderId = $var;
    }

}

