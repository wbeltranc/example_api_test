<?php
/**
 * @author          Will Beltran <wbeltran@beltranc.com>
 * @copyright       Copyright (c) 2020 BeltranC (http://beltranc.com)
 * @license         http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace BeltranC\Models;

/**
 * Class CallSoap
 * @package BeltranC\Models
 */
class CallSoap
{
    /**
     * @param $url
     * @param $id
     * @return mixed
     * @throws \SoapFault
     */
    public function call($url, $id)
    {
        $client = new \SoapClient($url);

        $resp = $client->FindPerson(['id' => $id]);

        return $resp->FindPersonResult;
    }
}