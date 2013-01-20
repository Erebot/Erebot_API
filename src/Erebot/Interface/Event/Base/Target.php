<?php
/*
    This file is part of Erebot, a modular IRC bot written in PHP.

    Copyright © 2010 François Poirotte

    Erebot is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Erebot is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Erebot.  If not, see <http://www.gnu.org/licenses/>.
*/

/**
 * \brief
 *      Interface for an event which has a target.
 */
interface   Erebot_Interface_Event_Base_Target
extends     Erebot_Interface_Event_Base_Generic
{
    /**
     * Returns the target of the current message.
     * This will generally be the bot's nickname
     * or some other user's nickname.
     *
     * \retval string
     *      The target of this message.
     */
    public function getTarget();
}

