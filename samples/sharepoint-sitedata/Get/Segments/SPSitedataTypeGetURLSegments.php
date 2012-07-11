<?php
/**
 * Class file for SPSitedataTypeGetURLSegments
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeGetURLSegments
 * @date 06/07/2012
 */
class SPSitedataTypeGetURLSegments extends SPSitedataWsdlClass
{
	/**
	 * The strURL
	 * @var string
	 */
	public $strURL;
	/**
	 * Constructor
	 * @param string strURL
	 * @return SPSitedataTypeGetURLSegments
	 */
	public function __construct($_strURL = null)
	{
		parent::__construct(array('strURL'=>$_strURL));
	}
	/**
	 * Set strURL
	 * @param string strURL
	 * @return string
	 */
	public function setStrURL($_strURL)
	{
		return ($this->strURL = $_strURL);
	}
	/**
	 * Get strURL
	 * @return string
	 */
	public function getStrURL()
	{
		return $this->strURL;
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