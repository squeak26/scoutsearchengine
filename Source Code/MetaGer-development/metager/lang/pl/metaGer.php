<?php
return [
    'formdata' => [
        'dartEurope' => 'Wskazówka: aktywowałeś Dart-Europe. Dlatego czas reakcji może być dłuższy i wynosi 10 sekund',
        'hostBlacklist' => 'Wyniki dla następujących domen nie będą wyświetlane: \":host\"',
        'hostBlacklistCount' => 'Wyniki dla :count hosts nie będą wyświetlane.',
        'domainBlacklist' => 'Te domeny są ignorowane: \":domain\"',
        'domainBlacklistCount' => 'Wyniki domen :count nie będą wyświetlane.',
        'urlBlacklist' => 'Wyniki zawierające \":url\" nie są wyświetlane.',
        'stopwords' => 'Wykluczono wyniki zawierające następujące słowa: \":stopwords\"',
        'cantLoad' => 'Nie można znaleźć pliku suma',
        'noSearch' => 'Uwaga: nie wpisano wyszukiwanych słów. Wpisz wyszukiwane słowa i spróbuj ponownie',
        'phrase' => 'Wyszukujesz ciąg znaków: :phrase',
    ],
    'results' => [
        'failed' => 'Niestety nie mamy żadnych wyników wyszukiwania.',
        'failedSitesearch' => 'Niestety nie mamy żadnych wyników wyszukiwania. Może to być spowodowane tym, że bieżące wyszukiwanie jest ograniczone do strony ":site". Jeśli chcesz usunąć to ograniczenie, kliknij tutaj: <a href=":altSearch">Nowe wyszukiwanie</a>',
        'name' => 'Wyniki',
    ],
    'settings' => [
        'noneSelected' => 'Uwaga: nie wybrano żadnej wyszukiwarki.',
        'name' => 'Ustawienia',
        'metager-key-hint' => 'Niektóre filtry wymagają klucza <a href=":link" target="_blank">MetaGer</a>.',
    ],
    'engines' => [
        'noParser' => 'Wystąpił błąd: Żądanie \":engine\" nie powiodło się. Zgłoś się do naszego <a href="/pl/kontakt">formularza kontaktowego</a>.',
        'noSpecialSearch' => 'Nie znaleziono wyszukiwarki obsługującej jedną z opcji filtrowania. Obecnie aktywne filtry: ":filter".',
    ],
    'sitesearch' => [
        'failed' => 'Chcesz przeszukać witrynę :site. Niestety wybrane wyszukiwarki tego nie obsługują. Możesz przeprowadzić wyszukiwanie w witrynie <a href=\":searchLink\">tutaj</a> w ramach Web focus',
        'success' => 'Przeprowadzasz wyszukiwanie w witrynie. Wyświetlone zostaną tylko wyniki witryny <a href="http://:site\" target=\"_blank\" rel=\"noopener\">\":site\"</a>.',
    ],
    'feedback' => 'Nie tego szukałeś? Przekaż nam swoją opinię: ',
    'filter' => [
        'noFilter' => 'Dowolny',
        'reset' => 'Zresetuj filtr',
        'sitesearch' => 'Sitesearch',
        'safesearch' => [
            'strict' => 'Ścisły',
            'moderate' => 'Umiarkowany',
            'off' => 'Wył.',
            'name' => 'Bezpieczne wyszukiwanie',
        ],
        'size' => [
            'small' => 'Mały',
            'medium' => 'Średni',
            'large' => 'Duży',
            'xtralarge' => 'Bardzo duży',
            'name' => 'Rozmiar obrazu',
        ],
        'color' => [
            'colorOnly' => 'Tylko kolorowe',
            'monochrome' => 'Czarno-biały',
            'black' => 'Czarny',
            'blue' => 'Niebieski',
            'brown' => 'Brązowy',
            'gray' => 'Szary',
            'green' => 'Zielony',
            'orange' => 'Pomarańczowy',
            'pink' => 'Różowy',
            'purple' => 'Fioletowy',
            'red' => 'Czerwony',
            'teal' => 'Teal',
            'white' => 'Biały',
            'yellow' => 'Żółty',
            'name' => 'Kolor',
            'transparent' => 'Przezroczysty',
            'turquoise' => 'Turkus',
        ],
        'imagetype' => [
            'photo' => 'Zdjęcie',
            'clipart' => 'Grafika',
            'strich' => 'Rysunek liniowy',
            'gif' => 'Animowany GIF',
            'transparent' => 'Przezroczysty',
            'name' => 'Typ',
            'vector' => 'Grafika wektorowa',
        ],
        'imageaspect' => [
            'square' => 'Prostokąt',
            'wide' => 'Szeroki',
            'tall' => 'Portret',
            'name' => 'Układ',
        ],
        'imagecontent' => [
            'face' => 'Bliskie spojrzenie',
            'portrait' => 'Head & Shoulders',
            'name' => 'Ludzie',
        ],
        'imagelicense' => [
            'any' => 'Niewybrane',
            'public' => 'Domena publiczna',
            'share' => 'Udział',
            'sharecommercially' => 'Udział (komercyjnie)',
            'modify' => 'Modyfikacja',
            'modifycommercially' => 'Modyfikacja (komercyjna)',
            'name' => 'Licencja',
        ],
        'freshness' => [
            'day' => 'Ostatnie 24h',
            'week' => 'Ostatni tydzień',
            'month' => 'Ostatni miesiąc',
            'year' => 'W zeszłym roku',
            'custom' => 'Dostosowane',
            'name' => 'Data',
        ],
        'customdatetitle' => 'Wybierz niestandardową datę',
        'market' => [
            'ga' => 'Niemiecki (Austria)',
            'gg' => 'Niemiecki (Niemcy)',
            'gs' => 'Niemiecki (Szwajcaria)',
            'ea' => 'Angielski (Australia)',
            'ec' => 'Angielski (Kanada)',
            'ei' => 'Angielski (Indie)',
            'eir' => 'Angielski (Irlandia)',
            'ein' => 'Angielski (Indonezja)',
            'em' => 'Angielski (Malezja)',
            'enz' => 'Angielski (Nowa Zelandia)',
            'ep' => 'Angielski (Filipiny)',
            'esa' => 'Angielski (Południowa Afryka)',
            'euk' => 'Angielski (UK)',
            'eus' => 'Angielski (USA)',
            'sa' => 'Hiszpański (Argentyna)',
            'sc' => 'Hiszpański (Chile)',
            'sm' => 'Hiszpański (Meksyk)',
            'ss' => 'Hiszpański (Hiszpania)',
            'sus' => 'Hiszpański (USA)',
            'fb' => 'Francuski (Belgien)',
            'fc' => 'Francuski (Kanada)',
            'ff' => 'Francuski (Frankreich)',
            'fs' => 'Francuski (Schweiz)',
            'ii' => 'Włoski (Italien)',
            'db' => 'Niderlandzki (Belgia)',
            'dn' => 'Niderlandzki (Holandia)',
            'pp' => 'Polski (Polska)',
            'pb' => 'Portugalski (Brazylia)',
            'dd' => 'Duński (Dania)',
            'fif' => 'Fiński (Finlandia)',
            'nn' => 'Norweski (Norwegia)',
            'scs' => 'Szwedzki (Szwecja)',
            'rr' => 'Rosyjski (Rosja)',
            'jj' => 'Japoński (Japonia)',
            'kk' => 'Koreański (Korea)',
            'tt' => 'Turecki (Turcja)',
            'chk' => 'Chiński (Hongkong SAR)',
            'cc' => 'Chiński (Chiny)',
            'ct' => 'Chiński (Tajwan)',
            'name' => 'Język',
        ],
        'sort' => [
            'priceascending' => 'Cena (rosnąco)',
            'pricedescending' => 'Cena (malejąco)',
            'totalpriceascending' => 'Cena całkowita (rosnąco)',
            'totalpricedescending' => 'Cena całkowita (malejąco)',
            'name' => 'Sortuj według',
        ],
        'rabate' => 'Min. Rabate',
        'count' => 'Liczyć',
        'skip' => 'Pomiń',
        'min' => 'Minimalna długość snu (w s)',
        'max' => 'Maksymalny czas uśpienia (w s)',
    ],
    'ads' => [
        'own' => [
            'title' => 'Wsparcie dla MetaGer',
            'description' => 'Przekazując darowiznę, wspierasz utrzymanie i dalszy rozwój niezależnej wyszukiwarki metager.org oraz pracę stowarzyszenia non-profit SUMA-EV.',
        ],
    ],
    'prevention' => [
        'phrase' => '<h2>Potrzebujesz pomocy?</h2> Masz negatywne myśli lub chcesz z kimś porozmawiać? Na naszej stronie zapobiegania <a href=":prevurl" target="_blank"></a> znajdziesz listę placówek pomocy, do których możesz się zwrócić.',
    ],
];
