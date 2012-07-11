<?php
/**
 * Class file for EccRssCustomTypeRss
 * @date 03/07/2012
 */
/**
 * Class EccRssCustomTypeRss
 * @date 03/07/2012
 */
class EccRssCustomTypeRss extends EccRssCustomWsdlClass
{
	/**
	 * The channel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccRssCustomTypeArrayOfItem
	 */
	public $channel;
	/**
	 * Constructor
	 * @param EccRssCustomTypeArrayOfItem channel
	 * @return EccRssCustomTypeRss
	 */
	public function __construct($_channel = null)
	{
		parent::__construct(array('channel'=>new EccRssCustomTypeArrayOfItem($_channel)));
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
	 * @return EccRssCustomTypeArrayOfItem
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