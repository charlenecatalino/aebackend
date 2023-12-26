<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkups extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'checkups';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'checkup_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'medication_prescribed',
        'diagnosis',
        'referral',
        'appointment_id',
        'schedule_id',
    ];

    /**
     * Get the appointment associated with the checkup.
     */
    public function appointment()
    {
        return $this->belongsTo(Appointments::class, 'appointment_id', 'appointment_id');
    }

    /**
     * Get the doctor schedule associated with the checkup.
     */
    public function doctorSchedule()
    {
        return $this->belongsTo(DoctorSchedules::class, 'schedule_id', 'schedule_id');
    }
}
