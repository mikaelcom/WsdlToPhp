<?php
/**
 * Class file for AmazonECommerceServiceTypeAlternateVersions
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeAlternateVersions
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeAlternateVersions extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The AlternateVersion
	 * @var AmazonECommerceServiceTypeAlternateVersion
	 */
	public $AlternateVersion;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeAlternateVersion AlternateVersion
	 * @return AmazonECommerceServiceTypeAlternateVersions
	 */
	public function __construct($_AlternateVersion = null)
	{
		parent::__construct(array('AlternateVersion'=>$_AlternateVersion));
	}
	/**
	 * Set AlternateVersion
	 * @param AlternateVersion AlternateVersion
	 * @return AlternateVersion
	 */
	public function setAlternateVersion($_AlternateVersion)
	{
		return ($this->AlternateVersion = $_AlternateVersion);
	}
	/**
	 * Get AlternateVersion
	 * @return AmazonECommerceServiceTypeAlternateVersion
	 */
	public function getAlternateVersion()
	{
		return $this->AlternateVersion;
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