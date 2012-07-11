<?php
/**
 * Class file for EbayFindTypeBestMatchFindingServiceRequest
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeBestMatchFindingServiceRequest
 * Documentation : This is the base request container for all Finding Service operations.
 * @date 04/07/2012
 */
class EbayFindTypeBestMatchFindingServiceRequest extends EbayFindTypeBaseServiceRequest
{
	/**
	 * The paginationInput
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Controls the pagination of the result set. Child elements specify the maximum number of item listings to return per call and the page of data to return. Controls the number of listings returned in the response, but does not specify the details to return for each listing. <br><br> <span class="tablenote"><strong>Note:</strong> No more than 10,000 items can be retrieved for a given search, regardless of how many matches are found. This limit is enforced by the maximum page number allowed (100) and the maximum entries per page allowed (100). </span>
	 * @var EbayFindTypePaginationInput
	 */
	public $paginationInput;
	/**
	 * The buyerPostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The postal code of the buyer. This is used as the basis for proximity searches as well as local searches. <br><br> A proximity search requires <b class="con">buyerPostalCode</b> and a <b class="con">MaxDistance</b> item filter. A local search requires <b class="con">buyerPostalCode</b> and item filters for <b class="con">MaxDistance</b> and <b class="con">LocalSearch</b>.
	 * @var string
	 */
	public $buyerPostalCode;
	/**
	 * The affiliate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for affiliate details. eBay uses the specified affiliate information to build a View Item URL and Product URL string with correctly formatted affiliate tracking information, which it returns in the response. You can publish these URLs, and if a user clicks them to access eBay, the respective affiliate might get a commission, depending on the user's actions.
	 * @var EbayFindTypeAffiliate
	 */
	public $affiliate;
	/**
	 * Constructor
	 * @param EbayFindTypePaginationInput paginationInput
	 * @param string buyerPostalCode
	 * @param EbayFindTypeAffiliate affiliate
	 * @return EbayFindTypeBestMatchFindingServiceRequest
	 */
	public function __construct($_paginationInput = null,$_buyerPostalCode = null,$_affiliate = null)
	{
		EbayFindWsdlClass::__construct(array('paginationInput'=>$_paginationInput,'buyerPostalCode'=>$_buyerPostalCode,'affiliate'=>$_affiliate));
	}
	/**
	 * Set paginationInput
	 * @param PaginationInput paginationInput
	 * @return PaginationInput
	 */
	public function setPaginationInput($_paginationInput)
	{
		return ($this->paginationInput = $_paginationInput);
	}
	/**
	 * Get paginationInput
	 * @return EbayFindTypePaginationInput
	 */
	public function getPaginationInput()
	{
		return $this->paginationInput;
	}
	/**
	 * Set buyerPostalCode
	 * @param string buyerPostalCode
	 * @return string
	 */
	public function setBuyerPostalCode($_buyerPostalCode)
	{
		return ($this->buyerPostalCode = $_buyerPostalCode);
	}
	/**
	 * Get buyerPostalCode
	 * @return string
	 */
	public function getBuyerPostalCode()
	{
		return $this->buyerPostalCode;
	}
	/**
	 * Set affiliate
	 * @param Affiliate affiliate
	 * @return Affiliate
	 */
	public function setAffiliate($_affiliate)
	{
		return ($this->affiliate = $_affiliate);
	}
	/**
	 * Get affiliate
	 * @return EbayFindTypeAffiliate
	 */
	public function getAffiliate()
	{
		return $this->affiliate;
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