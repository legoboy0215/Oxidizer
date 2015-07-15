<?php

/*
 *
 *    _____          _     _ _
 *   / ___ \ __   __(_) __| (_)____ ___ _ ___
 *  | /   \ |\ \_/ /| |/ /| | |_  // _ | v __)
 *  | \___/ |/ _  / | | ()| | |/ /|  __| /
 *   \_____//_/ \_\ |_|\__/\|_|____\___|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author LegendsOfMCPE Team
 * @link http://legendofmcpe.github.io/oxidizer/
 *
 */

namespace oxidizer\invisible;

use pocketmine\plugin\Plugin;

interface InvisibleAttachment{
	/**
	 * Returns the plugin that requested the invisibility.
	 * @return Plugin
	 */
	public function getPlugin();
	/**
	 * Returns an identifier for the reason of the invisibility.<br>
	 * {@link InvisibleAttachment}s that have the same ID from the same plugin should have the same reason of being invisible.
	 * Therefore, each reason should have an ID unique within the owning plugin's scope.
	 * @return string
	 */
	public function getLocalReasonId();
}
