<?php

namespace Axsor\PhpIPAM\Models;

use Axsor\PhpIPAM\Facades\PhpIPAM;

class Address extends Model
{
    public function ping()
    {
        return PhpIPAM::ping($this);
    }

    public function update()
    {
        return PhpIPAM::addressUpdate($this, $this->except($this->getExceptKeys()));
    }

    public function drop()
    {
        return PhpIPAM::addressDrop($this);
    }

    public function getExceptKeys()
    {
        return [
            'id',
            'ip',
            'subnetId',
            'editDate',
            'lastSeen',
            'methods',
            'link',
        ];
    }
}
