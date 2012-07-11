<?php
/**
 * Class file for AmazonSimpleDBTypeBatchDeleteAttributes
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBTypeBatchDeleteAttributes
 * @date 10/07/2012
 */
class AmazonSimpleDBTypeBatchDeleteAttributes extends AmazonSimpleDBWsdlClass
{
	/**
	 * The DomainName
	 * @var string
	 */
	public $DomainName;
	/**
	 * The Item
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var AmazonSimpleDBTypeDeleteableItem
	 */
	public $Item;
	/**
	 * Constructor
	 * @param string DomainName
	 * @param AmazonSimpleDBTypeDeleteableItem Item
	 * @return AmazonSimpleDBTypeBatchDeleteAttributes
	 */
	public function __construct($_DomainName = null,$_Item = null)
	{
		parent::__construct(array('DomainName'=>$_DomainName,'Item'=>$_Item));
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
	 * Set Item
	 * @param DeleteableItem Item
	 * @return DeleteableItem
	 */
	public function setItem($_Item)
	{
		return ($this->Item = $_Item);
	}
	/**
	 * Get Item
	 * @return AmazonSimpleDBTypeDeleteableItem
	 */
	public function getItem()
	{
		return $this->Item;
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