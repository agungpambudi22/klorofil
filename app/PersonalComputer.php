<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalComputer extends Model
{
    protected $fillable = ['id','asset_tag','ram','processor','mother_board','user_id','vga','hdmi','ps2port'];
}
