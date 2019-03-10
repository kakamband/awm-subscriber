<?php
/**
 * @package awm-subscriber
 */

/**
 * AWM Subscriber
 * Copyright (C) 2020 Andrew Titenko
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see https://www.gnu.org/licenses/gpl-3.0.html.
 */

namespace inc\api\interfaces;

interface Integration {
  public function get_authorize_url();
  public function initialize($response_str);
  public function get($path);
  public function post($path, $payload);
}
