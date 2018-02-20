<?php

namespace Amiriun\Pushe\Actions;

use Amiriun\Pushe\Pushe;
use GuzzleHttp\RequestOptions;

class RequestToPushe extends AbstractAction implements ActionInterface
{
    public function send(Pushe $manager)
    {
        return $this->request(
            'POST',
            '',
            [
                RequestOptions::JSON => $this->getRequestBody($manager)
            ]
        );
    }

    /**
     * @param Pushe $manager
     *
     * @return array
     */
    public function getRequestBody($manager)
    {
        $data = [
            'applications' => $manager->getAppPackageNames(),
            "notification" => [
                "title"      => $manager->getTitle(),
                'content'    => $manager->getContent(),
                'icon'       => $manager->getIcon(),
                'sound_url'  => $manager->getSound(),
                'visibility' => $manager->getVisibility(),
                'show_app'   => $manager->getVisibility(),
            ]
        ];

        if (!empty($manager->getFilter())) {
            $data["filter"] = $manager->getFilter()->prepareData();
        }

        return $data;
    }
}