<?php
/**
 * Class file for EccVideoMsnTypeRss
 * @date 03/07/2012
 */
/**
 * Class EccVideoMsnTypeRss
 * @date 03/07/2012
 */
class EccVideoMsnTypeRss extends EccVideoMsnWsdlClass
{
	/**
	 * The channel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccVideoMsnTypeArrayOfItem
	 */
	public $channel;
	/**
	 * Constructor
	 * @param EccVideoMsnTypeArrayOfItem channel
	 * @return EccVideoMsnTypeRss
	 */
	public function __construct($_channel = null)
	{
		parent::__construct(array('channel'=>new EccVideoMsnTypeArrayOfItem($_channel)));
	}
	/**
	 * Set channel
	 * @param ArrayOfItem channel
	 * @return ArrayOfItem
	 */
	public function setChannel($_channel)
	{
		return ($this->channel = $_channel);
	}
	/**
	 * Get channel
	 * @return EccVideoMsnTypeArrayOfItem
	 */
	public function getChannel()
	{
		return $this->channel;
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