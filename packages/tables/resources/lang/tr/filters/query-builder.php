<?php


return [

    'label' => 'Sorgu oluşturma sihirbazı',

    'form' => [

        'operator' => [
            'label' => 'Operatör',
        ],

        'or_groups' => [

            'label' => 'Gruplar',

            'block' => [
                'label' => '(VEYA)',
                'or' => 'VEYA',
            ],

        ],

        'rules' => [

            'label' => 'Kurallar',

            'item' => [
                'and' => 'VE',
            ],

        ],

    ],

    'no_rules' => '(Kural yok)',

    'item_separators' => [
        'and' => 'VE',
        'or' => 'VEYA',
    ],

    'operators' => [

        'is_filled' => [

            'label' => [
                'direct' => 'Doluysa',
                'inverse' => 'Boşsa',
            ],

            'summary' => [
                'direct' => ':attribute doluysa',
                'inverse' => ':attribute boşsa',
            ],

        ],

        'boolean' => [

            'is_true' => [

                'label' => [
                    'direct' => 'Doğru',
                    'inverse' => 'Yanlış',
                ],

                'summary' => [
                    'direct' => ':attribute doğru',
                    'inverse' => ':attribute yanlış',
                ],

            ],

        ],

        'date' => [

            'is_after' => [

                'label' => [
                    'direct' => 'Sonra veya aynı',
                    'inverse' => 'Önce',
                ],

                'summary' => [
                    'direct' => ':attribute :date sonradır veya aynıdır',
                    'inverse' => ':attribute :date öncesindedir',
                ],

            ],

            'is_before' => [

                'label' => [
                    'direct' => 'Önce veya aynı',
                    'inverse' => 'Sonra',
                ],

                'summary' => [
                    'direct' => ':attribute :date öncesinde veya aynıdır',
                    'inverse' => ':attribute :date sonradır',
                ],

            ],

            'is_date' => [

                'label' => [
                    'direct' => 'Aynıdır',
                    'inverse' => 'Farklıdır',
                ],

                'summary' => [
                    'direct' => ':attribute ile :date aynıdır',
                    'inverse' => ':attribute ile :date farklıdır',
                ],

            ],

            'is_month' => [

                'label' => [
                    'direct' => 'Aynı ay',
                    'inverse' => 'Farklı ay',
                ],

                'summary' => [
                    'direct' => ':attribute ayı ile :month ayı aynıdır',
                    'inverse' => ':attribute ayı ile :month ayı farklıdır',
                ],

            ],

            'is_year' => [

                'label' => [
                    'direct' => 'Yıl aynıdır',
                    'inverse' => 'Ay aynıdır',
                ],

                'summary' => [
                    'direct' => ':attribute yılı ile :year aynıdır',
                    'inverse' => ':attribute yılı ile :year yılı farklıdır',
                ],

            ],

            'form' => [

                'date' => [
                    'label' => 'Tarih',
                ],

                'month' => [
                    'label' => 'Ay',
                ],

                'year' => [
                    'label' => 'Yıl',
                ],

            ],

        ],

        'number' => [

            'equals' => [

                'label' => [
                    'direct' => 'Eşittir',
                    'inverse' => 'Eşit değildir',
                ],

                'summary' => [
                    'direct' => ':attribute ile :number eşittir',
                    'inverse' => ':attribute ile :number eşit değildir',
                ],

            ],

            'is_max' => [

                'label' => [
                    'direct' => 'Maksimum',
                    'inverse' => 'Fazlaysa',
                ],

                'summary' => [
                    'direct' => ':attribute maksimum :number olmalıdır',
                    'inverse' => ':attribute :number sayısından büyük olmalıdır',
                ],

            ],

            'is_min' => [

                'label' => [
                    'direct' => 'Minimum',
                    'inverse' => 'Küçüktür',
                ],

                'summary' => [
                    'direct' => ':attribute minimum :number olmalıdır',
                    'inverse' => ':attribute :number sayısından küçük olmalıdır',
                ],

            ],

            'aggregates' => [

                'average' => [
                    'label' => 'Ortama',
                    'summary' => ':attribute ortalaması',
                ],

                'max' => [
                    'label' => 'Maksimum',
                    'summary' => ':attribute maksimumu',
                ],

                'min' => [
                    'label' => 'Minimum',
                    'summary' => ':attribute minimumu',
                ],

                'sum' => [
                    'label' => 'Toplam',
                    'summary' => ':attribute toplamı',
                ],

            ],

            'form' => [

                'aggregate' => [
                    'label' => 'Bütün',
                ],

                'number' => [
                    'label' => 'Numara',
                ],

            ],

        ],

        'relationship' => [

            'equals' => [

                'label' => [
                    'direct' => 'Adet varsa',
                    'inverse' => 'Adet yoksa',
                ],

                'summary' => [
                    'direct' => ':count adet :relationship varsa',
                    'inverse' => ':count adet :relationship yoksa',
                ],

            ],

            'has_max' => [

                'label' => [
                    'direct' => 'En fazla',
                    'inverse' => 'Fazlasına sahip ise',
                ],

                'summary' => [
                    'direct' => 'En fazla :count :relationship varsa',
                    'inverse' => ':count ve daha fazla :relationship varsa',
                ],

            ],

            'has_min' => [

                'label' => [
                    'direct' => 'En az',
                    'inverse' => 'Azına sahip',
                ],

                'summary' => [
                    'direct' => 'En az :count :relationship varsa',
                    'inverse' => ':count veya daha az :relationship varsa',
                ],

            ],

            'is_empty' => [

                'label' => [
                    'direct' => 'Boştur',
                    'inverse' => 'Doludur',
                ],

                'summary' => [
                    'direct' => ':relationship boştur',
                    'inverse' => ':relationship doludur',
                ],

            ],

            'is_related_to' => [

                'label' => [

                    'single' => [
                        'direct' => 'Aynıdır',
                        'inverse' => 'Farklıdır',
                    ],

                    'multiple' => [
                        'direct' => 'İçerir',
                        'inverse' => 'İçermez',
                    ],

                ],

                'summary' => [

                    'single' => [
                        'direct' => ':relationship ile :values aynıdır',
                        'inverse' => ':relationship ile :values farklıdır',
                    ],

                    'multiple' => [
                        'direct' => ':relationship :values içerir',
                        'inverse' => ':relationship :values içermez',
                    ],

                    'values_glue' => [
                        0 => ', ',
                        'final' => ' veya ',
                    ],

                ],

                'form' => [

                    'value' => [
                        'label' => 'Değer',
                    ],

                    'values' => [
                        'label' => 'Değerler',
                    ],

                ],

            ],

            'form' => [

                'count' => [
                    'label' => 'Adet',
                ],

            ],

        ],

        'select' => [

            'is' => [

                'label' => [
                    'direct' => 'Aynıdır',
                    'inverse' => 'Farklıdır',
                ],

                'summary' => [
                    'direct' => ':attribute ile :values aynıdır',
                    'inverse' => ':attribute ile :values farklıdır',
                    'values_glue' => [
                        ', ',
                        'final' => ' or ',
                    ],
                ],

                'form' => [

                    'value' => [
                        'label' => 'Değer',
                    ],

                    'values' => [
                        'label' => 'Değerler',
                    ],

                ],

            ],

        ],

        'text' => [

            'contains' => [

                'label' => [
                    'direct' => 'İçerir',
                    'inverse' => 'İçermez',
                ],

                'summary' => [
                    'direct' => ':attribute :text içerir',
                    'inverse' => ':attribute :text içermez',
                ],

            ],

            'ends_with' => [

                'label' => [
                    'direct' => 'İle biter',
                    'inverse' => 'İle bitmez',
                ],

                'summary' => [
                    'direct' => ':attribute :text ile biter',
                    'inverse' => ':attribute :text ile bitmez',
                ],

            ],

            'equals' => [

                'label' => [
                    'direct' => 'Aynıdır',
                    'inverse' => 'Farklıdır',
                ],

                'summary' => [
                    'direct' => ':attribute ile :text aynıdır',
                    'inverse' => ':attribute ile :text farklıdır',
                ],

            ],

            'starts_with' => [

                'label' => [
                    'direct' => 'İle başlar',
                    'inverse' => 'İle başlamaz',
                ],

                'summary' => [
                    'direct' => ':attribute :text ile başlar',
                    'inverse' => ':attribute :text ile başlamaz',
                ],

            ],

            'form' => [

                'text' => [
                    'label' => 'Yazı',
                ],

            ],

        ],

    ],

    'actions' => [

        'add_rule' => [
            'label' => 'Kural ekle',
        ],

        'add_rule_group' => [
            'label' => 'Kural grubu ekle',
        ],

    ],

];
