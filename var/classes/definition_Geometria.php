<?php


return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'dao' => NULL,
   'id' => 'GEO',
   'name' => 'Geometria',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1651792734,
   'userOwner' => 1,
   'userModification' => 1,
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
   'allowVariants' => false,
   'showVariants' => false,
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
         'width' => NULL,
         'height' => NULL,
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => NULL,
         'children' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'Layout',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Geometria',
             'width' => NULL,
             'height' => NULL,
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
                 'title' => 'Nome',
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
                 'visibleGridView' => true,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => NULL,
                 'defaultValue' => NULL,
                 'columnLength' => 190,
                 'regex' => '',
                 'regexFlags' => 
                array (
                ),
                 'unique' => true,
                 'showCharCount' => false,
                 'defaultValueGenerator' => '',
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                 'name' => 'frameSizes',
                 'title' => 'tamanho Quadros',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'select',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'S',
                    'value' => 'S',
                  ),
                  1 => 
                  array (
                    'key' => 'M',
                    'value' => 'M',
                  ),
                  2 => 
                  array (
                    'key' => 'L',
                    'value' => 'L',
                  ),
                  3 => 
                  array (
                    'key' => 'XL',
                    'value' => 'XL',
                  ),
                  4 => 
                  array (
                    'key' => '15.5',
                    'value' => '15.5',
                  ),
                  5 => 
                  array (
                    'key' => '16',
                    'value' => '16',
                  ),
                  6 => 
                  array (
                    'key' => '17',
                    'value' => '17',
                  ),
                  7 => 
                  array (
                    'key' => '17.5',
                    'value' => '17.5',
                  ),
                  8 => 
                  array (
                    'key' => '19',
                    'value' => '19',
                  ),
                  9 => 
                  array (
                    'key' => '18',
                    'value' => '18',
                  ),
                  10 => 
                  array (
                    'key' => '21',
                    'value' => '21',
                  ),
                  11 => 
                  array (
                    'key' => '49',
                    'value' => '49',
                  ),
                  12 => 
                  array (
                    'key' => '51',
                    'value' => '51',
                  ),
                  13 => 
                  array (
                    'key' => '52',
                    'value' => '52',
                  ),
                  14 => 
                  array (
                    'key' => '53',
                    'value' => '53',
                  ),
                  15 => 
                  array (
                    'key' => '54',
                    'value' => '54',
                  ),
                  16 => 
                  array (
                    'key' => '56',
                    'value' => '56',
                  ),
                  17 => 
                  array (
                    'key' => '58',
                    'value' => '58',
                  ),
                  18 => 
                  array (
                    'key' => '61',
                    'value' => '61',
                  ),
                  19 => 
                  array (
                    'key' => 'Único',
                    'value' => 'unico',
                  ),
                ),
                 'width' => '',
                 'defaultValue' => '',
                 'optionsProviderClass' => '',
                 'optionsProviderData' => '',
                 'columnLength' => 190,
                 'dynamicOptions' => false,
                 'defaultValueGenerator' => '',
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                 'name' => 'wheelSizes',
                 'title' => 'Aro',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'select',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => '12”',
                    'value' => '12',
                  ),
                  1 => 
                  array (
                    'key' => '16”',
                    'value' => '16',
                  ),
                  2 => 
                  array (
                    'key' => '20” ',
                    'value' => '20',
                  ),
                  3 => 
                  array (
                    'key' => '24”',
                    'value' => '24',
                  ),
                  4 => 
                  array (
                    'key' => '26”',
                    'value' => '26',
                  ),
                  5 => 
                  array (
                    'key' => '27.5"',
                    'value' => '27.5',
                  ),
                  6 => 
                  array (
                    'key' => '27.5+"',
                    'value' => '27.5+',
                  ),
                  7 => 
                  array (
                    'key' => '28”',
                    'value' => '28',
                  ),
                  8 => 
                  array (
                    'key' => '29”',
                    'value' => '29',
                  ),
                  9 => 
                  array (
                    'key' => '700c',
                    'value' => '700',
                  ),
                ),
                 'width' => '',
                 'defaultValue' => '',
                 'optionsProviderClass' => '',
                 'optionsProviderData' => '',
                 'columnLength' => 190,
                 'dynamicOptions' => false,
                 'defaultValueGenerator' => '',
              )),
              3 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                 'name' => 'wheel',
                 'title' => 'Aro',
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
                 'visibleGridView' => true,
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
                 'pathFormatterClass' => '',
                 'width' => '',
                 'height' => '',
                 'maxItems' => '',
                 'visibleFields' => 'size',
                 'allowToCreateNewObject' => false,
                 'optimizedAdminLoading' => false,
                 'enableTextSelection' => false,
                 'visibleFieldDefinitions' => 
                array (
                ),
              )),
              4 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                 'name' => 'frameSize',
                 'title' => 'Tamanho do quadro',
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
                 'visibleGridView' => true,
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
                 'pathFormatterClass' => '',
                 'width' => '',
                 'height' => '',
                 'maxItems' => '',
                 'visibleFields' => 'size',
                 'allowToCreateNewObject' => false,
                 'optimizedAdminLoading' => false,
                 'enableTextSelection' => false,
                 'visibleFieldDefinitions' => 
                array (
                ),
              )),
              5 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                 'name' => 'geoimage',
                 'title' => 'Geo Image',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'select',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'MTB Hardtail',
                    'value' => 'MTB Hardtail',
                  ),
                  1 => 
                  array (
                    'key' => 'MTB Full-Hardtail',
                    'value' => 'MTB Full-Hardtail',
                  ),
                  2 => 
                  array (
                    'key' => 'Road',
                    'value' => 'Road',
                  ),
                  3 => 
                  array (
                    'key' => 'Gravel',
                    'value' => 'Gravel',
                  ),
                  4 => 
                  array (
                    'key' => 'Urban',
                    'value' => 'Urban',
                  ),
                  5 => 
                  array (
                    'key' => 'e-Gravel',
                    'value' => 'e-Gravel',
                  ),
                  6 => 
                  array (
                    'key' => 'e-Urban',
                    'value' => 'e-Urban',
                  ),
                  7 => 
                  array (
                    'key' => 'e-Road',
                    'value' => 'e-Road',
                  ),
                  8 => 
                  array (
                    'key' => 'e-MTB Full-Hardtail',
                    'value' => 'e-MTB Full-Hardtail',
                  ),
                  9 => 
                  array (
                    'key' => 'e-MTB Hardtail',
                    'value' => 'e-MTB Hardtail',
                  ),
                  10 => 
                  array (
                    'key' => '',
                    'value' => '',
                  ),
                  11 => 
                  array (
                    'key' => '',
                    'value' => '',
                  ),
                ),
                 'width' => '',
                 'defaultValue' => '',
                 'optionsProviderClass' => '',
                 'optionsProviderData' => '',
                 'columnLength' => 190,
                 'dynamicOptions' => false,
                 'defaultValueGenerator' => '',
              )),
              6 => 
              Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldset::__set_state(array(
                 'name' => 'Layout',
                 'type' => NULL,
                 'region' => NULL,
                 'title' => 'Tabela',
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
                  Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                     'name' => 'SeatTube',
                     'title' => 'SeatTube Length',
                     'tooltip' => '',
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
                     'defaultUnit' => '2',
                     'validUnits' => 
                    array (
                      0 => '10',
                      1 => '3',
                      2 => '7',
                      3 => '6',
                      4 => '4',
                      5 => '1',
                      6 => '8',
                      7 => '2',
                      8 => '5',
                      9 => '9',
                    ),
                     'decimalPrecision' => NULL,
                     'autoConvert' => false,
                     'defaultValueGenerator' => '',
                  )),
                  1 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                     'name' => 'SeatTubeAngle',
                     'title' => 'SeatTube Angle',
                     'tooltip' => '',
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
                     'defaultUnit' => '10',
                     'validUnits' => 
                    array (
                      0 => '10',
                      1 => '3',
                      2 => '7',
                      3 => '6',
                      4 => '4',
                      5 => '1',
                      6 => '8',
                      7 => '2',
                      8 => '5',
                      9 => '9',
                    ),
                     'decimalPrecision' => NULL,
                     'autoConvert' => false,
                     'defaultValueGenerator' => '',
                  )),
                  2 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                     'name' => 'TopTubeLengthReal',
                     'title' => 'TopTube Length(Real)',
                     'tooltip' => '',
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
                     'defaultUnit' => '2',
                     'validUnits' => 
                    array (
                      0 => '10',
                      1 => '3',
                      2 => '7',
                      3 => '6',
                      4 => '4',
                      5 => '1',
                      6 => '8',
                      7 => '2',
                      8 => '5',
                      9 => '9',
                    ),
                     'decimalPrecision' => NULL,
                     'autoConvert' => false,
                     'defaultValueGenerator' => '',
                  )),
                  3 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                     'name' => 'TopTubeLengthVirtual',
                     'title' => 'TopTube Length(Virtual)',
                     'tooltip' => '',
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
                     'defaultUnit' => '2',
                     'validUnits' => 
                    array (
                      0 => '10',
                      1 => '3',
                      2 => '7',
                      3 => '6',
                      4 => '4',
                      5 => '1',
                      6 => '8',
                      7 => '2',
                      8 => '5',
                      9 => '9',
                    ),
                     'decimalPrecision' => NULL,
                     'autoConvert' => false,
                     'defaultValueGenerator' => '',
                  )),
                  4 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                     'name' => 'HeadTubeLength',
                     'title' => 'HeadTube Length',
                     'tooltip' => '',
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
                     'defaultUnit' => '2',
                     'validUnits' => 
                    array (
                      0 => '10',
                      1 => '3',
                      2 => '7',
                      3 => '6',
                      4 => '4',
                      5 => '1',
                      6 => '8',
                      7 => '2',
                      8 => '5',
                      9 => '9',
                    ),
                     'decimalPrecision' => NULL,
                     'autoConvert' => false,
                     'defaultValueGenerator' => '',
                  )),
                  5 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                     'name' => 'HeadTubeAngle',
                     'title' => 'HeadTube Angle',
                     'tooltip' => '',
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
                     'defaultUnit' => '10',
                     'validUnits' => 
                    array (
                      0 => '10',
                      1 => '3',
                      2 => '7',
                      3 => '6',
                      4 => '4',
                      5 => '1',
                      6 => '8',
                      7 => '2',
                      8 => '5',
                      9 => '9',
                    ),
                     'decimalPrecision' => NULL,
                     'autoConvert' => false,
                     'defaultValueGenerator' => '',
                  )),
                  6 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                     'name' => 'BBDrop',
                     'title' => 'BB Drop',
                     'tooltip' => '',
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
                     'defaultUnit' => '2',
                     'validUnits' => 
                    array (
                      0 => '10',
                      1 => '3',
                      2 => '7',
                      3 => '6',
                      4 => '4',
                      5 => '1',
                      6 => '8',
                      7 => '2',
                      8 => '5',
                      9 => '9',
                    ),
                     'decimalPrecision' => NULL,
                     'autoConvert' => false,
                     'defaultValueGenerator' => '',
                  )),
                  7 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                     'name' => 'ChanstayLength',
                     'title' => 'Chanstay Length',
                     'tooltip' => '',
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
                     'defaultUnit' => '2',
                     'validUnits' => 
                    array (
                      0 => '10',
                      1 => '3',
                      2 => '7',
                      3 => '6',
                      4 => '4',
                      5 => '1',
                      6 => '8',
                      7 => '2',
                      8 => '5',
                      9 => '9',
                    ),
                     'decimalPrecision' => NULL,
                     'autoConvert' => false,
                     'defaultValueGenerator' => '',
                  )),
                  8 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                     'name' => 'FronCenterLength',
                     'title' => 'FronCenterLength',
                     'tooltip' => '',
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
                     'defaultUnit' => '2',
                     'validUnits' => 
                    array (
                      0 => '2',
                    ),
                     'decimalPrecision' => NULL,
                     'autoConvert' => false,
                     'defaultValueGenerator' => '',
                  )),
                  9 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                     'name' => 'WeelbaseLength',
                     'title' => 'WeelbaseLength',
                     'tooltip' => '',
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
                     'defaultUnit' => '2',
                     'validUnits' => 
                    array (
                      0 => '10',
                      1 => '3',
                      2 => '7',
                      3 => '6',
                      4 => '4',
                      5 => '1',
                      6 => '8',
                      7 => '2',
                      8 => '5',
                      9 => '9',
                    ),
                     'decimalPrecision' => NULL,
                     'autoConvert' => false,
                     'defaultValueGenerator' => '',
                  )),
                  10 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                     'name' => 'Stack',
                     'title' => 'Stack',
                     'tooltip' => '',
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
                     'defaultUnit' => '2',
                     'validUnits' => 
                    array (
                      0 => '10',
                      1 => '3',
                      2 => '7',
                      3 => '6',
                      4 => '4',
                      5 => '1',
                      6 => '8',
                      7 => '2',
                      8 => '5',
                      9 => '9',
                    ),
                     'decimalPrecision' => NULL,
                     'autoConvert' => false,
                     'defaultValueGenerator' => '',
                  )),
                  11 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                     'name' => 'Reach',
                     'title' => 'Reach',
                     'tooltip' => '',
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
                     'defaultUnit' => '2',
                     'validUnits' => 
                    array (
                      0 => '10',
                      1 => '3',
                      2 => '7',
                      3 => '6',
                      4 => '4',
                      5 => '1',
                      6 => '8',
                      7 => '2',
                      8 => '5',
                      9 => '9',
                    ),
                     'decimalPrecision' => NULL,
                     'autoConvert' => false,
                     'defaultValueGenerator' => '',
                  )),
                  12 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                     'name' => 'ForkLength',
                     'title' => 'Fork Length',
                     'tooltip' => '',
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
                     'defaultUnit' => '2',
                     'validUnits' => 
                    array (
                      0 => '10',
                      1 => '3',
                      2 => '7',
                      3 => '6',
                      4 => '4',
                      5 => '1',
                      6 => '8',
                      7 => '2',
                      8 => '5',
                      9 => '9',
                    ),
                     'decimalPrecision' => NULL,
                     'autoConvert' => false,
                     'defaultValueGenerator' => '',
                  )),
                  13 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                     'name' => 'ForkRakeOffset',
                     'title' => 'Fork Rake/Offset',
                     'tooltip' => '',
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
                     'defaultUnit' => 'mm',
                     'validUnits' => 
                    array (
                      0 => '10',
                      1 => '3',
                      2 => '7',
                      3 => '6',
                      4 => '4',
                      5 => '1',
                      6 => '8',
                      7 => '2',
                      8 => '5',
                      9 => '9',
                    ),
                     'decimalPrecision' => NULL,
                     'autoConvert' => false,
                     'defaultValueGenerator' => '',
                  )),
                  14 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                     'name' => 'Trial',
                     'title' => 'Trial',
                     'tooltip' => '',
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
                     'defaultUnit' => 'mm',
                     'validUnits' => 
                    array (
                      0 => '10',
                      1 => '3',
                      2 => '7',
                      3 => '6',
                      4 => '4',
                      5 => '1',
                      6 => '8',
                      7 => '2',
                      8 => '5',
                      9 => '9',
                    ),
                     'decimalPrecision' => NULL,
                     'autoConvert' => false,
                     'defaultValueGenerator' => '',
                  )),
                ),
                 'locked' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'fieldtype' => 'fieldset',
                 'labelWidth' => 100,
                 'labelAlign' => 'left',
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
     'icon' => NULL,
     'labelWidth' => 100,
     'labelAlign' => 'left',
  )),
   'icon' => '/bundles/pimcoreadmin/img/flat-color-icons/ruler.svg',
   'previewUrl' => '',
   'group' => 'Produtos',
   'showAppLoggerTab' => false,
   'linkGeneratorReference' => '',
   'previewGeneratorReference' => '',
   'compositeIndices' => 
  array (
  ),
   'generateTypeDeclarations' => false,
   'showFieldLookup' => false,
   'propertyVisibility' => 
  array (
    'grid' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
    'search' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
  ),
   'enableGridLocking' => false,
   'blockedVarsForExport' => 
  array (
  ),
   'activeDispatchingEvents' => 
  array (
  ),
));
