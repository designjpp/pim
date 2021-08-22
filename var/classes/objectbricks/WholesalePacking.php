<?php 

/** 
Fields Summary: 
- width [quantityValue]
- lenght [quantityValue]
- height [quantityValue]
- weight [quantityValue]
- packings [quantityValue]
*/ 


return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'classDefinitions' => 
  array (
    0 => 
    array (
      'classname' => 'Bicicleta',
      'fieldname' => 'wholesalePacking',
    ),
  ),
   'dao' => NULL,
   'key' => 'WholesalePacking',
   'parentClass' => '',
   'implementsInterfaces' => '',
   'title' => 'Embalagem Atacado',
   'group' => '',
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'fieldtype' => 'panel',
     'layout' => NULL,
     'border' => false,
     'name' => NULL,
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
     'childs' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
         'fieldtype' => 'panel',
         'layout' => NULL,
         'border' => false,
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
         'childs' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
             'fieldtype' => 'quantityValue',
             'width' => '',
             'unitWidth' => '',
             'defaultValue' => NULL,
             'defaultUnit' => '1',
             'validUnits' => 
            array (
              0 => '9',
              1 => '2',
              2 => '6',
              3 => '5',
              4 => '4',
              5 => '7',
              6 => '3',
              7 => '8',
              8 => '1',
              9 => '11',
              10 => '10',
            ),
             'decimalPrecision' => NULL,
             'autoConvert' => false,
             'name' => 'width',
             'title' => 'Largura',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'defaultValueGenerator' => '',
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
             'fieldtype' => 'quantityValue',
             'width' => '',
             'unitWidth' => '',
             'defaultValue' => NULL,
             'defaultUnit' => '1',
             'validUnits' => 
            array (
              0 => '9',
              1 => '2',
              2 => '6',
              3 => '5',
              4 => '4',
              5 => '7',
              6 => '3',
              7 => '8',
              8 => '1',
              9 => '11',
              10 => '10',
            ),
             'decimalPrecision' => NULL,
             'autoConvert' => false,
             'name' => 'lenght',
             'title' => 'Comprimento',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'defaultValueGenerator' => '',
          )),
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
             'fieldtype' => 'quantityValue',
             'width' => '',
             'unitWidth' => '',
             'defaultValue' => NULL,
             'defaultUnit' => '1',
             'validUnits' => 
            array (
              0 => '9',
              1 => '2',
              2 => '6',
              3 => '5',
              4 => '4',
              5 => '7',
              6 => '3',
              7 => '8',
              8 => '1',
              9 => '11',
              10 => '10',
            ),
             'decimalPrecision' => NULL,
             'autoConvert' => false,
             'name' => 'height',
             'title' => 'Altura',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'defaultValueGenerator' => '',
          )),
          3 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
             'fieldtype' => 'quantityValue',
             'width' => '',
             'unitWidth' => '',
             'defaultValue' => NULL,
             'defaultUnit' => '3',
             'validUnits' => 
            array (
              0 => '9',
              1 => '2',
              2 => '6',
              3 => '5',
              4 => '4',
              5 => '7',
              6 => '3',
              7 => '8',
              8 => '1',
              9 => '11',
              10 => '10',
            ),
             'decimalPrecision' => NULL,
             'autoConvert' => false,
             'name' => 'weight',
             'title' => 'Peso',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'defaultValueGenerator' => '',
          )),
          4 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
             'fieldtype' => 'quantityValue',
             'width' => '',
             'unitWidth' => '',
             'defaultValue' => NULL,
             'defaultUnit' => '11',
             'validUnits' => 
            array (
              0 => '9',
              1 => '2',
              2 => '6',
              3 => '5',
              4 => '4',
              5 => '7',
              6 => '3',
              7 => '8',
              8 => '1',
              9 => '11',
              10 => '10',
            ),
             'decimalPrecision' => NULL,
             'autoConvert' => false,
             'name' => 'packings',
             'title' => 'Embalagens',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'defaultValueGenerator' => '',
          )),
        ),
         'locked' => false,
         'blockedVarsForExport' => 
        array (
        ),
         'icon' => NULL,
         'labelWidth' => '',
         'labelAlign' => 'left',
      )),
    ),
     'locked' => false,
     'blockedVarsForExport' => 
    array (
    ),
     'icon' => NULL,
     'labelWidth' => 100,
     'labelAlign' => 'left',
  )),
   'generateTypeDeclarations' => true,
   'blockedVarsForExport' => 
  array (
  ),
));
