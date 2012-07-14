<?php
/**
 * Class file for PayPalTypeProductCategoryType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeProductCategoryType
 * @date 14/07/2012
 */
class PayPalTypeProductCategoryType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Other'
	 * Meta informations :
	 * 	- documentation : Other
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constant for value 'Airlines'
	 * Meta informations :
	 * 	- documentation : Airlines
	 * @return string 'Airlines'
	 */
	const VALUE_AIRLINES = 'Airlines';
	/**
	 * Constant for value 'Antiques'
	 * Meta informations :
	 * 	- documentation : Antiques
	 * @return string 'Antiques'
	 */
	const VALUE_ANTIQUES = 'Antiques';
	/**
	 * Constant for value 'Art'
	 * Meta informations :
	 * 	- documentation : Art
	 * @return string 'Art'
	 */
	const VALUE_ART = 'Art';
	/**
	 * Constant for value 'Cameras_Photos'
	 * Meta informations :
	 * 	- documentation : Cameras & Photos
	 * @return string 'Cameras_Photos'
	 */
	const VALUE_CAMERAS_PHOTOS = 'Cameras_Photos';
	/**
	 * Constant for value 'Cars_Boats_Vehicles_Parts'
	 * Meta informations :
	 * 	- documentation : Cars, Boats, Vehicles & Parts
	 * @return string 'Cars_Boats_Vehicles_Parts'
	 */
	const VALUE_CARS_BOATS_VEHICLES_PARTS = 'Cars_Boats_Vehicles_Parts';
	/**
	 * Constant for value 'CellPhones_Telecom'
	 * Meta informations :
	 * 	- documentation : Cell Phones & Telecom
	 * @return string 'CellPhones_Telecom'
	 */
	const VALUE_CELLPHONES_TELECOM = 'CellPhones_Telecom';
	/**
	 * Constant for value 'Coins_PaperMoney'
	 * Meta informations :
	 * 	- documentation : Coins & Paper Money
	 * @return string 'Coins_PaperMoney'
	 */
	const VALUE_COINS_PAPERMONEY = 'Coins_PaperMoney';
	/**
	 * Constant for value 'Collectibles'
	 * Meta informations :
	 * 	- documentation : Collectibles
	 * @return string 'Collectibles'
	 */
	const VALUE_COLLECTIBLES = 'Collectibles';
	/**
	 * Constant for value 'Computers_Networking'
	 * Meta informations :
	 * 	- documentation : Computers & Networking
	 * @return string 'Computers_Networking'
	 */
	const VALUE_COMPUTERS_NETWORKING = 'Computers_Networking';
	/**
	 * Constant for value 'ConsumerElectronics'
	 * Meta informations :
	 * 	- documentation : Consumer Electronics
	 * @return string 'ConsumerElectronics'
	 */
	const VALUE_CONSUMERELECTRONICS = 'ConsumerElectronics';
	/**
	 * Constant for value 'Jewelry_Watches'
	 * Meta informations :
	 * 	- documentation : Jewelry & Watches
	 * @return string 'Jewelry_Watches'
	 */
	const VALUE_JEWELRY_WATCHES = 'Jewelry_Watches';
	/**
	 * Constant for value 'MusicalInstruments'
	 * Meta informations :
	 * 	- documentation : Musical Instruments
	 * @return string 'MusicalInstruments'
	 */
	const VALUE_MUSICALINSTRUMENTS = 'MusicalInstruments';
	/**
	 * Constant for value 'RealEstate'
	 * Meta informations :
	 * 	- documentation : Real Estate
	 * @return string 'RealEstate'
	 */
	const VALUE_REALESTATE = 'RealEstate';
	/**
	 * Constant for value 'SportsMemorabilia_Cards_FanShop'
	 * Meta informations :
	 * 	- documentation : Sports Memorabilia, Cards & Fan Shop
	 * @return string 'SportsMemorabilia_Cards_FanShop'
	 */
	const VALUE_SPORTSMEMORABILIA_CARDS_FANSHOP = 'SportsMemorabilia_Cards_FanShop';
	/**
	 * Constant for value 'Stamps'
	 * Meta informations :
	 * 	- documentation : Stamps
	 * @return string 'Stamps'
	 */
	const VALUE_STAMPS = 'Stamps';
	/**
	 * Constant for value 'Tickets'
	 * Meta informations :
	 * 	- documentation : Tickets
	 * @return string 'Tickets'
	 */
	const VALUE_TICKETS = 'Tickets';
	/**
	 * Constant for value 'Travels'
	 * Meta informations :
	 * 	- documentation : Travels
	 * @return string 'Travels'
	 */
	const VALUE_TRAVELS = 'Travels';
	/**
	 * Constant for value 'Gambling'
	 * Meta informations :
	 * 	- documentation : Gambling
	 * @return string 'Gambling'
	 */
	const VALUE_GAMBLING = 'Gambling';
	/**
	 * Constant for value 'Alcohol'
	 * Meta informations :
	 * 	- documentation : Alcohol
	 * @return string 'Alcohol'
	 */
	const VALUE_ALCOHOL = 'Alcohol';
	/**
	 * Constant for value 'Tobacco'
	 * Meta informations :
	 * 	- documentation : Tobacco
	 * @return string 'Tobacco'
	 */
	const VALUE_TOBACCO = 'Tobacco';
	/**
	 * Constant for value 'MoneyTransfer'
	 * Meta informations :
	 * 	- documentation : Money Transfer
	 * @return string 'MoneyTransfer'
	 */
	const VALUE_MONEYTRANSFER = 'MoneyTransfer';
	/**
	 * Constant for value 'Software'
	 * Meta informations :
	 * 	- documentation : Software
	 * @return string 'Software'
	 */
	const VALUE_SOFTWARE = 'Software';
	/**
	 * Constructor
	 * @return PayPalTypeProductCategoryType
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
		return in_array($_value,array(self::VALUE_OTHER,self::VALUE_AIRLINES,self::VALUE_ANTIQUES,self::VALUE_ART,self::VALUE_CAMERAS_PHOTOS,self::VALUE_CARS_BOATS_VEHICLES_PARTS,self::VALUE_CELLPHONES_TELECOM,self::VALUE_COINS_PAPERMONEY,self::VALUE_COLLECTIBLES,self::VALUE_COMPUTERS_NETWORKING,self::VALUE_CONSUMERELECTRONICS,self::VALUE_JEWELRY_WATCHES,self::VALUE_MUSICALINSTRUMENTS,self::VALUE_REALESTATE,self::VALUE_SPORTSMEMORABILIA_CARDS_FANSHOP,self::VALUE_STAMPS,self::VALUE_TICKETS,self::VALUE_TRAVELS,self::VALUE_GAMBLING,self::VALUE_ALCOHOL,self::VALUE_TOBACCO,self::VALUE_MONEYTRANSFER,self::VALUE_SOFTWARE));
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