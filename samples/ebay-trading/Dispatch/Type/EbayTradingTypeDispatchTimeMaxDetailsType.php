<?php
/**
 * Class file for EbayTradingTypeDispatchTimeMaxDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDispatchTimeMaxDetailsType
 * Documentation : Details about a specific maximum dispatch time, the maximum number of business days required to ship an item to domestic buyers after receiving a cleared payment.
 * @date 04/07/2012
 */
class EbayTradingTypeDispatchTimeMaxDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The DispatchTimeMax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Integer value that indicates the maximum number of business days that the eBay site allows as a seller's handling time. The clock starts ticking the first business day after the buyer pays for the order. This means that if a buyer pays for the order on a Wednesday, the seller would have to ship the item by the next day (Thursday) if the <b>DispatchTimeMax</b> value is set to '1'. Typical values for this field are 1, 2, 3, 4, 5, 10, 15, or 20. <br><br> When creating, revising, or relisting an item, the seller cannot set the <b>Item.DispatchTimeMax</b> value lower than the value returned in this field. <br><br> If using <b>GeteBayDetails</b> specifically to return this value, the caller sets the DetailName field in the request to <b>DispatchTimeMaxDetails</b>.
	 * @var int
	 */
	public $DispatchTimeMax;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Value and unit (e.g., 10 Days) for the maximum dispatch time. Useful for display purposes.
	 * @var string
	 */
	public $Description;
	/**
	 * The DetailVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
	 * @var string
	 */
	public $DetailVersion;
	/**
	 * The UpdateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Gives the time in GMT that the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
	 * @var dateTime
	 */
	public $UpdateTime;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int DispatchTimeMax
	 * @param string Description
	 * @param string DetailVersion
	 * @param dateTime UpdateTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeDispatchTimeMaxDetailsType
	 */
	public function __construct($_DispatchTimeMax = null,$_Description = null,$_DetailVersion = null,$_UpdateTime = null,$_any = null)
	{
		parent::__construct(array('DispatchTimeMax'=>$_DispatchTimeMax,'Description'=>$_Description,'DetailVersion'=>$_DetailVersion,'UpdateTime'=>$_UpdateTime,'any'=>$_any));
	}
	/**
	 * Set DispatchTimeMax
	 * @param int DispatchTimeMax
	 * @return int
	 */
	public function setDispatchTimeMax($_DispatchTimeMax)
	{
		return ($this->DispatchTimeMax = $_DispatchTimeMax);
	}
	/**
	 * Get DispatchTimeMax
	 * @return int
	 */
	public function getDispatchTimeMax()
	{
		return $this->DispatchTimeMax;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set DetailVersion
	 * @param string DetailVersion
	 * @return string
	 */
	public function setDetailVersion($_DetailVersion)
	{
		return ($this->DetailVersion = $_DetailVersion);
	}
	/**
	 * Get DetailVersion
	 * @return string
	 */
	public function getDetailVersion()
	{
		return $this->DetailVersion;
	}
	/**
	 * Set UpdateTime
	 * @param dateTime UpdateTime
	 * @return dateTime
	 */
	public function setUpdateTime($_UpdateTime)
	{
		return ($this->UpdateTime = $_UpdateTime);
	}
	/**
	 * Get UpdateTime
	 * @return dateTime
	 */
	public function getUpdateTime()
	{
		return $this->UpdateTime;
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