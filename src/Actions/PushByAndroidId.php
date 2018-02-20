<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 2/20/18
 * Time: 2:24 PM
 */

namespace Amiriun\Pushe\Actions;


use Amiriun\Pushe\Pushe;

class PushByAndroidId extends AbstractAction implements ActionInterface
{
    public function send(Pushe $manager)
    {
        $this->request(
            'POST',
            '',
            [
                'body' => $this->getRequestBody($manager)
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
        // todo
        $data = [
            'applications' => $manager->getAppPackageNames(),
            "filter" => [
                "device_id" => $manager->getAndroidIds()
            ],
            "notification" => [
                "title"   => $manager->getTitle(),
                'content' => $manager->getContent(),
                'icon' => $manager->getIcon(),
                'sound_url' => $manager->getSound(),
                'visibility' => $manager->getVisibility(),
            ]
        ];

        if(empty($manager->getAndroidIds())){
            unset($data['filter']['device_id']);
        }

        return $data;
    }
}