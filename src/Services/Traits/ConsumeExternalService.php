<?php 
namespace MatheusSodre\MicroservicesHttp\Services\Traits;
use Illuminate\Support\Facades\Http;

trait ConsumeExternalService
{
    public function request(
        string $method,
        string $endPoint,
        array  $formParams = []
    ){
      $header = ['Accept' => 'aplication/json',
                 'Authorization' => $this->token];  
      return Http::withHeaders()
                  ->$method($this->url . $endPoint,$formParams);
    }
}
?>