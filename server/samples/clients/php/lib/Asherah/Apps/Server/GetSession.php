<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: appencryption.proto

namespace Asherah\Apps\Server;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>asherah.apps.server.GetSession</code>
 */
class GetSession extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string partition_id = 1;</code>
     */
    private $partition_id = '';

    public function __construct() {
        \GPBMetadata\Appencryption::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string partition_id = 1;</code>
     * @return string
     */
    public function getPartitionId()
    {
        return $this->partition_id;
    }

    /**
     * Generated from protobuf field <code>string partition_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPartitionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->partition_id = $var;

        return $this;
    }

}
