<?php

namespace SummitCMS\Http\Controllers\Api;

use Illuminate\Http\Request;
use Response;
use SummitCMS\Http\Requests;
use SummitCMS\Http\Controllers\Controller;

class ApiController extends Controller
{

    /**
     * The status code to be returned on a request. Default status code is 200 OK
     * @var integer
     */
    protected $statusCode = 200;

    /**
     * Getter function to return the status code variable
     * @return integer Status code for the request
     */
    public function getStatusCode() {
        return $this->statusCode;
    }

    /**
     * Setter function to set and return the status code variable
     * @param integer $statusCode Status code for the request
     */
    public function setStatusCode($statusCode) {
        $this->statusCode = $statusCode;
        return $this;
    }

    public function respond($data, $headers = []){
        return Response::json($data, $this->getStatusCode(), $headers);
    }

    public function respondWithError($message) {
        return $this->respond([
                error => [
                    'message' => $message,
                    'status_code' => $this->getStatusCode()
                ],
            ]);
    }

    public function respondCreated($message = "Object successfully created") {
        return $this->setStatusCode(201)->respond($message);
    }

    public function respondNotFound($message = "Object not found") {
        return $this->setStatusCode(404)->respondWithError($message);
    }

    public function respondNotAuth($message = "Not authorized.") {
        return $this->setStatusCode(403)->respondWithError($message);
    }
}
