<?php
/**
 * Class file for EbayTradingTypeShippingPackageCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeShippingPackageCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeShippingPackageCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : None
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Letter'
	 * Meta informations :
	 * 	- documentation : Letter
	 * @return string 'Letter'
	 */
	const VALUE_LETTER = 'Letter';
	/**
	 * Constant for value 'LargeEnvelope'
	 * Meta informations :
	 * 	- documentation : LargeEnvelope
	 * @return string 'LargeEnvelope'
	 */
	const VALUE_LARGEENVELOPE = 'LargeEnvelope';
	/**
	 * Constant for value 'USPSLargePack'
	 * Meta informations :
	 * 	- documentation : USPS Large Package/Oversize 1
	 * @return string 'USPSLargePack'
	 */
	const VALUE_USPSLARGEPACK = 'USPSLargePack';
	/**
	 * Constant for value 'VeryLargePack'
	 * Meta informations :
	 * 	- documentation : Very Large Package/Oversize 2
	 * @return string 'VeryLargePack'
	 */
	const VALUE_VERYLARGEPACK = 'VeryLargePack';
	/**
	 * Constant for value 'ExtraLargePack'
	 * Meta informations :
	 * 	- documentation : Extra Large Package/Oversize 3
	 * @return string 'ExtraLargePack'
	 */
	const VALUE_EXTRALARGEPACK = 'ExtraLargePack';
	/**
	 * Constant for value 'UPSLetter'
	 * Meta informations :
	 * 	- documentation : UPS Letter
	 * @return string 'UPSLetter'
	 */
	const VALUE_UPSLETTER = 'UPSLetter';
	/**
	 * Constant for value 'USPSFlatRateEnvelope'
	 * Meta informations :
	 * 	- documentation : USPS Flat Rate Envelope
	 * @return string 'USPSFlatRateEnvelope'
	 */
	const VALUE_USPSFLATRATEENVELOPE = 'USPSFlatRateEnvelope';
	/**
	 * Constant for value 'PackageThickEnvelope'
	 * Meta informations :
	 * 	- documentation : Package/thick envelope
	 * @return string 'PackageThickEnvelope'
	 */
	const VALUE_PACKAGETHICKENVELOPE = 'PackageThickEnvelope';
	/**
	 * Constant for value 'Roll'
	 * Meta informations :
	 * 	- documentation : Roll
	 * @return string 'Roll'
	 */
	const VALUE_ROLL = 'Roll';
	/**
	 * Constant for value 'Europallet'
	 * Meta informations :
	 * 	- documentation : Europallet
	 * @return string 'Europallet'
	 */
	const VALUE_EUROPALLET = 'Europallet';
	/**
	 * Constant for value 'OneWayPallet'
	 * Meta informations :
	 * 	- documentation : Onewaypallet
	 * @return string 'OneWayPallet'
	 */
	const VALUE_ONEWAYPALLET = 'OneWayPallet';
	/**
	 * Constant for value 'BulkyGoods'
	 * Meta informations :
	 * 	- documentation : Bulky goods
	 * @return string 'BulkyGoods'
	 */
	const VALUE_BULKYGOODS = 'BulkyGoods';
	/**
	 * Constant for value 'Furniture'
	 * Meta informations :
	 * 	- documentation : Furniture
	 * @return string 'Furniture'
	 */
	const VALUE_FURNITURE = 'Furniture';
	/**
	 * Constant for value 'Cars'
	 * Meta informations :
	 * 	- documentation : Cars
	 * @return string 'Cars'
	 */
	const VALUE_CARS = 'Cars';
	/**
	 * Constant for value 'Motorbikes'
	 * Meta informations :
	 * 	- documentation : Motorbikes
	 * @return string 'Motorbikes'
	 */
	const VALUE_MOTORBIKES = 'Motorbikes';
	/**
	 * Constant for value 'Caravan'
	 * Meta informations :
	 * 	- documentation : Caravan
	 * @return string 'Caravan'
	 */
	const VALUE_CARAVAN = 'Caravan';
	/**
	 * Constant for value 'IndustryVehicles'
	 * Meta informations :
	 * 	- documentation : Industry vehicles
	 * @return string 'IndustryVehicles'
	 */
	const VALUE_INDUSTRYVEHICLES = 'IndustryVehicles';
	/**
	 * Constant for value 'ParcelOrPaddedEnvelope'
	 * Meta informations :
	 * 	- documentation : Parcel or padded Envelope
	 * @return string 'ParcelOrPaddedEnvelope'
	 */
	const VALUE_PARCELORPADDEDENVELOPE = 'ParcelOrPaddedEnvelope';
	/**
	 * Constant for value 'SmallCanadaPostBox'
	 * Meta informations :
	 * 	- documentation : Small Canada Post Box
	 * @return string 'SmallCanadaPostBox'
	 */
	const VALUE_SMALLCANADAPOSTBOX = 'SmallCanadaPostBox';
	/**
	 * Constant for value 'MediumCanadaPostBox'
	 * Meta informations :
	 * 	- documentation : Medium Canada Post Box
	 * @return string 'MediumCanadaPostBox'
	 */
	const VALUE_MEDIUMCANADAPOSTBOX = 'MediumCanadaPostBox';
	/**
	 * Constant for value 'LargeCanadaPostBox'
	 * Meta informations :
	 * 	- documentation : Large Canada Post Box
	 * @return string 'LargeCanadaPostBox'
	 */
	const VALUE_LARGECANADAPOSTBOX = 'LargeCanadaPostBox';
	/**
	 * Constant for value 'SmallCanadaPostBubbleMailer'
	 * Meta informations :
	 * 	- documentation : Small Canada Post Bubble Mailer
	 * @return string 'SmallCanadaPostBubbleMailer'
	 */
	const VALUE_SMALLCANADAPOSTBUBBLEMAILER = 'SmallCanadaPostBubbleMailer';
	/**
	 * Constant for value 'MediumCanadaPostBubbleMailer'
	 * Meta informations :
	 * 	- documentation : Medium Canada Post Bubble Mailer
	 * @return string 'MediumCanadaPostBubbleMailer'
	 */
	const VALUE_MEDIUMCANADAPOSTBUBBLEMAILER = 'MediumCanadaPostBubbleMailer';
	/**
	 * Constant for value 'LargeCanadaPostBubbleMailer'
	 * Meta informations :
	 * 	- documentation : Large Canada Post Bubble Mailer
	 * @return string 'LargeCanadaPostBubbleMailer'
	 */
	const VALUE_LARGECANADAPOSTBUBBLEMAILER = 'LargeCanadaPostBubbleMailer';
	/**
	 * Constant for value 'PaddedBags'
	 * Meta informations :
	 * 	- documentation : Padded Bags
	 * @return string 'PaddedBags'
	 */
	const VALUE_PADDEDBAGS = 'PaddedBags';
	/**
	 * Constant for value 'ToughBags'
	 * Meta informations :
	 * 	- documentation : Tough Bags
	 * @return string 'ToughBags'
	 */
	const VALUE_TOUGHBAGS = 'ToughBags';
	/**
	 * Constant for value 'ExpandableToughBags'
	 * Meta informations :
	 * 	- documentation : Expandable Tough Bags
	 * @return string 'ExpandableToughBags'
	 */
	const VALUE_EXPANDABLETOUGHBAGS = 'ExpandableToughBags';
	/**
	 * Constant for value 'MailingBoxes'
	 * Meta informations :
	 * 	- documentation : Mailing Boxes
	 * @return string 'MailingBoxes'
	 */
	const VALUE_MAILINGBOXES = 'MailingBoxes';
	/**
	 * Constant for value 'Winepak'
	 * Meta informations :
	 * 	- documentation : Winepak
	 * @return string 'Winepak'
	 */
	const VALUE_WINEPAK = 'Winepak';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeShippingPackageCodeType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_LETTER,self::VALUE_LARGEENVELOPE,self::VALUE_USPSLARGEPACK,self::VALUE_VERYLARGEPACK,self::VALUE_EXTRALARGEPACK,self::VALUE_UPSLETTER,self::VALUE_USPSFLATRATEENVELOPE,self::VALUE_PACKAGETHICKENVELOPE,self::VALUE_ROLL,self::VALUE_EUROPALLET,self::VALUE_ONEWAYPALLET,self::VALUE_BULKYGOODS,self::VALUE_FURNITURE,self::VALUE_CARS,self::VALUE_MOTORBIKES,self::VALUE_CARAVAN,self::VALUE_INDUSTRYVEHICLES,self::VALUE_PARCELORPADDEDENVELOPE,self::VALUE_SMALLCANADAPOSTBOX,self::VALUE_MEDIUMCANADAPOSTBOX,self::VALUE_LARGECANADAPOSTBOX,self::VALUE_SMALLCANADAPOSTBUBBLEMAILER,self::VALUE_MEDIUMCANADAPOSTBUBBLEMAILER,self::VALUE_LARGECANADAPOSTBUBBLEMAILER,self::VALUE_PADDEDBAGS,self::VALUE_TOUGHBAGS,self::VALUE_EXPANDABLETOUGHBAGS,self::VALUE_MAILINGBOXES,self::VALUE_WINEPAK,self::VALUE_CUSTOMCODE));
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