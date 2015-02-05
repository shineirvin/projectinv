<?php


class ItemModel extends Eloquent {

/**
* The database table used by the model.
*
* @var string
*/
protected $table = 'items';
protected $fillable = array('name', 'description');

/**
* Validation rules when adding,updating an item
* @var type
*/
private $_validationRules = array(
'name' => 'required',
'description' => 'required'
);

public function insert($data) {

$validator = Validator::make($data, $this->_validationRules);
if ($validator->fails()) {
return $validator;
}

self::create($data);

return TRUE;
}

public function modify($data) {

}

public function remove($data) {
}

}