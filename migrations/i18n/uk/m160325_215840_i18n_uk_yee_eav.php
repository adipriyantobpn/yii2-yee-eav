<?php

use yeesoft\db\TranslatedMessagesMigration;

class m160325_215840_i18n_uk_yee_eav extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'uk';
    }

    public function getCategory()
    {
        return 'yee/eav';
    }

    public function getTranslations()
    {
        return [
            'An error occurred during creation of EavValue record.' => 'Сталася помилка під час створення запису.',
            'An error occurred during saving EAV attributes!' => 'Сталася помилка при збереженні атрибутів!',
            'Attribute Options' => 'Опції Атрибутів',
            'Attribute Types' => 'Типи Атрибутів',
            'Attribute' => 'Атрибут',
            'Attributes' => 'Атрибути',
            'Available Attributes' => 'Доступні Атрибути',
            'Custom Fields' => 'Додаткові Поля',
            'EAV' => 'EAV',
            'Entity Models' => 'Моделі',
            'Entity was not found.' => 'Запис не був знайдений.',
            'Entity' => 'Записи',
            'Model was not found.' => 'Модель не була знайдена.',
            'Model' => 'Модель',
            'Option' => 'Опція',
            'Raw' => 'Текст',
            'Selected Attributes' => 'Вибрані Атрибути',
        ];
    }
}