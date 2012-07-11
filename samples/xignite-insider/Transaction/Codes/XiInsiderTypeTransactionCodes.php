<?php
/**
 * Class file for XiInsiderTypeTransactionCodes
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeTransactionCodes
 * @date 08/07/2012
 */
class XiInsiderTypeTransactionCodes extends XiInsiderWsdlClass
{
	/**
	 * Constant for value 'All'
	 * @return string 'All'
	 */
	const VALUE_ALL = 'All';
	/**
	 * Constant for value 'Purchase'
	 * @return string 'Purchase'
	 */
	const VALUE_PURCHASE = 'Purchase';
	/**
	 * Constant for value 'Sale'
	 * @return string 'Sale'
	 */
	const VALUE_SALE = 'Sale';
	/**
	 * Constant for value 'TransactionReportedEarly'
	 * @return string 'TransactionReportedEarly'
	 */
	const VALUE_TRANSACTIONREPORTEDEARLY = 'TransactionReportedEarly';
	/**
	 * Constant for value 'NQSOGrant'
	 * @return string 'NQSOGrant'
	 */
	const VALUE_NQSOGRANT = 'NQSOGrant';
	/**
	 * Constant for value 'NQSODisposition'
	 * @return string 'NQSODisposition'
	 */
	const VALUE_NQSODISPOSITION = 'NQSODisposition';
	/**
	 * Constant for value 'NQSOSameDayExercise'
	 * @return string 'NQSOSameDayExercise'
	 */
	const VALUE_NQSOSAMEDAYEXERCISE = 'NQSOSameDayExercise';
	/**
	 * Constant for value 'NQSODiscretionaryTransaction'
	 * @return string 'NQSODiscretionaryTransaction'
	 */
	const VALUE_NQSODISCRETIONARYTRANSACTION = 'NQSODiscretionaryTransaction';
	/**
	 * Constant for value 'NQSOExercise'
	 * @return string 'NQSOExercise'
	 */
	const VALUE_NQSOEXERCISE = 'NQSOExercise';
	/**
	 * Constant for value 'Conversion'
	 * @return string 'Conversion'
	 */
	const VALUE_CONVERSION = 'Conversion';
	/**
	 * Constant for value 'ExpirationOfShortPosition'
	 * @return string 'ExpirationOfShortPosition'
	 */
	const VALUE_EXPIRATIONOFSHORTPOSITION = 'ExpirationOfShortPosition';
	/**
	 * Constant for value 'ExpirationOfLongPosition'
	 * @return string 'ExpirationOfLongPosition'
	 */
	const VALUE_EXPIRATIONOFLONGPOSITION = 'ExpirationOfLongPosition';
	/**
	 * Constant for value 'ExerciseOutOfTheMoney'
	 * @return string 'ExerciseOutOfTheMoney'
	 */
	const VALUE_EXERCISEOUTOFTHEMONEY = 'ExerciseOutOfTheMoney';
	/**
	 * Constant for value 'ExerciceInTheMoney'
	 * @return string 'ExerciceInTheMoney'
	 */
	const VALUE_EXERCICEINTHEMONEY = 'ExerciceInTheMoney';
	/**
	 * Constant for value 'BonaFideGift'
	 * @return string 'BonaFideGift'
	 */
	const VALUE_BONAFIDEGIFT = 'BonaFideGift';
	/**
	 * Constant for value 'SmallAcquisition'
	 * @return string 'SmallAcquisition'
	 */
	const VALUE_SMALLACQUISITION = 'SmallAcquisition';
	/**
	 * Constant for value 'AcquisitionOrDispositionByWill'
	 * @return string 'AcquisitionOrDispositionByWill'
	 */
	const VALUE_ACQUISITIONORDISPOSITIONBYWILL = 'AcquisitionOrDispositionByWill';
	/**
	 * Constant for value 'DepositOrWithDrawalFromTrust'
	 * @return string 'DepositOrWithDrawalFromTrust'
	 */
	const VALUE_DEPOSITORWITHDRAWALFROMTRUST = 'DepositOrWithDrawalFromTrust';
	/**
	 * Constant for value 'OtherAcquisitionOrDisposition'
	 * @return string 'OtherAcquisitionOrDisposition'
	 */
	const VALUE_OTHERACQUISITIONORDISPOSITION = 'OtherAcquisitionOrDisposition';
	/**
	 * Constant for value 'Swap'
	 * @return string 'Swap'
	 */
	const VALUE_SWAP = 'Swap';
	/**
	 * Constant for value 'DispositionOfTender'
	 * @return string 'DispositionOfTender'
	 */
	const VALUE_DISPOSITIONOFTENDER = 'DispositionOfTender';
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constructor
	 * @return XiInsiderTypeTransactionCodes
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
		return in_array($_value,array(self::VALUE_ALL,self::VALUE_PURCHASE,self::VALUE_SALE,self::VALUE_TRANSACTIONREPORTEDEARLY,self::VALUE_NQSOGRANT,self::VALUE_NQSODISPOSITION,self::VALUE_NQSOSAMEDAYEXERCISE,self::VALUE_NQSODISCRETIONARYTRANSACTION,self::VALUE_NQSOEXERCISE,self::VALUE_CONVERSION,self::VALUE_EXPIRATIONOFSHORTPOSITION,self::VALUE_EXPIRATIONOFLONGPOSITION,self::VALUE_EXERCISEOUTOFTHEMONEY,self::VALUE_EXERCICEINTHEMONEY,self::VALUE_BONAFIDEGIFT,self::VALUE_SMALLACQUISITION,self::VALUE_ACQUISITIONORDISPOSITIONBYWILL,self::VALUE_DEPOSITORWITHDRAWALFROMTRUST,self::VALUE_OTHERACQUISITIONORDISPOSITION,self::VALUE_SWAP,self::VALUE_DISPOSITIONOFTENDER,self::VALUE_NONE));
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