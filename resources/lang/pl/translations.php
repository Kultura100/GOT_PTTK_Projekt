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
    
    'uzytkownik' => 
    [
        'title' => 'Konto',
        'label' => 
            [
              'create' => 'Dodanie nowego uzytkownika',
              'edit' => 'Edycja danych uzytkownika',
            ],
        'attribute' => 
            [
                'email' => 'Email',
                'imie' => 'Imie',
                'haslo' => 'Haslo',
                'nazwisko' => 'Nazwisko',
                'telefon' => 'Telefon',
                'punkty' => 'Punkty',
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

    'wycieczki' => 
    [
        'title' => 'Wycieczki',
        'success' => 'Poprawnie utworzono wycieczke o id :name !',
        'label' => 
            [
              'create' => 'Dodanie nowej wycieczki',
              'edit' => 'Edycja aktualnej wycieczki',
              'back' => 'Powrót',
            ],
        'attribute' => 
            [
                'id_turysty' => 'ID Turysty',
                'dataod' => 'Data rozpoczęcia',
                'datado' => 'Data zakończenia',
                'pasmo' => 'Pasmo',
                'grupa' => 'Grupa',
                'punktpocz' => 'Punkt początkowy',
                'punktkon' => 'Punkt kończący',
                'status' => 'Status',
                'iloscpunktow' => 'Ilość Punktów',
                'punkty' => 'Punkty',   
                'nazwa' => 'Nazwa wycieczki'             
            ],
        'flashes' => 
        [
            'success' => 
            [
                'stored' => 'Dodano wycieczke o numerze :id',
                'updated' => 'Zaktualizowano wycieczke o numerze :id',
                'nothing-changed' => 'Dane wycieczki :id nie zmieniły się'
            ],
           'error' =>
            [
                'duplicate_entry' => 'Dane Klienta :nazwisko nie zmieniły się przez wzgląd na wystepowanie takiego adresu Email.',
                'dolaczenie_error' => 'Nie udało się zapisać do wycieczki.',
                'dolaczenie_success' => 'Zapisałeś się do wycieczki o nazwie :name'
            ]
        ]
    ],

    'osiagniecia' => 
    [
        'title' => 'Osiągnięcia',
    ],
    'raport' =>
    [
        'title' => 'Raporty',
        'label' => 
            [
              'create' => 'Dodanie nowego raportu',
              'edit' => 'Edycja raportu',
            ],
        'attribute' => 
            [
                'dataod' => 'Data początku wycieczki',
                'datado' => 'Data końca wycieczki',
                'pasmo' => 'Pasmo górskie',
                'punkty' => 'Ilość zebranych punktów',
                'maxpunkty' => 'Maxymalna liczba punktów do zebrania',
                'odcinki' => 'Odcinki',
                'zdjecia' => 'Zdjęcia'
            ],
        'flashes' => 
        [
            'success' => 
            [
                'stored' => 'Dodano raport o numerze :id',
                'updated' => 'Zaktualizowano raport o numerze :id',
                'nothing-changed' => 'Dane raportu o numerze :id nie zmieniły się'
            ],
            'error' =>
            [
                'duplicate_entry' => 'Dane raportu o numerze :id nie zmieniły się przez wzgląd na wystepowanie takiego numeru reportu',
            ]
        ]
    ],

    'szlak' =>
    [
        'title' => 'Szlaki górskie',
        'label' => 
            [
              'szczegoly' => 'Szczegóły szlaku :nazwa',
            ],
        'attribute' => 
            [
                'grupa_nazwa' => 'Nazwa grup górskich',
                'pasmo_nazwa' => 'Nazwa pasma górskiego'
            ],
        'flashes' => 
        [
            'success' => 
            [
                'stored' => 'Dodano raport o numerze :id',
                'updated' => 'Zaktualizowano raport o numerze :id',
                'nothing-changed' => 'Dane raportu o numerze :id nie zmieniły się'
            ],
            'error' =>
            [
                'duplicate_entry' => 'Dane raportu o numerze :id nie zmieniły się przez wzgląd na wystepowanie takiego numeru reportu',
            ]
        ]
    ],
    'obowiazki' =>
    [
        'title' => 'Obowiązki przodownika',
    ],

    'odznaki' => 
    [
        'title' => 'Odznaki',
    ],

    'ranking' => 
    [
        'title' => 'Ranking',
    ]
];
