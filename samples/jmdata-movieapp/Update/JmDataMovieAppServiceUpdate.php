<?php
/**
 * Class file for JmDataMovieAppServiceUpdate
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppServiceUpdate
 * @date 10/07/2012
 */
class JmDataMovieAppServiceUpdate extends JmDataMovieAppWsdlClass
{
	/**
	 * Method to call UpdateSettings
	 * Meta informations :
	 * 	- documentation : Update setting for the specified user.
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeUpdateSettings::getAPIKEY()
	 * @uses JmDataMovieAppTypeUpdateSettings::getUserID()
	 * @uses JmDataMovieAppTypeUpdateSettings::getReminderEnabled()
	 * @uses JmDataMovieAppTypeUpdateSettings::getReminderTime()
	 * @param JmDataMovieAppTypeUpdateSettings UpdateSettings
	 * @return JmDataMovieAppTypeUpdateSettingsResponse
	 */
	public function UpdateSettings(JmDataMovieAppTypeUpdateSettings $_JmDataMovieAppTypeUpdateSettings)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateSettings(array('APIKEY'=>$_JmDataMovieAppTypeUpdateSettings->getAPIKEY(),'userID'=>$_JmDataMovieAppTypeUpdateSettings->getUserID(),'reminderEnabled'=>$_JmDataMovieAppTypeUpdateSettings->getReminderEnabled(),'reminderTime'=>$_JmDataMovieAppTypeUpdateSettings->getReminderTime())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call UpdateUUID
	 * Meta informations :
	 * 	- documentation : Update the users UUID on server. Used after installation of new device.
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeUpdateUUID::getAPIKEY()
	 * @uses JmDataMovieAppTypeUpdateUUID::getUserID()
	 * @uses JmDataMovieAppTypeUpdateUUID::getUUID()
	 * @param JmDataMovieAppTypeUpdateUUID UpdateUUID
	 * @return JmDataMovieAppTypeUpdateUUIDResponse
	 */
	public function UpdateUUID(JmDataMovieAppTypeUpdateUUID $_JmDataMovieAppTypeUpdateUUID)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateUUID(array('APIKEY'=>$_JmDataMovieAppTypeUpdateUUID->getAPIKEY(),'userID'=>$_JmDataMovieAppTypeUpdateUUID->getUserID(),'UUID'=>$_JmDataMovieAppTypeUpdateUUID->getUUID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method returning the result content
	 *
	 * @return JmDataMovieAppTypeUpdateUUIDResponse
	 */
	public function getResult()
	{
		return parent::getResult();
	}
	/**
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>