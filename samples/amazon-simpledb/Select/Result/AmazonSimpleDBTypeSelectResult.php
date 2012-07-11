<?php
/**
 * Class file for AmazonSimpleDBTypeSelectResult
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBTypeSelectResult
 * @date 10/07/2012
 */
class AmazonSimpleDBTypeSelectResult extends AmazonSimpleDBWsdlClass
{
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonSimpleDBTypeItem
	 */
	public $Item;
	/**
	 * The NextToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $NextToken;
	/**
	 * Constructor
	 * @param AmazonSimpleDBTypeItem Item
	 * @param string NextToken
	 * @return AmazonSimpleDBTypeSelectResult
	 */
	public function __construct($_Item = null,$_NextToken = null)
	{
		parent::__construct(array('Item'=>$_Item,'NextToken'=>$_NextToken));
	}
	/**
	 * Set Item
	 * @param Item Item
	 * @return Item
	 */
	public function setItem($_Item)
	{
		return ($this->Item = $_Item);
	}
	/**
	 * Get Item
	 * @return AmazonSimpleDBTypeItem
	 */
	public function getItem()
	{
		return $this->Item;
	}
	/**
	 * Set NextToken
	 * @param string NextToken
	 * @return string
	 */
	public function setNextToken($_NextToken)
	{
		return ($this->NextToken = $_NextToken);
	}
	/**
	 * Get NextToken
	 * @return string
	 */
	public function getNextToken()
	{
		return $this->NextToken;
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