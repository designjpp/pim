<?php

return [
    "enableInDefaultView" => TRUE,
    "generalTool" => "wkhtmltopdf",
    "generalDocumentSaveMode" => "default",
    "pdfreactorProtocol" => "https",
    "pdfreactorServer" => "cloud.pdfreactor.com",
    "pdfreactorServerPort" => "443",
    "pdfreactorBaseUrl" => "https://demo.pimcore.fun",
    "pdfreactorApiKey" => "",
    "pdfreactorLicence" => "",
    "pdfreactorEnableLenientHttpsMode" => FALSE,
    "pdfreactorEnableDebugMode" => FALSE,
    "wkhtmltopdfBin" => "wkhtmltopdf",
    "wkhtml2pdfOptions" => [
        "print-media-type" => "",
        "page-size" => "A4"
    ],
    "wkhtml2pdfHostname" => "http://localhost/",
    "headlessChromeSettings" => "",
    "documentation" => "web2print_headlesschrome_puppeteer_documentation",
    "additions" => "There are two additional options: \"header\" and \"footer\". This options need a URL, which returns the header or footer template.",
    "json_converter" => "web2print_headlesschrome_json_converter_link"
];
