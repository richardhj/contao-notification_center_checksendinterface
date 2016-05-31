<?php
/**
 * MessageDraftCheckSendInterface for the notification_center extension for Contao Open Source CMS
 *
 * Copyright (c) 2016 Richard Henkenjohann
 *
 * @package NotificationCenterCheckSendInterface
 * @author  Richard Henkenjohann <richardhenkenjohann@googlemail.com>
 */

namespace NotificationCenter\Gateway;


use NotificationCenter\Model\Message;

interface MessageDraftCheckSendInterface
{
	/**
	 * Check whether an exemplary draft can be send by means of a given message and gateway. In most cases this check
	 * looks for existing recipients
	 *
	 * @param Message $objMessage
	 *
	 * @return bool
	 * @throws \LogicException Optional with an error message
	 */
	public function canSendDraft(Message $objMessage);
}
