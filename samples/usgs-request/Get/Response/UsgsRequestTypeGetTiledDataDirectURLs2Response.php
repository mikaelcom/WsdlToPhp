<?php
/**
 * Class file for UsgsRequestTypeGetTiledDataDirectURLs2Response
 * @date 08/07/2012
 */
/**
 * Class UsgsRequestTypeGetTiledDataDirectURLs2Response
 * @date 08/07/2012
 */
class UsgsRequestTypeGetTiledDataDirectURLs2Response extends UsgsRequestWsdlClass
{
	/**
	 * The getTiledDataDirectURLs2Return
	 * @var string
	 */
	public $getTiledDataDirectURLs2Return;
	/**
	 * Constructor
	 * @param string getTiledDataDirectURLs2Return
	 * @return UsgsRequestTypeGetTiledDataDirectURLs2Response
	 */
	public function __construct($_getTiledDataDirectURLs2Return = null)
	{
		parent::__construct(array('getTiledDataDirectURLs2Return'=>$_getTiledDataDirectURLs2Return));
	}
	/**
	 * Set getTiledDataDirectURLs2Return
	 * @param string getTiledDataDirectURLs2Return
	 * @return string
	 */
	public function setGetTiledDataDirectURLs2Return($_getTiledDataDirectURLs2Return)
	{
		return ($this->getTiledDataDirectURLs2Return = $_getTiledDataDirectURLs2Return);
	}
	/**
	 * Get getTiledDataDirectURLs2Return
	 * @return string
	 */
	public function getGetTiledDataDirectURLs2Return()
	{
		return $this->getTiledDataDirectURLs2Return;
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