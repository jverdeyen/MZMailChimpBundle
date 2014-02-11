<?php

/*
 * This file is part of the MZ\MailChimpBundle
 *
 * (c) Joeri Verdeyen <info@jverdeyen.be>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace MZ\MailChimpBundle\Services\Methods;

use MZ\MailChimpBundle\Services\HttpClient;

/**
 * Mailchimp Lists method
 *
 * @author Joeri Verdeyen <info@jverdeyen.be>
 * @link   http://apidocs.mailchimp.com/api/1.3/#listrelated
 */
class MCLists extends HttpClient
{
    /**
    * Get info about a member
    *
    * @return object
    */
    public function getLists()
    {
        $payload = array();
        $apiCall = 'lists';
        $data = $this->makeRequest($apiCall, $payload);
        return json_decode($data);
    }

}
