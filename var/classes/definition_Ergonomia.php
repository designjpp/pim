<?php

/**
 * Inheritance: yes
 * Variants: yes
 *
 * Fields Summary:
 * - name [input]
 * - frameSize [manyToManyObjectRelation]
 * - wheel [manyToManyObjectRelation]
 * - Spacer [quantityValue]
 * - StemLength [quantityValue]
 * - HandlebarWidth [quantityValue]
 * - CrankLength [quantityValue]
 * - SeatPostDiameter [quantityValue]
 * - DropperPostTravel [quantityValue]
 * - SeatPostLength [quantityValue]
 * - MaximumSeatPostInsertionDepth [quantityValue]
 * - MinimumSeatPostInsertionDepth [quantityValue]
 * - DiscSize [inputQuantityValue]
 * - FrontForkTravel [quantityValue]
 * - RearSuspensionTravel [quantityValue]
 */

return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'dao' => NULL,
   'id' => 'ERG',
   'name' => 'Ergonomia',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1715185697,
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
      Pimcore\Model\DataObject\ClassDefinition\Layout\Region::__set_state(array(
         'name' => 'Ergonomia',
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
             'name' => 'Layout',
             'type' => NULL,
             'region' => 'center',
             'title' => 'Ergonomia',
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
                 'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                 'width' => '',
                 'height' => '',
                 'maxItems' => NULL,
                 'visibleFields' => 'size',
                 'allowToCreateNewObject' => false,
                 'optimizedAdminLoading' => false,
                 'enableTextSelection' => false,
                 'visibleFieldDefinitions' =>
                array (
                ),
              )),
              2 =>
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
                 'pathFormatterClass' => '@DataDirectorSearchViewPathFormatter',
                 'width' => '',
                 'height' => '',
                 'maxItems' => NULL,
                 'visibleFields' => 'size',
                 'allowToCreateNewObject' => false,
                 'optimizedAdminLoading' => false,
                 'enableTextSelection' => true,
                 'visibleFieldDefinitions' =>
                array (
                ),
              )),
              3 =>
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
                     'name' => 'Spacer',
                     'title' => 'Espaçador',
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
                     'defaultUnit' => '3',
                     'validUnits' =>
                    array (
                      0 => '3',
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
                  1 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                     'name' => 'StemLength',
                     'title' => 'Comprimento do suporte de gidão',
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
                     'defaultUnit' => '3',
                     'validUnits' =>
                    array (
                      0 => '3',
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
                  2 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                     'name' => 'HandlebarWidth',
                     'title' => 'Comprimento do guidão',
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
                     'defaultUnit' => '3',
                     'validUnits' =>
                    array (
                      0 => '3',
                      1 => '2',
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
                  3 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                     'name' => 'CrankLength',
                     'title' => 'Comprimento pedivela',
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
                     'defaultUnit' => '3',
                     'validUnits' =>
                    array (
                      0 => '3',
                      1 => '2',
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
                  4 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                     'name' => 'SeatPostDiameter',
                     'title' => 'Diâmetro do canote',
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
                     'defaultUnit' => '3',
                     'validUnits' =>
                    array (
                      0 => '3',
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
                  Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                     'name' => 'DropperPostTravel',
                     'title' => 'Curso canote retrátil',
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
                     'defaultUnit' => '3',
                     'validUnits' =>
                    array (
                      0 => '3',
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
                  6 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                     'name' => 'SeatPostLength',
                     'title' => 'Comprimento do canote',
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
                     'defaultUnit' => '3',
                     'validUnits' =>
                    array (
                      0 => '3',
                      1 => '2',
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
                  7 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                     'name' => 'MaximumSeatPostInsertionDepth',
                     'title' => 'Inserção máxima do canote',
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
                     'defaultUnit' => '3',
                     'validUnits' =>
                    array (
                      0 => '2',
                      1 => '3',
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
                  8 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                     'name' => 'MinimumSeatPostInsertionDepth',
                     'title' => 'Inserção mínima do canote',
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
                     'defaultUnit' => '3',
                     'validUnits' =>
                    array (
                      0 => '2',
                      1 => '3',
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
                  9 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\InputQuantityValue::__set_state(array(
                     'name' => 'DiscSize',
                     'title' => 'Tamanho do disco',
                     'tooltip' => 'Dianteiro/Traseiro',
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
                     'defaultUnit' => '3',
                     'validUnits' =>
                    array (
                      0 => '2',
                      1 => '3',
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
                  10 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                     'name' => 'FrontForkTravel',
                     'title' => 'Curso dianteiro',
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
                     'defaultUnit' => '3',
                     'validUnits' =>
                    array (
                      0 => '3',
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
                  11 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                     'name' => 'RearSuspensionTravel',
                     'title' => 'Curso suspensão traseira',
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
                     'defaultUnit' => '3',
                     'validUnits' =>
                    array (
                      0 => '2',
                      1 => '3',
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
             'icon' => '',
             'labelWidth' => 100,
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
   'icon' => '/bundles/pimcoreadmin/img/flat-color-icons/negative_dynamic.svg',
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
