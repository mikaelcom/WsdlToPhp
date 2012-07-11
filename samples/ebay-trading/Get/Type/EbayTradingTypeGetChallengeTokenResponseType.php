<?php
/**
 * Class file for EbayTradingTypeGetChallengeTokenResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetChallengeTokenResponseType
 * Documentation : Response to GetChallengeToken request.
 * @date 04/07/2012
 */
class EbayTradingTypeGetChallengeTokenResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The ChallengeToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Botblock token that is used to validate that the user is a human and not a bot.
	 * @var string
	 */
	public $ChallengeToken;
	/**
	 * The ImageChallengeURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The URL of the image your application should display to the user for a botblock challenge.
	 * @var string
	 */
	public $ImageChallengeURL;
	/**
	 * The AudioChallengeURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The URL of the audio clip your application should provide for sight-impaired users. The audio clip corresponds to the image.
	 * @var string
	 */
	public $AudioChallengeURL;
	/**
	 * Constructor
	 * @param string ChallengeToken
	 * @param string ImageChallengeURL
	 * @param string AudioChallengeURL
	 * @return EbayTradingTypeGetChallengeTokenResponseType
	 */
	public function __construct($_ChallengeToken = null,$_ImageChallengeURL = null,$_AudioChallengeURL = null)
	{
		EbayTradingWsdlClass::__construct(array('ChallengeToken'=>$_ChallengeToken,'ImageChallengeURL'=>$_ImageChallengeURL,'AudioChallengeURL'=>$_AudioChallengeURL));
	}
	/**
	 * Set ChallengeToken
	 * @param string ChallengeToken
	 * @return string
	 */
	public function setChallengeToken($_ChallengeToken)
	{
		return ($this->ChallengeToken = $_ChallengeToken);
	}
	/**
	 * Get ChallengeToken
	 * @return string
	 */
	public function getChallengeToken()
	{
		return $this->ChallengeToken;
	}
	/**
	 * Set ImageChallengeURL
	 * @param string ImageChallengeURL
	 * @return string
	 */
	public function setImageChallengeURL($_ImageChallengeURL)
	{
		return ($this->ImageChallengeURL = $_ImageChallengeURL);
	}
	/**
	 * Get ImageChallengeURL
	 * @return string
	 */
	public function getImageChallengeURL()
	{
		return $this->ImageChallengeURL;
	}
	/**
	 * Set AudioChallengeURL
	 * @param string AudioChallengeURL
	 * @return string
	 */
	public function setAudioChallengeURL($_AudioChallengeURL)
	{
		return ($this->AudioChallengeURL = $_AudioChallengeURL);
	}
	/**
	 * Get AudioChallengeURL
	 * @return string
	 */
	public function getAudioChallengeURL()
	{
		return $this->AudioChallengeURL;
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