<?php
/**
 * Class file for EccVideoMsnTypeGetExtendedVideoResponse
 * @date 03/07/2012
 */
/**
 * Class EccVideoMsnTypeGetExtendedVideoResponse
 * @date 03/07/2012
 */
class EccVideoMsnTypeGetExtendedVideoResponse extends EccVideoMsnWsdlClass
{
	/**
	 * The GetExtendedVideoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccVideoMsnTypeRss
	 */
	public $GetExtendedVideoResult;
	/**
	 * Constructor
	 * @param EccVideoMsnTypeRss GetExtendedVideoResult
	 * @return EccVideoMsnTypeGetExtendedVideoResponse
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
	 * @return EccVideoMsnTyperss
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