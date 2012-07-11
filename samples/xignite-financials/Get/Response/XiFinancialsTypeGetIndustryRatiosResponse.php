<?php
/**
 * Class file for XiFinancialsTypeGetIndustryRatiosResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetIndustryRatiosResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeGetIndustryRatiosResponse extends XiFinancialsWsdlClass
{
	/**
	 * The GetIndustryRatiosResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeIndustryRatios
	 */
	public $GetIndustryRatiosResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeIndustryRatios GetIndustryRatiosResult
	 * @return XiFinancialsTypeGetIndustryRatiosResponse
	 */
	public function __construct($_GetIndustryRatiosResult = null)
	{
		parent::__construct(array('GetIndustryRatiosResult'=>$_GetIndustryRatiosResult));
	}
	/**
	 * Set GetIndustryRatiosResult
	 * @param IndustryRatios GetIndustryRatiosResult
	 * @return IndustryRatios
	 */
	public function setGetIndustryRatiosResult($_GetIndustryRatiosResult)
	{
		return ($this->GetIndustryRatiosResult = $_GetIndustryRatiosResult);
	}
	/**
	 * Get GetIndustryRatiosResult
	 * @return XiFinancialsTypeIndustryRatios
	 */
	public function getGetIndustryRatiosResult()
	{
		return $this->GetIndustryRatiosResult;
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