<?php
/**
 * Class file for XiScreenerTypeGetDetailsResponse
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeGetDetailsResponse
 * @date 08/07/2012
 */
class XiScreenerTypeGetDetailsResponse extends XiScreenerWsdlClass
{
	/**
	 * The GetDetailsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeDetails
	 */
	public $GetDetailsResult;
	/**
	 * Constructor
	 * @param XiScreenerTypeDetails GetDetailsResult
	 * @return XiScreenerTypeGetDetailsResponse
	 */
	public function __construct($_GetDetailsResult = null)
	{
		parent::__construct(array('GetDetailsResult'=>$_GetDetailsResult));
	}
	/**
	 * Set GetDetailsResult
	 * @param Details GetDetailsResult
	 * @return Details
	 */
	public function setGetDetailsResult($_GetDetailsResult)
	{
		return ($this->GetDetailsResult = $_GetDetailsResult);
	}
	/**
	 * Get GetDetailsResult
	 * @return XiScreenerTypeDetails
	 */
	public function getGetDetailsResult()
	{
		return $this->GetDetailsResult;
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