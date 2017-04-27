<?php

use yeesoft\db\SourceMessagesMigration;

class m160325_144849_i18n_yee_eav_source extends SourceMessagesMigration
{

    public function getCategory()
    {
        return 'yee/eav';
    }

    public function getMessages()
    {
        return [
            'An error occurred during creation of EavValue record.' => 1,
            'An error occurred during saving EAV attributes!' => 1,
            'Attribute Options' => 1,
            'Attribute Types' => 1,
            'Attribute' => 1,
            'Attributes' => 1,
            'Available Attributes' => 1,
            'Custom Fields' => 1,
            'EAV' => 1,
            'Entity Models' => 1,
            'Entity was not found.' => 1,
            'Entity' => 1,
            'Model was not found.' => 1,
            'Model' => 1,
            'Option' => 1,
            'Raw' => 1,
            'Selected Attributes' => 1,
        ];
    }
}