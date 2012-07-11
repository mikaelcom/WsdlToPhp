<?php
/**
 * Class file for EbayTradingTypeDeliveryURLDetailType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDeliveryURLDetailType
 * Documentation : Defines settings for a notification URL (including the URL name in DeliveryURLName).
 * @date 04/07/2012
 */
class EbayTradingTypeDeliveryURLDetailType extends EbayTradingWsdlClass
{
	/**
	 * The DeliveryURLName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of a notification delivery URL. You can list up to 25 instances of DeliveryURLName, and then subscribe these URLs to notifications by listing them in comma- separated format in the DeliveryURLName element outside of ApplicationDeliveryPreferences.
	 * @var string
	 */
	public $DeliveryURLName;
	/**
	 * The DeliveryURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The address of a notification delivery URL. This address applies to the DeliveryURLName within the same ApplicationDeliveryPreferences.DeliveryURLDetails container. For delivery to a server, the URL begins with http:// or https:// and must be well formed. Use a URL that is functional at the time of the call. For delivery to an email address, the URL begins with mailto: and specifies a valid email address.
	 * @var anyURI
	 */
	public $DeliveryURL;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The status of a notification delivery URL. This status applies to the DeliveryURLName and delivery URL within the same ApplicationDeliveryPreferences.DeliveryURLDetails container. If the status is disabled, then notifications will not be sent to the delivery URL.
	 * @var EbayTradingTypeEnableCodeType
	 */
	public $Status;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string DeliveryURLName
	 * @param anyURI DeliveryURL
	 * @param EbayTradingTypeEnableCodeType Status
	 * @param DOMDocument any
	 * @return EbayTradingTypeDeliveryURLDetailType
	 */
	public function __construct($_DeliveryURLName = null,$_DeliveryURL = null,$_Status = null,$_any = null)
	{
		parent::__construct(array('DeliveryURLName'=>$_DeliveryURLName,'DeliveryURL'=>$_DeliveryURL,'Status'=>$_Status,'any'=>$_any));
	}
	/**
	 * Set DeliveryURLName
	 * @param string DeliveryURLName
	 * @return string
	 */
	public function setDeliveryURLName($_DeliveryURLName)
	{
		return ($this->DeliveryURLName = $_DeliveryURLName);
	}
	/**
	 * Get DeliveryURLName
	 * @return string
	 */
	public function getDeliveryURLName()
	{
		return $this->DeliveryURLName;
	}
	/**
	 * Set DeliveryURL
	 * @param anyURI DeliveryURL
	 * @return anyURI
	 */
	public function setDeliveryURL($_DeliveryURL)
	{
		return ($this->DeliveryURL = $_DeliveryURL);
	}
	/**
	 * Get DeliveryURL
	 * @return anyURI
	 */
	public function getDeliveryURL()
	{
		return $this->DeliveryURL;
	}
	/**
	 * Set Status
	 * @param EnableCodeType Status
	 * @return EnableCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = EbayTradingTypeEnableCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return EbayTradingTypeEnableCodeType
	 */
	public function getStatus()
	{
		return $this->Status;
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