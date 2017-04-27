<?php

use yii\db\Migration;

class m160325_215532_i18n_uk_menu_eav extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'eav', 'label' => 'Додаткові Поля', 'language' => 'uk']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'eav-eav', 'label' => 'Поля', 'language' => 'uk']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'eav-attribute', 'label' => 'Атрибути', 'language' => 'uk']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'eav-option', 'label' => 'Опції', 'language' => 'uk']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'eav-model', 'label' => 'Моделі', 'language' => 'uk']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'eav-type', 'label' => 'Типи Даних', 'language' => 'uk']);
    }

}