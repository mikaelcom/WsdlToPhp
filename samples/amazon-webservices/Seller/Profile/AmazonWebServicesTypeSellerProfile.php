<?php
/**
 * Class file for AmazonWebServicesTypeSellerProfile
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeSellerProfile
 * @date 10/07/2012
 */
class AmazonWebServicesTypeSellerProfile extends AmazonWebServicesWsdlClass
{
	/**
	 * The SellerProfileDetails
	 * @var SellerProfileDetailsArray
	 */
	public $SellerProfileDetails;
	/**
	 * Constructor
	 * @param SellerProfileDetailsArray SellerProfileDetails
	 * @return AmazonWebServicesTypeSellerProfile
	 */
	public function __construct($_SellerProfileDetails = null)
	{
		parent::__construct(array('SellerProfileDetails'=>$_SellerProfileDetails));
	}
	/**
	 * Set SellerProfileDetails
	 * @param SellerProfileDetailsArray SellerProfileDetails
	 * @return SellerProfileDetailsArray
	 */
	public function setSellerProfileDetails($_SellerProfileDetails)
	{
		return ($this->SellerProfileDetails = $_SellerProfileDetails);
	}
	/**
	 * Get SellerProfileDetails
	 * @return SellerProfileDetailsArray
	 */
	public function getSellerProfileDetails()
	{
		return $this->SellerProfileDetails;
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