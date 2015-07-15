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

namespace oxidizer\action;

use pocketmine\Player;

interface ActionApi{
	const ACTION_CHAT = 0;
	const ACTION_TOUCH_BLOCK = 1;
	const ACTION_BREAK_BLOCK = 2;
	const ACTION_INTERACT_BLOCK = 3;
	const ACTION_INTERACT_AIR = 4;
	const ACTION_INTERACT = 5;
	const ACTION_CLICK_ENTITY = 6;
	/**
	 * Registers an {@link ActionListener}.
	 * @param Player $player - the {@link Player} to do the action
	 * @param int $action - the action to pend
	 * @param ActionListener $listener - the action
	 * @param boolean $force default <code>false</code> - unregisters any other pending action listeners.
	 * @param int $steps default 1 - the number of actions to pend for.
	 * @return boolean - whether the pending action has been successfully registered.
	 */
	public function pendAction(Player $player, $action, ActionListener $listener, $force = false, $steps = 1);
}
