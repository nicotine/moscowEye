<?php
class Asset extends AppModel{
	public $hasAndBelongsToMany = array(
		'ParentAsset' => array('className'=>'asset', 'fields' => array('id','name'), 'joinTable'=>'assets_assets', 'foreignKey'=>'asset1_id', 'associationForeignKey'=>'asset2_id' ),
		'ChildAsset'  => array('className'=>'asset', 'fields' => array('id','name'), 'joinTable'=>'assets_assets', 'foreignKey'=>'asset2_id', 'associationForeignKey'=>'asset1_id')
		);	
}