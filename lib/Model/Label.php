<?php
/**
 * Label
 *
 * PHP version 5
 *
 * @category Class
 * @package  amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
 *
 * OpenAPI spec version: v0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.22
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0\Model;

use \ArrayAccess;
use \amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0\ObjectSerializer;

/**
 * Label Class Doc Comment
 *
 * @category Class
 * @description Data for creating a shipping label and dimensions for printing the label.
 * @package  amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Label implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Label';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'custom_text_for_label' => '\amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0\Model\CustomTextForLabel',
'dimensions' => '\amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0\Model\LabelDimensions',
'file_contents' => '\amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0\Model\FileContents',
'label_format' => '\amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0\Model\LabelFormat',
'standard_id_for_label' => '\amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0\Model\StandardIdForLabel'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'custom_text_for_label' => null,
'dimensions' => null,
'file_contents' => null,
'label_format' => null,
'standard_id_for_label' => null    ];

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
        'custom_text_for_label' => 'CustomTextForLabel',
'dimensions' => 'Dimensions',
'file_contents' => 'FileContents',
'label_format' => 'LabelFormat',
'standard_id_for_label' => 'StandardIdForLabel'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'custom_text_for_label' => 'setCustomTextForLabel',
'dimensions' => 'setDimensions',
'file_contents' => 'setFileContents',
'label_format' => 'setLabelFormat',
'standard_id_for_label' => 'setStandardIdForLabel'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'custom_text_for_label' => 'getCustomTextForLabel',
'dimensions' => 'getDimensions',
'file_contents' => 'getFileContents',
'label_format' => 'getLabelFormat',
'standard_id_for_label' => 'getStandardIdForLabel'    ];

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
        $this->container['custom_text_for_label'] = isset($data['custom_text_for_label']) ? $data['custom_text_for_label'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['file_contents'] = isset($data['file_contents']) ? $data['file_contents'] : null;
        $this->container['label_format'] = isset($data['label_format']) ? $data['label_format'] : null;
        $this->container['standard_id_for_label'] = isset($data['standard_id_for_label']) ? $data['standard_id_for_label'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['dimensions'] === null) {
            $invalidProperties[] = "'dimensions' can't be null";
        }
        if ($this->container['file_contents'] === null) {
            $invalidProperties[] = "'file_contents' can't be null";
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
     * Gets custom_text_for_label
     *
     * @return \amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0\Model\CustomTextForLabel
     */
    public function getCustomTextForLabel()
    {
        return $this->container['custom_text_for_label'];
    }

    /**
     * Sets custom_text_for_label
     *
     * @param \amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0\Model\CustomTextForLabel $custom_text_for_label custom_text_for_label
     *
     * @return $this
     */
    public function setCustomTextForLabel($custom_text_for_label)
    {
        $this->container['custom_text_for_label'] = $custom_text_for_label;

        return $this;
    }

    /**
     * Gets dimensions
     *
     * @return \amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0\Model\LabelDimensions
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0\Model\LabelDimensions $dimensions dimensions
     *
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets file_contents
     *
     * @return \amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0\Model\FileContents
     */
    public function getFileContents()
    {
        return $this->container['file_contents'];
    }

    /**
     * Sets file_contents
     *
     * @param \amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0\Model\FileContents $file_contents file_contents
     *
     * @return $this
     */
    public function setFileContents($file_contents)
    {
        $this->container['file_contents'] = $file_contents;

        return $this;
    }

    /**
     * Gets label_format
     *
     * @return \amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0\Model\LabelFormat
     */
    public function getLabelFormat()
    {
        return $this->container['label_format'];
    }

    /**
     * Sets label_format
     *
     * @param \amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0\Model\LabelFormat $label_format label_format
     *
     * @return $this
     */
    public function setLabelFormat($label_format)
    {
        $this->container['label_format'] = $label_format;

        return $this;
    }

    /**
     * Gets standard_id_for_label
     *
     * @return \amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0\Model\StandardIdForLabel
     */
    public function getStandardIdForLabel()
    {
        return $this->container['standard_id_for_label'];
    }

    /**
     * Sets standard_id_for_label
     *
     * @param \amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0\Model\StandardIdForLabel $standard_id_for_label standard_id_for_label
     *
     * @return $this
     */
    public function setStandardIdForLabel($standard_id_for_label)
    {
        $this->container['standard_id_for_label'] = $standard_id_for_label;

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
