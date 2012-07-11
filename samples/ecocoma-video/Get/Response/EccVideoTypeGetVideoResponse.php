<?php
/**
 * Class file for EccVideoTypeGetVideoResponse
 * @date 03/07/2012
 */
/**
 * Class EccVideoTypeGetVideoResponse
 * @date 03/07/2012
 */
class EccVideoTypeGetVideoResponse extends EccVideoWsdlClass
{
	/**
	 * The GetVideoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccVideoTypeRss
	 */
	public $GetVideoResult;
	/**
	 * Constructor
	 * @param EccVideoTypeRss GetVideoResult
	 * @return EccVideoTypeGetVideoResponse
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
	 * @return EccVideoTyperss
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