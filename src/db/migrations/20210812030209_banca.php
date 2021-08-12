<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Banca extends AbstractMigration
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
        $banca = $this->table('tb_banca',array('id' => false, 'primary_key' => array('id_banca')));
        $banca->addColumn('id_banca', 'integer', ['identity' =>true]);
        $banca->addColumn('nome_banca', 'string', ['limit'=>200,'null' => false]);
        $banca->addColumn('created_at', 'datetime',['default' => "CURRENT_TIMESTAMP"]);
        $banca->addColumn('updated_at', 'datetime',['default' => "CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"]);
        $banca->create();
    }
}
