<?php
/*
 * SnowflakeAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace SnowflakeAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class IdResponse implements JsonSerializable
{
    /**
     * Snowflake ID.
     * @var integer|null $id public property
     */
    public $id;

    /**
     * Machine ID.
     * @maps machine-id
     * @var integer|null $machineId public property
     */
    public $machineId;

    /**
     * MSB.
     * @var integer|null $msb public property
     */
    public $msb;

    /**
     * Sequence.
     * @var integer|null $sequence public property
     */
    public $sequence;

    /**
     * Generated at.
     * @var integer|null $time public property
     */
    public $time;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $id        Initialization value for $this->id
     * @param integer $machineId Initialization value for $this->machineId
     * @param integer $msb       Initialization value for $this->msb
     * @param integer $sequence  Initialization value for $this->sequence
     * @param integer $time      Initialization value for $this->time
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->id        = func_get_arg(0);
            $this->machineId = func_get_arg(1);
            $this->msb       = func_get_arg(2);
            $this->sequence  = func_get_arg(3);
            $this->time      = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']         = $this->id;
        $json['machine-id'] = $this->machineId;
        $json['msb']        = $this->msb;
        $json['sequence']   = $this->sequence;
        $json['time']       = $this->time;

        return $json;
    }
}
