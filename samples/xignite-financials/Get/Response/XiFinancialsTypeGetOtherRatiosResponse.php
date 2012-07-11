<?php
/**
 * Class file for XiFinancialsTypeGetOtherRatiosResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetOtherRatiosResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeGetOtherRatiosResponse extends XiFinancialsWsdlClass
{
	/**
	 * The GetOtherRatiosResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeOtherRatios
	 */
	public $GetOtherRatiosResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeOtherRatios GetOtherRatiosResult
	 * @return XiFinancialsTypeGetOtherRatiosResponse
	 */
	public function __construct($_GetOtherRatiosResult = null)
	{
		parent::__construct(array('GetOtherRatiosResult'=>$_GetOtherRatiosResult));
	}
	/**
	 * Set GetOtherRatiosResult
	 * @param OtherRatios GetOtherRatiosResult
	 * @return OtherRatios
	 */
	public function setGetOtherRatiosResult($_GetOtherRatiosResult)
	{
		return ($this->GetOtherRatiosResult = $_GetOtherRatiosResult);
	}
	/**
	 * Get GetOtherRatiosResult
	 * @return XiFinancialsTypeOtherRatios
	 */
	public function getGetOtherRatiosResult()
	{
		return $this->GetOtherRatiosResult;
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