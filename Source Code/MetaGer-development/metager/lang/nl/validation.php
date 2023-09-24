<?php
return [
    'array' => 'Het :attribuut moet een array zijn.',
    'before' => 'Het :attribuut moet een datum zijn vóór :date.',
    'between' => [
        'numeric' => 'Het :attribuut moet tussen :min en :max liggen.',
        'file' => 'Het :attribuut moet tussen :min en :max kilobytes liggen.',
        'string' => 'Het :attribuut moet tussen :min en :max tekens staan.',
        'array' => 'Het :attribuut moet tussen :min en :max items hebben.',
    ],
    'boolean' => 'Het veld :attribute moet waar of onwaar zijn.',
    'confirmed' => 'De :attribute-bevestiging komt niet overeen.',
    'date' => 'Het :-attribuut is geen geldige datum.',
    'date_format' => 'Het :attribuut komt niet overeen met het formaat :format.',
    'different' => 'De :attribute en :other moeten verschillend zijn.',
    'digits' => 'Het :attribuut moet :digits cijfers zijn.',
    'digits_between' => 'Het :attribuut moet tussen :min en :max cijfers liggen.',
    'dimensions' => 'Het :attribuut heeft ongeldige afbeeldingsafmetingen.',
    'distinct' => 'Het veld :attribute heeft een dubbele waarde.',
    'email' => 'Het :-attribuut moet een geldig e-mailadres zijn.',
    'exists' => 'Het geselecteerde :-attribuut is ongeldig.',
    'file' => 'Het :attribuut moet een bestand zijn.',
    'filled' => 'Het veld :attribute is verplicht.',
    'image' => 'Het :attribuut moet een afbeelding zijn.',
    'in' => 'Het geselecteerde :-attribuut is ongeldig.',
    'in_array' => 'Het :attribute-veld bestaat niet in :other.',
    'integer' => 'Het :-attribuut moet een geheel getal zijn.',
    'ip' => 'Het :-attribuut moet een geldig IP-adres zijn.',
    'json' => 'Het :attribuut moet een geldige JSON-string zijn.',
    'max' => [
        'numeric' => 'Het :attribuut mag niet groter zijn dan :max.',
        'file' => 'Het :attribuut mag niet groter zijn dan :max kilobytes.',
        'string' => 'Het :attribuut mag niet groter zijn dan :max tekens.',
        'array' => 'Het :attribuut mag niet meer dan :max items hebben.',
    ],
    'mimes' => 'Het :attribuut moet een bestand zijn van het type: :values.',
    'mimetypes' => 'Het :attribuut moet een bestand zijn van het type: :values.',
    'min' => [
        'numeric' => 'Het :attribuut moet minstens :min zijn.',
        'file' => 'Het :attribuut moet minimaal :min kilobytes zijn.',
        'string' => 'Het :attribuut moet minstens :min tekens bevatten.',
        'array' => 'Het :attribuut moet ten minste :min-items hebben.',
    ],
    'not_in' => 'Het geselecteerde :-attribuut is ongeldig.',
    'numeric' => 'Het :-attribuut moet een getal zijn.',
    'present' => 'Het veld :attribute moet aanwezig zijn.',
    'regex' => 'De indeling van het :attribuut is ongeldig.',
    'required' => 'Het veld :attribute is verplicht.',
    'required_if' => 'Het :attribute-veld is vereist als :other :value is.',
    'required_unless' => 'Het :attribute veld is verplicht tenzij :other in :values staat.',
    'required_with' => 'Het :attribute-veld is vereist als :values aanwezig is.',
    'required_with_all' => 'Het :attribute-veld is vereist als :values aanwezig is.',
    'required_without' => 'Het :attribute-veld is vereist als :values niet aanwezig is.',
    'required_without_all' => 'Het :attribute-veld is vereist als geen van de :waarden aanwezig is.',
    'same' => 'De :attribute en :other moeten overeenkomen.',
    'size' => [
        'numeric' => 'Het :attribuut moet :size zijn.',
        'file' => 'Het :attribuut moet :size kilobytes zijn.',
        'string' => 'Het :attribuut moet :size tekens zijn.',
        'array' => 'Het :attribuut moet :size-items bevatten.',
    ],
    'string' => 'Het :attribuut moet een tekenreeks zijn.',
    'timezone' => 'Het :-attribuut moet een geldige zone zijn.',
    'unique' => 'Het :-attribuut is al gebruikt.',
    'uploaded' => 'Het :attribuut is niet geüpload.',
    'url' => 'De indeling van het :attribuut is ongeldig.',
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'aangepast bericht',
        ],
    ],
    'pcsrf' => 'Helaas werkte dit niet. Probeer het opnieuw.',
    'accepted' => 'Het :-attribuut moet worden geaccepteerd.',
    'active_url' => 'Het :attribuut is geen geldige URL.',
    'after' => 'Het :attribuut moet een datum zijn na :date.',
    'alpha' => 'Het :attribuut mag alleen letters bevatten.',
    'alpha_dash' => 'Het :attribuut mag alleen letters, cijfers en streepjes bevatten.',
    'alpha_num' => 'Het :attribuut mag alleen letters en cijfers bevatten.',
];
