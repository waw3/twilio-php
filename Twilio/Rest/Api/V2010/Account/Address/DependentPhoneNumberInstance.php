<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Address;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Version;

/**
 * @property string friendlyName
 * @property string phoneNumber
 * @property string lata
 * @property string rateCenter
 * @property string latitude
 * @property string longitude
 * @property string region
 * @property string postalCode
 * @property string isoCountry
 * @property string addressRequirements
 * @property string capabilities
 */
class DependentPhoneNumberInstance extends InstanceResource {
    /**
     * Initialize the DependentPhoneNumberInstance
     * 
     * @return DependentPhoneNumberInstance 
     */
    public function __construct(Version $version, array $payload, $accountSid, $addressSid) {
        parent::__construct($version);
        
        // Marshaled Properties
        $this->properties = array(
            'friendlyName' => $payload['friendly_name'],
            'phoneNumber' => $payload['phone_number'],
            'lata' => $payload['lata'],
            'rateCenter' => $payload['rate_center'],
            'latitude' => $payload['latitude'],
            'longitude' => $payload['longitude'],
            'region' => $payload['region'],
            'postalCode' => $payload['postal_code'],
            'isoCountry' => $payload['iso_country'],
            'addressRequirements' => $payload['address_requirements'],
            'capabilities' => $payload['capabilities'],
        );
        
        $this->solution = array(
            'accountSid' => $accountSid,
            'addressSid' => $addressSid,
        );
    }

    /**
     * @return string The friendly_name
     */
    protected function getFriendlyName() {
        return $this->properties['friendlyName'];
    }

    /**
     * @return string The phone_number
     */
    protected function getPhoneNumber() {
        return $this->properties['phoneNumber'];
    }

    /**
     * @return string The lata
     */
    protected function getLata() {
        return $this->properties['lata'];
    }

    /**
     * @return string The rate_center
     */
    protected function getRateCenter() {
        return $this->properties['rateCenter'];
    }

    /**
     * @return string The latitude
     */
    protected function getLatitude() {
        return $this->properties['latitude'];
    }

    /**
     * @return string The longitude
     */
    protected function getLongitude() {
        return $this->properties['longitude'];
    }

    /**
     * @return string The region
     */
    protected function getRegion() {
        return $this->properties['region'];
    }

    /**
     * @return string The postal_code
     */
    protected function getPostalCode() {
        return $this->properties['postalCode'];
    }

    /**
     * @return string The iso_country
     */
    protected function getIsoCountry() {
        return $this->properties['isoCountry'];
    }

    /**
     * @return string The address_requirements
     */
    protected function getAddressRequirements() {
        return $this->properties['addressRequirements'];
    }

    /**
     * @return string The capabilities
     */
    protected function getCapabilities() {
        return $this->properties['capabilities'];
    }

    /**
     * Magic getter to access properties
     * 
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get($name) {
        if (array_key_exists($name, $this->properties)) {
            $method = 'get' . ucfirst($name);
            return $this->$method();
        }
        
        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Api.V2010.DependentPhoneNumberInstance]';
    }
}