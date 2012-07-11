<?php
/**
 * Class file for JmDataMovieAppServiceNotification
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppServiceNotification
 * @date 10/07/2012
 */
class JmDataMovieAppServiceNotification extends JmDataMovieAppWsdlClass
{
	/**
	 * Method to call NotificationRegistration
	 * Meta informations :
	 * 	- documentation : Register the user for notification service
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeNotificationRegistration::getAPIKEY()
	 * @uses JmDataMovieAppTypeNotificationRegistration::getUserID()
	 * @uses JmDataMovieAppTypeNotificationRegistration::getTokenID()
	 * @param JmDataMovieAppTypeNotificationRegistration NotificationRegistration
	 * @return JmDataMovieAppTypeNotificationRegistrationResponse
	 */
	public function NotificationRegistration(JmDataMovieAppTypeNotificationRegistration $_JmDataMovieAppTypeNotificationRegistration)
	{
		try
		{
			$this->setResult(self::getSoapClient()->NotificationRegistration(array('APIKEY'=>$_JmDataMovieAppTypeNotificationRegistration->getAPIKEY(),'userID'=>$_JmDataMovieAppTypeNotificationRegistration->getUserID(),'tokenID'=>$_JmDataMovieAppTypeNotificationRegistration->getTokenID())));
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
	 * @return JmDataMovieAppTypeNotificationRegistrationResponse
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