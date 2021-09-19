<?php

return [
    "folders" => [

    ],
    "list" => [
        "products" => [
            "general" => [
                "active" => TRUE,
                "type" => "graphql",
                "name" => "products",
                "description" => "Product related data like Cars, AccessoryParts, Categories etc.",
                "sqlObjectCondition" => "",
                "path" => NULL
            ],
            "schema" => [
                "queryEntities" => [
                    "Car" => [
                        "id" => "Car",
                        "name" => "Car",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "name",
                                        "label" => "Name",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "name",
                                            "title" => "Name",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "description",
                                        "label" => "Description",
                                        "dataType" => "wysiwyg",
                                        "layout" => [
                                            "fieldtype" => "wysiwyg",
                                            "width" => "",
                                            "height" => "",
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "phpdocType" => "string",
                                            "toolbarConfig" => "",
                                            "excludeFromSearchIndex" => FALSE,
                                            "name" => "description",
                                            "title" => "Description",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "categories",
                                        "label" => "Categories",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "phpdocType" => "array",
                                            "relationType" => TRUE,
                                            "visibleFields" => "id,name,fullpath",
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "Category"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "categories",
                                            "title" => "Categories",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "manufacturer",
                                        "label" => "Manufacturer",
                                        "dataType" => "manyToOneRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToOneRelation",
                                            "width" => 400,
                                            "assetUploadPath" => "",
                                            "relationType" => TRUE,
                                            "queryColumnType" => [
                                                "id" => "int(11)",
                                                "type" => "enum('document','asset','object')"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject",
                                            "objectsAllowed" => TRUE,
                                            "assetsAllowed" => FALSE,
                                            "assetTypes" => [

                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "Manufacturer"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "manufacturer",
                                            "title" => "Manufacturer",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "bodyStyle",
                                        "label" => "Body Style",
                                        "dataType" => "manyToOneRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToOneRelation",
                                            "width" => 400,
                                            "assetUploadPath" => "",
                                            "relationType" => TRUE,
                                            "queryColumnType" => [
                                                "id" => "int(11)",
                                                "type" => "enum('document','asset','object')"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject",
                                            "objectsAllowed" => TRUE,
                                            "assetsAllowed" => FALSE,
                                            "assetTypes" => [

                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "BodyStyle"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "bodyStyle",
                                            "title" => "Body Style",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "carClass",
                                        "label" => "Class",
                                        "dataType" => "select",
                                        "layout" => [
                                            "fieldtype" => "select",
                                            "options" => [
                                                [
                                                    "key" => "Full-size luxury car",
                                                    "value" => "Full-size luxury car"
                                                ],
                                                [
                                                    "key" => "Grand tourer",
                                                    "value" => "Grand tourer"
                                                ],
                                                [
                                                    "key" => "Light commercial vehicle",
                                                    "value" => "Light commercial vehicle"
                                                ],
                                                [
                                                    "key" => "Muscle Car",
                                                    "value" => "Muscle Car"
                                                ],
                                                [
                                                    "key" => "City Car",
                                                    "value" => "City Car"
                                                ],
                                                [
                                                    "key" => "Executive car",
                                                    "value" => "Executive car"
                                                ],
                                                [
                                                    "key" => "Economy car",
                                                    "value" => "Economy car"
                                                ],
                                                [
                                                    "key" => "Personal luxury car",
                                                    "value" => "Personal luxury car"
                                                ],
                                                [
                                                    "key" => "Full-Size",
                                                    "value" => "Full-Size"
                                                ],
                                                [
                                                    "key" => "Family car",
                                                    "value" => "Family car"
                                                ],
                                                [
                                                    "key" => "Mid-size luxury",
                                                    "value" => "Mid-size luxury"
                                                ],
                                                [
                                                    "key" => "sports car",
                                                    "value" => "sports car"
                                                ]
                                            ],
                                            "width" => 300,
                                            "defaultValue" => "",
                                            "optionsProviderClass" => "",
                                            "optionsProviderData" => "",
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "dynamicOptions" => FALSE,
                                            "name" => "carClass",
                                            "title" => "Class",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "color",
                                        "label" => "Color",
                                        "dataType" => "multiselect",
                                        "layout" => [
                                            "fieldtype" => "multiselect",
                                            "options" => [
                                                [
                                                    "key" => "grey",
                                                    "value" => "grey"
                                                ],
                                                [
                                                    "key" => "beige",
                                                    "value" => "beige"
                                                ],
                                                [
                                                    "key" => "silver",
                                                    "value" => "silver"
                                                ],
                                                [
                                                    "key" => "brown",
                                                    "value" => "brown"
                                                ],
                                                [
                                                    "key" => "orange",
                                                    "value" => "orange"
                                                ],
                                                [
                                                    "key" => "yellow",
                                                    "value" => "yellow"
                                                ],
                                                [
                                                    "key" => "blue",
                                                    "value" => "blue"
                                                ],
                                                [
                                                    "key" => "black",
                                                    "value" => "black"
                                                ],
                                                [
                                                    "key" => "green",
                                                    "value" => "green"
                                                ],
                                                [
                                                    "key" => "red",
                                                    "value" => "red"
                                                ],
                                                [
                                                    "key" => "white",
                                                    "value" => "white"
                                                ]
                                            ],
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "renderType" => "list",
                                            "optionsProviderClass" => "",
                                            "optionsProviderData" => "",
                                            "queryColumnType" => "text",
                                            "columnType" => "text",
                                            "phpdocType" => "array",
                                            "dynamicOptions" => FALSE,
                                            "name" => "color",
                                            "title" => "Color",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "country",
                                        "label" => "Country",
                                        "dataType" => "country",
                                        "layout" => [
                                            "fieldtype" => "country",
                                            "restrictTo" => "",
                                            "options" => [
                                                [
                                                    "key" => "Afghanistan",
                                                    "value" => "AF"
                                                ],
                                                [
                                                    "key" => "Albania",
                                                    "value" => "AL"
                                                ],
                                                [
                                                    "key" => "Algeria",
                                                    "value" => "DZ"
                                                ],
                                                [
                                                    "key" => "American Samoa",
                                                    "value" => "AS"
                                                ],
                                                [
                                                    "key" => "Andorra",
                                                    "value" => "AD"
                                                ],
                                                [
                                                    "key" => "Angola",
                                                    "value" => "AO"
                                                ],
                                                [
                                                    "key" => "Anguilla",
                                                    "value" => "AI"
                                                ],
                                                [
                                                    "key" => "Antarctica",
                                                    "value" => "AQ"
                                                ],
                                                [
                                                    "key" => "Antigua & Barbuda",
                                                    "value" => "AG"
                                                ],
                                                [
                                                    "key" => "Argentina",
                                                    "value" => "AR"
                                                ],
                                                [
                                                    "key" => "Armenia",
                                                    "value" => "AM"
                                                ],
                                                [
                                                    "key" => "Aruba",
                                                    "value" => "AW"
                                                ],
                                                [
                                                    "key" => "Ascension Island",
                                                    "value" => "AC"
                                                ],
                                                [
                                                    "key" => "Australia",
                                                    "value" => "AU"
                                                ],
                                                [
                                                    "key" => "Austria",
                                                    "value" => "AT"
                                                ],
                                                [
                                                    "key" => "Azerbaijan",
                                                    "value" => "AZ"
                                                ],
                                                [
                                                    "key" => "Bahamas",
                                                    "value" => "BS"
                                                ],
                                                [
                                                    "key" => "Bahrain",
                                                    "value" => "BH"
                                                ],
                                                [
                                                    "key" => "Bangladesh",
                                                    "value" => "BD"
                                                ],
                                                [
                                                    "key" => "Barbados",
                                                    "value" => "BB"
                                                ],
                                                [
                                                    "key" => "Belarus",
                                                    "value" => "BY"
                                                ],
                                                [
                                                    "key" => "Belgium",
                                                    "value" => "BE"
                                                ],
                                                [
                                                    "key" => "Belize",
                                                    "value" => "BZ"
                                                ],
                                                [
                                                    "key" => "Benin",
                                                    "value" => "BJ"
                                                ],
                                                [
                                                    "key" => "Bermuda",
                                                    "value" => "BM"
                                                ],
                                                [
                                                    "key" => "Bhutan",
                                                    "value" => "BT"
                                                ],
                                                [
                                                    "key" => "Bolivia",
                                                    "value" => "BO"
                                                ],
                                                [
                                                    "key" => "Bosnia & Herzegovina",
                                                    "value" => "BA"
                                                ],
                                                [
                                                    "key" => "Botswana",
                                                    "value" => "BW"
                                                ],
                                                [
                                                    "key" => "Brazil",
                                                    "value" => "BR"
                                                ],
                                                [
                                                    "key" => "British Indian Ocean Territory",
                                                    "value" => "IO"
                                                ],
                                                [
                                                    "key" => "British Virgin Islands",
                                                    "value" => "VG"
                                                ],
                                                [
                                                    "key" => "Brunei",
                                                    "value" => "BN"
                                                ],
                                                [
                                                    "key" => "Bulgaria",
                                                    "value" => "BG"
                                                ],
                                                [
                                                    "key" => "Burkina Faso",
                                                    "value" => "BF"
                                                ],
                                                [
                                                    "key" => "Burundi",
                                                    "value" => "BI"
                                                ],
                                                [
                                                    "key" => "Cambodia",
                                                    "value" => "KH"
                                                ],
                                                [
                                                    "key" => "Cameroon",
                                                    "value" => "CM"
                                                ],
                                                [
                                                    "key" => "Canada",
                                                    "value" => "CA"
                                                ],
                                                [
                                                    "key" => "Canary Islands",
                                                    "value" => "IC"
                                                ],
                                                [
                                                    "key" => "Cape Verde",
                                                    "value" => "CV"
                                                ],
                                                [
                                                    "key" => "Caribbean Netherlands",
                                                    "value" => "BQ"
                                                ],
                                                [
                                                    "key" => "Cayman Islands",
                                                    "value" => "KY"
                                                ],
                                                [
                                                    "key" => "Central African Republic",
                                                    "value" => "CF"
                                                ],
                                                [
                                                    "key" => "Ceuta & Melilla",
                                                    "value" => "EA"
                                                ],
                                                [
                                                    "key" => "Chad",
                                                    "value" => "TD"
                                                ],
                                                [
                                                    "key" => "Chile",
                                                    "value" => "CL"
                                                ],
                                                [
                                                    "key" => "China",
                                                    "value" => "CN"
                                                ],
                                                [
                                                    "key" => "Christmas Island",
                                                    "value" => "CX"
                                                ],
                                                [
                                                    "key" => "Cocos (Keeling) Islands",
                                                    "value" => "CC"
                                                ],
                                                [
                                                    "key" => "Colombia",
                                                    "value" => "CO"
                                                ],
                                                [
                                                    "key" => "Comoros",
                                                    "value" => "KM"
                                                ],
                                                [
                                                    "key" => "Congo - Brazzaville",
                                                    "value" => "CG"
                                                ],
                                                [
                                                    "key" => "Congo - Kinshasa",
                                                    "value" => "CD"
                                                ],
                                                [
                                                    "key" => "Cook Islands",
                                                    "value" => "CK"
                                                ],
                                                [
                                                    "key" => "Costa Rica",
                                                    "value" => "CR"
                                                ],
                                                [
                                                    "key" => "Croatia",
                                                    "value" => "HR"
                                                ],
                                                [
                                                    "key" => "Cuba",
                                                    "value" => "CU"
                                                ],
                                                [
                                                    "key" => "Curaçao",
                                                    "value" => "CW"
                                                ],
                                                [
                                                    "key" => "Cyprus",
                                                    "value" => "CY"
                                                ],
                                                [
                                                    "key" => "Czechia",
                                                    "value" => "CZ"
                                                ],
                                                [
                                                    "key" => "Côte d’Ivoire",
                                                    "value" => "CI"
                                                ],
                                                [
                                                    "key" => "Denmark",
                                                    "value" => "DK"
                                                ],
                                                [
                                                    "key" => "Diego Garcia",
                                                    "value" => "DG"
                                                ],
                                                [
                                                    "key" => "Djibouti",
                                                    "value" => "DJ"
                                                ],
                                                [
                                                    "key" => "Dominica",
                                                    "value" => "DM"
                                                ],
                                                [
                                                    "key" => "Dominican Republic",
                                                    "value" => "DO"
                                                ],
                                                [
                                                    "key" => "Ecuador",
                                                    "value" => "EC"
                                                ],
                                                [
                                                    "key" => "Egypt",
                                                    "value" => "EG"
                                                ],
                                                [
                                                    "key" => "El Salvador",
                                                    "value" => "SV"
                                                ],
                                                [
                                                    "key" => "Equatorial Guinea",
                                                    "value" => "GQ"
                                                ],
                                                [
                                                    "key" => "Eritrea",
                                                    "value" => "ER"
                                                ],
                                                [
                                                    "key" => "Estonia",
                                                    "value" => "EE"
                                                ],
                                                [
                                                    "key" => "Ethiopia",
                                                    "value" => "ET"
                                                ],
                                                [
                                                    "key" => "Eurozone",
                                                    "value" => "EZ"
                                                ],
                                                [
                                                    "key" => "Falkland Islands",
                                                    "value" => "FK"
                                                ],
                                                [
                                                    "key" => "Faroe Islands",
                                                    "value" => "FO"
                                                ],
                                                [
                                                    "key" => "Fiji",
                                                    "value" => "FJ"
                                                ],
                                                [
                                                    "key" => "Finland",
                                                    "value" => "FI"
                                                ],
                                                [
                                                    "key" => "France",
                                                    "value" => "FR"
                                                ],
                                                [
                                                    "key" => "French Guiana",
                                                    "value" => "GF"
                                                ],
                                                [
                                                    "key" => "French Polynesia",
                                                    "value" => "PF"
                                                ],
                                                [
                                                    "key" => "French Southern Territories",
                                                    "value" => "TF"
                                                ],
                                                [
                                                    "key" => "Gabon",
                                                    "value" => "GA"
                                                ],
                                                [
                                                    "key" => "Gambia",
                                                    "value" => "GM"
                                                ],
                                                [
                                                    "key" => "Georgia",
                                                    "value" => "GE"
                                                ],
                                                [
                                                    "key" => "Germany",
                                                    "value" => "DE"
                                                ],
                                                [
                                                    "key" => "Ghana",
                                                    "value" => "GH"
                                                ],
                                                [
                                                    "key" => "Gibraltar",
                                                    "value" => "GI"
                                                ],
                                                [
                                                    "key" => "Greece",
                                                    "value" => "GR"
                                                ],
                                                [
                                                    "key" => "Greenland",
                                                    "value" => "GL"
                                                ],
                                                [
                                                    "key" => "Grenada",
                                                    "value" => "GD"
                                                ],
                                                [
                                                    "key" => "Guadeloupe",
                                                    "value" => "GP"
                                                ],
                                                [
                                                    "key" => "Guam",
                                                    "value" => "GU"
                                                ],
                                                [
                                                    "key" => "Guatemala",
                                                    "value" => "GT"
                                                ],
                                                [
                                                    "key" => "Guernsey",
                                                    "value" => "GG"
                                                ],
                                                [
                                                    "key" => "Guinea",
                                                    "value" => "GN"
                                                ],
                                                [
                                                    "key" => "Guinea-Bissau",
                                                    "value" => "GW"
                                                ],
                                                [
                                                    "key" => "Guyana",
                                                    "value" => "GY"
                                                ],
                                                [
                                                    "key" => "Haiti",
                                                    "value" => "HT"
                                                ],
                                                [
                                                    "key" => "Honduras",
                                                    "value" => "HN"
                                                ],
                                                [
                                                    "key" => "Hong Kong SAR China",
                                                    "value" => "HK"
                                                ],
                                                [
                                                    "key" => "Hungary",
                                                    "value" => "HU"
                                                ],
                                                [
                                                    "key" => "Iceland",
                                                    "value" => "IS"
                                                ],
                                                [
                                                    "key" => "India",
                                                    "value" => "IN"
                                                ],
                                                [
                                                    "key" => "Indonesia",
                                                    "value" => "ID"
                                                ],
                                                [
                                                    "key" => "Iran",
                                                    "value" => "IR"
                                                ],
                                                [
                                                    "key" => "Iraq",
                                                    "value" => "IQ"
                                                ],
                                                [
                                                    "key" => "Ireland",
                                                    "value" => "IE"
                                                ],
                                                [
                                                    "key" => "Isle of Man",
                                                    "value" => "IM"
                                                ],
                                                [
                                                    "key" => "Israel",
                                                    "value" => "IL"
                                                ],
                                                [
                                                    "key" => "Italy",
                                                    "value" => "IT"
                                                ],
                                                [
                                                    "key" => "Jamaica",
                                                    "value" => "JM"
                                                ],
                                                [
                                                    "key" => "Japan",
                                                    "value" => "JP"
                                                ],
                                                [
                                                    "key" => "Jersey",
                                                    "value" => "JE"
                                                ],
                                                [
                                                    "key" => "Jordan",
                                                    "value" => "JO"
                                                ],
                                                [
                                                    "key" => "Kazakhstan",
                                                    "value" => "KZ"
                                                ],
                                                [
                                                    "key" => "Kenya",
                                                    "value" => "KE"
                                                ],
                                                [
                                                    "key" => "Kiribati",
                                                    "value" => "KI"
                                                ],
                                                [
                                                    "key" => "Kosovo",
                                                    "value" => "XK"
                                                ],
                                                [
                                                    "key" => "Kuwait",
                                                    "value" => "KW"
                                                ],
                                                [
                                                    "key" => "Kyrgyzstan",
                                                    "value" => "KG"
                                                ],
                                                [
                                                    "key" => "Laos",
                                                    "value" => "LA"
                                                ],
                                                [
                                                    "key" => "Latvia",
                                                    "value" => "LV"
                                                ],
                                                [
                                                    "key" => "Lebanon",
                                                    "value" => "LB"
                                                ],
                                                [
                                                    "key" => "Lesotho",
                                                    "value" => "LS"
                                                ],
                                                [
                                                    "key" => "Liberia",
                                                    "value" => "LR"
                                                ],
                                                [
                                                    "key" => "Libya",
                                                    "value" => "LY"
                                                ],
                                                [
                                                    "key" => "Liechtenstein",
                                                    "value" => "LI"
                                                ],
                                                [
                                                    "key" => "Lithuania",
                                                    "value" => "LT"
                                                ],
                                                [
                                                    "key" => "Luxembourg",
                                                    "value" => "LU"
                                                ],
                                                [
                                                    "key" => "Macau SAR China",
                                                    "value" => "MO"
                                                ],
                                                [
                                                    "key" => "Macedonia",
                                                    "value" => "MK"
                                                ],
                                                [
                                                    "key" => "Madagascar",
                                                    "value" => "MG"
                                                ],
                                                [
                                                    "key" => "Malawi",
                                                    "value" => "MW"
                                                ],
                                                [
                                                    "key" => "Malaysia",
                                                    "value" => "MY"
                                                ],
                                                [
                                                    "key" => "Maldives",
                                                    "value" => "MV"
                                                ],
                                                [
                                                    "key" => "Mali",
                                                    "value" => "ML"
                                                ],
                                                [
                                                    "key" => "Malta",
                                                    "value" => "MT"
                                                ],
                                                [
                                                    "key" => "Marshall Islands",
                                                    "value" => "MH"
                                                ],
                                                [
                                                    "key" => "Martinique",
                                                    "value" => "MQ"
                                                ],
                                                [
                                                    "key" => "Mauritania",
                                                    "value" => "MR"
                                                ],
                                                [
                                                    "key" => "Mauritius",
                                                    "value" => "MU"
                                                ],
                                                [
                                                    "key" => "Mayotte",
                                                    "value" => "YT"
                                                ],
                                                [
                                                    "key" => "Mexico",
                                                    "value" => "MX"
                                                ],
                                                [
                                                    "key" => "Micronesia",
                                                    "value" => "FM"
                                                ],
                                                [
                                                    "key" => "Moldova",
                                                    "value" => "MD"
                                                ],
                                                [
                                                    "key" => "Monaco",
                                                    "value" => "MC"
                                                ],
                                                [
                                                    "key" => "Mongolia",
                                                    "value" => "MN"
                                                ],
                                                [
                                                    "key" => "Montenegro",
                                                    "value" => "ME"
                                                ],
                                                [
                                                    "key" => "Montserrat",
                                                    "value" => "MS"
                                                ],
                                                [
                                                    "key" => "Morocco",
                                                    "value" => "MA"
                                                ],
                                                [
                                                    "key" => "Mozambique",
                                                    "value" => "MZ"
                                                ],
                                                [
                                                    "key" => "Myanmar (Burma)",
                                                    "value" => "MM"
                                                ],
                                                [
                                                    "key" => "Namibia",
                                                    "value" => "NA"
                                                ],
                                                [
                                                    "key" => "Nauru",
                                                    "value" => "NR"
                                                ],
                                                [
                                                    "key" => "Nepal",
                                                    "value" => "NP"
                                                ],
                                                [
                                                    "key" => "Netherlands",
                                                    "value" => "NL"
                                                ],
                                                [
                                                    "key" => "New Caledonia",
                                                    "value" => "NC"
                                                ],
                                                [
                                                    "key" => "New Zealand",
                                                    "value" => "NZ"
                                                ],
                                                [
                                                    "key" => "Nicaragua",
                                                    "value" => "NI"
                                                ],
                                                [
                                                    "key" => "Niger",
                                                    "value" => "NE"
                                                ],
                                                [
                                                    "key" => "Nigeria",
                                                    "value" => "NG"
                                                ],
                                                [
                                                    "key" => "Niue",
                                                    "value" => "NU"
                                                ],
                                                [
                                                    "key" => "Norfolk Island",
                                                    "value" => "NF"
                                                ],
                                                [
                                                    "key" => "North Korea",
                                                    "value" => "KP"
                                                ],
                                                [
                                                    "key" => "Northern Mariana Islands",
                                                    "value" => "MP"
                                                ],
                                                [
                                                    "key" => "Norway",
                                                    "value" => "NO"
                                                ],
                                                [
                                                    "key" => "Oman",
                                                    "value" => "OM"
                                                ],
                                                [
                                                    "key" => "Pakistan",
                                                    "value" => "PK"
                                                ],
                                                [
                                                    "key" => "Palau",
                                                    "value" => "PW"
                                                ],
                                                [
                                                    "key" => "Palestinian Territories",
                                                    "value" => "PS"
                                                ],
                                                [
                                                    "key" => "Panama",
                                                    "value" => "PA"
                                                ],
                                                [
                                                    "key" => "Papua New Guinea",
                                                    "value" => "PG"
                                                ],
                                                [
                                                    "key" => "Paraguay",
                                                    "value" => "PY"
                                                ],
                                                [
                                                    "key" => "Peru",
                                                    "value" => "PE"
                                                ],
                                                [
                                                    "key" => "Philippines",
                                                    "value" => "PH"
                                                ],
                                                [
                                                    "key" => "Pitcairn Islands",
                                                    "value" => "PN"
                                                ],
                                                [
                                                    "key" => "Poland",
                                                    "value" => "PL"
                                                ],
                                                [
                                                    "key" => "Portugal",
                                                    "value" => "PT"
                                                ],
                                                [
                                                    "key" => "Puerto Rico",
                                                    "value" => "PR"
                                                ],
                                                [
                                                    "key" => "Qatar",
                                                    "value" => "QA"
                                                ],
                                                [
                                                    "key" => "Romania",
                                                    "value" => "RO"
                                                ],
                                                [
                                                    "key" => "Russia",
                                                    "value" => "RU"
                                                ],
                                                [
                                                    "key" => "Rwanda",
                                                    "value" => "RW"
                                                ],
                                                [
                                                    "key" => "Réunion",
                                                    "value" => "RE"
                                                ],
                                                [
                                                    "key" => "Samoa",
                                                    "value" => "WS"
                                                ],
                                                [
                                                    "key" => "San Marino",
                                                    "value" => "SM"
                                                ],
                                                [
                                                    "key" => "Saudi Arabia",
                                                    "value" => "SA"
                                                ],
                                                [
                                                    "key" => "Senegal",
                                                    "value" => "SN"
                                                ],
                                                [
                                                    "key" => "Serbia",
                                                    "value" => "RS"
                                                ],
                                                [
                                                    "key" => "Seychelles",
                                                    "value" => "SC"
                                                ],
                                                [
                                                    "key" => "Sierra Leone",
                                                    "value" => "SL"
                                                ],
                                                [
                                                    "key" => "Singapore",
                                                    "value" => "SG"
                                                ],
                                                [
                                                    "key" => "Sint Maarten",
                                                    "value" => "SX"
                                                ],
                                                [
                                                    "key" => "Slovakia",
                                                    "value" => "SK"
                                                ],
                                                [
                                                    "key" => "Slovenia",
                                                    "value" => "SI"
                                                ],
                                                [
                                                    "key" => "Solomon Islands",
                                                    "value" => "SB"
                                                ],
                                                [
                                                    "key" => "Somalia",
                                                    "value" => "SO"
                                                ],
                                                [
                                                    "key" => "South Africa",
                                                    "value" => "ZA"
                                                ],
                                                [
                                                    "key" => "South Georgia & South Sandwich Islands",
                                                    "value" => "GS"
                                                ],
                                                [
                                                    "key" => "South Korea",
                                                    "value" => "KR"
                                                ],
                                                [
                                                    "key" => "South Sudan",
                                                    "value" => "SS"
                                                ],
                                                [
                                                    "key" => "Spain",
                                                    "value" => "ES"
                                                ],
                                                [
                                                    "key" => "Sri Lanka",
                                                    "value" => "LK"
                                                ],
                                                [
                                                    "key" => "St. Barthélemy",
                                                    "value" => "BL"
                                                ],
                                                [
                                                    "key" => "St. Helena",
                                                    "value" => "SH"
                                                ],
                                                [
                                                    "key" => "St. Kitts & Nevis",
                                                    "value" => "KN"
                                                ],
                                                [
                                                    "key" => "St. Lucia",
                                                    "value" => "LC"
                                                ],
                                                [
                                                    "key" => "St. Martin",
                                                    "value" => "MF"
                                                ],
                                                [
                                                    "key" => "St. Pierre & Miquelon",
                                                    "value" => "PM"
                                                ],
                                                [
                                                    "key" => "St. Vincent & Grenadines",
                                                    "value" => "VC"
                                                ],
                                                [
                                                    "key" => "Sudan",
                                                    "value" => "SD"
                                                ],
                                                [
                                                    "key" => "Suriname",
                                                    "value" => "SR"
                                                ],
                                                [
                                                    "key" => "Svalbard & Jan Mayen",
                                                    "value" => "SJ"
                                                ],
                                                [
                                                    "key" => "Swaziland",
                                                    "value" => "SZ"
                                                ],
                                                [
                                                    "key" => "Sweden",
                                                    "value" => "SE"
                                                ],
                                                [
                                                    "key" => "Switzerland",
                                                    "value" => "CH"
                                                ],
                                                [
                                                    "key" => "Syria",
                                                    "value" => "SY"
                                                ],
                                                [
                                                    "key" => "São Tomé & Príncipe",
                                                    "value" => "ST"
                                                ],
                                                [
                                                    "key" => "Taiwan",
                                                    "value" => "TW"
                                                ],
                                                [
                                                    "key" => "Tajikistan",
                                                    "value" => "TJ"
                                                ],
                                                [
                                                    "key" => "Tanzania",
                                                    "value" => "TZ"
                                                ],
                                                [
                                                    "key" => "Thailand",
                                                    "value" => "TH"
                                                ],
                                                [
                                                    "key" => "Timor-Leste",
                                                    "value" => "TL"
                                                ],
                                                [
                                                    "key" => "Togo",
                                                    "value" => "TG"
                                                ],
                                                [
                                                    "key" => "Tokelau",
                                                    "value" => "TK"
                                                ],
                                                [
                                                    "key" => "Tonga",
                                                    "value" => "TO"
                                                ],
                                                [
                                                    "key" => "Trinidad & Tobago",
                                                    "value" => "TT"
                                                ],
                                                [
                                                    "key" => "Tristan da Cunha",
                                                    "value" => "TA"
                                                ],
                                                [
                                                    "key" => "Tunisia",
                                                    "value" => "TN"
                                                ],
                                                [
                                                    "key" => "Turkey",
                                                    "value" => "TR"
                                                ],
                                                [
                                                    "key" => "Turkmenistan",
                                                    "value" => "TM"
                                                ],
                                                [
                                                    "key" => "Turks & Caicos Islands",
                                                    "value" => "TC"
                                                ],
                                                [
                                                    "key" => "Tuvalu",
                                                    "value" => "TV"
                                                ],
                                                [
                                                    "key" => "U.S. Outlying Islands",
                                                    "value" => "UM"
                                                ],
                                                [
                                                    "key" => "U.S. Virgin Islands",
                                                    "value" => "VI"
                                                ],
                                                [
                                                    "key" => "Uganda",
                                                    "value" => "UG"
                                                ],
                                                [
                                                    "key" => "Ukraine",
                                                    "value" => "UA"
                                                ],
                                                [
                                                    "key" => "United Arab Emirates",
                                                    "value" => "AE"
                                                ],
                                                [
                                                    "key" => "United Kingdom",
                                                    "value" => "GB"
                                                ],
                                                [
                                                    "key" => "United Nations",
                                                    "value" => "UN"
                                                ],
                                                [
                                                    "key" => "United States",
                                                    "value" => "US"
                                                ],
                                                [
                                                    "key" => "Uruguay",
                                                    "value" => "UY"
                                                ],
                                                [
                                                    "key" => "Uzbekistan",
                                                    "value" => "UZ"
                                                ],
                                                [
                                                    "key" => "Vanuatu",
                                                    "value" => "VU"
                                                ],
                                                [
                                                    "key" => "Vatican City",
                                                    "value" => "VA"
                                                ],
                                                [
                                                    "key" => "Venezuela",
                                                    "value" => "VE"
                                                ],
                                                [
                                                    "key" => "Vietnam",
                                                    "value" => "VN"
                                                ],
                                                [
                                                    "key" => "Wallis & Futuna",
                                                    "value" => "WF"
                                                ],
                                                [
                                                    "key" => "Western Sahara",
                                                    "value" => "EH"
                                                ],
                                                [
                                                    "key" => "Yemen",
                                                    "value" => "YE"
                                                ],
                                                [
                                                    "key" => "Zambia",
                                                    "value" => "ZM"
                                                ],
                                                [
                                                    "key" => "Zimbabwe",
                                                    "value" => "ZW"
                                                ],
                                                [
                                                    "key" => "Åland Islands",
                                                    "value" => "AX"
                                                ]
                                            ],
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "optionsProviderClass" => NULL,
                                            "optionsProviderData" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "dynamicOptions" => FALSE,
                                            "name" => "country",
                                            "title" => "Country",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "gallery",
                                        "label" => "Gallery",
                                        "dataType" => "imageGallery",
                                        "layout" => [
                                            "fieldtype" => "imageGallery",
                                            "queryColumnType" => [
                                                "images" => "text",
                                                "hotspots" => "text"
                                            ],
                                            "columnType" => [
                                                "images" => "text",
                                                "hotspots" => "text"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\ImageGallery",
                                            "width" => 300,
                                            "height" => 300,
                                            "uploadPath" => "",
                                            "ratioX" => NULL,
                                            "ratioY" => NULL,
                                            "predefinedDataTemplates" => "",
                                            "name" => "gallery",
                                            "title" => "Gallery",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "productionYear",
                                        "label" => "Production Year",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => 300,
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => TRUE,
                                            "unsigned" => TRUE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => FALSE,
                                            "decimalSize" => NULL,
                                            "decimalPrecision" => NULL,
                                            "name" => "productionYear",
                                            "title" => "Production Year",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "SaleInformation~priceInEUR",
                                        "label" => "Price in EUR",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => FALSE,
                                            "unsigned" => FALSE,
                                            "minValue" => 0,
                                            "maxValue" => NULL,
                                            "unique" => FALSE,
                                            "decimalSize" => 10,
                                            "decimalPrecision" => 2,
                                            "name" => "priceInEUR",
                                            "title" => "Price in EUR",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Engine~cylinders",
                                        "label" => "Cylinders",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => TRUE,
                                            "unsigned" => TRUE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => FALSE,
                                            "decimalSize" => NULL,
                                            "decimalPrecision" => NULL,
                                            "name" => "cylinders",
                                            "title" => "Cylinders",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Bodywork~numberOfDoors",
                                        "label" => "Number Of Doors",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => TRUE,
                                            "unsigned" => TRUE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => FALSE,
                                            "decimalSize" => NULL,
                                            "decimalPrecision" => NULL,
                                            "name" => "numberOfDoors",
                                            "title" => "Number Of Doors",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Bodywork~numberOfSeats",
                                        "label" => "Number Of Seats",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => TRUE,
                                            "unsigned" => TRUE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => FALSE,
                                            "decimalSize" => NULL,
                                            "decimalPrecision" => NULL,
                                            "name" => "numberOfSeats",
                                            "title" => "Number Of Seats",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "SaleInformation~milage",
                                        "label" => "Milage",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => NULL,
                                            "unitWidth" => NULL,
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "7",
                                            "validUnits" => [
                                                "8",
                                                "7"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\QuantityValue",
                                            "name" => "milage",
                                            "title" => "Milage",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Engine~power",
                                        "label" => "Power",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => NULL,
                                            "unitWidth" => NULL,
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "6",
                                            "validUnits" => [
                                                "6"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\QuantityValue",
                                            "name" => "power",
                                            "title" => "Power",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Engine~capacity",
                                        "label" => "Capacity",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => NULL,
                                            "unitWidth" => NULL,
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "5",
                                            "validUnits" => [
                                                "5"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\QuantityValue",
                                            "name" => "capacity",
                                            "title" => "Capacity",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Dimensions~length",
                                        "label" => "Length",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => NULL,
                                            "unitWidth" => NULL,
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "1",
                                            "validUnits" => [
                                                "1"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\QuantityValue",
                                            "name" => "length",
                                            "title" => "Length",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Dimensions~width",
                                        "label" => "Width",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => NULL,
                                            "unitWidth" => NULL,
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "1",
                                            "validUnits" => [
                                                "1"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\QuantityValue",
                                            "name" => "width",
                                            "title" => "Width",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Dimensions~wheelbase",
                                        "label" => "Wheelbase",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => NULL,
                                            "unitWidth" => NULL,
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "1",
                                            "validUnits" => [
                                                "1"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\QuantityValue",
                                            "name" => "wheelbase",
                                            "title" => "Wheelbase",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Dimensions~weight",
                                        "label" => "Weight",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => NULL,
                                            "unitWidth" => NULL,
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "3",
                                            "validUnits" => [
                                                "3"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\QuantityValue",
                                            "name" => "weight",
                                            "title" => "Weight",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "AccessoryPart" => [
                        "id" => "AccessoryPart",
                        "name" => "AccessoryPart",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "generatedName",
                                        "label" => "Fullname",
                                        "dataType" => "calculatedValue",
                                        "layout" => [
                                            "fieldtype" => "calculatedValue",
                                            "width" => 500,
                                            "calculatorClass" => "\\App\\Model\\Product\\CalculatedValue\\AccessoryPartName",
                                            "queryColumnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\CalculatedValue",
                                            "name" => "generatedName",
                                            "title" => "Fullname",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "nameAddition",
                                        "label" => "Name Addition",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "nameAddition",
                                            "title" => "Name Addition",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "mainCategory",
                                        "label" => "Main Category",
                                        "dataType" => "manyToOneRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToOneRelation",
                                            "width" => 500,
                                            "assetUploadPath" => "",
                                            "relationType" => TRUE,
                                            "queryColumnType" => [
                                                "id" => "int(11)",
                                                "type" => "enum('document','asset','object')"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject",
                                            "objectsAllowed" => TRUE,
                                            "assetsAllowed" => FALSE,
                                            "assetTypes" => [

                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "Category"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "mainCategory",
                                            "title" => "Main Category",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "additionalCategories",
                                        "label" => "Additional Categories",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "phpdocType" => "array",
                                            "relationType" => TRUE,
                                            "visibleFields" => "id,fullpath,name",
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "Category"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "additionalCategories",
                                            "title" => "Additional Categories",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "manufacturer",
                                        "label" => "Manufacturer",
                                        "dataType" => "manyToOneRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToOneRelation",
                                            "width" => 500,
                                            "assetUploadPath" => "",
                                            "relationType" => TRUE,
                                            "queryColumnType" => [
                                                "id" => "int(11)",
                                                "type" => "enum('document','asset','object')"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject",
                                            "objectsAllowed" => TRUE,
                                            "assetsAllowed" => FALSE,
                                            "assetTypes" => [

                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "Manufacturer"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "manufacturer",
                                            "title" => "Manufacturer",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "series",
                                        "label" => "Series",
                                        "dataType" => "manyToOneRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToOneRelation",
                                            "width" => 500,
                                            "assetUploadPath" => "",
                                            "relationType" => TRUE,
                                            "queryColumnType" => [
                                                "id" => "int(11)",
                                                "type" => "enum('document','asset','object')"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject",
                                            "objectsAllowed" => TRUE,
                                            "assetsAllowed" => FALSE,
                                            "assetTypes" => [

                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "Car"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "series",
                                            "title" => "Series",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "image",
                                        "label" => "image",
                                        "dataType" => "hotspotimage",
                                        "layout" => [
                                            "fieldtype" => "hotspotimage",
                                            "queryColumnType" => [
                                                "image" => "int(11)",
                                                "hotspots" => "text"
                                            ],
                                            "columnType" => [
                                                "image" => "int(11)",
                                                "hotspots" => "text"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\Hotspotimage",
                                            "ratioX" => NULL,
                                            "ratioY" => NULL,
                                            "predefinedDataTemplates" => "",
                                            "width" => "",
                                            "height" => "",
                                            "uploadPath" => "",
                                            "name" => "image",
                                            "title" => "image",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "compatibleTo",
                                        "label" => "Compatible To",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "phpdocType" => "array",
                                            "relationType" => TRUE,
                                            "visibleFields" => "id,key,name,bodyStyle",
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "Car"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "compatibleTo",
                                            "title" => "Compatible To",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "erpNumber",
                                        "label" => "ERP Number",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "erpNumber",
                                            "title" => "ERP Number",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "categoryCode",
                                        "label" => "Category Code",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "categoryCode",
                                            "title" => "Category Code",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "owner",
                                        "label" => "Owner",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "owner",
                                            "title" => "Owner",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "SaleInformation~priceInEUR",
                                        "label" => "Price in EUR",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => FALSE,
                                            "unsigned" => FALSE,
                                            "minValue" => 0,
                                            "maxValue" => NULL,
                                            "unique" => FALSE,
                                            "decimalSize" => 10,
                                            "decimalPrecision" => 2,
                                            "name" => "priceInEUR",
                                            "title" => "Price in EUR",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "SaleInformation~availabilityPieces",
                                        "label" => "Availability Pieces",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => FALSE,
                                            "unsigned" => FALSE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => FALSE,
                                            "decimalSize" => NULL,
                                            "decimalPrecision" => NULL,
                                            "name" => "availabilityPieces",
                                            "title" => "Availability Pieces",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "SaleInformation~availabilityType",
                                        "label" => "Availability Type",
                                        "dataType" => "select",
                                        "layout" => [
                                            "fieldtype" => "select",
                                            "options" => [
                                                [
                                                    "key" => "couple-weeks",
                                                    "value" => "couple-weeks"
                                                ],
                                                [
                                                    "key" => "couple-days",
                                                    "value" => "couple-days"
                                                ],
                                                [
                                                    "key" => "instant",
                                                    "value" => "instant"
                                                ]
                                            ],
                                            "width" => "",
                                            "defaultValue" => "",
                                            "optionsProviderClass" => "",
                                            "optionsProviderData" => "",
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "dynamicOptions" => FALSE,
                                            "name" => "availabilityType",
                                            "title" => "Availability Type",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "SaleInformation~condition",
                                        "label" => "Condition",
                                        "dataType" => "select",
                                        "layout" => [
                                            "fieldtype" => "select",
                                            "options" => [
                                                [
                                                    "key" => "broken",
                                                    "value" => "broken"
                                                ],
                                                [
                                                    "key" => "reworked",
                                                    "value" => "reworked"
                                                ],
                                                [
                                                    "key" => "used",
                                                    "value" => "used"
                                                ],
                                                [
                                                    "key" => "new",
                                                    "value" => "new"
                                                ]
                                            ],
                                            "width" => "",
                                            "defaultValue" => "",
                                            "optionsProviderClass" => "",
                                            "optionsProviderData" => "",
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "dynamicOptions" => FALSE,
                                            "name" => "condition",
                                            "title" => "Condition",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "SaleInformation~milage",
                                        "label" => "Milage",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => NULL,
                                            "unitWidth" => NULL,
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "7",
                                            "validUnits" => [
                                                "8",
                                                "7"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\QuantityValue",
                                            "name" => "milage",
                                            "title" => "Milage",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "Manufacturer" => [
                        "id" => "Manufacturer",
                        "name" => "Manufacturer",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "name",
                                        "label" => "Name",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "name",
                                            "title" => "Name",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "logo",
                                        "label" => "Logo",
                                        "dataType" => "image",
                                        "layout" => [
                                            "fieldtype" => "image",
                                            "width" => 500,
                                            "height" => "",
                                            "uploadPath" => "",
                                            "queryColumnType" => "int(11)",
                                            "columnType" => "int(11)",
                                            "phpdocType" => "\\Pimcore\\Model\\Asset\\Image",
                                            "name" => "logo",
                                            "title" => "Logo",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "BodyStyle" => [
                        "id" => "BodyStyle",
                        "name" => "BodyStyle",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "name",
                                        "label" => "Name",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "name",
                                            "title" => "Name",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "Category" => [
                        "id" => "Category",
                        "name" => "Category",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "name",
                                        "label" => "Name",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "name",
                                            "title" => "Name",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "productNamePart",
                                        "label" => "Product Name Part",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "productNamePart",
                                            "title" => "Product Name Part",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "filterDefinition",
                                        "label" => "Filter Definition",
                                        "dataType" => "manyToOneRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToOneRelation",
                                            "width" => 800,
                                            "assetUploadPath" => "",
                                            "relationType" => TRUE,
                                            "queryColumnType" => [
                                                "id" => "int(11)",
                                                "type" => "enum('document','asset','object')"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject",
                                            "objectsAllowed" => TRUE,
                                            "assetsAllowed" => FALSE,
                                            "assetTypes" => [

                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "FilterDefinition"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "filterDefinition",
                                            "title" => "Filter Definition",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ]
                ],
                "mutationEntities" => [

                ],
                "specialEntities" => [
                    "asset" => [
                        "id" => "asset",
                        "read" => TRUE
                    ],
                    "asset_folder" => [
                        "id" => "asset_folder",
                        "read" => FALSE
                    ],
                    "object_folder" => [
                        "id" => "object_folder",
                        "create" => FALSE,
                        "read" => FALSE
                    ]
                ]
            ],
            "security" => [
                "method" => "datahub_apikey",
                "apikey" => "6332aa5e6d3d6c0be31da2a8b3442113"
            ],
            "workspaces" => [
                "asset" => [

                ],
                "object" => [

                ]
            ]
        ],
        "shop" => [
            "general" => [
                "active" => TRUE,
                "type" => "graphql",
                "name" => "shop",
                "description" => "Shop related information like Orders, OrderItems, Vouchers.",
                "sqlObjectCondition" => "",
                "path" => NULL
            ],
            "schema" => [
                "queryEntities" => [
                    "OnlineShopOrder" => [
                        "id" => "OnlineShopOrder",
                        "name" => "OnlineShopOrder",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "ordernumber",
                                        "label" => "Ordernumber",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => NULL,
                                            "showCharCount" => NULL,
                                            "name" => "ordernumber",
                                            "title" => "Ordernumber",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => "",
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "orderState",
                                        "label" => "OrderState",
                                        "dataType" => "select",
                                        "layout" => [
                                            "fieldtype" => "select",
                                            "options" => [
                                                [
                                                    "key" => "Committed",
                                                    "value" => "committed"
                                                ],
                                                [
                                                    "key" => "Cancelled",
                                                    "value" => "cancelled"
                                                ],
                                                [
                                                    "key" => "Payment Pending",
                                                    "value" => "paymentPending"
                                                ],
                                                [
                                                    "key" => "Aborted",
                                                    "value" => "aborted"
                                                ]
                                            ],
                                            "width" => 400,
                                            "defaultValue" => "",
                                            "optionsProviderClass" => "",
                                            "optionsProviderData" => "",
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "dynamicOptions" => FALSE,
                                            "name" => "orderState",
                                            "title" => "OrderState",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "orderdate",
                                        "label" => "Orderdate",
                                        "dataType" => "datetime",
                                        "layout" => [
                                            "fieldtype" => "datetime",
                                            "queryColumnType" => "bigint(20)",
                                            "columnType" => "bigint(20)",
                                            "phpdocType" => "\\Carbon\\Carbon",
                                            "defaultValue" => NULL,
                                            "useCurrentDate" => FALSE,
                                            "name" => "orderdate",
                                            "title" => "Orderdate",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => "",
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "items",
                                        "label" => "Items",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "phpdocType" => "array",
                                            "relationType" => TRUE,
                                            "visibleFields" => NULL,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [

                                            ],
                                            "lazyLoading" => FALSE,
                                            "classes" => [
                                                [
                                                    "classes" => "OnlineShopOrderItem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "items",
                                            "title" => "Items",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => "",
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "comment",
                                        "label" => "Comment",
                                        "dataType" => "textarea",
                                        "layout" => [
                                            "fieldtype" => "textarea",
                                            "width" => 400,
                                            "height" => 200,
                                            "maxLength" => NULL,
                                            "showCharCount" => NULL,
                                            "excludeFromSearchIndex" => FALSE,
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "phpdocType" => "string",
                                            "name" => "comment",
                                            "title" => "Comment",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "customerOrderData",
                                        "label" => "Customer Order Data",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => NULL,
                                            "showCharCount" => NULL,
                                            "name" => "customerOrderData",
                                            "title" => "Customer Order Data",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "voucherTokens",
                                        "label" => "Voucher Tokens",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "phpdocType" => "array",
                                            "relationType" => TRUE,
                                            "visibleFields" => NULL,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [

                                            ],
                                            "lazyLoading" => FALSE,
                                            "classes" => [
                                                [
                                                    "classes" => "OnlineShopVoucherToken"
                                                ]
                                            ],
                                            "pathFormatterClass" => NULL,
                                            "name" => "voucherTokens",
                                            "title" => "Voucher Tokens",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "giftItems",
                                        "label" => "Gift Items",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "phpdocType" => "array",
                                            "relationType" => TRUE,
                                            "visibleFields" => NULL,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "OnlineShopOrderItem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "giftItems",
                                            "title" => "Gift Items",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "subTotalNetPrice",
                                        "label" => "SubTotalNetPrice",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => 400,
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => FALSE,
                                            "unsigned" => FALSE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => NULL,
                                            "decimalSize" => 19,
                                            "decimalPrecision" => 4,
                                            "name" => "subTotalNetPrice",
                                            "title" => "SubTotalNetPrice",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "subTotalPrice",
                                        "label" => "SubTotalPrice",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => 400,
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => FALSE,
                                            "unsigned" => FALSE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => NULL,
                                            "decimalSize" => 19,
                                            "decimalPrecision" => 4,
                                            "name" => "subTotalPrice",
                                            "title" => "SubTotalPrice",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => "",
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "totalNetPrice",
                                        "label" => "TotalNetPrice",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => 400,
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => FALSE,
                                            "unsigned" => FALSE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => NULL,
                                            "decimalSize" => 19,
                                            "decimalPrecision" => 4,
                                            "name" => "totalNetPrice",
                                            "title" => "TotalNetPrice",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "totalPrice",
                                        "label" => "TotalPrice",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => 400,
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => FALSE,
                                            "unsigned" => FALSE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => NULL,
                                            "decimalSize" => 19,
                                            "decimalPrecision" => 4,
                                            "name" => "totalPrice",
                                            "title" => "TotalPrice",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => "",
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "currency",
                                        "label" => "Currency",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => NULL,
                                            "showCharCount" => NULL,
                                            "name" => "currency",
                                            "title" => "Currency",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "customer",
                                        "label" => "Customer",
                                        "dataType" => "manyToOneRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToOneRelation",
                                            "width" => 400,
                                            "assetUploadPath" => "",
                                            "relationType" => TRUE,
                                            "queryColumnType" => [
                                                "id" => "int(11)",
                                                "type" => "enum('document','asset','object')"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject",
                                            "objectsAllowed" => TRUE,
                                            "assetsAllowed" => FALSE,
                                            "assetTypes" => [

                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "Customer"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "customer",
                                            "title" => "Customer",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "deliveryFirstname",
                                        "label" => "Firstname",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => NULL,
                                            "showCharCount" => NULL,
                                            "name" => "deliveryFirstname",
                                            "title" => "Firstname",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "deliveryLastname",
                                        "label" => "Lastname",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => NULL,
                                            "showCharCount" => NULL,
                                            "name" => "deliveryLastname",
                                            "title" => "Lastname",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "deliveryCompany",
                                        "label" => "Company",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => NULL,
                                            "showCharCount" => NULL,
                                            "name" => "deliveryCompany",
                                            "title" => "Company",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "deliveryStreet",
                                        "label" => "Street",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => NULL,
                                            "showCharCount" => NULL,
                                            "name" => "deliveryStreet",
                                            "title" => "Street",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "deliveryZip",
                                        "label" => "Zip",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => NULL,
                                            "showCharCount" => NULL,
                                            "name" => "deliveryZip",
                                            "title" => "Zip",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "deliveryCity",
                                        "label" => "City",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => NULL,
                                            "showCharCount" => NULL,
                                            "name" => "deliveryCity",
                                            "title" => "City",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "paymentInfo",
                                        "label" => "Payment Informations",
                                        "dataType" => "fieldcollections",
                                        "layout" => [
                                            "fieldtype" => "fieldcollections",
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Fieldcollection",
                                            "allowedTypes" => [
                                                "PaymentInfo"
                                            ],
                                            "lazyLoading" => FALSE,
                                            "maxItems" => "",
                                            "disallowAddRemove" => TRUE,
                                            "disallowReorder" => TRUE,
                                            "collapsed" => FALSE,
                                            "collapsible" => FALSE,
                                            "border" => FALSE,
                                            "name" => "paymentInfo",
                                            "title" => "Payment Informations",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "paymentReference",
                                        "label" => "Payment Ref.",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => NULL,
                                            "showCharCount" => NULL,
                                            "name" => "paymentReference",
                                            "title" => "Payment Ref.",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "OnlineShopOrderItem" => [
                        "id" => "OnlineShopOrderItem",
                        "name" => "OnlineShopOrderItem",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "orderState",
                                        "label" => "Order Item State",
                                        "dataType" => "select",
                                        "layout" => [
                                            "fieldtype" => "select",
                                            "options" => [
                                                [
                                                    "key" => "Committed",
                                                    "value" => "committed"
                                                ],
                                                [
                                                    "key" => "Cancelled",
                                                    "value" => "cancelled"
                                                ]
                                            ],
                                            "width" => 400,
                                            "defaultValue" => "",
                                            "optionsProviderClass" => NULL,
                                            "optionsProviderData" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "dynamicOptions" => FALSE,
                                            "name" => "orderState",
                                            "title" => "Order Item State",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "productNumber",
                                        "label" => "Produktnummer",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "productNumber",
                                            "title" => "Produktnummer",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => "",
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "productName",
                                        "label" => "Produktname",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "productName",
                                            "title" => "Produktname",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => "",
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "amount",
                                        "label" => "Amount",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => 400,
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => FALSE,
                                            "unsigned" => FALSE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => FALSE,
                                            "decimalSize" => NULL,
                                            "decimalPrecision" => NULL,
                                            "name" => "amount",
                                            "title" => "Amount",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => "",
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "totalNetPrice",
                                        "label" => "NetPrice",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => 400,
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => FALSE,
                                            "unsigned" => FALSE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => NULL,
                                            "decimalSize" => NULL,
                                            "decimalPrecision" => NULL,
                                            "name" => "totalNetPrice",
                                            "title" => "NetPrice",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "totalPrice",
                                        "label" => "Price",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => 400,
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => FALSE,
                                            "unsigned" => FALSE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => NULL,
                                            "decimalSize" => NULL,
                                            "decimalPrecision" => NULL,
                                            "name" => "totalPrice",
                                            "title" => "Price",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => "",
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "pricingRules",
                                        "label" => "Pricing Rules",
                                        "dataType" => "fieldcollections",
                                        "layout" => [
                                            "fieldtype" => "fieldcollections",
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Fieldcollection",
                                            "allowedTypes" => [
                                                "PricingRule"
                                            ],
                                            "lazyLoading" => TRUE,
                                            "maxItems" => "",
                                            "disallowAddRemove" => FALSE,
                                            "disallowReorder" => FALSE,
                                            "collapsed" => FALSE,
                                            "collapsible" => FALSE,
                                            "border" => FALSE,
                                            "name" => "pricingRules",
                                            "title" => "Pricing Rules",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "comment",
                                        "label" => "Comment",
                                        "dataType" => "textarea",
                                        "layout" => [
                                            "fieldtype" => "textarea",
                                            "width" => 400,
                                            "height" => "",
                                            "maxLength" => NULL,
                                            "showCharCount" => NULL,
                                            "excludeFromSearchIndex" => FALSE,
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "phpdocType" => "string",
                                            "name" => "comment",
                                            "title" => "Comment",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "OnlineShopVoucherToken" => [
                        "id" => "OnlineShopVoucherToken",
                        "name" => "OnlineShopVoucherToken",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "tokenId",
                                        "label" => "Token ID",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => 500,
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => FALSE,
                                            "unsigned" => FALSE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => FALSE,
                                            "decimalSize" => NULL,
                                            "decimalPrecision" => NULL,
                                            "name" => "tokenId",
                                            "title" => "Token ID",
                                            "tooltip" => "",
                                            "mandatory" => TRUE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "token",
                                        "label" => "Token",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 500,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "token",
                                            "title" => "Token",
                                            "tooltip" => "",
                                            "mandatory" => TRUE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "voucherSeries",
                                        "label" => "Voucher Series",
                                        "dataType" => "manyToOneRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToOneRelation",
                                            "width" => 500,
                                            "assetUploadPath" => "",
                                            "relationType" => TRUE,
                                            "queryColumnType" => [
                                                "id" => "int(11)",
                                                "type" => "enum('document','asset','object')"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject",
                                            "objectsAllowed" => TRUE,
                                            "assetsAllowed" => FALSE,
                                            "assetTypes" => [

                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "lazyLoading" => FALSE,
                                            "classes" => [
                                                [
                                                    "classes" => "OnlineShopVoucherSeries"
                                                ]
                                            ],
                                            "pathFormatterClass" => NULL,
                                            "name" => "voucherSeries",
                                            "title" => "Voucher Series",
                                            "tooltip" => "",
                                            "mandatory" => TRUE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "Customer" => [
                        "id" => "Customer",
                        "name" => "Customer",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "gender",
                                        "label" => "Gender",
                                        "dataType" => "gender",
                                        "layout" => [
                                            "fieldtype" => "gender",
                                            "options" => [
                                                [
                                                    "key" => "male",
                                                    "value" => "male"
                                                ],
                                                [
                                                    "key" => "female",
                                                    "value" => "female"
                                                ],
                                                [
                                                    "key" => "",
                                                    "value" => "unknown"
                                                ]
                                            ],
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "optionsProviderClass" => NULL,
                                            "optionsProviderData" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => "190",
                                            "phpdocType" => "string",
                                            "dynamicOptions" => FALSE,
                                            "name" => "gender",
                                            "title" => "Gender",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "firstname",
                                        "label" => "Firstname",
                                        "dataType" => "firstname",
                                        "layout" => [
                                            "fieldtype" => "firstname",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => NULL,
                                            "name" => "firstname",
                                            "title" => "Firstname",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "lastname",
                                        "label" => "Lastname",
                                        "dataType" => "lastname",
                                        "layout" => [
                                            "fieldtype" => "lastname",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => NULL,
                                            "name" => "lastname",
                                            "title" => "Lastname",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "company",
                                        "label" => "Company",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "company",
                                            "title" => "Company",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "email",
                                        "label" => "Email",
                                        "dataType" => "email",
                                        "layout" => [
                                            "fieldtype" => "email",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => NULL,
                                            "name" => "email",
                                            "title" => "Email",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "street",
                                        "label" => "Street",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => NULL,
                                            "name" => "street",
                                            "title" => "Street",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "zip",
                                        "label" => "Zip",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => NULL,
                                            "name" => "zip",
                                            "title" => "Zip",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "countryCode",
                                        "label" => "Country",
                                        "dataType" => "country",
                                        "layout" => [
                                            "fieldtype" => "country",
                                            "restrictTo" => "",
                                            "options" => [
                                                [
                                                    "key" => "Afghanistan",
                                                    "value" => "AF"
                                                ],
                                                [
                                                    "key" => "Albania",
                                                    "value" => "AL"
                                                ],
                                                [
                                                    "key" => "Algeria",
                                                    "value" => "DZ"
                                                ],
                                                [
                                                    "key" => "American Samoa",
                                                    "value" => "AS"
                                                ],
                                                [
                                                    "key" => "Andorra",
                                                    "value" => "AD"
                                                ],
                                                [
                                                    "key" => "Angola",
                                                    "value" => "AO"
                                                ],
                                                [
                                                    "key" => "Anguilla",
                                                    "value" => "AI"
                                                ],
                                                [
                                                    "key" => "Antigua and Barbuda",
                                                    "value" => "AG"
                                                ],
                                                [
                                                    "key" => "Argentina",
                                                    "value" => "AR"
                                                ],
                                                [
                                                    "key" => "Armenia",
                                                    "value" => "AM"
                                                ],
                                                [
                                                    "key" => "Aruba",
                                                    "value" => "AW"
                                                ],
                                                [
                                                    "key" => "Australia",
                                                    "value" => "AU"
                                                ],
                                                [
                                                    "key" => "Austria",
                                                    "value" => "AT"
                                                ],
                                                [
                                                    "key" => "Azerbaijan",
                                                    "value" => "AZ"
                                                ],
                                                [
                                                    "key" => "Bahamas",
                                                    "value" => "BS"
                                                ],
                                                [
                                                    "key" => "Bahrain",
                                                    "value" => "BH"
                                                ],
                                                [
                                                    "key" => "Bangladesh",
                                                    "value" => "BD"
                                                ],
                                                [
                                                    "key" => "Barbados",
                                                    "value" => "BB"
                                                ],
                                                [
                                                    "key" => "Belarus",
                                                    "value" => "BY"
                                                ],
                                                [
                                                    "key" => "Belgium",
                                                    "value" => "BE"
                                                ],
                                                [
                                                    "key" => "Belize",
                                                    "value" => "BZ"
                                                ],
                                                [
                                                    "key" => "Benin",
                                                    "value" => "BJ"
                                                ],
                                                [
                                                    "key" => "Bermuda",
                                                    "value" => "BM"
                                                ],
                                                [
                                                    "key" => "Bhutan",
                                                    "value" => "BT"
                                                ],
                                                [
                                                    "key" => "Bolivia",
                                                    "value" => "BO"
                                                ],
                                                [
                                                    "key" => "Bosnia and Herzegovina",
                                                    "value" => "BA"
                                                ],
                                                [
                                                    "key" => "Botswana",
                                                    "value" => "BW"
                                                ],
                                                [
                                                    "key" => "Brazil",
                                                    "value" => "BR"
                                                ],
                                                [
                                                    "key" => "British Indian Ocean Territory",
                                                    "value" => "IO"
                                                ],
                                                [
                                                    "key" => "British Virgin Islands",
                                                    "value" => "VG"
                                                ],
                                                [
                                                    "key" => "Brunei",
                                                    "value" => "BN"
                                                ],
                                                [
                                                    "key" => "Bulgaria",
                                                    "value" => "BG"
                                                ],
                                                [
                                                    "key" => "Burkina Faso",
                                                    "value" => "BF"
                                                ],
                                                [
                                                    "key" => "Burundi",
                                                    "value" => "BI"
                                                ],
                                                [
                                                    "key" => "Cambodia",
                                                    "value" => "KH"
                                                ],
                                                [
                                                    "key" => "Cameroon",
                                                    "value" => "CM"
                                                ],
                                                [
                                                    "key" => "Canada",
                                                    "value" => "CA"
                                                ],
                                                [
                                                    "key" => "Canary Islands",
                                                    "value" => "IC"
                                                ],
                                                [
                                                    "key" => "Cape Verde",
                                                    "value" => "CV"
                                                ],
                                                [
                                                    "key" => "Caribbean Netherlands",
                                                    "value" => "BQ"
                                                ],
                                                [
                                                    "key" => "Cayman Islands",
                                                    "value" => "KY"
                                                ],
                                                [
                                                    "key" => "Central African Republic",
                                                    "value" => "CF"
                                                ],
                                                [
                                                    "key" => "Ceuta and Melilla",
                                                    "value" => "EA"
                                                ],
                                                [
                                                    "key" => "Chad",
                                                    "value" => "TD"
                                                ],
                                                [
                                                    "key" => "Chile",
                                                    "value" => "CL"
                                                ],
                                                [
                                                    "key" => "China",
                                                    "value" => "CN"
                                                ],
                                                [
                                                    "key" => "Christmas Island",
                                                    "value" => "CX"
                                                ],
                                                [
                                                    "key" => "Cocos (Keeling) Islands",
                                                    "value" => "CC"
                                                ],
                                                [
                                                    "key" => "Colombia",
                                                    "value" => "CO"
                                                ],
                                                [
                                                    "key" => "Comoros",
                                                    "value" => "KM"
                                                ],
                                                [
                                                    "key" => "Congo - Brazzaville",
                                                    "value" => "CG"
                                                ],
                                                [
                                                    "key" => "Congo - Kinshasa",
                                                    "value" => "CD"
                                                ],
                                                [
                                                    "key" => "Cook Islands",
                                                    "value" => "CK"
                                                ],
                                                [
                                                    "key" => "Costa Rica",
                                                    "value" => "CR"
                                                ],
                                                [
                                                    "key" => "Croatia",
                                                    "value" => "HR"
                                                ],
                                                [
                                                    "key" => "Cuba",
                                                    "value" => "CU"
                                                ],
                                                [
                                                    "key" => "Curaçao",
                                                    "value" => "CW"
                                                ],
                                                [
                                                    "key" => "Cyprus",
                                                    "value" => "CY"
                                                ],
                                                [
                                                    "key" => "Czech Republic",
                                                    "value" => "CZ"
                                                ],
                                                [
                                                    "key" => "Côte d’Ivoire",
                                                    "value" => "CI"
                                                ],
                                                [
                                                    "key" => "Denmark",
                                                    "value" => "DK"
                                                ],
                                                [
                                                    "key" => "Diego Garcia",
                                                    "value" => "DG"
                                                ],
                                                [
                                                    "key" => "Djibouti",
                                                    "value" => "DJ"
                                                ],
                                                [
                                                    "key" => "Dominica",
                                                    "value" => "DM"
                                                ],
                                                [
                                                    "key" => "Dominican Republic",
                                                    "value" => "DO"
                                                ],
                                                [
                                                    "key" => "Ecuador",
                                                    "value" => "EC"
                                                ],
                                                [
                                                    "key" => "Egypt",
                                                    "value" => "EG"
                                                ],
                                                [
                                                    "key" => "El Salvador",
                                                    "value" => "SV"
                                                ],
                                                [
                                                    "key" => "Equatorial Guinea",
                                                    "value" => "GQ"
                                                ],
                                                [
                                                    "key" => "Eritrea",
                                                    "value" => "ER"
                                                ],
                                                [
                                                    "key" => "Estonia",
                                                    "value" => "EE"
                                                ],
                                                [
                                                    "key" => "Ethiopia",
                                                    "value" => "ET"
                                                ],
                                                [
                                                    "key" => "Falkland Islands",
                                                    "value" => "FK"
                                                ],
                                                [
                                                    "key" => "Faroe Islands",
                                                    "value" => "FO"
                                                ],
                                                [
                                                    "key" => "Fiji",
                                                    "value" => "FJ"
                                                ],
                                                [
                                                    "key" => "Finland",
                                                    "value" => "FI"
                                                ],
                                                [
                                                    "key" => "France",
                                                    "value" => "FR"
                                                ],
                                                [
                                                    "key" => "French Guiana",
                                                    "value" => "GF"
                                                ],
                                                [
                                                    "key" => "French Polynesia",
                                                    "value" => "PF"
                                                ],
                                                [
                                                    "key" => "Gabon",
                                                    "value" => "GA"
                                                ],
                                                [
                                                    "key" => "Gambia",
                                                    "value" => "GM"
                                                ],
                                                [
                                                    "key" => "Georgia",
                                                    "value" => "GE"
                                                ],
                                                [
                                                    "key" => "Germany",
                                                    "value" => "DE"
                                                ],
                                                [
                                                    "key" => "Ghana",
                                                    "value" => "GH"
                                                ],
                                                [
                                                    "key" => "Gibraltar",
                                                    "value" => "GI"
                                                ],
                                                [
                                                    "key" => "Greece",
                                                    "value" => "GR"
                                                ],
                                                [
                                                    "key" => "Greenland",
                                                    "value" => "GL"
                                                ],
                                                [
                                                    "key" => "Grenada",
                                                    "value" => "GD"
                                                ],
                                                [
                                                    "key" => "Guadeloupe",
                                                    "value" => "GP"
                                                ],
                                                [
                                                    "key" => "Guam",
                                                    "value" => "GU"
                                                ],
                                                [
                                                    "key" => "Guatemala",
                                                    "value" => "GT"
                                                ],
                                                [
                                                    "key" => "Guernsey",
                                                    "value" => "GG"
                                                ],
                                                [
                                                    "key" => "Guinea",
                                                    "value" => "GN"
                                                ],
                                                [
                                                    "key" => "Guinea-Bissau",
                                                    "value" => "GW"
                                                ],
                                                [
                                                    "key" => "Guyana",
                                                    "value" => "GY"
                                                ],
                                                [
                                                    "key" => "Haiti",
                                                    "value" => "HT"
                                                ],
                                                [
                                                    "key" => "Honduras",
                                                    "value" => "HN"
                                                ],
                                                [
                                                    "key" => "Hong Kong SAR China",
                                                    "value" => "HK"
                                                ],
                                                [
                                                    "key" => "Hungary",
                                                    "value" => "HU"
                                                ],
                                                [
                                                    "key" => "Iceland",
                                                    "value" => "IS"
                                                ],
                                                [
                                                    "key" => "India",
                                                    "value" => "IN"
                                                ],
                                                [
                                                    "key" => "Indonesia",
                                                    "value" => "ID"
                                                ],
                                                [
                                                    "key" => "Iran",
                                                    "value" => "IR"
                                                ],
                                                [
                                                    "key" => "Iraq",
                                                    "value" => "IQ"
                                                ],
                                                [
                                                    "key" => "Ireland",
                                                    "value" => "IE"
                                                ],
                                                [
                                                    "key" => "Isle of Man",
                                                    "value" => "IM"
                                                ],
                                                [
                                                    "key" => "Israel",
                                                    "value" => "IL"
                                                ],
                                                [
                                                    "key" => "Italy",
                                                    "value" => "IT"
                                                ],
                                                [
                                                    "key" => "Jamaica",
                                                    "value" => "JM"
                                                ],
                                                [
                                                    "key" => "Japan",
                                                    "value" => "JP"
                                                ],
                                                [
                                                    "key" => "Jersey",
                                                    "value" => "JE"
                                                ],
                                                [
                                                    "key" => "Jordan",
                                                    "value" => "JO"
                                                ],
                                                [
                                                    "key" => "Kazakhstan",
                                                    "value" => "KZ"
                                                ],
                                                [
                                                    "key" => "Kenya",
                                                    "value" => "KE"
                                                ],
                                                [
                                                    "key" => "Kiribati",
                                                    "value" => "KI"
                                                ],
                                                [
                                                    "key" => "Kosovo",
                                                    "value" => "XK"
                                                ],
                                                [
                                                    "key" => "Kuwait",
                                                    "value" => "KW"
                                                ],
                                                [
                                                    "key" => "Kyrgyzstan",
                                                    "value" => "KG"
                                                ],
                                                [
                                                    "key" => "Laos",
                                                    "value" => "LA"
                                                ],
                                                [
                                                    "key" => "Latvia",
                                                    "value" => "LV"
                                                ],
                                                [
                                                    "key" => "Lebanon",
                                                    "value" => "LB"
                                                ],
                                                [
                                                    "key" => "Lesotho",
                                                    "value" => "LS"
                                                ],
                                                [
                                                    "key" => "Liberia",
                                                    "value" => "LR"
                                                ],
                                                [
                                                    "key" => "Libya",
                                                    "value" => "LY"
                                                ],
                                                [
                                                    "key" => "Liechtenstein",
                                                    "value" => "LI"
                                                ],
                                                [
                                                    "key" => "Lithuania",
                                                    "value" => "LT"
                                                ],
                                                [
                                                    "key" => "Luxembourg",
                                                    "value" => "LU"
                                                ],
                                                [
                                                    "key" => "Macau SAR China",
                                                    "value" => "MO"
                                                ],
                                                [
                                                    "key" => "Macedonia",
                                                    "value" => "MK"
                                                ],
                                                [
                                                    "key" => "Madagascar",
                                                    "value" => "MG"
                                                ],
                                                [
                                                    "key" => "Malawi",
                                                    "value" => "MW"
                                                ],
                                                [
                                                    "key" => "Malaysia",
                                                    "value" => "MY"
                                                ],
                                                [
                                                    "key" => "Mali",
                                                    "value" => "ML"
                                                ],
                                                [
                                                    "key" => "Malta",
                                                    "value" => "MT"
                                                ],
                                                [
                                                    "key" => "Marshall Islands",
                                                    "value" => "MH"
                                                ],
                                                [
                                                    "key" => "Martinique",
                                                    "value" => "MQ"
                                                ],
                                                [
                                                    "key" => "Mauritania",
                                                    "value" => "MR"
                                                ],
                                                [
                                                    "key" => "Mauritius",
                                                    "value" => "MU"
                                                ],
                                                [
                                                    "key" => "Mayotte",
                                                    "value" => "YT"
                                                ],
                                                [
                                                    "key" => "Mexico",
                                                    "value" => "MX"
                                                ],
                                                [
                                                    "key" => "Micronesia",
                                                    "value" => "FM"
                                                ],
                                                [
                                                    "key" => "Moldova",
                                                    "value" => "MD"
                                                ],
                                                [
                                                    "key" => "Monaco",
                                                    "value" => "MC"
                                                ],
                                                [
                                                    "key" => "Mongolia",
                                                    "value" => "MN"
                                                ],
                                                [
                                                    "key" => "Montenegro",
                                                    "value" => "ME"
                                                ],
                                                [
                                                    "key" => "Montserrat",
                                                    "value" => "MS"
                                                ],
                                                [
                                                    "key" => "Morocco",
                                                    "value" => "MA"
                                                ],
                                                [
                                                    "key" => "Mozambique",
                                                    "value" => "MZ"
                                                ],
                                                [
                                                    "key" => "Myanmar (Burma)",
                                                    "value" => "MM"
                                                ],
                                                [
                                                    "key" => "Namibia",
                                                    "value" => "NA"
                                                ],
                                                [
                                                    "key" => "Nauru",
                                                    "value" => "NR"
                                                ],
                                                [
                                                    "key" => "Nepal",
                                                    "value" => "NP"
                                                ],
                                                [
                                                    "key" => "Netherlands",
                                                    "value" => "NL"
                                                ],
                                                [
                                                    "key" => "New Caledonia",
                                                    "value" => "NC"
                                                ],
                                                [
                                                    "key" => "New Zealand",
                                                    "value" => "NZ"
                                                ],
                                                [
                                                    "key" => "Nicaragua",
                                                    "value" => "NI"
                                                ],
                                                [
                                                    "key" => "Niger",
                                                    "value" => "NE"
                                                ],
                                                [
                                                    "key" => "Nigeria",
                                                    "value" => "NG"
                                                ],
                                                [
                                                    "key" => "Niue",
                                                    "value" => "NU"
                                                ],
                                                [
                                                    "key" => "Norfolk Island",
                                                    "value" => "NF"
                                                ],
                                                [
                                                    "key" => "North Korea",
                                                    "value" => "KP"
                                                ],
                                                [
                                                    "key" => "Northern Mariana Islands",
                                                    "value" => "MP"
                                                ],
                                                [
                                                    "key" => "Norway",
                                                    "value" => "NO"
                                                ],
                                                [
                                                    "key" => "Oman",
                                                    "value" => "OM"
                                                ],
                                                [
                                                    "key" => "Pakistan",
                                                    "value" => "PK"
                                                ],
                                                [
                                                    "key" => "Palau",
                                                    "value" => "PW"
                                                ],
                                                [
                                                    "key" => "Palestinian Territories",
                                                    "value" => "PS"
                                                ],
                                                [
                                                    "key" => "Panama",
                                                    "value" => "PA"
                                                ],
                                                [
                                                    "key" => "Papua New Guinea",
                                                    "value" => "PG"
                                                ],
                                                [
                                                    "key" => "Paraguay",
                                                    "value" => "PY"
                                                ],
                                                [
                                                    "key" => "Peru",
                                                    "value" => "PE"
                                                ],
                                                [
                                                    "key" => "Philippines",
                                                    "value" => "PH"
                                                ],
                                                [
                                                    "key" => "Pitcairn Islands",
                                                    "value" => "PN"
                                                ],
                                                [
                                                    "key" => "Poland",
                                                    "value" => "PL"
                                                ],
                                                [
                                                    "key" => "Portugal",
                                                    "value" => "PT"
                                                ],
                                                [
                                                    "key" => "Puerto Rico",
                                                    "value" => "PR"
                                                ],
                                                [
                                                    "key" => "Qatar",
                                                    "value" => "QA"
                                                ],
                                                [
                                                    "key" => "Romania",
                                                    "value" => "RO"
                                                ],
                                                [
                                                    "key" => "Russia",
                                                    "value" => "RU"
                                                ],
                                                [
                                                    "key" => "Rwanda",
                                                    "value" => "RW"
                                                ],
                                                [
                                                    "key" => "Réunion",
                                                    "value" => "RE"
                                                ],
                                                [
                                                    "key" => "Saint Barthélemy",
                                                    "value" => "BL"
                                                ],
                                                [
                                                    "key" => "Saint Helena",
                                                    "value" => "SH"
                                                ],
                                                [
                                                    "key" => "Saint Kitts and Nevis",
                                                    "value" => "KN"
                                                ],
                                                [
                                                    "key" => "Saint Lucia",
                                                    "value" => "LC"
                                                ],
                                                [
                                                    "key" => "Saint Martin",
                                                    "value" => "MF"
                                                ],
                                                [
                                                    "key" => "Saint Pierre and Miquelon",
                                                    "value" => "PM"
                                                ],
                                                [
                                                    "key" => "Samoa",
                                                    "value" => "WS"
                                                ],
                                                [
                                                    "key" => "San Marino",
                                                    "value" => "SM"
                                                ],
                                                [
                                                    "key" => "Saudi Arabia",
                                                    "value" => "SA"
                                                ],
                                                [
                                                    "key" => "Senegal",
                                                    "value" => "SN"
                                                ],
                                                [
                                                    "key" => "Serbia",
                                                    "value" => "RS"
                                                ],
                                                [
                                                    "key" => "Seychelles",
                                                    "value" => "SC"
                                                ],
                                                [
                                                    "key" => "Sierra Leone",
                                                    "value" => "SL"
                                                ],
                                                [
                                                    "key" => "Singapore",
                                                    "value" => "SG"
                                                ],
                                                [
                                                    "key" => "Sint Maarten",
                                                    "value" => "SX"
                                                ],
                                                [
                                                    "key" => "Slovakia",
                                                    "value" => "SK"
                                                ],
                                                [
                                                    "key" => "Slovenia",
                                                    "value" => "SI"
                                                ],
                                                [
                                                    "key" => "Solomon Islands",
                                                    "value" => "SB"
                                                ],
                                                [
                                                    "key" => "Somalia",
                                                    "value" => "SO"
                                                ],
                                                [
                                                    "key" => "South Africa",
                                                    "value" => "ZA"
                                                ],
                                                [
                                                    "key" => "South Korea",
                                                    "value" => "KR"
                                                ],
                                                [
                                                    "key" => "South Sudan",
                                                    "value" => "SS"
                                                ],
                                                [
                                                    "key" => "Spain",
                                                    "value" => "ES"
                                                ],
                                                [
                                                    "key" => "Sri Lanka",
                                                    "value" => "LK"
                                                ],
                                                [
                                                    "key" => "St. Vincent & Grenadines",
                                                    "value" => "VC"
                                                ],
                                                [
                                                    "key" => "Sudan",
                                                    "value" => "SD"
                                                ],
                                                [
                                                    "key" => "Suriname",
                                                    "value" => "SR"
                                                ],
                                                [
                                                    "key" => "Svalbard and Jan Mayen",
                                                    "value" => "SJ"
                                                ],
                                                [
                                                    "key" => "Swaziland",
                                                    "value" => "SZ"
                                                ],
                                                [
                                                    "key" => "Sweden",
                                                    "value" => "SE"
                                                ],
                                                [
                                                    "key" => "Switzerland",
                                                    "value" => "CH"
                                                ],
                                                [
                                                    "key" => "Syria",
                                                    "value" => "SY"
                                                ],
                                                [
                                                    "key" => "São Tomé and Príncipe",
                                                    "value" => "ST"
                                                ],
                                                [
                                                    "key" => "Taiwan",
                                                    "value" => "TW"
                                                ],
                                                [
                                                    "key" => "Tanzania",
                                                    "value" => "TZ"
                                                ],
                                                [
                                                    "key" => "Thailand",
                                                    "value" => "TH"
                                                ],
                                                [
                                                    "key" => "Timor-Leste",
                                                    "value" => "TL"
                                                ],
                                                [
                                                    "key" => "Togo",
                                                    "value" => "TG"
                                                ],
                                                [
                                                    "key" => "Tokelau",
                                                    "value" => "TK"
                                                ],
                                                [
                                                    "key" => "Tonga",
                                                    "value" => "TO"
                                                ],
                                                [
                                                    "key" => "Trinidad and Tobago",
                                                    "value" => "TT"
                                                ],
                                                [
                                                    "key" => "Tunisia",
                                                    "value" => "TN"
                                                ],
                                                [
                                                    "key" => "Turkey",
                                                    "value" => "TR"
                                                ],
                                                [
                                                    "key" => "Turks and Caicos Islands",
                                                    "value" => "TC"
                                                ],
                                                [
                                                    "key" => "Tuvalu",
                                                    "value" => "TV"
                                                ],
                                                [
                                                    "key" => "U.S. Outlying Islands",
                                                    "value" => "UM"
                                                ],
                                                [
                                                    "key" => "U.S. Virgin Islands",
                                                    "value" => "VI"
                                                ],
                                                [
                                                    "key" => "Uganda",
                                                    "value" => "UG"
                                                ],
                                                [
                                                    "key" => "Ukraine",
                                                    "value" => "UA"
                                                ],
                                                [
                                                    "key" => "United Arab Emirates",
                                                    "value" => "AE"
                                                ],
                                                [
                                                    "key" => "United Kingdom",
                                                    "value" => "GB"
                                                ],
                                                [
                                                    "key" => "United States",
                                                    "value" => "US"
                                                ],
                                                [
                                                    "key" => "Uruguay",
                                                    "value" => "UY"
                                                ],
                                                [
                                                    "key" => "Uzbekistan",
                                                    "value" => "UZ"
                                                ],
                                                [
                                                    "key" => "Vanuatu",
                                                    "value" => "VU"
                                                ],
                                                [
                                                    "key" => "Venezuela",
                                                    "value" => "VE"
                                                ],
                                                [
                                                    "key" => "Vietnam",
                                                    "value" => "VN"
                                                ],
                                                [
                                                    "key" => "Wallis and Futuna",
                                                    "value" => "WF"
                                                ],
                                                [
                                                    "key" => "Western Sahara",
                                                    "value" => "EH"
                                                ],
                                                [
                                                    "key" => "Yemen",
                                                    "value" => "YE"
                                                ],
                                                [
                                                    "key" => "Zambia",
                                                    "value" => "ZM"
                                                ],
                                                [
                                                    "key" => "Zimbabwe",
                                                    "value" => "ZW"
                                                ],
                                                [
                                                    "key" => "Åland Islands",
                                                    "value" => "AX"
                                                ]
                                            ],
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "optionsProviderClass" => NULL,
                                            "optionsProviderData" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => "190",
                                            "phpdocType" => "string",
                                            "dynamicOptions" => FALSE,
                                            "name" => "countryCode",
                                            "title" => "Country",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "phone",
                                        "label" => "phone",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => NULL,
                                            "name" => "phone",
                                            "title" => "phone",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ]
                ],
                "mutationEntities" => [

                ],
                "specialEntities" => [
                    "asset" => [
                        "id" => "asset",
                        "create" => FALSE,
                        "read" => TRUE
                    ],
                    "asset_folder" => [
                        "id" => "asset_folder",
                        "read" => TRUE
                    ],
                    "object_folder" => [
                        "id" => "object_folder",
                        "read" => TRUE
                    ]
                ]
            ],
            "security" => [
                "method" => "datahub_apikey",
                "apikey" => "295b86489dca91a4aafaac8315cdb84a"
            ],
            "workspaces" => [
                "asset" => [

                ],
                "object" => [
                    [
                        "read" => TRUE,
                        "cpath" => "/Shop",
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE,
                        "id" => "extModel16141-1"
                    ]
                ]
            ]
        ],
        "assets" => [
            "general" => [
                "active" => TRUE,
                "type" => "graphql",
                "name" => "assets",
                "description" => "",
                "sqlObjectCondition" => "",
                "path" => NULL
            ],
            "schema" => [
                "queryEntities" => [

                ],
                "mutationEntities" => [

                ],
                "specialEntities" => [
                    "asset" => [
                        "id" => "asset",
                        "read" => TRUE
                    ],
                    "asset_folder" => [
                        "id" => "asset_folder",
                        "read" => TRUE
                    ],
                    "object_folder" => [
                        "id" => "object_folder"
                    ]
                ]
            ],
            "security" => [
                "method" => "datahub_apikey",
                "apikey" => "9e265983fbd2dc42b8f7cdb841c82807"
            ],
            "workspaces" => [
                "asset" => [

                ],
                "object" => [

                ]
            ]
        ],
        "events" => [
            "general" => [
                "active" => TRUE,
                "type" => "graphql",
                "name" => "events",
                "description" => "",
                "sqlObjectCondition" => "",
                "path" => NULL
            ],
            "schema" => [
                "queryEntities" => [
                    "Event" => [
                        "id" => "Event",
                        "name" => "Event",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "title",
                                        "label" => "title",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 540,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "title",
                                            "title" => "title",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "description",
                                        "label" => "Description",
                                        "dataType" => "wysiwyg",
                                        "layout" => [
                                            "fieldtype" => "wysiwyg",
                                            "width" => 640,
                                            "height" => 250,
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "phpdocType" => "string",
                                            "toolbarConfig" => "",
                                            "excludeFromSearchIndex" => FALSE,
                                            "name" => "description",
                                            "title" => "Description",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "locationAddress",
                                        "label" => "Location Address",
                                        "dataType" => "textarea",
                                        "layout" => [
                                            "fieldtype" => "textarea",
                                            "width" => 550,
                                            "height" => 100,
                                            "maxLength" => NULL,
                                            "showCharCount" => FALSE,
                                            "excludeFromSearchIndex" => FALSE,
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "phpdocType" => "string",
                                            "name" => "locationAddress",
                                            "title" => "Location Address",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "locationMap",
                                        "label" => "Location Map",
                                        "dataType" => "geopoint",
                                        "layout" => [
                                            "fieldtype" => "geopoint",
                                            "queryColumnType" => [
                                                "longitude" => "double",
                                                "latitude" => "double"
                                            ],
                                            "columnType" => [
                                                "longitude" => "double",
                                                "latitude" => "double"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\Geopoint",
                                            "lat" => 0,
                                            "lng" => 0,
                                            "zoom" => 1,
                                            "mapType" => "roadmap",
                                            "name" => "locationMap",
                                            "title" => "Location Map",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "cars",
                                        "label" => "Cars",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "phpdocType" => "array",
                                            "relationType" => TRUE,
                                            "visibleFields" => [

                                            ],
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "Car"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "cars",
                                            "title" => "Cars",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "isOperator" => TRUE,
                                    "attributes" => [
                                        "label" => "FromDate",
                                        "type" => "operator",
                                        "class" => "DateFormatter",
                                        "format" => "D, M d Y",
                                        "childs" => [
                                            [
                                                "isOperator" => FALSE,
                                                "attributes" => [
                                                    "label" => "Start (fromDate)",
                                                    "type" => "value",
                                                    "class" => "DefaultValue",
                                                    "attribute" => "fromDate",
                                                    "dataType" => "datetime",
                                                    "childs" => [

                                                    ]
                                                ]
                                            ]
                                        ]
                                    ],
                                    "key" => "#5d83518861112"
                                ],
                                [
                                    "isOperator" => TRUE,
                                    "attributes" => [
                                        "label" => "ToDate",
                                        "type" => "operator",
                                        "class" => "DateFormatter",
                                        "format" => "D, M d Y",
                                        "childs" => [
                                            [
                                                "isOperator" => FALSE,
                                                "attributes" => [
                                                    "label" => "End (toDate)",
                                                    "type" => "value",
                                                    "class" => "DefaultValue",
                                                    "attribute" => "toDate",
                                                    "dataType" => "datetime",
                                                    "childs" => [

                                                    ]
                                                ]
                                            ]
                                        ]
                                    ],
                                    "key" => "#5d83518861115"
                                ],
                                [
                                    "isOperator" => TRUE,
                                    "attributes" => [
                                        "label" => "FromTime",
                                        "type" => "operator",
                                        "class" => "DateFormatter",
                                        "format" => "h:i A",
                                        "childs" => [
                                            [
                                                "isOperator" => FALSE,
                                                "attributes" => [
                                                    "label" => "Start (fromDate)",
                                                    "type" => "value",
                                                    "class" => "DefaultValue",
                                                    "attribute" => "fromDate",
                                                    "dataType" => "datetime",
                                                    "childs" => [

                                                    ]
                                                ]
                                            ]
                                        ]
                                    ],
                                    "key" => "#5d83518861116"
                                ],
                                [
                                    "isOperator" => TRUE,
                                    "attributes" => [
                                        "label" => "ToTime",
                                        "type" => "operator",
                                        "class" => "DateFormatter",
                                        "format" => "h:i A",
                                        "childs" => [
                                            [
                                                "isOperator" => FALSE,
                                                "attributes" => [
                                                    "label" => "End (toDate)",
                                                    "type" => "value",
                                                    "class" => "DefaultValue",
                                                    "attribute" => "toDate",
                                                    "dataType" => "datetime",
                                                    "childs" => [

                                                    ]
                                                ]
                                            ]
                                        ]
                                    ],
                                    "key" => "#5d83518861117"
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "mainImage",
                                        "label" => "Image",
                                        "dataType" => "image",
                                        "layout" => [
                                            "fieldtype" => "image",
                                            "width" => 500,
                                            "height" => 350,
                                            "uploadPath" => "",
                                            "queryColumnType" => "int(11)",
                                            "columnType" => "int(11)",
                                            "phpdocType" => "\\Pimcore\\Model\\Asset\\Image",
                                            "name" => "mainImage",
                                            "title" => "Image",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "video",
                                        "label" => "Video",
                                        "dataType" => "video",
                                        "layout" => [
                                            "fieldtype" => "video",
                                            "width" => 500,
                                            "height" => 350,
                                            "queryColumnType" => "text",
                                            "columnType" => "text",
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\Video",
                                            "name" => "video",
                                            "title" => "Video",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "images",
                                        "label" => "Additional Images",
                                        "dataType" => "imageGallery",
                                        "layout" => [
                                            "fieldtype" => "imageGallery",
                                            "queryColumnType" => [
                                                "images" => "text",
                                                "hotspots" => "text"
                                            ],
                                            "columnType" => [
                                                "images" => "text",
                                                "hotspots" => "text"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\ImageGallery",
                                            "width" => 300,
                                            "height" => 200,
                                            "uploadPath" => "",
                                            "ratioX" => NULL,
                                            "ratioY" => NULL,
                                            "predefinedDataTemplates" => "",
                                            "name" => "images",
                                            "title" => "Additional Images",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "tags",
                                        "label" => "Tags",
                                        "dataType" => "multiselect",
                                        "layout" => [
                                            "fieldtype" => "multiselect",
                                            "options" => [
                                                [
                                                    "key" => "1960",
                                                    "value" => "1960"
                                                ],
                                                [
                                                    "key" => "BMW Group",
                                                    "value" => "BMW Group"
                                                ],
                                                [
                                                    "key" => "Vintage",
                                                    "value" => "Vintage"
                                                ],
                                                [
                                                    "key" => "Ferrari",
                                                    "value" => "Ferrari"
                                                ]
                                            ],
                                            "width" => 500,
                                            "height" => "",
                                            "maxItems" => "",
                                            "renderType" => "tags",
                                            "optionsProviderClass" => "",
                                            "optionsProviderData" => "",
                                            "queryColumnType" => "text",
                                            "columnType" => "text",
                                            "phpdocType" => "array",
                                            "dynamicOptions" => FALSE,
                                            "name" => "tags",
                                            "title" => "Tags",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "margin-left:50px",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "contactName",
                                        "label" => "Name",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 250,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "contactName",
                                            "title" => "Name",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "contactPhone",
                                        "label" => "Phone",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 250,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "contactPhone",
                                            "title" => "Phone",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "contactEmail",
                                        "label" => "Email",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 350,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "contactEmail",
                                            "title" => "Email",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "contactAddress",
                                        "label" => "Address",
                                        "dataType" => "textarea",
                                        "layout" => [
                                            "fieldtype" => "textarea",
                                            "width" => 550,
                                            "height" => 100,
                                            "maxLength" => NULL,
                                            "showCharCount" => FALSE,
                                            "excludeFromSearchIndex" => FALSE,
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "phpdocType" => "string",
                                            "name" => "contactAddress",
                                            "title" => "Address",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "Car" => [
                        "id" => "Car",
                        "name" => "Car",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "name",
                                        "label" => "Name",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "name",
                                            "title" => "Name",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "description",
                                        "label" => "Description",
                                        "dataType" => "wysiwyg",
                                        "layout" => [
                                            "fieldtype" => "wysiwyg",
                                            "width" => "",
                                            "height" => "",
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "phpdocType" => "string",
                                            "toolbarConfig" => "",
                                            "excludeFromSearchIndex" => FALSE,
                                            "name" => "description",
                                            "title" => "Description",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "manufacturer",
                                        "label" => "Manufacturer",
                                        "dataType" => "manyToOneRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToOneRelation",
                                            "width" => 400,
                                            "assetUploadPath" => "",
                                            "relationType" => TRUE,
                                            "queryColumnType" => [
                                                "id" => "int(11)",
                                                "type" => "enum('document','asset','object')"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject",
                                            "objectsAllowed" => TRUE,
                                            "assetsAllowed" => FALSE,
                                            "assetTypes" => [

                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "Manufacturer"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "manufacturer",
                                            "title" => "Manufacturer",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "carClass",
                                        "label" => "Class",
                                        "dataType" => "select",
                                        "layout" => [
                                            "fieldtype" => "select",
                                            "options" => [
                                                [
                                                    "key" => "Full-size luxury car",
                                                    "value" => "Full-size luxury car"
                                                ],
                                                [
                                                    "key" => "Grand tourer",
                                                    "value" => "Grand tourer"
                                                ],
                                                [
                                                    "key" => "Light commercial vehicle",
                                                    "value" => "Light commercial vehicle"
                                                ],
                                                [
                                                    "key" => "Muscle Car",
                                                    "value" => "Muscle Car"
                                                ],
                                                [
                                                    "key" => "City Car",
                                                    "value" => "City Car"
                                                ],
                                                [
                                                    "key" => "Executive car",
                                                    "value" => "Executive car"
                                                ],
                                                [
                                                    "key" => "Economy car",
                                                    "value" => "Economy car"
                                                ],
                                                [
                                                    "key" => "Personal luxury car",
                                                    "value" => "Personal luxury car"
                                                ],
                                                [
                                                    "key" => "Full-Size",
                                                    "value" => "Full-Size"
                                                ],
                                                [
                                                    "key" => "Family car",
                                                    "value" => "Family car"
                                                ],
                                                [
                                                    "key" => "Mid-size luxury",
                                                    "value" => "Mid-size luxury"
                                                ],
                                                [
                                                    "key" => "sports car",
                                                    "value" => "sports car"
                                                ]
                                            ],
                                            "width" => 300,
                                            "defaultValue" => "",
                                            "optionsProviderClass" => "",
                                            "optionsProviderData" => "",
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "dynamicOptions" => FALSE,
                                            "name" => "carClass",
                                            "title" => "Class",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "productionYear",
                                        "label" => "Production Year",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => 300,
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => TRUE,
                                            "unsigned" => TRUE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => FALSE,
                                            "decimalSize" => NULL,
                                            "decimalPrecision" => NULL,
                                            "name" => "productionYear",
                                            "title" => "Production Year",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "Manufacturer" => [
                        "id" => "Manufacturer",
                        "name" => "Manufacturer",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "name",
                                        "label" => "Name",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "name",
                                            "title" => "Name",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "logo",
                                        "label" => "Logo",
                                        "dataType" => "image",
                                        "layout" => [
                                            "fieldtype" => "image",
                                            "width" => 500,
                                            "height" => "",
                                            "uploadPath" => "",
                                            "queryColumnType" => "int(11)",
                                            "columnType" => "int(11)",
                                            "phpdocType" => "\\Pimcore\\Model\\Asset\\Image",
                                            "name" => "logo",
                                            "title" => "Logo",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ]
                ],
                "mutationEntities" => [

                ],
                "specialEntities" => [
                    "asset" => [
                        "id" => "asset",
                        "read" => TRUE
                    ],
                    "asset_folder" => [
                        "id" => "asset_folder",
                        "read" => TRUE
                    ],
                    "object_folder" => [
                        "id" => "object_folder",
                        "read" => FALSE
                    ],
                    "document" => [
                        "id" => "document"
                    ]
                ]
            ],
            "security" => [
                "method" => "datahub_apikey",
                "apikey" => "8e0935fe948ccf727342e86015c00834"
            ],
            "workspaces" => [
                "document" => [

                ],
                "asset" => [

                ],
                "object" => [
                    [
                        "read" => TRUE,
                        "cpath" => "/Events",
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE,
                        "id" => "extModel3397-1"
                    ]
                ]
            ]
        ],
        "Bike" => [
            "general" => [
                "active" => TRUE,
                "type" => "graphql",
                "name" => "Bike",
                "description" => "",
                "sqlObjectCondition" => "",
                "modificationDate" => 1625190637,
                "path" => NULL
            ],
            "schema" => [
                "queryEntities" => [
                    "Bicicleta" => [
                        "id" => "Bicicleta",
                        "name" => "Bicicleta",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "name",
                                        "label" => "Nome",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "name",
                                            "title" => "Nome",
                                            "tooltip" => "",
                                            "mandatory" => TRUE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "id",
                                        "label" => "id",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "id",
                                            "name" => "id",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "published",
                                        "label" => "published",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "published",
                                            "name" => "published",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "availability",
                                        "label" => "Disponibilidade",
                                        "dataType" => "checkbox",
                                        "layout" => [
                                            "fieldtype" => "checkbox",
                                            "defaultValue" => 1,
                                            "queryColumnType" => "tinyint(1)",
                                            "columnType" => "tinyint(1)",
                                            "name" => "availability",
                                            "title" => "Disponibilidade",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "brand",
                                        "label" => "Marca",
                                        "dataType" => "manyToOneRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToOneRelation",
                                            "width" => "",
                                            "assetUploadPath" => "",
                                            "relationType" => TRUE,
                                            "queryColumnType" => [
                                                "id" => "int(11)",
                                                "type" => "enum('document','asset','object')"
                                            ],
                                            "objectsAllowed" => TRUE,
                                            "assetsAllowed" => FALSE,
                                            "assetTypes" => [

                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "Marca"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "brand",
                                            "title" => "Marca",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "categorias",
                                        "label" => "Categorias",
                                        "dataType" => "manyToOneRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToOneRelation",
                                            "width" => "",
                                            "assetUploadPath" => "",
                                            "relationType" => TRUE,
                                            "queryColumnType" => [
                                                "id" => "int(11)",
                                                "type" => "enum('document','asset','object')"
                                            ],
                                            "objectsAllowed" => TRUE,
                                            "assetsAllowed" => FALSE,
                                            "assetTypes" => [

                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "Categoria"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "categorias",
                                            "title" => "Categorias",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "collectionYear",
                                        "label" => "Ano Cole&ccedil;&atilde;o",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "integer" => TRUE,
                                            "unsigned" => TRUE,
                                            "minValue" => 1,
                                            "maxValue" => 99,
                                            "unique" => FALSE,
                                            "decimalSize" => NULL,
                                            "decimalPrecision" => 0,
                                            "name" => "collectionYear",
                                            "title" => "Ano Cole&ccedil;&atilde;o",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "collectionYear2",
                                        "label" => "Ano Cole&ccedil;&atilde;o",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "integer" => TRUE,
                                            "unsigned" => TRUE,
                                            "minValue" => 1,
                                            "maxValue" => 99,
                                            "unique" => FALSE,
                                            "decimalSize" => NULL,
                                            "decimalPrecision" => 0,
                                            "name" => "collectionYear2",
                                            "title" => "Ano Cole&ccedil;&atilde;o",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "cover",
                                        "label" => "Imagem Principal",
                                        "dataType" => "image",
                                        "layout" => [
                                            "fieldtype" => "image",
                                            "queryColumnType" => "int(11)",
                                            "columnType" => "int(11)",
                                            "name" => "cover",
                                            "title" => "Imagem Principal",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE,
                                            "width" => "",
                                            "height" => "",
                                            "uploadPath" => ""
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "description",
                                        "label" => "Descri&ccedil;&atilde;o (B2B)",
                                        "dataType" => "wysiwyg",
                                        "layout" => [
                                            "fieldtype" => "wysiwyg",
                                            "width" => "",
                                            "height" => "",
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "toolbarConfig" => "",
                                            "excludeFromSearchIndex" => FALSE,
                                            "name" => "description",
                                            "title" => "Descri&ccedil;&atilde;o (B2B)",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "label",
                                        "label" => "Selos de destaque",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "name,text",
                                            "allowToCreateNewObject" => TRUE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "T&iacute;tulo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "text" => [
                                                    "name" => "text",
                                                    "title" => "Texto",
                                                    "fieldtype" => "textarea",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "info"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "label",
                                            "title" => "Selos de destaque",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "featuresList",
                                        "label" => "Destaque",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "name,description",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Nome",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "description" => [
                                                    "name" => "description",
                                                    "title" => "Descri&ccedil;&atilde;o",
                                                    "fieldtype" => "textarea",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "Destaque"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "featuresList",
                                            "title" => "Destaque",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "useRecommendation",
                                        "label" => "Uso recomendado",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "name,gallery",
                                            "allowToCreateNewObject" => TRUE,
                                            "optimizedAdminLoading" => TRUE,
                                            "visibleFieldDefinitions" => [
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "T&iacute;tulo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "gallery" => [
                                                    "name" => "gallery",
                                                    "title" => "Gallery",
                                                    "fieldtype" => "imageGallery",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "info"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "useRecommendation",
                                            "title" => "Uso recomendado",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "frameSizes",
                                        "label" => "Tamanho do quadro",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "id,size",
                                            "allowToCreateNewObject" => TRUE,
                                            "optimizedAdminLoading" => TRUE,
                                            "visibleFieldDefinitions" => [
                                                "id" => [
                                                    "name" => "id",
                                                    "title" => "ID",
                                                    "fieldtype" => "input"
                                                ],
                                                "size" => [
                                                    "name" => "size",
                                                    "title" => "Tamanho",
                                                    "fieldtype" => "quantityValue",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "Tamanho"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "frameSizes",
                                            "title" => "Tamanho do quadro",
                                            "tooltip" => "Op&ccedil;&otilde;es  de varia&ccedil;&otilde;es",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "frameColors",
                                        "label" => "Cor(es)",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "id,filename",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "id" => [
                                                    "name" => "id",
                                                    "title" => "ID",
                                                    "fieldtype" => "input"
                                                ],
                                                "filename" => [
                                                    "name" => "filename",
                                                    "title" => "Filename",
                                                    "fieldtype" => "input"
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "Cor"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "frameColors",
                                            "title" => "Cor(es)",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "suggestedprice",
                                        "label" => "Pre&ccedil;o sugerido",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "integer" => TRUE,
                                            "unsigned" => TRUE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => FALSE,
                                            "decimalSize" => NULL,
                                            "decimalPrecision" => NULL,
                                            "name" => "suggestedprice",
                                            "title" => "Pre&ccedil;o sugerido",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "bikeWeight",
                                        "label" => "Peso ",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "3",
                                            "validUnits" => [
                                                "3"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => TRUE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "bikeWeight",
                                            "title" => "Peso ",
                                            "tooltip" => "Da bike completa",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "adverts",
                                        "label" => "An&uacute;ncios",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "name,text",
                                            "allowToCreateNewObject" => TRUE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "T&iacute;tulo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "text" => [
                                                    "name" => "text",
                                                    "title" => "Texto",
                                                    "fieldtype" => "textarea",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "info"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "adverts",
                                            "title" => "An&uacute;ncios",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "frame",
                                        "label" => "Quadro",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "name,model,manufacturer",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "frame",
                                            "title" => "Quadro",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "headSet",
                                        "label" => "Movimento Direção",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "name,model,manufacturer",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "headSet",
                                            "title" => "Movimento Direção",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "fork",
                                        "label" => "Garfo/Suspensão",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "name,model,manufacturer",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "fork",
                                            "title" => "Garfo/Suspensão",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "rearShock",
                                        "label" => "Amortecedor traseiro",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "name,model,manufacturer",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "rearShock",
                                            "title" => "Amortecedor traseiro",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "rims",
                                        "label" => "Aros",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "manufacturer,model,name",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "rims",
                                            "title" => "Aros",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "frontHub",
                                        "label" => "Cubo dianteiro",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "manufacturer,model,name",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "frontHub",
                                            "title" => "Cubo dianteiro",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "reartHub",
                                        "label" => "Cubo traseiro",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "manufacturer,model,name",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "reartHub",
                                            "title" => "Cubo traseiro",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "spokes",
                                        "label" => "Raios",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "manufacturer,model,name",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "spokes",
                                            "title" => "Raios",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "nipples",
                                        "label" => "Nipples",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "manufacturer,model,name",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "nipples",
                                            "title" => "Nipples",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "tires",
                                        "label" => "Pneus",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "manufacturer,model,name",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "tires",
                                            "title" => "Pneus",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "tubes",
                                        "label" => "Câmara de Ar",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "manufacturer,model,name",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "tubes",
                                            "title" => "Câmara de Ar",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "brakeLevers",
                                        "label" => "Manete",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "manufacturer,model,name",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "brakeLevers",
                                            "title" => "Manete",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Brakes",
                                        "label" => "Pinça de freio",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "manufacturer,model,name",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "Brakes",
                                            "title" => "Pinça de freio",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "rotors",
                                        "label" => "Disco",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "manufacturer,model,name",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "rotors",
                                            "title" => "Disco",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "grip",
                                        "label" => "Manopla",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "manufacturer,model,name",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "grip",
                                            "title" => "Manopla",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "handlebar",
                                        "label" => "Guidão",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "manufacturer,model,name",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "handlebar",
                                            "title" => "Guidão",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "stem",
                                        "label" => "Suporte de guidão",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "manufacturer,model,name",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "stem",
                                            "title" => "Suporte de guidão",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "saddle",
                                        "label" => "Selim",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "manufacturer,model,name",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "saddle",
                                            "title" => "Selim",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "seatpost",
                                        "label" => "Canote",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "manufacturer,model,name",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "seatpost",
                                            "title" => "Canote",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "seatpostClamp",
                                        "label" => "Abraçadeira",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "manufacturer,model,name",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "seatpostClamp",
                                            "title" => "Abraçadeira",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "bottomBracket",
                                        "label" => "Movimento Central",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "name,model,manufacturer",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "bottomBracket",
                                            "title" => "Movimento Central",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "chain",
                                        "label" => "Corrente",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "name,model,manufacturer",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "chain",
                                            "title" => "Corrente",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "crank",
                                        "label" => "Pedivela",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "name,model,manufacturer",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "crank",
                                            "title" => "Pedivela",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "rearCogs",
                                        "label" => "Cog traseiro",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "name,model,manufacturer",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "rearCogs",
                                            "title" => "Cog traseiro",
                                            "tooltip" => "Defina se é Cassete ou Roda Livre ",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "frontDerailleur",
                                        "label" => "Câmbio dianteiro",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "name,model,manufacturer",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "frontDerailleur",
                                            "title" => "Câmbio dianteiro",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "rearDerailleur",
                                        "label" => "Câmbio traseiro",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "name,model,manufacturer",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "rearDerailleur",
                                            "title" => "Câmbio traseiro",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "shifters",
                                        "label" => "Alavanca(s)",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "name,model,manufacturer",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "shifters",
                                            "title" => "Alavanca(s)",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "extra",
                                        "label" => "Extra",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "name,model,manufacturer",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Series",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "model" => [
                                                    "name" => "model",
                                                    "title" => "Modelo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "manufacturer" => [
                                                    "name" => "manufacturer",
                                                    "title" => "Fabricante",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "CompMontagem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "extra",
                                            "title" => "Extra",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "B2Bgallery",
                                        "label" => "B2B Galeria",
                                        "dataType" => "fieldcollections",
                                        "layout" => [
                                            "fieldtype" => "fieldcollections",
                                            "allowedTypes" => [
                                                "Destaque",
                                                "Galeria",
                                                "VideoExternal",
                                                "Videos"
                                            ],
                                            "lazyLoading" => TRUE,
                                            "maxItems" => "",
                                            "disallowAddRemove" => FALSE,
                                            "disallowReorder" => FALSE,
                                            "collapsed" => FALSE,
                                            "collapsible" => FALSE,
                                            "border" => FALSE,
                                            "name" => "B2Bgallery",
                                            "title" => "B2B Galeria",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "technology",
                                        "label" => "Tecnologia",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "text,gallery",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "text" => [
                                                    "name" => "text",
                                                    "title" => "Texto",
                                                    "fieldtype" => "textarea",
                                                    "noteditable" => TRUE
                                                ],
                                                "gallery" => [
                                                    "name" => "gallery",
                                                    "title" => "Gallery",
                                                    "fieldtype" => "imageGallery",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "info"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "technology",
                                            "title" => "Tecnologia",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "faq",
                                        "label" => "FAQ",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "title",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [

                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "info"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "faq",
                                            "title" => "FAQ",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "warranty",
                                        "label" => "Garantia",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "name,text",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "T&iacute;tulo",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "text" => [
                                                    "name" => "text",
                                                    "title" => "Texto",
                                                    "fieldtype" => "textarea",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "info"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "warranty",
                                            "title" => "Garantia",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "geometry",
                                        "label" => "Geometria",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "name,wheel,frameSize",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Nome",
                                                    "fieldtype" => "input",
                                                    "noteditable" => TRUE
                                                ],
                                                "wheel" => [
                                                    "name" => "wheel",
                                                    "title" => "Aro",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ],
                                                "frameSize" => [
                                                    "name" => "frameSize",
                                                    "title" => "Tamanho do quadro",
                                                    "fieldtype" => "manyToManyObjectRelation",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "Geometria"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "geometry",
                                            "title" => "Geometria",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "longdescription",
                                        "label" => "Descri&ccedil;&atilde;o (B2C)",
                                        "dataType" => "wysiwyg",
                                        "layout" => [
                                            "fieldtype" => "wysiwyg",
                                            "width" => "",
                                            "height" => "",
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "toolbarConfig" => "",
                                            "excludeFromSearchIndex" => FALSE,
                                            "name" => "longdescription",
                                            "title" => "Descri&ccedil;&atilde;o (B2C)",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "galeries",
                                        "label" => "Galeria",
                                        "dataType" => "fieldcollections",
                                        "layout" => [
                                            "fieldtype" => "fieldcollections",
                                            "allowedTypes" => [
                                                "Destaque",
                                                "Galeria",
                                                "RotateGallery",
                                                "VideoExternal",
                                                "Videos"
                                            ],
                                            "lazyLoading" => TRUE,
                                            "maxItems" => "",
                                            "disallowAddRemove" => FALSE,
                                            "disallowReorder" => FALSE,
                                            "collapsed" => FALSE,
                                            "collapsible" => FALSE,
                                            "border" => FALSE,
                                            "name" => "galeries",
                                            "title" => "Galeria",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "IndicationsForUse",
                                        "label" => "Compatibilidade",
                                        "dataType" => "advancedManyToManyRelation",
                                        "layout" => [
                                            "columns" => [

                                            ],
                                            "columnKeys" => [

                                            ],
                                            "fieldtype" => "advancedManyToManyRelation",
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\ElementMetadata[]",
                                            "optimizedAdminLoading" => FALSE,
                                            "enableBatchEdit" => FALSE,
                                            "allowMultipleAssignments" => FALSE,
                                            "width" => "",
                                            "height" => NULL,
                                            "maxItems" => "",
                                            "assetUploadPath" => "/Manuais",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "objectsAllowed" => FALSE,
                                            "assetsAllowed" => TRUE,
                                            "assetTypes" => [

                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "classes" => [

                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "IndicationsForUse",
                                            "title" => "Compatibilidade",
                                            "tooltip" => "Compatibilidade/Peças sobressalentes e de desgaste",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "buyingtogether",
                                        "label" => "Compre junto",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "name",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "name" => [
                                                    "name" => "name",
                                                    "title" => "Name",
                                                    "fieldtype" => "input"
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "Bicicleta"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "buyingtogether",
                                            "title" => "Compre junto",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "attachment",
                                        "label" => "Anexo(s)",
                                        "dataType" => "advancedManyToManyRelation",
                                        "layout" => [
                                            "columns" => [

                                            ],
                                            "columnKeys" => [

                                            ],
                                            "fieldtype" => "advancedManyToManyRelation",
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\ElementMetadata[]",
                                            "optimizedAdminLoading" => FALSE,
                                            "enableBatchEdit" => FALSE,
                                            "allowMultipleAssignments" => FALSE,
                                            "width" => "",
                                            "height" => NULL,
                                            "maxItems" => "",
                                            "assetUploadPath" => "/Manuais",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "objectsAllowed" => FALSE,
                                            "assetsAllowed" => TRUE,
                                            "assetTypes" => [
                                                [
                                                    "assetTypes" => "folder"
                                                ],
                                                [
                                                    "assetTypes" => "image"
                                                ],
                                                [
                                                    "assetTypes" => "text"
                                                ],
                                                [
                                                    "assetTypes" => "audio"
                                                ],
                                                [
                                                    "assetTypes" => "video"
                                                ],
                                                [
                                                    "assetTypes" => "document"
                                                ],
                                                [
                                                    "assetTypes" => "archive"
                                                ]
                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "classes" => [

                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "attachment",
                                            "title" => "Anexo(s)",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "technicalSheet",
                                        "label" => "Ficha T&eacute;cnica",
                                        "dataType" => "advancedManyToManyRelation",
                                        "layout" => [
                                            "columns" => [

                                            ],
                                            "columnKeys" => [

                                            ],
                                            "fieldtype" => "advancedManyToManyRelation",
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\ElementMetadata[]",
                                            "optimizedAdminLoading" => FALSE,
                                            "enableBatchEdit" => FALSE,
                                            "allowMultipleAssignments" => FALSE,
                                            "width" => "",
                                            "height" => NULL,
                                            "maxItems" => "",
                                            "assetUploadPath" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "objectsAllowed" => FALSE,
                                            "assetsAllowed" => TRUE,
                                            "assetTypes" => [
                                                [
                                                    "assetTypes" => "folder"
                                                ],
                                                [
                                                    "assetTypes" => "image"
                                                ],
                                                [
                                                    "assetTypes" => "text"
                                                ],
                                                [
                                                    "assetTypes" => "audio"
                                                ],
                                                [
                                                    "assetTypes" => "video"
                                                ],
                                                [
                                                    "assetTypes" => "document"
                                                ],
                                                [
                                                    "assetTypes" => "archive"
                                                ]
                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "classes" => [

                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "technicalSheet",
                                            "title" => "Ficha T&eacute;cnica",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "shopkeepermaterial",
                                        "label" => "Material lojista",
                                        "dataType" => "advancedManyToManyRelation",
                                        "layout" => [
                                            "columns" => [

                                            ],
                                            "columnKeys" => [

                                            ],
                                            "fieldtype" => "advancedManyToManyRelation",
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\ElementMetadata[]",
                                            "optimizedAdminLoading" => TRUE,
                                            "enableBatchEdit" => TRUE,
                                            "allowMultipleAssignments" => TRUE,
                                            "width" => "",
                                            "height" => NULL,
                                            "maxItems" => "",
                                            "assetUploadPath" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "objectsAllowed" => FALSE,
                                            "assetsAllowed" => TRUE,
                                            "assetTypes" => [
                                                [
                                                    "assetTypes" => "folder"
                                                ],
                                                [
                                                    "assetTypes" => "image"
                                                ],
                                                [
                                                    "assetTypes" => "text"
                                                ],
                                                [
                                                    "assetTypes" => "audio"
                                                ],
                                                [
                                                    "assetTypes" => "video"
                                                ],
                                                [
                                                    "assetTypes" => "document"
                                                ],
                                                [
                                                    "assetTypes" => "archive"
                                                ]
                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "classes" => [

                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "shopkeepermaterial",
                                            "title" => "Material lojista",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "jppcode",
                                        "label" => "C&oacute;digo JPP",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "integer" => FALSE,
                                            "unsigned" => FALSE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => TRUE,
                                            "decimalSize" => NULL,
                                            "decimalPrecision" => NULL,
                                            "name" => "jppcode",
                                            "title" => "C&oacute;digo JPP",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "typeTaxation",
                                        "label" => "Tipo de tributação",
                                        "dataType" => "select",
                                        "layout" => [
                                            "fieldtype" => "select",
                                            "options" => [
                                                [
                                                    "key" => "Nac",
                                                    "value" => "Nac"
                                                ],
                                                [
                                                    "key" => "Imp",
                                                    "value" => "Imp"
                                                ]
                                            ],
                                            "width" => "",
                                            "defaultValue" => "",
                                            "optionsProviderClass" => "",
                                            "optionsProviderData" => "",
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "dynamicOptions" => FALSE,
                                            "name" => "typeTaxation",
                                            "title" => "Tipo de tributação",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "ean",
                                        "label" => "EAN",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "integer" => FALSE,
                                            "unsigned" => FALSE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => FALSE,
                                            "decimalSize" => NULL,
                                            "decimalPrecision" => NULL,
                                            "name" => "ean",
                                            "title" => "EAN",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "stock",
                                        "label" => "Estoque",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "integer" => FALSE,
                                            "unsigned" => FALSE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => FALSE,
                                            "decimalSize" => NULL,
                                            "decimalPrecision" => NULL,
                                            "name" => "stock",
                                            "title" => "Estoque",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "price",
                                        "label" => "Pre&ccedil;o ",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "integer" => FALSE,
                                            "unsigned" => FALSE,
                                            "minValue" => 0,
                                            "maxValue" => NULL,
                                            "unique" => FALSE,
                                            "decimalSize" => 10,
                                            "decimalPrecision" => 2,
                                            "name" => "price",
                                            "title" => "Pre&ccedil;o ",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "ProductMeasure~width",
                                        "label" => "Largura",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "1",
                                            "validUnits" => [
                                                "1",
                                                "8",
                                                "3",
                                                "7",
                                                "4",
                                                "5",
                                                "6",
                                                "2",
                                                "9",
                                                "10"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "width",
                                            "title" => "Largura",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "ProductMeasure~height",
                                        "label" => "Altura",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "1",
                                            "validUnits" => [
                                                "9",
                                                "2",
                                                "6",
                                                "5",
                                                "4",
                                                "7",
                                                "3",
                                                "8",
                                                "1",
                                                "10"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "height",
                                            "title" => "Altura",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "ProductMeasure~lenght",
                                        "label" => "Comprimento",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "1",
                                            "validUnits" => [
                                                "9",
                                                "2",
                                                "6",
                                                "5",
                                                "4",
                                                "7",
                                                "3",
                                                "8",
                                                "1",
                                                "10"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "lenght",
                                            "title" => "Comprimento",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "ProductMeasure~weight",
                                        "label" => "Peso",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "3",
                                            "validUnits" => [
                                                "9",
                                                "2",
                                                "6",
                                                "5",
                                                "4",
                                                "7",
                                                "3",
                                                "8",
                                                "1",
                                                "10"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "weight",
                                            "title" => "Peso",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "ProductPackaging~width",
                                        "label" => "Largura",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "1",
                                            "validUnits" => [
                                                "9",
                                                "2",
                                                "6",
                                                "5",
                                                "4",
                                                "7",
                                                "3",
                                                "8",
                                                "1",
                                                "10"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "width",
                                            "title" => "Largura",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "ProductPackaging~packing",
                                        "label" => "Embalagem",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "11",
                                            "validUnits" => [
                                                "11"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "packing",
                                            "title" => "Embalagem",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "ProductPackaging~weight",
                                        "label" => "Peso",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "kg",
                                            "validUnits" => [
                                                "9",
                                                "2",
                                                "6",
                                                "5",
                                                "4",
                                                "7",
                                                "3",
                                                "8",
                                                "1",
                                                "10"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "weight",
                                            "title" => "Peso",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "ProductPackaging~height",
                                        "label" => "Altura",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "1",
                                            "validUnits" => [
                                                "9",
                                                "2",
                                                "6",
                                                "5",
                                                "4",
                                                "7",
                                                "3",
                                                "8",
                                                "1",
                                                "10"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "height",
                                            "title" => "Altura",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "ProductPackaging~lenght",
                                        "label" => "Comprimento",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "1",
                                            "validUnits" => [
                                                "9",
                                                "2",
                                                "6",
                                                "5",
                                                "4",
                                                "7",
                                                "3",
                                                "8",
                                                "1",
                                                "10"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "lenght",
                                            "title" => "Comprimento",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "WholesalePacking~width",
                                        "label" => "Largura",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "1",
                                            "validUnits" => [
                                                "9",
                                                "2",
                                                "6",
                                                "5",
                                                "4",
                                                "7",
                                                "3",
                                                "8",
                                                "1",
                                                "11",
                                                "10"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "width",
                                            "title" => "Largura",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "WholesalePacking~lenght",
                                        "label" => "Comprimento",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "1",
                                            "validUnits" => [
                                                "9",
                                                "2",
                                                "6",
                                                "5",
                                                "4",
                                                "7",
                                                "3",
                                                "8",
                                                "1",
                                                "11",
                                                "10"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "lenght",
                                            "title" => "Comprimento",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "WholesalePacking~height",
                                        "label" => "Altura",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "1",
                                            "validUnits" => [
                                                "9",
                                                "2",
                                                "6",
                                                "5",
                                                "4",
                                                "7",
                                                "3",
                                                "8",
                                                "1",
                                                "11",
                                                "10"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "height",
                                            "title" => "Altura",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "WholesalePacking~packings",
                                        "label" => "Embalagens",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "11",
                                            "validUnits" => [
                                                "9",
                                                "2",
                                                "6",
                                                "5",
                                                "4",
                                                "7",
                                                "3",
                                                "8",
                                                "1",
                                                "11",
                                                "10"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "packings",
                                            "title" => "Embalagens",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "WholesalePacking~weight",
                                        "label" => "Peso",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "3",
                                            "validUnits" => [
                                                "9",
                                                "2",
                                                "6",
                                                "5",
                                                "4",
                                                "7",
                                                "3",
                                                "8",
                                                "1",
                                                "11",
                                                "10"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "weight",
                                            "title" => "Peso",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "Categoria" => [
                        "id" => "Categoria",
                        "name" => "Categoria",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "name",
                                        "label" => "Nome ",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "name",
                                            "title" => "Nome ",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "description",
                                        "label" => "Descri&ccedil;&atilde;o",
                                        "dataType" => "textarea",
                                        "layout" => [
                                            "fieldtype" => "textarea",
                                            "width" => "",
                                            "height" => "",
                                            "maxLength" => NULL,
                                            "showCharCount" => FALSE,
                                            "excludeFromSearchIndex" => FALSE,
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "name" => "description",
                                            "title" => "Descri&ccedil;&atilde;o",
                                            "tooltip" => "Descri&ccedil;&atilde;o Seo",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "products",
                                        "label" => "Produtos",
                                        "dataType" => "reverseObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "reverseObjectRelation",
                                            "ownerClassName" => "Car",
                                            "ownerClassId" => NULL,
                                            "ownerFieldName" => "categories",
                                            "lazyLoading" => TRUE,
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => NULL,
                                            "allowToCreateNewObject" => TRUE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [

                                            ],
                                            "classes" => [

                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "products",
                                            "title" => "Produtos",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "id",
                                        "label" => "id",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "id",
                                            "name" => "id",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "fullpath",
                                        "label" => "fullpath",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "fullpath",
                                            "name" => "fullpath",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "key",
                                        "label" => "key",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "key",
                                            "name" => "key",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "CompMontagem" => [
                        "id" => "CompMontagem",
                        "name" => "CompMontagem",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "manufacturer",
                                        "label" => "Fabricante",
                                        "dataType" => "manyToOneRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToOneRelation",
                                            "width" => 500,
                                            "assetUploadPath" => "",
                                            "relationType" => TRUE,
                                            "queryColumnType" => [
                                                "id" => "int(11)",
                                                "type" => "enum('document','asset','object')"
                                            ],
                                            "objectsAllowed" => TRUE,
                                            "assetsAllowed" => FALSE,
                                            "assetTypes" => [

                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "Manufacturer"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "manufacturer",
                                            "title" => "Fabricante",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "model",
                                        "label" => "Modelo",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "model",
                                            "title" => "Modelo",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "name",
                                        "label" => "Series",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "name",
                                            "title" => "Series",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "spec",
                                        "label" => "Especifica&ccedil;&atilde;o",
                                        "dataType" => "classificationstore",
                                        "layout" => [
                                            "fieldtype" => "classificationstore",
                                            "childs" => [

                                            ],
                                            "name" => "spec",
                                            "region" => NULL,
                                            "layout" => NULL,
                                            "title" => "Especifica&ccedil;&atilde;o",
                                            "width" => 0,
                                            "height" => 0,
                                            "maxTabs" => NULL,
                                            "labelWidth" => "",
                                            "localized" => FALSE,
                                            "storeId" => "1",
                                            "hideEmptyData" => FALSE,
                                            "disallowAddRemove" => FALSE,
                                            "fieldDefinitionsCache" => NULL,
                                            "allowedGroupIds" => [

                                            ],
                                            "activeGroupDefinitions" => [

                                            ],
                                            "maxItems" => 0,
                                            "permissionView" => NULL,
                                            "permissionEdit" => NULL,
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "id",
                                        "label" => "id",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "id",
                                            "name" => "id",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "fullpath",
                                        "label" => "fullpath",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "fullpath",
                                            "name" => "fullpath",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "Cor" => [
                        "id" => "Cor",
                        "name" => "Cor",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "id",
                                        "label" => "id",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "id",
                                            "name" => "id",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "fullpath",
                                        "label" => "fullpath",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "fullpath",
                                            "name" => "fullpath",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Cor1~cor1",
                                        "label" => "Cor 1",
                                        "dataType" => "rgbaColor",
                                        "layout" => [
                                            "fieldtype" => "rgbaColor",
                                            "width" => "",
                                            "queryColumnType" => [
                                                "rgb" => "VARCHAR(6) NULL DEFAULT NULL",
                                                "a" => "VARCHAR(2) NULL DEFAULT NULL"
                                            ],
                                            "columnType" => [
                                                "rgb" => "VARCHAR(6) NULL DEFAULT NULL",
                                                "a" => "VARCHAR(2) NULL DEFAULT NULL"
                                            ],
                                            "name" => "cor1",
                                            "title" => "Cor 1",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Cor2~cor2",
                                        "label" => "Cor 2",
                                        "dataType" => "rgbaColor",
                                        "layout" => [
                                            "fieldtype" => "rgbaColor",
                                            "width" => "",
                                            "queryColumnType" => [
                                                "rgb" => "VARCHAR(6) NULL DEFAULT NULL",
                                                "a" => "VARCHAR(2) NULL DEFAULT NULL"
                                            ],
                                            "columnType" => [
                                                "rgb" => "VARCHAR(6) NULL DEFAULT NULL",
                                                "a" => "VARCHAR(2) NULL DEFAULT NULL"
                                            ],
                                            "name" => "cor2",
                                            "title" => "Cor 2",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Cor3~cor3",
                                        "label" => "Cor 3",
                                        "dataType" => "rgbaColor",
                                        "layout" => [
                                            "fieldtype" => "rgbaColor",
                                            "width" => "",
                                            "queryColumnType" => [
                                                "rgb" => "VARCHAR(6) NULL DEFAULT NULL",
                                                "a" => "VARCHAR(2) NULL DEFAULT NULL"
                                            ],
                                            "columnType" => [
                                                "rgb" => "VARCHAR(6) NULL DEFAULT NULL",
                                                "a" => "VARCHAR(2) NULL DEFAULT NULL"
                                            ],
                                            "name" => "cor3",
                                            "title" => "Cor 3",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "Marca" => [
                        "id" => "Marca",
                        "name" => "Marca",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "name",
                                        "label" => "Nome",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 500,
                                            "regex" => "",
                                            "unique" => TRUE,
                                            "showCharCount" => FALSE,
                                            "name" => "name",
                                            "title" => "Nome",
                                            "tooltip" => "",
                                            "mandatory" => TRUE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "site",
                                        "label" => "Site Oficial",
                                        "dataType" => "link",
                                        "layout" => [
                                            "fieldtype" => "link",
                                            "queryColumnType" => "text",
                                            "columnType" => "text",
                                            "name" => "site",
                                            "title" => "Site Oficial",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "description",
                                        "label" => "description",
                                        "dataType" => "textarea",
                                        "layout" => [
                                            "fieldtype" => "textarea",
                                            "width" => 500,
                                            "height" => "",
                                            "maxLength" => 160,
                                            "showCharCount" => TRUE,
                                            "excludeFromSearchIndex" => FALSE,
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "name" => "description",
                                            "title" => "description",
                                            "tooltip" => "Uso para descricao SEO",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "brand",
                                        "label" => "Marca",
                                        "dataType" => "image",
                                        "layout" => [
                                            "fieldtype" => "image",
                                            "queryColumnType" => "int(11)",
                                            "columnType" => "int(11)",
                                            "name" => "brand",
                                            "title" => "Marca",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE,
                                            "width" => "",
                                            "height" => "",
                                            "uploadPath" => ""
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "featureimage",
                                        "label" => "Imagem destaque",
                                        "dataType" => "image",
                                        "layout" => [
                                            "fieldtype" => "image",
                                            "queryColumnType" => "int(11)",
                                            "columnType" => "int(11)",
                                            "name" => "featureimage",
                                            "title" => "Imagem destaque",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE,
                                            "width" => "",
                                            "height" => "",
                                            "uploadPath" => ""
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "primaryColor",
                                        "label" => "Cor prim&aacute;ria",
                                        "dataType" => "rgbaColor",
                                        "layout" => [
                                            "fieldtype" => "rgbaColor",
                                            "width" => "",
                                            "queryColumnType" => [
                                                "rgb" => "VARCHAR(6) NULL DEFAULT NULL",
                                                "a" => "VARCHAR(2) NULL DEFAULT NULL"
                                            ],
                                            "columnType" => [
                                                "rgb" => "VARCHAR(6) NULL DEFAULT NULL",
                                                "a" => "VARCHAR(2) NULL DEFAULT NULL"
                                            ],
                                            "name" => "primaryColor",
                                            "title" => "Cor prim&aacute;ria",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "secondaryColor",
                                        "label" => "Cor Secundaria",
                                        "dataType" => "rgbaColor",
                                        "layout" => [
                                            "fieldtype" => "rgbaColor",
                                            "width" => "",
                                            "queryColumnType" => [
                                                "rgb" => "VARCHAR(6) NULL DEFAULT NULL",
                                                "a" => "VARCHAR(2) NULL DEFAULT NULL"
                                            ],
                                            "columnType" => [
                                                "rgb" => "VARCHAR(6) NULL DEFAULT NULL",
                                                "a" => "VARCHAR(2) NULL DEFAULT NULL"
                                            ],
                                            "name" => "secondaryColor",
                                            "title" => "Cor Secundaria",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "socialLinks",
                                        "label" => "Social links",
                                        "dataType" => "block",
                                        "layout" => [
                                            "fieldtype" => "block",
                                            "lazyLoading" => FALSE,
                                            "disallowAddRemove" => FALSE,
                                            "disallowReorder" => FALSE,
                                            "collapsible" => FALSE,
                                            "collapsed" => FALSE,
                                            "maxItems" => NULL,
                                            "columnType" => "longtext",
                                            "styleElement" => "",
                                            "childs" => [
                                                [
                                                    "fieldtype" => "select",
                                                    "options" => [
                                                        [
                                                            "key" => "Facebook",
                                                            "value" => "facebook"
                                                        ],
                                                        [
                                                            "key" => "Instagram",
                                                            "value" => "instagram"
                                                        ],
                                                        [
                                                            "key" => "Strava",
                                                            "value" => "strava"
                                                        ],
                                                        [
                                                            "key" => "Twitter",
                                                            "value" => "twitter"
                                                        ],
                                                        [
                                                            "key" => "Tiktok",
                                                            "value" => "tiktok"
                                                        ],
                                                        [
                                                            "key" => "Linkedin",
                                                            "value" => "linkedin"
                                                        ]
                                                    ],
                                                    "width" => "",
                                                    "defaultValue" => "",
                                                    "optionsProviderClass" => "",
                                                    "optionsProviderData" => "",
                                                    "queryColumnType" => "varchar",
                                                    "columnType" => "varchar",
                                                    "columnLength" => 190,
                                                    "dynamicOptions" => FALSE,
                                                    "name" => "socialProfile",
                                                    "title" => "Rede social",
                                                    "tooltip" => "",
                                                    "mandatory" => FALSE,
                                                    "noteditable" => FALSE,
                                                    "index" => FALSE,
                                                    "locked" => FALSE,
                                                    "style" => "",
                                                    "permissions" => NULL,
                                                    "datatype" => "data",
                                                    "relationType" => FALSE,
                                                    "invisible" => FALSE,
                                                    "visibleGridView" => TRUE,
                                                    "visibleSearch" => FALSE
                                                ],
                                                [
                                                    "fieldtype" => "input",
                                                    "width" => "",
                                                    "defaultValue" => NULL,
                                                    "queryColumnType" => "varchar",
                                                    "columnType" => "varchar",
                                                    "columnLength" => 190,
                                                    "regex" => "",
                                                    "unique" => FALSE,
                                                    "showCharCount" => FALSE,
                                                    "name" => "profile",
                                                    "title" => "Perfil",
                                                    "tooltip" => "",
                                                    "mandatory" => FALSE,
                                                    "noteditable" => FALSE,
                                                    "index" => FALSE,
                                                    "locked" => FALSE,
                                                    "style" => "",
                                                    "permissions" => NULL,
                                                    "datatype" => "data",
                                                    "relationType" => FALSE,
                                                    "invisible" => FALSE,
                                                    "visibleGridView" => FALSE,
                                                    "visibleSearch" => FALSE
                                                ]
                                            ],
                                            "layout" => NULL,
                                            "fieldDefinitionsCache" => NULL,
                                            "name" => "socialLinks",
                                            "title" => "Social links",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "id",
                                        "label" => "id",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "id",
                                            "name" => "id",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "fullpath",
                                        "label" => "fullpath",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "fullpath",
                                            "name" => "fullpath",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "Tamanho" => [
                        "id" => "Tamanho",
                        "name" => "Tamanho",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "size",
                                        "label" => "Tamanho",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => NULL,
                                            "validUnits" => [
                                                "9",
                                                "10",
                                                "3",
                                                "7",
                                                "6",
                                                "4",
                                                "1",
                                                "8",
                                                "5",
                                                "2"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "size",
                                            "title" => "Tamanho",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "info",
                                        "label" => "Info Adicional",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "info",
                                            "title" => "Info Adicional",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "id",
                                        "label" => "id",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "id",
                                            "name" => "id",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "Destaque" => [
                        "id" => "Destaque",
                        "name" => "Destaque",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "name",
                                        "label" => "Nome",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "name",
                                            "title" => "Nome",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "description",
                                        "label" => "Descri&ccedil;&atilde;o",
                                        "dataType" => "textarea",
                                        "layout" => [
                                            "fieldtype" => "textarea",
                                            "width" => "",
                                            "height" => "",
                                            "maxLength" => NULL,
                                            "showCharCount" => FALSE,
                                            "excludeFromSearchIndex" => FALSE,
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "name" => "description",
                                            "title" => "Descri&ccedil;&atilde;o",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "image",
                                        "label" => "Imagem",
                                        "dataType" => "image",
                                        "layout" => [
                                            "fieldtype" => "image",
                                            "queryColumnType" => "int(11)",
                                            "columnType" => "int(11)",
                                            "name" => "image",
                                            "title" => "Imagem",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE,
                                            "width" => "",
                                            "height" => "",
                                            "uploadPath" => ""
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "id",
                                        "label" => "id",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "id",
                                            "name" => "id",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "published",
                                        "label" => "published",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "published",
                                            "name" => "published",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "CampComercial" => [
                        "id" => "CampComercial",
                        "name" => "CampComercial",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "name",
                                        "label" => "Nome",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "name",
                                            "title" => "Nome",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "description",
                                        "label" => "descri&ccedil;&atilde;o",
                                        "dataType" => "wysiwyg",
                                        "layout" => [
                                            "fieldtype" => "wysiwyg",
                                            "width" => "",
                                            "height" => "",
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "toolbarConfig" => "",
                                            "excludeFromSearchIndex" => FALSE,
                                            "name" => "description",
                                            "title" => "descri&ccedil;&atilde;o",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "image",
                                        "label" => "Image",
                                        "dataType" => "image",
                                        "layout" => [
                                            "fieldtype" => "image",
                                            "queryColumnType" => "int(11)",
                                            "columnType" => "int(11)",
                                            "name" => "image",
                                            "title" => "Image",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE,
                                            "width" => "",
                                            "height" => "",
                                            "uploadPath" => ""
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "featureColor",
                                        "label" => "Cor de destaque",
                                        "dataType" => "rgbaColor",
                                        "layout" => [
                                            "fieldtype" => "rgbaColor",
                                            "width" => NULL,
                                            "queryColumnType" => [
                                                "rgb" => "VARCHAR(6) NULL DEFAULT NULL",
                                                "a" => "VARCHAR(2) NULL DEFAULT NULL"
                                            ],
                                            "columnType" => [
                                                "rgb" => "VARCHAR(6) NULL DEFAULT NULL",
                                                "a" => "VARCHAR(2) NULL DEFAULT NULL"
                                            ],
                                            "name" => "featureColor",
                                            "title" => "Cor de destaque",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "id",
                                        "label" => "id",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "id",
                                            "name" => "id",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "published",
                                        "label" => "published",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "published",
                                            "name" => "published",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "Espec" => [
                        "id" => "Espec",
                        "name" => "Espec",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "title",
                                        "label" => "Título",
                                        "dataType" => "classificationstore",
                                        "layout" => [
                                            "fieldtype" => "classificationstore",
                                            "childs" => [

                                            ],
                                            "name" => "title",
                                            "region" => NULL,
                                            "layout" => NULL,
                                            "title" => "Título",
                                            "width" => 0,
                                            "height" => 0,
                                            "maxTabs" => NULL,
                                            "labelWidth" => "",
                                            "localized" => FALSE,
                                            "storeId" => "3",
                                            "hideEmptyData" => TRUE,
                                            "disallowAddRemove" => FALSE,
                                            "fieldDefinitionsCache" => NULL,
                                            "allowedGroupIds" => [

                                            ],
                                            "activeGroupDefinitions" => [

                                            ],
                                            "maxItems" => 1,
                                            "permissionView" => NULL,
                                            "permissionEdit" => NULL,
                                            "tooltip" => "Adicione se necessário",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "spectype",
                                        "label" => "Descri&ccedil;&atilde;o",
                                        "dataType" => "classificationstore",
                                        "layout" => [
                                            "fieldtype" => "classificationstore",
                                            "childs" => [

                                            ],
                                            "name" => "spectype",
                                            "region" => NULL,
                                            "layout" => NULL,
                                            "title" => "Descri&ccedil;&atilde;o",
                                            "width" => 0,
                                            "height" => 0,
                                            "maxTabs" => NULL,
                                            "labelWidth" => "",
                                            "localized" => FALSE,
                                            "storeId" => "2",
                                            "hideEmptyData" => TRUE,
                                            "disallowAddRemove" => FALSE,
                                            "fieldDefinitionsCache" => NULL,
                                            "allowedGroupIds" => [

                                            ],
                                            "activeGroupDefinitions" => [

                                            ],
                                            "maxItems" => 0,
                                            "permissionView" => NULL,
                                            "permissionEdit" => NULL,
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "icon",
                                        "label" => "Icone",
                                        "dataType" => "image",
                                        "layout" => [
                                            "fieldtype" => "image",
                                            "queryColumnType" => "int(11)",
                                            "columnType" => "int(11)",
                                            "name" => "icon",
                                            "title" => "Icone",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE,
                                            "width" => "",
                                            "height" => "",
                                            "uploadPath" => ""
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Desc~longtext",
                                        "label" => "Texto longo",
                                        "dataType" => "textarea",
                                        "layout" => [
                                            "fieldtype" => "textarea",
                                            "width" => "",
                                            "height" => "",
                                            "maxLength" => NULL,
                                            "showCharCount" => FALSE,
                                            "excludeFromSearchIndex" => FALSE,
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "name" => "longtext",
                                            "title" => "Texto longo",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "size~size",
                                        "label" => "size",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => NULL,
                                            "validUnits" => [
                                                "1",
                                                "10",
                                                "11",
                                                "2",
                                                "3",
                                                "4",
                                                "5",
                                                "6",
                                                "7",
                                                "8",
                                                "9"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "size",
                                            "title" => "size",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Spec~text",
                                        "label" => "Texto",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "text",
                                            "title" => "Texto",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "id",
                                        "label" => "id",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "id",
                                            "name" => "id",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "published",
                                        "label" => "published",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "published",
                                            "name" => "published",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "info" => [
                        "id" => "info",
                        "name" => "info",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "name",
                                        "label" => "T&iacute;tulo",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 300,
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "name",
                                            "title" => "T&iacute;tulo",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "gallery",
                                        "label" => "Gallery",
                                        "dataType" => "imageGallery",
                                        "layout" => [
                                            "fieldtype" => "imageGallery",
                                            "queryColumnType" => [
                                                "images" => "text",
                                                "hotspots" => "longtext"
                                            ],
                                            "columnType" => [
                                                "images" => "text",
                                                "hotspots" => "longtext"
                                            ],
                                            "width" => 412,
                                            "height" => 330,
                                            "uploadPath" => "",
                                            "ratioX" => NULL,
                                            "ratioY" => NULL,
                                            "predefinedDataTemplates" => "",
                                            "name" => "gallery",
                                            "title" => "Gallery",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "id",
                                        "label" => "id",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "id",
                                            "name" => "id",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "published",
                                        "label" => "published",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "published",
                                            "name" => "published",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "textDesc",
                                        "label" => "Texto",
                                        "dataType" => "textarea",
                                        "layout" => [
                                            "fieldtype" => "textarea",
                                            "width" => 300,
                                            "height" => "",
                                            "maxLength" => NULL,
                                            "showCharCount" => FALSE,
                                            "excludeFromSearchIndex" => FALSE,
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "name" => "textDesc",
                                            "title" => "Texto",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "Manufacturer" => [
                        "id" => "Manufacturer",
                        "name" => "Manufacturer",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "logo",
                                        "label" => "Logo",
                                        "dataType" => "image",
                                        "layout" => [
                                            "fieldtype" => "image",
                                            "queryColumnType" => "int(11)",
                                            "columnType" => "int(11)",
                                            "name" => "logo",
                                            "title" => "Logo",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE,
                                            "width" => 500,
                                            "height" => "",
                                            "uploadPath" => "/Brand Logos"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "name",
                                        "label" => "Name",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "name",
                                            "title" => "Name",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "id",
                                        "label" => "id",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "id",
                                            "name" => "id",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "published",
                                        "label" => "published",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "published",
                                            "name" => "published",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "Geometria" => [
                        "id" => "Geometria",
                        "name" => "Geometria",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "name",
                                        "label" => "Nome",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "regex" => "",
                                            "unique" => TRUE,
                                            "showCharCount" => FALSE,
                                            "name" => "name",
                                            "title" => "Nome",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "wheel",
                                        "label" => "Aro",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "size",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "size" => [
                                                    "name" => "size",
                                                    "title" => "Tamanho",
                                                    "fieldtype" => "quantityValue",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "Tamanho"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "wheel",
                                            "title" => "Aro",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "frameSize",
                                        "label" => "Tamanho do quadro",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "relationType" => TRUE,
                                            "visibleFields" => "size",
                                            "allowToCreateNewObject" => FALSE,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [
                                                "size" => [
                                                    "name" => "size",
                                                    "title" => "Tamanho",
                                                    "fieldtype" => "quantityValue",
                                                    "noteditable" => TRUE
                                                ]
                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "Tamanho"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "frameSize",
                                            "title" => "Tamanho do quadro",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "geoimage",
                                        "label" => "Geo Image",
                                        "dataType" => "select",
                                        "layout" => [
                                            "fieldtype" => "select",
                                            "options" => [
                                                [
                                                    "key" => "MTB Hardtail",
                                                    "value" => "MTB Hardtail"
                                                ],
                                                [
                                                    "key" => "MTB Full-Hardtail",
                                                    "value" => "MTB Full-Hardtail"
                                                ],
                                                [
                                                    "key" => "Road",
                                                    "value" => "Road"
                                                ],
                                                [
                                                    "key" => "Gravel",
                                                    "value" => "Gravel"
                                                ],
                                                [
                                                    "key" => "Urban",
                                                    "value" => "Urban"
                                                ],
                                                [
                                                    "key" => "e-Gravel",
                                                    "value" => "e-Gravel"
                                                ],
                                                [
                                                    "key" => "e-Urban",
                                                    "value" => "e-Urban"
                                                ],
                                                [
                                                    "key" => "e-Road",
                                                    "value" => "e-Road"
                                                ],
                                                [
                                                    "key" => "e-MTB Full-Hardtail",
                                                    "value" => "e-MTB Full-Hardtail"
                                                ],
                                                [
                                                    "key" => "e-MTB Hardtail",
                                                    "value" => "e-MTB Hardtail"
                                                ],
                                                [
                                                    "key" => "",
                                                    "value" => ""
                                                ],
                                                [
                                                    "key" => "",
                                                    "value" => ""
                                                ]
                                            ],
                                            "width" => "",
                                            "defaultValue" => "",
                                            "optionsProviderClass" => "",
                                            "optionsProviderData" => "",
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "dynamicOptions" => FALSE,
                                            "name" => "geoimage",
                                            "title" => "Geo Image",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "SeatTube",
                                        "label" => "SeatTube Length",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "2",
                                            "validUnits" => [
                                                "10",
                                                "3",
                                                "7",
                                                "6",
                                                "4",
                                                "1",
                                                "8",
                                                "2",
                                                "5",
                                                "9"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "SeatTube",
                                            "title" => "SeatTube Length",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "SeatTubeAngle",
                                        "label" => "SeatTube Angle",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "10",
                                            "validUnits" => [
                                                "10",
                                                "3",
                                                "7",
                                                "6",
                                                "4",
                                                "1",
                                                "8",
                                                "2",
                                                "5",
                                                "9"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "SeatTubeAngle",
                                            "title" => "SeatTube Angle",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "TopTubeLengthReal",
                                        "label" => "TopTube Length(Real)",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "2",
                                            "validUnits" => [
                                                "10",
                                                "3",
                                                "7",
                                                "6",
                                                "4",
                                                "1",
                                                "8",
                                                "2",
                                                "5",
                                                "9"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "TopTubeLengthReal",
                                            "title" => "TopTube Length(Real)",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "TopTubeLengthVirtual",
                                        "label" => "TopTube Length(Virtual)",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "2",
                                            "validUnits" => [
                                                "10",
                                                "3",
                                                "7",
                                                "6",
                                                "4",
                                                "1",
                                                "8",
                                                "2",
                                                "5",
                                                "9"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "TopTubeLengthVirtual",
                                            "title" => "TopTube Length(Virtual)",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "HeadTubeLength",
                                        "label" => "HeadTube Length",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "2",
                                            "validUnits" => [
                                                "10",
                                                "3",
                                                "7",
                                                "6",
                                                "4",
                                                "1",
                                                "8",
                                                "2",
                                                "5",
                                                "9"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "HeadTubeLength",
                                            "title" => "HeadTube Length",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "BBDrop",
                                        "label" => "BB Drop",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "2",
                                            "validUnits" => [
                                                "10",
                                                "3",
                                                "7",
                                                "6",
                                                "4",
                                                "1",
                                                "8",
                                                "2",
                                                "5",
                                                "9"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "BBDrop",
                                            "title" => "BB Drop",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "HeadTubeAngle",
                                        "label" => "HeadTube Angle",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "10",
                                            "validUnits" => [
                                                "10",
                                                "3",
                                                "7",
                                                "6",
                                                "4",
                                                "1",
                                                "8",
                                                "2",
                                                "5",
                                                "9"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "HeadTubeAngle",
                                            "title" => "HeadTube Angle",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "ChanstayLength",
                                        "label" => "Chanstay Length",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "2",
                                            "validUnits" => [
                                                "10",
                                                "3",
                                                "7",
                                                "6",
                                                "4",
                                                "1",
                                                "8",
                                                "2",
                                                "5",
                                                "9"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "ChanstayLength",
                                            "title" => "Chanstay Length",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "FronCenterLength",
                                        "label" => "FronCenterLength",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "2",
                                            "validUnits" => [
                                                "2"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "FronCenterLength",
                                            "title" => "FronCenterLength",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "WeelbaseLength",
                                        "label" => "WeelbaseLength",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "2",
                                            "validUnits" => [
                                                "10",
                                                "3",
                                                "7",
                                                "6",
                                                "4",
                                                "1",
                                                "8",
                                                "2",
                                                "5",
                                                "9"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "WeelbaseLength",
                                            "title" => "WeelbaseLength",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Stack",
                                        "label" => "Stack",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "2",
                                            "validUnits" => [
                                                "10",
                                                "3",
                                                "7",
                                                "6",
                                                "4",
                                                "1",
                                                "8",
                                                "2",
                                                "5",
                                                "9"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "Stack",
                                            "title" => "Stack",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Reach",
                                        "label" => "Reach",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "2",
                                            "validUnits" => [
                                                "10",
                                                "3",
                                                "7",
                                                "6",
                                                "4",
                                                "1",
                                                "8",
                                                "2",
                                                "5",
                                                "9"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "Reach",
                                            "title" => "Reach",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "ForkLength",
                                        "label" => "Fork Length",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "2",
                                            "validUnits" => [
                                                "10",
                                                "3",
                                                "7",
                                                "6",
                                                "4",
                                                "1",
                                                "8",
                                                "2",
                                                "5",
                                                "9"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "ForkLength",
                                            "title" => "Fork Length",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "ForkRakeOffset",
                                        "label" => "Fork Rake/Offset",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "mm",
                                            "validUnits" => [
                                                "10",
                                                "3",
                                                "7",
                                                "6",
                                                "4",
                                                "1",
                                                "8",
                                                "2",
                                                "5",
                                                "9"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "ForkRakeOffset",
                                            "title" => "Fork Rake/Offset",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Trial",
                                        "label" => "Trial",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => "",
                                            "unitWidth" => "",
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "mm",
                                            "validUnits" => [
                                                "10",
                                                "3",
                                                "7",
                                                "6",
                                                "4",
                                                "1",
                                                "8",
                                                "2",
                                                "5",
                                                "9"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "varchar(50)"
                                            ],
                                            "name" => "Trial",
                                            "title" => "Trial",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "id",
                                        "label" => "id",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "id",
                                            "name" => "id",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "published",
                                        "label" => "published",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "published",
                                            "name" => "published",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ]
                ],
                "mutationEntities" => [

                ],
                "specialEntities" => [
                    "document" => [
                        "read" => TRUE,
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE
                    ],
                    "document_folder" => [
                        "read" => TRUE,
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE
                    ],
                    "asset" => [
                        "read" => TRUE,
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE
                    ],
                    "asset_folder" => [
                        "read" => TRUE,
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE
                    ],
                    "asset_listing" => [
                        "read" => TRUE,
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE
                    ],
                    "object_folder" => [
                        "read" => TRUE,
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE
                    ]
                ]
            ],
            "security" => [
                "method" => "datahub_apikey",
                "apikey" => "04d143577a551c558779eecd00028584",
                "skipPermissionCheck" => FALSE
            ],
            "workspaces" => [
                "asset" => [

                ],
                "document" => [

                ],
                "object" => [
                    [
                        "read" => TRUE,
                        "cpath" => "/Produtos",
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE,
                        "id" => "extModel836-1"
                    ]
                ]
            ]
        ],
        "teste" => [
            "general" => [
                "active" => TRUE,
                "type" => "dataImporterDataObject",
                "name" => "teste",
                "description" => "",
                "path" => NULL
            ],
            "loaderConfig" => [
                "type" => "upload",
                "settings" => [
                    "uploadFilePath" => "teste/upload.import"
                ]
            ],
            "interpreterConfig" => [
                "type" => "csv",
                "settings" => [
                    "skipFirstRow" => TRUE,
                    "delimiter" => ",",
                    "enclosure" => "\"",
                    "escape" => "\\"
                ]
            ],
            "resolverConfig" => [
                "elementType" => "dataObject",
                "dataObjectClassId" => "VEST",
                "loadingStrategy" => [
                    "type" => "notLoad"
                ],
                "createLocationStrategy" => [
                    "type" => "staticPath",
                    "settings" => [
                        "path" => "/"
                    ]
                ],
                "locationUpdateStrategy" => [
                    "type" => "noChange"
                ],
                "publishingStrategy" => [
                    "type" => "noChangeUnpublishNew"
                ]
            ],
            "processingConfig" => [
                "executionType" => "parallel",
                "idDataIndex" => ""
            ],
            "mappingConfig" => [
                [
                    "label" => "new column",
                    "dataSourceIndex" => [
                        "3"
                    ],
                    "transformationResultType" => "default",
                    "dataTarget" => [
                        "type" => "direct",
                        "settings" => [
                            "fieldName" => "name",
                            "language" => ""
                        ]
                    ],
                    "transformationPipeline" => [

                    ]
                ]
            ],
            "executionConfig" => [
                "cronDefinition" => ""
            ],
            "workspaces" => [

            ]
        ]
    ]
];
