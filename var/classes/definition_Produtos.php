<?php 

/** 
* Inheritance: yes
* Variants: yes


Fields Summary: 
- name [input]
- brand [manyToManyObjectRelation]
- categorias [manyToManyObjectRelation]
- useRecommendation [manyToManyObjectRelation]
- featuresList [manyToManyObjectRelation]
- description [wysiwyg]
- attributes [manyToManyObjectRelation]
- size [manyToManyObjectRelation]
- adverts [manyToManyObjectRelation]
- color [manyToManyObjectRelation]
- suggestedprice [numeric]
- extra [manyToManyObjectRelation]
- cover [image]
- featureImage [image]
- imageGalleries [imageGallery]
- videos [fieldcollections]
- rotateGalleries [imageGallery]
- technology [manyToManyObjectRelation]
- faq [manyToManyObjectRelation]
- warranty [manyToManyObjectRelation]
- comercial [manyToManyObjectRelation]
- longdescription [wysiwyg]
- galeries [fieldcollections]
- IndicationsForUse [advancedManyToManyRelation]
- buyingtogether [manyToManyObjectRelation]
- attachment [advancedManyToManyRelation]
- technicalSheet [advancedManyToManyRelation]
- shopkeepermaterial [advancedManyToManyRelation]
- jppcode [numeric]
- typeTaxation [select]
- ean [numeric]
- stock [numeric]
- price [numeric]
- productMeasure [objectbricks]
- productPackaging [objectbricks]
- wholesalePacking [objectbricks]
*/ 


return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'id' => 'PROD',
   'name' => 'Produtos',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1625789968,
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
   'allowVariants' => true,
   'showVariants' => false,
   'fieldDefinitions' => 
  array (
  ),
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'fieldtype' => 'panel',
     'layout' => NULL,
     'border' => false,
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
     'childs' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Tabpanel::__set_state(array(
         'fieldtype' => 'tabpanel',
         'border' => false,
         'tabPosition' => NULL,
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
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'name' => 'Base',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Base',
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
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => '',
                 'defaultValue' => NULL,
                 'columnLength' => 190,
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => false,
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
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => true,
                 'visibleSearch' => true,
                 'blockedVarsForExport' => 
                array (
                ),
                 'defaultValueGenerator' => '',
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                 'fieldtype' => 'manyToManyObjectRelation',
                 'width' => 500,
                 'height' => '',
                 'maxItems' => '',
                 'relationType' => true,
                 'visibleFields' => 'brand,name',
                 'allowToCreateNewObject' => false,
                 'optimizedAdminLoading' => false,
                 'visibleFieldDefinitions' => 
                array (
                ),
                 'classes' => 
                array (
                  0 => 
                  array (
                    'classes' => 'Marca',
                  ),
                ),
                 'pathFormatterClass' => '',
                 'name' => 'brand',
                 'title' => 'Marca',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'invisible' => false,
                 'visibleGridView' => true,
                 'visibleSearch' => true,
                 'blockedVarsForExport' => 
                array (
                ),
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                 'fieldtype' => 'manyToManyObjectRelation',
                 'width' => 500,
                 'height' => '',
                 'maxItems' => '',
                 'relationType' => true,
                 'visibleFields' => 'name',
                 'allowToCreateNewObject' => false,
                 'optimizedAdminLoading' => false,
                 'visibleFieldDefinitions' => 
                array (
                ),
                 'classes' => 
                array (
                  0 => 
                  array (
                    'classes' => 'Categoria',
                  ),
                ),
                 'pathFormatterClass' => '',
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
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
              )),
              3 => 
              Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldcontainer::__set_state(array(
                 'fieldtype' => 'fieldcontainer',
                 'layout' => 'hbox',
                 'fieldLabel' => '',
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
                 'childs' => 
                array (
                  0 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                     'fieldtype' => 'manyToManyObjectRelation',
                     'width' => 500,
                     'height' => '',
                     'maxItems' => '',
                     'relationType' => true,
                     'visibleFields' => 'name,gallery',
                     'allowToCreateNewObject' => true,
                     'optimizedAdminLoading' => true,
                     'visibleFieldDefinitions' => 
                    array (
                    ),
                     'classes' => 
                    array (
                      0 => 
                      array (
                        'classes' => 'info',
                      ),
                    ),
                     'pathFormatterClass' => '',
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
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'blockedVarsForExport' => 
                    array (
                    ),
                  )),
                  1 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                     'fieldtype' => 'manyToManyObjectRelation',
                     'width' => 500,
                     'height' => '',
                     'maxItems' => '',
                     'relationType' => true,
                     'visibleFields' => 'name,description',
                     'allowToCreateNewObject' => false,
                     'optimizedAdminLoading' => false,
                     'visibleFieldDefinitions' => 
                    array (
                    ),
                     'classes' => 
                    array (
                      0 => 
                      array (
                        'classes' => 'Destaque',
                      ),
                    ),
                     'pathFormatterClass' => '',
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
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'blockedVarsForExport' => 
                    array (
                    ),
                  )),
                ),
                 'locked' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'labelWidth' => '',
                 'labelAlign' => 'left',
              )),
              4 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Wysiwyg::__set_state(array(
                 'fieldtype' => 'wysiwyg',
                 'width' => '',
                 'height' => '',
                 'toolbarConfig' => '',
                 'excludeFromSearchIndex' => false,
                 'name' => 'description',
                 'title' => 'Descri&ccedil;&atilde;o (B2B)',
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
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'icon' => '',
             'labelWidth' => '',
             'labelAlign' => 'left',
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
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
             'childs' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Layout\Tabpanel::__set_state(array(
                 'fieldtype' => 'tabpanel',
                 'border' => false,
                 'tabPosition' => NULL,
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
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                     'fieldtype' => 'panel',
                     'layout' => NULL,
                     'border' => false,
                     'name' => 'Spec',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => 'Espec',
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
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'fieldtype' => 'manyToManyObjectRelation',
                         'width' => '',
                         'height' => '',
                         'maxItems' => '',
                         'relationType' => true,
                         'visibleFields' => 'name,model,manufacturer',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'visibleFieldDefinitions' => 
                        array (
                        ),
                         'classes' => 
                        array (
                          0 => 
                          array (
                            'classes' => 'Espec',
                          ),
                        ),
                         'pathFormatterClass' => '',
                         'name' => 'attributes',
                         'title' => 'Atributos',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' => 
                        array (
                        ),
                      )),
                    ),
                     'locked' => false,
                     'blockedVarsForExport' => 
                    array (
                    ),
                     'icon' => '',
                     'labelWidth' => '',
                     'labelAlign' => 'left',
                  )),
                  1 => 
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                     'fieldtype' => 'panel',
                     'layout' => NULL,
                     'border' => false,
                     'name' => 'Options',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => 'Opções',
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
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'fieldtype' => 'manyToManyObjectRelation',
                         'width' => '',
                         'height' => '',
                         'maxItems' => '',
                         'relationType' => true,
                         'visibleFields' => 'size',
                         'allowToCreateNewObject' => true,
                         'optimizedAdminLoading' => false,
                         'visibleFieldDefinitions' => 
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
                         'name' => 'size',
                         'title' => 'Tamanho(s)',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'invisible' => false,
                         'visibleGridView' => true,
                         'visibleSearch' => true,
                         'blockedVarsForExport' => 
                        array (
                        ),
                      )),
                      1 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'fieldtype' => 'manyToManyObjectRelation',
                         'width' => '',
                         'height' => '',
                         'maxItems' => '',
                         'relationType' => true,
                         'visibleFields' => 'name,text',
                         'allowToCreateNewObject' => true,
                         'optimizedAdminLoading' => false,
                         'visibleFieldDefinitions' => 
                        array (
                        ),
                         'classes' => 
                        array (
                          0 => 
                          array (
                            'classes' => 'info',
                          ),
                        ),
                         'pathFormatterClass' => '',
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
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' => 
                        array (
                        ),
                      )),
                      2 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'fieldtype' => 'manyToManyObjectRelation',
                         'width' => '',
                         'height' => '',
                         'maxItems' => '',
                         'relationType' => true,
                         'visibleFields' => 'filename,id',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'visibleFieldDefinitions' => 
                        array (
                        ),
                         'classes' => 
                        array (
                          0 => 
                          array (
                            'classes' => 'Cor',
                          ),
                        ),
                         'pathFormatterClass' => '',
                         'name' => 'color',
                         'title' => 'Cor(es)',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'invisible' => false,
                         'visibleGridView' => true,
                         'visibleSearch' => true,
                         'blockedVarsForExport' => 
                        array (
                        ),
                      )),
                      3 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                         'fieldtype' => 'numeric',
                         'width' => '',
                         'defaultValue' => NULL,
                         'integer' => true,
                         'unsigned' => true,
                         'minValue' => NULL,
                         'maxValue' => NULL,
                         'unique' => false,
                         'decimalSize' => NULL,
                         'decimalPrecision' => NULL,
                         'name' => 'suggestedprice',
                         'title' => 'Pre&ccedil;o sugerido',
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
                     'icon' => '',
                     'labelWidth' => '',
                     'labelAlign' => 'left',
                  )),
                  2 => 
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                     'fieldtype' => 'panel',
                     'layout' => NULL,
                     'border' => false,
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
                     'childs' => 
                    array (
                      0 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                         'fieldtype' => 'manyToManyObjectRelation',
                         'width' => '',
                         'height' => '',
                         'maxItems' => '',
                         'relationType' => true,
                         'visibleFields' => 'name,model,manufacturer',
                         'allowToCreateNewObject' => false,
                         'optimizedAdminLoading' => false,
                         'visibleFieldDefinitions' => 
                        array (
                        ),
                         'classes' => 
                        array (
                          0 => 
                          array (
                            'classes' => 'CompMontagem',
                          ),
                        ),
                         'pathFormatterClass' => '',
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
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'blockedVarsForExport' => 
                        array (
                        ),
                      )),
                    ),
                     'locked' => false,
                     'blockedVarsForExport' => 
                    array (
                    ),
                     'icon' => '',
                     'labelWidth' => '',
                     'labelAlign' => 'left',
                  )),
                ),
                 'locked' => false,
                 'blockedVarsForExport' => 
                array (
                ),
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'icon' => '',
             'labelWidth' => '',
             'labelAlign' => 'left',
          )),
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'name' => 'Media',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Média',
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
              Pimcore\Model\DataObject\ClassDefinition\Layout\Tabpanel::__set_state(array(
                 'fieldtype' => 'tabpanel',
                 'border' => false,
                 'tabPosition' => 'top',
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
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                     'fieldtype' => 'panel',
                     'layout' => '',
                     'border' => false,
                     'name' => 'Cover',
                     'type' => NULL,
                     'region' => '',
                     'title' => 'Imagem Principal',
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
                      Pimcore\Model\DataObject\ClassDefinition\Data\Image::__set_state(array(
                         'fieldtype' => 'image',
                         'name' => 'cover',
                         'title' => 'Imagem Principal',
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
                         'visibleGridView' => true,
                         'visibleSearch' => true,
                         'blockedVarsForExport' => 
                        array (
                        ),
                         'width' => '',
                         'height' => '',
                         'uploadPath' => '',
                      )),
                      1 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Image::__set_state(array(
                         'fieldtype' => 'image',
                         'name' => 'featureImage',
                         'title' => 'Imagem Destaque',
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
                         'width' => '',
                         'height' => '',
                         'uploadPath' => '',
                      )),
                    ),
                     'locked' => false,
                     'blockedVarsForExport' => 
                    array (
                    ),
                     'icon' => '',
                     'labelWidth' => '',
                     'labelAlign' => 'left',
                  )),
                  1 => 
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                     'fieldtype' => 'panel',
                     'layout' => NULL,
                     'border' => false,
                     'name' => 'Galeria',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => 'Galeria',
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
                      Pimcore\Model\DataObject\ClassDefinition\Data\ImageGallery::__set_state(array(
                         'fieldtype' => 'imageGallery',
                         'width' => '',
                         'height' => '',
                         'uploadPath' => '',
                         'ratioX' => NULL,
                         'ratioY' => NULL,
                         'predefinedDataTemplates' => '',
                         'name' => 'imageGalleries',
                         'title' => 'Galerias de imagens',
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
                      )),
                    ),
                     'locked' => false,
                     'blockedVarsForExport' => 
                    array (
                    ),
                     'icon' => '',
                     'labelWidth' => '',
                     'labelAlign' => 'left',
                  )),
                  2 => 
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                     'fieldtype' => 'panel',
                     'layout' => NULL,
                     'border' => false,
                     'name' => 'Video(s)',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => 'Vídeo(s)',
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
                      Pimcore\Model\DataObject\ClassDefinition\Data\Fieldcollections::__set_state(array(
                         'fieldtype' => 'fieldcollections',
                         'allowedTypes' => 
                        array (
                          0 => 'Videos',
                          1 => 'VideoExternal',
                        ),
                         'lazyLoading' => true,
                         'maxItems' => '',
                         'disallowAddRemove' => false,
                         'disallowReorder' => false,
                         'collapsed' => false,
                         'collapsible' => false,
                         'border' => false,
                         'name' => 'videos',
                         'title' => 'Vídeos',
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
                      )),
                    ),
                     'locked' => false,
                     'blockedVarsForExport' => 
                    array (
                    ),
                     'icon' => '',
                     'labelWidth' => '',
                     'labelAlign' => 'left',
                  )),
                  3 => 
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                     'fieldtype' => 'panel',
                     'layout' => NULL,
                     'border' => false,
                     'name' => '360',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => '360',
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
                      Pimcore\Model\DataObject\ClassDefinition\Data\ImageGallery::__set_state(array(
                         'fieldtype' => 'imageGallery',
                         'width' => '',
                         'height' => '',
                         'uploadPath' => '',
                         'ratioX' => NULL,
                         'ratioY' => NULL,
                         'predefinedDataTemplates' => '',
                         'name' => 'rotateGalleries',
                         'title' => 'Galerias 360',
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
                      )),
                    ),
                     'locked' => false,
                     'blockedVarsForExport' => 
                    array (
                    ),
                     'icon' => '',
                     'labelWidth' => '',
                     'labelAlign' => 'left',
                  )),
                ),
                 'locked' => false,
                 'blockedVarsForExport' => 
                array (
                ),
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'icon' => '',
             'labelWidth' => '',
             'labelAlign' => 'left',
          )),
          3 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'name' => 'Complementation',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Informa Complementares',
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
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                 'fieldtype' => 'manyToManyObjectRelation',
                 'width' => '',
                 'height' => '',
                 'maxItems' => '',
                 'relationType' => true,
                 'visibleFields' => 'name,textDesc',
                 'allowToCreateNewObject' => false,
                 'optimizedAdminLoading' => false,
                 'visibleFieldDefinitions' => 
                array (
                ),
                 'classes' => 
                array (
                  0 => 
                  array (
                    'classes' => 'info',
                  ),
                ),
                 'pathFormatterClass' => '',
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
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                 'fieldtype' => 'manyToManyObjectRelation',
                 'width' => '',
                 'height' => '',
                 'maxItems' => '',
                 'relationType' => true,
                 'visibleFields' => 'name',
                 'allowToCreateNewObject' => false,
                 'optimizedAdminLoading' => false,
                 'visibleFieldDefinitions' => 
                array (
                ),
                 'classes' => 
                array (
                  0 => 
                  array (
                    'classes' => 'info',
                  ),
                ),
                 'pathFormatterClass' => '',
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
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                 'fieldtype' => 'manyToManyObjectRelation',
                 'width' => '',
                 'height' => '',
                 'maxItems' => '',
                 'relationType' => true,
                 'visibleFields' => 'name,text',
                 'allowToCreateNewObject' => false,
                 'optimizedAdminLoading' => false,
                 'visibleFieldDefinitions' => 
                array (
                ),
                 'classes' => 
                array (
                  0 => 
                  array (
                    'classes' => 'info',
                  ),
                ),
                 'pathFormatterClass' => '',
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
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
              )),
              3 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                 'fieldtype' => 'manyToManyObjectRelation',
                 'width' => '',
                 'height' => '',
                 'maxItems' => '',
                 'relationType' => true,
                 'visibleFields' => 'name,id',
                 'allowToCreateNewObject' => true,
                 'optimizedAdminLoading' => true,
                 'visibleFieldDefinitions' => 
                array (
                ),
                 'classes' => 
                array (
                  0 => 
                  array (
                    'classes' => 'CampComercial',
                  ),
                ),
                 'pathFormatterClass' => '',
                 'name' => 'comercial',
                 'title' => 'Campanha comercial',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'icon' => '',
             'labelWidth' => '',
             'labelAlign' => 'left',
          )),
          4 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Region::__set_state(array(
             'fieldtype' => 'region',
             'name' => 'B2C Data',
             'type' => NULL,
             'region' => NULL,
             'title' => 'B2C Data',
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
              Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                 'fieldtype' => 'panel',
                 'layout' => NULL,
                 'border' => false,
                 'name' => 'Layout',
                 'type' => NULL,
                 'region' => 'west',
                 'title' => '',
                 'width' => 800,
                 'height' => '',
                 'collapsible' => false,
                 'collapsed' => false,
                 'bodyStyle' => '',
                 'datatype' => 'layout',
                 'permissions' => NULL,
                 'childs' => 
                array (
                  0 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\Wysiwyg::__set_state(array(
                     'fieldtype' => 'wysiwyg',
                     'width' => '',
                     'height' => '',
                     'toolbarConfig' => '',
                     'excludeFromSearchIndex' => false,
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
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'blockedVarsForExport' => 
                    array (
                    ),
                  )),
                ),
                 'locked' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'icon' => '',
                 'labelWidth' => '',
                 'labelAlign' => 'left',
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                 'fieldtype' => 'panel',
                 'layout' => NULL,
                 'border' => false,
                 'name' => 'Layout',
                 'type' => NULL,
                 'region' => 'east',
                 'title' => '',
                 'width' => 400,
                 'height' => '',
                 'collapsible' => false,
                 'collapsed' => false,
                 'bodyStyle' => '',
                 'datatype' => 'layout',
                 'permissions' => NULL,
                 'childs' => 
                array (
                  0 => 
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Text::__set_state(array(
                     'fieldtype' => 'text',
                     'html' => '<div class="alert alert-info">
Tudo que for adicionado aqui será adicionado ao item da galeria B2B. Somente imagem de destaque que substitui o item.&nbsp;</div>',
                     'renderingClass' => '',
                     'renderingData' => '',
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
                    ),
                     'locked' => false,
                     'blockedVarsForExport' => 
                    array (
                    ),
                  )),
                  1 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\Fieldcollections::__set_state(array(
                     'fieldtype' => 'fieldcollections',
                     'allowedTypes' => 
                    array (
                      0 => 'Destaque',
                      1 => 'Galeria',
                      2 => 'RotateGallery',
                      3 => 'VideoExternal',
                      4 => 'Videos',
                    ),
                     'lazyLoading' => true,
                     'maxItems' => '',
                     'disallowAddRemove' => false,
                     'disallowReorder' => false,
                     'collapsed' => false,
                     'collapsible' => false,
                     'border' => false,
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
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'blockedVarsForExport' => 
                    array (
                    ),
                  )),
                ),
                 'locked' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'icon' => '',
                 'labelWidth' => '',
                 'labelAlign' => 'left',
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'icon' => '',
          )),
          5 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Region::__set_state(array(
             'fieldtype' => 'region',
             'name' => 'Service',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Servi&ccedil;os',
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
              Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                 'fieldtype' => 'panel',
                 'layout' => NULL,
                 'border' => false,
                 'name' => 'Related',
                 'type' => NULL,
                 'region' => 'west',
                 'title' => 'Relacionados',
                 'width' => 600,
                 'height' => '',
                 'collapsible' => false,
                 'collapsed' => false,
                 'bodyStyle' => '',
                 'datatype' => 'layout',
                 'permissions' => NULL,
                 'childs' => 
                array (
                  0 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\AdvancedManyToManyRelation::__set_state(array(
                     'columns' => 
                    array (
                    ),
                     'columnKeys' => 
                    array (
                    ),
                     'fieldtype' => 'advancedManyToManyRelation',
                     'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\ElementMetadata[]',
                     'optimizedAdminLoading' => false,
                     'enableBatchEdit' => false,
                     'allowMultipleAssignments' => false,
                     'width' => '',
                     'height' => NULL,
                     'maxItems' => '',
                     'assetUploadPath' => '/Manuais',
                     'relationType' => true,
                     'objectsAllowed' => false,
                     'assetsAllowed' => true,
                     'assetTypes' => 
                    array (
                    ),
                     'documentsAllowed' => false,
                     'documentTypes' => 
                    array (
                    ),
                     'classes' => 
                    array (
                    ),
                     'pathFormatterClass' => '',
                     'name' => 'IndicationsForUse',
                     'title' => 'Compatibilidade',
                     'tooltip' => 'Compatibilidade/Peças sobressalentes e de desgaste',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'blockedVarsForExport' => 
                    array (
                    ),
                  )),
                  1 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                     'fieldtype' => 'manyToManyObjectRelation',
                     'width' => '',
                     'height' => '',
                     'maxItems' => '',
                     'relationType' => true,
                     'visibleFields' => 'name',
                     'allowToCreateNewObject' => false,
                     'optimizedAdminLoading' => false,
                     'visibleFieldDefinitions' => 
                    array (
                    ),
                     'classes' => 
                    array (
                      0 => 
                      array (
                        'classes' => 'Bicicleta',
                      ),
                    ),
                     'pathFormatterClass' => '',
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
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'blockedVarsForExport' => 
                    array (
                    ),
                  )),
                ),
                 'locked' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'icon' => '',
                 'labelWidth' => '',
                 'labelAlign' => 'left',
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                 'fieldtype' => 'panel',
                 'layout' => NULL,
                 'border' => false,
                 'name' => 'attachment',
                 'type' => NULL,
                 'region' => 'east',
                 'title' => 'Anexo(s)',
                 'width' => 600,
                 'height' => '',
                 'collapsible' => false,
                 'collapsed' => false,
                 'bodyStyle' => '',
                 'datatype' => 'layout',
                 'permissions' => NULL,
                 'childs' => 
                array (
                  0 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\AdvancedManyToManyRelation::__set_state(array(
                     'columns' => 
                    array (
                    ),
                     'columnKeys' => 
                    array (
                    ),
                     'fieldtype' => 'advancedManyToManyRelation',
                     'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\ElementMetadata[]',
                     'optimizedAdminLoading' => false,
                     'enableBatchEdit' => false,
                     'allowMultipleAssignments' => false,
                     'width' => '',
                     'height' => NULL,
                     'maxItems' => '',
                     'assetUploadPath' => '/Manuais',
                     'relationType' => true,
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
                     'classes' => 
                    array (
                    ),
                     'pathFormatterClass' => '',
                     'name' => 'attachment',
                     'title' => 'Anexo(s)',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'blockedVarsForExport' => 
                    array (
                    ),
                  )),
                  1 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\AdvancedManyToManyRelation::__set_state(array(
                     'columns' => 
                    array (
                    ),
                     'columnKeys' => 
                    array (
                    ),
                     'fieldtype' => 'advancedManyToManyRelation',
                     'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\ElementMetadata[]',
                     'optimizedAdminLoading' => false,
                     'enableBatchEdit' => false,
                     'allowMultipleAssignments' => false,
                     'width' => '',
                     'height' => NULL,
                     'maxItems' => '',
                     'assetUploadPath' => '',
                     'relationType' => true,
                     'objectsAllowed' => false,
                     'assetsAllowed' => true,
                     'assetTypes' => 
                    array (
                    ),
                     'documentsAllowed' => false,
                     'documentTypes' => 
                    array (
                    ),
                     'classes' => 
                    array (
                    ),
                     'pathFormatterClass' => '',
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
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'blockedVarsForExport' => 
                    array (
                    ),
                  )),
                  2 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\AdvancedManyToManyRelation::__set_state(array(
                     'columns' => 
                    array (
                    ),
                     'columnKeys' => 
                    array (
                    ),
                     'fieldtype' => 'advancedManyToManyRelation',
                     'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\ElementMetadata[]',
                     'optimizedAdminLoading' => true,
                     'enableBatchEdit' => true,
                     'allowMultipleAssignments' => true,
                     'width' => '',
                     'height' => NULL,
                     'maxItems' => '',
                     'assetUploadPath' => '',
                     'relationType' => true,
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
                     'classes' => 
                    array (
                    ),
                     'pathFormatterClass' => '',
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
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'blockedVarsForExport' => 
                    array (
                    ),
                  )),
                ),
                 'locked' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'icon' => '',
                 'labelWidth' => '',
                 'labelAlign' => 'left',
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'icon' => NULL,
          )),
          6 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
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
             'childs' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                 'fieldtype' => 'numeric',
                 'width' => '',
                 'defaultValue' => NULL,
                 'integer' => false,
                 'unsigned' => false,
                 'minValue' => NULL,
                 'maxValue' => NULL,
                 'unique' => true,
                 'decimalSize' => NULL,
                 'decimalPrecision' => NULL,
                 'name' => 'jppcode',
                 'title' => 'C&oacute;digo JPP',
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
                 'visibleGridView' => true,
                 'visibleSearch' => true,
                 'blockedVarsForExport' => 
                array (
                ),
                 'defaultValueGenerator' => '',
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                 'fieldtype' => 'select',
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'Nac',
                    'value' => 'Nac',
                  ),
                  1 => 
                  array (
                    'key' => 'Imp',
                    'value' => 'Imp',
                  ),
                ),
                 'width' => '',
                 'defaultValue' => '',
                 'optionsProviderClass' => '',
                 'optionsProviderData' => '',
                 'columnLength' => 190,
                 'dynamicOptions' => false,
                 'name' => 'typeTaxation',
                 'title' => 'Tipo de tributação',
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
                 'visibleGridView' => true,
                 'visibleSearch' => true,
                 'blockedVarsForExport' => 
                array (
                ),
                 'defaultValueGenerator' => '',
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                 'fieldtype' => 'numeric',
                 'width' => '',
                 'defaultValue' => NULL,
                 'integer' => false,
                 'unsigned' => false,
                 'minValue' => NULL,
                 'maxValue' => NULL,
                 'unique' => false,
                 'decimalSize' => NULL,
                 'decimalPrecision' => NULL,
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
              Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                 'fieldtype' => 'numeric',
                 'width' => '',
                 'defaultValue' => NULL,
                 'integer' => false,
                 'unsigned' => false,
                 'minValue' => NULL,
                 'maxValue' => NULL,
                 'unique' => false,
                 'decimalSize' => NULL,
                 'decimalPrecision' => NULL,
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
              Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                 'fieldtype' => 'numeric',
                 'width' => '',
                 'defaultValue' => NULL,
                 'integer' => false,
                 'unsigned' => false,
                 'minValue' => 0,
                 'maxValue' => NULL,
                 'unique' => false,
                 'decimalSize' => 10,
                 'decimalPrecision' => 2,
                 'name' => 'price',
                 'title' => 'Pre&ccedil;o ',
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
              5 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks::__set_state(array(
                 'fieldtype' => 'objectbricks',
                 'allowedTypes' => 
                array (
                  0 => 'ProductMeasure',
                ),
                 'maxItems' => '',
                 'border' => false,
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
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
              )),
              6 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks::__set_state(array(
                 'fieldtype' => 'objectbricks',
                 'allowedTypes' => 
                array (
                  0 => 'ProductPackaging',
                ),
                 'maxItems' => '',
                 'border' => false,
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
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
              )),
              7 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks::__set_state(array(
                 'fieldtype' => 'objectbricks',
                 'allowedTypes' => 
                array (
                  0 => 'WholesalePacking',
                ),
                 'maxItems' => '',
                 'border' => false,
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
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
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
        ),
         'locked' => false,
         'blockedVarsForExport' => 
        array (
        ),
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
   'icon' => '/bundles/pimcoreadmin/img/twemoji/1f529.svg',
   'previewUrl' => '',
   'group' => 'Produtos',
   'showAppLoggerTab' => false,
   'linkGeneratorReference' => '',
   'previewGeneratorReference' => '',
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
   'dao' => NULL,
   'blockedVarsForExport' => 
  array (
  ),
));
