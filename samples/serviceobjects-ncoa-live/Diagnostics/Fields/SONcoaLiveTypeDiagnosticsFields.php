<?php
/**
 * Class file for SONcoaLiveTypeDiagnosticsFields
 * @date 06/07/2012
 */
/**
 * Class SONcoaLiveTypeDiagnosticsFields
 * @date 06/07/2012
 */
class SONcoaLiveTypeDiagnosticsFields extends SONcoaLiveWsdlClass
{
	/**
	 * The DiagnosticsRaw
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DiagnosticsRaw;
	/**
	 * The DiscountCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DiscountCode;
	/**
	 * The DiscountDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DiscountDescription;
	/**
	 * The StatusCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StatusCode;
	/**
	 * The StatusDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StatusDescription;
	/**
	 * The Reliability
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Reliability;
	/**
	 * The ServiceFlags
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ServiceFlags;
	/**
	 * Constructor
	 * @param string DiagnosticsRaw
	 * @param string DiscountCode
	 * @param string DiscountDescription
	 * @param string StatusCode
	 * @param string StatusDescription
	 * @param string Reliability
	 * @param string ServiceFlags
	 * @return SONcoaLiveTypeDiagnosticsFields
	 */
	public function __construct($_DiagnosticsRaw = null,$_DiscountCode = null,$_DiscountDescription = null,$_StatusCode = null,$_StatusDescription = null,$_Reliability = null,$_ServiceFlags = null)
	{
		parent::__construct(array('DiagnosticsRaw'=>$_DiagnosticsRaw,'DiscountCode'=>$_DiscountCode,'DiscountDescription'=>$_DiscountDescription,'StatusCode'=>$_StatusCode,'StatusDescription'=>$_StatusDescription,'Reliability'=>$_Reliability,'ServiceFlags'=>$_ServiceFlags));
	}
	/**
	 * Set DiagnosticsRaw
	 * @param string DiagnosticsRaw
	 * @return string
	 */
	public function setDiagnosticsRaw($_DiagnosticsRaw)
	{
		return ($this->DiagnosticsRaw = $_DiagnosticsRaw);
	}
	/**
	 * Get DiagnosticsRaw
	 * @return string
	 */
	public function getDiagnosticsRaw()
	{
		return $this->DiagnosticsRaw;
	}
	/**
	 * Set DiscountCode
	 * @param string DiscountCode
	 * @return string
	 */
	public function setDiscountCode($_DiscountCode)
	{
		return ($this->DiscountCode = $_DiscountCode);
	}
	/**
	 * Get DiscountCode
	 * @return string
	 */
	public function getDiscountCode()
	{
		return $this->DiscountCode;
	}
	/**
	 * Set DiscountDescription
	 * @param string DiscountDescription
	 * @return string
	 */
	public function setDiscountDescription($_DiscountDescription)
	{
		return ($this->DiscountDescription = $_DiscountDescription);
	}
	/**
	 * Get DiscountDescription
	 * @return string
	 */
	public function getDiscountDescription()
	{
		return $this->DiscountDescription;
	}
	/**
	 * Set StatusCode
	 * @param string StatusCode
	 * @return string
	 */
	public function setStatusCode($_StatusCode)
	{
		return ($this->StatusCode = $_StatusCode);
	}
	/**
	 * Get StatusCode
	 * @return string
	 */
	public function getStatusCode()
	{
		return $this->StatusCode;
	}
	/**
	 * Set StatusDescription
	 * @param string StatusDescription
	 * @return string
	 */
	public function setStatusDescription($_StatusDescription)
	{
		return ($this->StatusDescription = $_StatusDescription);
	}
	/**
	 * Get StatusDescription
	 * @return string
	 */
	public function getStatusDescription()
	{
		return $this->StatusDescription;
	}
	/**
	 * Set Reliability
	 * @param string Reliability
	 * @return string
	 */
	public function setReliability($_Reliability)
	{
		return ($this->Reliability = $_Reliability);
	}
	/**
	 * Get Reliability
	 * @return string
	 */
	public function getReliability()
	{
		return $this->Reliability;
	}
	/**
	 * Set ServiceFlags
	 * @param string ServiceFlags
	 * @return string
	 */
	public function setServiceFlags($_ServiceFlags)
	{
		return ($this->ServiceFlags = $_ServiceFlags);
	}
	/**
	 * Get ServiceFlags
	 * @return string
	 */
	public function getServiceFlags()
	{
		return $this->ServiceFlags;
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