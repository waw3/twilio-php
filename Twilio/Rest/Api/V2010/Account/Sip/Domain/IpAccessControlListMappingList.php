<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Sip\Domain;

use Twilio\ListResource;
use Twilio\Values;
use Twilio\Version;

class IpAccessControlListMappingList extends ListResource {
    /**
     * Construct the IpAccessControlListMappingList
     * 
     * @param Version $version Version that contains the resource
     * @param string $accountSid The account_sid
     * @param string $domainSid A string that uniquely identifies the SIP Domain
     * @return IpAccessControlListMappingList 
     */
    public function __construct(Version $version, $accountSid, $domainSid) {
        parent::__construct($version);
        
        // Path Solution
        $this->solution = array(
            'accountSid' => $accountSid,
            'domainSid' => $domainSid,
        );
        $this->uri = '/Accounts/' . $accountSid . '/SIP/Domains/' . $domainSid . '/IpAccessControlListMappings.json';
    }

    /**
     * Create a new IpAccessControlListMappingInstance
     * 
     * @param string $ipAccessControlListSid The ip_access_control_list_sid
     * @return IpAccessControlListMappingInstance Newly created
     *                                            IpAccessControlListMappingInstance
     */
    public function create($ipAccessControlListSid) {
        $data = Values::of(array(
            'IpAccessControlListSid' => $ipAccessControlListSid,
        ));
        
        $payload = $this->version->create(
            'POST',
            $this->uri,
            array(),
            $data
        );
        
        return new IpAccessControlListMappingInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['domainSid']
        );
    }

    /**
     * Constructs a IpAccessControlListMappingContext
     * 
     * @param string $sid The sid
     * @return IpAccessControlListMappingContext 
     */
    public function getContext($sid) {
        return new IpAccessControlListMappingContext(
            $this->version,
            $this->solution['accountSid'],
            $this->solution['domainSid'],
            $sid
        );
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Api.V2010.IpAccessControlListMappingList]';
    }
}