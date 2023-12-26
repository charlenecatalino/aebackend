<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referrals extends Model
{
    use HasFactory;

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'referrals';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'referral_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'referral_date',
        'referral_reason',
        'referral_description',
        'facility_name',
        'facility_address',
        'contact_number',
        'checkup_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'referral_date' => 'date',
    ];

    /**
     * Get the checkup associated with the referral.
     */
    public function checkup()
    {
        return $this->belongsTo(Checkups::class, 'checkup_id', 'checkup_id');
    }
}
