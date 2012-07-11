<?php
/**
 * ClassMap 
 * @date 09/07/2012
 */
/**
 * ClassMap
 * @date 09/07/2012
 */
class XWebSurveyClassMap
{
	final public static function classMap()
	{
		return array (
  'Survey' => 'XWebSurveyTypeSurvey',
  'Options' => 'XWebSurveyTypeOptions',
  'OptionType' => 'XWebSurveyTypeOptionType',
  'LoadSurveyRequest' => 'XWebSurveyTypeLoadSurveyRequest',
  'LoadSurveyResponse' => 'XWebSurveyTypeLoadSurveyResponse',
  'LoadSurveysResponse' => 'XWebSurveyTypeLoadSurveysResponse',
  'LoadSurveysPagedRequest' => 'XWebSurveyTypeLoadSurveysPagedRequest',
  'LoadSurveysPagedResponse' => 'XWebSurveyTypeLoadSurveysPagedResponse',
  'GetNewSurveyIDResponse' => 'XWebSurveyTypeGetNewSurveyIDResponse',
  'AddSurveyRequest' => 'XWebSurveyTypeAddSurveyRequest',
  'UpdateSurveyRequest' => 'XWebSurveyTypeUpdateSurveyRequest',
  'DeleteSurveyRequest' => 'XWebSurveyTypeDeleteSurveyRequest',
  'VoteRequest' => 'XWebSurveyTypeVoteRequest',
  'ProcessSurveyRequest' => 'XWebSurveyTypeProcessSurveyRequest',
);
	}
}
?>