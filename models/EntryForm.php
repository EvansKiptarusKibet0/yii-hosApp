<?php
namespace app\models;

use yii\base\Model;
//creating the class
class EntryForm extends Model{
public $name;
public $email;

public function rules(){	
	
return[

[['name','email'],'required'],
['email','email'],
];

}
$model=new EntryForm();
$model->name='evans';
$model->email='evans@gma';
if($model->validate()){
	echo 'good working';
	
}
else{
	//hasErrors()
}
}

?>