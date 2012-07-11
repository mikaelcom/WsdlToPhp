<?php
/**
 * Class file for EbayTradingTypeGetAllBiddersModeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetAllBiddersModeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeGetAllBiddersModeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ViewAll'
	 * Meta informations :
	 * 	- documentation : (in) Returns all bidders for an ended or still-active listing. It may be used by any user.
	 * @return string 'ViewAll'
	 */
	const VALUE_VIEWALL = 'ViewAll';
	/**
	 * Constant for value 'EndedListing'
	 * Meta informations :
	 * 	- documentation : (in) Returns all non-winning bidders for ended listings only. It may be used only by a seller.
	 * @return string 'EndedListing'
	 */
	const VALUE_ENDEDLISTING = 'EndedListing';
	/**
	 * Constant for value 'SecondChanceEligibleEndedListing'
	 * Meta informations :
	 * 	- documentation : (in) Returns all non-winning bidders for an ended listing who have not yet received a Second Chance Offer and noted interest in receiving a Second Chance Offer. It may be used only by a seller.
	 * @return string 'SecondChanceEligibleEndedListing'
	 */
	const VALUE_SECONDCHANCEELIGIBLEENDEDLISTING = 'SecondChanceEligibleEndedListing';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeGetAllBiddersModeCodeType
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_VIEWALL,self::VALUE_ENDEDLISTING,self::VALUE_SECONDCHANCEELIGIBLEENDEDLISTING,self::VALUE_CUSTOMCODE));
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