<?php
/**
 * Class file for AmazonWebServicesTypeSellerSearch
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeSellerSearch
 * @date 10/07/2012
 */
class AmazonWebServicesTypeSellerSearch extends AmazonWebServicesWsdlClass
{
	/**
	 * The SellerSearchDetails
	 * @var SellerSearchDetailsArray
	 */
	public $SellerSearchDetails;
	/**
	 * Constructor
	 * @param SellerSearchDetailsArray SellerSearchDetails
	 * @return AmazonWebServicesTypeSellerSearch
	 */
	public function __construct($_SellerSearchDetails = null)
	{
		parent::__construct(array('SellerSearchDetails'=>$_SellerSearchDetails));
	}
	/**
	 * Set SellerSearchDetails
	 * @param SellerSearchDetailsArray SellerSearchDetails
	 * @return SellerSearchDetailsArray
	 */
	public function setSellerSearchDetails($_SellerSearchDetails)
	{
		return ($this->SellerSearchDetails = $_SellerSearchDetails);
	}
	/**
	 * Get SellerSearchDetails
	 * @return SellerSearchDetailsArray
	 */
	public function getSellerSearchDetails()
	{
		return $this->SellerSearchDetails;
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