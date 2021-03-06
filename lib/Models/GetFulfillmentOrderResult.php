<?php
/**
 * GetFulfillmentOrderResult.
 *
 * PHP version 5
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * OpenAPI spec version: v0
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Models;

use ArrayAccess;
use Swagger\Client\ObjectSerializer;

/**
 * GetFulfillmentOrderResult Class Doc Comment.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class GetFulfillmentOrderResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'GetFulfillmentOrderResult';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'fulfillment_order' => '\Swagger\Client\Models\FulfillmentOrder',
'fulfillment_order_item' => '\Swagger\Client\Models\FulfillmentOrderItemList',
'fulfillment_shipment' => '\Swagger\Client\Models\FulfillmentShipmentList',
'return_item_list' => '\Swagger\Client\Models\ReturnItemList',
'return_authorization_list' => '\Swagger\Client\Models\ReturnAuthorizationList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'fulfillment_order' => null,
'fulfillment_order_item' => null,
'fulfillment_shipment' => null,
'return_item_list' => null,
'return_authorization_list' => null,    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'fulfillment_order' => 'FulfillmentOrder',
'fulfillment_order_item' => 'FulfillmentOrderItem',
'fulfillment_shipment' => 'FulfillmentShipment',
'return_item_list' => 'ReturnItemList',
'return_authorization_list' => 'ReturnAuthorizationList',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'fulfillment_order' => 'setFulfillmentOrder',
'fulfillment_order_item' => 'setFulfillmentOrderItem',
'fulfillment_shipment' => 'setFulfillmentShipment',
'return_item_list' => 'setReturnItemList',
'return_authorization_list' => 'setReturnAuthorizationList',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'fulfillment_order' => 'getFulfillmentOrder',
'fulfillment_order_item' => 'getFulfillmentOrderItem',
'fulfillment_shipment' => 'getFulfillmentShipment',
'return_item_list' => 'getReturnItemList',
'return_authorization_list' => 'getReturnAuthorizationList',    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['fulfillment_order'] = isset($data['fulfillment_order']) ? $data['fulfillment_order'] : null;
        $this->container['fulfillment_order_item'] = isset($data['fulfillment_order_item']) ? $data['fulfillment_order_item'] : null;
        $this->container['fulfillment_shipment'] = isset($data['fulfillment_shipment']) ? $data['fulfillment_shipment'] : null;
        $this->container['return_item_list'] = isset($data['return_item_list']) ? $data['return_item_list'] : null;
        $this->container['return_authorization_list'] = isset($data['return_authorization_list']) ? $data['return_authorization_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['fulfillment_order']) {
            $invalidProperties[] = "'fulfillment_order' can't be null";
        }
        if (null === $this->container['fulfillment_order_item']) {
            $invalidProperties[] = "'fulfillment_order_item' can't be null";
        }
        if (null === $this->container['return_item_list']) {
            $invalidProperties[] = "'return_item_list' can't be null";
        }
        if (null === $this->container['return_authorization_list']) {
            $invalidProperties[] = "'return_authorization_list' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets fulfillment_order.
     *
     * @return \Swagger\Client\Models\FulfillmentOrder
     */
    public function getFulfillmentOrder()
    {
        return $this->container['fulfillment_order'];
    }

    /**
     * Sets fulfillment_order.
     *
     * @param \Swagger\Client\Models\FulfillmentOrder $fulfillment_order fulfillment_order
     *
     * @return $this
     */
    public function setFulfillmentOrder($fulfillment_order)
    {
        $this->container['fulfillment_order'] = $fulfillment_order;

        return $this;
    }

    /**
     * Gets fulfillment_order_item.
     *
     * @return \Swagger\Client\Models\FulfillmentOrderItemList
     */
    public function getFulfillmentOrderItem()
    {
        return $this->container['fulfillment_order_item'];
    }

    /**
     * Sets fulfillment_order_item.
     *
     * @param \Swagger\Client\Models\FulfillmentOrderItemList $fulfillment_order_item fulfillment_order_item
     *
     * @return $this
     */
    public function setFulfillmentOrderItem($fulfillment_order_item)
    {
        $this->container['fulfillment_order_item'] = $fulfillment_order_item;

        return $this;
    }

    /**
     * Gets fulfillment_shipment.
     *
     * @return \Swagger\Client\Models\FulfillmentShipmentList
     */
    public function getFulfillmentShipment()
    {
        return $this->container['fulfillment_shipment'];
    }

    /**
     * Sets fulfillment_shipment.
     *
     * @param \Swagger\Client\Models\FulfillmentShipmentList $fulfillment_shipment fulfillment_shipment
     *
     * @return $this
     */
    public function setFulfillmentShipment($fulfillment_shipment)
    {
        $this->container['fulfillment_shipment'] = $fulfillment_shipment;

        return $this;
    }

    /**
     * Gets return_item_list.
     *
     * @return \Swagger\Client\Models\ReturnItemList
     */
    public function getReturnItemList()
    {
        return $this->container['return_item_list'];
    }

    /**
     * Sets return_item_list.
     *
     * @param \Swagger\Client\Models\ReturnItemList $return_item_list return_item_list
     *
     * @return $this
     */
    public function setReturnItemList($return_item_list)
    {
        $this->container['return_item_list'] = $return_item_list;

        return $this;
    }

    /**
     * Gets return_authorization_list.
     *
     * @return \Swagger\Client\Models\ReturnAuthorizationList
     */
    public function getReturnAuthorizationList()
    {
        return $this->container['return_authorization_list'];
    }

    /**
     * Sets return_authorization_list.
     *
     * @param \Swagger\Client\Models\ReturnAuthorizationList $return_authorization_list return_authorization_list
     *
     * @return $this
     */
    public function setReturnAuthorizationList($return_authorization_list)
    {
        $this->container['return_authorization_list'] = $return_authorization_list;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
