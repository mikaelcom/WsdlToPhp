<?php
/**
 * Class file for OvhTypeTelephonyLineSwitchOldOfferStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyLineSwitchOldOfferStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyLineSwitchOldOfferStruct extends OvhWsdlClass
{
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The offers
	 * @var OvhTypeMyArrayOfTelephonyLineSwitchPossibilityPriceStructType
	 */
	public $offers;
	/**
	 * Constructor
	 * @param string number
	 * @param OvhTypeMyArrayOfTelephonyLineSwitchPossibilityPriceStructType offers
	 * @return OvhTypeTelephonyLineSwitchOldOfferStruct
	 */
	public function __construct($_number = null,$_offers = null)
	{
		parent::__construct(array('number'=>$_number,'offers'=>new OvhTypeMyArrayOfTelephonyLineSwitchPossibilityPriceStructType($_offers)));
	}
	/**
	 * Set number
	 * @param string number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
	}
	/**
	 * Set offers
	 * @param MyArrayOfTelephonyLineSwitchPossibilityPriceStructType offers
	 * @return MyArrayOfTelephonyLineSwitchPossibilityPriceStructType
	 */
	public function setOffers($_offers)
	{
		return ($this->offers = $_offers);
	}
	/**
	 * Get offers
	 * @return OvhTypeMyArrayOfTelephonyLineSwitchPossibilityPriceStructType
	 */
	public function getOffers()
	{
		return $this->offers;
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