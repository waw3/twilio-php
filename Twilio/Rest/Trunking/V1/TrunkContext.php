<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Trunking\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Rest\Trunking\V1\Trunk\CredentialListList;
use Twilio\Rest\Trunking\V1\Trunk\IpAccessControlListList;
use Twilio\Rest\Trunking\V1\Trunk\OriginationUrlList;
use Twilio\Rest\Trunking\V1\Trunk\PhoneNumberList;
use Twilio\Values;
use Twilio\Version;

/**
 * @property OriginationUrlList originationUrls
 * @property CredentialListList credentialsLists
 * @property IpAccessControlListList ipAccessControlLists
 * @property PhoneNumberList phoneNumbers
 */
class TrunkContext extends InstanceContext {
    protected $_originationUrls = null;
    protected $_credentialsLists = null;
    protected $_ipAccessControlLists = null;
    protected $_phoneNumbers = null;

    /**
     * Initialize the TrunkContext
     * 
     * @param Version $version Version that contains the resource
     * @param string $sid The sid
     * @return TrunkContext 
     */
    public function __construct(Version $version, $sid) {
        parent::__construct($version);
        
        // Path Solution
        $this->solution = array(
            'sid' => $sid,
        );
        $this->uri = '/Trunks/' . $sid . '';
    }

    /**
     * Fetch a TrunkInstance
     * 
     * @return TrunkInstance Fetched TrunkInstance
     */
    public function fetch() {
        $params = Values::of(array());
        
        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );
        
        return new TrunkInstance(
            $this->version,
            $payload,
            $this->solution['sid']
        );
    }

    /**
     * Deletes the TrunkInstance
     * 
     * @return boolean True if delete succeeds, false otherwise
     */
    public function delete() {
        return $this->version->delete('delete', $this->uri);
    }

    /**
     * Update the TrunkInstance
     * 
     * @return TrunkInstance Updated TrunkInstance
     */
    public function update($options) {
        $data = Values::of(array(
            'FriendlyName' => $options['friendlyName'],
            'DomainName' => $options['domainName'],
            'DisasterRecoveryUrl' => $options['disasterRecoveryUrl'],
            'DisasterRecoveryMethod' => $options['disasterRecoveryMethod'],
            'Recording' => $options['recording'],
            'Secure' => $options['secure'],
        ));
        
        $payload = $this->version->update(
            'POST',
            $this->uri,
            array(),
            $data
        );
        
        return new TrunkInstance(
            $this->version,
            $payload,
            $this->solution['sid']
        );
    }

    /**
     * Access the originationUrls
     * 
     * @return OriginationUrlList 
     */
    protected function getOriginationUrls() {
        if (!$this->originationUrls) {
            $this->originationUrls = new OriginationUrlList(
                $this->version,
                $this->solution['sid']
            );
        }
        
        return $this->originationUrls;
    }

    /**
     * Access the credentialsLists
     * 
     * @return CredentialListList 
     */
    protected function getCredentialsLists() {
        if (!$this->credentialsLists) {
            $this->credentialsLists = new CredentialListList(
                $this->version,
                $this->solution['sid']
            );
        }
        
        return $this->credentialsLists;
    }

    /**
     * Access the ipAccessControlLists
     * 
     * @return IpAccessControlListList 
     */
    protected function getIpAccessControlLists() {
        if (!$this->ipAccessControlLists) {
            $this->ipAccessControlLists = new IpAccessControlListList(
                $this->version,
                $this->solution['sid']
            );
        }
        
        return $this->ipAccessControlLists;
    }

    /**
     * Access the phoneNumbers
     * 
     * @return PhoneNumberList 
     */
    protected function getPhoneNumbers() {
        if (!$this->phoneNumbers) {
            $this->phoneNumbers = new PhoneNumberList(
                $this->version,
                $this->solution['sid']
            );
        }
        
        return $this->phoneNumbers;
    }

    /**
     * Magic getter to lazy load subresources
     * 
     * @param string $name Subresource to return
     * @return ListResource The requested subresource
     * @throws TwilioException For unknown subresources
     */
    public function __get($name) {
        if (property_exists($this, '_' . $name)) {
            $method = 'get' . ucfirst($name);
            return $this->$method();
        }
        
        throw new TwilioException('Unknown subresource ' . $name);
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Trunking.V1.TrunkContext ' . implode(' ', $context) . ']';
    }
}