<?php
/**
 * Class file for EbayTradingTypeStoreSubscriptionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreSubscriptionType
 * @date 04/07/2012
 */
class EbayTradingTypeStoreSubscriptionType extends EbayTradingWsdlClass
{
	/**
	 * The Level
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Store subscription level.
	 * @var EbayTradingTypeStoreSubscriptionLevelCodeType
	 */
	public $Level;
	/**
	 * The Fee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Monthly fee for the Store subscription level.
	 * @var EbayTradingTypeAmountType
	 */
	public $Fee;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeStoreSubscriptionLevelCodeType Level
	 * @param EbayTradingTypeAmountType Fee
	 * @param DOMDocument any
	 * @return EbayTradingTypeStoreSubscriptionType
	 */
	public function __construct($_Level = null,$_Fee = null,$_any = null)
	{
		parent::__construct(array('Level'=>$_Level,'Fee'=>$_Fee,'any'=>$_any));
	}
	/**
	 * Set Level
	 * @param StoreSubscriptionLevelCodeType Level
	 * @return StoreSubscriptionLevelCodeType
	 */
	public function setLevel($_Level)
	{
		return ($this->Level = EbayTradingTypeStoreSubscriptionLevelCodeType::valueIsValid($_Level)?$_Level:null);
	}
	/**
	 * Get Level
	 * @return EbayTradingTypeStoreSubscriptionLevelCodeType
	 */
	public function getLevel()
	{
		return $this->Level;
	}
	/**
	 * Set Fee
	 * @param AmountType Fee
	 * @return AmountType
	 */
	public function setFee($_Fee)
	{
		return ($this->Fee = $_Fee);
	}
	/**
	 * Get Fee
	 * @return EbayTradingTypeAmountType
	 */
	public function getFee()
	{
		return $this->Fee;
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