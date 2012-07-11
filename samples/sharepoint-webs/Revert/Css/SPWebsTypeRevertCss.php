<?php
/**
 * Class file for SPWebsTypeRevertCss
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeRevertCss
 * @date 06/07/2012
 */
class SPWebsTypeRevertCss extends SPWebsWsdlClass
{
	/**
	 * The cssFile
	 * @var string
	 */
	public $cssFile;
	/**
	 * Constructor
	 * @param string cssFile
	 * @return SPWebsTypeRevertCss
	 */
	public function __construct($_cssFile = null)
	{
		parent::__construct(array('cssFile'=>$_cssFile));
	}
	/**
	 * Set cssFile
	 * @param string cssFile
	 * @return string
	 */
	public function setCssFile($_cssFile)
	{
		return ($this->cssFile = $_cssFile);
	}
	/**
	 * Get cssFile
	 * @return string
	 */
	public function getCssFile()
	{
		return $this->cssFile;
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