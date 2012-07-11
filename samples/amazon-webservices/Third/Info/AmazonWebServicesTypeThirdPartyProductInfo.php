<?php
/**
 * Class file for AmazonWebServicesTypeThirdPartyProductInfo
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeThirdPartyProductInfo
 * @date 10/07/2012
 */
class AmazonWebServicesTypeThirdPartyProductInfo extends AmazonWebServicesWsdlClass
{
	/**
	 * The ThirdPartyProductDetails
	 * @var ThirdPartyProductDetailsArray
	 */
	public $ThirdPartyProductDetails;
	/**
	 * Constructor
	 * @param ThirdPartyProductDetailsArray ThirdPartyProductDetails
	 * @return AmazonWebServicesTypeThirdPartyProductInfo
	 */
	public function __construct($_ThirdPartyProductDetails = null)
	{
		parent::__construct(array('ThirdPartyProductDetails'=>$_ThirdPartyProductDetails));
	}
	/**
	 * Set ThirdPartyProductDetails
	 * @param ThirdPartyProductDetailsArray ThirdPartyProductDetails
	 * @return ThirdPartyProductDetailsArray
	 */
	public function setThirdPartyProductDetails($_ThirdPartyProductDetails)
	{
		return ($this->ThirdPartyProductDetails = $_ThirdPartyProductDetails);
	}
	/**
	 * Get ThirdPartyProductDetails
	 * @return ThirdPartyProductDetailsArray
	 */
	public function getThirdPartyProductDetails()
	{
		return $this->ThirdPartyProductDetails;
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