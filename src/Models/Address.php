<?php

namespace Axsor\PhpIPAM\Models;

use PhpIPAM;

class Address extends Model
{
    public function ping()
    {
        return PhpIPAM::ping($this->id);
    }

    public function edit()
    {
        return PhpIPAM::addressUpdate($this, $this->except($this->getExceptKeys()));
    }

    public function delete()
    {
        return PhpIPAM::addressDrop($this);
    }

    public function getExceptKeys()
    {
        return [
            'ip',
            'subnetId',
            'editDate',
            'lastSeen',
            'methods',
            'link',
        ];
    }
}