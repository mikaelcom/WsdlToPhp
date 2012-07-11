<?php
/**
 * Class file for SPSitesTypeGetUpdatedFormDigestInformationResponse
 * @date 06/07/2012
 */
/**
 * Class SPSitesTypeGetUpdatedFormDigestInformationResponse
 * @date 06/07/2012
 */
class SPSitesTypeGetUpdatedFormDigestInformationResponse extends SPSitesWsdlClass
{
	/**
	 * The GetUpdatedFormDigestInformationResult
	 * @var SPSitesTypeFormDigestInformation
	 */
	public $GetUpdatedFormDigestInformationResult;
	/**
	 * Constructor
	 * @param SPSitesTypeFormDigestInformation GetUpdatedFormDigestInformationResult
	 * @return SPSitesTypeGetUpdatedFormDigestInformationResponse
	 */
	public function __construct($_GetUpdatedFormDigestInformationResult = null)
	{
		parent::__construct(array('GetUpdatedFormDigestInformationResult'=>$_GetUpdatedFormDigestInformationResult));
	}
	/**
	 * Set GetUpdatedFormDigestInformationResult
	 * @param FormDigestInformation GetUpdatedFormDigestInformationResult
	 * @return FormDigestInformation
	 */
	public function setGetUpdatedFormDigestInformationResult($_GetUpdatedFormDigestInformationResult)
	{
		return ($this->GetUpdatedFormDigestInformationResult = $_GetUpdatedFormDigestInformationResult);
	}
	/**
	 * Get GetUpdatedFormDigestInformationResult
	 * @return SPSitesTypeFormDigestInformation
	 */
	public function getGetUpdatedFormDigestInformationResult()
	{
		return $this->GetUpdatedFormDigestInformationResult;
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