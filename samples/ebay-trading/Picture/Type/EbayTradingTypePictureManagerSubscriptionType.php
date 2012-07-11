<?php
/**
 * Class file for EbayTradingTypePictureManagerSubscriptionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePictureManagerSubscriptionType
 * Documentation : Describes one type of Picture Manager subscription that is available.
 * @date 04/07/2012
 */
class EbayTradingTypePictureManagerSubscriptionType extends EbayTradingWsdlClass
{
	/**
	 * The SubscriptionLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The level of Picture Manager subscription. Each level has a monthly fee and provides a certain amount of storage space.
	 * @var EbayTradingTypePictureManagerSubscriptionLevelCodeType
	 */
	public $SubscriptionLevel;
	/**
	 * The Fee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The monthly fee for the subscription. Read-only value.
	 * @var EbayTradingTypeAmountType
	 */
	public $Fee;
	/**
	 * The StorageSize
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total amount of storage space available for the subscription type. Read-only value.
	 * @var int
	 */
	public $StorageSize;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypePictureManagerSubscriptionLevelCodeType SubscriptionLevel
	 * @param EbayTradingTypeAmountType Fee
	 * @param int StorageSize
	 * @param DOMDocument any
	 * @return EbayTradingTypePictureManagerSubscriptionType
	 */
	public function __construct($_SubscriptionLevel = null,$_Fee = null,$_StorageSize = null,$_any = null)
	{
		parent::__construct(array('SubscriptionLevel'=>$_SubscriptionLevel,'Fee'=>$_Fee,'StorageSize'=>$_StorageSize,'any'=>$_any));
	}
	/**
	 * Set SubscriptionLevel
	 * @param PictureManagerSubscriptionLevelCodeType SubscriptionLevel
	 * @return PictureManagerSubscriptionLevelCodeType
	 */
	public function setSubscriptionLevel($_SubscriptionLevel)
	{
		return ($this->SubscriptionLevel = EbayTradingTypePictureManagerSubscriptionLevelCodeType::valueIsValid($_SubscriptionLevel)?$_SubscriptionLevel:null);
	}
	/**
	 * Get SubscriptionLevel
	 * @return EbayTradingTypePictureManagerSubscriptionLevelCodeType
	 */
	public function getSubscriptionLevel()
	{
		return $this->SubscriptionLevel;
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
	 * Set StorageSize
	 * @param int StorageSize
	 * @return int
	 */
	public function setStorageSize($_StorageSize)
	{
		return ($this->StorageSize = $_StorageSize);
	}
	/**
	 * Get StorageSize
	 * @return int
	 */
	public function getStorageSize()
	{
		return $this->StorageSize;
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