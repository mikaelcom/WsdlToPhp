<?php
/**
 * Class file for SPSitesTypeGetUpdatedFormDigestResponse
 * @date 06/07/2012
 */
/**
 * Class SPSitesTypeGetUpdatedFormDigestResponse
 * @date 06/07/2012
 */
class SPSitesTypeGetUpdatedFormDigestResponse extends SPSitesWsdlClass
{
	/**
	 * The GetUpdatedFormDigestResult
	 * @var string
	 */
	public $GetUpdatedFormDigestResult;
	/**
	 * Constructor
	 * @param string GetUpdatedFormDigestResult
	 * @return SPSitesTypeGetUpdatedFormDigestResponse
	 */
	public function __construct($_GetUpdatedFormDigestResult = null)
	{
		parent::__construct(array('GetUpdatedFormDigestResult'=>$_GetUpdatedFormDigestResult));
	}
	/**
	 * Set GetUpdatedFormDigestResult
	 * @param string GetUpdatedFormDigestResult
	 * @return string
	 */
	public function setGetUpdatedFormDigestResult($_GetUpdatedFormDigestResult)
	{
		return ($this->GetUpdatedFormDigestResult = $_GetUpdatedFormDigestResult);
	}
	/**
	 * Get GetUpdatedFormDigestResult
	 * @return string
	 */
	public function getGetUpdatedFormDigestResult()
	{
		return $this->GetUpdatedFormDigestResult;
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