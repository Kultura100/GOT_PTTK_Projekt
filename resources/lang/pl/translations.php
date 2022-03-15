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
        'created_at' => 'utworzono222',
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

];
