<?php

/**
 * Inheritance: yes
 * Variants: yes
 *
 * Fields Summary:
 * - name [input]
 * - serie [input]
 * - edition [input]
 * - availability [checkbox]
 * - collectionYear [numeric]
 * - collectionYear2 [numeric]
 * - brand [manyToManyObjectRelation]
 * - categorias [manyToManyObjectRelation]
 * - label [manyToManyObjectRelation]
 * - useRecommendation [manyToManyObjectRelation]
 * - featuresList [manyToManyObjectRelation]
 * - description [wysiwyg]
 * - image [image]
 * - galery [fieldcollections]
 * - frame [manyToManyObjectRelation]
 * - headSet [manyToManyObjectRelation]
 * - fork [manyToManyObjectRelation]
 * - rearShock [manyToManyObjectRelation]
 * - motor [manyToManyObjectRelation]
 * - rims [manyToManyObjectRelation]
 * - frontHub [manyToManyObjectRelation]
 * - reartHub [manyToManyObjectRelation]
 * - spokes [manyToManyObjectRelation]
 * - nipples [manyToManyObjectRelation]
 * - frontTire [manyToManyObjectRelation]
 * - rearTires [manyToManyObjectRelation]
 * - tubes [manyToManyObjectRelation]
 * - brakeLevers [manyToManyObjectRelation]
 * - frontBrake [manyToManyObjectRelation]
 * - rearBrake [manyToManyObjectRelation]
 * - frontRotor [manyToManyObjectRelation]
 * - rearRotors [manyToManyObjectRelation]
 * - grip [manyToManyObjectRelation]
 * - handlebar [manyToManyObjectRelation]
 * - handlebarSupport [manyToManyObjectRelation]
 * - saddle [manyToManyObjectRelation]
 * - seatpost [manyToManyObjectRelation]
 * - seatpostClamp [manyToManyObjectRelation]
 * - bottomBracket [manyToManyObjectRelation]
 * - chain [manyToManyObjectRelation]
 * - crank [manyToManyObjectRelation]
 * - rearCogs [manyToManyObjectRelation]
 * - frontDerailleur [manyToManyObjectRelation]
 * - rearDerailleur [manyToManyObjectRelation]
 * - shifters [manyToManyObjectRelation]
 * - extra [manyToManyObjectRelation]
 * - color [manyToManyObjectRelation]
 * - tamanho [manyToManyObjectRelation]
 * - outro [manyToManyObjectRelation]
 * - adverts [manyToManyObjectRelation]
 * - suggestedprice [inputQuantityValue]
 * - promotionalprice [numeric]
 * - bikeWeight [quantityValue]
 * - technology [manyToManyObjectRelation]
 * - faq [manyToManyObjectRelation]
 * - warranty [manyToManyObjectRelation]
 * - compatibility [manyToManyObjectRelation]
 * - anexos [manyToManyObjectRelation]
 * - geometry [manyToManyObjectRelation]
 * - ergonomics [manyToManyObjectRelation]
 * - sizerecomendation [manyToManyObjectRelation]
 * - longdescription [wysiwyg]
 * - galeries [fieldcollections]
 * - buyingtogether [manyToManyObjectRelation]
 * - shopkeepermaterial [advancedManyToManyRelation]
 * - technicalSheet [advancedManyToManyRelation]
 * - promotional [advancedManyToManyRelation]
 * - seo [input]
 * - Descri [textarea]
 * - urlSlug [urlSlug]
 * - jppcode [numeric]
 * - ean [numeric]
 * - stock [numeric]
 * - price [quantityValue]
 * - pricees [quantityValue]
 * - productMeasure [objectbricks]
 * - productPackaging [objectbricks]
 * - wholesalePacking [objectbricks]
 */

return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'dao' => NULL,
   'id' => 'Bike',
   'name' => 'Bicicleta',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1715632149,
   'userOwner' => 2,
   'userModification' => 2,
   'parentClass' => '',
   'implementsInterfaces' => '',
   'listingParentClass' => '',
   'useTraits' => '',
   'listingUseTraits' => '',
   'encryption' => false,
   'encryptedTables' =>
  array (
  ),
   'allowInherit' => true,
   'allowVariants' => true,
   'showVariants' => true,
   'fieldDefinitions' =>
  array (
  ),
   'layoutDefinitions' =>
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'name' => 'pimcore_root',
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => 0,
     'height' => 0,
     'collapsible' => false,
     'collapsed' => false,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'children' =>
    array (
      0 =>
      Pimcore\Model\DataObject\ClassDefinition\Layout\Tabpanel::__set_state(array(
         'name' => 'Layout',
         'type' => NULL,
         'region' => NULL,
         'title' => '',
         'width' => '',
         'height' => '',
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => NULL,
         'children' =>
        array (
          0 =>
          Pimcore\Model\DataObject\ClassDefinition\Layout\Region::__set_state(array(
             'name' => 'Layout',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Geral',
             'width' => '',
             'height' => '',
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'children' =>
            array (
              0 =>
              Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                 'name' => 'Geral',
                 'type' => NULL,
                 'region' => 'center',
                 'title' => 'Geral',
                 'width' => '',
                 'height' => '',
                 'collapsible' => false,
                 'collapsed' => false,
                 'bodyStyle' => '',
                 'datatype' => 'layout',
                 'permissions' => NULL,
                 'children' =>
                array (
                  0 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                     'name' => 'name',
                     'title' => 'Nome ',
                     'tooltip' => 'Modelo',
                     'mandatory' => true,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'fieldtype' => 'input',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => true,
                     'visibleSearch' => true,
                     'blockedVarsForExport' =>
                    array (
                    ),
                     'width' => 550,
                     'defaultValue' => NULL,
                     'columnLength' => 190,
                     'regex' => '',
                     'regexFlags' =>
                    array (
                    ),
                     'unique' => false,
                     'showCharCount' => false,
                     'defaultValueGenerator' => '',
                  )),
                  1 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                     'name' => 'serie',
                     'title' => 'Série',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'fieldtype' => 'input',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'blockedVarsForExport' =>
                    array (
                    ),
                     'width' => 550,
                     'defaultValue' => NULL,
                     'columnLength' => 190,
                     'regex' => '',
                     'regexFlags' =>
                    array (
                    ),
                     'unique' => false,
                     'showCharCount' => false,
                     'defaultValueGenerator' => '',
                  )),
                  2 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                     'name' => 'edition',
                     'title' => 'Edição',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'fieldtype' => 'input',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'blockedVarsForExport' =>
                    array (
                    ),
                     'width' => 550,
                     'defaultValue' => NULL,
                     'columnLength' => 190,
                     'regex' => '',
                     'regexFlags' =>
                    array (
                    ),
                     'unique' => false,
                     'showCharCount' => false,
                     'defaultValueGenerator' => '',
                  )),
                  3 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\Checkbox::__set_state(array(
                     'name' => 'availability',
                     'title' => 'Disponibilidade',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'fieldtype' => 'checkbox',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => true,
                     'visibleSearch' => false,
                     'blockedVarsForExport' =>
                    array (
                    ),
                     'defaultValue' => 1,
                     'defaultValueGenerator' => '',
                  )),
                  4 =>
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldcontainer::__set_state(array(
                     'name' => 'Field Container',
                     'type' => NULL,
                     'region' => '',
                     'title' => NULL,
                     'width' => '',
                     'height' => '',
                     'collapsible' => false,
                     'collapsed' => false,
                     'bodyStyle' => '',
                     'datatype' => 'layout',
                     'permissions' => NULL,
                     'children' =>
                    array (
                      0 =>
                      Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldset::__set_state(array(
                         'name' => 'Layout',
                         'type' => NULL,
                         'region' => '',
                         'title' => 'Ano Cole&ccedil;&atilde;o',
                         'width' => 500,
                         'height' => '',
                         'collapsible' => false,
                         'collapsed' => false,
                         'bodyStyle' => '',
                         'datatype' => 'layout',
                         'permissions' => NULL,
                         'children' =>
                        array (
                          0 =>
                          Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                             'name' => 'collectionYear',
                             'title' => 'Ano Cole&ccedil;&atilde;o 1',
                             'tooltip' => '',
                             'mandatory' => false,
                             'noteditable' => false,
                             'index' => false,
                             'locked' => false,
                             'style' => '',
                             'permissions' => NULL,
                             'datatype' => 'data',
                             'fieldtype' => 'numeric',
                             'relationType' => false,
                             'invisible' => false,
                             'visibleGridView' => false,
                             'visibleSearch' => false,
                             'blockedVarsForExport' =>
                            array (
                            ),
                             'width' => '',
                             'defaultValue' => NULL,
                             'integer' => true,
                             'unsigned' => true,
                             'minValue' => 1,
                             'maxValue' => 99,
                             'unique' => false,
                             'decimalSize' => NULL,
                             'decimalPrecision' => 0,
                             'defaultValueGenerator' => '',
                          )),
                          1 =>
                          Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                             'name' => 'collectionYear2',
                             'title' => 'Ano Cole&ccedil;&atilde;o 2',
                             'tooltip' => '',
                             'mandatory' => false,
                             'noteditable' => false,
                             'index' => false,
                             'locked' => false,
                             'style' => '',
                             'permissions' => NULL,
                             'datatype' => 'data',
                             'fieldtype' => 'numeric',
                             'relationType' => false,
                             'invisible' => false,
                             'visibleGridView' => false,
                             'visibleSearch' => false,
                             'blockedVarsForExport' =>
                            array (
                            ),
                             'width' => '',
                             'defaultValue' => NULL,
                             'integer' => true,
                             'unsigned' => true,
                             'minValue' => 1,
                             'maxValue' => 99,
                             'unique' => false,
                             'decimalSize' => NULL,
                             'decimalPrecision' => 0,
                             'defaultValueGenerator' => '',
                          )),
                        ),
                         'locked' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'fieldtype' => 'fieldset',
                         'labelWidth' => 0,
                         'labelAlign' => 'left',
                      )),
                      1 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'brand',
                         'title' => 'Marca',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => 'margin-left:50px;',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => true,
                         'visibleSearch' => true,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'Marca',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => 500,
                         'height' => '',
                         'maxItems' => 1,
                         'visibleFields' => 'brand,name',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                    ),
                     'locked' => false,
                     'blockedVarsForExport' =>
                    array (
                    ),
                     'fieldtype' => 'fieldcontainer',
                     'layout' => 'hbox',
                     'fieldLabel' => '',
                     'labelWidth' => 0,
                     'labelAlign' => 'left',
                  )),
                  5 =>
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldcontainer::__set_state(array(
                     'name' => 'Field Container',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => NULL,
                     'width' => '',
                     'height' => '',
                     'collapsible' => false,
                     'collapsed' => false,
                     'bodyStyle' => '',
                     'datatype' => 'layout',
                     'permissions' => NULL,
                     'children' =>
                    array (
                      0 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'categorias',
                         'title' => 'Categorias',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'Categoria',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => 500,
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'name,id',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => true,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      1 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'label',
                         'title' => 'Selos de destaque',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => 'margin-left:50px;',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'Stamp',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => 500,
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'name,classname,image,textDesc',
                         'allowToCreateNewObject' => true,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                    ),
                     'locked' => false,
                     'blockedVarsForExport' =>
                    array (
                    ),
                     'fieldtype' => 'fieldcontainer',
                     'layout' => 'hbox',
                     'fieldLabel' => '',
                     'labelWidth' => 0,
                     'labelAlign' => 'left',
                  )),
                  6 =>
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldcontainer::__set_state(array(
                     'name' => 'geral',
                     'type' => NULL,
                     'region' => '',
                     'title' => NULL,
                     'width' => '',
                     'height' => '',
                     'collapsible' => false,
                     'collapsed' => false,
                     'bodyStyle' => '',
                     'datatype' => 'layout',
                     'permissions' => NULL,
                     'children' =>
                    array (
                      0 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'useRecommendation',
                         'title' => 'Uso recomendado',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'info',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => 500,
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'name,gallery',
                         'allowToCreateNewObject' => true,
                         'optimizedAdminLoading' => true,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      1 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'featuresList',
                         'title' => 'Destaque',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => 'margin-left:50px;',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'Destaque',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => 500,
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'name,description',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                    ),
                     'locked' => false,
                     'blockedVarsForExport' =>
                    array (
                    ),
                     'fieldtype' => 'fieldcontainer',
                     'layout' => 'hbox',
                     'fieldLabel' => '',
                     'labelWidth' => 0,
                     'labelAlign' => 'left',
                  )),
                  7 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\Wysiwyg::__set_state(array(
                     'name' => 'description',
                     'title' => 'Descrição (B2B)',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'fieldtype' => 'wysiwyg',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'blockedVarsForExport' =>
                    array (
                    ),
                     'width' => 600,
                     'height' => '',
                     'toolbarConfig' => '',
                     'excludeFromSearchIndex' => false,
                     'maxCharacters' => '0',
                  )),
                ),
                 'locked' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'fieldtype' => 'panel',
                 'layout' => NULL,
                 'border' => false,
                 'icon' => '',
                 'labelWidth' => 0,
                 'labelAlign' => 'left',
              )),
              1 =>
              Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                 'name' => 'MediaB2B',
                 'type' => NULL,
                 'region' => 'east',
                 'title' => 'Mídia (B2B)',
                 'width' => 600,
                 'height' => '',
                 'collapsible' => false,
                 'collapsed' => false,
                 'bodyStyle' => '',
                 'datatype' => 'layout',
                 'permissions' => NULL,
                 'children' =>
                array (
                  0 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\Image::__set_state(array(
                     'name' => 'image',
                     'title' => 'Imagem do Produto',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'fieldtype' => 'image',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => true,
                     'visibleSearch' => true,
                     'blockedVarsForExport' =>
                    array (
                    ),
                     'width' => '',
                     'height' => '',
                     'uploadPath' => '/Bike',
                  )),
                  1 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\Fieldcollections::__set_state(array(
                     'name' => 'galery',
                     'title' => 'Galeria',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'fieldtype' => 'fieldcollections',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'blockedVarsForExport' =>
                    array (
                    ),
                     'allowedTypes' =>
                    array (
                      0 => 'Galeria',
                      1 => 'RotateGallery',
                      2 => 'VideoExternal',
                      3 => 'Videos',
                    ),
                     'lazyLoading' => true,
                     'maxItems' => NULL,
                     'disallowAddRemove' => false,
                     'disallowReorder' => false,
                     'collapsed' => false,
                     'collapsible' => false,
                     'border' => false,
                  )),
                ),
                 'locked' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'fieldtype' => 'panel',
                 'layout' => NULL,
                 'border' => false,
                 'icon' => '',
                 'labelWidth' => 0,
                 'labelAlign' => 'left',
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' =>
            array (
            ),
             'fieldtype' => 'region',
             'icon' => '',
          )),
          1 =>
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'Spec',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Especificação',
             'width' => '',
             'height' => '',
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'children' =>
            array (
              0 =>
              Pimcore\Model\DataObject\ClassDefinition\Layout\Tabpanel::__set_state(array(
                 'name' => 'Layout',
                 'type' => NULL,
                 'region' => NULL,
                 'title' => '',
                 'width' => '',
                 'height' => '',
                 'collapsible' => false,
                 'collapsed' => false,
                 'bodyStyle' => '',
                 'datatype' => 'layout',
                 'permissions' => NULL,
                 'children' =>
                array (
                  0 =>
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                     'name' => 'Frame',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => 'Quadro',
                     'width' => '',
                     'height' => '',
                     'collapsible' => false,
                     'collapsed' => false,
                     'bodyStyle' => '',
                     'datatype' => 'layout',
                     'permissions' => NULL,
                     'children' =>
                    array (
                      0 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'frame',
                         'title' => 'Quadro',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'name,model,manufacturer',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      1 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'headSet',
                         'title' => 'Movimento Direção',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'name,model,manufacturer',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      2 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'fork',
                         'title' => 'Garfo/Suspensão',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'name,model,manufacturer',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      3 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'rearShock',
                         'title' => 'Amortecedor traseiro',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'name,model,manufacturer',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      4 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'motor',
                         'title' => 'Sistema da E-Bike ',
                         'tooltip' => 'Adicione todas a informações referentes a e-bike: motor, bateria, display, ...
',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'name,model,manufacturer',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                    ),
                     'locked' => false,
                     'blockedVarsForExport' =>
                    array (
                    ),
                     'fieldtype' => 'panel',
                     'layout' => NULL,
                     'border' => false,
                     'icon' => '',
                     'labelWidth' => 0,
                     'labelAlign' => 'left',
                  )),
                  1 =>
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                     'name' => 'Wheels',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => 'Rodas',
                     'width' => '',
                     'height' => '',
                     'collapsible' => false,
                     'collapsed' => false,
                     'bodyStyle' => '',
                     'datatype' => 'layout',
                     'permissions' => NULL,
                     'children' =>
                    array (
                      0 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'rims',
                         'title' => 'Aros',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'manufacturer,model,name',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      1 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'frontHub',
                         'title' => 'Cubo dianteiro',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'manufacturer,model,name',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      2 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'reartHub',
                         'title' => 'Cubo traseiro',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'manufacturer,model,name',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      3 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'spokes',
                         'title' => 'Raios',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'manufacturer,model,name',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      4 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'nipples',
                         'title' => 'Nipples',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'manufacturer,model,name',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      5 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'frontTire',
                         'title' => 'Pneu Dianteiro',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'manufacturer,model,name',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      6 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'rearTires',
                         'title' => 'Pneu traseiro',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'manufacturer,model,name',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      7 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'tubes',
                         'title' => 'Câmara de Ar',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'manufacturer,model,name',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                    ),
                     'locked' => false,
                     'blockedVarsForExport' =>
                    array (
                    ),
                     'fieldtype' => 'panel',
                     'layout' => NULL,
                     'border' => false,
                     'icon' => '',
                     'labelWidth' => 0,
                     'labelAlign' => 'left',
                  )),
                  2 =>
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                     'name' => 'Brakes',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => 'Freio(s)',
                     'width' => '',
                     'height' => '',
                     'collapsible' => false,
                     'collapsed' => false,
                     'bodyStyle' => '',
                     'datatype' => 'layout',
                     'permissions' => NULL,
                     'children' =>
                    array (
                      0 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'brakeLevers',
                         'title' => 'Manete',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'manufacturer,model,name',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      1 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'frontBrake',
                         'title' => 'Freio dianteiro',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'manufacturer,model,name',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      2 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'rearBrake',
                         'title' => 'Freio traseiro',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'manufacturer,model,name',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      3 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'frontRotor',
                         'title' => 'Disco Dianteiro',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'manufacturer,model,name',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      4 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'rearRotors',
                         'title' => 'Disco traseiro',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'manufacturer,model,name',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                    ),
                     'locked' => false,
                     'blockedVarsForExport' =>
                    array (
                    ),
                     'fieldtype' => 'panel',
                     'layout' => NULL,
                     'border' => false,
                     'icon' => '',
                     'labelWidth' => 0,
                     'labelAlign' => 'left',
                  )),
                  3 =>
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                     'name' => 'Components',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => 'Componentes',
                     'width' => '',
                     'height' => '',
                     'collapsible' => false,
                     'collapsed' => false,
                     'bodyStyle' => '',
                     'datatype' => 'layout',
                     'permissions' => NULL,
                     'children' =>
                    array (
                      0 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'grip',
                         'title' => 'Manopla',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'manufacturer,model,name',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      1 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'handlebar',
                         'title' => 'Guidão',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'manufacturer,model,name',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      2 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'handlebarSupport',
                         'title' => 'Suporte de guidão',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                          1 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          2 =>
                          array (
                            'classes' => 'Tamanho',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'key,fullpath,filename',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      3 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'saddle',
                         'title' => 'Selim',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'manufacturer,model,name',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      4 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'seatpost',
                         'title' => 'Canote',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                          2 =>
                          array (
                            'classes' => 'Tamanho',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'classname,filename,key,fullpath',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      5 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'seatpostClamp',
                         'title' => 'Abraçadeira',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'manufacturer,model,name',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                    ),
                     'locked' => false,
                     'blockedVarsForExport' =>
                    array (
                    ),
                     'fieldtype' => 'panel',
                     'layout' => NULL,
                     'border' => false,
                     'icon' => '',
                     'labelWidth' => 0,
                     'labelAlign' => 'left',
                  )),
                  4 =>
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                     'name' => 'Drivetrain',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => 'Transmissão',
                     'width' => '',
                     'height' => '',
                     'collapsible' => false,
                     'collapsed' => false,
                     'bodyStyle' => '',
                     'datatype' => 'layout',
                     'permissions' => NULL,
                     'children' =>
                    array (
                      0 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'bottomBracket',
                         'title' => 'Movimento Central',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'name,model,manufacturer',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      1 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'chain',
                         'title' => 'Corrente',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'name,model,manufacturer',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      2 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'crank',
                         'title' => 'Pedivela',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                          2 =>
                          array (
                            'classes' => 'Tamanho',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'classname,filename,fullpath,key',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      3 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'rearCogs',
                         'title' => 'Cog traseiro',
                         'tooltip' => 'Defina se é Cassete ou Roda Livre ',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'name,model,manufacturer',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      4 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'frontDerailleur',
                         'title' => 'Câmbio dianteiro',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'name,model,manufacturer',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      5 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'rearDerailleur',
                         'title' => 'Câmbio traseiro',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'name,model,manufacturer',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                      6 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'shifters',
                         'title' => 'Alavanca(s)',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'name,model,manufacturer',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                    ),
                     'locked' => false,
                     'blockedVarsForExport' =>
                    array (
                    ),
                     'fieldtype' => 'panel',
                     'layout' => NULL,
                     'border' => false,
                     'icon' => '',
                     'labelWidth' => 0,
                     'labelAlign' => 'left',
                  )),
                  5 =>
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                     'name' => 'Extra',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => 'Extra',
                     'width' => '',
                     'height' => '',
                     'collapsible' => false,
                     'collapsed' => false,
                     'bodyStyle' => '',
                     'datatype' => 'layout',
                     'permissions' => NULL,
                     'children' =>
                    array (
                      0 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'name' => 'extra',
                         'title' => 'Extra',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'fieldtype' => 'manyToManyObjectRelation',
                         'relationType' => true,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' =>
                        array (
                        ),
                         'classes' =>
                        array (
                          0 =>
                          array (
                            'classes' => 'CompMontagem',
                          ),
                          1 =>
                          array (
                            'classes' => 'Produtos',
                          ),
                        ),
                         'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                         'width' => '',
                         'height' => '',
                         'maxItems' => NULL,
                         'visibleFields' => 'name,model,manufacturer',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'enableTextSelection' => false,
                         'visibleFieldDefinitions' =>
                        array (
                        ),
                      )),
                    ),
                     'locked' => false,
                     'blockedVarsForExport' =>
                    array (
                    ),
                     'fieldtype' => 'panel',
                     'layout' => NULL,
                     'border' => false,
                     'icon' => '',
                     'labelWidth' => 0,
                     'labelAlign' => 'left',
                  )),
                ),
                 'locked' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'fieldtype' => 'tabpanel',
                 'border' => false,
                 'tabPosition' => NULL,
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' =>
            array (
            ),
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'icon' => '',
             'labelWidth' => 0,
             'labelAlign' => 'left',
          )),
          2 =>
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'Properties',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Propriedades',
             'width' => '',
             'height' => '',
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'children' =>
            array (
              0 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                 'name' => 'color',
                 'title' => 'Cor',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'manyToManyObjectRelation',
                 'relationType' => true,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'classes' =>
                array (
                  0 =>
                  array (
                    'classes' => 'Cor',
                  ),
                ),
                 'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                 'width' => '',
                 'height' => '',
                 'maxItems' => NULL,
                 'visibleFields' => 'classname,key',
                 'allowToCreateNewObject' => true,
                 'optimizedAdminLoading' => false,
                 'enableTextSelection' => false,
                 'visibleFieldDefinitions' =>
                array (
                ),
              )),
              1 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                 'name' => 'tamanho',
                 'title' => 'Tamanho',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'manyToManyObjectRelation',
                 'relationType' => true,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'classes' =>
                array (
                  0 =>
                  array (
                    'classes' => 'Tamanho',
                  ),
                ),
                 'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                 'width' => '',
                 'height' => '',
                 'maxItems' => NULL,
                 'visibleFields' => 'size',
                 'allowToCreateNewObject' => true,
                 'optimizedAdminLoading' => false,
                 'enableTextSelection' => false,
                 'visibleFieldDefinitions' =>
                array (
                ),
              )),
              2 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                 'name' => 'outro',
                 'title' => 'Outro',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'manyToManyObjectRelation',
                 'relationType' => true,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'classes' =>
                array (
                ),
                 'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                 'width' => '',
                 'height' => '',
                 'maxItems' => NULL,
                 'visibleFields' =>
                array (
                ),
                 'allowToCreateNewObject' => false,
                 'optimizedAdminLoading' => false,
                 'enableTextSelection' => false,
                 'visibleFieldDefinitions' =>
                array (
                ),
              )),
              3 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                 'name' => 'adverts',
                 'title' => 'An&uacute;ncios',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'manyToManyObjectRelation',
                 'relationType' => true,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'classes' =>
                array (
                  0 =>
                  array (
                    'classes' => 'info',
                  ),
                ),
                 'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                 'width' => '',
                 'height' => '',
                 'maxItems' => NULL,
                 'visibleFields' => 'name,text',
                 'allowToCreateNewObject' => true,
                 'optimizedAdminLoading' => false,
                 'enableTextSelection' => false,
                 'visibleFieldDefinitions' =>
                array (
                ),
              )),
              4 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\InputQuantityValue::__set_state(array(
                 'name' => 'suggestedprice',
                 'title' => 'Preço sugerido ',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'inputQuantityValue',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'width' => '',
                 'unitWidth' => NULL,
                 'defaultValue' => NULL,
                 'defaultUnit' => '9',
                 'validUnits' =>
                array (
                  0 => '9',
                ),
                 'integer' => false,
                 'unsigned' => false,
                 'minValue' => NULL,
                 'maxValue' => NULL,
                 'unique' => false,
                 'decimalSize' => NULL,
                 'decimalPrecision' => NULL,
                 'autoConvert' => false,
                 'defaultValueGenerator' => '',
              )),
              5 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                 'name' => 'promotionalprice',
                 'title' => 'Pre&ccedil;o Promocional',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'numeric',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'integer' => false,
                 'unsigned' => false,
                 'minValue' => NULL,
                 'maxValue' => NULL,
                 'unique' => false,
                 'decimalSize' => 20,
                 'decimalPrecision' => 2,
                 'defaultValueGenerator' => '',
              )),
              6 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                 'name' => 'bikeWeight',
                 'title' => 'Peso ',
                 'tooltip' => 'Da bike completa',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'quantityValue',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'width' => '',
                 'unitWidth' => '',
                 'defaultValue' => NULL,
                 'defaultUnit' => '4',
                 'validUnits' =>
                array (
                  0 => '4',
                  1 => '5',
                ),
                 'integer' => false,
                 'unsigned' => false,
                 'minValue' => NULL,
                 'maxValue' => NULL,
                 'unique' => false,
                 'decimalSize' => NULL,
                 'decimalPrecision' => NULL,
                 'autoConvert' => true,
                 'defaultValueGenerator' => '',
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' =>
            array (
            ),
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'icon' => '',
             'labelWidth' => 0,
             'labelAlign' => 'left',
          )),
          3 =>
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'Complementation',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Visão geral técnica',
             'width' => '',
             'height' => '',
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'children' =>
            array (
              0 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                 'name' => 'technology',
                 'title' => 'Tecnologia',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'manyToManyObjectRelation',
                 'relationType' => true,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'classes' =>
                array (
                  0 =>
                  array (
                    'classes' => 'info',
                  ),
                ),
                 'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                 'width' => '',
                 'height' => '',
                 'maxItems' => NULL,
                 'visibleFields' => 'name,textDesc',
                 'allowToCreateNewObject' => false,
                 'optimizedAdminLoading' => false,
                 'enableTextSelection' => false,
                 'visibleFieldDefinitions' =>
                array (
                ),
              )),
              1 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                 'name' => 'faq',
                 'title' => 'FAQ',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'manyToManyObjectRelation',
                 'relationType' => true,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'classes' =>
                array (
                  0 =>
                  array (
                    'classes' => 'info',
                  ),
                ),
                 'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                 'width' => '',
                 'height' => '',
                 'maxItems' => NULL,
                 'visibleFields' => 'name',
                 'allowToCreateNewObject' => false,
                 'optimizedAdminLoading' => false,
                 'enableTextSelection' => false,
                 'visibleFieldDefinitions' =>
                array (
                ),
              )),
              2 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                 'name' => 'warranty',
                 'title' => 'Garantia',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'manyToManyObjectRelation',
                 'relationType' => true,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'classes' =>
                array (
                  0 =>
                  array (
                    'classes' => 'info',
                  ),
                ),
                 'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                 'width' => '',
                 'height' => '',
                 'maxItems' => NULL,
                 'visibleFields' => 'name,text',
                 'allowToCreateNewObject' => false,
                 'optimizedAdminLoading' => false,
                 'enableTextSelection' => false,
                 'visibleFieldDefinitions' =>
                array (
                ),
              )),
              3 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                 'name' => 'compatibility',
                 'title' => 'Compatibilidade',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'manyToManyObjectRelation',
                 'relationType' => true,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'classes' =>
                array (
                ),
                 'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                 'width' => '',
                 'height' => '',
                 'maxItems' => NULL,
                 'visibleFields' =>
                array (
                ),
                 'allowToCreateNewObject' => false,
                 'optimizedAdminLoading' => false,
                 'enableTextSelection' => false,
                 'visibleFieldDefinitions' =>
                array (
                ),
              )),
              4 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                 'name' => 'anexos',
                 'title' => 'Anexos',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'manyToManyObjectRelation',
                 'relationType' => true,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'classes' =>
                array (
                ),
                 'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                 'width' => '',
                 'height' => '',
                 'maxItems' => NULL,
                 'visibleFields' =>
                array (
                ),
                 'allowToCreateNewObject' => false,
                 'optimizedAdminLoading' => false,
                 'enableTextSelection' => false,
                 'visibleFieldDefinitions' =>
                array (
                ),
              )),
              5 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                 'name' => 'geometry',
                 'title' => 'Geometria',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'manyToManyObjectRelation',
                 'relationType' => true,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'classes' =>
                array (
                  0 =>
                  array (
                    'classes' => 'Geometria',
                  ),
                ),
                 'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                 'width' => '',
                 'height' => '',
                 'maxItems' => NULL,
                 'visibleFields' => 'name,wheel,frameSize',
                 'allowToCreateNewObject' => true,
                 'optimizedAdminLoading' => true,
                 'enableTextSelection' => true,
                 'visibleFieldDefinitions' =>
                array (
                ),
              )),
              6 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                 'name' => 'ergonomics',
                 'title' => 'Ergonomia',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'manyToManyObjectRelation',
                 'relationType' => true,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'classes' =>
                array (
                  0 =>
                  array (
                    'classes' => 'Ergonomia',
                  ),
                ),
                 'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                 'width' => '',
                 'height' => '',
                 'maxItems' => NULL,
                 'visibleFields' => 'name,wheel,frameSize',
                 'allowToCreateNewObject' => true,
                 'optimizedAdminLoading' => true,
                 'enableTextSelection' => false,
                 'visibleFieldDefinitions' =>
                array (
                ),
              )),
              7 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                 'name' => 'sizerecomendation',
                 'title' => 'Tamanho Recomendado',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'manyToManyObjectRelation',
                 'relationType' => true,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'classes' =>
                array (
                  0 =>
                  array (
                    'classes' => 'Geometria',
                  ),
                ),
                 'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                 'width' => '',
                 'height' => '',
                 'maxItems' => NULL,
                 'visibleFields' =>
                array (
                ),
                 'allowToCreateNewObject' => false,
                 'optimizedAdminLoading' => false,
                 'enableTextSelection' => false,
                 'visibleFieldDefinitions' =>
                array (
                ),
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' =>
            array (
            ),
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'icon' => '',
             'labelWidth' => 0,
             'labelAlign' => 'left',
          )),
          4 =>
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'MediaB2C',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Mídia (B2C)',
             'width' => '',
             'height' => '',
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'children' =>
            array (
              0 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Wysiwyg::__set_state(array(
                 'name' => 'longdescription',
                 'title' => 'Descri&ccedil;&atilde;o (B2C)',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'wysiwyg',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'width' => '',
                 'height' => '',
                 'toolbarConfig' => '',
                 'excludeFromSearchIndex' => false,
                 'maxCharacters' => '0',
              )),
              1 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Fieldcollections::__set_state(array(
                 'name' => 'galeries',
                 'title' => 'Galeria',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'fieldcollections',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'allowedTypes' =>
                array (
                  0 => 'Destaque',
                  1 => 'Galeria',
                  2 => 'RotateGallery',
                  3 => 'VideoExternal',
                  4 => 'Videos',
                ),
                 'lazyLoading' => true,
                 'maxItems' => NULL,
                 'disallowAddRemove' => false,
                 'disallowReorder' => false,
                 'collapsed' => false,
                 'collapsible' => false,
                 'border' => false,
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' =>
            array (
            ),
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'icon' => '',
             'labelWidth' => 0,
             'labelAlign' => 'left',
          )),
          5 =>
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'Marketing',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Marketing',
             'width' => '',
             'height' => '',
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'children' =>
            array (
              0 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                 'name' => 'buyingtogether',
                 'title' => 'Compre junto',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'manyToManyObjectRelation',
                 'relationType' => true,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'classes' =>
                array (
                  0 =>
                  array (
                    'classes' => 'Bicicleta',
                  ),
                ),
                 'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                 'width' => '',
                 'height' => '',
                 'maxItems' => NULL,
                 'visibleFields' => 'name',
                 'allowToCreateNewObject' => false,
                 'optimizedAdminLoading' => false,
                 'enableTextSelection' => false,
                 'visibleFieldDefinitions' =>
                array (
                ),
              )),
              1 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\AdvancedManyToManyRelation::__set_state(array(
                 'name' => 'shopkeepermaterial',
                 'title' => 'Material lojista',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'advancedManyToManyRelation',
                 'relationType' => true,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'classes' =>
                array (
                ),
                 'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                 'width' => '',
                 'height' => NULL,
                 'maxItems' => NULL,
                 'assetUploadPath' => '',
                 'objectsAllowed' => false,
                 'assetsAllowed' => true,
                 'assetTypes' =>
                array (
                  0 =>
                  array (
                    'assetTypes' => 'folder',
                  ),
                  1 =>
                  array (
                    'assetTypes' => 'image',
                  ),
                  2 =>
                  array (
                    'assetTypes' => 'text',
                  ),
                  3 =>
                  array (
                    'assetTypes' => 'audio',
                  ),
                  4 =>
                  array (
                    'assetTypes' => 'video',
                  ),
                  5 =>
                  array (
                    'assetTypes' => 'document',
                  ),
                  6 =>
                  array (
                    'assetTypes' => 'archive',
                  ),
                ),
                 'documentsAllowed' => false,
                 'documentTypes' =>
                array (
                ),
                 'enableTextSelection' => false,
                 'columns' =>
                array (
                ),
                 'columnKeys' =>
                array (
                ),
                 'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\ElementMetadata[]',
                 'optimizedAdminLoading' => true,
                 'enableBatchEdit' => true,
                 'allowMultipleAssignments' => true,
              )),
              2 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\AdvancedManyToManyRelation::__set_state(array(
                 'name' => 'technicalSheet',
                 'title' => 'Ficha T&eacute;cnica',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'advancedManyToManyRelation',
                 'relationType' => true,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'classes' =>
                array (
                ),
                 'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                 'width' => '',
                 'height' => NULL,
                 'maxItems' => NULL,
                 'assetUploadPath' => '',
                 'objectsAllowed' => false,
                 'assetsAllowed' => true,
                 'assetTypes' =>
                array (
                ),
                 'documentsAllowed' => false,
                 'documentTypes' =>
                array (
                ),
                 'enableTextSelection' => false,
                 'columns' =>
                array (
                ),
                 'columnKeys' =>
                array (
                ),
                 'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\ElementMetadata[]',
                 'optimizedAdminLoading' => false,
                 'enableBatchEdit' => false,
                 'allowMultipleAssignments' => false,
              )),
              3 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\AdvancedManyToManyRelation::__set_state(array(
                 'name' => 'promotional',
                 'title' => 'Promocional',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'advancedManyToManyRelation',
                 'relationType' => true,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'classes' =>
                array (
                ),
                 'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                 'width' => '',
                 'height' => NULL,
                 'maxItems' => NULL,
                 'assetUploadPath' => '',
                 'objectsAllowed' => false,
                 'assetsAllowed' => true,
                 'assetTypes' =>
                array (
                ),
                 'documentsAllowed' => false,
                 'documentTypes' =>
                array (
                ),
                 'enableTextSelection' => false,
                 'columns' =>
                array (
                ),
                 'columnKeys' =>
                array (
                ),
                 'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\ElementMetadata[]',
                 'optimizedAdminLoading' => false,
                 'enableBatchEdit' => false,
                 'allowMultipleAssignments' => false,
              )),
              4 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'name' => 'seo',
                 'title' => 'Seo',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'input',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'columnLength' => 190,
                 'regex' => '',
                 'regexFlags' =>
                array (
                ),
                 'unique' => false,
                 'showCharCount' => false,
                 'defaultValueGenerator' => '',
              )),
              5 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Textarea::__set_state(array(
                 'name' => 'Descri',
                 'title' => 'Descrição',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'textarea',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'width' => '',
                 'height' => '',
                 'maxLength' => NULL,
                 'showCharCount' => false,
                 'excludeFromSearchIndex' => false,
              )),
              6 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\UrlSlug::__set_state(array(
                 'name' => 'urlSlug',
                 'title' => 'Url Slug',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'urlSlug',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'width' => '',
                 'domainLabelWidth' => NULL,
                 'action' => 'App\\Controller\\ProductController:slugAction',
                 'availableSites' =>
                array (
                ),
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' =>
            array (
            ),
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'icon' => '',
             'labelWidth' => 0,
             'labelAlign' => 'left',
          )),
          6 =>
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'ERPData',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Erp Data',
             'width' => '',
             'height' => '',
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'children' =>
            array (
              0 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                 'name' => 'jppcode',
                 'title' => 'Código ',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'numeric',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => true,
                 'visibleSearch' => true,
                 'blockedVarsForExport' =>
                array (
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'integer' => true,
                 'unsigned' => false,
                 'minValue' => NULL,
                 'maxValue' => NULL,
                 'unique' => true,
                 'decimalSize' => NULL,
                 'decimalPrecision' => NULL,
                 'defaultValueGenerator' => '',
              )),
              1 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                 'name' => 'ean',
                 'title' => 'EAN',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'numeric',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'integer' => false,
                 'unsigned' => false,
                 'minValue' => NULL,
                 'maxValue' => NULL,
                 'unique' => false,
                 'decimalSize' => NULL,
                 'decimalPrecision' => NULL,
                 'defaultValueGenerator' => '',
              )),
              2 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                 'name' => 'stock',
                 'title' => 'Estoque',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'numeric',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'integer' => false,
                 'unsigned' => false,
                 'minValue' => NULL,
                 'maxValue' => NULL,
                 'unique' => false,
                 'decimalSize' => NULL,
                 'decimalPrecision' => NULL,
                 'defaultValueGenerator' => '',
              )),
              3 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                 'name' => 'price',
                 'title' => 'Preço',
                 'tooltip' => 'Preço Nacional',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'quantityValue',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'width' => '',
                 'unitWidth' => '',
                 'defaultValue' => NULL,
                 'defaultUnit' => NULL,
                 'validUnits' =>
                array (
                  0 => '12',
                ),
                 'integer' => false,
                 'unsigned' => false,
                 'minValue' => NULL,
                 'maxValue' => NULL,
                 'unique' => false,
                 'decimalSize' => NULL,
                 'decimalPrecision' => 2,
                 'autoConvert' => false,
                 'defaultValueGenerator' => '',
              )),
              4 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                 'name' => 'pricees',
                 'title' => 'Preço ES',
                 'tooltip' => 'Preço Espirito Santo',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'quantityValue',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'width' => '',
                 'unitWidth' => '',
                 'defaultValue' => NULL,
                 'defaultUnit' => NULL,
                 'validUnits' =>
                array (
                  0 => '12',
                ),
                 'integer' => false,
                 'unsigned' => false,
                 'minValue' => NULL,
                 'maxValue' => NULL,
                 'unique' => false,
                 'decimalSize' => NULL,
                 'decimalPrecision' => 2,
                 'autoConvert' => false,
                 'defaultValueGenerator' => '',
              )),
              5 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks::__set_state(array(
                 'name' => 'productMeasure',
                 'title' => 'Medida do produto',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'objectbricks',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'allowedTypes' =>
                array (
                  0 => 'ProductMeasure',
                ),
                 'maxItems' => NULL,
                 'border' => false,
              )),
              6 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks::__set_state(array(
                 'name' => 'productPackaging',
                 'title' => 'Embalagem produto',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'objectbricks',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'allowedTypes' =>
                array (
                  0 => 'ProductPackaging',
                ),
                 'maxItems' => NULL,
                 'border' => false,
              )),
              7 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks::__set_state(array(
                 'name' => 'wholesalePacking',
                 'title' => 'Embalagem Atacado',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'objectbricks',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'allowedTypes' =>
                array (
                  0 => 'WholesalePacking',
                ),
                 'maxItems' => NULL,
                 'border' => false,
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' =>
            array (
            ),
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'icon' => NULL,
             'labelWidth' => 100,
             'labelAlign' => 'left',
          )),
        ),
         'locked' => false,
         'blockedVarsForExport' =>
        array (
        ),
         'fieldtype' => 'tabpanel',
         'border' => false,
         'tabPosition' => 'top',
      )),
    ),
     'locked' => false,
     'blockedVarsForExport' =>
    array (
    ),
     'fieldtype' => 'panel',
     'layout' => NULL,
     'border' => false,
     'icon' => NULL,
     'labelWidth' => 100,
     'labelAlign' => 'left',
  )),
   'icon' => '/bundles/pimcoreadmin/img/twemoji/1f6b4.svg',
   'previewUrl' => '',
   'group' => 'Produtos',
   'showAppLoggerTab' => false,
   'linkGeneratorReference' => '',
   'previewGeneratorReference' => '@DataDirectorPreview',
   'compositeIndices' =>
  array (
  ),
   'generateTypeDeclarations' => true,
   'showFieldLookup' => false,
   'propertyVisibility' =>
  array (
    'grid' =>
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => false,
      'creationDate' => false,
    ),
    'search' =>
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => false,
      'creationDate' => false,
    ),
  ),
   'enableGridLocking' => false,
   'deletedDataComponents' =>
  array (
  ),
   'blockedVarsForExport' =>
  array (
  ),
   'activeDispatchingEvents' =>
  array (
  ),
));
