<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: product/productpb/product.proto

namespace Productpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>productpb.deleteRequest</code>
 */
class deleteRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string id = 1 [(.gogoproto.moretags) = "validate:&#92;"required,uuid4&#92;""];</code>
     */
    private $id = '';

    public function __construct() {
        \GPBMetadata\Product\Productpb\Product::initOnce();
        parent::__construct();
    }

    /**
     * <code>string id = 1 [(.gogoproto.moretags) = "validate:&#92;"required,uuid4&#92;""];</code>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <code>string id = 1 [(.gogoproto.moretags) = "validate:&#92;"required,uuid4&#92;""];</code>
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;
    }

}

