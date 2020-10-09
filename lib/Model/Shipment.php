<?php
/**
 * Shipment
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
 * Shipment Class Doc Comment
 *
 * @category Class
 * @package  Swagger\BolClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Shipment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Shipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipment_id' => 'int',
        'shipment_date_time' => '\DateTime',
        'shipment_reference' => 'string',
        'pick_up_point' => 'bool',
        'order' => '\Swagger\BolClient\Model\ShipmentOrder',
        'shipment_details' => '\Swagger\BolClient\Model\ShipmentDetails',
        'billing_details' => '\Swagger\BolClient\Model\BillingDetails',
        'shipping_label_id' => 'string',
        'shipment_items' => '\Swagger\BolClient\Model\ShipmentItem[]',
        'transport' => '\Swagger\BolClient\Model\ShipmentTransport'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipment_id' => 'int64',
        'shipment_date_time' => 'date-time',
        'shipment_reference' => null,
        'pick_up_point' => null,
        'order' => null,
        'shipment_details' => null,
        'billing_details' => null,
        'shipping_label_id' => null,
        'shipment_items' => null,
        'transport' => null
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
        'shipment_id' => 'shipmentId',
        'shipment_date_time' => 'shipmentDateTime',
        'shipment_reference' => 'shipmentReference',
        'pick_up_point' => 'pickUpPoint',
        'order' => 'order',
        'shipment_details' => 'shipmentDetails',
        'billing_details' => 'billingDetails',
        'shipping_label_id' => 'shippingLabelId',
        'shipment_items' => 'shipmentItems',
        'transport' => 'transport'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_id' => 'setShipmentId',
        'shipment_date_time' => 'setShipmentDateTime',
        'shipment_reference' => 'setShipmentReference',
        'pick_up_point' => 'setPickUpPoint',
        'order' => 'setOrder',
        'shipment_details' => 'setShipmentDetails',
        'billing_details' => 'setBillingDetails',
        'shipping_label_id' => 'setShippingLabelId',
        'shipment_items' => 'setShipmentItems',
        'transport' => 'setTransport'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_id' => 'getShipmentId',
        'shipment_date_time' => 'getShipmentDateTime',
        'shipment_reference' => 'getShipmentReference',
        'pick_up_point' => 'getPickUpPoint',
        'order' => 'getOrder',
        'shipment_details' => 'getShipmentDetails',
        'billing_details' => 'getBillingDetails',
        'shipping_label_id' => 'getShippingLabelId',
        'shipment_items' => 'getShipmentItems',
        'transport' => 'getTransport'
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
        $this->container['shipment_id'] = isset($data['shipment_id']) ? $data['shipment_id'] : null;
        $this->container['shipment_date_time'] = isset($data['shipment_date_time']) ? $data['shipment_date_time'] : null;
        $this->container['shipment_reference'] = isset($data['shipment_reference']) ? $data['shipment_reference'] : null;
        $this->container['pick_up_point'] = isset($data['pick_up_point']) ? $data['pick_up_point'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['shipment_details'] = isset($data['shipment_details']) ? $data['shipment_details'] : null;
        $this->container['billing_details'] = isset($data['billing_details']) ? $data['billing_details'] : null;
        $this->container['shipping_label_id'] = isset($data['shipping_label_id']) ? $data['shipping_label_id'] : null;
        $this->container['shipment_items'] = isset($data['shipment_items']) ? $data['shipment_items'] : null;
        $this->container['transport'] = isset($data['transport']) ? $data['transport'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        if ($this->container['shipment_items'] === null) {
            $invalidProperties[] = "'shipment_items' can't be null";
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
     * Gets shipment_id
     *
     * @return int
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id
     *
     * @param int $shipment_id A unique identifier for this shipment.
     *
     * @return $this
     */
    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets shipment_date_time
     *
     * @return \DateTime
     */
    public function getShipmentDateTime()
    {
        return $this->container['shipment_date_time'];
    }

    /**
     * Sets shipment_date_time
     *
     * @param \DateTime $shipment_date_time The date and time in ISO 8601 format when the order item was shipped.
     *
     * @return $this
     */
    public function setShipmentDateTime($shipment_date_time)
    {
        $this->container['shipment_date_time'] = $shipment_date_time;

        return $this;
    }

    /**
     * Gets shipment_reference
     *
     * @return string
     */
    public function getShipmentReference()
    {
        return $this->container['shipment_reference'];
    }

    /**
     * Sets shipment_reference
     *
     * @param string $shipment_reference Reference supplied by the user when this item was shipped.
     *
     * @return $this
     */
    public function setShipmentReference($shipment_reference)
    {
        $this->container['shipment_reference'] = $shipment_reference;

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
     * Gets order
     *
     * @return \Swagger\BolClient\Model\ShipmentOrder
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \Swagger\BolClient\Model\ShipmentOrder $order order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

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
     * Gets shipping_label_id
     *
     * @return string
     */
    public function getShippingLabelId()
    {
        return $this->container['shipping_label_id'];
    }

    /**
     * Sets shipping_label_id
     *
     * @param string $shipping_label_id The shipping label id.
     *
     * @return $this
     */
    public function setShippingLabelId($shipping_label_id)
    {
        $this->container['shipping_label_id'] = $shipping_label_id;

        return $this;
    }

    /**
     * Gets shipment_items
     *
     * @return \Swagger\BolClient\Model\ShipmentItem[]
     */
    public function getShipmentItems()
    {
        return $this->container['shipment_items'];
    }

    /**
     * Sets shipment_items
     *
     * @param \Swagger\BolClient\Model\ShipmentItem[] $shipment_items shipment_items
     *
     * @return $this
     */
    public function setShipmentItems($shipment_items)
    {
        $this->container['shipment_items'] = $shipment_items;

        return $this;
    }

    /**
     * Gets transport
     *
     * @return \Swagger\BolClient\Model\ShipmentTransport
     */
    public function getTransport()
    {
        return $this->container['transport'];
    }

    /**
     * Sets transport
     *
     * @param \Swagger\BolClient\Model\ShipmentTransport $transport transport
     *
     * @return $this
     */
    public function setTransport($transport)
    {
        $this->container['transport'] = $transport;

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

