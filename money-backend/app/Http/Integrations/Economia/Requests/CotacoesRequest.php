<?php

namespace App\Http\Integrations\Economia\Requests;

use App\Http\Integrations\Connectors\CotacoesConnector;
use Sammyjo20\Saloon\Constants\Saloon;
use Sammyjo20\Saloon\Http\SaloonRequest;

class CotacoesRequest extends SaloonRequest
{
    /**
     * Define the method that the request will use.
     *
     * @var string|null
     */
    protected ?string $method = Saloon::GET;

    /**
     * The connector.
     *
     * @var string|null
     */
    protected ?string $connector = CotacoesConnector::class;
    
    public function __construct(
        public string $parDeMoedas
    ){}
    /**
     * Define the endpoint for the request.
     *
     * @return string
     */
    public function defineEndpoint(): string
    {
        return '/'. $this->parDeMoedas;
    }
}
