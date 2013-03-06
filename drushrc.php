<?php 


$options['sites'] = array (
  0 => 'aug29c.alpha.weborium.co.nz',
  1 => 'a104.alpha.weborium.co.nz',
  2 => 'a100.alpha.weborium.co.nz',
);
$options['profiles'] = array (
  0 => 'standard',
  1 => 'minimal',
  2 => 'or2u_blog',
  3 => 'testing',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'node_test_exception' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/node/tests/node_test_exception.module',
        'basename' => 'node_test_exception.module',
        'name' => 'node_test_exception',
        'info' => 
        array (
          'name' => 'Node module exception tests',
          'description' => 'Support module for node related exception testing.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'node_access_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/node/tests/node_access_test.module',
        'basename' => 'node_access_test.module',
        'name' => 'node_access_test',
        'info' => 
        array (
          'name' => 'Node module access tests',
          'description' => 'Support module for node permission testing.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'node_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/node/tests/node_test.module',
        'basename' => 'node_test.module',
        'name' => 'node_test',
        'info' => 
        array (
          'name' => 'Node module tests',
          'description' => 'Support module for node related testing.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'node' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'node.module',
            1 => 'node.test',
          ),
          'required' => true,
          'configure' => 'admin/structure/types',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'node.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7013',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'taxonomy' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'options',
          ),
          'files' => 
          array (
            0 => 'taxonomy.module',
            1 => 'taxonomy.test',
          ),
          'configure' => 'admin/structure/taxonomy',
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'shortcut' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/shortcut/shortcut.module',
        'basename' => 'shortcut.module',
        'name' => 'shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'shortcut.test',
          ),
          'configure' => 'admin/config/user-interface/shortcut',
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'dashboard' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/dashboard/dashboard.module',
        'basename' => 'dashboard.module',
        'name' => 'dashboard',
        'info' => 
        array (
          'name' => 'Dashboard',
          'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.19',
          'files' => 
          array (
            0 => 'dashboard.test',
          ),
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'configure' => 'admin/dashboard/customize',
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'image_module_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/image/tests/image_module_test.module',
        'basename' => 'image_module_test.module',
        'name' => 'image_module_test',
        'info' => 
        array (
          'name' => 'Image test',
          'description' => 'Provides hook implementations for testing Image module functionality.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'image_module_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'image' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/image/image.module',
        'basename' => 'image.module',
        'name' => 'image',
        'info' => 
        array (
          'name' => 'Image',
          'description' => 'Provides image manipulation tools.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'files' => 
          array (
            0 => 'image.test',
          ),
          'configure' => 'admin/config/media/image-styles',
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'contextual' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/contextual/contextual.module',
        'basename' => 'contextual.module',
        'name' => 'contextual',
        'info' => 
        array (
          'name' => 'Contextual links',
          'description' => 'Provides contextual links to perform actions related to elements on a page.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contextual.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'toolbar' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/toolbar/toolbar.module',
        'basename' => 'toolbar.module',
        'name' => 'toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.19',
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'ccc_update_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/update/tests/ccc_update_test.module',
        'basename' => 'ccc_update_test.module',
        'name' => 'ccc_update_test',
        'info' => 
        array (
          'name' => 'CCC Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.19',
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'aaa_update_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/update/tests/aaa_update_test.module',
        'basename' => 'aaa_update_test.module',
        'name' => 'aaa_update_test',
        'info' => 
        array (
          'name' => 'AAA Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.19',
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'bbb_update_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/update/tests/bbb_update_test.module',
        'basename' => 'bbb_update_test.module',
        'name' => 'bbb_update_test',
        'info' => 
        array (
          'name' => 'BBB Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.19',
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'update_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/update/tests/update_test.module',
        'basename' => 'update_test.module',
        'name' => 'update_test',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'update' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update manager',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'version' => '7.19',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'update.test',
          ),
          'configure' => 'admin/reports/updates/settings',
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'filter' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'filter.test',
          ),
          'required' => true,
          'configure' => 'admin/config/content/formats',
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'block_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/block/tests/block_test.module',
        'basename' => 'block_test.module',
        'name' => 'block_test',
        'info' => 
        array (
          'name' => 'Block test',
          'description' => 'Provides test blocks.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'block' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'block.test',
          ),
          'configure' => 'admin/structure/block',
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7008',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'help' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'help.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'text' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/field/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'text',
        'info' => 
        array (
          'name' => 'Text',
          'description' => 'Defines simple text field types.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'text.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'list_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/field/modules/list/tests/list_test.module',
        'basename' => 'list_test.module',
        'name' => 'list_test',
        'info' => 
        array (
          'name' => 'List test',
          'description' => 'Support module for the List module tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.19',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'list' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/field/modules/list/list.module',
        'basename' => 'list.module',
        'name' => 'list',
        'info' => 
        array (
          'name' => 'List',
          'description' => 'Defines list field types. Use with Options to create selection lists.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'tests/list.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'number' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/field/modules/number/number.module',
        'basename' => 'number.module',
        'name' => 'number',
        'info' => 
        array (
          'name' => 'Number',
          'description' => 'Defines numeric field types.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'number.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'field_sql_storage' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/field/modules/field_sql_storage/field_sql_storage.module',
        'basename' => 'field_sql_storage.module',
        'name' => 'field_sql_storage',
        'info' => 
        array (
          'name' => 'Field SQL storage',
          'description' => 'Stores field data in an SQL database.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_sql_storage.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'options' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/field/modules/options/options.module',
        'basename' => 'options.module',
        'name' => 'options',
        'info' => 
        array (
          'name' => 'Options',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'options.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'field_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/field/tests/field_test.module',
        'basename' => 'field_test.module',
        'name' => 'field_test',
        'info' => 
        array (
          'name' => 'Field API Test',
          'description' => 'Support module for the Field API tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'files' => 
          array (
            0 => 'field_test.entity.inc',
          ),
          'version' => '7.19',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'field' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/field/field.module',
        'basename' => 'field.module',
        'name' => 'field',
        'info' => 
        array (
          'name' => 'Field',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field.module',
            1 => 'field.attach.inc',
            2 => 'tests/field.test',
          ),
          'dependencies' => 
          array (
            0 => 'field_sql_storage',
          ),
          'required' => true,
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'theme/field.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'user_form_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/user/tests/user_form_test.module',
        'basename' => 'user_form_test.module',
        'name' => 'user_form_test',
        'info' => 
        array (
          'name' => 'User module form tests',
          'description' => 'Support module for user form testing.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'user' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'user.module',
            1 => 'user.test',
          ),
          'required' => true,
          'configure' => 'admin/config/people',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'user.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7018',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'tracker' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent content for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tracker.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'locale_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/locale/tests/locale_test.module',
        'basename' => 'locale_test.module',
        'name' => 'locale_test',
        'info' => 
        array (
          'name' => 'Locale Test',
          'description' => 'Support module for the locale layer tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.19',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'locale' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'locale.test',
          ),
          'configure' => 'admin/config/regional/language',
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'color' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows administrators to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'color.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'menu' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'menu.test',
          ),
          'configure' => 'admin/structure/menu',
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'statistics' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'statistics.test',
          ),
          'configure' => 'admin/config/system/statistics',
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'comment' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'text',
          ),
          'files' => 
          array (
            0 => 'comment.module',
            1 => 'comment.test',
          ),
          'configure' => 'admin/content/comment',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'comment.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'search_extra_type' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/search/tests/search_extra_type.module',
        'basename' => 'search_extra_type.module',
        'name' => 'search_extra_type',
        'info' => 
        array (
          'name' => 'Test search type',
          'description' => 'Support module for search module testing.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'search_embedded_form' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/search/tests/search_embedded_form.module',
        'basename' => 'search_embedded_form.module',
        'name' => 'search_embedded_form',
        'info' => 
        array (
          'name' => 'Search embedded form',
          'description' => 'Support module for search module testing of embedded forms.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'search' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'search.extender.inc',
            1 => 'search.test',
          ),
          'configure' => 'admin/config/search/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'search.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'file_module_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/file/tests/file_module_test.module',
        'basename' => 'file_module_test.module',
        'name' => 'file_module_test',
        'info' => 
        array (
          'name' => 'File test',
          'description' => 'Provides hooks for testing File module functionality.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'file' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/file/file.module',
        'basename' => 'file.module',
        'name' => 'file',
        'info' => 
        array (
          'name' => 'File',
          'description' => 'Defines a file field type.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'tests/file.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'path' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'path.test',
          ),
          'configure' => 'admin/config/search/path',
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'system' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system.archiver.inc',
            1 => 'system.mail.inc',
            2 => 'system.queue.inc',
            3 => 'system.tar.inc',
            4 => 'system.updater.inc',
            5 => 'system.test',
          ),
          'required' => true,
          'configure' => 'admin/config/system',
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7077',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'contact' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contact.test',
          ),
          'configure' => 'admin/structure/contact',
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'forum' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
        'info' => 
        array (
          'name' => 'Forum',
          'description' => 'Provides discussion forums.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'forum.test',
          ),
          'configure' => 'admin/structure/forum',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'forum.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'php' => '5.2.4',
        ),
        'schema_version' => '7012',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'overlay' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/overlay/overlay.module',
        'basename' => 'overlay.module',
        'name' => 'overlay',
        'info' => 
        array (
          'name' => 'Overlay',
          'description' => 'Displays the Drupal administration interface in an overlay.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'rdf_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/rdf/tests/rdf_test.module',
        'basename' => 'rdf_test.module',
        'name' => 'rdf_test',
        'info' => 
        array (
          'name' => 'RDF module tests',
          'description' => 'Support module for RDF module testing.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'rdf' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/rdf/rdf.module',
        'basename' => 'rdf.module',
        'name' => 'rdf',
        'info' => 
        array (
          'name' => 'RDF',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rdf.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'translation_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/translation/tests/translation_test.module',
        'basename' => 'translation_test.module',
        'name' => 'translation_test',
        'info' => 
        array (
          'name' => 'Content Translation Test',
          'description' => 'Support module for the content translation tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.19',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'translation' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
        'info' => 
        array (
          'name' => 'Content translation',
          'description' => 'Allows content to be translated into different languages.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'translation.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'php' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'php.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'aggregator_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/aggregator/tests/aggregator_test.module',
        'basename' => 'aggregator_test.module',
        'name' => 'aggregator_test',
        'info' => 
        array (
          'name' => 'Aggregator module tests',
          'description' => 'Support module for aggregator related testing.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'aggregator' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'aggregator.test',
          ),
          'configure' => 'admin/config/services/aggregator/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'aggregator.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'poll' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'poll.test',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'poll.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'profile' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/profile/profile.module',
        'basename' => 'profile.module',
        'name' => 'profile',
        'info' => 
        array (
          'name' => 'Profile',
          'description' => 'Supports configurable user profiles.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'profile.test',
          ),
          'configure' => 'admin/config/people/profile',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'openid_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/openid/tests/openid_test.module',
        'basename' => 'openid_test.module',
        'name' => 'openid_test',
        'info' => 
        array (
          'name' => 'OpenID dummy provider',
          'description' => 'OpenID provider used for testing.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'openid',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'openid' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '7.19',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'openid.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6000',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'field_ui' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/field_ui/field_ui.module',
        'basename' => 'field_ui.module',
        'name' => 'field_ui',
        'info' => 
        array (
          'name' => 'Field UI',
          'description' => 'User interface for the Field API.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_ui.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'book' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'book.test',
          ),
          'configure' => 'admin/content/book/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'book.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'blog' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables multi-user blogs.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'blog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'drupal_system_listing_compatible_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
        'basename' => 'drupal_system_listing_compatible_test.module',
        'name' => 'drupal_system_listing_compatible_test',
        'info' => 
        array (
          'name' => 'Drupal system listing compatible test',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'drupal_system_listing_incompatible_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
        'basename' => 'drupal_system_listing_incompatible_test.module',
        'name' => 'drupal_system_listing_incompatible_test',
        'info' => 
        array (
          'name' => 'Drupal system listing incompatible test',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'session_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/session_test.module',
        'basename' => 'session_test.module',
        'name' => 'session_test',
        'info' => 
        array (
          'name' => 'Session test',
          'description' => 'Support module for session data testing.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'system_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/system_test.module',
        'basename' => 'system_test.module',
        'name' => 'system_test',
        'info' => 
        array (
          'name' => 'System test',
          'description' => 'Support module for system testing.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'menu_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/menu_test.module',
        'basename' => 'menu_test.module',
        'name' => 'menu_test',
        'info' => 
        array (
          'name' => 'Hook menu tests',
          'description' => 'Support module for menu hook testing.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'system_incompatible_core_version_dependencies_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/system_incompatible_core_version_dependencies_test.module',
        'basename' => 'system_incompatible_core_version_dependencies_test.module',
        'name' => 'system_incompatible_core_version_dependencies_test',
        'info' => 
        array (
          'name' => 'System incompatible core version dependencies test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'system_incompatible_core_version_test',
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'batch_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/batch_test.module',
        'basename' => 'batch_test.module',
        'name' => 'batch_test',
        'info' => 
        array (
          'name' => 'Batch API test',
          'description' => 'Support module for Batch API tests.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'url_alter_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/url_alter_test.module',
        'basename' => 'url_alter_test.module',
        'name' => 'url_alter_test',
        'info' => 
        array (
          'name' => 'Url_alter tests',
          'description' => 'A support modules for url_alter hook testing.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.19',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'ajax_forms_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/ajax_forms_test.module',
        'basename' => 'ajax_forms_test.module',
        'name' => 'ajax_forms_test',
        'info' => 
        array (
          'name' => 'AJAX form test mock module',
          'description' => 'Test for AJAX form calls.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.19',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'common_test_cron_helper' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/common_test_cron_helper.module',
        'basename' => 'common_test_cron_helper.module',
        'name' => 'common_test_cron_helper',
        'info' => 
        array (
          'name' => 'Common Test Cron Helper',
          'description' => 'Helper module for CronRunTestCase::testCronExceptions().',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'database_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/database_test.module',
        'basename' => 'database_test.module',
        'name' => 'database_test',
        'info' => 
        array (
          'name' => 'Database Test',
          'description' => 'Support module for Database layer tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.19',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'error_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/error_test.module',
        'basename' => 'error_test.module',
        'name' => 'error_test',
        'info' => 
        array (
          'name' => 'Error test',
          'description' => 'Support module for error and exception testing.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'system_incompatible_module_version_dependencies_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/system_incompatible_module_version_dependencies_test.module',
        'basename' => 'system_incompatible_module_version_dependencies_test.module',
        'name' => 'system_incompatible_module_version_dependencies_test',
        'info' => 
        array (
          'name' => 'System incompatible module version dependencies test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'system_incompatible_module_version_test (>2.0)',
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'system_dependencies_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/system_dependencies_test.module',
        'basename' => 'system_dependencies_test.module',
        'name' => 'system_dependencies_test',
        'info' => 
        array (
          'name' => 'System dependency test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => '_missing_dependency',
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'ajax_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/ajax_test.module',
        'basename' => 'ajax_test.module',
        'name' => 'ajax_test',
        'info' => 
        array (
          'name' => 'AJAX Test',
          'description' => 'Support module for AJAX framework tests.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'module_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/module_test.module',
        'basename' => 'module_test.module',
        'name' => 'module_test',
        'info' => 
        array (
          'name' => 'Module test',
          'description' => 'Support module for module system testing.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'system_incompatible_module_version_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/system_incompatible_module_version_test.module',
        'basename' => 'system_incompatible_module_version_test.module',
        'name' => 'system_incompatible_module_version_test',
        'info' => 
        array (
          'name' => 'System incompatible module version test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'system_incompatible_core_version_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/system_incompatible_core_version_test.module',
        'basename' => 'system_incompatible_core_version_test.module',
        'name' => 'system_incompatible_core_version_test',
        'info' => 
        array (
          'name' => 'System incompatible core version test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '5.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'image_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/image_test.module',
        'basename' => 'image_test.module',
        'name' => 'image_test',
        'info' => 
        array (
          'name' => 'Image test',
          'description' => 'Support module for image toolkit tests.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'taxonomy_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/taxonomy_test.module',
        'basename' => 'taxonomy_test.module',
        'name' => 'taxonomy_test',
        'info' => 
        array (
          'name' => 'Taxonomy test module',
          'description' => '"Tests functions and hooks not used in core".',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'entity_cache_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/entity_cache_test.module',
        'basename' => 'entity_cache_test.module',
        'name' => 'entity_cache_test',
        'info' => 
        array (
          'name' => 'Entity cache test',
          'description' => 'Support module for testing entity cache.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity_cache_test_dependency',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'form_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/form_test.module',
        'basename' => 'form_test.module',
        'name' => 'form_test',
        'info' => 
        array (
          'name' => 'FormAPI Test',
          'description' => 'Support module for Form API tests.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'xmlrpc_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/xmlrpc_test.module',
        'basename' => 'xmlrpc_test.module',
        'name' => 'xmlrpc_test',
        'info' => 
        array (
          'name' => 'XML-RPC Test',
          'description' => 'Support module for XML-RPC tests according to the validator1 specification.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'path_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/path_test.module',
        'basename' => 'path_test.module',
        'name' => 'path_test',
        'info' => 
        array (
          'name' => 'Hook path tests',
          'description' => 'Support module for path hook testing.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'update_test_1' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/update_test_1.module',
        'basename' => 'update_test_1.module',
        'name' => 'update_test_1',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'update_test_3' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/update_test_3.module',
        'basename' => 'update_test_3.module',
        'name' => 'update_test_3',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'entity_crud_hook_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/entity_crud_hook_test.module',
        'basename' => 'entity_crud_hook_test.module',
        'name' => 'entity_crud_hook_test',
        'info' => 
        array (
          'name' => 'Entity CRUD Hooks Test',
          'description' => 'Support module for CRUD hook tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.19',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'theme_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/theme_test.module',
        'basename' => 'theme_test.module',
        'name' => 'theme_test',
        'info' => 
        array (
          'name' => 'Theme test',
          'description' => 'Support module for theme system testing.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'entity_cache_test_dependency' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/entity_cache_test_dependency.module',
        'basename' => 'entity_cache_test_dependency.module',
        'name' => 'entity_cache_test_dependency',
        'info' => 
        array (
          'name' => 'Entity cache test dependency',
          'description' => 'Support dependency module for testing entity cache.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'update_test_2' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/update_test_2.module',
        'basename' => 'update_test_2.module',
        'name' => 'update_test_2',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'requirements2_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/requirements2_test.module',
        'basename' => 'requirements2_test.module',
        'name' => 'requirements2_test',
        'info' => 
        array (
          'name' => 'Requirements 2 Test',
          'description' => 'Tests that a module is not installed when the one it depends on fails hook_requirements(\'install).',
          'dependencies' => 
          array (
            0 => 'requirements1_test',
            1 => 'comment',
          ),
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'common_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/common_test.module',
        'basename' => 'common_test.module',
        'name' => 'common_test',
        'info' => 
        array (
          'name' => 'Common Test',
          'description' => 'Support module for Common tests.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'common_test.css',
            ),
            'print' => 
            array (
              0 => 'common_test.print.css',
            ),
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'update_script_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/update_script_test.module',
        'basename' => 'update_script_test.module',
        'name' => 'update_script_test',
        'info' => 
        array (
          'name' => 'Update script test',
          'description' => 'Support module for update script testing.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'actions_loop_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/actions_loop_test.module',
        'basename' => 'actions_loop_test.module',
        'name' => 'actions_loop_test',
        'info' => 
        array (
          'name' => 'Actions loop test',
          'description' => 'Support module for action loop testing.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'entity_query_access_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/entity_query_access_test.module',
        'basename' => 'entity_query_access_test.module',
        'name' => 'entity_query_access_test',
        'info' => 
        array (
          'name' => 'Entity query access test',
          'description' => 'Support module for checking entity query results.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'filter_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/filter_test.module',
        'basename' => 'filter_test.module',
        'name' => 'filter_test',
        'info' => 
        array (
          'name' => 'Filter test module',
          'description' => 'Tests filter hooks and functions.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'requirements1_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/requirements1_test.module',
        'basename' => 'requirements1_test.module',
        'name' => 'requirements1_test',
        'info' => 
        array (
          'name' => 'Requirements 1 Test',
          'description' => 'Tests that a module is not installed when it fails hook_requirements(\'install\').',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'file_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/tests/file_test.module',
        'basename' => 'file_test.module',
        'name' => 'file_test',
        'info' => 
        array (
          'name' => 'File test',
          'description' => 'Support module for file handling tests.',
          'package' => 'Testing',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'file_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'simpletest' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'simpletest',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'simpletest.test',
            1 => 'drupal_web_test_case.php',
            2 => 'tests/actions.test',
            3 => 'tests/ajax.test',
            4 => 'tests/batch.test',
            5 => 'tests/bootstrap.test',
            6 => 'tests/cache.test',
            7 => 'tests/common.test',
            8 => 'tests/database_test.test',
            9 => 'tests/entity_crud_hook_test.test',
            10 => 'tests/entity_query.test',
            11 => 'tests/error.test',
            12 => 'tests/file.test',
            13 => 'tests/filetransfer.test',
            14 => 'tests/form.test',
            15 => 'tests/graph.test',
            16 => 'tests/image.test',
            17 => 'tests/lock.test',
            18 => 'tests/mail.test',
            19 => 'tests/menu.test',
            20 => 'tests/module.test',
            21 => 'tests/pager.test',
            22 => 'tests/password.test',
            23 => 'tests/path.test',
            24 => 'tests/registry.test',
            25 => 'tests/schema.test',
            26 => 'tests/session.test',
            27 => 'tests/tablesort.test',
            28 => 'tests/theme.test',
            29 => 'tests/unicode.test',
            30 => 'tests/update.test',
            31 => 'tests/xmlrpc.test',
            32 => 'tests/upgrade/upgrade.test',
            33 => 'tests/upgrade/upgrade.comment.test',
            34 => 'tests/upgrade/upgrade.filter.test',
            35 => 'tests/upgrade/upgrade.forum.test',
            36 => 'tests/upgrade/upgrade.locale.test',
            37 => 'tests/upgrade/upgrade.menu.test',
            38 => 'tests/upgrade/upgrade.node.test',
            39 => 'tests/upgrade/upgrade.taxonomy.test',
            40 => 'tests/upgrade/upgrade.trigger.test',
            41 => 'tests/upgrade/upgrade.translatable.test',
            42 => 'tests/upgrade/upgrade.upload.test',
            43 => 'tests/upgrade/upgrade.user.test',
            44 => 'tests/upgrade/update.aggregator.test',
            45 => 'tests/upgrade/update.trigger.test',
            46 => 'tests/upgrade/update.field.test',
            47 => 'tests/upgrade/update.user.test',
          ),
          'configure' => 'admin/config/development/testing/settings',
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'dblog' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'dblog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'syslog' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'syslog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'trigger_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/trigger/tests/trigger_test.module',
        'basename' => 'trigger_test.module',
        'name' => 'trigger_test',
        'info' => 
        array (
          'name' => 'Trigger Test',
          'description' => 'Support module for Trigger tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.19',
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'trigger' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'trigger.test',
          ),
          'configure' => 'admin/structure/trigger',
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.19',
      ),
    ),
    'themes' => 
    array (
      'seven' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/themes/seven/seven.info',
        'basename' => 'seven.info',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'description' => 'A simple one-column, tableless, fluid width administration theme.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'reset.css',
              1 => 'style.css',
            ),
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '1',
          ),
          'regions' => 
          array (
            'content' => 'Content',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
        ),
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'garland' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
            ),
            'print' => 
            array (
              0 => 'print.css',
            ),
          ),
          'settings' => 
          array (
            'garland_width' => 'fluid',
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
        ),
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'stark' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/themes/stark/stark.info',
        'basename' => 'stark.info',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'layout.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
        ),
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'bartik' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/themes/bartik/bartik.info',
        'basename' => 'bartik.info',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'description' => 'A flexible, recolorable theme with many regions.',
          'package' => 'Core',
          'version' => '7.19',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/layout.css',
              1 => 'css/style.css',
              2 => 'css/colors.css',
            ),
            'print' => 
            array (
              0 => 'css/print.css',
            ),
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'highlighted' => 'Highlighted',
            'featured' => 'Featured',
            'content' => 'Content',
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'triptych_first' => 'Triptych first',
            'triptych_middle' => 'Triptych middle',
            'triptych_last' => 'Triptych last',
            'footer_firstcolumn' => 'Footer first column',
            'footer_secondcolumn' => 'Footer second column',
            'footer_thirdcolumn' => 'Footer third column',
            'footer_fourthcolumn' => 'Footer fourth column',
            'footer' => 'Footer',
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '0',
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
        ),
        'project' => 'drupal',
        'version' => '7.19',
      ),
      'update_test_basetheme' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/themes/tests/update_test_basetheme/update_test_basetheme.info',
        'basename' => 'update_test_basetheme.info',
        'name' => 'Update test base theme',
        'info' => 
        array (
          'name' => 'Update test base theme',
          'description' => 'Test theme which acts as a base theme for other test subthemes.',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.8',
          'project' => 'drupal',
          'datestamp' => '1314817616',
        ),
        'project' => 'drupal',
        'version' => '7.8',
      ),
      'test_theme' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/themes/tests/test_theme/test_theme.info',
        'basename' => 'test_theme.info',
        'name' => 'Test theme',
        'info' => 
        array (
          'name' => 'Test theme',
          'description' => 'Theme for testing the theme system',
          'core' => '7.x',
          'hidden' => true,
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'system.base.css',
            ),
          ),
          'version' => '7.8',
          'project' => 'drupal',
          'datestamp' => '1314817616',
        ),
        'project' => 'drupal',
        'version' => '7.8',
      ),
      'update_test_subtheme' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/themes/tests/update_test_subtheme/update_test_subtheme.info',
        'basename' => 'update_test_subtheme.info',
        'name' => 'Update test subtheme',
        'info' => 
        array (
          'name' => 'Update test subtheme',
          'description' => 'Test theme which uses update_test_basetheme as the base theme.',
          'core' => '7.x',
          'base theme' => 'update_test_basetheme',
          'hidden' => true,
          'version' => '7.8',
          'project' => 'drupal',
          'datestamp' => '1314817616',
        ),
        'project' => 'drupal',
        'version' => '7.8',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '7.19',
        'description' => 'This platform is running Drupal 7.19',
      ),
    ),
    'profiles' => 
    array (
      'standard' => 
      array (
        'name' => 'standard',
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/standard/standard.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Standard',
          'description' => 'Install with commonly used features pre-configured.',
          'version' => '7.19',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'color',
            2 => 'comment',
            3 => 'contextual',
            4 => 'dashboard',
            5 => 'help',
            6 => 'image',
            7 => 'list',
            8 => 'menu',
            9 => 'number',
            10 => 'options',
            11 => 'path',
            12 => 'taxonomy',
            13 => 'dblog',
            14 => 'search',
            15 => 'shortcut',
            16 => 'toolbar',
            17 => 'overlay',
            18 => 'field_ui',
            19 => 'file',
            20 => 'rdf',
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
          'old_short_name' => 'default',
        ),
        'version' => '7.19',
      ),
      'minimal' => 
      array (
        'name' => 'minimal',
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/minimal/minimal.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Minimal',
          'description' => 'Start with only a few modules enabled.',
          'version' => '7.19',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'dblog',
          ),
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.19',
      ),
      'or2u_blog' => 
      array (
        'name' => 'or2u_blog',
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/or2u_blog.profile',
        'project' => '',
        'info' => 
        array (
          'name' => 'OR2U blog',
          'description' => 'Install the Open and Ready-to-use Blog.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'comment',
            2 => 'contextual',
            3 => 'dashboard',
            4 => 'image',
            5 => 'list',
            6 => 'menu',
            7 => 'number',
            8 => 'options',
            9 => 'path',
            10 => 'taxonomy',
            11 => 'dblog',
            12 => 'search',
            13 => 'field_ui',
            14 => 'file',
            15 => 'rdf',
            16 => 'contact',
            17 => 'forum',
            18 => 'poll',
            19 => 'token',
            20 => 'admin_menu',
            21 => 'ctools',
            22 => 'captcha',
            23 => 'image_captcha',
            24 => 'entity',
            25 => 'entity_token',
            26 => 'globalredirect',
            27 => 'googleanalytics',
            28 => 'imce',
            29 => 'imce_wysiwyg',
            30 => 'pathauto',
            31 => 'spambot',
            32 => 'service_links',
            33 => 'general_services',
            34 => 'russian_services',
            35 => 'taxonomy_menu',
            36 => 'transliteration',
            37 => 'views',
            38 => 'views_ui',
            39 => 'wysiwyg',
            40 => 'xmlsitemap',
            41 => 'xmlsitemap_node',
            42 => 'xmlsitemap_engines',
            43 => 'hosted_site',
            44 => 'memcache',
          ),
          'files' => 
          array (
            0 => 'or2u_blog.profile',
          ),
          'version' => '2.0 beta4',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
            1 => 'ru',
          ),
        ),
        'version' => '2.0 beta4',
      ),
      'testing' => 
      array (
        'name' => 'testing',
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/testing/testing.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Minimal profile for running tests. Includes absolutely required modules only.',
          'version' => '7.19',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1358374870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.19',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
      'superfish' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/sites/all/modules/superfish/superfish.module',
        'basename' => 'superfish.module',
        'name' => 'superfish',
        'info' => 
        array (
          'name' => 'Superfish',
          'description' => 'jQuery Superfish plugin for your Drupal menus.',
          'package' => 'User interface',
          'dependencies' => 
          array (
            0 => 'menu',
            1 => 'libraries',
          ),
          'configure' => 'admin/config/user-interface/superfish',
          'core' => '7.x',
          'version' => '7.x-1.8',
          'project' => 'superfish',
          'datestamp' => '1301247369',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'superfish',
        'version' => '7.x-1.8',
      ),
      'memcache_admin' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/sites/all/modules/memcache/memcache_admin/memcache_admin.module',
        'basename' => 'memcache_admin.module',
        'name' => 'memcache_admin',
        'info' => 
        array (
          'name' => 'Memcache Admin',
          'description' => 'Adds a User Interface to monitor the Memcache for this site.',
          'core' => '7.x',
          'package' => 'Performance and scalability',
          'version' => '7.x-1.0',
          'project' => 'memcache',
          'datestamp' => '1326973845',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'memcache',
        'version' => '7.x-1.0',
      ),
      'memcache_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/sites/all/modules/memcache/tests/memcache_test.module',
        'basename' => 'memcache_test.module',
        'name' => 'memcache_test',
        'info' => 
        array (
          'name' => 'Memcache test',
          'description' => 'Support module for memcache testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-1.0',
          'project' => 'memcache',
          'datestamp' => '1326973845',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'memcache',
        'version' => '7.x-1.0',
      ),
      'memcache' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/sites/all/modules/memcache/memcache.module',
        'basename' => 'memcache.module',
        'name' => 'memcache',
        'info' => 
        array (
          'name' => 'Memcache',
          'description' => 'High performance integration with memcache.',
          'package' => 'Performance and scalability',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/memcache.test',
            1 => 'tests/memcache-session.test',
            2 => 'tests/memcache-lock.test',
          ),
          'version' => '7.x-1.0',
          'project' => 'memcache',
          'datestamp' => '1326973845',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'memcache',
        'version' => '7.x-1.0',
      ),
      'libraries_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/sites/all/modules/libraries/tests/libraries_test.module',
        'basename' => 'libraries_test.module',
        'name' => 'libraries_test',
        'info' => 
        array (
          'name' => 'Libraries test module',
          'description' => 'Tests library detection and loading.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'libraries',
          ),
          'hidden' => true,
          'version' => '7.x-2.0',
          'project' => 'libraries',
          'datestamp' => '1343561873',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'libraries',
        'version' => '7.x-2.0',
      ),
      'libraries' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/sites/all/modules/libraries/libraries.module',
        'basename' => 'libraries.module',
        'name' => 'libraries',
        'info' => 
        array (
          'name' => 'Libraries',
          'description' => 'Allows version dependent and shared usage of external libraries.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/libraries.test',
          ),
          'version' => '7.x-2.0',
          'project' => 'libraries',
          'datestamp' => '1343561873',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'libraries',
        'version' => '7.x-2.0',
      ),
      'hosted_site' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/sites/all/modules/weborium/hosted_site/hosted_site.module',
        'basename' => 'hosted_site.module',
        'name' => 'hosted_site',
        'info' => 
        array (
          'name' => 'Hosted Site',
          'description' => 'Functions for integrating a hosted client site into Weborium aegir hosting',
          'package' => 'Weborium',
          'core' => '7.x',
          'version' => '7.x-1.3',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.x-1.3',
      ),
      'fusion_responsive_ie' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/sites/all/modules/fusion_accelerator/fusion_responsive_ie/fusion_responsive_ie.module',
        'basename' => 'fusion_responsive_ie.module',
        'name' => 'fusion_responsive_ie',
        'info' => 
        array (
          'name' => 'Responsive layouts for IE 6-8',
          'description' => 'Provides simulated support for CSS media queries in Internet Explorer versions 6-8.',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'package' => 'Fusion Accelerator',
          'dependencies' => 
          array (
            0 => 'libraries',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'fusion_accelerator',
          'datestamp' => '1332518152',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fusion_accelerator',
        'version' => '7.x-2.0-beta1',
      ),
      'fusion_apply_ui_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/sites/all/modules/fusion_accelerator/fusion_apply/tests/fusion_apply_ui_test/fusion_apply_ui_test.module',
        'basename' => 'fusion_apply_ui_test.module',
        'name' => 'fusion_apply_ui_test',
        'info' => 
        array (
          'name' => 'Fusion Apply UI Testing',
          'description' => 'A test module used for testing Fusion Apply UI.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'fusion_apply_ui',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'fusion_accelerator',
          'datestamp' => '1332518152',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fusion_accelerator',
        'version' => '7.x-2.0-beta1',
      ),
      'fusion_apply_test' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/sites/all/modules/fusion_accelerator/fusion_apply/tests/fusion_apply_test/fusion_apply_test.module',
        'basename' => 'fusion_apply_test.module',
        'name' => 'fusion_apply_test',
        'info' => 
        array (
          'name' => 'Fusion Apply Testing',
          'description' => 'Applies skins and performs other tests for Fusion Apply.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'fusion_apply',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'fusion_accelerator',
          'datestamp' => '1332518152',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fusion_accelerator',
        'version' => '7.x-2.0-beta1',
      ),
      'fusion_apply_test_incompatible' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/sites/all/modules/fusion_accelerator/fusion_apply/tests/fusion_apply_incompatible/fusion_apply_test_incompatible.module',
        'basename' => 'fusion_apply_test_incompatible.module',
        'name' => 'fusion_apply_test_incompatible',
        'info' => 
        array (
          'name' => 'Fusion Apply Incompatible Testing',
          'description' => 'A test module used for testing incompatible Fusion Apply API implementations.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'fusion_apply',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'fusion_accelerator',
          'datestamp' => '1332518152',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fusion_accelerator',
        'version' => '7.x-2.0-beta1',
      ),
      'fusion_apply' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/sites/all/modules/fusion_accelerator/fusion_apply/fusion_apply.module',
        'basename' => 'fusion_apply.module',
        'name' => 'fusion_apply',
        'info' => 
        array (
          'name' => 'Apply skins',
          'description' => 'Provides a way to define and skin Drupal UI components, such as blocks and menus.',
          'package' => 'Fusion Accelerator',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/fusion_apply.test',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'fusion_accelerator',
          'datestamp' => '1332518152',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'fusion_accelerator',
        'version' => '7.x-2.0-beta1',
      ),
      'fusion_apply_rules' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/sites/all/modules/fusion_accelerator/fusion_apply/fusion_apply_rules.module',
        'basename' => 'fusion_apply_rules.module',
        'name' => 'fusion_apply_rules',
        'info' => 
        array (
          'name' => 'Apply skins for pages and regions',
          'description' => 'Adds a new tab to the administrative interface to edit skins for pages and regions.',
          'package' => 'Fusion Accelerator',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'fusion_apply',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'fusion_accelerator',
          'datestamp' => '1332518152',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fusion_accelerator',
        'version' => '7.x-2.0-beta1',
      ),
      'fusion_apply_ui' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/sites/all/modules/fusion_accelerator/fusion_apply/fusion_apply_ui.module',
        'basename' => 'fusion_apply_ui.module',
        'name' => 'fusion_apply_ui',
        'info' => 
        array (
          'name' => 'Apply skins UI',
          'description' => 'Administrative interface to edit skins for Drupal UI components.  Without this module, you cannot edit your skins or rules.',
          'package' => 'Fusion Accelerator',
          'core' => '7.x',
          'configure' => 'admin/appearance/fusion',
          'dependencies' => 
          array (
            0 => 'fusion_apply',
            1 => 'contextual',
          ),
          'files' => 
          array (
            0 => 'tests/fusion_apply_ui.test',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'fusion_accelerator',
          'datestamp' => '1332518152',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fusion_accelerator',
        'version' => '7.x-2.0-beta1',
      ),
      'fusion_labels' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/sites/all/modules/fusion_accelerator/fusion_labels/fusion_labels.module',
        'basename' => 'fusion_labels.module',
        'name' => 'fusion_labels',
        'info' => 
        array (
          'name' => 'Fusion labels',
          'description' => 'Toggle buttons are added for administrators to visualize regions and grids in a theme.',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'package' => 'Fusion Accelerator',
          'files' => 
          array (
            0 => 'fusion_accelerator.module',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'fusion_accelerator',
          'datestamp' => '1332518152',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fusion_accelerator',
        'version' => '7.x-2.0-beta1',
      ),
      'fusion_accelerator' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/sites/all/modules/fusion_accelerator/fusion_accelerator.module',
        'basename' => 'fusion_accelerator.module',
        'name' => 'fusion_accelerator',
        'info' => 
        array (
          'name' => 'Fusion grid tools',
          'description' => 'Provides dynamic grid generation for responsive layouts.',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'package' => 'Fusion Accelerator',
          'files' => 
          array (
            0 => 'fusion_accelerator.module',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'fusion_accelerator',
          'datestamp' => '1332518152',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fusion_accelerator',
        'version' => '7.x-2.0-beta1',
      ),
      'devel_generate' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/sites/all/modules/devel/devel_generate/devel_generate.module',
        'basename' => 'devel_generate.module',
        'name' => 'devel_generate',
        'info' => 
        array (
          'name' => 'Devel generate',
          'description' => 'Generate dummy users, nodes, and taxonomy terms.',
          'package' => 'Development',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'devel',
          ),
          'tags' => 
          array (
            0 => 'developer',
          ),
          'configure' => 'admin/config/development/generate',
          'version' => '7.x-1.3',
          'project' => 'devel',
          'datestamp' => '1338940281',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'devel',
        'version' => '7.x-1.3',
      ),
      'devel_node_access' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/sites/all/modules/devel/devel_node_access.module',
        'basename' => 'devel_node_access.module',
        'name' => 'devel_node_access',
        'info' => 
        array (
          'name' => 'Devel node access',
          'description' => 'Developer blocks and page illustrating relevant node_access records.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '7.x-1.3',
          'project' => 'devel',
          'datestamp' => '1338940281',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'devel',
        'version' => '7.x-1.3',
      ),
      'devel' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/sites/all/modules/devel/devel.module',
        'basename' => 'devel.module',
        'name' => 'devel',
        'info' => 
        array (
          'name' => 'Devel',
          'description' => 'Various blocks, pages, and functions for developers.',
          'package' => 'Development',
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'files' => 
          array (
            0 => 'devel.test',
            1 => 'devel.mail.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'devel',
          'datestamp' => '1338940281',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'devel',
        'version' => '7.x-1.3',
      ),
    ),
    'themes' => 
    array (
      'alloy' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/sites/all/themes/alloy/alloy.info',
        'basename' => 'alloy.info',
        'name' => 'Alloy',
        'info' => 
        array (
          'name' => 'Alloy',
          'description' => 'Sub-theme of Fusion. Requires Fusion Accelerator.',
          'base theme' => 'fusion_core',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/alloy-style.css',
            ),
          ),
          'fusion' => 
          array (
            'api' => '2',
            'directory' => 'skins',
          ),
          'regions' => 
          array (
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'header_top' => 'Header top',
            'header' => 'Header',
            'main_menu' => 'Main menu',
            'preface_top' => 'Preface top',
            'preface_bottom' => 'Preface bottom',
            'content' => 'Content',
            'postscript_top' => 'Postscript top',
            'postscript_bottom' => 'Postscript bottom',
            'footer' => 'Footer',
            'node_top' => 'Node top',
            'node_bottom' => 'Node bottom',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'name',
            2 => 'slogan',
            3 => 'node_user_picture',
            4 => 'comment_user_picture',
            5 => 'favicon',
          ),
          'settings' => 
          array (
            'theme_grid' => 'grid12-960',
            'theme_grid_options' => 
            array (
              0 => 'grid16-960',
              1 => 'grid16-fluid',
              2 => 'grid12-960',
              3 => 'grid12-fluid',
            ),
            'fluid_grid_width' => 'fluid-100',
            'theme_font' => 'none',
            'theme_font_size' => 'font-size-13',
            'breadcrumb_display' => '1',
            'search_snippet' => '1',
            'search_info_type' => '1',
            'search_info_user' => '1',
            'search_info_date' => '1',
            'search_info_comment' => '1',
            'search_info_upload' => '1',
            'grid_mask' => '1',
            'responsive_enabled' => '1',
            'responsive_ie_shim' => '1',
            'responsive_columns' => '12',
            'responsive_displays' => 
            array (
              0 => 'sidebar',
              1 => 'sidebar_tablet_landscape',
              2 => 'sidebar_tablet_portrait',
              3 => 'sidebar_phone_landscape',
            ),
            'sidebar_enabled' => '1',
            'sidebar_layout' => 'sidebars-split',
            'sidebar_first_width' => '3',
            'sidebar_second_width' => '3',
            'sidebar_grid_width' => '1200',
            'sidebar_gutter' => '30',
            'sidebar_mquery' => 'only screen and (min-width:1200px)',
            'sidebar_mask' => 'rgba(0, 73, 225, .12)',
            'sidebar_tablet_landscape_enabled' => '1',
            'sidebar_tablet_landscape_layout' => 'sidebars-split',
            'sidebar_tablet_landscape_first_width' => '3',
            'sidebar_tablet_landscape_second_width' => '3',
            'sidebar_tablet_landscape_grid_width' => '960',
            'sidebar_tablet_landscape_gutter' => '20',
            'sidebar_tablet_landscape_mquery' => 'only screen and (max-device-width: 1024px) and (orientation:landscape), only screen and (min-width:960px) and (max-width:1199px) and (min-device-width: 1100px)',
            'sidebar_tablet_landscape_mask' => 'rgba(213,95,28,.15)',
            'sidebar_tablet_portrait_enabled' => '1',
            'sidebar_tablet_portrait_layout' => 'sidebars-split',
            'sidebar_tablet_portrait_first_width' => '3',
            'sidebar_tablet_portrait_second_width' => '3',
            'sidebar_tablet_portrait_grid_width' => '768',
            'sidebar_tablet_portrait_gutter' => '20',
            'sidebar_tablet_portrait_mquery' => 'only screen and (max-device-width: 1024px) and (orientation:portrait), only screen and (min-width:768px) and (max-width:959px) and (min-device-width: 1100px)',
            'sidebar_tablet_portrait_mask' => 'rgba(11,186,40,.15)',
            'sidebar_phone_landscape_enabled' => '1',
            'sidebar_phone_landscape_layout' => 'sidebars-drop',
            'sidebar_phone_landscape_first_width' => '3',
            'sidebar_phone_landscape_second_width' => '3',
            'sidebar_phone_landscape_grid_width' => 'mobile',
            'sidebar_phone_landscape_gutter' => '10',
            'sidebar_phone_landscape_mquery' => 'only screen and (max-width:759px)',
            'sidebar_phone_landscape_mask' => 'rgba(220,220,70,.1)',
            'grid_nested_regions' => 
            array (
              0 => 'sidebar_first',
              1 => 'sidebar_second',
              2 => 'header',
              3 => 'preface_bottom',
              4 => 'content',
              5 => 'postscript_top',
              6 => 'node_top',
              7 => 'node_bottom',
              8 => 'help',
            ),
            'grid_adjusted_regions' => 
            array (
              'preface_bottom' => 
              array (
                0 => 'sidebar_first',
              ),
              'help' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
              ),
              'content' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
              ),
              'node_top' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
              ),
              'node_bottom' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
              ),
              'postscript_top' => 
              array (
                0 => 'sidebar_first',
              ),
            ),
            'grid_adjusted_groups' => 
            array (
              'main_group' => 
              array (
                0 => 'sidebar_first',
              ),
              'content_group' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
              ),
            ),
            'grid_adjusted_regions_fluid' => 
            array (
              'sidebar_second' => 
              array (
                0 => 'sidebar_first',
              ),
              'content' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
              ),
            ),
            'grid_adjusted_groups_fluid' => 
            array (
              'content_group' => 
              array (
                0 => 'sidebar_second',
              ),
            ),
          ),
          'version' => '7.x-1.0',
          'project' => 'alloy',
          'datestamp' => '1328047537',
        ),
        'project' => 'alloy',
        'version' => '7.x-1.0',
      ),
      'fusion_starter' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/sites/all/themes/fusion/fusion_starter/fusion_starter.info',
        'basename' => 'fusion_starter.info',
        'name' => 'Fusion Starter',
        'info' => 
        array (
          'name' => 'Fusion Starter',
          'description' => 'A fully featured Fusion starter theme.  Requires <a href="http://drupal.org/project/fusion">Fusion Core</a> and the <a href="http://drupal.org/project/fusion_accelerator">Fusion Accelerator</a> suite to enable easy point-and-click theming.',
          'base theme' => 'fusion_core',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/fusion-starter-style.css',
            ),
          ),
          'fusion' => 
          array (
            'api' => '2',
            'directory' => 'skins',
          ),
          'regions' => 
          array (
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'header_top' => 'Header top',
            'header' => 'Header',
            'main_menu' => 'Main menu',
            'preface_top' => 'Preface top',
            'preface_bottom' => 'Preface bottom',
            'content' => 'Content',
            'postscript_top' => 'Postscript top',
            'postscript_bottom' => 'Postscript bottom',
            'footer' => 'Footer',
            'node_top' => 'Node top',
            'node_bottom' => 'Node bottom',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'name',
            2 => 'slogan',
            3 => 'node_user_picture',
            4 => 'comment_user_picture',
            5 => 'favicon',
          ),
          'settings' => 
          array (
            'theme_grid' => 'grid12-960',
            'theme_grid_options' => 
            array (
              0 => 'grid16-960',
              1 => 'grid16-fluid',
              2 => 'grid12-960',
              3 => 'grid12-fluid',
            ),
            'fluid_grid_width' => 'fluid-100',
            'theme_font' => 'none',
            'theme_font_size' => 'font-size-13',
            'breadcrumb_display' => '1',
            'search_snippet' => '1',
            'search_info_type' => '1',
            'search_info_user' => '1',
            'search_info_date' => '1',
            'search_info_comment' => '1',
            'search_info_upload' => '1',
            'grid_mask' => '1',
            'responsive_enabled' => '1',
            'responsive_ie_shim' => '1',
            'responsive_columns' => '12',
            'responsive_displays' => 
            array (
              0 => 'sidebar',
              1 => 'sidebar_tablet_landscape',
              2 => 'sidebar_tablet_portrait',
              3 => 'sidebar_phone_landscape',
            ),
            'sidebar_enabled' => '1',
            'sidebar_layout' => 'sidebars-split',
            'sidebar_first_width' => '3',
            'sidebar_second_width' => '3',
            'sidebar_grid_width' => '1200',
            'sidebar_gutter' => '30',
            'sidebar_mquery' => 'only screen and (min-width:1200px)',
            'sidebar_mask' => 'rgba(0, 73, 225, .12)',
            'sidebar_tablet_landscape_enabled' => '1',
            'sidebar_tablet_landscape_layout' => 'sidebars-split',
            'sidebar_tablet_landscape_first_width' => '3',
            'sidebar_tablet_landscape_second_width' => '3',
            'sidebar_tablet_landscape_grid_width' => '960',
            'sidebar_tablet_landscape_gutter' => '20',
            'sidebar_tablet_landscape_mquery' => 'only screen and (max-device-width: 1024px) and (orientation:landscape), only screen and (min-width:960px) and (max-width:1199px) and (min-device-width: 1100px)',
            'sidebar_tablet_landscape_mask' => 'rgba(213,95,28,.15)',
            'sidebar_tablet_portrait_enabled' => '1',
            'sidebar_tablet_portrait_layout' => 'sidebars-split',
            'sidebar_tablet_portrait_first_width' => '3',
            'sidebar_tablet_portrait_second_width' => '3',
            'sidebar_tablet_portrait_grid_width' => '768',
            'sidebar_tablet_portrait_gutter' => '20',
            'sidebar_tablet_portrait_mquery' => 'only screen and (max-device-width: 1024px) and (orientation:portrait), only screen and (min-width:768px) and (max-width:959px) and (min-device-width: 1100px)',
            'sidebar_tablet_portrait_mask' => 'rgba(11,186,40,.15)',
            'sidebar_phone_landscape_enabled' => '1',
            'sidebar_phone_landscape_layout' => 'sidebars-drop',
            'sidebar_phone_landscape_first_width' => '3',
            'sidebar_phone_landscape_second_width' => '3',
            'sidebar_phone_landscape_grid_width' => 'mobile',
            'sidebar_phone_landscape_gutter' => '10',
            'sidebar_phone_landscape_mquery' => 'only screen and (max-width:759px)',
            'sidebar_phone_landscape_mask' => 'rgba(220,220,70,.1)',
            'grid_nested_regions' => 
            array (
              0 => 'sidebar_first',
              1 => 'sidebar_second',
              2 => 'header',
              3 => 'preface_bottom',
              4 => 'content',
              5 => 'postscript_top',
              6 => 'node_top',
              7 => 'node_bottom',
              8 => 'help',
            ),
            'grid_adjusted_regions' => 
            array (
              'preface_bottom' => 
              array (
                0 => 'sidebar_first',
              ),
              'help' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
              ),
              'content' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
              ),
              'node_top' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
              ),
              'node_bottom' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
              ),
              'postscript_top' => 
              array (
                0 => 'sidebar_first',
              ),
            ),
            'grid_adjusted_groups' => 
            array (
              'main_group' => 
              array (
                0 => 'sidebar_first',
              ),
              'content_group' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
              ),
            ),
            'grid_adjusted_regions_fluid' => 
            array (
              'sidebar_second' => 
              array (
                0 => 'sidebar_first',
              ),
              'content' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
              ),
            ),
            'grid_adjusted_groups_fluid' => 
            array (
              'content_group' => 
              array (
                0 => 'sidebar_second',
              ),
            ),
          ),
          'version' => '7.x-2.0-beta2',
          'project' => 'fusion',
          'datestamp' => '1332517846',
        ),
        'project' => 'fusion',
        'version' => '7.x-2.0-beta2',
      ),
      'fusion_core' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/sites/all/themes/fusion/fusion_core/fusion_core.info',
        'basename' => 'fusion_core.info',
        'name' => 'Fusion Core',
        'info' => 
        array (
          'name' => 'Fusion Core',
          'description' => '<a href="http://drupal.org/project/fusion">Fusion Core</a> is the grid-enabled base theme for powerful sub-themes.  With the <a href="http://drupal.org/project/fusion_accelerator">Fusion Accelerator</a> module, it enables easy point-and-click theming. By <a href="http://www.topnotchthemes.com">TopNotchThemes</a>',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/fusion-style.css',
              1 => 'css/fusion-typography.css',
              2 => 'skins/core/fusion-core-skins.css',
            ),
          ),
          'fusion' => 
          array (
            'api' => '2',
            'directory' => 'skins',
          ),
          'scripts' => 
          array (
            0 => 'js/script.js',
          ),
          'regions' => 
          array (
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'header_top' => 'Header top',
            'header' => 'Header',
            'main_menu' => 'Main menu',
            'preface_top' => 'Preface top',
            'preface_bottom' => 'Preface bottom',
            'content' => 'Content',
            'postscript_top' => 'Postscript top',
            'postscript_bottom' => 'Postscript bottom',
            'footer' => 'Footer',
            'node_top' => 'Node top',
            'node_bottom' => 'Node bottom',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'name',
            2 => 'slogan',
            3 => 'node_user_picture',
            4 => 'comment_user_picture',
            5 => 'favicon',
          ),
          'settings' => 
          array (
            'theme_grid' => 'grid16-960',
            'theme_grid_options' => 
            array (
              0 => 'grid16-960',
              1 => 'grid16-fluid',
              2 => 'grid12-960',
              3 => 'grid12-fluid',
            ),
            'fluid_grid_width' => 'fluid-100',
            'sidebar_layout' => 'sidebars-split',
            'sidebar_first_width' => '3',
            'sidebar_second_width' => '3',
            'theme_font' => 'none',
            'theme_font_size' => 'font-size-13',
            'breadcrumb_display' => '1',
            'search_snippet' => '1',
            'search_info_type' => '1',
            'search_info_user' => '1',
            'search_info_date' => '1',
            'search_info_comment' => '1',
            'search_info_upload' => '1',
            'block_config_link' => '1',
            'grid_mask' => '0',
            'grid_nested_regions' => 
            array (
              0 => 'sidebar_first',
              1 => 'sidebar_second',
              2 => 'header',
              3 => 'preface_bottom',
              4 => 'content',
              5 => 'postscript_top',
              6 => 'node_top',
              7 => 'node_bottom',
              8 => 'help',
            ),
            'grid_adjusted_regions' => 
            array (
              'preface_bottom' => 
              array (
                0 => 'sidebar_first',
              ),
              'help' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
              ),
              'content' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
              ),
              'node_top' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
              ),
              'node_bottom' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
              ),
              'postscript_top' => 
              array (
                0 => 'sidebar_first',
              ),
            ),
            'grid_adjusted_groups' => 
            array (
              'main_group' => 
              array (
                0 => 'sidebar_first',
              ),
              'content_group' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
              ),
            ),
            'grid_adjusted_regions_fluid' => 
            array (
              'sidebar_second' => 
              array (
                0 => 'sidebar_first',
              ),
              'content' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
              ),
            ),
            'grid_adjusted_groups_fluid' => 
            array (
              'content_group' => 
              array (
                0 => 'sidebar_second',
              ),
            ),
          ),
          'version' => '7.x-2.0-beta2',
          'project' => 'fusion',
          'datestamp' => '1332517846',
        ),
        'project' => 'fusion',
        'version' => '7.x-2.0-beta2',
      ),
      'fusion_starter_lite' => 
      array (
        'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/sites/all/themes/fusion/fusion_starter_lite/fusion_starter_lite.info',
        'basename' => 'fusion_starter_lite.info',
        'name' => 'Fusion Starter Lite',
        'info' => 
        array (
          'name' => 'Fusion Starter Lite',
          'description' => 'A Fusion starter theme with fewer regions and less markup.  Requires <a href="http://drupal.org/project/fusion">Fusion Core</a> and the <a href="http://drupal.org/project/fusion_accelerator">Fusion Accelerator</a> suite to enable easy point-and-click theming.',
          'base theme' => 'fusion_core',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/fusion-starter-lite-style.css',
            ),
          ),
          'fusion' => 
          array (
            'api' => '2',
            'directory' => 'skins',
          ),
          'regions' => 
          array (
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'header' => 'Header',
            'main_menu' => 'Main menu',
            'content' => 'Content',
            'footer' => 'Footer',
            'help' => 'Help',
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'name',
            2 => 'slogan',
            3 => 'node_user_picture',
            4 => 'comment_user_picture',
            5 => 'favicon',
          ),
          'settings' => 
          array (
            'theme_grid' => 'grid12-960',
            'theme_grid_options' => 
            array (
              0 => 'grid12-960',
              1 => 'grid12-fluid',
            ),
            'fluid_grid_width' => 'fluid-100',
            'theme_font' => 'none',
            'theme_font_size' => 'font-size-13',
            'breadcrumb_display' => '1',
            'search_snippet' => '1',
            'search_info_type' => '1',
            'search_info_user' => '1',
            'search_info_date' => '1',
            'search_info_comment' => '1',
            'search_info_upload' => '1',
            'grid_mask' => '1',
            'responsive_enabled' => '1',
            'responsive_ie_shim' => '1',
            'responsive_columns' => '12',
            'responsive_displays' => 
            array (
              0 => 'sidebar',
              1 => 'sidebar_tablet_landscape',
              2 => 'sidebar_tablet_portrait',
              3 => 'sidebar_phone_landscape',
            ),
            'sidebar_enabled' => '1',
            'sidebar_layout' => 'sidebars-split',
            'sidebar_first_width' => '3',
            'sidebar_second_width' => '3',
            'sidebar_grid_width' => '1200',
            'sidebar_gutter' => '30',
            'sidebar_mquery' => 'only screen and (min-width:1200px)',
            'sidebar_mask' => 'rgba(0, 73, 225, .12)',
            'sidebar_tablet_landscape_enabled' => '1',
            'sidebar_tablet_landscape_layout' => 'sidebars-split',
            'sidebar_tablet_landscape_first_width' => '3',
            'sidebar_tablet_landscape_second_width' => '3',
            'sidebar_tablet_landscape_grid_width' => '960',
            'sidebar_tablet_landscape_gutter' => '20',
            'sidebar_tablet_landscape_mquery' => 'only screen and (max-device-width: 1024px) and (orientation:landscape), only screen and (min-width:960px) and (max-width:1199px) and (min-device-width: 1100px)',
            'sidebar_tablet_landscape_mask' => 'rgba(213,95,28,.15)',
            'sidebar_tablet_portrait_enabled' => '1',
            'sidebar_tablet_portrait_layout' => 'sidebars-split',
            'sidebar_tablet_portrait_first_width' => '3',
            'sidebar_tablet_portrait_second_width' => '3',
            'sidebar_tablet_portrait_grid_width' => '768',
            'sidebar_tablet_portrait_gutter' => '20',
            'sidebar_tablet_portrait_mquery' => 'only screen and (max-device-width: 1024px) and (orientation:portrait), only screen and (min-width:768px) and (max-width:959px) and (min-device-width: 1100px)',
            'sidebar_tablet_portrait_mask' => 'rgba(11,186,40,.15)',
            'sidebar_phone_landscape_enabled' => '1',
            'sidebar_phone_landscape_layout' => 'sidebars-drop',
            'sidebar_phone_landscape_first_width' => '3',
            'sidebar_phone_landscape_second_width' => '3',
            'sidebar_phone_landscape_grid_width' => 'mobile',
            'sidebar_phone_landscape_gutter' => '10',
            'sidebar_phone_landscape_mquery' => 'only screen and (max-width:759px)',
            'sidebar_phone_landscape_mask' => 'rgba(220,220,70,.1)',
            'grid_nested_regions' => 
            array (
              0 => 'sidebar_first',
              1 => 'sidebar_second',
              2 => 'header',
              3 => 'content',
              4 => 'help',
            ),
            'grid_adjusted_regions' => 
            array (
              'help' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
              ),
              'content' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
              ),
            ),
            'grid_adjusted_groups' => 
            array (
              'content_group' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
              ),
            ),
            'grid_adjusted_regions_fluid' => 
            array (
              'sidebar_second' => 
              array (
                0 => 'sidebar_first',
              ),
              'content' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
              ),
            ),
            'grid_adjusted_groups_fluid' => 
            array (
              'content_group' => 
              array (
                0 => 'sidebar_second',
              ),
            ),
          ),
          'version' => '7.x-2.0-beta2',
          'project' => 'fusion',
          'datestamp' => '1332517846',
        ),
        'project' => 'fusion',
        'version' => '7.x-2.0-beta2',
      ),
    ),
  ),
  'profiles' => 
  array (
    'standard' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'minimal' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'or2u_blog' => 
    array (
      'modules' => 
      array (
        'imce_wysiwyg' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/imce_wysiwyg/imce_wysiwyg.module',
          'basename' => 'imce_wysiwyg.module',
          'name' => 'imce_wysiwyg',
          'info' => 
          array (
            'name' => 'IMCE Wysiwyg API bridge',
            'description' => 'Makes IMCE available as plugin for client-side editors integrated via Wysiwyg API.',
            'package' => 'User interface',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'imce',
              1 => 'wysiwyg',
            ),
            'version' => '7.x-1.0',
            'project' => 'imce_wysiwyg',
            'datestamp' => '1317851503',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'imce_wysiwyg',
          'version' => '7.x-1.0',
        ),
        'admin_devel' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/admin_menu/admin_devel/admin_devel.module',
          'basename' => 'admin_devel.module',
          'name' => 'admin_devel',
          'info' => 
          array (
            'name' => 'Administration Development tools',
            'description' => 'Administration and debugging functionality for developers and site builders.',
            'package' => 'Administration',
            'core' => '7.x',
            'scripts' => 
            array (
              0 => 'admin_devel.js',
            ),
            'version' => '7.x-3.0-rc4',
            'project' => 'admin_menu',
            'datestamp' => '1359651687',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'admin_menu',
          'version' => '7.x-3.0-rc4',
        ),
        'admin_menu_toolbar' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
          'basename' => 'admin_menu_toolbar.module',
          'name' => 'admin_menu_toolbar',
          'info' => 
          array (
            'name' => 'Administration menu Toolbar style',
            'description' => 'A better Toolbar.',
            'package' => 'Administration',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'admin_menu',
            ),
            'version' => '7.x-3.0-rc4',
            'project' => 'admin_menu',
            'datestamp' => '1359651687',
            'php' => '5.2.4',
          ),
          'schema_version' => '6300',
          'project' => 'admin_menu',
          'version' => '7.x-3.0-rc4',
        ),
        'admin_menu' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/admin_menu/admin_menu.module',
          'basename' => 'admin_menu.module',
          'name' => 'admin_menu',
          'info' => 
          array (
            'name' => 'Administration menu',
            'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
            'package' => 'Administration',
            'core' => '7.x',
            'configure' => 'admin/config/administration/admin_menu',
            'dependencies' => 
            array (
              0 => 'system (>7.10)',
            ),
            'files' => 
            array (
              0 => 'tests/admin_menu.test',
            ),
            'version' => '7.x-3.0-rc4',
            'project' => 'admin_menu',
            'datestamp' => '1359651687',
            'php' => '5.2.4',
          ),
          'schema_version' => '7304',
          'project' => 'admin_menu',
          'version' => '7.x-3.0-rc4',
        ),
        'views_export' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/views/views_export/views_export.module',
          'basename' => 'views_export.module',
          'name' => 'views_export',
          'info' => 
          array (
            'dependencies' => 
            array (
            ),
            'description' => '',
            'version' => NULL,
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'views_test' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/views/tests/views_test.module',
          'basename' => 'views_test.module',
          'name' => 'views_test',
          'info' => 
          array (
            'name' => 'Views Test',
            'description' => 'Test module for Views.',
            'package' => 'Views',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            'hidden' => true,
            'version' => '7.x-3.5',
            'project' => 'views',
            'datestamp' => '1345829394',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'views',
          'version' => '7.x-3.5',
        ),
        'views_ui' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/views/views_ui.module',
          'basename' => 'views_ui.module',
          'name' => 'views_ui',
          'info' => 
          array (
            'name' => 'Views UI',
            'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
            'package' => 'Views',
            'core' => '7.x',
            'configure' => 'admin/structure/views',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            'files' => 
            array (
              0 => 'views_ui.module',
              1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
            ),
            'version' => '7.x-3.5',
            'project' => 'views',
            'datestamp' => '1345829394',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'views',
          'version' => '7.x-3.5',
        ),
        'views' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/views/views.module',
          'basename' => 'views.module',
          'name' => 'views',
          'info' => 
          array (
            'name' => 'Views',
            'description' => 'Create customized lists and queries from your database.',
            'package' => 'Views',
            'core' => '7.x',
            'php' => '5.2',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/views.css',
              ),
            ),
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'files' => 
            array (
              0 => 'handlers/views_handler_area.inc',
              1 => 'handlers/views_handler_area_result.inc',
              2 => 'handlers/views_handler_area_text.inc',
              3 => 'handlers/views_handler_area_text_custom.inc',
              4 => 'handlers/views_handler_area_view.inc',
              5 => 'handlers/views_handler_argument.inc',
              6 => 'handlers/views_handler_argument_date.inc',
              7 => 'handlers/views_handler_argument_formula.inc',
              8 => 'handlers/views_handler_argument_many_to_one.inc',
              9 => 'handlers/views_handler_argument_null.inc',
              10 => 'handlers/views_handler_argument_numeric.inc',
              11 => 'handlers/views_handler_argument_string.inc',
              12 => 'handlers/views_handler_argument_group_by_numeric.inc',
              13 => 'handlers/views_handler_field.inc',
              14 => 'handlers/views_handler_field_counter.inc',
              15 => 'handlers/views_handler_field_boolean.inc',
              16 => 'handlers/views_handler_field_contextual_links.inc',
              17 => 'handlers/views_handler_field_custom.inc',
              18 => 'handlers/views_handler_field_date.inc',
              19 => 'handlers/views_handler_field_entity.inc',
              20 => 'handlers/views_handler_field_markup.inc',
              21 => 'handlers/views_handler_field_math.inc',
              22 => 'handlers/views_handler_field_numeric.inc',
              23 => 'handlers/views_handler_field_prerender_list.inc',
              24 => 'handlers/views_handler_field_time_interval.inc',
              25 => 'handlers/views_handler_field_serialized.inc',
              26 => 'handlers/views_handler_field_machine_name.inc',
              27 => 'handlers/views_handler_field_url.inc',
              28 => 'handlers/views_handler_filter.inc',
              29 => 'handlers/views_handler_filter_boolean_operator.inc',
              30 => 'handlers/views_handler_filter_boolean_operator_string.inc',
              31 => 'handlers/views_handler_filter_combine.inc',
              32 => 'handlers/views_handler_filter_date.inc',
              33 => 'handlers/views_handler_filter_equality.inc',
              34 => 'handlers/views_handler_filter_entity_bundle.inc',
              35 => 'handlers/views_handler_filter_group_by_numeric.inc',
              36 => 'handlers/views_handler_filter_in_operator.inc',
              37 => 'handlers/views_handler_filter_many_to_one.inc',
              38 => 'handlers/views_handler_filter_numeric.inc',
              39 => 'handlers/views_handler_filter_string.inc',
              40 => 'handlers/views_handler_relationship.inc',
              41 => 'handlers/views_handler_relationship_groupwise_max.inc',
              42 => 'handlers/views_handler_sort.inc',
              43 => 'handlers/views_handler_sort_date.inc',
              44 => 'handlers/views_handler_sort_formula.inc',
              45 => 'handlers/views_handler_sort_group_by_numeric.inc',
              46 => 'handlers/views_handler_sort_menu_hierarchy.inc',
              47 => 'handlers/views_handler_sort_random.inc',
              48 => 'includes/base.inc',
              49 => 'includes/handlers.inc',
              50 => 'includes/plugins.inc',
              51 => 'includes/view.inc',
              52 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
              53 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
              54 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
              55 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
              56 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
              57 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
              58 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
              59 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
              60 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
              61 => 'modules/book/views_plugin_argument_default_book_root.inc',
              62 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
              63 => 'modules/comment/views_handler_field_comment.inc',
              64 => 'modules/comment/views_handler_field_comment_depth.inc',
              65 => 'modules/comment/views_handler_field_comment_link.inc',
              66 => 'modules/comment/views_handler_field_comment_link_approve.inc',
              67 => 'modules/comment/views_handler_field_comment_link_delete.inc',
              68 => 'modules/comment/views_handler_field_comment_link_edit.inc',
              69 => 'modules/comment/views_handler_field_comment_link_reply.inc',
              70 => 'modules/comment/views_handler_field_comment_node_link.inc',
              71 => 'modules/comment/views_handler_field_comment_username.inc',
              72 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
              73 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
              74 => 'modules/comment/views_handler_field_node_comment.inc',
              75 => 'modules/comment/views_handler_field_node_new_comments.inc',
              76 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
              77 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
              78 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
              79 => 'modules/comment/views_handler_filter_node_comment.inc',
              80 => 'modules/comment/views_handler_sort_comment_thread.inc',
              81 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
              82 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
              83 => 'modules/comment/views_plugin_row_comment_rss.inc',
              84 => 'modules/comment/views_plugin_row_comment_view.inc',
              85 => 'modules/contact/views_handler_field_contact_link.inc',
              86 => 'modules/field/views_handler_field_field.inc',
              87 => 'modules/field/views_handler_relationship_entity_reverse.inc',
              88 => 'modules/field/views_handler_argument_field_list.inc',
              89 => 'modules/field/views_handler_argument_field_list_string.inc',
              90 => 'modules/field/views_handler_filter_field_list.inc',
              91 => 'modules/filter/views_handler_field_filter_format_name.inc',
              92 => 'modules/locale/views_handler_field_node_language.inc',
              93 => 'modules/locale/views_handler_filter_node_language.inc',
              94 => 'modules/locale/views_handler_argument_locale_group.inc',
              95 => 'modules/locale/views_handler_argument_locale_language.inc',
              96 => 'modules/locale/views_handler_field_locale_group.inc',
              97 => 'modules/locale/views_handler_field_locale_language.inc',
              98 => 'modules/locale/views_handler_field_locale_link_edit.inc',
              99 => 'modules/locale/views_handler_filter_locale_group.inc',
              100 => 'modules/locale/views_handler_filter_locale_language.inc',
              101 => 'modules/locale/views_handler_filter_locale_version.inc',
              102 => 'modules/node/views_handler_argument_dates_various.inc',
              103 => 'modules/node/views_handler_argument_node_language.inc',
              104 => 'modules/node/views_handler_argument_node_nid.inc',
              105 => 'modules/node/views_handler_argument_node_type.inc',
              106 => 'modules/node/views_handler_argument_node_vid.inc',
              107 => 'modules/node/views_handler_argument_node_uid_revision.inc',
              108 => 'modules/node/views_handler_field_history_user_timestamp.inc',
              109 => 'modules/node/views_handler_field_node.inc',
              110 => 'modules/node/views_handler_field_node_link.inc',
              111 => 'modules/node/views_handler_field_node_link_delete.inc',
              112 => 'modules/node/views_handler_field_node_link_edit.inc',
              113 => 'modules/node/views_handler_field_node_revision.inc',
              114 => 'modules/node/views_handler_field_node_revision_link.inc',
              115 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
              116 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
              117 => 'modules/node/views_handler_field_node_path.inc',
              118 => 'modules/node/views_handler_field_node_type.inc',
              119 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
              120 => 'modules/node/views_handler_filter_node_access.inc',
              121 => 'modules/node/views_handler_filter_node_status.inc',
              122 => 'modules/node/views_handler_filter_node_type.inc',
              123 => 'modules/node/views_handler_filter_node_uid_revision.inc',
              124 => 'modules/node/views_plugin_argument_default_node.inc',
              125 => 'modules/node/views_plugin_argument_validate_node.inc',
              126 => 'modules/node/views_plugin_row_node_rss.inc',
              127 => 'modules/node/views_plugin_row_node_view.inc',
              128 => 'modules/profile/views_handler_field_profile_date.inc',
              129 => 'modules/profile/views_handler_field_profile_list.inc',
              130 => 'modules/profile/views_handler_filter_profile_selection.inc',
              131 => 'modules/search/views_handler_argument_search.inc',
              132 => 'modules/search/views_handler_field_search_score.inc',
              133 => 'modules/search/views_handler_filter_search.inc',
              134 => 'modules/search/views_handler_sort_search_score.inc',
              135 => 'modules/search/views_plugin_row_search_view.inc',
              136 => 'modules/statistics/views_handler_field_accesslog_path.inc',
              137 => 'modules/system/views_handler_argument_file_fid.inc',
              138 => 'modules/system/views_handler_field_file.inc',
              139 => 'modules/system/views_handler_field_file_extension.inc',
              140 => 'modules/system/views_handler_field_file_filemime.inc',
              141 => 'modules/system/views_handler_field_file_uri.inc',
              142 => 'modules/system/views_handler_field_file_status.inc',
              143 => 'modules/system/views_handler_filter_file_status.inc',
              144 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
              145 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
              146 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
              147 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
              148 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
              149 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
              150 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
              151 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
              152 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
              153 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
              154 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
              155 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
              156 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
              157 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
              158 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
              159 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
              160 => 'modules/system/views_handler_filter_system_type.inc',
              161 => 'modules/translation/views_handler_argument_node_tnid.inc',
              162 => 'modules/translation/views_handler_field_node_link_translate.inc',
              163 => 'modules/translation/views_handler_field_node_translation_link.inc',
              164 => 'modules/translation/views_handler_filter_node_tnid.inc',
              165 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
              166 => 'modules/translation/views_handler_relationship_translation.inc',
              167 => 'modules/user/views_handler_argument_user_uid.inc',
              168 => 'modules/user/views_handler_argument_users_roles_rid.inc',
              169 => 'modules/user/views_handler_field_user.inc',
              170 => 'modules/user/views_handler_field_user_language.inc',
              171 => 'modules/user/views_handler_field_user_link.inc',
              172 => 'modules/user/views_handler_field_user_link_cancel.inc',
              173 => 'modules/user/views_handler_field_user_link_edit.inc',
              174 => 'modules/user/views_handler_field_user_mail.inc',
              175 => 'modules/user/views_handler_field_user_name.inc',
              176 => 'modules/user/views_handler_field_user_permissions.inc',
              177 => 'modules/user/views_handler_field_user_picture.inc',
              178 => 'modules/user/views_handler_field_user_roles.inc',
              179 => 'modules/user/views_handler_filter_user_current.inc',
              180 => 'modules/user/views_handler_filter_user_name.inc',
              181 => 'modules/user/views_handler_filter_user_permissions.inc',
              182 => 'modules/user/views_handler_filter_user_roles.inc',
              183 => 'modules/user/views_plugin_argument_default_current_user.inc',
              184 => 'modules/user/views_plugin_argument_default_user.inc',
              185 => 'modules/user/views_plugin_argument_validate_user.inc',
              186 => 'modules/user/views_plugin_row_user_view.inc',
              187 => 'plugins/views_plugin_access.inc',
              188 => 'plugins/views_plugin_access_none.inc',
              189 => 'plugins/views_plugin_access_perm.inc',
              190 => 'plugins/views_plugin_access_role.inc',
              191 => 'plugins/views_plugin_argument_default.inc',
              192 => 'plugins/views_plugin_argument_default_php.inc',
              193 => 'plugins/views_plugin_argument_default_fixed.inc',
              194 => 'plugins/views_plugin_argument_default_raw.inc',
              195 => 'plugins/views_plugin_argument_validate.inc',
              196 => 'plugins/views_plugin_argument_validate_numeric.inc',
              197 => 'plugins/views_plugin_argument_validate_php.inc',
              198 => 'plugins/views_plugin_cache.inc',
              199 => 'plugins/views_plugin_cache_none.inc',
              200 => 'plugins/views_plugin_cache_time.inc',
              201 => 'plugins/views_plugin_display.inc',
              202 => 'plugins/views_plugin_display_attachment.inc',
              203 => 'plugins/views_plugin_display_block.inc',
              204 => 'plugins/views_plugin_display_default.inc',
              205 => 'plugins/views_plugin_display_embed.inc',
              206 => 'plugins/views_plugin_display_extender.inc',
              207 => 'plugins/views_plugin_display_feed.inc',
              208 => 'plugins/views_plugin_display_page.inc',
              209 => 'plugins/views_plugin_exposed_form_basic.inc',
              210 => 'plugins/views_plugin_exposed_form.inc',
              211 => 'plugins/views_plugin_exposed_form_input_required.inc',
              212 => 'plugins/views_plugin_localization_core.inc',
              213 => 'plugins/views_plugin_localization.inc',
              214 => 'plugins/views_plugin_localization_none.inc',
              215 => 'plugins/views_plugin_pager.inc',
              216 => 'plugins/views_plugin_pager_full.inc',
              217 => 'plugins/views_plugin_pager_mini.inc',
              218 => 'plugins/views_plugin_pager_none.inc',
              219 => 'plugins/views_plugin_pager_some.inc',
              220 => 'plugins/views_plugin_query.inc',
              221 => 'plugins/views_plugin_query_default.inc',
              222 => 'plugins/views_plugin_row.inc',
              223 => 'plugins/views_plugin_row_fields.inc',
              224 => 'plugins/views_plugin_row_rss_fields.inc',
              225 => 'plugins/views_plugin_style.inc',
              226 => 'plugins/views_plugin_style_default.inc',
              227 => 'plugins/views_plugin_style_grid.inc',
              228 => 'plugins/views_plugin_style_list.inc',
              229 => 'plugins/views_plugin_style_jump_menu.inc',
              230 => 'plugins/views_plugin_style_rss.inc',
              231 => 'plugins/views_plugin_style_summary.inc',
              232 => 'plugins/views_plugin_style_summary_jump_menu.inc',
              233 => 'plugins/views_plugin_style_summary_unformatted.inc',
              234 => 'plugins/views_plugin_style_table.inc',
              235 => 'tests/handlers/views_handler_area_text.test',
              236 => 'tests/handlers/views_handler_argument_null.test',
              237 => 'tests/handlers/views_handler_argument_string.test',
              238 => 'tests/handlers/views_handler_field.test',
              239 => 'tests/handlers/views_handler_field_boolean.test',
              240 => 'tests/handlers/views_handler_field_custom.test',
              241 => 'tests/handlers/views_handler_field_counter.test',
              242 => 'tests/handlers/views_handler_field_date.test',
              243 => 'tests/handlers/views_handler_field_file_size.test',
              244 => 'tests/handlers/views_handler_field_math.test',
              245 => 'tests/handlers/views_handler_field_url.test',
              246 => 'tests/handlers/views_handler_field_xss.test',
              247 => 'tests/handlers/views_handler_filter_combine.test',
              248 => 'tests/handlers/views_handler_filter_date.test',
              249 => 'tests/handlers/views_handler_filter_equality.test',
              250 => 'tests/handlers/views_handler_filter_in_operator.test',
              251 => 'tests/handlers/views_handler_filter_numeric.test',
              252 => 'tests/handlers/views_handler_filter_string.test',
              253 => 'tests/handlers/views_handler_sort_random.test',
              254 => 'tests/handlers/views_handler_sort_date.test',
              255 => 'tests/handlers/views_handler_sort.test',
              256 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
              257 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
              258 => 'tests/plugins/views_plugin_display.test',
              259 => 'tests/styles/views_plugin_style_jump_menu.test',
              260 => 'tests/styles/views_plugin_style.test',
              261 => 'tests/styles/views_plugin_style_unformatted.test',
              262 => 'tests/views_access.test',
              263 => 'tests/views_analyze.test',
              264 => 'tests/views_basic.test',
              265 => 'tests/views_argument_default.test',
              266 => 'tests/views_argument_validator.test',
              267 => 'tests/views_exposed_form.test',
              268 => 'tests/field/views_fieldapi.test',
              269 => 'tests/views_glossary.test',
              270 => 'tests/views_groupby.test',
              271 => 'tests/views_handlers.test',
              272 => 'tests/views_module.test',
              273 => 'tests/views_pager.test',
              274 => 'tests/views_plugin_localization_test.inc',
              275 => 'tests/views_translatable.test',
              276 => 'tests/views_query.test',
              277 => 'tests/views_upgrade.test',
              278 => 'tests/views_test.views_default.inc',
              279 => 'tests/comment/views_handler_argument_comment_user_uid.test',
              280 => 'tests/comment/views_handler_filter_comment_user_uid.test',
              281 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
              282 => 'tests/user/views_handler_field_user_name.test',
              283 => 'tests/user/views_user_argument_default.test',
              284 => 'tests/user/views_user_argument_validate.test',
              285 => 'tests/user/views_user.test',
              286 => 'tests/views_cache.test',
              287 => 'tests/views_view.test',
              288 => 'tests/views_ui.test',
            ),
            'version' => '7.x-3.5',
            'project' => 'views',
            'datestamp' => '1345829394',
          ),
          'schema_version' => '7301',
          'project' => 'views',
          'version' => '7.x-3.5',
        ),
        'imce' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/imce/imce.module',
          'basename' => 'imce.module',
          'name' => 'imce',
          'info' => 
          array (
            'name' => 'IMCE',
            'description' => 'An image/file uploader and browser supporting personal directories and user quota.',
            'core' => '7.x',
            'package' => 'Media',
            'configure' => 'admin/config/media/imce',
            'version' => '7.x-1.7',
            'project' => 'imce',
            'datestamp' => '1359476607',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'project' => 'imce',
          'version' => '7.x-1.7',
        ),
        'transliteration' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/transliteration/transliteration.module',
          'basename' => 'transliteration.module',
          'name' => 'transliteration',
          'info' => 
          array (
            'name' => 'Transliteration',
            'description' => 'Converts non-latin text to US-ASCII and sanitizes file names.',
            'core' => '7.x',
            'configure' => 'admin/config/media/file-system',
            'version' => '7.x-3.1',
            'project' => 'transliteration',
            'datestamp' => '1338540713',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'transliteration',
          'version' => '7.x-3.1',
        ),
        'image_captcha' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/captcha/image_captcha/image_captcha.module',
          'basename' => 'image_captcha.module',
          'name' => 'image_captcha',
          'info' => 
          array (
            'name' => 'Image CAPTCHA',
            'description' => 'Provides an image based CAPTCHA.',
            'package' => 'Spam control',
            'dependencies' => 
            array (
              0 => 'captcha',
            ),
            'core' => '7.x',
            'configure' => 'admin/config/people/captcha/image_captcha',
            'files' => 
            array (
              0 => 'image_captcha.install',
              1 => 'image_captcha.module',
              2 => 'image_captcha.admin.inc',
              3 => 'image_captcha.user.inc',
            ),
            'version' => '7.x-1.0-beta2',
            'project' => 'captcha',
            'datestamp' => '1325504137',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'captcha',
          'version' => '7.x-1.0-beta2',
        ),
        'captcha' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/captcha/captcha.module',
          'basename' => 'captcha.module',
          'name' => 'captcha',
          'info' => 
          array (
            'name' => 'CAPTCHA',
            'description' => 'Base CAPTCHA module for adding challenges to arbitrary forms.',
            'package' => 'Spam control',
            'core' => '7.x',
            'configure' => 'admin/config/people/captcha',
            'files' => 
            array (
              0 => 'captcha.module',
              1 => 'captcha.inc',
              2 => 'captcha.admin.inc',
              3 => 'captcha.install',
              4 => 'captcha.test',
            ),
            'version' => '7.x-1.0-beta2',
            'project' => 'captcha',
            'datestamp' => '1325504137',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'project' => 'captcha',
          'version' => '7.x-1.0-beta2',
        ),
        'taxonomy_menu' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/taxonomy_menu/taxonomy_menu.module',
          'basename' => 'taxonomy_menu.module',
          'name' => 'taxonomy_menu',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'taxonomy',
              1 => 'menu',
            ),
            'description' => 'Adds links to taxonomy terms to a menu.',
            'name' => 'Taxonomy menu',
            'package' => 'Taxonomy menu',
            'files' => 
            array (
              0 => 'taxonomy_menu.batch.inc',
              1 => 'taxonomy_menu.database.inc',
              2 => 'taxonomy_menu.module',
              3 => 'taxonomy_menu.test',
              4 => 'taxonomy_menu.install',
            ),
            'version' => '7.x-1.4',
            'project' => 'taxonomy_menu',
            'datestamp' => '1346896425',
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'project' => 'taxonomy_menu',
          'version' => '7.x-1.4',
        ),
        'spambot' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/spambot/spambot.module',
          'basename' => 'spambot.module',
          'name' => 'spambot',
          'info' => 
          array (
            'name' => 'Spambot',
            'description' => 'Anti-spam module that uses data from www.stopforumspam.com to protect the user registration form against known spammers and spambots.',
            'package' => 'Spam control',
            'configure' => 'admin/config/system/spambot',
            'core' => '7.x',
            'version' => '7.x-1.3',
            'project' => 'spambot',
            'datestamp' => '1357872222',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7101',
          'project' => 'spambot',
          'version' => '7.x-1.3',
        ),
        'pathauto' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/pathauto/pathauto.module',
          'basename' => 'pathauto.module',
          'name' => 'pathauto',
          'info' => 
          array (
            'name' => 'Pathauto',
            'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
            'dependencies' => 
            array (
              0 => 'path',
              1 => 'token',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'pathauto.test',
            ),
            'configure' => 'admin/config/search/path/patterns',
            'recommends' => 
            array (
              0 => 'redirect',
            ),
            'version' => '7.x-1.2',
            'project' => 'pathauto',
            'datestamp' => '1344525185',
            'php' => '5.2.4',
          ),
          'schema_version' => '7005',
          'project' => 'pathauto',
          'version' => '7.x-1.2',
        ),
        'hosted_site' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/weborium/hosted_site/hosted_site.module',
          'basename' => 'hosted_site.module',
          'name' => 'hosted_site',
          'info' => 
          array (
            'name' => 'Hosted Site',
            'description' => 'Functions for integrating a hosted client site into Weborium aegir hosting',
            'package' => 'Weborium',
            'core' => '7.x',
            'version' => '7.x-1.3',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => '',
          'version' => '7.x-1.3',
        ),
        'page_manager' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/ctools/page_manager/page_manager.module',
          'basename' => 'page_manager.module',
          'name' => 'page_manager',
          'info' => 
          array (
            'name' => 'Page manager',
            'description' => 'Provides a UI and API to manage pages within the site.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'package' => 'Chaos tool suite',
            'version' => '7.x-1.2',
            'project' => 'ctools',
            'datestamp' => '1345319204',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.2',
        ),
        'ctools_custom_content' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/ctools/ctools_custom_content/ctools_custom_content.module',
          'basename' => 'ctools_custom_content.module',
          'name' => 'ctools_custom_content',
          'info' => 
          array (
            'name' => 'Custom content panes',
            'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'version' => '7.x-1.2',
            'project' => 'ctools',
            'datestamp' => '1345319204',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.2',
        ),
        'ctools_access_ruleset' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
          'basename' => 'ctools_access_ruleset.module',
          'name' => 'ctools_access_ruleset',
          'info' => 
          array (
            'name' => 'Custom rulesets',
            'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'version' => '7.x-1.2',
            'project' => 'ctools',
            'datestamp' => '1345319204',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.2',
        ),
        'stylizer' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/ctools/stylizer/stylizer.module',
          'basename' => 'stylizer.module',
          'name' => 'stylizer',
          'info' => 
          array (
            'name' => 'Stylizer',
            'description' => 'Create custom styles for applications such as Panels.',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'color',
            ),
            'version' => '7.x-1.2',
            'project' => 'ctools',
            'datestamp' => '1345319204',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.2',
        ),
        'views_content' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/ctools/views_content/views_content.module',
          'basename' => 'views_content.module',
          'name' => 'views_content',
          'info' => 
          array (
            'name' => 'Views content panes',
            'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'views',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
              1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
              2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
            ),
            'version' => '7.x-1.2',
            'project' => 'ctools',
            'datestamp' => '1345319204',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.2',
        ),
        'ctools_plugin_example' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/ctools/ctools_plugin_example/ctools_plugin_example.module',
          'basename' => 'ctools_plugin_example.module',
          'name' => 'ctools_plugin_example',
          'info' => 
          array (
            'name' => 'Chaos Tools (CTools) Plugin Example',
            'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'panels',
              2 => 'page_manager',
              3 => 'advanced_help',
            ),
            'core' => '7.x',
            'version' => '7.x-1.2',
            'project' => 'ctools',
            'datestamp' => '1345319204',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.2',
        ),
        'ctools_export_test' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/ctools/tests/ctools_export_test/ctools_export_test.module',
          'basename' => 'ctools_export_test.module',
          'name' => 'ctools_export_test',
          'info' => 
          array (
            'name' => 'CTools export test',
            'description' => 'CTools export test module',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'hidden' => true,
            'files' => 
            array (
              0 => 'ctools_export.test',
            ),
            'version' => '7.x-1.2',
            'project' => 'ctools',
            'datestamp' => '1345319204',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.2',
        ),
        'ctools_plugin_test' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/ctools/tests/ctools_plugin_test.module',
          'basename' => 'ctools_plugin_test.module',
          'name' => 'ctools_plugin_test',
          'info' => 
          array (
            'name' => 'Chaos tools plugins test',
            'description' => 'Provides hooks for testing ctools plugins.',
            'package' => 'Chaos tool suite',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'files' => 
            array (
              0 => 'ctools.plugins.test',
              1 => 'object_cache.test',
              2 => 'css.test',
              3 => 'context.test',
            ),
            'hidden' => true,
            'version' => '7.x-1.2',
            'project' => 'ctools',
            'datestamp' => '1345319204',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.2',
        ),
        'bulk_export' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/ctools/bulk_export/bulk_export.module',
          'basename' => 'bulk_export.module',
          'name' => 'bulk_export',
          'info' => 
          array (
            'name' => 'Bulk Export',
            'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'package' => 'Chaos tool suite',
            'version' => '7.x-1.2',
            'project' => 'ctools',
            'datestamp' => '1345319204',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.2',
        ),
        'ctools_ajax_sample' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
          'basename' => 'ctools_ajax_sample.module',
          'name' => 'ctools_ajax_sample',
          'info' => 
          array (
            'name' => 'Chaos Tools (CTools) AJAX Example',
            'description' => 'Shows how to use the power of Chaos AJAX.',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'core' => '7.x',
            'version' => '7.x-1.2',
            'project' => 'ctools',
            'datestamp' => '1345319204',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.2',
        ),
        'ctools' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/ctools/ctools.module',
          'basename' => 'ctools.module',
          'name' => 'ctools',
          'info' => 
          array (
            'name' => 'Chaos tools',
            'description' => 'A library of helpful tools by Merlin of Chaos.',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'files' => 
            array (
              0 => 'includes/context.inc',
              1 => 'includes/math-expr.inc',
              2 => 'includes/stylizer.inc',
            ),
            'version' => '7.x-1.2',
            'project' => 'ctools',
            'datestamp' => '1345319204',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '6007',
          'project' => 'ctools',
          'version' => '7.x-1.2',
        ),
        'wysiwyg_test' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/wysiwyg/tests/wysiwyg_test.module',
          'basename' => 'wysiwyg_test.module',
          'name' => 'wysiwyg_test',
          'info' => 
          array (
            'name' => 'Wysiwyg testing',
            'description' => 'Tests Wysiwyg module functionality. Do not enable.',
            'core' => '7.x',
            'package' => 'Testing',
            'hidden' => true,
            'dependencies' => 
            array (
              0 => 'wysiwyg',
            ),
            'files' => 
            array (
              0 => 'wysiwyg_test.module',
            ),
            'version' => '7.x-2.2',
            'project' => 'wysiwyg',
            'datestamp' => '1349213776',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'wysiwyg',
          'version' => '7.x-2.2',
        ),
        'wysiwyg' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/wysiwyg/wysiwyg.module',
          'basename' => 'wysiwyg.module',
          'name' => 'wysiwyg',
          'info' => 
          array (
            'name' => 'Wysiwyg',
            'description' => 'Allows to edit content with client-side editors.',
            'package' => 'User interface',
            'core' => '7.x',
            'configure' => 'admin/config/content/wysiwyg',
            'files' => 
            array (
              0 => 'wysiwyg.module',
              1 => 'tests/wysiwyg.test',
            ),
            'version' => '7.x-2.2',
            'project' => 'wysiwyg',
            'datestamp' => '1349213776',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7200',
          'project' => 'wysiwyg',
          'version' => '7.x-2.2',
        ),
        'smtp' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/smtp/smtp.module',
          'basename' => 'smtp.module',
          'name' => 'smtp',
          'info' => 
          array (
            'name' => 'SMTP Authentication Support',
            'description' => 'Allow for site emails to be sent through an SMTP server of your choice.',
            'core' => '7.x',
            'package' => 'Mail',
            'configure' => 'admin/config/system/smtp',
            'files' => 
            array (
              0 => 'smtp.module',
              1 => 'smtp.admin.inc',
              2 => 'smtp.mail.inc',
              3 => 'smtp.phpmailer.inc',
              4 => 'smtp.transport.inc',
            ),
            'version' => '7.x-1.0-beta2',
            'project' => 'smtp',
            'datestamp' => '1348254500',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'project' => 'smtp',
          'version' => '7.x-1.0-beta2',
        ),
        'widget_services' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/service_links/services/widget_services.module',
          'basename' => 'widget_services.module',
          'name' => 'widget_services',
          'info' => 
          array (
            'name' => 'Widget Services',
            'description' => 'Digg Smart Button, Facebook Like, Facebook Share, Google Plus One, Linkedin Share Button, Pinterest, Twitter',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.1+12-dev',
            'files' => 
            array (
              0 => 'widget_services.module',
            ),
            'project' => 'service_links',
            'datestamp' => '1332419832',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'service_links',
          'version' => '7.x-2.1+12-dev',
        ),
        'spanish_services' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/service_links/services/spanish_services.module',
          'basename' => 'spanish_services.module',
          'name' => 'spanish_services',
          'info' => 
          array (
            'name' => 'Spanish Services',
            'description' => 'Provide the Spanish Services: Barrapunto, Fresqui, Latafanera, Meneame, Tuenti',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.1+12-dev',
            'files' => 
            array (
              0 => 'spanish_services.module',
            ),
            'project' => 'service_links',
            'datestamp' => '1332419832',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'service_links',
          'version' => '7.x-2.1+12-dev',
        ),
        'favorite_services' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/service_links/services/favorite_services.module',
          'basename' => 'favorite_services.module',
          'name' => 'favorite_services',
          'info' => 
          array (
            'name' => 'Favorite Services',
            'description' => 'Add the page in your favorite, work with Chrome, Firefox, IE, Opera',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.1+12-dev',
            'files' => 
            array (
              0 => 'favorite_services.module',
            ),
            'project' => 'service_links',
            'datestamp' => '1332419832',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'service_links',
          'version' => '7.x-2.1+12-dev',
        ),
        'swedish_services' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/service_links/services/swedish_services.module',
          'basename' => 'swedish_services.module',
          'name' => 'swedish_services',
          'info' => 
          array (
            'name' => 'Swedish Services',
            'description' => 'Provide the Swedish Services: Bloggy, Pusha',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.1+12-dev',
            'files' => 
            array (
              0 => 'swedish_services.module',
            ),
            'project' => 'service_links',
            'datestamp' => '1332419832',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'service_links',
          'version' => '7.x-2.1+12-dev',
        ),
        'dutch_services' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/service_links/services/dutch_services.module',
          'basename' => 'dutch_services.module',
          'name' => 'dutch_services',
          'info' => 
          array (
            'name' => 'Dutch Services',
            'description' => 'Provide the Dutch Services: eKudos, Hyves, Nujij',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.1+12-dev',
            'files' => 
            array (
              0 => 'dutch_services.module',
            ),
            'project' => 'service_links',
            'datestamp' => '1332419832',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'service_links',
          'version' => '7.x-2.1+12-dev',
        ),
        'russian_services' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/service_links/services/russian_services.module',
          'basename' => 'russian_services.module',
          'name' => 'russian_services',
          'info' => 
          array (
            'name' => 'Russian Services',
            'description' => 'Provide the Russian Services (12+3): 100zakladok, Ruspace, Mister Wong, Memori, Moemesto, MyScoop, Vaau, Yandex, LinkStore, Bobrdobr, Lopas, Communizm, Newsland, News2, Smi2',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.1+12-dev',
            'files' => 
            array (
              0 => 'russian_services.module',
            ),
            'project' => 'service_links',
            'datestamp' => '1332419832',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'service_links',
          'version' => '7.x-2.1+12-dev',
        ),
        'forward_services' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/service_links/services/forward_services.module',
          'basename' => 'forward_services.module',
          'name' => 'forward_services',
          'info' => 
          array (
            'name' => 'Forward Services',
            'description' => 'Add the support for Forward module which send the link through email.',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
              1 => 'forward',
            ),
            'version' => '7.x-2.1+12-dev',
            'files' => 
            array (
              0 => 'forward_services.module',
            ),
            'project' => 'service_links',
            'datestamp' => '1332419832',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'service_links',
          'version' => '7.x-2.1+12-dev',
        ),
        'print_services' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/service_links/services/print_services.module',
          'basename' => 'print_services.module',
          'name' => 'print_services',
          'info' => 
          array (
            'name' => 'Print Services',
            'description' => 'Add the support for Print module which render the page as PDF or printable HTML',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
              1 => 'print',
            ),
            'version' => '7.x-2.1+12-dev',
            'files' => 
            array (
              0 => 'print_services.module',
            ),
            'project' => 'service_links',
            'datestamp' => '1332419832',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'service_links',
          'version' => '7.x-2.1+12-dev',
        ),
        'basque_services' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/service_links/services/basque_services.module',
          'basename' => 'basque_services.module',
          'name' => 'basque_services',
          'info' => 
          array (
            'name' => 'Basque Services',
            'description' => 'Provide the Basque Services: Zabaldu, Bildu, Aupatu',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.1+12-dev',
            'files' => 
            array (
              0 => 'basque_services.module',
            ),
            'project' => 'service_links',
            'datestamp' => '1332419832',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'service_links',
          'version' => '7.x-2.1+12-dev',
        ),
        'polish_services' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/service_links/services/polish_services.module',
          'basename' => 'polish_services.module',
          'name' => 'polish_services',
          'info' => 
          array (
            'name' => 'Polish Services',
            'description' => 'Provide the Polish Services: Blip, Wykop, Sledzik',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.1+12-dev',
            'project' => 'service_links',
            'datestamp' => '1332419832',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'service_links',
          'version' => '7.x-2.1+12-dev',
        ),
        'italian_services' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/service_links/services/italian_services.module',
          'basename' => 'italian_services.module',
          'name' => 'italian_services',
          'info' => 
          array (
            'name' => 'Italian Services',
            'description' => 'Provide the Italian Services: Diggita, Meemi, OkNotizie, Segnalo.com, TechNotizie, Wikio, ZicZac',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.1+12-dev',
            'files' => 
            array (
              0 => 'italian_services.module',
            ),
            'project' => 'service_links',
            'datestamp' => '1332419832',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'service_links',
          'version' => '7.x-2.1+12-dev',
        ),
        'hungarian_services' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/service_links/services/hungarian_services.module',
          'basename' => 'hungarian_services.module',
          'name' => 'hungarian_services',
          'info' => 
          array (
            'name' => 'Hungarian Services',
            'description' => 'Provide the Hungarian Service: iWiW',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.1+12-dev',
            'files' => 
            array (
              0 => 'hungarian_services.module',
            ),
            'project' => 'service_links',
            'datestamp' => '1332419832',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'service_links',
          'version' => '7.x-2.1+12-dev',
        ),
        'farsi_services' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/service_links/services/farsi_services.module',
          'basename' => 'farsi_services.module',
          'name' => 'farsi_services',
          'info' => 
          array (
            'name' => 'Farsi Services',
            'description' => 'Provide the Farsi services: Balatarin, Donbaleh, Friendfa, Viwio.',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.1+12-dev',
            'files' => 
            array (
              0 => 'farsi_services.module',
            ),
            'project' => 'service_links',
            'datestamp' => '1332419832',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'service_links',
          'version' => '7.x-2.1+12-dev',
        ),
        'general_services' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/service_links/services/general_services.module',
          'basename' => 'general_services.module',
          'name' => 'general_services',
          'info' => 
          array (
            'name' => 'General Services',
            'description' => 'Blinklist, Box, del.icio.us, Digg, Diigo, Facebook, Furl, Google Bookmark, Icerocket, Identi.ca, Linkedin, Mister Wong, Mixx, MySpace, Newsvine, Newskicks, Phing this, Reddit, StumbleUpon, Technorati, Twitter, Yahoo',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.1+12-dev',
            'files' => 
            array (
              0 => 'general_services.module',
            ),
            'project' => 'service_links',
            'datestamp' => '1332419832',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'service_links',
          'version' => '7.x-2.1+12-dev',
        ),
        'german_services' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/service_links/services/german_services.module',
          'basename' => 'german_services.module',
          'name' => 'german_services',
          'info' => 
          array (
            'name' => 'German Services',
            'description' => 'Provide the German Services: Alltagz, Colivia, Icio, InfoPirat, Linkarena, MeinVZ, Mister Wong, Netselektor, Oneview, Readster, seekXL, SeoIGG, Weblinkr, Webnews, Xing, Yigg',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.1+12-dev',
            'files' => 
            array (
              0 => 'german_services.module',
            ),
            'project' => 'service_links',
            'datestamp' => '1332419832',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'service_links',
          'version' => '7.x-2.1+12-dev',
        ),
        'service_links_share' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/service_links/plugins/service_links_share.module',
          'basename' => 'service_links_share.module',
          'name' => 'service_links_share',
          'info' => 
          array (
            'name' => 'Service Links Share',
            'description' => 'Provide the integration between Service Links and Share module',
            'core' => '7.x',
            'package' => 'Service Links',
            'dependencies' => 
            array (
              0 => 'service_links',
              1 => 'share',
              2 => 'share_widget',
            ),
            'version' => '7.x-2.1+12-dev',
            'files' => 
            array (
              0 => 'service_links_share.module',
            ),
            'project' => 'service_links',
            'datestamp' => '1332419832',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'service_links',
          'version' => '7.x-2.1+12-dev',
        ),
        'service_links_sprites' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/service_links/plugins/service_links_sprites.module',
          'basename' => 'service_links_sprites.module',
          'name' => 'service_links_sprites',
          'info' => 
          array (
            'name' => 'Service Links Sprites',
            'description' => 'Add the ability to handle sprites with Service Links',
            'core' => '7.x',
            'package' => 'Service Links',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.1+12-dev',
            'files' => 
            array (
              0 => 'service_links_sprites.module',
            ),
            'configure' => 'admin/config/services/service-links',
            'project' => 'service_links',
            'datestamp' => '1332419832',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'service_links',
          'version' => '7.x-2.1+12-dev',
        ),
        'service_links_displays' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/service_links/plugins/service_links_displays.module',
          'basename' => 'service_links_displays.module',
          'name' => 'service_links_displays',
          'info' => 
          array (
            'name' => 'Service Links Displays',
            'description' => 'Provide the integration between Service Links and Node Displays (Display Suite)',
            'core' => '7.x',
            'package' => 'Service Links',
            'dependencies' => 
            array (
              0 => 'service_links',
              1 => 'ds',
            ),
            'version' => '7.x-2.1+12-dev',
            'files' => 
            array (
              0 => 'service_links_displays.module',
            ),
            'project' => 'service_links',
            'datestamp' => '1332419832',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'service_links',
          'version' => '7.x-2.1+12-dev',
        ),
        'service_links' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/service_links/service_links.module',
          'basename' => 'service_links.module',
          'name' => 'service_links',
          'info' => 
          array (
            'name' => 'Service links',
            'description' => 'Module engine for add various service links about sharing networks to nodes.',
            'core' => '7.x',
            'version' => '7.x-2.1+12-dev',
            'package' => 'Service Links',
            'files' => 
            array (
              0 => 'service_links.module',
              1 => 'service_links.admin.inc',
              2 => 'service_links.theme.inc',
              3 => 'service_links.install',
              4 => 'service_links.views.inc',
              5 => 'service_links_handler_field_service_links.inc',
            ),
            'configure' => 'admin/config/services/service-links',
            'project' => 'service_links',
            'datestamp' => '1332419832',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'service_links',
          'version' => '7.x-2.1+12-dev',
        ),
        'googleanalytics' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/google_analytics/googleanalytics.module',
          'basename' => 'googleanalytics.module',
          'name' => 'googleanalytics',
          'info' => 
          array (
            'name' => 'Google Analytics',
            'description' => 'Allows your site to be tracked by Google Analytics by adding a Javascript tracking code to every page.',
            'core' => '7.x',
            'package' => 'Statistics',
            'configure' => 'admin/config/system/googleanalytics',
            'files' => 
            array (
              0 => 'googleanalytics.test',
            ),
            'version' => '7.x-1.3',
            'project' => 'google_analytics',
            'datestamp' => '1351810914',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7007',
          'project' => 'google_analytics',
          'version' => '7.x-1.3',
        ),
        'token_test' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/token/tests/token_test.module',
          'basename' => 'token_test.module',
          'name' => 'token_test',
          'info' => 
          array (
            'name' => 'Token Test',
            'description' => 'Testing module for token functionality.',
            'package' => 'Testing',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'token_test.module',
            ),
            'hidden' => true,
            'version' => '7.x-1.4',
            'project' => 'token',
            'datestamp' => '1348497279',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'token',
          'version' => '7.x-1.4',
        ),
        'token' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/token/token.module',
          'basename' => 'token.module',
          'name' => 'token',
          'info' => 
          array (
            'name' => 'Token',
            'description' => 'Provides a user interface for the Token API and some missing core tokens.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'token.module',
              1 => 'token.install',
              2 => 'token.tokens.inc',
              3 => 'token.pages.inc',
              4 => 'token.test',
            ),
            'version' => '7.x-1.4',
            'project' => 'token',
            'datestamp' => '1348497279',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'project' => 'token',
          'version' => '7.x-1.4',
        ),
        'xmlsitemap_modal' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/xmlsitemap/xmlsitemap_modal/xmlsitemap_modal.module',
          'basename' => 'xmlsitemap_modal.module',
          'name' => 'xmlsitemap_modal',
          'info' => 
          array (
            'name' => 'XML sitemap modal UI',
            'description' => 'Provides an AJAX modal UI for common XML sitemap tasks.',
            'package' => 'XML sitemap',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'xmlsitemap',
              1 => 'ctools',
            ),
            'files' => 
            array (
              0 => 'xmlsitemap_modal.module',
            ),
            'hidden' => true,
            'version' => '7.x-2.0-rc2',
            'project' => 'xmlsitemap',
            'datestamp' => '1354926579',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'xmlsitemap',
          'version' => '7.x-2.0-rc2',
        ),
        'xmlsitemap_engines_test' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/xmlsitemap/xmlsitemap_engines/tests/xmlsitemap_engines_test.module',
          'basename' => 'xmlsitemap_engines_test.module',
          'name' => 'xmlsitemap_engines_test',
          'info' => 
          array (
            'name' => 'XML sitemap engines test',
            'description' => 'Support module for XML sitemap engines testing.',
            'package' => 'Testing',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'xmlsitemap_engines_test.module',
            ),
            'version' => '7.x-2.0-rc2',
            'hidden' => true,
            'project' => 'xmlsitemap',
            'datestamp' => '1354926579',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'xmlsitemap',
          'version' => '7.x-2.0-rc2',
        ),
        'xmlsitemap_engines' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/xmlsitemap/xmlsitemap_engines/xmlsitemap_engines.module',
          'basename' => 'xmlsitemap_engines.module',
          'name' => 'xmlsitemap_engines',
          'info' => 
          array (
            'name' => 'XML sitemap engines',
            'description' => 'Submit the sitemap to search engines.',
            'package' => 'XML sitemap',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'xmlsitemap',
            ),
            'files' => 
            array (
              0 => 'xmlsitemap_engines.module',
              1 => 'xmlsitemap_engines.admin.inc',
              2 => 'xmlsitemap_engines.install',
              3 => 'tests/xmlsitemap_engines.test',
            ),
            'recommends' => 
            array (
              0 => 'site_verify',
            ),
            'configure' => 'admin/config/search/xmlsitemap/engines',
            'version' => '7.x-2.0-rc2',
            'project' => 'xmlsitemap',
            'datestamp' => '1354926579',
            'php' => '5.2.4',
          ),
          'schema_version' => '6202',
          'project' => 'xmlsitemap',
          'version' => '7.x-2.0-rc2',
        ),
        'xmlsitemap_user' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/xmlsitemap/xmlsitemap_user/xmlsitemap_user.module',
          'basename' => 'xmlsitemap_user.module',
          'name' => 'xmlsitemap_user',
          'info' => 
          array (
            'name' => 'XML sitemap user',
            'description' => 'Adds user profile links to the sitemap.',
            'package' => 'XML sitemap',
            'dependencies' => 
            array (
              0 => 'xmlsitemap',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'xmlsitemap_user.module',
              1 => 'xmlsitemap_user.install',
              2 => 'xmlsitemap_user.test',
            ),
            'version' => '7.x-2.0-rc2',
            'project' => 'xmlsitemap',
            'datestamp' => '1354926579',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'xmlsitemap',
          'version' => '7.x-2.0-rc2',
        ),
        'xmlsitemap_custom' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/xmlsitemap/xmlsitemap_custom/xmlsitemap_custom.module',
          'basename' => 'xmlsitemap_custom.module',
          'name' => 'xmlsitemap_custom',
          'info' => 
          array (
            'name' => 'XML sitemap custom',
            'description' => 'Adds user configurable links to the sitemap.',
            'package' => 'XML sitemap',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'xmlsitemap',
            ),
            'files' => 
            array (
              0 => 'xmlsitemap_custom.module',
              1 => 'xmlsitemap_custom.admin.inc',
              2 => 'xmlsitemap_custom.install',
              3 => 'xmlsitemap_custom.test',
            ),
            'configure' => 'admin/config/search/xmlsitemap/custom',
            'version' => '7.x-2.0-rc2',
            'project' => 'xmlsitemap',
            'datestamp' => '1354926579',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'xmlsitemap',
          'version' => '7.x-2.0-rc2',
        ),
        'xmlsitemap_node' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/xmlsitemap/xmlsitemap_node/xmlsitemap_node.module',
          'basename' => 'xmlsitemap_node.module',
          'name' => 'xmlsitemap_node',
          'info' => 
          array (
            'name' => 'XML sitemap node',
            'description' => 'Adds content links to the sitemap.',
            'package' => 'XML sitemap',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'xmlsitemap',
            ),
            'files' => 
            array (
              0 => 'xmlsitemap_node.module',
              1 => 'xmlsitemap_node.install',
              2 => 'xmlsitemap_node.test',
            ),
            'version' => '7.x-2.0-rc2',
            'project' => 'xmlsitemap',
            'datestamp' => '1354926579',
            'php' => '5.2.4',
          ),
          'schema_version' => '6201',
          'project' => 'xmlsitemap',
          'version' => '7.x-2.0-rc2',
        ),
        'xmlsitemap_menu' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/xmlsitemap/xmlsitemap_menu/xmlsitemap_menu.module',
          'basename' => 'xmlsitemap_menu.module',
          'name' => 'xmlsitemap_menu',
          'info' => 
          array (
            'name' => 'XML sitemap menu',
            'description' => 'Adds menu item links to the sitemap.',
            'package' => 'XML sitemap',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'xmlsitemap',
              1 => 'menu',
            ),
            'files' => 
            array (
              0 => 'xmlsitemap_menu.module',
              1 => 'xmlsitemap_menu.install',
              2 => 'xmlsitemap_menu.test',
            ),
            'version' => '7.x-2.0-rc2',
            'project' => 'xmlsitemap',
            'datestamp' => '1354926579',
            'php' => '5.2.4',
          ),
          'schema_version' => '6201',
          'project' => 'xmlsitemap',
          'version' => '7.x-2.0-rc2',
        ),
        'xmlsitemap_i18n' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/xmlsitemap/xmlsitemap_i18n/xmlsitemap_i18n.module',
          'basename' => 'xmlsitemap_i18n.module',
          'name' => 'xmlsitemap_i18n',
          'info' => 
          array (
            'name' => 'XML sitemap internationalization',
            'description' => 'Enables multilingual XML sitemaps.',
            'package' => 'XML sitemap',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'xmlsitemap',
              1 => 'i18n',
            ),
            'files' => 
            array (
              0 => 'xmlsitemap_i18n.module',
              1 => 'xmlsitemap_i18n.test',
            ),
            'version' => '7.x-2.0-rc2',
            'project' => 'xmlsitemap',
            'datestamp' => '1354926579',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'xmlsitemap',
          'version' => '7.x-2.0-rc2',
        ),
        'xmlsitemap_taxonomy' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/xmlsitemap/xmlsitemap_taxonomy/xmlsitemap_taxonomy.module',
          'basename' => 'xmlsitemap_taxonomy.module',
          'name' => 'xmlsitemap_taxonomy',
          'info' => 
          array (
            'name' => 'XML sitemap taxonomy',
            'description' => 'Add taxonomy term links to the sitemap.',
            'package' => 'XML sitemap',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'xmlsitemap',
              1 => 'taxonomy',
            ),
            'files' => 
            array (
              0 => 'xmlsitemap_taxonomy.module',
              1 => 'xmlsitemap_taxonomy.install',
              2 => 'xmlsitemap_taxonomy.test',
            ),
            'version' => '7.x-2.0-rc2',
            'project' => 'xmlsitemap',
            'datestamp' => '1354926579',
            'php' => '5.2.4',
          ),
          'schema_version' => '7200',
          'project' => 'xmlsitemap',
          'version' => '7.x-2.0-rc2',
        ),
        'xmlsitemap' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/xmlsitemap/xmlsitemap.module',
          'basename' => 'xmlsitemap.module',
          'name' => 'xmlsitemap',
          'info' => 
          array (
            'name' => 'XML sitemap',
            'description' => 'Creates an XML sitemap conforming to the <a href="http://sitemaps.org/">sitemaps.org protocol</a>.',
            'package' => 'XML sitemap',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'xmlsitemap.module',
              1 => 'xmlsitemap.inc',
              2 => 'xmlsitemap.admin.inc',
              3 => 'xmlsitemap.drush.inc',
              4 => 'xmlsitemap.generate.inc',
              5 => 'xmlsitemap.xmlsitemap.inc',
              6 => 'xmlsitemap.pages.inc',
              7 => 'xmlsitemap.install',
              8 => 'xmlsitemap.test',
            ),
            'recommends' => 
            array (
              0 => 'robotstxt',
            ),
            'configure' => 'admin/config/search/xmlsitemap',
            'version' => '7.x-2.0-rc2',
            'project' => 'xmlsitemap',
            'datestamp' => '1354926579',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7203',
          'project' => 'xmlsitemap',
          'version' => '7.x-2.0-rc2',
        ),
        'globalredirect' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/globalredirect/globalredirect.module',
          'basename' => 'globalredirect.module',
          'name' => 'globalredirect',
          'info' => 
          array (
            'name' => 'Global Redirect',
            'description' => 'Searches for an alias of the current URL and 301 redirects if found. Stops duplicate content arising when path module is enabled.',
            'package' => 'Path management',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'globalredirect.test',
            ),
            'configure' => 'admin/config/system/globalredirect',
            'version' => '7.x-1.5',
            'project' => 'globalredirect',
            'datestamp' => '1339748779',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '6101',
          'project' => 'globalredirect',
          'version' => '7.x-1.5',
        ),
        'entity_feature' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/entity/tests/entity_feature.module',
          'basename' => 'entity_feature.module',
          'name' => 'entity_feature',
          'info' => 
          array (
            'name' => 'Entity feature module',
            'description' => 'Provides some entities in code.',
            'version' => '7.x-1.0',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'entity_feature.module',
            ),
            'dependencies' => 
            array (
              0 => 'entity_test',
            ),
            'hidden' => true,
            'project' => 'entity',
            'datestamp' => '1356471145',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'entity',
          'version' => '7.x-1.0',
        ),
        'entity_test' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/entity/tests/entity_test.module',
          'basename' => 'entity_test.module',
          'name' => 'entity_test',
          'info' => 
          array (
            'name' => 'Entity CRUD test module',
            'description' => 'Provides entity types based upon the CRUD API.',
            'version' => '7.x-1.0',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'entity_test.module',
              1 => 'entity_test.install',
            ),
            'dependencies' => 
            array (
              0 => 'entity',
            ),
            'hidden' => true,
            'project' => 'entity',
            'datestamp' => '1356471145',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'entity',
          'version' => '7.x-1.0',
        ),
        'entity_test_i18n' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/entity/tests/entity_test_i18n.module',
          'basename' => 'entity_test_i18n.module',
          'name' => 'entity_test_i18n',
          'info' => 
          array (
            'name' => 'Entity-test type translation',
            'description' => 'Allows translating entity-test types.',
            'dependencies' => 
            array (
              0 => 'entity_test',
              1 => 'i18n_string',
            ),
            'package' => 'Multilingual - Internationalization',
            'core' => '7.x',
            'hidden' => true,
            'version' => '7.x-1.0',
            'project' => 'entity',
            'datestamp' => '1356471145',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'entity',
          'version' => '7.x-1.0',
        ),
        'entity' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/entity/entity.module',
          'basename' => 'entity.module',
          'name' => 'entity',
          'info' => 
          array (
            'name' => 'Entity API',
            'description' => 'Enables modules to work with any entity type and to provide entities.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'entity.features.inc',
              1 => 'entity.i18n.inc',
              2 => 'entity.info.inc',
              3 => 'entity.rules.inc',
              4 => 'entity.test',
              5 => 'includes/entity.inc',
              6 => 'includes/entity.controller.inc',
              7 => 'includes/entity.ui.inc',
              8 => 'includes/entity.wrapper.inc',
              9 => 'views/entity.views.inc',
              10 => 'views/handlers/entity_views_field_handler_helper.inc',
              11 => 'views/handlers/entity_views_handler_area_entity.inc',
              12 => 'views/handlers/entity_views_handler_field_boolean.inc',
              13 => 'views/handlers/entity_views_handler_field_date.inc',
              14 => 'views/handlers/entity_views_handler_field_duration.inc',
              15 => 'views/handlers/entity_views_handler_field_entity.inc',
              16 => 'views/handlers/entity_views_handler_field_field.inc',
              17 => 'views/handlers/entity_views_handler_field_numeric.inc',
              18 => 'views/handlers/entity_views_handler_field_options.inc',
              19 => 'views/handlers/entity_views_handler_field_text.inc',
              20 => 'views/handlers/entity_views_handler_field_uri.inc',
              21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
              22 => 'views/handlers/entity_views_handler_relationship.inc',
              23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
            ),
            'version' => '7.x-1.0',
            'project' => 'entity',
            'datestamp' => '1356471145',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7002',
          'project' => 'entity',
          'version' => '7.x-1.0',
        ),
        'entity_token' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/or2u_blog/modules/entity/entity_token.module',
          'basename' => 'entity_token.module',
          'name' => 'entity_token',
          'info' => 
          array (
            'name' => 'Entity tokens',
            'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'entity_token.tokens.inc',
              1 => 'entity_token.module',
            ),
            'dependencies' => 
            array (
              0 => 'entity',
            ),
            'version' => '7.x-1.0',
            'project' => 'entity',
            'datestamp' => '1356471145',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'entity',
          'version' => '7.x-1.0',
        ),
      ),
      'themes' => 
      array (
      ),
    ),
    'testing' => 
    array (
      'modules' => 
      array (
        'drupal_system_listing_compatible_test' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/testing/modules/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
          'basename' => 'drupal_system_listing_compatible_test.module',
          'name' => 'drupal_system_listing_compatible_test',
          'info' => 
          array (
            'name' => 'Drupal system listing compatible test',
            'description' => 'Support module for testing the drupal_system_listing function.',
            'package' => 'Testing',
            'version' => '7.19',
            'core' => '7.x',
            'hidden' => true,
            'files' => 
            array (
              0 => 'drupal_system_listing_compatible_test.test',
            ),
            'project' => 'drupal',
            'datestamp' => '1358374870',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'drupal',
          'version' => '7.19',
        ),
        'drupal_system_listing_incompatible_test' => 
        array (
          'filename' => '/var/www/platforms/or2ublog-7.19-2.0-b4/profiles/testing/modules/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
          'basename' => 'drupal_system_listing_incompatible_test.module',
          'name' => 'drupal_system_listing_incompatible_test',
          'info' => 
          array (
            'name' => 'Drupal system listing incompatible test',
            'description' => 'Support module for testing the drupal_system_listing function.',
            'package' => 'Testing',
            'version' => '7.19',
            'core' => '6.x',
            'hidden' => true,
            'project' => 'drupal',
            'datestamp' => '1358374870',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'drupal',
          'version' => '7.19',
        ),
      ),
      'themes' => 
      array (
      ),
    ),
  ),
);