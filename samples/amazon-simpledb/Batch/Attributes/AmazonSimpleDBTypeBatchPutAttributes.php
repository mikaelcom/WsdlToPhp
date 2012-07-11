<?php
/**
 * Class file for AmazonSimpleDBTypeBatchPutAttributes
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBTypeBatchPutAttributes
 * @date 10/07/2012
 */
class AmazonSimpleDBTypeBatchPutAttributes extends AmazonSimpleDBWsdlClass
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
	 * @var AmazonSimpleDBTypeReplaceableItem
	 */
	public $Item;
	/**
	 * Constructor
	 * @param string DomainName
	 * @param AmazonSimpleDBTypeReplaceableItem Item
	 * @return AmazonSimpleDBTypeBatchPutAttributes
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
	 * @param ReplaceableItem Item
	 * @return ReplaceableItem
	 */
	public function setItem($_Item)
	{
		return ($this->Item = $_Item);
	}
	/**
	 * Get Item
	 * @return AmazonSimpleDBTypeReplaceableItem
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