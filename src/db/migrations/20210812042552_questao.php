<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Questao extends AbstractMigration
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
        $questao = $this->table('tb_questao',array('id' => false, 'primary_key' => array('id_questao')));
        $questao->addColumn('id_questao', 'integer', ['identity' =>true, 'signed' => false]);
        $questao->addColumn('id_assunto', 'integer',['null' => false]);
        $questao->addColumn('id_orgao', 'integer',['null' => false]);
        $questao->addColumn('id_banca', 'integer',['null' => false]);
        $questao->addColumn('questao', 'text',['null' => false]);
        $questao->addColumn('created_at', 'datetime',['default' => "CURRENT_TIMESTAMP"]);
        $questao->addColumn('updated_at', 'datetime',['default' => "CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"]);
        $questao->addForeignKey('id_assunto', 'tb_assunto', 'id_assunto', array('delete'=> 'NO_ACTION', 'update'=> 'NO_ACTION'));
        $questao->addForeignKey('id_orgao', 'tb_orgao', 'id_orgao', array('delete'=> 'NO_ACTION', 'update'=> 'NO_ACTION'));
        $questao->addForeignKey('id_banca', 'tb_banca', 'id_banca', array('delete'=> 'NO_ACTION', 'update'=> 'NO_ACTION'));
        $questao->create();
    }
}
