# yii2-yee-eav

Yii2 Framework - Yee CMS - EAV Module
=====

Module for creating custom fields 
------------

This module is part of Yee CMS. This module allows you to create and manage custom fields for models. 

Installation
------------

- Either run

```
composer require --prefer-dist yeesoft/yii2-yee-eav "~0.1.0"
```

or add

```
"yeesoft/yii2-yee-eav": "~0.1.0"
```

to the require section of your `composer.json` file.

- Run migrations:

```php
yii migrate --migrationPath=@vendor/yeesoft/yii2-yee-eav/migrations/
```

Configuration
------

- In your backend config file

```php
'modules'=>[
    'eav' => [
        'class' => 'yeesoft\eav\EavModule',
    ],
],
```

Usage of module
---

- Models must implement EavCategories interface:
```php
class SomeModel extends ActiveRecord implements yeesoft\eav\models\EavCategories
```

- Implement needed methods:
```php
public function getEavCategories()
{
  return Category::getCategories();
}

public static function getEavCategoryField()
{
  return 'category_id';
}
```

- Add EAV behavior to model:
```php
public function behaviors()
{
  return [
    'eav' => [
      'class' => \yeesoft\eav\EavBehavior::className(),
    ]
  ];
} 
```

- If model uses category to separate attributes then you should specify category ID when you create model:
```php
$model = new SomeModel(['category_id' => 7]);
```

- Add EavQueryTrait to ModelQuery class:
```php
use yeesoft\eav\EavQueryTrait;
```

- Add filters to ModelSearch class:
```php
$query->andEavFilterWhere('=', 'customtext', Yii::$app->getRequest()->get('customtext'));
```
  
- Add fields to form view:
```php
echo $form->field($model, 'customtext')->textInput(['maxlength' => true]);

echo $form->field($model, 'customselect')->dropDownList($model->getEavAttribute('customselect')->getEavOptionsList());
```  

- Add columns to GridView in index view:
```php
GridView::widget([
  'dataProvider' => $dataProvider,
  'filterModel' => $searchModel,
  'columns' => [			
    [
      'value' => function (SomeModel $model) {
        return (isset($model->input)) ? $model->input : '(not set)';
      },
      'filter' => Html::input('text', 'customtext', Yii::$app->getRequest()->get('customtext'), ['class' => 'form-control']),
    ],
])
```  

