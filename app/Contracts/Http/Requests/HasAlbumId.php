<?php

/**
 * SPDX-License-Identifier: MIT
 * Copyright (c) 2017-2018 Tobias Reich
 * Copyright (c) 2018-2025 LycheeOrg.
 */

namespace App\Contracts\Http\Requests;

interface HasAlbumId
{
	/**
	 * @return string|null
	 */
	public function albumId(): ?string;
}
