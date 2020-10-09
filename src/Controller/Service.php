<?php /** @noinspection ALL */
/**
 * @author          Will Beltran <wbeltran@beltranc.com>
 * @copyright       Copyright (c) 2020 BeltranC (http://beltranc.com)
 * @license         http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace BeltranC\Controller;

use BeltranC\Models\CallRestClient;
use BeltranC\Models\CallSoap;

/**
 * Class Service
 * @package BeltranC\Controller
 */
class Service
{
    /**
     * Endpoint by TV Maze
     */
    const TV_SHOWS = 'http://api.tvmaze.com/shows';
    /**
     * Endpoint by Apple
     */
    const APPLE = 'https://itunes.apple.com/search';
    /**
     * Endpoint
     */
    const PERSON = 'http://www.crcind.com/csp/samples/SOAP.Demo.CLS?WSDL';

    /**
     * @var string
     */
    private $endPoint;

    /**
     * Service constructor.
     * @param $endPoint
     */
    public function __construct(
        $endPoint
    ){
        $this->endPoint = $endPoint;
    }

    /**
     * @param null $params
     */
    public function processRequest($params=null)
    {
        switch ($this->endPoint) {
            case 'tracks':
                $response = $this->getTracks();
                break;
            case 'movies':
                $response = $this->getMovies();
                break;
            case 'tvshows':
                if ($params){
                    $response = $this->getTvShows($params);
                } else {
                    $response = $this->getAllTvShows();
                }
                break;
            case 'person':
                $response = $this->getPerson($params);
                break;
            default:
                $response = $this->notFoundResponse();
                break;
        }
        header($response['status_code_header']);
        if ($response['body']) {
            echo $response['body'];
        }
    }

    /**
     * @return mixed
     */
    public function getTracks()
    {
        $request = json_decode(file_get_contents('php://input'), TRUE);
        $rest = new CallRestClient();
        $movies = $rest->getClient(self::APPLE. '?term=' . str_replace(' ', '+', $request['terms']) . '&media=music');
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = $movies;
        return $response;
    }

    /**
     * @return mixed
     */
    public function getMovies()
    {
        $request = json_decode(file_get_contents('php://input'), TRUE);
        $rest = new CallRestClient();
        $movies = $rest->getClient(self::APPLE. '?term=' . str_replace(' ', '+', $request['terms']) . '&media=movie');
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = $movies;
        return $response;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getTvShows($id)
    {
        $rest = new CallRestClient();
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = $rest->getClient(self::TV_SHOWS. '/' . $id);
        return $response;
    }

    /**
     * @return mixed
     */
    public function getAllTvShows()
    {
        $rest = new CallRestClient();
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = $rest->getClient(self::TV_SHOWS);
        return $response;
    }

    /**
     * @param $id
     * @return mixed
     * @throws \SoapFault
     */
    public function getPerson($id)
    {
        $soap = new CallSoap();
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode($soap->call(self::PERSON, $id));
        return $response;
    }

    /**
     * @return mixed
     */
    private function notFoundResponse()
    {
        $response['status_code_header'] = 'HTTP/1.1 404 Not Found';
        $response['body'] = json_encode(['error' => 'Invalid url']);
        return $response;
    }
}