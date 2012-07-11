<?php
/**
 * Class file for AmazonAlexaTypeCategoryListingsType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeCategoryListingsType
 * @date 10/07/2012
 */
class AmazonAlexaTypeCategoryListingsType extends AmazonAlexaWsdlClass
{
	/**
	 * The RecursiveCount
	 * @var token
	 */
	public $RecursiveCount;
	/**
	 * The Count
	 * @var token
	 */
	public $Count;
	/**
	 * The Listings
	 * @var AmazonAlexaTypeListingsType
	 */
	public $Listings;
	/**
	 * The ReviewersRaveListings
	 * @var AmazonAlexaTypeListingsType
	 */
	public $ReviewersRaveListings;
	/**
	 * Constructor
	 * @param token RecursiveCount
	 * @param token Count
	 * @param AmazonAlexaTypeListingsType Listings
	 * @param AmazonAlexaTypeListingsType ReviewersRaveListings
	 * @return AmazonAlexaTypeCategoryListingsType
	 */
	public function __construct($_RecursiveCount = null,$_Count = null,$_Listings = null,$_ReviewersRaveListings = null)
	{
		parent::__construct(array('RecursiveCount'=>$_RecursiveCount,'Count'=>$_Count,'Listings'=>$_Listings,'ReviewersRaveListings'=>$_ReviewersRaveListings));
	}
	/**
	 * Set RecursiveCount
	 * @param token RecursiveCount
	 * @return token
	 */
	public function setRecursiveCount($_RecursiveCount)
	{
		return ($this->RecursiveCount = $_RecursiveCount);
	}
	/**
	 * Get RecursiveCount
	 * @return token
	 */
	public function getRecursiveCount()
	{
		return $this->RecursiveCount;
	}
	/**
	 * Set Count
	 * @param token Count
	 * @return token
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return token
	 */
	public function getCount()
	{
		return $this->Count;
	}
	/**
	 * Set Listings
	 * @param ListingsType Listings
	 * @return ListingsType
	 */
	public function setListings($_Listings)
	{
		return ($this->Listings = $_Listings);
	}
	/**
	 * Get Listings
	 * @return AmazonAlexaTypeListingsType
	 */
	public function getListings()
	{
		return $this->Listings;
	}
	/**
	 * Set ReviewersRaveListings
	 * @param ListingsType ReviewersRaveListings
	 * @return ListingsType
	 */
	public function setReviewersRaveListings($_ReviewersRaveListings)
	{
		return ($this->ReviewersRaveListings = $_ReviewersRaveListings);
	}
	/**
	 * Get ReviewersRaveListings
	 * @return AmazonAlexaTypeListingsType
	 */
	public function getReviewersRaveListings()
	{
		return $this->ReviewersRaveListings;
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