<?php

namespace App\Services;

use App\Models\Companies;

class CompanyService {
    public function save($data) {
        Companies::updateOrCreate(['id' => $data['id']], $data);
    }
}
