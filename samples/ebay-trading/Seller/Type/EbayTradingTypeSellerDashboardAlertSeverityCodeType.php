<?php
/**
 * Class file for EbayTradingTypeSellerDashboardAlertSeverityCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellerDashboardAlertSeverityCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSellerDashboardAlertSeverityCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Informational'
	 * Meta informations :
	 * 	- documentation : The alert message is informational in nature. <br><br> Some examples: you might get a PowerSeller status message if your PowerSeller level has been increased, a policy-compliance message if you have no recent policy violations, a buyer-satisfaction message if you are providing excellent customer service, or a seller-account message if there is a new notice available about your payment status.
	 * @return string 'Informational'
	 */
	const VALUE_INFORMATIONAL = 'Informational';
	/**
	 * Constant for value 'Warning'
	 * Meta informations :
	 * 	- documentation : The alert message is a warning that identifies a problem. <br><br> For example, you might get a PowerSeller status warning if you missed the PowerSeller sales requirements in the past month. Or you might get a policy-compliance warning if you recently listed an item with excessive shipping costs, or a seller-account warning if a collections message asks you to pay now to make sure no restrictions are placed on your account.
	 * @return string 'Warning'
	 */
	const VALUE_WARNING = 'Warning';
	/**
	 * Constant for value 'StrongWarning'
	 * Meta informations :
	 * 	- documentation : The alert message is a strong warning that indicates a serious problem. <br><br> For example, you might get a PowerSeller status strong warning if you have lost your PowerSeller status because of policy violations, or you might get a policy-compliance strong warning if your account has been restricted.
	 * @return string 'StrongWarning'
	 */
	const VALUE_STRONGWARNING = 'StrongWarning';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal (or future) use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSellerDashboardAlertSeverityCodeType
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
		return in_array($_value,array(self::VALUE_INFORMATIONAL,self::VALUE_WARNING,self::VALUE_STRONGWARNING,self::VALUE_CUSTOMCODE));
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