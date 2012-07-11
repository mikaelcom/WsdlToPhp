<?php
/**
 * Class file for BingGeoTypeResponseBase
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeResponseBase
 * @date 02/07/2012
 */
class BingGeoTypeResponseBase extends BingGeoWsdlClass
{
	/**
	 * The BrandLogoUri
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var anyURI
	 */
	public $BrandLogoUri;
	/**
	 * The ResponseSummary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BingGeoTypeResponseSummary
	 */
	public $ResponseSummary;
	/**
	 * Constructor
	 * @param anyURI BrandLogoUri
	 * @param BingGeoTypeResponseSummary ResponseSummary
	 * @return BingGeoTypeResponseBase
	 */
	public function __construct($_BrandLogoUri = null,$_ResponseSummary = null)
	{
		parent::__construct(array('BrandLogoUri'=>$_BrandLogoUri,'ResponseSummary'=>$_ResponseSummary));
	}
	/**
	 * Set BrandLogoUri
	 * @param anyURI BrandLogoUri
	 * @return anyURI
	 */
	public function setBrandLogoUri($_BrandLogoUri)
	{
		return ($this->BrandLogoUri = $_BrandLogoUri);
	}
	/**
	 * Get BrandLogoUri
	 * @return anyURI
	 */
	public function getBrandLogoUri()
	{
		return $this->BrandLogoUri;
	}
	/**
	 * Set ResponseSummary
	 * @param ResponseSummary ResponseSummary
	 * @return ResponseSummary
	 */
	public function setResponseSummary($_ResponseSummary)
	{
		return ($this->ResponseSummary = $_ResponseSummary);
	}
	/**
	 * Get ResponseSummary
	 * @return BingGeoTypeResponseSummary
	 */
	public function getResponseSummary()
	{
		return $this->ResponseSummary;
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