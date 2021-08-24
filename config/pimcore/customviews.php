<?php
 return [
    "views" => [
        [
            "id" => 1,
            "treetype" => "object",
            "name" => "Bikes",
            "condition" => NULL,
            "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/about.svg",
            "rootfolder" => "/Produtos/Bicicletas",
            "showroot" => false,
            "classes" => [
                "CAR" => NULL
            ],
            "position" => "left",
            "sort" => 1,
            "expanded" => true,
            "treeContextMenu" => [
                "object" => [
                    "items" => [
                        "add" => true,
                        "addFolder" => true,
                        "importCsv" => true,
                        "cut" => true,
                        "copy" => true,
                        "paste" => true,
                        "delete" => true,
                        "rename" => true,
                        "reload" => true,
                        "publish" => true,
                        "unpublish" => true,
                        "searchAndMove" => true,
                        "lock" => true,
                        "unlock" => true,
                        "lockAndPropagate" => true,
                        "unlockAndPropagate" => true,
                        "changeChildrenSortBy" => true
                    ]
                ]
            ]
        ],
        [
            "id" => 2,
            "treetype" => "object",
            "name" => "Acessórios",
            "condition" => NULL,
            "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/pimcore-main-icon-product.svg",
            "rootfolder" => "/Produtos/Acessórios",
            "showroot" => false,
            "classes" => [
                "AP" => NULL
            ],
            "position" => "left",
            "sort" => 2,
            "expanded" => true,
            "treeContextMenu" => [
                "object" => [
                    "items" => [
                        "add" => true,
                        "addFolder" => true,
                        "importCsv" => true,
                        "cut" => true,
                        "copy" => true,
                        "paste" => true,
                        "delete" => true,
                        "rename" => true,
                        "reload" => true,
                        "publish" => true,
                        "unpublish" => true,
                        "searchAndMove" => true,
                        "lock" => true,
                        "unlock" => true,
                        "lockAndPropagate" => true,
                        "unlockAndPropagate" => true,
                        "changeChildrenSortBy" => true
                    ]
                ]
            ]
        ],
        [
            "id" => 3,
            "treetype" => "object",
            "name" => "Orders",
            "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/pimcore-main-icon-cart.svg",
            "showroot" => false,
            "rootfolder" => "/Shop/Orders",
            "classes" => [
                "" => NULL
            ],
            "position" => "left",
            "sort" => "10",
            "expanded" => true,
            "treeContextMenu" => [
                "object" => [
                    "items" => [
                        "add" => true,
                        "addFolder" => true,
                        "importCsv" => true,
                        "cut" => true,
                        "copy" => true,
                        "paste" => true,
                        "delete" => true,
                        "rename" => true,
                        "reload" => true,
                        "publish" => true,
                        "unpublish" => true,
                        "searchAndMove" => true,
                        "lock" => true,
                        "unlock" => true,
                        "lockAndPropagate" => true,
                        "unlockAndPropagate" => true,
                        "changeChildrenSortBy" => true
                    ]
                ]
            ]
        ],
        [
            "id" => 4,
            "treetype" => "object",
            "name" => "Categorias",
            "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/pimcore-main-icon-category.svg",
            "showroot" => false,
            "rootfolder" => "/Produtos/Categorias",
            "classes" => [
                "CA" => NULL
            ],
            "position" => "left",
            "sort" => "5",
            "expanded" => true,
            "treeContextMenu" => [
                "object" => [
                    "items" => [
                        "add" => true,
                        "addFolder" => true,
                        "importCsv" => true,
                        "cut" => true,
                        "copy" => true,
                        "paste" => true,
                        "delete" => true,
                        "rename" => true,
                        "reload" => true,
                        "publish" => true,
                        "unpublish" => true,
                        "searchAndMove" => true,
                        "lock" => true,
                        "unlock" => true,
                        "lockAndPropagate" => true,
                        "unlockAndPropagate" => true,
                        "changeChildrenSortBy" => true
                    ]
                ]
            ]
        ],
        [
            "id" => 5,
            "treetype" => "object",
            "name" => "Componentes",
            "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/pimcore-main-icon-setting.svg",
            "showroot" => false,
            "rootfolder" => "/Produtos/Componentes",
            "classes" => [
                "BS" => NULL,
                "MA" => NULL
            ],
            "position" => "left",
            "sort" => 3,
            "expanded" => true,
            "where" => "",
            "treeContextMenu" => [
                "object" => [
                    "items" => [
                        "add" => true,
                        "addFolder" => true,
                        "importCsv" => true,
                        "cut" => true,
                        "copy" => true,
                        "paste" => true,
                        "delete" => true,
                        "rename" => true,
                        "reload" => true,
                        "publish" => true,
                        "unpublish" => true,
                        "searchAndMove" => true,
                        "lock" => true,
                        "unlock" => true,
                        "lockAndPropagate" => true,
                        "unlockAndPropagate" => true,
                        "changeChildrenSortBy" => true
                    ]
                ]
            ]
        ],
        [
            "id" => 7,
            "treetype" => "object",
            "name" => "Customers",
            "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/businessman.svg",
            "showroot" => false,
            "rootfolder" => "/Customer Management/customers",
            "classes" => [
                "CU" => NULL
            ],
            "position" => "left",
            "sort" => "6",
            "expanded" => true
        ],
        [
            "id" => 8,
            "treetype" => "object",
            "name" => "Customer Segments",
            "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/pie_chart.svg",
            "showroot" => false,
            "rootfolder" => "/Customer Management/segments",
            "classes" => [
                1 => NULL,
                2 => NULL,
                3 => NULL
            ],
            "position" => "left",
            "sort" => "6",
            "expanded" => true,
            "treeContextMenu" => [
                "object" => [
                    "items" => [
                        "add" => true,
                        "addFolder" => true,
                        "importCsv" => true,
                        "cut" => true,
                        "copy" => true,
                        "paste" => true,
                        "delete" => true,
                        "rename" => true,
                        "reload" => true,
                        "publish" => true,
                        "unpublish" => true,
                        "searchAndMove" => true,
                        "lock" => true,
                        "unlock" => true,
                        "lockAndPropagate" => true,
                        "unlockAndPropagate" => true,
                        "changeChildrenSortBy" => true
                    ]
                ]
            ]
        ],
        [
            "id" => 6,
            "treetype" => "document",
            "name" => "Catalogos",
            "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/pimcore-main-icon-print.svg",
            "showroot" => false,
            "rootfolder" => "/print",
            "position" => "left",
            "sort" => "5",
            "expanded" => false,
            "treeContextMenu" => [
                "document" => [
                    "items" => [
                        "add" => true,
                        "addSnippet" => true,
                        "addLink" => true,
                        "addEmail" => true,
                        "addNewsletter" => true,
                        "addHardlink" => true,
                        "addFolder" => true,
                        "addPrintPage" => true,
                        "paste" => true,
                        "pasteCut" => true,
                        "copy" => true,
                        "cut" => true,
                        "rename" => true,
                        "unpublish" => true,
                        "publish" => true,
                        "delete" => true,
                        "open" => true,
                        "convert" => true,
                        "searchAndMove" => true,
                        "useAsSite" => true,
                        "editSite" => true,
                        "removeSite" => true,
                        "lock" => true,
                        "unlock" => true,
                        "lockAndPropagate" => true,
                        "unlockAndPropagate" => true,
                        "reload" => true
                    ]
                ]
            ]
        ],
        [
            "id" => "f27ddde5-cd3f-62c2-31f4-fc8506802ef4",
            "name" => "Vesturarios",
            "treetype" => "object",
            "position" => "left",
            "rootfolder" => "/Produtos/Vestuario",
            "showroot" => false,
            "sort" => 4,
            "treeContextMenu" => [
                "object" => [
                    "items" => [
                        "add" => true,
                        "addFolder" => true,
                        "importCsv" => true,
                        "cut" => true,
                        "copy" => true,
                        "paste" => true,
                        "delete" => true,
                        "rename" => true,
                        "reload" => true,
                        "publish" => true,
                        "unpublish" => true,
                        "searchAndMove" => true,
                        "lock" => true,
                        "unlock" => true,
                        "lockAndPropagate" => true,
                        "unlockAndPropagate" => true,
                        "changeChildrenSortBy" => true
                    ]
                ]
            ],
            "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/cloth.svg"
        ]
    ]
];