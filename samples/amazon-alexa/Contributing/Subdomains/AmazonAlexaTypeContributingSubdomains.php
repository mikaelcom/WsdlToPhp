<?php
/**
 * Class file for AmazonAlexaTypeContributingSubdomains
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeContributingSubdomains
 * @date 10/07/2012
 */
class AmazonAlexaTypeContributingSubdomains extends AmazonAlexaWsdlClass
{
	/**
	 * The ContributingSubdomain
	 * @var AmazonAlexaTypeContributingSiteType
	 */
	public $ContributingSubdomain;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeContributingSiteType ContributingSubdomain
	 * @return AmazonAlexaTypeContributingSubdomains
	 */
	public function __construct($_ContributingSubdomain = null)
	{
		parent::__construct(array('ContributingSubdomain'=>$_ContributingSubdomain));
	}
	/**
	 * Set ContributingSubdomain
	 * @param ContributingSiteType ContributingSubdomain
	 * @return ContributingSiteType
	 */
	public function setContributingSubdomain($_ContributingSubdomain)
	{
		return ($this->ContributingSubdomain = $_ContributingSubdomain);
	}
	/**
	 * Get ContributingSubdomain
	 * @return AmazonAlexaTypeContributingSiteType
	 */
	public function getContributingSubdomain()
	{
		return $this->ContributingSubdomain;
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