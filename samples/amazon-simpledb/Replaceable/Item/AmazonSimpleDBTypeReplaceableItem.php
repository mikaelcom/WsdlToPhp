<?php
/**
 * Class file for AmazonSimpleDBTypeReplaceableItem
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBTypeReplaceableItem
 * @date 10/07/2012
 */
class AmazonSimpleDBTypeReplaceableItem extends AmazonSimpleDBWsdlClass
{
	/**
	 * The ItemName
	 * @var string
	 */
	public $ItemName;
	/**
	 * The Attribute
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var AmazonSimpleDBTypeReplaceableAttribute
	 */
	public $Attribute;
	/**
	 * Constructor
	 * @param string ItemName
	 * @param AmazonSimpleDBTypeReplaceableAttribute Attribute
	 * @return AmazonSimpleDBTypeReplaceableItem
	 */
	public function __construct($_ItemName = null,$_Attribute = null)
	{
		parent::__construct(array('ItemName'=>$_ItemName,'Attribute'=>$_Attribute));
	}
	/**
	 * Set ItemName
	 * @param string ItemName
	 * @return string
	 */
	public function setItemName($_ItemName)
	{
		return ($this->ItemName = $_ItemName);
	}
	/**
	 * Get ItemName
	 * @return string
	 */
	public function getItemName()
	{
		return $this->ItemName;
	}
	/**
	 * Set Attribute
	 * @param ReplaceableAttribute Attribute
	 * @return ReplaceableAttribute
	 */
	public function setAttribute($_Attribute)
	{
		return ($this->Attribute = $_Attribute);
	}
	/**
	 * Get Attribute
	 * @return AmazonSimpleDBTypeReplaceableAttribute
	 */
	public function getAttribute()
	{
		return $this->Attribute;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>