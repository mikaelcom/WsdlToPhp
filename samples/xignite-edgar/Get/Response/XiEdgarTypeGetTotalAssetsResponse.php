<?php
/**
 * Class file for XiEdgarTypeGetTotalAssetsResponse
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeGetTotalAssetsResponse
 * @date 08/07/2012
 */
class XiEdgarTypeGetTotalAssetsResponse extends XiEdgarWsdlClass
{
	/**
	 * The GetTotalAssetsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeTotalAssets
	 */
	public $GetTotalAssetsResult;
	/**
	 * Constructor
	 * @param XiEdgarTypeTotalAssets GetTotalAssetsResult
	 * @return XiEdgarTypeGetTotalAssetsResponse
	 */
	public function __construct($_GetTotalAssetsResult = null)
	{
		parent::__construct(array('GetTotalAssetsResult'=>$_GetTotalAssetsResult));
	}
	/**
	 * Set GetTotalAssetsResult
	 * @param TotalAssets GetTotalAssetsResult
	 * @return TotalAssets
	 */
	public function setGetTotalAssetsResult($_GetTotalAssetsResult)
	{
		return ($this->GetTotalAssetsResult = $_GetTotalAssetsResult);
	}
	/**
	 * Get GetTotalAssetsResult
	 * @return XiEdgarTypeTotalAssets
	 */
	public function getGetTotalAssetsResult()
	{
		return $this->GetTotalAssetsResult;
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