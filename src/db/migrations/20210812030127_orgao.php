<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Orgao extends AbstractMigration
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
        $orgao = $this->table('tb_orgao',array('id' => false, 'primary_key' => array('id_orgao')));
        $orgao->addColumn('id_orgao', 'integer', ['identity' =>true]);
        $orgao->addColumn('nome_orgao', 'string', ['limit'=>200,'null' => false]);
        $orgao->addColumn('created_at', 'datetime',['default' => "CURRENT_TIMESTAMP"]);
        $orgao->addColumn('updated_at', 'datetime',['default' => "CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"]);
        $orgao->create();
    }
}
