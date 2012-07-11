<?php
/**
 * Class file for BingTypeSourceType
 * @date 02/07/2012
 */
/**
 * Class BingTypeSourceType
 * @date 02/07/2012
 */
class BingTypeSourceType extends BingWsdlClass
{
	/**
	 * Constant for value 'Spell'
	 * @return string 'Spell'
	 */
	const VALUE_SPELL = 'Spell';
	/**
	 * Constant for value 'Web'
	 * @return string 'Web'
	 */
	const VALUE_WEB = 'Web';
	/**
	 * Constant for value 'Image'
	 * @return string 'Image'
	 */
	const VALUE_IMAGE = 'Image';
	/**
	 * Constant for value 'RelatedSearch'
	 * @return string 'RelatedSearch'
	 */
	const VALUE_RELATEDSEARCH = 'RelatedSearch';
	/**
	 * Constant for value 'Phonebook'
	 * @return string 'Phonebook'
	 */
	const VALUE_PHONEBOOK = 'Phonebook';
	/**
	 * Constant for value 'Showtimes'
	 * @return string 'Showtimes'
	 */
	const VALUE_SHOWTIMES = 'Showtimes';
	/**
	 * Constant for value 'Weather'
	 * @return string 'Weather'
	 */
	const VALUE_WEATHER = 'Weather';
	/**
	 * Constant for value 'Video'
	 * @return string 'Video'
	 */
	const VALUE_VIDEO = 'Video';
	/**
	 * Constant for value 'Ad'
	 * @return string 'Ad'
	 */
	const VALUE_AD = 'Ad';
	/**
	 * Constant for value 'XRank'
	 * @return string 'XRank'
	 */
	const VALUE_XRANK = 'XRank';
	/**
	 * Constant for value 'InstantAnswer'
	 * @return string 'InstantAnswer'
	 */
	const VALUE_INSTANTANSWER = 'InstantAnswer';
	/**
	 * Constant for value 'News'
	 * @return string 'News'
	 */
	const VALUE_NEWS = 'News';
	/**
	 * Constant for value 'QueryLocation'
	 * @return string 'QueryLocation'
	 */
	const VALUE_QUERYLOCATION = 'QueryLocation';
	/**
	 * Constant for value 'MobileWeb'
	 * @return string 'MobileWeb'
	 */
	const VALUE_MOBILEWEB = 'MobileWeb';
	/**
	 * Constant for value 'Translation'
	 * @return string 'Translation'
	 */
	const VALUE_TRANSLATION = 'Translation';
	/**
	 * Constructor
	 * @return BingTypeSourceType
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
		return in_array($_value,array(self::VALUE_SPELL,self::VALUE_WEB,self::VALUE_IMAGE,self::VALUE_RELATEDSEARCH,self::VALUE_PHONEBOOK,self::VALUE_SHOWTIMES,self::VALUE_WEATHER,self::VALUE_VIDEO,self::VALUE_AD,self::VALUE_XRANK,self::VALUE_INSTANTANSWER,self::VALUE_NEWS,self::VALUE_QUERYLOCATION,self::VALUE_MOBILEWEB,self::VALUE_TRANSLATION));
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