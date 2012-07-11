<?php
/**
 * Class file for EccVideoAolTypeGetExtendedVideoResponse
 * @date 03/07/2012
 */
/**
 * Class EccVideoAolTypeGetExtendedVideoResponse
 * @date 03/07/2012
 */
class EccVideoAolTypeGetExtendedVideoResponse extends EccVideoAolWsdlClass
{
	/**
	 * The GetExtendedVideoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccVideoAolTypeRss
	 */
	public $GetExtendedVideoResult;
	/**
	 * Constructor
	 * @param EccVideoAolTypeRss GetExtendedVideoResult
	 * @return EccVideoAolTypeGetExtendedVideoResponse
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
	 * @return EccVideoAolTyperss
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