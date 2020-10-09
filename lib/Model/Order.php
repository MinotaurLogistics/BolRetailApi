<?php
/**
 * Order
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\BolClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * v4
 *
 * The bol.com API for Retailers.
 *
 * OpenAPI spec version: 4.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.16
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\BolClient\Model;

use \ArrayAccess;
use \Swagger\BolClient\ObjectSerializer;

/**
 * Order Class Doc Comment
 *
 * @category Class
 * @description An order.
 * @package  Swagger\BolClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Order implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_id' => 'string',
        'pick_up_point' => 'bool',
        'order_placed_date_time' => '\DateTime',
        'shipment_details' => '\Swagger\BolClient\Model\ShipmentDetails',
        'billing_details' => '\Swagger\BolClient\Model\BillingDetails',
        'order_items' => '\Swagger\BolClient\Model\OrderOrderItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_id' => null,
        'pick_up_point' => null,
        'order_placed_date_time' => 'date-time',
        'shipment_details' => null,
        'billing_details' => null,
        'order_items' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'order_id' => 'orderId',
        'pick_up_point' => 'pickUpPoint',
        'order_placed_date_time' => 'orderPlacedDateTime',
        'shipment_details' => 'shipmentDetails',
        'billing_details' => 'billingDetails',
        'order_items' => 'orderItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_id' => 'setOrderId',
        'pick_up_point' => 'setPickUpPoint',
        'order_placed_date_time' => 'setOrderPlacedDateTime',
        'shipment_details' => 'setShipmentDetails',
        'billing_details' => 'setBillingDetails',
        'order_items' => 'setOrderItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_id' => 'getOrderId',
        'pick_up_point' => 'getPickUpPoint',
        'order_placed_date_time' => 'getOrderPlacedDateTime',
        'shipment_details' => 'getShipmentDetails',
        'billing_details' => 'getBillingDetails',
        'order_items' => 'getOrderItems'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
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
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['pick_up_point'] = isset($data['pick_up_point']) ? $data['pick_up_point'] : null;
        $this->container['order_placed_date_time'] = isset($data['order_placed_date_time']) ? $data['order_placed_date_time'] : null;
        $this->container['shipment_details'] = isset($data['shipment_details']) ? $data['shipment_details'] : null;
        $this->container['billing_details'] = isset($data['billing_details']) ? $data['billing_details'] : null;
        $this->container['order_items'] = isset($data['order_items']) ? $data['order_items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipment_details'] === null) {
            $invalidProperties[] = "'shipment_details' can't be null";
        }
        if ($this->container['order_items'] === null) {
            $invalidProperties[] = "'order_items' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id The order id.
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets pick_up_point
     *
     * @return bool
     */
    public function getPickUpPoint()
    {
        return $this->container['pick_up_point'];
    }

    /**
     * Sets pick_up_point
     *
     * @param bool $pick_up_point Indicates whether this order is shipped to a Pick Up Point.
     *
     * @return $this
     */
    public function setPickUpPoint($pick_up_point)
    {
        $this->container['pick_up_point'] = $pick_up_point;

        return $this;
    }

    /**
     * Gets order_placed_date_time
     *
     * @return \DateTime
     */
    public function getOrderPlacedDateTime()
    {
        return $this->container['order_placed_date_time'];
    }

    /**
     * Sets order_placed_date_time
     *
     * @param \DateTime $order_placed_date_time The date and time in ISO 8601 format when the order was placed.
     *
     * @return $this
     */
    public function setOrderPlacedDateTime($order_placed_date_time)
    {
        $this->container['order_placed_date_time'] = $order_placed_date_time;

        return $this;
    }

    /**
     * Gets shipment_details
     *
     * @return \Swagger\BolClient\Model\ShipmentDetails
     */
    public function getShipmentDetails()
    {
        return $this->container['shipment_details'];
    }

    /**
     * Sets shipment_details
     *
     * @param \Swagger\BolClient\Model\ShipmentDetails $shipment_details shipment_details
     *
     * @return $this
     */
    public function setShipmentDetails($shipment_details)
    {
        $this->container['shipment_details'] = $shipment_details;

        return $this;
    }

    /**
     * Gets billing_details
     *
     * @return \Swagger\BolClient\Model\BillingDetails
     */
    public function getBillingDetails()
    {
        return $this->container['billing_details'];
    }

    /**
     * Sets billing_details
     *
     * @param \Swagger\BolClient\Model\BillingDetails $billing_details billing_details
     *
     * @return $this
     */
    public function setBillingDetails($billing_details)
    {
        $this->container['billing_details'] = $billing_details;

        return $this;
    }

    /**
     * Gets order_items
     *
     * @return \Swagger\BolClient\Model\OrderOrderItem[]
     */
    public function getOrderItems()
    {
        return $this->container['order_items'];
    }

    /**
     * Sets order_items
     *
     * @param \Swagger\BolClient\Model\OrderOrderItem[] $order_items order_items
     *
     * @return $this
     */
    public function setOrderItems($order_items)
    {
        $this->container['order_items'] = $order_items;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
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
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
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


