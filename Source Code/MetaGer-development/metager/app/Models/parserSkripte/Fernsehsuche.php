<?php

namespace app\Models\parserSkripte;

use App\Models\Searchengine;
use App\Models\SearchengineConfiguration;
use Log;

class Fernsehsuche extends Searchengine
{
    public $results = [];

    public function __construct($name, SearchengineConfiguration $configuration)
    {
        parent::__construct($name, $configuration);
    }

    public function loadResults($result)
    {
        $result = preg_replace("/\r\n/si", "", $result);
        try {
            $content = json_decode($result);
            if (!$content) {
                return;
            }

            $results = $content->response->docs;
            foreach ($results as $result) {
                try {
                    $title = $result->show . " : " . $result->title;
                    $link = urldecode($result->url);
                    $anzeigeLink = $link;
                    $descr = $result->description;
                    $image = "http://api-resources.fernsehsuche.de" . $result->thumbnail;
                    $this->counter++;
                    $this->results[] = new \App\Models\Result(
                        $this->configuration->engineBoost,
                        $title,
                        $link,
                        $anzeigeLink,
                        $descr,
                        $this->configuration->infos->displayName,
                        $this->configuration->infos->homepage,
                        $this->counter,
                        ['image' => $image]
                    );
                } catch (\ErrorException $e) {
                }
            }
        } catch (\Exception $e) {
            Log::error("A problem occurred parsing results from $this->name:");
            Log::error($e->getMessage());
            return;
        }
    }
}