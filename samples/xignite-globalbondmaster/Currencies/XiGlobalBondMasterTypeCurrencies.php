<?php
/**
 * Class file for XiGlobalBondMasterTypeCurrencies
 * @date 08/07/2012
 */
/**
 * Class XiGlobalBondMasterTypeCurrencies
 * @date 08/07/2012
 */
class XiGlobalBondMasterTypeCurrencies extends XiGlobalBondMasterWsdlClass
{
	/**
	 * Constant for value 'USD'
	 * @return string 'USD'
	 */
	const VALUE_USD = 'USD';
	/**
	 * Constant for value 'AED'
	 * @return string 'AED'
	 */
	const VALUE_AED = 'AED';
	/**
	 * Constant for value 'AFA'
	 * @return string 'AFA'
	 */
	const VALUE_AFA = 'AFA';
	/**
	 * Constant for value 'AFN'
	 * @return string 'AFN'
	 */
	const VALUE_AFN = 'AFN';
	/**
	 * Constant for value 'ALL'
	 * @return string 'ALL'
	 */
	const VALUE_ALL = 'ALL';
	/**
	 * Constant for value 'AMD'
	 * @return string 'AMD'
	 */
	const VALUE_AMD = 'AMD';
	/**
	 * Constant for value 'ANG'
	 * @return string 'ANG'
	 */
	const VALUE_ANG = 'ANG';
	/**
	 * Constant for value 'AOA'
	 * @return string 'AOA'
	 */
	const VALUE_AOA = 'AOA';
	/**
	 * Constant for value 'ARA'
	 * @return string 'ARA'
	 */
	const VALUE_ARA = 'ARA';
	/**
	 * Constant for value 'ARP'
	 * @return string 'ARP'
	 */
	const VALUE_ARP = 'ARP';
	/**
	 * Constant for value 'ARS'
	 * @return string 'ARS'
	 */
	const VALUE_ARS = 'ARS';
	/**
	 * Constant for value 'ARY'
	 * @return string 'ARY'
	 */
	const VALUE_ARY = 'ARY';
	/**
	 * Constant for value 'ATS'
	 * @return string 'ATS'
	 */
	const VALUE_ATS = 'ATS';
	/**
	 * Constant for value 'AUD'
	 * @return string 'AUD'
	 */
	const VALUE_AUD = 'AUD';
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
	 * Constant for value 'AZN'
	 * @return string 'AZN'
	 */
	const VALUE_AZN = 'AZN';
	/**
	 * Constant for value 'BAM'
	 * @return string 'BAM'
	 */
	const VALUE_BAM = 'BAM';
	/**
	 * Constant for value 'BBD'
	 * @return string 'BBD'
	 */
	const VALUE_BBD = 'BBD';
	/**
	 * Constant for value 'BDT'
	 * @return string 'BDT'
	 */
	const VALUE_BDT = 'BDT';
	/**
	 * Constant for value 'BEF'
	 * @return string 'BEF'
	 */
	const VALUE_BEF = 'BEF';
	/**
	 * Constant for value 'BEL'
	 * @return string 'BEL'
	 */
	const VALUE_BEL = 'BEL';
	/**
	 * Constant for value 'BGK'
	 * @return string 'BGK'
	 */
	const VALUE_BGK = 'BGK';
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
	 * Constant for value 'BHD'
	 * @return string 'BHD'
	 */
	const VALUE_BHD = 'BHD';
	/**
	 * Constant for value 'BIF'
	 * @return string 'BIF'
	 */
	const VALUE_BIF = 'BIF';
	/**
	 * Constant for value 'BMD'
	 * @return string 'BMD'
	 */
	const VALUE_BMD = 'BMD';
	/**
	 * Constant for value 'BND'
	 * @return string 'BND'
	 */
	const VALUE_BND = 'BND';
	/**
	 * Constant for value 'BOB'
	 * @return string 'BOB'
	 */
	const VALUE_BOB = 'BOB';
	/**
	 * Constant for value 'BOV'
	 * @return string 'BOV'
	 */
	const VALUE_BOV = 'BOV';
	/**
	 * Constant for value 'BRB'
	 * @return string 'BRB'
	 */
	const VALUE_BRB = 'BRB';
	/**
	 * Constant for value 'BRC'
	 * @return string 'BRC'
	 */
	const VALUE_BRC = 'BRC';
	/**
	 * Constant for value 'BRE'
	 * @return string 'BRE'
	 */
	const VALUE_BRE = 'BRE';
	/**
	 * Constant for value 'BRL'
	 * @return string 'BRL'
	 */
	const VALUE_BRL = 'BRL';
	/**
	 * Constant for value 'BRN'
	 * @return string 'BRN'
	 */
	const VALUE_BRN = 'BRN';
	/**
	 * Constant for value 'BRR'
	 * @return string 'BRR'
	 */
	const VALUE_BRR = 'BRR';
	/**
	 * Constant for value 'BSD'
	 * @return string 'BSD'
	 */
	const VALUE_BSD = 'BSD';
	/**
	 * Constant for value 'BTN'
	 * @return string 'BTN'
	 */
	const VALUE_BTN = 'BTN';
	/**
	 * Constant for value 'BWP'
	 * @return string 'BWP'
	 */
	const VALUE_BWP = 'BWP';
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
	 * Constant for value 'CAD'
	 * @return string 'CAD'
	 */
	const VALUE_CAD = 'CAD';
	/**
	 * Constant for value 'CDF'
	 * @return string 'CDF'
	 */
	const VALUE_CDF = 'CDF';
	/**
	 * Constant for value 'CHF'
	 * @return string 'CHF'
	 */
	const VALUE_CHF = 'CHF';
	/**
	 * Constant for value 'CLF'
	 * @return string 'CLF'
	 */
	const VALUE_CLF = 'CLF';
	/**
	 * Constant for value 'CHK'
	 * @return string 'CHK'
	 */
	const VALUE_CHK = 'CHK';
	/**
	 * Constant for value 'CLP'
	 * @return string 'CLP'
	 */
	const VALUE_CLP = 'CLP';
	/**
	 * Constant for value 'CNY'
	 * @return string 'CNY'
	 */
	const VALUE_CNY = 'CNY';
	/**
	 * Constant for value 'COP'
	 * @return string 'COP'
	 */
	const VALUE_COP = 'COP';
	/**
	 * Constant for value 'CRC'
	 * @return string 'CRC'
	 */
	const VALUE_CRC = 'CRC';
	/**
	 * Constant for value 'CSD'
	 * @return string 'CSD'
	 */
	const VALUE_CSD = 'CSD';
	/**
	 * Constant for value 'CSJ'
	 * @return string 'CSJ'
	 */
	const VALUE_CSJ = 'CSJ';
	/**
	 * Constant for value 'CUP'
	 * @return string 'CUP'
	 */
	const VALUE_CUP = 'CUP';
	/**
	 * Constant for value 'CVE'
	 * @return string 'CVE'
	 */
	const VALUE_CVE = 'CVE';
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
	 * Constant for value 'DEM'
	 * @return string 'DEM'
	 */
	const VALUE_DEM = 'DEM';
	/**
	 * Constant for value 'DJF'
	 * @return string 'DJF'
	 */
	const VALUE_DJF = 'DJF';
	/**
	 * Constant for value 'DKK'
	 * @return string 'DKK'
	 */
	const VALUE_DKK = 'DKK';
	/**
	 * Constant for value 'DOP'
	 * @return string 'DOP'
	 */
	const VALUE_DOP = 'DOP';
	/**
	 * Constant for value 'DZD'
	 * @return string 'DZD'
	 */
	const VALUE_DZD = 'DZD';
	/**
	 * Constant for value 'ECS'
	 * @return string 'ECS'
	 */
	const VALUE_ECS = 'ECS';
	/**
	 * Constant for value 'EEK'
	 * @return string 'EEK'
	 */
	const VALUE_EEK = 'EEK';
	/**
	 * Constant for value 'EGP'
	 * @return string 'EGP'
	 */
	const VALUE_EGP = 'EGP';
	/**
	 * Constant for value 'ERN'
	 * @return string 'ERN'
	 */
	const VALUE_ERN = 'ERN';
	/**
	 * Constant for value 'ESP'
	 * @return string 'ESP'
	 */
	const VALUE_ESP = 'ESP';
	/**
	 * Constant for value 'ETB'
	 * @return string 'ETB'
	 */
	const VALUE_ETB = 'ETB';
	/**
	 * Constant for value 'EUR'
	 * @return string 'EUR'
	 */
	const VALUE_EUR = 'EUR';
	/**
	 * Constant for value 'FIM'
	 * @return string 'FIM'
	 */
	const VALUE_FIM = 'FIM';
	/**
	 * Constant for value 'FJD'
	 * @return string 'FJD'
	 */
	const VALUE_FJD = 'FJD';
	/**
	 * Constant for value 'FKP'
	 * @return string 'FKP'
	 */
	const VALUE_FKP = 'FKP';
	/**
	 * Constant for value 'FRF'
	 * @return string 'FRF'
	 */
	const VALUE_FRF = 'FRF';
	/**
	 * Constant for value 'GBP'
	 * @return string 'GBP'
	 */
	const VALUE_GBP = 'GBP';
	/**
	 * Constant for value 'GEL'
	 * @return string 'GEL'
	 */
	const VALUE_GEL = 'GEL';
	/**
	 * Constant for value 'GGP'
	 * @return string 'GGP'
	 */
	const VALUE_GGP = 'GGP';
	/**
	 * Constant for value 'GHC'
	 * @return string 'GHC'
	 */
	const VALUE_GHC = 'GHC';
	/**
	 * Constant for value 'GHS'
	 * @return string 'GHS'
	 */
	const VALUE_GHS = 'GHS';
	/**
	 * Constant for value 'GIP'
	 * @return string 'GIP'
	 */
	const VALUE_GIP = 'GIP';
	/**
	 * Constant for value 'GMD'
	 * @return string 'GMD'
	 */
	const VALUE_GMD = 'GMD';
	/**
	 * Constant for value 'GNF'
	 * @return string 'GNF'
	 */
	const VALUE_GNF = 'GNF';
	/**
	 * Constant for value 'GRD'
	 * @return string 'GRD'
	 */
	const VALUE_GRD = 'GRD';
	/**
	 * Constant for value 'GTQ'
	 * @return string 'GTQ'
	 */
	const VALUE_GTQ = 'GTQ';
	/**
	 * Constant for value 'GYD'
	 * @return string 'GYD'
	 */
	const VALUE_GYD = 'GYD';
	/**
	 * Constant for value 'HKD'
	 * @return string 'HKD'
	 */
	const VALUE_HKD = 'HKD';
	/**
	 * Constant for value 'HNL'
	 * @return string 'HNL'
	 */
	const VALUE_HNL = 'HNL';
	/**
	 * Constant for value 'HRD'
	 * @return string 'HRD'
	 */
	const VALUE_HRD = 'HRD';
	/**
	 * Constant for value 'HRK'
	 * @return string 'HRK'
	 */
	const VALUE_HRK = 'HRK';
	/**
	 * Constant for value 'HTG'
	 * @return string 'HTG'
	 */
	const VALUE_HTG = 'HTG';
	/**
	 * Constant for value 'HUF'
	 * @return string 'HUF'
	 */
	const VALUE_HUF = 'HUF';
	/**
	 * Constant for value 'IDR'
	 * @return string 'IDR'
	 */
	const VALUE_IDR = 'IDR';
	/**
	 * Constant for value 'IEP'
	 * @return string 'IEP'
	 */
	const VALUE_IEP = 'IEP';
	/**
	 * Constant for value 'ILR'
	 * @return string 'ILR'
	 */
	const VALUE_ILR = 'ILR';
	/**
	 * Constant for value 'ILS'
	 * @return string 'ILS'
	 */
	const VALUE_ILS = 'ILS';
	/**
	 * Constant for value 'IMP'
	 * @return string 'IMP'
	 */
	const VALUE_IMP = 'IMP';
	/**
	 * Constant for value 'INR'
	 * @return string 'INR'
	 */
	const VALUE_INR = 'INR';
	/**
	 * Constant for value 'IQD'
	 * @return string 'IQD'
	 */
	const VALUE_IQD = 'IQD';
	/**
	 * Constant for value 'IRR'
	 * @return string 'IRR'
	 */
	const VALUE_IRR = 'IRR';
	/**
	 * Constant for value 'ISK'
	 * @return string 'ISK'
	 */
	const VALUE_ISK = 'ISK';
	/**
	 * Constant for value 'ITL'
	 * @return string 'ITL'
	 */
	const VALUE_ITL = 'ITL';
	/**
	 * Constant for value 'JEP'
	 * @return string 'JEP'
	 */
	const VALUE_JEP = 'JEP';
	/**
	 * Constant for value 'JMD'
	 * @return string 'JMD'
	 */
	const VALUE_JMD = 'JMD';
	/**
	 * Constant for value 'JOD'
	 * @return string 'JOD'
	 */
	const VALUE_JOD = 'JOD';
	/**
	 * Constant for value 'JPY'
	 * @return string 'JPY'
	 */
	const VALUE_JPY = 'JPY';
	/**
	 * Constant for value 'KES'
	 * @return string 'KES'
	 */
	const VALUE_KES = 'KES';
	/**
	 * Constant for value 'KGS'
	 * @return string 'KGS'
	 */
	const VALUE_KGS = 'KGS';
	/**
	 * Constant for value 'KHR'
	 * @return string 'KHR'
	 */
	const VALUE_KHR = 'KHR';
	/**
	 * Constant for value 'KMF'
	 * @return string 'KMF'
	 */
	const VALUE_KMF = 'KMF';
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
	 * Constant for value 'KYD'
	 * @return string 'KYD'
	 */
	const VALUE_KYD = 'KYD';
	/**
	 * Constant for value 'KZT'
	 * @return string 'KZT'
	 */
	const VALUE_KZT = 'KZT';
	/**
	 * Constant for value 'LAK'
	 * @return string 'LAK'
	 */
	const VALUE_LAK = 'LAK';
	/**
	 * Constant for value 'LBP'
	 * @return string 'LBP'
	 */
	const VALUE_LBP = 'LBP';
	/**
	 * Constant for value 'LKR'
	 * @return string 'LKR'
	 */
	const VALUE_LKR = 'LKR';
	/**
	 * Constant for value 'LRD'
	 * @return string 'LRD'
	 */
	const VALUE_LRD = 'LRD';
	/**
	 * Constant for value 'LSL'
	 * @return string 'LSL'
	 */
	const VALUE_LSL = 'LSL';
	/**
	 * Constant for value 'LTL'
	 * @return string 'LTL'
	 */
	const VALUE_LTL = 'LTL';
	/**
	 * Constant for value 'LUF'
	 * @return string 'LUF'
	 */
	const VALUE_LUF = 'LUF';
	/**
	 * Constant for value 'LVL'
	 * @return string 'LVL'
	 */
	const VALUE_LVL = 'LVL';
	/**
	 * Constant for value 'LYD'
	 * @return string 'LYD'
	 */
	const VALUE_LYD = 'LYD';
	/**
	 * Constant for value 'MAD'
	 * @return string 'MAD'
	 */
	const VALUE_MAD = 'MAD';
	/**
	 * Constant for value 'MAF'
	 * @return string 'MAF'
	 */
	const VALUE_MAF = 'MAF';
	/**
	 * Constant for value 'MDL'
	 * @return string 'MDL'
	 */
	const VALUE_MDL = 'MDL';
	/**
	 * Constant for value 'MFG'
	 * @return string 'MFG'
	 */
	const VALUE_MFG = 'MFG';
	/**
	 * Constant for value 'MGA'
	 * @return string 'MGA'
	 */
	const VALUE_MGA = 'MGA';
	/**
	 * Constant for value 'MGF'
	 * @return string 'MGF'
	 */
	const VALUE_MGF = 'MGF';
	/**
	 * Constant for value 'MKD'
	 * @return string 'MKD'
	 */
	const VALUE_MKD = 'MKD';
	/**
	 * Constant for value 'MMK'
	 * @return string 'MMK'
	 */
	const VALUE_MMK = 'MMK';
	/**
	 * Constant for value 'MNT'
	 * @return string 'MNT'
	 */
	const VALUE_MNT = 'MNT';
	/**
	 * Constant for value 'MOP'
	 * @return string 'MOP'
	 */
	const VALUE_MOP = 'MOP';
	/**
	 * Constant for value 'MRO'
	 * @return string 'MRO'
	 */
	const VALUE_MRO = 'MRO';
	/**
	 * Constant for value 'MTL'
	 * @return string 'MTL'
	 */
	const VALUE_MTL = 'MTL';
	/**
	 * Constant for value 'MTP'
	 * @return string 'MTP'
	 */
	const VALUE_MTP = 'MTP';
	/**
	 * Constant for value 'MUR'
	 * @return string 'MUR'
	 */
	const VALUE_MUR = 'MUR';
	/**
	 * Constant for value 'MVR'
	 * @return string 'MVR'
	 */
	const VALUE_MVR = 'MVR';
	/**
	 * Constant for value 'MWK'
	 * @return string 'MWK'
	 */
	const VALUE_MWK = 'MWK';
	/**
	 * Constant for value 'MXN'
	 * @return string 'MXN'
	 */
	const VALUE_MXN = 'MXN';
	/**
	 * Constant for value 'MXP'
	 * @return string 'MXP'
	 */
	const VALUE_MXP = 'MXP';
	/**
	 * Constant for value 'MXV'
	 * @return string 'MXV'
	 */
	const VALUE_MXV = 'MXV';
	/**
	 * Constant for value 'MYR'
	 * @return string 'MYR'
	 */
	const VALUE_MYR = 'MYR';
	/**
	 * Constant for value 'MZM'
	 * @return string 'MZM'
	 */
	const VALUE_MZM = 'MZM';
	/**
	 * Constant for value 'MZN'
	 * @return string 'MZN'
	 */
	const VALUE_MZN = 'MZN';
	/**
	 * Constant for value 'NAD'
	 * @return string 'NAD'
	 */
	const VALUE_NAD = 'NAD';
	/**
	 * Constant for value 'NGN'
	 * @return string 'NGN'
	 */
	const VALUE_NGN = 'NGN';
	/**
	 * Constant for value 'NIC'
	 * @return string 'NIC'
	 */
	const VALUE_NIC = 'NIC';
	/**
	 * Constant for value 'NIO'
	 * @return string 'NIO'
	 */
	const VALUE_NIO = 'NIO';
	/**
	 * Constant for value 'NLG'
	 * @return string 'NLG'
	 */
	const VALUE_NLG = 'NLG';
	/**
	 * Constant for value 'NOK'
	 * @return string 'NOK'
	 */
	const VALUE_NOK = 'NOK';
	/**
	 * Constant for value 'NPR'
	 * @return string 'NPR'
	 */
	const VALUE_NPR = 'NPR';
	/**
	 * Constant for value 'NZD'
	 * @return string 'NZD'
	 */
	const VALUE_NZD = 'NZD';
	/**
	 * Constant for value 'OMR'
	 * @return string 'OMR'
	 */
	const VALUE_OMR = 'OMR';
	/**
	 * Constant for value 'PAB'
	 * @return string 'PAB'
	 */
	const VALUE_PAB = 'PAB';
	/**
	 * Constant for value 'PEI'
	 * @return string 'PEI'
	 */
	const VALUE_PEI = 'PEI';
	/**
	 * Constant for value 'PEN'
	 * @return string 'PEN'
	 */
	const VALUE_PEN = 'PEN';
	/**
	 * Constant for value 'PES'
	 * @return string 'PES'
	 */
	const VALUE_PES = 'PES';
	/**
	 * Constant for value 'PGK'
	 * @return string 'PGK'
	 */
	const VALUE_PGK = 'PGK';
	/**
	 * Constant for value 'PHP'
	 * @return string 'PHP'
	 */
	const VALUE_PHP = 'PHP';
	/**
	 * Constant for value 'PKR'
	 * @return string 'PKR'
	 */
	const VALUE_PKR = 'PKR';
	/**
	 * Constant for value 'PLN'
	 * @return string 'PLN'
	 */
	const VALUE_PLN = 'PLN';
	/**
	 * Constant for value 'PLZ'
	 * @return string 'PLZ'
	 */
	const VALUE_PLZ = 'PLZ';
	/**
	 * Constant for value 'PTE'
	 * @return string 'PTE'
	 */
	const VALUE_PTE = 'PTE';
	/**
	 * Constant for value 'PYG'
	 * @return string 'PYG'
	 */
	const VALUE_PYG = 'PYG';
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
	 * Constant for value 'RON'
	 * @return string 'RON'
	 */
	const VALUE_RON = 'RON';
	/**
	 * Constant for value 'RSD'
	 * @return string 'RSD'
	 */
	const VALUE_RSD = 'RSD';
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
	 * Constant for value 'SAR'
	 * @return string 'SAR'
	 */
	const VALUE_SAR = 'SAR';
	/**
	 * Constant for value 'SBD'
	 * @return string 'SBD'
	 */
	const VALUE_SBD = 'SBD';
	/**
	 * Constant for value 'SCR'
	 * @return string 'SCR'
	 */
	const VALUE_SCR = 'SCR';
	/**
	 * Constant for value 'SDD'
	 * @return string 'SDD'
	 */
	const VALUE_SDD = 'SDD';
	/**
	 * Constant for value 'SDG'
	 * @return string 'SDG'
	 */
	const VALUE_SDG = 'SDG';
	/**
	 * Constant for value 'SDP'
	 * @return string 'SDP'
	 */
	const VALUE_SDP = 'SDP';
	/**
	 * Constant for value 'SDR'
	 * @return string 'SDR'
	 */
	const VALUE_SDR = 'SDR';
	/**
	 * Constant for value 'SEK'
	 * @return string 'SEK'
	 */
	const VALUE_SEK = 'SEK';
	/**
	 * Constant for value 'SGD'
	 * @return string 'SGD'
	 */
	const VALUE_SGD = 'SGD';
	/**
	 * Constant for value 'SHP'
	 * @return string 'SHP'
	 */
	const VALUE_SHP = 'SHP';
	/**
	 * Constant for value 'SIT'
	 * @return string 'SIT'
	 */
	const VALUE_SIT = 'SIT';
	/**
	 * Constant for value 'SKK'
	 * @return string 'SKK'
	 */
	const VALUE_SKK = 'SKK';
	/**
	 * Constant for value 'SLL'
	 * @return string 'SLL'
	 */
	const VALUE_SLL = 'SLL';
	/**
	 * Constant for value 'SOS'
	 * @return string 'SOS'
	 */
	const VALUE_SOS = 'SOS';
	/**
	 * Constant for value 'SPL'
	 * @return string 'SPL'
	 */
	const VALUE_SPL = 'SPL';
	/**
	 * Constant for value 'SRD'
	 * @return string 'SRD'
	 */
	const VALUE_SRD = 'SRD';
	/**
	 * Constant for value 'SRG'
	 * @return string 'SRG'
	 */
	const VALUE_SRG = 'SRG';
	/**
	 * Constant for value 'STD'
	 * @return string 'STD'
	 */
	const VALUE_STD = 'STD';
	/**
	 * Constant for value 'SUR'
	 * @return string 'SUR'
	 */
	const VALUE_SUR = 'SUR';
	/**
	 * Constant for value 'SVC'
	 * @return string 'SVC'
	 */
	const VALUE_SVC = 'SVC';
	/**
	 * Constant for value 'SYP'
	 * @return string 'SYP'
	 */
	const VALUE_SYP = 'SYP';
	/**
	 * Constant for value 'SZL'
	 * @return string 'SZL'
	 */
	const VALUE_SZL = 'SZL';
	/**
	 * Constant for value 'THB'
	 * @return string 'THB'
	 */
	const VALUE_THB = 'THB';
	/**
	 * Constant for value 'TJR'
	 * @return string 'TJR'
	 */
	const VALUE_TJR = 'TJR';
	/**
	 * Constant for value 'TJS'
	 * @return string 'TJS'
	 */
	const VALUE_TJS = 'TJS';
	/**
	 * Constant for value 'TMM'
	 * @return string 'TMM'
	 */
	const VALUE_TMM = 'TMM';
	/**
	 * Constant for value 'TMT'
	 * @return string 'TMT'
	 */
	const VALUE_TMT = 'TMT';
	/**
	 * Constant for value 'TND'
	 * @return string 'TND'
	 */
	const VALUE_TND = 'TND';
	/**
	 * Constant for value 'TOP'
	 * @return string 'TOP'
	 */
	const VALUE_TOP = 'TOP';
	/**
	 * Constant for value 'TRL'
	 * @return string 'TRL'
	 */
	const VALUE_TRL = 'TRL';
	/**
	 * Constant for value 'TRY'
	 * @return string 'TRY'
	 */
	const VALUE_TRY = 'TRY';
	/**
	 * Constant for value 'TTD'
	 * @return string 'TTD'
	 */
	const VALUE_TTD = 'TTD';
	/**
	 * Constant for value 'TVD'
	 * @return string 'TVD'
	 */
	const VALUE_TVD = 'TVD';
	/**
	 * Constant for value 'TWD'
	 * @return string 'TWD'
	 */
	const VALUE_TWD = 'TWD';
	/**
	 * Constant for value 'TZS'
	 * @return string 'TZS'
	 */
	const VALUE_TZS = 'TZS';
	/**
	 * Constant for value 'UAH'
	 * @return string 'UAH'
	 */
	const VALUE_UAH = 'UAH';
	/**
	 * Constant for value 'UGX'
	 * @return string 'UGX'
	 */
	const VALUE_UGX = 'UGX';
	/**
	 * Constant for value 'UNK'
	 * @return string 'UNK'
	 */
	const VALUE_UNK = 'UNK';
	/**
	 * Constant for value 'UYP'
	 * @return string 'UYP'
	 */
	const VALUE_UYP = 'UYP';
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
	 * Constant for value 'VEB'
	 * @return string 'VEB'
	 */
	const VALUE_VEB = 'VEB';
	/**
	 * Constant for value 'VEF'
	 * @return string 'VEF'
	 */
	const VALUE_VEF = 'VEF';
	/**
	 * Constant for value 'VNC'
	 * @return string 'VNC'
	 */
	const VALUE_VNC = 'VNC';
	/**
	 * Constant for value 'VND'
	 * @return string 'VND'
	 */
	const VALUE_VND = 'VND';
	/**
	 * Constant for value 'VUV'
	 * @return string 'VUV'
	 */
	const VALUE_VUV = 'VUV';
	/**
	 * Constant for value 'WST'
	 * @return string 'WST'
	 */
	const VALUE_WST = 'WST';
	/**
	 * Constant for value 'XAF'
	 * @return string 'XAF'
	 */
	const VALUE_XAF = 'XAF';
	/**
	 * Constant for value 'XCD'
	 * @return string 'XCD'
	 */
	const VALUE_XCD = 'XCD';
	/**
	 * Constant for value 'XDR'
	 * @return string 'XDR'
	 */
	const VALUE_XDR = 'XDR';
	/**
	 * Constant for value 'XEU'
	 * @return string 'XEU'
	 */
	const VALUE_XEU = 'XEU';
	/**
	 * Constant for value 'XOF'
	 * @return string 'XOF'
	 */
	const VALUE_XOF = 'XOF';
	/**
	 * Constant for value 'XPF'
	 * @return string 'XPF'
	 */
	const VALUE_XPF = 'XPF';
	/**
	 * Constant for value 'YER'
	 * @return string 'YER'
	 */
	const VALUE_YER = 'YER';
	/**
	 * Constant for value 'YUD'
	 * @return string 'YUD'
	 */
	const VALUE_YUD = 'YUD';
	/**
	 * Constant for value 'YUM'
	 * @return string 'YUM'
	 */
	const VALUE_YUM = 'YUM';
	/**
	 * Constant for value 'ZAL'
	 * @return string 'ZAL'
	 */
	const VALUE_ZAL = 'ZAL';
	/**
	 * Constant for value 'ZAR'
	 * @return string 'ZAR'
	 */
	const VALUE_ZAR = 'ZAR';
	/**
	 * Constant for value 'ZMK'
	 * @return string 'ZMK'
	 */
	const VALUE_ZMK = 'ZMK';
	/**
	 * Constant for value 'ZRN'
	 * @return string 'ZRN'
	 */
	const VALUE_ZRN = 'ZRN';
	/**
	 * Constant for value 'ZRZ'
	 * @return string 'ZRZ'
	 */
	const VALUE_ZRZ = 'ZRZ';
	/**
	 * Constant for value 'ZWD'
	 * @return string 'ZWD'
	 */
	const VALUE_ZWD = 'ZWD';
	/**
	 * Constant for value 'ZWN'
	 * @return string 'ZWN'
	 */
	const VALUE_ZWN = 'ZWN';
	/**
	 * Constant for value 'ZWR'
	 * @return string 'ZWR'
	 */
	const VALUE_ZWR = 'ZWR';
	/**
	 * Constant for value 'ZWL'
	 * @return string 'ZWL'
	 */
	const VALUE_ZWL = 'ZWL';
	/**
	 * Constant for value 'BAD'
	 * @return string 'BAD'
	 */
	const VALUE_BAD = 'BAD';
	/**
	 * Constant for value 'NOCURRENCY'
	 * @return string 'NOCURRENCY'
	 */
	const VALUE_NOCURRENCY = 'NOCURRENCY';
	/**
	 * Constant for value 'Unknown'
	 * @return string 'Unknown'
	 */
	const VALUE_UNKNOWN = 'Unknown';
	/**
	 * Constructor
	 * @return XiGlobalBondMasterTypeCurrencies
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
		return in_array($_value,array(self::VALUE_USD,self::VALUE_AED,self::VALUE_AFA,self::VALUE_AFN,self::VALUE_ALL,self::VALUE_AMD,self::VALUE_ANG,self::VALUE_AOA,self::VALUE_ARA,self::VALUE_ARP,self::VALUE_ARS,self::VALUE_ARY,self::VALUE_ATS,self::VALUE_AUD,self::VALUE_AWG,self::VALUE_AZM,self::VALUE_AZN,self::VALUE_BAM,self::VALUE_BBD,self::VALUE_BDT,self::VALUE_BEF,self::VALUE_BEL,self::VALUE_BGK,self::VALUE_BGL,self::VALUE_BGN,self::VALUE_BHD,self::VALUE_BIF,self::VALUE_BMD,self::VALUE_BND,self::VALUE_BOB,self::VALUE_BOV,self::VALUE_BRB,self::VALUE_BRC,self::VALUE_BRE,self::VALUE_BRL,self::VALUE_BRN,self::VALUE_BRR,self::VALUE_BSD,self::VALUE_BTN,self::VALUE_BWP,self::VALUE_BYR,self::VALUE_BZD,self::VALUE_CAD,self::VALUE_CDF,self::VALUE_CHF,self::VALUE_CLF,self::VALUE_CHK,self::VALUE_CLP,self::VALUE_CNY,self::VALUE_COP,self::VALUE_CRC,self::VALUE_CSD,self::VALUE_CSJ,self::VALUE_CUP,self::VALUE_CVE,self::VALUE_CYP,self::VALUE_CZK,self::VALUE_DEM,self::VALUE_DJF,self::VALUE_DKK,self::VALUE_DOP,self::VALUE_DZD,self::VALUE_ECS,self::VALUE_EEK,self::VALUE_EGP,self::VALUE_ERN,self::VALUE_ESP,self::VALUE_ETB,self::VALUE_EUR,self::VALUE_FIM,self::VALUE_FJD,self::VALUE_FKP,self::VALUE_FRF,self::VALUE_GBP,self::VALUE_GEL,self::VALUE_GGP,self::VALUE_GHC,self::VALUE_GHS,self::VALUE_GIP,self::VALUE_GMD,self::VALUE_GNF,self::VALUE_GRD,self::VALUE_GTQ,self::VALUE_GYD,self::VALUE_HKD,self::VALUE_HNL,self::VALUE_HRD,self::VALUE_HRK,self::VALUE_HTG,self::VALUE_HUF,self::VALUE_IDR,self::VALUE_IEP,self::VALUE_ILR,self::VALUE_ILS,self::VALUE_IMP,self::VALUE_INR,self::VALUE_IQD,self::VALUE_IRR,self::VALUE_ISK,self::VALUE_ITL,self::VALUE_JEP,self::VALUE_JMD,self::VALUE_JOD,self::VALUE_JPY,self::VALUE_KES,self::VALUE_KGS,self::VALUE_KHR,self::VALUE_KMF,self::VALUE_KPW,self::VALUE_KRW,self::VALUE_KWD,self::VALUE_KYD,self::VALUE_KZT,self::VALUE_LAK,self::VALUE_LBP,self::VALUE_LKR,self::VALUE_LRD,self::VALUE_LSL,self::VALUE_LTL,self::VALUE_LUF,self::VALUE_LVL,self::VALUE_LYD,self::VALUE_MAD,self::VALUE_MAF,self::VALUE_MDL,self::VALUE_MFG,self::VALUE_MGA,self::VALUE_MGF,self::VALUE_MKD,self::VALUE_MMK,self::VALUE_MNT,self::VALUE_MOP,self::VALUE_MRO,self::VALUE_MTL,self::VALUE_MTP,self::VALUE_MUR,self::VALUE_MVR,self::VALUE_MWK,self::VALUE_MXN,self::VALUE_MXP,self::VALUE_MXV,self::VALUE_MYR,self::VALUE_MZM,self::VALUE_MZN,self::VALUE_NAD,self::VALUE_NGN,self::VALUE_NIC,self::VALUE_NIO,self::VALUE_NLG,self::VALUE_NOK,self::VALUE_NPR,self::VALUE_NZD,self::VALUE_OMR,self::VALUE_PAB,self::VALUE_PEI,self::VALUE_PEN,self::VALUE_PES,self::VALUE_PGK,self::VALUE_PHP,self::VALUE_PKR,self::VALUE_PLN,self::VALUE_PLZ,self::VALUE_PTE,self::VALUE_PYG,self::VALUE_QAR,self::VALUE_ROL,self::VALUE_RON,self::VALUE_RSD,self::VALUE_RUB,self::VALUE_RUR,self::VALUE_RWF,self::VALUE_SAR,self::VALUE_SBD,self::VALUE_SCR,self::VALUE_SDD,self::VALUE_SDG,self::VALUE_SDP,self::VALUE_SDR,self::VALUE_SEK,self::VALUE_SGD,self::VALUE_SHP,self::VALUE_SIT,self::VALUE_SKK,self::VALUE_SLL,self::VALUE_SOS,self::VALUE_SPL,self::VALUE_SRD,self::VALUE_SRG,self::VALUE_STD,self::VALUE_SUR,self::VALUE_SVC,self::VALUE_SYP,self::VALUE_SZL,self::VALUE_THB,self::VALUE_TJR,self::VALUE_TJS,self::VALUE_TMM,self::VALUE_TMT,self::VALUE_TND,self::VALUE_TOP,self::VALUE_TRL,self::VALUE_TRY,self::VALUE_TTD,self::VALUE_TVD,self::VALUE_TWD,self::VALUE_TZS,self::VALUE_UAH,self::VALUE_UGX,self::VALUE_UNK,self::VALUE_UYP,self::VALUE_UYU,self::VALUE_UZS,self::VALUE_VEB,self::VALUE_VEF,self::VALUE_VNC,self::VALUE_VND,self::VALUE_VUV,self::VALUE_WST,self::VALUE_XAF,self::VALUE_XCD,self::VALUE_XDR,self::VALUE_XEU,self::VALUE_XOF,self::VALUE_XPF,self::VALUE_YER,self::VALUE_YUD,self::VALUE_YUM,self::VALUE_ZAL,self::VALUE_ZAR,self::VALUE_ZMK,self::VALUE_ZRN,self::VALUE_ZRZ,self::VALUE_ZWD,self::VALUE_ZWN,self::VALUE_ZWR,self::VALUE_ZWL,self::VALUE_BAD,self::VALUE_NOCURRENCY,self::VALUE_UNKNOWN));
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