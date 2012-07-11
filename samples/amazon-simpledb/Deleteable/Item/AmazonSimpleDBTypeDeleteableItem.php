<?php
/**
 * Class file for AmazonSimpleDBTypeDeleteableItem
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBTypeDeleteableItem
 * @date 10/07/2012
 */
class AmazonSimpleDBTypeDeleteableItem extends AmazonSimpleDBWsdlClass
{
	/**
	 * The ItemName
	 * @var string
	 */
	public $ItemName;
	/**
	 * The Attribute
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonSimpleDBTypeAttribute
	 */
	public $Attribute;
	/**
	 * Constructor
	 * @param string ItemName
	 * @param AmazonSimpleDBTypeAttribute Attribute
	 * @return AmazonSimpleDBTypeDeleteableItem
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
	 * @param Attribute Attribute
	 * @return Attribute
	 */
	public function setAttribute($_Attribute)
	{
		return ($this->Attribute = $_Attribute);
	}
	/**
	 * Get Attribute
	 * @return AmazonSimpleDBTypeAttribute
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