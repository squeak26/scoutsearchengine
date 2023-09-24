<?php
return [
    'headline' => [
        '1' => 'Votre don',
        '2' => 'En faisant un don, vous soutenez la préservation et le développement du moteur de recherche indépendant metager.de et le travail de l\'association de soutien à but non lucratif SUMA-EV. <a href=":aboutlink" rel="noopener" target=_blank>En savoir plus</a>.',
        '3' => 'Quel est le montant de votre don ?',
    ],
    'breadcrumps' => [
        'amount' => 'Choisir le montant',
        'payment_method' => 'Choisir le mode de paiement',
        'payment_interval' => 'Sélectionner l\'intervalle de paiement',
    ],
    'amount' => [
        'description' => 'Tout d\'abord, veuillez sélectionner le montant que vous souhaitez donner. Ensuite, vous pouvez sélectionner la méthode de paiement souhaitée.',
        'custom' => 'Montant personnalisé',
        'taxes' => 'Les dons à <a href="https://suma-ev.de">SUMA-EV</a> sont déductibles des impôts, car l\'association est reconnue comme une organisation à but non lucratif par le bureau des impôts de Hanovre Nord, inscrite au registre des associations du tribunal local de Hanovre sous le numéro VR200033.',
        'banktransfer' => [
            'title' => 'Nos coordonnées bancaires',
            'description' => 'Vous souhaitez effectuer votre don directement par virement bancaire ? Vous pouvez également utiliser le code QR comme transfert photo pour transférer automatiquement nos coordonnées bancaires.',
        ],
        'membershiphint' => [
            'title' => 'Ou peut-être devenir membre ?',
            'description' => 'En tant que membre de <a href="https://suma-ev.de" target="_blank">SUMA-EV</a>, vous pouvez utiliser MetaGer sans publicité et avoir accès à tous les moteurs de recherche payants.',
        ],
        'qr' => [
            'alt' => 'Transfert de photos',
        ],
    ],
    'interval' => [
        'heading' => 'Peut-il s\'agir d\'un don régulier ?',
        'frequency' => [
            'once' => 'Une fois',
            'monthly' => 'Mensuel',
            'quarterly' => 'Trimestrielle',
            'six-monthly' => 'Tous les six mois',
            'annual' => 'Annuel',
        ],
    ],
    'payment-method' => [
        'heading' => 'Comment souhaitez-vous effectuer le paiement ?',
        'methods' => [
            'banktransfer' => 'Virement bancaire',
            'directdebit' => 'Domiciliation Sepa',
            'paypal' => 'PayPal',
            'venmo' => 'Venmo',
            'itau' => 'Itau',
            'credit' => 'Crédit',
            'paylater' => 'Payer plus tard',
            'applepay' => 'Applepay',
            'ideal' => 'IDÉAL',
            'sepa' => 'Domiciliation Sepa',
            'bancontact' => 'Bancontact',
            'giropay' => 'Giropay',
            'eps' => 'EPS',
            'sofort' => 'SOFORT',
            'mybank' => 'MyBank',
            'blik' => 'BLIK',
            'p24' => 'P24',
            'wechatpay' => 'WeChatPay',
            'payu' => 'Payu',
            'trustly' => 'Confiance',
            'oxxo' => 'Oxxo',
            'boleto' => 'Boleto',
            'boletobacario' => 'Boletobancario',
            'mercadopago' => 'Mercadopago',
            'mulitbanco' => 'Multibanco',
            'satispay' => 'Satispay',
            'paidy' => 'Paidy',
            'card' => 'Carte de crédit/débit',
        ],
    ],
    'execute-payment' => [
        'heading' => 'Paiement complet',
        'item-name' => 'Don à la SUMA-EV',
        'card' => [
            'number' => 'Numéro de la carte',
            'expiration' => 'Valable jusqu\'au',
            'cvv' => 'CVV',
            'submit' => 'Faire un don',
            'recurring-hint' => 'Note : Le paiement direct par carte de crédit sans validation de l\'adresse ou du nom n\'est possible que pour les dons uniques.',
            'error' => [
                '9500' => 'Carte de crédit rejetée comme frauduleuse',
                '5100' => 'La carte de crédit a été refusée par l\'établissement de crédit',
                '00N7' => 'CVV erroné. Veuillez vérifier la saisie',
                '5400' => 'Carte de crédit expirée',
                '5180' => 'Le contrôle de Luhn a échoué',
                '5120' => 'Carte de crédit refusée pour cause de fonds insuffisants.',
                '9520' => 'Carte de crédit rejetée comme perdue ou volée',
                '0500' => 'Carte de crédit refusée par l\'établissement de crédit',
                '1330' => 'Carte de crédit invalide. Veuillez vérifier votre inscription',
                'generic' => 'Carte de crédit refusée par l\'établissement de crédit',
            ],
        ],
        'banktransfer' => [
            'description' => [
                'recurring' => 'Veuillez créer un ordre permanent auprès de votre banque habituelle sur le compte bancaire suivant (par exemple via la banque en ligne). Vous pouvez également utiliser le code QR pour un transfert photo afin de transférer automatiquement les informations bancaires.',
                'once' => 'Veuillez effectuer un virement bancaire auprès de votre banque habituelle aux coordonnées bancaires suivantes (par exemple, par le biais de la banque en ligne). Vous pouvez également utiliser le code QR pour un transfert photo afin de transférer automatiquement nos coordonnées bancaires.',
            ],
            'qrdownload' => 'Télécharger',
            'qr-remittance' => 'Don de :date',
        ],
        'directdebit' => [
            'description' => 'Veuillez indiquer ci-dessous les informations relatives à votre compte bancaire sur lequel nous pourrons prélever le don par prélèvement automatique. Un délai de 1 à 2 semaines peut s\'écouler jusqu\'à ce que le montant soit perçu.',
            'name' => [
                'label' => 'Titulaire du compte',
                'placeholder' => 'John Smith',
            ],
            'iban' => [
                'label' => 'IBAN',
                'placeholder' => 'DE89 3704 0044 0532 0130 00',
                'error' => 'L\'IBAN saisi n\'est pas valide.',
            ],
            'submit' => 'Effectuer le paiement',
        ],
        'processing' => 'Le paiement est traité',
    ],
    'thankyou' => [
        'heading' => 'Merci beaucoup !',
        'description' => 'Votre don contribue de manière significative à notre capacité à exploiter et à développer MetaGer de manière permanente.',
        'taxes' => 'Note : SUMA-EV est reconnue comme une association à but non lucratif. Cela signifie que vous pouvez déduire votre don de vos impôts. Jusqu\'à un montant de 300€, un extrait de compte bancaire est suffisant pour votre bureau des impôts comme preuve du don. Si vous souhaitez tout de même recevoir un reçu de don, veuillez nous communiquer votre adresse complète via notre formulaire de contact <a href=":kontakt"></a> .',
        'button' => 'Retour à la recherche MetaGer',
    ],
];
