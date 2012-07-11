<?php
/**
 * Class file for EbayTradingTypeItemsCanceledEventType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeItemsCanceledEventType
 * Documentation : This event is not functional.
 * @date 04/07/2012
 */
class EbayTradingTypeItemsCanceledEventType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The CanceledItemIDArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This event is not functional. Array of items ended.
	 * @var EbayTradingTypeItemIDArrayType
	 */
	public $CanceledItemIDArray;
	/**
	 * The EligibleForRelist
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This event is not functional. Indicates to seller whether the items ended are eligible for Relist or not.
	 * @var boolean
	 */
	public $EligibleForRelist;
	/**
	 * The SellerID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This event is not functional. Seller numeric ID.
	 * @var EbayTradingTypeUserIDType
	 */
	public $SellerID;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDArrayType CanceledItemIDArray
	 * @param boolean EligibleForRelist
	 * @param EbayTradingTypeUserIDType SellerID
	 * @return EbayTradingTypeItemsCanceledEventType
	 */
	public function __construct($_CanceledItemIDArray = null,$_EligibleForRelist = null,$_SellerID = null)
	{
		EbayTradingWsdlClass::__construct(array('CanceledItemIDArray'=>$_CanceledItemIDArray,'EligibleForRelist'=>$_EligibleForRelist,'SellerID'=>$_SellerID));
	}
	/**
	 * Set CanceledItemIDArray
	 * @param ItemIDArrayType CanceledItemIDArray
	 * @return ItemIDArrayType
	 */
	public function setCanceledItemIDArray($_CanceledItemIDArray)
	{
		return ($this->CanceledItemIDArray = $_CanceledItemIDArray);
	}
	/**
	 * Get CanceledItemIDArray
	 * @return EbayTradingTypeItemIDArrayType
	 */
	public function getCanceledItemIDArray()
	{
		return $this->CanceledItemIDArray;
	}
	/**
	 * Set EligibleForRelist
	 * @param boolean EligibleForRelist
	 * @return boolean
	 */
	public function setEligibleForRelist($_EligibleForRelist)
	{
		return ($this->EligibleForRelist = $_EligibleForRelist);
	}
	/**
	 * Get EligibleForRelist
	 * @return boolean
	 */
	public function getEligibleForRelist()
	{
		return $this->EligibleForRelist;
	}
	/**
	 * Set SellerID
	 * @param UserIDType SellerID
	 * @return UserIDType
	 */
	public function setSellerID($_SellerID)
	{
		return ($this->SellerID = EbayTradingTypeUserIDType::valueIsValid($_SellerID)?$_SellerID:null);
	}
	/**
	 * Get SellerID
	 * @return EbayTradingTypeUserIDType
	 */
	public function getSellerID()
	{
		return $this->SellerID;
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