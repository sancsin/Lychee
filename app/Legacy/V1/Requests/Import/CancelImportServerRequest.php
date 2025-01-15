<?php

/**
 * SPDX-License-Identifier: MIT
 * Copyright (c) 2017-2018 Tobias Reich
 * Copyright (c) 2018-2025 LycheeOrg.
 */

namespace App\Legacy\V1\Requests\Import;

use App\Contracts\Models\AbstractAlbum;
use App\Http\Requests\AbstractEmptyRequest;
use App\Policies\AlbumPolicy;
use Illuminate\Support\Facades\Gate;

class CancelImportServerRequest extends AbstractEmptyRequest
{
	/**
	 * {@inheritDoc}
	 */
	public function authorize(): bool
	{
		return Gate::check(AlbumPolicy::CAN_IMPORT_FROM_SERVER, AbstractAlbum::class);
	}
}
