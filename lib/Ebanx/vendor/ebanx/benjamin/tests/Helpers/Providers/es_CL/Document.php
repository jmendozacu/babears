<?php
namespace Tests\Helpers\Providers\es_CL;

use Tests\Helpers\Providers\BaseProvider;

class Document extends BaseProvider
{
    public function documentNumber()
    {
        return (string)$this->faker->randomNumber(9, true);
    }
}
