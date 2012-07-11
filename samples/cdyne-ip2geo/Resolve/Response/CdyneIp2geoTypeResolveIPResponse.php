<?php
/**
 * Class file for CdyneIp2geoTypeResolveIPResponse
 * @date 02/07/2012
 */
/**
 * Class CdyneIp2geoTypeResolveIPResponse
 * @date 02/07/2012
 */
class CdyneIp2geoTypeResolveIPResponse extends CdyneIp2geoWsdlClass
{
	/**
	 * The ResolveIPResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneIp2geoTypeIPInformation
	 */
	public $ResolveIPResult;
	/**
	 * Constructor
	 * @param CdyneIp2geoTypeIPInformation ResolveIPResult
	 * @return CdyneIp2geoTypeResolveIPResponse
	 */
	public function __construct($_ResolveIPResult = null)
	{
		parent::__construct(array('ResolveIPResult'=>$_ResolveIPResult));
	}
	/**
	 * Set ResolveIPResult
	 * @param IPInformation ResolveIPResult
	 * @return IPInformation
	 */
	public function setResolveIPResult($_ResolveIPResult)
	{
		return ($this->ResolveIPResult = $_ResolveIPResult);
	}
	/**
	 * Get ResolveIPResult
	 * @return CdyneIp2geoTypeIPInformation
	 */
	public function getResolveIPResult()
	{
		return $this->ResolveIPResult;
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