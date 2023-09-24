<?php
return [
    'headline' => [
        '1' => 'Din donation',
        '2' => 'Med din donation støtter du bevarelsen og videreudviklingen af den uafhængige søgemaskine metager.de og arbejdet i den almennyttige støtteforening SUMA-EV. <a href=":aboutlink" rel="noopener" target=_blank>Lær mere</a>.',
        '3' => 'Hvor meget vil du gerne donere?',
    ],
    'breadcrumps' => [
        'amount' => 'Vælg beløb',
        'payment_method' => 'Vælg betalingsmetode',
        'payment_interval' => 'Vælg betalingsinterval',
    ],
    'payment-method' => [
        'methods' => [
            'itau' => 'Itau',
            'banktransfer' => 'Bankoverførsel',
            'directdebit' => 'Sepa direkte debitering',
            'paypal' => 'PayPal',
            'venmo' => 'Venmo',
            'credit' => 'Kredit',
            'paylater' => 'Betal senere',
            'applepay' => 'Applepay',
            'ideal' => 'IDEAL',
            'sepa' => 'Sepa direkte debitering',
            'bancontact' => 'Bancontact',
            'giropay' => 'Giropay',
            'eps' => 'EPS',
            'sofort' => 'SOFORT',
            'mybank' => 'MyBank',
            'blik' => 'BLIK',
            'p24' => 'P24',
            'wechatpay' => 'WeChatPay',
            'payu' => 'Payu',
            'trustly' => 'Tillidsfuld',
            'oxxo' => 'Oxxo',
            'boleto' => 'Boleto',
            'boletobacario' => 'Boletobancario',
            'mercadopago' => 'Mercadopago',
            'mulitbanco' => 'Multibanco',
            'satispay' => 'Satispay',
            'paidy' => 'Paidy',
            'card' => 'Kredit-/betalingskort',
        ],
        'heading' => 'Hvordan vil du gerne foretage betalingen?',
    ],
    'amount' => [
        'description' => 'Først skal du vælge det beløb, du gerne vil donere. Derefter kan du vælge den ønskede betalingsmetode.',
        'custom' => 'Brugerdefineret beløb',
        'taxes' => 'Donationer til <a href="https://suma-ev.de">SUMA-EV</a> er fradragsberettigede, da foreningen er anerkendt som en almennyttig organisation af skattekontoret i Hannover Nord, registreret i foreningsregistret ved byretten i Hannover under VR200033.',
        'banktransfer' => [
            'title' => 'Vores kontooplysninger',
            'description' => 'Vil du gerne give din donation direkte med en bankoverførsel? Du kan også bruge QR-koden som en fotooverførsel til automatisk at overføre vores bankoplysninger.',
        ],
        'membershiphint' => [
            'title' => 'Eller måske blive medlem?',
            'description' => 'Som medlem af <a href="https://suma-ev.de" target="_blank">SUMA-EV</a> kan du bruge MetaGer reklamefrit og få adgang til alle betalte søgemaskiner.',
        ],
        'qr' => [
            'alt' => 'Fotooverførsel',
        ],
    ],
    'interval' => [
        'heading' => 'Kan det være en regelmæssig donation?',
        'frequency' => [
            'once' => 'En gang',
            'monthly' => 'Månedlig',
            'quarterly' => 'Kvartalsvis',
            'six-monthly' => 'Hver sjette måned',
            'annual' => 'Årligt',
        ],
    ],
    'execute-payment' => [
        'heading' => 'Fuldfør betaling',
        'item-name' => 'Donation til SUMA-EV',
        'card' => [
            'number' => 'Kortnummer',
            'expiration' => 'Gyldig indtil',
            'cvv' => 'CVV',
            'submit' => 'Donér nu',
            'recurring-hint' => 'Bemærk: Direkte kreditkortbetaling uden validering af adresse/navn er kun mulig for engangsdonationer.',
            'error' => [
                '9500' => 'Kreditkort afvist som svigagtigt',
                '5100' => 'Kreditkortet blev afvist af kreditinstituttet.',
                '00N7' => 'Forkert CVV. Kontroller venligst input',
                '5400' => 'Kreditkortet er udløbet',
                '5180' => 'Luhn-tjekket mislykkedes',
                '5120' => 'Kreditkort afvist på grund af utilstrækkelige midler.',
                '9520' => 'Kreditkort afvist som tabt/stjålet',
                '0500' => 'Kreditkort afvist af kreditinstitut',
                '1330' => 'Kreditkortet er ugyldigt. Tjek venligst din tilmelding',
                'generic' => 'Kreditkort afvist af kreditinstitut',
            ],
        ],
        'banktransfer' => [
            'description' => [
                'once' => 'Foretag venligst en bankoverførsel i din husbank til følgende bankoplysninger (f.eks. via netbank). Alternativt kan du bruge QR-koden til en fotooverførsel for automatisk at overføre vores bankoplysninger.',
                'recurring' => 'Opret venligst en stående ordre i din husbank til følgende bankkonto (f.eks. via netbank). Du kan også bruge QR-koden til en fotooverførsel for at overføre bankoplysningerne automatisk.',
            ],
            'qr-remittance' => 'Donation fra :dato',
            'qrdownload' => 'Download',
        ],
        'directdebit' => [
            'description' => 'Nedenfor bedes du indtaste oplysninger om din bankkonto, hvorfra vi kan opkræve donationen via direkte debitering. Det kan tage 1-2 uger, før beløbet er indbetalt.',
            'name' => [
                'label' => 'Kontohaver',
                'placeholder' => 'John Smith',
            ],
            'iban' => [
                'label' => 'IBAN',
                'placeholder' => 'DE89 3704 0044 0532 0130 00',
                'error' => 'Det indtastede IBAN er ugyldigt.',
            ],
            'submit' => 'Foretag betaling',
        ],
        'processing' => 'Betaling er gennemført',
    ],
    'thankyou' => [
        'heading' => 'Mange tak skal du have!',
        'description' => 'Din donation er et vigtigt bidrag til vores evne til at drive og videreudvikle MetaGer på permanent basis.',
        'taxes' => 'Bemærk: SUMA-EV er anerkendt som en non-profit forening. Det betyder, at du kan trække din donation fra i skat. Op til et donationsbeløb på 300 € er et kontoudtog tilstrækkeligt til dit skattekontor som bevis for donationen. Hvis du stadig ønsker at modtage en donationskvittering, bedes du give os din komplette adresse via vores <a href=":kontakt">kontaktformular</a>.',
        'button' => 'Tilbage til MetaGer-søgning',
    ],
];
