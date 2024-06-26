<?php
/**
 * InstallmentPlanInitiateRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Splitit
 * @author   Konfig
 * @link     https://konfigthis.com
 */

/**
 * splitit-web-api-v3
 *
 * Splitit's Web API
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://konfigthis.com
 */


namespace Splitit\Model;

use \ArrayAccess;
use \Splitit\ObjectSerializer;

/**
 * InstallmentPlanInitiateRequest Class Doc Comment
 *
 * @category Class
 * @package  Splitit
 * @implements \ArrayAccess<string, mixed>
 */
class InstallmentPlanInitiateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InstallmentPlanInitiateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'auto_capture' => 'bool',
        'attempt3d_secure' => 'bool',
        'shopper' => '\Splitit\Model\ShopperData',
        'plan_data' => '\Splitit\Model\PlanDataModel',
        'billing_address' => '\Splitit\Model\AddressDataModel',
        'redirect_urls' => '\Splitit\Model\InitiateRedirectionEndpointsModel',
        'ux_settings' => '\Splitit\Model\UxSettingsModel',
        'events_endpoints' => '\Splitit\Model\EventsEndpointsModel',
        'processing_data' => '\Splitit\Model\ProcessingData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'auto_capture' => null,
        'attempt3d_secure' => null,
        'shopper' => null,
        'plan_data' => null,
        'billing_address' => null,
        'redirect_urls' => null,
        'ux_settings' => null,
        'events_endpoints' => null,
        'processing_data' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'auto_capture' => false,
		'attempt3d_secure' => false,
		'shopper' => false,
		'plan_data' => false,
		'billing_address' => false,
		'redirect_urls' => false,
		'ux_settings' => false,
		'events_endpoints' => false,
		'processing_data' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
        'auto_capture' => 'AutoCapture',
        'attempt3d_secure' => 'Attempt3dSecure',
        'shopper' => 'Shopper',
        'plan_data' => 'PlanData',
        'billing_address' => 'BillingAddress',
        'redirect_urls' => 'RedirectUrls',
        'ux_settings' => 'UxSettings',
        'events_endpoints' => 'EventsEndpoints',
        'processing_data' => 'ProcessingData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_capture' => 'setAutoCapture',
        'attempt3d_secure' => 'setAttempt3dSecure',
        'shopper' => 'setShopper',
        'plan_data' => 'setPlanData',
        'billing_address' => 'setBillingAddress',
        'redirect_urls' => 'setRedirectUrls',
        'ux_settings' => 'setUxSettings',
        'events_endpoints' => 'setEventsEndpoints',
        'processing_data' => 'setProcessingData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_capture' => 'getAutoCapture',
        'attempt3d_secure' => 'getAttempt3dSecure',
        'shopper' => 'getShopper',
        'plan_data' => 'getPlanData',
        'billing_address' => 'getBillingAddress',
        'redirect_urls' => 'getRedirectUrls',
        'ux_settings' => 'getUxSettings',
        'events_endpoints' => 'getEventsEndpoints',
        'processing_data' => 'getProcessingData'
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
        $this->setIfExists('auto_capture', $data ?? [], null);
        $this->setIfExists('attempt3d_secure', $data ?? [], null);
        $this->setIfExists('shopper', $data ?? [], null);
        $this->setIfExists('plan_data', $data ?? [], null);
        $this->setIfExists('billing_address', $data ?? [], null);
        $this->setIfExists('redirect_urls', $data ?? [], null);
        $this->setIfExists('ux_settings', $data ?? [], null);
        $this->setIfExists('events_endpoints', $data ?? [], null);
        $this->setIfExists('processing_data', $data ?? [], null);
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
     * Gets auto_capture
     *
     * @return bool|null
     */
    public function getAutoCapture()
    {
        return $this->container['auto_capture'];
    }

    /**
     * Sets auto_capture
     *
     * @param bool|null $auto_capture auto_capture
     *
     * @return self
     */
    public function setAutoCapture($auto_capture)
    {

        if (is_null($auto_capture)) {
            throw new \InvalidArgumentException('non-nullable auto_capture cannot be null');
        }

        $this->container['auto_capture'] = $auto_capture;

        return $this;
    }

    /**
     * Gets attempt3d_secure
     *
     * @return bool|null
     */
    public function getAttempt3dSecure()
    {
        return $this->container['attempt3d_secure'];
    }

    /**
     * Sets attempt3d_secure
     *
     * @param bool|null $attempt3d_secure attempt3d_secure
     *
     * @return self
     */
    public function setAttempt3dSecure($attempt3d_secure)
    {

        if (is_null($attempt3d_secure)) {
            throw new \InvalidArgumentException('non-nullable attempt3d_secure cannot be null');
        }

        $this->container['attempt3d_secure'] = $attempt3d_secure;

        return $this;
    }

    /**
     * Gets shopper
     *
     * @return \Splitit\Model\ShopperData|null
     */
    public function getShopper()
    {
        return $this->container['shopper'];
    }

    /**
     * Sets shopper
     *
     * @param \Splitit\Model\ShopperData|null $shopper shopper
     *
     * @return self
     */
    public function setShopper($shopper)
    {

        if (is_null($shopper)) {
            throw new \InvalidArgumentException('non-nullable shopper cannot be null');
        }

        $this->container['shopper'] = $shopper;

        return $this;
    }

    /**
     * Gets plan_data
     *
     * @return \Splitit\Model\PlanDataModel|null
     */
    public function getPlanData()
    {
        return $this->container['plan_data'];
    }

    /**
     * Sets plan_data
     *
     * @param \Splitit\Model\PlanDataModel|null $plan_data plan_data
     *
     * @return self
     */
    public function setPlanData($plan_data)
    {

        if (is_null($plan_data)) {
            throw new \InvalidArgumentException('non-nullable plan_data cannot be null');
        }

        $this->container['plan_data'] = $plan_data;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \Splitit\Model\AddressDataModel|null
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \Splitit\Model\AddressDataModel|null $billing_address billing_address
     *
     * @return self
     */
    public function setBillingAddress($billing_address)
    {

        if (is_null($billing_address)) {
            throw new \InvalidArgumentException('non-nullable billing_address cannot be null');
        }

        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets redirect_urls
     *
     * @return \Splitit\Model\InitiateRedirectionEndpointsModel|null
     */
    public function getRedirectUrls()
    {
        return $this->container['redirect_urls'];
    }

    /**
     * Sets redirect_urls
     *
     * @param \Splitit\Model\InitiateRedirectionEndpointsModel|null $redirect_urls redirect_urls
     *
     * @return self
     */
    public function setRedirectUrls($redirect_urls)
    {

        if (is_null($redirect_urls)) {
            throw new \InvalidArgumentException('non-nullable redirect_urls cannot be null');
        }

        $this->container['redirect_urls'] = $redirect_urls;

        return $this;
    }

    /**
     * Gets ux_settings
     *
     * @return \Splitit\Model\UxSettingsModel|null
     */
    public function getUxSettings()
    {
        return $this->container['ux_settings'];
    }

    /**
     * Sets ux_settings
     *
     * @param \Splitit\Model\UxSettingsModel|null $ux_settings ux_settings
     *
     * @return self
     */
    public function setUxSettings($ux_settings)
    {

        if (is_null($ux_settings)) {
            throw new \InvalidArgumentException('non-nullable ux_settings cannot be null');
        }

        $this->container['ux_settings'] = $ux_settings;

        return $this;
    }

    /**
     * Gets events_endpoints
     *
     * @return \Splitit\Model\EventsEndpointsModel|null
     */
    public function getEventsEndpoints()
    {
        return $this->container['events_endpoints'];
    }

    /**
     * Sets events_endpoints
     *
     * @param \Splitit\Model\EventsEndpointsModel|null $events_endpoints events_endpoints
     *
     * @return self
     */
    public function setEventsEndpoints($events_endpoints)
    {

        if (is_null($events_endpoints)) {
            throw new \InvalidArgumentException('non-nullable events_endpoints cannot be null');
        }

        $this->container['events_endpoints'] = $events_endpoints;

        return $this;
    }

    /**
     * Gets processing_data
     *
     * @return \Splitit\Model\ProcessingData|null
     */
    public function getProcessingData()
    {
        return $this->container['processing_data'];
    }

    /**
     * Sets processing_data
     *
     * @param \Splitit\Model\ProcessingData|null $processing_data processing_data
     *
     * @return self
     */
    public function setProcessingData($processing_data)
    {

        if (is_null($processing_data)) {
            throw new \InvalidArgumentException('non-nullable processing_data cannot be null');
        }

        $this->container['processing_data'] = $processing_data;

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


