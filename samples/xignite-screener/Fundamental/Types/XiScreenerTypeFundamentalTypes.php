<?php
/**
 * Class file for XiScreenerTypeFundamentalTypes
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeFundamentalTypes
 * @date 08/07/2012
 */
class XiScreenerTypeFundamentalTypes extends XiScreenerWsdlClass
{
	/**
	 * Constant for value 'Name'
	 * @return string 'Name'
	 */
	const VALUE_NAME = 'Name';
	/**
	 * Constant for value 'Ticker'
	 * @return string 'Ticker'
	 */
	const VALUE_TICKER = 'Ticker';
	/**
	 * Constant for value 'CUSIP'
	 * @return string 'CUSIP'
	 */
	const VALUE_CUSIP = 'CUSIP';
	/**
	 * Constant for value 'CIK'
	 * @return string 'CIK'
	 */
	const VALUE_CIK = 'CIK';
	/**
	 * Constant for value 'Category'
	 * @return string 'Category'
	 */
	const VALUE_CATEGORY = 'Category';
	/**
	 * Constant for value 'Exchange'
	 * @return string 'Exchange'
	 */
	const VALUE_EXCHANGE = 'Exchange';
	/**
	 * Constant for value 'Industry'
	 * @return string 'Industry'
	 */
	const VALUE_INDUSTRY = 'Industry';
	/**
	 * Constant for value 'IndustryGroup'
	 * @return string 'IndustryGroup'
	 */
	const VALUE_INDUSTRYGROUP = 'IndustryGroup';
	/**
	 * Constant for value 'Sector'
	 * @return string 'Sector'
	 */
	const VALUE_SECTOR = 'Sector';
	/**
	 * Constant for value 'Logo'
	 * @return string 'Logo'
	 */
	const VALUE_LOGO = 'Logo';
	/**
	 * Constant for value 'IRSNumber'
	 * @return string 'IRSNumber'
	 */
	const VALUE_IRSNUMBER = 'IRSNumber';
	/**
	 * Constant for value 'DUNS'
	 * @return string 'DUNS'
	 */
	const VALUE_DUNS = 'DUNS';
	/**
	 * Constant for value 'SECName'
	 * @return string 'SECName'
	 */
	const VALUE_SECNAME = 'SECName';
	/**
	 * Constant for value 'ExchangeName'
	 * @return string 'ExchangeName'
	 */
	const VALUE_EXCHANGENAME = 'ExchangeName';
	/**
	 * Constant for value 'AddressName'
	 * @return string 'AddressName'
	 */
	const VALUE_ADDRESSNAME = 'AddressName';
	/**
	 * Constant for value 'LongName'
	 * @return string 'LongName'
	 */
	const VALUE_LONGNAME = 'LongName';
	/**
	 * Constant for value 'Description'
	 * @return string 'Description'
	 */
	const VALUE_DESCRIPTION = 'Description';
	/**
	 * Constant for value 'LongDescription'
	 * @return string 'LongDescription'
	 */
	const VALUE_LONGDESCRIPTION = 'LongDescription';
	/**
	 * Constant for value 'MGNumber'
	 * @return string 'MGNumber'
	 */
	const VALUE_MGNUMBER = 'MGNumber';
	/**
	 * Constant for value 'MGNumberOtherCommon'
	 * @return string 'MGNumberOtherCommon'
	 */
	const VALUE_MGNUMBEROTHERCOMMON = 'MGNumberOtherCommon';
	/**
	 * Constant for value 'PrimarySICCode'
	 * @return string 'PrimarySICCode'
	 */
	const VALUE_PRIMARYSICCODE = 'PrimarySICCode';
	/**
	 * Constant for value 'SecondarySICCode1'
	 * @return string 'SecondarySICCode1'
	 */
	const VALUE_SECONDARYSICCODE1 = 'SecondarySICCode1';
	/**
	 * Constant for value 'SecondarySICCode2'
	 * @return string 'SecondarySICCode2'
	 */
	const VALUE_SECONDARYSICCODE2 = 'SecondarySICCode2';
	/**
	 * Constant for value 'SecondarySICCode3'
	 * @return string 'SecondarySICCode3'
	 */
	const VALUE_SECONDARYSICCODE3 = 'SecondarySICCode3';
	/**
	 * Constant for value 'SecondarySICCode4'
	 * @return string 'SecondarySICCode4'
	 */
	const VALUE_SECONDARYSICCODE4 = 'SecondarySICCode4';
	/**
	 * Constant for value 'SecondarySICCode5'
	 * @return string 'SecondarySICCode5'
	 */
	const VALUE_SECONDARYSICCODE5 = 'SecondarySICCode5';
	/**
	 * Constant for value 'SecondarySICCode6'
	 * @return string 'SecondarySICCode6'
	 */
	const VALUE_SECONDARYSICCODE6 = 'SecondarySICCode6';
	/**
	 * Constant for value 'SecondarySICCode7'
	 * @return string 'SecondarySICCode7'
	 */
	const VALUE_SECONDARYSICCODE7 = 'SecondarySICCode7';
	/**
	 * Constant for value 'SecondarySICCode8'
	 * @return string 'SecondarySICCode8'
	 */
	const VALUE_SECONDARYSICCODE8 = 'SecondarySICCode8';
	/**
	 * Constant for value 'SecondarySICCode9'
	 * @return string 'SecondarySICCode9'
	 */
	const VALUE_SECONDARYSICCODE9 = 'SecondarySICCode9';
	/**
	 * Constant for value 'SecondarySICCode10'
	 * @return string 'SecondarySICCode10'
	 */
	const VALUE_SECONDARYSICCODE10 = 'SecondarySICCode10';
	/**
	 * Constant for value 'NAICSCode'
	 * @return string 'NAICSCode'
	 */
	const VALUE_NAICSCODE = 'NAICSCode';
	/**
	 * Constant for value 'ScripGroup'
	 * @return string 'ScripGroup'
	 */
	const VALUE_SCRIPGROUP = 'ScripGroup';
	/**
	 * Constant for value 'Address1'
	 * @return string 'Address1'
	 */
	const VALUE_ADDRESS1 = 'Address1';
	/**
	 * Constant for value 'Address2'
	 * @return string 'Address2'
	 */
	const VALUE_ADDRESS2 = 'Address2';
	/**
	 * Constant for value 'City'
	 * @return string 'City'
	 */
	const VALUE_CITY = 'City';
	/**
	 * Constant for value 'State'
	 * @return string 'State'
	 */
	const VALUE_STATE = 'State';
	/**
	 * Constant for value 'Zip'
	 * @return string 'Zip'
	 */
	const VALUE_ZIP = 'Zip';
	/**
	 * Constant for value 'Country'
	 * @return string 'Country'
	 */
	const VALUE_COUNTRY = 'Country';
	/**
	 * Constant for value 'Phone'
	 * @return string 'Phone'
	 */
	const VALUE_PHONE = 'Phone';
	/**
	 * Constant for value 'FAX'
	 * @return string 'FAX'
	 */
	const VALUE_FAX = 'FAX';
	/**
	 * Constant for value 'StateOfIncorporation'
	 * @return string 'StateOfIncorporation'
	 */
	const VALUE_STATEOFINCORPORATION = 'StateOfIncorporation';
	/**
	 * Constant for value 'Email'
	 * @return string 'Email'
	 */
	const VALUE_EMAIL = 'Email';
	/**
	 * Constant for value 'CEO'
	 * @return string 'CEO'
	 */
	const VALUE_CEO = 'CEO';
	/**
	 * Constant for value 'Employees'
	 * @return string 'Employees'
	 */
	const VALUE_EMPLOYEES = 'Employees';
	/**
	 * Constant for value 'WebDomain'
	 * @return string 'WebDomain'
	 */
	const VALUE_WEBDOMAIN = 'WebDomain';
	/**
	 * Constant for value 'WebSite'
	 * @return string 'WebSite'
	 */
	const VALUE_WEBSITE = 'WebSite';
	/**
	 * Constant for value 'NumberOfExchanges'
	 * @return string 'NumberOfExchanges'
	 */
	const VALUE_NUMBEROFEXCHANGES = 'NumberOfExchanges';
	/**
	 * Constant for value 'SAndPRating'
	 * @return string 'SAndPRating'
	 */
	const VALUE_SANDPRATING = 'SAndPRating';
	/**
	 * Constant for value 'FiscalYear'
	 * @return string 'FiscalYear'
	 */
	const VALUE_FISCALYEAR = 'FiscalYear';
	/**
	 * Constant for value 'MostRecentQuarter'
	 * @return string 'MostRecentQuarter'
	 */
	const VALUE_MOSTRECENTQUARTER = 'MostRecentQuarter';
	/**
	 * Constant for value 'LastAnnualReport'
	 * @return string 'LastAnnualReport'
	 */
	const VALUE_LASTANNUALREPORT = 'LastAnnualReport';
	/**
	 * Constant for value 'LastQuarterly'
	 * @return string 'LastQuarterly'
	 */
	const VALUE_LASTQUARTERLY = 'LastQuarterly';
	/**
	 * Constant for value 'LastProxyStatement'
	 * @return string 'LastProxyStatement'
	 */
	const VALUE_LASTPROXYSTATEMENT = 'LastProxyStatement';
	/**
	 * Constant for value 'LastAnnualReportDate'
	 * @return string 'LastAnnualReportDate'
	 */
	const VALUE_LASTANNUALREPORTDATE = 'LastAnnualReportDate';
	/**
	 * Constant for value 'LastQuarterlyReportDate'
	 * @return string 'LastQuarterlyReportDate'
	 */
	const VALUE_LASTQUARTERLYREPORTDATE = 'LastQuarterlyReportDate';
	/**
	 * Constant for value 'LastDelayedPrice'
	 * @return string 'LastDelayedPrice'
	 */
	const VALUE_LASTDELAYEDPRICE = 'LastDelayedPrice';
	/**
	 * Constant for value 'LastRealTimePrice'
	 * @return string 'LastRealTimePrice'
	 */
	const VALUE_LASTREALTIMEPRICE = 'LastRealTimePrice';
	/**
	 * Constant for value 'LastTradeDate'
	 * @return string 'LastTradeDate'
	 */
	const VALUE_LASTTRADEDATE = 'LastTradeDate';
	/**
	 * Constant for value 'LastOpen'
	 * @return string 'LastOpen'
	 */
	const VALUE_LASTOPEN = 'LastOpen';
	/**
	 * Constant for value 'LastHigh'
	 * @return string 'LastHigh'
	 */
	const VALUE_LASTHIGH = 'LastHigh';
	/**
	 * Constant for value 'LastLow'
	 * @return string 'LastLow'
	 */
	const VALUE_LASTLOW = 'LastLow';
	/**
	 * Constant for value 'LastMarketClosePrice'
	 * @return string 'LastMarketClosePrice'
	 */
	const VALUE_LASTMARKETCLOSEPRICE = 'LastMarketClosePrice';
	/**
	 * Constant for value 'LastVolume'
	 * @return string 'LastVolume'
	 */
	const VALUE_LASTVOLUME = 'LastVolume';
	/**
	 * Constant for value 'LastFiscalYearAveragePrice'
	 * @return string 'LastFiscalYearAveragePrice'
	 */
	const VALUE_LASTFISCALYEARAVERAGEPRICE = 'LastFiscalYearAveragePrice';
	/**
	 * Constant for value 'AveragePriceThisFiscalQuarter'
	 * @return string 'AveragePriceThisFiscalQuarter'
	 */
	const VALUE_AVERAGEPRICETHISFISCALQUARTER = 'AveragePriceThisFiscalQuarter';
	/**
	 * Constant for value 'AveragePriceFiscalQuarterMinus1'
	 * @return string 'AveragePriceFiscalQuarterMinus1'
	 */
	const VALUE_AVERAGEPRICEFISCALQUARTERMINUS1 = 'AveragePriceFiscalQuarterMinus1';
	/**
	 * Constant for value 'AveragePriceFiscalQuarterMinus2'
	 * @return string 'AveragePriceFiscalQuarterMinus2'
	 */
	const VALUE_AVERAGEPRICEFISCALQUARTERMINUS2 = 'AveragePriceFiscalQuarterMinus2';
	/**
	 * Constant for value 'AveragePriceFiscalQuarterMinus3'
	 * @return string 'AveragePriceFiscalQuarterMinus3'
	 */
	const VALUE_AVERAGEPRICEFISCALQUARTERMINUS3 = 'AveragePriceFiscalQuarterMinus3';
	/**
	 * Constant for value 'AveragePriceFiscalQuarterMinus4'
	 * @return string 'AveragePriceFiscalQuarterMinus4'
	 */
	const VALUE_AVERAGEPRICEFISCALQUARTERMINUS4 = 'AveragePriceFiscalQuarterMinus4';
	/**
	 * Constant for value 'AveragePriceFiscalQuarterMinus5'
	 * @return string 'AveragePriceFiscalQuarterMinus5'
	 */
	const VALUE_AVERAGEPRICEFISCALQUARTERMINUS5 = 'AveragePriceFiscalQuarterMinus5';
	/**
	 * Constant for value 'AveragePriceFiscalQuarterMinus6'
	 * @return string 'AveragePriceFiscalQuarterMinus6'
	 */
	const VALUE_AVERAGEPRICEFISCALQUARTERMINUS6 = 'AveragePriceFiscalQuarterMinus6';
	/**
	 * Constant for value 'AveragePriceFiscalQuarterMinus7'
	 * @return string 'AveragePriceFiscalQuarterMinus7'
	 */
	const VALUE_AVERAGEPRICEFISCALQUARTERMINUS7 = 'AveragePriceFiscalQuarterMinus7';
	/**
	 * Constant for value 'AveragePriceFiscalQuarterMinus8'
	 * @return string 'AveragePriceFiscalQuarterMinus8'
	 */
	const VALUE_AVERAGEPRICEFISCALQUARTERMINUS8 = 'AveragePriceFiscalQuarterMinus8';
	/**
	 * Constant for value 'AveragePriceFiscalQuarterMinus9'
	 * @return string 'AveragePriceFiscalQuarterMinus9'
	 */
	const VALUE_AVERAGEPRICEFISCALQUARTERMINUS9 = 'AveragePriceFiscalQuarterMinus9';
	/**
	 * Constant for value 'AveragePriceFiscalQuarterMinus10'
	 * @return string 'AveragePriceFiscalQuarterMinus10'
	 */
	const VALUE_AVERAGEPRICEFISCALQUARTERMINUS10 = 'AveragePriceFiscalQuarterMinus10';
	/**
	 * Constant for value 'AveragePriceFiscalQuarterMinus11'
	 * @return string 'AveragePriceFiscalQuarterMinus11'
	 */
	const VALUE_AVERAGEPRICEFISCALQUARTERMINUS11 = 'AveragePriceFiscalQuarterMinus11';
	/**
	 * Constant for value 'AveragePriceFiscalQuarterMinus12'
	 * @return string 'AveragePriceFiscalQuarterMinus12'
	 */
	const VALUE_AVERAGEPRICEFISCALQUARTERMINUS12 = 'AveragePriceFiscalQuarterMinus12';
	/**
	 * Constant for value 'AveragePriceThisFiscalYear'
	 * @return string 'AveragePriceThisFiscalYear'
	 */
	const VALUE_AVERAGEPRICETHISFISCALYEAR = 'AveragePriceThisFiscalYear';
	/**
	 * Constant for value 'AveragePriceFiscalYearMinus1'
	 * @return string 'AveragePriceFiscalYearMinus1'
	 */
	const VALUE_AVERAGEPRICEFISCALYEARMINUS1 = 'AveragePriceFiscalYearMinus1';
	/**
	 * Constant for value 'AveragePriceFiscalYearMinus2'
	 * @return string 'AveragePriceFiscalYearMinus2'
	 */
	const VALUE_AVERAGEPRICEFISCALYEARMINUS2 = 'AveragePriceFiscalYearMinus2';
	/**
	 * Constant for value 'AveragePriceFiscalYearMinus3'
	 * @return string 'AveragePriceFiscalYearMinus3'
	 */
	const VALUE_AVERAGEPRICEFISCALYEARMINUS3 = 'AveragePriceFiscalYearMinus3';
	/**
	 * Constant for value 'AveragePriceFiscalYearMinus4'
	 * @return string 'AveragePriceFiscalYearMinus4'
	 */
	const VALUE_AVERAGEPRICEFISCALYEARMINUS4 = 'AveragePriceFiscalYearMinus4';
	/**
	 * Constant for value 'AveragePriceFiscalYearMinus5'
	 * @return string 'AveragePriceFiscalYearMinus5'
	 */
	const VALUE_AVERAGEPRICEFISCALYEARMINUS5 = 'AveragePriceFiscalYearMinus5';
	/**
	 * Constant for value 'AveragePriceFiscalYearMinus6'
	 * @return string 'AveragePriceFiscalYearMinus6'
	 */
	const VALUE_AVERAGEPRICEFISCALYEARMINUS6 = 'AveragePriceFiscalYearMinus6';
	/**
	 * Constant for value 'AveragePriceFiscalYearMinus7'
	 * @return string 'AveragePriceFiscalYearMinus7'
	 */
	const VALUE_AVERAGEPRICEFISCALYEARMINUS7 = 'AveragePriceFiscalYearMinus7';
	/**
	 * Constant for value 'AveragePriceFiscalYearMinus8'
	 * @return string 'AveragePriceFiscalYearMinus8'
	 */
	const VALUE_AVERAGEPRICEFISCALYEARMINUS8 = 'AveragePriceFiscalYearMinus8';
	/**
	 * Constant for value 'AveragePriceFiscalYearMinus9'
	 * @return string 'AveragePriceFiscalYearMinus9'
	 */
	const VALUE_AVERAGEPRICEFISCALYEARMINUS9 = 'AveragePriceFiscalYearMinus9';
	/**
	 * Constant for value 'AveragePriceFiscalYearMinus10'
	 * @return string 'AveragePriceFiscalYearMinus10'
	 */
	const VALUE_AVERAGEPRICEFISCALYEARMINUS10 = 'AveragePriceFiscalYearMinus10';
	/**
	 * Constant for value 'AveragePriceFiscalYearMinus11'
	 * @return string 'AveragePriceFiscalYearMinus11'
	 */
	const VALUE_AVERAGEPRICEFISCALYEARMINUS11 = 'AveragePriceFiscalYearMinus11';
	/**
	 * Constant for value 'AveragePriceFiscalYearMinus12'
	 * @return string 'AveragePriceFiscalYearMinus12'
	 */
	const VALUE_AVERAGEPRICEFISCALYEARMINUS12 = 'AveragePriceFiscalYearMinus12';
	/**
	 * Constant for value 'AverageVolumeThisFiscalYear'
	 * @return string 'AverageVolumeThisFiscalYear'
	 */
	const VALUE_AVERAGEVOLUMETHISFISCALYEAR = 'AverageVolumeThisFiscalYear';
	/**
	 * Constant for value 'AverageVolumeFiscalYearMinus1'
	 * @return string 'AverageVolumeFiscalYearMinus1'
	 */
	const VALUE_AVERAGEVOLUMEFISCALYEARMINUS1 = 'AverageVolumeFiscalYearMinus1';
	/**
	 * Constant for value 'AverageVolumeFiscalYearMinus2'
	 * @return string 'AverageVolumeFiscalYearMinus2'
	 */
	const VALUE_AVERAGEVOLUMEFISCALYEARMINUS2 = 'AverageVolumeFiscalYearMinus2';
	/**
	 * Constant for value 'AverageVolumeFiscalYearMinus3'
	 * @return string 'AverageVolumeFiscalYearMinus3'
	 */
	const VALUE_AVERAGEVOLUMEFISCALYEARMINUS3 = 'AverageVolumeFiscalYearMinus3';
	/**
	 * Constant for value 'AverageVolumeFiscalYearMinus4'
	 * @return string 'AverageVolumeFiscalYearMinus4'
	 */
	const VALUE_AVERAGEVOLUMEFISCALYEARMINUS4 = 'AverageVolumeFiscalYearMinus4';
	/**
	 * Constant for value 'AverageVolumeFiscalYearMinus5'
	 * @return string 'AverageVolumeFiscalYearMinus5'
	 */
	const VALUE_AVERAGEVOLUMEFISCALYEARMINUS5 = 'AverageVolumeFiscalYearMinus5';
	/**
	 * Constant for value 'AverageVolumeFiscalYearMinus6'
	 * @return string 'AverageVolumeFiscalYearMinus6'
	 */
	const VALUE_AVERAGEVOLUMEFISCALYEARMINUS6 = 'AverageVolumeFiscalYearMinus6';
	/**
	 * Constant for value 'AverageVolumeFiscalYearMinus7'
	 * @return string 'AverageVolumeFiscalYearMinus7'
	 */
	const VALUE_AVERAGEVOLUMEFISCALYEARMINUS7 = 'AverageVolumeFiscalYearMinus7';
	/**
	 * Constant for value 'AverageVolumeFiscalYearMinus8'
	 * @return string 'AverageVolumeFiscalYearMinus8'
	 */
	const VALUE_AVERAGEVOLUMEFISCALYEARMINUS8 = 'AverageVolumeFiscalYearMinus8';
	/**
	 * Constant for value 'AverageVolumeFiscalYearMinus9'
	 * @return string 'AverageVolumeFiscalYearMinus9'
	 */
	const VALUE_AVERAGEVOLUMEFISCALYEARMINUS9 = 'AverageVolumeFiscalYearMinus9';
	/**
	 * Constant for value 'AverageVolumeFiscalYearMinus10'
	 * @return string 'AverageVolumeFiscalYearMinus10'
	 */
	const VALUE_AVERAGEVOLUMEFISCALYEARMINUS10 = 'AverageVolumeFiscalYearMinus10';
	/**
	 * Constant for value 'AverageVolumeFiscalYearMinus11'
	 * @return string 'AverageVolumeFiscalYearMinus11'
	 */
	const VALUE_AVERAGEVOLUMEFISCALYEARMINUS11 = 'AverageVolumeFiscalYearMinus11';
	/**
	 * Constant for value 'AverageVolumeFiscalYearMinus12'
	 * @return string 'AverageVolumeFiscalYearMinus12'
	 */
	const VALUE_AVERAGEVOLUMEFISCALYEARMINUS12 = 'AverageVolumeFiscalYearMinus12';
	/**
	 * Constant for value 'HighPriceThisFiscalYear'
	 * @return string 'HighPriceThisFiscalYear'
	 */
	const VALUE_HIGHPRICETHISFISCALYEAR = 'HighPriceThisFiscalYear';
	/**
	 * Constant for value 'HighPriceFiscalYearMinus1'
	 * @return string 'HighPriceFiscalYearMinus1'
	 */
	const VALUE_HIGHPRICEFISCALYEARMINUS1 = 'HighPriceFiscalYearMinus1';
	/**
	 * Constant for value 'HighPriceFiscalYearMinus2'
	 * @return string 'HighPriceFiscalYearMinus2'
	 */
	const VALUE_HIGHPRICEFISCALYEARMINUS2 = 'HighPriceFiscalYearMinus2';
	/**
	 * Constant for value 'HighPriceFiscalYearMinus3'
	 * @return string 'HighPriceFiscalYearMinus3'
	 */
	const VALUE_HIGHPRICEFISCALYEARMINUS3 = 'HighPriceFiscalYearMinus3';
	/**
	 * Constant for value 'HighPriceFiscalYearMinus4'
	 * @return string 'HighPriceFiscalYearMinus4'
	 */
	const VALUE_HIGHPRICEFISCALYEARMINUS4 = 'HighPriceFiscalYearMinus4';
	/**
	 * Constant for value 'HighPriceFiscalYearMinus5'
	 * @return string 'HighPriceFiscalYearMinus5'
	 */
	const VALUE_HIGHPRICEFISCALYEARMINUS5 = 'HighPriceFiscalYearMinus5';
	/**
	 * Constant for value 'HighPriceFiscalYearMinus6'
	 * @return string 'HighPriceFiscalYearMinus6'
	 */
	const VALUE_HIGHPRICEFISCALYEARMINUS6 = 'HighPriceFiscalYearMinus6';
	/**
	 * Constant for value 'HighPriceFiscalYearMinus7'
	 * @return string 'HighPriceFiscalYearMinus7'
	 */
	const VALUE_HIGHPRICEFISCALYEARMINUS7 = 'HighPriceFiscalYearMinus7';
	/**
	 * Constant for value 'HighPriceFiscalYearMinus8'
	 * @return string 'HighPriceFiscalYearMinus8'
	 */
	const VALUE_HIGHPRICEFISCALYEARMINUS8 = 'HighPriceFiscalYearMinus8';
	/**
	 * Constant for value 'HighPriceFiscalYearMinus9'
	 * @return string 'HighPriceFiscalYearMinus9'
	 */
	const VALUE_HIGHPRICEFISCALYEARMINUS9 = 'HighPriceFiscalYearMinus9';
	/**
	 * Constant for value 'HighPriceFiscalYearMinus10'
	 * @return string 'HighPriceFiscalYearMinus10'
	 */
	const VALUE_HIGHPRICEFISCALYEARMINUS10 = 'HighPriceFiscalYearMinus10';
	/**
	 * Constant for value 'HighPriceFiscalYearMinus11'
	 * @return string 'HighPriceFiscalYearMinus11'
	 */
	const VALUE_HIGHPRICEFISCALYEARMINUS11 = 'HighPriceFiscalYearMinus11';
	/**
	 * Constant for value 'HighPriceFiscalYearMinus12'
	 * @return string 'HighPriceFiscalYearMinus12'
	 */
	const VALUE_HIGHPRICEFISCALYEARMINUS12 = 'HighPriceFiscalYearMinus12';
	/**
	 * Constant for value 'LowPriceThisFiscalYear'
	 * @return string 'LowPriceThisFiscalYear'
	 */
	const VALUE_LOWPRICETHISFISCALYEAR = 'LowPriceThisFiscalYear';
	/**
	 * Constant for value 'LowPriceFiscalYearMinus1'
	 * @return string 'LowPriceFiscalYearMinus1'
	 */
	const VALUE_LOWPRICEFISCALYEARMINUS1 = 'LowPriceFiscalYearMinus1';
	/**
	 * Constant for value 'LowPriceFiscalYearMinus2'
	 * @return string 'LowPriceFiscalYearMinus2'
	 */
	const VALUE_LOWPRICEFISCALYEARMINUS2 = 'LowPriceFiscalYearMinus2';
	/**
	 * Constant for value 'LowPriceFiscalYearMinus3'
	 * @return string 'LowPriceFiscalYearMinus3'
	 */
	const VALUE_LOWPRICEFISCALYEARMINUS3 = 'LowPriceFiscalYearMinus3';
	/**
	 * Constant for value 'LowPriceFiscalYearMinus4'
	 * @return string 'LowPriceFiscalYearMinus4'
	 */
	const VALUE_LOWPRICEFISCALYEARMINUS4 = 'LowPriceFiscalYearMinus4';
	/**
	 * Constant for value 'LowPriceFiscalYearMinus5'
	 * @return string 'LowPriceFiscalYearMinus5'
	 */
	const VALUE_LOWPRICEFISCALYEARMINUS5 = 'LowPriceFiscalYearMinus5';
	/**
	 * Constant for value 'LowPriceFiscalYearMinus6'
	 * @return string 'LowPriceFiscalYearMinus6'
	 */
	const VALUE_LOWPRICEFISCALYEARMINUS6 = 'LowPriceFiscalYearMinus6';
	/**
	 * Constant for value 'LowPriceFiscalYearMinus7'
	 * @return string 'LowPriceFiscalYearMinus7'
	 */
	const VALUE_LOWPRICEFISCALYEARMINUS7 = 'LowPriceFiscalYearMinus7';
	/**
	 * Constant for value 'LowPriceFiscalYearMinus8'
	 * @return string 'LowPriceFiscalYearMinus8'
	 */
	const VALUE_LOWPRICEFISCALYEARMINUS8 = 'LowPriceFiscalYearMinus8';
	/**
	 * Constant for value 'LowPriceFiscalYearMinus9'
	 * @return string 'LowPriceFiscalYearMinus9'
	 */
	const VALUE_LOWPRICEFISCALYEARMINUS9 = 'LowPriceFiscalYearMinus9';
	/**
	 * Constant for value 'LowPriceFiscalYearMinus10'
	 * @return string 'LowPriceFiscalYearMinus10'
	 */
	const VALUE_LOWPRICEFISCALYEARMINUS10 = 'LowPriceFiscalYearMinus10';
	/**
	 * Constant for value 'LowPriceFiscalYearMinus11'
	 * @return string 'LowPriceFiscalYearMinus11'
	 */
	const VALUE_LOWPRICEFISCALYEARMINUS11 = 'LowPriceFiscalYearMinus11';
	/**
	 * Constant for value 'LowPriceFiscalYearMinus12'
	 * @return string 'LowPriceFiscalYearMinus12'
	 */
	const VALUE_LOWPRICEFISCALYEARMINUS12 = 'LowPriceFiscalYearMinus12';
	/**
	 * Constant for value 'HighPriceLast4Weeks'
	 * @return string 'HighPriceLast4Weeks'
	 */
	const VALUE_HIGHPRICELAST4WEEKS = 'HighPriceLast4Weeks';
	/**
	 * Constant for value 'HighPriceLast13Weeks'
	 * @return string 'HighPriceLast13Weeks'
	 */
	const VALUE_HIGHPRICELAST13WEEKS = 'HighPriceLast13Weeks';
	/**
	 * Constant for value 'HighPriceLast26Weeks'
	 * @return string 'HighPriceLast26Weeks'
	 */
	const VALUE_HIGHPRICELAST26WEEKS = 'HighPriceLast26Weeks';
	/**
	 * Constant for value 'HighPriceLast52Weeks'
	 * @return string 'HighPriceLast52Weeks'
	 */
	const VALUE_HIGHPRICELAST52WEEKS = 'HighPriceLast52Weeks';
	/**
	 * Constant for value 'HighPriceLastMonth'
	 * @return string 'HighPriceLastMonth'
	 */
	const VALUE_HIGHPRICELASTMONTH = 'HighPriceLastMonth';
	/**
	 * Constant for value 'HighPriceLast3Months'
	 * @return string 'HighPriceLast3Months'
	 */
	const VALUE_HIGHPRICELAST3MONTHS = 'HighPriceLast3Months';
	/**
	 * Constant for value 'HighPriceLast6Months'
	 * @return string 'HighPriceLast6Months'
	 */
	const VALUE_HIGHPRICELAST6MONTHS = 'HighPriceLast6Months';
	/**
	 * Constant for value 'HighPriceLast9Months'
	 * @return string 'HighPriceLast9Months'
	 */
	const VALUE_HIGHPRICELAST9MONTHS = 'HighPriceLast9Months';
	/**
	 * Constant for value 'HighPriceLast12Months'
	 * @return string 'HighPriceLast12Months'
	 */
	const VALUE_HIGHPRICELAST12MONTHS = 'HighPriceLast12Months';
	/**
	 * Constant for value 'HighPriceYearToDate'
	 * @return string 'HighPriceYearToDate'
	 */
	const VALUE_HIGHPRICEYEARTODATE = 'HighPriceYearToDate';
	/**
	 * Constant for value 'LowPriceLast4Weeks'
	 * @return string 'LowPriceLast4Weeks'
	 */
	const VALUE_LOWPRICELAST4WEEKS = 'LowPriceLast4Weeks';
	/**
	 * Constant for value 'LowPriceLast13Weeks'
	 * @return string 'LowPriceLast13Weeks'
	 */
	const VALUE_LOWPRICELAST13WEEKS = 'LowPriceLast13Weeks';
	/**
	 * Constant for value 'LowPriceLast26Weeks'
	 * @return string 'LowPriceLast26Weeks'
	 */
	const VALUE_LOWPRICELAST26WEEKS = 'LowPriceLast26Weeks';
	/**
	 * Constant for value 'LowPriceLast52Weeks'
	 * @return string 'LowPriceLast52Weeks'
	 */
	const VALUE_LOWPRICELAST52WEEKS = 'LowPriceLast52Weeks';
	/**
	 * Constant for value 'LowPriceLastMonth'
	 * @return string 'LowPriceLastMonth'
	 */
	const VALUE_LOWPRICELASTMONTH = 'LowPriceLastMonth';
	/**
	 * Constant for value 'LowPriceLast3Months'
	 * @return string 'LowPriceLast3Months'
	 */
	const VALUE_LOWPRICELAST3MONTHS = 'LowPriceLast3Months';
	/**
	 * Constant for value 'LowPriceLast6Months'
	 * @return string 'LowPriceLast6Months'
	 */
	const VALUE_LOWPRICELAST6MONTHS = 'LowPriceLast6Months';
	/**
	 * Constant for value 'LowPriceLast9Months'
	 * @return string 'LowPriceLast9Months'
	 */
	const VALUE_LOWPRICELAST9MONTHS = 'LowPriceLast9Months';
	/**
	 * Constant for value 'LowPriceLast12Months'
	 * @return string 'LowPriceLast12Months'
	 */
	const VALUE_LOWPRICELAST12MONTHS = 'LowPriceLast12Months';
	/**
	 * Constant for value 'LowPriceYearToDate'
	 * @return string 'LowPriceYearToDate'
	 */
	const VALUE_LOWPRICEYEARTODATE = 'LowPriceYearToDate';
	/**
	 * Constant for value 'ClosePrice4WeeksAgo'
	 * @return string 'ClosePrice4WeeksAgo'
	 */
	const VALUE_CLOSEPRICE4WEEKSAGO = 'ClosePrice4WeeksAgo';
	/**
	 * Constant for value 'ClosePrice13WeeksAgo'
	 * @return string 'ClosePrice13WeeksAgo'
	 */
	const VALUE_CLOSEPRICE13WEEKSAGO = 'ClosePrice13WeeksAgo';
	/**
	 * Constant for value 'ClosePrice26WeeksAgo'
	 * @return string 'ClosePrice26WeeksAgo'
	 */
	const VALUE_CLOSEPRICE26WEEKSAGO = 'ClosePrice26WeeksAgo';
	/**
	 * Constant for value 'ClosePrice52WeeksAgo'
	 * @return string 'ClosePrice52WeeksAgo'
	 */
	const VALUE_CLOSEPRICE52WEEKSAGO = 'ClosePrice52WeeksAgo';
	/**
	 * Constant for value 'ClosePriceLastMonth'
	 * @return string 'ClosePriceLastMonth'
	 */
	const VALUE_CLOSEPRICELASTMONTH = 'ClosePriceLastMonth';
	/**
	 * Constant for value 'ClosePrice3MonthsAgo'
	 * @return string 'ClosePrice3MonthsAgo'
	 */
	const VALUE_CLOSEPRICE3MONTHSAGO = 'ClosePrice3MonthsAgo';
	/**
	 * Constant for value 'ClosePrice6MonthsAgo'
	 * @return string 'ClosePrice6MonthsAgo'
	 */
	const VALUE_CLOSEPRICE6MONTHSAGO = 'ClosePrice6MonthsAgo';
	/**
	 * Constant for value 'ClosePrice9MonthsAgo'
	 * @return string 'ClosePrice9MonthsAgo'
	 */
	const VALUE_CLOSEPRICE9MONTHSAGO = 'ClosePrice9MonthsAgo';
	/**
	 * Constant for value 'ClosePrice12MonthsAgo'
	 * @return string 'ClosePrice12MonthsAgo'
	 */
	const VALUE_CLOSEPRICE12MONTHSAGO = 'ClosePrice12MonthsAgo';
	/**
	 * Constant for value 'FiveYearHighPrice'
	 * @return string 'FiveYearHighPrice'
	 */
	const VALUE_FIVEYEARHIGHPRICE = 'FiveYearHighPrice';
	/**
	 * Constant for value 'FiveYearLowPrice'
	 * @return string 'FiveYearLowPrice'
	 */
	const VALUE_FIVEYEARLOWPRICE = 'FiveYearLowPrice';
	/**
	 * Constant for value 'PeriodAveragePrice'
	 * @return string 'PeriodAveragePrice'
	 */
	const VALUE_PERIODAVERAGEPRICE = 'PeriodAveragePrice';
	/**
	 * Constant for value 'OneYearHigh'
	 * @return string 'OneYearHigh'
	 */
	const VALUE_ONEYEARHIGH = 'OneYearHigh';
	/**
	 * Constant for value 'OneYearLow'
	 * @return string 'OneYearLow'
	 */
	const VALUE_ONEYEARLOW = 'OneYearLow';
	/**
	 * Constant for value 'OneYearHighDate'
	 * @return string 'OneYearHighDate'
	 */
	const VALUE_ONEYEARHIGHDATE = 'OneYearHighDate';
	/**
	 * Constant for value 'OneYearLowDate'
	 * @return string 'OneYearLowDate'
	 */
	const VALUE_ONEYEARLOWDATE = 'OneYearLowDate';
	/**
	 * Constant for value 'OneYearHighIntraday'
	 * @return string 'OneYearHighIntraday'
	 */
	const VALUE_ONEYEARHIGHINTRADAY = 'OneYearHighIntraday';
	/**
	 * Constant for value 'OneYearLowIntraday'
	 * @return string 'OneYearLowIntraday'
	 */
	const VALUE_ONEYEARLOWINTRADAY = 'OneYearLowIntraday';
	/**
	 * Constant for value 'PercentPriceChange1Week'
	 * @return string 'PercentPriceChange1Week'
	 */
	const VALUE_PERCENTPRICECHANGE1WEEK = 'PercentPriceChange1Week';
	/**
	 * Constant for value 'PercentPriceChange4Weeks'
	 * @return string 'PercentPriceChange4Weeks'
	 */
	const VALUE_PERCENTPRICECHANGE4WEEKS = 'PercentPriceChange4Weeks';
	/**
	 * Constant for value 'PercentPriceChange13Weeks'
	 * @return string 'PercentPriceChange13Weeks'
	 */
	const VALUE_PERCENTPRICECHANGE13WEEKS = 'PercentPriceChange13Weeks';
	/**
	 * Constant for value 'PercentPriceChange1Month'
	 * @return string 'PercentPriceChange1Month'
	 */
	const VALUE_PERCENTPRICECHANGE1MONTH = 'PercentPriceChange1Month';
	/**
	 * Constant for value 'PercentPriceChangeLast10Days'
	 * @return string 'PercentPriceChangeLast10Days'
	 */
	const VALUE_PERCENTPRICECHANGELAST10DAYS = 'PercentPriceChangeLast10Days';
	/**
	 * Constant for value 'PercentPriceChangeLast26Weeks'
	 * @return string 'PercentPriceChangeLast26Weeks'
	 */
	const VALUE_PERCENTPRICECHANGELAST26WEEKS = 'PercentPriceChangeLast26Weeks';
	/**
	 * Constant for value 'PercentPriceChangeLast52Weeks'
	 * @return string 'PercentPriceChangeLast52Weeks'
	 */
	const VALUE_PERCENTPRICECHANGELAST52WEEKS = 'PercentPriceChangeLast52Weeks';
	/**
	 * Constant for value 'PercentPriceChangeYearToDate'
	 * @return string 'PercentPriceChangeYearToDate'
	 */
	const VALUE_PERCENTPRICECHANGEYEARTODATE = 'PercentPriceChangeYearToDate';
	/**
	 * Constant for value 'FiveDayMovingAverage'
	 * @return string 'FiveDayMovingAverage'
	 */
	const VALUE_FIVEDAYMOVINGAVERAGE = 'FiveDayMovingAverage';
	/**
	 * Constant for value 'TenDayMovingAverage'
	 * @return string 'TenDayMovingAverage'
	 */
	const VALUE_TENDAYMOVINGAVERAGE = 'TenDayMovingAverage';
	/**
	 * Constant for value 'TenWeekMovingAverage'
	 * @return string 'TenWeekMovingAverage'
	 */
	const VALUE_TENWEEKMOVINGAVERAGE = 'TenWeekMovingAverage';
	/**
	 * Constant for value 'ThirtyWeekMovingAverage'
	 * @return string 'ThirtyWeekMovingAverage'
	 */
	const VALUE_THIRTYWEEKMOVINGAVERAGE = 'ThirtyWeekMovingAverage';
	/**
	 * Constant for value 'TwoHundredDayMovingAverage'
	 * @return string 'TwoHundredDayMovingAverage'
	 */
	const VALUE_TWOHUNDREDDAYMOVINGAVERAGE = 'TwoHundredDayMovingAverage';
	/**
	 * Constant for value 'LatestCloseAsPercentOf5DayAverage'
	 * @return string 'LatestCloseAsPercentOf5DayAverage'
	 */
	const VALUE_LATESTCLOSEASPERCENTOF5DAYAVERAGE = 'LatestCloseAsPercentOf5DayAverage';
	/**
	 * Constant for value 'LatestCloseAsPercentOf10DayAverage'
	 * @return string 'LatestCloseAsPercentOf10DayAverage'
	 */
	const VALUE_LATESTCLOSEASPERCENTOF10DAYAVERAGE = 'LatestCloseAsPercentOf10DayAverage';
	/**
	 * Constant for value 'LatestCloseAsPercentOf10WeekAverage'
	 * @return string 'LatestCloseAsPercentOf10WeekAverage'
	 */
	const VALUE_LATESTCLOSEASPERCENTOF10WEEKAVERAGE = 'LatestCloseAsPercentOf10WeekAverage';
	/**
	 * Constant for value 'LatestCloseAsPercentOf30WeekAverage'
	 * @return string 'LatestCloseAsPercentOf30WeekAverage'
	 */
	const VALUE_LATESTCLOSEASPERCENTOF30WEEKAVERAGE = 'LatestCloseAsPercentOf30WeekAverage';
	/**
	 * Constant for value 'LatestCloseAsPercentOf200DayAverage'
	 * @return string 'LatestCloseAsPercentOf200DayAverage'
	 */
	const VALUE_LATESTCLOSEASPERCENTOF200DAYAVERAGE = 'LatestCloseAsPercentOf200DayAverage';
	/**
	 * Constant for value 'LatestCloseAsPercentOf52WeekHigh'
	 * @return string 'LatestCloseAsPercentOf52WeekHigh'
	 */
	const VALUE_LATESTCLOSEASPERCENTOF52WEEKHIGH = 'LatestCloseAsPercentOf52WeekHigh';
	/**
	 * Constant for value 'LatestCloseAsPercentOf52WeekLow'
	 * @return string 'LatestCloseAsPercentOf52WeekLow'
	 */
	const VALUE_LATESTCLOSEASPERCENTOF52WEEKLOW = 'LatestCloseAsPercentOf52WeekLow';
	/**
	 * Constant for value 'LatestCloseAsPercentOf5YearHigh'
	 * @return string 'LatestCloseAsPercentOf5YearHigh'
	 */
	const VALUE_LATESTCLOSEASPERCENTOF5YEARHIGH = 'LatestCloseAsPercentOf5YearHigh';
	/**
	 * Constant for value 'LatestCloseAsPercentOf5YearLow'
	 * @return string 'LatestCloseAsPercentOf5YearLow'
	 */
	const VALUE_LATESTCLOSEASPERCENTOF5YEARLOW = 'LatestCloseAsPercentOf5YearLow';
	/**
	 * Constant for value 'PriceChangeVsMarket1Week'
	 * @return string 'PriceChangeVsMarket1Week'
	 */
	const VALUE_PRICECHANGEVSMARKET1WEEK = 'PriceChangeVsMarket1Week';
	/**
	 * Constant for value 'PriceChangeVsMarket4Weeks'
	 * @return string 'PriceChangeVsMarket4Weeks'
	 */
	const VALUE_PRICECHANGEVSMARKET4WEEKS = 'PriceChangeVsMarket4Weeks';
	/**
	 * Constant for value 'PriceChangeVsMarket13Weeks'
	 * @return string 'PriceChangeVsMarket13Weeks'
	 */
	const VALUE_PRICECHANGEVSMARKET13WEEKS = 'PriceChangeVsMarket13Weeks';
	/**
	 * Constant for value 'PriceChangeVsMarket26Weeks'
	 * @return string 'PriceChangeVsMarket26Weeks'
	 */
	const VALUE_PRICECHANGEVSMARKET26WEEKS = 'PriceChangeVsMarket26Weeks';
	/**
	 * Constant for value 'PriceChangeVsMarket52Weeks'
	 * @return string 'PriceChangeVsMarket52Weeks'
	 */
	const VALUE_PRICECHANGEVSMARKET52WEEKS = 'PriceChangeVsMarket52Weeks';
	/**
	 * Constant for value 'PriceChangeVsMarketThisMonth'
	 * @return string 'PriceChangeVsMarketThisMonth'
	 */
	const VALUE_PRICECHANGEVSMARKETTHISMONTH = 'PriceChangeVsMarketThisMonth';
	/**
	 * Constant for value 'PriceChangeVsMarket3Months'
	 * @return string 'PriceChangeVsMarket3Months'
	 */
	const VALUE_PRICECHANGEVSMARKET3MONTHS = 'PriceChangeVsMarket3Months';
	/**
	 * Constant for value 'PriceChangeVsMarket6Months'
	 * @return string 'PriceChangeVsMarket6Months'
	 */
	const VALUE_PRICECHANGEVSMARKET6MONTHS = 'PriceChangeVsMarket6Months';
	/**
	 * Constant for value 'PriceChangeVsMarket9Months'
	 * @return string 'PriceChangeVsMarket9Months'
	 */
	const VALUE_PRICECHANGEVSMARKET9MONTHS = 'PriceChangeVsMarket9Months';
	/**
	 * Constant for value 'PriceChangeVsMarket12Months'
	 * @return string 'PriceChangeVsMarket12Months'
	 */
	const VALUE_PRICECHANGEVSMARKET12MONTHS = 'PriceChangeVsMarket12Months';
	/**
	 * Constant for value 'PriceChangeVsMarketYearToDate'
	 * @return string 'PriceChangeVsMarketYearToDate'
	 */
	const VALUE_PRICECHANGEVSMARKETYEARTODATE = 'PriceChangeVsMarketYearToDate';
	/**
	 * Constant for value 'TwoHundredDayPriceIndexVsMarket'
	 * @return string 'TwoHundredDayPriceIndexVsMarket'
	 */
	const VALUE_TWOHUNDREDDAYPRICEINDEXVSMARKET = 'TwoHundredDayPriceIndexVsMarket';
	/**
	 * Constant for value 'PriceMomentumThisWeek'
	 * @return string 'PriceMomentumThisWeek'
	 */
	const VALUE_PRICEMOMENTUMTHISWEEK = 'PriceMomentumThisWeek';
	/**
	 * Constant for value 'PriceMomentumPriorWeek'
	 * @return string 'PriceMomentumPriorWeek'
	 */
	const VALUE_PRICEMOMENTUMPRIORWEEK = 'PriceMomentumPriorWeek';
	/**
	 * Constant for value 'Beta60Month'
	 * @return string 'Beta60Month'
	 */
	const VALUE_BETA60MONTH = 'Beta60Month';
	/**
	 * Constant for value 'Beta36Month'
	 * @return string 'Beta36Month'
	 */
	const VALUE_BETA36MONTH = 'Beta36Month';
	/**
	 * Constant for value 'TotalVolumeThisWeek'
	 * @return string 'TotalVolumeThisWeek'
	 */
	const VALUE_TOTALVOLUMETHISWEEK = 'TotalVolumeThisWeek';
	/**
	 * Constant for value 'TotalVolumeLast10Days'
	 * @return string 'TotalVolumeLast10Days'
	 */
	const VALUE_TOTALVOLUMELAST10DAYS = 'TotalVolumeLast10Days';
	/**
	 * Constant for value 'TotalVolumeLast20Days'
	 * @return string 'TotalVolumeLast20Days'
	 */
	const VALUE_TOTALVOLUMELAST20DAYS = 'TotalVolumeLast20Days';
	/**
	 * Constant for value 'TotalVolumeLast2Weeks'
	 * @return string 'TotalVolumeLast2Weeks'
	 */
	const VALUE_TOTALVOLUMELAST2WEEKS = 'TotalVolumeLast2Weeks';
	/**
	 * Constant for value 'TotalVolumeLast4Weeks'
	 * @return string 'TotalVolumeLast4Weeks'
	 */
	const VALUE_TOTALVOLUMELAST4WEEKS = 'TotalVolumeLast4Weeks';
	/**
	 * Constant for value 'TotalVolumeLast13Weeks'
	 * @return string 'TotalVolumeLast13Weeks'
	 */
	const VALUE_TOTALVOLUMELAST13WEEKS = 'TotalVolumeLast13Weeks';
	/**
	 * Constant for value 'TotalVolumeLast26Weeks'
	 * @return string 'TotalVolumeLast26Weeks'
	 */
	const VALUE_TOTALVOLUMELAST26WEEKS = 'TotalVolumeLast26Weeks';
	/**
	 * Constant for value 'TotalVolumeLast52Weeks'
	 * @return string 'TotalVolumeLast52Weeks'
	 */
	const VALUE_TOTALVOLUMELAST52WEEKS = 'TotalVolumeLast52Weeks';
	/**
	 * Constant for value 'TotalVolumeThisMonth'
	 * @return string 'TotalVolumeThisMonth'
	 */
	const VALUE_TOTALVOLUMETHISMONTH = 'TotalVolumeThisMonth';
	/**
	 * Constant for value 'TotalVolumeLast3Months'
	 * @return string 'TotalVolumeLast3Months'
	 */
	const VALUE_TOTALVOLUMELAST3MONTHS = 'TotalVolumeLast3Months';
	/**
	 * Constant for value 'TotalVolumeLast6Months'
	 * @return string 'TotalVolumeLast6Months'
	 */
	const VALUE_TOTALVOLUMELAST6MONTHS = 'TotalVolumeLast6Months';
	/**
	 * Constant for value 'TotalVolumeLast9Months'
	 * @return string 'TotalVolumeLast9Months'
	 */
	const VALUE_TOTALVOLUMELAST9MONTHS = 'TotalVolumeLast9Months';
	/**
	 * Constant for value 'TotalVolumeLast12Months'
	 * @return string 'TotalVolumeLast12Months'
	 */
	const VALUE_TOTALVOLUMELAST12MONTHS = 'TotalVolumeLast12Months';
	/**
	 * Constant for value 'TotalVolumeYearToDate'
	 * @return string 'TotalVolumeYearToDate'
	 */
	const VALUE_TOTALVOLUMEYEARTODATE = 'TotalVolumeYearToDate';
	/**
	 * Constant for value 'AverageDailyVolumeLast10Days'
	 * @return string 'AverageDailyVolumeLast10Days'
	 */
	const VALUE_AVERAGEDAILYVOLUMELAST10DAYS = 'AverageDailyVolumeLast10Days';
	/**
	 * Constant for value 'AverageDailyVolumeLast20Days'
	 * @return string 'AverageDailyVolumeLast20Days'
	 */
	const VALUE_AVERAGEDAILYVOLUMELAST20DAYS = 'AverageDailyVolumeLast20Days';
	/**
	 * Constant for value 'AverageDailyVolumeLast2Weeks'
	 * @return string 'AverageDailyVolumeLast2Weeks'
	 */
	const VALUE_AVERAGEDAILYVOLUMELAST2WEEKS = 'AverageDailyVolumeLast2Weeks';
	/**
	 * Constant for value 'AverageDailyVolumeLast4Weeks'
	 * @return string 'AverageDailyVolumeLast4Weeks'
	 */
	const VALUE_AVERAGEDAILYVOLUMELAST4WEEKS = 'AverageDailyVolumeLast4Weeks';
	/**
	 * Constant for value 'AverageDailyVolumeLast13Weeks'
	 * @return string 'AverageDailyVolumeLast13Weeks'
	 */
	const VALUE_AVERAGEDAILYVOLUMELAST13WEEKS = 'AverageDailyVolumeLast13Weeks';
	/**
	 * Constant for value 'AverageDailyVolumeLast26Weeks'
	 * @return string 'AverageDailyVolumeLast26Weeks'
	 */
	const VALUE_AVERAGEDAILYVOLUMELAST26WEEKS = 'AverageDailyVolumeLast26Weeks';
	/**
	 * Constant for value 'AverageDailyVolumeLast52Weeks'
	 * @return string 'AverageDailyVolumeLast52Weeks'
	 */
	const VALUE_AVERAGEDAILYVOLUMELAST52WEEKS = 'AverageDailyVolumeLast52Weeks';
	/**
	 * Constant for value 'AverageDailyVolumeThisMonth'
	 * @return string 'AverageDailyVolumeThisMonth'
	 */
	const VALUE_AVERAGEDAILYVOLUMETHISMONTH = 'AverageDailyVolumeThisMonth';
	/**
	 * Constant for value 'AverageDailyVolumeLast3Months'
	 * @return string 'AverageDailyVolumeLast3Months'
	 */
	const VALUE_AVERAGEDAILYVOLUMELAST3MONTHS = 'AverageDailyVolumeLast3Months';
	/**
	 * Constant for value 'AverageDailyVolumeLast6Months'
	 * @return string 'AverageDailyVolumeLast6Months'
	 */
	const VALUE_AVERAGEDAILYVOLUMELAST6MONTHS = 'AverageDailyVolumeLast6Months';
	/**
	 * Constant for value 'AverageDailyVolumeLast9Months'
	 * @return string 'AverageDailyVolumeLast9Months'
	 */
	const VALUE_AVERAGEDAILYVOLUMELAST9MONTHS = 'AverageDailyVolumeLast9Months';
	/**
	 * Constant for value 'AverageDailyVolumeLast12Months'
	 * @return string 'AverageDailyVolumeLast12Months'
	 */
	const VALUE_AVERAGEDAILYVOLUMELAST12MONTHS = 'AverageDailyVolumeLast12Months';
	/**
	 * Constant for value 'AverageDailyVolumeYearToDate'
	 * @return string 'AverageDailyVolumeYearToDate'
	 */
	const VALUE_AVERAGEDAILYVOLUMEYEARTODATE = 'AverageDailyVolumeYearToDate';
	/**
	 * Constant for value 'AverageDailyPercentPriceChange4weeks'
	 * @return string 'AverageDailyPercentPriceChange4weeks'
	 */
	const VALUE_AVERAGEDAILYPERCENTPRICECHANGE4WEEKS = 'AverageDailyPercentPriceChange4weeks';
	/**
	 * Constant for value 'AverageDailyPercentVolumeChange4weeks'
	 * @return string 'AverageDailyPercentVolumeChange4weeks'
	 */
	const VALUE_AVERAGEDAILYPERCENTVOLUMECHANGE4WEEKS = 'AverageDailyPercentVolumeChange4weeks';
	/**
	 * Constant for value 'DailyVolumeAsPercentOf10DayAverageVolume'
	 * @return string 'DailyVolumeAsPercentOf10DayAverageVolume'
	 */
	const VALUE_DAILYVOLUMEASPERCENTOF10DAYAVERAGEVOLUME = 'DailyVolumeAsPercentOf10DayAverageVolume';
	/**
	 * Constant for value 'ThisWeekVolumeTimesWeeksChange'
	 * @return string 'ThisWeekVolumeTimesWeeksChange'
	 */
	const VALUE_THISWEEKVOLUMETIMESWEEKSCHANGE = 'ThisWeekVolumeTimesWeeksChange';
	/**
	 * Constant for value 'ThisWeeksDollarVolume'
	 * @return string 'ThisWeeksDollarVolume'
	 */
	const VALUE_THISWEEKSDOLLARVOLUME = 'ThisWeeksDollarVolume';
	/**
	 * Constant for value 'WeeklyVolumeAsPercentOfSharesOutstanding'
	 * @return string 'WeeklyVolumeAsPercentOfSharesOutstanding'
	 */
	const VALUE_WEEKLYVOLUMEASPERCENTOFSHARESOUTSTANDING = 'WeeklyVolumeAsPercentOfSharesOutstanding';
	/**
	 * Constant for value 'LiquidityRatio'
	 * @return string 'LiquidityRatio'
	 */
	const VALUE_LIQUIDITYRATIO = 'LiquidityRatio';
	/**
	 * Constant for value 'OnBalanceVolumeIndexLast4Weeks'
	 * @return string 'OnBalanceVolumeIndexLast4Weeks'
	 */
	const VALUE_ONBALANCEVOLUMEINDEXLAST4WEEKS = 'OnBalanceVolumeIndexLast4Weeks';
	/**
	 * Constant for value 'LastYearClose'
	 * @return string 'LastYearClose'
	 */
	const VALUE_LASTYEARCLOSE = 'LastYearClose';
	/**
	 * Constant for value 'OneYearClose'
	 * @return string 'OneYearClose'
	 */
	const VALUE_ONEYEARCLOSE = 'OneYearClose';
	/**
	 * Constant for value 'NineMonthClose'
	 * @return string 'NineMonthClose'
	 */
	const VALUE_NINEMONTHCLOSE = 'NineMonthClose';
	/**
	 * Constant for value 'SixMonthClose'
	 * @return string 'SixMonthClose'
	 */
	const VALUE_SIXMONTHCLOSE = 'SixMonthClose';
	/**
	 * Constant for value 'ThreeMonthClose'
	 * @return string 'ThreeMonthClose'
	 */
	const VALUE_THREEMONTHCLOSE = 'ThreeMonthClose';
	/**
	 * Constant for value 'OneMonthClose'
	 * @return string 'OneMonthClose'
	 */
	const VALUE_ONEMONTHCLOSE = 'OneMonthClose';
	/**
	 * Constant for value 'LastSplitRatio'
	 * @return string 'LastSplitRatio'
	 */
	const VALUE_LASTSPLITRATIO = 'LastSplitRatio';
	/**
	 * Constant for value 'LastSplitDate'
	 * @return string 'LastSplitDate'
	 */
	const VALUE_LASTSPLITDATE = 'LastSplitDate';
	/**
	 * Constant for value 'SplitFactorDate'
	 * @return string 'SplitFactorDate'
	 */
	const VALUE_SPLITFACTORDATE = 'SplitFactorDate';
	/**
	 * Constant for value 'SplitFactor'
	 * @return string 'SplitFactor'
	 */
	const VALUE_SPLITFACTOR = 'SplitFactor';
	/**
	 * Constant for value 'ManagementShares'
	 * @return string 'ManagementShares'
	 */
	const VALUE_MANAGEMENTSHARES = 'ManagementShares';
	/**
	 * Constant for value 'ManagementOwnership'
	 * @return string 'ManagementOwnership'
	 */
	const VALUE_MANAGEMENTOWNERSHIP = 'ManagementOwnership';
	/**
	 * Constant for value 'TotalAssets'
	 * @return string 'TotalAssets'
	 */
	const VALUE_TOTALASSETS = 'TotalAssets';
	/**
	 * Constant for value 'TotalLiabilities'
	 * @return string 'TotalLiabilities'
	 */
	const VALUE_TOTALLIABILITIES = 'TotalLiabilities';
	/**
	 * Constant for value 'TotalDebt'
	 * @return string 'TotalDebt'
	 */
	const VALUE_TOTALDEBT = 'TotalDebt';
	/**
	 * Constant for value 'TotalCash'
	 * @return string 'TotalCash'
	 */
	const VALUE_TOTALCASH = 'TotalCash';
	/**
	 * Constant for value 'TotalRevenue'
	 * @return string 'TotalRevenue'
	 */
	const VALUE_TOTALREVENUE = 'TotalRevenue';
	/**
	 * Constant for value 'TotalExpenses'
	 * @return string 'TotalExpenses'
	 */
	const VALUE_TOTALEXPENSES = 'TotalExpenses';
	/**
	 * Constant for value 'TotalOperatingExpenses'
	 * @return string 'TotalOperatingExpenses'
	 */
	const VALUE_TOTALOPERATINGEXPENSES = 'TotalOperatingExpenses';
	/**
	 * Constant for value 'OperatingIncome'
	 * @return string 'OperatingIncome'
	 */
	const VALUE_OPERATINGINCOME = 'OperatingIncome';
	/**
	 * Constant for value 'NetIncome'
	 * @return string 'NetIncome'
	 */
	const VALUE_NETINCOME = 'NetIncome';
	/**
	 * Constant for value 'TotalEnterpriseValue'
	 * @return string 'TotalEnterpriseValue'
	 */
	const VALUE_TOTALENTERPRISEVALUE = 'TotalEnterpriseValue';
	/**
	 * Constant for value 'TotalBookValue'
	 * @return string 'TotalBookValue'
	 */
	const VALUE_TOTALBOOKVALUE = 'TotalBookValue';
	/**
	 * Constant for value 'TangibleBookValue'
	 * @return string 'TangibleBookValue'
	 */
	const VALUE_TANGIBLEBOOKVALUE = 'TangibleBookValue';
	/**
	 * Constant for value 'EBIT'
	 * @return string 'EBIT'
	 */
	const VALUE_EBIT = 'EBIT';
	/**
	 * Constant for value 'EBITDA'
	 * @return string 'EBITDA'
	 */
	const VALUE_EBITDA = 'EBITDA';
	/**
	 * Constant for value 'RevenuePerShare'
	 * @return string 'RevenuePerShare'
	 */
	const VALUE_REVENUEPERSHARE = 'RevenuePerShare';
	/**
	 * Constant for value 'RevenueGrowth'
	 * @return string 'RevenueGrowth'
	 */
	const VALUE_REVENUEGROWTH = 'RevenueGrowth';
	/**
	 * Constant for value 'EarningGrowth'
	 * @return string 'EarningGrowth'
	 */
	const VALUE_EARNINGGROWTH = 'EarningGrowth';
	/**
	 * Constant for value 'Beta'
	 * @return string 'Beta'
	 */
	const VALUE_BETA = 'Beta';
	/**
	 * Constant for value 'Auditors'
	 * @return string 'Auditors'
	 */
	const VALUE_AUDITORS = 'Auditors';
	/**
	 * Constant for value 'MostRecentAuditorsReport'
	 * @return string 'MostRecentAuditorsReport'
	 */
	const VALUE_MOSTRECENTAUDITORSREPORT = 'MostRecentAuditorsReport';
	/**
	 * Constant for value 'StockOptionsIndicator'
	 * @return string 'StockOptionsIndicator'
	 */
	const VALUE_STOCKOPTIONSINDICATOR = 'StockOptionsIndicator';
	/**
	 * Constant for value 'MaintainsMailingList'
	 * @return string 'MaintainsMailingList'
	 */
	const VALUE_MAINTAINSMAILINGLIST = 'MaintainsMailingList';
	/**
	 * Constant for value 'Currency'
	 * @return string 'Currency'
	 */
	const VALUE_CURRENCY = 'Currency';
	/**
	 * Constant for value 'CommonIssueType'
	 * @return string 'CommonIssueType'
	 */
	const VALUE_COMMONISSUETYPE = 'CommonIssueType';
	/**
	 * Constant for value 'InBankruptcy'
	 * @return string 'InBankruptcy'
	 */
	const VALUE_INBANKRUPTCY = 'InBankruptcy';
	/**
	 * Constant for value 'DividendReinvestment'
	 * @return string 'DividendReinvestment'
	 */
	const VALUE_DIVIDENDREINVESTMENT = 'DividendReinvestment';
	/**
	 * Constant for value 'DomicileIndicatorCode'
	 * @return string 'DomicileIndicatorCode'
	 */
	const VALUE_DOMICILEINDICATORCODE = 'DomicileIndicatorCode';
	/**
	 * Constant for value 'ADRToOrdinaryRatio'
	 * @return string 'ADRToOrdinaryRatio'
	 */
	const VALUE_ADRTOORDINARYRATIO = 'ADRToOrdinaryRatio';
	/**
	 * Constant for value 'DowJonesMembership'
	 * @return string 'DowJonesMembership'
	 */
	const VALUE_DOWJONESMEMBERSHIP = 'DowJonesMembership';
	/**
	 * Constant for value 'SAndPMembership'
	 * @return string 'SAndPMembership'
	 */
	const VALUE_SANDPMEMBERSHIP = 'SAndPMembership';
	/**
	 * Constant for value 'SAndPMidCapMembership'
	 * @return string 'SAndPMidCapMembership'
	 */
	const VALUE_SANDPMIDCAPMEMBERSHIP = 'SAndPMidCapMembership';
	/**
	 * Constant for value 'SAndPSmallCapMembership'
	 * @return string 'SAndPSmallCapMembership'
	 */
	const VALUE_SANDPSMALLCAPMEMBERSHIP = 'SAndPSmallCapMembership';
	/**
	 * Constant for value 'Russell1000Membership'
	 * @return string 'Russell1000Membership'
	 */
	const VALUE_RUSSELL1000MEMBERSHIP = 'Russell1000Membership';
	/**
	 * Constant for value 'Russell2000Membership'
	 * @return string 'Russell2000Membership'
	 */
	const VALUE_RUSSELL2000MEMBERSHIP = 'Russell2000Membership';
	/**
	 * Constant for value 'Forbes500Membership'
	 * @return string 'Forbes500Membership'
	 */
	const VALUE_FORBES500MEMBERSHIP = 'Forbes500Membership';
	/**
	 * Constant for value 'Fortune500IndustrialMembership'
	 * @return string 'Fortune500IndustrialMembership'
	 */
	const VALUE_FORTUNE500INDUSTRIALMEMBERSHIP = 'Fortune500IndustrialMembership';
	/**
	 * Constant for value 'Fortune500ServicesMembership'
	 * @return string 'Fortune500ServicesMembership'
	 */
	const VALUE_FORTUNE500SERVICESMEMBERSHIP = 'Fortune500ServicesMembership';
	/**
	 * Constant for value 'SAndPTop100Membership'
	 * @return string 'SAndPTop100Membership'
	 */
	const VALUE_SANDPTOP100MEMBERSHIP = 'SAndPTop100Membership';
	/**
	 * Constant for value 'ShortInterestShares'
	 * @return string 'ShortInterestShares'
	 */
	const VALUE_SHORTINTERESTSHARES = 'ShortInterestShares';
	/**
	 * Constant for value 'ShortInterestRatio'
	 * @return string 'ShortInterestRatio'
	 */
	const VALUE_SHORTINTERESTRATIO = 'ShortInterestRatio';
	/**
	 * Constant for value 'ShortInterestAsAPercentageOfFloat'
	 * @return string 'ShortInterestAsAPercentageOfFloat'
	 */
	const VALUE_SHORTINTERESTASAPERCENTAGEOFFLOAT = 'ShortInterestAsAPercentageOfFloat';
	/**
	 * Constant for value 'InsiderSharesBought'
	 * @return string 'InsiderSharesBought'
	 */
	const VALUE_INSIDERSHARESBOUGHT = 'InsiderSharesBought';
	/**
	 * Constant for value 'InsiderSharesSold'
	 * @return string 'InsiderSharesSold'
	 */
	const VALUE_INSIDERSHARESSOLD = 'InsiderSharesSold';
	/**
	 * Constant for value 'NetInsiderTransactions'
	 * @return string 'NetInsiderTransactions'
	 */
	const VALUE_NETINSIDERTRANSACTIONS = 'NetInsiderTransactions';
	/**
	 * Constant for value 'PercentOfSharesOutstandingHeldByInsiders'
	 * @return string 'PercentOfSharesOutstandingHeldByInsiders'
	 */
	const VALUE_PERCENTOFSHARESOUTSTANDINGHELDBYINSIDERS = 'PercentOfSharesOutstandingHeldByInsiders';
	/**
	 * Constant for value 'NumberOfInstitutionalSharesBought'
	 * @return string 'NumberOfInstitutionalSharesBought'
	 */
	const VALUE_NUMBEROFINSTITUTIONALSHARESBOUGHT = 'NumberOfInstitutionalSharesBought';
	/**
	 * Constant for value 'NumberOfInstitutionalSharesSold'
	 * @return string 'NumberOfInstitutionalSharesSold'
	 */
	const VALUE_NUMBEROFINSTITUTIONALSHARESSOLD = 'NumberOfInstitutionalSharesSold';
	/**
	 * Constant for value 'SharesHeldByInstitutions'
	 * @return string 'SharesHeldByInstitutions'
	 */
	const VALUE_SHARESHELDBYINSTITUTIONS = 'SharesHeldByInstitutions';
	/**
	 * Constant for value 'NumberOfInstitutionsHoldingShares'
	 * @return string 'NumberOfInstitutionsHoldingShares'
	 */
	const VALUE_NUMBEROFINSTITUTIONSHOLDINGSHARES = 'NumberOfInstitutionsHoldingShares';
	/**
	 * Constant for value 'PercentOfSharesOutstandingHeldByInstitutions'
	 * @return string 'PercentOfSharesOutstandingHeldByInstitutions'
	 */
	const VALUE_PERCENTOFSHARESOUTSTANDINGHELDBYINSTITUTIONS = 'PercentOfSharesOutstandingHeldByInstitutions';
	/**
	 * Constant for value 'TorontoMembership'
	 * @return string 'TorontoMembership'
	 */
	const VALUE_TORONTOMEMBERSHIP = 'TorontoMembership';
	/**
	 * Constant for value 'TorontoIndustrySectorCode'
	 * @return string 'TorontoIndustrySectorCode'
	 */
	const VALUE_TORONTOINDUSTRYSECTORCODE = 'TorontoIndustrySectorCode';
	/**
	 * Constant for value 'MarketCapitalization'
	 * @return string 'MarketCapitalization'
	 */
	const VALUE_MARKETCAPITALIZATION = 'MarketCapitalization';
	/**
	 * Constant for value 'MarketCapitalizationAllShares'
	 * @return string 'MarketCapitalizationAllShares'
	 */
	const VALUE_MARKETCAPITALIZATIONALLSHARES = 'MarketCapitalizationAllShares';
	/**
	 * Constant for value 'IntradayMarketCapitalizationAllShares'
	 * @return string 'IntradayMarketCapitalizationAllShares'
	 */
	const VALUE_INTRADAYMARKETCAPITALIZATIONALLSHARES = 'IntradayMarketCapitalizationAllShares';
	/**
	 * Constant for value 'MarketValueAsPercentOfRevenues'
	 * @return string 'MarketValueAsPercentOfRevenues'
	 */
	const VALUE_MARKETVALUEASPERCENTOFREVENUES = 'MarketValueAsPercentOfRevenues';
	/**
	 * Constant for value 'SharesOutstanding'
	 * @return string 'SharesOutstanding'
	 */
	const VALUE_SHARESOUTSTANDING = 'SharesOutstanding';
	/**
	 * Constant for value 'SharesOutstandingClassA'
	 * @return string 'SharesOutstandingClassA'
	 */
	const VALUE_SHARESOUTSTANDINGCLASSA = 'SharesOutstandingClassA';
	/**
	 * Constant for value 'SharesOutstandingClassB'
	 * @return string 'SharesOutstandingClassB'
	 */
	const VALUE_SHARESOUTSTANDINGCLASSB = 'SharesOutstandingClassB';
	/**
	 * Constant for value 'DateOfSharesOutstanding'
	 * @return string 'DateOfSharesOutstanding'
	 */
	const VALUE_DATEOFSHARESOUTSTANDING = 'DateOfSharesOutstanding';
	/**
	 * Constant for value 'LatestBalanceSheetSharesOutstanding'
	 * @return string 'LatestBalanceSheetSharesOutstanding'
	 */
	const VALUE_LATESTBALANCESHEETSHARESOUTSTANDING = 'LatestBalanceSheetSharesOutstanding';
	/**
	 * Constant for value 'LatestBalanceSheetDate'
	 * @return string 'LatestBalanceSheetDate'
	 */
	const VALUE_LATESTBALANCESHEETDATE = 'LatestBalanceSheetDate';
	/**
	 * Constant for value 'Float'
	 * @return string 'Float'
	 */
	const VALUE_FLOAT = 'Float';
	/**
	 * Constant for value 'FloatAsAPercentOfSharesOutstanding'
	 * @return string 'FloatAsAPercentOfSharesOutstanding'
	 */
	const VALUE_FLOATASAPERCENTOFSHARESOUTSTANDING = 'FloatAsAPercentOfSharesOutstanding';
	/**
	 * Constant for value 'LatestFiscalDate'
	 * @return string 'LatestFiscalDate'
	 */
	const VALUE_LATESTFISCALDATE = 'LatestFiscalDate';
	/**
	 * Constant for value 'LatestFiscalRevenue'
	 * @return string 'LatestFiscalRevenue'
	 */
	const VALUE_LATESTFISCALREVENUE = 'LatestFiscalRevenue';
	/**
	 * Constant for value 'LatestFiscalEPS'
	 * @return string 'LatestFiscalEPS'
	 */
	const VALUE_LATESTFISCALEPS = 'LatestFiscalEPS';
	/**
	 * Constant for value 'LatestFiscalDividendsPerShare'
	 * @return string 'LatestFiscalDividendsPerShare'
	 */
	const VALUE_LATESTFISCALDIVIDENDSPERSHARE = 'LatestFiscalDividendsPerShare';
	/**
	 * Constant for value 'BasicEPS'
	 * @return string 'BasicEPS'
	 */
	const VALUE_BASICEPS = 'BasicEPS';
	/**
	 * Constant for value 'DilutedEPS'
	 * @return string 'DilutedEPS'
	 */
	const VALUE_DILUTEDEPS = 'DilutedEPS';
	/**
	 * Constant for value 'LTMDate'
	 * @return string 'LTMDate'
	 */
	const VALUE_LTMDATE = 'LTMDate';
	/**
	 * Constant for value 'LatestQuarterIndicator'
	 * @return string 'LatestQuarterIndicator'
	 */
	const VALUE_LATESTQUARTERINDICATOR = 'LatestQuarterIndicator';
	/**
	 * Constant for value 'LTMRevenue'
	 * @return string 'LTMRevenue'
	 */
	const VALUE_LTMREVENUE = 'LTMRevenue';
	/**
	 * Constant for value 'LTMIncomeFromContinuingOperations'
	 * @return string 'LTMIncomeFromContinuingOperations'
	 */
	const VALUE_LTMINCOMEFROMCONTINUINGOPERATIONS = 'LTMIncomeFromContinuingOperations';
	/**
	 * Constant for value 'LTMIncomeFromTotalOperations'
	 * @return string 'LTMIncomeFromTotalOperations'
	 */
	const VALUE_LTMINCOMEFROMTOTALOPERATIONS = 'LTMIncomeFromTotalOperations';
	/**
	 * Constant for value 'LTMDilutedEPSFromContinuingOperations'
	 * @return string 'LTMDilutedEPSFromContinuingOperations'
	 */
	const VALUE_LTMDILUTEDEPSFROMCONTINUINGOPERATIONS = 'LTMDilutedEPSFromContinuingOperations';
	/**
	 * Constant for value 'LTMDilutedEPSFromTotalOperations'
	 * @return string 'LTMDilutedEPSFromTotalOperations'
	 */
	const VALUE_LTMDILUTEDEPSFROMTOTALOPERATIONS = 'LTMDilutedEPSFromTotalOperations';
	/**
	 * Constant for value 'LTMDilutedEPSFromTotalOperations1YearAgo'
	 * @return string 'LTMDilutedEPSFromTotalOperations1YearAgo'
	 */
	const VALUE_LTMDILUTEDEPSFROMTOTALOPERATIONS1YEARAGO = 'LTMDilutedEPSFromTotalOperations1YearAgo';
	/**
	 * Constant for value 'LTMProfitMarginFromContinuingOperations'
	 * @return string 'LTMProfitMarginFromContinuingOperations'
	 */
	const VALUE_LTMPROFITMARGINFROMCONTINUINGOPERATIONS = 'LTMProfitMarginFromContinuingOperations';
	/**
	 * Constant for value 'LTMProfitMarginFromTotalOperations'
	 * @return string 'LTMProfitMarginFromTotalOperations'
	 */
	const VALUE_LTMPROFITMARGINFROMTOTALOPERATIONS = 'LTMProfitMarginFromTotalOperations';
	/**
	 * Constant for value 'PriceSales'
	 * @return string 'PriceSales'
	 */
	const VALUE_PRICESALES = 'PriceSales';
	/**
	 * Constant for value 'CurrentRevenuePerShare'
	 * @return string 'CurrentRevenuePerShare'
	 */
	const VALUE_CURRENTREVENUEPERSHARE = 'CurrentRevenuePerShare';
	/**
	 * Constant for value 'CurrentRevenuePerEmployee'
	 * @return string 'CurrentRevenuePerEmployee'
	 */
	const VALUE_CURRENTREVENUEPEREMPLOYEE = 'CurrentRevenuePerEmployee';
	/**
	 * Constant for value 'CurrentNetIncomeFromTotalOperationsPerEmployee'
	 * @return string 'CurrentNetIncomeFromTotalOperationsPerEmployee'
	 */
	const VALUE_CURRENTNETINCOMEFROMTOTALOPERATIONSPEREMPLOYEE = 'CurrentNetIncomeFromTotalOperationsPerEmployee';
	/**
	 * Constant for value 'PercentChangeRevenueThisYearToDateVsLastYTD'
	 * @return string 'PercentChangeRevenueThisYearToDateVsLastYTD'
	 */
	const VALUE_PERCENTCHANGEREVENUETHISYEARTODATEVSLASTYTD = 'PercentChangeRevenueThisYearToDateVsLastYTD';
	/**
	 * Constant for value 'PercentChangeRevenueCurrentQuarterVsQuarter1YearAgo'
	 * @return string 'PercentChangeRevenueCurrentQuarterVsQuarter1YearAgo'
	 */
	const VALUE_PERCENTCHANGEREVENUECURRENTQUARTERVSQUARTER1YEARAGO = 'PercentChangeRevenueCurrentQuarterVsQuarter1YearAgo';
	/**
	 * Constant for value 'PercentChangeRevenueAnnualVsLastAnnual'
	 * @return string 'PercentChangeRevenueAnnualVsLastAnnual'
	 */
	const VALUE_PERCENTCHANGEREVENUEANNUALVSLASTANNUAL = 'PercentChangeRevenueAnnualVsLastAnnual';
	/**
	 * Constant for value 'PercentChangeEarningsThisYearToDateVsLastYTD'
	 * @return string 'PercentChangeEarningsThisYearToDateVsLastYTD'
	 */
	const VALUE_PERCENTCHANGEEARNINGSTHISYEARTODATEVSLASTYTD = 'PercentChangeEarningsThisYearToDateVsLastYTD';
	/**
	 * Constant for value 'PercentChangeEarningsCurrentQuarterVsQuarter1YearAgo'
	 * @return string 'PercentChangeEarningsCurrentQuarterVsQuarter1YearAgo'
	 */
	const VALUE_PERCENTCHANGEEARNINGSCURRENTQUARTERVSQUARTER1YEARAGO = 'PercentChangeEarningsCurrentQuarterVsQuarter1YearAgo';
	/**
	 * Constant for value 'PercentChangeEarningsAnnualVsLastAnnual'
	 * @return string 'PercentChangeEarningsAnnualVsLastAnnual'
	 */
	const VALUE_PERCENTCHANGEEARNINGSANNUALVSLASTANNUAL = 'PercentChangeEarningsAnnualVsLastAnnual';
	/**
	 * Constant for value 'ChangeInEPSThisYearToDateVsLastYTD'
	 * @return string 'ChangeInEPSThisYearToDateVsLastYTD'
	 */
	const VALUE_CHANGEINEPSTHISYEARTODATEVSLASTYTD = 'ChangeInEPSThisYearToDateVsLastYTD';
	/**
	 * Constant for value 'ChangeInEPSThisQuarterVs1YearAgo'
	 * @return string 'ChangeInEPSThisQuarterVs1YearAgo'
	 */
	const VALUE_CHANGEINEPSTHISQUARTERVS1YEARAGO = 'ChangeInEPSThisQuarterVs1YearAgo';
	/**
	 * Constant for value 'ChangeInEPSThisFiscalYearVs1YearAgo'
	 * @return string 'ChangeInEPSThisFiscalYearVs1YearAgo'
	 */
	const VALUE_CHANGEINEPSTHISFISCALYEARVS1YEARAGO = 'ChangeInEPSThisFiscalYearVs1YearAgo';
	/**
	 * Constant for value 'ChangeIn12MonthEPSVs1YearAgo'
	 * @return string 'ChangeIn12MonthEPSVs1YearAgo'
	 */
	const VALUE_CHANGEIN12MONTHEPSVS1YEARAGO = 'ChangeIn12MonthEPSVs1YearAgo';
	/**
	 * Constant for value 'PercentChangeInEPSThisYearToDateVsLastYTD'
	 * @return string 'PercentChangeInEPSThisYearToDateVsLastYTD'
	 */
	const VALUE_PERCENTCHANGEINEPSTHISYEARTODATEVSLASTYTD = 'PercentChangeInEPSThisYearToDateVsLastYTD';
	/**
	 * Constant for value 'PercentChangeInEPSThisQuarterVs1YrAgo'
	 * @return string 'PercentChangeInEPSThisQuarterVs1YrAgo'
	 */
	const VALUE_PERCENTCHANGEINEPSTHISQUARTERVS1YRAGO = 'PercentChangeInEPSThisQuarterVs1YrAgo';
	/**
	 * Constant for value 'PercentChangeInEPSThisYearVs1YearAgo'
	 * @return string 'PercentChangeInEPSThisYearVs1YearAgo'
	 */
	const VALUE_PERCENTCHANGEINEPSTHISYEARVS1YEARAGO = 'PercentChangeInEPSThisYearVs1YearAgo';
	/**
	 * Constant for value 'PercentChangeIn12MonthEPSvs1YearAgo'
	 * @return string 'PercentChangeIn12MonthEPSvs1YearAgo'
	 */
	const VALUE_PERCENTCHANGEIN12MONTHEPSVS1YEARAGO = 'PercentChangeIn12MonthEPSvs1YearAgo';
	/**
	 * Constant for value 'LastDividendDate'
	 * @return string 'LastDividendDate'
	 */
	const VALUE_LASTDIVIDENDDATE = 'LastDividendDate';
	/**
	 * Constant for value 'LastDividendExDate'
	 * @return string 'LastDividendExDate'
	 */
	const VALUE_LASTDIVIDENDEXDATE = 'LastDividendExDate';
	/**
	 * Constant for value 'DividendCode'
	 * @return string 'DividendCode'
	 */
	const VALUE_DIVIDENDCODE = 'DividendCode';
	/**
	 * Constant for value 'DividendRate'
	 * @return string 'DividendRate'
	 */
	const VALUE_DIVIDENDRATE = 'DividendRate';
	/**
	 * Constant for value 'LastDividendYield'
	 * @return string 'LastDividendYield'
	 */
	const VALUE_LASTDIVIDENDYIELD = 'LastDividendYield';
	/**
	 * Constant for value 'PayoutFromTotalOperationsLatestFiscalYear'
	 * @return string 'PayoutFromTotalOperationsLatestFiscalYear'
	 */
	const VALUE_PAYOUTFROMTOTALOPERATIONSLATESTFISCALYEAR = 'PayoutFromTotalOperationsLatestFiscalYear';
	/**
	 * Constant for value 'PayoutRatio'
	 * @return string 'PayoutRatio'
	 */
	const VALUE_PAYOUTRATIO = 'PayoutRatio';
	/**
	 * Constant for value 'Payout5YearAverageFromTotalOperations'
	 * @return string 'Payout5YearAverageFromTotalOperations'
	 */
	const VALUE_PAYOUT5YEARAVERAGEFROMTOTALOPERATIONS = 'Payout5YearAverageFromTotalOperations';
	/**
	 * Constant for value 'DividendYield5YearAverage'
	 * @return string 'DividendYield5YearAverage'
	 */
	const VALUE_DIVIDENDYIELD5YEARAVERAGE = 'DividendYield5YearAverage';
	/**
	 * Constant for value 'FiveYearAnnualRevenueGrowthRate'
	 * @return string 'FiveYearAnnualRevenueGrowthRate'
	 */
	const VALUE_FIVEYEARANNUALREVENUEGROWTHRATE = 'FiveYearAnnualRevenueGrowthRate';
	/**
	 * Constant for value 'ConsistencyOf5YearRevenueGrowthRate'
	 * @return string 'ConsistencyOf5YearRevenueGrowthRate'
	 */
	const VALUE_CONSISTENCYOF5YEARREVENUEGROWTHRATE = 'ConsistencyOf5YearRevenueGrowthRate';
	/**
	 * Constant for value 'ThreeYearAnnualRevenueGrowthRate'
	 * @return string 'ThreeYearAnnualRevenueGrowthRate'
	 */
	const VALUE_THREEYEARANNUALREVENUEGROWTHRATE = 'ThreeYearAnnualRevenueGrowthRate';
	/**
	 * Constant for value 'FiveYearAnnualIncomeGrowthRate'
	 * @return string 'FiveYearAnnualIncomeGrowthRate'
	 */
	const VALUE_FIVEYEARANNUALINCOMEGROWTHRATE = 'FiveYearAnnualIncomeGrowthRate';
	/**
	 * Constant for value 'ConsistencyOfFiveYearIncomeGrowthRate'
	 * @return string 'ConsistencyOfFiveYearIncomeGrowthRate'
	 */
	const VALUE_CONSISTENCYOFFIVEYEARINCOMEGROWTHRATE = 'ConsistencyOfFiveYearIncomeGrowthRate';
	/**
	 * Constant for value 'ThreeYearAnnualIncomeGrowthRate'
	 * @return string 'ThreeYearAnnualIncomeGrowthRate'
	 */
	const VALUE_THREEYEARANNUALINCOMEGROWTHRATE = 'ThreeYearAnnualIncomeGrowthRate';
	/**
	 * Constant for value 'FiveYearAnnualDividendGrowthRate'
	 * @return string 'FiveYearAnnualDividendGrowthRate'
	 */
	const VALUE_FIVEYEARANNUALDIVIDENDGROWTHRATE = 'FiveYearAnnualDividendGrowthRate';
	/**
	 * Constant for value 'ConsistencyOfFiveYearDividendGrowthRate'
	 * @return string 'ConsistencyOfFiveYearDividendGrowthRate'
	 */
	const VALUE_CONSISTENCYOFFIVEYEARDIVIDENDGROWTHRATE = 'ConsistencyOfFiveYearDividendGrowthRate';
	/**
	 * Constant for value 'ThreeYearAnnualDividendGrowthRate'
	 * @return string 'ThreeYearAnnualDividendGrowthRate'
	 */
	const VALUE_THREEYEARANNUALDIVIDENDGROWTHRATE = 'ThreeYearAnnualDividendGrowthRate';
	/**
	 * Constant for value 'FiveYearAnnualCapitalSpendingGrowthRate'
	 * @return string 'FiveYearAnnualCapitalSpendingGrowthRate'
	 */
	const VALUE_FIVEYEARANNUALCAPITALSPENDINGGROWTHRATE = 'FiveYearAnnualCapitalSpendingGrowthRate';
	/**
	 * Constant for value 'ThreeYearAnnualCapitalSpendingGrowthRate'
	 * @return string 'ThreeYearAnnualCapitalSpendingGrowthRate'
	 */
	const VALUE_THREEYEARANNUALCAPITALSPENDINGGROWTHRATE = 'ThreeYearAnnualCapitalSpendingGrowthRate';
	/**
	 * Constant for value 'FiveYearAnnualRAndDGrowthRate'
	 * @return string 'FiveYearAnnualRAndDGrowthRate'
	 */
	const VALUE_FIVEYEARANNUALRANDDGROWTHRATE = 'FiveYearAnnualRAndDGrowthRate';
	/**
	 * Constant for value 'ThreeYearAnnualRAndDGrowthRate'
	 * @return string 'ThreeYearAnnualRAndDGrowthRate'
	 */
	const VALUE_THREEYEARANNUALRANDDGROWTHRATE = 'ThreeYearAnnualRAndDGrowthRate';
	/**
	 * Constant for value 'FiveYearAnnualNormalizedIncomeGrowthRate'
	 * @return string 'FiveYearAnnualNormalizedIncomeGrowthRate'
	 */
	const VALUE_FIVEYEARANNUALNORMALIZEDINCOMEGROWTHRATE = 'FiveYearAnnualNormalizedIncomeGrowthRate';
	/**
	 * Constant for value 'ThreeYearAnnualNormalizedIncomeGrowthRate'
	 * @return string 'ThreeYearAnnualNormalizedIncomeGrowthRate'
	 */
	const VALUE_THREEYEARANNUALNORMALIZEDINCOMEGROWTHRATE = 'ThreeYearAnnualNormalizedIncomeGrowthRate';
	/**
	 * Constant for value 'PERatio'
	 * @return string 'PERatio'
	 */
	const VALUE_PERATIO = 'PERatio';
	/**
	 * Constant for value 'TrailingPE'
	 * @return string 'TrailingPE'
	 */
	const VALUE_TRAILINGPE = 'TrailingPE';
	/**
	 * Constant for value 'ForwardPE'
	 * @return string 'ForwardPE'
	 */
	const VALUE_FORWARDPE = 'ForwardPE';
	/**
	 * Constant for value 'PERatio1MonthAgo'
	 * @return string 'PERatio1MonthAgo'
	 */
	const VALUE_PERATIO1MONTHAGO = 'PERatio1MonthAgo';
	/**
	 * Constant for value 'PERatio26WeeksAgo'
	 * @return string 'PERatio26WeeksAgo'
	 */
	const VALUE_PERATIO26WEEKSAGO = 'PERatio26WeeksAgo';
	/**
	 * Constant for value 'PERatio52WeeksAgo'
	 * @return string 'PERatio52WeeksAgo'
	 */
	const VALUE_PERATIO52WEEKSAGO = 'PERatio52WeeksAgo';
	/**
	 * Constant for value 'FiveYearHighPERatio'
	 * @return string 'FiveYearHighPERatio'
	 */
	const VALUE_FIVEYEARHIGHPERATIO = 'FiveYearHighPERatio';
	/**
	 * Constant for value 'FiveYearAverageHighPERatio'
	 * @return string 'FiveYearAverageHighPERatio'
	 */
	const VALUE_FIVEYEARAVERAGEHIGHPERATIO = 'FiveYearAverageHighPERatio';
	/**
	 * Constant for value 'FiveYearLowPERatio'
	 * @return string 'FiveYearLowPERatio'
	 */
	const VALUE_FIVEYEARLOWPERATIO = 'FiveYearLowPERatio';
	/**
	 * Constant for value 'FiveYearAverageLowPERatio'
	 * @return string 'FiveYearAverageLowPERatio'
	 */
	const VALUE_FIVEYEARAVERAGELOWPERATIO = 'FiveYearAverageLowPERatio';
	/**
	 * Constant for value 'FiveYearAveragePERatio'
	 * @return string 'FiveYearAveragePERatio'
	 */
	const VALUE_FIVEYEARAVERAGEPERATIO = 'FiveYearAveragePERatio';
	/**
	 * Constant for value 'CurrentPEAsPercentOf5YearAveragePERatio'
	 * @return string 'CurrentPEAsPercentOf5YearAveragePERatio'
	 */
	const VALUE_CURRENTPEASPERCENTOF5YEARAVERAGEPERATIO = 'CurrentPEAsPercentOf5YearAveragePERatio';
	/**
	 * Constant for value 'PERatioAsPercentOfIndustryGroupPERatio'
	 * @return string 'PERatioAsPercentOfIndustryGroupPERatio'
	 */
	const VALUE_PERATIOASPERCENTOFINDUSTRYGROUPPERATIO = 'PERatioAsPercentOfIndustryGroupPERatio';
	/**
	 * Constant for value 'PERatioAsPercentOfIndustryPERatio'
	 * @return string 'PERatioAsPercentOfIndustryPERatio'
	 */
	const VALUE_PERATIOASPERCENTOFINDUSTRYPERATIO = 'PERatioAsPercentOfIndustryPERatio';
	/**
	 * Constant for value 'Current12MonthNormalizedPERatio'
	 * @return string 'Current12MonthNormalizedPERatio'
	 */
	const VALUE_CURRENT12MONTHNORMALIZEDPERATIO = 'Current12MonthNormalizedPERatio';
	/**
	 * Constant for value 'LatestFullContextQuarterEndingDate'
	 * @return string 'LatestFullContextQuarterEndingDate'
	 */
	const VALUE_LATESTFULLCONTEXTQUARTERENDINGDATE = 'LatestFullContextQuarterEndingDate';
	/**
	 * Constant for value 'GrossMargin'
	 * @return string 'GrossMargin'
	 */
	const VALUE_GROSSMARGIN = 'GrossMargin';
	/**
	 * Constant for value 'EBITMargin'
	 * @return string 'EBITMargin'
	 */
	const VALUE_EBITMARGIN = 'EBITMargin';
	/**
	 * Constant for value 'EBITDAMargin'
	 * @return string 'EBITDAMargin'
	 */
	const VALUE_EBITDAMARGIN = 'EBITDAMargin';
	/**
	 * Constant for value 'EBITPerShare'
	 * @return string 'EBITPerShare'
	 */
	const VALUE_EBITPERSHARE = 'EBITPerShare';
	/**
	 * Constant for value 'EBITDAPerShare'
	 * @return string 'EBITDAPerShare'
	 */
	const VALUE_EBITDAPERSHARE = 'EBITDAPerShare';
	/**
	 * Constant for value 'PreTaxProfitMargin'
	 * @return string 'PreTaxProfitMargin'
	 */
	const VALUE_PRETAXPROFITMARGIN = 'PreTaxProfitMargin';
	/**
	 * Constant for value 'InterestCoverage'
	 * @return string 'InterestCoverage'
	 */
	const VALUE_INTERESTCOVERAGE = 'InterestCoverage';
	/**
	 * Constant for value 'CurrentRatio'
	 * @return string 'CurrentRatio'
	 */
	const VALUE_CURRENTRATIO = 'CurrentRatio';
	/**
	 * Constant for value 'QuickRatio'
	 * @return string 'QuickRatio'
	 */
	const VALUE_QUICKRATIO = 'QuickRatio';
	/**
	 * Constant for value 'LeverageRatio'
	 * @return string 'LeverageRatio'
	 */
	const VALUE_LEVERAGERATIO = 'LeverageRatio';
	/**
	 * Constant for value 'ReceivablesTurnover'
	 * @return string 'ReceivablesTurnover'
	 */
	const VALUE_RECEIVABLESTURNOVER = 'ReceivablesTurnover';
	/**
	 * Constant for value 'InventoryTurnover'
	 * @return string 'InventoryTurnover'
	 */
	const VALUE_INVENTORYTURNOVER = 'InventoryTurnover';
	/**
	 * Constant for value 'AssetTurnover'
	 * @return string 'AssetTurnover'
	 */
	const VALUE_ASSETTURNOVER = 'AssetTurnover';
	/**
	 * Constant for value 'RevenueToAssets'
	 * @return string 'RevenueToAssets'
	 */
	const VALUE_REVENUETOASSETS = 'RevenueToAssets';
	/**
	 * Constant for value 'ROEFromTotalOperations'
	 * @return string 'ROEFromTotalOperations'
	 */
	const VALUE_ROEFROMTOTALOPERATIONS = 'ROEFromTotalOperations';
	/**
	 * Constant for value 'ReturnOnInvestedCapital'
	 * @return string 'ReturnOnInvestedCapital'
	 */
	const VALUE_RETURNONINVESTEDCAPITAL = 'ReturnOnInvestedCapital';
	/**
	 * Constant for value 'ReturnOnEBITGeneratingCapital'
	 * @return string 'ReturnOnEBITGeneratingCapital'
	 */
	const VALUE_RETURNONEBITGENERATINGCAPITAL = 'ReturnOnEBITGeneratingCapital';
	/**
	 * Constant for value 'EarningsYield'
	 * @return string 'EarningsYield'
	 */
	const VALUE_EARNINGSYIELD = 'EarningsYield';
	/**
	 * Constant for value 'ReturnOnAssets'
	 * @return string 'ReturnOnAssets'
	 */
	const VALUE_RETURNONASSETS = 'ReturnOnAssets';
	/**
	 * Constant for value 'DebtCommonEquityRatio'
	 * @return string 'DebtCommonEquityRatio'
	 */
	const VALUE_DEBTCOMMONEQUITYRATIO = 'DebtCommonEquityRatio';
	/**
	 * Constant for value 'PriceBook'
	 * @return string 'PriceBook'
	 */
	const VALUE_PRICEBOOK = 'PriceBook';
	/**
	 * Constant for value 'BookValue'
	 * @return string 'BookValue'
	 */
	const VALUE_BOOKVALUE = 'BookValue';
	/**
	 * Constant for value 'BookValuePerShare'
	 * @return string 'BookValuePerShare'
	 */
	const VALUE_BOOKVALUEPERSHARE = 'BookValuePerShare';
	/**
	 * Constant for value 'TotalDebtEquityRatio'
	 * @return string 'TotalDebtEquityRatio'
	 */
	const VALUE_TOTALDEBTEQUITYRATIO = 'TotalDebtEquityRatio';
	/**
	 * Constant for value 'LongTermDebtToTotalCapital'
	 * @return string 'LongTermDebtToTotalCapital'
	 */
	const VALUE_LONGTERMDEBTTOTOTALCAPITAL = 'LongTermDebtToTotalCapital';
	/**
	 * Constant for value 'SGAndAAsPercentOfSales'
	 * @return string 'SGAndAAsPercentOfSales'
	 */
	const VALUE_SGANDAASPERCENTOFSALES = 'SGAndAAsPercentOfSales';
	/**
	 * Constant for value 'RAndDAsPercentOfSales'
	 * @return string 'RAndDAsPercentOfSales'
	 */
	const VALUE_RANDDASPERCENTOFSALES = 'RAndDAsPercentOfSales';
	/**
	 * Constant for value 'ReceivablesPerDaySales'
	 * @return string 'ReceivablesPerDaySales'
	 */
	const VALUE_RECEIVABLESPERDAYSALES = 'ReceivablesPerDaySales';
	/**
	 * Constant for value 'DaysCGSInInventory'
	 * @return string 'DaysCGSInInventory'
	 */
	const VALUE_DAYSCGSININVENTORY = 'DaysCGSInInventory';
	/**
	 * Constant for value 'WorkingCapitalPerShare'
	 * @return string 'WorkingCapitalPerShare'
	 */
	const VALUE_WORKINGCAPITALPERSHARE = 'WorkingCapitalPerShare';
	/**
	 * Constant for value 'CashPerShare'
	 * @return string 'CashPerShare'
	 */
	const VALUE_CASHPERSHARE = 'CashPerShare';
	/**
	 * Constant for value 'CashFlowPerShare'
	 * @return string 'CashFlowPerShare'
	 */
	const VALUE_CASHFLOWPERSHARE = 'CashFlowPerShare';
	/**
	 * Constant for value 'FreeCashFlowPerShare'
	 * @return string 'FreeCashFlowPerShare'
	 */
	const VALUE_FREECASHFLOWPERSHARE = 'FreeCashFlowPerShare';
	/**
	 * Constant for value 'TangibleBookValuePerShare'
	 * @return string 'TangibleBookValuePerShare'
	 */
	const VALUE_TANGIBLEBOOKVALUEPERSHARE = 'TangibleBookValuePerShare';
	/**
	 * Constant for value 'PriceCashFlowRatio'
	 * @return string 'PriceCashFlowRatio'
	 */
	const VALUE_PRICECASHFLOWRATIO = 'PriceCashFlowRatio';
	/**
	 * Constant for value 'PriceFreeCashFlowRatio'
	 * @return string 'PriceFreeCashFlowRatio'
	 */
	const VALUE_PRICEFREECASHFLOWRATIO = 'PriceFreeCashFlowRatio';
	/**
	 * Constant for value 'PriceTangibleBook'
	 * @return string 'PriceTangibleBook'
	 */
	const VALUE_PRICETANGIBLEBOOK = 'PriceTangibleBook';
	/**
	 * Constant for value 'FiveYearAverageReturnOnEquity'
	 * @return string 'FiveYearAverageReturnOnEquity'
	 */
	const VALUE_FIVEYEARAVERAGERETURNONEQUITY = 'FiveYearAverageReturnOnEquity';
	/**
	 * Constant for value 'FiveYearAverageReturnOnAssets'
	 * @return string 'FiveYearAverageReturnOnAssets'
	 */
	const VALUE_FIVEYEARAVERAGERETURNONASSETS = 'FiveYearAverageReturnOnAssets';
	/**
	 * Constant for value 'FiveYearAverageReturnOnInvestedCapital'
	 * @return string 'FiveYearAverageReturnOnInvestedCapital'
	 */
	const VALUE_FIVEYEARAVERAGERETURNONINVESTEDCAPITAL = 'FiveYearAverageReturnOnInvestedCapital';
	/**
	 * Constant for value 'FiveYearAverageGrossProfitMargin'
	 * @return string 'FiveYearAverageGrossProfitMargin'
	 */
	const VALUE_FIVEYEARAVERAGEGROSSPROFITMARGIN = 'FiveYearAverageGrossProfitMargin';
	/**
	 * Constant for value 'FiveYearAveragePreTaxProfitMargin'
	 * @return string 'FiveYearAveragePreTaxProfitMargin'
	 */
	const VALUE_FIVEYEARAVERAGEPRETAXPROFITMARGIN = 'FiveYearAveragePreTaxProfitMargin';
	/**
	 * Constant for value 'FiveYearAveragePostTaxProfitMargin'
	 * @return string 'FiveYearAveragePostTaxProfitMargin'
	 */
	const VALUE_FIVEYEARAVERAGEPOSTTAXPROFITMARGIN = 'FiveYearAveragePostTaxProfitMargin';
	/**
	 * Constant for value 'FiveYearAverageNetProfitMargin'
	 * @return string 'FiveYearAverageNetProfitMargin'
	 */
	const VALUE_FIVEYEARAVERAGENETPROFITMARGIN = 'FiveYearAverageNetProfitMargin';
	/**
	 * Constant for value 'FiveYearAverageRAndDAsAPercentOfSales'
	 * @return string 'FiveYearAverageRAndDAsAPercentOfSales'
	 */
	const VALUE_FIVEYEARAVERAGERANDDASAPERCENTOFSALES = 'FiveYearAverageRAndDAsAPercentOfSales';
	/**
	 * Constant for value 'FiveYearAverageSGAndAAsAPercentOfSales'
	 * @return string 'FiveYearAverageSGAndAAsAPercentOfSales'
	 */
	const VALUE_FIVEYEARAVERAGESGANDAASAPERCENTOFSALES = 'FiveYearAverageSGAndAAsAPercentOfSales';
	/**
	 * Constant for value 'FiveYearAverageDebtEquityRatio'
	 * @return string 'FiveYearAverageDebtEquityRatio'
	 */
	const VALUE_FIVEYEARAVERAGEDEBTEQUITYRATIO = 'FiveYearAverageDebtEquityRatio';
	/**
	 * Constant for value 'FiveYearAverageTotalDebtEquityRatio'
	 * @return string 'FiveYearAverageTotalDebtEquityRatio'
	 */
	const VALUE_FIVEYEARAVERAGETOTALDEBTEQUITYRATIO = 'FiveYearAverageTotalDebtEquityRatio';
	/**
	 * Constant for value 'EarningsQuarter'
	 * @return string 'EarningsQuarter'
	 */
	const VALUE_EARNINGSQUARTER = 'EarningsQuarter';
	/**
	 * Constant for value 'NextEarningsDateQuarter'
	 * @return string 'NextEarningsDateQuarter'
	 */
	const VALUE_NEXTEARNINGSDATEQUARTER = 'NextEarningsDateQuarter';
	/**
	 * Constant for value 'NextEarningDate'
	 * @return string 'NextEarningDate'
	 */
	const VALUE_NEXTEARNINGDATE = 'NextEarningDate';
	/**
	 * Constant for value 'NextEarningTime'
	 * @return string 'NextEarningTime'
	 */
	const VALUE_NEXTEARNINGTIME = 'NextEarningTime';
	/**
	 * Constant for value 'NextEarningDateType'
	 * @return string 'NextEarningDateType'
	 */
	const VALUE_NEXTEARNINGDATETYPE = 'NextEarningDateType';
	/**
	 * Constant for value 'EarningConfirmationDate'
	 * @return string 'EarningConfirmationDate'
	 */
	const VALUE_EARNINGCONFIRMATIONDATE = 'EarningConfirmationDate';
	/**
	 * Constant for value 'LastEarningUpdateDate'
	 * @return string 'LastEarningUpdateDate'
	 */
	const VALUE_LASTEARNINGUPDATEDATE = 'LastEarningUpdateDate';
	/**
	 * Constant for value 'Q1EarningDate'
	 * @return string 'Q1EarningDate'
	 */
	const VALUE_Q1EARNINGDATE = 'Q1EarningDate';
	/**
	 * Constant for value 'Q2EarningDate'
	 * @return string 'Q2EarningDate'
	 */
	const VALUE_Q2EARNINGDATE = 'Q2EarningDate';
	/**
	 * Constant for value 'Q3EarningDate'
	 * @return string 'Q3EarningDate'
	 */
	const VALUE_Q3EARNINGDATE = 'Q3EarningDate';
	/**
	 * Constant for value 'Q4EarningDate'
	 * @return string 'Q4EarningDate'
	 */
	const VALUE_Q4EARNINGDATE = 'Q4EarningDate';
	/**
	 * Constant for value 'NextEarningEstimateAverage'
	 * @return string 'NextEarningEstimateAverage'
	 */
	const VALUE_NEXTEARNINGESTIMATEAVERAGE = 'NextEarningEstimateAverage';
	/**
	 * Constant for value 'LastEarningEstimateAverage'
	 * @return string 'LastEarningEstimateAverage'
	 */
	const VALUE_LASTEARNINGESTIMATEAVERAGE = 'LastEarningEstimateAverage';
	/**
	 * Constant for value 'EarningEstimateChangeAverage'
	 * @return string 'EarningEstimateChangeAverage'
	 */
	const VALUE_EARNINGESTIMATECHANGEAVERAGE = 'EarningEstimateChangeAverage';
	/**
	 * Constant for value 'ConferenceCallDate'
	 * @return string 'ConferenceCallDate'
	 */
	const VALUE_CONFERENCECALLDATE = 'ConferenceCallDate';
	/**
	 * Constant for value 'ConferenceCallTime'
	 * @return string 'ConferenceCallTime'
	 */
	const VALUE_CONFERENCECALLTIME = 'ConferenceCallTime';
	/**
	 * Constant for value 'ConferenceCallNumber'
	 * @return string 'ConferenceCallNumber'
	 */
	const VALUE_CONFERENCECALLNUMBER = 'ConferenceCallNumber';
	/**
	 * Constant for value 'ConferenceCallPasscode'
	 * @return string 'ConferenceCallPasscode'
	 */
	const VALUE_CONFERENCECALLPASSCODE = 'ConferenceCallPasscode';
	/**
	 * Constant for value 'ConferenceCallBroadcastURL'
	 * @return string 'ConferenceCallBroadcastURL'
	 */
	const VALUE_CONFERENCECALLBROADCASTURL = 'ConferenceCallBroadcastURL';
	/**
	 * Constant for value 'ConferenceCallNotes'
	 * @return string 'ConferenceCallNotes'
	 */
	const VALUE_CONFERENCECALLNOTES = 'ConferenceCallNotes';
	/**
	 * Constant for value 'ConferenceCallInternationalNumber'
	 * @return string 'ConferenceCallInternationalNumber'
	 */
	const VALUE_CONFERENCECALLINTERNATIONALNUMBER = 'ConferenceCallInternationalNumber';
	/**
	 * Constant for value 'ConferenceCallInternationalPasscode'
	 * @return string 'ConferenceCallInternationalPasscode'
	 */
	const VALUE_CONFERENCECALLINTERNATIONALPASSCODE = 'ConferenceCallInternationalPasscode';
	/**
	 * Constant for value 'ReplayDate'
	 * @return string 'ReplayDate'
	 */
	const VALUE_REPLAYDATE = 'ReplayDate';
	/**
	 * Constant for value 'ReplayNumber'
	 * @return string 'ReplayNumber'
	 */
	const VALUE_REPLAYNUMBER = 'ReplayNumber';
	/**
	 * Constant for value 'ReplayPasscode'
	 * @return string 'ReplayPasscode'
	 */
	const VALUE_REPLAYPASSCODE = 'ReplayPasscode';
	/**
	 * Constant for value 'ReplayWebcastURL'
	 * @return string 'ReplayWebcastURL'
	 */
	const VALUE_REPLAYWEBCASTURL = 'ReplayWebcastURL';
	/**
	 * Constant for value 'ReplayEndDate'
	 * @return string 'ReplayEndDate'
	 */
	const VALUE_REPLAYENDDATE = 'ReplayEndDate';
	/**
	 * Constant for value 'ReplayWebcastEndDate'
	 * @return string 'ReplayWebcastEndDate'
	 */
	const VALUE_REPLAYWEBCASTENDDATE = 'ReplayWebcastEndDate';
	/**
	 * Constant for value 'PEGRatio'
	 * @return string 'PEGRatio'
	 */
	const VALUE_PEGRATIO = 'PEGRatio';
	/**
	 * Constant for value 'BoardOfDirectorMeetingDate'
	 * @return string 'BoardOfDirectorMeetingDate'
	 */
	const VALUE_BOARDOFDIRECTORMEETINGDATE = 'BoardOfDirectorMeetingDate';
	/**
	 * Constant for value 'TrueFloat'
	 * @return string 'TrueFloat'
	 */
	const VALUE_TRUEFLOAT = 'TrueFloat';
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constructor
	 * @return XiScreenerTypeFundamentalTypes
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
		return in_array($_value,array(self::VALUE_NAME,self::VALUE_TICKER,self::VALUE_CUSIP,self::VALUE_CIK,self::VALUE_CATEGORY,self::VALUE_EXCHANGE,self::VALUE_INDUSTRY,self::VALUE_INDUSTRYGROUP,self::VALUE_SECTOR,self::VALUE_LOGO,self::VALUE_IRSNUMBER,self::VALUE_DUNS,self::VALUE_SECNAME,self::VALUE_EXCHANGENAME,self::VALUE_ADDRESSNAME,self::VALUE_LONGNAME,self::VALUE_DESCRIPTION,self::VALUE_LONGDESCRIPTION,self::VALUE_MGNUMBER,self::VALUE_MGNUMBEROTHERCOMMON,self::VALUE_PRIMARYSICCODE,self::VALUE_SECONDARYSICCODE1,self::VALUE_SECONDARYSICCODE2,self::VALUE_SECONDARYSICCODE3,self::VALUE_SECONDARYSICCODE4,self::VALUE_SECONDARYSICCODE5,self::VALUE_SECONDARYSICCODE6,self::VALUE_SECONDARYSICCODE7,self::VALUE_SECONDARYSICCODE8,self::VALUE_SECONDARYSICCODE9,self::VALUE_SECONDARYSICCODE10,self::VALUE_NAICSCODE,self::VALUE_SCRIPGROUP,self::VALUE_ADDRESS1,self::VALUE_ADDRESS2,self::VALUE_CITY,self::VALUE_STATE,self::VALUE_ZIP,self::VALUE_COUNTRY,self::VALUE_PHONE,self::VALUE_FAX,self::VALUE_STATEOFINCORPORATION,self::VALUE_EMAIL,self::VALUE_CEO,self::VALUE_EMPLOYEES,self::VALUE_WEBDOMAIN,self::VALUE_WEBSITE,self::VALUE_NUMBEROFEXCHANGES,self::VALUE_SANDPRATING,self::VALUE_FISCALYEAR,self::VALUE_MOSTRECENTQUARTER,self::VALUE_LASTANNUALREPORT,self::VALUE_LASTQUARTERLY,self::VALUE_LASTPROXYSTATEMENT,self::VALUE_LASTANNUALREPORTDATE,self::VALUE_LASTQUARTERLYREPORTDATE,self::VALUE_LASTDELAYEDPRICE,self::VALUE_LASTREALTIMEPRICE,self::VALUE_LASTTRADEDATE,self::VALUE_LASTOPEN,self::VALUE_LASTHIGH,self::VALUE_LASTLOW,self::VALUE_LASTMARKETCLOSEPRICE,self::VALUE_LASTVOLUME,self::VALUE_LASTFISCALYEARAVERAGEPRICE,self::VALUE_AVERAGEPRICETHISFISCALQUARTER,self::VALUE_AVERAGEPRICEFISCALQUARTERMINUS1,self::VALUE_AVERAGEPRICEFISCALQUARTERMINUS2,self::VALUE_AVERAGEPRICEFISCALQUARTERMINUS3,self::VALUE_AVERAGEPRICEFISCALQUARTERMINUS4,self::VALUE_AVERAGEPRICEFISCALQUARTERMINUS5,self::VALUE_AVERAGEPRICEFISCALQUARTERMINUS6,self::VALUE_AVERAGEPRICEFISCALQUARTERMINUS7,self::VALUE_AVERAGEPRICEFISCALQUARTERMINUS8,self::VALUE_AVERAGEPRICEFISCALQUARTERMINUS9,self::VALUE_AVERAGEPRICEFISCALQUARTERMINUS10,self::VALUE_AVERAGEPRICEFISCALQUARTERMINUS11,self::VALUE_AVERAGEPRICEFISCALQUARTERMINUS12,self::VALUE_AVERAGEPRICETHISFISCALYEAR,self::VALUE_AVERAGEPRICEFISCALYEARMINUS1,self::VALUE_AVERAGEPRICEFISCALYEARMINUS2,self::VALUE_AVERAGEPRICEFISCALYEARMINUS3,self::VALUE_AVERAGEPRICEFISCALYEARMINUS4,self::VALUE_AVERAGEPRICEFISCALYEARMINUS5,self::VALUE_AVERAGEPRICEFISCALYEARMINUS6,self::VALUE_AVERAGEPRICEFISCALYEARMINUS7,self::VALUE_AVERAGEPRICEFISCALYEARMINUS8,self::VALUE_AVERAGEPRICEFISCALYEARMINUS9,self::VALUE_AVERAGEPRICEFISCALYEARMINUS10,self::VALUE_AVERAGEPRICEFISCALYEARMINUS11,self::VALUE_AVERAGEPRICEFISCALYEARMINUS12,self::VALUE_AVERAGEVOLUMETHISFISCALYEAR,self::VALUE_AVERAGEVOLUMEFISCALYEARMINUS1,self::VALUE_AVERAGEVOLUMEFISCALYEARMINUS2,self::VALUE_AVERAGEVOLUMEFISCALYEARMINUS3,self::VALUE_AVERAGEVOLUMEFISCALYEARMINUS4,self::VALUE_AVERAGEVOLUMEFISCALYEARMINUS5,self::VALUE_AVERAGEVOLUMEFISCALYEARMINUS6,self::VALUE_AVERAGEVOLUMEFISCALYEARMINUS7,self::VALUE_AVERAGEVOLUMEFISCALYEARMINUS8,self::VALUE_AVERAGEVOLUMEFISCALYEARMINUS9,self::VALUE_AVERAGEVOLUMEFISCALYEARMINUS10,self::VALUE_AVERAGEVOLUMEFISCALYEARMINUS11,self::VALUE_AVERAGEVOLUMEFISCALYEARMINUS12,self::VALUE_HIGHPRICETHISFISCALYEAR,self::VALUE_HIGHPRICEFISCALYEARMINUS1,self::VALUE_HIGHPRICEFISCALYEARMINUS2,self::VALUE_HIGHPRICEFISCALYEARMINUS3,self::VALUE_HIGHPRICEFISCALYEARMINUS4,self::VALUE_HIGHPRICEFISCALYEARMINUS5,self::VALUE_HIGHPRICEFISCALYEARMINUS6,self::VALUE_HIGHPRICEFISCALYEARMINUS7,self::VALUE_HIGHPRICEFISCALYEARMINUS8,self::VALUE_HIGHPRICEFISCALYEARMINUS9,self::VALUE_HIGHPRICEFISCALYEARMINUS10,self::VALUE_HIGHPRICEFISCALYEARMINUS11,self::VALUE_HIGHPRICEFISCALYEARMINUS12,self::VALUE_LOWPRICETHISFISCALYEAR,self::VALUE_LOWPRICEFISCALYEARMINUS1,self::VALUE_LOWPRICEFISCALYEARMINUS2,self::VALUE_LOWPRICEFISCALYEARMINUS3,self::VALUE_LOWPRICEFISCALYEARMINUS4,self::VALUE_LOWPRICEFISCALYEARMINUS5,self::VALUE_LOWPRICEFISCALYEARMINUS6,self::VALUE_LOWPRICEFISCALYEARMINUS7,self::VALUE_LOWPRICEFISCALYEARMINUS8,self::VALUE_LOWPRICEFISCALYEARMINUS9,self::VALUE_LOWPRICEFISCALYEARMINUS10,self::VALUE_LOWPRICEFISCALYEARMINUS11,self::VALUE_LOWPRICEFISCALYEARMINUS12,self::VALUE_HIGHPRICELAST4WEEKS,self::VALUE_HIGHPRICELAST13WEEKS,self::VALUE_HIGHPRICELAST26WEEKS,self::VALUE_HIGHPRICELAST52WEEKS,self::VALUE_HIGHPRICELASTMONTH,self::VALUE_HIGHPRICELAST3MONTHS,self::VALUE_HIGHPRICELAST6MONTHS,self::VALUE_HIGHPRICELAST9MONTHS,self::VALUE_HIGHPRICELAST12MONTHS,self::VALUE_HIGHPRICEYEARTODATE,self::VALUE_LOWPRICELAST4WEEKS,self::VALUE_LOWPRICELAST13WEEKS,self::VALUE_LOWPRICELAST26WEEKS,self::VALUE_LOWPRICELAST52WEEKS,self::VALUE_LOWPRICELASTMONTH,self::VALUE_LOWPRICELAST3MONTHS,self::VALUE_LOWPRICELAST6MONTHS,self::VALUE_LOWPRICELAST9MONTHS,self::VALUE_LOWPRICELAST12MONTHS,self::VALUE_LOWPRICEYEARTODATE,self::VALUE_CLOSEPRICE4WEEKSAGO,self::VALUE_CLOSEPRICE13WEEKSAGO,self::VALUE_CLOSEPRICE26WEEKSAGO,self::VALUE_CLOSEPRICE52WEEKSAGO,self::VALUE_CLOSEPRICELASTMONTH,self::VALUE_CLOSEPRICE3MONTHSAGO,self::VALUE_CLOSEPRICE6MONTHSAGO,self::VALUE_CLOSEPRICE9MONTHSAGO,self::VALUE_CLOSEPRICE12MONTHSAGO,self::VALUE_FIVEYEARHIGHPRICE,self::VALUE_FIVEYEARLOWPRICE,self::VALUE_PERIODAVERAGEPRICE,self::VALUE_ONEYEARHIGH,self::VALUE_ONEYEARLOW,self::VALUE_ONEYEARHIGHDATE,self::VALUE_ONEYEARLOWDATE,self::VALUE_ONEYEARHIGHINTRADAY,self::VALUE_ONEYEARLOWINTRADAY,self::VALUE_PERCENTPRICECHANGE1WEEK,self::VALUE_PERCENTPRICECHANGE4WEEKS,self::VALUE_PERCENTPRICECHANGE13WEEKS,self::VALUE_PERCENTPRICECHANGE1MONTH,self::VALUE_PERCENTPRICECHANGELAST10DAYS,self::VALUE_PERCENTPRICECHANGELAST26WEEKS,self::VALUE_PERCENTPRICECHANGELAST52WEEKS,self::VALUE_PERCENTPRICECHANGEYEARTODATE,self::VALUE_FIVEDAYMOVINGAVERAGE,self::VALUE_TENDAYMOVINGAVERAGE,self::VALUE_TENWEEKMOVINGAVERAGE,self::VALUE_THIRTYWEEKMOVINGAVERAGE,self::VALUE_TWOHUNDREDDAYMOVINGAVERAGE,self::VALUE_LATESTCLOSEASPERCENTOF5DAYAVERAGE,self::VALUE_LATESTCLOSEASPERCENTOF10DAYAVERAGE,self::VALUE_LATESTCLOSEASPERCENTOF10WEEKAVERAGE,self::VALUE_LATESTCLOSEASPERCENTOF30WEEKAVERAGE,self::VALUE_LATESTCLOSEASPERCENTOF200DAYAVERAGE,self::VALUE_LATESTCLOSEASPERCENTOF52WEEKHIGH,self::VALUE_LATESTCLOSEASPERCENTOF52WEEKLOW,self::VALUE_LATESTCLOSEASPERCENTOF5YEARHIGH,self::VALUE_LATESTCLOSEASPERCENTOF5YEARLOW,self::VALUE_PRICECHANGEVSMARKET1WEEK,self::VALUE_PRICECHANGEVSMARKET4WEEKS,self::VALUE_PRICECHANGEVSMARKET13WEEKS,self::VALUE_PRICECHANGEVSMARKET26WEEKS,self::VALUE_PRICECHANGEVSMARKET52WEEKS,self::VALUE_PRICECHANGEVSMARKETTHISMONTH,self::VALUE_PRICECHANGEVSMARKET3MONTHS,self::VALUE_PRICECHANGEVSMARKET6MONTHS,self::VALUE_PRICECHANGEVSMARKET9MONTHS,self::VALUE_PRICECHANGEVSMARKET12MONTHS,self::VALUE_PRICECHANGEVSMARKETYEARTODATE,self::VALUE_TWOHUNDREDDAYPRICEINDEXVSMARKET,self::VALUE_PRICEMOMENTUMTHISWEEK,self::VALUE_PRICEMOMENTUMPRIORWEEK,self::VALUE_BETA60MONTH,self::VALUE_BETA36MONTH,self::VALUE_TOTALVOLUMETHISWEEK,self::VALUE_TOTALVOLUMELAST10DAYS,self::VALUE_TOTALVOLUMELAST20DAYS,self::VALUE_TOTALVOLUMELAST2WEEKS,self::VALUE_TOTALVOLUMELAST4WEEKS,self::VALUE_TOTALVOLUMELAST13WEEKS,self::VALUE_TOTALVOLUMELAST26WEEKS,self::VALUE_TOTALVOLUMELAST52WEEKS,self::VALUE_TOTALVOLUMETHISMONTH,self::VALUE_TOTALVOLUMELAST3MONTHS,self::VALUE_TOTALVOLUMELAST6MONTHS,self::VALUE_TOTALVOLUMELAST9MONTHS,self::VALUE_TOTALVOLUMELAST12MONTHS,self::VALUE_TOTALVOLUMEYEARTODATE,self::VALUE_AVERAGEDAILYVOLUMELAST10DAYS,self::VALUE_AVERAGEDAILYVOLUMELAST20DAYS,self::VALUE_AVERAGEDAILYVOLUMELAST2WEEKS,self::VALUE_AVERAGEDAILYVOLUMELAST4WEEKS,self::VALUE_AVERAGEDAILYVOLUMELAST13WEEKS,self::VALUE_AVERAGEDAILYVOLUMELAST26WEEKS,self::VALUE_AVERAGEDAILYVOLUMELAST52WEEKS,self::VALUE_AVERAGEDAILYVOLUMETHISMONTH,self::VALUE_AVERAGEDAILYVOLUMELAST3MONTHS,self::VALUE_AVERAGEDAILYVOLUMELAST6MONTHS,self::VALUE_AVERAGEDAILYVOLUMELAST9MONTHS,self::VALUE_AVERAGEDAILYVOLUMELAST12MONTHS,self::VALUE_AVERAGEDAILYVOLUMEYEARTODATE,self::VALUE_AVERAGEDAILYPERCENTPRICECHANGE4WEEKS,self::VALUE_AVERAGEDAILYPERCENTVOLUMECHANGE4WEEKS,self::VALUE_DAILYVOLUMEASPERCENTOF10DAYAVERAGEVOLUME,self::VALUE_THISWEEKVOLUMETIMESWEEKSCHANGE,self::VALUE_THISWEEKSDOLLARVOLUME,self::VALUE_WEEKLYVOLUMEASPERCENTOFSHARESOUTSTANDING,self::VALUE_LIQUIDITYRATIO,self::VALUE_ONBALANCEVOLUMEINDEXLAST4WEEKS,self::VALUE_LASTYEARCLOSE,self::VALUE_ONEYEARCLOSE,self::VALUE_NINEMONTHCLOSE,self::VALUE_SIXMONTHCLOSE,self::VALUE_THREEMONTHCLOSE,self::VALUE_ONEMONTHCLOSE,self::VALUE_LASTSPLITRATIO,self::VALUE_LASTSPLITDATE,self::VALUE_SPLITFACTORDATE,self::VALUE_SPLITFACTOR,self::VALUE_MANAGEMENTSHARES,self::VALUE_MANAGEMENTOWNERSHIP,self::VALUE_TOTALASSETS,self::VALUE_TOTALLIABILITIES,self::VALUE_TOTALDEBT,self::VALUE_TOTALCASH,self::VALUE_TOTALREVENUE,self::VALUE_TOTALEXPENSES,self::VALUE_TOTALOPERATINGEXPENSES,self::VALUE_OPERATINGINCOME,self::VALUE_NETINCOME,self::VALUE_TOTALENTERPRISEVALUE,self::VALUE_TOTALBOOKVALUE,self::VALUE_TANGIBLEBOOKVALUE,self::VALUE_EBIT,self::VALUE_EBITDA,self::VALUE_REVENUEPERSHARE,self::VALUE_REVENUEGROWTH,self::VALUE_EARNINGGROWTH,self::VALUE_BETA,self::VALUE_AUDITORS,self::VALUE_MOSTRECENTAUDITORSREPORT,self::VALUE_STOCKOPTIONSINDICATOR,self::VALUE_MAINTAINSMAILINGLIST,self::VALUE_CURRENCY,self::VALUE_COMMONISSUETYPE,self::VALUE_INBANKRUPTCY,self::VALUE_DIVIDENDREINVESTMENT,self::VALUE_DOMICILEINDICATORCODE,self::VALUE_ADRTOORDINARYRATIO,self::VALUE_DOWJONESMEMBERSHIP,self::VALUE_SANDPMEMBERSHIP,self::VALUE_SANDPMIDCAPMEMBERSHIP,self::VALUE_SANDPSMALLCAPMEMBERSHIP,self::VALUE_RUSSELL1000MEMBERSHIP,self::VALUE_RUSSELL2000MEMBERSHIP,self::VALUE_FORBES500MEMBERSHIP,self::VALUE_FORTUNE500INDUSTRIALMEMBERSHIP,self::VALUE_FORTUNE500SERVICESMEMBERSHIP,self::VALUE_SANDPTOP100MEMBERSHIP,self::VALUE_SHORTINTERESTSHARES,self::VALUE_SHORTINTERESTRATIO,self::VALUE_SHORTINTERESTASAPERCENTAGEOFFLOAT,self::VALUE_INSIDERSHARESBOUGHT,self::VALUE_INSIDERSHARESSOLD,self::VALUE_NETINSIDERTRANSACTIONS,self::VALUE_PERCENTOFSHARESOUTSTANDINGHELDBYINSIDERS,self::VALUE_NUMBEROFINSTITUTIONALSHARESBOUGHT,self::VALUE_NUMBEROFINSTITUTIONALSHARESSOLD,self::VALUE_SHARESHELDBYINSTITUTIONS,self::VALUE_NUMBEROFINSTITUTIONSHOLDINGSHARES,self::VALUE_PERCENTOFSHARESOUTSTANDINGHELDBYINSTITUTIONS,self::VALUE_TORONTOMEMBERSHIP,self::VALUE_TORONTOINDUSTRYSECTORCODE,self::VALUE_MARKETCAPITALIZATION,self::VALUE_MARKETCAPITALIZATIONALLSHARES,self::VALUE_INTRADAYMARKETCAPITALIZATIONALLSHARES,self::VALUE_MARKETVALUEASPERCENTOFREVENUES,self::VALUE_SHARESOUTSTANDING,self::VALUE_SHARESOUTSTANDINGCLASSA,self::VALUE_SHARESOUTSTANDINGCLASSB,self::VALUE_DATEOFSHARESOUTSTANDING,self::VALUE_LATESTBALANCESHEETSHARESOUTSTANDING,self::VALUE_LATESTBALANCESHEETDATE,self::VALUE_FLOAT,self::VALUE_FLOATASAPERCENTOFSHARESOUTSTANDING,self::VALUE_LATESTFISCALDATE,self::VALUE_LATESTFISCALREVENUE,self::VALUE_LATESTFISCALEPS,self::VALUE_LATESTFISCALDIVIDENDSPERSHARE,self::VALUE_BASICEPS,self::VALUE_DILUTEDEPS,self::VALUE_LTMDATE,self::VALUE_LATESTQUARTERINDICATOR,self::VALUE_LTMREVENUE,self::VALUE_LTMINCOMEFROMCONTINUINGOPERATIONS,self::VALUE_LTMINCOMEFROMTOTALOPERATIONS,self::VALUE_LTMDILUTEDEPSFROMCONTINUINGOPERATIONS,self::VALUE_LTMDILUTEDEPSFROMTOTALOPERATIONS,self::VALUE_LTMDILUTEDEPSFROMTOTALOPERATIONS1YEARAGO,self::VALUE_LTMPROFITMARGINFROMCONTINUINGOPERATIONS,self::VALUE_LTMPROFITMARGINFROMTOTALOPERATIONS,self::VALUE_PRICESALES,self::VALUE_CURRENTREVENUEPERSHARE,self::VALUE_CURRENTREVENUEPEREMPLOYEE,self::VALUE_CURRENTNETINCOMEFROMTOTALOPERATIONSPEREMPLOYEE,self::VALUE_PERCENTCHANGEREVENUETHISYEARTODATEVSLASTYTD,self::VALUE_PERCENTCHANGEREVENUECURRENTQUARTERVSQUARTER1YEARAGO,self::VALUE_PERCENTCHANGEREVENUEANNUALVSLASTANNUAL,self::VALUE_PERCENTCHANGEEARNINGSTHISYEARTODATEVSLASTYTD,self::VALUE_PERCENTCHANGEEARNINGSCURRENTQUARTERVSQUARTER1YEARAGO,self::VALUE_PERCENTCHANGEEARNINGSANNUALVSLASTANNUAL,self::VALUE_CHANGEINEPSTHISYEARTODATEVSLASTYTD,self::VALUE_CHANGEINEPSTHISQUARTERVS1YEARAGO,self::VALUE_CHANGEINEPSTHISFISCALYEARVS1YEARAGO,self::VALUE_CHANGEIN12MONTHEPSVS1YEARAGO,self::VALUE_PERCENTCHANGEINEPSTHISYEARTODATEVSLASTYTD,self::VALUE_PERCENTCHANGEINEPSTHISQUARTERVS1YRAGO,self::VALUE_PERCENTCHANGEINEPSTHISYEARVS1YEARAGO,self::VALUE_PERCENTCHANGEIN12MONTHEPSVS1YEARAGO,self::VALUE_LASTDIVIDENDDATE,self::VALUE_LASTDIVIDENDEXDATE,self::VALUE_DIVIDENDCODE,self::VALUE_DIVIDENDRATE,self::VALUE_LASTDIVIDENDYIELD,self::VALUE_PAYOUTFROMTOTALOPERATIONSLATESTFISCALYEAR,self::VALUE_PAYOUTRATIO,self::VALUE_PAYOUT5YEARAVERAGEFROMTOTALOPERATIONS,self::VALUE_DIVIDENDYIELD5YEARAVERAGE,self::VALUE_FIVEYEARANNUALREVENUEGROWTHRATE,self::VALUE_CONSISTENCYOF5YEARREVENUEGROWTHRATE,self::VALUE_THREEYEARANNUALREVENUEGROWTHRATE,self::VALUE_FIVEYEARANNUALINCOMEGROWTHRATE,self::VALUE_CONSISTENCYOFFIVEYEARINCOMEGROWTHRATE,self::VALUE_THREEYEARANNUALINCOMEGROWTHRATE,self::VALUE_FIVEYEARANNUALDIVIDENDGROWTHRATE,self::VALUE_CONSISTENCYOFFIVEYEARDIVIDENDGROWTHRATE,self::VALUE_THREEYEARANNUALDIVIDENDGROWTHRATE,self::VALUE_FIVEYEARANNUALCAPITALSPENDINGGROWTHRATE,self::VALUE_THREEYEARANNUALCAPITALSPENDINGGROWTHRATE,self::VALUE_FIVEYEARANNUALRANDDGROWTHRATE,self::VALUE_THREEYEARANNUALRANDDGROWTHRATE,self::VALUE_FIVEYEARANNUALNORMALIZEDINCOMEGROWTHRATE,self::VALUE_THREEYEARANNUALNORMALIZEDINCOMEGROWTHRATE,self::VALUE_PERATIO,self::VALUE_TRAILINGPE,self::VALUE_FORWARDPE,self::VALUE_PERATIO1MONTHAGO,self::VALUE_PERATIO26WEEKSAGO,self::VALUE_PERATIO52WEEKSAGO,self::VALUE_FIVEYEARHIGHPERATIO,self::VALUE_FIVEYEARAVERAGEHIGHPERATIO,self::VALUE_FIVEYEARLOWPERATIO,self::VALUE_FIVEYEARAVERAGELOWPERATIO,self::VALUE_FIVEYEARAVERAGEPERATIO,self::VALUE_CURRENTPEASPERCENTOF5YEARAVERAGEPERATIO,self::VALUE_PERATIOASPERCENTOFINDUSTRYGROUPPERATIO,self::VALUE_PERATIOASPERCENTOFINDUSTRYPERATIO,self::VALUE_CURRENT12MONTHNORMALIZEDPERATIO,self::VALUE_LATESTFULLCONTEXTQUARTERENDINGDATE,self::VALUE_GROSSMARGIN,self::VALUE_EBITMARGIN,self::VALUE_EBITDAMARGIN,self::VALUE_EBITPERSHARE,self::VALUE_EBITDAPERSHARE,self::VALUE_PRETAXPROFITMARGIN,self::VALUE_INTERESTCOVERAGE,self::VALUE_CURRENTRATIO,self::VALUE_QUICKRATIO,self::VALUE_LEVERAGERATIO,self::VALUE_RECEIVABLESTURNOVER,self::VALUE_INVENTORYTURNOVER,self::VALUE_ASSETTURNOVER,self::VALUE_REVENUETOASSETS,self::VALUE_ROEFROMTOTALOPERATIONS,self::VALUE_RETURNONINVESTEDCAPITAL,self::VALUE_RETURNONEBITGENERATINGCAPITAL,self::VALUE_EARNINGSYIELD,self::VALUE_RETURNONASSETS,self::VALUE_DEBTCOMMONEQUITYRATIO,self::VALUE_PRICEBOOK,self::VALUE_BOOKVALUE,self::VALUE_BOOKVALUEPERSHARE,self::VALUE_TOTALDEBTEQUITYRATIO,self::VALUE_LONGTERMDEBTTOTOTALCAPITAL,self::VALUE_SGANDAASPERCENTOFSALES,self::VALUE_RANDDASPERCENTOFSALES,self::VALUE_RECEIVABLESPERDAYSALES,self::VALUE_DAYSCGSININVENTORY,self::VALUE_WORKINGCAPITALPERSHARE,self::VALUE_CASHPERSHARE,self::VALUE_CASHFLOWPERSHARE,self::VALUE_FREECASHFLOWPERSHARE,self::VALUE_TANGIBLEBOOKVALUEPERSHARE,self::VALUE_PRICECASHFLOWRATIO,self::VALUE_PRICEFREECASHFLOWRATIO,self::VALUE_PRICETANGIBLEBOOK,self::VALUE_FIVEYEARAVERAGERETURNONEQUITY,self::VALUE_FIVEYEARAVERAGERETURNONASSETS,self::VALUE_FIVEYEARAVERAGERETURNONINVESTEDCAPITAL,self::VALUE_FIVEYEARAVERAGEGROSSPROFITMARGIN,self::VALUE_FIVEYEARAVERAGEPRETAXPROFITMARGIN,self::VALUE_FIVEYEARAVERAGEPOSTTAXPROFITMARGIN,self::VALUE_FIVEYEARAVERAGENETPROFITMARGIN,self::VALUE_FIVEYEARAVERAGERANDDASAPERCENTOFSALES,self::VALUE_FIVEYEARAVERAGESGANDAASAPERCENTOFSALES,self::VALUE_FIVEYEARAVERAGEDEBTEQUITYRATIO,self::VALUE_FIVEYEARAVERAGETOTALDEBTEQUITYRATIO,self::VALUE_EARNINGSQUARTER,self::VALUE_NEXTEARNINGSDATEQUARTER,self::VALUE_NEXTEARNINGDATE,self::VALUE_NEXTEARNINGTIME,self::VALUE_NEXTEARNINGDATETYPE,self::VALUE_EARNINGCONFIRMATIONDATE,self::VALUE_LASTEARNINGUPDATEDATE,self::VALUE_Q1EARNINGDATE,self::VALUE_Q2EARNINGDATE,self::VALUE_Q3EARNINGDATE,self::VALUE_Q4EARNINGDATE,self::VALUE_NEXTEARNINGESTIMATEAVERAGE,self::VALUE_LASTEARNINGESTIMATEAVERAGE,self::VALUE_EARNINGESTIMATECHANGEAVERAGE,self::VALUE_CONFERENCECALLDATE,self::VALUE_CONFERENCECALLTIME,self::VALUE_CONFERENCECALLNUMBER,self::VALUE_CONFERENCECALLPASSCODE,self::VALUE_CONFERENCECALLBROADCASTURL,self::VALUE_CONFERENCECALLNOTES,self::VALUE_CONFERENCECALLINTERNATIONALNUMBER,self::VALUE_CONFERENCECALLINTERNATIONALPASSCODE,self::VALUE_REPLAYDATE,self::VALUE_REPLAYNUMBER,self::VALUE_REPLAYPASSCODE,self::VALUE_REPLAYWEBCASTURL,self::VALUE_REPLAYENDDATE,self::VALUE_REPLAYWEBCASTENDDATE,self::VALUE_PEGRATIO,self::VALUE_BOARDOFDIRECTORMEETINGDATE,self::VALUE_TRUEFLOAT,self::VALUE_NONE));
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