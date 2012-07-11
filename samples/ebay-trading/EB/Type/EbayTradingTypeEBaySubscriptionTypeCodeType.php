<?php
/**
 * Class file for EbayTradingTypeEBaySubscriptionTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeEBaySubscriptionTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeEBaySubscriptionTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'SellerAssistant'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'SellerAssistant'
	 */
	const VALUE_SELLERASSISTANT = 'SellerAssistant';
	/**
	 * Constant for value 'SellerAssistantPro'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'SellerAssistantPro'
	 */
	const VALUE_SELLERASSISTANTPRO = 'SellerAssistantPro';
	/**
	 * Constant for value 'EBayStoreBasic'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'EBayStoreBasic'
	 */
	const VALUE_EBAYSTOREBASIC = 'EBayStoreBasic';
	/**
	 * Constant for value 'EBayStoreFeatured'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'EBayStoreFeatured'
	 */
	const VALUE_EBAYSTOREFEATURED = 'EBayStoreFeatured';
	/**
	 * Constant for value 'EBayStoreAnchor'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'EBayStoreAnchor'
	 */
	const VALUE_EBAYSTOREANCHOR = 'EBayStoreAnchor';
	/**
	 * Constant for value 'SellingManager'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'SellingManager'
	 */
	const VALUE_SELLINGMANAGER = 'SellingManager';
	/**
	 * Constant for value 'SellingManagerPro'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'SellingManagerPro'
	 */
	const VALUE_SELLINGMANAGERPRO = 'SellingManagerPro';
	/**
	 * Constant for value 'PictureManagerLevel1'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'PictureManagerLevel1'
	 */
	const VALUE_PICTUREMANAGERLEVEL1 = 'PictureManagerLevel1';
	/**
	 * Constant for value 'PictureManagerLevel2'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'PictureManagerLevel2'
	 */
	const VALUE_PICTUREMANAGERLEVEL2 = 'PictureManagerLevel2';
	/**
	 * Constant for value 'PictureManagerLevel3'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'PictureManagerLevel3'
	 */
	const VALUE_PICTUREMANAGERLEVEL3 = 'PictureManagerLevel3';
	/**
	 * Constant for value 'PictureManagerLevel4'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'PictureManagerLevel4'
	 */
	const VALUE_PICTUREMANAGERLEVEL4 = 'PictureManagerLevel4';
	/**
	 * Constant for value 'PictureManagerLevel5'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'PictureManagerLevel5'
	 */
	const VALUE_PICTUREMANAGERLEVEL5 = 'PictureManagerLevel5';
	/**
	 * Constant for value 'PictureManagerLevel6'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'PictureManagerLevel6'
	 */
	const VALUE_PICTUREMANAGERLEVEL6 = 'PictureManagerLevel6';
	/**
	 * Constant for value 'PictureManagerLevel7'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'PictureManagerLevel7'
	 */
	const VALUE_PICTUREMANAGERLEVEL7 = 'PictureManagerLevel7';
	/**
	 * Constant for value 'SellerReportsBasic'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'SellerReportsBasic'
	 */
	const VALUE_SELLERREPORTSBASIC = 'SellerReportsBasic';
	/**
	 * Constant for value 'SellerReportsPlus'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'SellerReportsPlus'
	 */
	const VALUE_SELLERREPORTSPLUS = 'SellerReportsPlus';
	/**
	 * Constant for value 'FileExchange'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'FileExchange'
	 */
	const VALUE_FILEEXCHANGE = 'FileExchange';
	/**
	 * Constant for value 'LocalMarketSpecialty'
	 * Meta informations :
	 * 	- documentation : Allowed categories are Motorcycles, Powersports, and Other Vehicles.
	 * @return string 'LocalMarketSpecialty'
	 */
	const VALUE_LOCALMARKETSPECIALTY = 'LocalMarketSpecialty';
	/**
	 * Constant for value 'LocalMarketRegular'
	 * Meta informations :
	 * 	- documentation : In addition to the categories allowed by LocalMarketSpecialty, allows Passenger Vehicles. Includes five sub-types. See LocalMarketRegularSubscriptionDefinitionType for details.
	 * @return string 'LocalMarketRegular'
	 */
	const VALUE_LOCALMARKETREGULAR = 'LocalMarketRegular';
	/**
	 * Constant for value 'LocalMarketPremium'
	 * Meta informations :
	 * 	- documentation : Allows same categories as LocalMarketRegular.
	 * @return string 'LocalMarketPremium'
	 */
	const VALUE_LOCALMARKETPREMIUM = 'LocalMarketPremium';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeEBaySubscriptionTypeCodeType
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
		return in_array($_value,array(self::VALUE_SELLERASSISTANT,self::VALUE_SELLERASSISTANTPRO,self::VALUE_EBAYSTOREBASIC,self::VALUE_EBAYSTOREFEATURED,self::VALUE_EBAYSTOREANCHOR,self::VALUE_SELLINGMANAGER,self::VALUE_SELLINGMANAGERPRO,self::VALUE_PICTUREMANAGERLEVEL1,self::VALUE_PICTUREMANAGERLEVEL2,self::VALUE_PICTUREMANAGERLEVEL3,self::VALUE_PICTUREMANAGERLEVEL4,self::VALUE_PICTUREMANAGERLEVEL5,self::VALUE_PICTUREMANAGERLEVEL6,self::VALUE_PICTUREMANAGERLEVEL7,self::VALUE_SELLERREPORTSBASIC,self::VALUE_SELLERREPORTSPLUS,self::VALUE_FILEEXCHANGE,self::VALUE_LOCALMARKETSPECIALTY,self::VALUE_LOCALMARKETREGULAR,self::VALUE_LOCALMARKETPREMIUM,self::VALUE_CUSTOMCODE));
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