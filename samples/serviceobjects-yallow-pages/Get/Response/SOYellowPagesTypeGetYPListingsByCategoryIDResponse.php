<?php
/**
 * Class file for SOYellowPagesTypeGetYPListingsByCategoryIDResponse
 * @date 08/07/2012
 */
/**
 * Class SOYellowPagesTypeGetYPListingsByCategoryIDResponse
 * @date 08/07/2012
 */
class SOYellowPagesTypeGetYPListingsByCategoryIDResponse extends SOYellowPagesWsdlClass
{
	/**
	 * The GetYPListingsByCategoryIDResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOYellowPagesTypeListings
	 */
	public $GetYPListingsByCategoryIDResult;
	/**
	 * Constructor
	 * @param SOYellowPagesTypeListings GetYPListingsByCategoryIDResult
	 * @return SOYellowPagesTypeGetYPListingsByCategoryIDResponse
	 */
	public function __construct($_GetYPListingsByCategoryIDResult = null)
	{
		parent::__construct(array('GetYPListingsByCategoryIDResult'=>$_GetYPListingsByCategoryIDResult));
	}
	/**
	 * Set GetYPListingsByCategoryIDResult
	 * @param Listings GetYPListingsByCategoryIDResult
	 * @return Listings
	 */
	public function setGetYPListingsByCategoryIDResult($_GetYPListingsByCategoryIDResult)
	{
		return ($this->GetYPListingsByCategoryIDResult = $_GetYPListingsByCategoryIDResult);
	}
	/**
	 * Get GetYPListingsByCategoryIDResult
	 * @return SOYellowPagesTypeListings
	 */
	public function getGetYPListingsByCategoryIDResult()
	{
		return $this->GetYPListingsByCategoryIDResult;
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