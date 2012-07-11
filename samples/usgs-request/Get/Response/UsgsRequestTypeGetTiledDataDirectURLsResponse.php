<?php
/**
 * Class file for UsgsRequestTypeGetTiledDataDirectURLsResponse
 * @date 08/07/2012
 */
/**
 * Class UsgsRequestTypeGetTiledDataDirectURLsResponse
 * @date 08/07/2012
 */
class UsgsRequestTypeGetTiledDataDirectURLsResponse extends UsgsRequestWsdlClass
{
	/**
	 * The getTiledDataDirectURLsReturn
	 * @var string
	 */
	public $getTiledDataDirectURLsReturn;
	/**
	 * Constructor
	 * @param string getTiledDataDirectURLsReturn
	 * @return UsgsRequestTypeGetTiledDataDirectURLsResponse
	 */
	public function __construct($_getTiledDataDirectURLsReturn = null)
	{
		parent::__construct(array('getTiledDataDirectURLsReturn'=>$_getTiledDataDirectURLsReturn));
	}
	/**
	 * Set getTiledDataDirectURLsReturn
	 * @param string getTiledDataDirectURLsReturn
	 * @return string
	 */
	public function setGetTiledDataDirectURLsReturn($_getTiledDataDirectURLsReturn)
	{
		return ($this->getTiledDataDirectURLsReturn = $_getTiledDataDirectURLsReturn);
	}
	/**
	 * Get getTiledDataDirectURLsReturn
	 * @return string
	 */
	public function getGetTiledDataDirectURLsReturn()
	{
		return $this->getTiledDataDirectURLsReturn;
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