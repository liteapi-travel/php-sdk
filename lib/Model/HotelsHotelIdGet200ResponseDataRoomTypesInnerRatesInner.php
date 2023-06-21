<?php
/**
 * HotelsHotelIdGet200ResponseDataRoomTypesInnerRatesInner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Lite API
 *
 * lite api hotel booking api
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * HotelsHotelIdGet200ResponseDataRoomTypesInnerRatesInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class HotelsHotelIdGet200ResponseDataRoomTypesInnerRatesInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_hotels__hotelId__get_200_response_data_roomTypes_inner_rates_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'rate_id' => 'string',
        'name' => 'string',
        'max_occupancy' => 'int',
        'retail_rate' => '\OpenAPI\Client\Model\HotelsHotelIdGet200ResponseDataRoomTypesInnerRatesInnerRetailRate',
        'cancellation_policies' => '\OpenAPI\Client\Model\HotelsHotelIdGet200ResponseDataRoomTypesInnerRatesInnerCancellationPolicies'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'rate_id' => null,
        'name' => null,
        'max_occupancy' => null,
        'retail_rate' => null,
        'cancellation_policies' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'rate_id' => false,
		'name' => false,
		'max_occupancy' => false,
		'retail_rate' => false,
		'cancellation_policies' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'rate_id' => 'rateId',
        'name' => 'name',
        'max_occupancy' => 'maxOccupancy',
        'retail_rate' => 'retailRate',
        'cancellation_policies' => 'cancellationPolicies'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rate_id' => 'setRateId',
        'name' => 'setName',
        'max_occupancy' => 'setMaxOccupancy',
        'retail_rate' => 'setRetailRate',
        'cancellation_policies' => 'setCancellationPolicies'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rate_id' => 'getRateId',
        'name' => 'getName',
        'max_occupancy' => 'getMaxOccupancy',
        'retail_rate' => 'getRetailRate',
        'cancellation_policies' => 'getCancellationPolicies'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('rate_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('max_occupancy', $data ?? [], null);
        $this->setIfExists('retail_rate', $data ?? [], null);
        $this->setIfExists('cancellation_policies', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets rate_id
     *
     * @return string|null
     */
    public function getRateId()
    {
        return $this->container['rate_id'];
    }

    /**
     * Sets rate_id
     *
     * @param string|null $rate_id rate_id
     *
     * @return self
     */
    public function setRateId($rate_id)
    {
        if (is_null($rate_id)) {
            throw new \InvalidArgumentException('non-nullable rate_id cannot be null');
        }
        $this->container['rate_id'] = $rate_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets max_occupancy
     *
     * @return int|null
     */
    public function getMaxOccupancy()
    {
        return $this->container['max_occupancy'];
    }

    /**
     * Sets max_occupancy
     *
     * @param int|null $max_occupancy max_occupancy
     *
     * @return self
     */
    public function setMaxOccupancy($max_occupancy)
    {
        if (is_null($max_occupancy)) {
            throw new \InvalidArgumentException('non-nullable max_occupancy cannot be null');
        }
        $this->container['max_occupancy'] = $max_occupancy;

        return $this;
    }

    /**
     * Gets retail_rate
     *
     * @return \OpenAPI\Client\Model\HotelsHotelIdGet200ResponseDataRoomTypesInnerRatesInnerRetailRate|null
     */
    public function getRetailRate()
    {
        return $this->container['retail_rate'];
    }

    /**
     * Sets retail_rate
     *
     * @param \OpenAPI\Client\Model\HotelsHotelIdGet200ResponseDataRoomTypesInnerRatesInnerRetailRate|null $retail_rate retail_rate
     *
     * @return self
     */
    public function setRetailRate($retail_rate)
    {
        if (is_null($retail_rate)) {
            throw new \InvalidArgumentException('non-nullable retail_rate cannot be null');
        }
        $this->container['retail_rate'] = $retail_rate;

        return $this;
    }

    /**
     * Gets cancellation_policies
     *
     * @return \OpenAPI\Client\Model\HotelsHotelIdGet200ResponseDataRoomTypesInnerRatesInnerCancellationPolicies|null
     */
    public function getCancellationPolicies()
    {
        return $this->container['cancellation_policies'];
    }

    /**
     * Sets cancellation_policies
     *
     * @param \OpenAPI\Client\Model\HotelsHotelIdGet200ResponseDataRoomTypesInnerRatesInnerCancellationPolicies|null $cancellation_policies cancellation_policies
     *
     * @return self
     */
    public function setCancellationPolicies($cancellation_policies)
    {
        if (is_null($cancellation_policies)) {
            throw new \InvalidArgumentException('non-nullable cancellation_policies cannot be null');
        }
        $this->container['cancellation_policies'] = $cancellation_policies;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

