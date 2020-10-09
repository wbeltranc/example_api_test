<?php /** @noinspection ALL */

namespace BeltranC\Controller;

use BeltranC\Models\CallRestClient;
use BeltranC\Models\CallSoap;

class Service
{
    const TV_SHOWS = 'http://api.tvmaze.com/shows';
    const APPLE = 'https://itunes.apple.com/search';
    const PERSON = 'http://www.crcind.com/csp/samples/SOAP.Demo.CLS?WSDL';

    private $endPoint;

    public function __construct(
        $endPoint
    ){
        $this->endPoint = $endPoint;
    }

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

    public function getTracks()
    {
        $request = json_decode(file_get_contents('php://input'), TRUE);
        $rest = new CallRestClient();
        $movies = $rest->getClient(self::APPLE. '?term=' . str_replace(' ', '+', $request['terms']) . '&media=music');
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = $movies;
        return $response;
    }

    public function getMovies()
    {
        $request = json_decode(file_get_contents('php://input'), TRUE);
        $rest = new CallRestClient();
        $movies = $rest->getClient(self::APPLE. '?term=' . str_replace(' ', '+', $request['terms']) . '&media=movie');
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = $movies;
        return $response;
    }

    public function getTvShows($id)
    {
        $rest = new CallRestClient();
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = $rest->getClient(self::TV_SHOWS. '/' . $id);
        return $response;
    }

    public function getAllTvShows()
    {
        $rest = new CallRestClient();
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = $rest->getClient(self::TV_SHOWS);
        return $response;
    }

    public function getPerson($id)
    {
        $soap = new CallSoap();
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode($soap->call(self::PERSON, $id));
        return $response;
    }

    private function notFoundResponse()
    {
        $response['status_code_header'] = 'HTTP/1.1 404 Not Found';
        $response['body'] = json_encode(['error' => 'Invalid url']);
        return $response;
    }
}