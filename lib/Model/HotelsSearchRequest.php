<?php
/**
 * HotelsSearchRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * nlite API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
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
 * HotelsSearchRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class HotelsSearchRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'hotelsSearch_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'adults' => 'float',
        'checkin' => 'string',
        'checkout' => 'string',
        'children' => 'string',
        'currency' => 'string',
        'guest_nationality' => 'string',
        'hotel_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'adults' => null,
        'checkin' => null,
        'checkout' => null,
        'children' => null,
        'currency' => null,
        'guest_nationality' => null,
        'hotel_ids' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'adults' => false,
		'checkin' => false,
		'checkout' => false,
		'children' => false,
		'currency' => false,
		'guest_nationality' => false,
		'hotel_ids' => false
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
        'adults' => 'adults',
        'checkin' => 'checkin',
        'checkout' => 'checkout',
        'children' => 'children',
        'currency' => 'currency',
        'guest_nationality' => 'guestNationality',
        'hotel_ids' => 'hotelIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adults' => 'setAdults',
        'checkin' => 'setCheckin',
        'checkout' => 'setCheckout',
        'children' => 'setChildren',
        'currency' => 'setCurrency',
        'guest_nationality' => 'setGuestNationality',
        'hotel_ids' => 'setHotelIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adults' => 'getAdults',
        'checkin' => 'getCheckin',
        'checkout' => 'getCheckout',
        'children' => 'getChildren',
        'currency' => 'getCurrency',
        'guest_nationality' => 'getGuestNationality',
        'hotel_ids' => 'getHotelIds'
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
        $this->setIfExists('adults', $data ?? [], null);
        $this->setIfExists('checkin', $data ?? [], null);
        $this->setIfExists('checkout', $data ?? [], null);
        $this->setIfExists('children', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('guest_nationality', $data ?? [], null);
        $this->setIfExists('hotel_ids', $data ?? [], null);
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
     * Gets adults
     *
     * @return float|null
     */
    public function getAdults()
    {
        return $this->container['adults'];
    }

    /**
     * Sets adults
     *
     * @param float|null $adults adults
     *
     * @return self
     */
    public function setAdults($adults)
    {

        if (is_null($adults)) {
            throw new \InvalidArgumentException('non-nullable adults cannot be null');
        }

        $this->container['adults'] = $adults;

        return $this;
    }

    /**
     * Gets checkin
     *
     * @return string|null
     */
    public function getCheckin()
    {
        return $this->container['checkin'];
    }

    /**
     * Sets checkin
     *
     * @param string|null $checkin checkin
     *
     * @return self
     */
    public function setCheckin($checkin)
    {

        if (is_null($checkin)) {
            throw new \InvalidArgumentException('non-nullable checkin cannot be null');
        }

        $this->container['checkin'] = $checkin;

        return $this;
    }

    /**
     * Gets checkout
     *
     * @return string|null
     */
    public function getCheckout()
    {
        return $this->container['checkout'];
    }

    /**
     * Sets checkout
     *
     * @param string|null $checkout checkout
     *
     * @return self
     */
    public function setCheckout($checkout)
    {

        if (is_null($checkout)) {
            throw new \InvalidArgumentException('non-nullable checkout cannot be null');
        }

        $this->container['checkout'] = $checkout;

        return $this;
    }

    /**
     * Gets children
     *
     * @return string|null
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param string|null $children children
     *
     * @return self
     */
    public function setChildren($children)
    {

        if (is_null($children)) {
            throw new \InvalidArgumentException('non-nullable children cannot be null');
        }

        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {

        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets guest_nationality
     *
     * @return string|null
     */
    public function getGuestNationality()
    {
        return $this->container['guest_nationality'];
    }

    /**
     * Sets guest_nationality
     *
     * @param string|null $guest_nationality guest_nationality
     *
     * @return self
     */
    public function setGuestNationality($guest_nationality)
    {

        if (is_null($guest_nationality)) {
            throw new \InvalidArgumentException('non-nullable guest_nationality cannot be null');
        }

        $this->container['guest_nationality'] = $guest_nationality;

        return $this;
    }

    /**
     * Gets hotel_ids
     *
     * @return string[]|null
     */
    public function getHotelIds()
    {
        return $this->container['hotel_ids'];
    }

    /**
     * Sets hotel_ids
     *
     * @param string[]|null $hotel_ids hotel_ids
     *
     * @return self
     */
    public function setHotelIds($hotel_ids)
    {

        if (is_null($hotel_ids)) {
            throw new \InvalidArgumentException('non-nullable hotel_ids cannot be null');
        }

        $this->container['hotel_ids'] = $hotel_ids;

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


