<?php
/**
 * Class file for SOYellowPagesTypeListings
 * @date 08/07/2012
 */
/**
 * Class SOYellowPagesTypeListings
 * @date 08/07/2012
 */
class SOYellowPagesTypeListings extends SOYellowPagesWsdlClass
{
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOYellowPagesTypeErr
	 */
	public $Error;
	/**
	 * The Listing
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var SOYellowPagesTypeListing
	 */
	public $Listing;
	/**
	 * Constructor
	 * @param SOYellowPagesTypeErr Error
	 * @param SOYellowPagesTypeListing Listing
	 * @return SOYellowPagesTypeListings
	 */
	public function __construct($_Error = null,$_Listing = null)
	{
		parent::__construct(array('Error'=>$_Error,'Listing'=>$_Listing));
	}
	/**
	 * Set Error
	 * @param Err Error
	 * @return Err
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOYellowPagesTypeErr
	 */
	public function getError()
	{
		return $this->Error;
	}
	/**
	 * Set Listing
	 * @param Listing Listing
	 * @return Listing
	 */
	public function setListing($_Listing)
	{
		return ($this->Listing = $_Listing);
	}
	/**
	 * Get Listing
	 * @return SOYellowPagesTypeListing
	 */
	public function getListing()
	{
		return $this->Listing;
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