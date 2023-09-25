<?php
return [
    'amount' => [
        'banktransfer' => [
            'title' => 'Onze accountgegevens',
            'description' => 'Wil je je donatie direct overmaken via een bankoverschrijving? Je kunt de QR-code ook gebruiken als foto-overschrijving om automatisch onze bankgegevens over te maken.',
        ],
        'membershiphint' => [
            'title' => 'Of misschien lid worden?',
            'description' => 'Als lid van <a href="https://suma-ev.de" target="_blank">SUMA-EV</a> kun je MetaGer advertentievrij gebruiken en krijg je toegang tot alle betaalde zoekmachines.',
        ],
        'qr' => [
            'alt' => 'Foto overdracht',
        ],
        'description' => 'Selecteer eerst het bedrag dat je wilt doneren. Daarna kun je de gewenste betaalmethode selecteren.',
        'custom' => 'Aangepast bedrag',
        'taxes' => 'Donaties aan <a href="https://suma-ev.de">SUMA-EV</a> zijn fiscaal aftrekbaar, omdat de vereniging door het belastingkantoor van Hannover Noord erkend is als non-profitorganisatie en ingeschreven is in het verenigingenregister van het kantongerecht van Hannover onder VR200033.',
    ],
    'interval' => [
        'heading' => 'Kan het een regelmatige donatie zijn?',
        'frequency' => [
            'once' => 'Eenmaal',
            'monthly' => 'Maandelijks',
            'quarterly' => 'Driemaandelijks',
            'six-monthly' => 'Zesmaandelijks',
            'annual' => 'Jaarlijks',
        ],
    ],
    'payment-method' => [
        'heading' => 'Hoe wilt u de betaling uitvoeren?',
        'methods' => [
            'banktransfer' => 'Overschrijving',
            'directdebit' => 'Sepa automatische incasso',
            'paypal' => 'PayPal',
            'venmo' => 'Venmo',
            'itau' => 'Itau',
            'credit' => 'Krediet',
            'paylater' => 'Betaal later',
            'applepay' => 'Applepay',
            'ideal' => 'IDEAL',
            'sepa' => 'Sepa automatische incasso',
            'bancontact' => 'Bancontact',
            'giropay' => 'Giropay',
            'eps' => 'EPS',
            'sofort' => 'SOFORT',
            'mybank' => 'MyBank',
            'blik' => 'BLIK',
            'p24' => 'P24',
            'wechatpay' => 'WeChatPay',
            'payu' => 'Payu',
            'trustly' => 'Vertrouwd',
            'oxxo' => 'Oxxo',
            'boleto' => 'Boleto',
            'boletobacario' => 'Bankrekening',
            'mercadopago' => 'Mercadopago',
            'mulitbanco' => 'Multibanco',
            'satispay' => 'Satispay',
            'paidy' => 'Paidy',
            'card' => 'Creditcard/Debetaalpas',
        ],
    ],
    'execute-payment' => [
        'heading' => 'Volledige betaling',
        'item-name' => 'Donatie aan de SUMA-EV',
        'card' => [
            'number' => 'Kaartnummer',
            'submit' => 'Nu doneren',
            'recurring-hint' => 'Opmerking: Directe creditcardbetaling zonder adres-/naamvalidatie is alleen mogelijk voor eenmalige donaties.',
            'error' => [
                '9500' => 'Creditcard afgewezen als frauduleus',
                '5100' => 'De creditcard is geweigerd door de kredietinstelling',
                '00N7' => 'Verkeerde CVV. Controleer invoer',
                '5400' => 'Creditcard verlopen',
                '5180' => 'Luhn-controle mislukt',
                '5120' => 'Creditcard geweigerd wegens onvoldoende saldo.',
                '9520' => 'Creditcard geweigerd als verloren/gestolen',
                '0500' => 'Creditcard geweigerd door kredietinstelling',
                '1330' => 'Creditcard ongeldig. Controleer uw inschrijving',
                'generic' => 'Creditcard geweigerd door kredietinstelling',
            ],
            'expiration' => 'Geldig tot',
            'cvv' => 'CVV',
        ],
        'banktransfer' => [
            'description' => [
                'once' => 'Initieer een bankoverschrijving bij je huisbank naar de volgende bankgegevens (bijv. via internetbankieren). Je kunt ook de QR-code voor een foto-overschrijving gebruiken om onze bankgegevens automatisch over te maken.',
                'recurring' => 'Maak een doorlopende opdracht aan bij je huisbank naar de volgende bankrekening (bijv. via internetbankieren). Je kunt ook de QR-code voor een foto-overschrijving gebruiken om de bankgegevens automatisch over te maken.',
            ],
            'qr-remittance' => 'Donatie van :datum',
            'qrdownload' => 'Downloaden',
        ],
        'directdebit' => [
            'description' => 'Vul hieronder de gegevens van je bankrekening in waarvan we de donatie via automatische incasso kunnen afschrijven. Het kan 1-2 weken duren voordat het bedrag is geïncasseerd.',
            'name' => [
                'label' => 'Rekeninghouder',
                'placeholder' => 'John Smith',
            ],
            'iban' => [
                'label' => 'IBAN',
                'placeholder' => 'DE89 3704 0044 0532 0130 00',
                'error' => 'Het ingevoerde IBAN is ongeldig.',
            ],
            'submit' => 'Betalen',
        ],
        'processing' => 'Betaling is verwerkt',
    ],
    'thankyou' => [
        'heading' => 'Hartelijk dank!',
        'description' => 'Jouw donatie levert een significante bijdrage aan ons vermogen om MetaGer permanent te exploiteren en verder te ontwikkelen.',
        'taxes' => 'Opmerking: SUMA-EV is erkend als een vereniging zonder winstoogmerk. Dit betekent dat je je donatie belastingaftrekbaar kunt maken. Tot een donatiebedrag van 300€ is een bankafschrift voldoende voor je belastingkantoor als bewijs van de donatie. Als je toch een donatiebewijs wilt ontvangen, geef dan je volledige adresgegevens door via ons <a href=":kontakt">contactformulier</a>.',
        'button' => 'Terug naar MetaGer zoeken',
    ],
    'headline' => [
        '1' => 'Uw donatie',
        '2' => 'Met uw donatie ondersteunt u het behoud en de verdere ontwikkeling van de onafhankelijke zoekmachine metager.de en het werk van de non-profit ondersteunende vereniging SUMA-EV. <a href=":aboutlink" rel="noopener" target=_blank>Lees meer</a>.',
        '3' => 'Hoeveel wil je doneren?',
    ],
    'breadcrumps' => [
        'amount' => 'Kies bedrag',
        'payment_method' => 'Betaalmethode kiezen',
        'payment_interval' => 'Selecteer betalingsinterval',
    ],
];