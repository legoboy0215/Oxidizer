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
use pocketmine\plugin\Plugin;

interface RegisteredActionListener{
	/**
	 * @return Player|null
	 */
	public function getTargetPlayer();
	/**
	 * @return int
	 */
	public function getAction();
	/**
	 * @return Plugin
	 */
	public function getOwner();
	/**
	 * @return ActionListener
	 */
	public function getListener();
	/**
	 * @return int
	 */
	public function getRemainingSteps();
}
