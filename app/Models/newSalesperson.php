<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newSalesperson extends Model
{
    use HasFactory;
    public $table = 'new_salespeople';
    public $fillable=['full_name','Email_address','Teliphone','joind_date','current_route','Comments'];
}
