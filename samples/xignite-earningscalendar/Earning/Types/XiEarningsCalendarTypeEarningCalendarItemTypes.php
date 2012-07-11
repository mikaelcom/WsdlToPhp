<?php
/**
 * Class file for XiEarningsCalendarTypeEarningCalendarItemTypes
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeEarningCalendarItemTypes
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeEarningCalendarItemTypes extends XiEarningsCalendarWsdlClass
{
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
	 * Constant for value 'BoardOfDirectorMeetingDate'
	 * @return string 'BoardOfDirectorMeetingDate'
	 */
	const VALUE_BOARDOFDIRECTORMEETINGDATE = 'BoardOfDirectorMeetingDate';
	/**
	 * Constructor
	 * @return XiEarningsCalendarTypeEarningCalendarItemTypes
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
		return in_array($_value,array(self::VALUE_EARNINGSQUARTER,self::VALUE_NEXTEARNINGSDATEQUARTER,self::VALUE_NEXTEARNINGDATE,self::VALUE_NEXTEARNINGTIME,self::VALUE_NEXTEARNINGDATETYPE,self::VALUE_EARNINGCONFIRMATIONDATE,self::VALUE_LASTEARNINGUPDATEDATE,self::VALUE_Q1EARNINGDATE,self::VALUE_Q2EARNINGDATE,self::VALUE_Q3EARNINGDATE,self::VALUE_Q4EARNINGDATE,self::VALUE_NEXTEARNINGESTIMATEAVERAGE,self::VALUE_LASTEARNINGESTIMATEAVERAGE,self::VALUE_EARNINGESTIMATECHANGEAVERAGE,self::VALUE_CONFERENCECALLDATE,self::VALUE_CONFERENCECALLTIME,self::VALUE_CONFERENCECALLNUMBER,self::VALUE_CONFERENCECALLPASSCODE,self::VALUE_CONFERENCECALLBROADCASTURL,self::VALUE_CONFERENCECALLNOTES,self::VALUE_CONFERENCECALLINTERNATIONALNUMBER,self::VALUE_CONFERENCECALLINTERNATIONALPASSCODE,self::VALUE_REPLAYDATE,self::VALUE_REPLAYNUMBER,self::VALUE_REPLAYPASSCODE,self::VALUE_REPLAYWEBCASTURL,self::VALUE_REPLAYENDDATE,self::VALUE_REPLAYWEBCASTENDDATE,self::VALUE_BOARDOFDIRECTORMEETINGDATE));
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