<?php
/**
 * Class file for XiFinancialsTypeGetCommonRatiosResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetCommonRatiosResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeGetCommonRatiosResponse extends XiFinancialsWsdlClass
{
	/**
	 * The GetCommonRatiosResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeCommonRatios
	 */
	public $GetCommonRatiosResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeCommonRatios GetCommonRatiosResult
	 * @return XiFinancialsTypeGetCommonRatiosResponse
	 */
	public function __construct($_GetCommonRatiosResult = null)
	{
		parent::__construct(array('GetCommonRatiosResult'=>$_GetCommonRatiosResult));
	}
	/**
	 * Set GetCommonRatiosResult
	 * @param CommonRatios GetCommonRatiosResult
	 * @return CommonRatios
	 */
	public function setGetCommonRatiosResult($_GetCommonRatiosResult)
	{
		return ($this->GetCommonRatiosResult = $_GetCommonRatiosResult);
	}
	/**
	 * Get GetCommonRatiosResult
	 * @return XiFinancialsTypeCommonRatios
	 */
	public function getGetCommonRatiosResult()
	{
		return $this->GetCommonRatiosResult;
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