<?php
/**
 * Class file for XiSecurityTypeMapSecurityDetailResponse
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeMapSecurityDetailResponse
 * @date 08/07/2012
 */
class XiSecurityTypeMapSecurityDetailResponse extends XiSecurityWsdlClass
{
	/**
	 * The MapSecurityDetailResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeRecord
	 */
	public $MapSecurityDetailResult;
	/**
	 * Constructor
	 * @param XiSecurityTypeRecord MapSecurityDetailResult
	 * @return XiSecurityTypeMapSecurityDetailResponse
	 */
	public function __construct($_MapSecurityDetailResult = null)
	{
		parent::__construct(array('MapSecurityDetailResult'=>$_MapSecurityDetailResult));
	}
	/**
	 * Set MapSecurityDetailResult
	 * @param Record MapSecurityDetailResult
	 * @return Record
	 */
	public function setMapSecurityDetailResult($_MapSecurityDetailResult)
	{
		return ($this->MapSecurityDetailResult = $_MapSecurityDetailResult);
	}
	/**
	 * Get MapSecurityDetailResult
	 * @return XiSecurityTypeRecord
	 */
	public function getMapSecurityDetailResult()
	{
		return $this->MapSecurityDetailResult;
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