<?php
/**
 * Class file for GGAdwordsTypeOperationAccessDeniedReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeOperationAccessDeniedReason
 * @date 03/07/2012
 */
class GGAdwordsTypeOperationAccessDeniedReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'ACTION_NOT_PERMITTED'
	 * Meta informations :
	 * 	- documentation : Unauthorized invocation of a service's method (get, mutate, etc.)
	 * @return string 'ACTION_NOT_PERMITTED'
	 */
	const VALUE_ACTION_NOT_PERMITTED = 'ACTION_NOT_PERMITTED';
	/**
	 * Constant for value 'ADD_OPERATION_NOT_PERMITTED'
	 * Meta informations :
	 * 	- documentation : Unauthorized ADD operation in invoking a service's mutate method.
	 * @return string 'ADD_OPERATION_NOT_PERMITTED'
	 */
	const VALUE_ADD_OPERATION_NOT_PERMITTED = 'ADD_OPERATION_NOT_PERMITTED';
	/**
	 * Constant for value 'REMOVE_OPERATION_NOT_PERMITTED'
	 * Meta informations :
	 * 	- documentation : Unauthorized REMOVE operation in invoking a service's mutate method.
	 * @return string 'REMOVE_OPERATION_NOT_PERMITTED'
	 */
	const VALUE_REMOVE_OPERATION_NOT_PERMITTED = 'REMOVE_OPERATION_NOT_PERMITTED';
	/**
	 * Constant for value 'SET_OPERATION_NOT_PERMITTED'
	 * Meta informations :
	 * 	- documentation : Unauthorized SET operation in invoking a service's mutate method.
	 * @return string 'SET_OPERATION_NOT_PERMITTED'
	 */
	const VALUE_SET_OPERATION_NOT_PERMITTED = 'SET_OPERATION_NOT_PERMITTED';
	/**
	 * Constant for value 'MUTATE_ACTION_NOT_PERMITTED_FOR_CLIENT'
	 * Meta informations :
	 * 	- documentation : A mutate action is not allowed on this campaign, from this client.
	 * @return string 'MUTATE_ACTION_NOT_PERMITTED_FOR_CLIENT'
	 */
	const VALUE_MUTATE_ACTION_NOT_PERMITTED_FOR_CLIENT = 'MUTATE_ACTION_NOT_PERMITTED_FOR_CLIENT';
	/**
	 * Constant for value 'UNKNOWN'
	 * Meta informations :
	 * 	- documentation : The reason the invoked method or operation is prohibited is not known (the client may be of an older version than the server).
	 * @return string 'UNKNOWN'
	 */
	const VALUE_UNKNOWN = 'UNKNOWN';
	/**
	 * Constructor
	 * @return GGAdwordsTypeOperationAccessDeniedReason
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
		return in_array($_value,array(self::VALUE_ACTION_NOT_PERMITTED,self::VALUE_ADD_OPERATION_NOT_PERMITTED,self::VALUE_REMOVE_OPERATION_NOT_PERMITTED,self::VALUE_SET_OPERATION_NOT_PERMITTED,self::VALUE_MUTATE_ACTION_NOT_PERMITTED_FOR_CLIENT,self::VALUE_UNKNOWN));
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