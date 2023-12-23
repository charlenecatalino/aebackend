<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'patients';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'patient_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'password',
        'patient_first_name',
        'patient_last_name',
        'patient_marital_status',
        'patient_date_of_birth',
        'patient_gender',
        'patient_address',
        'patient_phone',
        'patient_email',
    ];

     /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'patient_date_of_birth' => 'date',
        'password' => 'hashed',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    protected $timestamps = false;
}
