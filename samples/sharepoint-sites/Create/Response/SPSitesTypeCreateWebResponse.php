<?php
/**
 * Class file for SPSitesTypeCreateWebResponse
 * @date 06/07/2012
 */
/**
 * Class SPSitesTypeCreateWebResponse
 * @date 06/07/2012
 */
class SPSitesTypeCreateWebResponse extends SPSitesWsdlClass
{
	/**
	 * The CreateWebResult
	 * @var string
	 */
	public $CreateWebResult;
	/**
	 * Constructor
	 * @param string CreateWebResult
	 * @return SPSitesTypeCreateWebResponse
	 */
	public function __construct($_CreateWebResult = null)
	{
		parent::__construct(array('CreateWebResult'=>$_CreateWebResult));
	}
	/**
	 * Set CreateWebResult
	 * @param string CreateWebResult
	 * @return string
	 */
	public function setCreateWebResult($_CreateWebResult)
	{
		return ($this->CreateWebResult = $_CreateWebResult);
	}
	/**
	 * Get CreateWebResult
	 * @return string
	 */
	public function getCreateWebResult()
	{
		return $this->CreateWebResult;
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