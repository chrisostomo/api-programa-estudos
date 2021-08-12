<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Assunto extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $assunto = $this->table('tb_assunto',array('id' => false, 'primary_key' => array('id_assunto')));
        $assunto->addColumn('id_assunto', 'integer', ['identity' =>true]);
        $assunto->addColumn('id_assunto_pai', 'integer',['null'=> true]);
        $assunto->addColumn('assunto', 'string', ['limit'=>100,'null' => false]);
        $assunto->addColumn('created_at', 'datetime',['default' => "CURRENT_TIMESTAMP"]);
        $assunto->addColumn('updated_at', 'datetime',['default' => "CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"]);
        $assunto->addForeignKey('id_assunto_pai', 'tb_assunto', 'id_assunto', array('delete'=> 'NO_ACTION', 'update'=> 'NO_ACTION'));
        $assunto->create();
    }
}
