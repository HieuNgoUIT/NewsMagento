<?php
namespace Rsgitech\News\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    
  public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
  {
      
    $newsTableName = $setup->getTable('rsgitech_news');

    if($setup->getConnection()->isTableExists($newsTableName) != true) {

      $newsTable = $setup->getConnection()
          ->newTable($newsTableName)
          ->addColumn(
              'news_id',
              \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
              null,
              ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
              'News ID'
          )
          ->addColumn(
              'title',
              \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
              255,
              ['nullable' => false, 'default' => ''],
                'Title'
          )
          ->addColumn(
            'subtitle',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            ['nullable' => false, 'default' => ''],
              'Sub Title'
        )
        ->addColumn(
            'image',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [ 'default' => ''],
              'Image'
        )
          ->addColumn(
              'description',
              \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
              null,
              ['nullable' => false, 'default' => ''],
                'Description'
          )
          ->addColumn(
              'status',
              \Magento\Framework\DB\Ddl\Table::TYPE_BOOLEAN,
              null,
              ['nullable' => false, 'unsigned' => true],
                'Status'
          )
          ->addColumn(
              'created_at',
              \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
              null,
              ['nullable' => false],
                'Created At'
          )
          ->addColumn(
              'updated_at',
              \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
              null,
              ['nullable' => false],
                'Updated At'
          )
          ->addIndex(
            $setup->getIdxName('rsgitech_news', ['title']),
            ['title']
          )
          ->setComment("News Table");

      $setup->getConnection()->createTable($newsTable);
    }

    $newsTableName = $setup->getTable('rsgitech_news_meta');

    if($setup->getConnection()->isTableExists($newsTableName) != true) {

      $newsTable = $setup->getConnection()
          ->newTable($newsTableName)
          ->addColumn(
              'meta_id',
              \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
              null,
              ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
              'Meta ID'
          )
          ->addColumn(
              'news_id',
              \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
              255,
              ['nullable' => false, 'default' => ''],
                'News id'
          )
          ->addColumn(
            'key',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            ['nullable' => false, 'default' => ''],
              'Key'
        )
        ->addColumn(
            'value',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [ 'nullable' => false, 'default' => ''],
              'Value'
        );
      $setup->getConnection()->createTable($newsTable);
    }

    $newsTableName = $setup->getTable('comments');

    if($setup->getConnection()->isTableExists($newsTableName) != true) {

      $newsTable = $setup->getConnection()
          ->newTable($newsTableName)
          ->addColumn(
              'comment_id',
              \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
              null,
              ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
              'Comment ID'
          )
          ->addColumn(
              'comment_news_id',
              \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
              255,
              ['nullable' => false],
                'Comment News id'
          )
          ->addColumn(
            'name',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            ['nullable' => false, 'default' => ''],
              'Name'
        )
        ->addColumn(
            'email',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [ 'nullable' => false, 'default' => ''],
              'Email'
        )
        ->addColumn(
            'description',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            ['nullable' => false, 'default' => ''],
              'Description'
        )
        ->addColumn(
            'created_at',
            \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
            null,
            ['nullable' => false],
              'Created At'
        )
        ->addColumn(
            'updated_at',
            \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
            null,
            ['nullable' => false],
              'Updated At'
        );
      $setup->getConnection()->createTable($newsTable);
    }

    $newsTableName = $setup->getTable('comments_meta');

    if($setup->getConnection()->isTableExists($newsTableName) != true) {

      $newsTable = $setup->getConnection()
          ->newTable($newsTableName)
          ->addColumn(
              'meta_id',
              \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
              null,
              ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
              'Meta ID'
          )
          ->addColumn(
              'comment_id',
              \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
              255,
              ['nullable' => false, 'default' => ''],
                'comment id'
          )
          ->addColumn(
            'key',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            ['nullable' => false, 'default' => ''],
              'Key'
        )
        ->addColumn(
            'value',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [ 'nullable' => false, 'default' => ''],
              'Value'
        );
      $setup->getConnection()->createTable($newsTable);
    }
  }
}
?>
