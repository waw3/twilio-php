<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api;

use Twilio\Domain;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Api\V2010\AccountContext;
use Twilio\Rest\Api\V2010\AccountList;
use Twilio\Version;

/**
 * @property AccountList accounts
 * @property AccountContext account
 * @property AddressList addresses
 * @property ApplicationList applications
 * @property AuthorizedConnectAppList authorizedConnectApps
 * @property AvailablePhoneNumberCountryList availablePhoneNumbers
 * @property CallList calls
 * @property ConferenceList conferences
 * @property ConnectAppList connectApps
 * @property IncomingPhoneNumberList incomingPhoneNumbers
 * @property MessageList messages
 * @property NotificationList notifications
 * @property OutgoingCallerIdList outgoingCallerIds
 * @property QueueList queues
 * @property RecordingList recordings
 * @property SandboxList sandbox
 * @property SipList sip
 * @property SmsList sms
 * @property TokenList tokens
 * @property TranscriptionList transcriptions
 * @property UsageList usage
 * @property ValidationRequestList validationRequests
 */
class V2010 extends Version {
    protected $_accounts = null;
    protected $_account = null;

    /**
     * Construct the V2010 version of Api
     * 
     * @param Domain $domain Domain that contains the version
     * @return V2010 V2010 version of Api
     */
    public function __construct(Domain $domain) {
        parent::__construct($domain);
        $this->version = '2010-04-01';
    }

    /**
     * @return AccountList 
     */
    protected function getAccounts() {
        if (!$this->_accounts) {
            $this->_accounts = new AccountList($this);
        }
        return $this->_accounts;
    }

    /**
     * @return AccountContext Account provided as the authenticating account
     */
    protected function getAccount() {
        if (!$this->_account) {
            $this->_account = new AccountContext(
                $this,
                $this->domain->getClient()->getAccountSid()
            );
        }
        return $this->_account;
    }

    /**
     * Setter to override the primary account
     * 
     * @param AccountContext|AccountInstance $account account to use as the primary
     *                                                account
     */
    public function setAccount($account) {
        $this->_account = $account;
    }

    /**
     * @return AddressList 
     */
    protected function getAddresses() {
        return $this->account->addresses;
    }

    /**
     * @return ApplicationList 
     */
    protected function getApplications() {
        return $this->account->applications;
    }

    /**
     * @return AuthorizedConnectAppList 
     */
    protected function getAuthorizedConnectApps() {
        return $this->account->authorizedConnectApps;
    }

    /**
     * @return AvailablePhoneNumberCountryList 
     */
    protected function getAvailablePhoneNumbers() {
        return $this->account->availablePhoneNumbers;
    }

    /**
     * @return CallList 
     */
    protected function getCalls() {
        return $this->account->calls;
    }

    /**
     * @return ConferenceList 
     */
    protected function getConferences() {
        return $this->account->conferences;
    }

    /**
     * @return ConnectAppList 
     */
    protected function getConnectApps() {
        return $this->account->connectApps;
    }

    /**
     * @return IncomingPhoneNumberList 
     */
    protected function getIncomingPhoneNumbers() {
        return $this->account->incomingPhoneNumbers;
    }

    /**
     * @return MessageList 
     */
    protected function getMessages() {
        return $this->account->messages;
    }

    /**
     * @return NotificationList 
     */
    protected function getNotifications() {
        return $this->account->notifications;
    }

    /**
     * @return OutgoingCallerIdList 
     */
    protected function getOutgoingCallerIds() {
        return $this->account->outgoingCallerIds;
    }

    /**
     * @return QueueList 
     */
    protected function getQueues() {
        return $this->account->queues;
    }

    /**
     * @return RecordingList 
     */
    protected function getRecordings() {
        return $this->account->recordings;
    }

    /**
     * @return SandboxList 
     */
    protected function getSandbox() {
        return $this->account->sandbox;
    }

    /**
     * @return SipList 
     */
    protected function getSip() {
        return $this->account->sip;
    }

    /**
     * @return SmsList 
     */
    protected function getSms() {
        return $this->account->sms;
    }

    /**
     * @return TokenList 
     */
    protected function getTokens() {
        return $this->account->tokens;
    }

    /**
     * @return TranscriptionList 
     */
    protected function getTranscriptions() {
        return $this->account->transcriptions;
    }

    /**
     * @return UsageList 
     */
    protected function getUsage() {
        return $this->account->usage;
    }

    /**
     * @return ValidationRequestList 
     */
    protected function getValidationRequests() {
        return $this->account->validationRequests;
    }

    /**
     * Magic getter to lazy load root resources
     * 
     * @param string $name Resource to return
     * @return ListResource The requested resource
     * @throws TwilioException For unknown resource
     */
    public function __get($name) {
        if (property_exists($this, '_' . $name)) {
            $method = 'get' . ucfirst($name);
            return $this->$method();
        }
        
        throw new TwilioException('Unknown resource ' . $name);
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Api.V2010]';
    }
}