<?php
/**
 * Class file for EbayTradingTypeShippingCarrierDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeShippingCarrierDetailsType
 * Documentation : Details about type of Carrier used to ship an item.
 * @date 04/07/2012
 */
class EbayTradingTypeShippingCarrierDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The ShippingCarrierID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Numeric identifier. Some applications use this ID to look up shipping Carriers more efficiently.
	 * @var int
	 */
	public $ShippingCarrierID;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Full name of the shipping Carrier for display purposes.
	 * @var string
	 */
	public $Description;
	/**
	 * The ShippingCarrier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Value used for the shipping Carrier.
	 * @var EbayTradingTypeShippingCarrierCodeType
	 */
	public $ShippingCarrier;
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
	 * @param int ShippingCarrierID
	 * @param string Description
	 * @param EbayTradingTypeShippingCarrierCodeType ShippingCarrier
	 * @param string DetailVersion
	 * @param dateTime UpdateTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeShippingCarrierDetailsType
	 */
	public function __construct($_ShippingCarrierID = null,$_Description = null,$_ShippingCarrier = null,$_DetailVersion = null,$_UpdateTime = null,$_any = null)
	{
		parent::__construct(array('ShippingCarrierID'=>$_ShippingCarrierID,'Description'=>$_Description,'ShippingCarrier'=>$_ShippingCarrier,'DetailVersion'=>$_DetailVersion,'UpdateTime'=>$_UpdateTime,'any'=>$_any));
	}
	/**
	 * Set ShippingCarrierID
	 * @param int ShippingCarrierID
	 * @return int
	 */
	public function setShippingCarrierID($_ShippingCarrierID)
	{
		return ($this->ShippingCarrierID = $_ShippingCarrierID);
	}
	/**
	 * Get ShippingCarrierID
	 * @return int
	 */
	public function getShippingCarrierID()
	{
		return $this->ShippingCarrierID;
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
	 * Set ShippingCarrier
	 * @param ShippingCarrierCodeType ShippingCarrier
	 * @return ShippingCarrierCodeType
	 */
	public function setShippingCarrier($_ShippingCarrier)
	{
		return ($this->ShippingCarrier = EbayTradingTypeShippingCarrierCodeType::valueIsValid($_ShippingCarrier)?$_ShippingCarrier:null);
	}
	/**
	 * Get ShippingCarrier
	 * @return EbayTradingTypeShippingCarrierCodeType
	 */
	public function getShippingCarrier()
	{
		return $this->ShippingCarrier;
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