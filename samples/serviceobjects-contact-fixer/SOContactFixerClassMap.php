<?php
/**
 * ClassMap 
 * @date 08/07/2012
 */
/**
 * ClassMap
 * @date 08/07/2012
 */
class SOContactFixerClassMap
{
	final public static function classMap()
	{
		return array (
  'FixBusinessContact' => 'SOContactFixerTypeFixBusinessContact',
  'FixBusinessContactResponse' => 'SOContactFixerTypeFixBusinessContactResponse',
  'Contact' => 'SOContactFixerTypeContact',
  'ContactInfo' => 'SOContactFixerTypeContactInfo',
  'Error' => 'SOContactFixerTypeError',
  'ListAllCorrections' => 'SOContactFixerTypeListAllCorrections',
  'ListAllCorrectionsResponse' => 'SOContactFixerTypeListAllCorrectionsResponse',
  'CorrectionList' => 'SOContactFixerTypeCorrectionList',
  'ArrayOfCorrection' => 'SOContactFixerTypeArrayOfCorrection',
  'Correction' => 'SOContactFixerTypeCorrection',
);
	}
}
?>