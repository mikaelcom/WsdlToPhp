<?php
/**
 * Class file for EccVideoAolTypeGetVideoResponse
 * @date 03/07/2012
 */
/**
 * Class EccVideoAolTypeGetVideoResponse
 * @date 03/07/2012
 */
class EccVideoAolTypeGetVideoResponse extends EccVideoAolWsdlClass
{
	/**
	 * The GetVideoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccVideoAolTypeRss
	 */
	public $GetVideoResult;
	/**
	 * Constructor
	 * @param EccVideoAolTypeRss GetVideoResult
	 * @return EccVideoAolTypeGetVideoResponse
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
	 * @return EccVideoAolTyperss
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