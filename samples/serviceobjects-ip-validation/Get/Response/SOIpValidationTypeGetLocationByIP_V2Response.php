<?php
/**
 * Class file for SOIpValidationTypeGetLocationByIP_V2Response
 * @date 08/07/2012
 */
/**
 * Class SOIpValidationTypeGetLocationByIP_V2Response
 * @date 08/07/2012
 */
class SOIpValidationTypeGetLocationByIP_V2Response extends SOIpValidationWsdlClass
{
	/**
	 * The GetLocationByIP_V2Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOIpValidationTypeIP
	 */
	public $GetLocationByIP_V2Result;
	/**
	 * Constructor
	 * @param SOIpValidationTypeIP GetLocationByIP_V2Result
	 * @return SOIpValidationTypeGetLocationByIP_V2Response
	 */
	public function __construct($_GetLocationByIP_V2Result = null)
	{
		parent::__construct(array('GetLocationByIP_V2Result'=>$_GetLocationByIP_V2Result));
	}
	/**
	 * Set GetLocationByIP_V2Result
	 * @param IP GetLocationByIP_V2Result
	 * @return IP
	 */
	public function setGetLocationByIP_V2Result($_GetLocationByIP_V2Result)
	{
		return ($this->GetLocationByIP_V2Result = $_GetLocationByIP_V2Result);
	}
	/**
	 * Get GetLocationByIP_V2Result
	 * @return SOIpValidationTypeIP
	 */
	public function getGetLocationByIP_V2Result()
	{
		return $this->GetLocationByIP_V2Result;
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