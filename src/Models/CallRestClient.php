<?php
/**
 * @author          Will Beltran <wbeltran@beltranc.com>
 * @copyright       Copyright (c) 2020 BeltranC (http://beltranc.com)
 * @license         http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace BeltranC\Models;


/**
 * Class CallRestClient
 * @package BeltranC\Models
 */
class CallRestClient
{
    /**
     * @param $url
     * @return array|bool|string
     */
    public function getClient($url)
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "content-type: application/json"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return [
                "CURL_Error" => $err
            ];
        } else {
            return $response;
        }
    }
}