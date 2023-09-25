<?php
return [
    'ip' => 'L\'attributo :deve essere un indirizzo IP valido.',
    'boolean' => 'Il campo :attribute deve essere vero o falso.',
    'confirmed' => 'La conferma dell\'attributo :non corrisponde.',
    'required_with_all' => 'Il campo :attribute è obbligatorio quando è presente :values.',
    'required_without' => 'Il campo :attribute è necessario quando :values non è presente.',
    'required_without_all' => 'Il campo :attribute è obbligatorio quando non è presente nessuno dei :values.',
    'json' => 'L\'attributo :deve essere una stringa JSON valida.',
    'max' => [
        'numeric' => 'L\'attributo :non può essere maggiore di :max.',
        'file' => 'L\'attributo :non può essere maggiore di :max kilobyte.',
        'string' => 'L\'attributo :non può essere maggiore di :max caratteri.',
        'array' => 'L\'attributo :non può avere più di :max elementi.',
    ],
    'mimes' => 'L\'attributo :deve essere un file di tipo: :values.',
    'mimetypes' => 'L\'attributo :deve essere un file di tipo: :values.',
    'min' => [
        'numeric' => 'L\'attributo :deve essere almeno :min.',
        'file' => 'L\'attributo :deve essere almeno :min kilobyte.',
        'string' => 'L\'attributo :deve essere di almeno :min caratteri.',
        'array' => 'L\'attributo :deve avere almeno elementi :min.',
    ],
    'accepted' => 'L\'attributo :deve essere accettato.',
    'active_url' => 'L\'attributo :non è un URL valido.',
    'after' => 'L\'attributo :deve essere una data successiva a :date.',
    'alpha' => 'L\'attributo :può contenere solo lettere.',
    'alpha_dash' => 'L\'attributo :può contenere solo lettere, numeri e trattini.',
    'alpha_num' => 'L\'attributo :può contenere solo lettere e numeri.',
    'array' => 'L\'attributo :deve essere una matrice.',
    'before' => 'L\'attributo :deve essere una data precedente a :date.',
    'between' => [
        'numeric' => 'L\'attributo :deve essere compreso tra :min e :max.',
        'file' => 'L\'attributo :deve essere compreso tra :min e :max kilobyte.',
        'string' => 'L\'attributo :deve essere compreso tra i caratteri :min e :max.',
        'array' => 'L\'attributo :deve avere elementi compresi tra :min e :max.',
    ],
    'not_in' => 'L\'attributo :selezionato non è valido.',
    'numeric' => 'L\'attributo :deve essere un numero.',
    'present' => 'Il campo :attribute deve essere presente.',
    'regex' => 'Il formato :attributo non è valido.',
    'required' => 'Il campo :attribute è obbligatorio.',
    'date' => 'L\'attributo :non è una data valida.',
    'date_format' => 'L\'attributo :non corrisponde al formato :format.',
    'different' => 'I campi :attributo e :altro devono essere diversi.',
    'digits' => 'L\'attributo :deve essere :digits cifre.',
    'digits_between' => 'L\'attributo :deve essere compreso tra :min e :max.',
    'dimensions' => 'L\'attributo :ha dimensioni dell\'immagine non valide.',
    'distinct' => 'Il campo :attribute ha un valore duplicato.',
    'email' => 'L\'attributo :deve essere un indirizzo e-mail valido.',
    'exists' => 'L\'attributo :selezionato non è valido.',
    'file' => 'L\'attributo :deve essere un file.',
    'filled' => 'Il campo :attribute è obbligatorio.',
    'image' => 'L\'attributo :deve essere un\'immagine.',
    'in' => 'L\'attributo :selezionato non è valido.',
    'required_if' => 'Il campo :attributo è necessario quando :altro è :valore.',
    'required_unless' => 'Il campo :attribute è obbligatorio, a meno che :other non sia in :values.',
    'required_with' => 'Il campo :attribute è obbligatorio quando è presente :values.',
    'same' => 'Gli elementi :attribute e :other devono corrispondere.',
    'size' => [
        'numeric' => 'L\'attributo :deve essere :size.',
        'file' => 'L\'attributo :deve essere :size kilobyte.',
        'string' => 'L\'attributo :deve essere costituito da caratteri :size.',
        'array' => 'L\'attributo :deve contenere elementi :size.',
    ],
    'string' => 'L\'attributo :deve essere una stringa.',
    'timezone' => 'L\'attributo :deve essere una zona valida.',
    'unique' => 'L\'attributo :è già stato preso.',
    'uploaded' => 'Il caricamento dell\'attributo :non è riuscito.',
    'url' => 'Il formato :attributo non è valido.',
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'messaggio personalizzato',
        ],
    ],
    'pcsrf' => 'Purtroppo non ha funzionato. Si prega di riprovare.',
    'in_array' => 'Il campo :attribute non esiste in :other.',
    'integer' => 'L\'attributo :deve essere un numero intero.',
];