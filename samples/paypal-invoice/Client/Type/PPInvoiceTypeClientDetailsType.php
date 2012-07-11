<?php
/**
 * Class file for PPInvoiceTypeClientDetailsType
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeClientDetailsType
 * Documentation : Details about the end user of the application invoking this service.
 * @date 02/07/2012
 */
class PPInvoiceTypeClientDetailsType extends PPInvoiceWsdlClass
{
	/**
	 * The ipAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ipAddress;
	/**
	 * The deviceId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $deviceId;
	/**
	 * The applicationId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $applicationId;
	/**
	 * The model
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $model;
	/**
	 * The geoLocation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $geoLocation;
	/**
	 * The customerType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $customerType;
	/**
	 * The partnerName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $partnerName;
	/**
	 * The customerId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $customerId;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string ipAddress
	 * @param string deviceId
	 * @param string applicationId
	 * @param string model
	 * @param string geoLocation
	 * @param string customerType
	 * @param string partnerName
	 * @param string customerId
	 * @param DOMDocument any
	 * @return PPInvoiceTypeClientDetailsType
	 */
	public function __construct($_ipAddress = null,$_deviceId = null,$_applicationId = null,$_model = null,$_geoLocation = null,$_customerType = null,$_partnerName = null,$_customerId = null,$_any = null)
	{
		parent::__construct(array('ipAddress'=>$_ipAddress,'deviceId'=>$_deviceId,'applicationId'=>$_applicationId,'model'=>$_model,'geoLocation'=>$_geoLocation,'customerType'=>$_customerType,'partnerName'=>$_partnerName,'customerId'=>$_customerId,'any'=>$_any));
	}
	/**
	 * Set ipAddress
	 * @param string ipAddress
	 * @return string
	 */
	public function setIpAddress($_ipAddress)
	{
		return ($this->ipAddress = $_ipAddress);
	}
	/**
	 * Get ipAddress
	 * @return string
	 */
	public function getIpAddress()
	{
		return $this->ipAddress;
	}
	/**
	 * Set deviceId
	 * @param string deviceId
	 * @return string
	 */
	public function setDeviceId($_deviceId)
	{
		return ($this->deviceId = $_deviceId);
	}
	/**
	 * Get deviceId
	 * @return string
	 */
	public function getDeviceId()
	{
		return $this->deviceId;
	}
	/**
	 * Set applicationId
	 * @param string applicationId
	 * @return string
	 */
	public function setApplicationId($_applicationId)
	{
		return ($this->applicationId = $_applicationId);
	}
	/**
	 * Get applicationId
	 * @return string
	 */
	public function getApplicationId()
	{
		return $this->applicationId;
	}
	/**
	 * Set model
	 * @param string model
	 * @return string
	 */
	public function setModel($_model)
	{
		return ($this->model = $_model);
	}
	/**
	 * Get model
	 * @return string
	 */
	public function getModel()
	{
		return $this->model;
	}
	/**
	 * Set geoLocation
	 * @param string geoLocation
	 * @return string
	 */
	public function setGeoLocation($_geoLocation)
	{
		return ($this->geoLocation = $_geoLocation);
	}
	/**
	 * Get geoLocation
	 * @return string
	 */
	public function getGeoLocation()
	{
		return $this->geoLocation;
	}
	/**
	 * Set customerType
	 * @param string customerType
	 * @return string
	 */
	public function setCustomerType($_customerType)
	{
		return ($this->customerType = $_customerType);
	}
	/**
	 * Get customerType
	 * @return string
	 */
	public function getCustomerType()
	{
		return $this->customerType;
	}
	/**
	 * Set partnerName
	 * @param string partnerName
	 * @return string
	 */
	public function setPartnerName($_partnerName)
	{
		return ($this->partnerName = $_partnerName);
	}
	/**
	 * Get partnerName
	 * @return string
	 */
	public function getPartnerName()
	{
		return $this->partnerName;
	}
	/**
	 * Set customerId
	 * @param string customerId
	 * @return string
	 */
	public function setCustomerId($_customerId)
	{
		return ($this->customerId = $_customerId);
	}
	/**
	 * Get customerId
	 * @return string
	 */
	public function getCustomerId()
	{
		return $this->customerId;
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