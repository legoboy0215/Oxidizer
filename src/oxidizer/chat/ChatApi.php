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
 * @link http://legendofmcpe.github.io/Oxidizer/
 *
 */

namespace oxidizer\chat;

use pocketmine\plugin\Plugin;

abstract class ChatApi{
	/**
	 * Registers a {@link ChatInjection}.
	 * @param ChatInjection $injection - the {@link ChatInjection} to inject
	 * @return void
	 */
	public abstract function inject(ChatInjection $injection);
	/**
	 * Returns an <code>array</code> of {@link ChatInjection} owned by <code>$plugin</code>.
	 * @param Plugin $plugin - the plugin to get {@link ChatInjection}s of.
	 * @return ChatInjection[] - an array of {@link ChatInjection}s owned by <code>$plugin</code>
	 */
	public abstract function getInjectionsBy(Plugin $plugin);
	/**
	 * Unregisters a {@link ChatInjection}.
	 * @param ChatInjection $injection - the {@link ChatInjection} to unregister.
	 * @return bool - whether the {@link ChatInjection} is successfully deleted. Returns <code>true</code> if the {@link ChatInjection} original exists.
	 */
	public abstract function uninject(ChatInjection $injection);

}
