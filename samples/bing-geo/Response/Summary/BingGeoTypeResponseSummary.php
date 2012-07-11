<?php
/**
 * Class file for BingGeoTypeResponseSummary
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeResponseSummary
 * @date 02/07/2012
 */
class BingGeoTypeResponseSummary extends BingGeoWsdlClass
{
	/**
	 * The AuthenticationResultCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var BingGeoTypeAuthenticationResultCode
	 */
	public $AuthenticationResultCode;
	/**
	 * The Copyright
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Copyright;
	/**
	 * The FaultReason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $FaultReason;
	/**
	 * The StatusCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var BingGeoTypeResponseStatusCode
	 */
	public $StatusCode;
	/**
	 * The TraceId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $TraceId;
	/**
	 * Constructor
	 * @param BingGeoTypeAuthenticationResultCode AuthenticationResultCode
	 * @param string Copyright
	 * @param string FaultReason
	 * @param BingGeoTypeResponseStatusCode StatusCode
	 * @param string TraceId
	 * @return BingGeoTypeResponseSummary
	 */
	public function __construct($_AuthenticationResultCode = null,$_Copyright = null,$_FaultReason = null,$_StatusCode = null,$_TraceId = null)
	{
		parent::__construct(array('AuthenticationResultCode'=>$_AuthenticationResultCode,'Copyright'=>$_Copyright,'FaultReason'=>$_FaultReason,'StatusCode'=>$_StatusCode,'TraceId'=>$_TraceId));
	}
	/**
	 * Set AuthenticationResultCode
	 * @param AuthenticationResultCode AuthenticationResultCode
	 * @return AuthenticationResultCode
	 */
	public function setAuthenticationResultCode($_AuthenticationResultCode)
	{
		return ($this->AuthenticationResultCode = BingGeoTypeAuthenticationResultCode::valueIsValid($_AuthenticationResultCode)?$_AuthenticationResultCode:null);
	}
	/**
	 * Get AuthenticationResultCode
	 * @return BingGeoTypeAuthenticationResultCode
	 */
	public function getAuthenticationResultCode()
	{
		return $this->AuthenticationResultCode;
	}
	/**
	 * Set Copyright
	 * @param string Copyright
	 * @return string
	 */
	public function setCopyright($_Copyright)
	{
		return ($this->Copyright = $_Copyright);
	}
	/**
	 * Get Copyright
	 * @return string
	 */
	public function getCopyright()
	{
		return $this->Copyright;
	}
	/**
	 * Set FaultReason
	 * @param string FaultReason
	 * @return string
	 */
	public function setFaultReason($_FaultReason)
	{
		return ($this->FaultReason = $_FaultReason);
	}
	/**
	 * Get FaultReason
	 * @return string
	 */
	public function getFaultReason()
	{
		return $this->FaultReason;
	}
	/**
	 * Set StatusCode
	 * @param ResponseStatusCode StatusCode
	 * @return ResponseStatusCode
	 */
	public function setStatusCode($_StatusCode)
	{
		return ($this->StatusCode = BingGeoTypeResponseStatusCode::valueIsValid($_StatusCode)?$_StatusCode:null);
	}
	/**
	 * Get StatusCode
	 * @return BingGeoTypeResponseStatusCode
	 */
	public function getStatusCode()
	{
		return $this->StatusCode;
	}
	/**
	 * Set TraceId
	 * @param string TraceId
	 * @return string
	 */
	public function setTraceId($_TraceId)
	{
		return ($this->TraceId = $_TraceId);
	}
	/**
	 * Get TraceId
	 * @return string
	 */
	public function getTraceId()
	{
		return $this->TraceId;
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