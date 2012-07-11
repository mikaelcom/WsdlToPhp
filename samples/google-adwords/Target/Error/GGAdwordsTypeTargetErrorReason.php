<?php
/**
 * Class file for GGAdwordsTypeTargetErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeTargetErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeTargetErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'AD_SCHEDULE_ADVANCED_INCOMPATIBLE_WITH_CONVERSION_OPTIMIZER'
	 * Meta informations :
	 * 	- documentation : Cannot enable advanced ad scheduling for a conversion optimizer campaign.
	 * @return string 'AD_SCHEDULE_ADVANCED_INCOMPATIBLE_WITH_CONVERSION_OPTIMIZER'
	 */
	const VALUE_AD_SCHEDULE_ADVANCED_INCOMPATIBLE_WITH_CONVERSION_OPTIMIZER = 'AD_SCHEDULE_ADVANCED_INCOMPATIBLE_WITH_CONVERSION_OPTIMIZER';
	/**
	 * Constant for value 'AD_SCHEDULE_BID_MULTIPLIER_MALFORMED'
	 * Meta informations :
	 * 	- documentation : Bid multiplier could not be parsed as a number; it was malformed.
	 * @return string 'AD_SCHEDULE_BID_MULTIPLIER_MALFORMED'
	 */
	const VALUE_AD_SCHEDULE_BID_MULTIPLIER_MALFORMED = 'AD_SCHEDULE_BID_MULTIPLIER_MALFORMED';
	/**
	 * Constant for value 'AD_SCHEDULE_BID_MULTIPLIER_TOO_BIG'
	 * Meta informations :
	 * 	- documentation : Bid multiplier was too big.
	 * @return string 'AD_SCHEDULE_BID_MULTIPLIER_TOO_BIG'
	 */
	const VALUE_AD_SCHEDULE_BID_MULTIPLIER_TOO_BIG = 'AD_SCHEDULE_BID_MULTIPLIER_TOO_BIG';
	/**
	 * Constant for value 'AD_SCHEDULE_BID_MULTIPLIER_TOO_SMALL'
	 * Meta informations :
	 * 	- documentation : Bid multiplier was too small.
	 * @return string 'AD_SCHEDULE_BID_MULTIPLIER_TOO_SMALL'
	 */
	const VALUE_AD_SCHEDULE_BID_MULTIPLIER_TOO_SMALL = 'AD_SCHEDULE_BID_MULTIPLIER_TOO_SMALL';
	/**
	 * Constant for value 'AD_SCHEDULE_BID_MULTIPLIER_TOO_MANY_FRACTION_DIGITS'
	 * Meta informations :
	 * 	- documentation : Bid multiplier has too many decimal digits.
	 * @return string 'AD_SCHEDULE_BID_MULTIPLIER_TOO_MANY_FRACTION_DIGITS'
	 */
	const VALUE_AD_SCHEDULE_BID_MULTIPLIER_TOO_MANY_FRACTION_DIGITS = 'AD_SCHEDULE_BID_MULTIPLIER_TOO_MANY_FRACTION_DIGITS';
	/**
	 * Constant for value 'AD_SCHEDULE_EXCEEDED_INTERVALS_PER_DAY_LIMIT'
	 * Meta informations :
	 * 	- documentation : The number of intervals per day limit was exceeded.
	 * @return string 'AD_SCHEDULE_EXCEEDED_INTERVALS_PER_DAY_LIMIT'
	 */
	const VALUE_AD_SCHEDULE_EXCEEDED_INTERVALS_PER_DAY_LIMIT = 'AD_SCHEDULE_EXCEEDED_INTERVALS_PER_DAY_LIMIT';
	/**
	 * Constant for value 'AD_SCHEDULE_EXCEEDS_PAST_END_OF_WEEK'
	 * Meta informations :
	 * 	- documentation : The required times must be on or before the end of the week (Sunday at 11:45pm).
	 * @return string 'AD_SCHEDULE_EXCEEDS_PAST_END_OF_WEEK'
	 */
	const VALUE_AD_SCHEDULE_EXCEEDS_PAST_END_OF_WEEK = 'AD_SCHEDULE_EXCEEDS_PAST_END_OF_WEEK';
	/**
	 * Constant for value 'AD_SCHEDULE_INCOMPATIBILITY'
	 * Meta informations :
	 * 	- documentation : Cannot enable ad scheduling for the campaign.
	 * @return string 'AD_SCHEDULE_INCOMPATIBILITY'
	 */
	const VALUE_AD_SCHEDULE_INCOMPATIBILITY = 'AD_SCHEDULE_INCOMPATIBILITY';
	/**
	 * Constant for value 'AD_SCHEDULE_INCOMPATIBLE_WITH_BUDGET_OPTIMIZER'
	 * Meta informations :
	 * 	- documentation : Cannot enable ad scheduling for a budget optimizer campaign.
	 * @return string 'AD_SCHEDULE_INCOMPATIBLE_WITH_BUDGET_OPTIMIZER'
	 */
	const VALUE_AD_SCHEDULE_INCOMPATIBLE_WITH_BUDGET_OPTIMIZER = 'AD_SCHEDULE_INCOMPATIBLE_WITH_BUDGET_OPTIMIZER';
	/**
	 * Constant for value 'AD_SCHEDULE_INTERVAL_CANNOT_SPAN_MULTIPLE_DAYS'
	 * Meta informations :
	 * 	- documentation : The start and end times are not on the same day.
	 * @return string 'AD_SCHEDULE_INTERVAL_CANNOT_SPAN_MULTIPLE_DAYS'
	 */
	const VALUE_AD_SCHEDULE_INTERVAL_CANNOT_SPAN_MULTIPLE_DAYS = 'AD_SCHEDULE_INTERVAL_CANNOT_SPAN_MULTIPLE_DAYS';
	/**
	 * Constant for value 'AD_SCHEDULE_INVALID_DAY_OF_THE_WEEK'
	 * Meta informations :
	 * 	- documentation : Integer representation day of the week is not within proper range
	 * @return string 'AD_SCHEDULE_INVALID_DAY_OF_THE_WEEK'
	 */
	const VALUE_AD_SCHEDULE_INVALID_DAY_OF_THE_WEEK = 'AD_SCHEDULE_INVALID_DAY_OF_THE_WEEK';
	/**
	 * Constant for value 'AD_SCHEDULE_INVALID_TIME_INTERVAL'
	 * Meta informations :
	 * 	- documentation : The start time is not less than the end time.
	 * @return string 'AD_SCHEDULE_INVALID_TIME_INTERVAL'
	 */
	const VALUE_AD_SCHEDULE_INVALID_TIME_INTERVAL = 'AD_SCHEDULE_INVALID_TIME_INTERVAL';
	/**
	 * Constant for value 'AD_SCHEDULE_NO_INTERVALS_WHILE_ENABLED'
	 * Meta informations :
	 * 	- documentation : Enabled ad schedule does not have at least one interval.
	 * @return string 'AD_SCHEDULE_NO_INTERVALS_WHILE_ENABLED'
	 */
	const VALUE_AD_SCHEDULE_NO_INTERVALS_WHILE_ENABLED = 'AD_SCHEDULE_NO_INTERVALS_WHILE_ENABLED';
	/**
	 * Constant for value 'AD_SCHEDULE_NOT_MULTIPLE_OF_15_MINUTES'
	 * Meta informations :
	 * 	- documentation : The required times must be a multiple of 15 minutes.
	 * @return string 'AD_SCHEDULE_NOT_MULTIPLE_OF_15_MINUTES'
	 */
	const VALUE_AD_SCHEDULE_NOT_MULTIPLE_OF_15_MINUTES = 'AD_SCHEDULE_NOT_MULTIPLE_OF_15_MINUTES';
	/**
	 * Constant for value 'AD_SCHEDULE_TIME_INTERVALS_OVERLAP'
	 * Meta informations :
	 * 	- documentation : Two time intervals overlap each other.
	 * @return string 'AD_SCHEDULE_TIME_INTERVALS_OVERLAP'
	 */
	const VALUE_AD_SCHEDULE_TIME_INTERVALS_OVERLAP = 'AD_SCHEDULE_TIME_INTERVALS_OVERLAP';
	/**
	 * Constant for value 'CANNOT_EXCLUDE_CITY'
	 * Meta informations :
	 * 	- documentation : Cannot exclude city.
	 * @return string 'CANNOT_EXCLUDE_CITY'
	 */
	const VALUE_CANNOT_EXCLUDE_CITY = 'CANNOT_EXCLUDE_CITY';
	/**
	 * Constant for value 'CANNOT_EXCLUDE_IF_NOT_TARGETED'
	 * Meta informations :
	 * 	- documentation : Cannot exclude a location that is not being targeted by an enclosing location.
	 * @return string 'CANNOT_EXCLUDE_IF_NOT_TARGETED'
	 */
	const VALUE_CANNOT_EXCLUDE_IF_NOT_TARGETED = 'CANNOT_EXCLUDE_IF_NOT_TARGETED';
	/**
	 * Constant for value 'CANNOT_EXCLUDE_METRO'
	 * Meta informations :
	 * 	- documentation : Cannot exclude metro.
	 * @return string 'CANNOT_EXCLUDE_METRO'
	 */
	const VALUE_CANNOT_EXCLUDE_METRO = 'CANNOT_EXCLUDE_METRO';
	/**
	 * Constant for value 'CANNOT_EXCLUDE_PROVINCE'
	 * Meta informations :
	 * 	- documentation : Cannot exclude province.
	 * @return string 'CANNOT_EXCLUDE_PROVINCE'
	 */
	const VALUE_CANNOT_EXCLUDE_PROVINCE = 'CANNOT_EXCLUDE_PROVINCE';
	/**
	 * Constant for value 'CANNOT_OPT_OUT_GOOGLE_SEARCH_WHILE_BID_TO_POSITION_ENABLE'
	 * Meta informations :
	 * 	- documentation : Cannot opt out from Google Search while position preference enabled.
	 * @return string 'CANNOT_OPT_OUT_GOOGLE_SEARCH_WHILE_BID_TO_POSITION_ENABLE'
	 */
	const VALUE_CANNOT_OPT_OUT_GOOGLE_SEARCH_WHILE_BID_TO_POSITION_ENABLE = 'CANNOT_OPT_OUT_GOOGLE_SEARCH_WHILE_BID_TO_POSITION_ENABLE';
	/**
	 * Constant for value 'CANNOT_TARGET_AGE_WITHOUT_GENDER'
	 * Meta informations :
	 * 	- documentation : Cannot target an age segment without targeting at least one gender segment.
	 * @return string 'CANNOT_TARGET_AGE_WITHOUT_GENDER'
	 */
	const VALUE_CANNOT_TARGET_AGE_WITHOUT_GENDER = 'CANNOT_TARGET_AGE_WITHOUT_GENDER';
	/**
	 * Constant for value 'CANNOT_TARGET_CITY'
	 * Meta informations :
	 * 	- documentation : Cannot target city.
	 * @return string 'CANNOT_TARGET_CITY'
	 */
	const VALUE_CANNOT_TARGET_CITY = 'CANNOT_TARGET_CITY';
	/**
	 * Constant for value 'CANNOT_TARGET_CONTENT_CONTEXTUAL_WITHOUT_CONTENT_NETWORK'
	 * Meta informations :
	 * 	- documentation : Cannot cover content contextual without content network.
	 * @return string 'CANNOT_TARGET_CONTENT_CONTEXTUAL_WITHOUT_CONTENT_NETWORK'
	 */
	const VALUE_CANNOT_TARGET_CONTENT_CONTEXTUAL_WITHOUT_CONTENT_NETWORK = 'CANNOT_TARGET_CONTENT_CONTEXTUAL_WITHOUT_CONTENT_NETWORK';
	/**
	 * Constant for value 'CANNOT_MODIFY_CONTENT_CONTEXTUAL'
	 * Meta informations :
	 * 	- documentation : Cannot modify content contextual on campaigns setup to use AdGroup level targeting settings. This is specified using {@link TargetRestrictSetting}. Note that {@link TargetRestrictSetting} is set automatically for all campaigns created after version v201206.
	 * @return string 'CANNOT_MODIFY_CONTENT_CONTEXTUAL'
	 */
	const VALUE_CANNOT_MODIFY_CONTENT_CONTEXTUAL = 'CANNOT_MODIFY_CONTENT_CONTEXTUAL';
	/**
	 * Constant for value 'CANNOT_TARGET_COUNTRY'
	 * Meta informations :
	 * 	- documentation : Cannot target country.
	 * @return string 'CANNOT_TARGET_COUNTRY'
	 */
	const VALUE_CANNOT_TARGET_COUNTRY = 'CANNOT_TARGET_COUNTRY';
	/**
	 * Constant for value 'CANNOT_TARGET_COVERAGE'
	 * Meta informations :
	 * 	- documentation : The requested network coverage modification is prohibited.
	 * @return string 'CANNOT_TARGET_COVERAGE'
	 */
	const VALUE_CANNOT_TARGET_COVERAGE = 'CANNOT_TARGET_COVERAGE';
	/**
	 * Constant for value 'CANNOT_TARGET_GENDER_WITHOUT_AGE'
	 * Meta informations :
	 * 	- documentation : Cannot target a gender segment without targeting at least one age segment.
	 * @return string 'CANNOT_TARGET_GENDER_WITHOUT_AGE'
	 */
	const VALUE_CANNOT_TARGET_GENDER_WITHOUT_AGE = 'CANNOT_TARGET_GENDER_WITHOUT_AGE';
	/**
	 * Constant for value 'CANNOT_TARGET_GOOGLE_SEARCH_FOR_CPM_CAMPAIGN'
	 * Meta informations :
	 * 	- documentation : Cannot target Google Search network for a CPM campaign.
	 * @return string 'CANNOT_TARGET_GOOGLE_SEARCH_FOR_CPM_CAMPAIGN'
	 */
	const VALUE_CANNOT_TARGET_GOOGLE_SEARCH_FOR_CPM_CAMPAIGN = 'CANNOT_TARGET_GOOGLE_SEARCH_FOR_CPM_CAMPAIGN';
	/**
	 * Constant for value 'CANNOT_TARGET_LANGUAGE'
	 * Meta informations :
	 * 	- documentation : Specified language cannot be targeted.
	 * @return string 'CANNOT_TARGET_LANGUAGE'
	 */
	const VALUE_CANNOT_TARGET_LANGUAGE = 'CANNOT_TARGET_LANGUAGE';
	/**
	 * Constant for value 'CANNOT_TARGET_METRO'
	 * Meta informations :
	 * 	- documentation : Cannot target metro.
	 * @return string 'CANNOT_TARGET_METRO'
	 */
	const VALUE_CANNOT_TARGET_METRO = 'CANNOT_TARGET_METRO';
	/**
	 * Constant for value 'CANNOT_TARGET_MOBILE_CARRIER'
	 * Meta informations :
	 * 	- documentation : Specified Mobile carrier cannot be targeted
	 * @return string 'CANNOT_TARGET_MOBILE_CARRIER'
	 */
	const VALUE_CANNOT_TARGET_MOBILE_CARRIER = 'CANNOT_TARGET_MOBILE_CARRIER';
	/**
	 * Constant for value 'CANNOT_TARGET_PROVINCE'
	 * Meta informations :
	 * 	- documentation : Cannot target province.
	 * @return string 'CANNOT_TARGET_PROVINCE'
	 */
	const VALUE_CANNOT_TARGET_PROVINCE = 'CANNOT_TARGET_PROVINCE';
	/**
	 * Constant for value 'CANNOT_TARGET_SEARCH_SYNDICATION_WITHOUT_GOOGLE_SEARCH'
	 * Meta informations :
	 * 	- documentation : Cannot cover search syndication network without google search network.
	 * @return string 'CANNOT_TARGET_SEARCH_SYNDICATION_WITHOUT_GOOGLE_SEARCH'
	 */
	const VALUE_CANNOT_TARGET_SEARCH_SYNDICATION_WITHOUT_GOOGLE_SEARCH = 'CANNOT_TARGET_SEARCH_SYNDICATION_WITHOUT_GOOGLE_SEARCH';
	/**
	 * Constant for value 'CANNOT_TARGET_SYNDICATABLE_TYPES'
	 * Meta informations :
	 * 	- documentation : Cannot target any syndicatable types.
	 * @return string 'CANNOT_TARGET_SYNDICATABLE_TYPES'
	 */
	const VALUE_CANNOT_TARGET_SYNDICATABLE_TYPES = 'CANNOT_TARGET_SYNDICATABLE_TYPES';
	/**
	 * Constant for value 'CANNOT_TARGET_THE_SAME_TARGET_LIST_TYPE_MULTIPLE_TIMES'
	 * Meta informations :
	 * 	- documentation : Cannot target the same target list type twice.
	 * @return string 'CANNOT_TARGET_THE_SAME_TARGET_LIST_TYPE_MULTIPLE_TIMES'
	 */
	const VALUE_CANNOT_TARGET_THE_SAME_TARGET_LIST_TYPE_MULTIPLE_TIMES = 'CANNOT_TARGET_THE_SAME_TARGET_LIST_TYPE_MULTIPLE_TIMES';
	/**
	 * Constant for value 'DEMOGRAPHIC_BID_MODIFIER_SHOULD_BE_IN_BETWEEN_0_AND_500'
	 * Meta informations :
	 * 	- documentation : The bid modifier of a demographic target should be in the [0, 500] range.
	 * @return string 'DEMOGRAPHIC_BID_MODIFIER_SHOULD_BE_IN_BETWEEN_0_AND_500'
	 */
	const VALUE_DEMOGRAPHIC_BID_MODIFIER_SHOULD_BE_IN_BETWEEN_0_AND_500 = 'DEMOGRAPHIC_BID_MODIFIER_SHOULD_BE_IN_BETWEEN_0_AND_500';
	/**
	 * Constant for value 'INVALID_CITY_CODE'
	 * Meta informations :
	 * 	- documentation : A city could not be matched with the provided input.
	 * @return string 'INVALID_CITY_CODE'
	 */
	const VALUE_INVALID_CITY_CODE = 'INVALID_CITY_CODE';
	/**
	 * Constant for value 'INVALID_CITYNAME_LENGTH'
	 * Meta informations :
	 * 	- documentation : CityName is too long.
	 * @return string 'INVALID_CITYNAME_LENGTH'
	 */
	const VALUE_INVALID_CITYNAME_LENGTH = 'INVALID_CITYNAME_LENGTH';
	/**
	 * Constant for value 'INVALID_EXCLUDED_POLYGON_TARGET'
	 * Meta informations :
	 * 	- documentation : Polygon targets cannot be excluded.
	 * @return string 'INVALID_EXCLUDED_POLYGON_TARGET'
	 */
	const VALUE_INVALID_EXCLUDED_POLYGON_TARGET = 'INVALID_EXCLUDED_POLYGON_TARGET';
	/**
	 * Constant for value 'INVALID_EXCLUDED_PROXIMITY_TARGET'
	 * Meta informations :
	 * 	- documentation : Proximity targets cannot be excluded
	 * @return string 'INVALID_EXCLUDED_PROXIMITY_TARGET'
	 */
	const VALUE_INVALID_EXCLUDED_PROXIMITY_TARGET = 'INVALID_EXCLUDED_PROXIMITY_TARGET';
	/**
	 * Constant for value 'INVALID_LANGUAGE_CODE'
	 * Meta informations :
	 * 	- documentation : Language code specified is invalid.
	 * @return string 'INVALID_LANGUAGE_CODE'
	 */
	const VALUE_INVALID_LANGUAGE_CODE = 'INVALID_LANGUAGE_CODE';
	/**
	 * Constant for value 'INVALID_LATITUDE'
	 * Meta informations :
	 * 	- documentation : Latitude supplied with the target is invalid.
	 * @return string 'INVALID_LATITUDE'
	 */
	const VALUE_INVALID_LATITUDE = 'INVALID_LATITUDE';
	/**
	 * Constant for value 'INVALID_LONGITUDE'
	 * Meta informations :
	 * 	- documentation : Longitude supplied with the target is invalid.
	 * @return string 'INVALID_LONGITUDE'
	 */
	const VALUE_INVALID_LONGITUDE = 'INVALID_LONGITUDE';
	/**
	 * Constant for value 'INVALID_METRO_CODE'
	 * Meta informations :
	 * 	- documentation : Metro code specified is invalid.
	 * @return string 'INVALID_METRO_CODE'
	 */
	const VALUE_INVALID_METRO_CODE = 'INVALID_METRO_CODE';
	/**
	 * Constant for value 'INVALID_MOBILE_CARRIER'
	 * Meta informations :
	 * 	- documentation : Mobile Carrier specified is invalid.
	 * @return string 'INVALID_MOBILE_CARRIER'
	 */
	const VALUE_INVALID_MOBILE_CARRIER = 'INVALID_MOBILE_CARRIER';
	/**
	 * Constant for value 'INVALID_MOBILE_PLATFORM'
	 * Meta informations :
	 * 	- documentation : Mobile Platform is invalid.
	 * @return string 'INVALID_MOBILE_PLATFORM'
	 */
	const VALUE_INVALID_MOBILE_PLATFORM = 'INVALID_MOBILE_PLATFORM';
	/**
	 * Constant for value 'INVALID_POSTALCODE_LENGTH'
	 * Meta informations :
	 * 	- documentation : PostalCode is too long.
	 * @return string 'INVALID_POSTALCODE_LENGTH'
	 */
	const VALUE_INVALID_POSTALCODE_LENGTH = 'INVALID_POSTALCODE_LENGTH';
	/**
	 * Constant for value 'INVALID_PROVINCE_CODE'
	 * Meta informations :
	 * 	- documentation : Province code specified is invalid.
	 * @return string 'INVALID_PROVINCE_CODE'
	 */
	const VALUE_INVALID_PROVINCE_CODE = 'INVALID_PROVINCE_CODE';
	/**
	 * Constant for value 'INVALID_PROXIMITY_RADIUS'
	 * Meta informations :
	 * 	- documentation : Radius supplied with the proximity target is invalid.
	 * @return string 'INVALID_PROXIMITY_RADIUS'
	 */
	const VALUE_INVALID_PROXIMITY_RADIUS = 'INVALID_PROXIMITY_RADIUS';
	/**
	 * Constant for value 'INVALID_REGIONCODE_LENGTH'
	 * Meta informations :
	 * 	- documentation : RegionCode is too long.
	 * @return string 'INVALID_REGIONCODE_LENGTH'
	 */
	const VALUE_INVALID_REGIONCODE_LENGTH = 'INVALID_REGIONCODE_LENGTH';
	/**
	 * Constant for value 'INVALID_REGIONNAME_LENGTH'
	 * Meta informations :
	 * 	- documentation : RegionName is too long.
	 * @return string 'INVALID_REGIONNAME_LENGTH'
	 */
	const VALUE_INVALID_REGIONNAME_LENGTH = 'INVALID_REGIONNAME_LENGTH';
	/**
	 * Constant for value 'INVALID_STREETADDRESS_LENGTH'
	 * Meta informations :
	 * 	- documentation : StreetAddress is too long.
	 * @return string 'INVALID_STREETADDRESS_LENGTH'
	 */
	const VALUE_INVALID_STREETADDRESS_LENGTH = 'INVALID_STREETADDRESS_LENGTH';
	/**
	 * Constant for value 'MULTIPLE_OCCURRENCES_OF_SAME_TARGET'
	 * Meta informations :
	 * 	- documentation : Multiple occurrences of the same target were encountered.
	 * @return string 'MULTIPLE_OCCURRENCES_OF_SAME_TARGET'
	 */
	const VALUE_MULTIPLE_OCCURRENCES_OF_SAME_TARGET = 'MULTIPLE_OCCURRENCES_OF_SAME_TARGET';
	/**
	 * Constant for value 'POLYGON_DUPLICATE_VERTICES'
	 * Meta informations :
	 * 	- documentation : A PolygonTarget point is duplicated.
	 * @return string 'POLYGON_DUPLICATE_VERTICES'
	 */
	const VALUE_POLYGON_DUPLICATE_VERTICES = 'POLYGON_DUPLICATE_VERTICES';
	/**
	 * Constant for value 'POLYGON_EDGES_INTERSECT'
	 * Meta informations :
	 * 	- documentation : A PolygonTarget has edges that intersect.
	 * @return string 'POLYGON_EDGES_INTERSECT'
	 */
	const VALUE_POLYGON_EDGES_INTERSECT = 'POLYGON_EDGES_INTERSECT';
	/**
	 * Constant for value 'POLYGON_TOO_FEW_VERTICES'
	 * Meta informations :
	 * 	- documentation : A PolygonTarget has too few vertices.
	 * @return string 'POLYGON_TOO_FEW_VERTICES'
	 */
	const VALUE_POLYGON_TOO_FEW_VERTICES = 'POLYGON_TOO_FEW_VERTICES';
	/**
	 * Constant for value 'POLYGON_TOO_MANY_VERTICES'
	 * Meta informations :
	 * 	- documentation : A polygonTarget has too many vertices. (more than 100)
	 * @return string 'POLYGON_TOO_MANY_VERTICES'
	 */
	const VALUE_POLYGON_TOO_MANY_VERTICES = 'POLYGON_TOO_MANY_VERTICES';
	/**
	 * Constant for value 'POLYGON_TOO_LARGE'
	 * Meta informations :
	 * 	- documentation : A PolygonTarget is too large.
	 * @return string 'POLYGON_TOO_LARGE'
	 */
	const VALUE_POLYGON_TOO_LARGE = 'POLYGON_TOO_LARGE';
	/**
	 * Constant for value 'TARGETING_VALIDATION_FAILED'
	 * Meta informations :
	 * 	- documentation : A validation error was encountered; however, a more detailed TargetingValidationError usually has already been provided.
	 * @return string 'TARGETING_VALIDATION_FAILED'
	 */
	const VALUE_TARGETING_VALIDATION_FAILED = 'TARGETING_VALIDATION_FAILED';
	/**
	 * Constant for value 'TARGETING_CROSS_COUNTRY_REGIONAL'
	 * Meta informations :
	 * 	- documentation : Region spanning multiple countries.
	 * @return string 'TARGETING_CROSS_COUNTRY_REGIONAL'
	 */
	const VALUE_TARGETING_CROSS_COUNTRY_REGIONAL = 'TARGETING_CROSS_COUNTRY_REGIONAL';
	/**
	 * Constant for value 'TARGETING_EXCLUSION_NOT_SUPPORTED'
	 * Meta informations :
	 * 	- documentation : The given exclusion is not supported.
	 * @return string 'TARGETING_EXCLUSION_NOT_SUPPORTED'
	 */
	const VALUE_TARGETING_EXCLUSION_NOT_SUPPORTED = 'TARGETING_EXCLUSION_NOT_SUPPORTED';
	/**
	 * Constant for value 'TARGETING_INCOMPATIBLE_LOCATION_TYPES'
	 * Meta informations :
	 * 	- documentation : The location types are incompatible for targeting.
	 * @return string 'TARGETING_INCOMPATIBLE_LOCATION_TYPES'
	 */
	const VALUE_TARGETING_INCOMPATIBLE_LOCATION_TYPES = 'TARGETING_INCOMPATIBLE_LOCATION_TYPES';
	/**
	 * Constant for value 'TARGETING_NOT_SUPPORTED'
	 * Meta informations :
	 * 	- documentation : The targeting is not supported.
	 * @return string 'TARGETING_NOT_SUPPORTED'
	 */
	const VALUE_TARGETING_NOT_SUPPORTED = 'TARGETING_NOT_SUPPORTED';
	/**
	 * Constant for value 'TARGETING_TOO_MANY_REGIONS'
	 * Meta informations :
	 * 	- documentation : There are too many regions.
	 * @return string 'TARGETING_TOO_MANY_REGIONS'
	 */
	const VALUE_TARGETING_TOO_MANY_REGIONS = 'TARGETING_TOO_MANY_REGIONS';
	/**
	 * Constant for value 'TOO_MANY_EXCLUDED_LOCATIONS'
	 * Meta informations :
	 * 	- documentation : There are too many excluded locations.
	 * @return string 'TOO_MANY_EXCLUDED_LOCATIONS'
	 */
	const VALUE_TOO_MANY_EXCLUDED_LOCATIONS = 'TOO_MANY_EXCLUDED_LOCATIONS';
	/**
	 * Constant for value 'TOO_MANY_TARGETED_LOCATIONS'
	 * Meta informations :
	 * 	- documentation : There are too many targeted locations.
	 * @return string 'TOO_MANY_TARGETED_LOCATIONS'
	 */
	const VALUE_TOO_MANY_TARGETED_LOCATIONS = 'TOO_MANY_TARGETED_LOCATIONS';
	/**
	 * Constant for value 'WARNING_MAY_NOW_REQUIRE_CHINESE_APPROVAL'
	 * Meta informations :
	 * 	- documentation : This is for warnings which is currently not being passed back to the client.
	 * @return string 'WARNING_MAY_NOW_REQUIRE_CHINESE_APPROVAL'
	 */
	const VALUE_WARNING_MAY_NOW_REQUIRE_CHINESE_APPROVAL = 'WARNING_MAY_NOW_REQUIRE_CHINESE_APPROVAL';
	/**
	 * Constant for value 'WARNING_NOW_REQUIRES_CHINESE_APPROVAL'
	 * Meta informations :
	 * 	- documentation : This is for warnings which is currently not being passed back to the client.
	 * @return string 'WARNING_NOW_REQUIRES_CHINESE_APPROVAL'
	 */
	const VALUE_WARNING_NOW_REQUIRES_CHINESE_APPROVAL = 'WARNING_NOW_REQUIRES_CHINESE_APPROVAL';
	/**
	 * Constant for value 'WARNING_NOW_TARGETS_CHINA'
	 * Meta informations :
	 * 	- documentation : This is for warnings which is currently not being passed back to the client.
	 * @return string 'WARNING_NOW_TARGETS_CHINA'
	 */
	const VALUE_WARNING_NOW_TARGETS_CHINA = 'WARNING_NOW_TARGETS_CHINA';
	/**
	 * Constant for value 'WARNING_NOW_TARGETS_CHINESE'
	 * Meta informations :
	 * 	- documentation : This is for warnings which is currently not being passed back to the client.
	 * @return string 'WARNING_NOW_TARGETS_CHINESE'
	 */
	const VALUE_WARNING_NOW_TARGETS_CHINESE = 'WARNING_NOW_TARGETS_CHINESE';
	/**
	 * Constant for value 'TARGET_ERROR'
	 * Meta informations :
	 * 	- documentation : The target error is unknown.
	 * @return string 'TARGET_ERROR'
	 */
	const VALUE_TARGET_ERROR = 'TARGET_ERROR';
	/**
	 * Constructor
	 * @return GGAdwordsTypeTargetErrorReason
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
		return in_array($_value,array(self::VALUE_AD_SCHEDULE_ADVANCED_INCOMPATIBLE_WITH_CONVERSION_OPTIMIZER,self::VALUE_AD_SCHEDULE_BID_MULTIPLIER_MALFORMED,self::VALUE_AD_SCHEDULE_BID_MULTIPLIER_TOO_BIG,self::VALUE_AD_SCHEDULE_BID_MULTIPLIER_TOO_SMALL,self::VALUE_AD_SCHEDULE_BID_MULTIPLIER_TOO_MANY_FRACTION_DIGITS,self::VALUE_AD_SCHEDULE_EXCEEDED_INTERVALS_PER_DAY_LIMIT,self::VALUE_AD_SCHEDULE_EXCEEDS_PAST_END_OF_WEEK,self::VALUE_AD_SCHEDULE_INCOMPATIBILITY,self::VALUE_AD_SCHEDULE_INCOMPATIBLE_WITH_BUDGET_OPTIMIZER,self::VALUE_AD_SCHEDULE_INTERVAL_CANNOT_SPAN_MULTIPLE_DAYS,self::VALUE_AD_SCHEDULE_INVALID_DAY_OF_THE_WEEK,self::VALUE_AD_SCHEDULE_INVALID_TIME_INTERVAL,self::VALUE_AD_SCHEDULE_NO_INTERVALS_WHILE_ENABLED,self::VALUE_AD_SCHEDULE_NOT_MULTIPLE_OF_15_MINUTES,self::VALUE_AD_SCHEDULE_TIME_INTERVALS_OVERLAP,self::VALUE_CANNOT_EXCLUDE_CITY,self::VALUE_CANNOT_EXCLUDE_IF_NOT_TARGETED,self::VALUE_CANNOT_EXCLUDE_METRO,self::VALUE_CANNOT_EXCLUDE_PROVINCE,self::VALUE_CANNOT_OPT_OUT_GOOGLE_SEARCH_WHILE_BID_TO_POSITION_ENABLE,self::VALUE_CANNOT_TARGET_AGE_WITHOUT_GENDER,self::VALUE_CANNOT_TARGET_CITY,self::VALUE_CANNOT_TARGET_CONTENT_CONTEXTUAL_WITHOUT_CONTENT_NETWORK,self::VALUE_CANNOT_MODIFY_CONTENT_CONTEXTUAL,self::VALUE_CANNOT_TARGET_COUNTRY,self::VALUE_CANNOT_TARGET_COVERAGE,self::VALUE_CANNOT_TARGET_GENDER_WITHOUT_AGE,self::VALUE_CANNOT_TARGET_GOOGLE_SEARCH_FOR_CPM_CAMPAIGN,self::VALUE_CANNOT_TARGET_LANGUAGE,self::VALUE_CANNOT_TARGET_METRO,self::VALUE_CANNOT_TARGET_MOBILE_CARRIER,self::VALUE_CANNOT_TARGET_PROVINCE,self::VALUE_CANNOT_TARGET_SEARCH_SYNDICATION_WITHOUT_GOOGLE_SEARCH,self::VALUE_CANNOT_TARGET_SYNDICATABLE_TYPES,self::VALUE_CANNOT_TARGET_THE_SAME_TARGET_LIST_TYPE_MULTIPLE_TIMES,self::VALUE_DEMOGRAPHIC_BID_MODIFIER_SHOULD_BE_IN_BETWEEN_0_AND_500,self::VALUE_INVALID_CITY_CODE,self::VALUE_INVALID_CITYNAME_LENGTH,self::VALUE_INVALID_EXCLUDED_POLYGON_TARGET,self::VALUE_INVALID_EXCLUDED_PROXIMITY_TARGET,self::VALUE_INVALID_LANGUAGE_CODE,self::VALUE_INVALID_LATITUDE,self::VALUE_INVALID_LONGITUDE,self::VALUE_INVALID_METRO_CODE,self::VALUE_INVALID_MOBILE_CARRIER,self::VALUE_INVALID_MOBILE_PLATFORM,self::VALUE_INVALID_POSTALCODE_LENGTH,self::VALUE_INVALID_PROVINCE_CODE,self::VALUE_INVALID_PROXIMITY_RADIUS,self::VALUE_INVALID_REGIONCODE_LENGTH,self::VALUE_INVALID_REGIONNAME_LENGTH,self::VALUE_INVALID_STREETADDRESS_LENGTH,self::VALUE_MULTIPLE_OCCURRENCES_OF_SAME_TARGET,self::VALUE_POLYGON_DUPLICATE_VERTICES,self::VALUE_POLYGON_EDGES_INTERSECT,self::VALUE_POLYGON_TOO_FEW_VERTICES,self::VALUE_POLYGON_TOO_MANY_VERTICES,self::VALUE_POLYGON_TOO_LARGE,self::VALUE_TARGETING_VALIDATION_FAILED,self::VALUE_TARGETING_CROSS_COUNTRY_REGIONAL,self::VALUE_TARGETING_EXCLUSION_NOT_SUPPORTED,self::VALUE_TARGETING_INCOMPATIBLE_LOCATION_TYPES,self::VALUE_TARGETING_NOT_SUPPORTED,self::VALUE_TARGETING_TOO_MANY_REGIONS,self::VALUE_TOO_MANY_EXCLUDED_LOCATIONS,self::VALUE_TOO_MANY_TARGETED_LOCATIONS,self::VALUE_WARNING_MAY_NOW_REQUIRE_CHINESE_APPROVAL,self::VALUE_WARNING_NOW_REQUIRES_CHINESE_APPROVAL,self::VALUE_WARNING_NOW_TARGETS_CHINA,self::VALUE_WARNING_NOW_TARGETS_CHINESE,self::VALUE_TARGET_ERROR));
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