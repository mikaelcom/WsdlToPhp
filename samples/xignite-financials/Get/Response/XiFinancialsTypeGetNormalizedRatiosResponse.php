<?php
/**
 * Class file for XiFinancialsTypeGetNormalizedRatiosResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetNormalizedRatiosResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeGetNormalizedRatiosResponse extends XiFinancialsWsdlClass
{
	/**
	 * The GetNormalizedRatiosResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeNormalizedRatios
	 */
	public $GetNormalizedRatiosResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeNormalizedRatios GetNormalizedRatiosResult
	 * @return XiFinancialsTypeGetNormalizedRatiosResponse
	 */
	public function __construct($_GetNormalizedRatiosResult = null)
	{
		parent::__construct(array('GetNormalizedRatiosResult'=>$_GetNormalizedRatiosResult));
	}
	/**
	 * Set GetNormalizedRatiosResult
	 * @param NormalizedRatios GetNormalizedRatiosResult
	 * @return NormalizedRatios
	 */
	public function setGetNormalizedRatiosResult($_GetNormalizedRatiosResult)
	{
		return ($this->GetNormalizedRatiosResult = $_GetNormalizedRatiosResult);
	}
	/**
	 * Get GetNormalizedRatiosResult
	 * @return XiFinancialsTypeNormalizedRatios
	 */
	public function getGetNormalizedRatiosResult()
	{
		return $this->GetNormalizedRatiosResult;
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