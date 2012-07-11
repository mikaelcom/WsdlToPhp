<?php
/**
 * Class file for EbayTradingTypeGetCharitiesResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetCharitiesResponseType
 * Documentation : Contains information about charity nonprofit organizations that meet the criteria specified in the request.
 * @date 04/07/2012
 */
class EbayTradingTypeGetCharitiesResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The Charity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains information about charity nonprofit organizations that meet the criteria specified in the request. One Charity node is returned for each applicable nonprofit charity organization. The CharityID value is returned as an id attribute of this node. If no nonprofit charity organization is applicable, this node is not returned.
	 * @var EbayTradingTypeCharityInfoType
	 */
	public $Charity;
	/**
	 * Constructor
	 * @param EbayTradingTypeCharityInfoType Charity
	 * @return EbayTradingTypeGetCharitiesResponseType
	 */
	public function __construct($_Charity = null)
	{
		EbayTradingWsdlClass::__construct(array('Charity'=>$_Charity));
	}
	/**
	 * Set Charity
	 * @param CharityInfoType Charity
	 * @return CharityInfoType
	 */
	public function setCharity($_Charity)
	{
		return ($this->Charity = $_Charity);
	}
	/**
	 * Get Charity
	 * @return EbayTradingTypeCharityInfoType
	 */
	public function getCharity()
	{
		return $this->Charity;
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