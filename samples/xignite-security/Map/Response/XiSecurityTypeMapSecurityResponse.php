<?php
/**
 * Class file for XiSecurityTypeMapSecurityResponse
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeMapSecurityResponse
 * @date 08/07/2012
 */
class XiSecurityTypeMapSecurityResponse extends XiSecurityWsdlClass
{
	/**
	 * The MapSecurityResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeSecurity
	 */
	public $MapSecurityResult;
	/**
	 * Constructor
	 * @param XiSecurityTypeSecurity MapSecurityResult
	 * @return XiSecurityTypeMapSecurityResponse
	 */
	public function __construct($_MapSecurityResult = null)
	{
		parent::__construct(array('MapSecurityResult'=>$_MapSecurityResult));
	}
	/**
	 * Set MapSecurityResult
	 * @param Security MapSecurityResult
	 * @return Security
	 */
	public function setMapSecurityResult($_MapSecurityResult)
	{
		return ($this->MapSecurityResult = $_MapSecurityResult);
	}
	/**
	 * Get MapSecurityResult
	 * @return XiSecurityTypeSecurity
	 */
	public function getMapSecurityResult()
	{
		return $this->MapSecurityResult;
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