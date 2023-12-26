<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'appointments';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'appointment_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'appointment_date',
        'appointment_time',
        'symptoms',
        'comments',
        'status',
        'patient_id',
        'schedule_id',
        'staff_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'appointment_date' => 'date',
        'appointment_time' => 'time',
        'status' => 'boolean',
    ];

    /**
     * Get the patient associated with the appointment.
     */
    public function patient()
    {
        return $this->belongsTo(Patients::class, 'patient_id', 'patient_id');
    }

    /**
     * Get the schedule associated with the appointment.
     */
    public function schedule()
    {
        return $this->belongsTo(DoctorSchedules::class, 'schedule_id', 'schedule_id');
    }

    /**
     * Get the staff associated with the appointment.
     */
    public function staff()
    {
        return $this->belongsTo(Staffs::class, 'staff_id', 'staff_id');
    }

}
