<?php
/**
 * ClassMap 
 * @date 06/07/2012
 */
/**
 * ClassMap
 * @date 06/07/2012
 */
class SPAlertsClassMap
{
	final public static function classMap()
	{
		return array (
  'GetAlerts' => 'SPAlertsTypeGetAlerts',
  'GetAlertsResponse' => 'SPAlertsTypeGetAlertsResponse',
  'AlertInfo' => 'SPAlertsTypeAlertInfo',
  'ArrayOfAlert' => 'SPAlertsTypeArrayOfAlert',
  'Alert' => 'SPAlertsTypeAlert',
  'ArrayOfDeliveryChannel' => 'SPAlertsTypeArrayOfDeliveryChannel',
  'DeliveryChannel' => 'SPAlertsTypeDeliveryChannel',
  'EmailChannel' => 'SPAlertsTypeEmailChannel',
  'DeleteAlerts' => 'SPAlertsTypeDeleteAlerts',
  'ArrayOfString' => 'SPAlertsTypeArrayOfString',
  'DeleteAlertsResponse' => 'SPAlertsTypeDeleteAlertsResponse',
  'ArrayOfDeleteFailure' => 'SPAlertsTypeArrayOfDeleteFailure',
  'DeleteFailure' => 'SPAlertsTypeDeleteFailure',
);
	}
}
?>