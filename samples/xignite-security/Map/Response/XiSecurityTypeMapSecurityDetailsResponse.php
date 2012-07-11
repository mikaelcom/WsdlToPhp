<?php
/**
 * Class file for XiSecurityTypeMapSecurityDetailsResponse
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeMapSecurityDetailsResponse
 * @date 08/07/2012
 */
class XiSecurityTypeMapSecurityDetailsResponse extends XiSecurityWsdlClass
{
	/**
	 * The MapSecurityDetailsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeArrayOfRecord
	 */
	public $MapSecurityDetailsResult;
	/**
	 * Constructor
	 * @param XiSecurityTypeArrayOfRecord MapSecurityDetailsResult
	 * @return XiSecurityTypeMapSecurityDetailsResponse
	 */
	public function __construct($_MapSecurityDetailsResult = null)
	{
		parent::__construct(array('MapSecurityDetailsResult'=>new XiSecurityTypeArrayOfRecord($_MapSecurityDetailsResult)));
	}
	/**
	 * Set MapSecurityDetailsResult
	 * @param ArrayOfRecord MapSecurityDetailsResult
	 * @return ArrayOfRecord
	 */
	public function setMapSecurityDetailsResult($_MapSecurityDetailsResult)
	{
		return ($this->MapSecurityDetailsResult = $_MapSecurityDetailsResult);
	}
	/**
	 * Get MapSecurityDetailsResult
	 * @return XiSecurityTypeArrayOfRecord
	 */
	public function getMapSecurityDetailsResult()
	{
		return $this->MapSecurityDetailsResult;
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