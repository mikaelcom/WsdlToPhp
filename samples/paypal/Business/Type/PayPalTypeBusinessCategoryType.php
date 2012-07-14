<?php
/**
 * Class file for PayPalTypeBusinessCategoryType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBusinessCategoryType
 * @date 14/07/2012
 */
class PayPalTypeBusinessCategoryType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Category-Unspecified'
	 * @return string 'Category-Unspecified'
	 */
	const VALUE_CATEGORY_UNSPECIFIED = 'Category-Unspecified';
	/**
	 * Constant for value 'Antiques'
	 * @return string 'Antiques'
	 */
	const VALUE_ANTIQUES = 'Antiques';
	/**
	 * Constant for value 'Arts'
	 * @return string 'Arts'
	 */
	const VALUE_ARTS = 'Arts';
	/**
	 * Constant for value 'Automotive'
	 * @return string 'Automotive'
	 */
	const VALUE_AUTOMOTIVE = 'Automotive';
	/**
	 * Constant for value 'Beauty'
	 * @return string 'Beauty'
	 */
	const VALUE_BEAUTY = 'Beauty';
	/**
	 * Constant for value 'Books'
	 * @return string 'Books'
	 */
	const VALUE_BOOKS = 'Books';
	/**
	 * Constant for value 'Business'
	 * @return string 'Business'
	 */
	const VALUE_BUSINESS = 'Business';
	/**
	 * Constant for value 'Cameras-and-Photography'
	 * @return string 'Cameras-and-Photography'
	 */
	const VALUE_CAMERAS_AND_PHOTOGRAPHY = 'Cameras-and-Photography';
	/**
	 * Constant for value 'Clothing'
	 * @return string 'Clothing'
	 */
	const VALUE_CLOTHING = 'Clothing';
	/**
	 * Constant for value 'Collectibles'
	 * @return string 'Collectibles'
	 */
	const VALUE_COLLECTIBLES = 'Collectibles';
	/**
	 * Constant for value 'Computer-Hardware-and-Software'
	 * @return string 'Computer-Hardware-and-Software'
	 */
	const VALUE_COMPUTER_HARDWARE_AND_SOFTWARE = 'Computer-Hardware-and-Software';
	/**
	 * Constant for value 'Culture-and-Religion'
	 * @return string 'Culture-and-Religion'
	 */
	const VALUE_CULTURE_AND_RELIGION = 'Culture-and-Religion';
	/**
	 * Constant for value 'Electronics-and-Telecom'
	 * @return string 'Electronics-and-Telecom'
	 */
	const VALUE_ELECTRONICS_AND_TELECOM = 'Electronics-and-Telecom';
	/**
	 * Constant for value 'Entertainment'
	 * @return string 'Entertainment'
	 */
	const VALUE_ENTERTAINMENT = 'Entertainment';
	/**
	 * Constant for value 'Entertainment-Memorabilia'
	 * @return string 'Entertainment-Memorabilia'
	 */
	const VALUE_ENTERTAINMENT_MEMORABILIA = 'Entertainment-Memorabilia';
	/**
	 * Constant for value 'Food-Drink-and-Nutrition'
	 * @return string 'Food-Drink-and-Nutrition'
	 */
	const VALUE_FOOD_DRINK_AND_NUTRITION = 'Food-Drink-and-Nutrition';
	/**
	 * Constant for value 'Gifts-and-Flowers'
	 * @return string 'Gifts-and-Flowers'
	 */
	const VALUE_GIFTS_AND_FLOWERS = 'Gifts-and-Flowers';
	/**
	 * Constant for value 'Hobbies-Toys-and-Games'
	 * @return string 'Hobbies-Toys-and-Games'
	 */
	const VALUE_HOBBIES_TOYS_AND_GAMES = 'Hobbies-Toys-and-Games';
	/**
	 * Constant for value 'Home-and-Garden'
	 * @return string 'Home-and-Garden'
	 */
	const VALUE_HOME_AND_GARDEN = 'Home-and-Garden';
	/**
	 * Constant for value 'Internet-and-Network-Services'
	 * @return string 'Internet-and-Network-Services'
	 */
	const VALUE_INTERNET_AND_NETWORK_SERVICES = 'Internet-and-Network-Services';
	/**
	 * Constant for value 'Media-and-Entertainment'
	 * @return string 'Media-and-Entertainment'
	 */
	const VALUE_MEDIA_AND_ENTERTAINMENT = 'Media-and-Entertainment';
	/**
	 * Constant for value 'Medical-and-Pharmaceutical'
	 * @return string 'Medical-and-Pharmaceutical'
	 */
	const VALUE_MEDICAL_AND_PHARMACEUTICAL = 'Medical-and-Pharmaceutical';
	/**
	 * Constant for value 'Money-Service-Businesses'
	 * @return string 'Money-Service-Businesses'
	 */
	const VALUE_MONEY_SERVICE_BUSINESSES = 'Money-Service-Businesses';
	/**
	 * Constant for value 'Non-Profit-Political-and-Religion'
	 * @return string 'Non-Profit-Political-and-Religion'
	 */
	const VALUE_NON_PROFIT_POLITICAL_AND_RELIGION = 'Non-Profit-Political-and-Religion';
	/**
	 * Constant for value 'Not-Elsewhere-Classified'
	 * @return string 'Not-Elsewhere-Classified'
	 */
	const VALUE_NOT_ELSEWHERE_CLASSIFIED = 'Not-Elsewhere-Classified';
	/**
	 * Constant for value 'Pets-and-Animals'
	 * @return string 'Pets-and-Animals'
	 */
	const VALUE_PETS_AND_ANIMALS = 'Pets-and-Animals';
	/**
	 * Constant for value 'Real-Estate'
	 * @return string 'Real-Estate'
	 */
	const VALUE_REAL_ESTATE = 'Real-Estate';
	/**
	 * Constant for value 'Services'
	 * @return string 'Services'
	 */
	const VALUE_SERVICES = 'Services';
	/**
	 * Constant for value 'Sports-and-Recreation'
	 * @return string 'Sports-and-Recreation'
	 */
	const VALUE_SPORTS_AND_RECREATION = 'Sports-and-Recreation';
	/**
	 * Constant for value 'Travel'
	 * @return string 'Travel'
	 */
	const VALUE_TRAVEL = 'Travel';
	/**
	 * Constant for value 'Other-Categories'
	 * @return string 'Other-Categories'
	 */
	const VALUE_OTHER_CATEGORIES = 'Other-Categories';
	/**
	 * Constructor
	 * @return PayPalTypeBusinessCategoryType
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
		return in_array($_value,array(self::VALUE_CATEGORY_UNSPECIFIED,self::VALUE_ANTIQUES,self::VALUE_ARTS,self::VALUE_AUTOMOTIVE,self::VALUE_BEAUTY,self::VALUE_BOOKS,self::VALUE_BUSINESS,self::VALUE_CAMERAS_AND_PHOTOGRAPHY,self::VALUE_CLOTHING,self::VALUE_COLLECTIBLES,self::VALUE_COMPUTER_HARDWARE_AND_SOFTWARE,self::VALUE_CULTURE_AND_RELIGION,self::VALUE_ELECTRONICS_AND_TELECOM,self::VALUE_ENTERTAINMENT,self::VALUE_ENTERTAINMENT_MEMORABILIA,self::VALUE_FOOD_DRINK_AND_NUTRITION,self::VALUE_GIFTS_AND_FLOWERS,self::VALUE_HOBBIES_TOYS_AND_GAMES,self::VALUE_HOME_AND_GARDEN,self::VALUE_INTERNET_AND_NETWORK_SERVICES,self::VALUE_MEDIA_AND_ENTERTAINMENT,self::VALUE_MEDICAL_AND_PHARMACEUTICAL,self::VALUE_MONEY_SERVICE_BUSINESSES,self::VALUE_NON_PROFIT_POLITICAL_AND_RELIGION,self::VALUE_NOT_ELSEWHERE_CLASSIFIED,self::VALUE_PETS_AND_ANIMALS,self::VALUE_REAL_ESTATE,self::VALUE_SERVICES,self::VALUE_SPORTS_AND_RECREATION,self::VALUE_TRAVEL,self::VALUE_OTHER_CATEGORIES));
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