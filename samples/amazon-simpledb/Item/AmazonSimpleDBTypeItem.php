<?php
/**
 * Class file for AmazonSimpleDBTypeItem
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBTypeItem
 * @date 10/07/2012
 */
class AmazonSimpleDBTypeItem extends AmazonSimpleDBWsdlClass
{
	/**
	 * The Name
	 * @var string
	 */
	public $Name;
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
	 * @param string Name
	 * @param AmazonSimpleDBTypeAttribute Attribute
	 * @return AmazonSimpleDBTypeItem
	 */
	public function __construct($_Name = null,$_Attribute = null)
	{
		parent::__construct(array('Name'=>$_Name,'Attribute'=>$_Attribute));
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
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