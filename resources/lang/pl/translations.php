<?php

return [
    'menu' => [
        'log-viewer' => 'Logi'
    ],
    'buttons' => [
        'cancel' => 'Anuluj',
        'store' => 'Dodaj',
        'update' => 'Aktualizuj'
    ],
    'attribute' => [
        'created_at' => 'utworzono',
        'updated_at' => 'zaktualizowano',
        'deleted_at' => 'usunięto',
    ],
    
    'zamowienie' => 
    [
        'title' => 'Zamówienie',
        'label' => 
            [
              'create' => 'Dodanie nowego zamówienia',
              'edit' => 'Edycja zamówienia',
            ],
        'attribute' =>
        [
            'NumerZamowienia' => 'Numer zamówienia',
            'IdSzczegolyZamowienia' => 'Szczegóły zamówienia',
            'IdKlienta' => 'Klient',
            'IdSprzedawcy' => 'Sprzedawca',
            'IdFaktury' => 'Faktura',
            'IdParagonu' => 'Paragon',
            'IdListyTowarow' => 'Lista towarów',
            'DataZlozenia' => 'Data złożenia',
            'DataRealizacji' => 'Data realizacji',
            'Status' => 'Status',
            'Uwagi' => 'Uwagi',
            'Zaplacono' => 'Czy zapłacono?'
        ],
        'create' => 
        [
            'messages' => 
            [
                'success' => 'Dodano zamówienie o id :id',
                'edit' => 'Poprawnie edytowano zamówienie o numerze :id'
            ],
        ],
    ],
    
    'klient' => 
    [
        'title' => 'Konto',
        'label' => 
            [
              'create' => 'Dodanie nowego klienta',
              'edit' => 'Edycja danych klienta',
            ],
        'attribute' => 
            [
                'imie' => 'Imie',
                'nazwisko' => 'Nazwisko',
                'nazwa' => 'Nazwa',
                'NIP' => 'NIP',
                'ulica' => 'Ulica',
                'numerdomu' => 'Numer Domu',
                'numerlokalu' => 'Numer Lokalu',
                'kodpocztowy' => 'Kod Pocztowy',
                'miejscowosc' => 'Miejscowość',
                'haslo' => 'Hasło',
                'telefon' => 'Numer telefonu',
                'email' => 'E-mail'
            ],
        'flashes' => 
        [
            'success' => 
            [
                'stored' => 'Dodano klienta :nazwisko',
                'updated' => 'Zaktualizowano klienta :nazwisko',
                'nothing-changed' => 'Dane klienta :nazwisko nie zmieniły się'
            ],
            'error' =>
            [
                'duplicate_entry' => 'Dane Klienta :nazwisko nie zmieniły się przez wzgląd na wystepowanie takiego adresu Email.',
            ]
        ]
    ],
    
    'sprzedawca' => [
        'title' => 'Sprzedawcy',
        'label' => [
            'create' => 'Sprzedawcy'
        ],
        'attribute' => [
            'Imie' => 'Imię',
            'Nazwisko' => 'Nazwisko',
            'Email' => 'E-mail',
            'Haslo' => 'Hasło'
        ]
    ],

    'towar' => [
        'title'=> 'Towary',
        'label' => [
            'create' => 'Dodanie nowego towaru'
        ],
        'attribute' => [
            'Kod' => 'Kod towaru',
            'Nazwa' => 'Nazwa',
            'StanMagazynowy' => 'Dostępna ilość',
            'Opis' => 'Opis',
            'StawkaPodatku' => 'Stawka podatku',
            'StanMin' => 'Minimalna ilość',
            'Jednostki' => 'Jednostka',
            'StanMax' =>  'Maksymalna ilość'
        ],
        'create' => [
            'messages' => [
                'success' => 'Poprawnie dodano towar o id :towarid',
                'edit' => 'Poprawnie edytowano towar o id :towarid'
            ]
        ],
    ],

    'faktura' => [
        'title'=> 'Faktura',
        'label' => [
            'create' => 'Dodanie nowej faktury'
        ],
        'attribute' => [
            'NumerFaktury' => 'Numer faktury',
            'IdentyfikatorKlienta' => 'Identyfikator klienta',
            'IdentyfikatorSprzedawcy' => 'Identyfikator sprzedawcy',
            'NIPKlienta' => 'Numer NIP',
            'DataWystawienia' => 'Data wystawienia faktury',
            'SumaBrutto' => 'Suma brutto',
            'idTowarNaFakturze' => 'Id towaru na fakturze'
        ]
    ],

    'szczegolyZamowienia' => [
        'title'=> 'Szczegóły zamówienia',
        'attribute' => [
            'Nazwa' => 'Nazwa',
            'Ilosc' => 'Ilość',
            'WartoscNetto' => 'Wartość netto',
            'WartoscBrutto' =>  'Wartość brutto',
        ]
    ],

    'paragon' => [
        'title'=> 'Paragon',
        'label' => [
            'create' => 'Dodanie nowego paragonu'
        ],
        'attribute' => [
            'NumerParagonu' => 'Numer paragonu',
            'DataWystawienia' => 'Data wystawienia pragonu',
            'Vat' => 'Vat', 
            'SumaBrutto' => 'Suma brutto',
            'idTowarNaParagonie' => 'Id towatu na paragonie',
        ]
    ],

    'towarNaFakturze' => [
        'title'=> 'Towar na fakturze',
        'attribute' => [
            'LiczbaPorzadkowa' => 'Liczba porzadkowa',
            'Nazwa' => 'Nazwa',
            'Ilosc' => 'Ilość',
            'CenaSprzedazy' => 'Cena sprzedaży',
            'Vat' => 'Vat', 
            'WartoscBrutto' => 'Wartość brutto'
        ]
    ],

    'towarNaParagonie' => [
        'title'=> 'Towar na paragonie',
        'attribute' => [
            'Nazwa' => 'Nazwa',
            'Ilosc' => 'Ilość',
            'CenaSprzedazy' => 'Cena sprzedaży', 
            'WartoscBrutto' => 'Wartość brutto'
        ]
    ],

    'listatowar' => [
        'title' => 'Lista towarów',
        'attribute' => [
            'Nazwa' => 'Nazwa'
        ]
    ]
];
