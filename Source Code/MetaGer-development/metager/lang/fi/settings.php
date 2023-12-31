<?php
return [
    'header' => [
        '1' => 'Hakuasetukset',
        '2' => 'Käytetyt hakukoneet',
        '3' => 'Haku suodattimet',
        '4' => 'Musta lista',
    ],
    'metager-key' => [
        'manage' => 'Latausnäppäin',
        'logout' => 'Poista avain',
        'header' => 'Mainonta vapaa haku',
        'charge' => 'Luotto: :token Token',
        'no-key' => 'Et ole määrittänyt avainta mainoksettomia hakuja varten.',
        'actions' => [
            'info' => 'Mikä se on?',
            'login' => 'Aseta olemassa oleva avain',
            'create' => 'Luo uusi avain',
        ],
    ],
    'text' => [
        '1' => 'Käytämme ei-henkilökohtaisesti tunnistettavia evästeitä hakuasetusten tallentamiseen. Ne tallennetaan selaimeesi tavallisena tekstinä.',
        '2' => 'Alla näet kaikki hakukoneet, jotka ovat käytettävissä tätä tarkennusta varten. Voit kytkeä ne päälle/pois klikkaamalla nimeä.',
        '3' => 'Tässä vaiheessa voit asettaa hakusuodattimet pysyvästi. Kun valitset hakusuodattimen, käytettävissä ovat vain hakukoneet, jotka tukevat kyseistä suodatinta. Vastaavasti näytetään vain sellaiset hakusuodattimet, joita nykyinen hakukonevalinta tukee.',
        '4' => 'Tässä voit lisätä verkkotunnuksia, jotka jätetään pois haun yhteydessä. Jos haluat sulkea pois kaikki aliverkkotunnukset, aloita kirjaimella "*.". Yksi verkkotunnus per rivi.',
    ],
    'hint' => [
        'header' => 'Palauta kaikki nykyiset asetukset',
        'loadSettings' => 'Täältä löydät linkin, jonka voit asettaa etusivuksi tai kirjanmerkiksi, jotta voit palauttaa nykyiset asetukset.',
        'hint' => 'Nämä asetukset vaikuttavat kaikkiin polttopisteisiin ja alasivuihin!',
    ],
    'disabledByFilter' => 'Ei käytössä hakusuodattimella:',
    'address' => 'Osoite',
    'save' => 'Tallenna',
    'reset' => 'Poista kaikki asetukset',
    'back' => 'Takaisin viimeiselle sivulle',
    'add' => 'Lisää',
    'clear' => 'Tyhjennä musta lista',
    'copy' => 'Kopioi',
    'darkmode' => 'Pimeän tilan vaihtaminen',
    'system' => 'Järjestelmän oletusarvo',
    'dark' => 'Tumma',
    'light' => 'Valo',
    'newTab' => 'Avaa tulokset uusissa välilehdissä',
    'off' => 'off',
    'on' => 'osoitteessa',
    'more' => 'Lisää asetuksia',
    'noSettings' => 'Tällä hetkellä asetuksia ei ole asetettu!',
    'allSettings' => [
        'header' => 'Asetukset :root',
        'text' => 'Täältä löydät yleiskatsauksen kaikista asetuksista ja evästeistä, jotka olet asettanut. Voit poistaa yksittäisiä merkintöjä tai poistaa ne kaikki. Muista, että niihin liittyviä asetuksia ei enää käytetä.',
    ],
    'meaning' => 'Merkitys',
    'actions' => 'Toimet',
    'engineDisabled' => 'Hakukonetta :engine ei kysytä focus :focus -tilassa.',
    'inFocus' => 'tarkennettuna',
    'key' => 'Avaimesi mainoksettomaan hakuun',
    'blentry' => 'Mustan listan merkintä',
    'removeCookie' => 'Poista tämä eväste',
    'aria' => [
        'label' => [
            '1' => 'aktiivinen',
            '2' => 'deaktivoitu',
        ],
    ],
    'disabledBecausePaymentRequired' => 'Voit käyttää seuraavia hakukoneita <a href=":link" target="_blank">MetaGer-avaimella</a>.',
    'no-engines' => 'Nykyisillä hakuasetuksilla mitään hakukonetta ei kysytä.',
    'cost' => 'Laskemme <strong>:cost tokens</strong> per hakukysely nykyisillä asetuksilla.',
    'cost-free' => 'Hakusi ovat <strong>ilmaiseksi</strong> nykyisillä asetuksilla.',
    'free' => 'ilmainen',
    'enable-engine' => 'Kytke hakukone päälle',
    'disable-engine' => 'Sammuta hakukone',
    'filtered-engine' => 'Hakukone poistettu käytöstä suodattimen avulla',
    'payment-engine' => 'Hakukone vaatii MetaGer-avaimen perustamisen',
    'externalservice' => [
        'heading' => 'Käytä ulkoista hakupalvelua',
        'description' => 'Voit määrittää käyttämään mitä tahansa seuraavista ulkoisista hakukoneista integroidun ratkaisumme sijaan. Ohjaamme hakusi määritettyyn palveluntarjoajaan.',
    ],
    'suggestions' => [
        'label' => 'Hakuehdotukset',
        'off' => "Vammaiset",
        'on' => "Käytössä",
    ],
    'self_advertisements' => [
        'label' => "Oman palvelumme hienovarainen mainonta",
    ],
];
