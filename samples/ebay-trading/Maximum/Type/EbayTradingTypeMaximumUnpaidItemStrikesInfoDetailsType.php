<?php
/**
 * Class file for EbayTradingTypeMaximumUnpaidItemStrikesInfoDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMaximumUnpaidItemStrikesInfoDetailsType
 * Documentation : [Selling] Details of a buyer's maximum unpaid item strikes in a pre-defined time period.
 * @date 04/07/2012
 */
class EbayTradingTypeMaximumUnpaidItemStrikesInfoDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The MaximumUnpaidItemStrikesCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : [Selling] The number of the maximum unpaid item strikes.
	 * @var EbayTradingTypeMaximumUnpaidItemStrikesCountDetailsType
	 */
	public $MaximumUnpaidItemStrikesCount;
	/**
	 * The MaximumUnpaidItemStrikesDuration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : [Selling] Range of time used to determine maximum unpaid item count.
	 * @var EbayTradingTypeMaximumUnpaidItemStrikesDurationDetailsType
	 */
	public $MaximumUnpaidItemStrikesDuration;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeMaximumUnpaidItemStrikesCountDetailsType MaximumUnpaidItemStrikesCount
	 * @param EbayTradingTypeMaximumUnpaidItemStrikesDurationDetailsType MaximumUnpaidItemStrikesDuration
	 * @param DOMDocument any
	 * @return EbayTradingTypeMaximumUnpaidItemStrikesInfoDetailsType
	 */
	public function __construct($_MaximumUnpaidItemStrikesCount = null,$_MaximumUnpaidItemStrikesDuration = null,$_any = null)
	{
		parent::__construct(array('MaximumUnpaidItemStrikesCount'=>$_MaximumUnpaidItemStrikesCount,'MaximumUnpaidItemStrikesDuration'=>$_MaximumUnpaidItemStrikesDuration,'any'=>$_any));
	}
	/**
	 * Set MaximumUnpaidItemStrikesCount
	 * @param MaximumUnpaidItemStrikesCountDetailsType MaximumUnpaidItemStrikesCount
	 * @return MaximumUnpaidItemStrikesCountDetailsType
	 */
	public function setMaximumUnpaidItemStrikesCount($_MaximumUnpaidItemStrikesCount)
	{
		return ($this->MaximumUnpaidItemStrikesCount = $_MaximumUnpaidItemStrikesCount);
	}
	/**
	 * Get MaximumUnpaidItemStrikesCount
	 * @return EbayTradingTypeMaximumUnpaidItemStrikesCountDetailsType
	 */
	public function getMaximumUnpaidItemStrikesCount()
	{
		return $this->MaximumUnpaidItemStrikesCount;
	}
	/**
	 * Set MaximumUnpaidItemStrikesDuration
	 * @param MaximumUnpaidItemStrikesDurationDetailsType MaximumUnpaidItemStrikesDuration
	 * @return MaximumUnpaidItemStrikesDurationDetailsType
	 */
	public function setMaximumUnpaidItemStrikesDuration($_MaximumUnpaidItemStrikesDuration)
	{
		return ($this->MaximumUnpaidItemStrikesDuration = $_MaximumUnpaidItemStrikesDuration);
	}
	/**
	 * Get MaximumUnpaidItemStrikesDuration
	 * @return EbayTradingTypeMaximumUnpaidItemStrikesDurationDetailsType
	 */
	public function getMaximumUnpaidItemStrikesDuration()
	{
		return $this->MaximumUnpaidItemStrikesDuration;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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