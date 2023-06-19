<?php 
namespace MatheusSodre\MicroservicesHttp\Services\Traits;
use Illuminate\Support\Facades\Http;

trait ConsumeExternalService
{
    public function headers(array $headers = [])
    {
        array_push($headers,[
            'Accept' => 'aplication/json',
            'Authorization' => $this->token,
        ]);
        return Http::withHeaders($headers);
    }
    public function request(
        string $method,
        string $endPoint,
        array  $formParams = [],
        array  $headers = []
    ){
      return $this->headers($headers)
                  ->$method($this->url . $endPoint,$formParams);
    }
}



?>