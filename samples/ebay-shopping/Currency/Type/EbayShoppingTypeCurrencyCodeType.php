<?php
/**
 * Class file for EbayShoppingTypeCurrencyCodeType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeCurrencyCodeType
 * @date 05/07/2012
 */
class EbayShoppingTypeCurrencyCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'AFA'
	 * @return string 'AFA'
	 */
	const VALUE_AFA = 'AFA';
	/**
	 * Constant for value 'ALL'
	 * @return string 'ALL'
	 */
	const VALUE_ALL = 'ALL';
	/**
	 * Constant for value 'DZD'
	 * @return string 'DZD'
	 */
	const VALUE_DZD = 'DZD';
	/**
	 * Constant for value 'ADP'
	 * @return string 'ADP'
	 */
	const VALUE_ADP = 'ADP';
	/**
	 * Constant for value 'AOA'
	 * @return string 'AOA'
	 */
	const VALUE_AOA = 'AOA';
	/**
	 * Constant for value 'ARS'
	 * @return string 'ARS'
	 */
	const VALUE_ARS = 'ARS';
	/**
	 * Constant for value 'AMD'
	 * @return string 'AMD'
	 */
	const VALUE_AMD = 'AMD';
	/**
	 * Constant for value 'AWG'
	 * @return string 'AWG'
	 */
	const VALUE_AWG = 'AWG';
	/**
	 * Constant for value 'AZM'
	 * @return string 'AZM'
	 */
	const VALUE_AZM = 'AZM';
	/**
	 * Constant for value 'BSD'
	 * @return string 'BSD'
	 */
	const VALUE_BSD = 'BSD';
	/**
	 * Constant for value 'BHD'
	 * @return string 'BHD'
	 */
	const VALUE_BHD = 'BHD';
	/**
	 * Constant for value 'BDT'
	 * @return string 'BDT'
	 */
	const VALUE_BDT = 'BDT';
	/**
	 * Constant for value 'BBD'
	 * @return string 'BBD'
	 */
	const VALUE_BBD = 'BBD';
	/**
	 * Constant for value 'BYR'
	 * @return string 'BYR'
	 */
	const VALUE_BYR = 'BYR';
	/**
	 * Constant for value 'BZD'
	 * @return string 'BZD'
	 */
	const VALUE_BZD = 'BZD';
	/**
	 * Constant for value 'BMD'
	 * @return string 'BMD'
	 */
	const VALUE_BMD = 'BMD';
	/**
	 * Constant for value 'BTN'
	 * @return string 'BTN'
	 */
	const VALUE_BTN = 'BTN';
	/**
	 * Constant for value 'INR'
	 * Meta informations :
	 * 	- documentation : Indian Rupee. Applicable to listings on the India site (site ID 203).
	 * @return string 'INR'
	 */
	const VALUE_INR = 'INR';
	/**
	 * Constant for value 'BOV'
	 * @return string 'BOV'
	 */
	const VALUE_BOV = 'BOV';
	/**
	 * Constant for value 'BOB'
	 * @return string 'BOB'
	 */
	const VALUE_BOB = 'BOB';
	/**
	 * Constant for value 'BAM'
	 * @return string 'BAM'
	 */
	const VALUE_BAM = 'BAM';
	/**
	 * Constant for value 'BWP'
	 * @return string 'BWP'
	 */
	const VALUE_BWP = 'BWP';
	/**
	 * Constant for value 'BRL'
	 * @return string 'BRL'
	 */
	const VALUE_BRL = 'BRL';
	/**
	 * Constant for value 'BND'
	 * @return string 'BND'
	 */
	const VALUE_BND = 'BND';
	/**
	 * Constant for value 'BGL'
	 * @return string 'BGL'
	 */
	const VALUE_BGL = 'BGL';
	/**
	 * Constant for value 'BGN'
	 * @return string 'BGN'
	 */
	const VALUE_BGN = 'BGN';
	/**
	 * Constant for value 'BIF'
	 * @return string 'BIF'
	 */
	const VALUE_BIF = 'BIF';
	/**
	 * Constant for value 'KHR'
	 * @return string 'KHR'
	 */
	const VALUE_KHR = 'KHR';
	/**
	 * Constant for value 'CAD'
	 * Meta informations :
	 * 	- documentation : Canadian Dollar. Applicable to listings on the Canada site (site ID 2) (Items listed on the Canada site can also specify USD.)
	 * @return string 'CAD'
	 */
	const VALUE_CAD = 'CAD';
	/**
	 * Constant for value 'CVE'
	 * @return string 'CVE'
	 */
	const VALUE_CVE = 'CVE';
	/**
	 * Constant for value 'KYD'
	 * @return string 'KYD'
	 */
	const VALUE_KYD = 'KYD';
	/**
	 * Constant for value 'XAF'
	 * @return string 'XAF'
	 */
	const VALUE_XAF = 'XAF';
	/**
	 * Constant for value 'CLF'
	 * @return string 'CLF'
	 */
	const VALUE_CLF = 'CLF';
	/**
	 * Constant for value 'CLP'
	 * @return string 'CLP'
	 */
	const VALUE_CLP = 'CLP';
	/**
	 * Constant for value 'CNY'
	 * Meta informations :
	 * 	- documentation : Chinese Yuan Renminbi.
	 * @return string 'CNY'
	 */
	const VALUE_CNY = 'CNY';
	/**
	 * Constant for value 'COP'
	 * @return string 'COP'
	 */
	const VALUE_COP = 'COP';
	/**
	 * Constant for value 'KMF'
	 * @return string 'KMF'
	 */
	const VALUE_KMF = 'KMF';
	/**
	 * Constant for value 'CDF'
	 * @return string 'CDF'
	 */
	const VALUE_CDF = 'CDF';
	/**
	 * Constant for value 'CRC'
	 * @return string 'CRC'
	 */
	const VALUE_CRC = 'CRC';
	/**
	 * Constant for value 'HRK'
	 * @return string 'HRK'
	 */
	const VALUE_HRK = 'HRK';
	/**
	 * Constant for value 'CUP'
	 * @return string 'CUP'
	 */
	const VALUE_CUP = 'CUP';
	/**
	 * Constant for value 'CYP'
	 * @return string 'CYP'
	 */
	const VALUE_CYP = 'CYP';
	/**
	 * Constant for value 'CZK'
	 * @return string 'CZK'
	 */
	const VALUE_CZK = 'CZK';
	/**
	 * Constant for value 'DKK'
	 * @return string 'DKK'
	 */
	const VALUE_DKK = 'DKK';
	/**
	 * Constant for value 'DJF'
	 * @return string 'DJF'
	 */
	const VALUE_DJF = 'DJF';
	/**
	 * Constant for value 'DOP'
	 * @return string 'DOP'
	 */
	const VALUE_DOP = 'DOP';
	/**
	 * Constant for value 'TPE'
	 * @return string 'TPE'
	 */
	const VALUE_TPE = 'TPE';
	/**
	 * Constant for value 'ECV'
	 * @return string 'ECV'
	 */
	const VALUE_ECV = 'ECV';
	/**
	 * Constant for value 'ECS'
	 * @return string 'ECS'
	 */
	const VALUE_ECS = 'ECS';
	/**
	 * Constant for value 'EGP'
	 * @return string 'EGP'
	 */
	const VALUE_EGP = 'EGP';
	/**
	 * Constant for value 'SVC'
	 * @return string 'SVC'
	 */
	const VALUE_SVC = 'SVC';
	/**
	 * Constant for value 'ERN'
	 * @return string 'ERN'
	 */
	const VALUE_ERN = 'ERN';
	/**
	 * Constant for value 'EEK'
	 * @return string 'EEK'
	 */
	const VALUE_EEK = 'EEK';
	/**
	 * Constant for value 'ETB'
	 * @return string 'ETB'
	 */
	const VALUE_ETB = 'ETB';
	/**
	 * Constant for value 'FKP'
	 * @return string 'FKP'
	 */
	const VALUE_FKP = 'FKP';
	/**
	 * Constant for value 'FJD'
	 * @return string 'FJD'
	 */
	const VALUE_FJD = 'FJD';
	/**
	 * Constant for value 'GMD'
	 * @return string 'GMD'
	 */
	const VALUE_GMD = 'GMD';
	/**
	 * Constant for value 'GEL'
	 * @return string 'GEL'
	 */
	const VALUE_GEL = 'GEL';
	/**
	 * Constant for value 'GHC'
	 * @return string 'GHC'
	 */
	const VALUE_GHC = 'GHC';
	/**
	 * Constant for value 'GIP'
	 * @return string 'GIP'
	 */
	const VALUE_GIP = 'GIP';
	/**
	 * Constant for value 'GTQ'
	 * @return string 'GTQ'
	 */
	const VALUE_GTQ = 'GTQ';
	/**
	 * Constant for value 'GNF'
	 * @return string 'GNF'
	 */
	const VALUE_GNF = 'GNF';
	/**
	 * Constant for value 'GWP'
	 * @return string 'GWP'
	 */
	const VALUE_GWP = 'GWP';
	/**
	 * Constant for value 'GYD'
	 * @return string 'GYD'
	 */
	const VALUE_GYD = 'GYD';
	/**
	 * Constant for value 'HTG'
	 * @return string 'HTG'
	 */
	const VALUE_HTG = 'HTG';
	/**
	 * Constant for value 'HNL'
	 * @return string 'HNL'
	 */
	const VALUE_HNL = 'HNL';
	/**
	 * Constant for value 'HKD'
	 * Meta informations :
	 * 	- documentation : Hong Kong Dollar. Applicable to listings on the Hong Kong site (site ID 201).
	 * @return string 'HKD'
	 */
	const VALUE_HKD = 'HKD';
	/**
	 * Constant for value 'HUF'
	 * @return string 'HUF'
	 */
	const VALUE_HUF = 'HUF';
	/**
	 * Constant for value 'ISK'
	 * @return string 'ISK'
	 */
	const VALUE_ISK = 'ISK';
	/**
	 * Constant for value 'IDR'
	 * @return string 'IDR'
	 */
	const VALUE_IDR = 'IDR';
	/**
	 * Constant for value 'IRR'
	 * @return string 'IRR'
	 */
	const VALUE_IRR = 'IRR';
	/**
	 * Constant for value 'IQD'
	 * @return string 'IQD'
	 */
	const VALUE_IQD = 'IQD';
	/**
	 * Constant for value 'ILS'
	 * @return string 'ILS'
	 */
	const VALUE_ILS = 'ILS';
	/**
	 * Constant for value 'JMD'
	 * @return string 'JMD'
	 */
	const VALUE_JMD = 'JMD';
	/**
	 * Constant for value 'JPY'
	 * @return string 'JPY'
	 */
	const VALUE_JPY = 'JPY';
	/**
	 * Constant for value 'JOD'
	 * @return string 'JOD'
	 */
	const VALUE_JOD = 'JOD';
	/**
	 * Constant for value 'KZT'
	 * @return string 'KZT'
	 */
	const VALUE_KZT = 'KZT';
	/**
	 * Constant for value 'KES'
	 * @return string 'KES'
	 */
	const VALUE_KES = 'KES';
	/**
	 * Constant for value 'AUD'
	 * Meta informations :
	 * 	- documentation : Australian Dollar. Applicable to listings on the Australia site (site ID 15).
	 * @return string 'AUD'
	 */
	const VALUE_AUD = 'AUD';
	/**
	 * Constant for value 'KPW'
	 * @return string 'KPW'
	 */
	const VALUE_KPW = 'KPW';
	/**
	 * Constant for value 'KRW'
	 * @return string 'KRW'
	 */
	const VALUE_KRW = 'KRW';
	/**
	 * Constant for value 'KWD'
	 * @return string 'KWD'
	 */
	const VALUE_KWD = 'KWD';
	/**
	 * Constant for value 'KGS'
	 * @return string 'KGS'
	 */
	const VALUE_KGS = 'KGS';
	/**
	 * Constant for value 'LAK'
	 * @return string 'LAK'
	 */
	const VALUE_LAK = 'LAK';
	/**
	 * Constant for value 'LVL'
	 * @return string 'LVL'
	 */
	const VALUE_LVL = 'LVL';
	/**
	 * Constant for value 'LBP'
	 * @return string 'LBP'
	 */
	const VALUE_LBP = 'LBP';
	/**
	 * Constant for value 'LSL'
	 * @return string 'LSL'
	 */
	const VALUE_LSL = 'LSL';
	/**
	 * Constant for value 'LRD'
	 * @return string 'LRD'
	 */
	const VALUE_LRD = 'LRD';
	/**
	 * Constant for value 'LYD'
	 * @return string 'LYD'
	 */
	const VALUE_LYD = 'LYD';
	/**
	 * Constant for value 'CHF'
	 * Meta informations :
	 * 	- documentation : Swiss Franc. Applicable to listings on the Switzerland site (site ID 193).
	 * @return string 'CHF'
	 */
	const VALUE_CHF = 'CHF';
	/**
	 * Constant for value 'LTL'
	 * @return string 'LTL'
	 */
	const VALUE_LTL = 'LTL';
	/**
	 * Constant for value 'MOP'
	 * @return string 'MOP'
	 */
	const VALUE_MOP = 'MOP';
	/**
	 * Constant for value 'MKD'
	 * @return string 'MKD'
	 */
	const VALUE_MKD = 'MKD';
	/**
	 * Constant for value 'MGF'
	 * @return string 'MGF'
	 */
	const VALUE_MGF = 'MGF';
	/**
	 * Constant for value 'MWK'
	 * @return string 'MWK'
	 */
	const VALUE_MWK = 'MWK';
	/**
	 * Constant for value 'MYR'
	 * Meta informations :
	 * 	- documentation : Malaysian Ringgit. Applicable to listings on the Malaysia site (site ID 207).
	 * @return string 'MYR'
	 */
	const VALUE_MYR = 'MYR';
	/**
	 * Constant for value 'MVR'
	 * @return string 'MVR'
	 */
	const VALUE_MVR = 'MVR';
	/**
	 * Constant for value 'MTL'
	 * @return string 'MTL'
	 */
	const VALUE_MTL = 'MTL';
	/**
	 * Constant for value 'EUR'
	 * Meta informations :
	 * 	- documentation : Euro. Applicable to listings on these site: Austria (site 16), Belgium_French (site 23), France (site 71), Germany (site 77), Italy (site 101), Belgium_Dutch (site 123), Netherlands (site 146), Spain (site 186), Ireland (site 205).
	 * @return string 'EUR'
	 */
	const VALUE_EUR = 'EUR';
	/**
	 * Constant for value 'MRO'
	 * @return string 'MRO'
	 */
	const VALUE_MRO = 'MRO';
	/**
	 * Constant for value 'MUR'
	 * @return string 'MUR'
	 */
	const VALUE_MUR = 'MUR';
	/**
	 * Constant for value 'MXN'
	 * @return string 'MXN'
	 */
	const VALUE_MXN = 'MXN';
	/**
	 * Constant for value 'MXV'
	 * @return string 'MXV'
	 */
	const VALUE_MXV = 'MXV';
	/**
	 * Constant for value 'MDL'
	 * @return string 'MDL'
	 */
	const VALUE_MDL = 'MDL';
	/**
	 * Constant for value 'MNT'
	 * @return string 'MNT'
	 */
	const VALUE_MNT = 'MNT';
	/**
	 * Constant for value 'XCD'
	 * @return string 'XCD'
	 */
	const VALUE_XCD = 'XCD';
	/**
	 * Constant for value 'MZM'
	 * @return string 'MZM'
	 */
	const VALUE_MZM = 'MZM';
	/**
	 * Constant for value 'MMK'
	 * @return string 'MMK'
	 */
	const VALUE_MMK = 'MMK';
	/**
	 * Constant for value 'ZAR'
	 * @return string 'ZAR'
	 */
	const VALUE_ZAR = 'ZAR';
	/**
	 * Constant for value 'NAD'
	 * @return string 'NAD'
	 */
	const VALUE_NAD = 'NAD';
	/**
	 * Constant for value 'NPR'
	 * @return string 'NPR'
	 */
	const VALUE_NPR = 'NPR';
	/**
	 * Constant for value 'ANG'
	 * @return string 'ANG'
	 */
	const VALUE_ANG = 'ANG';
	/**
	 * Constant for value 'XPF'
	 * @return string 'XPF'
	 */
	const VALUE_XPF = 'XPF';
	/**
	 * Constant for value 'NZD'
	 * @return string 'NZD'
	 */
	const VALUE_NZD = 'NZD';
	/**
	 * Constant for value 'NIO'
	 * @return string 'NIO'
	 */
	const VALUE_NIO = 'NIO';
	/**
	 * Constant for value 'NGN'
	 * @return string 'NGN'
	 */
	const VALUE_NGN = 'NGN';
	/**
	 * Constant for value 'NOK'
	 * @return string 'NOK'
	 */
	const VALUE_NOK = 'NOK';
	/**
	 * Constant for value 'OMR'
	 * @return string 'OMR'
	 */
	const VALUE_OMR = 'OMR';
	/**
	 * Constant for value 'PKR'
	 * @return string 'PKR'
	 */
	const VALUE_PKR = 'PKR';
	/**
	 * Constant for value 'PAB'
	 * @return string 'PAB'
	 */
	const VALUE_PAB = 'PAB';
	/**
	 * Constant for value 'PGK'
	 * @return string 'PGK'
	 */
	const VALUE_PGK = 'PGK';
	/**
	 * Constant for value 'PYG'
	 * @return string 'PYG'
	 */
	const VALUE_PYG = 'PYG';
	/**
	 * Constant for value 'PEN'
	 * @return string 'PEN'
	 */
	const VALUE_PEN = 'PEN';
	/**
	 * Constant for value 'PHP'
	 * Meta informations :
	 * 	- documentation : Philippines Peso. Applicable to listings on the Philippines site (site ID 211).
	 * @return string 'PHP'
	 */
	const VALUE_PHP = 'PHP';
	/**
	 * Constant for value 'PLN'
	 * Meta informations :
	 * 	- documentation : Poland, Zloty. Applicable to listings on the Poland site (site ID 212).
	 * @return string 'PLN'
	 */
	const VALUE_PLN = 'PLN';
	/**
	 * Constant for value 'USD'
	 * Meta informations :
	 * 	- documentation : US Dollar. Applicable to listings on the US (site ID 0), eBayMotors (site 100), and Canada (site 2) sites.
	 * @return string 'USD'
	 */
	const VALUE_USD = 'USD';
	/**
	 * Constant for value 'QAR'
	 * @return string 'QAR'
	 */
	const VALUE_QAR = 'QAR';
	/**
	 * Constant for value 'ROL'
	 * @return string 'ROL'
	 */
	const VALUE_ROL = 'ROL';
	/**
	 * Constant for value 'RUB'
	 * @return string 'RUB'
	 */
	const VALUE_RUB = 'RUB';
	/**
	 * Constant for value 'RUR'
	 * @return string 'RUR'
	 */
	const VALUE_RUR = 'RUR';
	/**
	 * Constant for value 'RWF'
	 * @return string 'RWF'
	 */
	const VALUE_RWF = 'RWF';
	/**
	 * Constant for value 'SHP'
	 * @return string 'SHP'
	 */
	const VALUE_SHP = 'SHP';
	/**
	 * Constant for value 'WST'
	 * @return string 'WST'
	 */
	const VALUE_WST = 'WST';
	/**
	 * Constant for value 'STD'
	 * @return string 'STD'
	 */
	const VALUE_STD = 'STD';
	/**
	 * Constant for value 'SAR'
	 * @return string 'SAR'
	 */
	const VALUE_SAR = 'SAR';
	/**
	 * Constant for value 'SCR'
	 * @return string 'SCR'
	 */
	const VALUE_SCR = 'SCR';
	/**
	 * Constant for value 'SLL'
	 * @return string 'SLL'
	 */
	const VALUE_SLL = 'SLL';
	/**
	 * Constant for value 'SGD'
	 * Meta informations :
	 * 	- documentation : Singapore Dollar. Applicable to listings on the Singapore site (site 216).
	 * @return string 'SGD'
	 */
	const VALUE_SGD = 'SGD';
	/**
	 * Constant for value 'SKK'
	 * @return string 'SKK'
	 */
	const VALUE_SKK = 'SKK';
	/**
	 * Constant for value 'SIT'
	 * @return string 'SIT'
	 */
	const VALUE_SIT = 'SIT';
	/**
	 * Constant for value 'SBD'
	 * @return string 'SBD'
	 */
	const VALUE_SBD = 'SBD';
	/**
	 * Constant for value 'SOS'
	 * @return string 'SOS'
	 */
	const VALUE_SOS = 'SOS';
	/**
	 * Constant for value 'LKR'
	 * @return string 'LKR'
	 */
	const VALUE_LKR = 'LKR';
	/**
	 * Constant for value 'SDD'
	 * @return string 'SDD'
	 */
	const VALUE_SDD = 'SDD';
	/**
	 * Constant for value 'SRG'
	 * @return string 'SRG'
	 */
	const VALUE_SRG = 'SRG';
	/**
	 * Constant for value 'SZL'
	 * @return string 'SZL'
	 */
	const VALUE_SZL = 'SZL';
	/**
	 * Constant for value 'SEK'
	 * Meta informations :
	 * 	- documentation : Swedish Krona. Applicable to listings on the Sweden site (site 218).
	 * @return string 'SEK'
	 */
	const VALUE_SEK = 'SEK';
	/**
	 * Constant for value 'SYP'
	 * @return string 'SYP'
	 */
	const VALUE_SYP = 'SYP';
	/**
	 * Constant for value 'TWD'
	 * Meta informations :
	 * 	- documentation : New Taiwan Dollar.
	 * @return string 'TWD'
	 */
	const VALUE_TWD = 'TWD';
	/**
	 * Constant for value 'TJS'
	 * @return string 'TJS'
	 */
	const VALUE_TJS = 'TJS';
	/**
	 * Constant for value 'TZS'
	 * @return string 'TZS'
	 */
	const VALUE_TZS = 'TZS';
	/**
	 * Constant for value 'THB'
	 * @return string 'THB'
	 */
	const VALUE_THB = 'THB';
	/**
	 * Constant for value 'XOF'
	 * @return string 'XOF'
	 */
	const VALUE_XOF = 'XOF';
	/**
	 * Constant for value 'TOP'
	 * @return string 'TOP'
	 */
	const VALUE_TOP = 'TOP';
	/**
	 * Constant for value 'TTD'
	 * @return string 'TTD'
	 */
	const VALUE_TTD = 'TTD';
	/**
	 * Constant for value 'TND'
	 * @return string 'TND'
	 */
	const VALUE_TND = 'TND';
	/**
	 * Constant for value 'TRL'
	 * @return string 'TRL'
	 */
	const VALUE_TRL = 'TRL';
	/**
	 * Constant for value 'TMM'
	 * @return string 'TMM'
	 */
	const VALUE_TMM = 'TMM';
	/**
	 * Constant for value 'UGX'
	 * @return string 'UGX'
	 */
	const VALUE_UGX = 'UGX';
	/**
	 * Constant for value 'UAH'
	 * @return string 'UAH'
	 */
	const VALUE_UAH = 'UAH';
	/**
	 * Constant for value 'AED'
	 * @return string 'AED'
	 */
	const VALUE_AED = 'AED';
	/**
	 * Constant for value 'GBP'
	 * Meta informations :
	 * 	- documentation : Pound Sterling. Applicable to listings on the UK site (site ID 3).
	 * @return string 'GBP'
	 */
	const VALUE_GBP = 'GBP';
	/**
	 * Constant for value 'USS'
	 * @return string 'USS'
	 */
	const VALUE_USS = 'USS';
	/**
	 * Constant for value 'USN'
	 * @return string 'USN'
	 */
	const VALUE_USN = 'USN';
	/**
	 * Constant for value 'UYU'
	 * @return string 'UYU'
	 */
	const VALUE_UYU = 'UYU';
	/**
	 * Constant for value 'UZS'
	 * @return string 'UZS'
	 */
	const VALUE_UZS = 'UZS';
	/**
	 * Constant for value 'VUV'
	 * @return string 'VUV'
	 */
	const VALUE_VUV = 'VUV';
	/**
	 * Constant for value 'VEB'
	 * @return string 'VEB'
	 */
	const VALUE_VEB = 'VEB';
	/**
	 * Constant for value 'VND'
	 * @return string 'VND'
	 */
	const VALUE_VND = 'VND';
	/**
	 * Constant for value 'MAD'
	 * @return string 'MAD'
	 */
	const VALUE_MAD = 'MAD';
	/**
	 * Constant for value 'YER'
	 * @return string 'YER'
	 */
	const VALUE_YER = 'YER';
	/**
	 * Constant for value 'YUM'
	 * @return string 'YUM'
	 */
	const VALUE_YUM = 'YUM';
	/**
	 * Constant for value 'ZMK'
	 * @return string 'ZMK'
	 */
	const VALUE_ZMK = 'ZMK';
	/**
	 * Constant for value 'ZWD'
	 * @return string 'ZWD'
	 */
	const VALUE_ZWD = 'ZWD';
	/**
	 * Constant for value 'ATS'
	 * @return string 'ATS'
	 */
	const VALUE_ATS = 'ATS';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Placeholder value. See <a href="types/simpleTypes.html#token">token</a>.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayShoppingTypeCurrencyCodeType
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
		return in_array($_value,array(self::VALUE_AFA,self::VALUE_ALL,self::VALUE_DZD,self::VALUE_ADP,self::VALUE_AOA,self::VALUE_ARS,self::VALUE_AMD,self::VALUE_AWG,self::VALUE_AZM,self::VALUE_BSD,self::VALUE_BHD,self::VALUE_BDT,self::VALUE_BBD,self::VALUE_BYR,self::VALUE_BZD,self::VALUE_BMD,self::VALUE_BTN,self::VALUE_INR,self::VALUE_BOV,self::VALUE_BOB,self::VALUE_BAM,self::VALUE_BWP,self::VALUE_BRL,self::VALUE_BND,self::VALUE_BGL,self::VALUE_BGN,self::VALUE_BIF,self::VALUE_KHR,self::VALUE_CAD,self::VALUE_CVE,self::VALUE_KYD,self::VALUE_XAF,self::VALUE_CLF,self::VALUE_CLP,self::VALUE_CNY,self::VALUE_COP,self::VALUE_KMF,self::VALUE_CDF,self::VALUE_CRC,self::VALUE_HRK,self::VALUE_CUP,self::VALUE_CYP,self::VALUE_CZK,self::VALUE_DKK,self::VALUE_DJF,self::VALUE_DOP,self::VALUE_TPE,self::VALUE_ECV,self::VALUE_ECS,self::VALUE_EGP,self::VALUE_SVC,self::VALUE_ERN,self::VALUE_EEK,self::VALUE_ETB,self::VALUE_FKP,self::VALUE_FJD,self::VALUE_GMD,self::VALUE_GEL,self::VALUE_GHC,self::VALUE_GIP,self::VALUE_GTQ,self::VALUE_GNF,self::VALUE_GWP,self::VALUE_GYD,self::VALUE_HTG,self::VALUE_HNL,self::VALUE_HKD,self::VALUE_HUF,self::VALUE_ISK,self::VALUE_IDR,self::VALUE_IRR,self::VALUE_IQD,self::VALUE_ILS,self::VALUE_JMD,self::VALUE_JPY,self::VALUE_JOD,self::VALUE_KZT,self::VALUE_KES,self::VALUE_AUD,self::VALUE_KPW,self::VALUE_KRW,self::VALUE_KWD,self::VALUE_KGS,self::VALUE_LAK,self::VALUE_LVL,self::VALUE_LBP,self::VALUE_LSL,self::VALUE_LRD,self::VALUE_LYD,self::VALUE_CHF,self::VALUE_LTL,self::VALUE_MOP,self::VALUE_MKD,self::VALUE_MGF,self::VALUE_MWK,self::VALUE_MYR,self::VALUE_MVR,self::VALUE_MTL,self::VALUE_EUR,self::VALUE_MRO,self::VALUE_MUR,self::VALUE_MXN,self::VALUE_MXV,self::VALUE_MDL,self::VALUE_MNT,self::VALUE_XCD,self::VALUE_MZM,self::VALUE_MMK,self::VALUE_ZAR,self::VALUE_NAD,self::VALUE_NPR,self::VALUE_ANG,self::VALUE_XPF,self::VALUE_NZD,self::VALUE_NIO,self::VALUE_NGN,self::VALUE_NOK,self::VALUE_OMR,self::VALUE_PKR,self::VALUE_PAB,self::VALUE_PGK,self::VALUE_PYG,self::VALUE_PEN,self::VALUE_PHP,self::VALUE_PLN,self::VALUE_USD,self::VALUE_QAR,self::VALUE_ROL,self::VALUE_RUB,self::VALUE_RUR,self::VALUE_RWF,self::VALUE_SHP,self::VALUE_WST,self::VALUE_STD,self::VALUE_SAR,self::VALUE_SCR,self::VALUE_SLL,self::VALUE_SGD,self::VALUE_SKK,self::VALUE_SIT,self::VALUE_SBD,self::VALUE_SOS,self::VALUE_LKR,self::VALUE_SDD,self::VALUE_SRG,self::VALUE_SZL,self::VALUE_SEK,self::VALUE_SYP,self::VALUE_TWD,self::VALUE_TJS,self::VALUE_TZS,self::VALUE_THB,self::VALUE_XOF,self::VALUE_TOP,self::VALUE_TTD,self::VALUE_TND,self::VALUE_TRL,self::VALUE_TMM,self::VALUE_UGX,self::VALUE_UAH,self::VALUE_AED,self::VALUE_GBP,self::VALUE_USS,self::VALUE_USN,self::VALUE_UYU,self::VALUE_UZS,self::VALUE_VUV,self::VALUE_VEB,self::VALUE_VND,self::VALUE_MAD,self::VALUE_YER,self::VALUE_YUM,self::VALUE_ZMK,self::VALUE_ZWD,self::VALUE_ATS,self::VALUE_CUSTOMCODE));
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