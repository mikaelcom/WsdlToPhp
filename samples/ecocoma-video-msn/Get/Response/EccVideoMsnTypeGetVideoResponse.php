<?php
/**
 * Class file for EccVideoMsnTypeGetVideoResponse
 * @date 03/07/2012
 */
/**
 * Class EccVideoMsnTypeGetVideoResponse
 * @date 03/07/2012
 */
class EccVideoMsnTypeGetVideoResponse extends EccVideoMsnWsdlClass
{
	/**
	 * The GetVideoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccVideoMsnTypeRss
	 */
	public $GetVideoResult;
	/**
	 * Constructor
	 * @param EccVideoMsnTypeRss GetVideoResult
	 * @return EccVideoMsnTypeGetVideoResponse
	 */
	public function __construct($_GetVideoResult = null)
	{
		parent::__construct(array('GetVideoResult'=>$_GetVideoResult));
	}
	/**
	 * Set GetVideoResult
	 * @param rss GetVideoResult
	 * @return rss
	 */
	public function setGetVideoResult($_GetVideoResult)
	{
		return ($this->GetVideoResult = $_GetVideoResult);
	}
	/**
	 * Get GetVideoResult
	 * @return EccVideoMsnTyperss
	 */
	public function getGetVideoResult()
	{
		return $this->GetVideoResult;
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