<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'addeguzman2_gigs';

    protected $allowedFields = ['fname', 'email', 'venue', 'edate', 'details'];


}