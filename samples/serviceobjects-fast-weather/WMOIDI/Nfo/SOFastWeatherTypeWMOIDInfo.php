<?php
/**
 * Class file for SOFastWeatherTypeWMOIDInfo
 * @date 08/07/2012
 */
/**
 * Class SOFastWeatherTypeWMOIDInfo
 * @date 08/07/2012
 */
class SOFastWeatherTypeWMOIDInfo extends SOFastWeatherWsdlClass
{
	/**
	 * The WMOIDItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var SOFastWeatherTypeWMOID
	 */
	public $WMOIDItem;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastWeatherTypeErr
	 */
	public $Error;
	/**
	 * Constructor
	 * @param SOFastWeatherTypeWMOID WMOIDItem
	 * @param SOFastWeatherTypeErr Error
	 * @return SOFastWeatherTypeWMOIDInfo
	 */
	public function __construct($_WMOIDItem = null,$_Error = null)
	{
		parent::__construct(array('WMOIDItem'=>$_WMOIDItem,'Error'=>$_Error));
	}
	/**
	 * Set WMOIDItem
	 * @param WMOID WMOIDItem
	 * @return WMOID
	 */
	public function setWMOIDItem($_WMOIDItem)
	{
		return ($this->WMOIDItem = $_WMOIDItem);
	}
	/**
	 * Get WMOIDItem
	 * @return SOFastWeatherTypeWMOID
	 */
	public function getWMOIDItem()
	{
		return $this->WMOIDItem;
	}
	/**
	 * Set Error
	 * @param Err Error
	 * @return Err
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOFastWeatherTypeErr
	 */
	public function getError()
	{
		return $this->Error;
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