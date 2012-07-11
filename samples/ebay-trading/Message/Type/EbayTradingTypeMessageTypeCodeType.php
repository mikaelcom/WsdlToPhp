<?php
/**
 * Class file for EbayTradingTypeMessageTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMessageTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeMessageTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'AskSellerQuestion'
	 * Meta informations :
	 * 	- documentation : Member to Member message initiated by bidder/potential bidder to a seller of a particular item.
	 * @return string 'AskSellerQuestion'
	 */
	const VALUE_ASKSELLERQUESTION = 'AskSellerQuestion';
	/**
	 * Constant for value 'ResponseToASQQuestion'
	 * Meta informations :
	 * 	- documentation : Member to Member message initiated as a response to an Ask A Question message.
	 * @return string 'ResponseToASQQuestion'
	 */
	const VALUE_RESPONSETOASQQUESTION = 'ResponseToASQQuestion';
	/**
	 * Constant for value 'ContactEbayMember'
	 * Meta informations :
	 * 	- documentation : Member to Member message initiated by any eBay member to another eBay member.
	 * @return string 'ContactEbayMember'
	 */
	const VALUE_CONTACTEBAYMEMBER = 'ContactEbayMember';
	/**
	 * Constant for value 'ContactTransactionPartner'
	 * Meta informations :
	 * 	- documentation : Member message between order partners within 90 days after creation of the order.
	 * @return string 'ContactTransactionPartner'
	 */
	const VALUE_CONTACTTRANSACTIONPARTNER = 'ContactTransactionPartner';
	/**
	 * Constant for value 'ResponseToContacteBayMember'
	 * Meta informations :
	 * 	- documentation : Member to Member message initiated as a response to a Contact eBay Member message.
	 * @return string 'ResponseToContacteBayMember'
	 */
	const VALUE_RESPONSETOCONTACTEBAYMEMBER = 'ResponseToContacteBayMember';
	/**
	 * Constant for value 'ContacteBayMemberViaCommunityLink'
	 * Meta informations :
	 * 	- documentation : Member to Member message initiated by any eBay member to another eBay member who has posted on a community forum within the past 7 days.
	 * @return string 'ContacteBayMemberViaCommunityLink'
	 */
	const VALUE_CONTACTEBAYMEMBERVIACOMMUNITYLINK = 'ContacteBayMemberViaCommunityLink';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future or internal use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constant for value 'All'
	 * Meta informations :
	 * 	- documentation : All message types.
	 * @return string 'All'
	 */
	const VALUE_ALL = 'All';
	/**
	 * Constant for value 'ContactMyBidder'
	 * Meta informations :
	 * 	- documentation : Member to Member message initiated by sellers to their bidders during an active listing.
	 * @return string 'ContactMyBidder'
	 */
	const VALUE_CONTACTMYBIDDER = 'ContactMyBidder';
	/**
	 * Constant for value 'ContacteBayMemberViaAnonymousEmail'
	 * Meta informations :
	 * 	- documentation : Member message initiated after eBay receives an email sent by an eBay member's email client to another eBay member.
	 * @return string 'ContacteBayMemberViaAnonymousEmail'
	 */
	const VALUE_CONTACTEBAYMEMBERVIAANONYMOUSEMAIL = 'ContacteBayMemberViaAnonymousEmail';
	/**
	 * Constant for value 'ClassifiedsContactSeller'
	 * Meta informations :
	 * 	- documentation : Indicates that an inquiry has been sent to the seller regarding the corresponding classified ad listing.
	 * @return string 'ClassifiedsContactSeller'
	 */
	const VALUE_CLASSIFIEDSCONTACTSELLER = 'ClassifiedsContactSeller';
	/**
	 * Constant for value 'ClassifiedsBestOffer'
	 * Meta informations :
	 * 	- documentation : Indicates that a best offer has been made on the seller's corresponding classified ad listing. This message type is only applicable to Classified categories that allow the Best Offer feature, such as motor vehicles.
	 * @return string 'ClassifiedsBestOffer'
	 */
	const VALUE_CLASSIFIEDSBESTOFFER = 'ClassifiedsBestOffer';
	/**
	 * Constructor
	 * @return EbayTradingTypeMessageTypeCodeType
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
		return in_array($_value,array(self::VALUE_ASKSELLERQUESTION,self::VALUE_RESPONSETOASQQUESTION,self::VALUE_CONTACTEBAYMEMBER,self::VALUE_CONTACTTRANSACTIONPARTNER,self::VALUE_RESPONSETOCONTACTEBAYMEMBER,self::VALUE_CONTACTEBAYMEMBERVIACOMMUNITYLINK,self::VALUE_CUSTOMCODE,self::VALUE_ALL,self::VALUE_CONTACTMYBIDDER,self::VALUE_CONTACTEBAYMEMBERVIAANONYMOUSEMAIL,self::VALUE_CLASSIFIEDSCONTACTSELLER,self::VALUE_CLASSIFIEDSBESTOFFER));
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