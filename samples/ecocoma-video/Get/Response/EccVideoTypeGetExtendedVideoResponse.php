<?php
/**
 * Class file for EccVideoTypeGetExtendedVideoResponse
 * @date 03/07/2012
 */
/**
 * Class EccVideoTypeGetExtendedVideoResponse
 * @date 03/07/2012
 */
class EccVideoTypeGetExtendedVideoResponse extends EccVideoWsdlClass
{
	/**
	 * The GetExtendedVideoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccVideoTypeRss
	 */
	public $GetExtendedVideoResult;
	/**
	 * Constructor
	 * @param EccVideoTypeRss GetExtendedVideoResult
	 * @return EccVideoTypeGetExtendedVideoResponse
	 */
	public function __construct($_GetExtendedVideoResult = null)
	{
		parent::__construct(array('GetExtendedVideoResult'=>$_GetExtendedVideoResult));
	}
	/**
	 * Set GetExtendedVideoResult
	 * @param rss GetExtendedVideoResult
	 * @return rss
	 */
	public function setGetExtendedVideoResult($_GetExtendedVideoResult)
	{
		return ($this->GetExtendedVideoResult = $_GetExtendedVideoResult);
	}
	/**
	 * Get GetExtendedVideoResult
	 * @return EccVideoTyperss
	 */
	public function getGetExtendedVideoResult()
	{
		return $this->GetExtendedVideoResult;
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