<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Conversations\V1;

use Twilio\ListResource;
use Twilio\Values;
use Twilio\Version;

class CompletedList extends ListResource {
    /**
     * Construct the CompletedList
     * 
     * @param Version $version Version that contains the resource
     * @return CompletedList 
     */
    public function __construct(Version $version) {
        parent::__construct($version);
        
        // Path Solution
        $this->solution = array();
        $this->uri = '/Conversations/Completed';
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Conversations.V1.CompletedList]';
    }
}