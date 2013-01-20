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
 *      An abstract Event containing some text.
 */
abstract class  Erebot_Event_WithTextAbstract
extends         Erebot_Event_Abstract
implements      Erebot_Interface_Event_Base_Text
{
    /// Content of this event.
    protected $_text;

    /**
     * Creates a new event containing some text.
     *
     * \param Erebot_Interface_Connection $connection
     *      The connection this event came from.
     *
     * \param string $text
     *      Text contained in this event.
     */
    public function __construct(
        Erebot_Interface_Connection $connection,
                                    $text
    )
    {
        parent::__construct($connection);
        $this->_text = new Erebot_TextWrapper((string) $text);
    }

    /// \copydoc Erebot_Interface_Event_Base_Text::getText()
    public function getText()
    {
        return $this->_text;
    }
}

