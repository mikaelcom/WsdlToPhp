<?php
/**
 * Class file for EbayTradingTypeTicketEventTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeTicketEventTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeTicketEventTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Any'
	 * Meta informations :
	 * 	- documentation : (in) Any event (applicable to US, UK, and DE)
	 * @return string 'Any'
	 */
	const VALUE_ANY = 'Any';
	/**
	 * Constant for value 'DE_ComedyAndKabarett'
	 * Meta informations :
	 * 	- documentation : (in) Comedy & Kabarett (Comedy and Cabaret)
	 * @return string 'DE_ComedyAndKabarett'
	 */
	const VALUE_DE_COMEDYANDKABARETT = 'DE_ComedyAndKabarett';
	/**
	 * Constant for value 'DE_FreizeitAndEvents'
	 * Meta informations :
	 * 	- documentation : (in) Freizeit & Events (Leisure and Events)
	 * @return string 'DE_FreizeitAndEvents'
	 */
	const VALUE_DE_FREIZEITANDEVENTS = 'DE_FreizeitAndEvents';
	/**
	 * Constant for value 'DE_KonzerteAndFestivals'
	 * Meta informations :
	 * 	- documentation : (in) Konzerte & Festivals (Concerts and Festivals)
	 * @return string 'DE_KonzerteAndFestivals'
	 */
	const VALUE_DE_KONZERTEANDFESTIVALS = 'DE_KonzerteAndFestivals';
	/**
	 * Constant for value 'DE_KulturAndKlassik'
	 * Meta informations :
	 * 	- documentation : (in) Kultur & Klassik (Culture and Classical)
	 * @return string 'DE_KulturAndKlassik'
	 */
	const VALUE_DE_KULTURANDKLASSIK = 'DE_KulturAndKlassik';
	/**
	 * Constant for value 'DE_MusicalsAndShows'
	 * Meta informations :
	 * 	- documentation : (in) Musicals & Shows
	 * @return string 'DE_MusicalsAndShows'
	 */
	const VALUE_DE_MUSICALSANDSHOWS = 'DE_MusicalsAndShows';
	/**
	 * Constant for value 'DE_Sportveranstaltungen'
	 * Meta informations :
	 * 	- documentation : (in) Sportveranstaltungen (Sporting Events)
	 * @return string 'DE_Sportveranstaltungen'
	 */
	const VALUE_DE_SPORTVERANSTALTUNGEN = 'DE_Sportveranstaltungen';
	/**
	 * Constant for value 'DE_Sonstige'
	 * Meta informations :
	 * 	- documentation : (in) Other events that are not the above Germany event types (applicable to listings on the DE site)
	 * @return string 'DE_Sonstige'
	 */
	const VALUE_DE_SONSTIGE = 'DE_Sonstige';
	/**
	 * Constant for value 'UK_AmusementParks'
	 * Meta informations :
	 * 	- documentation : (in) Amusement Parks (applicable to listings on the UK site)
	 * @return string 'UK_AmusementParks'
	 */
	const VALUE_UK_AMUSEMENTPARKS = 'UK_AmusementParks';
	/**
	 * Constant for value 'UK_Comedy'
	 * Meta informations :
	 * 	- documentation : (in) Comedy (applicable to listings on the UK site)
	 * @return string 'UK_Comedy'
	 */
	const VALUE_UK_COMEDY = 'UK_Comedy';
	/**
	 * Constant for value 'UK_ConcertsAndGigs'
	 * Meta informations :
	 * 	- documentation : (in) Concerts/Gigs (applicable to listings on the UK site)
	 * @return string 'UK_ConcertsAndGigs'
	 */
	const VALUE_UK_CONCERTSANDGIGS = 'UK_ConcertsAndGigs';
	/**
	 * Constant for value 'UK_ConferencesAndSeminars'
	 * Meta informations :
	 * 	- documentation : (in) Conferences/Seminars (applicable to listings on the UK site)
	 * @return string 'UK_ConferencesAndSeminars'
	 */
	const VALUE_UK_CONFERENCESANDSEMINARS = 'UK_ConferencesAndSeminars';
	/**
	 * Constant for value 'UK_ExhibitionsAndShows'
	 * Meta informations :
	 * 	- documentation : (in) Exhibitions/Shows (applicable to listings on the UK site)
	 * @return string 'UK_ExhibitionsAndShows'
	 */
	const VALUE_UK_EXHIBITIONSANDSHOWS = 'UK_ExhibitionsAndShows';
	/**
	 * Constant for value 'UK_Experiences'
	 * Meta informations :
	 * 	- documentation : (in) Experiences (applicable to listings on the UK site)
	 * @return string 'UK_Experiences'
	 */
	const VALUE_UK_EXPERIENCES = 'UK_Experiences';
	/**
	 * Constant for value 'UK_SportingEvents'
	 * Meta informations :
	 * 	- documentation : (in) Sporting events (applicable to listings on the UK site)
	 * @return string 'UK_SportingEvents'
	 */
	const VALUE_UK_SPORTINGEVENTS = 'UK_SportingEvents';
	/**
	 * Constant for value 'UK_TheatreCinemaAndCircus'
	 * Meta informations :
	 * 	- documentation : (in) Theatre/Cinema/Circus (applicable to listings on the UK site)
	 * @return string 'UK_TheatreCinemaAndCircus'
	 */
	const VALUE_UK_THEATRECINEMAANDCIRCUS = 'UK_TheatreCinemaAndCircus';
	/**
	 * Constant for value 'UK_Other'
	 * Meta informations :
	 * 	- documentation : (in) Other. Events that are not the above UK types (applicable to listings on the UK site)
	 * @return string 'UK_Other'
	 */
	const VALUE_UK_OTHER = 'UK_Other';
	/**
	 * Constant for value 'US_Concerts'
	 * Meta informations :
	 * 	- documentation : (in) Concerts (applicable to listings on the US site)
	 * @return string 'US_Concerts'
	 */
	const VALUE_US_CONCERTS = 'US_Concerts';
	/**
	 * Constant for value 'US_Movies'
	 * Meta informations :
	 * 	- documentation : (in) Movies (applicable to listings on the US site)
	 * @return string 'US_Movies'
	 */
	const VALUE_US_MOVIES = 'US_Movies';
	/**
	 * Constant for value 'US_SportingEvents'
	 * Meta informations :
	 * 	- documentation : (in) Sporting events (applicable to listings on the US site)
	 * @return string 'US_SportingEvents'
	 */
	const VALUE_US_SPORTINGEVENTS = 'US_SportingEvents';
	/**
	 * Constant for value 'US_Theater'
	 * Meta informations :
	 * 	- documentation : (in) Theater (applicable to listings on the US site)
	 * @return string 'US_Theater'
	 */
	const VALUE_US_THEATER = 'US_Theater';
	/**
	 * Constant for value 'US_Other'
	 * Meta informations :
	 * 	- documentation : (in) Events that are not concerts, movies, sporting events, or theater events (applicable to listings on the US site)
	 * @return string 'US_Other'
	 */
	const VALUE_US_OTHER = 'US_Other';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeTicketEventTypeCodeType
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
		return in_array($_value,array(self::VALUE_ANY,self::VALUE_DE_COMEDYANDKABARETT,self::VALUE_DE_FREIZEITANDEVENTS,self::VALUE_DE_KONZERTEANDFESTIVALS,self::VALUE_DE_KULTURANDKLASSIK,self::VALUE_DE_MUSICALSANDSHOWS,self::VALUE_DE_SPORTVERANSTALTUNGEN,self::VALUE_DE_SONSTIGE,self::VALUE_UK_AMUSEMENTPARKS,self::VALUE_UK_COMEDY,self::VALUE_UK_CONCERTSANDGIGS,self::VALUE_UK_CONFERENCESANDSEMINARS,self::VALUE_UK_EXHIBITIONSANDSHOWS,self::VALUE_UK_EXPERIENCES,self::VALUE_UK_SPORTINGEVENTS,self::VALUE_UK_THEATRECINEMAANDCIRCUS,self::VALUE_UK_OTHER,self::VALUE_US_CONCERTS,self::VALUE_US_MOVIES,self::VALUE_US_SPORTINGEVENTS,self::VALUE_US_THEATER,self::VALUE_US_OTHER,self::VALUE_CUSTOMCODE));
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