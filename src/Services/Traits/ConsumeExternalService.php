<?php 
namespace MatheusSodre\MicroservicesHttp\Services\Traits;
use Illuminate\Support\Facades\Http;

trait ConsumeExternalService
{
    public function request(
        string $method,
        string $endPoint,
        array  $formParams = [],
        array  $headers = []
    ){
      $header = ['Accept' => 'aplication/json',
                 'Authorization' => $this->token];  
      return Http::withHeaders()
                  ->$method($this->url . $endPoint,$formParams);
    }
}
?>