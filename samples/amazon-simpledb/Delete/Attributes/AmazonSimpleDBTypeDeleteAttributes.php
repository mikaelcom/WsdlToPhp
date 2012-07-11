<?php
/**
 * Class file for AmazonSimpleDBTypeDeleteAttributes
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBTypeDeleteAttributes
 * @date 10/07/2012
 */
class AmazonSimpleDBTypeDeleteAttributes extends AmazonSimpleDBWsdlClass
{
	/**
	 * The DomainName
	 * @var string
	 */
	public $DomainName;
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
	 * The Expected
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonSimpleDBTypeUpdateCondition
	 */
	public $Expected;
	/**
	 * Constructor
	 * @param string DomainName
	 * @param string ItemName
	 * @param AmazonSimpleDBTypeAttribute Attribute
	 * @param AmazonSimpleDBTypeUpdateCondition Expected
	 * @return AmazonSimpleDBTypeDeleteAttributes
	 */
	public function __construct($_DomainName = null,$_ItemName = null,$_Attribute = null,$_Expected = null)
	{
		parent::__construct(array('DomainName'=>$_DomainName,'ItemName'=>$_ItemName,'Attribute'=>$_Attribute,'Expected'=>$_Expected));
	}
	/**
	 * Set DomainName
	 * @param string DomainName
	 * @return string
	 */
	public function setDomainName($_DomainName)
	{
		return ($this->DomainName = $_DomainName);
	}
	/**
	 * Get DomainName
	 * @return string
	 */
	public function getDomainName()
	{
		return $this->DomainName;
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
	 * Set Expected
	 * @param UpdateCondition Expected
	 * @return UpdateCondition
	 */
	public function setExpected($_Expected)
	{
		return ($this->Expected = $_Expected);
	}
	/**
	 * Get Expected
	 * @return AmazonSimpleDBTypeUpdateCondition
	 */
	public function getExpected()
	{
		return $this->Expected;
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