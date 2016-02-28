<?php

namespace NightStandardEdition\Controller;


use Night\Component\Controller\NightController;
use Night\Component\Repository\PDORepository;
use Night\Component\Request\Request;
use Night\Component\Response\Response;

class RepositoryController extends NightController
{
    public function listCitiesFromCountryCodeAction(Request $request)
    {
        $countryCode   = $request->route->getParam('countryCode');
        $pdoRepository = $this->getServicesContainer()->getService('pdo-repository');
        $statement     = "SELECT Name, District, Population FROM City WHERE City.CountryCode = :countryCode ORDER BY City.Name;";
        $pdoRepository->setStatement($statement);
        $pdoRepository->setParam(':countryCode', $countryCode, PDORepository::PARAM_STR);
        $pdoRepository->executeStatement();
        $cities = $pdoRepository->getResults();

        $twigTemplating = $this->getServicesContainer()->getService('twig-templating');
        $twigTemplating->setTemplate('listCities.twig');
        $twigTemplating->setVariable('countryCode', $countryCode);
        $twigTemplating->setVariable('citiesList', $cities);
        $html = $twigTemplating->render();

        $response = new Response();
        $response->setResponseStatus(200, 'OK');
        $response->setContentType('text/html; charset=utf-8');
        $response->setContent($html);
        return $response;
    }
}

