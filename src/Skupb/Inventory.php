<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: github.com/digota/digota/sku/skupb/sku.proto

namespace Skupb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>skupb.Inventory</code>
 */
class Inventory extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int64 quantity = 1;</code>
     */
    private $quantity = 0;
    /**
     * <code>.skupb.Inventory.Type type = 2;</code>
     */
    private $type = 0;

    public function __construct() {
        \GPBMetadata\GithubCom\Digota\Digota\Sku\Skupb\Sku::initOnce();
        parent::__construct();
    }

    /**
     * <code>int64 quantity = 1;</code>
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * <code>int64 quantity = 1;</code>
     */
    public function setQuantity($var)
    {
        GPBUtil::checkInt64($var);
        $this->quantity = $var;
    }

    /**
     * <code>.skupb.Inventory.Type type = 2;</code>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <code>.skupb.Inventory.Type type = 2;</code>
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Skupb\Inventory_Type::class);
        $this->type = $var;
    }

}
