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

namespace oxidizer\chat;

use pocketmine\Player;
use pocketmine\plugin\Plugin;

/**
 * Abstract representation of a chat injection/modification. Examples include:
 * - chat prefixes
 * - chat suffixes
 * @package oxidizer\chat
 */
interface ChatInjection{
	/**
	 * Indicates that the {@link ChatInjection} should be placed in front of the player name as a <i>prefix</i>
	 */
	const TYPE_PREFIX = 1;
	/**
	 * Indicates that the {@link ChatInjection} should be placed after the player name as a <i>suffix</i>
	 */
	const TYPE_SUFFIX = 2;
	/**
	 * The expected return value for {@link ChatInjection}s without explicitly defined priority
	 */
	const DEFAULT_PRIORITY = 50;

	/**
	 * Indicates that the {@link ChatInjection} content is based on the <em>statistics</em> of the target player.
	 */
	const TIER_STATISTICS_BASED = 1;
	/**
	 * Indicates that the {@link ChatInjection} content is based on the <em>permissions</em> of the target player.<br>
	 * The definition of <em>permissions</em> includes but is not limited to:
	 * - special players, such as donators
	 * - staff members
	 * Players with different <em>permissions</em> injections <em>may</em> have different permission nodes.
	 */
	const TIER_PERMISSION_BASED = 2;
	/**
	 * Indicates that the {@link ChatInjection} content is based on the <em>virtual position</em> of the target player.<br>
	 * Common examples include world names and user-defined areas.
	 */
	const TIER_POSITION_BASED = 3;
	/**
	 * Indicates that the {@link ChatInjection} content is based on the <em>real geographical position</em> of the target player's IP, such as the country that the IP belongs to.
	 */
	const TIER_GEOLOCATION_BASED = 4;
	/**
	 * The {@link ChatInjection} falls into this tier if none of the other base tiers are applicable.
	 */
	const TIER_MISC = 15;
	/**
	 * Indicates that the {@link ChatInjection} content is a <em>text</em>.
	 */
	const TIER_FLAG_TEXT = 0x00;
	/**
	 * Indicates that the {@link ChatInjection} content is <em>numeric</em>.
	 */
	const TIER_FLAG_NUMERIC = 0x10;
	const DISPLAY_ALWAYS = 0;
	const DISPLAY_IF_ROOM = 1;
	/**
	 * Returns the type of the {@link ChatInjection}.<br>
	 * The return value should be one of:
	 * -# {@link #TYPE_PREFIX}
	 * -# {@link #TYPE_SUFFIX}
	 * @param Player $player - the {@link Player} to inject the {@link ChatInjection} upon.
	 * @return int - the type of the injection
	 */
	public function getType(Player $player);
	/**
	 * Returns the priority of the {@link ChatInjection}.
	 * <br>The implicit value is {@link #DEFAULT_PRIORITY}.
	 * @return int - the priority of the {@link ChatInjection}
	 */
	public function getPriority();
	/**
	 * Similar to the <a href="http://developer.android.com/reference/android/view/MenuItem.html#setShowAsAction(int)">Android showAsAction attribute</a>, this function returns the display preference of the {link ChatInjection}.
	 * Possible values:
	 * - {@link #DISPLAY_ALWAYS}
	 * - {@link #DISPLAY_IF_ROOM}
	 * @return int
	 */
	public function getDisplayPreference();
	/**
	 * Returns the tier of the {@link ChatInjection}.<br>
	 * A <em>tier</em> classifies the type of the <em>content</em> (instead of the position as in <em>type</em>) of the injection.
	 * The return value should be one of:
	 * -# {@link #TIER_STATISTICS}
	 * Optionally with the following bitmasks, combined with a bitmask <code>OR</code> (<code>|</code>):
	 * -# {@link #TIER_FLAG_TEXT} (this bitmask is the implicit flag)
	 * -# {@link #TIER_FLAG_NUMERIC}
	 * The tier will directly affect the position of the injection because the configuration file allows classifying and ordering injections according to their tiers.
	 * @return int - the tier of the {@link ChatInjection}
	 */
	public function getTier();
	/**
	 * Returns the plugin that owns the injection.<br>
	 * The injection is deleted when the owner plugin is disabled.
	 * @return Plugin - the owner plugin of the injection
	 */
	public function getOwnerPlugin();
	/**
	 * Returns the string that the {@link ChatInjection} represents to <code>$player</code>.
	 * @param Player $player - the {@link Player} to inject the {@link ChatInjection} upon.
	 * @return string - the {@link ChatInjection}'s value for the player.
	 */
	public function getText(Player $player);
}
