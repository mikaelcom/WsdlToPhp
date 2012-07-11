<?php
/**
 * Class file for YMailTypeFetchStatus
 * @date 02/07/2012
 */
/**
 * Class YMailTypeFetchStatus
 * @date 02/07/2012
 */
class YMailTypeFetchStatus extends YMailWsdlClass
{
	/**
	 * Constant for value 'success'
	 * @return string 'success'
	 */
	const VALUE_SUCCESS = 'success';
	/**
	 * Constant for value 'unknownError'
	 * @return string 'unknownError'
	 */
	const VALUE_UNKNOWNERROR = 'unknownError';
	/**
	 * Constant for value 'connectionTimeout'
	 * @return string 'connectionTimeout'
	 */
	const VALUE_CONNECTIONTIMEOUT = 'connectionTimeout';
	/**
	 * Constant for value 'badHost'
	 * @return string 'badHost'
	 */
	const VALUE_BADHOST = 'badHost';
	/**
	 * Constant for value 'badPort'
	 * @return string 'badPort'
	 */
	const VALUE_BADPORT = 'badPort';
	/**
	 * Constant for value 'badUserId'
	 * @return string 'badUserId'
	 */
	const VALUE_BADUSERID = 'badUserId';
	/**
	 * Constant for value 'badPassword'
	 * @return string 'badPassword'
	 */
	const VALUE_BADPASSWORD = 'badPassword';
	/**
	 * Constant for value 'badLogin'
	 * @return string 'badLogin'
	 */
	const VALUE_BADLOGIN = 'badLogin';
	/**
	 * Constant for value 'badFolder'
	 * @return string 'badFolder'
	 */
	const VALUE_BADFOLDER = 'badFolder';
	/**
	 * Constant for value 'badMailbox'
	 * @return string 'badMailbox'
	 */
	const VALUE_BADMAILBOX = 'badMailbox';
	/**
	 * Constant for value 'badMessage'
	 * @return string 'badMessage'
	 */
	const VALUE_BADMESSAGE = 'badMessage';
	/**
	 * Constant for value 'lastUnsupported'
	 * @return string 'lastUnsupported'
	 */
	const VALUE_LASTUNSUPPORTED = 'lastUnsupported';
	/**
	 * Constant for value 'busy'
	 * @return string 'busy'
	 */
	const VALUE_BUSY = 'busy';
	/**
	 * Constant for value 'connectionLost'
	 * @return string 'connectionLost'
	 */
	const VALUE_CONNECTIONLOST = 'connectionLost';
	/**
	 * Constant for value 'quota'
	 * @return string 'quota'
	 */
	const VALUE_QUOTA = 'quota';
	/**
	 * Constant for value 'messageBlocked'
	 * @return string 'messageBlocked'
	 */
	const VALUE_MESSAGEBLOCKED = 'messageBlocked';
	/**
	 * Constant for value 'largeMsg'
	 * @return string 'largeMsg'
	 */
	const VALUE_LARGEMSG = 'largeMsg';
	/**
	 * Constructor
	 * @return YMailTypeFetchStatus
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
		return in_array($_value,array(self::VALUE_SUCCESS,self::VALUE_UNKNOWNERROR,self::VALUE_CONNECTIONTIMEOUT,self::VALUE_BADHOST,self::VALUE_BADPORT,self::VALUE_BADUSERID,self::VALUE_BADPASSWORD,self::VALUE_BADLOGIN,self::VALUE_BADFOLDER,self::VALUE_BADMAILBOX,self::VALUE_BADMESSAGE,self::VALUE_LASTUNSUPPORTED,self::VALUE_BUSY,self::VALUE_CONNECTIONLOST,self::VALUE_QUOTA,self::VALUE_MESSAGEBLOCKED,self::VALUE_LARGEMSG));
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