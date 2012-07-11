<?php
/**
 * Class file for XiSecurityTypeMapSecuritiesResponse
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeMapSecuritiesResponse
 * @date 08/07/2012
 */
class XiSecurityTypeMapSecuritiesResponse extends XiSecurityWsdlClass
{
	/**
	 * The MapSecuritiesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeArrayOfSecurity
	 */
	public $MapSecuritiesResult;
	/**
	 * Constructor
	 * @param XiSecurityTypeArrayOfSecurity MapSecuritiesResult
	 * @return XiSecurityTypeMapSecuritiesResponse
	 */
	public function __construct($_MapSecuritiesResult = null)
	{
		parent::__construct(array('MapSecuritiesResult'=>new XiSecurityTypeArrayOfSecurity($_MapSecuritiesResult)));
	}
	/**
	 * Set MapSecuritiesResult
	 * @param ArrayOfSecurity MapSecuritiesResult
	 * @return ArrayOfSecurity
	 */
	public function setMapSecuritiesResult($_MapSecuritiesResult)
	{
		return ($this->MapSecuritiesResult = $_MapSecuritiesResult);
	}
	/**
	 * Get MapSecuritiesResult
	 * @return XiSecurityTypeArrayOfSecurity
	 */
	public function getMapSecuritiesResult()
	{
		return $this->MapSecuritiesResult;
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