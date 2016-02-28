<?php

namespace NightStandardEdition\Controller;


use Night\Component\Controller\NightController;
use Night\Component\Request\Request;
use Night\Component\Response\Response;

class TranslationsController extends NightController
{
    public function translateAction(Request $request)
    {
        $lang       = $request->route->getParam('lang');
        $validLangs = ['es', 'fr'];
        $response   = new Response();
        $response->setContentType('text/html; charset=utf-8');
        $smartyTemplating = $this->getServicesContainer()->getService('smarty-templating');
        $smartyTemplating->setTemplate('translations.tpl');
        $smartyTemplating->setVariable('lang', $lang);

        if (in_array($lang, $validLangs)) {
            $translator = $this->getServicesContainer()->getService('translator');
            $translator->setTranslationsFile("../app/translations/translations_$lang.yml");
            $translations = [
                'Hello World!' => $translator->translate('Hello World!'),
                'Wellcome to the Night Standard Edition application' => $translator->translate('Wellcome to the Night Standard Edition application')
            ];
            $smartyTemplating->setVariable('translations', $translations);
            $html = $smartyTemplating->render();
            $response->setContent($html);
            $response->setResponseStatus(200, 'OK');
            return $response;
        }

        $smartyTemplating->setVariable('validLangs', $validLangs);
        $html = $smartyTemplating->render();
        $response->setContent($html);
        $response->setResponseStatus(404, 'Not Found');
        return $response;
    }
}

