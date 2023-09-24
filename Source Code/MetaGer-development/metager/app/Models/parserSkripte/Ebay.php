<?php

namespace app\Models\parserSkripte;

use App\Models\Searchengine;
use App\Models\SearchengineConfiguration;
use Log;

class Ebay extends Searchengine
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
            $content = \simplexml_load_string($result);
            if (!$content) {
                return;
            }

            $results = $content->{"searchResult"};
            $count = 0;
            foreach ($results->{"item"} as $result) {
                $title = $result->{"title"}->__toString();
                $link = $result->{"viewItemURL"}->__toString();
                $anzeigeLink = $link;
                $time = $result->{"listingInfo"}->{"endTime"}->__toString();
                $time = date(DATE_RFC2822, strtotime($time));
                $price = intval($result->{"sellingStatus"}->{"convertedCurrentPrice"}->__toString()) * 100;
                $descr = "Preis: " . $result->{"sellingStatus"}->{"convertedCurrentPrice"}->__toString() . " €";
                $descr .= ", Versandkosten: " . $result->{"shippingInfo"}->{"shippingServiceCost"}->__toString() . " €";
                if (isset($result->{"listingInfo"}->{"listingType"})) {
                    $descr .= ", Auktionsart: " . $result->{"listingInfo"}->{"listingType"}->__toString();
                }

                $descr .= ", Auktionsende: " . $time;
                if (isset($result->{"primaryCategory"}->{"categoryName"})) {
                    $descr .= ", Kategorie: " . $result->{"primaryCategory"}->{"categoryName"}->__toString();
                }

                $image = $result->{"galleryURL"}->__toString();
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
                    [
                        'partnershop' => false,
                        'price' => $price,
                        'image' => $image
                    ]
                );
                $count++;
            }
        } catch (\Exception $e) {
            Log::error("A problem occurred parsing results from $this->name:");
            Log::error($e->getMessage());
            return;
        }
    }
}