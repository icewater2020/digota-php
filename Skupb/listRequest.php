<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sku/skupb/sku.proto

namespace Skupb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>skupb.listRequest</code>
 */
class listRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int64 page = 1 [(.gogoproto.moretags) = "validate:&#92;"omitempty,required,gte=0&#92;""];</code>
     */
    private $page = 0;
    /**
     * <code>int64 limit = 2 [(.gogoproto.moretags) = "validate:&#92;"omitempty,required,gt=0&#92;""];</code>
     */
    private $limit = 0;
    /**
     * <code>.skupb.listRequest.Sort sort = 3 [(.gogoproto.moretags) = "validate:&#92;"omitempty,required,gte=0,lte=4&#92;""];</code>
     */
    private $sort = 0;

    public function __construct() {
        \GPBMetadata\Sku\Skupb\Sku::initOnce();
        parent::__construct();
    }

    /**
     * <code>int64 page = 1 [(.gogoproto.moretags) = "validate:&#92;"omitempty,required,gte=0&#92;""];</code>
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * <code>int64 page = 1 [(.gogoproto.moretags) = "validate:&#92;"omitempty,required,gte=0&#92;""];</code>
     */
    public function setPage($var)
    {
        GPBUtil::checkInt64($var);
        $this->page = $var;
    }

    /**
     * <code>int64 limit = 2 [(.gogoproto.moretags) = "validate:&#92;"omitempty,required,gt=0&#92;""];</code>
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * <code>int64 limit = 2 [(.gogoproto.moretags) = "validate:&#92;"omitempty,required,gt=0&#92;""];</code>
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt64($var);
        $this->limit = $var;
    }

    /**
     * <code>.skupb.listRequest.Sort sort = 3 [(.gogoproto.moretags) = "validate:&#92;"omitempty,required,gte=0,lte=4&#92;""];</code>
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * <code>.skupb.listRequest.Sort sort = 3 [(.gogoproto.moretags) = "validate:&#92;"omitempty,required,gte=0,lte=4&#92;""];</code>
     */
    public function setSort($var)
    {
        GPBUtil::checkEnum($var, \Skupb\listRequest_Sort::class);
        $this->sort = $var;
    }

}

