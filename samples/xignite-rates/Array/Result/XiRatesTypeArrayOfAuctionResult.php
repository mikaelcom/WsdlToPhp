<?php
/**
 * Class file for XiRatesTypeArrayOfAuctionResult
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeArrayOfAuctionResult
 * @date 08/07/2012
 */
class XiRatesTypeArrayOfAuctionResult extends XiRatesWsdlClass
{
	/**
	 * The AuctionResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiRatesTypeAuctionResult
	 */
	public $AuctionResult;
	/**
	 * Constructor
	 * @param XiRatesTypeAuctionResult AuctionResult
	 * @return XiRatesTypeArrayOfAuctionResult
	 */
	public function __construct($_AuctionResult = null)
	{
		parent::__construct(array('AuctionResult'=>$_AuctionResult));
	}
	/**
	 * Set AuctionResult
	 * @param AuctionResult AuctionResult
	 * @return AuctionResult
	 */
	public function setAuctionResult($_AuctionResult)
	{
		return ($this->AuctionResult = $_AuctionResult);
	}
	/**
	 * Get AuctionResult
	 * @return XiRatesTypeAuctionResult
	 */
	public function getAuctionResult()
	{
		return $this->AuctionResult;
	}
	/**
	 * Returns the current element
	 * @see XiRatesWsdlClass::current()
	 * @return XiRatesTypeAuctionResult
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiRatesWsdlClass::item()
	 * @param int
	 * @return XiRatesTypeAuctionResult
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::first()
	 * @return XiRatesTypeAuctionResult
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::last()
	 * @return XiRatesTypeAuctionResult
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::offsetGet()
	 * @param int
	 * @return XiRatesTypeAuctionResult
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'AuctionResult'
	 */
	public function getAttributeName()
	{
		return 'AuctionResult';
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