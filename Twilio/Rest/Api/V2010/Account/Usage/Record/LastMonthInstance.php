<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Usage\Record;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Version;

/**
 * @property string accountSid
 * @property string apiVersion
 * @property last_month.Category category
 * @property string count
 * @property string countUnit
 * @property string description
 * @property string endDate
 * @property string price
 * @property string priceUnit
 * @property string startDate
 * @property string subresourceUris
 * @property string uri
 * @property string usage
 * @property string usageUnit
 */
class LastMonthInstance extends InstanceResource {
    /**
     * Initialize the LastMonthInstance
     * 
     * @return LastMonthInstance 
     */
    public function __construct(Version $version, array $payload, $accountSid) {
        parent::__construct($version);
        
        // Marshaled Properties
        $this->properties = array(
            'accountSid' => $payload['account_sid'],
            'apiVersion' => $payload['api_version'],
            'category' => $payload['category'],
            'count' => $payload['count'],
            'countUnit' => $payload['count_unit'],
            'description' => $payload['description'],
            'endDate' => $payload['end_date'],
            'price' => $payload['price'],
            'priceUnit' => $payload['price_unit'],
            'startDate' => $payload['start_date'],
            'subresourceUris' => $payload['subresource_uris'],
            'uri' => $payload['uri'],
            'usage' => $payload['usage'],
            'usageUnit' => $payload['usage_unit'],
        );
        
        $this->solution = array(
            'accountSid' => $accountSid,
        );
    }

    /**
     * @return string The account_sid
     */
    protected function getAccountSid() {
        return $this->properties['accountSid'];
    }

    /**
     * @return string The api_version
     */
    protected function getApiVersion() {
        return $this->properties['apiVersion'];
    }

    /**
     * @return last_month.Category The category
     */
    protected function getCategory() {
        return $this->properties['category'];
    }

    /**
     * @return string The count
     */
    protected function getCount() {
        return $this->properties['count'];
    }

    /**
     * @return string The count_unit
     */
    protected function getCountUnit() {
        return $this->properties['countUnit'];
    }

    /**
     * @return string The description
     */
    protected function getDescription() {
        return $this->properties['description'];
    }

    /**
     * @return string The end_date
     */
    protected function getEndDate() {
        return $this->properties['endDate'];
    }

    /**
     * @return string The price
     */
    protected function getPrice() {
        return $this->properties['price'];
    }

    /**
     * @return string The price_unit
     */
    protected function getPriceUnit() {
        return $this->properties['priceUnit'];
    }

    /**
     * @return string The start_date
     */
    protected function getStartDate() {
        return $this->properties['startDate'];
    }

    /**
     * @return string The subresource_uris
     */
    protected function getSubresourceUris() {
        return $this->properties['subresourceUris'];
    }

    /**
     * @return string The uri
     */
    protected function getUri() {
        return $this->properties['uri'];
    }

    /**
     * @return string The usage
     */
    protected function getUsage() {
        return $this->properties['usage'];
    }

    /**
     * @return string The usage_unit
     */
    protected function getUsageUnit() {
        return $this->properties['usageUnit'];
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
        return '[Twilio.Api.V2010.LastMonthInstance]';
    }
}