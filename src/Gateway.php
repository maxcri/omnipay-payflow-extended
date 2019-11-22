<?php

namespace Omnipay\PayflowExtended;

use Omnipay\Payflow\ProGateway;


/**
* Payflow Pro Extended class
*
* @author Marshall Miller
* @link https://www.x.com/sites/default/files/payflowgateway_guide.pdf
*/
class Gateway extends ProGateway {


    /**
     * @return string
     */
    public function getName() {

        return 'PayflowExtended';
    }


    /**
     * @param array $parameters
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function addRecurringProfile(Array $parameters = array()) {

        return $this->createRequest('\Omnipay\PayflowExtended\Message\RecurringProfileAddRequest', $parameters);
    }


    /**
     * @param array $parameters
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function recurringProfileInquiry(Array $parameters = array()) {

        return $this->createRequest('\Omnipay\PayflowExtended\Message\RecurringProfileInquiryRequest', $parameters);
    }


    /**
     * @param array $parameters
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function deactivateRecurringProfile(Array $parameters = array()) {

        return $this->createRequest('\Omnipay\PayflowExtended\Message\RecurringProfileDeactivateRequest', $parameters);
    }


    /**
     * @param array $parameters
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function updateRecurringProfile(Array $parameters = array()) {

        return $this->createRequest('\Omnipay\PayflowExtended\Message\RecurringProfileUpdateRequest', $parameters);
    }

}