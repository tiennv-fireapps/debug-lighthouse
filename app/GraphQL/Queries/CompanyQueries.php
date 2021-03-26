<?php


namespace App\GraphQL\Queries;

use App\Service\CompanyService;

class CompanyQueries
{
    private  $company_service;

    public function __construct()
    {
        $this->company_service = app(CompanyService::class);
    }

    public function getCompanyPersonalInfo($_, $args){

        return $this->company_service->getCompany($args['id']);
    }



}
