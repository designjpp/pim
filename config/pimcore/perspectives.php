<?php
 return [
    "default" => [
        "elementTree" => [
            [
                "type" => "documents",
                "position" => "left",
                "expanded" => false,
                "hidden" => false,
                "sort" => 0
            ],
            [
                "type" => "assets",
                "position" => "left",
                "expanded" => false,
                "hidden" => false,
                "sort" => 1
            ],
            [
                "type" => "objects",
                "position" => "left",
                "expanded" => false,
                "hidden" => false,
                "sort" => 2
            ]
        ],
        "iconCls" => "pimcore_nav_icon_perspective",
        "icon" => NULL,
        "dashboards" => [
            "predefined" => [
                "welcome" => [
                    "positions" => [
                        [
                            [
                                "id" => 1,
                                "type" => "pimcore.layout.portlets.modificationStatistic",
                                "config" => NULL
                            ],
                            [
                                "id" => 2,
                                "type" => "pimcore.layout.portlets.modifiedAssets",
                                "config" => NULL
                            ]
                        ],
                        [
                            [
                                "id" => 3,
                                "type" => "pimcore.layout.portlets.modifiedObjects",
                                "config" => NULL
                            ],
                            [
                                "id" => 4,
                                "type" => "pimcore.layout.portlets.modifiedDocuments",
                                "config" => NULL
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ],
    "PIM" => [
        "elementTree" => [
            [
                "type" => "customview",
                "id" => 1,
                "hidden" => false,
                "position" => "left",
                "sort" => 0,
                "treeContextMenu" => [

                ]
            ],
            [
                "type" => "customview",
                "id" => 2,
                "hidden" => false,
                "position" => "left",
                "sort" => 1,
                "treeContextMenu" => [

                ]
            ],
            [
                "type" => "documents",
                "position" => "left",
                "expanded" => false,
                "hidden" => true,
                "sort" => 2,
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
                "type" => "objects",
                "position" => "left",
                "expanded" => false,
                "hidden" => true,
                "sort" => 3,
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
                "type" => "customview",
                "id" => 4,
                "hidden" => false,
                "position" => "left",
                "sort" => 4,
                "treeContextMenu" => [

                ]
            ],
            [
                "type" => "customview",
                "id" => 5,
                "hidden" => false,
                "position" => "left",
                "sort" => 5,
                "treeContextMenu" => [

                ]
            ],
            [
                "type" => "assets",
                "position" => "left",
                "expanded" => false,
                "hidden" => false,
                "sort" => 6
            ]
        ],
        "iconCls" => "pimcore_nav_icon_object",
        "icon" => NULL,
        "toolbar" => [
            "file" => [
                "hidden" => false,
                "items" => [
                    "perspectives" => true,
                    "dashboards" => true,
                    "openDocument" => true,
                    "openAsset" => true,
                    "openObject" => true,
                    "searchReplace" => true,
                    "schedule" => true,
                    "seemode" => true,
                    "closeAll" => true,
                    "help" => true,
                    "about" => true
                ]
            ],
            "extras" => [
                "hidden" => true,
                "items" => [
                    "glossary" => true,
                    "redirects" => true,
                    "translations" => true,
                    "recyclebin" => true,
                    "plugins" => true,
                    "notesEvents" => true,
                    "applicationlog" => true,
                    "gdpr_data_extractor" => true,
                    "emails" => true,
                    "maintenance" => true,
                    "systemtools" => [
                        "hidden" => false,
                        "items" => [
                            "phpinfo" => true,
                            "opcache" => true,
                            "requirements" => true,
                            "serverinfo" => true,
                            "database" => true,
                            "fileexplorer" => true
                        ]
                    ]
                ]
            ],
            "marketing" => [
                "hidden" => true,
                "items" => [
                    "reports" => true,
                    "tagmanagement" => true,
                    "targeting" => true,
                    "seo" => [
                        "hidden" => false,
                        "items" => [
                            "documents" => true,
                            "robots" => true,
                            "httperrors" => true
                        ]
                    ]
                ]
            ],
            "settings" => [
                "items" => [
                    "documentTypes" => false,
                    "predefinedProperties" => false,
                    "predefinedMetadata" => false,
                    "system" => false,
                    "routes" => false,
                    "thumbnails" => false,
                    "adminTranslations" => false,
                    "website" => false,
                    "users" => [
                        "hidden" => true,
                        "items" => [
                            "users" => true,
                            "roles" => true
                        ]
                    ],
                    "cache" => [
                        "hidden" => true,
                        "items" => [
                            "clearAll" => true,
                            "clearData" => true,
                            "clearSymfony" => true,
                            "clearOutput" => true,
                            "clearTemp" => true
                        ]
                    ],
                    "customReports" => true,
                    "marketingReports" => true,
                    "web2print" => true,
                    "objects" => [
                        "hidden" => false,
                        "items" => [
                            "classes" => true,
                            "fieldcollections" => true,
                            "objectbricks" => true,
                            "quantityValue" => true,
                            "classificationstore" => true,
                            "bulkExport" => true,
                            "bulkImport" => true
                        ]
                    ],
                    "tagConfiguration" => true,
                    "perspectiveEditor" => true
                ],
                "hidden" => false
            ],
            "search" => [
                "items" => [
                    "documents" => false,
                    "esBackendSearch" => false,
                    "quickSearch" => true,
                    "assets" => true,
                    "objects" => true
                ],
                "hidden" => false
            ],
            "ecommerce" => false
        ]
    ],
    "DAM" => [
        "elementTree" => [
            [
                "type" => "documents",
                "position" => "left",
                "expanded" => false,
                "hidden" => true,
                "sort" => 0
            ],
            [
                "type" => "assets",
                "position" => "left",
                "expanded" => false,
                "hidden" => false,
                "sort" => 1
            ],
            [
                "type" => "objects",
                "position" => "left",
                "expanded" => false,
                "hidden" => true,
                "sort" => 2
            ],
            [
                "type" => "customview",
                "name" => "Products",
                "hidden" => "true",
                "sort" => 3,
                "position" => "left"
            ],
            [
                "type" => "customview",
                "name" => "Orders",
                "hidden" => "true",
                "sort" => 4,
                "position" => "left"
            ]
        ],
        "iconCls" => "pimcore_nav_icon_asset",
        "icon" => NULL,
        "toolbar" => [
            "file" => 1,
            "extras" => [
                "hidden" => true
            ],
            "marketing" => [
                "hidden" => true
            ],
            "settings" => [
                "items" => [
                    "documentTypes" => false,
                    "predefinedProperties" => false,
                    "system" => false,
                    "routes" => false,
                    "adminTranslations" => false,
                    "website" => false,
                    "users" => false,
                    "objects" => false,
                    "cache" => false
                ]
            ],
            "search" => [
                "items" => [
                    "objects" => false,
                    "documents" => false,
                    "esBackendSearch" => false
                ]
            ],
            "ecommerce" => false
        ]
    ],
    "CMS" => [
        "elementTree" => [
            [
                "type" => "documents",
                "position" => "left",
                "expanded" => false,
                "hidden" => false,
                "sort" => 0,
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
                "type" => "customview",
                "name" => "Products",
                "hidden" => "true",
                "sort" => 1,
                "position" => "left",
                "treeContextMenu" => [

                ],
                "id" => 1
            ],
            [
                "type" => "customview",
                "name" => "Orders",
                "hidden" => "true",
                "sort" => 2,
                "position" => "left",
                "treeContextMenu" => [

                ],
                "id" => 4
            ],
            [
                "type" => "assets",
                "position" => "right",
                "expanded" => false,
                "hidden" => false,
                "sort" => 0,
                "treeContextMenu" => [
                    "asset" => [
                        "items" => [
                            "add" => [
                                "hidden" => false,
                                "items" => [
                                    "upload" => true,
                                    "uploadCompatibility" => true,
                                    "uploadZip" => true,
                                    "importFromServer" => true,
                                    "uploadFromUrl" => true
                                ]
                            ],
                            "addFolder" => true,
                            "rename" => true,
                            "copy" => true,
                            "cut" => true,
                            "paste" => true,
                            "pasteCut" => true,
                            "delete" => true,
                            "searchAndMove" => true,
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
                "type" => "objects",
                "position" => "right",
                "expanded" => false,
                "hidden" => false,
                "sort" => 1,
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
            ]
        ],
        "iconCls" => "pimcore_nav_icon_document",
        "icon" => NULL
    ],
    "Commerce" => [
        "elementTree" => [
            [
                "type" => "customview",
                "id" => 3,
                "position" => "left",
                "expanded" => true,
                "hidden" => false,
                "sort" => 0
            ],
            [
                "type" => "objects",
                "position" => "left",
                "expanded" => false,
                "hidden" => false,
                "sort" => 1
            ],
            [
                "type" => "customview",
                "id" => 7,
                "position" => "right",
                "expanded" => true,
                "hidden" => false,
                "sort" => 0
            ],
            [
                "type" => "customview",
                "id" => 8,
                "position" => "right",
                "expanded" => false,
                "hidden" => false,
                "sort" => 1
            ],
            [
                "type" => "assets",
                "position" => "right",
                "expanded" => false,
                "hidden" => false,
                "sort" => 2
            ],
            [
                "type" => "documents",
                "position" => "right",
                "expanded" => false,
                "hidden" => false,
                "sort" => 3
            ]
        ],
        "iconCls" => NULL,
        "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/shopping-cart.svg",
        "toolbar" => [
            "file" => true,
            "extras" => false,
            "marketing" => false,
            "settings" => false,
            "search" => true,
            "ecommerce" => true
        ]
    ],
    "Catalog" => [
        "elementTree" => [
            [
                "type" => "customview",
                "id" => 6,
                "position" => "left",
                "expanded" => false,
                "hidden" => false,
                "sort" => 0,
                "treeContextMenu" => [

                ]
            ],
            [
                "type" => "assets",
                "position" => "right",
                "expanded" => false,
                "hidden" => false,
                "sort" => 0
            ],
            [
                "type" => "customview",
                "id" => 1,
                "position" => "right",
                "expanded" => false,
                "hidden" => false,
                "sort" => 1,
                "treeContextMenu" => [

                ]
            ]
        ],
        "iconCls" => NULL,
        "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/book.svg",
        "toolbar" => [
            "file" => true,
            "extras" => false,
            "marketing" => false,
            "settings" => false,
            "search" => true,
            "ecommerce" => false
        ]
    ],
    "CDP" => [
        "elementTree" => [
            [
                "type" => "customview",
                "position" => "left",
                "sort" => 0,
                "treeContextMenu" => [

                ],
                "id" => 7
            ],
            [
                "type" => "customview",
                "position" => "right",
                "sort" => 0,
                "treeContextMenu" => [

                ],
                "id" => 8
            ],
            [
                "type" => "customview",
                "position" => "right",
                "sort" => 1,
                "treeContextMenu" => [

                ],
                "id" => 3
            ]
        ],
        "iconCls" => NULL,
        "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/conference_call.svg",
        "toolbar" => [
            "file" => [
                "hidden" => false,
                "items" => [
                    "perspectives" => true,
                    "dashboards" => true,
                    "openDocument" => false,
                    "openAsset" => false,
                    "openObject" => true,
                    "searchReplace" => true,
                    "schedule" => true,
                    "seemode" => false,
                    "closeAll" => true,
                    "help" => true,
                    "about" => true
                ]
            ],
            "marketing" => [
                "hidden" => true,
                "items" => [
                    "reports" => true,
                    "tagmanagement" => true,
                    "targeting" => true,
                    "seo" => [
                        "hidden" => false,
                        "items" => [
                            "documents" => true,
                            "robots" => true,
                            "httperrors" => true
                        ]
                    ]
                ]
            ],
            "extras" => [
                "hidden" => true,
                "items" => [
                    "glossary" => false,
                    "redirects" => false,
                    "translations" => true,
                    "recyclebin" => false,
                    "plugins" => false,
                    "notesEvents" => false,
                    "applicationlog" => false,
                    "gdpr_data_extractor" => false,
                    "emails" => false,
                    "maintenance" => false,
                    "systemtools" => [
                        "hidden" => false,
                        "items" => [
                            "phpinfo" => true,
                            "opcache" => true,
                            "requirements" => true,
                            "serverinfo" => true,
                            "database" => true,
                            "fileexplorer" => true
                        ]
                    ]
                ]
            ],
            "settings" => [
                "hidden" => true,
                "items" => [
                    "customReports" => true,
                    "marketingReports" => true,
                    "documentTypes" => true,
                    "predefinedProperties" => true,
                    "predefinedMetadata" => true,
                    "system" => true,
                    "website" => true,
                    "web2print" => true,
                    "users" => [
                        "hidden" => false,
                        "items" => [
                            "users" => true,
                            "roles" => true
                        ]
                    ],
                    "thumbnails" => true,
                    "objects" => [
                        "hidden" => false,
                        "items" => [
                            "classes" => true,
                            "fieldcollections" => true,
                            "objectbricks" => true,
                            "quantityValue" => true,
                            "classificationstore" => true,
                            "bulkExport" => true,
                            "bulkImport" => true
                        ]
                    ],
                    "routes" => true,
                    "cache" => [
                        "hidden" => false,
                        "items" => [
                            "clearAll" => true,
                            "clearData" => true,
                            "clearSymfony" => true,
                            "clearOutput" => true,
                            "clearTemp" => true
                        ]
                    ],
                    "adminTranslations" => true,
                    "tagConfiguration" => true,
                    "perspectiveEditor" => true
                ]
            ],
            "search" => [
                "hidden" => false,
                "items" => [
                    "quickSearch" => true,
                    "documents" => false,
                    "assets" => false,
                    "objects" => true,
                    "advancedObjectSearch" => true
                ]
            ]
        ]
    ]
];