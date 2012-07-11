<?php
/**
 * Class file for XiSecurityTypeListSecuritiesResponse
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeListSecuritiesResponse
 * @date 08/07/2012
 */
class XiSecurityTypeListSecuritiesResponse extends XiSecurityWsdlClass
{
	/**
	 * The ListSecuritiesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeArrayOfSecurity
	 */
	public $ListSecuritiesResult;
	/**
	 * Constructor
	 * @param XiSecurityTypeArrayOfSecurity ListSecuritiesResult
	 * @return XiSecurityTypeListSecuritiesResponse
	 */
	public function __construct($_ListSecuritiesResult = null)
	{
		parent::__construct(array('ListSecuritiesResult'=>new XiSecurityTypeArrayOfSecurity($_ListSecuritiesResult)));
	}
	/**
	 * Set ListSecuritiesResult
	 * @param ArrayOfSecurity ListSecuritiesResult
	 * @return ArrayOfSecurity
	 */
	public function setListSecuritiesResult($_ListSecuritiesResult)
	{
		return ($this->ListSecuritiesResult = $_ListSecuritiesResult);
	}
	/**
	 * Get ListSecuritiesResult
	 * @return XiSecurityTypeArrayOfSecurity
	 */
	public function getListSecuritiesResult()
	{
		return $this->ListSecuritiesResult;
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